@extends('layouts.admin.master')
@section('title', 'Bài Viết')
@section('content')

<div class="form-w3layouts">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">CHỈNH SỬA BÀI VIẾT</header>
                <div class="panel-body">
                    <div class="position-center">
                        <form action="{{route('posts.update',$post->id)}}" method="POST"  enctype="multipart/form-data">
                            @method('PATCH')   
                            @csrf
                            <input type="hidden" name="id" value="{{ $post->id }}">
                                <div class="form-group">
                                    <label>Tên bài viết</label>
                                    <input type="text" class="form-control" name="name" value="{{ $post->name }}">
                                    @error('name')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Ảnh bài viết</label>
                                    @error('feature_image_path')
                                        <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                <input type="file" class="form-control"  name="feature_image_path" >
                                </div>
                                <div class="form-group">
                                    <img src="{{ !empty($post->feature_image_path) ? asset($post->feature_image_path) : asset('public/uploads/200x170.png') }}" class="thumbnail" width="200px" height="170px"id="anh_slider" alt="ảnh slider">
                                </div>
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    @error('content')
                                    <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                    @enderror
                                <textarea name="content" id="" cols="75" rows="10" >{{$post->content}}</textarea>
                                </div>                      
                                 <div class="form-group">
                                    <label>Trạng thái</label>
                                    <div class="form-check form-check-inline">
                                        @if($post->status == 1)
                                            <span class="form-check-label">
                                                <input class="form-check-input" type="radio" name="status" value="1" checked> Hoạt động
                                            </span>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="form-check-label">
                                                <input class="form-check-input" type="radio" name="status" value="0"> Không
                                                hoạt động
                                            </span>
                                        @else
                                            <span class="form-check-label">
                                                <input class="form-check-input" type="radio" name="status" value="1"> Hoạt
                                                động
                                            </span>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="form-check-label">
                                                <input class="form-check-input" type="radio" name="status" value="0" checked> Không hoạt động
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info">Cập nhật</button>
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
<script>

    $(document).on('change', 'input[name="feature_image_path"]', function(e) {
        let tmppath = URL.createObjectURL(e.target.files[0]);
        $("#anh_slider").fadeIn("fast").attr('src', tmppath);
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
