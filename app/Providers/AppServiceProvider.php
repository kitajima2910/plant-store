<?php

namespace App\Providers;

use App\Menu;
use App\Product;
use App\Setting;
use Gloudemans\Shoppingcart\Facades\Cart;
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
            $cartQuantity = Cart::count();
            // Settings
            $settings = Setting::where('status', 1)->get();
            foreach($settings as $item) {
                $settingsArr[$item->config_key] = $item->config_value;
            }
            // Products
            $productsShare = Product::where('status', 1)->orderBy('id', 'desc')->take(2)->get();
            // Menus
            $menusShare  = Menu::where('status', 1)->get();
            
            $view->with([
                'cartQuantity' => $cartQuantity,
                'settingsArr' => $settingsArr,
                'productsShare' => $productsShare,                
                'menusShare' => $menusShare,                
            ]);

            
        });
    }
}
