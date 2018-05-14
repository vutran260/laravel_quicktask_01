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
Route::resource('/tasks', 'TaskController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Auth')->group(function () {
    Route::get('/login', [
        'as' => 'login',
        'uses' => 'LoginController@showLoginForm',
    ])->middleware('guest');

    Route::get('/logout', [
        'as' => 'logout',
        'uses' => 'LoginController@logout',
    ])->middleware('auth');
});
