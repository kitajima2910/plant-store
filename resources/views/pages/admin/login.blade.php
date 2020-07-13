<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<head>
    <title>ĐĂNG NHẬP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
    {{-- <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> --}}
    <link rel="stylesheet" href="{{ asset('public/backend/css/font-roboto.css') }}">
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/font.css') }}" type="text/css" />
    <link href="{{ asset('public/backend/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{ asset('public/backend/js/jquery2.0.3.min.js') }}"></script>

    <style>
        input[type="submit"] {
            margin: 15px auto 5px !important;
        }

        input.ggg {
            margin: 14px 0px 0px;
        }

        form > label.text-danger, label.text-danger {
            font-style: italic;
            font-weight: normal;
        }

        form > p {
            margin: 20px 0px 0px;
        }
    </style>
</head>

<body>
    <div class="log-w3">
        <div class="w3layouts-main">
            <h2>ĐĂNG NHẬP</h2>
            @error('errorLogin')
                <label class="text-danger">{{ $message }}</label>
            @enderror
            <form action="{{ route('admin.login') }}" method="post">
                @csrf
                <input type="text" class="ggg" name="email" placeholder="Nhập địa chỉ email" value="{{ old('email') }}">
                @error('email')
                    <label class="text-danger">{{ $message }}</label>
                @enderror
                <input type="password" class="ggg" name="password" placeholder="Nhập mật khẩu">
                @error('password')
                    <label class="text-danger">{{ $message }}</label>
                @enderror
                <p><input type="checkbox" name="remember" /> Nhớ mật khẩu</p>
                <div class="clearfix"></div>
                <input type="submit" value="Đăng nhập" name="login">
            </form>
        </div>
    </div>
    <script src="{{ asset('public/backend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('public/backend/js/scripts.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.nicescroll.js') }}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{ asset('public/backend/js/flot-chart/excanvas.min.js') }}"></script><![endif]-->
    <script src="{{ asset('public/backend/js/jquery.scrollTo.js') }}"></script>
</body>

</html>
