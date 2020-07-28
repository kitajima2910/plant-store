<?php

namespace App\Http\Controllers;

use App\Product;
use App\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index() {

        // Products
        $products = $this->product->where('status', 1)->orderBy('id', 'desc')->take(4)->get();

        return view('pages.guest.index', compact('products'));
    }

}
