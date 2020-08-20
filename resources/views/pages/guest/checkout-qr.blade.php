@extends('layouts.guest.master')
@section('title', 'Quét QR')
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
@include('includes.guest.breadcrumb-area', ['currentPage' => 'Quét QR'])
<!-- ##### Breadcrumb Area End ##### -->

@php
    $html = session()->get('qrcode') ? session()->get('qrcode') : 'Plant Store';
@endphp

<div class="container">
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="visible-print" style="display: table; margin: 0 auto; text-align: center;">
                {!! QrCode::size(250)->encoding('UTF-8')->generate($html); !!}
                <br>
                <p><strong>BẠN HÃY QUÉT MÃ QR ĐỂ KIỂM TRA THÔNG TIN</strong></p>
            </div>
        </div>
    </div>
</div>

@endsection
