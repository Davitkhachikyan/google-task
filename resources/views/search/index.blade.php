@extends('layouts.app')

@section('content')

<form>
    <input style="margin-left: 5px; border-radius: 5px" type="button" value="Go back!" onclick="history.back()">
</form>
<div style="position:relative; " >
    <div style="display: flex;justify-content: center">
        <img style="" src="https://www.google.com/images/srpr/logo11w.png"/>
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </div>

    <!-- The form -->
    <div class="pt-15 w-4/5 m-auto">
        <form action="search/query" method="GET">
            @csrf
        </form>
    </div>
</div>


@foreach($posts as $post)
    <div class="post">
        <div><p id="title">{{$post['title']}}</p></div>
        <hr>
        <div><p id="desc">{{$post['description']}}</p></div>
        <hr>
        <div><p id="text">{{$post['text']}}</p></div>
        <hr>
        <div class="post-img"><a href="{{route('post-images', ['id' => $post['id']])}}">Images</a></div>
    </div>
@endforeach

@endsection


