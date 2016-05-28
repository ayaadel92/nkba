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

Route::get('/', function () {
    
Notify::success('مرحبا','تسجيل دخول');
    return view('home');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::post('transfer', 
  ['as' => 'transfer_store', 'uses' => 'TransferController@transfer']);
