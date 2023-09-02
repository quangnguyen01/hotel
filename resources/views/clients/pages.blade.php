@extends('clients.master')
@section('cover')
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url('/assets/images/logo2.jpg');">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">@yield('title-page')</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="{{ route('home-page') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">@yield('title-link')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection
@section('content')
    @yield('page-content')
@endsection

@section('custom_css')@yield('mix_css')@endsection

@section('custom_js')@yield('mix_js')@endsection
