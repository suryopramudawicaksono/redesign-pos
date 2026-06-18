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

// Master
Route::view('/perusahaan', 'pages.master.perusahaan')->name('perusahaan');
Route::view('/cabang', 'pages.master.cabang')->name('cabang');
Route::view('/gudang', 'pages.master.gudang')->name('gudang');
Route::view('/produk', 'pages.master.produk')->name('produk');
Route::view('/produk/stock', 'pages.master.stock')->name('stock');
Route::view('/produk/paket', 'pages.master.paket')->name('paket');
Route::view('/produk/kategori', 'pages.master.kategori')->name('kategori');
Route::view('/diskon', 'pages.master.diskon')->name('diskon');
Route::view('/pemasok', 'pages.master.pemasok')->name('pemasok');
Route::view('/customer', 'pages.master.customer')->name('customer');
Route::view('/customer/tipe', 'pages.master.tipe')->name('tipe');
Route::view('/customer/daftar', 'pages.master.daftar')->name('daftar');
Route::view('/user', 'pages.master.user')->name('user');
Route::view('/user/data', 'pages.master.data')->name('data');
Route::view('/user/role', 'pages.master.role')->name('role');
Route::view('/poin', 'pages.master.poin')->name('poin');

// Pembelian
Route::view('/invoice-pembelian', 'pages.pembelian.invoice')->name('invoice-pembelian');
Route::view('/retur-pembelian', 'pages.pembelian.retur')->name('retur-pembelian');

// Penjualan
Route::view('/pos', 'pages.penjualan.pos')->name('pos');
Route::view('/invoice-penjualan', 'pages.penjualan.invoice')->name('invoice-penjualan');
Route::view('/retur-penjualan', 'pages.penjualan.retur')->name('retur-penjualan');
Route::view('/history-penjualan', 'pages.penjualan.history')->name('history-penjualan');
Route::view('/session', 'pages.penjualan.session')->name('session');