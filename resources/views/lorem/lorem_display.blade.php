@extends('layouts.master')


@section('title')
    Lorem Ipsum Main Page
@stop



@section('head')
    <link href='/css/book/show.css' rel='stylesheet'>
@stop


@section('content')

    <h1>Lorem Imsum Generator!</h1>


    <?php
        $generator = new Badcow\LoremIpsum\Generator();
        $lorem_paragraphs = $generator->getParagraphs($how_many_paragraphs);
        echo implode('<p>', $lorem_paragraphs);
    ?>



    <h2>How many paragraphs would you like?</h2>


    <form method="POST" action="lorem-ipsum">
        {{ csrf_field() }}
        Number of paragraphs: (Max: 99) <input type="text" id='how_many_paragraphs' name='how_many_paragraphs' value='{{ old('how_many_paragraphs') }}'>
            {{ $errors->first('how_many_paragraphs)' )}}


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
