<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EntryController;
use App\Http\Middleware\CheckAdmin;
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


Route::prefix('admin')->middleware(['auth', CheckAdmin::class])->group(function (){
    require_once __DIR__ . '/admin.php';
});

Route::get('/login', [EntryController::class, 'loginForm'])->name('login');
Route::post('/login', [EntryController::class, 'login'])->name('loginPost');
Route::get('/logout', [EntryController::class, 'logout'])->name('logout');

Route::get('/', [ClientController::class, 'home'])->name('home-page');
Route::get('/rooms', [ClientController::class, 'roomList'])->name('room-page');
Route::get('/room-detail/{id}', [ClientController::class, 'detail'])->name('room-detail');

Route::post('/booking', [BookingController::class, 'store'])->name('booking');
Route::get('/success', function () { return view('clients/success'); })->name('success');

Route::get('/about', function () {
    return view('clients/about');
})->name('about-page');

Route::get('/contact', function () {
    return view('clients/contact');
})->name('contact-page');

Route::get('/service', function () {
    return view('clients/service');
})->name('service-page');




