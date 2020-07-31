<footer class="footer-area bg-img" style="background-image: url({{ asset('public/frontend/img/bg-img/3.jpg')}});">
    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="single-footer-widget">
                        <div class="footer-logo mb-30">
                            <a href="#"><img src="{{ asset('public/frontend/img/core-img/logo.png') }}" width="100px"></a>
                        </div>
                        <p>{!! !empty($settingsArrShare['key_footer_content']) ? $settingsArrShare['key_footer_content'] : '' !!}</p>
                        <div class="social-info">
                            <a href="{!! !empty($settingsArrShare['key_facebook']) ? $settingsArrShare['key_facebook'] : '#' !!}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget">
                        <div class="widget-title">
                            <h5>SẢN PHẨM MỚI</h5>
                        </div>

                        @foreach ($productsShare as $item)
                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="{!! route('guest.viewProductDetails', $item->slug) !!}"><img style="width: 70px; height: 70px;" src="{{ asset($item->feature_image_path) }}"></a>
                                </div>
                                <div class="product-info">
                                    <a href="{!! route('guest.viewProductDetails', $item->slug) !!}">{!! $item->name !!}</a>
                                    <p>{!! number_format($item->final_price, 0, ',', '.') !!} VNĐ</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget">
                        <div class="widget-title">
                            <h5>LIÊN HỆ</h5>
                        </div>

                        <div class="contact-information">
                            <p><span>Địa chỉ:</span> {!! !empty($settingsArrShare['key_address']) ? $settingsArrShare['key_address'] : '' !!}</p>
                            <p><span>Điện thoại:</span> {!! !empty($settingsArrShare['key_phone']) ? $settingsArrShare['key_phone'] : '' !!}</p>
                            <p><span>Địa chỉ email:</span> {!! !empty($settingsArrShare['key_email']) ? $settingsArrShare['key_email'] : '' !!}</p>
                            <p><span>Giờ mở cửa:</span> {!! !empty($settingsArrShare['key_open_hours']) ? $settingsArrShare['key_open_hours'] : '' !!}</p>
                            <p><span>Giờ happy:</span> {!! !empty($settingsArrShare['key_happy_hours']) ? $settingsArrShare['key_happy_hours'] : '' !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom Area -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-line"></div>
                </div>
                <!-- Copywrite Text -->
                <div class="col-12 col-md-12">
                    <div class="copywrite-text">
                        <p>{!! !empty($settingsArrShare['key_copyright']) ? $settingsArrShare['key_copyright'] : '' !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>