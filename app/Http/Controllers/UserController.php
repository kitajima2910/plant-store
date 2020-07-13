<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function adminIndex(){
        return view('pages.admin.users.index');
    }
    public function adminAdd(){
        return view('pages.admin.users.add');
    }
    public function adminRecover(){
        return view('pages.admin.users.recover');
    }
}
