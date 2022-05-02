<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;


class ImageController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = $_GET['id'];
        $images = Post::find($id)->images()->get()->toArray();

        return view('images', compact('images', 'id'));
    }

    public function create($id)
    {
        $post_id = $id;
        $data = request()->all();
        foreach ($data['image'] as $img) {
            $name = $img->getClientOriginalName();
            $destinationPath = public_path('images');
            $img->move($destinationPath, $name);
            $image = new Image();
            $image->name = $name;
            $image->post_id = $post_id;
            $image->save();
        }
        return redirect('admin');
    }

    public function delete($id)
    {
        Image::where('id', $id)->delete();
        return redirect('admin');
    }

    public function post_images($id)
    {
        $images = Post::find($id)->images()->get()->toArray();
        return view('search.post_images', compact('images'));
    }
}
