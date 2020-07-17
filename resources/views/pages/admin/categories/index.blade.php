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
                        <td>{{ $category->status == 1 ? 'Hoạt động' : 'Không hoạt động' }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                <a class="btn btn-primary"
                                href="{{ route('categories.edit', $category->id) }}"
                                role="button">Sửa</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" role="button">Xoá</button>
                            </form>
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
