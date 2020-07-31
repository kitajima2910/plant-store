@extends('layouts.admin.master')
@section('title', 'Bài Viết')
@section('style')
<link rel="stylesheet" href="{{ asset('public/vendors/metro4/datatables/css/datatables.css') }}">
<style>
    #tablePost thead tr th,
    #tablePost tbody tr td {
        color: #3c763d;
    }
</style>
@section('content')

<div class="table-agile-info">
    <div class="panel-heading">
        Danh Sách Bài Viết
    </div>
    <div>
        <table id="tablePost" class="table striped table-border">
            <thead>
                <tr>
                    <th data-breakpoints="xs">ID</th>
                    <th>Tên Bài Viết</th>
                    <th>Ảnh</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                        <tr data-expanded="true">
                            <td>{{ $post->id}}</td>
                            <td>{{ $post->name}}</td>
                            <td>
                                <img src="{{ !empty($post->feature_image_path) ? asset($post->feature_image_path) : asset('public/uploads/200x170.png') }}" class="img-fluid thumbnail" width="75px" height="75px">
                            </td>
                            <td>
                                <label class="{{ $post->status == 1 ? 'label label-info' : 'label label-default'}}">{{ $post->status == 1 ? 'Hoạt động' : 'Không hoạt động' }}</label>
                            </td>
                            <td>{{ $post->created_at }}</td>
                                 <td>     
                                    <a class="btn btn-xs btn-primary" href="{{ route('posts.edit', $post->id) }}" role="button"><i class="fa fa-edit"></i> Sửa</a>
                                    <a href="#" data-toggle="modal" data-id="{{ $post->id }}" data-target="#deleteModal" class="btn btn-xs btn-danger delete"><i class="fa fa-trash"></i> Xoá</a>
                                </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>

<x-confirm-delete>posts.destroy</x-confirm-delete>

@endsection
@section('script')
<script src="{{ asset('public/vendors/metro4/datatables/js/jquery.dataTables.min.js') }}"></script>
<script>
    $('#tablePost').dataTable();
</script>
@endsection