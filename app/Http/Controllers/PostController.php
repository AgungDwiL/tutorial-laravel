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
        $posts = Post::paginate(2);
        return view('posts.index',compact('posts'));
    }
}
