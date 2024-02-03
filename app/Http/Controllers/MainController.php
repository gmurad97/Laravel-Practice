<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class MainController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function create(Request $req)
    {
        $validated_data = $req->validate([
            "title" => "required|min:1|max:16"
        ]);

        return $validated_data["title"];
    }
}
