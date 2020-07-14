@extends('layouts.admin.master')
@section('title', 'Danh Mục')
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
                    @foreach($categories as $category)
                        <tr data-expanded="true">
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ route('admin.categories.enable', ['id' => $category->id]) }}" role="button">Kích hoạt</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->links() }}
        </div>
    </div>
</div>

@endsection
