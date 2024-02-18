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

Route::get('/', function () {
    return view('welcome');
});

//FOR GET REQUEST ALL PRODUCTS [CONTROLLER::index]
Route::get("/products", function () {
    return "[GET::Request]" . url("/products");
});

//FOR GET REQUEST TARGET PRODUCT [CONTROLLER::show]
Route::get("/products/{id}", function ($id) {
    return "[GET::Request]" . url("/products/{$id}");
});

//FOR POST RUQUEST ADD PRODUCTS [CONTROLLER::store]
Route::post("/products", function () {
    return "[POST::Request]" . url("/products");
});

//FOR PUT REQUEST FULLY EDIT PRODUCT [CONTROLLER::update]
Route::put("/products/{id}", function ($id) {
    return "[PUT::Request]" . url("/products/{$id}");
});

//FOR PUT REQUEST PARTLY EDIT PRODUCT [CONTROLLER::update]
Route::patch("/products/{id}", function ($id) {
    return "[PATCH::Request]" . url("/products/{$id}");
});

//FOR DELETE REQUEST DELETE PRODUCT [CONTROLLER::destroy]
Route::delete("/products/{id}", function ($id) {
    return "[DELETE::Request]" . url("/products/{$id}");
});
