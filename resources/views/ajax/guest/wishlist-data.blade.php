@php
    $totalCart = 0;
@endphp
<!-- ##### Cart Area Start ##### -->
<div class="cart-area section-padding-0-100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cart-table clearfix">
                    <table class="table table-responsive" {!! count($wishlists) > 1 ? 'style="height: 450px; overflow-y: auto;"' : '' !!}>
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
                            @foreach($wishlists as $item)
                                <tr>
                                    <td class="cart_product_img">
                                        <a href="javascript:void(0);"><img
                                                src="{!! asset($item[0]['feature_image_path']) !!}"></a>
                                        <h5>{!! $item[0]['name'] !!}</h5>
                                    </td>
                                    <td class="price"><span>{!! number_format($item[0]['price'], 0, ',', '.') !!}
                                            VNĐ</span></td>
                                    <td class="sale_price"><span>{!! $item[0]['sale_price'] !!}%</span></td>
                                    <td class="final_price"><span>{!! number_format($item[0]['final_price'], 0, ',',
                                            '.') !!} VNĐ</span></td>
                                    @php
                                        $totalCart += $item[0]['final_price'];
                                    @endphp
                                    <td class="action"><a href="javascript:void(0);" data-id="{!! $item[0]['id'] !!}"
                                            class="cart-add"><i class="fa fa-shopping-cart"></i></a></td>
                                    <td class="action"><a href="javascript:void(0);" data-id="{!! $item[0]['id'] !!}"
                                            class="cart-del"><i class="icon_close"></i></a></td>
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
