@extends('layouts.admin.master')
@section('title', 'Bình luận')
@section('style')
<link rel="stylesheet" href="{{ asset('public/vendors/metro4/datatables/css/datatables.css') }}">
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
        <table id="tableComment" class="table striped table-border">
            <thead>
                <tr>
                    <th data-breakpoints="xs">ID</th>
                    <th>Tên người bình luận</th>
                    <th>Tên bài viết</th>
                    <th style="width: 100px">Nội dung</th>
                    <th>Ngày tạo</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($comments as $item)
                        <tr data-expanded="true">        
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->post->name }}</td>
                            <td><p  style="overflow-y: auto; height: 100px">{{ $item->body }}</p></td> 
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="#" data-toggle="modal" data-id="{{ $item->id }}" data-target="#deleteModal" class="btn btn-xs btn-danger delete"><i class="fa fa-trash"></i> Xoá</a>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
<x-confirm-delete>comments.destroy</x-confirm-delete>

@endsection
@section('script')
<script src="{{ asset('public/vendors/metro4/datatables/js/jquery.dataTables.min.js') }}"></script>
<script>
    $('#tableComment').dataTable();
</script>
@endsection
