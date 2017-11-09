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
    return redirect('/login');
});

Route::group(['middleware' => ['web']], function () {

    Route::get('/client/create', "ClientsController@create");
    Route::post('/client/create', "ClientsController@store");

    Route::get('/client/delete/{id}', "ClientsController@destroy");

    Route::get('/client/edit/{id}', "ClientsController@edit");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
