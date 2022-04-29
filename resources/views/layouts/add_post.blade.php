@extends('layouts.app')
@section('content')


    <form method="post" action="{{route('add-post')}}" enctype ="multipart/form-data">
    @csrf
        <input type="text" name="title">Title<br><br>
        <input type="text" name="description">Description<br><br>
        <input type="text" name="text">Text<br><br>
        <input type="file"  name="image[]" multiple>
    <button type="submit">Add</button>
</form>

@endsection
