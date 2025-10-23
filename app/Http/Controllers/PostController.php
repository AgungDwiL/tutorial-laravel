<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function show($slug)
    {
        // Logika untuk menampilkan postingan berdasarkan slug
        return view('posts.show', compact('slug'));
    }
}
