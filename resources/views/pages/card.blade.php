@extends('layout')


@section('content')
    <h2>Current Selected Card</h2>
    <h4>{{$card->title}}</h4>
    <p>and notes!!</p>
    <ul>
    @foreach($card->notes as $note)
        <li>{{$note->body}}</li>
    @endforeach
    </ul>

    <h3>Add a New Note</h3>

    <form method="POST" action="/cards/{{$card->id}}/notes">
        <textarea name="body"></textarea>
        <button type="submit">Add Note</button>
    </form>
@stop