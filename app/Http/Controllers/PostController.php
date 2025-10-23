<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        // Logika untuk menampilkan postingan berdasarkan slug
        return "Menampilkan postingan dengan slug: " . $slug;
    }
}
