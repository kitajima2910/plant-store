@extends('layouts.guest.master')
@section('title', 'Bài Viết')
@section('content')
@section('style')
    <style>
        .thumbnail {
            width:350px;
            height:255px;
        }
        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #70c745;
            border-color: white;
        }
        .post-thumb img{
            width: 70px;
            height: 52.5px;
        }
    </style>
@endsection
<!-- ##### Breadcrumb Area Start ##### -->
@include('includes.guest.breadcrumb-area', ['currentPage' => 'Bài Viết'])
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<section class="alazea-blog-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="row">
                    <!-- Single Blog Post Area -->
                    <div class="row" id="show-post">
                        @foreach ($posts as $post)
                        <div class="col-12 col-lg-6">
                            <div class="single-blog-post mb-50">
                                <div class="post-thumbnail mb-30">
                                    <a href="{!! route('guest.viewPostDetails', $post->slug) !!}"><img class="thumbnail" src="{!! asset($post->feature_image_path) !!}" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a href="{!! route('guest.viewPostDetails', $post->slug) !!}" class="post-title">
                                        <h5>{{$post->name}}</h5>
                                    </a>
                                    <div class="post-meta">
                                        <a href="javacript:void(0);"><i class="fa fa-clock-o" aria-hidden="true"></i>{{date('d-m-Y', strtotime($post->created_at))}}</a>
                                        @foreach ($users as $user)
                                            @if ($user->id == $post->user_id)
                                                <a href="javacript:void(0);"><i class="fa fa-user" aria-hidden="true"></i>{{$user->name}}</a>
                                            @endif
                                        @endforeach  
                                    </div>
                                        <p class="post-excerpt">{!! Str::limit($post->content, 200, '...') !!}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-4"></div>
                        <div class="col-4">{{$posts->links()}}</div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-4">
                <div class="post-sidebar-area">
                    <!-- ##### Single Widget Area ##### -->
                    <div class="single-widget-area">
                        <!-- Title -->
                        <div class="widget-title">
                            <h4>Bài viết mới</h4>
                        </div>

                        @foreach ($postShare as $item)
                        <!-- Single Latest Posts -->
                        <div class="single-latest-post d-flex align-items-center">
                            <div class="post-thumb">
                                <img src="{{asset($item->feature_image_path)}}" alt="{!! route('guest.viewPostDetails', $item->slug) !!}">
                            </div>
                            <div class="post-content">
                                <a href="{!! route('guest.viewPostDetails', $item->slug) !!}" class="post-title">
                                    <h6>{{$item->name}}</h6>
                                </a>
                                <a href="#" class="post-date">{{date('d-m-Y', strtotime($post->created_at))}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                            <!-- ##### Single Widget Area ##### -->
                            <div class="single-widget-area">
                                <!-- Title -->
                                <div class="widget-title">
                                    <h4>Sản phẩm nổi bật</h4>
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
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<!-- ##### Blog Area End ##### -->
@endsection
@section('script')
    <script>
        $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();
            let page = $(this).attr('href').split('page=')[1];
            let url = '{!! route("guest.post.ajaxIndex") !!}?page=' + page;
            
            $.ajax({
                type: "get",
                url: url,
                success: function (data) {
                    $('#show-post').empty();
                    $('#show-post').html(data);
                }
            });

        });
    </script>
@endsection
