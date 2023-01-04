<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcherInterface;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('products.index', compact('products', 'categories'));
    }
    public function gettrashed()
    {

        $products = Product::onlyTrashed()->get();

        return view('products.trashed', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        $product = new Product();
        $categories = Category::all();
        $tags = Tag::all();
        $tags = Tag::pluck('name')->toArray();
        return view('products.create', [
            'product' => $product,
            'categories' => $categories, 'tags' => $tags
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $main_image = $request->file('main_image');
        if ($request->hasFile('main_image')) {

            if ($main_image->isValid()) {
                $imageurl = $main_image->store('products', 'public');
                $product->image = $imageurl;
            }
        }
        // $images = $request->file('images');
        // if ($request->hasFile('images')) {

        //     if ($images->isValid()) {
        //         $imageurl = $images->store('products', 'public');
        //         $product->images = $imageurl;
        //     }
        // }
        if ($request->tags) {
            $tagIds = [];
            $tags = json_decode($request->tags);
            foreach ($tags as $item) {
                $tag = Tag::where('name', $item->value)->first();
                if (!$tag) {
                    $tag = Tag::create([
                        'name' => $item->value,
                        'slug' => Str::slug($item->value)
                    ]);
                }
                $tagIds[] = $tag->id;
            }
            $product->tags()->attach($tagIds);
        }


        $product->save();
        return redirect('/products')->with('done', 'product add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('images', 'category', 'tag')->findOrFail($id);
        return view('store.product', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $product = Product::FindOrFail($id);
        $products = Product::where('id', '<>', $id)->get();

        return view('products.edit', compact('product', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = Product::FindOrFail($id);
        $product->update($request->all());
        return redirect('/products')->with('done', 'product updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/products')->with('done', 'product dleted');
    }

    public function deletetrashed($id)
    {
        $product = Product::findOrFail($id);
        dd($product);
        $product->forceDelete();

        return redirect('products.trashed')->with('done', 'product dleted');
    }
}
