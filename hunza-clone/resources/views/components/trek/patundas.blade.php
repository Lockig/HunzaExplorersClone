@extends('partials.layout')


@section('content')
    <div class="section_group">
        <div class="section__wrapper"
             style="background: #e5e5e5 url('{{asset('assets/images/background/bg-pages1.png')}}') !important;">
            <div class="content__wrapper">
                <div class="content__inner" style="padding-top: 40px;">
                    <div class="row m-0 p-0" style="padding-right: 10px;padding-left: 10px;">
                        <div class="col-12 col-sm-8 px-0 align-items-stretch">
                            <div class="col__inner bg-white d-flex flex-column" style="padding:10px !important;">
                                <div class="image__wrapper" style="margin-bottom: 35px;">
                                    <img class="h-auto" src="{{asset('assets/images/trek/trek_1.jpg')}}" alt="trek"
                                         title="Patundass Meadows"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 px-0 align-items-stretch">
                            <div class="col__inner bg-white p-1 d-flex flex-column">
                                <div class="col__wrapper">
                                    <h2 class="text-left text-black font-weight-bold" style="margin-bottom: 15px;">
                                        Patundas Trek</h2>
                                    <div class="overview">
                                        <div class="overview__wrapper">
                                            <h2 class="text-black"
                                                style="margin-bottom: 15px;font-size:26px;line-height: 29px;"><span
                                                    style="color:#00ccff;" class="text-uppercase font-weight-bold">overview</span>
                                            </h2>
                                            <div>
                                                <div class="row">
                                                    <div class="col-4"
                                                         style="font-size: 13px;padding-right: 0; color: #626262;">
                                                        <strong>Trek Name:</strong>
                                                    </div>
                                                    <div class="col-sm-6 col-lx-8"
                                                         style="font-size: 13px;padding-left: 0">
                                                        Hunza Patundass Trek
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4"
                                                         style="font-size: 13px;padding-right: 0; color: #626262;">
                                                        <strong>Range:</strong>
                                                    </div>
                                                    <div class="col-sm-6 col-lx-8"
                                                         style="font-size: 13px;padding-left: 0">
                                                        Karakoram
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4"
                                                         style="font-size: 13px;padding-right: 0; color: #626262;">
                                                        <strong>Zone:</strong>
                                                    </div>
                                                    <div class="col-sm-6 col-lx-8"
                                                         style="font-size: 13px;padding-left: 0">
                                                        Open
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4"
                                                         style="font-size: 13px;padding-right: 0; color: #626262;">
                                                        <strong>Attitude:</strong>
                                                    </div>
                                                    <div class="col-sm-6 col-lx-8"
                                                         style="font-size: 13px;padding-left: 0">
                                                        Minimum: 600m – Maximum: 4200m
                                                    </div>
                                                </div>
                                                <div class="row justify-content-start">
                                                    <div class="col-4"
                                                         style="font-size: 13px;padding-right: 0; color: #626262;">
                                                        <strong>Duration:</strong>
                                                    </div>
                                                    <div class="col-sm-6 col-lx-8"
                                                         style="font-size: 13px;padding-left: 0">
                                                         13 Days
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4"
                                                         style="font-size: 13px;padding-right: 0; color: #626262;">
                                                        <strong>Best Time:</strong>
                                                    </div>
                                                    <div class="col-sm-6 col-lx-8"
                                                         style="font-size: 13px;padding-left: 0">
                                                        May - September
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/" title="contact-us" class="button">
                                        <div class="d-flex justify-content-center">
                                            <span style="padding: 12px 30px;">Book now</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
