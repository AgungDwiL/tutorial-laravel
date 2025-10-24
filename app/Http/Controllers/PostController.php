<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\post;

class PostController extends Controller
{
    public function show($slug)
    {
        // Ambil data dari database
        $post = post::where('slug', $slug)->firstOrFail(); 
        // firstOrFail() akan mengembalikan 404 otomatis jika data tidak ditemukan

        // Untuk validasi apakah post tersedia bisa menggunakan :
        // 1. seperti ini
        // if(!$post) {
        //     abort(404);
        // }

        // 2. seperti ini
        // if(is_null($post)) {
        //     abort(404);
        // }

        

        // Logika untuk menampilkan postingan berdasarkan slug
        return view('posts.show', compact('post'));
    }
}
