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
        "link" => "home",
        "title" => "Ryuza || Home",
        "nama" => "Ryuza Aly Syahputa",
        "email" => "alysyahputra.ryuza@gmail.com",
        "gambar" => "foto.jpeg"
     ]);
});


Route::get('/galery', function () {
    return view('galery', [
        "link" => "galery",
        "title" => "Ryuza || Galery"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "link" => "about",
        "title" => "Ryuza || About",
        "nama" => "Ryuza Aly Syahputa",
        "email" => "alysyahputra.ryuza@gmail.com",
        "gambar" => "foto.jpeg"
    ]);
});
