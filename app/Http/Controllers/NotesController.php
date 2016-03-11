<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //you can inject these dependencies for
//availablility in controller methods

use App\Http\Requests;
use App\Card;
use App\Note;

class NotesController extends Controller
{
    //
    public function store(Request $request, Card $curCard){

        $note = new Note;
        $note->body = $request->body;
        $note->card_id = $curCard->id;
        $curCard->notes()->save($note);
        return back();
    }

}
