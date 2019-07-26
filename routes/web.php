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
  Route::get('communityrep/communitycreate', 'CommunityRepController@communityadd');
  Route::post('communityrep/communitycreate', 'CommunityRepController@communitycreate');
  Route::get('communityrep/communityedit', 'CommunityRepController@communityedit');
  Route::post('communityrep/communityedit', 'CommunityRepController@communityupdate');
  Route::get('communityrep/communitydelete', 'CommunityRepController@communitydelete');
  Route::get('communityrep', 'CommunityRepController@index');
  Route::get('communityrep/newscreate', 'CommunityRepController@newsadd');
  Route::post('communityrep/newscreate', 'CommunityRepController@newscreate');
  Route::get('communityrep/newsedit', 'CommunityRepController@newsedit');
  Route::post('communityrep/newsedit', 'CommunityRepController@newsupdate');
  Route::get('communityrep/newsdelete', 'CommunityRepController@newsdelete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ReadingPageController@toppage');

Route::get('community/{permalink}', 'ReadingPageController@communityshow');

Route::get('news/{news_permalink}', 'ReadingPageController@newsshow');

Route::get('search','SearchController@index');
