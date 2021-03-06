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
    return redirect('home');
});

Route::get('home', 'HomeController@index');
Route::post('home/login', 'HomeController@login');
Route::get('home/logout', 'HomeController@logout');

Route::group(['namespace' => 'ContractAdmin'], function() {
    Route::get('cp', 'ContractProgramController@index');
});

