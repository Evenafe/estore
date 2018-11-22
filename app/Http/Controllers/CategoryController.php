<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\Admin\Wares\Category\Store;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.wares.categories.index', compact('categories'));
    }

    public function store(Store $request)
    {
        Category::create($request->all());

        return back();
    }

    public function show($id)
    {
        $category = Category::find($id);
        $products = $category->products;

        return view('admin.wares.categories.category.index', compact('category', 'products'));
    }

    public function update($id)
    {
        $category = Category::findOrFail($id);
        $category->update(['active' => $category->active ? 0 : 1]);

        return response()->json($category->active);
    }

    public function destroy($id)
    {
        Category::destroy($id);

        return response()->json('Deleted');
    }
}
