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
            border: 1px solid black;
            font-style: 9px !important;
        }
        span {
            font-weight: 500;
        }
        td {
            text-align: center;
        }
    </style>
</head>

<body>
    <h3>Plant Store từ FPT Aptech Group01</h3>
    <h4>Độc lập - Tự do - Hạnh phúc</h4>
    <p>Mã đơn hàng: {!! $order->id !!}</p>
    <p>Thời gian đặt hàng: {!! $order->created_at !!}</p>
    <table >
        <thead>
            <tr>
                <th colspan="3">TÊN KHÁCH ĐẶT</th>
            </tr>
            <tr>
                <th>Tên khách đặt</th>
                <th>Điện thoại</th>
                <th>Đại chỉ email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">{!! $order->user->name !!}</td>
                <td>{!! $order->user->phone !!}</td>
                <td>{!! $order->user->email !!}</td>
            </tr>
        </tbody>
    </table>
    <hr>
    <table >
        <thead>
            <tr>
                <th colspan="5">THÔNG TIN VẬN CHUYỂN</th>
            </tr>
            <tr>
                <th>Tên khách nhận</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
                <th>Đại chỉ email</th>
                <th>Ghi chú</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">{!! $order->name !!}</td>
                <td>{!! $order->address !!}</td>
                <td>{!! $order->phone !!}</td>
                <td>{!! $order->email !!}</td>
                <td>{!! $order->notes !!}</td>
            </tr>
        </tbody>
    </table>
    <hr>
    <table >
        <thead>
            <tr>
                <th colspan="7">CHI TIẾT ĐƠN HÀNG</th>
            </tr>
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
