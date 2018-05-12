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

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/facebook', 'Auth\SocialController@redirectToFacebook');
Route::get('/auth/facebook/callback', 'Auth\SocialController@handleFacebookCallback');

Route::get('/auth/google', 'Auth\SocialController@redirectToGoogle');
Route::get('/auth/google/callback', 'Auth\SocialController@handleGoogleCallback');


Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login');

Route::get('pay-with-paypal', 'Admin\Billings\PayPalController@payWithPayPal')->name('payWithPayPal');
Route::post('paypal','Admin\Billings\PayPalController@postPaymentWithPayPal')->name('post_payment_paypal');
Route::get('paypal/status',  'Admin\Billings\PayPalController@getPaymentStatus')->name('payPal.payment.status');

Route::group(['middleware' => 'admin'], function () {
    /*Adi from now on please put the Admin routes here.*/
    /*Authenticated Admin can execute these routes*/
    Route::get('/admin', 'Admin\AdminController@index')->name('admin.index');
    Route::get('/admin1', 'Admin\AdminController@index1');
    Route::get('/admin/users', 'UserController@getUsersPage');
    Route::get('/get/users', 'UserController@getBasicData')->name('getUsers');
    Route::get('/switch/role', 'Admin\AdminController@switch_')->name('switch');
    Route::post('/do-actions', 'Admin\AdminController@action')->name('action');
});

Route::post('/logout', 'Auth\AdminLoginController@logout')->name('logout');

Route::group(['middleware' => 'user'], function () {
    Route::get('/aboutus', function(){
        return view('aboutus');
    });
    Route::get('/services', 'ServicesController@index')->name('services');
    Route::get('/keywordtrading', 'ServicesController@keywordtrading')->name('keywordtrading');
    Route::get('pay-with-paypal', 'Admin\Billings\PayPalController@payWithPayPal')->name('payWithPayPal');
    Route::post('paypal','Admin\Billings\PayPalController@postPaymentWithPayPal')->name('post_payment_paypal');
    Route::get('paypal/status',  'Admin\Billings\PayPalController@getPaymentStatus')->name('payPal.payment.status');
/*Adi from now on please put the user routes here.*/
/*Authenticated user can execute these routes*/
});
