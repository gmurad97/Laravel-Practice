<?php

namespace App\Http\Controllers;

use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
//        $page_title = "Home";
        return view("home",compact("categories","page_title"));
    }
}
