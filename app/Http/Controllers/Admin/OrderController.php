<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PDF;
use SimpleSoftwareIO\QrCode\Facade as QrCode;

class OrderController extends Controller
{
    private $order;
    private $orderDetail;

    public function __construct(Order $order, OrderDetail $orderDetail)
    {
        $this->order = $order;
        $this->orderDetail = $orderDetail;
    }

    public function printOrder($checkoutCode) {

        $order = $this->order->where('id', $checkoutCode)->first();
        $orderDetails = $order->orderDetails;

        $sumQR = 0;
        $countQR = 0;
        foreach($orderDetails as $item) {
            $sumQR += $item->price * $item->quantity;
            $countQR++;
        }
        
        $html = '';
        $html .= 'Họ và tên: ' . $order->name;
        $html .= "\r\n";
        $html .= 'Địa chỉ email: ' . $order->email;
        $html .= "\r\n";
        $html .= 'Số điện thoại: ' . $order->phone;
        $html .= "\r\n";
        $html .= 'Địa chỉ nhận: ' . $order->address;
        $html .= "\r\n";
        $html .= 'Tổng thanh toán: ' . number_format($sumQR + ($countQR * 5000), 0, ',', '.');
        $html .= "\r\n";
        $html .= 'Ghi chú: ' . $order->notes;
        $html .= "\r\n";
        $html .= 'Ngày tạo: ' . $order->created_at;

        $qrcode = base64_encode(QrCode::format('png')->size(250)->encoding('UTF-8')->margin(5)->generate($html));

        $pdf = PDF::loadView('pdf.orderdetails', compact('order', 'orderDetails', 'qrcode'));
        return $pdf->download('orderdetails.pdf');

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
