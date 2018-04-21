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

Route::GET('/', 'controladorHola@index')->name('home');

Route::GET('/productos','productosController@listado')->name('listado');

Route::GET('/productos/create', 'productosController@create')->name('altaProducto');

Route::POST('/productos', 'productosController@store')->name('store');

Route::DELETE('/producto/{product_id}', 'productosController@destroy')->name('destroy');
