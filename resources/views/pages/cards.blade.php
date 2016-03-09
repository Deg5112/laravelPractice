@extends('layout')

@section('content')

    <h1>Welcome to the Cards Page!</h1>

    <h2>cards</h2>
    @foreach($cards as $card)
    <a href="{{'cards/'.$card->id}}"><h4>{{$card->title}}</h4></a>
    @endforeach

    <h2>users</h2>
    @foreach($users as $user)
       <a href="{{$user->id}}"><h4>{{$user->username}}</h4></a>
    @endforeach

@stop