@extends('layouts.admin.master')
@section('title', 'Menu Web')
@section('content')

<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh Sách Danh Mục Cần Khôi Phục
        </div>
        <div>
            <table class="table">
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
            {{ $menus->links() }}
        </div>
    </div>
</div>

@endsection
