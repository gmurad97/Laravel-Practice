<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view("dashboard");
})->name("dashboard");



Route::prefix("/posts")->group(function () {
    //temp views
    Route::get('/', function () {
        return view("post.list");
    })->name("post.list");

    //temp views
    Route::get('/create', function () {
        return view("post.create");
    })->name("post.create");

    //temp views
    Route::get('/edit', function () {
        return view("post.edit");
    })->name("post.edit");
});
