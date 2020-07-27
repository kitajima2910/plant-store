<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function add(Request $request)
    {
        $quantity = $request->get('quantity');
        $id = $request->get('id');
        $product = $this->product->find($id);

        $data['id'] = $product->id;
        $data['name'] = $product->name;
        $data['qty'] = $quantity;
        $data['price'] = $product->price;
        $data['weight'] = 1;
        $data['options']['feature_image_path'] = $product->feature_image_path;
        Cart::add($data);
        
        $count = Cart::count() > 0 ? Cart::count() : 0;
        
        return view('ajax.guest.cart-quantity', compact('count'));
    }
}
