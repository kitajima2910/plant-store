<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminFormSetting;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    private $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }

    public function index() {
        $settings = $this->setting->all();
        return view('pages.admin.settings.index', compact('settings'));
    }

    public function create() {
        return view('pages.admin.settings.create');
    }

    public function store(AdminFormSetting $request) {
        $this->setting->create($request->only(['config_key', 'config_value', 'status']));
        return redirect()->route('settings.index');
    }

    public function edit($id) {
        $setting = $this->setting->find($id);
        return view('pages.admin.settings.edit', compact('setting'));
    }

    public function update(AdminFormSetting $request, $id) {
        $this->setting->find($id)->update($request->only(['config_key', 'config_value', 'status']));
        return redirect()->route('settings.index');
    }

    public function destroy($id) {
        $this->setting->find($id)->delete();
        return redirect()->back();
    }
}
