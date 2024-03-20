<?php

use App\Http\Middleware\LanguageMiddleware;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lang', function () {
})->middleware(LanguageMiddleware::class);

Route::get('/krot', function () {
    App::setLocale('az');
    return view('krot');
});

Route::get("/sess",function (){
    session()->put("sess_custom","my_sess_value");
    dd(session()->all());

    //cookies put and get only sending request
});

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

/*
LOCALIZATION DB=>TABLE->localization
foreign key to post.title->key
id      key         en          az          ru
1       word.key    word.en     word.az     word.ru
*/
