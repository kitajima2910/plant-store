<!DOCTYPE html>
<html lang="en">

<head>
    @yield('meta')
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title') | Plant Store</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public/frontend/img/core-img/favicon.ico') }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}">

    @yield('style')

</head>

<body>
    <!-- Preloader -->
    @include('includes.guest.preloader')

    <!-- ##### Header Area Start ##### -->
    @include('includes.guest.header')
    <!-- ##### Header Area End ##### -->

    @yield('content')

    <!-- ##### Footer Area Start ##### -->
    @include('includes.guest.footer')
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('public/frontend/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('public/frontend/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('public/frontend/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('public/frontend/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('public/frontend/js/active.js') }}"></script>
    <!-- JavaScript -->
    <script src="{{ asset('public/frontend/js/alertify.min.js') }}"></script>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=615438979352457&autoLogAppEvents=1" nonce="QGuyVj6e"></script>
    @yield('script')

    <script>
        $(document).ready(function() {
            let ratingRelatedFooter = $('.rating-footer').text();
            let ratingRelatedObjectFooter = JSON.parse(ratingRelatedFooter);
            for (var item in ratingRelatedObjectFooter) {
                let average = +ratingRelatedObjectFooter[item].split('*')[1];
                for(var i = 1; i <= average; i++) {
                    $("#star" + i + '-footer-' + item).addClass("checked");
                }
            }
        });
    </script>
</body>

</html>
