<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('contact', 'contact');

Route::view('series/create', 'series.create');
//  pada laravel untuk file yang dibuka bisa 
//  menggunakan format :
//  -   series/create; atau
//  -   series.create