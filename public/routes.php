<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/login',function(){
	return View::make('auth/login');
});

Route::post('/logauth',['as'=>'login_auth','uses'=>'LoginController@check']);

/*this route is only for testing the template*/
Route::get('/test',array('before'=>'auth',function (){
	return View::make('Templates/Master');
}));
