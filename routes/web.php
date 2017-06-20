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

Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'web'], function () {
    Route::get('/checkout', 'CheckoutController@index');
    Route::post('/checkout', 'CheckoutController@check');
    Route::get('/checkout/success', 'CheckoutController@success');
    Route::get('/customer','CustomerController@index');
    Route::get('/logout','CustomerController@logout');
});
