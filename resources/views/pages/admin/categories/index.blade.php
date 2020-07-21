@extends('layouts.admin.master')
@section('title', 'Danh Mục')
@section('style')
<link rel="stylesheet" href="{{ asset('public/vendors/metro4/datatables/css/datatables.css') }}">
<style>
    #tableCategories thead tr th,
    #tableCategories tbody tr td {
        color: #3c763d;
    }

</style>
@endsection
@section('content')

<div class="table-agile-info">
    <div class="panel-heading">
        Danh Sách Danh Mục
    </div>
    <div>
        <table id="tableCategories" class="table striped table-border">
            <thead>
                <tr>
                    <th data-breakpoints="xs">ID</th>
                    <th>Tên Danh Mục</th>
                    <th>Đường Dẫn</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr data-expanded="true">
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            <label class="{{ $category->status == 1 ? 'label label-info' : 'label label-default'}}">{{ $category->status == 1 ? 'Hoạt động' : 'Không hoạt động' }}</label>
                        </td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            <a class="btn btn-xs btn-primary" href="{{ route('categories.edit', $category->id) }}" role="button"><i class="fa fa-edit"></i> Sửa</a>
                            <a href="#" data-toggle="modal" data-id="{{ $category->id }}" data-target="#deleteModal" class="btn btn-xs btn-danger delete"><i class="fa fa-trash"></i> Xoá</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<x-confirm-delete>categories.destroy</x-confirm-delete>

@endsection
@section('script')
<script src="{{ asset('public/vendors/metro4/datatables/js/jquery.dataTables.min.js') }}"></script>
<script>
    $('#tableCategories').dataTable();
</script>
@endsection
