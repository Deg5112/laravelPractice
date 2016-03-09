<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//for the superglobal get...
Route::get('/', [
    'as' => '/',  //name of route
    'uses' => 'PagesController@getIndex'
]);

Route::get('about', [
    'as' => 'about',  //name of route
    'uses' => 'PagesController@getAbout'
]);

Route::get('contact', [
    'as' => 'contact',
    'uses' => 'PagesController@getContact'
]);

Route::get('cards', [
    'as' => 'cards',
    'uses' => 'CardsController@getIndex'
]);
        //wildcard variable here has to match with var name in controller method
Route::get('cards/{curCard}', 'CardsController@showCard');



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
