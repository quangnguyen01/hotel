@extends('clients.pages')
@section('title-page')
    Giới thiệu
@endsection
@section('title-link')
    Về chúng tôi
@endsection
@section('page-content')
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                    <h1 class="mb-4">Chào mừng tới <span class="text-primary text-uppercase">Merry House</span></h1>
                    <p class="mb-4">Nằm trong quần thể Vinhomes Imperia,
                         MerryHouse là khu căn hộ cao cấp với đầy đủ công năng và dịch vụ.
                         Chúng tôi không chỉ cung cấp các loại căn hộ mà còn cung cấp dịch vụ cao cấp đi kèm.
                          Bên cạnh đó, cùng với dịch vụ chuyên nghiệp sẽ mang đến cho khách hàng những trải nghiệm tuyệt
                          vời khi nghỉ dưỡng tại căn hộ MerryHouse</p>
                    <div class="row g-3 pb-4">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">100</h2>
                                    <p class="mb-0">Rooms</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">40</h2>
                                    <p class="mb-0">Staffs</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">3000</h2>
                                    <p class="mb-0">Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Khám phá thêm</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="/assets/images/logo3.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="/assets/images/logo4.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="/assets/images/logo6.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="/assets/images/logo7.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
{{--    <div class="container-xxl py-5">--}}
{{--        <div class="container">--}}
{{--            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                <h6 class="section-title text-center text-primary text-uppercase">Our Team</h6>--}}
{{--                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Staffs</span></h1>--}}
{{--            </div>--}}
{{--            <div class="row g-4">--}}
{{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                    <div class="rounded shadow overflow-hidden">--}}
{{--                        <div class="position-relative">--}}
{{--                            <img class="img-fluid" src="/assets/images/team-1.jpg" alt="">--}}
{{--                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">--}}
{{--                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="text-center p-4 mt-3">--}}
{{--                            <h5 class="fw-bold mb-0">Full Name</h5>--}}
{{--                            <small>Designation</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                    <div class="rounded shadow overflow-hidden">--}}
{{--                        <div class="position-relative">--}}
{{--                            <img class="img-fluid" src="/assets/images/team-2.jpg" alt="">--}}
{{--                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">--}}
{{--                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="text-center p-4 mt-3">--}}
{{--                            <h5 class="fw-bold mb-0">Full Name</h5>--}}
{{--                            <small>Designation</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">--}}
{{--                    <div class="rounded shadow overflow-hidden">--}}
{{--                        <div class="position-relative">--}}
{{--                            <img class="img-fluid" src="/assets/images/team-3.jpg" alt="">--}}
{{--                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">--}}
{{--                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="text-center p-4 mt-3">--}}
{{--                            <h5 class="fw-bold mb-0">Full Name</h5>--}}
{{--                            <small>Designation</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">--}}
{{--                    <div class="rounded shadow overflow-hidden">--}}
{{--                        <div class="position-relative">--}}
{{--                            <img class="img-fluid" src="/assets/images/team-4.jpg" alt="">--}}
{{--                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">--}}
{{--                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>--}}
{{--                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>--}}
{{--                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="text-center p-4 mt-3">--}}
{{--                            <h5 class="fw-bold mb-0">Full Name</h5>--}}
{{--                            <small>Designation</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Team End -->
@endsection
