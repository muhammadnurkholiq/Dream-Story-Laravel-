<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "css" => "css/home.css"
    ]);
});
Route::get('/about', function () {
    return view('detail', [
        "title" => "Detail",
        "css" => "css/detail.css"
    ]);
});
Route::get('/story', function () {
    return view('story', [
        "title" => "Story",
        "css" => "css/story.css"
    ]);
});
