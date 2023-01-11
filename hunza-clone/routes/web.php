<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix'=>'/'],function(){
    Route::get('/', function () {return view('components.home.home');});
    Route::get('/about-us', function () {return view('components.home.about-us');})->name('about-us');
    Route::get('/testimonials', function () {return view('components.home.testimonials');})->name('testimonials');
    Route::get('/ceo-message', function () {return view('components.home.message');})->name('message');
    Route::get('/team', function () {return view('components.home.team');})->name('team');

    Route::get('/pakistan-tourism', function () {return view('partials.error');})->name('error');
    Route::get('/hunza-tour', function () {return view('components.tour.afghanistan.hunza-valley');})->name('hunza');


//    expeditions
    Route::get('/expeditions-pakistan', function () {return view('components.expeditions.expeditions');})->name('about-us');
    Route::get('/passu-peak-expedition', function () {return view('partials.error');})->name('about-us');
    Route::get('/shispareshishper-peak-expedition', function () {return view('partials.error');})->name('about-us');
});


// tours
Route::group(['prefix' => 'afghanistan'], function () {
    Route::get('/', function () {return view('partials.error');});
    Route::get('/bamyan-herat-tour', function () {return view('partials.error');});
});
//tour afghanistan


//treks
Route::group(['prefix' => 'trek'], function () {
    Route::get('/', function () {return view('components.trek.trek');});
    Route::get('/patundass', function () {return view('components.trek.patundas');});
    Route::get('/batura', function () {return view('partials.error');});
    Route::get('/shimshalpamir', function () {return view('partials.error');});
    Route::get('/rakaposhi-patundass', function () {return view('partials.error');});
    Route::get('/great-karakoram-traverse-trek', function () {return view('partials.error');});
    Route::get('/k2-base-camp', function () {return view('partials.error');});
    Route::get('/snowlake', function () {return view('partials.error');});
    Route::get('/roundnangaparbat', function () {return view('partials.error');});
    Route::get('/nangaparbat-basecamp', function () {return view('partials.error');});
    Route::get('/rakaposhibasecamp', function () {return view('partials.error');});
    Route::get('/rushlake', function () {return view('partials.error');});
});

//safaris
Route::group(['prefix' => 'safari'], function () {
    Route::get('/', function () {return view('components.safaris.safari');});
    Route::get('/hunza-khunjerab-jeep-safari', function () {return view('components.safaris.safari');});
    Route::get('/deosai-jeep-safari', function () {return view('partials.error');});
    Route::get('/north-pakistan-jeep-safari', function () {return view('partials.error');});
});


//contact-us
Route::get('/contact-us', function () {
    return view('components.contact.contact-us');
});
Route::get('/error', function () {
    return view('partials.error');
});

Route::get('/layout', function () {
    return view('partials.layout');
});
