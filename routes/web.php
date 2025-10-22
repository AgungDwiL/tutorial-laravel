<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $name = '<h1>John Doe</h1>';
    return view('welcome', [ 'name' => $name ]);
});

Route::view('contact', 'contact');

Route::view('series/create', 'series.create');
//  pada laravel untuk file yang dibuka bisa 
//  menggunakan format :
//  -   series/create; atau
//  -   series.create