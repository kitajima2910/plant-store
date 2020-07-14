<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function adminIndex(){
        return view('pages.admin.users.index');
    }
    public function adminCreate(){
        return view('pages.admin.users.create');
    }
    public function adminRecover(){
        return view('pages.admin.users.recover');
    }
}
