<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::get('/', function () {
//     $blogs = [
//         ['title' => 'Blog 1', 'content' => 'Content of blog 1',"status" => "1"],
//         ['title' => 'Blog 2', 'content' => 'Content of blog 2', "status" => "0"],
//         ['title' => 'Blog 3', 'content' => 'Content of blog 3', "status" => "1"],
//         ['title' => 'Blog 4', 'content' => 'Content of blog 4', "status" => "0"],
//         ['title' => 'Blog 5', 'content' => 'Content of blog 5', "status" => "1"]
//     ];

//     return view('home',compact('blogs'));
// })->name('home');

Route::get('/',[HomeController::class,"index"])->name('home');
Route::get('/login',[LoginController::class,"index"])->name('login');
Route::post('/login',[LoginController::class,"login"])->name('login.post');

Route::get('/post',[PostController::class,"index"])->name('post');

// Route::get('/about', function () {
//     // return "About Page";
//     // return "<a href='/contact'> Contact Page </a>";
//     return "<a href='" . route('contact', [15, "ABC"]) . "'> Contact Page </a>";
// })->name('about');

// Route::get("/about", function () {
//     $srt = "test about";
//     $srt2 = "test2 about2";
//     return view('about',["text"=> $srt , "text2" => $str2]);
// })->name('about');

// Route::get('/about', function () {
//     $str = 'webprog.io';
//     $str2 = 'ali sheikh';

//     // return view('about', ['text' => $str, 'name' => $str2]);
//     return view('about', compact('str', 'str2'));
// });

// Route::get("/contact", function () {
//     return view('contact.text.index');
// })->name('about');
// Route::get("/contact", function () {
//     return view('contact');
// })->name('about');
// Route::post("/", function () {
//     return "Post Request";
// })->name('post');



// Route::get('/contact/test/{id}/{name}', function ($id, $name) {
//     return "Contact Page, id: $id, name: $name";
// })->name('contact');

// Route::group(['prefix' => 'users'], function () {
//     Route::get('/', function () {
//         return "Users List";
//     });

//     Route::get('/create', function () {
//         return "Users Create";
//     });

//     Route::get('/{id}', function ($id) {
//         return "Users id: $id";
//     });
// });

// Route::resource('blogs', BlogController::class);

// Route::fallback(function () {
//     return "404 Not Found";
// });