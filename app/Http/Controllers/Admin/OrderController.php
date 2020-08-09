<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $order;
    private $orderDetail;

    public function __construct(Order $order, OrderDetail $orderDetail)
    {
        $this->order = $order;
        $this->orderDetail = $orderDetail;
    }

    public function index() {
        $orders = $this->order->get('*');
        // $totalPrice = $this->orderDetail->get('*')->sum('price');
        return view('pages.admin.orders.index', compact('orders'));
    }

    public function destroy($id) {
        $this->order->find($id)->delete();
        return redirect()->back();
    }

    public function ajaxStatus(Request $request) {
        if($request->ajax()) {
            
            $id = $request->get('id');
            $status = $this->order->find($id)->status;
            $this->order->find($id)->update([
                'status' => $status == 1 ? 2 : 1
            ]);

            $orders = $this->order->get('*');
            // $totalPrice = $this->orderDetail->get('*')->sum('price');

            $viewOrdersData = view('ajax.admin.order-data', compact('orders'))->render();
            return response()->json(['viewOrdersData' => $viewOrdersData, 'code' => 200], 200);
        }
    }

    public function ajaxDetails(Request $request) {
        if($request->ajax()) {
            $id = $request->get('id');
            $order = $this->order->find($id);

            $orderDetails = $order->orderDetails;

            $viewDetailssData = view('ajax.admin.view-data', compact('orderDetails'))->render();
            return response()->json(['viewDetailssData' => $viewDetailssData, 'code' => 200], 200);
        }
    }


}
