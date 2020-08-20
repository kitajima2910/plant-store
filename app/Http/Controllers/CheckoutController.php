<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestFormCheckout;
use App\Order;
use App\OrderDetail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    private $order;
    private $orderDetail;

    public function __construct(Order $order, OrderDetail $orderDetail)
    {
        $this->middleware('customers');
        Session::put('checkout', 'checkout');
        $this->order = $order;
        $this->orderDetail = $orderDetail;
    }

    public function index()
    {
        $cartContents = Cart::content();
        $totalCart = 0;
        foreach ($cartContents as $item) {
            $totalCart += $item->price * $item->qty;
        }
        if ($totalCart === 0) {
            return redirect()->route('guest.home');
        }
        return view('pages.guest.checkout', compact('cartContents', 'totalCart'));
    }

    public function process(GuestFormCheckout $request)
    {
        try {
            DB::beginTransaction();
            $content = Cart::content();

            $order = $this->order->create([
                'user_id' => $request->get('user_id'),
                'name' => trim($request->get('name')),
                'email' => trim($request->get('email')),
                'phone' => trim($request->get('phone')),
                'address' => trim($request->get('address')),
                'notes' => trim($request->get('notes')),
                'method' => $request->get('payMethod') == 'notCodeQR' ? 'Nhận hàng' : 'Mã QR',
                'status' => $request->get('status'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            foreach ($content as $item) {
                $this->orderDetail->create([
                    'order_id' => $order->id,
                    'product_id' => $item->id,
                    'quantity' => $item->qty,
                    'price' => $item->price,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }

            
            if ($request->get('payMethod') == 'notCodeQR') {
                $email = trim($request->get('email'));
                $name = trim($request->get('name'));
                $totalCart = $request->get('totalCart');

                Mail::send('pages.guest.email-order', [
                    'order' => $order,
                    'content' => $content,
                    'totalCart' => $totalCart,
                ], function ($message) use ($email, $name) {
                    $message->from('ts2styles@gmail.com', 'Plant-Store');
                    $message->to($email, $name);
                    $message->subject('[Plant-Store] DON HANG BAN DA DAT');
                });
            } else if ($request->get('payMethod') == 'codeQR') {
                $count = 0;
                foreach($content as $item) {
                    $count++;
                }

                $html = '';
                $html .= 'Họ và tên: ' . trim($request->get('name'));
                $html .= "\r\n";
                $html .= 'Địa chỉ email: ' . trim($request->get('email'));
                $html .= "\r\n";
                $html .= 'Số điện thoại: ' . trim($request->get('phone'));
                $html .= "\r\n";
                $html .= 'Địa chỉ nhận: ' . trim($request->get('address'));
                $html .= "\r\n";
                $html .= 'Tổng thanh toán: ' . number_format($request->get('totalCart') + ($count * 5000), 0, ',', '.');
                $html .= "\r\n";
                $html .= 'Ghi chú: ' . trim($request->get('notes'));
                $html .= "\r\n";
                $html .= 'Ngày tạo: ' . Carbon::now();
            }
            DB::commit();

            Cart::destroy();
            if ($request->get('payMethod') == 'notCodeQR') {
                return redirect()->route('guest.checkout.mail')->with('email', $email);
            } else if ($request->get('payMethod') == 'codeQR') {
                return redirect()->route('guest.qr.index')->with('qrcode', $html);
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Đặt hàng thất bại');
        }
    }

    public function mail()
    {
        if (empty(session()->get('email'))) {
            return redirect()->route('guest.home');
        }
        return view('pages.guest.checkout-success');
    }
}
