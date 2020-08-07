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
                                <a href="javascript:void(0);" class="add-to-cart-btn cart-add" data-id="{!! $item->id !!}">Thêm giỏ hàng</a>
                            <a href="javascript:void(0);"  data-prod="{{$item}}" class="compare-btn"><i class="arrow_left-right_alt"></i></a>
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
                                <a href="javascript:void(0);" class="add-to-cart-btn cart-add" data-id="{!! $item->id !!}">Thêm giỏ hàng</a>
                                <a href="javascript:void(0);" data-prod="{{$item}}" class="compare-btn"><i class="arrow_left-right_alt"></i></a>

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
    <div class="modal-body" style="justify-content: center">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger remove-btn" data-dismiss="modal">Xóa so sánh</button>
    </div>
    </div>
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
            break;}
            }

            if(flag === true) {
                compare.push(objProd);
            }
            setTimeout(function() {
            alertify.set('notifier', 'position', 'bottom-left');
            var delay = alertify.get('notifier','delay');
            alertify.set('notifier','delay', 2);
            alertify.success('Đã thêm sản phẩm để so sánh');
            alertify.set('notifier','delay', delay);
        }, 300);
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
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
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
        $('.tb-img').append("<td><a href='http://localhost/plant-store/san-pham/"+compare[i].slug+".html'><img src='http://localhost/plant-store"+compare[i].feature_image_path +"'></a></td>")
        var price = formatNumber(compare[i].final_price);
        $('.tb-price').append("<td><h6>"+price+"VNĐ</h6></td>")
        $('.tb-function').append("<td><a type='button' href='javascript:void(0);' class='btn btn-success cart-add' data-id='"+compare[i].id+"'>Thêm vào giỏ hàng</a></td>")
        $('.tb-content').append("<td><p>"+compare[i].content_short+"</p></td>")
        // $('.tb-rating').append("<td></td>")
        }
        }
});

$(document).on('click', '.remove-btn', function() {
    
    compare = [];
    sessionStorage.setItem('compare', JSON.stringify(compare));
    $(".btn-show").removeClass("show");
    $(".btn-show").addClass("hidden");
});


</script>
@endsection