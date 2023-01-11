<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href="">
    <meta charset="utf-8"/>
    <title>@yield('title','Page not found - Hunza Explorers')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <style>
        body {
            height: 100vh;
            background-image: url("{{asset('assets/images/background/bg-pages1.png')}}");
            background-repeat: repeat;
            background-size: auto;
            background-color: white;
        }

        #error {
            left: 30px;
        }

        img {
            height: 220px;
            filter: invert(60%) sepia(59%) saturate(392%) hue-rotate(128deg) brightness(89%) contrast(90%);
        }

        .container {
            max-width: 1220px !important;
        }

        .error__message {
            padding-top: 40px;
        }

        .error__message h2, .error__message h4 {
            color: #161922;
            font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif
        }

        .error__message h2 {
            font-size: 45px;
            line-height: 45px;
            font-weight: 300;
        }

        .error__message h4 {
            font-size: 26px;
            line-height: 30px;
            font-weight: 500;
        }

        .error__message p {
            margin: 0 0 15px;
        }

        .error__message p span {
            font-size: 16px;
            line-height: 45px;
        }

        .error__message p a {
            display: inline;
            margin: 0 0 0 20px;
            background-color: transparent;
            border: 2px solid #41afaa;
            border-radius: 3px;
            padding: 10px 20px;
            transition: background-color .2s ease-in-out;
            color: #747474;
        }

        .error__message p a:hover {
            background-color: #41afaa;
            color: #fff;
        }

        @media screen and (min-width: 768px) and (max-width: 959px) {
            #error {
                position: static !important;
                padding-top: 50px !important;
                margin-top: 0 !important;
            }
        }

        @media screen and (max-width: 767px) {
            img {
                height: 160px;
            }

            .container {
                padding: 0 33px !important;
            }

            #error {
                position: static !important;
                padding-top: 20px !important;
                margin-top: 0 !important;
            }

            .error__message {
                padding-top: 20px;
            }

            .error__message h2 {
                font-size: 30px;
                line-height: 30px;
            }

            .error__message h4 {
                font-size: 19px;
                line-height: 25px;
            }

            .error__message p span {
                line-height: 22px;
                font-size: 16px;
                margin-bottom: 15px;
                display: block;
            }
        }
    </style>

</head>
<body class="position-relative">
<div id="error" class="position-absolute overflow-hidden top-50">
    <div class="container">
        <div class="col-inner row">
            <div class="error__image col-12 col-lg-4 text-center text-left">
                <img src="{{asset('assets/images/error/cone.png')}}" alt="image">
            </div>
            <div class="error__message col-12 col-lg-8 text-center ">
                <h2 class="">Ooops... Error 404</h2>
                <h4>We are sorry, but the page you are looking for does not exist.</h4>
                <p>
                    <span>Please check entered address and try again or</span>
                    <a href="/">go to homepage</a>
                </p>
            </div>
        </div>
    </div>
</div>
</body>

<script>


</script>
