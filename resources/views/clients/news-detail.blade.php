@extends('clients.pages')
@section('title-page')
    Tin tức
@endsection
@section('title-link')
    Tin tức
@endsection
@section('mix_css')
    <style>
        .nav-pills .nav-item .active {
            border-bottom: 2px solid #aa3331;
        }
    </style>
@endsection
@section('page-content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-8">

                    <div id="blog-carousel" class="carousel slide mb-5 wow fadeIn" data-bs-ride="carousel"
                         data-wow-delay="0.1s"
                         style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="carousel-inner">
                            @if($data)
                                    <?php
                                    $images = explode(',', $data->images);
                                    ?>
                                @foreach($images as $item)
                                    @if($item != end($images))
                                        <div class="carousel-item @if($images[0] == $item) active @endif">
                                            <img class="w-100" src="{{$item}}" alt="Image"
                                                 style="height: 500px;object-fit: cover">
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#blog-carousel"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#blog-carousel"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="d-flex mb-3">
                        <span class="border-end me-3 pe-3"><i class="fa fa-user-alt text-primary me-2"></i>{{$data->author}}</span>
                        <span><i class="fa fa-calendar-alt text-primary me-2"></i>{{date_format($data->created_at, 'd M Y')}}</span>
                    </div>
                    <h1 class="mb-4">{{$data->title}}</h1>

                    <div>{!! html_entity_decode($data->content) !!}</div>


                    <div class="border p-1 mb-5 wow fadeIn" data-wow-delay="0.1s"
                         style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                        <div class="d-flex flex-column flex-sm-row border p-4">
                            <img class="img-fluid flex-shrink-0 mb-3 mb-sm-0"
                                 src="{{explode(',', $data->images)[count(explode(',', $data->images)) - 2]}}"
                                 style="width: 100px; height: 100px;object-fit: cover">
                            <div class="ps-sm-3">
                                <h5>{{$data->author}}</h5>
                                <p class="mb-0">
                                    {{$data->author_slogan}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s"
                         style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                        <h4 class="section-title text-start mb-4">Recent Post</h4>
                        @for($i = 0; $i < count($latest); $i++)
                            <div class="d-flex mb-3 @if($i != count($latest) - 1) border-bottom pb-3 @endif">
                                <img class="img-fluid" src="{{explode(',', $latest[$i]->images)[0]}}"
                                     style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                <div class="d-flex flex-column justify-content-center ps-3">
                                    <a href="{{route('news-detail-page', $latest[$i]->id)}}" class="h6 lh-base fw-medium mb-2">{{$latest[$i]->title}}</a>
                                    <div class="d-flex mx-n2">
                                        <small class="mx-2"><i
                                                class="fa fa-user-alt text-primary me-2"></i>{{$latest[$i]->author}}
                                        </small>
                                        <small class="mx-2"><i
                                                class="fa fa-calendar-alt text-primary me-2"></i>{{date_format($latest[$i]->created_at, 'd M Y')}}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>


                    <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s"
                         style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                        <h4 class="section-title text-start mb-4">More Post</h4>
                        <ul class="nav nav-pills d-flex justify-content-between border-bottom mb-3">
                            <li class="nav-item">
                                <a class="d-flex align-items-center pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                    <h6 class="mb-0">Featured</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center pb-3" data-bs-toggle="pill" href="#tab-2">
                                    <h6 class="mb-0">Popular</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex align-items-center pb-3" data-bs-toggle="pill" href="#tab-3">
                                    <h6 class="mb-0">Latest</h6>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                @for($i = 0; $i < count($featured); $i++)
                                    <div class="d-flex mb-3 @if($i != count($featured) - 1) border-bottom pb-3 @endif">
                                        <img class="img-fluid" src="{{explode(',', $featured[$i]->images)[0]}}"
                                             style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href="{{route('news-detail-page', $featured[$i]->id)}}" class="h6 lh-base fw-medium mb-2">{{$featured[$i]->title}}</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i
                                                        class="fa fa-user-alt text-primary me-2"></i>{{$featured[$i]->author}}
                                                </small>
                                                <small class="mx-2"><i
                                                        class="fa fa-calendar-alt text-primary me-2"></i>{{date_format($featured[$i]->created_at, 'd M Y')}}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div id="tab-2" class="tab-pane fade show p-0">
                                @for($i = 0; $i < count($popular); $i++)
                                    <div class="d-flex mb-3 @if($i != count($popular) - 1) border-bottom pb-3 @endif">
                                        <img class="img-fluid" src="{{explode(',', $popular[$i]->images)[0]}}"
                                             style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href="{{route('news-detail-page', $popular[$i]->id)}}" class="h6 lh-base fw-medium mb-2">{{$popular[$i]->title}}</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i
                                                        class="fa fa-user-alt text-primary me-2"></i>{{$popular[$i]->author}}
                                                </small>
                                                <small class="mx-2"><i
                                                        class="fa fa-calendar-alt text-primary me-2"></i>{{date_format($popular[$i]->created_at, 'd M Y')}}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div id="tab-3" class="tab-pane fade show p-0">
                                @for($i = 0; $i < count($latest); $i++)
                                    <div class="d-flex mb-3 @if($i != count($latest) - 1) border-bottom pb-3 @endif">
                                        <img class="img-fluid" src="{{explode(',', $latest[$i]->images)[0]}}"
                                             style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href="{{route('news-detail-page', $latest[$i]->id)}}" class="h6 lh-base fw-medium mb-2">{{$latest[$i]->title}}</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i
                                                        class="fa fa-user-alt text-primary me-2"></i>{{$latest[$i]->author}}
                                                </small>
                                                <small class="mx-2"><i
                                                        class="fa fa-calendar-alt text-primary me-2"></i>{{date_format($latest[$i]->created_at, 'd M Y')}}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('mix_js')
    <script>

        document.addEventListener("scrollend", (event) => {
           if($(window).scrollTop() + $(window).height() > $(document).height() - 441) {
               $.get(`/news/${window.location.href.split('/').pop()}/view`, function (data, status) {
                   console.log(data)
               })
           }
        });
    </script>
@endsection


