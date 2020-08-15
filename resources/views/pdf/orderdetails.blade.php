<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Details</title>
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
    <h3>Plant Store từ FPT Aptech Group01</h3>
    <h4>Độc lập - Tự do - Hạnh phúc</h4>
    <p>Mã đơn hàng: {!! $order->id !!}</p>
    <p>Thời gian đặt hàng: {!! $order->created_at !!}</p>
    <table >
        <tr>
            <th style="width: 170px;">Tên khách đặt</th>
            <td>{!! $order->user->name !!}</td>
        </tr>
        <tr>
            <th>Điện thoại</th>
            <td>{!! $order->user->phone !!}</td>
            
        </tr>
        <tr>
            <th>Đại chỉ email</th>
            <td>{!! $order->user->email !!}</td>
        </tr>
    </table>
    <hr>
    <table >
        <tr>
            <th style="width: 170px;">Tên khách nhận</th>
            <td>{!! $order->name !!}</td>
        </tr>
        <tr>
            <th>Địa chỉ</th>
            <td>{!! $order->address !!}</td>
        </tr>
        <tr>
            <th>Điện thoại</th>
            <td>{!! $order->phone !!}</td>
        </tr>
        <tr>
            <th>Đại chỉ email</th>
            <td>{!! $order->email !!}</td>
        </tr>
        <tr>
            <th>Ghi chú</th>
            <td>{!! $order->notes !!}</td>
        </tr>
    </table>
    <hr>
    <table >
        <thead>
            <tr>
                <th>Mã</th>
                <th>Tên</th>
                <th>Hình</th>
                <th>Giá</th>
                <th>Giảm(%)</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sum = 0;
                $count = 0;
            @endphp
            @foreach ($orderDetails as $item)
                <tr>
                    <td>{!! $item->products[0]->id !!}</td>
                    <td>{!! $item->products[0]->name !!}</td>
                    <td>
                        <img src="{!! asset($item->products[0]->feature_image_path) !!}" width="50px" height="50px"> 
                    </td>
                    <td>{!! number_format($item->products[0]->price, 0, ',', '.') !!} VNĐ</td>
                    <td>{!! $item->products[0]->sale_price !!}</td>
                    <td>{!! $item->quantity !!}</td>
                    <td>{!! number_format($item->price * $item->quantity, 0, ',', '.') !!} VNĐ</td>
                    @php
                        $sum += $item->price * $item->quantity;
                        $count++;
                    @endphp
                </tr>
            @endforeach
            <tr>
                <td colspan="7" style="text-align: left"><br>
                    <label>Tổng giảm: {!! number_format($sum, 0, ',', '.') !!} VNĐ</label><br>
                    <label>Phí giao dịch: {!! number_format($count * 5000, 0, ',', '.') !!} VNĐ</label><br>
                    <label>Tổng thanh toán: {!! number_format($sum + ($count * 5000), 0, ',', '.') !!} VNĐ</label>
                </td>
            </tr>
        </tbody>
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
