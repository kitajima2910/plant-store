@extends('layouts.guest.master')
@section('title', 'Sản Phẩm')
@section('content')
@section('style')
<link rel="stylesheet" href="{!! asset('public/vendors/shop/style.css') !!}">
@endsection
<!-- ##### Breadcrumb Area Start ##### -->
@include('includes.guest.breadcrumb-area', ['currentPage' => 'Sản Phẩm'])
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Shop Area Start ##### -->
<section class="shop-page section-padding-0-100">
    <div class="container">
        <div class="row">
            <!-- Shop Sorting Data -->
            <div class="col-12 bottom_line">
                <div class="shop-sorting-data d-flex flex-wrap align-items-center justify-content-between">
                    <div class="search_by_terms">
                        <form action="#" method="post" class="form-inline">
                            <select class="custom-select widget-title sort-products">
                                <option value="prod-gia-thap-cao">Thứ tự giá: thấp đến cao</option>
                                <option value="prod-gia-cao-thap">Thứ tự giá: cao đến thấp</option>
                                <option value="prod-hot" selected>Mới nhất</option>
                                <option value="prod-sale">Thứ tự theo giảm giá</option>
                                {{-- <option value="prod-ratting">Thứ tự theo đánh giá</option> --}}
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Sidebar Area -->
            <div class="col-12 col-md-4 col-lg-3">
                <div class="shop-sidebar-area">
                    <!-- Shop Widget -->
                    <div class="shop-widget catagory mb-50">
                        <h4 class="widget-title">Danh Mục</h4>
                        <ul>
                            @foreach ($categories as $menu)
                                <li>
                                    <a href="{!! route('guest.viewProduct', $menu->slug) !!}">
                                        {{$menu->name}}
                                    </a>
                                    @if(count($menu->childs))
                                        @include('includes.guest.manage-category-child', ['childs' => $menu->childs, 'sub' => '--'])
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Shop Widget -->
                    <div class="shop-widget best-seller mb-50">
                        <h4 class="widget-title">Best Seller</h4>
                        <div class="widget-desc">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-9" id="show-product">
                
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
                                                <a href="#" class="wishlist-btn"><i class="icon_heart_alt"></i></a>
                                                <a href="javascript:void(0);" class="add-to-cart-btn cart-add"
                                                    data-id="{!! $item->id !!}">Add to cart</a>
                                                <a href="#" class="compare-btn"><i class="arrow_left-right_alt"></i></a>
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
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<!-- ##### Shop Area End ##### -->

@section('script')
<script>
    $(document).on('click', '.cart-add', function () {
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

                setTimeout(function () {
                    alertify.set('notifier', 'position', 'bottom-left');
                    var delay = alertify.get('notifier', 'delay');
                    alertify.set('notifier', 'delay', 2);
                    alertify.success('Đã thêm sản phẩm vào giỏ hàng');
                    alertify.set('notifier', 'delay', delay);
                }, 300);
            }
        });
    });

    $(document).on('change', '.sort-products', function() {
        let sort = $(this).children("option:selected").val();
        let url = '{!! route("guest.product.ajaxIndex") !!}?sort=' + sort;
        console.log(url);
        $.ajax({
            type: "get",
            url: url,
            success: function (data) {
                if(data.code === 200) {
                    $('#show-product').empty();
                    $('#show-product').html(data.productData);
                }
            }
        });
    });
    
    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        let pageCategory = '';
        try {
            pageCategory = $(this).attr('href').split('/')[6];
            pageCategory = pageCategory.split('?')[0];
            pageCategory = pageCategory.split('.')[0];
        } catch (error) {
            // console.error(error);
        }
        let url = '';
        if(pageCategory !== undefined) {
            url = '{!! url("ajax/san-pham/danh-muc.html") !!}?slug=' + pageCategory + '&page=' + page;
        } else {
            url = '{!! route("guest.product.ajaxIndex") !!}?page=' + page;
        }

        $.ajax({
            type: "get",
            url: url,
            success: function (data) {
                if(data.code === 200) {
                    $('#show-product').empty();
                    $('#show-product').html(data.productData);
                }
            }
        });
    });
</script>
@endsection
