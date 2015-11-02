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

//Login Page Root Route
Route::get('/', function () {
    return view('login');
});

//Auth Controller Routes
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

//Primary SignUp Route
Route::post('signup', 'UserController@primarySignUp');

//Primary Login Route
Route::post('login', 'UserController@primaryLogin');

//Product Display Route
Route::get('products', 'ProductsController@index');

//Guest Login Route
Route::get('guest-login', 'UserController@guestLogin');

//Product Details Route
Route::get('products/{id}', 'ProductsController@show');


