@extends('layouts.admin.master')
@section('title', 'Tài Khoản')
@section('style')
<link rel="stylesheet" href="{{ asset('public/vendors/metro4/datatables.css') }}">
<style>
    #tableUsers thead tr th,
    #tableUsers tbody tr td {
        color: #3c763d;
    }
</style>
@endsection
@section('content')

<div class="table-agile-info">
    <div class="panel-heading">
        Danh Sách Tài Khoản
    </div>
    <div>
        <table id="tableUsers" class="table striped table-border">
            <thead>
                <tr>
                    <th data-breakpoints="xs">ID</th>
                    <th>Họ và tên</th>
                    <th>Địa chỉ email</th>
                    <th>Vai trò</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                        <tr data-expanded="true">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->level == 1 ? 'Quản trị' : 'Thành viên' }}</td>
                            <td>{{ $user->status == 1 ? 'Hoạt động' : 'Không hoạt động' }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <td>     
                                <a class="btn btn-xs btn-primary" href="{{ route('users.edit', $user->id) }}" role="button"><i class="fa fa-edit"></i> Sửa</a>
                                <a href="#" data-toggle="modal" data-id="{{ $user->id }}" data-target="#deleteModal" class="btn btn-xs btn-danger delete"><i class="fa fa-trash"></i> Xoá</a>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>

<x-confirm-delete>users.destroy</x-confirm-delete>

@endsection
@section('script')
<script src="{{ asset('public/vendors/metro4/jquery.dataTables.min.js') }}"></script>
<script>
    $('#tableUsers').dataTable();
</script>
@endsection
