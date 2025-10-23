<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function show($slug)
    {
        // Ambil data dari database
        $post = \DB::table('posts')->where('slug', $slug)->first();
        
        dd($post); // Debugging: menampilkan data postingan berdasarkan slug

        // Logika untuk menampilkan postingan berdasarkan slug
        return view('posts.show', compact('slug'));
    }
}
