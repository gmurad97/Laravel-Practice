<?php

use App\Services\RandomStringService;
use Illuminate\Support\Facades\Route;

Route::get("/doc", function () {
    // return App::environment();
    // Config::
    return env("APP_ENV");
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    /*     $data = \App\Models\Localization::where("key","title.name.dynamic")->first();
        dd($data->en); // $data["en"] */
    App::setLocale('az');//global set language
    //session for save memory
    //or Session facades
    //Session::put('lang','en');
    return view("post_template");
});

Route::get("/rnd", function () {
    $rndtor = app(RandomStringService::class);
    return $rndtor->generateRandomString();
});
