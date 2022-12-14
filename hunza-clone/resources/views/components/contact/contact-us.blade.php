@extends('partials.layout')

@section('content')
    <div class="container d-flex flex-column">
        <div id="contact-us__map">
            <iframe class="w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3317.2568555760636!2d73.22176791502801!3d33.75402788068807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df95a6f8a08223%3A0x7b0d30d4e4098808!2sHunza%20Explorers%20Treks%20%26%20Tours!5e0!3m2!1sen!2s!4v1670984240499!5m2!1sen!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-us__title d-flex flex-column align-items-center">
            <h2 class="text-uppercase">Contact us</h2>
            <h6>We work from Monday to Sunday from 8:00AM to 7:00PM</h6>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <form id="contact-us__form" action="#">
                    @csrf
                    <h3 class="title text-uppercase text-center">write to us</h3>
                    <div class="form-group">
                        <label>
                            <input class="form form-control w-100" type="text" placeholder="Your name*"/>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input class="form form-control w-100" type="text" placeholder="Email*"/>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input class="form form-control w-100" type="text" placeholder="Your country*"/>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input class="form form-control w-100" type="text" placeholder="Subject*"/>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <textarea placeholder="Message" class="form-control"></textarea>
                        </label>
                    </div>
                    <div class="form-group">
                        <div class="captcha">
                            <span>Please prove you are human by selecting the <i style="color:red;">House</i>.</span>
                            <div class="captcha__icon">
                                <label>
                                    <input type="radio" name="kc_house"/>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class>Submit your request</button>
                        <div class="spinner"></div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-6">

            </div>
        </div>
    </div>

@endsection
