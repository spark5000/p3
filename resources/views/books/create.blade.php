@extends('layouts.master')


@section('title')
    Lorem Ipsum Main Page
@stop



@section('head')
    <link href='/css/book/show.css' rel='stylesheet'>
@stop


@section('content')

    <h1>Lorem Imsum Generator</h1>

    <h2>How many paragraphs do you want?</h2>

    <form method="POST" action="create">
        {{ csrf_field() }}
        Title: <input type="text" id='title' name='title' value='{{ old('title') }}'>
            {{ $errors->first('title)' )}}

        Author: <input type='text' id='author' name='author'>
            {{ $errors->first('author)' )}}

        <input type="submit">

        <ul class='errors'>
            @foreach($errors->all() as $error);
                {{ $error }} <br>
            @endforeach
        </ul>


        @if (count($errors)>0)
            Please correct the erros above and try again
        @endif


    </form>

@stop




@section('body')
    <script src="/js/book/show.js"></script>
@stop
