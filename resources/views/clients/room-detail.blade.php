@extends('clients.pages')
@section('title-page')
    Room Detail
@endsection
@section('title-link')
    Room Detail
@endsection
@section('page-content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-8">
                    <div id="room-carousel" class="carousel slide mb-5 wow fadeIn" data-bs-ride="carousel" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img class="w-100" src="/assets/images/1.1.jpg" alt="Image">
                            </div>
                            <div class="carousel-item active">
                                <img class="w-100" src="/assets/images/1.2.jpg" alt="Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="/assets/images/1.3.jpg" alt="Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="/assets/images/1.4.jpg" alt="Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="/assets/images/1.6.jpg" alt="Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="/assets/images/1.7.jpg" alt="Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="/assets/images/1.8.jpg" alt="Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="/assets/images/1.9.jpg" alt="Image">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#room-carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#room-carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <h1 class="mb-0">Phòng Standard</h1>
                        <div class="ps-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap pb-4 m-n1">
                        <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-bed text-primary me-2"></i>1 Bed</small>
                        <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                        <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                        <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-tv text-primary me-2"></i>TV</small>
                        <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-fan text-primary me-2"></i>AC</small>
                        <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-user-cog text-primary me-2"></i>Laundry</small>
                        <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-utensils text-primary me-2"></i>Dinner</small>
                    </div>
                    <p>
                    Tọa lạc tại thành phố Hải Phòng, Merry House Imperia có WiFi miễn phí, khu vườn, sảnh khách chung và quầy bar.
                    Chỗ nghỉ được bố trí máy điều hòa,
                    bếp ăn đầy đủ tiện nghi với khu vực ăn uống,
                    TV màn hình phẳng cũng như phòng tắm riêng đi kèm vòi xịt/chậu rửa vệ sinh,
                    đồ vệ sinh cá nhân miễn phí và máy sấy tóc. Các căn còn được trang bị tủ lạnh, l
                    ò vi sóng, bếp nấu ăn và ấm đun nước.
                    </p>
                    <p class="mb-5">Khách sạn căn hộ này cũng có sân chơi cho trẻ em.
                                    Merry House Imperia nằm cách Nhà Hát Lớn Hải Phòng 3km và trung tâm thương mại Vincom Plaza Hải Phòng 3,5 km.
                                    Sân bay gần nhất là sân bay quốc tế Cát Bi, cách đó 10 km,
                                    và chỗ nghỉ cung cấp dịch vụ đưa đón sân bay với một khoản phụ phí.
                    </p>
                    <div class="tab-class wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                        <ul class="nav nav-pills d-flex justify-content-between border-bottom mb-4">
                            <li class="nav-item">
                                <a class="d-flex align-items-center py-3 active" data-bs-toggle="pill" href="#tab-1">
                                    <i class="fa fa-eye text-primary me-2"></i>
                                    <h6 class="mb-0">Overview</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center py-3" data-bs-toggle="pill" href="#tab-2">
                                    <i class="fa fa-dollar text-primary me-2"></i>
                                    <h6 class="mb-0">Price</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center py-3" data-bs-toggle="pill" href="#tab-3">
                                    <i class="fa fa-map-marker-alt text-primary me-2"></i>
                                    <h6 class="mb-0">Location</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center py-3" data-bs-toggle="pill" href="#tab-4">
                                    <i class="fa fa-star text-primary me-2"></i>
                                    <h6 class="mb-0">Reviews(3)</h6>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <p>Căn hộ máy lạnh này có lối vào riêng, 1 phòng khách,
                                     2 phòng ngủ riêng biệt và 1 phòng tắm với bồn tắm cùng vòi sen.
                                    Trong nhà bếp đầy đủ tiện nghi, du khách sẽ tìm thấy bếp nấu ăn,
                                    tủ lạnh, đồ dùng nhà bếp và lò vi sóng. Căn hộ có tường cách âm,
                                    khu vực tiếp khách, khu vực ăn uống, tủ quần áo và TV màn hình phẳng.
                                     Các đơn vị cung cấp 3 giường..
                                </p>
                            </div>
                            <div id="tab-2" class="tab-pane fade show p-0">
                                <p>
                                </p>
                                <div class="row g-4">
                                    <div class="col-sm-6 d-flex align-items-center justify-content-between">
                                        <span>Nightly:</span>
                                        <hr class="flex-grow-1 my-0 mx-3">
                                        <span>850.000VND</span>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-between">
                                        <span>Weekly:</span>
                                        <hr class="flex-grow-1 my-0 mx-3">
                                        <span>5.900.000VND</span>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-between">
                                        <span>Monthly:</span>
                                        <hr class="flex-grow-1 my-0 mx-3">
                                        <span>18.000.000VND</span>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-between">
                                        <span>Weekends:</span>
                                        <hr class="flex-grow-1 my-0 mx-3">
                                        <span>850.000VND</span>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-between">
                                        <span>Additional Guest:</span>
                                        <hr class="flex-grow-1 my-0 mx-3">
                                        <span>150.000VND</span>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center justify-content-between">
                                        <span>Security Deposit:</span>
                                        <hr class="flex-grow-1 my-0 mx-3">
                                        <span>500.000VND</span>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane fade show p-0">
                                <div class="row g-4 mb-4">
                                    <div class="col-md-4 d-flex align-items-center">
                                        <div class="flex-shrink-0 border rounded p-1 me-3" style="width: 45px; height: 45px;">
                                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                                <i class="fa fa-map-marker-alt text-primary"></i>
                                            </div>
                                        </div>
                                        <span>BH 04 – 12A, Vinhomes Imperia, Hai Phong city</span>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-center">
                                        <div class="flex-shrink-0 border rounded p-1 me-3" style="width: 45px; height: 45px;">
                                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                                <i class="fa fa-phone-alt text-primary"></i>
                                            </div>
                                        </div>
                                        <span>+012 345 67890</span>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-center">
                                        <div class="flex-shrink-0 border rounded p-1 me-3" style="width: 45px; height: 45px;">
                                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                                <i class="fa fa-envelope text-primary"></i>
                                            </div>
                                        </div>
                                        <span>info@example.com</span>
                                    </div>
                                </div>
                                <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Vinhomes Imperia Hải Phòng&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Game</a>
                        </div>
                            <style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style>
                        </div>
                            </div>
                            <div id="tab-4" class="tab-pane fade show p-0">
                                <div class="mb-4">
                                    <h4 class="mb-4">3 Reviews</h4>
                                    <div class="d-flex mb-4">
                                        <img src="/assets/images/team-1.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                                        <div class="ps-3">
                                            <h6>Dương <small class="text-body fw-normal fst-italic">18 Aug 2023</small></h6>
                                            <div class="mb-2">
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                            </div>
                                            <p class="mb-2">Sạch sẽ, giá rẻ, nhân viên phục vụ tận tình, khá gần trung tâm</p>
                                            <a href=""><i class="fa fa-reply me-2"></i> Reply</a>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-4">
                                        <img src="/assets/images/team-1.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                                        <div class="ps-3">
                                            <h6>Kiều <small class="text-body fw-normal fst-italic">08 Aug 2023</small></h6>
                                            <div class="mb-2">
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                            </div>
                                            <p class="mb-2">Không gian yên tĩnh, nhân viên lễ phép chu đáo,
                                                 phòng sạch sẽ đầy đủ tiện nghi. Nước nóng luôn có và có free 2 chai nước trong phòng.
                                                 Nhân viên có hỗ trợ thêm về check in cũng như check out.</p>
                                            <a href=""><i class="fa fa-reply me-2"></i> Reply</a>
                                        </div>
                                    </div>
                                    <div class="d-flex ms-5 mb-4">
                                        <img src="/assets/images/team-1.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                                        <div class="ps-3">
                                            <h6>Thi <small class="text-body fw-normal fst-italic">17 Aug 2023</small></h6>
                                            <div class="mb-2">
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                            </div>
                                            <p class="mb-2">Phòng sang trọng đẹp. Giá lại ưu dai, căn hộ trong khu vinhome rất đẹp, yên tĩnh cao cấp. Mình rất thích</p>
                                            <a href=""><i class="fa fa-reply me-2"></i> Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-light p-4 p-md-5">
                                    <h4 class="mb-4">Leave A Review</h4>
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-12 d-flex align-items-center">
                                                <h6 class="mb-0 me-2">Rate Me:</h6>
                                                <div id="halfstarsReview" class="fs-3 me-2" rating="true" style="color: rgb(254, 161, 22);"><i class="far fa-star" style="cursor: pointer;"></i><i class="far fa-star" style="cursor: pointer;"></i><i class="far fa-star" style="cursor: pointer;"></i><i class="far fa-star" style="cursor: pointer;"></i><i class="far fa-star" style="cursor: pointer;"></i></div>
                                                <input type="text" value="" readonly="" id="halfstarsInput" class="border-0 bg-transparent" style="width: 30px;">
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <input type="text" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;">
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <input type="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;">
                                            </div>
                                            <div class="col-12">
                                                <input type="text" class="form-control bg-white border-0" placeholder="Website" style="height: 55px;">
                                            </div>
                                            <div class="col-12">
                                                <textarea class="form-control bg-white border-0" rows="5" placeholder="Comment"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Review</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">

                    <div class="bg-light mb-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="border-bottom text-center text-dark p-3 pt-4 mb-3">
                            <span class="align-top fs-4 lh-base">$</span>
                            <span class="align-middle fs-1 lh-sm fw-bold">49.00</span>
                            <span class="align-bottom fs-6 lh-lg">/ Day</span>
                        </div>
                        <div class="row g-3 p-4 pt-2">
                            <div class="col-12">
                                <div class="date" id="date3" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" placeholder="Check in" data-target="#date3" data-toggle="datetimepicker">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="date" id="date4" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date4" data-toggle="datetimepicker">
                                </div>
                            </div>
                            <div class="col-12">
                                <select class="form-select">
                                    <option selected="">Adult</option>
                                    <option value="1">Adult 1</option>
                                    <option value="2">Adult 2</option>
                                    <option value="3">Adult 3</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <select class="form-select">
                                    <option selected="">Child</option>
                                    <option value="1">Child 1</option>
                                    <option value="2">Child 2</option>
                                    <option value="3">Child 3</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <select class="form-select">
                                    <option selected="">Night</option>
                                    <option value="1">Night 1</option>
                                    <option value="2">Night 2</option>
                                    <option value="3">Night 3</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 w-100">Book Now</button>
                            </div>
                        </div>
                    </div>


                    <div class="bg-light p-4 mb-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                        <h4 class="section-title text-start mb-4">Category</h4>
                        <a class="d-block position-relative mb-3" href="">
                            <img class="img-fluid" src="/assets/images/room-1.jpg" alt="">
                            <div class="d-flex position-absolute top-0 start-0 w-100 h-100 p-3" style="background: rgba(0,0,0,.3);">
                                <h5 class="text-white m-0 mt-auto">luxury Room</h5>
                            </div>
                        </a>
                        <a class="d-block position-relative mb-3" href="">
                            <img class="img-fluid" src="/assets/images/room-2.jpg" alt="">
                            <div class="d-flex position-absolute top-0 start-0 w-100 h-100 p-3" style="background: rgba(0,0,0,.3);">
                                <h5 class="text-white m-0 mt-auto">Couple Room</h5>
                            </div>
                        </a>
                        <a class="d-block position-relative" href="">
                            <img class="img-fluid" src="/assets/images/room-3.jpg" alt="">
                            <div class="d-flex position-absolute top-0 start-0 w-100 h-100 p-3" style="background: rgba(0,0,0,.3);">
                                <h5 class="text-white m-0 mt-auto">Single Room</h5>
                            </div>
                        </a>
                    </div>


                    <div class="border p-1 wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                        <div class="border p-4">
                            <h4 class="section-title text-start mb-4">Help &amp; Support</h4>
                            <p>Nếu có bất kì câu hỏi hay thắc mắc nào vui lòng liên hệ với chúng tôi qua Số điện thoại</p>
                            <div class="bg-primary text-center p-3">
                                <h4 class="text-white m-0">(+84) 987 808 998</h4>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
