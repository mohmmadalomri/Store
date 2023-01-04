<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\CssSelector\Node\FunctionNode;

class CategoryController extends Controller
{


    public function index()
    {
        $categories = Category::all();
        return view('categories.index', ['categories' => $categories]);
        // return view('categories.index', compact('categories'));
        // return view('categories.index')->with('categoies',$categories);

    }



    public function create()
    {
        $categories = Category::all();
        $category = new Category();
        return view('categories.create', ['category' => $category])->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->slug = Str::slug($request->name);
        $image = $request->file('image');
        if ($request->hasFile('image')) {

            $imageurl = $image->store('categories', 'public');
            $category->image=$imageurl;
        }



        $category->save();
        return redirect('/categories')->with('done', 'Category added');
    }

    public function edit($id)
    {
        $category = Category::findOrfail($id);
        $categories = Category::where('id', '<>', $id)->get();
        return view('categories.edit', compact('category', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request['slug'] = Str::slug($request->name);
        $category->update($request->all());
        return redirect('/categories')->with('done', 'category update');
    }



    public function destroy($id)
    {
        $category = Category::findOrfail($id);

        $category->delete();
        return redirect('categories')->with('done', 'Category dleted');
    }




    public function rules()
    {


        return [
            'name' => 'required|max:20|string|min:3',
            'description' => 'required|max:20|string',
            'image' => 'mimes:png',
            'parint_id' => 'nullable|existes:categories,id'
        ];
    }
}
