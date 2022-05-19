<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use App\Services\FileUploadService;
use Symfony\Component\HttpFoundation\RedirectResponse;


class ImageController extends Controller
{
    public function index()
    {
        $id = $_GET['id'];
        $images = Post::find($id)->images()->get()->toArray();
        return view('images', compact('images', 'id'));
    }

    public function create($id)
    {
        $validated = request()->validate([
            'image' => 'required'
        ]);
        $img = new FileUploadService();
        $img->uploadImages($validated['image'], $id);
        return redirect('admin');
    }

    public function delete($id): RedirectResponse
    {
        $image = Image::find($id);
        $path = public_path('storage/images'). '/' . $image->name;
            if($path) {
                unlink($path);
                $image->delete();
            }
        return redirect()->back();
    }

    public function postImages($id)
    {
        $images = Post::find($id)->images()->get()->toArray();
        return view('search.post_images', compact('images'));
    }
}
