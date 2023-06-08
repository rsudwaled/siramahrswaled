<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('cari_pasien', [APIController::class, 'cari_pasien'])->name('cari_pasien');
Route::get('poliklinik_aktif', [APIController::class, 'poliklinik_aktif'])->name('poliklinik_aktif');
Route::get('cari_jadwal_dokter', [APIController::class, 'cari_jadwal_dokter'])->name('cari_jadwal_dokter');

Route::get('ambil_antrian', [APIController::class, 'ambil_antrian'])->name('ambil_antrian');
Route::get('batal_antrian', [APIController::class, 'batal_antrian'])->name('batal_antrian');

Route::get('rujukan_peserta', [APIController::class, 'rujukan_peserta'])->name('rujukan_peserta');
Route::get('rujukan_rs_peserta', [APIController::class, 'rujukan_rs_peserta'])->name('rujukan_rs_peserta');
Route::get('suratkontrol_peserta', [APIController::class, 'suratkontrol_peserta'])->name('suratkontrol_peserta');




