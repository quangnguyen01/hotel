@extends('clients.pages')
@section('title-page')
    Chi tiết căn hộ
@endsection
@section('title-link')
    Chi tiết
@endsection
@section('page-content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-8">
                    <div id="room-carousel" class="carousel slide mb-5 wow fadeIn" data-bs-ride="carousel" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="carousel-inner">
                            @if($room)
                                    <?php
                                    $images = explode(',', $room->images);
                                    ?>
                                @foreach($images as $item)
                                    @if($item != end($images))
                                        <div class="carousel-item @if($images[0] == $item) active @endif">
                                            <img class="w-100" src="{{$item}}" alt="Image" style="height: 500px;object-fit: cover">
                                        </div>
                                    @endif
                                @endforeach
                            @endif
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
                        <h1 class="mb-0">{{$room->name}}</h1>
                        <div class="ps-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap pb-4 m-n1">
                        <small class="bg-light rounded py-1 px-3 m-1" data-toggle="tooltip" data-placement="top" title="Độ rộng: 1m6x2m"><i class="fa fa-bed text-primary me-2"></i>1 Bed </small>
                        <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                        <small class="bg-light rounded py-1 px-3 m-1" data-toggle="tooltip" data-placement="top" title="Free"><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                        <small class="bg-light rounded py-1 px-3 m-1" data-toggle="tooltip" data-placement="top" title="Màn hình 42 inch"><i class="fa fa-tv text-primary me-2"></i>TV</small>
                        <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-fan text-primary me-2"></i>AC</small>
                        <small class="bg-light rounded py-1 px-3 m-1" data-toggle="tooltip" data-placement="top" title="Free"><i class="fa fa-user-cog text-primary me-2"></i>Laundry</small>
                        <small class="bg-light rounded py-1 px-3 m-1" data-toggle="tooltip" data-placement="top" title="Free"><i class="fa fa-utensils text-primary me-2"></i>Dinner</small>
                    </div>
                    <div>
                    {!! html_entity_decode($room->description) !!}
                    </div>
                    <div class="tab-class wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                        <ul class="nav nav-pills d-flex justify-content-between border-bottom mb-4">
                            <li class="nav-item">
                                <a class="d-flex align-items-center py-3 active" data-bs-toggle="pill" href="#tab-1">
                                    <i class="fa fa-eye text-primary me-2"></i>
                                    <h6 class="mb-0">Tổng quan</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center py-3" data-bs-toggle="pill" href="#tab-2">
                                    <i class="fa fa-dollar text-primary me-2"></i>
                                    <h6 class="mb-0">Giá</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center py-3" data-bs-toggle="pill" href="#tab-3">
                                    <i class="fa fa-map-marker-alt text-primary me-2"></i>
                                    <h6 class="mb-0">Địa chỉ</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center py-3" data-bs-toggle="pill" href="#tab-4">
                                    <i class="fa fa-star text-primary me-2"></i>
                                    <h6 class="mb-0" id="review-tab"></h6>
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
                                    <h4 class="mb-4" id="review-title"></h4>
                                    <div id="list-comment">
                                    </div>
                                </div>
                                <div class="bg-light p-4 p-md-5">
                                        <div class="row g-3">
                                            @if(\Illuminate\Support\Facades\Auth::user())
                                                <div class="col-1">
                                                    <img src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}" class="rounded-circle" style="height: 40px; width: 40px;object-fit: cover" alt="">
                                                </div>
                                                <div class="col-11">
                                                    <textarea id="message" class="form-control bg-white border-0" placeholder="Comment" name="message" required></textarea>
                                                    <input id="userId" type="hidden" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" name="user_id">
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary w-100 py-3" id="comment">Để lại đánh giá của bạn</button>
                                                </div>
                                            @else
                                                <div class="col-12">
                                                    <a class="btn btn-primary w-100 py-3" href="{{route('login')}}">Đăng nhập để đánh giá</a>
                                                </div>
                                            @endif
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">

                    <div class="bg-light mb-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="border-bottom text-center text-dark p-3 pt-4 mb-3">
                            <span class="align-top fs-4 lh-base">đ</span>
                            <span class="align-middle fs-1 lh-sm fw-bold">{{number_format($room->price, 0, ',', '.')}}</span>
                            <span class="align-bottom fs-6 lh-lg">/ Ngày</span>
                        </div>
                        <form action="{{route('booking')}}" method="post">
                            @csrf
                        <div class="row g-3 p-4 pt-2">

                                <div class="col-12">
                                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{\Illuminate\Support\Facades\Auth::user() ? \Illuminate\Support\Facades\Auth::user()->name : ''}}">
                                    @error('name')
                                    <div style="color: red">* {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{\Illuminate\Support\Facades\Auth::user() ? \Illuminate\Support\Facades\Auth::user()->email : ''}}">
                                    @error('email')
                                    <div style="color: red">* {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{\Illuminate\Support\Facades\Auth::user() ? \Illuminate\Support\Facades\Auth::user()->phone_number : ''}}">
                                    @error('phone')
                                    <div style="color: red">* {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-8">
                                    <div class="date">
                                        <input type="date" name="check_in_date" class="form-control" placeholder="Check in" min="{{\Carbon\Carbon::now()->toDateString()}}">
                                        @error('check_in_date')
                                        <div style="color: red">* {{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="date">
                                        <input type="time" name="check_in_time" class="form-control" placeholder="Check in time">
                                        @error('check_in_time')
                                        <div style="color: red">* {{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="date">
                                        <input type="date" name="check_out_date" class="form-control" placeholder="Check out" min="{{\Carbon\Carbon::now()->toDateString()}}">
                                        @error('check_out_date')
                                        <div style="color: red">* {{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="date">
                                        <input type="time" name="check_out_time" class="form-control" placeholder="Check out time">
                                        @error('check_out_time')
                                        <div style="color: red">* {{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <select class="form-select" name="adult">
                                        <option selected hidden>Người lớn</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    @error('adult')
                                    <div style="color: red">* {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <select class="form-select" name="child">
                                        <option selected hidden>Trẻ em</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    @error('child')
                                    <div style="color: red">* {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" name="special_request" placeholder="Special Request"></textarea>
                                </div>
                                <input type="hidden" name="price" value="{{$room->price}}">
                                <input type="hidden" name="room_id" value="{{$room->id}}" id="roomId">
                                <input type="hidden" name="route" value="success">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary py-3 w-100">Đặt ngay</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="border p-1 wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                        <div class="border p-4">
                            <h4 class="section-title text-start mb-4">Hỗ trợ</h4>
                            <p>Nếu có bất kì câu hỏi hay thắc mắc nào vui lòng liên hệ với chúng tôi qua Số điện thoại</p>
                            <div class="bg-primary text-center p-3">
                                <h4 class="text-white m-0">(+84) 987 808 998</h4>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row mt-4">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Có thể bạn quan tâm</h6>
                </div>
                <div class="row g-4">
                    @foreach($rooms as $room)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="position-relative text-center">
                                    <img class="img-fluid" src="{{explode(',', $room->images)[0]}}" alt="" style="object-fit: cover; height: 200px; width: 100%;">
                                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">{{number_format($room->price, 0, ',', '.')}} đ/Ngày</small>
                                </div>
                                <div class="p-4 mt-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">{{$room->name}}</h5>
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
                                    <p class="text-body mb-3">Căn hộ có máy lạnh và có lối vào riêng, 1 phòng khách, 2 phòng ngủ riêng biệt và 2 phòng tắm với bồn tắm cùng vòi sen </p>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{@route('room-detail', $room->id)}}">Đặt phòng</a>
                                        <a class="btn btn-sm btn-dark rounded py-2 px-4" href="/room-detail/{{$room->id}}#tab-4">Xem đánh giá</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
@section('mix_js')
    <script>
        document.addEventListener("DOMContentLoaded", (event) => {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#comment').click(async function () {
                const data = {
                    user_id: $('#userId').val(),
                    message: $('#message').val()
                }
                const id = $('#roomId').val()
                await $.post(`/comments/room/${id}`, data, function (data, status) {
                    $('#message').val('')
                })
                getComments();
            })

            getComments();
            scrollToReviewTab();

            function getComments() {
                let comments = [];
                const id = $('#roomId').val()
                $.get(`/comments/room/${id}`, function (data, status) {
                    $.each(data, function(idx, val) {
                        comments += `<div class="d-flex mb-4">
                                        <img src="${val.user.avatar}" class="img-fluid rounded-circle" style="width: 45px; height: 45px;">
                                        <div class="ps-3">
                                            <h6>${val.user.name} <small class="text-body fw-normal fst-italic">${formatDate(val.created_at)}</small></h6>
                                            <p class="mb-2">${val.message}</p>
                                        </div>
                                    </div>`
                    })
                    $('#list-comment').html(comments);
                    $('#review-tab').text(`Đánh giá (${data.length})`);
                    $('#review-title').text(`${data.length} Đánh giá`);
                })
            }

            function scrollToReviewTab() {
                const id = window.location.href.split('#').pop();
                if (id) {
                    document.getElementById(id).classList.add('active');
                    window.scrollTo(0, 3300);
                }
            }

            function formatDate(data) {
                const date = new Date(data);
                const yyyy = date.getFullYear();
                let mm = date.toLocaleString('default', {month: 'short'});
                let dd = date.getDate();

                if (dd < 10) dd = '0' + dd;

                return dd + ' ' + mm + ' ' + yyyy;
            }
        });
    </script>
@endsection
