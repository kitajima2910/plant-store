<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('customers');
    }

    public function index() {

        $cartContents = Cart::content();
        $totalCart = 0;
        foreach($cartContents as $item) {
            $totalCart += $item->price * $item->qty;
        }
        return view('pages.guest.checkout', compact('cartContents', 'totalCart'));
    }

    public function process(Request $request) {
        dd($request->all());
    }
}
