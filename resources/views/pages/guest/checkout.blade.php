@extends('layouts.guest.master')
@section('title', 'Thanh Toán')
@section('style')
<link rel="stylesheet" href="{!! asset('public/vendors/checkout/style.css') !!}">
@endsection
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
@include('includes.guest.breadcrumb-area', ['currentPage' => 'Thanh Toán'])
<!-- ##### Breadcrumb Area End ##### -->

<div class="loading">
    <h1>Đang xử lý đặt hàng, bạn vui lòng chờ...</h1>
    <div class="loader"></div>
    <h3>Plant Store<h3>
</div>

<!-- ##### Checkout Area Start ##### -->
<div class="checkout_area mb-100">
    <div class="container">
        @if ($message = session()->get('error'))
            <div class="alert alert-primary alert-danger fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                {!! $message !!}
            </div>
        @endif
        <form action="{!! route('gues.checkout.process') !!}" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{!! auth()->guard('customers')->user()->id !!}">
            <input type="hidden" name="status" value="1">
            <input type="hidden" name="totalCart" value="{!! $totalCart !!}">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-4">
                    <div class="checkout_details_area clearfix">
                        <h5>HOÁ ĐƠN CHI TIẾT</h5>

                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <input type="text" class="form-control" name="name"
                                    value="{!! auth()->guard('customers')->user() ->name !!}"
                                    placeholder="Họ và tên *">
                                @error('name')
                                    <label class="text-danger font-italic">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="col-12 mb-4">
                                <input type="text" class="form-control" name="email"
                                    value="{!! auth()->guard('customers')->user()->email !!}"
                                    placeholder="Địa chỉ email *">
                                @error('email')
                                    <label class="text-danger font-italic">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="col-12 mb-4">
                                <input type="text" class="form-control" name="phone" min="0"
                                    value="{!! auth()->guard('customers')->user()->phone !!}"
                                    placeholder="Số điện thoại *">
                                @error('phone')
                                    <label class="text-danger font-italic">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="col-12 mb-4">
                                <input type="text" class="form-control" name="address"
                                    value="{!! auth()->guard('customers')->user()->address !!}"
                                    placeholder="Địa chỉ *">
                                @error('address')
                                    <label class="text-danger font-italic">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="order-notes">Ghi Chú</label>
                                <textarea class="form-control" name="notes" cols="30" rows="10"
                                    placeholder="Ghi chú về đơn hàng của bạn,..."></textarea>
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
                                    $count = 0;
                                @endphp
                                @foreach($cartContents as $item)
                                    <tr>
                                        <td scope="row">{!! ++$i !!}</td>
                                        <td>{!! $item->name !!}</td>
                                        <td>{!! number_format($item->price, 0, ',', '.') !!} VNĐ</td>
                                        <td>{!! $item->qty !!}</td>
                                        <td>{!! number_format($item->price * $item->qty, 0, ',', '.') !!} VNĐ</td>
                                    </tr>
                                    @php
                                        $count++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <span><strong>Tổng giảm: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! number_format($totalCart, 0, ',',
                                '.') !!} VNĐ</strong></span><br>
                        <span><strong>Phí giao dịch: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! number_format($count * 5000, 0, ',',
                            '.') !!} VNĐ</strong></span><br>
                        <span><strong>Tổng thanh toán: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! number_format($totalCart + ($count * 5000), 0, ',',
                            '.') !!} VNĐ</strong></span>        
                        <div class="checkout-btn mt-30">
                            <button type="submit" class="btn alazea-btn w-100 loading-checkout">ĐẶT HÀNG</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ##### Checkout Area End ##### -->

@endsection
@section('script')
<script>
$(document).on('click', '.loading-checkout', function() {
    $('.loading').css('display', 'block');
});
</script>
@endsection