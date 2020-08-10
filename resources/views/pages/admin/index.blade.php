@extends('layouts.admin.master')
@section('title', 'Bảng Điều Khiển')
@section('content')

<!-- //market-->
<div class="market-updates">
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-2">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-product-hunt"> </i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Sản phẩm</h4>
                <h3>{!! $totalProduct !!}</h3>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-1">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-users"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Thành viên</h4>
                <h3>{!! $totalUser !!}</h3>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-3">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-usd"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Doanh thu</h4>
                <h3>{!! number_format($totalPrice, 0, ',', '.') !!}</h3>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-4">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Đơn hàng</h4>
                <h3>{!! $totalOrder !!}</h3>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //market-->

<div class="container">
    <div class="row">
        <div class="col-md-6"><canvas id="line-chart-totalProductArray"></canvas></div>
        <div class="col-md-6"><canvas id="line-chart-totalUserArray"></canvas></div>
    </div>
</div>

<textarea class="totalProductArray" style="display: none">{!! json_encode($totalProductArray->toArray()) !!}</textarea>
<textarea class="totalUserArray" style="display: none">{!! json_encode($totalUserArray->toArray()) !!}</textarea>

@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    let totalProductArray = JSON.parse($('.totalProductArray').val());
    let totalUserArray = JSON.parse($('.totalUserArray').val());

    function convertDataToChart(arrayMoth) {
        let totalArrayTmp = [];

        for(let e of arrayMoth) {
            totalArrayTmp.push(+e.created_at.split('-')[1]);
        }

        totalArrayTmp.sort((a, b) => a - b);
        totalArrayTmpMoth = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        for(let e of totalArrayTmp) {
            totalArrayTmpMoth[e-1]++;
        }

        return totalArrayTmpMoth
    }

    console.log(convertDataToChart(totalProductArray));

    window.onload = function () {
        Chart.defaults.global.defaultFontColor = '#000000';
        Chart.defaults.global.defaultFontFamily = 'Arial';
        var lineChartTotalProductArray = document.getElementById('line-chart-totalProductArray');
        var lineChartTotalUserArray = document.getElementById('line-chart-totalUserArray');
        new Chart(lineChartTotalUserArray, {
            type: 'line',
            data: {
                labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
                datasets: [
                    {
                        label: 'Thành Viên',
                        data: convertDataToChart(totalUserArray),
                        backgroundColor: 'rgb(83, 215, 105, .3)',
                        borderColor: 'rgb(83, 215, 105, .7)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
            }
        });

        new Chart(lineChartTotalProductArray, {
            type: 'line',
            data: {
                labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
                datasets: [
                    {
                        label: 'Sản Phẩm',
                        data: convertDataToChart(totalProductArray),
                        backgroundColor: 'rgb(255, 0, 49, .7)',
                        borderColor: 'rgb(255, 0, 49, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
            }
        });
    };

</script>
@endsection
