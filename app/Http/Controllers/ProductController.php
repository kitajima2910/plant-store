<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    private $product;
    private $category;

    public function __construct(Product $product, Category $category)
    {
        $this->product = $product;
        $this->category = $category;
    }

    public function index() {
            Session::forget('checkout');
            Session::forget('sort-product');
            Session::forget('category-slug');
            $categories = $this->category->where('status', 1)->where('parent_id', 0)->get();
            if(!empty(Session::get('search'))) {
                $sort = Session::get('search');
                $products = $this->product->where('status', 1)->where('name', 'like', '%' . $sort . '%')->paginate(6);
                Session::put('sort-product', $sort);
                Session::forget('search');
                return view('pages.guest.shop', compact('products', 'categories'));
            }
            $products = $this->product->where('status', 1)->orderBy('id')->paginate(6);
            return view('pages.guest.shop', compact('products', 'categories'));         
    }

    public function ajaxIndex(Request $request) {
        
        if($request->ajax()) {

            $sort = !empty(Session::get('sort-product')) && !empty(Session::get('sort-product')) != $request->get('sort') ? Session::get('sort-product') : $request->get('sort');

            if($sort == 'prod-gia-thap-cao') {
                $products = $this->product->where('status', 1)->orderBy('final_price')->paginate(6);
            } else if($sort == 'prod-gia-cao-thap') {
                $products = $this->product->where('status', 1)->orderBy('final_price', 'desc')->paginate(6);
            } else if($sort == 'prod-sale') {
                $products = $this->product->where('status', 1)->where('sale_price', '>', 0)->orderBy('id','desc')->paginate(6);
            } else if($sort == 'prod-hot') {
                $products = $this->product->where('status', 1)->orderBy('id','desc')->paginate(6);
            } else { // Search ajax
                $products = $this->product->where('status', 1)->where('name', 'like', '%' . $sort . '%')->paginate(6);
            }
        
            Session::put('sort-product', $sort);
            $productData = view('ajax.guest.product-data', compact('products'))->render();         
            return response()->json(['productData' => $productData, 'code' => 200], 200);
        }
        
    }

    public function viewProductDetails($slug)
    {

        try {
            $product = $this->product->where('slug', $slug)->first();
            $productImages = $this->product->find($product->id)->productImages()->get();
            $productCategory = $this->product->find($product->id)->category()->get()->toArray()[0];
            $productTags = $this->product->find($product->id)->tags()->get();
            foreach ($productTags as $item) {
                $tagsArr[] = $item->tags_name;
            }
            $tagsStr = join(', ', $tagsArr);
            $productOfCategory = $this->category->where('name', $productCategory['name'])->get();
            $productOfCategory = $this->category->find($productOfCategory[0]->id)->products()->inRandomOrder()->take(4)->get()->toArray();

            return view('pages.guest.shop-details', compact('product', 'productImages', 'productCategory', 'tagsStr', 'productOfCategory'));
        } catch (\Throwable $th) {
            return redirect()->route('guest.home');
        }
        
    }

    public function viewProduct(Request $request) {
        if($request->ajax()) {
            // dd($request->get('slug'));
            $slug = $request->get('slug');
            Session::forget('category-slug');
            // $categories = $this->category->where('status', 1)->where('parent_id', 0)->get();
            $products = $this->category->where('slug', $slug)->first()->products()->paginate(6);
            // return view('pages.guest.shop', compact('products', 'categories'));
            $productData = view('ajax.guest.product-data', compact('products'))->render();         
            return response()->json(['productData' => $productData, 'code' => 200], 200);
        }
        
    }

    public function ajaxViewProduct(Request $request) {
        
        if($request->ajax()) {
            if(empty(Session::get('category-slug'))) {
                $slug = $request->get('slug');
            } else {
                $slug = Session::get('category-slug');
            }
            Session::put('category-slug', $slug);
            $products = $this->category->where('slug', $slug)->first()->products()->paginate(6);
            $productData = view('ajax.guest.product-data', compact('products'))->render();         
            return response()->json(['productData' => $productData, 'code' => 200], 200);
        }
    }

}
