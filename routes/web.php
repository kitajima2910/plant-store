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
Route::prefix('admin')->group(function() {

    Route::group(['middleware' => 'guest'], function () {
        // login
        Route::match(['get', 'post'], '/', ['as' => 'admin.login', 'uses' => 'LoginController@adminLogin']);
        Route::match(['get', 'post'], 'login', ['as' => 'admin.login', 'uses' => 'LoginController@adminLogin']);
    });

    Route::group(['middleware' => 'auth'], function () {
        
    });

});

