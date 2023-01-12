@extends('partials.layout')

@section('css')
    <link href="{{asset('assets/css/component/home/home.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div class="content no-content-padding" id="home">
        <div class="section w-100">
            <div class="row w-100 m-0">
                <div class="col-12 col-md-2  px-0">
                    <a href="#" class="sub-menu-box border-0 d-sm-block d-md-inline-block w-100">
                        <div class="w-100 column--inner">
                            <div class="box__wrapper w-100">
                                <div class="hover__box text-center ">
                                    <div class="hover__box__wrapper position-relative">
                                        <img class="visible-photo"
                                             src="{{asset('assets/images/carousel/carousel_icon.jpg')}}"
                                             alt="carousel_icon"/>
                                        <img class="d-block position-absolute top-50 opacity-0  private-photo"
                                             src="{{asset('assets/images/carousel/carousel_icon_color.png')}}"
                                             alt="carousel_icon"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-2  px-0">
                    <a href="#" class="sub-menu-box border-0 d-sm-block d-md-inline-block w-100">
                        <div class="w-100 column--inner">
                            <div class="box__wrapper w-100">
                                <div class="hover__box text-center">
                                    <div class="hover__box__wrapper position-relative">
                                        <img class="visible-photo"
                                             src="{{asset('assets/images/carousel/carousel_icon_2.jpg')}}"
                                             alt="carousel_icon"/>
                                        <img class="d-block position-absolute top-50 opacity-0  private-photo"
                                             src="{{asset('assets/images/carousel/carousel_icon_color_2.png')}}"
                                             alt="carousel_icon"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-2  px-0">
                    <a href="#" class="sub-menu-box border-0 d-sm-block d-md-inline-block w-100">
                        <div class="w-100 column--inner">
                            <div class="box__wrapper w-100">
                                <div class="hover__box text-center">
                                    <div class="hover__box__wrapper position-relative">
                                        <img class="visible-photo"
                                             src="{{asset('assets/images/carousel/carousel_icon_3.jpg')}}"
                                             alt="carousel_icon"/>
                                        <img class="d-block position-absolute top-50 opacity-0  private-photo"
                                             src="{{asset('assets/images/carousel/carousel_icon_color_3.png')}}"
                                             alt="carousel_icon"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-2  px-0">
                    <a href="#" class="sub-menu-box border-0 d-sm-block d-md-inline-block w-100">
                        <div class="w-100 column--inner">
                            <div class="box__wrapper w-100">
                                <div class="hover__box text-center">
                                    <div class="hover__box__wrapper position-relative">
                                        <img class="visible-photo"
                                             src="{{asset('assets/images/carousel/carousel_icon_4.jpg')}}"
                                             alt="carousel_icon"/>
                                        <img class="d-block position-absolute top-50 opacity-0  private-photo"
                                             src="{{asset('assets/images/carousel/carousel_icon_color_4.png')}}"
                                             alt="carousel_icon"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-2  px-0">
                    <a href="#" class="sub-menu-box border-0 d-sm-block d-md-inline-block w-100">
                        <div class="w-100 column--inner">
                            <div class="box__wrapper w-100">
                                <div class="hover__box text-center">
                                    <div class="hover__box__wrapper position-relative">
                                        <img class="visible-photo"
                                             src="{{asset('assets/images/carousel/carousel_icon_5.jpg')}}"
                                             alt="carousel_icon"/>
                                        <img class="d-block position-absolute top-50 opacity-0  private-photo"
                                             src="{{asset('assets/images/carousel/carousel_icon_color_5.png')}}"
                                             alt="carousel_icon"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-2  px-0">
                    <a href="#" class="sub-menu-box border-0 d-sm-block d-md-inline-block w-100">
                        <div class="w-100 column--inner">
                            <div class="box__wrapper w-100">
                                <div class="hover__box text-center">
                                    <div class="hover__box__wrapper position-relative">
                                        <img class="visible-photo"
                                             src="{{asset('assets/images/carousel/carousel_icon_6.jpg')}}"
                                             alt="carousel_icon"/>
                                        <img class="d-block position-absolute top-50 opacity-0  private-photo"
                                             src="{{asset('assets/images/carousel/carousel_icon_color_6.png')}}"
                                             alt="carousel_icon"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="explanation" class="section w-100">
            <div class="container">
                <div class="row mx-auto my-0">
                    <div class="left-panel col-12 col-lg-6 p-0">
                        <div class="column--inner">
                            <div class="w-100">
                                <h4>We organize your trip</h4>
                                <h6><span>Hunza Explorers is a Professional Inbound Tour Operator, based in Hunza valley – Pakistan with branch office in Islamabad – Pakistan and Ho Chi Minh – Vietnam. We focus in private High quality & Luxury tours with unique style for worldwide travelers for years. All Pakistan tours which Hunza Explorers provides are tailor-made according to your needs. No other company puts more efforts into personalizing each tour than we do.</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="right-panel col-12 col-lg-6 p-0">
                        <div class="column--inner">
                            <h4>Why travel with us?</h4>
                            <div class="check-list">
                                <div class="w-100">
                                    <img class="check-icon d-inline p-0"
                                         src="{{asset('assets/images/icon/check_icon.svg')}}" alt="✅"/>
                                    A huge variety of travel styles & activities
                                    <br>
                                    <img class="check-icon d-inline p-0"
                                         src="{{asset('assets/images/icon/check_icon.svg')}}" alt="✅"/>
                                    Comfort levels that suit every traveler
                                    <br>
                                    <img class="check-icon d-inline p-0"
                                         src="{{asset('assets/images/icon/check_icon.svg')}}" alt="✅"/>
                                    Comfort levels that suit every traveler
                                    <br>
                                    <img class="check-icon d-inline p-0"
                                         src="{{asset('assets/images/icon/check_icon.svg')}}" alt="✅"/>
                                    24/7 customer service
                                    <br>
                                    <img class="check-icon d-inline p-0"
                                         src="{{asset('assets/images/icon/check_icon.svg')}}" alt="✅"/>
                                    We’re Pakistani! We know the destination better than anyone.
                                    <br>
                                    <img class="check-icon d-inline p-0"
                                         src="{{asset('assets/images/icon/check_icon.svg')}}" alt="✅"/>
                                    We have the Largest network of trusted hotel partners to get you where others don’t.
                                    <br>
                                    <img class="check-icon d-inline p-0"
                                         src="{{asset('assets/images/icon/check_icon.svg')}}" alt="✅"/>
                                    Widest offer of online booking and real-time availability to suit any travel need.
                                </div>
                            </div>
                            <div class="empty-space"></div>
                        </div>
                    </div>
                </div>
                <div class="row my-0 mx-auto">
                    <div class="left-panel col-12 col-lg-6 p-0">
                        <div class="column--inner">
                            <h4 class="mb-0">Explore Pakistan with us</h4>
                            <div class="empty-space"></div>
                        </div>
                    </div>
                    <div class="right-panel col-12 col-lg-6 p-0">
                        <a href="#" class="d-block sub-menu-box w-100 h-100">
                            <div class="column--inner">
                                <h4>
                                    <i class="fa fa-solid fa-bars text-white"></i>
                                    <span>Book your trip now</span>
                                </h4>
                                <div class="empty-space"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="popular-tours">
            <div class="container">
                <div class="column--inner">
                    <div class="empty-space"></div>
                    <div class="title position-relative text-uppercase text-center">
                        <div class="column--inner pt-0">
                            <div class="main-title mb-0"><p class="text-uppercase">popular tours</p></div>
                            <div class="secondary-title mb-0">
                                <p class="mb-0 text-uppercase">
                                    <span class="text-uppercase" style="font-size:30px;color: #262161; font-weight: 700;">amazing</span>
                                    TOURS AND
                                    <strong style="font-weight: bold" class="text-uppercase">fun adventure</strong>
                                    WAITING FOR YOU
                                </p>
                            </div>
                            <div class="read-more">
                                <p>
                                    <a href="#" class="text-capitalize text-black">view all treks</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="popular-treks">
            <div class="container">
                <div class="column--inner">
                    <div class="empty-space"></div>
                    <div class="title position-relative text-uppercase text-center">
                        <div class="column--inner pt-0">
                            <div class="main-title mb-0"><p class="text-uppercase">guaranteed departure</p></div>
                            <div class="secondary-title mb-0">
                                <p class="mb-0 text-uppercase">
                                    <span class="text-uppercase" style="font-size:30px;color: #262161; font-weight: 700;">special</span>
                                    DEALS AND LAST MINUTE
                                    <strong style="font-weight: bold" class="text-uppercase">AMAZING OFFERS</strong>
                                </p>
                            </div>
                            <div class="read-more">
                                <p>
                                    <a href="#" class="text-capitalize text-black">view all fixed departure tours</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=""></div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{asset('assets/js/home.js')}}"></script>

@endsection
