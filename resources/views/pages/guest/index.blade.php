@extends('layouts.guest.master')
@section('title', 'Trang Chủ')
@section('content')


{{-- <div id="preloder">
    <div class="loader"></div>
</div>   --}}


<!-- Banner Section Begin -->
<div class="banner-section spad">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <div class="single-banner">
                <img src="{{ asset('public/frontend/images/banner-1.jpg')}}" alt="">
                <div class="inner-text">
                    <h4>Men’s</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="single-banner">
                <img src="{{ asset('public/frontend/images/banner-2.jpg')}}" alt="">
                <div class="inner-text">
                    <h4>Women’s</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="single-banner">
                <img src="{{ asset('public/frontend/images/banner-3.jpg')}}" alt="">
                <div class="inner-text">
                    <h4>Kid’s</h4>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Banner Section End -->


<!-- Latest Blog Section Begin -->
<section class="latest-blog spad">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title">
                <h2>From The Blog</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="single-latest-blog">
                <img src="{{ asset('public/frontend/images/latest-1.jpg')}}" alt="">
                <div class="latest-text">
                    <div class="tag-list">
                        <div class="tag-item">
                            <i class="fa fa-calendar-o"></i>
                            May 4,2019
                        </div>
                        <div class="tag-item">
                            <i class="fa fa-comment-o"></i>
                            5
                        </div>
                    </div>
                    <a href="#">
                        <h4>The Best Street Style From London Fashion Week</h4>
                    </a>
                    <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="single-latest-blog">
                <img src="{{ asset('public/frontend/images/latest-2.jpg')}}" alt="">
                <div class="latest-text">
                    <div class="tag-list">
                        <div class="tag-item">
                            <i class="fa fa-calendar-o"></i>
                            May 4,2019
                        </div>
                        <div class="tag-item">
                            <i class="fa fa-comment-o"></i>
                            5
                        </div>
                    </div>
                    <a href="#">
                        <h4>Vogue's Ultimate Guide To Autumn/Winter 2019 Shoes</h4>
                    </a>
                    <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="single-latest-blog">
                <img src="{{ asset('public/frontend/images/latest-3.jpg')}}" alt="">
                <div class="latest-text">
                    <div class="tag-list">
                        <div class="tag-item">
                            <i class="fa fa-calendar-o"></i>
                            May 4,2019
                        </div>
                        <div class="tag-item">
                            <i class="fa fa-comment-o"></i>
                            5
                        </div>
                    </div>
                    <a href="#">
                        <h4>How To Brighten Your Wardrobe With A Dash Of Lime</h4>
                    </a>
                    <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                </div>
            </div>
        </div>
    </div>
    <div class="benefit-items">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-benefit">
                    <div class="sb-icon">
                        <img src="{{ asset('public/frontend/images/icon-1.png')}}" alt="">
                    </div>
                    <div class="sb-text">
                        <h6>Free Shipping</h6>
                        <p>For all order over 99$</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-benefit">
                    <div class="sb-icon">
                        <img src="{{ asset('public/frontend/images/icon-2.png')}}" alt="">
                    </div>
                    <div class="sb-text">
                        <h6>Delivery On Time</h6>
                        <p>If good have prolems</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-benefit">
                    <div class="sb-icon">
                        <img src="{{ asset('public/frontend/images/icon-1.png')}}" alt="">
                    </div>
                    <div class="sb-text">
                        <h6>Secure Payment</h6>
                        <p>100% secure payment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Latest Blog Section End -->

<!-- Partner Logo Section End -->

<!-- Footer Section Begin -->
<footer class="footer-section">
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="footer-left">
                <div class="footer-logo">
                    <a href="#"><img src="{{ asset('public/frontend/images/footer-logo.png')}}" alt=""></a>
                </div>
                <ul>
                    <li>Address: 60-49 Road 11378 New York</li>
                    <li>Phone: +65 11.188.888</li>
                    <li>Email: hello.colorlib@gmail.com</li>
                </ul>
                <div class="footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-2 offset-lg-1">
            <div class="footer-widget">
                <h5>Information</h5>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Checkout</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Serivius</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="footer-widget">
                <h5>My Account</h5>
                <ul>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Shopping Cart</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="newslatter-item">
                <h5>Join Our Newsletter Now</h5>
                <p>Get E-mail updates about our latest shop and special offers.</p>
                <form action="#" class="subscribe-form">
                    <input type="text" placeholder="Enter Your Mail">
                    <button type="button">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="copyright-reserved">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright-text">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="{{ asset('public/frontend/images/payment-method.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
