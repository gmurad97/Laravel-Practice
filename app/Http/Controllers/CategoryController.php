<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class CategoryController extends Controller
{
    public function index1():never
    {
        dd("get all data");
    }
   #[NoReturn]public function index2():void
    {
        dd("get all data");
    }
    #[NoReturn]public function index3()
    {
        dd("get all data");
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
