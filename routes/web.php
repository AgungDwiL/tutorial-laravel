<?php

use Illuminate\Support\Facades\Route;

route::get('/', function () {
    return '<h1>Welcome</h1>';
});

route::get('/contact', function () {
    return 'Contact Us';
});