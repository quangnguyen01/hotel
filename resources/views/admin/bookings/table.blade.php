@extends('admin.master')
@section('title')
    Admin | Danh sách đặt phòng
@endsection
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-4">
                        <h2>Danh sách đặt phòng</h2>
                    </div>
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
                                <div class="col-4 form-group">
                                    <select name="status" class="custom-select" id="role">
                                        <option hidden selected disabled>Tất cả</option>
                                        @foreach(\App\Enums\BookingStatus::getValues() as $type)
                                            <option
                                                value="{{$type}}" {{$status && $status == $type ? 'selected' : ''}}>
                                                {{\App\Enums\BookingStatus::getDescription($type)}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-4 form-group">
                                    <select name="sort" class="custom-select" id="sort">
                                        <option hidden selected disabled>Loại</option>
                                        <option value="1" {{$sort == 1 ? 'selected' : ''}}>Mới nhất</option>
                                        <option value="2" {{$sort == 2 ? 'selected' : ''}}>Cũ nhất</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <form id="filter-date">
                <div class="row mb-3 justify-content-end">
                    <div class="col-3">
                        <input type="text" class="form-control" name="start_date" value="{{$startDate}}" onfocus="(this.type='date')" placeholder="Start Date">
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" name="end_date" value="{{$endDate}}" onfocus="(this.type='date')" placeholder="End Date">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary" style="height: 100%">Lọc</button>
                    </div>
                </div>
                </form>
                @if(session()->get('status'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Thành công !</strong> {{ session()->get( 'status' ) }}
                    </div>
                @endif
                <?php $orderTotal = 0; ?>
                <table class="mb-0 table table-bordered">
                    <tr>
                        <th>Chọn</th>
                        <th>STT</th>
                        <th>Thông tin người đặt</th>
                        <th>Ngày nhận phòng</th>
                        <th>Ngày trả phòng</th>
                        <th>Giá</th>
                        <th>Ngày đặt</th>
                        <th>Trạng thái</th>
                        <th style="width: 101px">Actions</th>
                    </tr>


                    @foreach($bookings as $data)
                        <?php
                        if (!empty($data)) {
                            $orderTotal += $data->unit_price;
                        }
                        ?>
                        <tr>
                            <td><input class="checkbox_choice" type="checkbox" value="{{$data->id}}"></td>
                            <td>{{$data->id}}</td>
                            <td>
                                <p><strong>Tên: {{$data->name}}</strong></p>
                                <p>Mail: {{$data->email}}</p>
                                <p>SĐT: {{$data->phone}}</p>
                                <p>Người lớn: {{$data->adult}}</p>
                                <p>Trẻ nhỏ: {{$data->child}}</p>

                            </td>
                            <td>{{$data->check_in_date}} {{$data->check_in_time}}</td>
                            <td>{{$data->check_out_date}} {{$data->check_out_time}}</td>
                            <td>{{number_format($data->unit_price)}} đ</td>
                            <td>{{date_format($data->created_at,'d/m/Y')}}</td>
                            <td>{{\App\Enums\BookingStatus::getDescription($data->status)}}</td>
                            <td>
                                <a href=""><button class="btn btn-primary"><i class="fa fa-info-circle"></i></button></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa đơn đặt phòng này ?')"
                                   href="">
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </a></td>
                        </tr>
                    @endforeach
                    <tr><td colspan="8" class="text-right"><strong> Tổng : {{number_format($orderTotal)}} đ</strong></td></tr>

                </table>
                <div class="row justify-content-end mt-3">
                    <div class="col-4">
                        @include('admin.components.pagination',['list' => $bookings])
                    </div>
                </div>
                <div class="row">
                    <div>
                        <span style="margin-right: 30px">Chọn tất cả <input id="check_all" type="checkbox"
                                                                          style="transform: translateY(2px)"></span>
                        <select name="booking_status" id="booking_status" class="custom-select" style="width: 130px">
                            <option disabled hidden selected>Thay đổi trạng thái</option>
                            @foreach(\App\Enums\BookingStatus::getValues() as $type)
                                <option value="{{$type}}">{{\App\Enums\BookingStatus::getDescription($type)}}</option>
                            @endforeach
                            <option value="5">Xóa đơn</option>
                        </select>
                        <button class="btn btn-primary btn_submit" style="width: 120px">Cập nhật</button>

                        <form action="{{route('updateStatus')}}"  id="form_update_status" method="post"
                              style="width: 0;height: 0;overflow: hidden!important;">
                            @csrf
                            <div style="width: 0;height: 0;overflow: hidden!important;">
                                <input type="text" name="array_id" id="array_id">
                                <input type="text" name="desire" id="desire">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('#check_all').change(function () {
                if ($(this).is(':checked')) {
                    $('.checkbox_choice').prop("checked", true)
                } else {
                    $('.checkbox_choice').prop("checked", false)
                }
            })
            $('#booking_status').change(function () {
                $('#desire').val(this.value)
            })
            $('.btn_submit').click(function () {
                var checkboxs = document.querySelectorAll('.checkbox_choice')
                var items = []
                for (let i = 0; i < checkboxs.length; i++) {
                    if (checkboxs[i].checked) {
                        items.push(checkboxs[i].value)
                    }
                }
                $('#array_id').val(JSON.stringify(items))
                if ($('#desire').val() === '') {
                    alert('Vui lòng chọn thao tác để tiếp tục')
                } else {
                    $('#form_update_status').submit()
                }
            })
            let submit = false
            $('#search').click(function () {
                if (submit) {
                    $('#filterForm').submit()
                } else {
                    submit = true
                }
            })
            $('#role').change(function () {
                $('#filterForm').submit()
            })
            $('#sort').change(function () {
                $('#filterForm').submit()
            })
        })

    </script>
@endsection
