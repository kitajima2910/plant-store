<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminFormLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class LoginController extends Controller
{
    public function adminIndex() {
        return view('pages.admin.login');
    }

    public function adminLogin(AdminFormLogin $request) {

            $email = $request->get('email');
            $password = $request->get('password');
            $remember = $request->has('remember');

            if(Auth::attempt(['email' => $email, 'password' => $password, 'level' => 1], $remember)) {
                return redirect()->intended('admin/dashboard');
            } else {
                return redirect()->back()->withInput()->withErrors(['errorLogin' => 'Email hoặc mật khẩu không đúng *,..,*']);
            }

    }

    public function adminLogout() {
        Auth::logout();
        return redirect()->route('admin.login');
    }
    
}
