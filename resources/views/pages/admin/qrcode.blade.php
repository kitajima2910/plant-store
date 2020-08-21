@extends('layouts.admin.master')
@section('title', 'MÃ QR')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="qrcode mt-5" style="display: table; margin: 0 auto; text-align: center;">
                <br>
                <div style="display: none;">{!! QrCode::size(250)->backgroundColor(204, 213, 161)->color(0, 158, 108)->generate($qrcodeHTML); !!}</div>
                <canvas style="display: none;" id="canvas" width="250" height="250"></canvas>
                <div id="png-container"></div>
                <br>
                <a class="btn btn-danger" id="downloadPNG" download="QRCode" href="#" role="button">TẢI VỀ MÁY CỦA BẠN</a>
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
    document.querySelector('#png-container').innerHTML = '<img src="'+png+'"/>';
    $('#downloadPNG').attr('href', png);
    DOMURL.revokeObjectURL(png);
};
img.src = url;

</script>
@endsection
