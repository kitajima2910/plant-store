<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QRCodeController extends Controller
{
    public function index() {

        $qrcodeHTML = 'PlantStore:' . Auth::user()->email;

        return view('pages.admin.qrcode', compact('qrcodeHTML'));
    }
}
