<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
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

    public function create(Request $request)
    {
        $post = new Post();
        $data = $request->validate([
            'title' => 'required|min:5|max:15',
            'description' => 'required|min:5|max:25',
            'text' => 'required|min:5|max:255'
        ]);
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
            foreach ($data['image'] as $img) {
                $name = $img->getClientOriginalName();

                $destinationPath = public_path('images');
                $img->move($destinationPath, $name);
                $image = new Image();
                $image->name = $name;
                $image->post_id = $post->id;
                $image->save();
            }
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
