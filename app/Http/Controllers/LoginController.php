<?php

namespace App\Http\Controllers;

use App\CartOffline;
use App\Http\Requests\GuestFormLogin;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public $cartOffline;

    public function __construct(CartOffline $cartOffline)
    {
        $this->cartOffline = $cartOffline;
    }

    public function index() {
        if(Auth::guard('customers')->check()) {
            return redirect()->route('guest.home');
        }
        return view('pages.guest.login');
    }

    public function login(GuestFormLogin $request) {

        $email = $request->get('email');
        $password = $request->get('password');
        $remember =$request->has('remember');

        if(Auth::guard('customers')->attempt(['email' => $email, 'password' => $password, 'level' => 0, 'status' => 1], $remember)) {

            $userId = Auth::guard('customers')->user()->id;
            $cartOffline = CartOffline::where('identifier', $userId)->first();

            if(!empty($cartOffline)) {
                Cart::restore($userId);
            } else {
                if(Cart::content()->count() > 0) {
                    Cart::store($userId);
                }
            }
            
            if(Session::get('checkout')) {
                Session::forget('checkout');
                return redirect()->intended('thanh-toan/thong-tin-dat-hang.html');
            }
            return redirect()->intended('trang-chu.html');
        } else {
            // return redirect()->back()->withInput()->withErrors(['errorLogin' => 'Email hoặc mật khẩu không đúng *,..,*']);
            return redirect()->route('guest.user.login')->withInput()->withErrors(['errorLogin' => 'Email hoặc mật khẩu không đúng *,..,*']);
        }

    }

}
