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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/facebook', 'Auth\SocialController@redirectToFacebook');
Route::get('/auth/facebook/callback', 'Auth\SocialController@handleFacebookCallback');

Route::get('/auth/google', 'Auth\SocialController@redirectToGoogle');
Route::get('/auth/google/callback', 'Auth\SocialController@handleGoogleCallback');



Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login');



Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', 'Admin\AdminController@index')->name('admin.index');
    Route::get('/admin1', 'Admin\AdminController@index1');
});

Route::get('/switch/role', 'Admin\AdminController@switch_')->name('switch');
Route::post('/logout', 'Auth\AdminLoginController@logout')->name('logout');