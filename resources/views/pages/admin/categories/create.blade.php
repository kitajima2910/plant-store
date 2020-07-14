@extends('layouts.admin.master')
@section('title', 'Danh Mục')
@section('content')

<div class="form-w3layouts">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    THÊM DANH MỤC
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ route('admin.categories.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <select class="form-control m-bot15" name="parent_id">
                                    <option value="0">Hãy chọn danh mục cha</option>
                                    {{!! $htmlOptions !!}}
                                </select>
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
