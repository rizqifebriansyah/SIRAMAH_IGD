<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PerawatController;
use App\Http\Controllers\FarmasiController;
use App\Http\Controllers\ForensikController;
use App\Http\Controllers\BankdarahController;
use App\Http\Controllers\GiziControlller;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\LaboratoriumController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\RadiologiController;
use App\Http\Controllers\ReportingController;
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
Route::get('/home', [LoginController::class, 'logout'])->name('home');



//Route Antrian
Route::get('/antrian', [AntrianController::class, 'index']);
Route::post('/ambildata', [AntrianController::class, 'ambildata'])->name('ambildata');
Route::post('/ambilantrianbidan', [AntrianController::class, 'ambilantrianbidan'])->name('ambilantrianbidan');
Route::post('/ambilantrianumum', [AntrianController::class, 'ambilantrianumum'])->name('ambilantrianumum');


//route monitoring
Route::group(['middleware' => ['hak_akses:18', 'auth']], function () {


    Route::get('monitoring', [MonitoringController::class, 'monitoring'])->name('monitoring');
    Route::post('ermpreview', [MonitoringController::class, 'ermpreview'])->name('ermpreview');

    //cari
    Route::post('carimonitoringpasien', [MonitoringController::class, 'carimonitoringpasien'])->name('carimonitoringpasien');
});
//route farmasi
Route::group(['middleware' => ['hak_akses:6', 'auth']], function () {

    //Route farmasi
    Route::get('farmasi', [FarmasiController::class, 'index'])->name('farmasi');
    Route::get('kpoo', [FarmasiController::class, 'kpoo'])->name('kpoo');
    Route::post('isiobat', [FarmasiController::class, 'isiobat'])->name('isiobat');
    Route::post('riwayatrekon', [FarmasiController::class, 'riwayatrekon'])->name('riwayatrekon');



    //cari
    Route::post('caripasienrekon', [FarmasiController::class, 'caripasienrekon'])->name('caripasienrekon');


    //simpan pasien
    Route::post('simpanrekon', [FarmasiController::class, 'simpanrekon'])->name('simpanrekon');
});



//route dokter
Route::group(['middleware' => ['hak_akses:5', 'auth']], function () {

    Route::post('/ambilnotriase', [DokterController::class, 'ambilnotriase'])->name('ambilnotriase');
    //Route Dokter
    Route::get('dokter', [DokterController::class, 'index'])->name('dokter');
    Route::get('triase', [DokterController::class, 'triase'])->name('triase');
    Route::get('asses', [DokterController::class, 'asses'])->name('asses');
    Route::get('kpo', [DokterController::class, 'kpo'])->name('kpo');

    //form-form
    Route::post('assesmentdokter', [DokterController::class, 'assesmentdokter'])->name('assesmentdokter');
    Route::post('ermdokter', [DokterController::class, 'ermdokter'])->name('ermdokter');
    Route::post('riwayatcppt', [DokterController::class, 'riwayatcppt'])->name('riwayatcppt');
    Route::post('icare', [DokterController::class, 'icare'])->name('icare');


    Route::post('triasedewasa', [DokterController::class, 'triasedewasa'])->name('triasedewasa');
    Route::post('triaseanak', [DokterController::class, 'triaseanak'])->name('triaseanak');
    Route::post('hasillabo', [DokterController::class, 'hasillabo'])->name('hasillabo');
    Route::post('hasilradio', [DokterController::class, 'hasilradio'])->name('hasilradio');
    Route::post('formermdokter', [DokterController::class, 'formermdokter'])->name('formermdokter');
    Route::post('formdewasa', [DokterController::class, 'formdewasa'])->name('formdewasa');
    Route::post('resumetriase', [DokterController::class, 'resumetriase'])->name('resumetriase');
    // Route::post('resumecpptdokter', [DokterController::class, 'resumecpptdokter'])->name('resumecpptdokter');
    Route::post('formdewasaigkdok', [DokterController::class, 'formdewasaigkdok'])->name('formdewasaigkdok');
    Route::post('formbayikigkdok', [DokterController::class, 'formbayikigkdok'])->name('formbayikigkdok');
    Route::post('rekonobat', [DokterController::class, 'rekonobat'])->name('rekonobat');
    Route::post('pemfistrau', [DokterController::class, 'pemfistrau'])->name('pemfistrau');
    Route::post('triasedewasaa', [DokterController::class, 'triasedewasaa'])->name('triasedewasaa');
    Route::post('triaseanakk', [DokterController::class, 'triaseanakk'])->name('triaseanakk');
    Route::post('pemfisnontrau', [DokterController::class, 'pemfisnontrau'])->name('pemfisnontrau');
    Route::post('penandaangambardokter', [DokterController::class, 'penandaangambardokter'])->name('penandaangambardokter');



    //simpan
    Route::post('simpanpemeriksaantriase', [DokterController::class, 'simpanpemeriksaantriase'])->name('simpanpemeriksaantriase');
    Route::post('simpanpemeriksaantriaseanak', [DokterController::class, 'simpanpemeriksaantriaseanak'])->name('simpanpemeriksaantriaseanak');

    Route::post('simpanassesmen', [DokterController::class, 'simpanassesmen'])->name('simpanassesmen');
    Route::post('simpanassesdokkebid', [DokterController::class, 'simpanassesdokkebid'])->name('simpanassesdokkebid');
    Route::post('simpanassesdokbay', [DokterController::class, 'simpanassesdokbay'])->name('simpanassesdokbay');

    Route::post('updateassemen', [DokterController::class, 'updateassemen'])->name('updateassemen');
    Route::post('updateassesdokbid', [DokterController::class, 'updateassesdokbid'])->name('updateassesdokbid');
    Route::post('updateassesdokbidbay', [DokterController::class, 'updateassesdokbidbay'])->name('updateassesdokbidbay');




    Route::post('validasiasssesdok', [DokterController::class, 'validasiasssesdok'])->name('validasiasssesdok');
    Route::post('validasiasssesdokbid', [DokterController::class, 'validasiasssesdokbid'])->name('validasiasssesdokbid');
    Route::post('validasiasssesdokbidbay', [DokterController::class, 'validasiasssesdokbidbay'])->name('validasiasssesdokbidbay');




    //cari
    Route::post('carinotriase', [DokterController::class, 'carinotriase'])->name('carinotriase');
    Route::post('caripasienigd', [DokterController::class, 'caripasienigd'])->name('caripasienigd');
    Route::get('caridiagnosa', [DokterController::class, 'caridiagnosa'])->name('caridiagnosa');

    Route::post('caridokterrme', [DokterController::class, 'caridokterrme'])->name('caridokterrme');


    //retur

    Route::post('returorderradiologi', [DokterController::class, 'returorderradiologi'])->name('returorderradiologi');
    Route::post('returorderlaboratorium', [DokterController::class, 'returorderlaboratorium'])->name('returorderlaboratorium');
    Route::post('returordergp', [DokterController::class, 'returordergp'])->name('returordergp');
    Route::post('returordertdp', [DokterController::class, 'returordertdp'])->name('returordertdp');
});
//Akhir route dokter


//resume
Route::post('resumecpptdokter', [DokterController::class, 'resumecpptdokter'])->name('resumecpptdokter');

//cetak resume
Route::post('cetakresumecpptdokter', [DokterController::class, 'cetakresumecpptdokter'])->name('cetakresumecpptdokter');
Route::get('cetaktresumecppt/{kj}/{norm}', [DokterController::class, 'cetaktresumecppt']);
Route::post('cetakresumedokterkebidanan', [DokterController::class, 'cetakresumedokterkebidanan'])->name('cetakresumedokterkebidanan');
Route::get('cetaktresumekebidanan/{kj}/{norm}', [DokterController::class, 'cetaktresumekebidanan']);
Route::post('cetakpemantauan', [DokterController::class, 'cetakpemantauan'])->name('cetakpemantauan');
Route::get('cetakpemantauanigd/{kj}/{norm}', [DokterController::class, 'cetakpemantauanigd']);
Route::get('resumeigd/{kj}/{norm}', [MonitoringController::class, 'resumeigd']);
// perawat igd
Route::group(['middleware' => ['hak_akses:4', 'auth']], function () {


    Route::get('perawat', [PerawatController::class, 'index'])->name('perawat');
    Route::get('assesperawat', [PerawatController::class, 'assesperawat'])->name('assesperawat');
    Route::get('billingigk', [PerawatController::class, 'billingigk'])->name('billingigk');
    Route::post('billinginput', [PerawatController::class, 'billinginput'])->name('billinginput');


    Route::post('ermperawat', [PerawatController::class, 'ermperawat'])->name('ermperawat');
    Route::post('formermperawat', [PerawatController::class, 'formermperawat'])->name('formermperawat');
    Route::post('pemantauan', [PerawatController::class, 'pemantauan'])->name('pemantauan');
    Route::post('transferpasien', [PerawatController::class, 'transferpasien'])->name('transferpasien');

    Route::post('riwayatcpptperawat', [PerawatController::class, 'riwayatcpptperawat'])->name('riwayatcpptperawat');
    Route::post('formdewasaigk', [PerawatController::class, 'formdewasaigk'])->name('formdewasaigk');
    Route::post('formbayikigk', [PerawatController::class, 'formbayikigk'])->name('formbayikigk');
    Route::post('penandaangambar', [PerawatController::class, 'penandaangambar'])->name('penandaangambar');
    Route::post('pemantauanview', [PerawatController::class, 'pemantauanview'])->name('pemantauanview');


Route::post('transferpasien', [PerawatController::class, 'transferpasien'])->name('transferpasien');
    Route::post('catatantficu', [PerawatController::class, 'catatantficu'])->name('catatantficu');
    Route::post('rencanaplg', [PerawatController::class, 'rencanaplg'])->name('rencanaplg');
    Route::post('sri', [PerawatController::class, 'sri'])->name('sri');
    Route::post('upload', [PerawatController::class, 'upload'])->name('upload');


    Route::post('hasillabperawat', [PerawatController::class, 'hasillabperawat'])->name('hasillabperawat');
    Route::post('hasilradioperawat', [PerawatController::class, 'hasilradioperawat'])->name('hasilradioperawat');
    Route::post('resumecpptperawat', [PerawatController::class, 'resumecpptperawat'])->name('resumecpptperawat');
    Route::post('caripasienigdperawat', [PerawatController::class, 'caripasienigdperawat'])->name('caripasienigdperawat');
    Route::post('cariruangan', [PerawatController::class, 'cariruangan'])->name('cariruangan');

    Route::post('simpanctttransfer', [PerawatController::class, 'simpanctttransfer'])->name('simpanctttransfer');

    Route::post('simpanrencanaplg', [PerawatController::class, 'simpanrencanaplg'])->name('simpanrencanaplg');
    Route::post('updaterencanaplg', [PerawatController::class, 'updaterencanaplg'])->name('updaterencanaplg');

    Route::post('simpansri', [PerawatController::class, 'simpansri'])->name('simpansri');

    Route::post('simpanassesbidanbayi', [PerawatController::class, 'simpanassesbidanbayi'])->name('simpanassesbidanbayi');
    Route::post('simpanassesbidan', [PerawatController::class, 'simpanassesbidan'])->name('simpanassesbidan');
    Route::post('simpanassemenperawat', [PerawatController::class, 'simpanassemenperawat'])->name('simpanassemenperawat');
    Route::post('simpanpemantauan', [PerawatController::class, 'simpanpemantauan'])->name('simpanpemantauan');

    Route::post('updateassemenperawat', [PerawatController::class, 'updateassemenperawat'])->name('updateassemenperawat');
    Route::post('updateassesbidan', [PerawatController::class, 'updateassesbidan'])->name('updateassesbidan');
    Route::post('updateassesbidanbayi', [PerawatController::class, 'updateassesbidanbayi'])->name('updateassesbidanbayi');


    Route::post('validasiassesbidan', [PerawatController::class, 'validasiassesbidan'])->name('validasiassesbidan');
    Route::post('validasiassesbidanbayi', [PerawatController::class, 'validasiassesbidanbayi'])->name('validasiassesbidanbayi');
    Route::post('validasiassemenperawat', [PerawatController::class, 'validasiassemenperawat'])->name('validasiassemenperawat');
    Route::post('/simpanhasilekg', [PerawatController::class, 'simpanhasilekg'])->name('simpanhasilekg');
    Route::post('/simpanhasilspp', [PerawatController::class, 'simpanhasilspp'])->name('simpanhasilspp');
    Route::post('/simpanhasiltdkn', [PerawatController::class, 'simpanhasiltdkn'])->name('simpanhasiltdkn');
    Route::post('/simpanhasiltf', [PerawatController::class, 'simpanhasiltf'])->name('simpanhasiltf');
    Route::post('/simpantindakankebidanan', [PerawatController::class, 'simpantindakankebidanan'])->name('simpantindakankebidanan');

    Route::post('returtinper', [PerawatController::class, 'returtinper'])->name('returtinper');
    Route::post('returobatplg', [PerawatController::class, 'returobatplg'])->name('returobatplg');

});






// expertisi view ruangan
Route::get('/expertisi_view', [RadiologiController::class, 'expertisi_view'])->name('expertisi_view');
Route::get('cetakexp/{acc}', [RadiologiController::class, 'cetakexpertise2']);
Route::post('cetakexpertise', [RadiologiController::class, 'cetakexpertise'])->name('cetakexpertise');
Route::post('carigambarbridging', [RadiologiController::class, 'carigambarbridging'])->name('carigambarbridging');
//expertisi view  dokter dan radio grapher
Route::get('/expertisi_view1', [RadiologiController::class, 'expertisi_view1'])->name('expertisi_view1');
Route::get('cetakexpp/{acc}', [RadiologiController::class, 'cetakexpertise1']);
Route::post('cetakexpertisee', [RadiologiController::class, 'cetakexpertisee'])->name('cetakexpertisee');
Route::post('carigambarbridgingg', [RadiologiController::class, 'carigambarbridgingg'])->name('carigambarbridgingg');

//petugas radiologi
Route::group(['middleware' => ['hak_akses:3', 'auth']], function () {

    //tampil data
    Route::get('/radiologi', [RadiologiController::class, 'radiologi'])->name('radiologi');
    Route::get('/riwayatorder', [RadiologiController::class, 'riwayatorder'])->name('riwayatorder');
    Route::get('/riwayatbridging', [RadiologiController::class, 'riwayatbridging'])->name('riwayatbridging');
    Route::get('/riwayatretur', [RadiologiController::class, 'riwayatretur'])->name('riwayatretur');

    Route::post('detailpasienradiologi', [RadiologiController::class, 'detailpasienradiologi'])->name('detailpasienradiologi');
    Route::post('/riwayatradiologipasien', [RadiologiController::class, 'riwayatradiologipasien'])->name('riwayatradiologipasien');
    Route::post('/detailbarang', [RadiologiController::class, 'detailbarang'])->name('detailbarang');
    Route::post('/successview', [RadiologiController::class, 'successview'])->name('successview');


    //cari pasien
    Route::post('caridokterradiologi', [RadiologiController::class, 'caridokterradiologi'])->name('caridokterradiologi');
    Route::post('caritanggalorderrad', [RadiologiController::class, 'caritanggalorderrad'])->name('caritanggalorderrad');
    Route::post('caririwayatbridging', [RadiologiController::class, 'caririwayatbridging'])->name('caririwayatbridging');



    //simpan order
    Route::post('/simpanorderradiologi', [RadiologiController::class, 'simpanorderradiologi'])->name('simpanorderradiologi');
    Route::post('/updateradiologi', [RadiologiController::class, 'updateradiologi'])->name('updateradiologi');

    //retur order
    Route::post('returorderrad', [RadiologiController::class, 'returorderrad'])->name('returorderrad');


    //edit 
    Route::post('editriwayatbridging', [RadiologiController::class, 'editriwayatbridging'])->name('editriwayatbridging');



    //cetakan
    Route::post('/printlabelrad', [RadiologiController::class, 'printlabelrad'])->name('printlabelrad');
    Route::get('etiket/{kode_header}/{idhed}', [RadiologiController::class, 'etiket']);
    Route::get('cetakorder/{kode_header}/{idhed}', [RadiologiController::class, 'cetakpdf']);
    // Route::get('cetakexp/{acc}', [RadiologiController::class, 'cetakexpertise1']);
    // Route::post('cetakexpertise', [RadiologiController::class, 'cetakexpertise'])->name('cetakexpertise');
});

//petugas reporting
Route::get('laporanpoli', [ReportingController::class, 'laporanpoli'])->name('laporanpoli');
Route::post('carilaporanpoli', [ReportingController::class, 'carilaporanpoli'])->name('carilaporanpoli');
Route::post('cetakkarcistindakan', [ReportingController::class, 'cetakkarcistindakan'])->name('cetakkarcistindakan');
Route::get('cetakkarcistindakann/{kodeunit}/{tanggalvisit}/{tanggalvisit1}', [ReportingController::class, 'cetakkarcistin']);
Route::post('cetaktindakan', [ReportingController::class, 'cetaktindakan'])->name('cetaktindakan');
Route::get('cetaktindakann/{kodeunit}/{tanggalvisit}/{tanggalvisit1}', [ReportingController::class, 'cetaktin']);
Route::post('cetakpendapatan', [ReportingController::class, 'cetakpendapatan'])->name('cetakpendapatan');
Route::get('cetakpendapatann/{kodeunit}/{tanggalvisit}/{tanggalvisit1}', [ReportingController::class, 'cetakpenn']);


Route::group(['middleware' => ['hak_akses:15', 'auth']], function () {

    //tampil data
    Route::get('/reporting', [ReportingController::class, 'index'])->name('reporting');
    Route::get('/rekapdokter', [ReportingController::class, 'rekapdokter'])->name('rekapdokter');
    Route::get('/indexkeuangan', [ReportingController::class, 'indexkeuangan'])->name('indexkeuangan');
    Route::get('caridokterrekap', [ReportingController::class, 'caridokterrekap'])->name('caridokterrekap');
    Route::post('carirekapdokter', [ReportingController::class, 'carirekapdokter'])->name('carirekapdokter');
});

//keuangan

Route::group(['middleware' => ['hak_akses:16', 'auth']], function () {

    //tampil data
    Route::get('/keuangan', [KeuanganController::class, 'index'])->name('keuangan');
    Route::get('/bukukas', [KeuanganController::class, 'bukukas'])->name('bukukas');
    Route::get('/rab', [KeuanganController::class, 'rab'])->name('rab');
});


//petugas GIZI
Route::group(['middleware' => ['hak_akses:17', 'auth']], function () {

    //tampil data
    Route::get('/gizi', [GiziControlller::class, 'index'])->name('gizi');
    Route::get('/asseesmengizi', [GiziControlller::class, 'asseesmengizi'])->name('asseesmengizi');


    Route::get('/gizibilling', [GiziControlller::class, 'gizibilling'])->name('gizibilling');
    Route::get('/monitoringmakan', [GiziControlller::class, 'monitoringmakan'])->name('monitoringmakan');
    Route::get('/riwayatordermakan', [GiziControlller::class, 'riwayatordermakan'])->name('riwayatordermakan');

    // form assesmen gizi
    Route::post('assesgizi', [GiziControlller::class, 'assesgizi'])->name('assesgizi');



    //cari pasien
    Route::post('caripasienranap', [GiziControlller::class, 'caripasienranap'])->name('caripasienranap');
    Route::post('caripasienranapgizi', [GiziControlller::class, 'caripasienranapgizi'])->name('caripasienranapgizi');

    Route::post('cariordermakan', [GiziControlller::class, 'cariordermakan'])->name('cariordermakan');
    Route::post('/detailordergizi', [GiziControlller::class, 'detailordergizi'])->name('detailordergizi');
    Route::post('cariordergizi', [GiziControlller::class, 'cariordergizi'])->name('cariordergizi');



    //simpan data
    Route::post('simpanorderruangan', [GiziControlller::class, 'simpanorderruangan'])->name('simpanorderruangan');
    Route::post('simpanordergizi', [GiziControlller::class, 'simpanordergizi'])->name('simpanordergizi');
    Route::post('prosesorder', [GiziControlller::class, 'prosesorder'])->name('prosesorder');
    Route::post('antarorder', [GiziControlller::class, 'antarorder'])->name('antarorder');
    Route::post('selesaiorder', [GiziControlller::class, 'selesaiorder'])->name('selesaiorder');








    //Retur data



    //print


    //hitung

});
