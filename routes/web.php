<?php

use App\Http\Middleware\LanguageMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lang', function () {
})->middleware(LanguageMiddleware::class);

Route::group(
    [
        "prefix" => "/categories",
        "namespace" => "App\Http\Controllers\Category"
    ],
    function () {
        Route::get('/', IndexController::class)->name("kuska");
        Route::get('/{id}', ShowController::class);
        Route::post('/', StoreController::class)->name('category.store');
        Route::patch('/{id}', UpdateController::class);
        Route::delete('/{id}', DestroyController::class);
    }
);
