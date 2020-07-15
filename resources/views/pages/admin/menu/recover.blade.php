@extends('layouts.admin.master')
@section('title', 'Menu Web')
@section('style')
<link rel="stylesheet" href="{{ asset('public/vendors/metro4/datatables.css') }}">
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
                    <th>Đường Dẫn Thân Thiên</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                    <tr data-expanded="true">
                        <td>{{ $menu->id }}</td>
                        <td>{{ $menu->name }}</td>
                        <td>{{ $menu->slug }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.menu.enable', ['id' => $menu->id]) }}" role="button">Kích hoạt</a>
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
