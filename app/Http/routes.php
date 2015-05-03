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



Route::get('/', 'TasksController@index');

Route::get('/tasks/returnJson','TasksController@returnJson');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('tasks','TasksController');

Route::bind('tasks',function($value,$route){
	return App\Task::whereId($value)->first();
});


Route::group(['prefix'=>'admin',
              'namespace'=>'admin',
              'middleware'=>'admin'
            ],function(){
    Route::resource('user','UserController');
});





