@extends('layouts.admin.master')
@section('title', 'Sản Phẩm')
@section('style')
<link rel="stylesheet" href="{{ asset('public/vendors/select2/css/select2.min.css') }}">
@endsection
@section('content')

<div class="form-w3layouts">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">THÊM SẢN PHẨM</header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ route('products.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" name="name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Giá sản phẩm</label>
                                <input type="text" class="form-control" name="price"
                                    value="{{ old('price') }}">
                            </div>
                            <div class="form-group">
                                <label>Giảm giá</label>
                                <input type="text" class="form-control" name="sale_price"
                                    value="{{ old('sale_price') }}">
                            </div>
                            <div class="form-group">
                                <label>Ảnh đại diện</label>
                                <input type="file" class="form-control" name="feature_image">
                            </div>
                            <div class="form-group">
                                <label>Ảnh chi tiết</label>
                                <input type="file" class="form-control" multiple name="image[]">
                            </div>
                            <div class="form-group">
                                <label>Nhập nội dung</label>
                                <textarea class="form-control" name="content" rows="3"
                                    value="{!! old('content') !!}"></textarea>
                            </div>
                            <div class="form-group">
                                <select class="form-control m-bot15" name="parent_id">
                                    <option value="0">HÃY CHỌN DANH MỤC</option>
                                    @foreach($options as $item )
                                        <option value="{{ $item['id'] }}"
                                            {{ !empty($item['select']) ? 'selected' : '' }}>
                                            {{ str_repeat('---', $item['level']) . $item['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nhập tags cho sản phẩm</label>
                                <select class="form-control tags_selected" multiple name="tags_name[]"></select>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <div class="form-check form-check-inline">
                                    <span class="form-check-label">
                                        <input class="form-check-input" type="radio" name="status" value="1" checked>
                                        Hoạt động
                                    </span>
                                    &nbsp;&nbsp;&nbsp;
                                    <span class="form-check-label">
                                        <input class="form-check-input" type="radio" name="status" value="0"> Không hoạt
                                        động
                                    </span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info">Thêm mới</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- page end-->
</div>

@endsection
@section('script')
<script src="{{ asset('public/vendors/select2/js/select2.min.js') }}"></script>
<script>
    $(function () {
        $('.tags_selected').select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });
    });

    CKEDITOR.replace('content', {
        filebrowserBrowseUrl: "{{ asset('public/ckfinder/ckfinder.html') }}",
        filebrowserImageBrowseUrl: "{{ asset('public/ckfinder/ckfinder.html?type=Images') }}",
        filebrowserFlashBrowseUrl: "{{ asset('public/ckfinder/ckfinder.html?type=Flash') }}",
        filebrowserUploadUrl: "{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
        filebrowserImageUploadUrl: "{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
        filebrowserFlashUploadUrl: "{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}"
    });

</script>
@endsection
