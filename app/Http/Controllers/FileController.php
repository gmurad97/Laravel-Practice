<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {
        return view("form_file_send");
    }

    public function store(Request $request)
    {
        if($request->hasFile("img_file")){
            $file = $request->file("img_file");
            Storage::disk("public")->put("image", $file);
            return $file->hashName();
        }

        return response()->json(["status"=>"failed", 400]);
    }

    public function show($id){
        return view("")->with("id", $id);
    }
}
