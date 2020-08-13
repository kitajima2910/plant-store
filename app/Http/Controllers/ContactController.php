<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestFormContact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('pages.guest.contact');
    }

    public function email(GuestFormContact $request){
        $name = $request->get('name');
        $email = $request->get('email');
        $title = $request->get('title');
        $content = $request->get('content');
        $create = Carbon::now();

        Mail::send('pages.guest.email-contact', [
            'title' => $title,
            'content' => $content,
            'create' => $create,
            'email' => $email,
            'name' => $name,
        ],function($message) use($email,$name){
            $message->from($email,$name);
            $message->to('ts2styles@gmail.com', 'Plant-Store');
            $message->subject('[Plant-Store] KHACH HANG LIEN HE');
        });
        // return redirect()->route('guest.contact.index')->with('message', 'Gửi email thành công');
        return redirect()->back()->with('message', 'Đã gửi thông tin liên hệ tới admin, cảm ơn bạn!');
}
}
