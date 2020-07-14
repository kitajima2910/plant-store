<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function adminIndex(){
        return view('pages.admin.settings.index');
    }
    public function adminCreate(){
        return view('pages.admin.settings.create');
    }
    public function adminRecover(){
        return view('pages.admin.settings.recover');
    }
}
