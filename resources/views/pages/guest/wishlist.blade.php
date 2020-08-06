@extends('layouts.guest.master')
@section('title', 'Yêu Thích')
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
@include('includes.guest.breadcrumb-area', ['currentPage' => 'Yêu Thích'])
<!-- ##### Breadcrumb Area End ##### -->

<div class="ajax-wishlist-data">
    @php
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
                                    <th>GIÁ GỐC</th>
                                    <th>GIẢM</th>
                                    <th>GIÁ GIẢM</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wishlists as $item)
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="javascript:void(0);"><img src="{!! asset($item[0]['feature_image_path']) !!}"></a>
                                            <h5>{!! $item[0]['name'] !!}</h5>
                                        </td>
                                        <td class="price"><span>{!! number_format($item[0]['price'], 0, ',', '.') !!} VNĐ</span></td>
                                        <td class="sale_price"><span>{!! $item[0]['sale_price'] !!}%</span></td>
                                        <td class="final_price"><span>{!! number_format($item[0]['final_price'], 0, ',', '.') !!} VNĐ</span></td>
                                        @php
                                            $totalCart += $item[0]['final_price'];
                                        @endphp
                                        <td class="action"><a href="javascript:void(0);" data-id="{!! $item[0]['id'] !!}" class="cart-add"><i class="fa fa-shopping-cart"></i></a></td>
                                        <td class="action"><a href="javascript:void(0);" data-id="{!! $item[0]['id'] !!}" class="cart-del"><i class="icon_close"></i></a></td>
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
                            <a href="javascript:void(0);" data-totalcart="{!! $totalCart !!}" class="btn alazea-btn w-100 wishlistd-delall">Xoá Hết</a>
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
$(document).on('click', '.cart-add', function() {
    let id = $(this).data('id');
    let quantity = 1;
    let url = '{!! route("guest.cart.add") !!}';

    $.ajax({
        type: "get",
        url: url,
        data: {
            'id': id,
            'quantity': quantity,
            'wishlist': true
        },
        success: function (response) {
            if(response.code === 200) {
                $('.cart-heart').empty();
                $('.cart-heart').html('(' + response.cardHeart + ')');
                $('.cart-quantity').empty();
                $('.cart-quantity').html('(' + response.cardQuantity + ')');
                $('.ajax-wishlist-data').empty();
                $('.ajax-wishlist-data').html(response.wishlistData);

                setTimeout(function() {
                    alertify.set('notifier', 'position', 'bottom-left');
                    var delay = alertify.get('notifier','delay');
                    alertify.set('notifier','delay', 2);
                    alertify.success('Đã thêm sản phẩm vào giỏ hàng');
                    alertify.set('notifier','delay', delay);
                }, 300);
            }
            
        }
    });
});

$(document).on('click', '.cart-del', function() {
    let id = $(this).data('id');
    let url = '{!! route("guest.wishlist.del") !!}';

    $.ajax({
        type: "get",
        url: url,
        data: {
            'id': id
        },
        success: function (response) {
            if(response.code === 200) {
                
                $('.cart-heart').empty();
                $('.cart-heart').html('(' + response.cardHeart + ')');
                $('.ajax-wishlist-data').empty();
                $('.ajax-wishlist-data').html(response.wishlistData);
                
                setTimeout(function() {
                    alertify.set('notifier', 'position', 'bottom-left');
                    var delay = alertify.get('notifier','delay');
                    alertify.set('notifier','delay', 2);
                    alertify.success('Đã xoá sản phẩm yêu thích');
                    alertify.set('notifier','delay', delay);
                }, 300);
            }
        }
    });
});

$(document).on('click', '.wishlistd-delall', function() {
    let totalcart = $(this).data('totalcart');

    if(totalcart == 0) {
        setTimeout(function() {
            alertify.set('notifier', 'position', 'bottom-left');
            var delay = alertify.get('notifier','delay');
            alertify.set('notifier','delay', 2);
            alertify.error('Chưa có sản phẩm yêu thích');
            alertify.set('notifier','delay', delay);
        }, 300);

        return;
    }

    let url = '{!! route("guest.wishlist.delall") !!}';

    $.ajax({
        type: "get",
        url: url,
        success: function (response) {
            if(response.code === 200) {
                $('.cart-heart').empty();
                $('.cart-heart').html('(' + response.cardHeart + ')');
                $('.ajax-wishlist-data').empty();
                $('.ajax-wishlist-data').html(response.wishlistData);
                
                setTimeout(function() {
                    alertify.set('notifier', 'position', 'bottom-left');
                    var delay = alertify.get('notifier','delay');
                    alertify.set('notifier','delay', 2);
                    alertify.success('Đã xoá hết sản phẩm yêu thích');
                    alertify.set('notifier','delay', delay);
                }, 300);
            }
        }
    });
});
</script>
@endsection
