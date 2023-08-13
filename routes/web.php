<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('clients/index');
})->name('home-page');

Route::get('/about', function () {
    return view('clients/about');
})->name('about-page');

Route::get('/booking', function () {
    return view('clients/booking');
})->name('booking-page');

Route::get('/contact', function () {
    return view('clients/contact');
})->name('contact-page');

Route::get('/room', function () {
    return view('clients/room');
})->name('room-page');

Route::get('/service', function () {
    return view('clients/service');
})->name('service-page');

Route::get('/team', function () {
    return view('clients/team');
})->name('team-page');

Route::get('/testimonial', function () {
    return view('clients/testimonial');
})->name('testimonial-page');
