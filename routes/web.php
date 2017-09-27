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

Route::get('/', 'HomeController@index')->name('home');

Route::view('/favorites','favorites')->middleware('auth')->name('favorites');
Route::view('/following','following')->middleware('auth')->name('following');
Route::view('/profile','profile')->middleware('auth')->name('profile');
