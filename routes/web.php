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
        "nama" => "Ryuza Aly Syahputa",
        "email" => "alysyahputra.ryuza@gmail.com",
        "gambar" => "foto.jpeg"
     ]);
});


Route::get('/dashboard', function () {
    return view('about');
});


Route::get('/about', function () {
    return view('galery');
});
