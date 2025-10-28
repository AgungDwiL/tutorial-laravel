<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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

    public function create() {
        return view('posts.create');
    }

    public function store() {
        // Validate input
        $post = request()->validate([
            'title' => 'required',
            'body'  => 'required'
        ]);

        // Assign slug
        $post['slug'] = Str::slug(request('title'));

        // Metode eloquent
        Post::create($post);

        return back();
        
    }
}
