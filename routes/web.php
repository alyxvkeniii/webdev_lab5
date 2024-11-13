<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/login', function () {
    return view('login');
});

