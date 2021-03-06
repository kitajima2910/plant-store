@extends('layouts.admin.master')
@section('title', 'Cài Đặt')
@section('content')

<div class="form-w3layouts">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">THÊM CÀI ĐẶT</header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ route('settings.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Config Key</label>
                                <input type="text" class="form-control" name="config_key" value="{{ old('config_key') }}">
                                @error('config_key')
                                    <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Config Value</label>
                                <textarea class="form-control" name="config_value" rows="3">{{ old('config_value') }}</textarea>
                                @error('config_value')
                                    <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                @enderror
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
