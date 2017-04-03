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
    return view('welcome');
});

//Route::auth();

Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');
	//Pages use for profile
Route::get('/', 'PagesController@index');

//admin routes

Route::group(['middleware' => 'auth'], function(){
	Route::group(['middleware' => 'authenticated'], function(){
	        	// Registration Routes...
		Route::get('register', 'Auth\AuthController@showRegistrationForm');
		Route::post('register', 'Auth\AuthController@register');
		Route::get('admin/create', 'AdminController@create');
	});
	        
	        // Password Reset Routes...
	Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
	Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
	Route::post('password/reset', 'Auth\PasswordController@reset');

	Route::resource('admin', 'AdminController'); 
	Route::get('/admin', 'AdminController@index');
	Route::post('/admin', 'AdminController@store');
	Route::get('user', 'AdminController@users');
	Route::get('/user/success', 'AdminController@success');
			
			//Profile
	Route::get('/profile/{username}', 'ProfileController@profile');
	Route::post('/profile/avatar', 'ProfileController@update_avatar');

			//Datas 
	Route::resource('datas', 'DatasController');

});

Route::post('search/', 'TwitterController@searchTwitterUser');
Route::get('search/tweets/{user}', 'TwitterController@getTweets');