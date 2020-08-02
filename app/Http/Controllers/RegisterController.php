<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminFormRegister;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('pages.guest.register');
    }

    public function store(AdminFormRegister $request){
        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'password' => bcrypt($request->get('password')),
            'status'=> '1',
        ]);
        $user->save();
        return view('pages.guest.login');
    }
}
