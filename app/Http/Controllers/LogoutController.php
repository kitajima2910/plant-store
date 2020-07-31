<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout() {
        if(Auth::guard('customers')->check()) {
            $userId = Auth::guard('customers')->user()->id;
            Cart::erase($userId);
            if(Cart::content()->count() > 0) {
                Cart::store($userId);
            }
            Auth::guard('customers')->logout();
            return redirect()->route('guest.home');
        }
    }
}
