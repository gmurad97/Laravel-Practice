<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth', function () {
/*     User::create([
        'name'=> '',
        'email'=> '',
        'password'=> bcrypt(''),
    ]);

    Auth::attempt(["email"=>"","password"=> bcrypt("")]); //finding and login
    Auth::logout(); */

});
