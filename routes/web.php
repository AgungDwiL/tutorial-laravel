<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('contact', 'contact');
Route::view('about', 'about');

// taruh wildcard {slug} untuk menangkap segment URL setelah URL spesifik
Route::get('posts', 'PostController@index')->name('posts.index');

Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::post('/posts/create', 'PostController@store')->name('posts.store');

Route::get('/posts/{post:slug}/edit', 'PostController@edit');
Route::patch('/posts/{post:slug}/edit', 'PostController@update');
Route::delete('posts/{post:slug}/delete', 'PostController@destroy');

Route::get('categories/{category:slug}', 'CategoryController@show');
Route::get('tags/{tag:slug}', 'TagController@show');

Route::get('posts/{post:slug}', 'PostController@show'); //using method colon (Model:columns_object)

// Memanggil metode show pada PostController menggunakan model binding
// sebelumnya Route::get('posts/{slug}', 'PostController@show');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
