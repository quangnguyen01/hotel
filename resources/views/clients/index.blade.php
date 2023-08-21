@extends('clients.master')

@section('cover')
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="/assets/images/LOGO1.jpg" alt="Image" style="height: 500px;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Luxury Living</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">Luxury Apartment</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="/assets/images/logo2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Luxury Living</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">Luxury Apartment</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection

@section('content')
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">Merry House</span></h1>
                    <p class="mb-4">Nằm trong quần thể Vinhomes Imperia,
                         MerryHouse là khu căn hộ cao cấp với đầy đủ công năng và dịch vụ. 
                         Chúng tôi không chỉ cung cấp các loại căn hộ mà còn cung cấp dịch vụ cao cấp đi kèm.
                          Bên cạnh đó, cùng với dịch vụ chuyên nghiệp sẽ mang đến cho khách hàng những trải nghiệm tuyệt 
                          vời khi nghỉ dưỡng tại căn hộ MerryHouse.</p>
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
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="/assets/images/logo3.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="/assets/images/logo4.jpg">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Room Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
<<<<<<< HEAD
                            <img class="img-fluid" src="/assets/images/1.9.jpg" alt="" style="height:300px">
                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">850.000VND/Night</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Deluxe Room</h5>
=======
                            <img class="img-fluid" src="/assets/images/room-1.jpg" alt="">
                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">550.000VND/Day</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Phòng Standard</h5>
>>>>>>> 83e3f5b1acdd9c403137656c655d5cd530dd32b6
                                <div class="ps-2">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
<<<<<<< HEAD
                                <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Bed</small>
                                <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                            </div>
                            <p class="text-body mb-3">Boasting a private entrance, this air-conditioned apartment features 1 living room, 1 separate bedroom and 1 bathroom with a bath and a shower. </p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4"href="{{@route('room-detail')}}">View Detail</a>
=======
                                <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed</small>
                                <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                            </div>
                            <p class="text-body mb-3">Căn hộ có máy lạnh và có lối vào riêng, 1 phòng khách, 2 phòng ngủ riêng biệt và 1 phòng tắm với bồn tắm cùng vòi sen.</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{@route('room-detail')}}">Xem Phòng</a>
>>>>>>> 83e3f5b1acdd9c403137656c655d5cd530dd32b6
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
<<<<<<< HEAD
                            <img class="img-fluid" src="/assets/images/4.6.jpg" alt="" style="height:300px">
                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">650.000VND/Night</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Studio Room</h5>
=======
                            <img class="img-fluid" src="/assets/images/room-2.jpg" alt="">
                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">600.000VND/Day</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Phòng Suite</h5>
>>>>>>> 83e3f5b1acdd9c403137656c655d5cd530dd32b6
                                <div class="ps-2">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
<<<<<<< HEAD
                                <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Bed</small>
                                <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                            </div>
                            <p class="text-body mb-3">This studio is air-conditioned and has a seating area with a flat-screen TV, a private entrance, soundproof walls, a dining area, as well as a wardrobe. The unit has 1 bed.</p>
=======
                                <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed</small>
                                <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                            </div>
                            <p class="text-body mb-3">Căn hộ có máy lạnh và có lối vào riêng, 1 phòng khách, 2 phòng ngủ riêng biệt và 2 phòng tắm với bồn tắm cùng vòi sen </p>
>>>>>>> 83e3f5b1acdd9c403137656c655d5cd530dd32b6
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{@route('room-detail')}}">Xem Phòng</a>
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
<<<<<<< HEAD
                            <img class="img-fluid" src="/assets/images/5.1.jpg" alt="" style="height:300px">
                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">1.100.000VND/Night</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Two Bed Rooom</h5>
=======
                            <img class="img-fluid" src="/assets/images/room-3.jpg" alt="">
                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">700.000VND/Dayt</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Phòng Deluxe</h5>
>>>>>>> 83e3f5b1acdd9c403137656c655d5cd530dd32b6
                                <div class="ps-2">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed</small>
                                <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                            </div>
<<<<<<< HEAD
                            <p class="text-body mb-3">The apartment provides 2 sleeping room, soundproof walls, a seating area, a dining area, a wardrobe and a flat-screen TV. The unit offers 3 beds.</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
=======
                            <p class="text-body mb-3">Căn hộ có máy lạnh và có lối vào riêng, 1 phòng khách, 2 phòng ngủ riêng biệt và 2 phòng tắm với bồn tắm cùng vòi sen.</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{@route('room-detail')}}">Xem Phòng</a>
>>>>>>> 83e3f5b1acdd9c403137656c655d5cd530dd32b6
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Room End -->


    <!-- Video Start -->
    <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
        <div class="row g-0">
            <div class="col-md-12 bg-dark">
                <div class="p-5">
                    <h6 class="section-title text-start text-white text-uppercase mb-3">Category</h6>
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-fluid" src="/assets/images/room-1.jpg" alt="">
                            <div class="w-100 p-3" style="background: rgba(0,0,0,.3);">
                                <h5 class="text-white m-0 mt-auto">luxury Room</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="/assets/images/room-1.jpg" alt="">
                            <div class="w-100 p-3" style="background: rgba(0,0,0,.3);">
                                <h5 class="text-white m-0 mt-auto">luxury Room</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="/assets/images/room-1.jpg" alt="">
                            <div class="w-100 p-3" style="background: rgba(0,0,0,.3);">
                                <h5 class="text-white m-0 mt-auto">luxury Room</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-hotel fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Rooms & Appartment</h5>
<<<<<<< HEAD
                        <p class="text-body mb-0">Fully furnished apartment for you to live comfortably.</p>
=======
                        <p class="text-body mb-0">Merry House Hải Phòng có nhiều loại căn hộ khác nhau, từ studio đến căn hộ 3 phòng ngủ, phù hợp với nhu cầu của mọi khách hàng.</p>
>>>>>>> 83e3f5b1acdd9c403137656c655d5cd530dd32b6
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Food & Restaurant</h5>
<<<<<<< HEAD
                        <p class="text-body mb-0">There are many restaurants around the apartment you live in for you to choose from.</p>
=======
                        <p class="text-body mb-0">Có nhiều cửa hàng ăn uống  với các món ăn từ Việt Nam, Trung Quốc, Hàn Quốc, Nhật Bản, Thái Lan, Âu Mỹ.</p>
>>>>>>> 83e3f5b1acdd9c403137656c655d5cd530dd32b6
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-spa fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Spa & Fitness</h5>
<<<<<<< HEAD
                        <p class="text-body mb-0">Right in your area there are places for you to exercise and relax</p>
=======
                        <p class="text-body mb-0">Có một spa cao cấp với các liệu pháp massage, chăm sóc da và tóc. Spa cũng có một phòng xông hơi ướt và xông hơi khô.
                        </p>
>>>>>>> 83e3f5b1acdd9c403137656c655d5cd530dd32b6
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-swimmer fa-2x text-primary"></i>
                            </div>
                        </div>
<<<<<<< HEAD
                        <h5 class="mb-3">Sports</h5>
                        <p class="text-body mb-0">Has its own area to play sports: football, basketball, badminton, tennis</p>
=======
                        <h5 class="mb-3">Sports & Gaming</h5>
                        <p class="text-body mb-0">Khu phức hợp thể thao của Vinhomes Imperia có một sân tennis, một sân bóng rổ và một sân bóng đá mini. Khu phức hợp cũng có một phòng tập gym và một bể bơi</p>
>>>>>>> 83e3f5b1acdd9c403137656c655d5cd530dd32b6
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Event & Party</h5>
<<<<<<< HEAD
                        <p class="text-body mb-0">There is an outdoor party area with a roof and a large enough number of seats</p>
=======
                        <p class="text-body mb-0">Sảnh sự kiện của Vinhomes Imperia có sức chứa lên đến 1.000 khách. Sảnh có đầy đủ trang thiết bị âm thanh và ánh sáng, phù hợp cho các sự kiện lớn như hội nghị, hội thảo, tiệc cưới</p>
>>>>>>> 83e3f5b1acdd9c403137656c655d5cd530dd32b6
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-dumbbell fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">GYM & Yoga</h5>
<<<<<<< HEAD
                        <p class="text-body mb-0">There are many gyms around your apartment and there are trainers as well</p>
=======
                        <p class="text-body mb-0">Phòng tập gym có diện tích 200m2 và có đầy đủ các loại máy tập, bao gồm máy chạy bộ, máy đạp xe, máy tập tạ, máy tập cơ bụng,... Phòng tập gym cũng có một khu vực yoga với các thảm yoga và các dụng cụ yoga khác.</p>
>>>>>>> 83e3f5b1acdd9c403137656c655d5cd530dd32b6
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

@endsection
