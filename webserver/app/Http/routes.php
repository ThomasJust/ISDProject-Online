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

Route::post('/products/create', 'ProductsController@store');
Route::post('/samplings/create', 'SamplingsController@store');
Route::get('/samplings/show/{productId}', 'SamplingsController@show');


// Welcomepage before and for login /register
Route::get('/', function () {
    return view('pages.welcome');
});
// Page for registration
Route::get('/register', function () {
    return view('pages.register');
});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// All Routes with Auth Middleware
Route::group(['middleware' => 'auth'], function () {
    
	// home startsite
	Route::get('/home', function(){
		return View::make('pages.home');
	});
	
	Route::get('/about', function(){
		return View::make('pages.about');
	});
	
	Route::get('/profile', function(){
		return View::make('pages.profile');
	});
	
	Route::get('/measurements', function(){
		return View::make('pages.measurements');
	});
	
	Route::get('/products', function(){
		return View::make('pages.products');
	});

        
});

