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

//Route::get('/', function () {
//    return view('auth/login');
//});
Route::get('/', 'HomeController@index')->name('home');
Route::get('/favorites','FavoritesController@index')->name('favorites');
Route::get('/following','FollowingController@index')->name('following');
Route::get('/userprofile','UserProfileController@index')->name('userProfile');
Route::get('/profile','ProfileController@index')->name('profile');
