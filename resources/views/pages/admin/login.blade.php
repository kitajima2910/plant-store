<!DOCTYPE html>
<html lang="en">

<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Đăng Nhập | Admin Plant</title>
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{ asset('public/vendors/metro/login/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/vendors/metro/login/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link id="base-style" href="{{ asset('public/vendors/metro/login/css/style.css') }}" rel="stylesheet">
    <link id="base-style-responsive" href="{{ asset('public/vendors/metro/login/css/style-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/styles-login.css') }}" rel="stylesheet">
    <!-- end: CSS -->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="{{ asset('public/vendors/favicon.ico') }}">
    <!-- end: Favicon -->
    <link rel="stylesheet" href="{{ asset('public/vendors/metro4/datatables/css/datatables.css') }}">
    <style type="text/css">
        body {
            background: url("{{ asset('public/vendors/metro/login/img/bg-login.jpg') }}") !important;
        }

        .login-box label.text-danger {
            color: red;
            font-style: italic;
            font-size: 13px;
        }

        .login-box label.text-danger.error-login {
            text-align: center
        }
        
    </style>

</head>

<body>

    <div class="container-fluid-full">
        <div class="row-fluid">
            <div class="row-fluid">
                <div class="login-box">
                    <div class="icons">
                        <a href="#" class="switch-login" style="float: left;">Đăng nhập với mã QR</a>
                        <a href="{{ route('admin.login') }}"><i class="halflings-icon home"></i></a>
                    </div>
                    <h2 style="text-align: center;">ĐĂNG NHẬP VÀO HỆ THỐNG</h2>
                    @error('errorLogin')
                        <label class="text-danger error-login">{{ $message }}</label>
                    @enderror
                    <form class="form-horizontal" action="{{ route('admin.login') }}" method="post">
                        @csrf
                        <div class="input-prepend" title="Username">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10" name="email" id="username" type="text" placeholder="Nhập địa chỉ email" value="{{ old('email') }}" />
                            @error('email')
                                <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="clearfix"></div>
                        <div class="input-prepend" title="Password">
                            <span class="add-on"><i class="halflings-icon lock"></i></span>
                            <input class="input-large span10" name="password" id="password" type="password" placeholder="Nhập mật khẩu" />
                            @error('password')
                                <label class="text-danger">{{ $message }}</label>
                            @enderror
                        </div>
                        <div class="clearfix"></div>
                        <label class="remember" for="remember"><input type="checkbox" name="remember" id="remember" />Nhớ mật khẩu</label>
                        <div class="button-login">
                            <button type="submit" class="btn btn-primary">Đăng nhập</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                    <div class="video mt-2" style="display: none;">
                        <video id="preview" style="width: 400px; height: 250px; display: table; margin: 0 auto;"></video>
                    </div>
                    {{-- QRLogin --}}
                </div>
                <!--/span-->
            </div>
            <!--/row-->
        </div>
        <!--/.fluid-container-->
    </div>
    <!--/fluid-row-->

    <!-- start: JavaScript-->
    
    {{-- <script src="{{ asset('public/vendors/metro/login/js/jquery-1.9.1.min.js') }}"></script> --}}
    <script src="{{ asset('public/vendors/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery-migrate-1.0.0.min.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery-ui-1.10.0.custom.min.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.ui.touch-punch.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/modernizr.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.cookie.js') }}"></script>
    <script src='{{ asset('public/vendors/metro/login/js/fullcalendar.min.js') }}'></script>
    <script src='{{ asset('public/vendors/metro/login/js/jquery.dataTables.min.js') }}'></script>
    <script src="{{ asset('public/vendors/metro/login/js/excanvas.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.flot.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.flot.resize.min.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.chosen.min.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.uniform.min.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.cleditor.min.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.noty.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.elfinder.min.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.raty.min.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.iphone.toggle.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.uploadify-3.1.min.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.gritter.min.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.imagesloaded.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.masonry.min.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.knob.modified.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/counter.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/retina.js') }}"></script>
    <script src="{{ asset('public/vendors/metro/login/js/custom.js') }}"></script>
    <script src="{{ asset('public/vendors/qr_login/instascan.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/alertify.min.js') }}"></script>
    <!-- end: JavaScript-->

<script type="text/javascript">
    var scanner = null;
    $(document).on('click', '.switch-login', function() {
        try {
            let text = $(this).text();
            if(text === 'Đăng nhập với mã QR') {
                $(this).text('Đăng nhập với tài khoản');
                setTimeout(function() {
                    $('form').css('display', 'none');
                    $('.video').css('display', 'block');
                    $('video').css('display', 'block');
                }, 3500);
                

                scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5, mirror: false });
                scanner.addListener('scan', function(content){
                    let contentArr = content.split(':');
                    let email = contentArr[1];
                    let QRpassword = contentArr.join(':');

                    let url = '{{ route('admin.qr.login') }}';

                    $.ajax({
                        type: "post",
                        url: url,
                        data: {
                            _token: "{{ csrf_token() }}",
                            email: email,
                            QRpassword: QRpassword
                        },
                        success: function (response) {
                            if(response.code === 201) {
                                setTimeout(function() {
                                    alertify.set('notifier', 'position', 'top-right');
                                    var delay = alertify.get('notifier','delay');
                                    alertify.set('notifier','delay', 2);
                                    alertify.error('Mã QR không thuộc Plant Store');
                                    alertify.set('notifier','delay', delay);
                                }, 300);
                            } else if(response.code === 204) {
                                setTimeout(function() {
                                    alertify.set('notifier', 'position', 'top-right');
                                    var delay = alertify.get('notifier','delay');
                                    alertify.set('notifier','delay', 2);
                                    alertify.error('Mã QR của bạn không là ADMIN');
                                    alertify.set('notifier','delay', delay);
                                }, 300);
                            } else if(response.code === 200) {
                                window.location.href = "{{ url('admin/dashboard') }}";
                            }
                        }
                    });
                });
                Instascan.Camera.getCameras().then(function (cameras) {
                    if(cameras.length > 0){
                        scanner.start(cameras[0]);
                    }else{
                        console.error('Không tìm thấy cameras.');
                        setTimeout(function() {
                            alertify.set('notifier', 'position', 'top-right');
                            var delay = alertify.get('notifier','delay');
                            alertify.set('notifier','delay', 2);
                            alertify.error('Không tìm thấy cameras');
                            alertify.set('notifier','delay', delay);
                        }, 300);
                    }
                }).catch(function(e){
                    console.error(e);
                    setTimeout(function() {
                        alertify.set('notifier', 'position', 'top-right');
                        var delay = alertify.get('notifier','delay');
                        alertify.set('notifier','delay', 2);
                        alertify.error('Lỗi đăng nhập với mã QR');
                        alertify.set('notifier','delay', delay);
                    }, 300);
                });

            } else {
                $(this).text('Đăng nhập với mã QR');
                $('.video').css('display', 'none');
                $('video').css('display', 'none');
                $('form').css('display', 'block');
                scanner.stop();
            }
        } catch (error) {
            console.log(error);
        }
    });

</script>
</body>

</html>
