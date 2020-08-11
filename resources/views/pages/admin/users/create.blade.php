@extends('layouts.admin.master')
@section('title', 'Tài Khoản')
@section('content')

<div class="form-w3layouts">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">THÊM TÀI KHOẢN</header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Họ và tên</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ email</label>
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                                @error('address')
                                    <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                                @error('password')
                                    <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label >Vai trò</label>
                                <select class="form-control" name="level">
                                    <option value="0" >Thành Viên</option>
                                    <option value="1" >Quản Trị</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <div class="form-check form-check-inline">
                                    <span class="form-check-label">
                                        <input class="form-check-input" type="radio" name="status" value="1" checked> Hoạt động
                                    </span>
                                    &nbsp;&nbsp;&nbsp;
                                    <span class="form-check-label">
                                        <input class="form-check-input" type="radio" name="status" value="0"> Không hoạt
                                        động
                                    </span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info">Thêm mới</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- page end-->
</div>

@endsection
