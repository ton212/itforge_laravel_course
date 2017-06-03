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


Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', 'UserController@getProfile');

    Route::get('/profile/edit', 'UserController@getUpdateProfile');
    Route::patch('/profile/edit', 'UserController@updateprofile');
});


Route::resource('post', 'PostController');
Route::resource('post.comment', 'CommentController', [
    'except' => ['index', 'create'],
    'middleware' => 'auth'
]);