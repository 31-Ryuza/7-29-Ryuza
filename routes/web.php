<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('index', [
        "link" => "home",
        "title" => "Ryuza || Beranda",
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

// Route::resource('/contact', ContactController::class);
Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

Auth::routes();

Route::group(['middlawere' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contact/index', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::post('/contact/{id}/update', [ContactController::class, 'update'])->name('contact.update');
    Route::get('/contact/{id}/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');
});
