@extends('layouts.app')

@section('content')

<form>
    <input class="form-input" type="button" value="Go back!" onclick="history.back()">
</form>
@foreach($images as $image)
    <div class="img-div">
        <img class="image" src="/storage/images/{{$image['name'] }}" style="width: 300px; height: 250px">
    </div>

@endforeach

@endsection
