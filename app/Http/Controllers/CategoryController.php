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

    public function store(Store $store)
    {
        $category = new Category();
        $category->name = $store->name;
        $category->save();

        return back();
    }

    public function show($id)
    {
        $category = Category::find($id);

        return view('admin.wares.categories.category.index', compact('category'));
    }
}
