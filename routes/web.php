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
Route::get('/', ['as' => 'guest.index', 'uses' => 'ProductController@index']);

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

        // admin/categories
        Route::group(['prefix' => 'categories'], function () {
            //admin/categories/list
            Route::get('/index',['as'  => 'admin.categories.index','uses'=> 'CategoryController@adminIndex']);
            Route::get('/add',['as'  => 'admin.categories.add','uses'=> 'CategoryController@adminAdd']);
            Route::get('/recover',['as'  => 'admin.categories.recover','uses'=> 'CategoryController@adminRecover']);
            Route::post('store', ['as'  => 'admin.products.store', 'uses' => 'CategoryController@adminStore']);
        });
        
        Route::group(['prefix' => 'menu'], function () {
            //admin/menu/list
            Route::get('/index',['as'  => 'admin.menu.index','uses'=> 'MenuController@adminIndex']);
            Route::get('/add',['as'  => 'admin.menu.add','uses'=> 'MenuController@adminAdd']);
            Route::get('/recover',['as'  => 'admin.menu.recover','uses'=> 'MenuController@adminRecover']);
        });
        Route::group(['prefix' => 'products'], function () {
            //admin/products/list
            Route::get('/index',['as'  => 'admin.products.index','uses'=> 'ProductController@adminIndex']);
            Route::get('/add',['as'  => 'admin.products.add','uses'=> 'ProductController@adminAdd']);
            Route::get('/recover',['as'  => 'admin.products.recover','uses'=> 'ProductController@adminRecover']);
        });
        Route::group(['prefix' => 'users'], function () {
            //admin/users/list
            Route::get('/index',['as'  => 'admin.users.index','uses'=> 'UserController@adminIndex']);
            Route::get('/add',['as'  => 'admin.users.add','uses'=> 'UserController@adminAdd']);
            Route::get('/recover',['as'  => 'admin.users.recover','uses'=> 'UserController@adminRecover']);
        });
        Route::group(['prefix' => 'settings'], function () {
            //admin/setting/list
            Route::get('/index',['as'  => 'admin.settings.index','uses'=> 'SettingController@adminIndex']);
            Route::get('/add',['as'  => 'admin.settings.add','uses'=> 'SettingController@adminAdd']);
            Route::get('/recover',['as'  => 'admin.settings.recover','uses'=> 'SettingController@adminRecover']);
        });
        Route::group(['prefix' => 'sliders'], function () {
            //admin/slider/list
            Route::get('/index',['as'  => 'admin.sliders.index','uses'=> 'SliderController@adminIndex']);
            Route::get('/add',['as'  => 'admin.sliders.add','uses'=> 'SliderController@adminAdd']);
            Route::get('/recover',['as'  => 'admin.sliders.recover','uses'=> 'SliderController@adminRecover']);
        });
        Route::group(['prefix' => 'customers'], function () {
            //admin/customers/list
            Route::get('/index',['as'  => 'admin.customers.index','uses'=> 'CustomerController@adminIndex']);
        });
    });

});



