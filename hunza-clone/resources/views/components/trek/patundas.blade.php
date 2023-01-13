@extends('partials.layout')

@section('css')
    <link href="{{asset('assets/css/component/trek/patundass.css')}}" rel="stylesheet" type="text/css"/>
@endsection



@section('content')
    <div id="patundass" class="content has-content">
        <div class="content__wrapper">
            <div class="section">
                <div class="section__wrapper">
                    <div class="content__wrapper has-content">
                        <div class="wrapper-5"></div>
                        <div style="height: 100px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <svg data-color="#292b33" class="position-absolute left-0 d-block"
             width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" version="1.1"
             xmlns="http://www.w3.org/2000/svg" style="fill: rgb(41, 43, 51); bottom: -1px;z-index: 5; width: 100%">
            <path
                d="M 37.91 16.43 C 36.38 25.33 34.85 27.29 33.32 22.17 C 31.10 45.76 28.89 45.76 26.67 22.17 C 25.48 26.15 24.29 25.91 23.11 21.42 C 21.32 37.01 19.53 39.04 17.74 27.76 C 15.72 45.56 13.69 43.71 11.67 22.17 C 10.52 26.02 9.37 25.91 8.22 21.82 C 6.39 39.53 4.56 42.10 2.73 29.65 C 1.82 38.11 0.91 42.34 0 42.36 L 0 105 L 100 105 L 100 39.86 C 99.30 39.85 98.60 37.53 97.91 32.87 C 95.89 56.38 93.87 55.58 91.85 30.17 C 90.55 36.91 89.25 36.48 87.96 29.07 C 85.98 50.12 84.01 50.12 82.03 29.07 C 80.79 36.19 79.54 36.85 78.29 30.90 C 76.24 60.73 74.18 62.63 72.12 36.66 C 70.43 49.67 68.73 47.17 67.03 29.07 C 65.67 36.83 64.32 36.83 62.96 29.07 C 60.80 52.05 58.65 49.91 56.49 22.74 C 55.43 25.90 54.38 25.71 53.32 22.17 C 51.20 44.70 49.09 45.76 46.97 25.26 C 45.24 33.47 43.50 30.86 41.77 17.46 C 40.48 21.12 39.19 20.74 37.91 16.43 Z"></path>
        </svg>
    </div>
@endsection
