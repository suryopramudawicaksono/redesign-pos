<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::post('/login', function () {
    return redirect()->route('dashboard');
});

Route::view('/perusahaan', 'pages.perusahaan')->name('perusahaan');