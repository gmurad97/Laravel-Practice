<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormBaseRequest;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class FormTestController extends Controller
{
    public function index()
    {
        return view("form_test");
    }

    public function post_request_func(FormBaseRequest $request)
    {
        return $request;
    }
}
