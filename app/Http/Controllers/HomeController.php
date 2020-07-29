<?php

namespace App\Http\Controllers;

use App\Product;
use App\Setting;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $product;

    public function __construct(Product $product,Slider $slider)
    {
        $this->product = $product;
        $this->slider = $slider;
    }

    public function index() {

        // Products
        $products = $this->product->where('status', 1)->orderBy('id', 'desc')->take(4)->get();
        $productsSale = $this->product->where('status',1)->where('sale_price','>','0')->inRandomOrder()->take(8)->get();

        //Sliders
        $sliders = $this->slider->where('status',1)->take(3)->get();
        return view('pages.guest.index', compact('products','productsSale','sliders'));
    }

}
