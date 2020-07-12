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
        // admin/login
        Route::get('/', ['as' => 'admin.index', 'uses' => 'LoginController@adminIndex']);
        Route::post('/', ['as' => 'admin.login', 'uses' => 'LoginController@adminLogin']);
        // admin/
        Route::get('login', ['as' => 'admin.index', 'uses' => 'LoginController@adminIndex']);
        Route::post('login', ['as' => 'admin.login', 'uses' => 'LoginController@adminLogin']);
    });

    Route::group(['middleware' => ['auth']], function () {
        // admin/dashboard
        Route::get('dashboard', ['as' => 'admin.dashboard', 'uses' => 'HomeController@adminIndex']);
        // admin/logout
        Route::get('logout', ['as' => 'admin.logout', 'uses' => 'LoginController@adminLogout']);
    });

});



