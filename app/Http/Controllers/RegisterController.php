<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestFormRegister;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index(){
        Session::forget('checkout');
        return view('pages.guest.register');
    }

    public function store(GuestFormRegister $request){
        $user = new User([
            'name' => trim($request->get('name')),
            'email' => trim($request->get('email')),
            'phone' => trim($request->get('phone')),
            'address' => trim($request->get('address')),
            'password' => bcrypt(trim($request->get('password'))),
            'level' => 0,
            'status'=> '1',
        ]);
        $user->save();
        return redirect()->route('guest.user.login');
    }
}
