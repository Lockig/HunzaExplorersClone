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

Route::get('/', function () {
    return view('partials.error');
});

// tours
Route::group(['prefix' => 'tour'], function () {
    return view('partials.error');
});

//treks
Route::group(['prefix' => 'trek'], function () {
    Route::get('/', function () {
        return view('partials.error');
    });

});

//safaris


//expeditions

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
