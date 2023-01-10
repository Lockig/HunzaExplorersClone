<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href="">
    <meta charset="utf-8"/>
    <title>@yield('title','Discover Pakistan, Travelling')</title>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <!--begin:CSS-->
    <link href="{{asset('assets/css/app.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/layout.css')}}" rel="stylesheet" type="text/css"/>
    <!--end:CSS-->

    @yield('css')
</head>
<!--end::Head-->
<!--begin::Body-->
<body>
<!--begin::Main-->
<!--begin::Header Mobile-->

<!--end::Header Mobile-->
{{--<div class="d-flex flex-column">--}}
<!--begin::Page-->
{{--    <div class="d-flex flex-row">--}}
<!--begin::Aside-->
<div id="wrapper">
    <div class="d-none body_overlay position-fixed top-0 left-0 w-100 h-120 z-9002"
         style="background: rgba(0,0,0,.6);"></div>
    <!--end::Aside-->
    <!--begin::Wrapper-->
    {{--        <div class="d-flex flex-column w-100">--}}
    <!--begin::Header-->
    <div id="header__wrapper">
        @include('partials.header')
        @include('partials.mobile-header')
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    @yield('content')

    <!--end::Content-->
    <!--begin::Footer-->
    <footer id="footer">
        @include('partials.footer')
    </footer>
    <div id="body_overlay" class="position-fixed top-0 left-0 w-100 d-none"></div>
    <div id="side-slide" aria-expanded="false">
        <div class="close-wrapper">
            <a href="#" class="close">
                <i class="fa fa-doutone fa-x"></i>
            </a>
        </div>
        <div class="extras">
            <a href="#" target="_blank" class="d-block text-capitalize action-button">customize your TRIP</a>
            <div class="extras__wrapper d-flex justify-content-center align-items-center flex-wrap ">
                <div class="d-flex w-100 justify-content-center">
                    <a href="#" class="account d-flex align-items-center">
                        <i class="fa fa-regular fa-user"></i>
                    </a>
                    <a href="#" class="cart"><i class="fa fa-light fa-bag-shopping"></i></a>
                </div>

                <a href="#" class="d-block text-center lang-active">Language <i
                        class="drop-btn fa fa-solid fa-angle-down"></i></a>
            </div>
        </div>
        <div class="lang__wrapper">
            <ul>
                <li><a class="d-block" href="#">Tiếng Việt</a></li>
                <li><a class="d-block" href="#">Tiếng Anh</a></li>
            </ul>
        </div>
        <div class="menu__wrapper">
            <nav id="menu">
                <ul class="w-100 mb-0">
                    <li class="w-100 position-relative">
                        <a href="#" class="d-block"><span>Home</span></a>
                        <ul class="sub-menu">
                            <li><a class="text-uppercase" href="#"><span>About us</span></a></li>
                            <li><a class="text-uppercase" href="#"><span>Our Team</span></a></li>
                            <li><a class="text-uppercase" href="#"><span>Testimonials</span></a></li>
                            <li><a class="text-uppercase" href="#"><span>CEO Message</span></a></li>
                        </ul>
                        <a class="menu-toggle d-block position-absolute m-0 p-0">
                            <i class="element fa fa-duotone fa-plus"></i>
                        </a>
                    </li>
                    <li class="w-100 position-relative">
                        <a href="#" class="d-block"><span>Tours<span
                                    class="description d-block">explore the world</span></span></a>
                        <ul class="sub-menu">
                            <li><a class="text-uppercase" href="#"><span>Pakistan</span></a></li>
                            <li><a class="text-uppercase" href="#"><span>Afghanistan</span></a></li>
                        </ul>
                        <a class="menu-toggle d-block position-absolute m-0 p-0">
                            <i class="element fa fa-duotone fa-plus"></i>
                        </a>
                    </li>
                    <li class="w-100 position-relative">
                        <a href="#" class="d-block"><span>Treks<span
                                    class="description d-block">full of adventure</span></span></a>
                        <ul class="sub-menu">
                            <li><a class="text-uppercase" href="#"><span>Pantundas Trek</span></a></li>
                            <li><a class="text-uppercase" href="#"><span>Batunra Trek</span></a></li>
                            <li><a class="text-uppercase" href="#"><span>Shimshal Pamir Trek</span></a></li>
                            <li><a class="text-uppercase" href="#"><span>Rakaposhi and Pantundass Trek</span></a></li>
                            <li><a class="text-uppercase" href="#"><span>Great Karakoram Traverse Trek</span></a></li>
                            <li><a class="text-uppercase" href="#"><span>K2 Base Camp & Gondogoro La Trek</span></a>
                            </li>
                            <li><a class="text-uppercase" href="#"><span>Biafo Hispar & Snow Lake Trek</span></a></li>
                            <li><a class="text-uppercase" href="#"><span>Round Nanaga Parbat Trek</span></a></li>
                            <li><a class="text-uppercase" href="#"><span>Nanga Parbat Base Camp Trek</span></a></li>
                            <li><a class="text-uppercase" href="#"><span>Rush Lake Trek Trek</span></a></li>
                        </ul>
                        <a class="menu-toggle d-block position-absolute m-0 p-0">
                            <i class="element fa fa-duotone fa-plus"></i>
                        </a>
                    </li>
                    <li class="w-100 position-relative">
                        <a href="#" class="d-block"><span>Safaris<span class="description d-block">explore remote valleys</span></span></a>
                        <ul class="sub-menu">
                            <li><a class="text-uppercase" href="#"><span>Hunza Khunjerab jeep Safari</span></a></li>
                            <li><a class="text-uppercase" href="#"><span>Deosai Jeep Safari</span></a></li>
                            <li><a class="text-uppercase" href="#"><span>North Pakistan Jeep Safari</span></a></li>
                        </ul>
                        <a class="menu-toggle d-block position-absolute m-0 p-0">
                            <i class="element fa fa-duotone fa-plus"></i>
                        </a>
                    </li>
                    <li class="w-100 position-relative">
                        <a href="#" class="d-block"><span>Expeditions<span
                                    class="description d-block">mountaineering</span></span></a>
                        <ul class="sub-menu">
                            <li><a class="text-uppercase" href="#"><span>Passu Peak Expedition</span></a></li>
                            <li><a class="text-uppercase" href="#"><span>Shishper Peak Expedition</span></a></li>
                        </ul>
                        <a class="menu-toggle d-block position-absolute m-0 p-0">
                            <i class="element fa fa-duotone fa-plus"></i>
                        </a>
                    </li>
                    <li class="w-100 position-relative">
                        <a href="#" class="d-block"><span>Contact us</span></a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="contact-detail">
            <ul class="text-center">
                <li>Dream - Discover - Explore</li>
                <li>
                    <i class="fa fa-phone text-white "></i>
                    <a href="/">+92 333 5626529</a>
                </li>
                <li>
                    <i class="fa fa-phone text-white"></i>
                    <a href="/">+92344118612</a>
                </li>
                <li>
                    <i class="text-white fa fa-mail-bulk"></i>
                    <a href="/">hunzaexplorers@gmail.com</a>
                </li>
            </ul>
        </div>
        <div class="social-menu">
            <ul class="text-center">
                <li>
                    <a class="text-white" href="/">Tiếng Việt</a>
                </li>
                <li>
                    <a class="text-white" href="/">English</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="login" class="d-flex flex-column position-fixed top-0 mt-0 h-100" aria-expanded="false">
        <a class="close">
            <i class="fa fa-doutone fa-x"></i>
        </a>
        <h4 class="text-capitalize text-center">Login</h4>
        <form id="login-form" class="form" method="#" action="#">
            @csrf
            <div class="form-group w-100 position-relative p-0">
                <i class="d-block position-absolute fa fa-solid fa-user"></i>
                <label class="d-block position-absolute" for="username">Username or email&nbsp;<span
                        class="required">*</span></label>
                <input class="w-100 m-0 form-control form-control-solid" id="username" name="username" type="text"/>
            </div>
            <div class="form-group w-100 position-relative p-0">
                <i class="d-block position-absolute fa fa-solid fa-lock"></i>
                <label class="d-block position-absolute" for="password">Password&nbsp;<span
                        class="required">*</span></label>
                <input class="w-100 m-0 form-control form-control-solid" id="username" name="username" type="password"/>
                <span class="show-password position-absolute"><i class="fa fa-solid fa-eye"></i></span>
            </div>
            <div>
                <label>
                    <input id="remember" name="remember" type="checkbox"/>
                    <span>Remember me</span>
                </label>
                <button class="d-block w-100" name="login" type="submit">Login</button>
            </div>
            <div class="lost-password text-center">
                <a href="#">Lost your password?</a>
            </div>
            <p class="create-account m-0 text-center">
                <a href="#">Create an account?</a>
            </p>
        </form>
    </div>
    <!--end::Footer-->
</div>
<!--end::Wrapper-->
{{--    </div>--}}
<!--end::Page-->

<script src="{{asset('assets/js/app.js')}}"></script>
@yield('script')
<!--end:Javascript-->

</body>
<!--end::Body-->
</html>
