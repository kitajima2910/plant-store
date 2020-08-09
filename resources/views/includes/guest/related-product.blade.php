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
            @if (auth()->guard('customers')->check())
                <input type="hidden" class="wishlist_id" value="{!! auth()->guard('customers')->user()->id !!}" />
            @else
                <input type="hidden" class="wishlist_id" value="" />
            @endif
            
            @foreach($productOfCategory as $item)
                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Product Image -->
                        <div class="product-img">
                            <a href="{!! route('guest.viewProductDetails', $item['slug']) !!}"><img src="{{ asset($item['feature_image_path']) }}"></a>
                            <!-- Product Tag -->
                            <div class="product-tag {{ $item['sale_price'] > 0 ? 'sale-tag' : '' }}">
                                @if ($item['sale_price'] > 0)
                                    <a href="javascript:void(0);">{{ 'SALE '. $item['sale_price'] . '%' }}</a>
                                @endif
                            </div>
                            <div class="product-meta d-flex">
                                <a href="javascript:void(0);" class="wishlist-btn wishlist-add" data-id="{!! $item['id'] !!}"><i class="icon_heart_alt"></i></a>
                                <a href="javascript:void(0);" class="add-to-cart-btn cart-add" data-id="{!! $item['id'] !!}">thêm giỏ hàng</a>
                                <a href="#" class="related-cmp" data-slug="{{$item['slug']}}" data-id="{{$item['id']}}" data-content="{{$item['content_short']}}" data-name= "{{$item['name']}}" data-price="{{$item['final_price']}}" data-img="{{$item['feature_image_path']}}"><i class="arrow_left-right_alt"></i></a>
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
