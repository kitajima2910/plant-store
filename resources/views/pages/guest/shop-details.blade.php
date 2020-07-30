@extends('layouts.guest.master')
@section('title', 'Chi Tiết Sản Phẩm')
@section('style')
<style>
    .description_area p:nth-of-type(2) {
        display: flex;
        justify-content: center;    
    }

    .single_product_details_area .carousel-inner,
    .single_product_details_area .carousel-inner img {
        width:450px;
        height: 450px ;
    }

    .product-img a img{
        width: 255px;
        height: 255px;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none !important;
        margin: 0;
    }   

</style>
@endsection
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
@include('includes.guest.breadcrumb-area', ['currentPage' => 'Chi Tiết Sản Phẩm'])
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Single Product Details Area Start ##### -->
<section class="single_product_details_area mb-50">
    <div class="produts-details--content mb-50">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-12 col-md-6 col-lg-5">
                    <div class="single_product_thumb">
                        <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a class="product-img" href="javascript:void(0);">
                                        <img class="d-block w-100" src="{!! asset($product->feature_image_path) !!}">
                                    </a>
                                </div>
                                @foreach ($productImages as $item)
                                    <div class="carousel-item">
                                        <a class="product-img" href="javascript:void(0);">
                                            <img class="d-block w-100" src="{!! asset($item->image_path) !!}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#product_details_slider" data-slide-to="0"
                                    style="background-image: url({!! asset($product->feature_image_path) !!});">
                                </li>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($productImages as $item)
                                <li data-target="#product_details_slider" data-slide-to="{{ $i++ }}"
                                    style="background-image: url({!! asset($item->image_path) !!});">
                                </li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="single_product_desc">
                        <h4 class="title">{!! $product->name !!}</h4>
                        <h4 class="price">{!! number_format($product->final_price, 0, ',', '.') !!} VNĐ</h4>
                        <div class="short_overview">
                            <p>{{ $product->content_short }}</p>
                        </div>

                        <div class="cart--area d-flex flex-wrap align-items-center">
                            <!-- Add to Cart Form -->
                            <form class="cart clearfix d-flex align-items-center" action="{!! route('guest.cart.add') !!}" method="get">
                                @csrf
                                <input type="hidden" name="id" value="{!! $product->id !!}">
                                <input type="hidden" name="pageToCart" value="guest.cart.index">
                                <div class="quantity">
                                    <span class="qty-minus"
                                        onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i
                                            class="fa fa-minus" aria-hidden="true"></i></span>
                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="12"
                                        name="quantity" value="1">
                                    <span class="qty-plus"
                                        onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i
                                            class="fa fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <button type="submit" class="btn alazea-btn ml-15">thêm giỏ hàng</button>
                            </form>
                            <!-- Wishlist & Compare -->
                            <div class="wishlist-compare d-flex flex-wrap align-items-center">
                                <a href="#" class="wishlist-btn ml-15"><i class="icon_heart_alt"></i></a>
                                <a href="#" class="compare-btn ml-15"><i class="arrow_left-right_alt"></i></a>
                            </div>
                        </div>

                        <div class="products--meta">
                            <p><span>Danh mục:</span> <span>{!! $productCategory['name'] !!}</span></p>
                            <p><span>Tags:</span> <span>{!! $tagsStr !!}</span></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_details_tab clearfix">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs" role="tablist" id="product-details-tab">
                        <li class="nav-item">
                            <a href="#description" class="nav-link active" data-toggle="tab"
                                role="tab">MÔ TẢ</a>
                        </li>
                    </ul>
                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="description">
                            <div class="description_area">
                                {!! $product->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Single Product Details Area End ##### -->

<!-- ##### Related Product Area Start ##### -->
@include('includes.guest.related-product')
<!-- ##### Related Product Area End ##### -->
@endsection
