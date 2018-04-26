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

Route::get('/', 'controladorHola@index')->name('root');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/productos','ProductController@listado')->name('listado');

Route::get('/productos/create', 'ProductController@create')->name('altaProducto');

Route::post('/productos', 'ProductController@store')->name('store');

Route::get('/productos/edit/{product_id}', 'ProductController@edit')->name('edit');

Route::post('/productos/update', 'ProductController@update')->name('update');

Route::get('/producto/{product_id}', 'ProductController@destroy')->name('destroy');

Auth::routes();
