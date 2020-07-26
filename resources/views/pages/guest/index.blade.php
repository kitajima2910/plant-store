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
</body>

</html>
