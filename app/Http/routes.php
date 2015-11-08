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

//Login and Register Page Route
Route::get('/', function(){
    return Redirect::to('auth/login');
});


//Auth Controller Routes
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


//Product List Route
Route::get('products', 'ProductsController@index');


//Product Search Route
Route::get('products/search', 'ProductsController@search');

//Product Add To Cart Route
Route::get('products/order', 'CartController@addToCart');

//Cart Display Route
Route::get('cart', 'CartController@index');

//Checkout Route
Route::get('checkout', 'CartController@checkout');


//Checkout Route
Route::post('posted', 'CartController@posted');

//Session Get Route
Route::get('get', function()
{
    echo Session::get('user');
    echo Session::get('cart');

});



