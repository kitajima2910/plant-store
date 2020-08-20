<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product pdf</title>
    <style>
        html {
            font-family: DejaVu Sans;
        }
        body {
            max-width: 100%;
            width: 960px;
            margin: 0 auto;
            font-family: DejaVu Sans;
            font-style: 14px;
        }
        h3, h4 {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 0 auto;
        }
        table, th, td {
            border: 1px solid #fff;
            font-style: 9px !important;
        }
        span {
            font-weight: 500;
        }
        th {
            text-align: left;
        }
        table > tr > th {
            
        }
    </style>
</head>
<body>
    <img src="{{ asset('public/frontend/img/core-img/logo.png') }}" width="70px" height="50px" style="position: absolute;">
    <h3>Danh sách sản phẩm</h3><br>
    <h4 style="text-align: left;">Số lượng sản phẩm: {{ $products->count() }}</h4>
    <table>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Ảnh đại diện</th>
            <th>Giá sản phẩm</th>
            <th>Danh mục</th>
            <th>Trạng thái</th>
            <th>Ngày tạo</th>
        </tr>
        @foreach ($products as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td><img src="{{ !empty($item->feature_image_path) ? asset($item->feature_image_path) : asset('public/uploads/200x170.png') }}" class="img-fluid thumbnail" width="75px" height="75px"></td>
                <td>{{  number_format($item->price, 0, ',', '.') }} VNĐ</td>
                <td>{{ optional($item->category)->name }}</td>
                <td><label class="{{ $item->status == 1 ? 'label label-info' : 'label label-default'}}">{{ $item->status == 1 ? 'Hoạt động' : 'Không hoạt động' }}</label></td>
                <td>{{ $item->created_at }}</td>
            </tr>
        @endforeach
    </table>
    <hr>
    <label>Ký tên</label><br>
    <table style="border: 0px solid #fff">
        <tr style="border: 0px solid #fff">
            <th style="text-align: left; padding-left: 50px; border: 0px solid #fff;">Người lập phiếu</th>
            <th style="text-align: right; padding-right: 50px; border: 0px solid #fff;">Người nhận</th>
        </tr>
    </table>
</body>
</html>