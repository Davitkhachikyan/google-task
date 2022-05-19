@extends('layouts.app')
@section('content')

<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form>
        <input class="bck" type="button" value="Go back!" onclick="history.back()">
    </form>
</div>
<div class="form">
    <form method="post" action="{{route('add-post')}}" enctype ="multipart/form-data">
        @csrf
        <input type="text" name="title"><span>Title</span><br><br>
        <input type="text" name="description"><span>Description</span><br><br>
        <input type="text" name="text"><span>Text</span><br><br>
        <input type="file" name="image[]" multiple>
        <button class="bton" type="submit">Add Post</button>
    </form>
</div>

@endsection
