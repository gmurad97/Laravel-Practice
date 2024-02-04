<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ShopController;
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

Route::get("/", [HomeController::class, "index"]);
Route::get("/home", [HomeController::class, "index"]);
Route::get("/shop", [ShopController::class, "index"]);
Route::get("/category", [CategoryController::class, "index"]);
Route::get("/news", [NewsController::class, "index"]);
Route::get("/admin", [AdminController::class, "index"]);
Route::get("/contact", [ContactController::class, "index"]);
Route::get("/about", [HomeController::class, "index"]);
