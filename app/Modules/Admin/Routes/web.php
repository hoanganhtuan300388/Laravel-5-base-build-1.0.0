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

Route::group(['prefix' => 'admin'], function () {
    //Route::get('/', function () {
    //    dd('This is the Admin module index page. Build something great!');
    //});

    Route::get('login', 'ManagerController@login')->name('admin.managers.login');
    Route::post('login', 'ManagerController@signIn')->name('admin.managers.login');

    Route::group(['middleware' => 'admin.auth'], function () {

        /** begin /dashboards */
        Route::get('dashboards', 'DashboardController@index')->name('admin.dashboards.index');
        /** end /dashboards */


        /** begin /managers */
        Route::get('managers', 'ManagerController@index')->name('admin.managers.index');
        Route::post('managers/search', 'ManagerController@search')->name('admin.managers.search');
        Route::get('managers/create', 'ManagerController@create')->name('admin.managers.create');
        Route::post('managers', 'ManagerController@store')->name('admin.managers.store');
        Route::get('managers/{id}', 'ManagerController@show')->name('admin.managers.show')->where('id', '[0-9]+');
        Route::get('managers/{id}/edit', 'ManagerController@edit')->name('admin.managers.edit')->where('id', '[0-9]+');
        Route::put('managers/{id}', 'ManagerController@update')->name('admin.managers.update')->where('id', '[0-9]+');
        Route::delete('managers/{id}', 'ManagerController@destroy')->name('admin.managers.destroy')->where('id', '[0-9]+');
        Route::get('managers/logout', 'ManagerController@logout')->name('admin.managers.logout');
        /** end /managers */

    });

});
