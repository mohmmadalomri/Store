<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class PagesController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('store.index', compact('products'));
    }


    // public function show($id)
    // {
    //     $product=Product::all();
    //     $category=Category::all();
    //     $tags=Tag::all();
    //     return view('store.product{$id}',compact('product','category','tags'));
    // }
}
