@extends('layouts.admin.master')
@section('title', 'Đơn Hàng')
@section('style')
<link rel="stylesheet" href="{{ asset('public/vendors/metro4/datatables/css/datatables.css') }}">
<style>
    #tableCategories thead tr th,
    #tableCategories tbody tr td {
        color: #3c763d;
    }

</style>
@endsection
@section('content')
<div class="table-agile-info tableOrders">
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
                    <th>Phương thức</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr data-expanded="true">
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->phone }}</td>

                        @php
                            $sum = 0;
                            $count = 0;
                        @endphp
                        @foreach ($order->orderDetails as $subItem)
                            @if ($order->id === $subItem->order_id)
                                @php
                                    $sum += $subItem->price * $subItem->quantity;
                                    $count++;
                                @endphp
                            @endif
                        @endforeach
                        <td>{{ number_format($sum + ($count * 5000), 0, ',', '.') }} VNĐ</td>
                        <td>{{ $order->method }}</td>
                        <td>
                            <label style="cursor: pointer; width: 55.38px; height: 20.8px; display: flex; justify-content: center; align-items: center;" id="order-status" data-id="{!! $order->id !!}" class="{{ $order->status == 1 ? 'label label-default' : 'label label-info'}}">{{ $order->status == 1 ? 'Chờ xử lý' : 'Đã xử lý' }}</label>
                        </td>
                        <td>{{ $order->created_at }}</td>
                        <td>
                            <a href="{!! route('admin.order.printOrder', $order->id) !!}" target="_blank" class="btn btn-xs btn-default"><i class="fa fa-file-pdf-o"></i> Xuất</a>
                            <a href="#" data-toggle="modal" data-id="{!! $order->id !!}" data-target="#deleteModal" class="btn btn-xs btn-danger delete"><i class="fa fa-trash"></i> Xoá</a>
                            <a class="btn btn-xs btn-primary btn-view" data-order="{{ $order }}" data-toggle="modal" data-target="#viewModal" href="#" role="button"><i class="fa fa-eye"></i> Xem</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Trigger the modal with a button -->

<!-- Modal -->
<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content" style="width: 960px; position: absolute; top: 0; left: -30%;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title title-order">Chi Tiết Mã Đơn Hàng #1</h4>
            </div>
            <div class="modal-body" style="height: 450px; overflow-y: auto">
                <table class="table striped table-border">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody class="data-table-view"></tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-close-details" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    
    </div>
</div>

<x-confirm-delete>orders.destroy</x-confirm-delete>

@endsection
@section('script')
<script src="{{ asset('public/vendors/metro4/datatables/js/jquery.dataTables.min.js') }}"></script>
<script>
    $('#tableOrders').dataTable();
    
    $(document).on('click', '#order-status', function() {
        let id = $(this).data('id');
        let url = '{!! route("admin.order.ajaxStatus") !!}';

        $.ajax({
            type: "get",
            url: url,
            data: {
                id: id
            },
            success: function (response) {
                if(response.code === 200) {
                    $('.tableOrders').empty();
                    $('.tableOrders').html(response.viewOrdersData);
                    $('#tableOrders').dataTable();
                    setTimeout(function() {
                        alertify.set('notifier', 'position', 'top-right');
                        var delay = alertify.get('notifier','delay');
                        alertify.set('notifier','delay', 2);
                        alertify.success('Đã cập nhật lại trạng thái');
                        alertify.set('notifier','delay', delay);
                    }, 300);
                }
            }
        });
    });

    $(document).on('click', '.btn-view', function() {
        let order = $(this).data('order');
        $('.title-order').text('Chi Tiết Mã Đơn Hàng #' + order.id);

        let id = order.id;
        let url = '{!! route("admin.order.ajaxDetails") !!}';

        $.ajax({
            type: "get",
            url: url,
            data: {
                id: id
            },
            success: function (response) {
                if(response.code === 200) {
                    $('.data-table-view').empty();
                    $('.data-table-view').html(response.viewDetailssData);
                }
            }
        });
    });

    $(document).on('click', '.btn-close-details', function() {
        $('.title-order').text('Chi Tiết Mã Đơn Hàng #');
        $('.data-table-view').empty();
    });
</script>
@endsection
