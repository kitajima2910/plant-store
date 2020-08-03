<?php

namespace App\Http\Controllers;

use App\CartOffline;
use App\User;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $getInfo = Socialite::driver($provider)->user();
        $user = $this->createUser($getInfo, $provider);
        Auth::guard('customers')->login($user);

        $userId = Auth::guard('customers')->user()->id;
        $cartOffline = CartOffline::where('identifier', $userId)->first();

        if (!empty($cartOffline)) {
            Cart::restore($userId);
        } else {
            if (Cart::content()->count() > 0) {
                Cart::store($userId);
            }
        }

        if (Session::get('checkout')) {
            Session::forget('checkout');
            return redirect()->intended('thanh-toan/thong-tin-dat-hang.html');
        }

        return redirect()->route('guest.home');
    }

    function createUser($getInfo, $provider)
    {
        $user = $this->user->where('provider_id', $getInfo->id)->first();
        if (!$user) {
            $user = $this->user->create([
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'provider' => $provider,
                'provider_id' => $getInfo->id,
                'status' => 1,
                'level' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
        return $user;
    }
}
