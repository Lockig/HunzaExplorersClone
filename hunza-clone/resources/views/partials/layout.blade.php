<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href="">
    <meta charset="utf-8"/>
    <title>@yield('title','Hunza Explorers')</title>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <!--begin:CSS-->
    <link href="{{asset('assets/css/test.css')}}" rel="stylesheet" type="text/css"/>
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
    <!--end::Aside-->
    <!--begin::Wrapper-->
    {{--        <div class="d-flex flex-column w-100">--}}
    <!--begin::Header-->
    <div id="header__wrapper" class="position-relative ">
        @include('partials.header')
        @include('partials.mobile-header')
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div id="content" class="w-100">
        @yield('content')
    </div>
    <!--end::Content-->
    <!--begin::Footer-->
    @include('partials.footer')
    <!--end::Footer-->
</div>
<!--end::Wrapper-->
{{--    </div>--}}
<!--end::Page-->
</div>


<script src="{{asset('assets/js/app.js')}}"></script>
@yield('script')
<!--end:Javascript-->

</body>
<!--end::Body-->
</html>
