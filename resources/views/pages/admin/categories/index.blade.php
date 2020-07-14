@extends('layouts.admin.master')
@section('title', 'Danh Mục')
@section('content')

<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh Sách Danh Mục
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
                                <a class="btn btn-primary" href="{{ route('admin.categories.edit', ['id' => $category->id]) }}" role="button">Sửa</a>
                                <a class="btn btn-danger" href="{{ route('admin.categories.destroy', ['id' => $category->id]) }}" role="button">Xoá</a>
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
