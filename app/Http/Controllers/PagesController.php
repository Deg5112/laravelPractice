<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;

//pages controller
class PagesController extends Controller{

    public function getIndex(){
        return view('welcome'); //returns the file when the about method is called on the controller
    }

    public function getAbout(){
        $companyName = "Sup thug";
        $loopString = 'David is Awesome';
        $isUserRegistered = false;
        $users = [];
// when you use a '.' it's pages/about  //variables get injected directly into view
        return view('pages.about')
            ->with([
                "name" => $companyName,
                "isUserRegistered"=>$isUserRegistered,
                'loopString'=>$loopString,
                'users'=>$users
            ]);
    }
    public function getContact(){
        return view('pages.contact');
    }
}

?>