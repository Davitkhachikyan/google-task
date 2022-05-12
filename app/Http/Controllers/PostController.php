<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Image;
use App\Models\Post;
use App\Services\FileUploadService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view();
    }

    public function create(StorePostRequest $request)
    {
        $post = new Post();
        $data = $request->validated();
        if (isset($request->text)) {
            $post->text = $request->text;
        }
        if (isset($request->title)) {
            $post->title = $request->title;
        }
        if (isset($request->description)) {
            $post->description = $request->description;
        }
        $post->save();
        if (isset($data['image'])) {
            $img = new FileUploadService();
            $img->uploadImages($data['image'], $post->id);
        }
        return redirect('admin');
    }

    public function update(Request $request)
    {
        if (isset($request->id)) {
            $post = Post::find($request->id);
        }
        $data = $request->all();
        if (isset($post)) {
            $post->update($data);
        }
        return redirect('admin');
    }

    public function delete($id): RedirectResponse
    {
        Post::where('id', $id)->delete();
        return redirect()->back();
    }
}
