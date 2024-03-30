<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return response()->json(["health" => "active"]);
})->middleware("headers");

Route::get("/keygen", function () {

    //send this code to mail and verify code
    //if verified code == backend code => email.confirmed
    //else email not confirmed

    //genarate otp number from password :D (for confirmation)
    //return \Illuminate\Support\Str::password(16, false, true, false, false);

    //generate otp number
    $length_otp = 6;
    $stack_otp = [];
    for ($index = 0; $index <= $length_otp; $index++) {
        array_push($stack_otp, mt_rand(0, 9));
    }

    //joined return
    return join($stack_otp);

    //or array return
    //return $stack_otp;

});
