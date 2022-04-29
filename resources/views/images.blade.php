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
</head>
<body>
    <button style="margin-left: 1511px"><a href="{{route('create-image-page', ['id' => $id])}}">Add</a></button>
    @foreach($images as $image)
        <div style="margin: 10px ">
            <img src="../images/{{$image['name'] }}" style="width: 300px; height: 250px">
            <button><a href="{{route('delete-image', ['id' => $image['id']])}}">Delete</a></button>
        </div>
    @endforeach

</body>
</html>

@endsection
