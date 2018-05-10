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
Route::get('/logout','userController@userLogout')->name('logout');
Route::get('/loginSuccess','userController@userLogin');
Route::get('/addToCart/{id}','userController@toCart')->name('addToCart');
Route::get('/addToCartREST/{id}','userController@toCartREST')->name('addToCartREST');
Route::get('/clearCart/','userController@clearCart')->name('clearCart');
Route::get('/cart/','userController@viewCart')->name('cart');
Route::get('/viewCartREST', 'userController@viewCartREST')->name('viewCartREST');


Route::get('/product/{id}', 'productController@show')->name('product');
Route::get('/registration', function(){
    return view('registration');
})->name('registration');

Route::get('/dash', function(){
    return view('dash');
})->name('dash');

Route::get('/checkout', function (){return view('checkout');})->name('checkout');
Route::post('/checkout', function (){return view('checkout');})->name('checkout');
Route::get('/cart_download', function (){
    $items = array();
    foreach (Session::get('cart') as $id => $count) {
        $items[] = \App\Http\Controllers\productController::get($id);
    }
    return view('cart_download', ['items' => $items]);
})->name('cart_download');

Route::get('/profile', function (){
    $categories = array(
        array("title" => "E-Commerce", "icon" => "fab fa-sellcast"),
        array("title" => "Event", "icon" => "fas fa-calendar"),
    );
    for($i = 0; $i < 2; $i++){
        $categories[$i]['products'] = array();
        for($j = 0; $j < 3; $j++){
            $categories[$i]['products'][] = \App\Http\Controllers\productController::get($i * 3 + $j + 1);
        }
    }
    return view('profile', ['categories' => $categories]);
})->name('profile');

Route::post('/validateUpload', 'productController@validateUploadedProduct')->name('upload');
Route::get('/downloadTheme/{id}', 'productController@validateDownload')->name('download');

