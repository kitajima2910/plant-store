@extends('layouts.guest.master')
@section('title', 'Đăng Nhập')
@section('style')
<link rel="stylesheet" href="{!! asset('public/vendors/login/styles.css') !!}">
@endsection
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
@include('includes.guest.breadcrumb-area', ['currentPage' => 'Đăng Nhập'])
<!-- ##### Breadcrumb Area End ##### -->

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin mb-3">
                <div class="card-body">
                    <h5 class="card-title text-center">ĐĂNG NHẬP</h5>
                    @error('errorLogin')
                        <center><label class="text-danger font-italic">{{ $message }}</label></center>
                    @enderror
                    <form class="form-signin" action="{!! route('guest.user.login') !!}" method="POST">
                        @csrf
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Nhập địa chỉ email"
                                required autofocus>
                            <label for="inputEmail">Nhập địa chỉ email</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Nhập mật khẩu"
                                required>
                            <label for="inputPassword">Nhập mật khẩu</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember">
                            <label class="custom-control-label" for="customCheck1">Nhớ mật khẩu</label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng nhập</button>
                        <hr class="my-4">
                        <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i
                                class="fa fa-google mr-2"></i> Đăng nhập bằng Google</button>
                        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i
                                class="fa fa-facebook-f mr-2"></i> Đăng nhập bằng Facebook</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
