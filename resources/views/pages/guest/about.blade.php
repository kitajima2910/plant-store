@extends('layouts.guest.master')
@section('title', 'Giới Thiệu')
@section('style')
    <style>
        .video-about{
            margin-bottom: 70px;
        }    
        #img-thumb{
            width: 255px;
            height: 312px;
            margin-left: 53px;
        }

    </style>
@endsection

@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
@include('includes.guest.breadcrumb-area', ['currentPage' => 'Giới Thiệu'])
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### About Area Start ##### -->
<div class="about-us-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-11">
                <div class="alazea-benefits-area">
                    <div class="row">
                        <!-- Single Benefits Area -->
                        <div class="col-12 col-sm-6">
                            <div class="single-benefits-area">
                                <img src="{{asset('public/frontend/img/core-img/b1.png')}}" alt="">
                                <h5>Sản phẩm chất lượng</h5>
                                <p>{!! !empty($settingsArrShare['key_quality']) ? $settingsArrShare['key_quality'] : '' !!}</p>
                            </div>
                        </div>
                        <!-- Single Benefits Area -->
                        <div class="col-12 col-sm-6">
                            <div class="single-benefits-area">
                                <img src="{{asset('public/frontend/img/core-img/b2.png')}}" alt="">
                                <h5>Dịch vụ hoàn hảo</h5>
                                <p>{!! !empty($settingsArrShare['key_service']) ? $settingsArrShare['key_service'] : '' !!}</p>
                            </div>
                        </div>
                        <!-- Single Benefits Area -->
                        <div class="col-12 col-sm-6">
                            <div class="single-benefits-area">
                                <img src="{{asset('public/frontend/img/core-img/b3.png')}}" alt="">
                                <h5>100% Tự nhiên</h5>
                                <p>{!! !empty($settingsArrShare['key_nature']) ? $settingsArrShare['key_nature'] : '' !!}</p>
                            </div>
                        </div>
                        <!-- Single Benefits Area -->
                        <div class="col-12 col-sm-6">
                            <div class="single-benefits-area">
                                <img src="{{asset('public/frontend/img/core-img/b4.png')}}" alt="">
                                <h5>Thân thiện với môi trường</h5>
                                <p>{!! !empty($settingsArrShare['key_protected']) ? $settingsArrShare['key_protected'] : '' !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="border-line"></div>
            </div>
        </div>
    </div>
</div>
<!-- ##### About Area End ##### -->
<!-- ##### Service Area Start ##### -->
<section class="our-services-area bg-gray section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>Hướng dẫn chăm sóc</h2>
                    <p>Cách chăm sóc chăm tưới các loại cây cảnh trong nhà</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-lg-5">
                <div class="alazea-service-area mb-100">
                    <!-- Single Service Area -->
                    <div class="single-service-area d-flex align-items-center">
                        <!-- Icon -->
                        <div class="service-icon mr-30">
                            <img src="{{asset('public/frontend/img/core-img/s1.png')}}" alt="">
                        </div>
                        <!-- Content -->
                        <div class="service-content">
                            <h5>Đất trồng</h5>
                            <p>{!! !empty($settingsArrShare['key_soild']) ? $settingsArrShare['key_soild'] : '' !!}</p>
                        </div>
                    </div>
                    <!-- Single Service Area -->
                    <div class="single-service-area d-flex align-items-center">
                        <!-- Icon -->
                        <div class="service-icon mr-30">
                            <img src="{{asset('public/frontend/img/core-img/s2.png')}}" alt="">
                        </div>
                        <!-- Content -->
                        <div class="service-content">
                            <h5>Liều lượng nước</h5>
                            <p>{!! !empty($settingsArrShare['key_water']) ? $settingsArrShare['key_water'] : '' !!}</p>
                        </div>
                    </div>
                    <!-- Single Service Area -->
                    <div class="single-service-area d-flex align-items-center">
                        <!-- Icon -->
                        <div class="service-icon mr-30">
                            <img src="{{asset('public/frontend/img/core-img/s3.png')}}" alt="">
                        </div>
                        <!-- Content -->
                        <div class="service-content">
                            <h5>Cắt tỉa</h5>
                            <p>{!! !empty($settingsArrShare['key_cut']) ? $settingsArrShare['key_cut'] : '' !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                    <video class="video-about" width="530" height="300" controls>
                        <source src={{asset('public/frontend/video/video1.mp4')}} type="video/mp4">
                    </video>
            </div>
        </div>
    </div>
</section>
<!-- ##### Service Area End ##### -->
<section class="team-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>NHÓM XÂY DỰNG WEB</h2>
                    <p>Sinh viên FPT-APTECH lớp T1.1910.M3</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Team Member Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-team-member text-center mb-100">
                    <!-- Team Member Thumb -->
                    <div class="team-member-thumb" id='img-thumb'>
                        <img src="{{asset('public/frontend/img/core-img/pxh.jpg')}}" alt="" style="height:317.59px">
                        <!-- Social Info -->
                        <div class="team-member-social-info">
                            <a href="https://www.facebook.com/ts2styles" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="mailto:kitajima2910@gmail.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- Team Member Info -->
                    <div class="team-member-info mt-30">
                        <h5>Phạm Xuân Hoài</h5>
                        <p>Team Leader</p>
                    </div>
                </div>
            </div>
            <!-- Single Team Member Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-team-member text-center mb-100">
                    <!-- Team Member Thumb -->
                    <div class="team-member-thumb" id="img-thumb">
                        <img src="{{asset('public/frontend/img/core-img/pqh.jpg')}}" style="height:317.59px" alt="">
                        <!-- Social Info -->
                        <div class="team-member-social-info">
                            <a href="https://www.facebook.com/quanghuy.pham.12720" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="mailto:toilahuy098@gmail.com" ><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="https://www.linkedin.com/in/huy-ph%E1%BA%A1m-b3a562192/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- Team Member Info -->
                    <div class="team-member-info mt-30">
                        <h5>Phạm Quang Huy</h5>
                        <p>Team Member</p>
                    </div>
                </div>
            </div>
            <!-- Single Team Member Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-team-member text-center mb-100">
                    <!-- Team Member Thumb -->
                    <div class="team-member-thumb" id="img-thumb">
                        <img src="{{asset('public/frontend/img/core-img/nha.jpg')}}" style="height:317.59px" alt="">
                        <!-- Social Info -->
                        <div class="team-member-social-info">
                            <a href="https://www.facebook.com/An.IT.RoxLucci.UNK" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- Team Member Info -->
                    <div class="team-member-info mt-30">
                        <h5>Nguyễn Hoàng An</h5>
                        <p>Team Member</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection