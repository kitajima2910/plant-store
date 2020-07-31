@extends('layouts.guest.master')
@section('title', 'Sản Phẩm')
@section('content')
@section('style')
<style>
    .product-img a img{
        width: 255px;
        height: 255px;
    }

    .none{
        display: none;
    }
    .page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #70c745;
    border-color: white;
    }

    .single-product-area .product-img .product-meta .wishlist-btn{
        padding-top: 14px;
    }

    .single-product-area .product-img .product-meta .compare-btn{
        padding-top: 14px;
    }

    .footer-area .single-footer-widget .social-info a {
        padding-top: 12px
    }

    
    .shop-sorting-data {
        float: right;    
        padding-left: 915px;
    }


    .widget-desc a{
        color: #707070;
    }


</style>
@endsection
       <!-- ##### Breadcrumb Area Start ##### -->
        @include('includes.guest.breadcrumb-area', ['currentPage' => 'Sản Phẩm'])

        <!-- ##### Breadcrumb Area End ##### -->

          <!-- ##### Shop Area Start ##### -->
    <section class="shop-page section-padding-0-100">
        <div class="container">
            <div class="row" >
                <!-- Shop Sorting Data -->
                <div class="col-12 bottom_line" >
                    <div class="shop-sorting-data d-flex flex-wrap align-items-center justify-content-between">
                        <div class="search_by_terms">
                            <form action="#" method="post" class="form-inline">
                                <select class="custom-select widget-title">
                                  <option selected>Short by Popularity</option>
                                  <option value="1">Short by Newest</option>
                                  <option value="2">Short by Sales</option>
                                  <option value="3">Short by Ratings</option>
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
                            @include('includes.guest.category')
                        </div>

                        <!-- Shop Widget -->
                        <div class="shop-widget best-seller mb-50">
                            <h4 class="widget-title">Best Seller</h4>
                            <div class="widget-desc">
                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop-products-area">
                        <div class="row">
                @foreach ($products as $item)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-product-area mb-50">
                        <!-- Product Image -->
                        <div class="product-img">
                        <a href="{!! route('guest.viewProductDetails', $item->slug) !!}"><img src="{{asset($item->feature_image_path)}}" alt=""></a>
                            <!-- Product Tag -->
                            <div class="product-tag {{ $item->sale_price > 0 ? 'sale-tag' : 'none' }}">
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
                                <p>{{$item->name}}</p>
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
                    </div>
                </div>  
                 <!-- Pagination -->
                <div class="col-5"></div>
                <div class="col-4">    
                    {{$products->links()}}
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Area End ##### -->

    @section('script')
    <script>
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