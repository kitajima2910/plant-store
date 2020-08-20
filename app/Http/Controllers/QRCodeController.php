<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QRCodeController extends Controller
{
    public function index() {
        if(!Session::get('qrcode')) {
            return redirect()->route('guest.home');
        }
        return view('pages.guest.checkout-qr');
    }
}
