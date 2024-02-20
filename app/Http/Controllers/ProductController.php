<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("Product.index", compact("products"));
    }

    public function show($id)
    {
        return "[ID:{$id}]Product";
    }

    public function store()
    {
        return "[ADD]Product";
    }

    public function update(Request $req, $id)
    {
        if ($req->isMethod("put")) {
            return "[FULLY EDIT; ID:{$id}]Product";
        } else {
            return "[PARTLY EDIT; ID:{$id}]Product";
        }
    }

    public function destroy($id)
    {
        return "[DELETE; ID:{$id}]Product";
    }
}
