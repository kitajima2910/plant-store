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

            @if (auth()->guard('customers')->check())
                <input type="hidden" class="wishlist_id" value="{!! auth()->guard('customers')->user()->id !!}" />
            @else
                <input type="hidden" class="wishlist_id" value="" />
            @endif
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
                                <a href="javascript:void(0);" class="wishlist-btn wishlist-add" data-id="{!! $item->id !!}"><i class="icon_heart_alt"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart-btn cart-add" data-id="{!! $item->id !!}">thêm giỏ hàng</a>
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
                                <a href="javascript:void(0);" class="wishlist-btn wishlist-add" data-id="{!! $item->id !!}"><i class="icon_heart_alt"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart-btn cart-add" data-id="{!! $item->id !!}">thêm giỏ hàng</a>
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
            <a href="{!! route('guest.product.index') !!}" class="btn alazea-btn">XEM THÊM</a>
        </div>
    </div>
</section>

@section('script')
<script>
$(document).on('click', '.wishlist-add', function() {
    let customer_id = $('.wishlist_id').val();
            
    if(customer_id === '') {
        setTimeout(function() {
            alertify.set('notifier', 'position', 'bottom-left');
            var delay = alertify.get('notifier','delay');
            alertify.set('notifier','delay', 2);
            alertify.error('Bạn chưa đăng nhập');
            alertify.set('notifier','delay', delay);
        }, 300);
        return;
    }

    let id = $(this).data('id');
    let url = '{!! route("guest.wishlist.add") !!}';

    $.ajax({
        type: "get",
        url: url,
        data: {
            'id': id,
        },
        success: function (response) {
            if(response.code === 200) {
                $('.cart-heart').empty();
                $('.cart-heart').html('(' + response.cardHeart + ')');
                
                setTimeout(function() {
                    alertify.set('notifier', 'position', 'bottom-left');
                    var delay = alertify.get('notifier','delay');
                    alertify.set('notifier','delay', 2);
                    alertify.success('Đã thêm sản phẩm yêu thích');
                    alertify.set('notifier','delay', delay);
                }, 300);
            }
            if(response.code === 204) {
                setTimeout(function() {
                    alertify.set('notifier', 'position', 'bottom-left');
                    var delay = alertify.get('notifier','delay');
                    alertify.set('notifier','delay', 2);
                    alertify.error('Đã có sản phẩm yêu thích');
                    alertify.set('notifier','delay', delay);
                }, 300);
            }
        }
    });
});

$(document).on('click', '.cart-add', function() {
    let id = $(this).data('id');
    let quantity = 1;
    let url = '{!! route("guest.cart.add") !!}';
    let _token = '{{ csrf_token() }}';

    $.ajax({
        type: "get",
        url: url,
        data: {
            '_token': _token,
            'id': id,
            'quantity': quantity
        },
        success: function (response) {
            
            $('.cart-quantity').empty();
            $('.cart-quantity').html('(' + response.cardQuantity + ')');

            setTimeout(function() {
                alertify.set('notifier', 'position', 'bottom-left');
                var delay = alertify.get('notifier','delay');
                alertify.set('notifier','delay', 2);
                alertify.success('Đã thêm sản phẩm vào giỏ hàng');
                alertify.set('notifier','delay', delay);
            }, 300);
        }
    });
});
</script>
@endsection