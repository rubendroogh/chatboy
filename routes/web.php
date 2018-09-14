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

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/message/send', 'MessageController@sendMessage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/messenger/new', 'HomeController@newGroup')->name('newGroup');
Route::post('/messenger/new', 'HomeController@createNewGroup')->name('createNewGroup');
Route::get('/messenger/{user_id?}', 'HomeController@messenger')->name('messenger');
