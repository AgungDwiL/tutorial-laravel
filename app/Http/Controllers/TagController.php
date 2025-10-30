<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\tag;

class TagController extends Controller
{
    public function show(tag $tag)
    {
        $posts = $tag->posts()->latest()->paginate(6);
        return view('posts.index', compact('posts', 'tag'));
    }
}
