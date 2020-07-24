@extends('layouts.admin.master')
@section('title', 'Slider')
@section('content')

<div class="form-w3layouts">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">THÊM SLIDER</header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Đường dẫn</label>
                                <input type="text" class="form-control" name="link" value="{{ old('link') }}">
                                @error('link')
                                    <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Ảnh slider</label>
                                @error('feature_image_path')
                                    <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                @enderror
                                <input type="file" class="form-control"  name="feature_image_path">
                            </div>
                            <div class="form-group">
                                <img src="{{ asset('public/uploads/200x170.png') }}" class="thumbnail" width="200px" height="170px" id="anh_slider" alt="ảnh slider">
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                            <textarea name="content" id="" cols="75" rows="10" >{{ old('content')}}</textarea>
                                @error('content')
                                    <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <div class="form-check form-check-inline">
                                    <span class="form-check-label">
                                        <input class="form-check-input" type="radio" name="status" value="1" checked> Hoạt động
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
<script>
      $(document).on('change', 'input[name="feature_image_path"]', function(e) {
        let tmppath = URL.createObjectURL(e.target.files[0]);
        $("#anh_slider").fadeIn("fast").attr('src', tmppath);
    });
</script>

@endsection