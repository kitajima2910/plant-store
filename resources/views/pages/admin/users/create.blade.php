@extends('layouts.admin.master')
@section('title', 'User')
@section('content')

<div class="form-w3layouts">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">THÊM USER</header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tên</label>
                                <input type="text" class="form-control" name="name">
                                @error('name')
                                    <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email">
                                @error('email')
                                    <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" >
                                @error('password')
                                    <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label >Level</label>
                                <select name="level">
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
