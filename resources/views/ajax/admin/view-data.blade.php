@php
    $i = 0;
@endphp
@foreach ($orderDetails as $item)
    <tr>
        <td>{!! ++$i !!}</td>
        <td>{!! $item->products[0]->name !!}</td>
        <td>
            <img src="{!! asset($item->products[0]->feature_image_path) !!}" width="70px" height="70px"> 
        </td>
        <td>{!! number_format($item->products[0]->price, 0, ',', '.') !!} VNĐ</td>
        <td>{!! $item->quantity !!}</td>
        <td>{!! number_format($item->price, 0, ',', '.') !!} VNĐ</td>
    </tr>
@endforeach
