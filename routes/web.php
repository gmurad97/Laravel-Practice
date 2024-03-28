<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;
use Telegram\Bot\Api;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/file", [FileController::class, "index"])->name("file.index");
Route::post("/file", [FileController::class, "store"])->name("file.store");

Route::get("/telegram-send", function () {
    $telegram = new Api("6365889409:AAFeJ6o_X-pXjtPgjqS1tDePN7kdR96zuhY"); //test key
    $response = $telegram->getUpdates(); //ssl error
    dd($response);
});
