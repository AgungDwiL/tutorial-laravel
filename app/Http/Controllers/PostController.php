<?php

namespace App\Http\Controllers;

use App\{tag, Post, Category};
use Exception;
use Illuminate\Support\Str;
use App\Http\Requests\RequestValidated;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::get();

        // Save current page number in session
        $page = request()->get('page', 1);
        session()->put('posts_page', $page);

        // Tutorial Pagination
        $posts = Post::paginate(6);
        return view('posts.index',compact('posts', 'page'));
    }

    public function show($slug)
    {
        // Retrieve the last page visited from session
        $page = session('posts_page', 1);

        $post = Post::where('slug',$slug)->firstOrFail();
        
        return view('posts.show', compact('post', 'page'));
    }

    public function create() {
        return view('posts.create', [
            'categories' => Category::get(),
            'tags'      => tag::get()
        ]);
    }

    public function store(RequestValidated $request) {

        //ganti pakai requestValidated
        // $post = $this->validateRequest();

        //mengambil data array input + token
        $attr = $request->all();

        // Assign slug
        $attr['slug'] = Str::slug(request('title'));
        $attr['category_id'] = request('category');

        // Make alert
        try{
            $post = Post::create($attr);
            $post->tags()->attach(request('tags'));
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

        $page = session('posts_page', 1);
        $categories = Category::get();
        $tags = tag::get();
        $post = Post::where('slug',$slug)->firstOrFail();
        
        return view('posts.edit', compact('post', 'categories', 'tags'));
    }

    public function update(requestValidated $request, Post $post) {
        // Validate input
        // $new_post = $this->validateRequest(); //ganti pakai requestValidated

        $attr = $request->all();
        $attr['category_id'] = request('category');

        // Flash success message
        try{
            // Update data
            $post->tags()->sync(request('tags'));
            $post->update($attr);
            session()->flash('success', 'The post has been updated!');
            return redirect('posts');
        } catch (Exception $e){
            session()->flash('error', 'Error occured when updating post!');
            return redirect('posts');
        }
    }

    public function destroy(Post $post){
        $post->delete();
        $post->tags()->detach();
        session()->flash('success', 'The post was destroyed');
        return redirect('posts');
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
