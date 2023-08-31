<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" href="/assets/images/logo.png">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,300&display=swap");
        /*body {*/
        /*    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgb(121, 9, 9) 45%, rgb(255, 0, 0) 100%);*/
        /*}*/
        :root {
            --primary-color: #aa3331;
            --primary-color-hover: #ef3632;
            --input-height: 55px;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            font-family: "Open Sans", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        /*****************

            Global Styles

        ******************/
        h1 {
            font-weight: 300;
            color: #343434;
            margin: 0.5rem 0;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        input[type="checkbox"] {
            margin-right: 1rem;
            transform: scale(1.5);
        }

        /*****************

            Colors

        ******************/
        .gray {
            color: rgb(124, 124, 124);
        }

        .fa-twitter {
            color: var(--primary-color);
        }

        .fa-google {
            color: #dd4b39;
        }

        /*****************

            buttons

        ******************/
        .btn {
            padding: 0.5rem 1rem;
            border: none;
            outline: none;
        }

        .btn-tab {
            width: 50%;
            padding: 2rem 1rem;
            font-size: 1.25rem;
            background: var(--primary-color);
            color: #fff
        }

        .btn-tab.active {
            border-top: 3px solid var(--primary-color);
            background-color: #fff;
            color: #000
        }

        .btn-oauth {
            padding: 0.75rem 2rem;
            font-size: 1.25rem;
            color: rgb(92, 92, 92);
            border-radius: 5px;
            background-color: #fff;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px,
            rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        }

        .btn-register {
            width: 100%;
            height: var(--input-height);
            background-color: var(--primary-color);
            color: #f3f3f3;
            font-size: 1.5rem;
            border-radius: 5px;
        }

        .btn-register:hover {
            background-color: var(--primary-color-hover);
        }
        /*****************

            Registration Form

        ******************/
        .registration-form {
            width: 600px;
            border: 1px solid #ccc;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px,
            rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
            text-align: center;
            font-size: 1.25rem;
        }

        .registration-form .header {
            display: flex;
        }

        .registration-form .body {
            padding: 2rem 1rem;
        }

        .content {
            display: none;
        }

        .content.active {
            display: block;
        }

        .bar {
            position: relative;
            margin: 2.5rem 0;
            border-top: 1px solid #ccc;
        }

        .bar::before {
            content: "hoặc";
            position: absolute;
            left: 50%;
            transform: translate(-50%, -53%);
            padding: 0 1rem;
            background-color: #fff;
        }

        /*****************

            input elements

        ******************/

        .input-group {
            position: relative;
            margin: 1rem 0;
            height: var(--input-height);
        }

        .input-group .input-elem {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 0 1.5rem;
            font-size: 1.25rem;
            outline: none;
        }

        .input-group label {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 1rem;
            padding: 0 0.5rem;
            transition: all 0.2s ease-in-out;
            user-select: none;
            pointer-events: none;
        }

        .input-group .input-elem:focus {
            border: 2px solid var(--primary-color);
        }

        .input-group .input-elem:not(:placeholder-shown) + label {
            top: 0;
            background-color: #fff;
            color: rgb(90, 90, 90);
        }

        .input-group .input-elem:focus + label {
            top: 0;
            background-color: #fff;
            color: var(--primary-color);
        }

        .eye {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            right: 1rem;
            color: #888;
            cursor: pointer;
        }

        .eye:hover {
            color: var(--primary-color);
        }

        .agreements {
            display: flex;
            align-items: center;
            margin: 1rem 0;
        }

        .reg_link {
            display: inline-block;
            color: var(--primary-color);
            margin: 1.5rem 0 0.5rem;
        }

        /*****************

        ripple effect

        ******************/
        .btn-ripple {
            position: relative;
            overflow: hidden;
        }

        .ripple {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.5);
            transform: translate(-50%, -50%);
            border-radius: 50%;
            animation: rippleAnimate 0.4s ease-out;
        }

        @keyframes rippleAnimate {
            from {
                width: 0px;
                height: 0px;
            }
            to {
                width: 300px;
                height: 300px;
                opacity: 0;
            }
        }

        /*****************

        responsive design

        ******************/

        @media screen and (max-width: 768px) {
            .registration-form {
                width: 340px;
            }

            .flex {
                flex-direction: column;
            }

            .btn-oauth {
                margin-bottom: 0.5rem;
            }

            .btn-tab {
                padding: 1rem;
            }
        }

    </style>
    <title>Đăng nhập</title>
</head>
<body>
<div class="registration-form">
    <div class="header">
        <button class="btn btn-tab btn-ripple active" data-target-tab="#signin">
            Đăng nhập
        </button>
        <button class="btn btn-tab btn-ripple" data-target-tab="#signup">
            Đăng ký
        </button>
    </div>
    <div class="body">
        @if(session()->get('status'))
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Thành công !</strong> {{ session()->get( 'status' ) }}
            </div>
        @endif
        <div class="content active" id="signin">
            <div>
                <h1 style="color: #e87a2c">Merry <span style="color: #aa3331">House</span></h1>
            </div>
            <p class="gray">
                Đăng nhập tài khoản của bạn
            </p>

            <div class="flex justify-content-center">
                <form action="{{route('signInGoogle')}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-oauth">
                        <i class="fa-brands fa-google"></i> Đăng nhập bằng Google
                    </button>
                </form>
                            </div>

            <div class="bar"></div>

            <form action="{{route('login')}}" method="post" id="log-form">
                @csrf
                <div class="input-group">
                    <input
                        type="email"
                        name="email"
                        id="name"
                        class="input-elem"
                        placeholder="Email"
                        autocomplete="off"
                    />
                </div>
                <div class="input-group">
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="input-elem"
                        placeholder="Mật khẩu"
                        autocomplete="off"
                    />
                    <i class="fas fa-eye-slash eye"></i>
                </div>
                <button type="submit" class="btn btn-register">Đăng nhập</button>
            </form>
        </div>
        <div class="content" id="signup">
            <h1 style="color: #e87a2c">Merry <span style="color: #aa3331">House</span></h1>
            <p class="gray">
                Đăng ký tài khoản của bạn
            </p>

            <div class="flex justify-content-center">
                <button class="btn btn-oauth">
                    <i class="fab fa-google"></i> Đăng nhập bằng Google
                </button>
            </div>

            <div class="bar"></div>

            <form action="{{route('register')}}" method="post" id="reg-form">
                @csrf
                <div class="input-group">
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="input-elem"
                        placeholder="Tên"
                        autocomplete="off"
                    />
                </div>
                <div class="input-group">
                    <input
                        type="text"
                        name="phone_number"
                        id="phone"
                        class="input-elem"
                        placeholder="Điện thoại"
                        autocomplete="off"
                    />
                </div>
                <div class="input-group">
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="input-elem"
                        placeholder="Email"
                        autocomplete="off"
                    />
                </div>
                <div class="input-group">
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="input-elem"
                        placeholder="Mật khẩu"
                        autocomplete="off"
                    />
                    <i class="fas fa-eye-slash eye"></i>
                </div>
                <div class="input-group">
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password"
                        class="input-elem"
                        placeholder="Nhập lại mật khẩu"
                        autocomplete="off"
                    />
                    <i class="fas fa-eye-slash eye"></i>
                </div>
                <button type="submit" class="btn btn-register">Đăng ký</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/assets/js/jquery.validate.min.js"></script>
<script>
    $("#log-form").validate({
        rules: {
            email: {
                required: true
            },
            password: {
                required: true
            }
        },
        messages: {
            email: {
                required: '* Vui lòng nhập email.',
            },
            password: {
                required: '* Vui lòng nhập mật khẩu.',
            },
        },
        submitHandler: function (form) {
            $(form).submit();
        }
    });
    $("#reg-form").validate({
        rules: {
            name: {
                required: true
            },
            phone_number: {
                required: true,
                number: true,
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            },
            password_confirmation: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            name: {
                required: '* Vui lòng nhập tên'
            },
            phone_number: {
                required: '* Vui lòng nhập số điện thoại',
                number: '* Vui lòng nhập đúng số điện thoại',
            },
            email: {
                required: '* Vui lòng nhập địa chỉ email',
                email: '* Vui lòng nhập đúng định dạng email'
            },
            password: {
                required: '* Vui lòng nhập mật khẩu',
                minlength: '* Vui lòng nhập ít nhất 6 kí tự'
            },
            password_confirmation: {
                required: '* Vui lòng nhập mật khẩu',
                minlength: '* Vui lòng nhập ít nhất 6 kí tự'
            }
        },
        submitHandler: function (form) {
            $(form).submit();
        }
    });
</script>
<script>
    const tab_btns = document.querySelectorAll("[data-target-tab]");
    const tab_contents = document.querySelectorAll(".registration-form .content");

    tab_btns.forEach((btn) => {
        btn.addEventListener("click", () => {
            tab_btns.forEach((btn) => btn.classList.remove("active"));
            tab_contents.forEach((btn) => btn.classList.remove("active"));

            btn.classList.toggle("active");
            document.querySelector(btn.dataset.targetTab).classList.add("active");
        });
    });

    /* rippple effect */
    const ripple_btns = document.querySelectorAll(".btn-ripple");

    ripple_btns.forEach((btn) => {
        btn.addEventListener("click", function (e) {
            let x_coord = e.clientX;
            let y_coord = e.clientY;

            let btn_pos_top = e.target.offsetTop;
            let btn_pos_Left = e.target.offsetLeft;

            let x = x_coord - btn_pos_Left;
            let y = y_coord - btn_pos_top;

            const span = document.createElement("span");
            span.classList.add("ripple");
            span.style.top = `${y}px`;
            span.style.left = `${x}px`;

            this.appendChild(span);

            setTimeout(() => {
                this.removeChild(span);
            }, 400);
        });
    });

    /* show and hide the password */
    const reg_eyes = document.querySelectorAll(".eye");

    reg_eyes.forEach((eye) => {
        eye.addEventListener("click", () => {
            const pass_field = eye.previousElementSibling.previousElementSibling;
            if (pass_field.type === "password") {
                pass_field.setAttribute("type", "text");
                eye.classList.replace("fa-eye-slash", "fa-eye");
            } else {
                pass_field.setAttribute("type", "password");
                eye.classList.replace("fa-eye", "fa-eye-slash");
            }
        });
    });
</script>
</body>
{{--<body>--}}
{{--<div class="container">--}}
{{--    <div class="row h-100 justify-content-center">--}}
{{--        <div class="col-lg-5 col-12">--}}
{{--            <div class="text-center login-form">--}}
{{--                <h1 class="auth-title">Merry House</h1>--}}
{{--                <p class="auth-subtitle mb-5">--}}
{{--                    Đăng nhập để tiếp tục--}}
{{--                </p>--}}
{{--                --}}{{--                @if (session()->has('error'))--}}
{{--                --}}{{--                    <div class="alert alert-danger alert-dismissible show fade">--}}
{{--                --}}{{--                        {{ session()->get('error') }}--}}
{{--                --}}{{--                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--                --}}{{--                    </div>--}}
{{--                --}}{{--                @endif--}}
{{--                <form action="{{route('loginPost')}}" method="post">--}}
{{--                    @csrf--}}
{{--                    <div class="form-group position-relative has-icon-left mb-4">--}}
{{--                        <input type="email" class="form-control form-control-xl" placeholder="Email"--}}
{{--                               name="email" required>--}}
{{--                        <div class="form-control-icon">--}}
{{--                            <i class="bi bi-person"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group position-relative has-icon-left mb-4">--}}
{{--                        <input type="password" class="form-control form-control-xl" placeholder="Password"--}}
{{--                               name="password" required>--}}
{{--                        <div class="form-control-icon">--}}
{{--                            <i class="bi bi-shield-lock"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button class="btn btn-danger btn-block btn-lg shadow-lg mt-5">--}}
{{--                        Đăng nhập--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
</html>
