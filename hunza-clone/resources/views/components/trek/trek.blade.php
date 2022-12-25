@extends('partials.layout')
@section('css')

    <style>
        .content__inner {
            padding-top: 35px;
            padding-left: 7.5px;
            padding-right: 7.5px;
            width: 100%;
        }

        .content__card {
            display: flex;
            border: 2px dashed orange;
            background: #fff;
            padding-top: 10px;
            align-content: center;
            margin-bottom:35px;
        }
        .card__inner{
            padding-right: 7.5px; padding-left: 7.5px; width:100%;
        }
        .card__button--style{
            border-width: 2px;
            border-color: #41afaa;
            border-style: solid;
            border-radius: 0px;
            margin: 10px 10px 0px;
            color: #41afaa;
            font-size: 16px;
            text-align: center;
            text-transform: uppercase;
        }
        .card__info--content .row .col-6{
            border-color: rgba(0,0,0,.08);
            border-width: 1px 0 0;
            border-style: solid;
            padding: 10px 0;
        }
        .background {
            position: relative;
            margin-left: -7.5px;
            margin-right: -7.5px;
            background-image: url('{{asset('assets/images/background/bg-new.png')}}');
        }
    </style>
@endsection

@section('content')
    <div class="section__group background">
        <div class="section">
            <div class="section__wrapper">
                <div class="content__wrapper">
                    <div class="content__inner ">
                        <div class="content__card d-flex flex-md-column flex-lg-row row">
                            <div class="card__image d-flex align-items-stretch col-md-12 col-lg-3">
                                <div class="card__inner">
                                    <div style="margin-bottom: 35px;">
                                        <img src="{{asset('assets/images/tour/tour_1.jpg')}}" alt="trek"
                                             style="height: auto;max-width: 100%; vertical-align: top;"/>
                                    </div>
                                </div>
                            </div>
                            <div class="card__title d-flex align-items-md-start align-items-lg-stretch col-md-12 col-lg-3">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <h4 style="font-size: 21px;line-height: 25px;font-weight: 500;margin: 5px 0 2px;">Patundas Trek (Shispare Peak 7611m Base Camp)</h4>
                                    <p style="color:#ccc;font-size: 14px;">
                                        in Hunza, Gilgit-Baltitsan,
                                        <a class="text-black pl-0" href="#" target="_blank">Pakistan</a>
                                    </p>
                                </div>
                            </div>
                            <div class="card__info col-md-12 col-lg-3 d-flex align-items-stretch">
                                <div class="d-flex flex-column justify-content-start w-100 card__inner">
                                    <div class="card__info--content d-flex flex-column w-100">
                                        <div class="row justify-content-between">
                                            <div class="col-6 text-bold">
                                                <i class="fa-regular fa-calendar"></i>
                                                Duration:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                13 days
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-light fa-clock"></i>
                                                Best Time:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                April - September
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-sharp fa-solid fa-plane"></i>
                                                Airport:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                Islamabad
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-thin fa-pot-food"></i>
                                                Extras:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                All inclusive
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card__button col-md-12 col-lg-3 d-flex align-items-md-center">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <div class="card__button--style">
                                        <div class="card__button--content d-flex justify-content-center">
                                            <span style="padding: 12px 0 12px 30px;">Book Now</span>
                                            <i style="padding: 12px 30px 12px 0.5em;font-size: 20px;color:#333333;" class="mpc-button__icon mpc-transition "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content__card d-flex flex-md-column flex-lg-row row">
                            <div class="card__image d-flex align-items-stretch col-3">
                                <div class="card__inner">
                                    <div style="margin-bottom: 35px;">
                                        <img src="{{asset('assets/images/tour/tour_1.jpg')}}" alt="trek"
                                             style="height: auto;max-width: 100%; vertical-align: top;"/>
                                    </div>
                                </div>
                            </div>
                            <div class="card__title d-flex align-items-stretch col-3">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <h4 style="font-size: 21px;line-height: 25px;font-weight: 500;margin: 5px 0 2px;">Patundas Trek (Shispare Peak 7611m Base Camp)</h4>
                                    <p style="color:#ccc;font-size: 14px;">
                                        in Hunza, Gilgit-Baltitsan,
                                        <a class="text-black pl-0" href="#" target="_blank">Pakistan</a>
                                    </p>
                                </div>
                            </div>
                            <div class="card__info col-3 d-flex align-items-stretch">
                                <div class="d-flex flex-column justify-content-start w-100 card__inner">
                                    <div class="card__info--content d-flex flex-column w-100">
                                        <div class="row justify-content-between">
                                            <div class="col-6 text-bold">
                                                <i class="fa-regular fa-calendar"></i>
                                                Duration:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                13 days
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-light fa-clock"></i>
                                                Best Time:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                April - September
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-sharp fa-solid fa-plane"></i>
                                                Airport:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                Islamabad
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-thin fa-pot-food"></i>
                                                Extras:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                All inclusive
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card__button col-3 d-flex align-items-md-center">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <div class="card__button--style">
                                        <div class="card__button--content d-flex justify-content-center">
                                            <span style="padding: 12px 0 12px 30px;">Book Now</span>
                                            <i style="padding: 12px 30px 12px 0.5em;font-size: 20px;color:#333333;" class="mpc-button__icon mpc-transition "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content__card d-flex flex-md-column flex-lg-row row">
                            <div class="card__image d-flex align-items-stretch col-3">
                                <div class="card__inner">
                                    <div style="margin-bottom: 35px;">
                                        <img src="{{asset('assets/images/tour/tour_1.jpg')}}" alt="trek"
                                             style="height: auto;max-width: 100%; vertical-align: top;"/>
                                    </div>
                                </div>
                            </div>
                            <div class="card__title d-flex align-items-stretch col-3">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <h4 style="font-size: 21px;line-height: 25px;font-weight: 500;margin: 5px 0 2px;">Patundas Trek (Shispare Peak 7611m Base Camp)</h4>
                                    <p style="color:#ccc;font-size: 14px;">
                                        in Hunza, Gilgit-Baltitsan,
                                        <a class="text-black pl-0" href="#" target="_blank">Pakistan</a>
                                    </p>
                                </div>
                            </div>
                            <div class="card__info col-3 d-flex align-items-stretch">
                                <div class="d-flex flex-column justify-content-start w-100 card__inner">
                                    <div class="card__info--content d-flex flex-column w-100">
                                        <div class="row justify-content-between">
                                            <div class="col-6 text-bold">
                                                <i class="fa-regular fa-calendar"></i>
                                                Duration:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                13 days
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-light fa-clock"></i>
                                                Best Time:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                April - September
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-sharp fa-solid fa-plane"></i>
                                                Airport:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                Islamabad
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-thin fa-pot-food"></i>
                                                Extras:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                All inclusive
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card__button col-3 d-flex align-items-md-center">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <div class="card__button--style">
                                        <div class="card__button--content d-flex justify-content-center">
                                            <span style="padding: 12px 0 12px 30px;">Book Now</span>
                                            <i style="padding: 12px 30px 12px 0.5em;font-size: 20px;color:#333333;" class="mpc-button__icon mpc-transition "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content__card d-flex flex-md-column flex-lg-row row">
                            <div class="card__image d-flex align-items-stretch col-3">
                                <div class="card__inner">
                                    <div style="margin-bottom: 35px;">
                                        <img src="{{asset('assets/images/tour/tour_1.jpg')}}" alt="trek"
                                             style="height: auto;max-width: 100%; vertical-align: top;"/>
                                    </div>
                                </div>
                            </div>
                            <div class="card__title d-flex align-items-stretch col-3">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <h4 style="font-size: 21px;line-height: 25px;font-weight: 500;margin: 5px 0 2px;">Patundas Trek (Shispare Peak 7611m Base Camp)</h4>
                                    <p style="color:#ccc;font-size: 14px;">
                                        in Hunza, Gilgit-Baltitsan,
                                        <a class="text-black pl-0" href="#" target="_blank">Pakistan</a>
                                    </p>
                                </div>
                            </div>
                            <div class="card__info col-3 d-flex align-items-stretch">
                                <div class="d-flex flex-column justify-content-start w-100 card__inner">
                                    <div class="card__info--content d-flex flex-column w-100">
                                        <div class="row justify-content-between">
                                            <div class="col-6 text-bold">
                                                <i class="fa-regular fa-calendar"></i>
                                                Duration:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                13 days
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-light fa-clock"></i>
                                                Best Time:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                April - September
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-sharp fa-solid fa-plane"></i>
                                                Airport:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                Islamabad
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-thin fa-pot-food"></i>
                                                Extras:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                All inclusive
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card__button col-3 d-flex align-items-md-center">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <div class="card__button--style">
                                        <div class="card__button--content d-flex justify-content-center">
                                            <span style="padding: 12px 0 12px 30px;">Book Now</span>
                                            <i style="padding: 12px 30px 12px 0.5em;font-size: 20px;color:#333333;" class="mpc-button__icon mpc-transition "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content__card d-flex flex-md-column flex-lg-row row">
                            <div class="card__image d-flex align-items-stretch col-3">
                                <div class="card__inner">
                                    <div style="margin-bottom: 35px;">
                                        <img src="{{asset('assets/images/tour/tour_1.jpg')}}" alt="trek"
                                             style="height: auto;max-width: 100%; vertical-align: top;"/>
                                    </div>
                                </div>
                            </div>
                            <div class="card__title d-flex align-items-stretch col-3">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <h4 style="font-size: 21px;line-height: 25px;font-weight: 500;margin: 5px 0 2px;">Patundas Trek (Shispare Peak 7611m Base Camp)</h4>
                                    <p style="color:#ccc;font-size: 14px;">
                                        in Hunza, Gilgit-Baltitsan,
                                        <a class="text-black pl-0" href="#" target="_blank">Pakistan</a>
                                    </p>
                                </div>
                            </div>
                            <div class="card__info col-3 d-flex align-items-stretch">
                                <div class="d-flex flex-column justify-content-start w-100 card__inner">
                                    <div class="card__info--content d-flex flex-column w-100">
                                        <div class="row justify-content-between">
                                            <div class="col-6 text-bold">
                                                <i class="fa-regular fa-calendar"></i>
                                                Duration:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                13 days
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-light fa-clock"></i>
                                                Best Time:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                April - September
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-sharp fa-solid fa-plane"></i>
                                                Airport:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                Islamabad
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-thin fa-pot-food"></i>
                                                Extras:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                All inclusive
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card__button col-3 d-flex align-items-md-center">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <div class="card__button--style">
                                        <div class="card__button--content d-flex justify-content-center">
                                            <span style="padding: 12px 0 12px 30px;">Book Now</span>
                                            <i style="padding: 12px 30px 12px 0.5em;font-size: 20px;color:#333333;" class="mpc-button__icon mpc-transition "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content__card d-flex flex-md-column flex-lg-row row">
                            <div class="card__image d-flex align-items-stretch col-3">
                                <div class="card__inner">
                                    <div style="margin-bottom: 35px;">
                                        <img src="{{asset('assets/images/tour/tour_1.jpg')}}" alt="trek"
                                             style="height: auto;max-width: 100%; vertical-align: top;"/>
                                    </div>
                                </div>
                            </div>
                            <div class="card__title d-flex align-items-stretch col-3">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <h4 style="font-size: 21px;line-height: 25px;font-weight: 500;margin: 5px 0 2px;">Patundas Trek (Shispare Peak 7611m Base Camp)</h4>
                                    <p style="color:#ccc;font-size: 14px;">
                                        in Hunza, Gilgit-Baltitsan,
                                        <a class="text-black pl-0" href="#" target="_blank">Pakistan</a>
                                    </p>
                                </div>
                            </div>
                            <div class="card__info col-3 d-flex align-items-stretch">
                                <div class="d-flex flex-column justify-content-start w-100 card__inner">
                                    <div class="card__info--content d-flex flex-column w-100">
                                        <div class="row justify-content-between">
                                            <div class="col-6 text-bold">
                                                <i class="fa-regular fa-calendar"></i>
                                                Duration:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                13 days
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-light fa-clock"></i>
                                                Best Time:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                April - September
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-sharp fa-solid fa-plane"></i>
                                                Airport:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                Islamabad
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-thin fa-pot-food"></i>
                                                Extras:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                All inclusive
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card__button col-3 d-flex align-items-md-center">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <div class="card__button--style">
                                        <div class="card__button--content d-flex justify-content-center">
                                            <span style="padding: 12px 0 12px 30px;">Book Now</span>
                                            <i style="padding: 12px 30px 12px 0.5em;font-size: 20px;color:#333333;" class="mpc-button__icon mpc-transition "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content__card d-flex flex-md-column flex-lg-row row">
                            <div class="card__image d-flex align-items-stretch col-3">
                                <div class="card__inner">
                                    <div style="margin-bottom: 35px;">
                                        <img src="{{asset('assets/images/tour/tour_1.jpg')}}" alt="trek"
                                             style="height: auto;max-width: 100%; vertical-align: top;"/>
                                    </div>
                                </div>
                            </div>
                            <div class="card__title d-flex align-items-stretch col-3">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <h4 style="font-size: 21px;line-height: 25px;font-weight: 500;margin: 5px 0 2px;">Patundas Trek (Shispare Peak 7611m Base Camp)</h4>
                                    <p style="color:#ccc;font-size: 14px;">
                                        in Hunza, Gilgit-Baltitsan,
                                        <a class="text-black pl-0" href="#" target="_blank">Pakistan</a>
                                    </p>
                                </div>
                            </div>
                            <div class="card__info col-3 d-flex align-items-stretch">
                                <div class="d-flex flex-column justify-content-start w-100 card__inner">
                                    <div class="card__info--content d-flex flex-column w-100">
                                        <div class="row justify-content-between">
                                            <div class="col-6 text-bold">
                                                <i class="fa-regular fa-calendar"></i>
                                                Duration:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                13 days
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-light fa-clock"></i>
                                                Best Time:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                April - September
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-sharp fa-solid fa-plane"></i>
                                                Airport:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                Islamabad
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-thin fa-pot-food"></i>
                                                Extras:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                All inclusive
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card__button col-3 d-flex align-items-md-center">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <div class="card__button--style">
                                        <div class="card__button--content d-flex justify-content-center">
                                            <span style="padding: 12px 0 12px 30px;">Book Now</span>
                                            <i style="padding: 12px 30px 12px 0.5em;font-size: 20px;color:#333333;" class="mpc-button__icon mpc-transition "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content__card d-flex flex-md-column flex-lg-row row">
                            <div class="card__image d-flex align-items-stretch col-3">
                                <div class="card__inner">
                                    <div style="margin-bottom: 35px;">
                                        <img src="{{asset('assets/images/tour/tour_1.jpg')}}" alt="trek"
                                             style="height: auto;max-width: 100%; vertical-align: top;"/>
                                    </div>
                                </div>
                            </div>
                            <div class="card__title d-flex align-items-stretch col-3">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <h4 style="font-size: 21px;line-height: 25px;font-weight: 500;margin: 5px 0 2px;">Patundas Trek (Shispare Peak 7611m Base Camp)</h4>
                                    <p style="color:#ccc;font-size: 14px;">
                                        in Hunza, Gilgit-Baltitsan,
                                        <a class="text-black pl-0" href="#" target="_blank">Pakistan</a>
                                    </p>
                                </div>
                            </div>
                            <div class="card__info col-3 d-flex align-items-stretch">
                                <div class="d-flex flex-column justify-content-start w-100 card__inner">
                                    <div class="card__info--content d-flex flex-column w-100">
                                        <div class="row justify-content-between">
                                            <div class="col-6 text-bold">
                                                <i class="fa-regular fa-calendar"></i>
                                                Duration:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                13 days
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-light fa-clock"></i>
                                                Best Time:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                April - September
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-sharp fa-solid fa-plane"></i>
                                                Airport:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                Islamabad
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-thin fa-pot-food"></i>
                                                Extras:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                All inclusive
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card__button col-3 d-flex align-items-md-center">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <div class="card__button--style">
                                        <div class="card__button--content d-flex justify-content-center">
                                            <span style="padding: 12px 0 12px 30px;">Book Now</span>
                                            <i style="padding: 12px 30px 12px 0.5em;font-size: 20px;color:#333333;" class="mpc-button__icon mpc-transition "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content__card d-flex flex-md-column flex-lg-row row">
                            <div class="card__image d-flex align-items-stretch col-3">
                                <div class="card__inner">
                                    <div style="margin-bottom: 35px;">
                                        <img src="{{asset('assets/images/tour/tour_1.jpg')}}" alt="trek"
                                             style="height: auto;max-width: 100%; vertical-align: top;"/>
                                    </div>
                                </div>
                            </div>
                            <div class="card__title d-flex align-items-stretch col-3">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <h4 style="font-size: 21px;line-height: 25px;font-weight: 500;margin: 5px 0 2px;">Patundas Trek (Shispare Peak 7611m Base Camp)</h4>
                                    <p style="color:#ccc;font-size: 14px;">
                                        in Hunza, Gilgit-Baltitsan,
                                        <a class="text-black pl-0" href="#" target="_blank">Pakistan</a>
                                    </p>
                                </div>
                            </div>
                            <div class="card__info col-3 d-flex align-items-stretch">
                                <div class="d-flex flex-column justify-content-start w-100 card__inner">
                                    <div class="card__info--content d-flex flex-column w-100">
                                        <div class="row justify-content-between">
                                            <div class="col-6 text-bold">
                                                <i class="fa-regular fa-calendar"></i>
                                                Duration:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                13 days
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-light fa-clock"></i>
                                                Best Time:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                April - September
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-sharp fa-solid fa-plane"></i>
                                                Airport:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                Islamabad
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-thin fa-pot-food"></i>
                                                Extras:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                All inclusive
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card__button col-3 d-flex align-items-md-center">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <div class="card__button--style">
                                        <div class="card__button--content d-flex justify-content-center">
                                            <span style="padding: 12px 0 12px 30px;">Book Now</span>
                                            <i style="padding: 12px 30px 12px 0.5em;font-size: 20px;color:#333333;" class="mpc-button__icon mpc-transition "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content__card d-flex flex-md-column flex-lg-row row">
                            <div class="card__image d-flex align-items-stretch col-3">
                                <div class="card__inner">
                                    <div style="margin-bottom: 35px;">
                                        <img src="{{asset('assets/images/tour/tour_1.jpg')}}" alt="trek"
                                             style="height: auto;max-width: 100%; vertical-align: top;"/>
                                    </div>
                                </div>
                            </div>
                            <div class="card__title d-flex align-items-stretch col-3">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <h4 style="font-size: 21px;line-height: 25px;font-weight: 500;margin: 5px 0 2px;">Patundas Trek (Shispare Peak 7611m Base Camp)</h4>
                                    <p style="color:#ccc;font-size: 14px;">
                                        in Hunza, Gilgit-Baltitsan,
                                        <a class="text-black pl-0" href="#" target="_blank">Pakistan</a>
                                    </p>
                                </div>
                            </div>
                            <div class="card__info col-3 d-flex align-items-stretch">
                                <div class="d-flex flex-column justify-content-start w-100 card__inner">
                                    <div class="card__info--content d-flex flex-column w-100">
                                        <div class="row justify-content-between">
                                            <div class="col-6 text-bold">
                                                <i class="fa-regular fa-calendar"></i>
                                                Duration:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                13 days
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-light fa-clock"></i>
                                                Best Time:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                April - September
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-sharp fa-solid fa-plane"></i>
                                                Airport:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                Islamabad
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <i class="fa-thin fa-pot-food"></i>
                                                Extras:
                                            </div>
                                            <div class="col-6" style="padding-bottom: 10px;">
                                                All inclusive
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card__button col-3 d-flex align-items-md-center">
                                <div class="d-flex flex-column justify-content-center w-100 card__inner">
                                    <div class="card__button--style">
                                        <div class="card__button--content d-flex justify-content-center">
                                            <span style="padding: 12px 0 12px 30px;">Book Now</span>
                                            <i style="padding: 12px 30px 12px 0.5em;font-size: 20px;color:#333333;" class="mpc-button__icon mpc-transition "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
