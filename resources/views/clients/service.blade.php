@extends('clients.pages')
@section('title-page')
    Services
@endsection
@section('title-link')
    Services
@endsection
@section('page-content')
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
                        <p class="text-body mb-0">Merry House Hải Phòng có nhiều loại căn hộ khác nhau, từ studio đến căn hộ 3 phòng ngủ, phù hợp với nhu cầu của mọi khách hàng.</p>
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
                        <p class="text-body mb-0">Có nhiều cửa hàng ăn uống  với các món ăn từ Việt Nam, Trung Quốc, Hàn Quốc, Nhật Bản, Thái Lan, Âu Mỹ.</p>
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
                        <p class="text-body mb-0">Có một spa cao cấp với các liệu pháp massage, chăm sóc da và tóc. Spa cũng có một phòng xông hơi ướt và xông hơi khô.</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <a class="service-item rounded" href="">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-swimmer fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Sports & Gaming</h5>
                        <p class="text-body mb-0">Khu phức hợp thể thao của Vinhomes Imperia có một sân tennis, một sân bóng rổ và một sân bóng đá mini. Khu phức hợp cũng có một phòng tập gym và một bể bơi.</p>
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
                        <p class="text-body mb-0">Sảnh sự kiện của Vinhomes Imperia có sức chứa lên đến 1.000 khách. Sảnh có đầy đủ trang thiết bị âm thanh và ánh sáng, phù hợp cho các sự kiện lớn như hội nghị, hội thảo, tiệc cưới.</p>
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
                        <p class="text-body mb-0">Phòng tập gym có diện tích 200m2 và có đầy đủ các loại máy tập, bao gồm máy chạy bộ, máy đạp xe, máy tập tạ, máy tập cơ bụng,... Phòng tập gym cũng có một khu vực yoga với các thảm yoga và các dụng cụ yoga khác.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="container-xxl testimonial mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" style="margin-bottom: 90px;">
        <div class="container">
            <div class="owl-carousel testimonial-carousel py-5">
                <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                    <p>Tôi đã tham gia một lớp yoga tại trung tâm thể dục của Merry House Hải Phòng và tôi rất thích. Giáo viên yoga rất nhiệt tình và hướng dẫn rất tốt.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="/assets/images/testimonial-1.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Ngọc</h6>
                            <small>Hải Phòng</small>
                        </div>
                    </div>
                    <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                </div>
                <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                    <p>Tôi rất thích tầm nhìn từ phòng của mình tại Merry House. Tôi có thể nhìn thấy toàn cảnh thành phố và nó thật tuyệt vời. Tôi cũng đánh giá cao sự yên tĩnh của khu vực, vì vậy tôi có thể thư giãn và nghỉ ngơi sau một ngày dài</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="/assets/images/testimonial-2.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Huy</h6>
                            <small>Ha Nội</small>
                        </div>
                    </div>
                    <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                </div>
                <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                    <p>Merry House là một địa điểm tuyệt vời để tổ chức các sự kiện và tiệc tùng. Nơi đây có không gian rộng rãi, thoáng mát, được trang trí đẹp mắt và hiện đại. Nhân viên rất nhiệt tình và chu đáo, giúp tôi tổ chức một sự kiện thành công và đáng nhớ.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="/assets/images/testimonial-3.jpg" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6 class="fw-bold mb-1">Nam</h6>
                            <small>TP.Hồ Chí Minh</small>
                        </div>
                    </div>
                    <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
