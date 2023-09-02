@extends('admin.master')
@section('title')
    Admin | Liên hệ
@endsection
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <h2 class="">Danh sách liên hệ</h2>
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
                @if ($message = \Illuminate\Support\Facades\Session::get('success'))
                    <div class="alert alert-success">
                        <p class="m-0">{{ $message }}</p>
                    </div>
                @endif
                <table class="mb-0 table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 50px">STT</th>
                        <th>Thông tin</th>
                        <th>Vấn đề</th>
                        <th>Lời nhắn</th>
                        <th style="width: 174px;">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($contacts->total())
                        @foreach ($contacts as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>
                                    <div><i class="fas fa-user"></i> {{$data->name}}</div>
                                    <div><i class="fas fa-phone"></i> {{$data->phone}}</div>
                                    <div><i class="fas fa-envelope"></i> {{$data->email}}</div>
                                </td>
                                <td>{{$data->subject}}</td>
                                <td>{{$data->message}}</td>
                                <td>
                                    <a type="submit" href="{{route('deleteContact', $data->id)}}"
                                       class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá ?')">
                                        <i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5" class="text-center">Không có dữ liệu</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
    <script>
        let submit = false
        $('#search').click(function () {
            if (submit) {
                $('#filterForm').submit()
            } else {
                submit = true
            }
        })
        $('#sort').change(function () {
            $('#filterForm').submit()
        })
    </script>
@endsection
