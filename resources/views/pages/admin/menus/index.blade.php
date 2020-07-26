@extends('layouts.admin.master')
@section('title', 'Menu Web')
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
        Danh Sách Menu
    </div>
    <div>
        <table id="tableMenus" class="table striped table-border">
            <thead>
                <tr>
                    <th data-breakpoints="xs">ID</th>
                    <th>Tên menu</th>
                    <th>Đường dẫn</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                        <tr data-expanded="true">
                            <td>{{ $menu->id }}</td>
                            <td>{{ $menu->name }}</td>
                            <td>{{ $menu->slug }}</td>
                            <td>
                                <label class="{{ $menu->status == 1 ? 'label label-info' : 'label label-default'}}">{{ $menu->status == 1 ? 'Hoạt động' : 'Không hoạt động' }}</label>
                            </td>
                            <td>{{ $menu->created_at }}</td>
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('menus.edit', $menu->id) }}" role="button"><i class="fa fa-edit"></i> Sửa</a>
                                <a href="#" data-toggle="modal" data-id="{{ $menu->id }}" data-target="#deleteModal" class="btn btn-xs btn-danger delete"><i class="fa fa-trash"></i> Xoá</a>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>

<x-confirm-delete>menus.destroy</x-confirm-delete>

@endsection
@section('script')
<script src="{{ asset('public/vendors/metro4/datatables/js/jquery.dataTables.min.js') }}"></script>
<script>
    $('#tableMenus').dataTable();
</script>
@endsection
