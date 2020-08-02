@extends('layouts.guest.master')
@section('title', 'Đăng Ký')
@section('style')
<link rel="stylesheet" href="{!! asset('public/vendors/login/styles.css') !!}">
@endsection
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
@include('includes.guest.breadcrumb-area', ['currentPage' => 'Đăng Ký'])
<!-- ##### Breadcrumb Area End ##### -->

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-10 mx-auto">
            <div class="card card-signin mb-3">
                <div class="card-body">
                    <h5 class="card-title text-center">ĐĂNG KÝ</h5>
                    <form class="form-signin" action="{!! route('guest.user.register') !!}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                        <div class="form-label-group">
                            <input type="text" id="inputName" name="name" class="form-control" placeholder="Nhập họ và tên"
                                value="{{ old('name') }}"   required autofocus>
                            <label for="inputName">Nhập họ và tên *</label>
                            @error('name')
                            <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Nhập mật khẩu"
                                value="{{ old('password') }}" required>
                            <label for="inputPassword">Nhập mật khẩu *</label>
                        </div>
                            @error('password')
                            <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                            @enderror
                        <div class="form-label-group">
                            <input type="text" id="inputPhone" name="phone" class="form-control" placeholder="Nhập số điện thoại *"
                              minlength="9" maxlength="10"  value="{{ old('phone') }}"required autofocus>
                            <label for="inputPhone">Nhập số điện thoại</label>
                        </div>
                        @error('phone')
                            <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                            @enderror
                        <div class="form-label-group">
                            <input type="text" id="inputAddress" name="address" class="form-control" placeholder="Nhập địa chỉ  *"
                                value="{{ old('address') }}" required  autofocus>
                            <label for="inputAddress">Nhập địa chỉ </label>
                        </div>
                        @error('address')
                            <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-6">
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Nhập địa chỉ email"
                                value="{{ old('email') }}" required autofocus>
                            <label for="inputEmail">Nhập địa chỉ email *</label>
                        </div>
                        @error('email')
                            <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                            @enderror
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng ký</button>
                        <hr class="my-4">
                        <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i
                                class="fa fa-google mr-2"></i> Đăng nhập bằng Google</button>
                        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i
                                class="fa fa-facebook-f mr-2"></i> Đăng nhập bằng Facebook</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection