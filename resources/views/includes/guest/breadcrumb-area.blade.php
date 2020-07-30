<div class="breadcrumb-area">
    <!-- Top Breadcrumb Area -->
    <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center"
        style="background-image: url({{ asset('public/frontend/img/bg-img/24.jpg') }});">
        <h2>{!! $currentPage !!}</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{!! route('guest.home') !!}"><i class="fa fa-home"></i> Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{!! $currentPage !!}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>