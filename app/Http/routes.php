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
//Route::get('/product', 'homeController@productDetails')->name('product');
Route::get('/product/{id}', 'homeController@productDetails')->name('product'); //<- Should be like this
Route::get('/registration', 'homeController@registration')->name('registration');

Route::get('/vd/{id}', 'homeController@demoView')->name('viewdemo');


Route::get('/cart', 'userController@viewCart')->name('cart');
Route::post('/validate','userController@validateLogin');
Route::get('/validate','userController@validateLogin');
Route::get('/logout','userController@userLogout')->name('logout');
Route::get('/loginSuccess','userController@userLogin');
Route::get('/addToCart/{id}','userController@toCart')->name('addToCart');
Route::get('/addToCartREST/{id}','userController@toCartREST')->name('addToCartREST');
Route::get('/clearCart/','userController@clearCart')->name('clearCart');
Route::get('/viewCartREST', 'userController@viewCartREST')->name('viewCartREST');
Route::post('/validateLoginREST', 'userController@validateLoginREST')->name('validateLoginREST');
Route::get('/dash', 'homeController@viewDashboard')->name('dash');

Route::post('/validateUpload', 'productController@validateUploadedProduct')->name('upload');
Route::get('/downloadTheme/{id}', 'productController@validateDownload')->name('download');
//Route::get('/cart/','userController@viewCart')->name('cart');
//Route::get('/product/{id}', 'productController@show')->name('product');

Route::get('/checkout', function (){return view('checkout');})->name('checkout');
Route::post('/checkout', function (){return view('checkout');})->name('checkout');
Route::get('/complete', 'userController@completePayment')->name('cart_download');

Route::get('/profile', 'userController@viewProfile')->name('profile');
Route::get('/themes/demo/{id}/index.html', function(){})->name('demo_url');
Route::post('/uploadImage', 'productController@uploadImage')->name('uploadImage');
Route::post('/edit/{id}', 'productController@edit')->name('edit');

