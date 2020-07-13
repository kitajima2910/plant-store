<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.guest.index',compact('products','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function ProductCate1()
    {
        $cate1 = Product::where('category_id','001')->value();
        // $cate1 = DB::table('products')->where('category_id','001')->first();
        return view('pages.guest.index',compact('cate1','cate1'));
    }

    public function adminIndex(){
        return view('pages.admin.products.index');
    }
    public function adminAdd(){
        return view('pages.admin.products.add');
    }
    public function adminRecover(){
        return view('pages.admin.products.recover');
    }
}
