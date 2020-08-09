@extends('layouts.guest.master')
@section('title', 'Chi Tiết Sản Phẩm')
@section('meta')
    <meta property="og:image" content="{!! asset($product->feature_image_path) !!}">
    <meta property="og:site_name" content="{!! url('') !!}">
    <meta property="og:description" content="{{ $product->content_short }}">
    <meta property="og:title" content="{!! $product->name !!}">
    <meta property="og:url" content="{!! url('san-pham') . '/' . $product->slug . '.html'!!}">
    <meta property="og:type" content="website">
@endsection
@section('style')
<link rel="stylesheet" href="{!! asset('public/vendors/shop/style.css') !!}">
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

    table, th, td {
    padding: 10px;
    border: 1px solid black;
    }
    .tb-name td{
        text-align: center;
    }
    .tb-price td{
        text-align: center;
    }
    .tb-content td p{
        width: 200px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .modal-body {
        justify-content: center;
    }
    .modal-content{
        min-width: 100%;
        overflow-x: auto;
        width: 900px;
        margin-left: -190px;
        margin: 40px -180px;
    }
    .tb-img img{
        width: 200px;
        height: 200px;
    }
    .tb-function{
        text-align: center;
    }

    .product-thumbnail  img{
        width: 70px;
        height: 70px;
    }

    .remove-cmp{
        padding-left: 180px;
    }

    .header-cmp-0 .remove-cmp{
        padding-left: 100px;
    }
    .cmp-0{
        background-color: greenyellow;
    }

    .product-tag a{
        background-color: #e61d47;
        border-radius: 2px;
        color: white;
        padding: 0 10px;
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
                                <a href="javascript:void(0);" class="wishlist-btn ml-15 wishlist-add" data-id="{!! $product->id !!}"><i class="icon_heart_alt"></i></a>
                                <a href="javascript:void(0);" data-prod="{{$product}}" class="compare-btn ml-15"><i class="arrow_left-right_alt"></i></a>
                            </div>
                        </div>

                        <div class="products--meta">
                            <p><span>Danh mục:</span> <span>{!! $productCategory['name'] !!}</span></p>
                            <p><span>Tags:</span> <span>{!! $tagsStr !!}</span></p>
                            <p>
                                <div class="fb-share-button" data-href="http://localhost/plant-store/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={!! url('san-pham') . '/' . $product->slug . '.html'!!};src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                            </p>
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

<!-- ##### Related Product Area Start ##### -->
@include('includes.guest.related-product')
<!-- ##### Related Product Area End ##### -->
<!-- ##### Single Product Details Area End ##### -->
    <!-- Button trigger modal -->
    <button type="button" id="btn-show" class="btn btn-primary btn-show hidden" data-toggle="modal" data-target="#exampleModal">
        <i class="arrow_left-right_alt"></i>
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">So sánh sản phẩm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger remove-btn" data-dismiss="modal">Xóa so sánh</button>
        </div>
        </div>
        </div>
    </div>
@endsection
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

// Comparision products

var compare = sessionStorage.getItem('compare') != null ? JSON.parse(sessionStorage.getItem('compare')) : [];

if(compare.length > 0) {
    $("button#btn-show").removeClass("hidden");
    $("button#btn-show").addClass("show");
}

$(document).on('click', '.compare-btn', function() {
    if(compare.length<3){
    objProd = $(this).data('prod');

    let flag = true;
    for(let obj of compare) {
        if(obj.id === objProd.id) {
            flag = false;
            setTimeout(function() {
            alertify.set('notifier', 'position', 'bottom-left');
            var delay = alertify.get('notifier','delay');
            alertify.set('notifier','delay', 2);
            alertify.error('Sản phẩm đã có trong phần so sánh');
            alertify.set('notifier','delay', delay);
        }, 300);
            break;}
            }

            if(flag === true) {
                compare.push(objProd);
            
            setTimeout(function() {
            alertify.set('notifier', 'position', 'bottom-left');
            var delay = alertify.get('notifier','delay');
            alertify.set('notifier','delay', 2);
            alertify.success('Đã thêm sản phẩm để so sánh');
            alertify.set('notifier','delay', delay);
        }, 300);}
    console.log(compare);
    }else{
        setTimeout(function() {
            alertify.set('notifier', 'position', 'bottom-left');
            var delay = alertify.get('notifier','delay');
            alertify.set('notifier','delay', 2);
            alertify.error('Sản phẩm so sánh đã đầy');
            alertify.set('notifier','delay', delay);
        }, 300);
    }

    $("button#btn-show").removeClass("hidden");
    $("button#btn-show").addClass("show");
    compare.sort(function(a, b) {
        return  a.final_price-b.final_price;
    });

    sessionStorage.setItem('compare', JSON.stringify(compare));
});

function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
}

$(document).on('click', '.btn-show', function() {
$('.modal-body').html('');
if(compare.length == 0){
    $('.modal-body').append('<div>Không có dữ liệu để so sánh</div>');
}else{
    $('.modal-body').append("<table><tr class='tb-img'><th>Hình ảnh</th></tr><tr class='tb-name'><th>Tên</th></tr><tr class='tb-price'><th>Giá</th></tr><tr class='tb-content'><th>Chi tiết</th></tr><tr class='tb-function'><th>Hành động</th></tr></table>")
    for(var i=0; i<compare.length; i++){
    // $('.modal-body').append("<div class='single-compare'><div class='compare-img'> <img src='http://localhost/plant-store"+compare[i].feature_image_path +"'></div><div>" +compare[i].name + "</div> <h6>"+compare[i].final_price+"VNĐ</h6><div> <a type='button' href='javascript:void(0);' class='btn btn-success cart-add' data-id='"+compare[i].id+"'>Thêm vào giỏ hàng</a>'</div></table>")
    $('.tb-name').append("<td><a href='http://localhost/plant-store/san-pham/"+compare[i].slug+".html'>"+compare[i].name+"</a></td>")
    $('.tb-img').append("<td><div class='header-cmp-"+i+"' style='display:flex;'><div class='tag-"+i+"'></div><div class='remove-cmp'><a href='javascript:void(0);' class='removecmp-btn' data-cmpid='"+i+"' >X</a></div></div><div><a href='http://localhost/plant-store/san-pham/"+compare[i].slug+".html'><img src='http://localhost/plant-store"+compare[i].feature_image_path +"'></a></div></td>")
    var price = formatNumber(compare[i].final_price);
    $('.tb-price').append("<td><h6 class='cmp-"+i+"'>"+price+"VNĐ</h6></td>")
    $('.tb-function').append("<td><a type='button' href='javascript:void(0);' class='btn btn-success cart-add' data-id='"+compare[i].id+"'>Thêm vào giỏ hàng</a></td>")
    $('.tb-content').append("<td><p>"+compare[i].content_short+"</p></td>")
    // $('.tb-rating').append("<td></td>")
    }
    $('.tag-0').append("<div class='product-tag'><a href='javascript:void(0);'>Rẻ vô địch</a></div>")
}
});

$(document).on('click', '.remove-btn', function() {
    
    compare = [];
    sessionStorage.setItem('compare', JSON.stringify(compare));
    $(".btn-show").removeClass("show");
    $(".btn-show").addClass("hidden");
});

$(document).on('click','.removecmp-btn',function() {
    // compare.remove($(this).data('cmpid'));
    compare.splice($(this).data('cmpid'),1);
    sessionStorage.setItem('compare', JSON.stringify(compare));
    setTimeout(function() {
                alertify.set('notifier', 'position', 'bottom-left');
                var delay = alertify.get('notifier','delay');
                alertify.set('notifier','delay', 2);
                alertify.error('Đã xóa sản phẩm khỏi so sánh');
                alertify.set('notifier','delay', delay);
            }, 300);
    $('.modal-body').html('');
if(compare.length == 0){
    $('.modal-body').append('<div>Không có dữ liệu để so sánh</div>');
}else{
    $('.modal-body').append("<table><tr class='tb-img'><th>Hình ảnh</th></tr><tr class='tb-name'><th>Tên</th></tr><tr class='tb-price'><th>Giá</th></tr><tr class='tb-content'><th>Chi tiết</th></tr><tr class='tb-function'><th>Hành động</th></tr></table>")
    for(var i=0; i<compare.length; i++){
    // $('.modal-body').append("<div class='single-compare'><div class='compare-img'> <img src='http://localhost/plant-store"+compare[i].feature_image_path +"'></div><div>" +compare[i].name + "</div> <h6>"+compare[i].final_price+"VNĐ</h6><div> <a type='button' href='javascript:void(0);' class='btn btn-success cart-add' data-id='"+compare[i].id+"'>Thêm vào giỏ hàng</a>'</div></table>")
    $('.tb-name').append("<td><a href='http://localhost/plant-store/san-pham/"+compare[i].slug+".html'>"+compare[i].name+"</a></td>")
    $('.tb-img').append("<td><div class='header-cmp-"+i+"' style='display:flex;'><div class='tag-"+i+"'></div><div class='remove-cmp'><a href='javascript:void(0);' class='removecmp-btn' data-cmpid='"+i+"' >X</a></div></div><div><a href='http://localhost/plant-store/san-pham/"+compare[i].slug+".html'><img src='http://localhost/plant-store"+compare[i].feature_image_path +"'></a></div></td>")
    var price = formatNumber(compare[i].final_price);
    $('.tb-price').append("<td><h6 class='cmp-"+i+"'>"+price+"VNĐ</h6></td>")
    $('.tb-function').append("<td><a type='button' href='javascript:void(0);' class='btn btn-success cart-add' data-id='"+compare[i].id+"'>Thêm vào giỏ hàng</a></td>")
    $('.tb-content').append("<td><p>"+compare[i].content_short+"</p></td>")
    // $('.tb-rating').append("<td></td>")
    }
    $('.tag-0').append("<div class='product-tag'><a href='javascript:void(0);'>Rẻ vô địch</a></div>")
}
})


//Related Compare
$(document).on('click', '.related-cmp', function() {
    if(compare.length<3){
        objRelated = {
            id: $(this).data('id'),    
            name: $(this).data('name'),
            feature_image_path: $(this).data('img'),
            final_price: $(this).data('price'),
            content_short: $(this).data('content'),
            slug: $(this).data('slug'),
        }

    let flag = true;
    for(let obj of compare) {
        if(obj.id === objRelated.id) {
            flag = false;
            setTimeout(function() {
            alertify.set('notifier', 'position', 'bottom-left');
            var delay = alertify.get('notifier','delay');
            alertify.set('notifier','delay', 2);
            alertify.error('Sản phẩm đã có trong phần so sánh');
            alertify.set('notifier','delay', delay);
        }, 300);
            break;}
            }

            if(flag === true) {
                compare.push(objRelated);
            
            setTimeout(function() {
            alertify.set('notifier', 'position', 'bottom-left');
            var delay = alertify.get('notifier','delay');
            alertify.set('notifier','delay', 2);
            alertify.success('Đã thêm sản phẩm để so sánh');
            alertify.set('notifier','delay', delay);
        }, 300);}
    console.log(compare);
    }else{
        setTimeout(function() {
            alertify.set('notifier', 'position', 'bottom-left');
            var delay = alertify.get('notifier','delay');
            alertify.set('notifier','delay', 2);
            alertify.error('Sản phẩm so sánh đã đầy');
            alertify.set('notifier','delay', delay);
        }, 300);
    }

    $("button#btn-show").removeClass("hidden");
    $("button#btn-show").addClass("show");
    compare.sort(function(a, b) {
        return  a.final_price-b.final_price;
    });

    sessionStorage.setItem('compare', JSON.stringify(compare));
});

</script>
@endsection
