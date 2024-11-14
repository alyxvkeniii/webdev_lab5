<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/{userId}', [DashboardController::class, 'index'])->name('dashboard');
});

Route::view('/dashboard', 'dashboard')->name('dashboard');

Route::get('/menu', function () {
    return view('menu');
});

Route::view('/menu', 'menu')->name('menu');

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::view('/sign-up', 'sign-up')->name('sign-up');

Route::get('/login', function () {
    return view('login');
});

Route::view('/login', 'login')->name('login');


