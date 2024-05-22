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
    return view('welcome');
});
Route::get('home', function () {
    return view('home');
});
Route::get('about', function () {
    return view('about', [
        "nama" => "Putra Muhammad Ferdiansyah",
        "email" => "putramei05@gmail.com",
        "alamat" => "Jalan Kampung Rawa Tengah rt 03 / rw 07 no 9 kelurahan galur",
        "image" => "img/foto.jpg"
    ]);
});
Route::get('post', function () {
    return view('post');
});
