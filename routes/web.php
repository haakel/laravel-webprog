<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/about', function () {
//     // return "About Page";
//     // return "<a href='/contact'> Contact Page </a>";
//     return "<a href='" . route('contact', [15, "ABC"]) . "'> Contact Page </a>";
// })->name('about');

Route::get("/about", function () {
    $srt = "test about";
    $srt2 = "test2 about2";
    return view('about',["text"=> $srt , "text2" => $str2]);
})->name('about');

Route::get("/contact", function () {
    return view('contact.text.index');
})->name('about');

// Route::post("/", function () {
//     return "Post Request";
// })->name('post');



// Route::get('/contact/test/{id}/{name}', function ($id, $name) {
//     return "Contact Page, id: $id, name: $name";
// })->name('contact');

Route::group(['prefix' => 'users'], function () {
    Route::get('/', function () {
        return "Users List";
    });

    Route::get('/create', function () {
        return "Users Create";
    });

    Route::get('/{id}', function ($id) {
        return "Users id: $id";
    });
});


Route::fallback(function () {
    return "404 Not Found";
});
