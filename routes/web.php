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
Route::get('/newKit','CreateKitController@index')->name('newKit');
Route::get('/kit/{kit_id}/newItem','CreateItemController@index')->name('newItem');
Route::get('/kit/{kit_id}','KitController@index')->name('kit');
Route::get('/item/{item_id}','ItemController@index')->name('item');
Route::get('/profile/{user_id}','ProfileController@index')->name('profile');
Route::get('/favorites/{id}','FavoritesController@toggle');
Route::get('/following/{id}','FollowingController@toggle');
Route::get('/users','UsersController@index')->name('users');
Route::get('/kits','KitsController@index')->name('kits');
Route::post('/createItem','CreateItemController@store')->name('createItem');
Route::post('/createKit','CreateKitController@createKit')->name('createKit');
Route::get('/item/{kit_item_id}/delete','ItemController@delete')->name('deleteItem');
