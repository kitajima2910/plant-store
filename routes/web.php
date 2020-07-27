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

// Frontend
Route::get('/', 'HomeController@index');
Route::get('trang-chu.html', 'HomeController@index')->name('guest.trangChu');
Route::get('{slug}.html', 'ProductController@viewProductDetails')->name('guest.viewProductDetails');

// Cart
Route::post('them-gio-hang.html', 'CartController@add')->name('guest.cart.add');

// Backend
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::group(['middleware' => ['guest']], function () {
        // admin
        Route::get('/', 'AdminController@index')->name('admin.index');
        Route::post('/', 'AdminController@login')->name('admin.login');
        // admin/login
        Route::get('login', 'AdminController@index')->name('admin.index');
        Route::post('login', 'AdminController@login')->name('admin.login');
    });

    Route::group(['middleware' => ['auth']], function () {
        // admin/dashboard
        Route::get('dashboard', 'HomeController@index')->name('admin.dashboard');
        // admin/logout
        Route::get('logout', 'AdminController@logout')->name('admin.logout');
        // admin/filemanager
        Route::get('filemanager', 'AdminController@filemanager')->name('admin.filemanager');
        // admin/categories
        Route::resource('categories', 'CategoryController');
        // admin/menus
        Route::resource('menus', 'MenuController');
        // admin/users
        Route::resource('users', 'UserController');
        // admin/products
        Route::resource('products', 'ProductController');
        // admin/sliders
        Route::resource('sliders', 'SliderController');
        // admin/settings
        Route::resource('settings', 'SettingController');
    });

});
