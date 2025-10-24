<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function welcome($slug)
    {
        $user = \App\user::where('name_slug',$slug)->firstorFail();
        
        return view('users.welcome', compact('user'));
    }
}