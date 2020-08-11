@extends('layouts.admin.master')
@section('title', 'Tài khoản')
@section('content')

<div class="form-w3layouts">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">CHỈNH SỬA TÀI KHOẢN</header>
                <div class="panel-body">
                    <div class="position-center">
                        <form action="{{route('users.update',$user->id)}}" method="POST">
                            @method('PATCH')   
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                                <div class="form-group">
                                    <label>Họ và tên</label>
                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                    @error('name')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $user->email }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" class="form-control" name="address" value="{{ $user->address }}">
                                    @error('address')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                                    @error('phone')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input type="password" class="form-control" name="password" value="{{ $user->password }}" readonly>
                                    @error('password')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label >Vài trò</label>
                                    <select class="form-control" name="level">
                                        @if($user->level == 0)
                                        <span>
                                        <option value="0" >Thành Viên</option>
                                        <option value="1" >Quản Trị</option>
                                        </span>
                                        @else
                                        <span>
                                            <option value="1" >Quản Trị</option>
                                            <option value="0" >Thành Viên</option>
                                            </span>
                                         @endif
                                    </select>
                                </div>                          
                                 <div class="form-group">
                                    <label>Trạng thái</label>
                                    <div class="form-check form-check-inline">
                                        @if($user->status == 1)
                                            <span class="form-check-label">
                                                <input class="form-check-input" type="radio" name="status" value="1" checked> Hoạt động
                                            </span>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="form-check-label">
                                                <input class="form-check-input" type="radio" name="status" value="0"> Không
                                                hoạt động
                                            </span>
                                        @else
                                            <span class="form-check-label">
                                                <input class="form-check-input" type="radio" name="status" value="1"> Hoạt
                                                động
                                            </span>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="form-check-label">
                                                <input class="form-check-input" type="radio" name="status" value="0" checked> Không hoạt động
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info">Cập nhật</button>
                            </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- page end-->
</div>

@endsection

