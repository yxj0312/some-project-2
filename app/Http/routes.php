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
	//return Task::all() is really bad practice
	//because:1. All is bad -- We are doing Tasks all here, so we are returning every single task.
	//2. No way to attach meta data -- In this way, we have no easy way to attach meta informations, which might be helpful to the client
	//3. Lining db structure to the API output
	//4. No way to signal headers/response codes

	// $tasks = App\Task::latest()->get();
	// return view('tasks.home',compact('tasks')); 
	 return view('tasks.home');
});
// Route::resource('lessons','LessonsController');
// 
Route::delete('/tasks/{task}',function(App\Task $task){
	$task->delete();
});

Route::resource('flexbox', 'FlexboxController');