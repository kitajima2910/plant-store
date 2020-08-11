    @extends('layouts.guest.master')
    @section('title', 'Bài Viết')
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
        </style>
    @endsection
    
    @section('content')
    <!-- ##### Breadcrumb Area Start ##### -->
    @include('includes.guest.breadcrumb-area', ['currentPage' => 'Liên hệ'])
        <!-- ##### Contact Area Info Start ##### -->
        <div class="contact-area-info section-padding-0-100">
            @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <!-- Contact Thumbnail -->
                    <div class="col-12 col-md-6">
                        <div class="contact--thumbnail">
                            <img src="{{asset('public/frontend/img/bg-img/7.jpg')}}" alt="">
                        </div>
                    </div>
    
                    <div class="col-12 col-md-6" style="margin-bottom: 85px;padding-left: 93px;">
                        <!-- Section Heading -->
                        <div class="col-12 col-md-7">
                            <div class="section-heading">
                            <h2>Liên hệ</h2>
                        </div>
                        <!-- Contact Information -->
                        <div class="contact-information">
                            <p><span>Email:</span> {{$settingsArrShare['key_email']}}</p>
                            <p><span>Điện thoại:</span> {{$settingsArrShare['key_phone']}}</p>
                            <p><span>Địa chỉ:</span> {{$settingsArrShare['key_address']}}</p>
                            <p><span>Giờ mở của:</span> {{$settingsArrShare['key_open_hours']}}</p>
                            <p><span>Giờ happy:</span> {{$settingsArrShare['key_happy_hours']}}</p>
                            <p><span>Facebook:</span> {{$settingsArrShare['key_facebook']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Contact Area Info End ##### -->
        
    
        <!-- ##### Contact Area Start ##### -->
        <section class="contact-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-5" style="padding-top: 40px;">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h2>LIÊN LẠC</h2>
                            <p>Gửi tin nhắn cho chúng tôi, chúng tôi sẽ gửi email lại cho bạn!</p>
                        </div>
                        <!-- Contact Form Area -->
                        <div class="contact-form-area mb-100">
                            <form action="{{ route('guest.contact.email')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text"  class="form-control" name="name" placeholder="Nhập họ và tên" value="{{old('name')}}">
                                            @error('name')
                                                <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <input type="email"  class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
                                        </div>
                                        @error('email')
                                                <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text"   class="form-control" name="title" placeholder="Tiêu đề" value="{{old('title')}}">
                                            @error('title')
                                                <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control"  name="content" cols="30" rows="10" placeholder="Nội dung">{{old('content')}}</textarea>
                                        </div>
                                        @error('content')
                                                <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <button type="buttion" class="btn alazea-btn mt-15" >Gửi tin nhắn</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
    
                    <div class="col-12 col-lg-6">
                        <!-- Google Maps -->
                        <div class="map-area mb-100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.322629018092!2d106.66391391474912!3d10.786583192314634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed2392c44df%3A0xd2ecb62e0d050fe9!2sFPT-Aptech%20Computer%20Education%20HCM!5e0!3m2!1svi!2s!4v1596787678920!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
@endsection