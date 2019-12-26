<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'User'], function () {
    Route::get('/', function () {
        dd('This is the User module index page. Build something great!');
    });
});

Route::get('/', 'HomeController@index')->name('homes.index');
Route::get('/login', 'MemberController@showLoginForm')->name('members.login');
Route::post('/login', 'MemberController@login')->name('members.login');
Route::get('/register', 'MemberController@showRegisterForm')->name('members.register');
Route::post('/register', 'MemberController@register')->name('members.register');
Route::get('/mypage', 'MemberController@showMyPage')->name('members.mypage');