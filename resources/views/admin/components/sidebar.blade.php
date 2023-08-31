<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                        data-class="closed-sidebar">
                    <span class="hamburger-box"><span class="hamburger-inner"></span></span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button"
                    class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="app-sidebar__inner" style="margin: 20px">
        <ul class="vertical-nav-menu metismenu">
            <li class="sidebar_item" style="border: none!important;">
                <a href="{{route('managerRoom')}}" class="sidebar_item">
                    <i class="metismenu-icon fas fa-list"></i>
                    <p style="margin-right: 20px">Quản lý căn hộ</p>
                </a>
            </li>
            <li class="sidebar_item" style="border: none!important;">
                <a href="#" class="sidebar_item">
                    <i class="metismenu-icon fas fa-user"></i>
                    <p style="margin-right: 20px">Người dùng</p>
                    <i class="metismenu-state-icon fas fa-caret-down fa-caret-up"></i>
                </a>
                <ul class="mm-collapse">
                    <li>
                        <a href="{{route('listUser')}}">
                            <i class="metismenu-icon">
                            </i>Danh sách
                        </a>
                    </li>
                    <li>
                        <a href="{{route('createUser')}}">
                            <i class="metismenu-icon"></i>
                            Thêm mới
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar_item" style="border: none!important;">
                <a href="#" class="sidebar_item">
                    <i class="metismenu-icon fas fa-th-list"></i>
                    <p>Loại phòng</p>
                    <i class="metismenu-state-icon fas fa-caret-down fa-caret-up"></i>
                </a>
                <ul class="mm-collapse">
                    <li>
                        <a href="{{route('listCategory')}}">
                            <i class="metismenu-icon">
                            </i>Danh sách
                        </a>
                    </li>
                    <li>
                        <a href="{{route('createCategory')}}">
                            <i class="metismenu-icon"></i>
                            Thêm mới
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar_item" style="border: none!important;">
                <a href="#" class="sidebar_item">
                    <i class="metismenu-icon fas fa-home"></i>
                    <p>Căn hộ</p>
                    <i class="metismenu-state-icon fas fa-caret-down fa-caret-up"></i>
                </a>
                <ul class="mm-collapse">
                    <li>
                        <a href="{{route('listRoom')}}">
                            <i class="metismenu-icon">
                            </i>Danh sách
                        </a>
                    </li>
                    <li>
                        <a href="{{route('createRoom')}}">
                            <i class="metismenu-icon"></i>
                            Thêm mới
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar_item" style="border: none!important;">
                <a href="{{route('listBooking')}}" class="sidebar_item">
                    <i class="metismenu-icon fas fa-chart-bar"></i>
                    <p style="margin-right: 20px">Danh sách đặt phòng</p>
                </a>
            </li>
        </ul>
    </div>
</div>
