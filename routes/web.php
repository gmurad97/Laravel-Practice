<?php

use App\Http\Middleware\LanguageMiddleware;
use App\Models\Localization;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/send-message", function () {
    Mail::raw("ehehehe it is work!!!", function ($mail) {
        $mail->to("murad.dev@bk.ru")->subject("Laravel");
    });
});

Route::get('/lang', function () {
})->middleware(LanguageMiddleware::class);

Route::get('/krot', function () {
    /*     $arr = ["az", "ru", "en"];
        $currentLang = session()->get("lang");
        if(!in_array($currentLang, $arr)){
            //set default lang
            session()->put("lang","en");
            app()->setLocale(session()->get("lang"));
        }
        app()->setLocale(session()->get("lang"));
        return view('krot'); */
    /*     return storage_path(); */
    // Static
/*     App::setLocale('az');
    return view('krot'); */

    //dynamic data without controller & services for fast test sorry!
/*     App::setLocale('ru');
    $testing = Localization::where("key",'dynamic')->get(app()->getLocale())->first();

    dd($testing); */
    // return dynamic key to value ^_^ complete

    /*
    my old method json=>json encode decode for light website
    my new method new table and unique key pair for commercial website


    algoritm for session

    $arr = ["az", "ru", "en"];
    $currentLang = session()->get("lang");
    if(!in_array($currentLang, $arr)){
        //set default lang
        session()->put("lang","en");
        app()->setLocale("en");
    }

    app()->setLocale("current_lang_from_Argsss")

    redirect()->back();

    */
});

Route::get("/sess", function () {
    session()->put("sess_custom", "my_sess_value");
    dd(session()->all());

    //cookies put and get only sending request
});

Route::group(
    [
        "prefix" => "/categories",
        "namespace" => "App\Http\Controllers\Category"
    ],
    function () {
        Route::get('/', IndexController::class)->name("kuska"); // not error, namespace in grouped!!!
        Route::get('/{id}', ShowController::class); // not error, namespace in grouped!!!
        Route::post('/', StoreController::class)->name('category.store'); // not error, namespace in grouped!!!
        Route::patch('/{id}', UpdateController::class); // not error, namespace in grouped!!!
        Route::delete('/{id}', DestroyController::class); // not error, namespace in grouped!!!
    }
);

/*
LOCALIZATION DB=>TABLE->localization
foreign key to post.title->key
id      key         en          az          ru
1       word.key    word.en     word.az     word.ru
*/
