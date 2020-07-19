@extends('layouts.admin.master')
@section('title', 'User')
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
        Danh Sách Thành Viên
    </div>
    <div>
        <table id="tableMenus" class="table striped table-border">
            <thead>
                <tr>
                    <th data-breakpoints="xs">ID</th>
                    <th>Tên User</th>
                    <th>Email</th>
                    <th>Level</th>
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
                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                    <a class="btn btn-primary"
                                    href="{{ route('users.edit', $user->id) }}"
                                    role="button">Sửa</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" role="button">Xoá</button>
                                </form>
                            </>
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