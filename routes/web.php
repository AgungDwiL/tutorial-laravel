<?php

use Illuminate\Support\Facades\Route;

route::get('/', function () {
    return 'Homepage';
});

route::get('/contact', function () {
    return 'Contact Us';
});