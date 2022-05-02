@extends('layouts.app')
@section('content')



    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
</head>
<body>
<table id="example" class="display" style="width:100%">
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
    <tr>
        <td> {{$post->title}}</td>
        <td>{{$post->description}}</td>
        <td>{{$post->text}}</td>
        <td><a style=" text-decoration: none" class="href" href="{{route('images-page', ['id' => $post->id])}}">Images</a></td>
        <td><a style=" text-decoration: none" class="href" href="{{route('delete-post',['id'=>$post->id])}}">Delete</a> </td>
        <td><a style=" text-decoration: none" class="href" href="{{route('update-post-page', ['id' => $post->id])}}">Edit</a></td>
        @endforeach
    </tr>
    </tbody>
</table>
</body>
<button style="border-radius: 5px" class="button"><a style="text-decoration: none; color: black" href={{route('add-post-page')}}>Add Product</a></button>
</html>
<style>
    .button {
    background-color: white;
    color: black;
    border: 2px solid #555555;
    }

    .button:hover {
    background-color: #555555;
    color: white;
    }

</style>
@endsection
