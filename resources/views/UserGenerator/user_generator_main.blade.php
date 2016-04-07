@extends('layouts.master')


@section('title')
    User Generator Main Page
@stop



@section('head')

@stop


@section('content')

    <h1>User Generator!</h1>

    <h2>Select options</h2>

    <form method="POST" action="user-generator">
        {{ csrf_field() }}
        How many users do you want: (Max: 99) <input type="number" min="1" max="99" id='how_many_users' name='how_many_users' value='{{ old('how_many_users') }}'>
            {{ $errors->first('how_many_users)' )}}

        <br>
        <label><input type="checkbox" name="include_address" checked>Addrss </label>
        <label><input type="checkbox" name="include_birthday" checked>Birthday </label>
        <label><input type="checkbox" name="include_email" checked>Email address </label>
        <label><input type="checkbox" name="include_phone_number" checked>Phone number </label><br>

        <input class = "button-submit" type="submit" value="Click to generate">

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

@stop
