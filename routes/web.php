<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DokterController;

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

Route::get('/', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'authenticate'])->middleware('guest')->name('login');
// Route::post('register', [LoginController::class, 'register'])->middleware('guest')->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('cariunit', [LoginController::class, 'cariunit'])->name('cariunit');



//Route Antrian
Route::get('/antrian', [AntrianController::class, 'index']);
Route::post('/ambildata', [AntrianController::class, 'ambildata'])->name('ambildata');
Route::post('/ambilantrianbidan', [AntrianController::class, 'ambilantrianbidan'])->name('ambilantrianbidan');
Route::post('/ambilantrianumum', [AntrianController::class, 'ambilantrianumum'])->name('ambilantrianumum');





    //Route Dokter
    Route::get('dokter', [DokterController::class, 'index'])->name('dokter');
    Route::get('triase', [DokterController::class, 'triase'])->name('triase');
    Route::get('asses', [DokterController::class, 'asses'])->name('asses');
    Route::get('kpo', [DokterController::class, 'kpo'])->name('kpo');

    //form-form
    Route::post('assesmentdokter', [DokterController::class, 'assesmentdokter'])->name('assesmentdokter');
    Route::post('ermdokter', [DokterController::class, 'ermdokter'])->name('ermdokter');
    Route::post('riwayatcppt', [DokterController::class, 'riwayatcppt'])->name('riwayatcppt');
    Route::post('triasedewasa', [DokterController::class, 'triasedewasa'])->name('triasedewasa');
    Route::post('triaseanak', [DokterController::class, 'triaseanak'])->name('triaseanak');
    Route::post('hasillabo', [DokterController::class, 'hasillabo'])->name('hasillabo');
    Route::post('hasilradio', [DokterController::class, 'hasilradio'])->name('hasilradio');
    Route::post('formermdokter', [DokterController::class, 'formermdokter'])->name('formermdokter');
    Route::post('formdewasa', [DokterController::class, 'formdewasa'])->name('formdewasa');
    Route::post('resumetriase', [DokterController::class, 'resumetriase'])->name('resumetriase');

    //simpan
    Route::post('simpanpemeriksaantriase', [DokterController::class, 'simpanpemeriksaantriase'])->name('simpanpemeriksaantriase');
    Route::post('simpanassemen', [DokterController::class, 'simpanassemen'])->name('simpanassemen');

    //cari
    Route::post('carinotriase', [DokterController::class, 'carinotriase'])->name('carinotriase');

    //Akhir route dokter
