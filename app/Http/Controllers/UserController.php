<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UserController extends Controller
{
    public function index()
    {
/*         Post::create([
            "title" => "first created title",
            "content" => "first created content",
            "image" => "first created image",
            "likes" => 50,
            "is_published" => TRUE
        ]); */

        Post::create([
            "title"=> "second created title",
            "content" => "second created content",
            "image" => "second created image",
            "likes" => 100,
            "is_published" => TRUE
        ]);

        Post::create([
            "title" => "drop",
            "content" => "drop con",
            "image" => "drop image",
            "likes" => "ываывавы"
        ]);
    }

    public function about()
    {
        return "About Page!";
    }

    public function contact()
    {
        $data_merge = [
            "data" => "data1"
        ];
        return view("contact",compact($data_merge));
    }
}
