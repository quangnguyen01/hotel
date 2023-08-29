@extends('clients.master')
@section('content')
    <div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-check-circle-fill display-1 text-success"></i>
                    <h1 class="">Đặt phòng</h1>
                    <h1 class="mb-4 display-1">Thành công</h1>
                    <p class="mb-4">Cảm ơn quý khách đã đặt phòng, xin quý khách vui lòng chờ để được xác nhận lại thông tin đặt phòng</p>
                    <a class="btn btn-primary py-3 px-5" href="{{route('home-page')}}">Quay về trang chủ</a>
                </div>
            </div>
        </div>
    </div>
@endsection
