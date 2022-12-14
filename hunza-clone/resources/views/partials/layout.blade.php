<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href="">
    <meta charset="utf-8"/>
    <title>@yield('title','Dashboard')</title>
    <meta name="description"
          content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets."/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="canonical" href="https://keenthemes.com/metronic"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <!--begin:CSS-->
        <link href="{{asset('assets/css/app.css')}}" rel="stylesheet" type="text/css"/>
    <!--end:CSS-->

    @yield('css')
</head>
<!--end::Head-->
<!--begin::Body-->
<body>
<!--begin::Main-->
<!--begin::Header Mobile-->

<!--end::Header Mobile-->
<div class="d-flex flex-column">
    <!--begin::Page-->
    <div class="d-flex flex-row">
        <!--begin::Aside-->

        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column w-100">
            <!--begin::Header-->
            @include('partials.header')
            <!--end::Header-->
            <!--begin::Content-->
            @yield('content')
            <!--end::Content-->
            <!--begin::Footer-->
            @include('partials.footer')
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>


<script src="{{asset('assets/js/app.jsh')}}"></script>
@yield('script')
<!--end:Javascript-->

</body>
<!--end::Body-->
</html>
