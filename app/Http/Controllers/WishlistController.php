<?php

namespace App\Http\Controllers;

use App\Product;
use App\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    private $wishlist;
    private $product;

    public function __construct(Wishlist $wishlist, Product $product)
    {
        $this->middleware('customers');
        $this->wishlist = $wishlist;
        $this->product = $product;
    }

    public function index() {
        $customersId = Auth::guard('customers')->user()->id;
        $idProduct = $this->wishlist->where('user_id', $customersId)->get('product_id');
        $wishlists = [];
        foreach($idProduct as $item) {
            $wishlists[] = $this->product->where('id', $item->product_id)->get('*')->toArray();
        }
        return view('pages.guest.wishlist', compact('wishlists'));
    }

    public function add(Request $request)
    {

        if($request->ajax()) {

            $id = $request->get('id');
            $customersId = Auth::guard('customers')->user()->id;

            $countUserProd = $this->wishlist->where('user_id', $customersId)->where('product_id', $id)->count();

            if($countUserProd === 0) {
                $this->wishlist->insert([
                    'user_id' => $customersId,
                    'product_id' => $id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
                
                $count = $this->wishlist->where('user_id', $customersId)->count();
                $cardHeart = view('ajax.guest.cart-heart', compact('count'))->render();
                return response()->json(['cardHeart' => $cardHeart, 'code' => 200], 200);
            } else {
                return response()->json(['code' => 204], 200);
            }

        }

    }

    public function del(Request $request) {
        if($request->ajax()) {
            $customersId = Auth::guard('customers')->user()->id;
            $this->wishlist->where('user_id', $customersId)->where('product_id', $request->get('id'))->delete();
            
            $count = $this->wishlist->where('user_id', $customersId)->count();
            
            $idProduct = $this->wishlist->where('user_id', $customersId)->get('product_id');
            $wishlists = [];
            foreach($idProduct as $item) {
                $wishlists[] = $this->product->where('id', $item->product_id)->get('*')->toArray();
            }
            
            $cardHeart = view('ajax.guest.cart-heart', compact('count'))->render();
            $wishlistData = view('ajax.guest.wishlist-data', compact('wishlists'))->render();

            return response()->json(['cardHeart' => $cardHeart, 'wishlistData' => $wishlistData, 'code' => 200], 200);
        }
    }

    public function delall(Request $request) {
        if($request->ajax()) {
            $customersId = Auth::guard('customers')->user()->id;
            $this->wishlist->where('user_id', $customersId)->delete();

            $count = $this->wishlist->where('user_id', $customersId)->count();
            $cardHeart = view('ajax.guest.cart-heart', compact('count'))->render();

            $wishlists = [];
            $wishlistData = view('ajax.guest.wishlist-data', compact('wishlists'))->render();

            return response()->json(['cardHeart' => $cardHeart, 'wishlistData' => $wishlistData, 'code' => 200], 200);
        }
    }
}
