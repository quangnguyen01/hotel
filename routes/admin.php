<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->group(function(){
    Route::get('create',[UserController::class,'create'])->name('createUser');
    Route::post('create',[UserController::class,'store'])->name('storeUser');
    Route::get('',[UserController::class,'list'])->name('listUser');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('editUser');
    Route::put('edit/{id}', [UserController::class, 'save'])->name('saveUser');
    Route::get('delete/{id}', [UserController::class, 'delete'])->name('deleteUser');
});

Route::prefix('categories')->group(function () {
    Route::get('create', [CategoryController::class, 'create'])->name('createCategory');
    Route::post('create', [CategoryController::class, 'store'])->name('storeCategory');
    Route::get('', [CategoryController::class, 'list'])->name('listCategory');
    Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('editCategory');
    Route::put('edit/{id}', [CategoryController::class, 'save'])->name('saveCategory');
    Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('deleteCategory');
});

Route::prefix('rooms')->group(function () {
    Route::get('create', [RoomController::class, 'create'])->name('createRoom');
    Route::post('create', [RoomController::class, 'store'])->name('storeRoom');
    Route::get('', [RoomController::class, 'list'])->name('listRoom');
    Route::get('edit/{id}', [RoomController::class, 'edit'])->name('editRoom');
    Route::put('edit/{id}', [RoomController::class, 'save'])->name('saveRoom');
    Route::get('delete/{id}', [RoomController::class, 'delete'])->name('deleteRoom');
    Route::get('manager', [RoomController::class, 'manager'])->name('managerRoom');
});

Route::prefix('bookings')->group(function () {
   Route::get('', [BookingController::class, 'list'])->name('listBooking');
   Route::post('', [BookingController::class, 'updateStatus'])->name('updateStatus');
   Route::get('room/{id}', [BookingController::class, 'bookingForm'])->name('creatBooking');
   Route::get('room/{id}/edit', [BookingController::class, 'editBooking'])->name('editBooking');
   Route::put('update/{id}', [BookingController::class, 'save'])->name('saveBooking');
   Route::get('delete/{id}', [BookingController::class, 'delete'])->name('deleteBooking');
});
