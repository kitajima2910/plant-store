@extends('layouts.guest.master')
@section('title', 'Thanh Toán')
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
@include('includes.guest.breadcrumb-area', ['currentPage' => 'Thanh Toán'])
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Checkout Area Start ##### -->
<div class="checkout_area mb-100">
    <div class="container">
        <form action="{!! route('gues.checkout.process') !!}" method="post">
            @csrf
            <div class="row justify-content-between">
                <div class="col-12 col-lg-4">
                    <div class="checkout_details_area clearfix">
                        <h5>HOÁ ĐƠN CHI TIẾT</h5>
                        
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <input type="text" class="form-control" name="name" value="{!! Auth::guard('customers')->user() ->name !!}" placeholder="Họ và tên *">
                                </div>
                                <div class="col-12 mb-4">
                                    <input type="text" class="form-control" name="email" value="{!! Auth::guard('customers')->user()    ->email !!}" placeholder="Địa chỉ email *">
                                </div>
                                <div class="col-12 mb-4">
                                    <input type="text" class="form-control" name="phone" min="0" value="{!! Auth::guard('customers')    ->user()->phone !!}" placeholder="Số điện thoại *">
                                </div>
                                <div class="col-12 mb-4">
                                    <input type="text" class="form-control" name="address" value="{!! Auth::guard('customers')->user()  ->address !!}" placeholder="Địa chỉ *">
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="order-notes">Ghi Chú</label>
                                    <textarea class="form-control" name="notes" cols="30" rows="10" placeholder="Ghi chú về đơn hàng    của bạn,..."></textarea>
                                </div>
                            </div>
                        
                    </div>
                </div>
            
                <div class="col-12 col-lg-8">
                    <div class="checkout-content">
                        <h5 class="title--">DANH SÁCH ĐẶT HÀNG CỦA BẠN</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>TÊN SẢN PHẨM</th>
                                    <th>GIÁ</th>
                                    <th>SỐ LƯỢNG</th>
                                    <th>THÀNH TIỀN</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($cartContents as $item)
                                    <tr>
                                        <td scope="row">{!! ++$i !!}</td>
                                        <td>{!! $item->name !!}</td>
                                        <td>{!! number_format($item->price, 0, ',', '.') !!} VNĐ</td>
                                        <td>{!! $item->qty !!}</td>
                                        <td>{!! number_format($item->price * $item->qty, 0, ',', '.') !!} VNĐ</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <span><strong>Tổng tiền: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! number_format($totalCart, 0, ',', '.') !!} VNĐ</strong></span>
                        <div class="checkout-btn mt-30">
                            <button type="submit" class="btn alazea-btn w-100">ĐẶT HÀNG</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ##### Checkout Area End ##### -->

@endsection