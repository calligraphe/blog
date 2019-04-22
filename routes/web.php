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

Route::get('/', 'HomeController@index');

Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/{post_name}', 'ArticlesController@show');

Route::get('/contact', 'ContactController@create');
Route::get('contact.list', 'ContactController@show');
Route::post('contact', 'ContactController@store'); // quand le bouton submit est clique