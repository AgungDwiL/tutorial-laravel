<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __invoke()
    {
        $name = 'John Doe';
        return view('home', compact('name'));
    }
}
