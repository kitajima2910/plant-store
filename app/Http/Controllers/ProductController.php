<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function viewProductDetails($slug) {
        $product = $this->product->where('slug', $slug)->first();
        return view('pages.guest.shop-details', compact('product'));
    }
}
