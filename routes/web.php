<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('contact', function (Request $request) {
    // return $request->path(); digunakan untuk menampilkan path dari route
    // return request()->path(); digunakan untuk menampilkan path dari route

    // boolean untuk mengecek apakah path dari route sesuai dengan parameter
    // return request()->path() == 'contact' ? 'true' : 'false';

    // bolean untuk mengecek apakah route saat ini sesuai dengan parameter (cara canggih)
    return request()->is('contact') ? 'true' : 'false';
});

Route::view('about', 'about');
Route::view('login', 'login');