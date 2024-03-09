<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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


//laravel - fakename
//welcome - page_name
//route_name_laravel - route name for fakename

/* Route::get("/laravel", function () {
    return view("welcome");
})->name("route_name_laravel"); */

/* Route::get("/hello/{value?}", function ($value = null) {
    return "hello world ".$value;
}); */

/* Route::get("/hello/{value}", function ($value) {
    return "hello world ".$value;
}); */


/* Route::group(["prefix"=> ""], function () {

}); */

/* Route::prefix("admin")->group(function () {

    Route::get("login", function(){
        return "login page";
    });

    Route::get("register", function(){
        return "register";
    });

});
 */


//Categories
Route::get("/categories", [CategoryController::class, "index"]);
Route::get("/categories/{id}", [CategoryController::class, "show"])->name("categories.show");
Route::post("/categories", [CategoryController::class, "store"]);
Route::patch("/categories/{id}", [CategoryController::class, "update"]);
Route::delete("/categories/{id}", [CategoryController::class, "destroy"]);

//Products
/* Route::get("/products", [ProductController::class, "index"]);
Route::get("/products/{id}", [ProductController::class, "show"]);
Route::post("/products", [ProductController::class, "store"]);
Route::patch("/products/{id}", [ProductController::class, "update"]);
Route::delete("/products/{id}", [ProductController::class, "destroy"]); */
