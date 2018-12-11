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

Route::group(
[
    'prefix' => 'clients',
], function () {

    Route::get('/', 'ClientsController@index')
         ->name('clients.client.index');

    Route::get('/create','ClientsController@create')
         ->name('clients.client.create');

    Route::get('/show/{client}','ClientsController@show')
         ->name('clients.client.show')
         ->where('id', '[0-9]+');

    Route::get('/{client}/edit','ClientsController@edit')
         ->name('clients.client.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'ClientsController@store')
         ->name('clients.client.store');
               
    Route::put('client/{client}', 'ClientsController@update')
         ->name('clients.client.update')
         ->where('id', '[0-9]+');

    Route::delete('/client/{client}','ClientsController@destroy')
         ->name('clients.client.destroy')
         ->where('id', '[0-9]+');

});
