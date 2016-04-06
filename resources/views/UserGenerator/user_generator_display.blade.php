@extends('layouts.master')


@section('title')
    Lorem Ipsum Main Page
@stop



@section('head')
    <link href='/css/book/show.css' rel='stylesheet'>
@stop


@section('content')

    <h1>User Generator!</h1>

    <h2>Select options</h2>

    <form method="POST" action="user-generator">
        {{ csrf_field() }}
        How many users do you want: (Max: 99) <input type="text" id='how_many_users' name='how_many_users' value='{{ old('how_many_users') }}'>
            {{ $errors->first('how_many_users)' )}}

        <br>
        <input type="checkbox" name="include_address" checked> Addrss<br>
        <input type="checkbox" name="include_birthday" checked> Birthdate<br>
        <input type="checkbox" name="include_email" checked> Email address<br>
        <input type="checkbox" name="include_phone_number" checked> Phone number<br>



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





    <?php
        for ($i = 0; $i < $how_many_users; $i++){
            $faker = Faker\Factory::create();
            echo $faker->name.'<br>';
            if ($include_address) {
                echo $faker->address.'<br>';
            }
            if ($include_birthday) {
                echo $faker->dateTimeThisCentury->format('Y-m-d').'br';
            }


            //echo $faker->text.'<br>';
            echo '<br>';
        }



    ?>























@stop




@section('body')
    <script src="/js/book/show.js"></script>
@stop
