<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function adminIndex(){
        return view('pages.admin.sliders.index');
    }
    public function adminAdd(){
        return view('pages.admin.sliders.add');
    }
    public function adminRecover(){
        return view('pages.admin.sliders.recover');
    }
}
