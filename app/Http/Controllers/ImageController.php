<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use App\Services\FileUploadService;


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
        $data = request()->all();
        $img = new FileUploadService();
        $img->uploadImages($data['image'], $id);
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
