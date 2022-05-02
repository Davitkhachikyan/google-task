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

<form>
    <input style="margin-left: 5px; margin-bottom: 5px; border-radius: 5px" type="button" value="Go back!"
           onclick="history.back()">
</form>
<div>
    <form method="post" action="{{route('update')}}">
        @csrf
        <input type="hidden" name="id" value={{$post->id}}>
        <input type="text" name="title" value="{{$post->title}}">Title<br><br>
        <input type="text" name="description" value="{{$post->description}}">Description<br><br>
        <input type="text" name="text" value="{{$post->text}}">Text<br><br>
        <button style="border-radius: 5px" type="submit">Update</button>
    </form>
</div>
</body>
</html>

@endsection

{{--<form method="post" action="{{route('add-post')}}" enctype ="multipart/form-data">--}}
{{--    @csrf--}}
{{--    <input type="text" name="title">Title<br><br>--}}
{{--    <input type="text" name="description">Description<br><br>--}}
{{--    <input type="text" name="text">Text<br><br>--}}
{{--    <input type="file"  name="image[]" multiple>--}}
{{--    <button type="submit">Add</button>--}}
{{--</form>--}}



