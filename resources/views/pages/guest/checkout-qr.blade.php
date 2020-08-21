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
            <div class="visible-print" style="display: table; margin: 0 auto; text-align: center;" style="display: table; margin: 0 auto; text-align: center;">
                <br>
                <div style="display: none;">{!! QrCode::size(250)->encoding('UTF-8')->margin(5)->generate($html); !!}</div>
                <canvas style="display: none;" id="canvas" width="250" height="250"></canvas>
                <div id="png-containerbill"></div>
                <br>
                <p><strong>BẠN HÃY QUÉT MÃ QR ĐỂ KIỂM TRA THÔNG TIN</strong></p>
                <a class="btn btn-danger" id="downloadPNGBill" download="QRCodeBill" href="javascript:void(0);" role="button">TẢI VỀ MÁY CỦA BẠN</a>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script>

var svgString = new XMLSerializer().serializeToString(document.querySelector('svg'));

var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var DOMURL = self.URL || self.webkitURL || self;
var img = new Image();
var svg = new Blob([svgString], {type: "image/svg+xml;charset=utf-8"});
var url = DOMURL.createObjectURL(svg);
img.onload = function() {
    ctx.drawImage(img, 0, 0);
    var png = canvas.toDataURL("image/png");
    document.querySelector('#png-containerbill').innerHTML = '<img src="'+png+'"/>';
    $('#downloadPNGBill').attr('href', png);
    DOMURL.revokeObjectURL(png);
};
img.src = url;

</script>
@endsection
