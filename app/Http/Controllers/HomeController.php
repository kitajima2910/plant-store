<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function guestIndex() {
        return view('pages.guest.index');
    }

    public function adminIndex() {
        return view('pages.admin.index');
    }

}
