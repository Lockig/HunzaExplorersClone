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
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
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
<div id="wrapper" class="w-100 m-0">
    <div class="d-none body_overlay position-fixed top-0 left-0 w-100 h-120 z-9002" style="background: rgba(0,0,0,.6);"></div>
    <!--end::Aside-->
    <!--begin::Wrapper-->
    {{--        <div class="d-flex flex-column w-100">--}}
    <!--begin::Header-->
    <div id="header__wrapper" class="position-relative">
        @include('partials.header')
        @include('partials.mobile-header')
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div id="content" class="w-100 position-relative">
        <div class="content__wrapper">
            <div class="section__group">
                <div class="section section-content">
                    <div class="content__wrapper">
                        @yield('content')
                    </div>
                </div>
                <div class="section section-footer">
                    @yield('content-footer')
                </div>
            </div>
        </div>
    </div>
    <!--end::Content-->
    <!--begin::Footer-->
    <footer id="footer" >
        @include('partials.footer')
    </footer>

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
