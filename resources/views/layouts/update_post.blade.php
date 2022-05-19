@extends('layouts.app')
@section('content')

<form>
    <input class="back" type="button" value="Go back!"
           onclick="history.back()">
</form>
<div class="form" >
    <form method="put" action="{{route('update', ['id' => $post->id])}}">
        @csrf
        <input type="text" name="title" value="{{$post->title}}"><span>Title</span><br><br>
        <input type="text" name="description" value="{{$post->description}}"><span>Description</span><br><br>
        <input type="text" name="text" value="{{$post->text}}"><span>Text</span><br><br>
        <button class="bton" type="submit">Update</button>
    </form>
</div>

@endsection




