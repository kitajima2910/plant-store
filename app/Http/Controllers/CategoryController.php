<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function adminIndex(){
        return view('pages.admin.categories.index');
    }
    public function adminAdd(){
        return view('pages.admin.categories.add');
    }
    public function adminRecover(){
        return view('pages.admin.categories.recover');
    }
}
