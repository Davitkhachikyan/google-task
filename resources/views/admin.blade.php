@extends('layouts.app')
@section('content')

<table id="example" class="display">
    <thead>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Text</th>
        <th>Images</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr class="tr">
            <td> {{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->text}}</td>
            <td><a href="{{route('images-page', ['id' => $post->id])}}">Images</a></td>
            <td><a href="{{route('delete-post',['id'=>$post->id])}}">Delete</a> </td>
            <td><a href="{{route('update-post-page', ['id' => $post->id])}}">Edit</a></td>
            @endforeach
        </tr>
    </tbody>
</table>
<button class="button"><a class="btn-a" href={{route('add-post-page')}}>Add Product</a></button>

@endsection
