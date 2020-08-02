@extends('layouts.guest.master')
@section('title', 'Gửi Email')
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
@include('includes.guest.breadcrumb-area', ['currentPage' => 'Gửi Email'])
<!-- ##### Breadcrumb Area End ##### -->

<div class="container">
    <div class="row">
        <div class="col-md-12 mb-5">
            <h1>ĐẶT HÀNG THÀNH CÔNG</h1>
            <h4>Bạn vui lòng kiểm tra lại thông tin mail cửa hàng gửi đến: <strong>{!! session()->get('email') !!}</strong></h4>
            <h4>Cảm ơn bạn đã mua hàng tại <strong>Plant Store</strong>! ^^</h4>
        </div>
    </div>
</div>

@endsection