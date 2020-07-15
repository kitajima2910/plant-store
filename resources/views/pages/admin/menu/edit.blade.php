@extends('layouts.admin.master')
@section('title', 'Menu Web')
@section('content')

<div class="form-w3layouts">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    CHỈNH SỮA MENU WEB
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ route('admin.menu.update', ['id' => $menu->id]) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tên MENU</label>
                                <input type="text" class="form-control" name="name" value="{{ $menu->name }}">
                                @error('name')
                                    <span class="text-danger" style="font-style: italic;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <select class="form-control m-bot15" name="parent_id">
                                    <option value="0">HÃY CHỌN MENU CHA</option>
                                    @foreach ($options as $item )
                                        <option value="{{ $item['id'] }}" {{ !empty($item['select']) ? 'selected' : '' }}>{{ str_repeat('---', $item['level']) . $item['name'] }}</option>
                                    @endforeach
                                </select>
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