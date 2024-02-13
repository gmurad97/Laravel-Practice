<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        Category::where();
        $categories = Category::create(request()->all());
        return view('categories.index', compact('categories'));
    }
}
