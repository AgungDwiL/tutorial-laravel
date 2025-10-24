<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/login', 'login');
Route::view('/contact', 'contact');
Route::view('/about', 'about');

