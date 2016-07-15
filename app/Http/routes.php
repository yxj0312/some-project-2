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


Route::get('api/tasks',function(){
	 return App\Task::latest()->get();
});
Route::get('/tasks',function(){
	// $tasks = App\Task::latest()->get();

	// return view('tasks.home',compact('tasks'));
		return view('tasks.home');
});
// Route::resource('lessons','LessonsController');
// 
Route::delete('/tasks/{task}',function(App\Task $task){
	$task->delete();
});


Route::get('/alerts/begin',function() {
	session()->flash('Status','You are now signed in');


	return redirect('/alerts');
});

Route::get('/alerts',function(){

	return view('alerts.welcome');
});

