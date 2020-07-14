<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function adminIndex(){
        return view('pages.admin.sliders.index');
    }
    public function adminCreate(){
        return view('pages.admin.sliders.create');
    }
    public function adminRecover(){
        return view('pages.admin.sliders.recover');
    }
}
