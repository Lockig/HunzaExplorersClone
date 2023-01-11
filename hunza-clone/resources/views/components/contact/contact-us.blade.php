@extends('partials.layout')
@section('css')
    <link href="{{asset('assets/css/component/home/contact-us.css')}}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')
    <div id="contact-us" class="content no-content-padding">
        <div class="section">
            <div class="section__wrapper d-flex justify-content-around align-items-center">
                <div class="content-wrapper map mb-0 w-100">
                    <iframe class="w-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3317.2568555760636!2d73.22176791502801!3d33.75402788068807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df95a6f8a08223%3A0x7b0d30d4e4098808!2sHunza%20Explorers%20Treks%20%26%20Tours!5e0!3m2!1sen!2s!4v1670984240499!5m2!1sen!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="section__wrapper d-flex justify-content-center align-items-center">
                <div class="w-100 content-wrapper mb-0 w-100 text-center">
                    <h2 class="title text-uppercase">contact us</h2>
                    <div class="inside">We work from Monday to Sunday from 8:00 AM to 7:00 PM</div>
                </div>
            </div>
        </div>
        <div class="section row w-100">
            <div class="section__wrapper">
                <div class="col-12 col-lg-6 left-side">
                    <div class="content__wrapper">
                        <div class="contact-us-form-wrapper">
                            <p></p>
                            <form class="w-100 contact-us-form" method="#" action="#">
                                @csrf
                                <p class="text-uppercase text-center">write to us</p>
                                <div class="form-group">
                                    <div class="form-group-wrapper w-100">
                                        <input type="text" placeholder="Your name*" class="form form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group-wrapper w-100">
                                        <input type="email" placeholder="Email*" class="form form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group-wrapper w-100">
                                        <input type="text" placeholder="Your country*" class="form form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group-wrapper w-100">
                                        <input type="text" placeholder="Subject*" class="form form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group-wrapper w-100">
                                        <textarea cols="40" rows="10" class="form-control"
                                                  placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group-wrapper d-flex justify-content-center w-100">
                                        <div class="captcha-image text-center">
                                            <span class="d-block">Please prove you are human by selecting the <span class="text-danger">House</span>.</span>
                                            <label>
                                                <input type="radio" name="kc_captcha" value="kc_house">
                                                <svg width="50" height="50" aria-hidden="true" role="img"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="currentColor"
                                                          d="M488 313v143c0 13-11 24-24 24H348c-7 0-12-5-12-12V356c0-7-5-12-12-12h-72c-7 0-12 5-12 12v112c0 7-5 12-12 12H112c-13 0-24-11-24-24V313c0-4 2-7 4-10l188-154c5-4 11-4 16 0l188 154c2 3 4 6 4 10zm84-61l-84-69V44c0-6-5-12-12-12h-56c-7 0-12 6-12 12v73l-89-74a48 48 0 00-61 0L4 252c-5 4-5 12-1 17l25 31c5 5 12 5 17 1l235-193c5-4 11-4 16 0l235 193c5 5 13 4 17-1l25-31c4-6 4-13-1-17z"></path>
                                                </svg>
                                            </label>
                                            <label>
                                                <input type="radio" name="kc_captcha" value="bot">
                                                <svg width="50" height="50" aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M350 99c-54 0-98-35-166-35-25 0-47 4-68 12a56 56 0 004-24C118 24 95 1 66 0a56 56 0 00-34 102v386c0 13 11 24 24 24h16c13 0 24-11 24-24v-94c28-12 64-23 114-23 54 0 98 35 166 35 48 0 86-16 122-41 9-6 14-15 14-26V96c0-23-24-39-45-29-35 16-77 32-117 32z"></path></svg>
                                            </label>
                                            <label>
                                                <input type="radio" name="kc_captcha" value="bot">
                                                <svg width="50" height="50" aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M472 200H360L256 6a12 12 0 00-10-6h-58c-8 0-14 7-12 15l34 185H100l-35-58a12 12 0 00-10-6H12c-8 0-13 7-12 14l21 106L0 362c-1 7 4 14 12 14h43c4 0 8-2 10-6l35-58h110l-34 185c-2 8 4 15 12 15h58a12 12 0 0010-6l104-194h112c57 0 104-25 104-56s-47-56-104-56z"></path></svg>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <button type="submit">Submit your request</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 right-side">
                    <div class="content__wrapper">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
