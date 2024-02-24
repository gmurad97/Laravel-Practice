<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        foreach ($categories as $category){
            dump($category->name);
        }
    }

    public function show($id)
    {
        dd("get target data");
    }

    public function store()
    {
        dd("adding data");
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod("PATCH")) {
            dd("partial update target data");
        } elseif ($request->isMethod("PUT")) {
            dd("fully update target data");
        } else {
            dd("method not allowed");
        }
    }


    public function destroy($id)
    {
        dd("delete target data");
    }
}
