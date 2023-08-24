<?php

use App\Http\Controllers\ClientController;
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

Route::get('/', [ClientController::class, 'home'])->name('home-page');
Route::get('/rooms', [ClientController::class, 'roomList'])->name('room-page');
Route::get('/room-detail/{id}', [ClientController::class, 'detail'])->name('room-detail');

Route::get('/about', function () {
    return view('clients/about');
})->name('about-page');

Route::get('/contact', function () {
    return view('clients/contact');
})->name('contact-page');

Route::get('/service', function () {
    return view('clients/service');
})->name('service-page');




