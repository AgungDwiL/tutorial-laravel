<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestValidated;
use App\Post;
use Exception;
use Illuminate\Support\Str;

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

    public function store(RequestValidated $request) {

        //ganti pakai requestValidated
        // $post = $this->validateRequest();
        
        //mengambil data array input + token
        $post = $request->all();

        // Assign slug
        $post['slug'] = Str::slug(request('title'));

        // Make alert
        try{
            Post::create($post);
            session()->flash('success', 'The post has been created!');
            return redirect('posts');
        } catch (Exception $e){
            session()->flash('error', 'Error occured when creating post!');
            return redirect('posts');
        }

        // atau bisa juga bikin alert itu
        // return redirect('...')->with('success', '....') //syaratnya pakai redirect, diblade cara manggilnya sama
    }

    public function edit($slug) {
        
        $post = Post::where('slug',$slug)->firstOrFail();
        
        return view('posts.edit', compact('post'));
    }

    public function update(requestValidated $request, $slug) {
        // Validate input
        // $new_post = $this->validateRequest(); //ganti pakai requestValidated

        $new_post = $request->all();

        // Find post by slug
        $post = Post::where('slug', $slug)->firstOrFail();

        // Flash success message
        try{
            // Update data
            $post->update($new_post);
            session()->flash('success', 'The post has been updated!');
            return redirect('posts');
        } catch (Exception $e){
            session()->flash('error', 'Error occured when updating post!');
            return redirect('posts');
        }
    }

    // Ganti pakai class request requestValidated()
    // private function validateRequest(){
    // $validated = request()->validate([
    //     'title' => 'required|max:191',
    //     'body'  => 'required',
    // ]);

    //     return $validated;
    // }
}
