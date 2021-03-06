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

Auth::routes(['verify' => true]);

Route::group(['prefix' => 'cont', 'middleware' => ['auth']], function () {
    Route::group(['middleware' => ['customer.restrict']], function () {
        Route::get('/adauga-societate', 'CustomerController@create')->name('customer.create');
        Route::post('/adauga-societate', 'CustomerController@store');
    });

    Route::group(['middleware' => ['customer', 'verified']], function () {
        Route::get('/arata-societate', 'CustomerController@show')->name('customer.show');
        Route::get('/editeaza-societate', 'CustomerController@edit')->name('customer.edit');
        Route::post('/editeaza-societate', 'CustomerController@update');
        
        Route::get('/', 'HomeController@index')->name('dashboard');
        Route::get('/home', 'HomeController@index')->name('home');
    });
});
