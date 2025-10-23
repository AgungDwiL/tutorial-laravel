<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = "Agung";
        // sekarang menggunakan compact
        // compact('name') sama dengan ['name' => $name]
        return view('home', compact('name'));
    }
}
