<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\Admin\Wares\Category\Store;
use Illuminate\Http\Request;

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

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        if ($request->isMethod('PATCH')) {
            $category->update(['name' => $request->name]);

            return back();
        } else {
            $category->update(['active' => $category->active ? 0 : 1]);

            return response()->json($category->active);
        }
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->products()->delete();
        $category->delete();

        return response()->json('Category deleted');
    }
}
