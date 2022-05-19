@extends('layouts.app')
@section('content')

<div>
    <form>
        <input class="back" type="button" value="Go back!" onclick="history.back()">
        <button class="butn">
            <a class="butn-a" href="{{route('create-image-page', ['id' => $id])}}">Add Image</a>
        </button>
    </form>
</div>

@foreach($images as $image)
    <div class="dv">
        <img class="image" src="../storage/images/{{$image['name'] }}">
        <button class="butn" ><a class="btn-a" href="{{route('delete-image', ['id' => $image['id']])}}">Delete</a></button>
    </div>
@endforeach

@endsection
