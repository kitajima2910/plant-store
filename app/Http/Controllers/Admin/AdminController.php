<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminFormLogin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        return view('pages.admin.login');
    }

    public function login(AdminFormLogin $request) {

        $email = $request->get('email');
        $password = $request->get('password');
        $remember = $request->has('remember');

        if(Auth::attempt(['email' => $email, 'password' => $password, 'level' => 1], $remember)) {
            return redirect()->intended('admin/dashboard');
        } else {
            return redirect()->back()->withInput()->withErrors(['errorLogin' => 'Email hoặc mật khẩu không đúng *,..,*']);
        }

    }

    public function filemanager() {
        return view('pages.admin.filemanager');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
