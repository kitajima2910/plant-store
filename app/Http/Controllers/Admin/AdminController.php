<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminFormLogin;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index() {
        return view('pages.admin.login');
    }

    public function login(AdminFormLogin $request) {

        $email = trim($request->get('email'));
        $password = $request->get('password');
        $remember = $request->has('remember');

        if(Auth::attempt(['email' => $email, 'password' => $password, 'level' => 1, 'status' => 1], $remember)) {
            return redirect()->intended('admin/dashboard');
        } else {
            return redirect()->back()->withInput()->withErrors(['errorLogin' => 'Email hoặc mật khẩu không đúng *,..,*']);
        }

    }

    public function checkQRUser(Request $request) {
        if($request->ajax()) {
            if($this->user->where('email', $request->get('email'))->count() > 0) {
                $user = $this->user->where('email', $request->get('email'))->get();
                if($user[0]->status === 1 && $user[0]->level === 1) {
                    if(password_verify($request->get('QRpassword'), $user[0]->QRpassword)) {
                        
                        Auth::loginUsingId($user[0]->id);
                        
                        return response()->json(['code' => 200], 200);
                    }
                } else {
                    return response()->json(['code' => 204], 200);
                }
            } else {
                return response()->json(['code' => 201], 200);
            }
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
