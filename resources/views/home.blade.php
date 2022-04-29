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

<div style="position:relative; left:500px; top:120px" class="image">
    <img style="" src="https://www.google.com/images/srpr/logo11w.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- The form -->
    <form type="post" class="example" action="">
        <input style="border-top-left-radius:10px; border-bottom-left-radius:10px" type="text" placeholder="Search . . ." name="search">
        <button style="border-top-right-radius:10px; border-bottom-right-radius:10px" type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>


    @foreach($posts as $post)
        <div style=" margin-top:170px;margin-bottom:20px; float:left; margin-left:20px; background: white; width: 200px; height: 300px; border-radius: 15px; outline: 2px solid gray">
            <div><h1 style="text-align: center">{{$post['title']}}</h1></div>
            <hr>
            <div><h3 style="text-align: center">{{$post['description']}}</h3></div>
            <hr>
            <div><p style="margin-left: 5px">{{$post['text']}}</p></div>
            <hr>
            <div><a style="text-decoration: none;" href="images.blade.php">photo</a> </div>
        </div>

    @endforeach


</body>
</html>
@endsection

<style>* {
box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
padding: 10px;
font-size: 17px;
border: 1px solid grey;
float: left;
width: 30%;
background: #f1f1f1;
}

/* Style the submit button */
form.example button {
float: left;
width: 8%;
padding: 15px;
background: #2196F3;
color: white;
font-size: 17px;
border: 1px solid grey;
border-left: none; /* Prevent double borders */
cursor: pointer;
}

form.example button:hover {
background: #0b7dda;
}

/* Clear floats */
form.example::after {
content: "";
clear: both;
display: table;
}
</style>
