<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Trang Chủ | Plant Store</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public/frontend/img/core-img/favicon.ico') }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}">

    <style>
        .modal-body {
        display: flex;
        justify-content: center;
        }
        .modal-content{
            min-width: 100%;
            overflow-x: auto;
            width: 900px;
            margin-left: -190px;
            margin: 40px -180px;
        }
        .tb-img img{
            width: 200px;
            height: 200px;
        }
        .product-img a img{
            width: 255px;
            height: 255px;
        }
        .single-compare{
            padding-left: 20px;
        }
        .btn-show{
            position: fixed;
            bottom: 337px;
            right: 49px;
            z-index: 99;
            background-color: #70c745;
            text-decoration: none;
        }
        .btn-show:hover{
            background-color: #303030
        }
        .btn-primary{
            border-color:white !important;
        }

        .hidden{
            visibility: hidden;
        }
        .show{
            visibility: visible;
        }
        .modal-body table, th, td {
            padding: 10px;
            border: 1px solid black;
        }
        .tb-name td{
            text-align: center;
        }
        .tb-price td{
            text-align: center;
        }
        .tb-content td p{
            width: 200px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .tb-function{
            text-align: center;
        }

.remove-cmp{
    padding-left: 180px;
}

.header-cmp-0 .remove-cmp{
    padding-left: 100px;
}
.cmp-0{
    background-color: greenyellow;
}

.product-tag a{
    background-color: #e61d47;
    border-radius: 2px;
    color: white;
    padding: 0 10px;
}

    </style>
</head>

<body>
    <!-- Preloader -->
    @include('includes.guest.preloader')

    <!-- ##### Header Area Start ##### -->
    @include('includes.guest.header')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    @include('includes.guest.hero')
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Product Area Start ##### -->
    @include('includes.guest.product')
    <!-- ##### Product Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    @include('includes.guest.blog')
    <!-- ##### Blog Area End ##### -->

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
    
    @yield('script')
</body>

</html>
