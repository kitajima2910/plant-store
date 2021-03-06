<?php

use Illuminate\Support\Facades\Artisan;
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
// Home
Route::get('/', 'HomeController@index');
Route::get('trang-chu.html', 'HomeController@index')->name('guest.home');
Route::post('trang-chu.html', 'HomeController@searchProducts')->name('guest.searchProducts');

// Product
Route::get('san-pham/{slug}.html', 'ProductController@viewProductDetails')->name('guest.viewProductDetails');
Route::get('ajax/san-pham/danh-muc/hien-thi.html', 'ProductController@viewProduct')->name('guest.viewProduct');
Route::get('ajax/san-pham/danh-muc.html', 'ProductController@ajaxViewProduct')->name('guest.ajaxViewProduct');
Route::get('san-pham.html', 'ProductController@index')->name('guest.product.index');
Route::get('ajax/san-pham.html', 'ProductController@ajaxIndex')->name('guest.product.ajaxIndex');
Route::get('ajax/san-pham/danh-gia.html', 'ProductController@ajaxRating')->name('guest.product.ajaxRating');

// About
Route::get('gioi-thieu.html', 'AboutController@index');

// Contact
Route::get('lien-he.html','ContactController@index')->name('guest.contact.index');
Route::post('lien-he.html','ContactController@email')->name('guest.contact.email');

// Post
Route::get('bai-viet.html', 'PostController@index');
Route::get('ajax/bai-viet.html', 'PostController@ajaxIndex')->name('guest.post.ajaxIndex'); 
Route::get('/{slug}.html', 'PostController@viewPostDetails')->name('guest.viewPostDetails');

// Comment
Route::get('ajax/bai-viet/comments.html', 'CommentController@store')->name('guest.comment.store');

// Wishlist
Route::group(['prefix' => 'yeu-thich'], function () {
    Route::get('hien-thi-san-pham.html', 'WishlistController@index')->name('guest.wishlist.index');
    Route::get('them-san-pham.html', 'WishlistController@add')->name('guest.wishlist.add');
    Route::get('xoa-san-pham.html', 'WishlistController@del')->name('guest.wishlist.del');
    Route::get('xoa-tat-ca-san-pham.html', 'WishlistController@delall')->name('guest.wishlist.delall');
});

// Cart
Route::group(['prefix' => 'gio-hang'], function () {
    Route::get('hien-thi-san-pham.html', 'CartController@index')->name('guest.cart.index');
    Route::get('them-san-pham.html', 'CartController@add')->name('guest.cart.add');
    Route::get('xoa-san-pham.html', 'CartController@del')->name('guest.cart.del');
    Route::get('cap-nhat-san-pham.html', 'CartController@update')->name('guest.cart.update');
});

// Customer
Route::group(['prefix' => 'nguoi-dung'], function () {
    Route::get('dang-nhap.html', 'LoginController@index')->name('guest.user.login');
    Route::post('dang-nhap.html', 'LoginController@login')->name('guest.user.login');
    Route::get('dang-xuat.html', 'LogoutController@logout')->name('guest.user.logout');
    Route::post('dang-ky.html', 'RegisterController@store')->name('guest.user.register');
    Route::get('dang-ky.html', 'RegisterController@index')->name('guest.user.register');
});

// facebook
Route::get('/redirect/{provider}', 'SocialController@redirect')->name('guest.user.redirect.social');
Route::get('trang-chu.html/callback/{provider}', 'SocialController@callback');

// Checkout
Route::group(['prefix' => 'thanh-toan'], function () {
    Route::get('thong-tin-dat-hang.html', 'CheckoutController@index')->name('guest.checkout.index');
    Route::post('thong-tin-dat-hang.html', 'CheckoutController@process')->name('guest.checkout.process');
    Route::get('thong-tin-gui-mail.html', 'CheckoutController@mail')->name('guest.checkout.mail');
    // QR
    Route::get('quet-ma-qr.html', 'QRCodeController@index')->name('guest.qr.index');
});


// Backend
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::group(['middleware' => ['guest']], function () {
        // admin
        Route::get('/', 'AdminController@index')->name('admin.index');
        Route::post('/', 'AdminController@login')->name('admin.login');
        Route::post('/', 'AdminController@checkQRUser')->name('admin.qr.login');
        // admin/login
        Route::get('login', 'AdminController@index')->name('admin.index');
        Route::post('login', 'AdminController@login')->name('admin.login');
    });

    Route::group(['middleware' => ['auth']], function () {
        // admin/dashboard
        Route::get('dashboard', 'HomeController@index')->name('admin.dashboard');
        // admin/qrcode
        Route::get('qrcode', 'QRCodeController@index')->name('admin.qrcode');
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
        Route::get('ajax/orders/details/printOrder/', 'ProductController@print')->name('admin.product.print');
        // admin/sliders
        Route::resource('sliders', 'SliderController');
        // admin/settings
        Route::resource('settings', 'SettingController');
        // admin/blogs
        Route::resource('posts', 'PostController');
        // admin/comment
        Route::resource('comments', 'CommentController');
        // admin/orders
        Route::resource('orders', 'OrderController');
        Route::get('ajax/orders/status', 'OrderController@ajaxStatus')->name('admin.order.ajaxStatus');
        Route::get('ajax/orders/details', 'OrderController@ajaxDetails')->name('admin.order.ajaxDetails');
        Route::get('ajax/orders/details/printOrder/{checkoutCode}', 'OrderController@printOrder')->name('admin.order.printOrder');
    });

});

// Clear cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// Version
Route::get('/phpinfo', function() {
    return phpinfo();
});
