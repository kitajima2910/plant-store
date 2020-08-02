<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestFormRegister;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('pages.guest.register');
    }

    public function store(GuestFormRegister $request){
        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'password' => bcrypt($request->get('password')),
            'level' => 0,
            'status'=> '1',
        ]);
        $user->save();
        return redirect()->route('guest.user.login');
    }
}
