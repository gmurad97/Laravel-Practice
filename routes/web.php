<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(
    [
        "prefix" => "/categories",
        "namespace" => "App\Http\Controllers\Category"
    ],
    function () {
        Route::get('/', IndexController::class)->name("kuska");
        Route::get('/{id}', ShowController::class);
        Route::post('/', StoreController::class);
        Route::patch('/{id}', UpdateController::class);
        Route::delete('/{id}', DestroyController::class);
    }
);
