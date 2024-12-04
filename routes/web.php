<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::resource('admins', AdminController::class);
Route::resource('materials', MaterialController::class);
Route::resource('pelanggan', PelangganController::class);
Route::get('/pelanggan/step1', [PelangganController::class, 'step1'])->name('pelanggan.step1');
Route::post('/pelanggan/step2', [PelangganController::class, 'step2'])->name('pelanggan.step2');
Route::post('/pelanggan/submit', [PelangganController::class, 'submit'])->name('pelanggan.submit');
Route::get('/pelanggan/thankyou', [PelangganController::class, 'thankyou'])->name('pelanggan.thankyou');
Route::post('/pelanggan/thankyou', [PelangganController::class, 'thankyou'])->name('pelanggan.thankyou');
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
