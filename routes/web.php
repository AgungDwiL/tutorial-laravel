<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController'); // Invokes the __invoke method of HomeController (tanpa menyebutkan metode secara eksplisit)

Route::get('post/{slug}', 'PostController@show'); // Memanggil metode show pada PostController

Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('login', 'login');