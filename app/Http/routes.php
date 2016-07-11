<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    // Session::flash('Status', 'Hello There');
    flash('You are now signed in!', 'success');
    return Redirect::to('welcome');
});



Route::auth();

Route::resource('flyers', 'FlyersController');

Route::get('/home', 'HomeController@index'); 
Route::get('/welcome', 'HomeController@welcome');
Route::get('/cards', 'Cards\CardsController@index');
Route::get('/cards/{foobar}', 'Cards\CardsController@show');
Route::get('/cards/create', 'Cards\CardsController@create');


// Route::resource('lessons','LessonsController');