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
    return view('public.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::group(['prefix' => '/admin'], function () {
    Route::get('/dashboard', 'admin\common\DashBoardController@index')->name('Dashboard');

    Route::get('/settings', 'admin\setting\SettingController@showSettingPage')->name('Settings');

});
