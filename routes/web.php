<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/file", [FileController::class, "index"])->name("file.index");
Route::post("/file", [FileController::class, "store"])->name("file.store");
