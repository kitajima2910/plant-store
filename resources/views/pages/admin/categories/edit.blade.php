@extends('layouts.admin.master')
@section('title', 'Danh Mục')
@section('content')

<div class="form-w3layouts">
    <!-- page start-->
    {{-- <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    CHỈNH SỮA DANH MỤC
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ route('admin.categories.update', ['id' => $category->id]) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                            </div>
                            <div class="form-group">
                                <select class="form-control m-bot15" name="parent_id" value="{{ $category->name }}">
                                    <option value="0">HÃY CHỌN DANH MỤC CHA</option>
                                    {{!! $htmlOptions !!}}
                                </select>
                            </div>
                            <button type="submit" class="btn btn-info">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div> --}}
    <!-- page end-->
</div>

@endsection