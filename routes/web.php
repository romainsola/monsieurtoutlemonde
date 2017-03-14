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


    Route::get('/gestion', 'ArticleController@index')->name('backend.home');

    Route::prefix('article')->group(function () {
        Route::get('/new', 'ArticleController@add')->name('article.new');
        Route::post('/new', 'ArticleController@store');
        Route::get('/edit/{article}', 'ArticleController@edit')->name('article.edit');

        Route::get('/remove/{article}', 'ArticleController@remove')->name('article.remove');
    });
});

Route::get('/home', 'HomeController@index');
