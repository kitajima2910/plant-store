<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function adminIndex(){
        return view('pages.admin.settings.index');
    }
    public function adminAdd(){
        return view('pages.admin.settings.add');
    }
    public function adminRecover(){
        return view('pages.admin.settings.recover');
    }
}
