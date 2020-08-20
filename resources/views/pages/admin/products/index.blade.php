@extends('layouts.admin.master')
@section('title', 'Sản Phẩm')
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
        Danh Sách Sản Phẩm<br>
    </div>
    <br>
    <form action="{{ route('admin.product.print')}}" method="GET">
        <select name="category" id="">
            @foreach ($categories as $item)
            <option value="{{$item->slug}}">{{$item->name}}</option>
            @endforeach
        </select>
        <button type="submit"><i class="fa fa-file-pdf-o"></i> In danh sách sản phầm</button>
    </form>

    {{-- <a href="{{ route('admin.product.print')}}" target="" class="btn btn-xs btn-default"><i class="fa fa-file-pdf-o"></i> In danh sách sản phầm</a> --}}
    <div>
        <table id="tableProducts" class="table striped table-border">
            <thead>
                <tr>
                    <th data-breakpoints="xs">ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Đường dẫn</th>
                    <th>Ảnh đại diện</th>
                    <th>Giá sản phẩm</th>
                    <th>Danh mục</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                        <tr data-expanded="true">
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->slug }}</td>
                            <td>
                                {{-- <img src="{{ asset($product->feature_image_path) }}" class="img-fluid thumbnail" width="75px" height="75px"> --}}
                                <img src="{{ !empty($product->feature_image_path) ? asset($product->feature_image_path) : asset('public/uploads/200x170.png') }}" class="img-fluid thumbnail" width="75px" height="75px">
                            </td>
                            <td>{{  number_format($product->price, 0, ',', '.') }} VNĐ</td>
                            <td>{{ optional($product->category)->name }}</td>
                            <td>
                                <label class="{{ $product->status == 1 ? 'label label-info' : 'label label-default'}}">{{ $product->status == 1 ? 'Hoạt động' : 'Không hoạt động' }}</label>
                            </td>
                            <td>{{ $product->created_at }}</td>
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('products.edit', $product->id) }}" role="button"><i class="fa fa-edit"></i> Sửa</a>
                                <a href="#" data-toggle="modal" data-id="{{ $product->id }}" data-target="#deleteModal" class="btn btn-xs btn-danger delete"><i class="fa fa-trash"></i> Xoá</a>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>

<x-confirm-delete>products.destroy</x-confirm-delete>

@endsection
@section('script')
<script src="{{ asset('public/vendors/metro4/datatables/js/jquery.dataTables.min.js') }}"></script>
<script>
    $('#tableProducts').dataTable();
</script>
@endsection

