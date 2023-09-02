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
                    @foreach($news as $data)
                    <div class="row blog-item m-0 mb-4 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="col-md-5 col-lg-12 col-xl-5 p-0" style="min-height: 300px;">
                            <div class="position-relative overflow-hidden h-100">
                                <img class="position-absolute w-100 h-100" src="{{explode(',', $data->images)[0]}}" alt="" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-12 col-xl-7 h-100 px-0">
                            <div class="p-4">
                                <div class="d-flex mb-3 my-4">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-user-alt text-primary me-2"></i>{{$data->author}}</small>
                                    <small><i class="fa fa-calendar-alt text-primary me-2"></i>{{date_format($data->created_at, 'd M Y')}}</small>
                                </div>
                                <a href="{{route('news-detail-page', $data->id)}}"><h5 class="lh-base mb-0">{{$data->title}}</h5></a>
                            </div>
                            <div class="d-flex align-items-center justify-content-between border-top mt-auto p-4">
                                <a class="btn btn-sm btn-primary rounded py-2 px-3" href="{{route('news-detail-page', $data->id)}}">Read More</a>
                                <div class="me-n1">
                                    <span class="me-1">Share:</span>
                                    <a class="mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @if($news->lastPage() > 1)
                    <div class="row wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <?php
                        // config
                        $link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
                        ?>
                        <div class="col-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center m-0">
                                    <li class="page-item @if($news->currentPage() == 1) disabled @endif">
                                        <a class="page-link rounded-0" href="{{$news->url($news->url(1))}}" aria-label="Previous">
                                            <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                        </a>
                                    </li>
                                    @for ($i = 1; $i <= $news->lastPage(); $i++)
                                            <?php
                                            $half_total_links = floor($link_limit / 2);
                                            $from = $news->currentPage() - $half_total_links;
                                            $to = $news->currentPage() + $half_total_links;
                                            if ($news->currentPage() < $half_total_links) {
                                                $to += $half_total_links - $news->currentPage();
                                            }
                                            if ($news->lastPage() - $news->currentPage() < $half_total_links) {
                                                $from -= $half_total_links - ($news->lastPage() - $news->currentPage()) - 1;
                                            }
                                            ?>
                                        @if ($from < $i && $i < $to)
                                            <li class="page-item {{ ($news->currentPage() == $i) ? ' active' : '' }}"><a class="page-link" href="{{ $news->url($i) }}">{{ $i }}</a></li>
                                        @endif
                                    @endfor
                                    <li class="page-item @if($news->currentPage() == $news->lastPage()) disabled @endif">
                                        <a class="page-link rounded-0" href="{{$news->url($news->lastPage())}}" aria-label="Next">
                                            <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                        @endif
                </div>


                <div class="col-lg-4">

                    <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <form id="filterForm">
                            <div class="input-group">
                                <input type="text" class="form-control p-3" placeholder="Keyword" name="search" id="search">
                                <button class="btn btn-primary px-4" type="submit"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
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


                    <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                        <img src="https://res.cloudinary.com/dn3bmj5ex/image/upload/v1693235300/lwa2xhsozbf4wcexxp6r.jpg" alt="" style="object-fit: cover;width: 100%;height: 300px">
                    </div>


                    <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
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
        let submit = false
        $('#search').click(function () {
            if (submit) {
                $('#filterForm').submit()
            } else {
                submit = true
            }
        })
    </script>
@endsection

