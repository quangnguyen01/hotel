<div class="container-fluid bg-white px-0" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
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
                        <a href="{{ route('home-page') }}" class="nav-item nav-link {{url()->current() === route('home-page') ? 'active' : ''}}" style="margin-left: 30px">Trang chủ </a>
                        <a href="{{ route('service-page') }}" class="nav-item nav-link {{url()->current() === route('service-page') ? 'active' : ''}}">Dịch vụ</a>
                        <a href="{{ route('room-page') }}" class="nav-item nav-link {{url()->current() === route('room-page') ? 'active' : ''}}">Căn hộ</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{route('about-page')}}" class="dropdown-item">Giới thiệu</a>
                                <a href="{{route('news-page')}}" class="dropdown-item">Tin tức</a>
                            </div>
                        </div>
                        <a href="{{route('contact-page')}}" class="nav-item nav-link {{url()->current() === route('contact-page') ? 'active' : ''}}">Liên hệ</a>
                        @if(\Illuminate\Support\Facades\Auth::user())
                        <a href="{{route('logout')}}" class="nav-item nav-link">Đăng xuất</a>
                        @endif
                    </div>
                    @if(\Illuminate\Support\Facades\Auth::user())
                        <a href="#" class="rounded-0 py-4 px-md-5 d-none d-lg-block text-white">
                            <img class="rounded-circle" style="margin-right: 10px;width: 30px;height: 30px;object-fit: cover"  src="{{\Illuminate\Support\Facades\Auth::user()->avatar ? \Illuminate\Support\Facades\Auth::user()->avatar : 'https://e7.pngegg.com/pngimages/84/165/png-clipart-united-states-avatar-organization-information-user-avatar-service-computer-wallpaper.png'}}" alt="">
                            {{\Illuminate\Support\Facades\Auth::user()->name}}
                        </a>
                    @else
                        <a href="{{route('login')}}" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Đăng ký / Đăng nhập</a>
                    @endif
                </div>
            </nav>
        </div>
    </div>
</div>
