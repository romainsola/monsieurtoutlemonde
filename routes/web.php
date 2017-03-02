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
    Route::get('/gestion', 'BlogController@index')->name('backend.home');
    Route::get('/gestion/articles', 'ArticleController@index')->name('backend.article.liste');
    Route::get('/gestion/articles/{n}', 'ArticleController@index')->name('backend.article.vue');
    Route::get('/gestion/commentaires', 'CommentaireController@index')->name('backend.commentaire.liste');
});

Route::get('/home', 'HomeController@index');
