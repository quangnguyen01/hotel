<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Mail</title>
    <style>
        a {
            text-decoration: none !important;
            color: #888;
        }

        a:hover {
            color: #333;
        }

        a, a:hover {
            text-decoration: none;
        }

        a:focus {
            outline: medium none;
            outline-offset: 0;
        }

        @media (max-width: 575.98px) {
            div.logo-email {
                width: 40%;
            }
            div.btn-detail-order a {
                border-radius: 10px;
            }
            div.btn-detail-order {
                width: 90%;
            }
            div.text-bicon {
                width: 100%;
            }
        }

        /* Medium devices (tablets, 768px and up) */
        @media (max-width: 768px) {
        }

        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) and (max-width: 1199.98px) {

        }

        /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {
        }
        .btn-detail-order {
            width: 30%;
            margin: 0 auto;
        }

        .back-home a {
            padding: 8px 0px;
            display: block;
            line-height: 22px;
            color: white;
        }

        .wrap-btn-back i {
            color: #FFFF;
            margin-right: 7px;
        }

        .text-bicon {
            text-align: center;
            font-weight: 500;
            font-size: 16px;
            width: 70%;
            margin: 0 auto
        }

        .btn-detail-order a {
            width: 100%;
            color: #fff;
            background-color: #aa3331;
            border: none;
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            padding: .375rem .75rem;
            font-size: 1rem;
            border-radius: 20px;
        }

        .wrap-img-email {
            width: 30%;
            margin: 0 auto;
        }

        .logo-email {
            width: 20%;
            margin: 0 auto
        }

        .logo-email img {
            width: 100%;
        }
        .table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body style="background-color: #f2f2f2">
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-12 col-xs-12 col-lg-6 col-md-6" style="background-color: #FFFFFF">
            <div class="row">
                <div class="logo-email" style="text-align: center">
                    <img src="https://res.cloudinary.com/dn3bmj5ex/image/upload/v1693411576/logo_jfldeg.png"
                         style="width: 50px; height: 50px">
                </div>
            </div>
            <div class="row" style="margin-left: 10px">
                <p style="font-size: 22px;text-align: center">Xin chào bạn</p>
                <div class="wrap-icon">
                    <div class="wrap-img-email" style="margin-left:460px">
                    </div>
                </div>
                <h4 style="text-align: center">Xác nhận đặt phòng</h4>
                <div class="text-bicon">
                    <p>Cảm ơn quý khách đã đặt phòng</p>
                    <p>Vui lòng xác nhận thông tin đặt phòng</p>
                </div>
            </div>
            <div class="row" style="margin: 20px">
                <table style="text-align: center;max-width: 50%;margin: auto">
                    <tr>
                        <th colspan="2">Phòng {{$room->name}}</th>
                    </tr>
                    <tr>
                        <td>Tên</td>
                        <td>{{$booking->name}}</td>
                    </tr>
                    <tr>
                        <td>SĐT</td>
                        <td>{{$booking->phone}}</td>
                    </tr>
                    <tr>
                        <td>Mail</td>
                        <td>{{$booking->email}}</td>
                    </tr>
                    <tr>
                        <td>Người lớn</td>
                        <td>{{$booking->adult}}</td>
                    </tr>
                    <tr>
                        <td>Trẻ em</td>
                        <td>{{$booking->child}}</td>
                    </tr>
                    <tr>
                        <td>Giá</td>
                        <td>{{number_format($booking->unit_price, 0, ',', '.')}} đ</td>
                    </tr>
                </table>
            </div>
            <div class="row" style="margin: 20px;justify-content: center">
                <div class="btn-detail-order">
                    <a href="{{route('bookingConfirm', $booking->id)}}">Xác nhận</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
