<div class="panel-heading">
    Danh Sách Đơn Hàng
</div>
{{-- <hr> --}}
{{-- <label>Tổng doanh thu: {!! number_format($totalPrice, 0, ',', '.') !!} VNĐ</label> --}}
{{-- <hr> --}}
<div>
    <table id="tableOrders" class="table striped table-border">
        <thead>
            <tr>
                <th data-breakpoints="xs">ID</th>
                <th>Tên khách hàng</th>
                <th style="width: 10%;">Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr data-expanded="true">
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->phone }}</td>

                    @php
                        $sum = 0;
                    @endphp
                    @foreach ($order->orderDetails as $subItem)
                        @if ($order->id === $subItem->order_id)
                            @php
                                $sum += $subItem->price;
                            @endphp
                        @endif
                    @endforeach
                    <td>{{ number_format($sum, 0, ',', '.') }} VNĐ</td>
                    <td>
                        <label style="cursor: pointer; width: 55.38px; height: 20.8px; display: flex; justify-content: center; align-items: center;" id="order-status" data-id="{!! $order->id !!}" class="{{ $order->status == 1 ? 'label label-default' : 'label label-info'}}">{{ $order->status == 1 ? 'Chờ xử lý' : 'Đã xử lý' }}</label>
                    </td>
                    <td>{{ $order->created_at }}</td>
                    <td>
                        <a href="#" data-toggle="modal" data-id="{!! $order->id !!}" data-target="#deleteModal" class="btn btn-xs btn-danger delete"><i class="fa fa-trash"></i> Xoá</a>
                        <a class="btn btn-xs btn-primary btn-view" data-order="{{ $order }}" data-toggle="modal" data-target="#viewModal" href="#" role="button"><i class="fa fa-eye"></i> Xem</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
