<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\JadwalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/daftar', [AntrianController::class, 'daftar'])->name('daftar');
Route::get('/check_antrian', [AntrianController::class, 'check_antrian'])->name('check_antrian');
Route::get('/jadwal_rawat_jalan', [JadwalController::class, 'jadwal_rawat_jalan'])->name('jadwal_rawat_jalan');
Route::get('/jadwal_operasi', [JadwalController::class, 'jadwal_operasi'])->name('jadwal_operasi');
