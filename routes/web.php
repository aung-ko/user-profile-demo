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

Route::get('/', 'UserProfileController@create');
Route::get('/home', 'UserProfileController@create');

Route::post('userProfiles', 'UserProfileController@store')->name('userProfiles');