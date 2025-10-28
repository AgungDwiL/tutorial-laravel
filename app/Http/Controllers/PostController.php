<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::get();

        // Tutorial Pagination
        $posts = Post::paginate(6);
        return view('posts.index',compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug',$slug)->firstOrFail();
        return view('posts.show', compact('post'));
    }
}
