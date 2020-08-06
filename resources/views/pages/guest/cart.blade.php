@extends('layouts.guest.master')
@section('title', 'Giỏ Hàng')
@section('style')
<style>
    .cart-table thead th {
        padding: 30px 15px;
    }

    .cart_product_img img {
        width: 100px;
        height: 86px;
    }
</style>
@endsection
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
@include('includes.guest.breadcrumb-area', ['currentPage' => 'Giỏ Hàng'])
<!-- ##### Breadcrumb Area End ##### -->

<div class="ajax-cart-table">
    @php
        $cartContents = Cart::content();
        $totalCart = 0;
    @endphp

    <!-- ##### Cart Area Start ##### -->
    <div class="cart-area section-padding-0-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>SẢN PHẨM</th>
                                    <th>SỐ LƯỢNG</th>
                                    <th>GIÁ</th>
                                    <th>THÀNH TIỀN</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartContents as $cart)
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="javascript:void(0);"><img src="{!! asset($cart->options->feature_image_path) !!}"></a>
                                            <h5>{!! $cart->name !!}</h5>
                                        </td>
                                        <td class="qty">
                                            <div class="quantity">
                                                <input type="number" class="qty-text cart-update" id="qty" step="1" min="1" max="99" name="quantity" value="{!! $cart->qty !!}" data-rowid="{!! $cart->rowId !!}">
                                            </div>
                                        </td>
                                        <td class="price"><span>{!! number_format($cart->price, 0, ',', '.') !!} VNĐ</span></td>
                                        <td class="total_price"><span>{!! number_format($cart->price * $cart->qty, 0, ',', '.') !!} VNĐ</span></td>
                                        @php
                                            $totalCart += $cart->price * $cart->qty;
                                        @endphp
                                        <td class="action"><a href="javascript:void(0);" data-rowid="{!! $cart->rowId !!}" class="cart-del"><i class="icon_close"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Coupon Discount -->
                <div class="col-12 col-lg-6"></div>

                <!-- Cart Totals -->
                <div class="col-12 col-lg-6">
                    <div class="cart-totals-area mt-70">
                        <div class="total d-flex justify-content-between">
                            <h5>Tổng tiền</h5>
                            <h5>{!! number_format($totalCart) !!} VNĐ</h5>
                        </div>
                        <div class="checkout-btn">
                            @if ($totalCart > 0)
                                <a href="{!! route('gues.checkout.index') !!}" class="btn alazea-btn w-100">Thanh toán</a>
                            @else
                                <a href="javascript:void(0);" class="btn alazea-btn w-100 checkout">Thanh toán</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ##### Cart Area End ##### -->
</div>
@endsection
@section('script')
    <script>
        $(document).on('click', '.checkout', function() {
            setTimeout(function() {
                alertify.set('notifier', 'position', 'bottom-left');
                var delay = alertify.get('notifier','delay');
                alertify.set('notifier','delay', 2);
                alertify.error('Không có sản phẩm nào');
                alertify.set('notifier','delay', delay);
            }, 300);
        });

        $(document).on('click', '.cart-del', function() {
            let rowId = $(this).data('rowid');
            let url = '{!! route("guest.cart.del") !!}';
            let _token = '{{ csrf_token() }}';

            $.ajax({
                type: "get",
                url: url,
                data: {
                    '_token': _token,
                    'rowId': rowId
                },
                success: function (response) {
                    if(response.code === 200) {
                        
                        // Cập nhật số lượng
                        $('.cart-quantity').empty();
                        $('.cart-quantity').html('(' + response.cardQuantity + ')');   
                        // Cập nhật table
                        $('.ajax-cart-table').empty();
                        $('.ajax-cart-table').html(response.cartTable);

                        setTimeout(function() {
                            alertify.set('notifier', 'position', 'bottom-left');
                            var delay = alertify.get('notifier','delay');
                            alertify.set('notifier','delay', 2);
                            alertify.success('Đã xoá sản phẩm ra giỏ hàng');
                            alertify.set('notifier','delay', delay);
                        }, 300);
                    }
                }
            });
        });

        $(document).on('change', '.cart-update', function() {
            let quantity = $(this).val();
            let rowId = $(this).data('rowid');
            let url = '{!! route("guest.cart.update") !!}';
            let _token = '{{ csrf_token() }}';

            $.ajax({
                type: "get",
                url: url,
                data: {
                    '_token': _token,
                    'rowId': rowId,
                    'quantity': quantity
                },
                success: function (response) {
                    if(response.code === 204) { 
                        
                        // Cập nhật table
                        $('.ajax-cart-table').empty();
                        $('.ajax-cart-table').html(response.cartTable);

                        setTimeout(function() {
                            alertify.set('notifier', 'position', 'bottom-left');
                            var delay = alertify.get('notifier','delay');
                            alertify.set('notifier','delay', 2);
                            alertify.error('Cập nhật không thành công');
                            alertify.set('notifier','delay', delay);
                        }, 300);
                    }
                    if(response.code === 200) {
                        
                        // Cập nhật số lượng
                        $('.cart-quantity').empty();
                        $('.cart-quantity').html('(' + response.cardQuantity + ')');
                        
                        // Cập nhật table
                        $('.ajax-cart-table').empty();
                        $('.ajax-cart-table').html(response.cartTable);

                        setTimeout(function() {
                            alertify.set('notifier', 'position', 'bottom-left');
                            var delay = alertify.get('notifier','delay');
                            alertify.set('notifier','delay', 2);
                            alertify.success('Cập nhật thành công');
                            alertify.set('notifier','delay', delay);
                        }, 300);
                    }
                }
            });

        });

    </script>
@endsection
