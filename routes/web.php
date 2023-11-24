<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PerawatController;


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
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


//Route Antrian
Route::get('/antrian', [AntrianController::class, 'index']);
Route::post('/ambildata', [AntrianController::class, 'ambildata'])->name('ambildata');
Route::post('/ambilantrianbidan', [AntrianController::class, 'ambilantrianbidan'])->name('ambilantrianbidan');
Route::post('/ambilantrianumum', [AntrianController::class, 'ambilantrianumum'])->name('ambilantrianumum');




Route::group(['middleware' => ['hak_akses:5', 'auth']], function () {

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
    Route::post('resumecpptdokter', [DokterController::class, 'resumecpptdokter'])->name('resumecpptdokter');

    //simpan
    Route::post('simpanpemeriksaantriase', [DokterController::class, 'simpanpemeriksaantriase'])->name('simpanpemeriksaantriase');
    Route::post('simpanpemeriksaantriaseanak', [DokterController::class, 'simpanpemeriksaantriaseanak'])->name('simpanpemeriksaantriaseanak');

    Route::post('simpanassesmen', [DokterController::class, 'simpanassesmen'])->name('simpanassesmen');
    Route::post('updateassemen', [DokterController::class, 'updateassemen'])->name('updateassemen');


    //cari
    Route::post('carinotriase', [DokterController::class, 'carinotriase'])->name('carinotriase');
    Route::post('caripasienigd', [DokterController::class, 'caripasienigd'])->name('caripasienigd');

});
//Akhir route dokter



Route::group(['middleware' => ['hak_akses:4', 'auth']], function () {

    // perawat igd
    Route::get('perawat', [PerawatController::class, 'index'])->name('perawat');
    Route::get('assesperawat', [PerawatController::class, 'assesperawat'])->name('assesperawat');
    Route::post('ermperawat', [PerawatController::class, 'ermperawat'])->name('ermperawat');
    Route::post('formermperawat', [PerawatController::class, 'formermperawat'])->name('formermperawat');
    Route::post('riwayatcpptperawat', [PerawatController::class, 'riwayatcpptperawat'])->name('riwayatcpptperawat');
    Route::post('rencanaplg', [PerawatController::class, 'rencanaplg'])->name('rencanaplg');
    Route::post('sri', [PerawatController::class, 'sri'])->name('sri');


    Route::post('hasillabperawat', [PerawatController::class, 'hasillabperawat'])->name('hasillabperawat');
    Route::post('hasilradioperawat', [PerawatController::class, 'hasilradioperawat'])->name('hasilradioperawat');
    Route::post('resumecpptperawat', [PerawatController::class, 'resumecpptperawat'])->name('resumecpptperawat');
    Route::post('caripasienigdperawat', [PerawatController::class, 'caripasienigdperawat'])->name('caripasienigdperawat');



    Route::post('simpanassemenperawat', [PerawatController::class, 'simpanassemenperawat'])->name('simpanassemenperawat');
    Route::post('updateassemenperawat', [PerawatController::class, 'updateassemenperawat'])->name('updateassemenperawat');





});
