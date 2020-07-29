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
Route::group(['prefix' => 'gio-hang'], function () {
    Route::get('hien-thi-san-pham.html', 'CartController@index')->name('guest.cart.index');
    Route::post('them-san-pham.html', 'CartController@add')->name('guest.cart.add');
    Route::post('xoa-san-pham.html', 'CartController@del')->name('guest.cart.del');
    Route::post('cap-nhat-san-pham.html', 'CartController@update')->name('guest.cart.update');
});

// Customer
Route::group(['prefix' => 'nguoi-dung'], function () {
    Route::get('dang-nhap.html', 'LoginController@index')->name('guest.user.login');
    Route::post('dang-nhap.html', 'LoginController@login')->name('guest.user.login');
    Route::get('dang-xuat.html', 'LogoutController@logout')->name('guest.user.logout');
    Route::get('dang-ky.html', 'RegisterController@index')->name('guest.user.index');
});


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
