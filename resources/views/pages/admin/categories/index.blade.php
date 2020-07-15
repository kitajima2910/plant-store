@extends('layouts.admin.master')
@section('title', 'Danh Mục')
@section('style')
<link rel="stylesheet" href="{{ asset('public/vendors/metro4/datatables.css') }}">
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
                    <th>Đường Dẫn Thân Thiên</th>
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
                            <a class="btn btn-primary"
                                href="{{ route('admin.categories.edit', ['id' => $category->id]) }}"
                                role="button">Sửa</a>
                            <a class="btn btn-danger"
                                href="{{ route('admin.categories.destroy', ['id' => $category->id]) }}"
                                role="button">Xoá</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
@section('script')
<script src="{{ asset('public/vendors/metro4/jquery.dataTables.min.js') }}"></script>
<script>
    $('#tableCategories').dataTable();
</script>
@endsection
