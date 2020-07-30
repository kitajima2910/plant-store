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
            <div class="product-tag {{ $item->sale_price > 0 ? 'sale-tag' : '' }}">
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
        <div class="col-5"></div>
        <div class="col-4">
            {!! $products->render() !!}
        </div>

<script type="text/javascript">
    $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            }else{
                getData(page);
            }
        }
    });
    
    $(document).ready(function()
    {
        $(document).on('click', '.pagination a',function(event)
        {
            event.preventDefault();
  
            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
  
            var myurl = $(this).attr('href');
            var page=$(this).attr('href').split('page=')[1];
  
            getData(page);
        });
  
    });
  
    function getData(page){
        $.ajax(
        {
            url: '?page=' + page,
            type: "get",
            datatype: "html"
        }).done(function(data){
            $("#tag_container").empty().html(data);
            location.hash = page;
        }).fail(function(jqXHR, ajaxOptions, thrownError){
              alert('No response from server');
        });
    }
    
</script>