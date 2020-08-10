@extends('layouts.admin.master')
@section('title', 'Slider')
@section('style')
<link rel="stylesheet" href="{{ asset('public/vendors/metro4/datatables/css/datatables.css') }}">
<style>
    #tableSliders thead tr th,
    #tableSliders tbody tr td {
        color: #3c763d;
    }
</style>
@endsection
@section('content')

<div class="table-agile-info">
    <div class="panel-heading">
        Danh Sách Slider
    </div>
    <div>
        <table id="tableSliders" class="table striped table-border">
            <thead>
                <tr>
                    <th data-breakpoints="xs">ID</th>
                    <th>Đường dẫn</th>
                    <th>Ảnh</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sliders as $slider)
                        <tr data-expanded="true">
                            <td>{{ $slider->id}}</td>
                            <td>{{ $slider->link }}</td>
                            <td>
                                <img src="{{ !empty($slider->feature_image_path) ? asset($slider->feature_image_path) : asset('public/uploads/200x170.png') }}" class="img-fluid thumbnail" width="160px" height="60px">
                            </td>
                            <td>
                                <label class="{{ $slider->status == 1 ? 'label label-info' : 'label label-default'}}">{{ $slider->status == 1 ? 'Hoạt động' : 'Không hoạt động' }}</label>
                            </td>
                            <td>{{ $slider->created_at }}</td>
                                <td>     
                                    <a class="btn btn-xs btn-primary" href="{{ route('sliders.edit', $slider->id) }}" role="button"><i class="fa fa-edit"></i> Sửa</a>
                                    <a href="#" data-toggle="modal" data-id="{{ $slider->id }}" data-target="#deleteModal" class="btn btn-xs btn-danger delete"><i class="fa fa-trash"></i> Xoá</a>
                                </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>

<x-confirm-delete>sliders.destroy</x-confirm-delete>

@endsection
@section('script')
<script src="{{ asset('public/vendors/metro4/datatables/js/jquery.dataTables.min.js') }}"></script>
<script>
    $('#tableSliders').dataTable();
</script>
@endsection