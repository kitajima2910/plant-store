<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Plant Store</title>
    <link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('public/vendors/metro4/metro-all.min.css') }}" rel="stylesheet">
    <script src="{{ asset('public/backend/js/jquery-3.5.1.min.js') }}"></script>
    <style>
        .left-sidebar .treeview a {
            color: #696763;
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 500;
        }

        .menuSet{
            justify-content: space-between;
            display: flex;
        }

        .mainmenu .treeview .child{
        
        }
      

            /* .mainmenu ul li {
    padding-right: 35px;
    padding-left: 15px;
        } */
        
    </style>
    @yield('stylde')
</head>
<!--/head-->

<body>

    @include('includes.guest.header')
    <!--/header-->

    @include('includes.guest.slider')
    <!--/slider-->
   
    <section>
        <div class="container">
            @yield('content')
        </div>
    </section>

    @include('includes.guest.footer')
    <!--/Footer-->

    <script src="{{ asset('public/vendors/metro4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('public/vendors/metro4/metro.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/main.js') }}"></script>
    @yield('script')
</body>
    
</html>
