@extends('partials.layout')

@section('css')
<style>

</style>
@endsection

@section('content')
    <div class="container">
        <div class="slider owl-carousel owl-theme">
            <div class="slider__item">
                <img class="h-100" src="{{asset('assets/images/carousel/carousel_1.jpg')}}" alt="images"/>
            </div>
            <div class="slider__item">
                <img class="h-100" src="{{asset('assets/images/carousel/carousel_2.jpg')}}" alt="images"/>
            </div>
            <div class="slider__item">
                <img class="h-100" src="{{asset('assets/images/carousel/carousel_3.jpg')}}" alt="images"/>
            </div>
            <div class="slider__item">
                <img class="h-100" src="{{asset('assets/images/carousel/carousel_4.jpg')}}" alt="images"/>
            </div>
            <div class="slider__item">
                <img class="h-100" src="{{asset('assets/images/carousel/carousel_5.jpg')}}" alt="images"/>
            </div>
            <div class="slider__item">
                <img class="h-100" src="{{asset('assets/images/carousel/carousel_6.jpg')}}" alt="images"/>
            </div>
            <div class="slider__item">
                <img class="h-100" src="{{asset('assets/images/carousel/carousel_7.jpg')}}" alt="images"/>
            </div>
            <div class="slider__item">
                <img class="h-100" src="{{asset('assets/images/carousel/carousel_8.jpg')}}" alt="images"/>
            </div>
            <div class="slider__item">
                <img class="h-100" src="{{asset('assets/images/carousel/carousel_9.jpg')}}" alt="images"/>
            </div>
            <div class="slider__item">
                <img class="h-100" src="{{asset('assets/images/carousel/carousel_10.jpg')}}" alt="images"/>
            </div>
        </div>
    </div>
    <div class="home section__groups">
        <div class="section__contents"></div>
    </div>
@endsection


@section('scripts')
<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            display:block,
            rtl:true,
            loop:true,
            margin:10,
            nav:true,

        });
    })
</script>

@endsection
