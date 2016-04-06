@extends('layouts.master')


@section('title')
    Developer's Best Friend
@stop



@section('head')
    <link href='/css/book/show.css' rel='stylesheet'>
@stop


@section('content')



    <h1>Developer's Best Friend</h1>

    <h3>Lorem Ipsum Generator</h3>

    <p>Lorem ipsum is a popular placeholder text, this generator will generate your choice of lorem ipsum paragraphs.</p>


    <form action="lorem-ipsum">
        <input class = "button-submit" type="submit" value="Generate lorem ipsum text">
    </form>

    <br>


    <h3>Random User Generator</h3>

    <p>This tool will generate some sample user profiles</p>

    <form action="user-generator">
        <input class = "button-submit" type="submit" value="Generate sample user profiles">
    </form>
    <br>



@stop




@section('body')
    <script src="/js/book/show.js"></script>
@stop
