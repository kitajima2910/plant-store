<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function adminIndex(){
        return view('pages.admin.customers.index');
    }
 
}
