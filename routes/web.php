<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController'); // Invokes the __invoke method of HomeController (tanpa menyebutkan metode secara eksplisit)

Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('login', 'login');

// taruh wildcard {slug} untuk menangkap segment URL setelah URL spesifik
Route::get('posts/{slug}', 'PostController@show'); // Memanggil metode show pada PostController