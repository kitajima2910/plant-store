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
            // admin/categories/list
            Route::get('index', ['as'  => 'admin.categories.index','uses'=> 'CategoryController@adminIndex']);
            // admin/categories/create
            Route::get('create' ,['as'  => 'admin.categories.create','uses'=> 'CategoryController@adminCreate']);
            // admin/categories/recover
            Route::get('recover', ['as'  => 'admin.categories.recover','uses'=> 'CategoryController@adminRecover']);
            // admin/categories/store
            Route::post('store', ['as'  => 'admin.categories.store', 'uses' => 'CategoryController@adminStore']);
            // admin/categories/destroy
            Route::get('destroy/{id}', ['as'  => 'admin.categories.destroy', 'uses' => 'CategoryController@adminDestroy']);
        });
        
        // admin/menu
        Route::group(['prefix' => 'menu'], function () {
            //admin/menu/list
            Route::get('index', ['as'  => 'admin.menu.index','uses'=> 'MenuController@adminIndex']);
            // admin/categories/create
            Route::get('create', ['as'  => 'admin.menu.create','uses'=> 'MenuController@adminCreate']);
            // admin/categories/recover
            Route::get('recover', ['as'  => 'admin.menu.recover','uses'=> 'MenuController@adminRecover']);
        });

        // admin/products
        Route::group(['prefix' => 'products'], function () {
            //admin/products/list
            Route::get('index', ['as'  => 'admin.products.index','uses'=> 'ProductController@adminIndex']);
            //admin/products/create
            Route::get('create', ['as'  => 'admin.products.create','uses'=> 'ProductController@adminCreate']);
            //admin/products/recover
            Route::get('recover', ['as'  => 'admin.products.recover','uses'=> 'ProductController@adminRecover']);
        });

        //  admin/users
        Route::group(['prefix' => 'users'], function () {
            //admin/users/list
            Route::get('index', ['as'  => 'admin.users.index','uses'=> 'UserController@adminIndex']);
            //admin/users/create
            Route::get('create', ['as'  => 'admin.users.create','uses'=> 'UserController@adminCreate']);
            //admin/users/recover
            Route::get('recover', ['as'  => 'admin.users.recover','uses'=> 'UserController@adminRecover']);
        });

        //  admin/setting
        Route::group(['prefix' => 'settings'], function () {
            //admin/setting/list
            Route::get('index', ['as'  => 'admin.settings.index','uses'=> 'SettingController@adminIndex']);
            //admin/setting/create
            Route::get('create', ['as'  => 'admin.settings.create','uses'=> 'SettingController@adminCreate']);
            //admin/setting/recover
            Route::get('recover', ['as'  => 'admin.settings.recover','uses'=> 'SettingController@adminRecover']);
        });

        // addmin/slider
        Route::group(['prefix' => 'sliders'], function () {
            //admin/slider/list
            Route::get('index', ['as'  => 'admin.sliders.index','uses'=> 'SliderController@adminIndex']);
            //admin/slider/create
            Route::get('create', ['as'  => 'admin.sliders.create','uses'=> 'SliderController@adminCreate']);
            //admin/slider/recover
            Route::get('recover', ['as'  => 'admin.sliders.recover','uses'=> 'SliderController@adminRecover']);
        });

        //admin/customer
        Route::group(['prefix' => 'customers'], function () {
            //admin/customers/list
            Route::get('/index',['as'  => 'admin.customers.index','uses'=> 'CustomerController@adminIndex']);
        });
    });

});



