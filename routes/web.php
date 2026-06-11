<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

Route::get('/home', function () {
    return view('pages.home');
})->name('home');

Route::post('/login', function () {
    return redirect()->route('home');
});
