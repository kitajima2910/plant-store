@extends('layouts.guest.master')
@section('title', 'Bài Viết')
@section('content')
@section('style')
@endsection
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
                            <h4 class="headline">2 Comments</h4>

                            <ol>
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <div class="comment-wrapper d-flex">
                                        <!-- Comment Meta -->
                                        <div class="comment-author">
                                            <img src="{{asset("public/frontend/img/bg-img/37.jpg")}}" alt="">
                                        </div>
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5>Simona Halep</h5>
                                                <span class="comment-date">09:00 AM,  20 Jun 2018</span>
                                            </div>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                            <a class="active" href="#">Reply</a>
                                        </div>
                                    </div>
                                    <ol class="children">
                                        <li class="single_comment_area">
                                            <div class="comment-wrapper d-flex">
                                                <!-- Comment Meta -->
                                                <div class="comment-author">
                                                    <img src={{asset("public/frontend/img/bg-img/38.jpg")}} alt="">
                                                </div>
                                                <!-- Comment Content -->
                                                <div class="comment-content">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h5>Rafael Nadal</h5>
                                                        <span class="comment-date">09:30 AM,  20 Jun 2018</span>
                                                    </div>
                                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                                    <a class="active" href="#">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li class="single_comment_area">
                                    <div class="comment-wrapper d-flex">
                                        <!-- Comment Meta -->
                                        <div class="comment-author">
                                            <img src="{{asset("public/frontend/img/bg-img/39.jpg")}}" alt="">
                                        </div>
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5>Maria Sharapova</h5>
                                                <span class="comment-date">02:20 PM,  20 Jun 2018</span>
                                            </div>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                            <a class="active" href="#">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>

                        <!-- Leave A Comment -->
                        <div class="leave-comment-area clearfix">
                            <div class="comment-form">
                                <h4 class="headline">Bình luận</h4>

                                <div class="contact-form-area">
                                    <!-- Comment Form -->
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="contact-name" placeholder="Tên">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="contact-email" placeholder="Địa chỉ email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Nhập bình luận..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn alazea-btn">Gửi bình luận</button>
                                            </div>
                                        </div>
                                    </form>
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
                          
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h4>Top Sản Phẩm</h4>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="{{asset('public/frontend/img/bg-img/4.jpg')}}" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Cactus Flower</a>
                                    <p>$10.99</p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="{{asset('public/frontend/img/bg-img/5.jpg')}}" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Tulip Flower</a>
                                    <p>$11.99</p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="{{asset('public/frontend/img/bg-img/34.jpg')}}" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Recuerdos Plant</a>
                                    <p>$9.99</p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->
@endsection