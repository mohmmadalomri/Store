<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{

    public  function index()
    {
        $cart = Cart::where('uuid', $this->getCartId())
            ->orWhere('user_id', Auth::id())->get();
        $total = $cart->sum(function ($item) {
            return $item->quantity * $item->product->price;
        });

        return view('cart', compact('cart', 'total'));
    }


    public function checkout()
    {
        $cart = Cart::where('uuid', $this->getCartId())
            ->orwhere('user_id', Auth::id())->get();
        if ($cart->count() == 0) {
            abort(404);
        }
        $total = $cart->sum(function ($item) {
            return $item->quantity * $item->product->price;
        });
        return view('store.checkout', compact('cart', 'total'));
    }

    public  function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|min:1'
        ]);

        $cart = Cart::where('uuid', $this->getCartId())
            ->where('product_id', $request->product_id)->first();
        $quantity = $request->post('quantity', 1);
        if ($cart) {
            $cart->increment('quantity', $quantity);
        } else {
            $cart = Cart::create([
                'uuid' => $this->getCartId(),
                'product_id' => $request->post('product_id'),
                'user_id' => Auth::id(),
                'quantity' => $quantity
            ]);
        }

        return redirect()->back()->with('don', 'don');
    }


    public function getCartId()
    {

        $cart = Cookie::get('cart_id', Str::uuid());
        if (!$cart) {

            Cookie::queue('cart_id', Str::uuid(), 10);
        }
        return $cart;
    }

    public function update(Request $request)
    {
        foreach ($request->item as $item_id => $quantity) {
            $cart = Cart::where('id', $item_id)
                ->where('uuid', $this->getCartId())->first();
            $cart = Cart::where('id', $item_id)
                ->where('uuid', $this->getCartId())->update([
                    'quantity' => $quantity
                ]);
        }
        return redirect()->back()->with('done', "cart udated");
    }
    public function itemDestroy($id)
    {
        Cart::where('id', $id)->where('uuid', $this->getCartId())->delete();
        return redirect()->back()->with('done', '"product deleted');
    }

    public function destroy()
    {
        Cart::where('uuid', $this->getCartId())
            ->orwhere('user_id', Auth::id())->delete();
        Cookie::expire('cart_id');
        return redirect()->back()->with('don', "Proeudct deleted");
    }
}
