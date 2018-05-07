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
Route::get('/dashboard','homeController@dashboard');
Route::get('/search', 'homeController@searchProduct')->name('search');
Route::get('/product', 'homeController@productDetails')->name('product');
//Route::get('/product/{id}', 'homeController@productDetails')->name('product'); //<- Should be like this
Route::get('/registration', 'homeController@registration')->name('registration');
Route::get('/cart', 'userController@viewCart')->name('cart');
Route::post('/validate','userController@validateLogin');
Route::get('/validate','userController@validateLogin');
Route::get('/logout','userController@userLogout');
Route::get('/loginSuccess','userController@userLogin');
Route::get('/addToCart/{id}','userController@toCart')->name('addToCart');
Route::get('/clearCart/','userController@clearCart')->name('clearCart');
Route::get('/cart/','userController@viewCart')->name('cart');
//Route::get('/product/{id}', 'productController@show')->name('product');
Route::get('/registration', function(){
    return view('registration');
})->name('registration');
Route::get('/dash', function(){
    return view('dash');
});


