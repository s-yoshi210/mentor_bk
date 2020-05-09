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

/* TOP */
Route::get('/', 'TopController@index')->name('top');

/* 投稿 */
Route::get('post', 'PostController@index')->name('post');
Route::post('post', 'PostController@store')->name('store');

//Route::get('post/{post_id}', 'PostController@show')->name('show');

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


