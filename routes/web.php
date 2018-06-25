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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/teste', 'Teste\\TesteController');
Route::resource('patrimonio/tipo', 'patrimonio\\TipoController');
Route::resource('patrimonio/estado', 'patrimonio\\EstadoController');