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


<div style="display: flex; justify-content: center">
    <div>
        <img style="" src="https://www.google.com/images/srpr/logo11w.png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- The form -->
        <div class="pt-15 w-4/5 m-auto"></div>
        <form type="post" class="example" action="search/query">
            <input type="text" placeholder="Search . . ." name="search">
            <button  type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>






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
width: 84%;
background: #f1f1f1;
border-top-left-radius:20px;
border-bottom-left-radius:20px
}

/* Style the submit button */
form.example button {
float: left;
width: 16%;
padding: 15px;
background: #2196F3;
color: white;
font-size: 17px;
border: 1px solid grey;
border-left: none; /* Prevent double borders */
border-top-right-radius:20px;
border-bottom-right-radius:20px;
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
