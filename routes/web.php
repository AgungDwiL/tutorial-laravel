<?php

use Illuminate\Support\Facades\Route;

route::get('/', function () {
    return '<h1>Welcome</h1>'; // Ya kali ngedit nya di dalam return sini
});

route::get('contact', function () {
    return view('contact'); // setiap akses /contact akan menampilkan file contact.blade.php
});