@extends('layouts.guest.master')
@section('title', 'Đăng Nhập')
@section('style')
<style>
:root {
    --input-padding-x: 1.5rem;
    --input-padding-y: .75rem;
}
.card-signin {
    border: 0;
    border-radius: 1rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}
.card-signin .card-title {
    margin-bottom: 2rem;
    font-weight: 300;
    font-size: 1.5rem;
}
.card-signin .card-body {
    padding: 2rem;
}
.form-signin {
    width: 100%;
}
.form-signin .btn {
    font-size: 80%;
    border-radius: 5rem;
    letter-spacing: .1rem;
    font-weight: bold;
    padding: 1rem;
    transition: all 0.2s;
}
.form-label-group {
    position: relative;
    margin-bottom: 1rem;
}
.form-label-group input {
    height: auto;
    border-radius: 2rem;
}
.form-label-group>input,
.form-label-group>label {
    padding: var(--input-padding-y) var(--input-padding-x);
}
.form-label-group>label {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    margin-bottom: 0;
    /* Override default `<label>` margin */
    line-height: 1.5;
    color: #495057;
    border: 1px solid transparent;
    border-radius: .25rem;
    transition: all .1s ease-in-out;
}
.form-label-group input::-webkit-input-placeholder {
    color: transparent;
}
.form-label-group input:-ms-input-placeholder {
    color: transparent;
}
.form-label-group input::-ms-input-placeholder {
    color: transparent;
}
.form-label-group input::-moz-placeholder {
    color: transparent;
}
.form-label-group input::placeholder {
    color: transparent;
}
.form-label-group input:not(:placeholder-shown) {
    padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
    padding-bottom: calc(var(--input-padding-y) / 3);
}
.form-label-group input:not(:placeholder-shown)~label {
    padding-top: calc(var(--input-padding-y) / 3);
    padding-bottom: calc(var(--input-padding-y) / 3);
    font-size: 12px;
    color: #777;
}
.btn-google {
    color: white;
    background-color: #ea4335;
}
.btn-facebook {
    color: white;
    background-color: #3b5998;
}

/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
    .form-label-group>label {
        display: none;
    }
    .form-label-group input::-ms-input-placeholder {
        color: #777;
    }
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
    .form-label-group>label {
        display: none;
    }
    .form-label-group input:-ms-input-placeholder {
        color: #777;
    }
}

</style>
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
                        <center><label class="text-danger error-login">{{ $message }}</label></center>
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
