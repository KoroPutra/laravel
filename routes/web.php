<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('welcome', [
        "title" => "Welcome"
    ]);
});
Route::get('home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Putra Muhammad Ferdiansyah",
        "email" => "putramei05@gmail.com",
        "alamat" => "Jalan Kampung Rawa Tengah rt 03 / rw 07 no 9 kelurahan galur",
        "image" => "img/foto.jpg"
    ]);
});



Route::get('post', [PostController::class, 'index']);
Route::get('post/{slug}', [PostController::class, 'show']);
