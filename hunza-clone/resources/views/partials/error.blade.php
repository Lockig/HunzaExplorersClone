<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href="">
    <meta charset="utf-8"/>
    <title>@yield('title','Page not found - Hunza Explorers')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <style>
        :root{
            --primaryColor: #41afaa;
        }
        #error {
            position:static;
            padding-top: 20px;
            margin-top: 0;
        }
        .container{
            margin: 0 auto;
            position: relative;
        }
        .error__image {

        }
        .error__image img{
            width: 160px;
            height: 160px;
            filter: invert(68%) sepia(93%) saturate(295%) hue-rotate(124deg) brightness(77%) contrast(83%);
        }
        .error__message h2{
            font-size: 30px;
            line-height: 30px;
        }
        .error__message h4{
            font-size: 19px;
            line-height: 25px;
        }
        .error__message p  a{
            display: inline;
            margin: 0 0 0 20px;
            border-color: var(--primaryColor);
            background-color:transparent;
            border-width: 2px;
            border-radius: 3px;
            transition: background-color .2s ease-in-out;
            cursor:pointer;
            overflow: hidden;
            padding: 10px 20px;
            text-decoration: none;
        }
    </style>

</head>
<body>
<div id="error">
    <div class="container d-flex justify-content-center flex-column">
        <div class="error__image">
            <img src="{{asset('assets/images/error/traffic_cone.png')}}" alt="image" >
        </div>
        <div class="error__message">
            <h2 class="">Ooops... Error 404</h2>
            <h4>We are sorry, but the page you are looking for does not exist.</h4>
            <p>
                <span>Please check entered address and try again or</span>
                <a href="/" >go to homepage</a>
                </p>
        </div>
    </div>
</div>
</body>

<script>


</script>
