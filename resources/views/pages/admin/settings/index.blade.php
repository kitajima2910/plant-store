@extends('layouts.admin.master')
@section('title', 'Cài Đặt')
@section('style')
<link rel="stylesheet" href="{{ asset('public/vendors/metro4/datatables/css/datatables.css') }}">
<style>
    #tableMenus thead tr th,
    #tableMenus tbody tr td {
        color: #3c763d;
    }
</style>
@endsection
@section('content')

<div class="table-agile-info">
    <div class="panel-heading">
        Danh Sách Cài Đặt
    </div>
    <div>
        <table id="tableSettings" class="table striped table-border">
            <thead>
                <tr>
                    <th data-breakpoints="xs">ID</th>
                    <th>Tên config key</th>
                    <th style="width: 30%;">Tên config value</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($settings as $setting)
                        <tr data-expanded="true">
                            <td>{{ $setting->id }}</td>
                            <td>{{ $setting->config_key }}</td>
                            <td>{{ $setting->config_value }}</td>
                            <td>
                                <label class="{{ $setting->status == 1 ? 'label label-info' : 'label label-default'}}">{{ $setting->status == 1 ? 'Hoạt động' : 'Không hoạt động' }}</label>
                            </td>
                            <td>{{ $setting->created_at }}</td>
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('settings.edit', $setting->id) }}" role="button"><i class="fa fa-edit"></i> Sửa</a>
                                <a href="#" data-toggle="modal" data-id="{{ $setting->id }}" data-target="#deleteModal" class="btn btn-xs btn-danger delete"><i class="fa fa-trash"></i> Xoá</a>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>

<x-confirm-delete>settings.destroy</x-confirm-delete>

@endsection
@section('script')
<script src="{{ asset('public/vendors/metro4/datatables/js/jquery.dataTables.min.js') }}"></script>
<script>
    $('#tableSettings').dataTable();
</script>
@endsection

