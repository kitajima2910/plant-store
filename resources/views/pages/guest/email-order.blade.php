@php
    $cartContents = $content;
@endphp
<h4>Chào {!! $order->name !!},</h4>
<hr>
<h5>DANH SÁCH ĐẶT HÀNG CỦA BẠN:</h5>
<h5>MÃ ĐƠN HÀNG: {!! $order->id !!}</h5>
<h5>NGÀY ĐẶT HÀNG: {!! $order->created_at !!}</h5>
<table class="table" border="1" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th>STT</th>
            <th>TÊN SẢN PHẨM</th>
            <th>GIÁ</th>
            <th>SỐ LƯỢNG</th>
            <th>THÀNH TIỀN</th>
        </tr>
    </thead>
    <tbody>
        @php
            $i = 0;
            $count = 0;
        @endphp
        @foreach($cartContents as $item)
            <tr>
                <td scope="row">{!! ++$i !!}</td>
                <td>{!! $item->name !!}</td>
                <td>{!! number_format($item->price, 0, ',', '.') !!} VNĐ</td>
                <td>{!! $item->qty !!}</td>
                <td>{!! number_format($item->price * $item->qty, 0, ',', '.') !!} VNĐ</td>
            </tr>
            @php
                $count++;
            @endphp
        @endforeach
    </tbody>
</table>
<span><strong>Tổng giảm: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! number_format($totalCart, 0, ',',
    '.') !!} VNĐ</strong></span><br>
<span><strong>Phí giao dịch: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! number_format($count * 5000, 0, ',',
'.') !!} VNĐ</strong></span><br>
<span><strong>Tổng thanh toán: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! number_format($totalCart + ($count * 5000), 0, ',',
'.') !!} VNĐ</strong></span>
<hr>
<p><strong>Cảm ơn bạn!</strong></p>
<p><strong>Plan Store</strong></p>
