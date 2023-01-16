@extends('partials.layout')

@section('css')
    <link href="{{asset('assets/css/component/tour/tour.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div id="tour" class="content has-content w-100">
        <div class="section__wrapper justify-content-center">
            <div class="section">
                <div class="section__wrapper">
                    <div class="content__wrapper">
                        <div class="empty-space w-100"></div>
                        <div class="heading row">
                            <div class="column--inner">
                                <div class="fancy-heading text-center">
                                    <span class="d-block text-uppercase slogan">Discover the land of colorful culture and high mountains with us!</span>
                                    <h1 class="title text-uppercase text-center">explore pakistan with us</h1>
                                    <div class="small-heading">
                                        We organise
                                        <a title="" class="text-black pl-0" target="_blank" href="https://hunzaexplorers.com/tours/">tours</a>,
                                        <a title="" class="text-black pl-0" target="_blank" href="https://www.hunzaexplorers.com/afghanistan">Afghanistan</a>
                                        , Tajikistan, China, Thailand and Vietnam
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="picture row"></div>
                        <div class="picture row"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
