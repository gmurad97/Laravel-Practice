<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UserController extends Controller
{
    public function index()
    {
        $x = Post::find(1);
        dd($x->title);
    }

    public function about()
    {
        return "About Page!";
    }

    public function contact()
    {
        return "Contact Page!";
    }
}
