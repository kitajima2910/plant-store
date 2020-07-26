<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }

    public function index() {

        // Settings
        $settings = $this->setting->where('status', 1)->get();
        foreach($settings as $item) {
            $settingsArr[$item->config_key] = $item->config_value;
        }

        return view('pages.guest.index', compact('settingsArr'));
    }
}
