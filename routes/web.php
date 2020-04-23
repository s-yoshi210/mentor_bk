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

/* TOP */
Route::get('/', 'TopController@index');

/* ログイン・アカウント作成 */
Route::get('signin', function () {
    return view('signin');
});

Route::get('account', function () {
    return view('account');
});

/* 投稿 */
Route::get('post', function () {
    return view('post');
});

Route::get('post_detail', function () {
    return view('post_detail');
});

Route::get('post_new', function () {
    return view('post_new');
});

/* メンター */
Route::get('matching', function () {
    return view('matching');
});

Route::get('mentor', function () {
    return view('mentor');
});

Route::get('mentor_detail', function () {
    return view('mentor_detail');
});

/* プロフィール */
Route::get('profile', function () {
    return view('profile');
});

Route::get('profile_edit', function () {
    return view('profile_edit');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
