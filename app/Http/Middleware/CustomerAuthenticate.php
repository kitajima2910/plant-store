<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomerAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'customers')
    {
        if(Auth::guard($guard)->check()) {
            return $next($request);
        }
        // Session::put('checkout', 'checkout');
        return redirect()->route('guest.user.login');
    }
}
