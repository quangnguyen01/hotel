@extends('admin.master')
@section('custom_css')
    <style>
        .button_outer {
            background: #00c6d7;
            text-align: center;
            height: 43px;
            width: 150px;
            border-radius: 4px;
            display: inline-block;
            transition: .2s;
            position: relative;
            overflow: hidden;
        }

        .button_outer:hover {
            background-color: #17a2b8;
        }

        .btn_upload {
            width: 100%;
            padding: 9px;
            color: #fff;
            font-size: 15px;
            text-align: center;
            position: relative;
            display: inline-block;
            overflow: hidden;
            z-index: 3;
            white-space: nowrap;
        }

        .btn_upload input {
            position: absolute;
            width: 100%;
            left: 0;
            top: 0;
            height: 100%;
            cursor: pointer;
        }

        #image-preview {
            height: 150px;
            width: 150px;
            object-fit: cover;
        }
    </style>
@endsection
@section('title')
    Tạo người dùng
@endsection
@section('content')
    <div class="row main-card m-3 card">
        <div class="container p-5">
            <h2 class="mb-3">
                @if($data)
                    Cập nhật người dùng
                @else
                    Thêm mới người dùng
                @endif
            </h2>
            <form action="" method="post" id="form-user">
                @if($data)
                    @method('put')
                @endif
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên:</label>

                            <input value="{{$data ? $data->name : ''}}" type="text" class="form-control"
                                   placeholder="Tên" name="name" >
                            @error('name')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Địa chỉ email:</label>
                            <input value="{{$data ? $data->email : ''}}" type="text" class="form-control"
                                   placeholder="Địa chỉ email" name="email">
                            @error('email')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Số điện thoại:</label>

                            <input value="{{$data ? $data->phone_number : ''}}" type="text" class="form-control"
                                   placeholder="Số điện thoại" name="phone_number">
                            @error('phone_number')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Role:</label>
                            <select name="role" class="custom-select">
                                <option hidden selected disabled>Role</option>
                                <option value="{{\App\Enums\Role::ADMIN}}" {{$data && $data->role == \App\Enums\Role::ADMIN ? 'selected' : ''}}>Admin</option>
                                <option value="{{\App\Enums\Role::USER}}" {{$data && $data->role == \App\Enums\Role::USER ? 'selected' : ''}}>User</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="position-relative row form-group">
                        <div class="col-sm-10">
                            <div class="button_outer">
                                <div class="btn_upload">
                                    <input style="opacity: 0" type="file" name="imageChooser" class="custom-file-input">
                                    <input name="avatar" type="hidden" value="{{$data ? $data->avatar : ''}}">
                                    Chọn ảnh
                                </div>
                            </div>
                            <div class="uploaded_file_view my-2" id="uploaded_view">
                            </div>
                            <img src="{{$data ? $data->avatar : ''}}" {{$data && $data->avatar ? '' : 'hidden'}} id="image-preview" alt=""/>
                            @error('avatar')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mật khẩu:</label>

                            <input value="{{$data ? $data->password : ''}}" type="password" class="form-control"
                                   placeholder="Mật khẩu" name="password">
                            @error('password')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nhập lại mật khẩu:</label>

                            <input value="{{$data ? $data->password : ''}}" type="password" class="form-control"
                                   placeholder="Nhập lại mật khẩu" name="password_confirmation" >
                            @error('password_confirmation')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end mt-3">
                    <div class="col-1">
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('custom_js')
    <script>
        const cloudName = 'dn3bmj5ex';
        const unsignedUploadPreset = 'm9kz74zz';

        var img = document.querySelector('[name="imageChooser"]');
        let thumbnails = [];

        img.onchange = function () {
            var file = this.files[0];
            var url = `https://api.cloudinary.com/v1_1/${cloudName}/upload`;
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var responseDataJson = JSON.parse(this.responseText);
                    console.log(responseDataJson.url);
                    var imageUrl = document.querySelector('input[name="avatar"]');
                    imageUrl.value = responseDataJson.url;
                    let imagePreview = document.getElementById('image-preview');
                    imagePreview.src = responseDataJson.url;
                    imagePreview.hidden = false;
                }
            }
            xhr.open('POST', url, true);
            var fd = new FormData();
            fd.append('upload_preset', unsignedUploadPreset);
            fd.append('tags', 'browser_upload');
            fd.append('file', file);
            xhr.send(fd);
        }
    </script>
@endsection
