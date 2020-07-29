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

    public function index() {
        return view('pages.guest.cart');
    }

    public function add(Request $request)
    {

        $quantity = $request->get('quantity');
        $id = $request->get('id');
        $product = $this->product->find($id);

        $data['id'] = $product->id;
        $data['name'] = $product->name;
        $data['qty'] = $quantity;
        $data['price'] = $product->final_price;
        $data['weight'] = 1;
        $data['options']['feature_image_path'] = $product->feature_image_path;
        Cart::add($data);
        
        $count = Cart::count() > 0 ? Cart::count() : 0;
        
        if($request->has('pageToCart')) {
            return redirect()->route($request->get('pageToCart'));
        }

        $cardQuantity = view('ajax.guest.cart-quantity', compact('count'))->render();
        return response()->json(['cardQuantity' => $cardQuantity, 'code' => 200], 200);
    }

    public function del(Request $request) {

        Cart::update($request->get('rowId'), 0);

        $count = Cart::count() > 0 ? Cart::count() : 0;
        
        $cardQuantity = view('ajax.guest.cart-quantity', compact('count'))->render();
        $cartTable = view('ajax.guest.cart-table')->render();

        return response()->json([
            'cardQuantity' => $cardQuantity,
            'cartTable' => $cartTable,
            'code' => 200
        ], 200);
    }

    public function update(Request $request) {
        $rowId = $request->get('rowId');
        $quantity = $request->get('quantity');

        if(empty($quantity) || $quantity < 0 || $quantity > 100) {
            $cartTable = view('ajax.guest.cart-table')->render();
            return response()->json(['cartTable' => $cartTable, 'code' => 204], 200);
        }

        Cart::update($rowId, $quantity);

        $count = Cart::count() > 0 ? Cart::count() : 0;

        $cardQuantity = view('ajax.guest.cart-quantity', compact('count'))->render();
        $cartTable = view('ajax.guest.cart-table')->render();
    
        return response()->json([
            'cardQuantity' => $cardQuantity,
            'cartTable' => $cartTable,
            'code' => 200
        ], 200);
    }
}
