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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::resource('/tasks', 'TaskController')->middleware('auth');

Route::namespace('Auth')->group(function () {
    Route::get('/login', [
        'as' => 'login',
        'uses' => 'LoginController@showLoginForm',
    ])->middleware('login');

    Route::get('/logout', [
        'as' => 'logout',
        'uses' => 'LoginController@logout',
    ])->middleware('auth');
});

Route::namespace('Admin')->group(function () {
    Route::group(['prefix' => '/admin', 'middleware' => 'admin'], function () {
        Route::get('/', 'HomeController@index');
        Route::get('/home', 'HomeController@index');
        Route::get('/task', 'TaskController@index');
    });
});
