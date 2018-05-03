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
Route::get('/','homeController@index');

Route::get('/search', function(){
    return view('search');
});
Route::post('/validate','userController@validateLogin');
Route::get('/validate','userController@validateLogin');


Route::get('/product', function(){
    return view('product');
});
Route::get('/registration', function(){
    return view('registration');
});
Route::get('/dashboard', function(){
    return view('dashboard');
});

?>