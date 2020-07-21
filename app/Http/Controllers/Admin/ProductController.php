<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Components\DataTree;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('pages.admin.products.index');
    }

    public function create() {
        $data = Category::get()->toArray();
        $options = DataTree::getData($data);
        return view('pages.admin.products.create', compact('options'));
    }
}
