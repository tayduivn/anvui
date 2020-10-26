<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon.png') }}">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon.png') }}">
    <!-- Standard iPad Touch Icon--> 
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon.png') }}">
    <!-- Standard iPhone Touch Icon--> 
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $HEADER['metaTitle'] }}</title>
    <meta name="description" content="{{ $HEADER['metaDesc'] }}"/>
    <meta name="keyword" content="{{ $HEADER['metaKeyword'] }}"/>

    <meta name="author" content="namdoanquoc.1998@gmail.com">
    <meta property="og:image" content="{{ $HEADER['img'] }}">
    <meta property="og:title" content="{{ $HEADER['metaTitle'] }}">
    <meta property="og:description" content="{{ $HEADER['metaDesc'] }}">
    <meta property="og:image:type" content="">
    <meta property="og:image:width" content="">
    <meta property="og:image:height" content="">
    <meta property="og:image:alt" content="">

    <meta name=twitter:description content="{{ $HEADER['metaDesc'] }}">
    <meta name=twitter:title content="{{ $HEADER['metaTitle'] }}">
    <meta name=twitter:site content="">
    <meta name=twitter:image content="{{ $HEADER['img'] }}">
    <meta name=twitter:creator content="">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap&subset=vietnamese">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=1.0.3">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}?v={{ time() }}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169847335-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-169847335-1');
    </script>
    <style>
        figure.image.image_resized {
            margin-right: auto;
            margin-left: auto
        }
    </style>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6MQNZV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @php 
    $routeInfo = Route::getCurrentRoute()->getAction();
    @endphp
    <nav class="pushy pushy-left">
        <div class="pushy-content">
            <ul>
                <!-- Submenu -->
                <li class="pushy-link"><a href="{{ route('home.index') }}" title="{{ $HEADER['metaTitle'] }}">Trang chủ</a></li>
                <li class="pushy-link"><a href="{{ route('intro.index') }}" title="{{ $HEADER['metaTitle'] }}">Giới thiệu</a></li>
                <li class="pushy-link"><a href="{{ route('page.software') }}" title="{{ $HEADER['metaTitle'] }}">Phần mềm nhà xe</a></li>
                <li class="pushy-link"><a href="{{ route('news.index') }}" title="{{ $HEADER['metaTitle'] }}">Tin tức</a></li>
                <li class="pushy-link"><a href="{{ route('recruit.index') }}" title="{{ $HEADER['metaTitle'] }}">Tuyển dụng</a></li>
            </ul>
        </div>
    </nav>

    <div class="site-overlay"></div>

    @if($routeInfo['as'] == 'home.index')
    <header class="avheader">
        <nav class="avnavbar--destop" id="js_sticky__header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="avnavbar">
                            <ul class="avnavbar__left">
                                <li class="avnavbar__logo"><a href="{{ route('home.index') }}" title="{{ $HEADER['metaTitle'] }}">
                                    <div class="icon-logo_w"></div>    
                                </a></li>
                            </ul>
                            <ul class="avnavbar__right">
                                <li><a href="{{ route('home.index') }}">Trang chủ</a></li>
                                <li><a href="{{ route('intro.index') }}">Giới thiệu</a></li>
                                <li><a href="{{ route('page.software') }}">Phần mềm nhà xe</a></li>
                                <li><a href="{{ route('news.index') }}">Tin tức</a></li>
                                <li><a href="{{ route('recruit.index') }}">Tuyển dụng</a></li>
                                <li class="language">
                                    @if( str_replace('_', '-', app()->getLocale()) == 'vi' )
                                    <a href="javascript:;"> <span class="avicon icon-vn"></span> Tiếng việt</a>
                                    @else
                                    <a href="javascript:;"> <span class="avicon icon-us"></span> English</a>
                                    @endif
                                    <ul class="avnavbar__dropdown">
                                        <li class="d-none"><a href="{{ route('lang','en') }}" title="{{ $HEADER['metaTitle'] }}"><span class="avicon icon-us"></span> English</a></li>
                                        <li><a href="{{ route('lang','vi') }}" title="{{ $HEADER['metaTitle'] }}"><span class="avicon icon-vn"></span> Tiếng Việt</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="avnavbar--mobile">
            <div class="container">
                <div class="avnavbar--mobile__wrap">
                    <ul class="avnavbar--mobile__left">
                        <li>
                            <a href="{{ route('home.index') }}" title="{{ $HEADER['metaTitle'] }}" class="avnavbar--mobile__logo">                                    
                                <div class="icon-logo_w"></div>    
                            </a>
                        </li>
                    </ul>
                    <ul class="avnavbar--mobile__right">
                        <li><a href="javascript:;" class="menu-btn" rel="javascript"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        


        <div class="banner">
            <div class="container">  
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col--12-ipad">
                        <div class="banner__content wow slideInLeft" data-wow-duration=".5s">
                            <h1>Nền tảng số hoá ngành vận tải hành khách đường dài.</h1>
                            <p>AN VUI là  Doanh nghiệp đầu tiên tại Việt Nam cung cấp nền tảng công nghệ số hoá ngành vận tải hành khách đường dài. Giúp các nhà vận tải hành khách chuyển đổi số, chủ động quản trị khoa học, nâng cao năng lực cạnh tranh từ đó giữ vững thị phần và mở rộng quy mô.</p>
                            <a href="javascript:;" data-toggle="modal" data-target="#modal--register" class="btn--reg">ĐĂNG KÝ DÙNG THỬ</a>
                        </div>    
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col--hidden-ipad">
                        <div class="banner__img">
                            <img src="{{ asset('imgs/img-banner.png') }}" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </header>
    @else
    <header>
        <nav class="navbar--white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="navbar--white__wrap">
                            <div class="navbar--white__left">
                                <a href="{{ route('home.index') }}" title="{{ $HEADER['metaTitle'] }}" class="navbar--white__logo">
                                    <img src="{{ asset('imgs/logo_b.png') }}" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                                </a>
                            </div>
                            <div class="navbar--white__right">
                                <ul>
                                    <li><a href="{{ route('home.index') }}" title="{{ $HEADER['metaTitle'] }}">Trang chủ</a></li>
                                    <li><a href="{{ route('intro.index') }}" title="{{ $HEADER['metaTitle'] }}">Giới thiệu</a></li>
                                    <li><a href="{{ route('page.software') }}" title="{{ $HEADER['metaTitle'] }}">Phần mềm nhà xe</a></li>
                                    <li><a href="{{ route('news.index') }}" title="{{ $HEADER['metaTitle'] }}">Tin tức</a></li>
                                    <li><a href="{{ route('recruit.index') }}" title="{{ $HEADER['metaTitle'] }}">Tuyển dụng</a></li>
                                    <li><a class="btn--reg" data-toggle="modal" data-target="#modal--register">ĐĂNG KÝ TƯ VẤN</a></li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </nav>
        <nav class="avnavbar--mobile avnavbar--sm--blue">
            <div class="container">
                <div class="avnavbar--mobile__wrap">
                    <ul class="avnavbar--mobile__left">
                        <li>
                            <a href="{{ route('home.index') }}" title="{{ $HEADER['metaTitle'] }}" class="avnavbar--mobile__logo">                                    
                                <div class="icon-logo_b"></div>    
                            </a>
                        </li>
                    </ul>
                    <ul class="avnavbar--mobile__right">
                        <li><a href="javascript:;" class="menu-btn" rel="javascript"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @endif

    
    @yield("content")

    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  col--12-ipad">
                        <div class="footer__logo">
                            <a href="{{ route('home.index') }}" title="{{ $HEADER['metaTitle'] }}">
                                <div class="icon-logo_b"></div>    
                            </a>
                        </div>
                        <div class="footer__company__intro">
                            <h3>CÔNG TY CỔ PHẦN CÔNG NGHỆ ANVUI</h3>
                            <p>Giấy chứng nhận ĐKKD số 0107003437 do Sở KH& ĐT TP. Hà Nội cấp lần đầu ngày 23/09/2015.</p>
                        </div>

                        <div class="footer__company__address">
                            <p><span>Chi nhánh phía Bắc</span> - Email: info@anvui.vn - Điện thoại: 1900 1911 Ext 1 </p>
                            <p>Địa chỉ: Toà Ecolife Capital, Số  58 Tố Hữu, Nam Từ Liêm, Hà Nội</p>
                        </div>
                        
                        <div class="footer__company__address">
                            <p><span>Chi nhánh Phía Nam</span> - Email: anvuihcm@anvui.vn - Điện thoại : 1900 1911 Ext 2</p>
                            <p>Địa chỉ: J65 Lầu 6, Toà nhà Sinh Lợi Plaza, KĐT Trung Sơn, Bình Chánh, Hồ Chí Minh</p>
                            {{-- <p>Hotline: 038 776 4444</p>  --}}
                            <p>Hotline: 024.9999.6666</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  col--12-ipad">
                        <div class="footer__menu">
                            <a href="" title="{{ $HEADER['metaTitle'] }}">Chính sách bảo mật</a>
                            <a href="" title="{{ $HEADER['metaTitle'] }}">Chính sách hoạt động</a>
                            <a href="" title="{{ $HEADER['metaTitle'] }}">Điều khoản sử dụng</a>
                        </div>
                        <div class="footer__app">
                            <span>Tải ứng dụng</span>
                            <a href="" title="{{ $HEADER['metaTitle'] }}"><img src="{{ asset('imgs/appst.png') }}" alt="{{ $HEADER['metaTitle'] }}" title="{{ $HEADER['metaTitle'] }}"></a>
                            <a href="" title="{{ $HEADER['metaTitle'] }}"><img src="{{ asset('imgs/ggplay.png') }}" alt="{{ $HEADER['metaTitle'] }}" title="{{ $HEADER['metaTitle'] }}"></a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="footer__mid">
            <div class="container">
                <h3 class="partner__head">Đối tác</h3>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col--12-ipad">
                        <div class="partner">
                            <a href="https://vnpay.vn/" target="_BLANK" title="{{ $HEADER['metaTitle'] }}" class="d-inline-block">
                                <img src="{{ asset('imgs/partner/vnpayqr.png') }}" class="img-fluid" alt="{{ $HEADER['metaTitle'] }}">
                            </a>
                            <a href="https://zalopay.vn/" target="_BLANK" title="{{ $HEADER['metaTitle'] }}">
                                <img src="{{ asset('imgs/partner/zalopay.png') }}" class="img-fluid" alt="{{ $HEADER['metaTitle'] }}">
                            </a>
                            <a href="https://vinid.net/" target="_BLANK" title="{{ $HEADER['metaTitle'] }}">
                                <img src="{{ asset('imgs/partner/vinid.webp') }}" class="img-fluid" alt="{{ $HEADER['metaTitle'] }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col--12-ipad">
                        <div class="partner partner--right">
                            <a href="" title="{{ $HEADER['metaTitle'] }}"><i class="d-inline-block icon-pn4"></i></a>
                            <a href="" title="{{ $HEADER['metaTitle'] }}"><i class="d-inline-block icon-pn5"></i></a>
                            <a href="" title="{{ $HEADER['metaTitle'] }}"><i class="d-inline-block icon-pn6"></i></a>
                        </div>
                    </div>
                </div>
                <div class="partner--mobile__wrap">
                    <div class="partner--mobile">
                        <a href="https://vnpay.vn/" target="_BLANK" title="{{ $HEADER['metaTitle'] }}">
                            <img src="{{ asset('imgs/partner/vnpay.png') }}" alt="{{ $HEADER['metaTitle'] }}">
                        </a>
                        <a href="https://zalopay.vn/" target="_BLANK" title="{{ $HEADER['metaTitle'] }}" class="d-inline-block">
                            <img src="{{ asset('imgs/partner/zalopay.png') }}" class="img-fluid" alt="{{ $HEADER['metaTitle'] }}">
                        </a>
                    </div>
                    <div class="partner--mobile">
                        <a href="https://vinid.net/" target="_BLANK" title="{{ $HEADER['metaTitle'] }}">
                            <img src="{{ asset('imgs/partner/vinid.webp') }}" class="img-fluid" alt="{{ $HEADER['metaTitle'] }}">
                        </a>
                        <a href="" title="{{ $HEADER['metaTitle'] }}"><i class="d-inline-block icon-pn4"></i></a>
                    </div>
                    <div class="partner--mobile">
                        <a href="" title="{{ $HEADER['metaTitle'] }}"><i class="d-inline-block icon-pn5"></i></a>
                        <a href="" title="{{ $HEADER['metaTitle'] }}"><i class="d-inline-block icon-pn6"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <span>COPYRIGHT BY  <a href="">ANVUI</a> - 2020</span>
        </div>
    </footer>

    <div class="modal modal--register" id="modal--register">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="modal--register__img">
                            <img src="{{ asset('imgs/img-reg.png') }}" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                            <div class="modal--register__content">
                                <p>Nền tảng quản lý</p>
                                <h1>Tối ưu</h1>
                                <p>Và</p>
                                <h1>Thuận tiện</h1>
                                <p>cho mọi nhà xe</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="modal--register__form">
                            <form action="{{ route('register_use.store') }}" method="POST" id="js-form--register">
                                @csrf
                                <h3 class="modal--register__form__header">
                                    Đăng ký tư vấn
                                </h3>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <label for="">Họ tên người liên hệ </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                            <input type="text" name="user_name" required class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <label for="">Tên nhà xe </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                            <input type="text" name="company_name" required class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <label for="">Số điện thoại </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                            <input type="number" name="phone" required class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <label for="">Địa chỉ </label>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                            <input type="text" name="address" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

                                        </div>
                                </div>
                                {{-- <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                            <div class="input-style">
                                                <input type="checkbox" name="agreement_check" id="contract-check">
                                                <label for="contract-check">Tôi đã đọc và đồng ý với <a href="" title="{{ $HEADER['metaTitle'] }}">Điều khoản của An Vui</a></label>
                                            </div>
                                            <div class="agreement_check-error">
                                                <label for="agreement_check" class="error" ></label>
                                            </div>
                                        </div>
                                </div> --}}
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                            <button class="btn--reg" type="submit">ĐĂNG KÝ </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}?v=1.0.3"></script>
    
    @if( session('ACTION_STATUS') != null )
        @if (session('ACTION_STATUS') == 'SUCCESS')
        <script>
            $(window).on('load', function(){
                toastr.success("{{Session::get('ACTION_MSG') }}")
            });
        </script>
        @endif

        @if (session('ACTION_STATUS') == 'WARNING')
        <script>
            $(window).on('load', function(){
                toastr.warning("{{Session::get('ACTION_MSG') }}")
            });
        </script>
        @endif

        @if (session('ACTION_STATUS') == 'ERROR')
        <script>
            $(window).on('load', function(){
                toastr.error("{{Session::get('ACTION_MSG') }}")
            })
        </script>
        @endif
    @endif
    <script>
    $('oembed[url]').each((ind, elem) => {
        let url = $(elem).attr('url')
        $(elem).parent().append(`<iframe width="100%" height="500px" src="${url}"></iframe>`)
    })
</script>
    <script>
    $(document).ready(function() {

        if(window.location.href.indexOf('#register') != -1) {
            $('#modal--register').modal('show');
        }

    });
        $( document ).ready(function() {
            $("#toc").tocify({
                showEffect: "fadeIn",
                selectors: "h3.js_tock__mock",
                scrollTo: 50,
                extendPage: false,
            });
            new WOW().init();
            // $("#js_sticky__header").sticky({topSpacing:0});

        $('#js_custommer__carousel').owlCarousel({
            loop:true,
            margin:60,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    dots:true,
                },
                600:{
                    items:3,
                    dots:true,
                },
                1000:{
                    items:4,
                    dots:true,
                    loop:false
                }
            }
        })

        
        $('#js-form--register').validate({
            rules: {
                user_name: {
                    required: true,
                    maxlength: 150,
                },
                company_name:  {
                    required: true,
                    maxlength: 150,
                },
                phone: {
                    required: true,
                    number: true
                },
                address: {
                    minlength: 5
                },
                // agreement_check: {
                //     required: true,
                // }
            },

            messages: {
                user_name: {
                    required: "Tên người liên hệ không được để trống !",
                    maxlength: "Tên người liên hệ tối đa 150 kí tự !",
                },
                company_name:  {
                    required: "Tên công ty không được để trống !",
                    maxlength: "Tên công ty tối đa 150 kí tự !",
                },
                phone: {
                    required: "Số điện thoại không được để trống !",
                    number: "Số điện thoại không đúng định dạng!",
                },
                address: {
                    maxlength: "Địa chỉ tối đa 255 kí tự !",
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        $('#js-form--reg_cv').validate({
            rules: {
                cv: {
                    required: true,
                    accept:"application/pdf",
                    filesize : 2048,
                },
                name: {
                    required: true,
                    maxlength: 150,
                },
                email:  {
                    required: true,
                    maxlength: 150,
                    email: true,
                },
                phone: {
                    required: true,
                    number: true,
                    maxlength:15,
                },
                
            },

            messages: {
                name: {
                    required: "Họ tên không được để trống !",
                    maxlength: "Họ tên tối đa 150 kí tự !",
                },
                email:  {
                    required: "Email không được để trống !",
                    maxlength: "Email tối đa 150 kí tự !",
                    email: "Email không đúng định dạng !",
                },
                phone: {
                    required: "Số điện thoại không được để trống !",
                    number: "Số điện thoại không đúng định dạng!",
                },
                cv: {
                    required: "CV không được bỏ trống !",
                    extension: "Chỉ cho phép file pdf !",
                    filesize: "File upload tối đa 2MB",
                }
            },
            // submitHandler: function(form) {
            //     form.submit();
            // }
        });
    });
    </script>
</body>
</html>
