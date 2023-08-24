<div class="container-fluid bg-white px-0">
    <div class="row gx-0">
        <div class="col-lg-3 bg-white d-none d-lg-block">
            <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <img src="/assets/images/logo.png" style="margin-right: 10px">
                <h3 class="m-0 text-primary"><span style="color: #e7792b">Merry</span> <br> House</h3>
            </a>
        </div>
        <div class="col-lg-9">
            <div class="row gx-0 bg-white d-none d-lg-flex">
                <div class="col-lg-7 px-5 text-start">
                    <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                        <i class="fa fa-envelope text-primary me-2"></i>
                        <p class="mb-0">ngocgiang315@gmail.com</p>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-2">
                        <i class="fa fa-phone-alt text-primary me-2"></i>
                        <p class="mb-0">(+84) 987 808 998</p>
                    </div>
                </div>
                <div class="col-lg-5 px-5 text-end">
                    <div class="d-inline-flex align-items-center py-2">
                        <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                        <a class="" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 text-primary text-uppercase">Merry House</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{@route('home-page')}}" class="nav-item nav-link {{@url()->current() === @route('home-page') ? 'active' : ''}}" style="margin-left: 30px">Trang chủ </a>
                        <a href="{{@route('about-page')}}" class="nav-item nav-link {{@url()->current() === @route('about-page') ? 'active' : ''}}">Giới thiệu</a>
                        <a href="{{@route('service-page')}}" class="nav-item nav-link {{@url()->current() === @route('service-page') ? 'active' : ''}}">Dịch vụ</a>
                        <a href="{{@route('room-page')}}" class="nav-item nav-link {{@url()->current() === @route('room-page') ? 'active' : ''}}">Căn hộ</a>
                        <a href="{{@route('room-page')}}" class="nav-item nav-link {{@url()->current() === @route('room-page') ? 'active' : ''}}">Tin tức</a>
                        <a href="{{route('contact-page')}}" class="nav-item nav-link {{@url()->current() === @route('contact-page') ? 'active' : ''}}">Liên hệ</a>
                    </div>
{{--                    <a href="https://htmlcodex.com/hotel-html-template-pro" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Premium Version<i class="fa fa-arrow-right ms-3"></i></a>--}}
                </div>
            </nav>
        </div>
    </div>
</div>
