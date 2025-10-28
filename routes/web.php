<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController'); // Invokes the __invoke method of HomeController (tanpa menyebutkan metode secara eksplisit)

Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('login', 'login');

// taruh wildcard {slug} untuk menangkap segment URL setelah URL spesifik
Route::get('posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts/create', 'PostController@store')->name('Post.store');
Route::get('posts/{post:slug}', 'PostController@show'); //using method colon (Model:columns_object)

// Memanggil metode show pada PostController menggunakan model binding
// sebelumnya Route::get('posts/{slug}', 'PostController@show');
