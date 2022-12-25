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
{{--    <link href="{{asset('assets/css/test.css')}}" rel="stylesheet" type="text/css"/>--}}
    <!--end:CSS-->
        <style>
            body{
                width: 100%;
                height: 100vh;
                background: url({{asset('assets/images/background/bg-pages1.png')}}) repeat;
                position: relative;
                overflow-x: visible ;
            }
            #error{
                width: 100%;
                overflow: hidden;
                position: absolute;
                top: 50%;
                margin-top: -150px;
                left:30px;
            }
            #error #error__content .error__inner{
                margin: 0 12px 40px 12px;
            }
            #error__content .row .error__image img{
                width: 250px;
                filter: invert(62%) sepia(56%) saturate(395%) hue-rotate(128deg) brightness(86%) contrast(94%);
            }
            .error__desk{
                padding-top: 40px;
            }
            .error__desk div h2{
                font-size: 45px;
                line-height: 45px;
                margin-bottom: 15px;
                font-weight: 300;
            }
            .error__desk div h4{
                font-size: 26px;
                line-height: 30px;
                font-weight: 500;
                letter-spacing: 0;
                margin-bottom: 15px;
            }
            .error__desk div p{
                margin: 0 0 15px;
            }
            .error__desk div p span{
                line-height: 45px;
                font-size: 16px;
            }
            .error__desk div p a{
                text-decoration: none;
                display: inline;
                margin: 0 0 0 20px;
                padding: 10px 20px;
                color: #747474;
                background-color:transparent;
                border: 2px solid #41afaa;
                border-radius: 3px;
                cursor:pointer;
                transition: background-color .2s ease-in-out;
            }
            .error__desk div p  a:hover{
                background-color:#41afaa;
            }


            @media only screen and (min-width: 768px) and (max-width: 959px){
                #error{
                    width: 100%;
                    position: static;
                    padding-top: 50px;
                    margin-top: 0;
                }
            }
        </style>
</head>
<body>
    <div id="error" class="position-md-static pt-10">
        <div class="container">
            <div id="error__content" class="w-100 m-0 d-flex flex-column">
                <div class="error__inner"></div>
                <div class="row error__main">
                    <div class="col-md-12 col-lg-3 error__image">
                        <img src="{{asset('assets/images/error/traffic_cone.png')}}" alt="images"/>
                    </div>
                    <div class="col-md-12 col-lg-8 error__desk">
                        <div class="d-flex flex-column">
                            <h2>Oooops... Error 404</h2>
                            <h4>We are sorry, but the page you are looking for does not exist.</h4>
                            <p>
                                <span>Please check entered address and try again or </span>
                                <a href="/"> go to homepage</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

