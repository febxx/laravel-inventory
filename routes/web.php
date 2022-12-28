<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user/store', [UserController::class, 'store']);
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::post('/user/update/{id}', [UserController::class, 'update']);
Route::get('/user/delete/{id}', [UserController::class, 'destroy']);

Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/barang/create', [BarangController::class, 'create']);
Route::post('/barang/store', [BarangController::class, 'store']);
Route::get('/barang/edit/{id}', [BarangController::class, 'edit']);
Route::post('/barang/update/{id}', [BarangController::class, 'update']);
Route::get('/barang/delete/{id}', [BarangController::class, 'destroy']);
Route::get('/barang/cetak_pdf', [BarangController::class, 'cetak_pdf']);

Route::get('/barang_masuk', [BarangMasukController::class, 'index'])->name('barang_masuk');
Route::get('/barang_masuk/create', [BarangMasukController::class, 'create']);
Route::post('/barang_masuk/store', [BarangMasukController::class, 'store']);
Route::get('/barang_masuk/edit/{id}', [BarangMasukController::class, 'edit']);
Route::post('/barang_masuk/update/{id}', [BarangMasukController::class, 'update']);
Route::get('/barang_masuk/delete/{id}', [BarangMasukController::class, 'destroy']);
Route::get('/barang_masuk/cetak_pdf', [BarangMasukController::class, 'cetak_pdf']);

Route::get('/barang_keluar', [BarangKeluarController::class, 'index'])->name('barang_keluar');
Route::get('/barang_keluar/create', [BarangKeluarController::class, 'create']);
Route::post('/barang_keluar/store', [BarangKeluarController::class, 'store']);
Route::get('/barang_keluar/edit/{id}', [BarangKeluarController::class, 'edit']);
Route::post('/barang_keluar/update/{id}', [BarangKeluarController::class, 'update']);
Route::get('/barang_keluar/delete/{id}', [BarangKeluarController::class, 'destroy']);
Route::get('/barang_keluar/cetak_pdf', [BarangKeluarController::class, 'cetak_pdf']);
