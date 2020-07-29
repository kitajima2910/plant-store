<?php

namespace App\Http\Controllers;

use App\CartOffline;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public $cartOffline;

    public function __construct(CartOffline $cartOffline)
    {
        $this->cartOffline = $cartOffline;
    }

    public function index() {
        if(Auth::guard('customers')->check()) {
            return redirect()->route('guest.trangChu');
        }
        return view('pages.guest.login');
    }

    public function login(Request $request) {

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
            
            return redirect()->intended('tran-chu.html');
        } else {
            return redirect()->back()->withInput()->withErrors(['errorLogin' => 'Email hoặc mật khẩu không đúng *,..,*']);
        }

    }

}
