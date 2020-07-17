@extends('layouts.admin.master')
@section('title', 'Menu Web')
@section('style')
<link rel="stylesheet" href="{{ asset('public/vendors/metro4/datatables.css') }}">
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
                    <th>Tên Danh Mục</th>
                    <th>Đường Dẫn</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                        <tr data-expanded="true">
                            <td>{{ $menu->id }}</td>
                            <td>{{ $menu->name }}</td>
                            <td>{{ $menu->status == 1 ? 'Hoạt động' : 'Không hoạt động' }}</td>
                            <td>{{ $menu->updated_at }}</td>
                            <td>{{ $menu->slug }}</td>
                            <td>
                                <form action="{{ route('menus.destroy', $menu->id) }}" method="post">
                                    <a class="btn btn-primary"
                                    href="{{ route('menus.edit', $menu->id) }}"
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
    $('#tableMenus').dataTable();
</script>
@endsection
