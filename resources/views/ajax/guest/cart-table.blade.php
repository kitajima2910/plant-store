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
                                <th>TIỀN TRẢ</th>
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
                                            {{-- <span class="qty-minus"
                                                onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN(   qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i
                                                    class="fa fa-minus" aria-hidden="true"></i></span> --}}
                                            {{-- <input type="number" class="qty-text" id="qty" step="1" min="1" max="99"
                                                name="quantity" value="{!! $cart->qty !!}"> --}}
                                            {{-- <span class="qty-plus"
                                                onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN(   qty )) effect.value++;return false;"><i
                                                    class="fa fa-plus" aria-hidden="true"></i></span> --}}
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
                        <a href="#" class="btn alazea-btn w-100">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ##### Cart Area End ##### -->