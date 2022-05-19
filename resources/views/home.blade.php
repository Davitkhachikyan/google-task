@extends('layouts.app')

@section('content')

<div class="main">
    <div>
        <img src="https://www.google.com/images/srpr/logo11w.png"/>
        <!-- The form -->
        <div class="pt-15 w-4/5 m-auto"></div>
        <form type="post" class="example" action="search/query">
            <input type="text" placeholder="Search . . ." name="search">
            <button  type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>

@endsection


