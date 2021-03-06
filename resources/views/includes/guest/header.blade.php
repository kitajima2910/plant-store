@section('style')
<style>
    .classynav a {
        font-style: normal;
    }

    .classy-menu {
        display: flex
    }
</style>
@endsection
<header class="header-area">

    <!-- ***** Top Header Area ***** -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Top Header Content -->
                        <div class="top-header-meta">
                            <a href="mailto:{!! !empty($settingsArrShare['key_email']) ? $settingsArrShare['key_email'] : '#' !!}" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <span>Địa chỉ email: {!! !empty($settingsArrShare['key_email']) ? $settingsArrShare['key_email'] : '' !!}</span></a>
                            <a href="tel:{!! !empty($settingsArrShare['key_phone']) ? $settingsArrShare['key_phone'] : '#' !!}" data-toggle="tooltip" data-placement="bottom"><i
                                    class="fa fa-phone" aria-hidden="true"></i> <span>Điện thoại: {!! !empty($settingsArrShare['key_phone']) ? $settingsArrShare['key_phone'] : '' !!}</span></a>
                        </div>

                        <!-- Top Header Content -->
                        <div class="top-header-meta d-flex">
                            @if (!Auth::guard('customers')->check())
                                <!-- Login -->
                                <div class="login">
                                    <a href="{!! route('guest.user.login') !!}"><i class="fa fa-user" aria-hidden="true"></i> <span>Đăng nhập</span></a>
                                </div>
                                <!-- Register -->
                                <div class="login">
                                    <a href="{!! route('guest.user.register') !!}"><i class="fa fa-key" aria-hidden="true"></i> <span>Đăng ký</span></a>
                                </div>
                            @else
                                <div class="login">
                                    <a href="javascript:void(0);"><i class="fa fa-user" aria-hidden="true"></i> <span>{!! Auth::guard('customers')->user()->name !!}</span></a>
                                </div>
                                <div class="login">
                                    <a href="{!! route('guest.user.logout') !!}"><i class="fa fa-sign-out" aria-hidden="true"></i> <span>Đăng xuất</span></a>
                                </div>
                            @endif
                            <!-- Cart -->
                            <div class="cart">
                                <a href="{!! route('guest.wishlist.index') !!}"><i class="fa fa-heart" aria-hidden="true"></i> 
                                    <span>Yêu thích <span class="cart-heart">({!! $wishlistQuantityShare !!})</span></span>
                                </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{!! route('guest.cart.index') !!}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> 
                                    <span>Giỏ hảng <span class="cart-quantity">({!! $cartQuantityShare !!})</span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Navbar Area ***** -->
    <div class="alazea-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="alazeaNav">

                    <!-- Nav Brand -->
                    <a href="{!! route('guest.home') !!}" class="nav-brand"><img
                            src="{{ asset('public/frontend/img/core-img/logo.png') }}"
                            width="100px"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
            
                        <!-- Navbar Start -->
                        @include('includes.guest.menu')
                        <!-- Navbar End --> 
                        
                    
                    </div>
                </nav>

                <!-- Search Form -->
                <div class="search-form">
                    <form action="{!! route('guest.searchProducts') !!}" method="post">
                        @csrf
                        <input type="search" name="search" id="search" placeholder="Tìm kiếm &amp; nhấn phím enter...">
                        <button type="submit" class="d-none"></button>
                    </form>
                    <!-- Close Icon -->
                    <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
</header>
