<?php

namespace App\Http\Controllers;

use App\Models\Post;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();
        return view('admin', compact('posts'));
    }

    public function add_post()
    {
        return view('layouts.add_post');
    }

    public function update_post($id)
    {
        $post = Post::find($id);
        return view('layouts.update_post', compact('post'));
    }

    public function create_image($id)
    {
        return view('layouts.update_image', compact('id'));
    }
}
