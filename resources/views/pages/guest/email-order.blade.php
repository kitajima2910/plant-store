@php
    $cartContents = $content;
@endphp
<h4>Chào {!! auth()->guard('customers')->user()->name !!},</h4>
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
        @endphp
        @foreach($cartContents as $item)
            <tr>
                <td scope="row">{!! ++$i !!}</td>
                <td>{!! $item->name !!}</td>
                <td>{!! number_format($item->price, 0, ',', '.') !!} VNĐ</td>
                <td>{!! $item->qty !!}</td>
                <td>{!! number_format($item->price * $item->qty, 0, ',', '.') !!} VNĐ</td>
            </tr>
        @endforeach
    </tbody>
</table>
<span><strong>Tổng tiền: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! number_format($totalCart, 0, ',',
        '.') !!} VNĐ</strong></span>
<hr>
<h4>Cảm ơn bạn!</h4>
<h4>Plan Store</h4>
