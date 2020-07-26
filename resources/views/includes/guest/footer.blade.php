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
                        <p>{!! !empty($settingsArr['key_footer_content']) ? $settingsArr['key_footer_content'] : '' !!}</p>
                        <div class="social-info">
                            <a href="{!! !empty($settingsArr['key_facebook']) ? $settingsArr['key_facebook'] : '#' !!}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
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

                        <!-- Single Best Seller Products -->
                        <div class="single-best-seller-product d-flex align-items-center">
                            <div class="product-thumbnail">
                                <a href="shop-details.html"><img src="{{ asset('public/frontend/img/bg-img/4.jpg') }}"></a>
                            </div>
                            <div class="product-info">
                                <a href="shop-details.html">Cactus Flower</a>
                                <p>$10.99</p>
                            </div>
                        </div>

                        <!-- Single Best Seller Products -->
                        <div class="single-best-seller-product d-flex align-items-center">
                            <div class="product-thumbnail">
                                <a href="shop-details.html"><img src="{{ asset('public/frontend/img/bg-img/5.jpg') }}"></a>
                            </div>
                            <div class="product-info">
                                <a href="shop-details.html">Tulip Flower</a>
                                <p>$11.99</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget">
                        <div class="widget-title">
                            <h5>LIÊN HỆ</h5>
                        </div>

                        <div class="contact-information">
                            <p><span>Địa chỉ:</span> {!! !empty($settingsArr['key_address']) ? $settingsArr['key_address'] : '' !!}</p>
                            <p><span>Điện thoại:</span> {!! !empty($settingsArr['key_phone']) ? $settingsArr['key_phone'] : '' !!}</p>
                            <p><span>Địa chỉ email:</span> {!! !empty($settingsArr['key_email']) ? $settingsArr['key_email'] : '' !!}</p>
                            <p><span>Giờ mở cửa:</span> {!! !empty($settingsArr['key_open_hours']) ? $settingsArr['key_open_hours'] : '' !!}</p>
                            <p><span>Giờ happy:</span> {!! !empty($settingsArr['key_happy_hours']) ? $settingsArr['key_happy_hours'] : '' !!}</p>
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
                        <p>{!! !empty($settingsArr['key_copyright']) ? $settingsArr['key_copyright'] : '' !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>