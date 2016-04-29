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
Route::pattern('id', '[1-9][0-9]*');
Route::get('/', ['as' => 'home', 'uses' => 'FrontController@index']);
Route::get('/article/{id}', 'FrontController@show');
Route::get('/user/{id}', 'FrontController@showPostByUser');
Route::get('category/{id}', 'FrontController@showPostByCat');

Route::group(['middleware' => ['web']], function () {

    Route::any('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout');


});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('post', 'PostController');
});