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


//Admin関係

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



//Auth::routes();

//以降設定変更
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');


  //ユーザー登録
  Route::get('GcnJBe6DwdsK_register', 'Auth\RegisterController@showRegistrationForm')->name('register');
  Route::post('GcnJBe6DwdsK_register', 'Auth\RegisterController@register');



//view関係

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ReadingPageController@toppage');

Route::get('community/{permalink}', 'ReadingPageController@communityshow');

Route::get('news/{news_permalink}', 'ReadingPageController@newsshow');

Route::get('about-newstylehustle','ReadingPageController@about');

Route::get('news', 'ReadingPageController@indexnews');

Route::get('lesson', 'ReadingPageController@lessonshow');

Route::get('video','ReadingPageController@videopageshow');

Route::get('community', 'ReadingPageController@indexcommunity');

Route::get('search','SearchController@index');





//contact関係
Route::get('contact','ContactsController@index');
Route::post('contact/confirm','ContactsController@confirm');
Route::post('contact/correct','ContactsController@correct');
Route::post('contact/complete','ContactsController@complete');
