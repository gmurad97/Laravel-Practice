<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormTestController extends Controller
{
    public function index()
    {
        return view("form_test");
    }

    public function post_request_func(Request $request)
    {
        $kyc = $request->request->all();

        if (str_contains($request->age_check, "on")) {
            dump("success");
        } else {
            dump("error");
        }

        dd($kyc);
    }
}
