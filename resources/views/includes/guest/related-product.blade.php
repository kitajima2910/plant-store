<div class="related-products-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>SẢN PHẨM LIÊN QUAN</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($productOfCategory as $item)
                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Product Image -->
                        <div class="product-img">
                            <a href="{!! route('guest.viewProductDetails', $item['slug']) !!}"><img src="{{ asset($item['feature_image_path']) }}"></a>
                            <!-- Product Tag -->
                            <div class="product-tag">
                                {{-- <a href="#">Hot</a> --}}
                            </div>
                            <div class="product-meta d-flex">
                                <a href="#" class="wishlist-btn"><i class="icon_heart_alt"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart-btn cart-add" data-id="{!! $item['id'] !!}">Add to cart</a>
                                <a href="#" class="compare-btn"><i class="arrow_left-right_alt"></i></a>
                            </div>
                        </div>
                        <!-- Product Info -->
                        <div class="product-info mt-15 text-center">
                            <a href="{!! route('guest.viewProductDetails', $item['slug']) !!}">
                                <p>{!! $item['name'] !!}</p>
                            </a>
                            @if ($item['sale_price'] > 0)
                                <s>{!! number_format($item['price'], 0, ',', '.') !!} VNĐ</s>
                                <h6>{!! number_format($item['final_price'], 0, ',', '.') !!} VNĐ</h6>
                            @else
                                <h6>{!! number_format($item['final_price'], 0, ',', '.') !!} VNĐ</h6>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
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
            $('.cart-quantity').empty();
            $('.cart-quantity').html('(' + response + ')');
            alertify.set('notifier', 'position', 'bottom-left');
            alertify.success('Đã thêm sản phẩm vào giỏ hàng');
        }
    });
});
</script>
@endsection