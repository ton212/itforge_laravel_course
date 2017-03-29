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

Route::get('/home', 'HomeController@index');

Route::get('/profile', 'UserController@getProfile')
    ->middleware('auth');

Route::get('/profile/edit', 'UserController@getUpdateProfile')
    ->middleware('auth');
Route::patch('/profile/edit', 'UserController@updateprofile')
    ->middleware('auth');


Route::resource('post', 'PostController');