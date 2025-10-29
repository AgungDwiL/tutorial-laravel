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
        $post = $this->validateRequest();

        // Assign slug
        $post['slug'] = Str::slug(request('title'));

        // Metode eloquent
        Post::create($post);

        // Make alert
        session()->flash('success', 'The post has been created!');
        session()->flash('error', 'Error occured when creating post!');
        // atau bisa juga bikin alert itu
        // return redirect('...')->with('success', '....') //syaratnya pakai redirect, diblade cara manggilnya sama

        return redirect('posts');
    }

    public function edit($slug) {
        
        $post = Post::where('slug',$slug)->firstOrFail();
        
        return view('posts.edit', compact('post'));
    }

    public function update($slug) {
    // Validate input
    $new_post = $this->validateRequest();

    // Find post by slug
    $post = Post::where('slug', $slug)->firstOrFail();

    // Update data
    $post->update($new_post);

    // Flash success message
    session()->flash('success', 'The post has been updated!');
    session()->flash('error', 'Error occured when updating post!');

    // Redirect or return response
    return redirect('posts');
    }

    private function validateRequest(){
        $validated = request()->validate([
            'title' => 'required|max:191',
            'body'  => 'required',
        ]);

        return $validated;
    }
}
