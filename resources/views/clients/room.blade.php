@extends('clients.pages')
@section('mix_css')
    <style>
        .category-item {
            position: relative;
            text-align: center;
            color: #0b1120;
        }
        .category-item img {
            border-radius: 10px;
            width: 100%;
            height: 100px;
            object-fit: cover;
            opacity: 0.7;

        }
        .category-item img:hover {
            opacity: 0.5;
            border: 3px solid #aa3331;
        }
        .active-cate {
            opacity: 0.5;
            border: 3px solid #aa3331;
        }
        .bottom-right {
            position: absolute;
            bottom: 10px;
            left: 20px;
        }

    </style>
@endsection
@section('title-page')
    Căn hộ
@endsection
@section('title-link')
    Căn hộ
@endsection
@section('page-content')
    <!-- Room Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <form id="filter-form" class="col-12">
                <input type="hidden" name="category" id="category">
            </form>

            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Loại phòng</h6>
                <div class="row">
                    @foreach(\App\Models\Category::all() as $category)
                        <div class="col-4 category-item btn_category" slot="{{$category->id}}" style="cursor: pointer">
                                <div>
                                    <img class="img-fluid @if(request()->get('category') == $category->id) active-cate @endif " src="{{$category->image}}" alt="">
                                    <div class="bottom-right">
                                        <h5 class="text-white m-0 mt-auto">{{$category->name}}</h5>
                                    </div>
                                </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Phòng của chúng tôi</h6>
                <h1 class="mb-5">Khám phá <span class="text-primary text-uppercase">Căn hộ</span> của chúng tôi</h1>
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
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{@route('room-detail', $room->id)}}">Xem Phòng</a>
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Đặt phòng ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-12 wow slideInUp mb-3" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
        <?php
        // config
        $link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
        ?>
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center m-0">

                <li class="page-item @if($rooms->currentPage() == 1) disabled @endif">
                    <a class="page-link rounded-0" href="{{$rooms->url($rooms->url(1))}}" aria-label="Previous">
                        <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                    </a>
                </li>
                @for ($i = 1; $i <= $rooms->lastPage(); $i++)
                        <?php
                        $half_total_links = floor($link_limit / 2);
                        $from = $rooms->currentPage() - $half_total_links;
                        $to = $rooms->currentPage() + $half_total_links;
                        if ($rooms->currentPage() < $half_total_links) {
                            $to += $half_total_links - $rooms->currentPage();
                        }
                        if ($rooms->lastPage() - $rooms->currentPage() < $half_total_links) {
                            $from -= $half_total_links - ($rooms->lastPage() - $rooms->currentPage()) - 1;
                        }
                        ?>
                    @if ($from < $i && $i < $to)
                        <li class="page-item {{ ($rooms->currentPage() == $i) ? ' active' : '' }}"><a class="page-link" href="{{ $rooms->url($i) }}">{{ $i }}</a></li>
                    @endif
                @endfor

                <li class="page-item @if($rooms->currentPage() == $rooms->lastPage()) disabled @endif">
                    <a class="page-link rounded-0" href="{{$rooms->url($rooms->lastPage())}}" aria-label="Next">
                        <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
    <!-- Room End -->
@endsection

@section('mix_js')
    <script>
        $(document).ready(function () {
            $('.btn_category').click(function () {
                $('#category').val(this.slot)
                $('#filter-form').submit()
            })
        });
    </script>
@endsection
