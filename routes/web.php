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


//Route Antrian
Route::get('/antrian', [AntrianController::class, 'index']);
Route::post('/ambildata', [AntrianController::class, 'ambildata'])->name('ambildata');
Route::post('/ambilantrianbidan', [AntrianController::class, 'ambilantrianbidan'])->name('ambilantrianbidan');
Route::post('/ambilantrianumum', [AntrianController::class, 'ambilantrianumum'])->name('ambilantrianumum');

//route farmasi
Route::group(['middleware' => ['hak_akses:6', 'auth']], function () {

    //Route farmasi
    Route::get('farmasi', [FarmasiController::class, 'index'])->name('farmasi');
    Route::get('kpoo', [FarmasiController::class, 'kpoo'])->name('kpoo');
    Route::post('isiobat', [FarmasiController::class, 'isiobat'])->name('isiobat');
    Route::post('simpanrekon', [FarmasiController::class, 'simpanrekon'])->name('simpanrekon');
    Route::post('riwayatrekon', [FarmasiController::class, 'riwayatrekon'])->name('riwayatrekon');
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

    

    Route::post('rencanaplg', [PerawatController::class, 'rencanaplg'])->name('rencanaplg');
    Route::post('sri', [PerawatController::class, 'sri'])->name('sri');
    Route::post('upload', [PerawatController::class, 'upload'])->name('upload');


    Route::post('hasillabperawat', [PerawatController::class, 'hasillabperawat'])->name('hasillabperawat');
    Route::post('hasilradioperawat', [PerawatController::class, 'hasilradioperawat'])->name('hasilradioperawat');
    Route::post('resumecpptperawat', [PerawatController::class, 'resumecpptperawat'])->name('resumecpptperawat');
    Route::post('caripasienigdperawat', [PerawatController::class, 'caripasienigdperawat'])->name('caripasienigdperawat');
    Route::post('cariruangan', [PerawatController::class, 'cariruangan'])->name('cariruangan');


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
});

//petugas Bank darah
Route::group(['middleware' => ['hak_akses:11', 'auth']], function () {

    //tampil data
    Route::get('/bankdarah', [BankdarahController::class, 'index'])->name('bankdarah');
    Route::post('detailpasienbnd', [BankdarahController::class, 'terpilihpasienbnd'])->name('detailpasienbnd');
    Route::post('/riwayatpasienbankdarah', [BankdarahController::class, 'riwayatpasienbankdarah'])->name('riwayatpasienbankdarah');
    Route::post('/datapasienbankdarah', [BankdarahController::class, 'datapasienbankdarah'])->name('datapasienbankdarah');
    Route::post('/ambildatabankdarah', [BankdarahController::class, 'ambildatabankdarah'])->name('ambildatabankdarah');
    Route::post('/ambilstok', [BankdarahController::class, 'ambilstok'])->name('ambilstok');

    Route::post('caridokterbnd', [BankdarahController::class, 'caridokterbnd'])->name('caridokterbnd');


    //caripasien
    Route::post('caripasienpendaftaranbnd', [BankdarahController::class, 'caripasienpendaftaranbnd'])->name('caripasienpendaftaranbnd');
    Route::post('caritanggalbnd', [BankdarahController::class, 'caritanggalbnd'])->name('caritanggalbnd');

    // print
    Route::post('/printulangbnd', [BankdarahController::class, 'printulangbnd'])->name('printulangbnd');
    Route::get('bndnotaorder/{kode_header}/{idhed}', [BankdarahController::class, 'bndnotaorder']);

    //retur
    Route::post('/returorderbnd', [BankdarahController::class, 'returorderbnd'])->name('returorderbnd');


    // simpan
    Route::post('/simpanstokdarah', [BankdarahController::class, 'simpanstokdarah'])->name('simpanstokdarah');

    Route::post('/simpanorderbnd', [BankdarahController::class, 'simpanorderbnd'])->name('simpanorderbnd');
});


//petugas LAB
Route::group(['middleware' => ['hak_akses:12', 'auth']], function () {

    //tampil data
    Route::get('/laboratorium', [LabController::class, 'index'])->name('laboratorium');
    Route::post('/ambildatalab', [LabController::class, 'ambildatalab'])->name('ambildatalab');
    Route::post('/datapasienradiologi', [LabController::class, 'datapasien'])->name('datapasienradiologi');
    Route::post('pasiendetail', [LabController::class, 'pasienterpilih'])->name('pasiendetail');
    Route::post('detailpasienlab', [LabController::class, 'terpilihpasienlab'])->name('detailpasienlab');
    Route::post('tampilpaketlab', [LabController::class, 'tampilpaketlab'])->name('tampilpaketlab');
    Route::post('pasienerm', [LabController::class, 'pasienerm'])->name('pasienerm');
    Route::post('/riwayatlab', [LabController::class, 'riwayatlab'])->name('riwayatlab');
    Route::post('/detailpaketlab', [LabController::class, 'detailpaketlab'])->name('detailpaketlab');

    //cari pasien
    Route::post('caripasienorder', [LabController::class, 'caripasienorder'])->name('caripasienorder');
    Route::post('caritanggallab', [LabController::class, 'caritanggallab'])->name('caritanggallab');
    Route::post('caripasienpendaftaranlab', [LabController::class, 'caripasienpendaftaranlab'])->name('caripasienpendaftaranlab');
    Route::post('caridokterlab', [LabController::class, 'caridokter'])->name('caridokterlab');

    //simpan data
    Route::post('/simpanorderlab', [LabController::class, 'simpanorderlab'])->name('simpanorderlab');



    //Retur data
    Route::post('/batallaboratorium', [LabController::class, 'batallaboratorium'])->name('batallaboratorium');
    Route::post('/returorderlabo', [LabController::class, 'returorderlabo'])->name('returorderlabo');


    //print
    Route::post('/printulanglabo', [LabController::class, 'printulanglabo'])->name('printulanglabo');
    Route::get('labnotaorder/{kode_header}/{idhed}', [LabController::class, 'labnotaorder']);
    Route::post('hitungtotal', [LabController::class, 'hitungtotal'])->name('hitungtotal');
    //hitung
    Route::post('/hitungkunjungan', [LabController::class, 'hitungkunjungan'])->name('hitungkunjungan');
    Route::post('/hitungorder', [LabController::class, 'hitungorder'])->name('hitungorder');
    Route::post('/hitungorderpoli', [LabController::class, 'hitungorderpoli'])->name('hitungorderpoli');
});

//petugas Forensik
Route::group(['middleware' => ['hak_akses:13', 'auth']], function () {

    //tampil data
    Route::get('/forensik', [ForensikController::class, 'index'])->name('forensik');
    Route::post('detailpasienkjn', [ForensikController::class, 'terpilihpasienkjn'])->name('detailpasienkjn');
    Route::post('/riwayatpasienforensik', [ForensikController::class, 'riwayatpasienforensik'])->name('riwayatpasienforensik');
    Route::post('/suratkematian', [ForensikController::class, 'suratkematian'])->name('suratkematian');

    Route::post('/datapasienforensik', [ForensikController::class, 'datapasienforensik'])->name('datapasienforensik');
    Route::post('/ambildataforensik', [ForensikController::class, 'ambildataforensik'])->name('ambildataforensik');

    Route::post('cetaksuratmati', [ForensikController::class, 'cetaksuratmati'])->name('cetaksuratmati');

    Route::get('cetaksuratmatii/{norm}', [ForensikController::class, 'cetaksuratmatii']);


    //caripasien
    Route::post('caripasienpendaftaranforensik', [ForensikController::class, 'caripasienpendaftaranforensik'])->name('caripasienpendaftaranforensik');
    Route::post('caritanggalforensik', [ForensikController::class, 'caritanggalforensik'])->name('caritanggalforensik');


    //retur
    Route::post('/returorderforensik', [ForensikController::class, 'returorderforensik'])->name('returorderforensik');

    Route::post('/simpanorderkjn', [ForensikController::class, 'simpanorderkjn'])->name('simpanorderkjn');
    Route::post('/simpansuratkematian', [ForensikController::class, 'simpansuratkematian'])->name('simpansuratkematian');
});


//petugas radiologi
Route::group(['middleware' => ['hak_akses:14', 'auth']], function () {

    //tampil data
    Route::get('/penunjang', [LaboratoriumController::class, 'index'])->name('penunjang');
    Route::post('/ambildata', [LaboratoriumController::class, 'ambildata'])->name('ambildata');
    Route::post('/ambildatabarang', [LaboratoriumController::class, 'ambildatabarang'])->name('ambildatabarang');
    Route::post('/datapasien', [LaboratoriumController::class, 'datapasien'])->name('datapasien');
    Route::post('pasiendetail', [LaboratoriumController::class, 'pasienterpilih'])->name('pasiendetail');
    Route::post('detailpasien', [LaboratoriumController::class, 'terpilihpasien'])->name('detailpasien');
    Route::post('tampilpaket', [LaboratoriumController::class, 'tampilpaket'])->name('tampilpaket');
    Route::post('pasienerm', [LaboratoriumController::class, 'pasienerm'])->name('pasienerm');
    Route::post('/riwayatpasien', [LaboratoriumController::class, 'riwayatpasien'])->name('riwayatpasien');
    Route::post('/detailbarang', [LaboratoriumController::class, 'detailbarang'])->name('detailbarang');
    Route::post('/detailpaket', [LaboratoriumController::class, 'detailpaket'])->name('detailpaket');
    Route::post('lihatpasienex', [LaboratoriumController::class, 'lihatpasienex'])->name('lihatpasienex');

    //cari pasien
    Route::post('caripasienorder', [LaboratoriumController::class, 'caripasienorder'])->name('caripasienorder');
    Route::post('caritanggal', [LaboratoriumController::class, 'caritanggal'])->name('caritanggal');
    Route::post('caripasienpendaftaran', [LaboratoriumController::class, 'caripasienpendaftaran'])->name('caripasienpendaftaran');
    Route::post('caridokter', [LaboratoriumController::class, 'caridokter'])->name('caridokter');

    //simpan data
    Route::post('/simpanorderpasien', [LaboratoriumController::class, 'simpanorder'])->name('simpanorderpasien');
    Route::post('simpanorder', [LaboratoriumController::class, 'simpanorderdetail'])->name('simpanorder');
    Route::post('/simpanorderpaket', [LaboratoriumController::class, 'simpanorderpaket'])->name('simpanorderpaket');
    Route::post('/simpanorderpoli', [LaboratoriumController::class, 'simpanorderpoli'])->name('simpanorderpoli');
    Route::post('/simpanradiologi', [LaboratoriumController::class, 'simpanradiologi'])->name('simpanradiologi');
    Route::post('/simpanorderradiologi', [LaboratoriumController::class, 'simpanorderradiologi'])->name('simpanorderradiologi');
    Route::post('/simpanorderbarang', [LaboratoriumController::class, 'simpanorderbarang'])->name('simpanorderbarang');
    Route::post('/simpanorderloundry', [LaboratoriumController::class, 'simpanorderloundry'])->name('simpanorderloundry');
    // Route::post('/simpanorderkjn', [LaboratoriumController::class, 'simpanorderkjn'])->name('simpanorderkjn');



    //Retur data
    Route::post('/batalradiologi', [LaboratoriumController::class, 'batalradiologi'])->name('batalradiologi');
    Route::post('/batalorder', [LaboratoriumController::class, 'batalorder'])->name('batalorder');
    Route::post('/returorder', [LaboratoriumController::class, 'returorder'])->name('returorder');
    Route::post('/returorderloundry', [LaboratoriumController::class, 'returorderloundry'])->name('returorderloundry');
    Route::post('/returorderrad', [LaboratoriumController::class, 'returorderrad'])->name('returorderrad');
    Route::post('/returbarangrad', [LaboratoriumController::class, 'returbarangrad'])->name('returbarangrad');
    Route::post('/returorderlab', [LaboratoriumController::class, 'returorderlab'])->name('returorderlab');
    Route::post('/returorderkjn', [LaboratoriumController::class, 'returorderkjn'])->name('returorderkjn');


    //print
    Route::get('cetakorder/{kode_header}/{idhed}', [LaboratoriumController::class, 'cetakpdf']);
    Route::get('labnota/{kode_header}/{idhed}', [LaboratoriumController::class, 'labnota']);
    Route::get('etiket/{kode_header}/{idhed}', [LaboratoriumController::class, 'etiket']);
    Route::get('cetakexp/{norm}/{tglentry}', [LaboratoriumController::class, 'cetakexpertise1']);
    Route::post('cetakexpertise', [LaboratoriumController::class, 'cetakexpertise'])->name('cetakexpertise');
    Route::post('/printulang', [LaboratoriumController::class, 'printulang'])->name('printulang');
    Route::post('/printulanglab', [LaboratoriumController::class, 'printulanglab'])->name('printulanglab');

    //hitung
    Route::post('/hitungkunjungan', [LaboratoriumController::class, 'hitungkunjungan'])->name('hitungkunjungan');
    Route::post('/hitungorder', [LaboratoriumController::class, 'hitungorder'])->name('hitungorder');
    Route::post('/hitungorderpoli', [LaboratoriumController::class, 'hitungorderpoli'])->name('hitungorderpoli');
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
