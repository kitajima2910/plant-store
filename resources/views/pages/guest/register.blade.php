@extends('layouts.guest.master')
@section('title', 'Đăng Ký')
@section('style')
<link rel="stylesheet" href="{!! asset('public/vendors/login/styles.css') !!}">
<style>
    .btn-group {
        display: flex;
        flex-direction: column;
        -ms-flex-direction: column;
        justify-content: center;
    }
</style>
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
                                    <input type="text" id="inputName" name="name" class="form-control"
                                        placeholder="Nhập họ và tên" value="{{ old('name') }}"
                                        autofocus>
                                    <label for="inputName">Nhập họ và tên *</label>
                                    @error('name')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-label-group">
                                    <input type="text" id="inputEmail" name="email" class="form-control"
                                        placeholder="Nhập địa chỉ email" value="{{ old('email') }}">
                                    <label for="inputEmail">Nhập địa chỉ email *</label>
                                    @error('email')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" name="password" class="form-control"
                                        placeholder="Nhập mật khẩu" value="{{ old('password') }}">
                                    <label for="inputPassword">Nhập mật khẩu *</label>
                                    @error('password')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" name="password_confirmation" class="form-control"
                                        placeholder="Nhập mật khẩu" value="{{ old('password_confirmation') }}">
                                    <label for="inputPassword">Nhập mật khẩu xác nhận *</label>
                                    @error('password_confirmation')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-label-group">
                                    <input type="text" id="inputPhone" name="phone" class="form-control"
                                        placeholder="Nhập số điện thoại *" minlength="9" maxlength="10"
                                        value="{{ old('phone') }}">
                                    <label for="inputPhone">Nhập số điện thoại *</label>
                                    @error('phone')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-label-group">
                                    <input type="text" id="inputAddress" name="address" class="form-control"
                                        placeholder="Nhập địa chỉ  *" value="{{ old('address') }}">
                                    <label for="inputAddress">Nhập địa chỉ *</label>
                                    @error('address')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6 btn-group">
                                <div>
                                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng
                                        ký</button>
                                    <hr class="my-4">
                                    <a href="{!! route('guest.user.redirect.social', ['facebook']) !!}" class="btn btn-lg btn-facebook btn-block text-uppercase text-white"><i
                                        class="fa fa-facebook-f mr-2"></i> Đăng nhập bằng Facebook</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
