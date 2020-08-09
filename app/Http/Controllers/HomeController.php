<?php

namespace App\Http\Controllers;

use App\Post;
use App\Product;
use App\Setting;
use App\Slider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    private $product;

    public function __construct(Product $product,Slider $slider)
    {
        $this->product = $product;
        $this->slider = $slider;
    }

    public function index() {

        Session::forget('checkout');
        
        // Products
        $products = $this->product->where('status', 1)->orderBy('id', 'desc')->take(4)->get();
        $productsSale = $this->product->where('status',1)->where('sale_price','>','0')->inRandomOrder()->take(8)->get();

        // Sliders
        $sliders = $this->slider->where('status',1)->take(3)->get();
        
        //User
        $users = User::all();

        // Posts
        $posts = Post::where('status', 1)->orderBy('id', 'desc')->take(3)->get();
        return view('pages.guest.index', compact('products','productsSale','sliders','posts','users'));
    }

    public function searchProducts(Request $request) {
        $search = $request->get('search');
        Session::put('search', $search);
        return redirect()->route('guest.product.index');
    }

}
