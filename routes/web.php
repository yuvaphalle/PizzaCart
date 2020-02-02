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

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' =>'admin','middleware'=>'auth'], function (){
   Route::get('/',function(){
       return view('admin.index');
    })->name('admin.index');
});
