@extends('layouts.guest.master')
@section('title', 'Sản Phẩm')
@section('style')
<link rel="stylesheet" href="{!! asset('public/vendors/shop/style.css') !!}">
<style>
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
@include('includes.guest.breadcrumb-area', ['currentPage' => 'Sản Phẩm'])
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Shop Area Start ##### -->
<section class="shop-page section-padding-0-100">
    <div class="container">
        <div class="row">
            @if (auth()->guard('customers')->check())
                <input type="hidden" class="wishlist_id" value="{!! auth()->guard('customers')->user()->id !!}" />
            @else
                <input type="hidden" class="wishlist_id" value="" />
            @endif
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
                                    {{-- <a href="{!! route('guest.viewProduct', $menu->slug) !!}"> --}}
                                    <a href="javascript:void(0);" class="cate-slug" data-slug="{!! $menu->slug !!}">
                                        {{$menu->name}}
                                    </a>
                                    @if(count($menu->childs))
                                        @include('includes.guest.manage-category-child', ['childs' => $menu->childs, 'sub' => '--'])
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h4>Top sản phẩm</h4>
                            </div>

                            <!-- Single Best Seller Products -->
                            @foreach ($bestSellerShare as $item)
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <img src="{{asset($item->feature_image_path)}}" alt="{!! route('guest.viewPostDetails', $item->slug) !!}">
                                </div>
                                <div class="product-info">
                                    <a href="{!! route('guest.viewProductDetails', $item->slug) !!}">
                                        <h6>{{$item->name}}</h6>
                                    </a>    
                                    <p>{!! number_format($item->final_price, 0, ',', '.') !!} VNĐ</p>
                                    {{-- <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div> --}}
                                </div>
                            </div>
                            @endforeach
                        </div>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-9" id="show-product">
                    @if (count($products) == 0)
                        <h3>Không tìm thấy sản phẩm nào!</h3>
                    @endif
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
                                                <a href="javascript:void(0);" class="compare-btn" data-prod="{{$item}}"><i class="arrow_left-right_alt"></i></a>
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
</section>
<!-- ##### Shop Area End ##### -->
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


    $(document).on('click', '.cart-add', function () {
        let id = $(this).data('id');
        let quantity = 1;
        let url = '{!! route("guest.cart.add") !!}';

        $.ajax({
            type: "get",
            url: url,
            data: {
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
        location.hash = '';

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

    $(document).on('click', '.cate-slug', function(e) {
        let slug = $(this).data('slug');
        let url = '{!! route("guest.viewProduct") !!}?slug=' + slug;
        location.hash = slug;
        
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
            pageCategory = location.hash.split('#')[1];
        } catch (error) {
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

</script>
@endsection
