@extends('layout')

@section('content')


    <h1>This is the about page</h1>
    <p>{{$name}}</p>

    <h1>{{$isUserRegistered ? "Hello mate" : "Please Register"}}</h1>

    @if(empty($users))
        <p>No people to display</p>

    @else

    @foreach($users as $value)
        <h2>{{$value}}</h2>
        @endforeach

    @endif



@stop