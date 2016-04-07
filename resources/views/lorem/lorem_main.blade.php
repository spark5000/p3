@extends('layouts.master')


@section('title')
    Lorem Ipsum Main Page
@stop



@section('head')
    <link href='/css/book/show.css' rel='stylesheet'>
@stop


@section('content')


    <h1>Lorem Imsum Generator!</h1>

    <h2>How many paragraphs would you like?</h2>

    <form method="POST" action="lorem-ipsum">
        {{ csrf_field() }}
        Number of paragraphs: (Max: 99) <input type="number" min="1" max="99" id='how_many_paragraphs' name='how_many_paragraphs' value='{{ old('how_many_paragraphs') }}'>
            {{ $errors->first('how_many_paragraphs)' )}}

        <br>
        <input class = "button-submit" type="submit" value="Click to generate">

        <ul class='errors'>
            @foreach($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </ul>


        @if (count($errors)>0)
            Please correct the erros above and try again
        @endif


        @foreach($errors->all() as $error)
            {{ $error }} <br>
        @endforeach

    </form>

@stop




@section('body')
    <script src="/js/book/show.js"></script>
@stop
