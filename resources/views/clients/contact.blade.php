@extends('clients.pages')
@section('title-page')
    Liên hệ
@endsection
@section('title-link')
    Liên hệ
@endsection
@section('page-content')
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Liên hệ với chúng tôi</h6>
                <h1 class="mb-5"><span class="text-primary text-uppercase">Liên hệ</span> nếu có bất kỳ câu hỏi nào</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <h6 class="section-title text-start text-primary text-uppercase">Booking</h6>
                            <p><i class="fa fa-envelope-open text-primary me-2"></i>ngocgiang315@gmail.com</p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="section-title text-start text-primary text-uppercase">General</h6>
                            <p><i class="fa fa-envelope-open text-primary me-2"></i>ngocgiang315@gmail.com</p>
                        </div>
                        <div class="col-md-4">
                            <h6 class="section-title text-start text-primary text-uppercase">Technical</h6>
                            <p><i class="fa fa-envelope-open text-primary me-2"></i>ngocgiang315@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Vinhomes Imperia Hải Phòng&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Game</a>
                        </div>
                            <style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style>
                        </div>
                </div>
                <div class="col-md-6">
                    @if ($message = \Illuminate\Support\Facades\Session::get('success'))
                        <div class="alert alert-success">
                            <p class="m-0">{{ $message }}</p>
                        </div>
                    @endif
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <form action="{{route('sendContact')}}" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Tên" name="name">
                                        <label for="name">Tên</label>
                                    </div>
                                    @error('name')
                                    <div style="color: red">* {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                        <label for="email">Email</label>
                                    </div>
                                    @error('email')
                                    <div style="color: red">* {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
                                        <label for="phone">Phone</label>
                                    </div>
                                    @error('phone')
                                    <div style="color: red">* {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Vấn đề" name="subject">
                                        <label for="subject">Vấn đề</label>
                                    </div>
                                    @error('subject')
                                    <div style="color: red">* {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Lời nhắn" id="message" style="height: 150px" name="message"></textarea>
                                        <label for="message">Lời nhắn</label>
                                    </div>
                                    @error('message')
                                    <div style="color: red">* {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Gửi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
