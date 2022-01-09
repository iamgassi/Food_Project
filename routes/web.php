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

Route::get('/', function ()
 {
    return view('welcome');})->name('welcome');



Route::get('/index', 'IndexController@index')->name('index');
Route::get('/menu', 'IndexController@menu')->name('menu');
Route::get('/aboutus', 'IndexController@aboutus')->name('aboutus');
Route::get('/contact', 'IndexController@contact')->name('contact');

Route::get('/order','OrderController@order')->name('order.home');


Route::get('/order_only','OrderController@order_only')->name('order.order_only');


//order and delivery
Route::get('/order_and_delivery','Order_deliveryController@index')->name('order.order_and_delivery');

Route::post('/order_delivery_store','Order_deliveryController@store')->name('order.store');


Route::get('/express','Expressapi@getData');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

