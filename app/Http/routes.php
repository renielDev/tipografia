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
Route::get('/admin', ['middleware'=>'auth', function() {
  echo 'hey';
}]);
Route::get('main', 'Main\TypografiaController@main');
Route::get('admin/logout', function(){
  Auth::logout();
  Session::flush();
  return Redirect::to('/');
});

Route::get('/', function () {
  return view('app.home');
});

Route::group(['prefix' => 'api/v1'], function()
{

	Route::get('fonts/happy', function() {
    $fonts = ['Droid Sans', 'Droid Serif', 'Lora', 'Raleway'];
    $_html = view('app.main.font_list')->with([
      'fonts' => $fonts,
      'author' => 'Google web fonts',
      'source' => 'google',
      'moods' => 'happy',
    ])->render();
		return json_encode([
        'fonts' => $fonts,
        'mark_up' => $_html,
      ]);
	});

	Route::get('fonts/sad', function(){
    return json_encode(['Raleway', 'Open Sans Condensed', 'Candal', 'Indie Flower']);
	});

});

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

Route::get('admin/login', 'Auth\AuthController@getLogin');
Route::post('admin/login', 'Auth\AuthController@postLogin');
Route::get('admin/logout', 'Auth\AuthController@getLogout');

Route::get('admin/reset/password', 'Auth\PasswordController@getEmail');
Route::post('admin/reset/password', 'Auth\PasswordController@postEmail');

Route::get('admin/password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('admin/password/reset', 'Auth\PasswordController@postReset');

Route::get('/home', 'HomeController@index');
