<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Plant Store</title>
    <!-- start: Favicon -->
    <link rel="shortcut icon" href="{{ asset('public/vendors/favicon.ico') }}">
    <!-- end: Favicon -->
    <link href="{{ asset('public/frontend/css/style.css') }}"  rel="stylesheet">
    <link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('public/vendors/metro4/metro-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/themify-icons.css') }}"  rel="stylesheet" type="text/css">
    <link href="{{ asset('public/frontend/css/elegant-icons.css') }}"  rel="stylesheet" type="text/css">
    <link href="{{ asset('public/frontend/css/owl.carousel.min.css') }}"  rel="stylesheet" type="text/css">
    <link href="{{ asset('public/frontend/css/slicknav.min.css') }}"  rel="stylesheet">
    <script src="{{ asset('public/backend/js/jquery-3.5.1.min.js') }}"></script>
    
    <style>
        @media only screen and (max-width: 767px){
    .slicknav_menu {
    display: block;
    background: transparent;
    text-align: center;
    margin-top: -48px;
}

.inner-header .col-lg-3{
            margin-left: 0px !important;
        }

    .slicknav_btn {
        background-color: #e7ab3c;
    }

         .slicknav_nav a {
            padding-right: 300px;
         }
 
}
        .slicknav_nav a:hover {
            text-decoration: none;
            color: #fff;
        }         


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
        .child{
            display: none !important;
       
        }

        .expanded:hover .child{
            display: block !important;
                 position: absolute;
            z-index: 99;
            background-color: #252525;
        }

        .mainmenu .node-toggle{
            display: none !important;
        }


            .mainmenu ul li {
            padding-right: 35px;
             padding-left: 0px;
        }

        .nav-item .nav-menu li a:hover{
            text-decoration: none ;
        }

        .header-bottom {
            padding-bottom: 30px;
            padding-top: 3px;
        }
        
        .inner-header .col-lg-3{
            margin-left: 600px;
        }

        #slider{
            margin-top: 20px
        }
    </style>
    @yield('style')
</head>
<!--/head-->

<body>

    @include('includes.guest.header')
    <!--/header-->

    @include('includes.guest.slider')
    <!--/slider-->
   
    <section>     
            @yield('content')
    </section>

    {{-- @include('includes.guest.footer') --}}
    <!--/Footer-->
    <script src="{{ asset('public/frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('public/vendors/metro4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('public/vendors/metro4/metro.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/main.js') }}"></script>
    
    

    <script>
         $(document).ready(function () {
    $(".tree-node").hover(
        function () {
          $(this).addClass("expanded");
        },
        function () {
          $(this).removeClass("expanded");
        }
      );
    });
  </script>

@yield('script')
</body>
    
</html>
