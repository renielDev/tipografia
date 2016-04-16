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

Route::get('/', 'Main\TypografiaController@index');
Route::get('main', 'Main\TypografiaController@main');

Route::get('/', function () {
  return view('app.home');
});

Route::group(['prefix' => 'api/v1'], function()
{

	Route::get('fonts/happy', function(){
		return json_encode(['Droid Sans', 'Droid Serif', 'Lora']);
	});

	Route::get('fonts/sad', function(){
    return json_encode(['Raleway', 'Open Sans Condensed', 'Candal', 'Indie Flower']);
	});

});
