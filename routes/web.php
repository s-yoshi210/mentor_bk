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

Route::get('/home', 'HomeController@index')->name('home');

/* TOP */
Route::get('/', 'TopController@index');

/* ログイン・アカウント作成 */
//Route::get('signin', function () {
//    return view('signin');
//});

//Route::get('account', function () {
//    return view('account');
//});

/* 投稿 */
Route::get('/post', 'PostController@index')->name('post');
Route::post('/post', 'PostController@store')->name('store');

Route::get('post_detail', function () {
    return view('post_detail');
});



/* メンター */
Route::get('/matching', 'MatchingController@index')->name('matching');

Route::get('/mentor', 'MentorController@index')->name('mentor');

Route::get('mentor_detail', function () {
    return view('mentor_detail');
});

/* プロフィール */
Route::get('profile', 'ProfileController@index')->name('profile');

Route::get('profile_edit', function () {
    return view('profile_edit');
});


