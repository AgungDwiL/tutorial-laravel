<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function show($slug)
    {
        // Ambil data dari database
        $post = \DB::table('posts')->where('slug', $slug)->first();

        // Logika untuk menampilkan postingan berdasarkan slug
        return view('posts.show', compact('post'));
    }
}
