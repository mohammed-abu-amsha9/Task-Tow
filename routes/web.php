<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Models\contact;

Route::middleware('guest')->group(function () {
    Route::view('/login', 'login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::view('/', 'index')->name('home');
    Route::view('/services', 'lab-services')->name('services');
    Route::view('/solutions', 'solutions')->name('solutions');
    Route::resource('pricing', ContactController::class);
    Route::view('/learn', 'learn')->name('learn');
    Route::view('/why-us', 'why-lazord')->name('why-us');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
