<?php

namespace App\Http\Controllers;

use App\Post;
use App\Product;
use App\Rating;
use App\Setting;
use App\Slider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    private $product;
    private $rating;

    public function __construct(Product $product, Slider $slider, Rating $rating)
    {
        $this->product = $product;
        $this->slider = $slider;
        $this->rating = $rating;
    }

    public function index() {

        Session::forget('checkout');
        
        // Products
        $products = $this->product->where('status', 1)->orderBy('id', 'desc')->take(4)->get();
        $productsSale = $this->product->where('status',1)->where('sale_price','>','0')->inRandomOrder()->take(8)->get();

        // Sliders
        $sliders = $this->slider->where('status',1)->get();
        
        //User
        $users = User::all();

        // Ratings
        $productOfCategoryRating = [];
        foreach($products as $item) {
            $ratingSumTmp = $this->rating->where('product_id', $item['id'])->sum('rating');
            $ratingCountTmp = $this->rating->where('product_id', $item['id'])->count();
            $ratingAverageTmp = rand(4, 5);
            if($ratingCountTmp > 0) {
                $ratingAverageTmp = $ratingSumTmp / $ratingCountTmp;
            }
            $productOfCategoryRating[$item['id']] = $ratingCountTmp . '*' . $ratingAverageTmp . '*' . $item['id'];
        }

        foreach($productsSale as $item) {
            $ratingSumTmp = $this->rating->where('product_id', $item['id'])->sum('rating');
            $ratingCountTmp = $this->rating->where('product_id', $item['id'])->count();
            $ratingAverageTmp = rand(4, 5);
            if($ratingCountTmp > 0) {
                $ratingAverageTmp = $ratingSumTmp / $ratingCountTmp;
            }
            $productOfCategoryRating[$item['id']] = $ratingCountTmp . '*' . $ratingAverageTmp . '*' . $item['id'];
        }

        // Posts
        $posts = Post::where('status', 1)->orderBy('id', 'desc')->take(3)->get();
        return view('pages.guest.index', compact('products','productsSale','sliders','posts','users', 'productOfCategoryRating'));
        
    }

    public function searchProducts(Request $request) {
        $search = $request->get('search');
        Session::put('search', $search);
        return redirect()->route('guest.product.index');
    }

}
