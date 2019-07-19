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

Route::group(['middleware' => 'auth'], function(){
  Route::get('community/create', 'Admin\CommunityController@add');
  Route::post('community/create', 'Admin\CommunityController@create');
  Route::get('community', 'Admin\CommunityController@index');
  Route::get('community/edit', 'Admin\CommunityController@edit');
  Route::post('community/edit', 'Admin\CommunityController@update');
  Route::get('community/delete', 'Admin\CommunityController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'CommunityController@toppage');

Route::get('community/page/{id}', 'CommunityController@show');

Route::get('search','SearchController@index');
