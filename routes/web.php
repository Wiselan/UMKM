<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/{nomor}', [ProdukController::class, 'detail'])->name('produk.detail');
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');