<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();
        return view();
    }

    public function create(Request $request) {
        $post = new Post();
        $data = request()->all();
        $post->text = $request->text;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        if(isset($data['image']))
        {
            foreach ($data['image'] as $img)
            {
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

        $post = Post::find($request->id);
        $data = $request->all();
        $post->update($data);
        return redirect('admin');
    }

    public function delete($id)
    {
        $post = Post::where('id', $id)->delete();
        return redirect()->back();
    }


}
