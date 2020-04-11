<!DOCTYPE html>
<html lang="en">
<head>
    {{-- anvuidevteam_meobeodamdang --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap&subset=vietnamese">
    <link rel="stylesheet" href="{{ asset('libs/bootstrap-4.4.1/css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/admin.custom.css') }}"> 
    <script src="{{ asset('libs/jquery-3.4.1/jquery-3.4.1.min.js') }}"></script>

</head>
<body class="app">
    <div id="loader">
        <div class="spinner"></div>
    </div>
    <script>
        window.addEventListener('load', () => {
            const loader = document.getElementById('loader');
            setTimeout(() => {
                loader.classList.add('fadeOut');
            }, 300);
        });
    </script>
    <div>
        <div class="sidebar">
            <div class="sidebar-inner">
                <div class="sidebar-logo">
                    <div class="peers ai-c fxw-nw">
                        <div class="peer peer-greed">
                            <a class="sidebar-link td-n" href="https://colorlib.com/polygon/adminator/index.html" class="td-n">
                                <div class="peers ai-c fxw-nw">
                                    <div class="peer">
                                        <div class="logo"><img src="https://colorlib.com/polygon/adminator/assets/static/images/logo.png"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="peer">
                            <div class="mobile-toggle sidebar-toggle"><a href="" class="td-n"><i class="ti-arrow-circle-left"></i></a></div>
                        </div>
                    </div>
                </div>
                <ul class="sidebar-menu scrollable pos-r">
                    <li class="nav-item active">
                        <a class="sidebar-link" href="/" default>
                            <span class="icon-holder">
                                <i class="c-orange-500 ti-home"></i> </span><span class="title">trang chủ</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                            <span class="icon-holder"><i class="c-orange-500 ti-file"></i> </span>
                            <span class="title">tin tức</span>
                            <span class="arrow"><i class="ti-angle-right"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="sidebar-link" href="{{ route('admin.news.create',['id' => '']) }}">thêm tin tức</a></li>
                            <li><a class="sidebar-link" href="{{ route('admin.news.index') }}">danh sách tin tức</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                            <span class="icon-holder"><i class="c-orange-500 ti-menu"></i> </span>
                            <span class="title">Tuyển dụng</span>
                            <span class="arrow"><i class="ti-angle-right"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="sidebar-link" href="/index.php?mod=menu&page=index">tin tuyển dụng</a></li>
                            <li><a class="sidebar-link" href="/index.php?mod=menu&page=index">Thêm tin tuyển dụng</a></li>
                            <li><a class="sidebar-link" href="/index.php?mod=menu&page=index">Vị trí</a></li>
                            <li><a class="sidebar-link" href="/index.php?mod=menu&page=index">Thêm Vị trí</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>


        <div class="page-container">
            <div class="header navbar">
                <div class="header-container">
                    <ul class="nav-left">
                        <li>
                            <a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="ti-menu"></i></a>
                        </li>

                    </ul>
                    <ul class="nav-right">
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle d-flex align-content-center" data-toggle="dropdown">
                                <div class=""><img class=""
                                        style="height: 30px; width: 30px; display: inline-block; border-radius: 50%;"
                                        src="https://www.kindpng.com/picc/m/78-786207_user-avatar-png-user-avatar-icon-png-transparent.png"
                                        alt=""></div>
                                <div><span class="fsz-sm c-grey-900">xevanminh</span></div>
                            </a>
                            <ul class="dropdown-menu fsz-sm">
                                <li><a href="/index.php?mod=login&page=logout"
                                        class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i
                                            class="ti-power-off mR-10"></i> <span>Logout</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <main class="main-content bgc-grey-100">
                <div id="mainContent">

                    @yield('content')

                </div>
            </main>
            <!-- <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
                <span>Copyright © 2017 Designed by <a href="https://colorlib.com" target="_blank"
                        title="Colorlib">Colorlib</a>. All rights reserved.</span>
            </footer> -->
        </div>
    </div>

    <script src="{{ asset('libs/bootstrap-4.4.1/js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('libs/toastr/build/toastr.min.css') }}">
    <script  src="{{ asset('libs/toastr/build/toastr.min.js') }}"></script>
    <script src="https://ckeditor.com/apps/ckfinder/3.5.0/ckfinder.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/decoupled-document/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
    <script src="{{ asset('js/admin.js') }}"?v="{{ time() }}"></script>
    <script>
        let moduleContentBuilder = new ModuleContentBuilder({
            wrap: '#js--moduleContent',
        });
    </script>
</body>
</html>
