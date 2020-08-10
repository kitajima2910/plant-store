<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private $order;
    private $orderDetail;
    private $user;
    private $product;

    public function __construct(Order $order, OrderDetail $orderDetail, User $user, Product $product)
    {
        $this->order = $order;
        $this->orderDetail = $orderDetail;
        $this->user = $user;
        $this->product = $product;
    }

    public function index() {

        $totalPrice = $this->orderDetail->get('*')->sum('price');
        $totalOrder = $this->order->count();
        $totalUser = $this->user->count();
        $totalProduct = $this->product->count();

        $totalProductArray = $this->product->get('created_at');
        $totalUserArray = $this->user->get('created_at');
        return view('pages.admin.index', compact('totalPrice', 'totalOrder', 'totalUser', 'totalProduct', 'totalProductArray', 'totalUserArray'));
    }
}
