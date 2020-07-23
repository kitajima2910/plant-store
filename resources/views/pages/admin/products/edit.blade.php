@extends('layouts.admin.master')
@section('title', 'Sản Phẩm')
@section('style')
<link rel="stylesheet" href="{{ asset('public/vendors/select2/css/select2.min.css') }}">
@endsection
@section('content')
@php
    $productImages = json_decode($product->productImages);
@endphp
<div class="form-w3layouts">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">CHỈNH SỬA SẢN PHẨM</header>
                <div class="panel-body">
                    <div class="position-center1">
                        <form role="form" action="{{ route('products.update', $product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            @csrf
                            @method('PATCH')
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ $product->name }}">
                                    @error('name')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Giá sản phẩm</label>
                                    <input type="text" class="form-control" name="price"
                                        value="{{ $product->price }}">
                                    @error('price')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Giảm giá(%)</label>
                                    <select class="form-control m-bot15" name="sale_price">
                                        <option value="0">KHÔNG GIẢM GIÁ</option>
                                        @for ($i = 5; $i <= 100; $i += 5)
                                            <option value="{{ $i }}" {{ $product->sale_price == $i ? 'selected' : ''}}>{{ $i }}%</option>
                                        @endfor
                                    </select>
                                    @error('sale_price')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nhập nội dung</label>
                                    @error('content')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                    <textarea class="form-control" name="content" rows="3">{{ $product->content }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ảnh đại diện</label>
                                    @error('feature_image_path')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                    <input type="file" class="form-control" name="feature_image_path">
                                </div>
                                <div class="form-group">
                                    {{-- <img src="{{ asset( $product->feature_image_path ) }}" class="thumbnail" width="200px" height="170px" id="anh_dai_dien" alt="ảnh đại diện"> --}}
                                    <img src="{{ !empty($product->feature_image_path) ? asset($product->feature_image_path) : asset('public/uploads/200x170.png') }}" class="thumbnail" width="200px" height="170px" id="anh_dai_dien" alt="ảnh đại diện">
                                </div>
                                <div class="form-group">
                                    <label>Ảnh chi tiết</label>
                                    @error('image_path')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                    <input type="file" class="form-control" multiple id="image_paths" name="image_path[]">
                                </div>
                                <div class="form-group" style="overflow-x: auto; {{!empty($productImages) ? 'height: 90px;' : ''}}" id="showHeight">
                                    <div id="showImages">
                                        @foreach ($productImages as $item)
                                            <div class="col-md-3 thumbnail">
                                                <img src="{{ asset($item->image_path) }}" width="100px" height="90px">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control m-bot15" name="category_id">
                                        <option value="">HÃY CHỌN DANH MỤC</option>
                                        @foreach($options as $item )
                                            <option value="{{ $item['id'] }}"
                                                {{ !empty($item['select']) ? 'selected' : '' }}>
                                                {{ str_repeat('---', $item['level']) . $item['name'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nhập tags cho sản phẩm</label>
                                    <select class="form-control tags_selected" multiple name="tags_name[]">
                                        @foreach ($product->tags as $item)
                                            <option value="{{ $item->tags_name }}" selected>{{ $item->tags_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('tags_name')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <div class="form-check form-check-inline">
                                        <span class="form-check-label">
                                            <input class="form-check-input" type="radio" name="status" value="1" {{$product->status == 1 ? 'checked' : ''}}> Hoạt động
                                        </span>
                                        &nbsp;&nbsp;&nbsp;
                                        <span class="form-check-label">
                                            <input class="form-check-input" type="radio" name="status" value="0" {{$product->status == 0 ? 'checked' : ''}}> Không
                                            hoạt động
                                        </span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info">Cập nhật</button>
                            </div>
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
            tokenSeparators: [',']
        });
    });

    $(document).on('change', 'input[name="feature_image_path"]', function(e) {
        let tmppath = URL.createObjectURL(e.target.files[0]);
        $("#anh_dai_dien").fadeIn("fast").attr('src', tmppath);
    });

    $(document).on('change', '#image_paths', function(e) {

        let tmppaths = e.target.files;
        let _html = '';
        for(let tmp of tmppaths) {
            _html += '<div class="col-md-3 thumbnail">';
                _html += '<img src="' + URL.createObjectURL(tmp) + '" width="100px" height="90px">';
            _html += '</div>';
        }
        
        if(_html !== '') {
            $('#showHeight').css('height', '90px');
            $("#showImages").fadeIn("fast").html(_html);
        } else {
            $('#showHeight').css('height', '0px');
        }
    });

    CKEDITOR.replace('content', {
        filebrowserBrowseUrl: '{{ url('') }}/public/filemanager/dialog.php?akey=1GZGMGBWP7PH6QP8PVG64Z656USJ3&type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl: '{{ url('') }}/public/filemanager/dialog.php?akey=1GZGMGBWP7PH6QP8PVG64Z656USJ3&type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl: '{{ url('') }}/public/filemanager/dialog.php?akey=1GZGMGBWP7PH6QP8PVG64Z656USJ3&type=1&editor=ckeditor&fldr='
    });

</script>
@endsection
