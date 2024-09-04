<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('home');
})->name('admin.dashboard');

Route::get('/show', function () {
    return view('show');
});