@extends('partials.layout')

@section('css')
    <style>
        .about-us__content {
            width: 100%;
            padding: 0 50px;
            background-position: 0 0 !important;
            background-repeat: no-repeat;
            position: relative;

            background-image: url({{asset('assets/images/background/bg-pages1.png')}});
        }

        .about-us .content {
            padding-top: 35px;
            padding-left: 7.5px;
            padding-right: 7.5px;
            width: 100%;
        }

        .content__wrapper--margin {
            margin-bottom: 35px;
        }

        .list {
            margin: -1px 0 -1px 0;
        }
    </style>
@endsection
@section('content')
    <div class="about-us .section__wrapper">
        <div class="container w-100">
            <div class="about-us__content">
                <div class="content">
                    <div class="content__wrapper">
                        <div class="content__wrapper--margin">
                            <div class="d-flex">
                                <div class="left">
                                    <ul class="list flex-grow-1 overflow-hidden p-0">
                                        <li class="list__item">
                                            <a href="#">
                                                <i></i>
                                                <span>Introduction</span>
                                            </a>
                                        </li>
                                        <li class="list__item">
                                            <a href="#">
                                                <i></i>
                                                <span>Our Staff</span>
                                            </a>
                                        </li>
                                        <li class="list__item">
                                            <a href="#">
                                                <i></i>
                                                <span>Why us?</span>
                                            </a>
                                        </li>
                                        <li class="list__item">
                                            <a href="#">
                                                <i></i>
                                                <span>Terms & Conditions</span>
                                            </a>
                                        </li>
                                        <li class="list__item">
                                            <a href="#">
                                                <i></i>
                                                <span>FAQs</span>
                                            </a>
                                        </li>
                                        <li class="list__item">
                                            <a href="#">
                                                <i></i>
                                                <span>Safety Policy</span>
                                            </a>
                                        </li>
                                        <li class="list__item">
                                            <a href="#">
                                                <i></i>
                                                <span>Privacy Policy</span>
                                            </a>
                                        </li>
                                        <li class="list__item">
                                            <a href="#">
                                                <i></i>
                                                <span>Price</span>
                                            </a>
                                        </li>
                                        <li class="list__item">
                                            <a href="#">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span>Payment</span>
                                            </a>
                                        </li>
                                        <li class="list__item">
                                            <a href="#">
                                                <i></i>
                                                <span>Cancellation/Refund</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="right"></div>
                            </div>
                        </div>
                        <div class="content__wrapper--space content__wrapper--margin" style="height: 32px;">
                            <span class="content__wrapper--inner"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
