<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OrderController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'country' => 'required'
        ]);
        $cart = Cart::where('uuid', $this->getCartId())
            ->orwhere('user_id', Auth::id())->get();
        $total = $cart->sum(function ($item) {
            return $item->quntity * $item->product->price;
        });
        $request['total'] = $total;
        DB::beginTransaction();
        try {
            $order = Order::create($request->all());
            foreach ($cart as $item) {
                OrderProduct::create([
                    'product_id' => $item->porduct_id,
                    'order_id' => $order->id,
                    'quantity' => $item->quantity,
                    'price' => $item->product->price

                ]);
            }
            Cart::where('uuid', $this->getCartId())
                ->orwhere('user_id', Auth::id())->delete();
            if ($request->has('create_account')) {
                $user = User::create([
                    'name' => $request->first_name . '' . $request->last_name,
                    'username' => $request->first_name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                ]);
                event(new Registered($user));
                Auth::login($user);
            }

            DB::commit();
        } catch (\Throwable $exception) {
            DB::rollBack();
            return redirect()->back()->with('error', "error please try again");
        }

        return view('store.index')->with('don', "yor order has been created");
    }
}
