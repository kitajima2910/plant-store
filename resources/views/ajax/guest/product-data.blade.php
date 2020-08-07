<div class="shop-products-area">
    <div class="row">
    
        @foreach($products as $item)
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-product-area mb-50">
                    <!-- Product Image -->
                    <div class="product-img">
                        <a href="{!! route('guest.viewProductDetails', $item->slug) !!}"><img
                                src="{{ asset($item->feature_image_path) }}" alt=""></a>
                        <!-- Product Tag -->
                        <div
                            class="product-tag {{ $item->sale_price > 0 ? 'sale-tag' : 'none' }}">
                            <a
                                href="javascript:void(0);">{{ $item->sale_price > 0 ? 'SALE '. $item->sale_price . '%' : 'HOT' }}</a>
                        </div>
                        <div class="product-meta d-flex">
                            <a href="javascript:void(0);" class="wishlist-btn wishlist-add" data-id="{!! $item->id !!}"><i class="icon_heart_alt"></i></a>
                            <a href="javascript:void(0);" class="add-to-cart-btn cart-add"
                                data-id="{!! $item->id !!}">Thêm giỏ hàng</a>
                            <a href="javascript:void(0);" class="compare-btn btn-test" data-prod="{{$item}}"><i class="arrow_left-right_alt"></i></a>

                        </div>
                    </div>
                    <!-- Product Info -->
                    <div class="product-info mt-15 text-center">
                        <a href="{!! route('guest.viewProductDetails', $item->slug) !!}">
                            <p>{{ $item->name }}</p>
                        </a>
                        @if($item->sale_price > 0)
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
</div>
<!-- Pagination -->
<div class="col-5"></div>
<div class="col-4 pagin-center">
{{ $products->links() }}
</div>
