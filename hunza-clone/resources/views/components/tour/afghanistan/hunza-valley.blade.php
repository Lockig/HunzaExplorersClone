@extends('partials.layout')

@section('css')
    <style>
        table th{
            color: #444444;
            border-color: rgba(0,0,0,.08);
            font-weight: 700;
            background: #f9f9f9;
            box-shadow: inset 0 4px 3px -2px rgb(0 0 0 / 4%);
        }
        table th, table td{
            padding: 10px;
            text-align: center;
            border-width: 1px;
            border-style: solid;
            vertical-align: middle;
        }
        .tour__content {
            margin: -30px -30px;
            padding: 10px 10px;
        }

        .content__inner {
            padding: 15px 15px;
            background-color: #ffffff !important;
        }

        .content__inner--header h2 {
            font-size: 30px;
            color: #64c4bd;
            margin: 5px 0 0 0;
            line-height: 34px;
            font-weight: 300;
            letter-spacing: 0;
        }

        .content__inner--header .heading_desc h5 {
            color: #161922;
            font-size: 15px;
            line-height: 25px;
            font-weight: 700;
            letter-spacing: 0;
        }

        .content__inner--text {
            margin-bottom: 35px;
            padding-top: 20px;
        }

        .itinerary {
            padding-bottom: 20px;
            font-size: 2.5em;
            font-weight: 800;
            line-height: 0;
            margin-left: 0;
            margin-right: 0;
            background-image: linear-gradient(to right, #f5ead4 0%, #41afaa 100%);
            height: 0.5em;
            width: 180px;
            content: "";
            margin-bottom: 0 !important;
        }

        .tour__schedule {
            animation-name: bounceInUp;
            animation-duration: 1s;
            animation-fill-mode: both;
            padding: 10px 10px;
            opacity: 1;
            margin-bottom: 0;
        }
        .dropcap{
            background-color: #41afaa;
            color:#fff;
            display: inline-block;
            width: 35px;
            height: 35px;
            line-height: 35px;
            font-size: 20px;
            margin: 0 10px 5px 0;
            text-align: center;
            border-radius: 5px;
            background-image: url('{{asset('assets/images/icon/stripes_10_w.png')}}');
        }
        .background{
            padding: 10px !important;
            background-position: 0 0 !important;
            background-repeat: repeat !important;
            border-radius: 2px !important;
            background-image: url("{{asset('assets/images/background/bg-new.png')}}");
        }
        .background-1{
            padding: 10px !important;
            background-position: 0 0 !important;
            background-repeat: repeat !important;
            border-radius: 2px !important;
            background-image: url('{{asset('assets/images/background/bgpic.png')}}');
        }
        .captcha__image{
            border: 1px solid;
            padding: 10px;
            text-align: center;
        }
        button{
            display: block;
            width: 100%;
            padding: 10px 20px;
            color: #41afaa;
            appearance: none;
            margin: 0 10px 15px 0;
            border:2px solid #41afaa;
            border-radius: 3px;
            background-color:transparent;
            transition: background-color .2s ease-in-out,color .2s ease-in-out;
        }
        button:hover{
            background-color: #41afaa;
            color: white;
        }
    </style>
@endsection

@section('content')
    <div class="section__group background">
        <div class="section__wrapper">
            <div class="content__wrapper">
                <div class="tour__content d-flex justify-content-between">
                    <div class="left__panel col-9">
                        <div class="content__inner">
                            <div class="content__inner--header">
                                <h2>Hunza Valley Sightseeing Tour</h2>
                                <div class="heading_desc">
                                    <h5>Explore the hidden paradise on earth!</h5>
                                </div>
                            </div>
                            <div class="content__inner--text">
                                <p>
                                    <a class="text-black font-weight-bold mb-0" href="#" target="_blank">Hunza
                                        Valley</a>
                                    is a mountainous valley in Gilgit in the
                                    <a class="text-black font-weight-bold mb-0" href="#" target="_blank">Gilgit-Baltistan</a>
                                    autonomous region, an area under the control of the government of
                                    <a class="text-black font-weight-bold mb-0" href="#" target="_blank">Pakistan</a>.
                                    The
                                    <a class="text-black font-weight-bold mb-0" href="#" target="_blank">Hunza
                                        valley</a>
                                    is situated to the north of the
                                    <strong>Hunza</strong> River, at an elevation of around 2,500 metres (8,200 ft). The
                                    territory of
                                    <strong>Hunza</strong> is about 7,900 square kilometres (3,100sq mi)
                                    <strong>Karimabad</strong> (formerly called
                                    <strong>Baltit</strong>) is the main town, which is also a very popular tourist
                                    destination because of the spectacular scenery of the surrounding mountains like
                                    <strong>Ultar Sar, Rakaposhi, Bojahagur Duanasir II, Hunza Peak, Diran Peak,
                                        Bublimating, Ladyfinger Peak</strong>
                                    , all 6,000 metres (19,685 ft) or higher.
                                </p>
                            </div>
                            <div class="itinerary">
                                <p>Itinerary</p>
                            </div>
                            <div class="empty__space" style="margin-bottom: 35px; padding-top:5px;"></div>
                            <div class="tour__schedule">
                                <table style="height: 332px; border-radius: 5px; border-collapse: collapse; border-color: rgb(98,98,98);">
                                    <thead>
                                    <tr>
                                        <th>DAY</th>
                                        <th>DAILY ACTIVITIES/PLAN</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="box-shadow: inset 0 4px 3px -2px rgba(0 0 0 / 6%);"><span class="dropcap size-1">01</span></td>
                                        <td class="text-left">Arrival to Islamabad airport,our guide and driver will meet you here and take you to your hotel for overnight stay.</td>
                                    </tr>>
                                    <tr>
                                        <td style="box-shadow: inset 0 4px 3px -2px rgba(0 0 0 / 6%);"><span class="dropcap size-1">02</span></td>
                                        <td class="text-left">Arrival to Islamabad airport,our guide and driver will meet you here and take you to your hotel for overnight stay.</td>
                                    </tr>
                                    <tr>
                                        <td style="box-shadow: inset 0 4px 3px -2px rgba(0 0 0 / 6%);"><span class="dropcap size-1">03</span></td>
                                        <td class="text-left">Arrival to Islamabad airport,our guide and driver will meet you here and take you to your hotel for overnight stay.</td>
                                    </tr>
                                    <tr>
                                        <td style="box-shadow: inset 0 4px 3px -2px rgba(0 0 0 / 6%);"><span class="dropcap size-1">04</span></td>
                                        <td class="text-left">Arrival to Islamabad airport,our guide and driver will meet you here and take you to your hotel for overnight stay.</td>
                                    </tr>
                                    <tr>
                                        <td style="box-shadow: inset 0 4px 3px -2px rgba(0 0 0 / 6%);"><span class="dropcap size-1">05</span></td>
                                        <td class="text-left">Arrival to Islamabad airport,our guide and driver will meet you here and take you to your hotel for overnight stay.</td>
                                    </tr>
                                    <tr>
                                        <td style="box-shadow: inset 0 4px 3px -2px rgba(0 0 0 / 6%);"><span class="dropcap size-1">06</span></td>
                                        <td class="text-left">Arrival to Islamabad airport,our guide and driver will meet you here and take you to your hotel for overnight stay.</td>
                                    </tr>
                                    <tr>
                                        <td style="box-shadow: inset 0 4px 3px -2px rgba(0 0 0 / 6%);"><span class="dropcap size-1">07</span></td>
                                        <td class="text-left">Arrival to Islamabad airport,our guide and driver will meet you here and take you to your hotel for overnight stay.</td>
                                    </tr>
                                    <tr>
                                        <td style="box-shadow: inset 0 4px 3px -2px rgba(0 0 0 / 6%);"><span class="dropcap size-1">08</span></td>
                                        <td class="text-left">Arrival to Islamabad airport,our guide and driver will meet you here and take you to your hotel for overnight stay.</td>
                                    </tr>
                                    <tr>
                                        <td style="box-shadow: inset 0 4px 3px -2px rgba(0 0 0 / 6%);"><span class="dropcap size-1">09</span></td>
                                        <td class="text-left">Arrival to Islamabad airport,our guide and driver will meet you here and take you to your hotel for overnight stay.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="empty__space" style="margin-bottom: 35px; padding-top:20px;"></div>
                            <div class="tour__form">
                                <div class="background">
                                        <h2 style="font-size: 30px; line-height: 34px;" class="text-center font-weight-bold"><span style="color:#70d4ea;">BOOK YOUR TRIP NOW</span></h2>
                                        <form action="#">
                                            @csrf
                                            <div class="row px-2 pb-2">
                                                <div class="form-group col-lg-4">
                                                    <label class="font-weight-bold">Your full name*</label>
                                                    <input class="form form-control" name="name" type="text" placeholder="Name*"/>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label class="font-weight-bold">Your Email*</label>
                                                    <input class="form form-control" name="email" type="email" placeholder="Name*"/>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label class="font-weight-bold">Your Tel/WhatsApp Number*</label>
                                                    <input class="form form-control" name="number" type="number" placeholder="Name*"/>
                                                </div>
                                            </div>
                                            <div class="row px-2 pb-2">
                                                <div class="form-group col-lg-4">
                                                    <label class="font-weight-bold">Arrival date*</label>
                                                    <input class="form form-control" name="name" type="date" placeholder="mm/dd/yy"/>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label class="font-weight-bold">Departure date*</label>
                                                    <input class="form form-control" name="email" type="date" placeholder="mm/dd/yy"/>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label class="font-weight-bold">Nationality*</label>
                                                    <select class="form-control" name="country">
                                                        <option value="Afghanistan"></option>
                                                        <option value="Albania"></option>
                                                        <option value="Andorra"></option>
                                                        <option value="Angola"></option>
                                                        <option value="Argentina"></option>
                                                        <option value="Australia"></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row px-2 pb-2">
                                                <div class="form-group col-12">
                                                    <b>Tell us more about your interests</b>
                                                    <textarea class="form-control w-100" cols="40" rows="5" name="interests" placeholder="Tell us more about your interests"></textarea>
                                                </div>
                                            </div>
                                            <div class="row px-2 pb-2">
                                                <div class="col-6 px-2 pb-2">
                                                    <div class="captcha__instructions">
                                                        <span class="instructions">Please prove you are human by selecting the <span style="color: red; font-weight: bold;">House</span></span>
                                                    </div>
                                                    <div class="captcha__options">
                                                        <label>
                                                            <input type="radio" value="human"/>
                                                            <svg width="50" height="50" aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M488 313v143c0 13-11 24-24 24H348c-7 0-12-5-12-12V356c0-7-5-12-12-12h-72c-7 0-12 5-12 12v112c0 7-5 12-12 12H112c-13 0-24-11-24-24V313c0-4 2-7 4-10l188-154c5-4 11-4 16 0l188 154c2 3 4 6 4 10zm84-61l-84-69V44c0-6-5-12-12-12h-56c-7 0-12 6-12 12v73l-89-74a48 48 0 00-61 0L4 252c-5 4-5 12-1 17l25 31c5 5 12 5 17 1l235-193c5-4 11-4 16 0l235 193c5 5 13 4 17-1l25-31c4-6 4-13-1-17z"></path></svg>
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="human"/>
                                                            <svg width="50" height="50" aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M259 18l-65 132-146 22c-26 3-37 36-18 54l106 103-25 146c-5 26 23 46 46 33l131-68 131 68c23 13 51-7 46-33l-25-146 106-103c19-18 8-51-18-54l-146-22-65-132a32 32 0 00-58 0z"></path></svg>
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="human"/>
                                                            <svg width="50" height="50" aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M350 99c-54 0-98-35-166-35-25 0-47 4-68 12a56 56 0 004-24C118 24 95 1 66 0a56 56 0 00-34 102v386c0 13 11 24 24 24h16c13 0 24-11 24-24v-94c28-12 64-23 114-23 54 0 98 35 166 35 48 0 86-16 122-41 9-6 14-15 14-26V96c0-23-24-39-45-29-35 16-77 32-117 32z"></path></svg>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <button type="submit"></button>
                                                    <span class="spinner"></span>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right__panel col-3 ml-2">
                        <div style="padding: 10px 10px 0 10px;background: #ffffff">
                            <div class="more__information">
                                <div class="tour__information" style="padding: 10px 10px; background: #eaf0f2 center no-repeat;background-size: contain;border-radius: 2px">
                                    <div class="tour__information--wrapper">
                                        <h4 style="font-size: 21px; line-height: 25px;font-weight: 500; margin-bottom: 15px;color:#70d4ea;" class="text-left text-capitalize font-weight-bold">TOUR INFORMATION</h4>
                                        <p class="text-left">Tour Name:<strong>Hunza Valley</strong><a href="/">Sightseeing</a></p>
                                        <p class="text-left">Nearest Airport:<strong> Islamabad International Airport</strong></p>
                                        <p class="text-left">Best time: <strong>March-November</strong></p>
                                        <p class="text-left">No of days: <strong>09</strong></p>
                                        <p class="text-left">No of nights: <strong>08</strong></p>
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
