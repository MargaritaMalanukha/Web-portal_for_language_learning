<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" type="text/css" href="/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
        <div class="header">
            <div class="head_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="top-box">
                                <ul class="sociel_link">
                                    <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="top-box">
                                <p>long established fact that a reader will be </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo"> <a href="{{ url('/home') }}"><img src="{{ asset('images/logo.svg') }}" alt="logo"/></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    @if(session()->has('password'))
                                    <li class="active"> <a href={{ url('/home') }}>Главная</a> </li>
                                    <li> <a href="{{ url('/rooms') }}">Комнаты</a> </li>
                                    <li> <a href="{{ url('/tests') }}">Тесты</a></li>
                                    <li> <a href="{{ url('/cabinet') }}">Профиль</a> </li>
                                    <li> <a href="{{ url('/logout') }}">Выйти</a> </li>
                                    @else
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                            <li><a class="buy" href="{{ url('/login') }}">Войти</a></li>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                            <li><a class="buy" href="{{ url('/register') }}">Регистрация</a></li>
                                        </div>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end header inner -->

    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">

                        <h2>@if(session()->has('page_caption'))
                                <h2>{{ session('page_caption') }}</h2>
                            @else
                                <h2>About</h2>
                            @endif
                        </h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
@yield('content'))
<!-- footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <ul class="sociel">
                        <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li> <a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3>Связаться с нами</h3>
                        <span>улица Политехничная, 6, Киев, 02000<br>
                        +987 654 3210</span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3>Дополнительно</h3>
                        <ul class="lik">
                            <li> <a href="#">О нас</a></li>
                            <li> <a href="#">Условия пользования</a></li>
                            <li> <a href="#">Политика конфиденциальности</a></li>
                            <li> <a href="#">Новости</a></li>
                            <li> <a href="#">Связаться с нами</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3>Про *компания*</h3>
                        <span>Мы предлагаем сервис онлайн изучения английского языка с 2020 года</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright 2020 All Right Reserved By KPI TEF</p>
        </div>

    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-3.0.0.min.js"></script>
<script src="/js/plugin.js"></script>
<!-- sidebar -->
<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/js/custom.js"></script>
<script src="/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function(){

            $(this).addClass('transition');
        }, function(){

            $(this).removeClass('transition');
        });
    });

</script>
</body>
</html>
