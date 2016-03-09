<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Card;
use App\User;

class CardsController extends Controller
{
    public function getIndex(){

        $cards =  Card::all();
        $users = User::all();


//returns the file when the about method is called on the controller
        return view('pages.cards')
            ->with([
                'cards'=> $cards,
                'users'=>$users
            ]);
    }
    //$card variable is passed from the get route to this method you can call it asdf
    public function showCard(Card $curCard){
//        Card refers to the model, which pulls cards from cards table, Card $card will pull that specific card and is set to that object
//     you can pass that specific $card to the view
        return view('pages.card')
            ->with('card', $curCard);
    }

}

?>
