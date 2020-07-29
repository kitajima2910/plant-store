<section class="new-arrivals-products-area bg-gray section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>Sản Phẩm Mới</h2>
                    <p>Có những sản phẩm khác có lẽ bạn sẽ hứng thú</p>
                </div>
            </div>
        </div>

        <div class="row">

            @foreach ($products as $item)
                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Product Image -->
                        <div class="product-img">
                            <a href="{!! route('guest.viewProductDetails', $item->slug) !!}"><img src="{{ asset($item->feature_image_path) }}"></a>
                            <!-- Product Tag -->
                            <div class="product-tag {{ $item->sale_price > 0 ? 'sale-tag' : '' }}">
                                <a href="javascript:void(0);">{{ $item->sale_price > 0 ? 'SALE '. $item->sale_price . '%' : 'HOT' }}</a>
                            </div>
                            <div class="product-meta d-flex">
                                <a href="#" class="wishlist-btn"><i class="icon_heart_alt"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart-btn cart-add" data-id="{!! $item->id !!}">Add to cart</a>
                                <a href="#" class="compare-btn"><i class="arrow_left-right_alt"></i></a>
                            </div>
                        </div>
                        <!-- Product Info -->
                        <div class="product-info mt-15 text-center">
                            <a href="{!! route('guest.viewProductDetails', $item->slug) !!}">
                                <p>{!! $item->name !!}</p>
                            </a>
                            @if ($item->sale_price > 0)
                                <s>{!! number_format($item->price, 0, ',', '.') !!} VNĐ</s>
                                <h6>{!! number_format($item->final_price, 0, ',', '.') !!} VNĐ</h6>
                            @else
                                <h6>{!! number_format($item->final_price, 0, ',', '.') !!} VNĐ</h6>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>Sản Phẩm Giảm Giá</h2>
                    <p>Nhanh tay săn các sản phẩm giảm giá</p>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($productsSale as $item)
                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Product Image -->
                        <div class="product-img">
                            <a href="{!! route('guest.viewProductDetails', $item->slug) !!}"><img src="{{ asset($item->feature_image_path) }}"></a>
                            <!-- Product Tag -->
                            <div class="product-tag {{ $item->sale_price > 0 ? 'sale-tag' : '' }}">
                                <a href="javascript:void(0);">{{ $item->sale_price > 0 ? 'SALE '. $item->sale_price . '%' : 'HOT' }}</a>
                            </div>
                            <div class="product-meta d-flex">
                                <a href="#" class="wishlist-btn"><i class="icon_heart_alt"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart-btn cart-add" data-id="{!! $item->id !!}">Add to cart</a>
                                <a href="#" class="compare-btn"><i class="arrow_left-right_alt"></i></a>
                            </div>
                        </div>
                        <!-- Product Info -->
                        <div class="product-info mt-15 text-center">
                            <a href="{!! route('guest.viewProductDetails', $item->slug) !!}">
                                <p>{!! $item->name !!}</p>
                            </a>
                            @if ($item->sale_price > 0)
                                <s>{!! number_format($item->price, 0, ',', '.') !!} VNĐ</s>
                                <h6>{!! number_format($item->final_price, 0, ',', '.') !!} VNĐ</h6>
                            @else
                                <h6>{!! number_format($item->final_price, 0, ',', '.') !!} VNĐ</h6>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-12 text-center">
            <a href="#" class="btn alazea-btn">XEM THÊM</a>
        </div>
    </div>
</section>

@section('script')
<script>
$(document).on('click', '.cart-add', function() {
    let id = $(this).data('id');
    let quantity = 1;
    let url = '{!! route("guest.cart.add") !!}';
    let _token = '{{ csrf_token() }}';
    $.ajax({
        type: "post",
        url: url,
        data: {
            '_token': _token,
            'id': id,
            'quantity': quantity
        },
        success: function (response) {
            if(response.code === 200) {
                $('.cart-quantity').empty();
                $('.cart-quantity').html('(' + response.cardQuantity + ')');
                alertify.set('notifier', 'position', 'bottom-left');
                alertify.success('Đã thêm sản phẩm vào giỏ hàng');
            }
        }
    });
});
</script>
@endsection