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
    <input style="margin-left: 5px; border-radius: 5px" type="button" value="Go back!" onclick="history.back()">
</form>
@foreach($images as $image)
    <div style="float: left; padding: 5px">
        <img src="/images/{{$image['name'] }}" style="width: 300px; height: 250px">
    </div>
</body>
</html>


@endforeach

@endsection
