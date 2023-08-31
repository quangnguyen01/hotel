@extends('admin.master')
@section('title')
    Đặt phòng {{$room->name}}
@endsection
@section('custom_css')
@endsection
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body mb-2"><h2 class="mb-3">
                   Phòng {{$room->name}}
                </h2>
                <form action="@if($booking){{route('saveBooking', $booking->id)}}@else{{route('booking')}}@endif" method="POST" enctype="multipart/form-data">
                    @if($booking)
                        @method('PUT')
                    @endif
                    @csrf
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Tên</label>
                        <div class="col-sm-4">
                            <input name="name" value="{{$booking ? $booking->name : ''}}" type="text" class="form-control"
                                   placeholder="Tên">
                            @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-4">
                            <input name="email" value="{{$booking ? $booking->email : ''}}" type="email" class="form-control"
                                   placeholder="Địa chỉ email">
                            @error('email')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Điện thoại</label>
                        <div class="col-sm-4">
                            <input name="phone" value="{{$booking ? $booking->phone : ''}}" type="text" class="form-control"
                                   placeholder="Số điện thoại">
                            @error('phone')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Người lớn</label>
                        <div class="col-sm-4">
                            <select name="adult" class="custom-select">
                                <option hidden selected disabled>Số lượng</option>
                                @for($i = 1; $i <= 4; $i++)
                                <option value="{{$i}}" {{$booking && $booking->adult == $i ? 'selected' : ''}}>{{$i}}</option>
                                @endfor
                            </select>
                            @error('adult')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Trẻ em</label>
                        <div class="col-sm-4">
                            <select name="child" class="custom-select">
                                <option hidden selected disabled>Số lượng</option>
                                @for($i = 1; $i <= 4; $i++)
                                    <option value="{{$i}}" {{$booking && $booking->child == $i ? 'selected' : ''}}>{{$i}}</option>
                                @endfor
                            </select>
                            @error('child')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Ngày nhận phòng</label>
                        <div class="col-sm-4">
                            <input name="check_in_date" value="{{$booking ? $booking->check_in_date : ''}}" type="date" class="form-control">
                            @error('check_in_date')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-2">
                            <input name="check_in_time" value="{{$booking ? $booking->check_in_time : ''}}" type="time" class="form-control">
                            @error('check_in_time')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Ngày trả phòng</label>
                        <div class="col-sm-4">
                            <input name="check_out_date" value="{{$booking ? $booking->check_out_date : ''}}" type="date" class="form-control">
                            @error('check_out_date')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-2">
                            <input name="check_out_time" value="{{$booking ? $booking->check_out_time : ''}}" type="time" class="form-control">
                            @error('check_out_time')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    @if($booking)
                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Trạng thái</label>
                            <div class="col-sm-4">
                                <select name="status" class="custom-select">
                                    @foreach(\App\Enums\BookingStatus::getValues() as $status)
                                        <option value="{{$status}}" {{$status && $booking->status == $status ? 'selected' : ''}}>{{\App\Enums\BookingStatus::getDescription($status)}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    @endif
                    <input type="hidden" name="price" value="{{$room->price}}">
                    <input type="hidden" name="room_id" value="{{$room->id}}">
                    <input type="hidden" name="route" value="managerRoom">

                    <div class="position-relative row form-check text-end">
                        <div class="col-sm-10 offset-sm-2 p-0">
                            <button class="btn btn-primary">{{$booking ? 'Cập nhập' : 'Thêm mới'}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
@endsection

