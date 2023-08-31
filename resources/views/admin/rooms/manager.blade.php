@extends('admin.master')
@section('title')
    Admin | Quản lý Căn hộ
@endsection
@section('custom_css')
    <style>
        .item {
            width: 100%;
            padding: 5px 10px;
            border: 1px solid #000;
            color: #fff;
            background: #0d6efd;
            border-radius: 10px;
            text-align: center;
            cursor: pointer;
        }
        .item:hover {
            color: #000;
            background: #fff;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .item.booking {
            color: #000;
            background: #ffc107;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .item.active {
            color: #fff;
            background: #198754;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            border: 1px solid #fff;
        }

        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 40%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        /* The Close Button */
        .close {
            color: #000;
            float: right;
            font-size: 28px;
            font-weight: bold;
            text-align: right;
            padding-right: 10px;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-body {padding: 2px 16px;}
    </style>
@endsection
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body">
                <div class="row justify-content-end">
                    <div class="col-8">
                        <form id="filterForm">
                            <div class="row justify-content-end">
                                <div class="col-4 form-group input-group">
                                    <input type="text" class="form-control" name="search">
                                    <div class="input-group-append">
                                        <span class="btn input-group-text" id="search"><i
                                                class="fas fa-search"></i></span>
                                    </div>
                                </div>
                                <div class="col-3 form-group">
                                    <select name="category" class="custom-select" id="category">
                                        <option hidden selected disabled>Tất cả căn hộ</option>
                                        @foreach(\App\Models\Category::all() as $category)
                                            <option
                                                value="{{$category->id}}" {{$category->id == $categories ? 'selected' : ''}}>
                                                {{$category->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-3 form-group">
                                    <select name="status" class="custom-select" id="status">
                                        <option hidden selected disabled>Trạng thái</option>
                                        @foreach(\App\Enums\RoomStatus::getValues() as $data)
                                            {{$data}}
                                            <option value="{{$data}}" {{$status == $data ? 'selected' : ''}}>{{\App\Enums\RoomStatus::getDescription($data)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-6">
                        <h2 class="text-center">Tất cả căn hộ</h2>
                    </div>
                    <div class="col-3">
                        <div><i class="fas fa-square" style="color: #0d6efd"></i> Phòng trống</div>
                        <div><i class="fas fa-square" style="color: #ffc107"></i> Phòng đã đặt</div>
                        <div><i class="fas fa-square" style="color: #198754"></i> Phòng đang hoạt động</div>
                    </div>
                </div>
                <div class="row">
                    @foreach($rooms as $data)
                    <div class="col-2 pt-2 pb-2">
                        <div class="item myBtn
                        @switch($data->status)
                        @case(\App\Enums\RoomStatus::BOOKED)
                        booking
                        @break
                        @case(\App\Enums\RoomStatus::ACTIVE)
                        active
                        @break
                        @endswitch" slot="{{$data}}">
                            <i class="fas fa-home fa-3x"></i>
                            <div>
                                {{$data->name}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- The Modal -->
                <div id="myModal" class="modal" style="z-index: 3">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="modal-body">
                            <div class="row p-3">
                                <div class="col-6" style="border-right: 1px solid">
                                    <div class="text-center"><h5>Thông tin căn hộ</h5></div>
                                    <div id="room-info">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-center"><h5>Thông tin khách hàng</h5></div>
                                    <div id="customer-info">
                                    </div>
                                </div>
                                <div class="col-12 mt-3 text-center" id="edit-info">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
    <script>
        let submit = false
        let booking = null
        $('#search').click(function () {
            if (submit) {
                $('#filterForm').submit()
            } else {
                submit = true
            }
        })
        $('#category').change(function () {
            $('#filterForm').submit()
        })
        $('#status').change(function () {
            $('#filterForm').submit()
        })

        $('.myBtn').each(function (i, val) {
            $(val).click(async function () {
                const room = JSON.parse(this.slot)
                await $.get(`/booking-detail/${room.id}`,function (data, status) {
                    booking = data
                    console.log(booking)
                });
                $('#room-info').html(`<ul><li>Phòng: ${room.name}</li><li>Giá: ${formatPrice(room.price)} đ</li><li>Giường: 2</li><li>Phòng tắm: 2</li></ul>`)
                if (booking !== '') {
                    $('#customer-info').html(`<ul><li>Tên: ${booking.name}</li><li>Nhận phòng: ${formatDate(booking.check_in_date)} ${booking.check_in_time}</li><li>Trả phòng: ${formatDate(booking.check_out_date)} ${booking.check_out_time}</li><li>Người lớn: ${booking.adult}</li><li>Trẻ em: ${booking.child}</li><li>Giá: ${formatPrice(booking.unit_price)} đ</li></ul>`)
                    $('#edit-info').html(`<a class="btn btn-primary text-white" href="/admin/bookings/room/${room.id}/edit">Cập nhập thông tin</a>`)
                } else {
                    $('#customer-info').html(`<div class="text-center">
                                            <h6>Phòng trống</h6>
                                            <a href="/admin/bookings/room/${room.id}" class="btn btn-primary mt-3">Thêm khách hàng</a>
                                        </div>`)
                    $('#edit-info').html('')
                }
                $('#myModal').css('display', 'block');
            })
        })
        $('.close').click(function () {
            $('#myModal').css('display', 'none');
        })
        $(window).click(function (e) {
            if(e.target.id === 'myModal') {
                $('#myModal').css('display', 'none');
            }
        })

        function formatPrice(price) {
            return Intl.NumberFormat('vi-VN', 'currency').format(price)
        }

        function formatDate(data) {
            const date = new Date(data);
            const yyyy = date.getFullYear();
            let mm = date.getMonth() + 1;
            let dd = date.getDate();

            if (dd < 10) dd = '0' + dd;
            if (mm < 10) mm = '0' + mm;

            return dd + '/' + mm + '/' + yyyy;
        }
    </script>
@endsection
