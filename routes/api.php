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


Route::get('cekPasien', [APIController::class, 'cekPasien'])->name('api.cekPasien');
Route::get('cekJadwalPoli', [APIController::class, 'cekJadwalPoli'])->name('api.cekJadwalPoli');
Route::get('ambilAntrianWeb', [APIController::class, 'ambilAntrianWeb'])->name('api.ambilAntrianWeb');
Route::get('cekRujukanPeserta', [APIController::class, 'cekRujukanPeserta'])->name('api.cekRujukanPeserta');
Route::get('cekRujukanRSPeserta', [APIController::class, 'cekRujukanRSPeserta'])->name('api.cekRujukanRSPeserta');

