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
<div>
    <form>
        <input style="margin-left: 5px; border-radius: 5px" type="button" value="Go back!" onclick="history.back()">
        <button style="margin-left: 150px; margin-right: 15px; border-radius: 5px; text-decoration: none">
            <a style=" text-decoration: none; color: black"  href="{{route('create-image-page', ['id' => $id])}}">Add Image</a>
        </button>
    </form>
</div>


@foreach($images as $image)
    <div style="margin: 10px ">
        <img src="../images/{{$image['name'] }}" style="width: 300px; height: 250px">
        <button style="border-radius: 5px"><a style="text-decoration: none; color: black" href="{{route('delete-image', ['id' => $image['id']])}}">Delete</a></button>
    </div>
@endforeach

</body>
</html>

@endsection
