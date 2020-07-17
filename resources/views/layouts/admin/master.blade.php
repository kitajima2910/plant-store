<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php $menus = config('menu'); ?>
<!DOCTYPE html>

<head>
    <title>@yield('title') | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- start: Favicon -->
    <link rel="shortcut icon" href="{{ asset('public/vendors/favicon.ico') }}">
    <!-- end: Favicon -->
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/bootstrap.min.css') }}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('public/backend/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('public/backend/css/style-responsive.css') }}" rel="stylesheet" />
    <!-- font CSS -->
    <link href="{{ asset('public/backend/css/font-roboto.css') }}" rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/font.css') }}" type="text/css" />
    <link href="{{ asset('public/backend/css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/backend/css/morris.css') }}" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/monthly.css') }}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{ asset('public/backend/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/raphael-min.js') }}"></script>
    <style>
        #main-content {
            height: 100vh;
        }

        #main-content > .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .sub a.active{
            background-color: #635151 !important;
        }
    </style>
    @yield('style')

</head>

<body>

    <section id="container">
        
        <!--header start-->
        @include('includes.admin.header')
        <!--header end-->
        <!--sidebar start-->
        @include('includes.admin.sidebar')
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                @yield('content')
            </section>
        </section>
        <!--main content end-->

    </section>
    
    <script src="{{ asset('public/backend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('public/backend/js/scripts.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.scrollTo.js') }}"></script>
    @yield('script')

</body>

</html>
