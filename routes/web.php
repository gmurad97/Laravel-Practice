<?php

use App\Exceptions\CustomOverideException;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;


Route::get("/ajax", function () {
    return response()->json(
        [
            "status" => "success",
            "response_code" => "200",
            "user_info" => [
                "uid" => "1",
                "type" => "Administrator"
            ]

        ],
        200
    );
});

Route::get("/ajax-resp", function () {
    return view("ajax_template");
});

//Customize 404NotFound Start
Route::fallback(function () {
    return view("404adm");
})->where("router", "admin.*");

Route::get("/admin", function () {
    return "admin panel ^_^";
});
//Customize 404NotFound end

Route::get("/except", function () {
    try {
        return 2 / 0; //error for throwed exception
    } catch (DivisionByZeroError $e) {
        throw new CustomOverideException();
    }
    //tested!work
});

Route::get("/transaction", function () {
    //DANGER!TRANSACTION!THIS CODE FROM APP/SERVICE not for use this code in route

    //BeginTrasaction - for observing db changes
    DB::beginTransaction();

    try {
        //CRUD
        //Operation
        User::create([
            "name" => "for_test",
            "email" => "for_test",
            "password" => bcrypt("for_test"),
        ]);
        //success operation - commit
        DB::commit();
    } catch (Exception $e) {
        //if error - rollbacked db
        DB::rollBack();
        Log::error("Error!", [$e->getMessage()]);
    }


});

Route::get('/resize-image', function () {
    $image_path = storage_path("app\private\spider.jpg");
    $image_new_path = storage_path("app\private\\resized\spider.jpg");
    $image_ext = "jpg";
    $image = Image::make($image_path);
    $image->save($image_new_path, 60, $image_ext);
});

// laravel stock page start
Route::get('/', function () {
    return view('welcome');
});
// laravel stock page end

Route::get('/str-captcha', function () {
    return \Mews\Captcha\Facades\Captcha::create();
});

Route::get("/captcha", function () {
    return view("form_recaptcha");
});

Route::post("/captcha/verify", function (Request $request) {

    $secretKey = env("GOOGLE_RECAPTCHA_V2_SECRET_KEY");
    $grecaptcha = $request->input("g-recaptcha-response");
    $remoteIp = $request->ip();

    $response = Http::withoutVerifying()->asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
        "secret" => $secretKey,
        "response" => $grecaptcha,
        "remoteip" => $remoteIp
    ]);

    $response = $response->json();

    if ($response["success"]) {
        return response()->json(["status" => "reCapTCHA verification successful. Form submitted."], 200);
    } else {
        return response()->json(["status" => "reCapTCHA verification failed. Please try again."], 400);
    }


})->name("captcha.verify");

Route::get('/test', function () {
    return response()->json(["health" => "active"]);
})->middleware("headers");

Route::get("/keygen", function () {

    //send this code to mail and verify code
    //if verified code == backend code => email.confirmed
    //else email not confirmed

    //genarate otp number from password :D (for confirmation)
    //return \Illuminate\Support\Str::password(16, false, true, false, false);

    //generate otp number
    $length_otp = 6;
    $stack_otp = [];
    for ($index = 0; $index <= $length_otp; $index++) {
        array_push($stack_otp, mt_rand(0, 9));
    }

    //joined return
    return join($stack_otp);

    //or array return
    //return $stack_otp;

});
