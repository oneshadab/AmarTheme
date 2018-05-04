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
Route::get('/','homeController@index')->name('home');

Route::get('/search', function(){
    return view('search');
});
Route::post('/validate','userController@validateLogin');
Route::get('/validate','userController@validateLogin');
Route::get('/logout','userController@userLogout');
Route::get('/loginSuccess','userController@userLogin');
Route::get('/dashboard','homeController@dashboard');



Route::get('/search', function(){
    return view('search');
})->name('search');

Route::get('/product', function(){
    return view('product');
})->name('product');
Route::get('/registration', function(){
    return view('registration');
})->name('registration');
Route::get('/cart', function(){
    return view('cart');
})->name('cart');

?>
