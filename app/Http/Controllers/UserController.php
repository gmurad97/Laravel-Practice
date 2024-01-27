<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "Home Page!";
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
