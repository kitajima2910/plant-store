<?php

use Illuminate\Support\Facades\Route;

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

// frontend
Route::get('/', ['as' => 'guest.index', 'uses' => 'HomeController@guestIndex']);

// backend
Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => ['guest']], function () {
        // login
        Route::get('/', ['as' => 'admin.index', 'uses' => 'LoginController@adminIndex']);
        Route::get('login', ['as' => 'admin.index', 'uses' => 'LoginController@adminIndex']);
        Route::post('/', ['as' => 'admin.login', 'uses' => 'LoginController@adminLogin']);
        Route::post('login', ['as' => 'admin.login', 'uses' => 'LoginController@adminLogin']);
    });

    Route::group(['middleware' => ['auth']], function () {
        Route::get('dashboard', ['as' => 'admin.dashboard', 'uses' => 'HomeController@adminIndex']);
        Route::get('logout', ['as' => 'admin.logout', 'uses' => 'LoginController@adminLogout']);
    });

});



