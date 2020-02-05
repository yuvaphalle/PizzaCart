<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/','FrontController@index')->name('home');
Route::get('/pizzas','FrontController@pizzas')->name('pizzas');
Route::get('/pizza','FrontController@pizza')->name('pizza');


Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
 Route::get('home', 'HomeController@index');
Route::resource('/cart', 'cartController');


Route::group(['prefix' =>'admin','middleware'=>['auth','admin']], function (){
   Route::get('/',function(){
       return view('admin.index');
    })->name('admin.index');

   Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');

});

Route::get('checkout','checkoutcontroller@step1');
Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
Route::resource('/address','AddressController');
