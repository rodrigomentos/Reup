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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('/productos', 'ProductoController@index')->name('productos');
Route::get('/registrar/producto', 'ProductoController@create');
Route::post('/registrar/producto', 'ProductoController@store');
Route::get('/editar/producto/{productoId}', 'ProductoController@edit');
Route::post('/editar/producto/{productoId}', 'ProductoController@update');
Route::post('/eliminar/producto/{productoId}', 'ProductoController@destroy');

Route::post('/registrar/venta', 'VentaController@store');