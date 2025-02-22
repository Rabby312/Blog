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

Route::get('/','PostsController@index');

Route::get('/posts/create','PostsController@create');

Route::get('/posts/{post}','PostsController@first');

Route::post('/posts','PostsController@store');