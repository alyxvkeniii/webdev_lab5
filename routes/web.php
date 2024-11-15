<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/{userId}', [DashboardController::class, 'index'])->name('dashboard');
});

Route::view('/dashboard', 'dashboard')->name('dashboard');

Route::get('/menu', function () {
    return view('menu');
});

Route::view('/menu', 'menu')->name('menu');

Route::get('/faq', function () {
    return view('faq');
});

Route::view('/faq', 'faq')->name('faq');


Route::view('/profile', 'profile')->name('profile');

Route::get('/recipe', function () {
    return view('recipe');
});

Route::view('/recipe', 'recipe')->name('recipe');

Route::get('/settings', function () {
    return view('settings');
});

Route::view('/settings', 'settings')->name('settings');

Route::view('/policy', 'policy')->name('policy');
Route::view('/terms', 'terms')->name('terms');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); 
Route::post('/login', [LoginController::class, 'login']); 

Route::get('/sign-up', [LoginController::class, 'showSignUpForm'])->name('sign-up');
Route::post('/sign-up', [LoginController::class, 'signUp']); 



