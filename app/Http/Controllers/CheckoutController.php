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

class CheckoutController extends Controller
{
    private $order;
    private $orderDetail;

    public function __construct(Order $order, OrderDetail $orderDetail)
    {
        $this->middleware('customers');
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
        if($totalCart === 0) {
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
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'address' => $request->get('address'),
                'notes' => $request->get('notes'),
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

            $email = $request->get('email');
            $name = $request->get('name');
            $totalCart = $request->get('totalCart');

            Mail::send('pages.guest.email-order', [
                'order' => $order,
                'content' => $content,
                'totalCart' => $totalCart,
            ], function ($message) use($email, $name) {
                $message->from('ts2styles@gmail.com', 'Plant-Store');
                $message->to($email, $name);
                $message->subject('[Plant-Store] DON HANG BAN DA DAT');
            });

            DB::commit();

            Cart::destroy();
            return redirect()->route('gues.checkout.mail')->with('email', $email);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Đặt hàng thất bại');
        }

    }

    public function mail() {
        if (empty(session()->get('email'))) {
            return redirect()->route('guest.home');
        }
        return view('pages.guest.checkout-success');
    }
}
