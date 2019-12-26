<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ APP_NAME }} | @yield('title')</title>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- GOOGLE FONTS                       -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('modules/user/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset('modules/user/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Linearicons -->
    <link href="{{ asset('modules/user/vendors/linearicons/Web_Font/style.css') }}" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="{{ asset('modules/user/vendors/owl-carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('modules/user/vendors/owl-carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">

    <!-- Flex Slider -->
    <link href="{{ asset('modules/user/vendors/flexslider/flexslider.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('modules/user/css/base.css') }}" rel="stylesheet">
    <link href="{{ asset('modules/user/css/style.css') }}" rel="stylesheet">

</head>
<body id="body" class="wide-layout">
    <div id="pageWrapper" class="page-wrapper">
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
        <header id="mainHeader" class="main-header">

            <!-- Top Bar -->
            <div class="top-bar bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 is-hidden-sm-down"></div>
                        <div class="col-sm-12 col-md-8">
                            <ul class="nav-top nav-top-right list-inline t-xs-center t-md-right">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-flag-en"></i>
                                        {{ __('english') }}
                                        <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-flag-en"></i>
                                                {{ __('english') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-flag-ar"></i>
                                                {{ __('japan') }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('members.login') }}">
                                        <i class="fa fa-lock"></i>
                                        {{ __('sign in') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('members.register') }}">
                                        <i class="fa fa-user"></i>
                                        {{ __('sign up') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Bar -->

            <!-- Header Header -->
            <div class="header-header bg-white">
                <div class="container">
                    <div class="row row-rl-0 row-tb-20 row-md-cell">
                        <div class="brand col-md-3 t-xs-center t-md-left valign-middle">
                            {{ link_to_route('homes.index', APP_NAME, [], ['class' => 'logo']) }}
                        </div>
                        <div class="header-search col-md-9">
                            <div class="row row-tb-10 ">
                                <div class="col-sm-8">
                                    <form class="search-form">
                                        <div class="input-group">
                                            <input type="text" class="form-control input-lg search-input" placeholder="{{ __('enter keywork here ...') }}" required="required">
                                            <div class="input-group-btn">
                                                <div class="input-group">
                                                    <div class="input-group-btn">
                                                        <button type="submit" class="btn btn-lg btn-search btn-block">
                                                            <i class="fa fa-search font-16"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-4 t-xs-center t-md-right">
                                    <div class="header-cart">
                                        <a href="#">
                                            <span class="icon lnr lnr-cart"></span>
                                            <div><span class="cart-number">0</span>
                                            </div>
                                            <span class="title">Cart</span>
                                        </a>
                                    </div>
                                    <div class="header-wishlist ml-20">
                                        <a href="#">
                                            <span class="icon lnr lnr-heart font-30"></span>
                                            <span class="title">Wish List</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Header -->

            <!-- Header Menu -->
            <div class="header-menu bg-blue">
                <div class="container">
                    <nav class="nav-bar">
                        <div class="nav-header">
                            <span class="nav-toggle" data-toggle="#header-navbar">
                                <i></i>
                                <i></i>
                                <i></i>
                            </span>
                        </div>
                        <div id="header-navbar" class="nav-collapse">
                            <ul class="nav-menu">
                                <li class="active">
                                    {{ link_to_route('homes.index', __('home')) }}
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- End Header Menu -->

        </header>
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->

        <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
        <main id="mainContent" class="main-content">
            <div class="page-container ptb-10">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </main>

        <!-- –––––––––––––––[ FOOTER ]––––––––––––––– -->
        <footer id="mainFooter" class="main-footer">
            <div class="container">
                <div class="row">
                    <p>{{ __('Copyright © 2019 Margin Coupon . All rights reserved.') }}</p>
                </div>
            </div>
        </footer>
        <!-- –––––––––––––––[ END FOOTER ]––––––––––––––– -->

    </div>

    <div id="backTop" class="back-top is-hidden-sm-down show">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Initialize jQuery library          -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script src="{{ asset('modules/user/js/jquery-1.12.3.min.js') }}"></script>

    <!-- –––––––––––––––––––––––––––––––––––––––––------ -->
    <!-- Latest compiled and minified Bootstrap   -->
    <!-- –––––––––––––––––––––––––––––––––––––––––------ -->
    <script src="{{ asset('modules/user/js/bootstrap.min.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('modules/user/vendors/owl-carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- FlexSlider -->
    <script src="{{ asset('modules/user/vendors/flexslider/jquery.flexslider-min.js') }}"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Custom Template JavaScript         -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script src="{{ asset('modules/user/js/main.js') }}"></script>
</body>
</html>