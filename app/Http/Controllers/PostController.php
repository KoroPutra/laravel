<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('post', [
            "title" => "Blog Post",
            "post" => Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('posts', [
            "title" => "Single Post",
            "post" => Post::find($slug)
        ]);
    }
}
