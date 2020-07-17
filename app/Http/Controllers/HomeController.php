<?php

namespace App\Http\Controllers;

use App\Category;
use App\Components\DataTree;
use App\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function guestIndex() {

        $menuCategories = Category::where('parent_id', '=', 0)->get();
        $menuMain = Menu::where('parent_id', '=',0)->get();
        return view('pages.guest.index', compact('menuCategories','menuMain'));

    }

    public function adminIndex() {
        return view('pages.admin.index');
    }

}
