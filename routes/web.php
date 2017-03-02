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

Route::middleware('auth')->group(function () {
    Route::get('logout', 'Auth\LoginController@logout')->name('auth.logout');
    Route::get('/gestion', 'BackendController@index')->name('backend.home');
});

Route::get('/home', 'HomeController@index');
