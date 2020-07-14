<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function adminIndex(){
        return view('pages.admin.menu.index');
    }
    public function adminCreate(){
        return view('pages.admin.menu.create');
    }
    public function adminRecover(){
        return view('pages.admin.menu.recover');
    }
}
