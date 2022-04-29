@extends('layouts.app')
@section('content')


    <form method="post" action="{{route('create-image', ['id' => $id])}}" enctype ="multipart/form-data">
        @csrf
        <input type="file"  name="image[]"  multiple>
        <button type="submit">Add</button>
    </form>

@endsection
