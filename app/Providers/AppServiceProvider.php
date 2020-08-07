<?php

namespace App\Providers;

use App\Category;
use App\Menu;
use App\OrderDetail;
use App\Post;
use App\Product;
use App\Setting;
use App\Wishlist;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        View::composer(['*'], function ($view) {

            // Cart quantity
            $cartQuantityShare = Cart::count();
            // Settings
            $settings = Setting::where('status', 1)->get();
            foreach ($settings as $item) {
                $settingsArrShare[$item->config_key] = $item->config_value;
            }
            // Products
            $productsShare = Product::where('status', 1)->orderBy('id', 'desc')->take(2)->get();
            // Menus
            $menusShare  = Menu::where('status', 1)->where('parent_id', 0)->get();
            // Posts
            $postShare = Post::where('status', 1)->orderBy('id', 'desc')->take(4)->get();

            // Best Sellers
            $bestSellerShare = DB::table('order_details')->join('products','order_details.product_id','=','products.id')->inRandomOrder()->take(3)->get();


            if(Auth::guard('customers')->check()) {
                $wishlistQuantityShare = Wishlist::where('user_id', Auth::guard('customers')->user()->id)->count();
            } else {
                $wishlistQuantityShare = 0;
            }
            
            $view->with([
                'cartQuantityShare' => $cartQuantityShare,
                'settingsArrShare' => $settingsArrShare,
                'productsShare' => $productsShare,
                'menusShare' => $menusShare,
                'postShare' => $postShare,
                'wishlistQuantityShare' => $wishlistQuantityShare,
                'bestSellerShare' => $bestSellerShare,
            ]);
        });
    }
}
