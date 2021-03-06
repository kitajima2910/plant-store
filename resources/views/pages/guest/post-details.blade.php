@extends('layouts.guest.master')
@section('title', 'Bài Viết')
@section('style')
    <style>
        .post-thumb img{
            width: 70px;
            height: 52.5px;
        }
        .product-thumbnail  img{
            width: 70px;
            height: 70px;
        }
    </style>
@endsection
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
@include('includes.guest.breadcrumb-area', ['currentPage' => 'Bài Viết'])
<!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12 col-md-8">
                    <div class="blog-posts-area">

                        <!-- Post Details Area -->
                        <div class="single-post-details-area">
                            <div class="post-content">
                                <h4 class="post-title">{{$post->name}}</h4>
                                    <div class="post-meta mb-30">
                                        <a href="javacript:void(0);"><i class="fa fa-clock-o" aria-hidden="true"></i>{{date('d-m-Y', strtotime($post->created_at))}}</a>
                                            @foreach ($users as $user) 
                                                @if ($user->id == $post->user_id)
                                                    <a href="javacript:void(0);"><i class="fa fa-user" aria-hidden="true"></i>{{$user->name}}</a>
                                                @endif
                                            @endforeach
                                                <div class="content">
                                                    {!!$post->content!!}
                                                </div>    
                                    </div>       
                            </div>
                        </div>

                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix">
                            <div class="comment-data">
                                <h4 class="headline">{!! $commentsCount !!} bình luận</h4>
                                <ol>
                                    @foreach ($comments as $comment)
                                        <li class="single_comment_area">
                                            <div class="comment-wrapper d-flex">
                                                <!-- Comment Meta -->
                                                <div class="comment-author">
                                                    <img src="{{ asset("public/uploads/70x70.png")}}" width="70px" height="70px">
                                                </div>
                                                <!-- Comment Content -->
                                                <div class="comment-content">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h5>{!! $comment->user()->get('name')[0]->name !!}</h5>
                                                        <span class="comment-date">{!! $comment->created_at !!}</span>
                                                    </div>
                                                    <p>{!! $comment->body !!}</p>
                                                    <a class="active reply" data-parentid="{!! $comment->id !!}" href="javascript:void(0);">Trả lời</a>
                                                </div>
                                            </div>
                                            @if(count($comment->childs))
                                                @include('includes.guest.manage-comment-child', ['childs' => $comment->childs])
                                            @endif
                                        </li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                        

                        <!-- Leave A Comment -->
                        <div class="leave-comment-area clearfix" id="rely-comment">
                            <div class="comment-form">
                                <h4 class="headline">Bình luận</h4>

                                <div class="contact-form-area">
                                    <!-- Comment Form -->
                                    @if (auth()->guard('customers')->check())
                                        <input type="hidden" class="customer_id" value="{!! auth()->guard('customers')->user()->id !!}" />
                                    @else
                                        <input type="hidden" class="customer_id" value="" />
                                    @endif
                                    
                                    <input type="hidden" class="post_id" name="post_id" value="{{ $post->id }}" />
                                    <input type="hidden" class="parent_id" name="parent_id" value="0" />
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control body" name="body" cols="30" rows="10" placeholder="Nhập bình luận..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="button" class="btn alazea-btn comments">Gửi bình luận</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-4">
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
                                    <a href="{!! route('guest.viewPostDetails', $item->slug) !!}"><img
                                        src="{{ asset($item->feature_image_path) }}" alt=""></a>
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
                        
                        </div>

                        <div class="rating-post-details" style="display: none;">{!! json_encode($productOfCategoryRatingShare) !!}</div>
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
                                    <a href="{!! route('guest.viewProductDetails', $item->slug) !!}"><img
                                        src="{{ asset($item->feature_image_path) }}" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="{!! route('guest.viewProductDetails', $item->slug) !!}">
                                        <h6>{{$item->name}}</h6>
                                    </a> 
                                    <div id="rating-post-details" style="display: flex;">
                                        <a href="#" class="rate_star"><span class="fa fa-star " id="star1-{!! $item->id !!}"></span></a>
                                        <a href="#" class="rate_star"><span class="fa fa-star " id="star2-{!! $item->id !!}"></span></a>
                                        <a href="#" class="rate_star"><span class="fa fa-star " id="star3-{!! $item->id !!}"></span></a>
                                        <a href="#" class="rate_star"><span class="fa fa-star" id="star4-{!! $item->id !!}"></span></a>
                                        <a href="#" class="rate_star"><span class="fa fa-star" id="star5-{!! $item->id !!}"></span></a>
                                    </div>
                                    <p>{!! number_format($item->final_price, 0, ',', '.') !!} VNĐ</p>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        </div>
                    </div>
                </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->
@endsection
@section('script')
    <script>
        $(function() {
            // Ratings
            let ratingRelated = $('.rating-post-details').text();
            let ratingRelatedObject = JSON.parse(ratingRelated);
            for (var item in ratingRelatedObject) {
                let average = +ratingRelatedObject[item].split('*')[1];
                for(var i = 1; i <= average; i++) {
                    $("#star" + i + '-' + item).addClass("checked");
                }
            }
        });

        $(document).on('click', '.reply', function() {
            $('html, body').animate({
                scrollTop: $('#rely-comment').offset().top - 300
            }, 500);

            let parentid = $(this).data('parentid');
            $('.parent_id').val(parentid);
        });
        

        $(document).on('click', '.comments', function() {
            let customer_id = $('.customer_id').val();
            
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


            let body = $('.body').val();
            let postId = $('.post_id').val();
            let parentId = $('.parent_id').val();
            let url = '{!! route("guest.comment.store") !!}?body=' + body + '&post_id=' + postId + '&user_id=' + customer_id + '&parent_id=' + parentId;

            if(body.trim() === '') {
                setTimeout(function() {
                    alertify.set('notifier', 'position', 'bottom-left');
                    var delay = alertify.get('notifier','delay');
                    alertify.set('notifier','delay', 2);
                    alertify.error('Nội dung chưa được nhập');
                    alertify.set('notifier','delay', delay);
                }, 300);
                return;
            }

            $.ajax({
                type: "get",
                url: url,
                success: function (data) {
                    if(data.code === 200) {
                        $('.body').val('');
                        $('.parent_id').val(0);
                        $('.comment-data').empty();
                        $('.comment-data').html(data.viewComments);
                    }
                }
            });
        });
    </script>
@endsection
