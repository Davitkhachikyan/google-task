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

    public function addPost()
    {
        return view('layouts.add_post');
    }

    public function updatePost($id)
    {
        $post = Post::find($id);
        return view('layouts.update_post', compact('post'));
    }

    public function createImage($id)
    {
        return view('layouts.update_image', compact('id'));
    }
}
