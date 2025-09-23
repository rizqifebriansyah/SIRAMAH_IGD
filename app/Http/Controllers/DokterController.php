<?php

namespace App\Http\Controllers;

use App\Models\di_pasien_diagnosa_frunit;
use App\Models\erm_cppt_dokter;
use App\Models\erm_cppt_dokter_kebidanan;
use App\Models\ts_antrian_igd;
use App\Models\mt_kode_igd_header;
use App\Models\ts_layanan_detail_igd;
use App\Models\ts_layanan_header_igd;
use App\Models\erm_tindakan_kedokteran;
use App\Models\ts_triase;
use Illuminate\Http\Request;
use Fpdf;
use PDF;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use function Laravel\Prompts\select;

class DokterController extends Controller
{
    public function index()
    {
        $user = auth()->user()->nama;

        $menu = 'dokter';
        return view(
            'dokter.index',
            [
                'title' => 'SiRAMAH DOKTER',
                'menu' => $menu,
                'user' => $user
            ]
        );
    }
    public function ambilnotriase()
    {
        $kode_header = $this->createantrianumum('A');
        $now = Carbon::now();

        // $id_detail = $this->createLayanandetail();
        $header = ts_antrian_igd::create([
            'no_antri' => $kode_header,
            'created_at' => $now,
            'tgl' => $now,
            'isNoAntrian' => '1'


        ]);
    }
    public function kpo()
    {
        $user = auth()->user()->nama;
        $unit = auth()->user()->unit;

        $menu = 'kpo';
        return view(
            'dokter.kpo',
            [
                'title' => 'SiRAMAH DOKTER',
                'menu' => $menu,
                'user' => $user,
                'unit' => $unit

            ]
        );
    }
    public function triase()
    {
        $user = auth()->user()->nama;
        $unit = auth()->user()->unit;

        $menu = 'triase';
        $now = Carbon::now()->format('Y-m-d');

        $antrian = DB::connection('mysql2')->select('SELECT no_antri, kode_kunjungan, tgl, no_rm, nama_px, status, status_triase FROM tp_karcis_igd WHERE DATE(tgl) BETWEEN ? AND ?', [$now, $now]);
        $nama = DB::select('SELECT  no_rm, kode_kunjungan FROM ts_kunjungan
        WHERE DATE(tgl_masuk) BETWEEN ? AND ?', [$now, $now]);
        return view(
            'dokter.triase',
            [
                'title' => 'TRIASE DOKTER',
                'menu' => $menu,
                'antrian' => $antrian,
                'nama' => $nama,
                'unit' => $unit,
                'user' => $user
            ]
        );
    }

    public function carinotriase(Request $request)
    {
        $tgl = $request->tgl_kunjungan;
        $antrian = DB::select('SELECT no_antri, tgl, no_rm, nama_px, status, status_triase FROM tp_karcis_igd
      WHERE DATE(tgl) BETWEEN ? AND ?', [$tgl, $tgl]);


        return view(
            'dokter.tabletriase',
            [
                'title' => 'TRIASE DOKTER',
                'antrian' => $antrian
            ]
        );
    }

    public function caripasienigd(Request $request)
    {
        $tgl = $request->tglkunjungan;
        $unit = auth()->user()->unit;

        // $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','1002','$tgl')");
        $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','$unit','$tgl')");


        return view(
            'dokter.tablepasienigd',
            [
                'title' => 'ERM DOKTER',
                'pasienigd' => $pasienigd,

            ]
        );
    }
    public function asses()
    {
        $menu = 'asses';
        $user = auth()->user()->nama;
        $unit = auth()->user()->unit;



        $now = Carbon::now()->format('Y-m-d');
        // $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','$unit','$now')");
        $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','$unit','$now')");

        return view(
            'dokter.asses',
            [
                'title' => 'ERM DOKTER',
                'menu' => $menu,
                'pasienigd' => $pasienigd,
                'user' => $user,
                'unit' => $unit
            ]
        );
    }
    public function assesmentdokter(Request $request)
    {

        $noantri = $request->noantri;
        $tgl = $request->tgl;

        return view(
            'dokter.assesmentdokterview',
            [
                'title' => 'ERM DOKTER',
                'noantri' => $noantri,
                'tgl' => $tgl

            ]
        );
    }
    public function ermdokter(Request $request)
    {
        $norm = $request->norm;
        $namapx = $request->namapx;
        $jk = $request->jk;
        $kj = $request->kj;
        $kp = $request->kp;
        $kp = $request->kp;
        $ku = $request->ku;
        $counter = $request->counter;

        $kelas = $request->kelas;
        $tglmasuk = $request->tglmasuk;
        $unit = auth()->user()->unit;

        $ttv = DB::connection('mysql2')->select('SELECT tekanan_darah, keadaan_umum, kesadaran, frekuensi_nafas, frekuensi_nadi, suhu, berat_badan, umur, GCS, spo2 FROM erm_cppt_perawat WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        $ttvb = DB::connection('mysql2')->select('SELECT tekanan_darah, keadaan_umum, kesadaran, frekuensi_nafas, frekuensi_nadi, suhu, berat_badan, umur, GCS, SPO2 FROM erm_cppt_kebidanan WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        $ttvc = DB::connection('mysql2')->select('SELECT tekanan_darah, frekuensi_nafas, frekuensi_nadi, suhu, berat_badan, umur, keadaan_umum, kesadaran, gcs, spo2 FROM erm_cppt_kebidanan_bayi WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);

        $cek = DB::select('SELECT
      fc_nama_unit1(kode_unit) AS nama_unit
      ,a.*

      FROM assesmen_dokters a
      WHERE  id_pasien = ?', [$norm]);
        $cek1 = DB::select('SELECT a.no_rm, b.kode_layanan_header FROM ts_kunjungan a INNER JOIN ts_layanan_header b
        ON b.kode_kunjungan = a.kode_kunjungan
        WHERE b.kode_unit = ? AND  a.no_rm = ? ', ['3002', $norm]);
        $cekr = DB::select('select *,date(tgl_baca) as tanggalnya,fc_acc_number_ris(id_detail) as acc_number from ts_hasil_expertisi where no_rm = ?', [$norm]);
        $cekpa = DB::select('SELECT
        kode_header
        , id_header
        , id_detail
        , unit_asal
        , no_rm
        , kode_kunjungan
        , fc_nama_px(no_rm) AS nama_px
        , hasil
        , fc_NAMA_PARAMEDIS1(kode_dokter) AS nama_dokter
        , tipe
        , diagnostik_klinik
        , diagnostik_pasca_bedah
        , tgl_baca
         FROM ts_hasil_expertisi_pa WHERE no_rm = ?', [$norm]);

        //    if (count($cek1) == 0) {
        //        echo "<h4 class='text-danger'> Tidak Ada Hasil Laboratorium ...</h5>";
        //    } else {
        //     //    return view('dokter.hasillab', compact(
        //     //        ['cek']
        //     //    ));
        //    }

        return view(
            'dokter.ermdokterview',
            [
                'title' => 'ERM DOKTER',
                'cek' => $cek,
                'cekpa' => $cekpa,

                'cek1' => $cek1,
                'cekr' => $cekr,
                'norm' => $norm,
                'namapx' => $namapx,
                'jk' => $jk,
                'kj' => $kj,
                'tglmasuk' => $tglmasuk,
                'ttv' => $ttv,
                'ttvb' => $ttvb,
                'ttvc' => $ttvc,

                'kelas' => $kelas,
                'kp' => $kp,
                'ku' => $ku,
                'counter' => $counter,
                'unit' => $unit

            ]
        );
    }
    public function icare(Request $request)
    {
        $norm = $request->norm;
        $kp = auth()->user()->kode_paramedis;

        $kpm = DB::select('SELECT kode_dokter_jkn FROM mt_paramedis WHERE kode_paramedis = ?', [$kp]);
        $nobpjs = DB::select('SELECT no_Bpjs FROM mt_pasien WHERE no_rm =?', [$norm]);


        return view(
            'dokter.icare',
            [
                'norm' => $norm,
                'kpm' => $kpm,
                'nobpjs' => $nobpjs,

            ]
        );
    }
    public function riwayatcppt(Request $request)
    {
        $norm = $request->norm;
        $cek = DB::select('SELECT
      fc_nama_unit1(kode_unit) AS nama_unit
      ,a.*

      FROM assesmen_dokters a
      WHERE  id_pasien = ?', [$norm]);
        $cek1 = DB::select('SELECT a.no_rm, b.kode_layanan_header FROM ts_kunjungan a INNER JOIN ts_layanan_header b
        ON b.kode_kunjungan = a.kode_kunjungan
        WHERE b.kode_unit = ? AND  a.no_rm = ? ', ['3002', $norm]);
        $cekr = DB::select('select *,date(tgl_baca) as tanggalnya,fc_acc_number_ris(id_detail) as acc_number from ts_hasil_expertisi where no_rm = ?', [$norm]);
        $cekpa = DB::select('SELECT
        kode_header
        , id_header
        , id_detail
        , unit_asal
        , no_rm
        , kode_kunjungan
        , fc_nama_px(no_rm) AS nama_px
        , hasil
        , fc_NAMA_PARAMEDIS1(kode_dokter) AS nama_dokter
        , tipe
        , diagnostik_klinik
        , diagnostik_pasca_bedah
        , tgl_baca
         FROM ts_hasil_expertisi_pa WHERE no_rm = ?', [$norm]);


        return view(
            'dokter.riwayatpoli',
            [
                'norm' => $norm,
                'cek' => $cek,
                'cekpa' => $cekpa,
                'cek1' => $cek1,
                'cekr' => $cekr,
            ]
        );
    }

    public function triaseanak(Request $request)
    {
        $noantri = $request->antrian;
        $triase = DB::connection('mysql2')->select('SELECT * FROM ts_triase
       WHERE no_antrian = ?', [$noantri]);
        return view(
            'dokter.triaseanak',
            [
                'title' => 'SiRAMAH DOKTER',

                'triase' => $triase

            ]
        );
    }
    public function triasedewasa(Request $request)
    {

        $noantri = $request->antrian;
        $triase = DB::connection('mysql2')->select('SELECT * FROM ts_triase
        WHERE no_antrian = ?', [$noantri]);

        return view(
            'dokter.triasedewasa',
            [
                'title' => 'SiRAMAH DOKTER',
                'triase' => $triase


            ]
        );
    }
    public function triaseanakk(Request $request)
    {
        $norm = $request->norm;

        $triase = DB::connection('mysql2')->select('SELECT * FROM ts_triase
           WHERE no_rm = ?', [$norm]);
        return view(
            'dokter.triaseanakk',
            [
                'triase' => $triase
            ]
        );
    }
    public function triasedewasaa(Request $request)
    {
        $norm = $request->norm;

        $triase = DB::connection('mysql2')->select('SELECT * FROM ts_triase
           WHERE no_rm = ?', [$norm]);
        return view(
            'dokter.triasesdewasaa',
            [
                'triase' => $triase
            ]
        );
    }
    public function penandaangambardokter(Request $request)
    {

        return view(
            'dokter.penandaangambardokter',
            []
        );
    }
    public function pemfistrau(Request $request)
    {

        return view(
            'dokter.pemeriksaanfisiktrauma',
            []
        );
    }
    public function pemfisnontrau(Request $request)
    {

        return view(
            'dokter.pemeriksaanfisiknontrauma',
            []
        );
    }

    public function formdewasaigkdok(Request $request)
    {
        $kj = $request->kj;
        $norm = $request->norm;
        $kp = $request->kp;
        $kelas = $request->kelas;

        $ku = $request->ku;
        $counter = $request->counter;
        $unit = auth()->user()->unit;
        $now = Carbon::now()->format('Y-m-d H:i:s');

        $cek1 = DB::select('select * from ts_layanan_header where kode_kunjungan = ? and kode_unit = ?', [$kj, '3002']);
        $cek = DB::select('select *,date(tgl_baca) as tanggalnya,fc_acc_number_ris(id_detail) as acc_number from ts_hasil_expertisi where kode_kunjungan = ?', [$kj]);
        $cekpa = DB::select('SELECT
        kode_header
        , id_header
        , id_detail
        , unit_asal
        , no_rm
        , kode_kunjungan
        , fc_nama_px(no_rm) AS nama_px
        , hasil
        , fc_NAMA_PARAMEDIS1(kode_dokter) AS nama_dokter
        , tipe
        , diagnostik_klinik
        , diagnostik_pasca_bedah
        , tgl_baca
          FROM ts_hasil_expertisi_pa WHERE kode_kunjungan = ?', [$kj]);
        $riwayatorderrad = DB::connection('mysql2')->select('SELECT
        a.no_rm,
        a.kode_layanan_header,
        a.id,
        b.total_tarif,
        fc_nama_tindakan(LEFT(b.kode_tarif_detail,6)) as nama_tindakan
        FROM
        ts_layanan_header_igd a
        INNER JOIN ts_layanan_detail_igd b ON b.row_id_header = a.id
        WHERE a.kode_unit = ?
        AND a.kode_kunjungan = ?
        AND a.status_order ="1"', ['3003', $request->kj]);
        $riwayatorderlab = DB::connection('mysql2')->select('SELECT
         a.no_rm,
         a.kode_layanan_header,
         a.id,
         b.total_tarif,
         fc_nama_tindakan(LEFT(b.kode_tarif_detail,6)) as nama_tindakan
         FROM
         ts_layanan_header_igd a
         INNER JOIN ts_layanan_detail_igd b ON b.row_id_header = a.id
         WHERE a.kode_unit = ?
         AND a.kode_kunjungan = ?
         AND a.status_order ="1"', ['3002', $request->kj]);
        $layananlab = DB::select('SELECT b.kode_tarif_detail AS kode, a.nama_tarif AS Tindakan, b.tarif_penunjang AS tarif 
FROM mt_tarif_header a 
INNER JOIN mt_tarif_detail b ON b.kode_tarif_header = a.kode_tarif_header 
WHERE a.USER_INPUT_ID ="1" 
AND  a.kelompok_tarif_id IN (13) AND b.tarif_penunjang <> 0 
AND b.act = 1 
AND b.kelas_tarif = 1');
        $layanan = DB::select('SELECT b.kode_tarif_detail AS kode, a.nama_tarif AS Tindakan, b.tarif_penunjang AS tarif 
            FROM mt_tarif_header a 
            INNER JOIN mt_tarif_detail b ON b.kode_tarif_header = a.kode_tarif_header 
            WHERE a.USER_INPUT_ID ="1" 
            AND  a.kelompok_tarif_id IN (19) AND b.tarif_penunjang <> 0 
            AND b.act = 1 
            AND b.kelas_tarif = 1');
        $diagnosa = DB::select('SELECT * FROM mt_jenis_diagnosa_medis');
        $alasanplg  = DB::select('SELECT * FROM mt_alasan_pulang');
        $ttb = DB::connection('mysql2')->select('SELECT tekanan_darah, frekuensi_nafas, keadaan_umum, kesadaran, frekuensi_nadi, suhu, berat_badan, GCS, SPO2, umur FROM erm_cppt_kebidanan WHERE kode_kunjungan = ?', [$kj]);
        $assesdok = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_dokter_kebidanan WHERE  kode_kunjungan = ? AND status IN (1,2)', [$kj]);
        $dpjp = DB::connection('mysql2')->select('SELECT 
        a.kode_paramedis,
        a.nama_paramedis
        FROM mt_paramedis a
        WHERE a.spesialis LIKE "%spesialis%"
        AND a.act = 1');
        $riwayattindakandpjp = DB::connection('mysql2')->select('SELECT fc_NAMA_PARAMEDIS1(a.kode_paramedis) AS nama_dpjp,a.kode_paramedis,a.tindakan_kedokteran FROM erm_tindakan_kedokteran a WHERE kode_kunjungan = ?', [$kj]);

        return view(
            'dokter.formdewasadokigk',
            [
                'title' => 'SiRAMAH DOKTER',
                'layananlab' => $layananlab,
                'layanan' => $layanan,
                'diagnosa' => $diagnosa,
                'alasanpulang' => $alasanplg,
                'ttb' => $ttb,
                'assesdok' => $assesdok,
                'kelas' => $kelas,
                'kp' => $kp,
                'ku' => $ku,
                'unit' => $unit,
                'counter' => $counter,
                'cek1' => $cek1,
                'cek' => $cek,
                'cekpa' => $cekpa,
                'dpjp' => $dpjp,
                'riwayattindakandpjp' => $riwayattindakandpjp,
                'riwayatorderrad' => $riwayatorderrad,
                'riwayatorderlab' => $riwayatorderlab,
                'now' => $now

            ]
        );
    }
    public function rekonobat(Request $request)
    {
        $kj = $request->kj;
        $norm = $request->norm;
        $kelas = $request->kelas;
        $kp = $request->kp;
        $ku = $request->ku;
        $counter = $request->counter;
        $unit = auth()->user()->unit;

        $riwayatobat = DB::connection('mysql2')->select('SELECT * FROM rekonsiliasi_obat
        WHERE kode_kunjungan = ?', [$kj]);
        return view(
            'dokter.rekonobatview',
            [
                'title' => 'SiRAMAH DOKTER',
                'kelas' => $kelas,
                'kp' => $kp,
                'ku' => $ku,
                'unit' => $unit,
                'counter' => $counter,
                'riwayatobat' => $riwayatobat,

            ]
        );
    }
    public function formbayikigkdok(Request $request)
    {
        $kj = $request->kj;
        $norm = $request->norm;
        $kelas = $request->kelas;
        $kp = $request->kp;
        $ku = $request->ku;
        $counter = $request->counter;
        $unit = auth()->user()->unit;
        $now = Carbon::now()->format('Y-m-d H:i:s');


        $cek1 = DB::select('select * from ts_layanan_header where kode_kunjungan = ? and kode_unit = ?', [$kj, '3002']);
        $cek = DB::select('select *,date(tgl_baca) as tanggalnya,fc_acc_number_ris(id_detail) as acc_number from ts_hasil_expertisi where kode_kunjungan = ?', [$kj]);
        $cekpa = DB::select('SELECT
        kode_header
        , id_header
        , id_detail
        , unit_asal
        , no_rm
        , kode_kunjungan
        , fc_nama_px(no_rm) AS nama_px
        , hasil
        , fc_NAMA_PARAMEDIS1(kode_dokter) AS nama_dokter
        , tipe
        , diagnostik_klinik
        , diagnostik_pasca_bedah
        , tgl_baca
          FROM ts_hasil_expertisi_pa WHERE kode_kunjungan = ?', [$kj]);
        $riwayatorderrad = DB::connection('mysql2')->select('SELECT
        a.no_rm,
        a.kode_layanan_header,
        a.id,
        b.total_tarif,
        fc_nama_tindakan(LEFT(b.kode_tarif_detail,6)) as nama_tindakan
        FROM
        ts_layanan_header_igd a
        INNER JOIN ts_layanan_detail_igd b ON b.row_id_header = a.id
        WHERE a.kode_unit = ?
        AND a.kode_kunjungan = ?
        AND a.status_order ="1"', ['3003', $request->kj]);
        $riwayatorderlab = DB::connection('mysql2')->select('SELECT
         a.no_rm,
         a.kode_layanan_header,
         a.id,
         b.total_tarif,
         fc_nama_tindakan(LEFT(b.kode_tarif_detail,6)) as nama_tindakan
         FROM
         ts_layanan_header_igd a
         INNER JOIN ts_layanan_detail_igd b ON b.row_id_header = a.id
         WHERE a.kode_unit = ?
         AND a.kode_kunjungan = ?
         AND a.status_order ="1"', ['3002', $request->kj]);
        $layananlab = DB::select('SELECT b.kode_tarif_detail AS kode, a.nama_tarif AS Tindakan, b.tarif_penunjang AS tarif 
FROM mt_tarif_header a 
INNER JOIN mt_tarif_detail b ON b.kode_tarif_header = a.kode_tarif_header 
WHERE a.USER_INPUT_ID ="1" 
AND  a.kelompok_tarif_id IN (13) AND b.tarif_penunjang <> 0 
AND b.act = 1 
AND b.kelas_tarif = 1');
        $layanan = DB::select('SELECT b.kode_tarif_detail AS kode, a.nama_tarif AS Tindakan, b.tarif_penunjang AS tarif 
        FROM mt_tarif_header a 
        INNER JOIN mt_tarif_detail b ON b.kode_tarif_header = a.kode_tarif_header 
        WHERE a.USER_INPUT_ID ="1" 
        AND  a.kelompok_tarif_id IN (19) AND b.tarif_penunjang <> 0 
        AND b.act = 1 
        AND b.kelas_tarif = 1');
        $diagnosa = DB::select('SELECT * FROM mt_jenis_diagnosa_medis');
        $alasanplg  = DB::select('SELECT * FROM mt_alasan_pulang');
        $ttv = DB::connection('mysql2')->select('SELECT tekanan_darah, frekuensi_nafas, keadaan_umum, kesadaran, frekuensi_nadi, suhu, GCS, SPO2, berat_badan, umuR FROM erm_cppt_kebidanan_bayi WHERE  kode_kunjungan = ?', [$kj]);
        $assesdok = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_dokter_kebidanan WHERE  kode_kunjungan = ? AND status IN (1,2)', [$kj]);
        $dpjp = DB::connection('mysql2')->select('SELECT 
        a.kode_paramedis,
        a.nama_paramedis
        FROM mt_paramedis a
        WHERE a.spesialis LIKE "%spesialis%"
        AND a.act = 1');
        $riwayattindakandpjp = DB::connection('mysql2')->select('SELECT fc_NAMA_PARAMEDIS1(a.kode_paramedis) AS nama_dpjp,a.kode_paramedis,a.tindakan_kedokteran FROM erm_tindakan_kedokteran a WHERE kode_kunjungan = ?', [$kj]);

        return view(
            'dokter.formbayikdokigk',
            [
                'title' => 'SiRAMAH DOKTER',
                'layananlab' => $layananlab,
                'layanan' => $layanan,
                'diagnosa' => $diagnosa,
                'alasanpulang' => $alasanplg,
                'riwayattindakandpjp' => $riwayattindakandpjp,

                'ttv' => $ttv,
                'assesdok' => $assesdok,
                'kelas' => $kelas,
                'kp' => $kp,
                'ku' => $ku,
                'unit' => $unit,
                'dpjp' => $dpjp,


                'counter' => $counter,

                'cek1' => $cek1,
                'cek' => $cek,
                'cekpa' => $cekpa,
                'riwayatorderrad' => $riwayatorderrad,
                'riwayatorderlab' => $riwayatorderlab,
                'now' => $now


            ]
        );
    }
    public function formermdokter(Request $request)
    {
        $kj = $request->kj;
        $norm = $request->norm;
        $kelas = $request->kelas;
        $kp = $request->kp;
        $ku = $request->ku;
        $counter = $request->counter;
        $unit = auth()->user()->unit;
        $nama = auth()->user()->nama;
        $kgp = auth()->user()->kode_paramedis;



        $now = Carbon::now()->format('Y-m-d H:i:s');
        $time = Carbon::now()->format('H:i:s');

        $riwayatobat = DB::select('SELECT
        a.kode_layanan_header,
        a.id,
        a.kode_kunjungan,
        b.total_tarif,
        b.kode_barang,
        b.aturan_pakai,
        b.jumlah_layanan,
        c.nama_barang
         FROM
         ts_layanan_header a
         INNER JOIN ts_layanan_detail b ON b.row_id_header = a.id
         INNER JOIN mt_barang c ON c.kode_barang = b.kode_barang
         WHERE a.kode_layanan_header LIKE "%DP%"
         AND b.kode_tarif_detail NOT LIKE "%tx%"
         AND a.kode_kunjungan = ?', [$request->kj]);
        $riwayatrekonobat = DB::connection('mysql2')->select('SELECT * FROM rekonsiliasi_obat
        WHERE kode_kunjungan = ?', [$kj]);
        $cek1 = DB::select('select * from ts_layanan_header where kode_kunjungan = ? and kode_unit = ?', [$kj, '3002']);
        $cek = DB::select('select *,date(tgl_baca) as tanggalnya,fc_acc_number_ris(id_detail) as acc_number from ts_hasil_expertisi where kode_kunjungan = ?', [$kj]);
        $cekpa = DB::select('SELECT
        kode_header
        , id_header
        , id_detail
        , unit_asal
        , no_rm
        , kode_kunjungan
        , fc_nama_px(no_rm) AS nama_px
        , hasil
        , fc_NAMA_PARAMEDIS1(kode_dokter) AS nama_dokter
        , tipe
        , diagnostik_klinik
        , diagnostik_pasca_bedah
        , tgl_baca
          FROM ts_hasil_expertisi_pa WHERE kode_kunjungan = ?', [$kj]);
        $riwayatorderrad = DB::connection('mysql2')->select('SELECT
        a.no_rm,
        a.kode_layanan_header,
        b.id_layanan_detail,
        b.id as iddetail,
        a.id,
        b.total_tarif,
        fc_nama_tindakan(LEFT(b.kode_tarif_detail,6)) as nama_tindakan
        FROM
        ts_layanan_header_igd a
        INNER JOIN ts_layanan_detail_igd b ON b.row_id_header = a.id
        WHERE a.kode_unit = ?
        AND a.kode_kunjungan = ?
        AND a.status_order ="1"
        AND b.satus_order = "1"
        ', ['3003', $request->kj]);
        $riwayatorderlab = DB::connection('mysql2')->select('SELECT
         a.no_rm,
         a.kode_layanan_header,
         b.id_layanan_detail,
         b.id as iddetail,
         a.id,
         b.total_tarif,
         fc_nama_tindakan(LEFT(b.kode_tarif_detail,6)) as nama_tindakan
         FROM
         ts_layanan_header_igd a
         INNER JOIN ts_layanan_detail_igd b ON b.row_id_header = a.id
         WHERE a.kode_unit = ?
         AND a.kode_kunjungan = ?
         AND a.status_order ="1"
         AND b.satus_order = "1"
         ', ['3002', $request->kj]);
        //  AND b.satus_order = "1"
        // $layananlab = DB::select("CALL SP_PANGGIL_TARIF_LAB('$kelas','')");
        $layananlab = DB::select("CALL SP_PANGGIL_TARIF_LAB('1','')");
        // $layanan = DB::select("CALL SP_CARI_TARIF_PELAYANAN_RAD('$ku','','$kelas')");

        $layanan = DB::select("CALL SP_CARI_TARIF_PELAYANAN_RAD('1','','1')");
        $diagnosa = DB::select('SELECT * FROM mt_jenis_diagnosa_medis');
        $alasanplg  = DB::select('SELECT * FROM mt_alasan_pulang');
        $ttv = DB::connection('mysql2')->select('SELECT tekanan_darah, frekuensi_nafas, keadaan_umum, kesadaran, frekuensi_nadi, suhu, berat_badan, umur, GCS, SPO2 FROM erm_cppt_perawat WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        $assesdok = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_dokter WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        // $tindakan = DB::connection('mysql2')->select('SELECT * FROM erm_tindakan_kedokteran WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        $assesper = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_perawat
          WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);


        $triase = DB::connection('mysql2')->select('SELECT * FROM ts_triase
           WHERE no_rm = ? AND kode_kunjungan = ? AND STATUS IN (1,2) ', [$norm, $kj]);
        $dpjp = DB::connection('mysql2')->select('SELECT 
                    a.kode_paramedis,
                    a.nama_paramedis
                    FROM mt_paramedis a
                    WHERE a.spesialis LIKE "%spesialis%"
                    AND a.act = 1');
        $riwayattindakandpjp = DB::connection('mysql2')->select('SELECT id,fc_NAMA_PARAMEDIS1(a.kode_paramedis) AS nama_dpjp,a.kode_paramedis,a.tindakan_kedokteran FROM erm_tindakan_kedokteran a WHERE kode_kunjungan = ? AND status = 1', [$kj]);
        // dd($riwayattindakandpjp);
        $tindakanigd = DB::select("CALL SP_PANGGIL_TARIF_TINDAKAN_RS_2024_IGD('1','','')");
        $riwayatordergp = DB::connection('mysql2')->select('SELECT
        a.no_rm,
        a.kode_layanan_header,
        b.id_layanan_detail,
        b.id as iddetail,
        a.id,
        fc_NAMA_PARAMEDIS1(b.kode_dokter1) AS nama_dokter,
        b.total_tarif,
        fc_nama_tindakan(LEFT(b.kode_tarif_detail,6)) as nama_tindakan
        FROM
        ts_layanan_header_igd a
        INNER JOIN ts_layanan_detail_igd b ON b.row_id_header = a.id
        WHERE a.kode_unit = ?
        AND a.kode_kunjungan = ?
        AND a.status_order ="1"
        AND b.satus_order = "1"', ['1002', $request->kj]);
        return view(
            'dokter.formermdokter',
            [
                'title' => 'SiRAMAH DOKTER',
                'layananlab' => $layananlab,
                'riwayattindakandpjp' => $riwayattindakandpjp,

                'riwayatobat' => $riwayatobat,
                'tindakanigd' => $tindakanigd,

                'riwayatrekonobat' => $riwayatrekonobat,
                'riwayatordergp' => $riwayatordergp,

                'layanan' => $layanan,
                'diagnosa' => $diagnosa,
                'alasanpulang' => $alasanplg,
                'ttv' => $ttv,
                'assesdok' => $assesdok,
                'kelas' => $kelas,
                'kp' => $kp,
                'ku' => $ku,
                'unit' => $unit,
                'kj' => $kj,
                'now' => $now,
                'norm' => $norm,
                'nama' => $nama,
                'kgp' => $kgp,

                'triase' => $triase,
                'time' => $time,
                'assesper' => $assesper,
                'counter' => $counter,
                'cek1' => $cek1,
                'cek' => $cek,
                'cekpa' => $cekpa,
                'riwayatorderrad' => $riwayatorderrad,
                // 'tindakan' => $tindakan,
                'dpjp' => $dpjp,

                'riwayatorderlab' => $riwayatorderlab


            ]
        );
    }

    public function caridiagnosa(Request $request)
    {
        $result = DB::table('mt_jenis_diagnosa_medis')->where('nama_diag', 'LIKE', '%' . $request['term'] . '%')->get();
        if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => $row->nama_diag,
                );
            echo json_encode($arr_result);
        }
    }
    public function caridokterrme(Request $request)
    {
        $namadokter = $request->namadokter;
        $dokter = DB::select("CALL sp_cari_dokter_rajal_nama_ad('$namadokter')");

        return view('dokter.detaildpjp', [
            'dokter' => $dokter
        ]);
    }
    public function resumetriase(Request $request)
    {

        $resume = DB::connection('mysql2')->select('SELECT * FROM ts_triase
      WHERE no_antrian = ?', [$request->antrian]);
        return view(
            'dokter.resumetriase',
            [
                'title' => 'TRIASE DOKTER',
                'resume' => $resume


            ]
        );
    }

    public function resumecpptdokter(Request $request)
    {
        $kj =  $request->kj;
        $norm =  $request->kj;
        $unit = auth()->user()->unit;

        $now = Carbon::now()->format('Y-m-d H:i:s');
        $rencanaplg = DB::connection('mysql2')->select('SELECT * FROM rencana_plg WHERE kode_kunjungan = ?
        ', [$kj]);
        $triase = DB::connection('mysql2')->select('SELECT * FROM ts_triase
           WHERE no_rm = ? AND kode_kunjungan = ? AND STATUS IN (1,2) ', [$request->norm, $request->kj]);
        $hasil = DB::connection('mysql2')->select('SELECT 
         a.tgl_kunjungan,
         a.hasil_ekg,
         a.surat_penolakan,
         a.informasi_tindakan,
         a.transfer_pasien
         FROM erm_cppt_perawat a
         WHERE a.kode_kunjungan = ?', [$kj]);

        $assesdok = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_dokter
        WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        $assesdokbid = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_dokter_kebidanan WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $kj]);
        // dd($assesdokbid);
        $riwayatorderrad = DB::connection('mysql2')->select('SELECT
        a.no_rm,
        a.kode_layanan_header,
        a.id,
        b.total_tarif,
        fc_nama_tindakan(LEFT(b.kode_tarif_detail,6)) as nama_tindakan
        FROM
        ts_layanan_header_igd a
        INNER JOIN ts_layanan_detail_igd b ON b.row_id_header = a.id
        WHERE a.kode_unit = ?
        AND a.kode_kunjungan = ?
        AND a.status_order ="1"', ['3003', $request->kj]);
        $riwayatorderlab = DB::connection('mysql2')->select('SELECT
         a.no_rm,
         a.kode_layanan_header,
         a.id,
         b.total_tarif,
         fc_nama_tindakan(LEFT(b.kode_tarif_detail,6)) as nama_tindakan
         FROM
         ts_layanan_header_igd a
         INNER JOIN ts_layanan_detail_igd b ON b.row_id_header = a.id
         WHERE a.kode_unit = ?
         AND a.kode_kunjungan = ?
         AND a.status_order ="1"', ['3002', $request->kj]);
        $riwayatobat = DB::select('SELECT
        a.kode_layanan_header,
        a.id,
        a.kode_kunjungan,
        b.total_tarif,
        b.kode_barang,
        b.aturan_pakai,
        b.jumlah_layanan,
        c.nama_barang
         FROM
         ts_layanan_header a
         INNER JOIN ts_layanan_detail b ON b.row_id_header = a.id
         INNER JOIN mt_barang c ON c.kode_barang = b.kode_barang
         WHERE a.kode_layanan_header LIKE "%DP%"
         AND b.kode_tarif_detail NOT LIKE "%tx%"
         AND a.kode_kunjungan = ?', [$request->kj]);
        $ttv = DB::connection('mysql2')->select('SELECT tekanan_darah, frekuensi_nafas, keadaan_umum, kesadaran, frekuensi_nadi, suhu, berat_badan, umur FROM erm_cppt_perawat WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        $ttb = DB::connection('mysql2')->select('SELECT tekanan_darah, frekuensi_nafas, keadaan_umum, kesadaran, frekuensi_nadi, suhu, berat_badan, GCS, SPO2, umur FROM erm_cppt_kebidanan WHERE kode_kunjungan = ?', [$kj]);
        $riwayatrekonobat = DB::connection('mysql2')->select('SELECT * FROM rekonsiliasi_obat
        WHERE kode_kunjungan = ?', [$kj]);
        $tindakan = DB::connection('mysql2')->select('SELECT * FROM erm_tindakan_kedokteran WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        $tindakan1 = DB::connection('mysql2')->select('SELECT * FROM erm_tindakan_keperawatan WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        // dd($tindakan1); 
        $assesper = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_perawat
          WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        $assesbid = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_kebidanan WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $kj]);
        $assesbidbay = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_kebidanan_bayi WHERE no_rm = ? AND kode_kunjungan = ? AND status IN (1,2)', [$request->norm, $kj]);
        $dpjp = DB::connection('mysql2')->select('SELECT fc_NAMA_PARAMEDIS1(a.kode_paramedis) AS nama_dpjp,a.kode_paramedis,a.tindakan_kedokteran FROM erm_tindakan_kedokteran a WHERE kode_kunjungan = ?', [$kj]);

        return view(
            'dokter.resumecpptdokter',
            [
                'title' => 'ERM DOKTER',
                'assesdok' => $assesdok,
                'assesper' => $assesper,
                'triase' => $triase,
                'now' => $now,
                'ttv' => $ttv,
                'ttb' => $ttb,
                'dpjp' => $dpjp,


                'rencanaplg' => $rencanaplg,
                'tindakan' => $tindakan,
                'tindakan1' => $tindakan1,
                'kj' => $kj,
                'norm' => $norm,
                'unit' => $unit,
                'hasil' => $hasil,
                'riwayatorderrad' => $riwayatorderrad,
                'riwayatobat' => $riwayatobat,
                'riwayatrekonobat' => $riwayatrekonobat,
                'assesbid' => $assesbid,
                'riwayatorderlab' => $riwayatorderlab,
                'assesdokbid' => $assesdokbid,

                'assesbidbay' => $assesbidbay


            ]
        );
    }
    public function hasillabo(Request $request)
    {
        $kodekunjungan = $request->kj;
        $norm = $request->norm;

        $cek = DB::select('SELECT a.no_rm, b.kode_layanan_header FROM ts_kunjungan a INNER JOIN ts_layanan_header b
        ON b.kode_kunjungan = a.kode_kunjungan
        WHERE b.kode_unit = ? AND  a.no_rm = ? ', ['3002', $norm]);

        if (count($cek) == 0) {
            echo "<h4 class='text-danger'> Tidak Ada Hasil Laboratorium ...</h5>";
        } else {
            return view('dokter.hasillab', compact(
                ['cek']
            ));
        }
    }

    public function hasilradio(Request $request)
    {
        $kodekunjungan = $request->kj;
        $norm = $request->norm;

        $cek = DB::select('select *,date(tgl_baca) as tanggalnya,fc_acc_number_ris(id_detail) as acc_number from ts_hasil_expertisi where no_rm = ?', [$norm]);
        if (count($cek) == 0) {
            echo "<h4 class='text-danger'> Tidak Ada Hasil Radiologi ...</h5>";
        } else {
            return view('dokter.hasilradio', compact(
                ['cek']
            ));
        }
    }


    public function simpanpemeriksaantriase(Request $request)
    {
        $a = $request->all();
        $now = Carbon::now();
        $ats = $request->jenisats;
        $antrian = $request->antrian;
        $klasifikasi = $request->klasifikasipasien;
        $user = auth()->user()->nama;
        $kp = auth()->user()->kode_paramedis;
        $triase = ts_triase::create([
            'no_antrian' => $antrian,
            'nama_pasien' => $request->namapasien,
            'sumber_data' => $request->sumberdata,
            'klasifikasi_pasien' => $klasifikasi,
            'kategori_triase' => $request->kategoritriase,
            'pemeriksaan_triase' => $ats,
            'kesadaran1' => $request->kesadaran1,
            'kesadaran2' => $request->kesadaran2,
            'kesadaran3' => $request->kesadaran3,
            'kesadaran4' => $request->kesadaran4,
            'kesadaran5' => $request->kesadaran5,
            'kesadaran6' => $request->kesadaran6,
            'kesadaran7' => $request->kesadaran7,
            'kesadaran8' => $request->kesadaran8,
            'kesadaran9' => $request->kesadaran9,
            'kesadaran10' => $request->kesadaran10,
            'kesadaran11' => $request->kesadaran11,
            'kesadaran12' => $request->kesadaran12,
            'jalan_nafas1' => $request->jalannafas1,
            'jalan_nafas2' => $request->jalannafas2,
            'jalan_nafas3' => $request->jalannafas3,
            'jalan_nafas4' => $request->jalannafas4,
            'jalan_nafas5' => $request->jalannafas5,
            'upaya1' => $request->upaya1,
            'upaya2' => $request->upaya2,
            'upaya3' => $request->upaya3,
            'upaya4' => $request->upaya4,
            'upaya5' => $request->upaya5,
            'upaya6' => $request->upaya6,
            'upaya7' => $request->upaya7,
            'upaya8' => $request->upaya8,
            'sirkulasi1' => $request->sirkulasi1,
            'sirkulasi2' => $request->sirkulasi2,
            'sirkulasi3' => $request->sirkulasi3,
            'sirkulasi4' => $request->sirkulasi4,
            'sirkulasi5' => $request->sirkulasi5,
            'sirkulasi6' => $request->sirkulasi6,
            'sirkulasi7' => $request->sirkulasi7,
            'sirkulasi8' => $request->sirkulasi8,
            'sirkulasi9' => $request->sirkulasi9,
            'sirkulasi10' => $request->sirkulasi10,
            'sirkulasi11' => $request->sirkulasi11,
            'sirkulasi12' => $request->sirkulasi12,
            'sirkulasi13' => $request->sirkulasi13,
            'sirkulasi14' => $request->sirkulasi14,
            'sirkulasi15' => $request->sirkulasi15,
            'sirkulasi16' => $request->sirkulasi16,
            'sirkulasi17' => $request->sirkulasi17,
            'sirkulasi18' => $request->sirkulasi18,
            'sirkulasi19' => $request->sirkulasi19,
            'sirkulasi20' => $request->sirkulasi20,
            'sirkulasi21' => $request->sirkulasi21,
            'sirkulasi22' => $request->sirkulasi22,
            'sirkulasi23' => $request->sirkulasi23,
            'sirkulasi24' => $request->sirkulasi24,
            'sirkulasi25' => $request->sirkulasi25,
            'gejala_respirasi1 ' => $request->gejala1,
            'gejala_respirasi2 ' => $request->gejala2,
            'gejala_respirasi3 ' => $request->gejala3,
            'gejala_respirasi4 ' => $request->gejala4,
            'gejala_respirasi5 ' => $request->gejala5,
            'gejala_respirasi6 ' => $request->gejala6,
            'gejala_respirasi7 ' => $request->gejala7,
            'gejala_respirasi8 ' => $request->gejala8,
            'gejala_respirasi9 ' => $request->gejala9,
            'gejala_respirasi10' => $request->gejala10,
            'gejala_respirasi11' => $request->gejala11,
            'gejala_respirasi12' => $request->gejala12,
            'gejala_respirasi13' => $request->gejala13,
            'gejala_respirasi14' => $request->gejala14,
            'gejala_respirasi15' => $request->gejala15,
            'gejala_respirasi16' => $request->gejala16,
            'gejala_respirasi17' => $request->gejala17,
            'gejala_respirasi18' => $request->gejala18,
            'gejala_respirasi19' => $request->gejala19,
            'gejala_respirasi20' => $request->gejala20,
            'gejala_respirasi21' => $request->gejala21,
            'gejala_respirasi22' => $request->gejala22,
            'gejala_respirasi23' => $request->gejala23,
            'gejala_respirasi24' => $request->gejala24,
            'gejala_respirasi25' => $request->gejala25,
            'gejala_respirasi26' => $request->gejala26,
            'gejala_respirasi27' => $request->gejala27,
            'gejala_respirasi28' => $request->gejala28,
            'gejala_respirasi29' => $request->gejala29,
            'tgl_masuk_triase' => $now,
            'kode_paramedis' => $kp,
            'jenis_triase' => $request->jenistriase,
            'penandaan_gambar' => $request->gambar1,
            'nama_dokter' => $user,
            'tg_entri_triase' => $now

        ]);

        $update = DB::connection('mysql2')->select('UPDATE tp_karcis_igd
      SET status_triase = 1
      WHERE no_antri = ?', [$antrian]);

        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function simpanpemeriksaantriaseanak(Request $request)
    {
        $a = $request->all();
        $now = Carbon::now();
        $ats = $request->jenisats;
        $antrian = $request->antrian;
        $klasifikasi = $request->klasifikasipasien;
        $user = auth()->user()->nama;
        $kp = auth()->user()->kode_paramedis;

        $triase = ts_triase::create([
            'no_antrian' => $antrian,
            'nama_pasien' => $request->namapasien,
            'sumber_data' => $request->sumberdata,
            'primary_survey' => $request->primarysurvey,
            'pemeriksaan_fisik' => $request->pemeriksaanfisik,
            'klasifikasi_pasien' => $klasifikasi,
            'riwayat_pasien' => $request->riwayatpenyakit,
            'kategori_triase' => $request->kategoritriase,
            'pemeriksaan_triase' => $ats,
            'kesadaran1' => $request->kesadaran1,
            'kesadaran2' => $request->kesadaran2,
            'kesadaran3' => $request->kesadaran3,
            'kesadaran4' => $request->kesadaran4,
            'kesadaran5' => $request->kesadaran5,
            'kesadaran6' => $request->kesadaran6,
            'kesadaran7' => $request->kesadaran7,
            'kesadaran8' => $request->kesadaran8,
            'kesadaran9' => $request->kesadaran9,
            'kesadaran10' => $request->kesadaran10,
            'upaya1' => $request->upaya1,
            'upaya2' => $request->upaya2,
            'upaya3' => $request->upaya3,
            'upaya4' => $request->upaya4,
            'upaya5' => $request->upaya5,
            'upaya6' => $request->upaya6,
            'upaya7' => $request->upaya7,
            'upaya8' => $request->upaya8,
            'upaya9' => $request->upaya9,
            'upaya10' => $request->upaya10,
            'upaya11' => $request->upaya11,
            'sirkulasi1' => $request->sirkulasi1,
            'sirkulasi2' => $request->sirkulasi2,
            'sirkulasi3' => $request->sirkulasi3,
            'sirkulasi4' => $request->sirkulasi4,
            'sirkulasi5' => $request->sirkulasi5,
            'sirkulasi6' => $request->sirkulasi6,
            'sirkulasi7' => $request->sirkulasi7,
            'sirkulasi8' => $request->sirkulasi8,
            'sirkulasi9' => $request->sirkulasi9,
            'sirkulasi10' => $request->sirkulasi10,
            'sirkulasi11' => $request->sirkulasi11,
            'gejala_respirasi1 ' => $request->gejala1,
            'gejala_respirasi2 ' => $request->gejala2,
            'gejala_respirasi3 ' => $request->gejala3,
            'gejala_respirasi4 ' => $request->gejala4,
            'gejala_respirasi5 ' => $request->gejala5,
            'gejala_respirasi6 ' => $request->gejala6,
            'gejala_respirasi7 ' => $request->gejala7,
            'gejala_respirasi8 ' => $request->gejala8,
            'gejala_respirasi9 ' => $request->gejala9,
            'gejala_respirasi10' => $request->gejala10,
            'gejala_respirasi11' => $request->gejala11,
            'gejala_respirasi12' => $request->gejala12,
            'gejala_respirasi13' => $request->gejala13,
            'gejala_respirasi14' => $request->gejala14,
            'gejala_respirasi15' => $request->gejala15,
            'kardio1' => $request->kardio1,
            'kardio2' => $request->kardio2,
            'kardio3' => $request->kardio3,
            'kardio4' => $request->kardio4,
            'kardio5' => $request->kardio5,
            'kardio6' => $request->kardio6,
            'kardio7' => $request->kardio7,
            'kardio8' => $request->kardio8,
            'kardio9' => $request->kardio9,
            'kardio10' => $request->kardio10,
            'kardio11' => $request->kardio11,
            'pernafasan1 ' => $request->pernafasan1,
            'pernafasan2 ' => $request->pernafasan2,
            'pernafasan3 ' => $request->pernafasan3,
            'pernafasan4 ' => $request->pernafasan4,
            'pernafasan5 ' => $request->pernafasan5,
            'pernafasan6 ' => $request->pernafasan6,
            'pernafasan7 ' => $request->pernafasan7,
            'pernafasan8 ' => $request->pernafasan8,
            'pernafasan9 ' => $request->pernafasan9,
            'pernafasan10' => $request->pernafasan10,
            'pernafasan11' => $request->pernafasan11,
            'pernafasan12' => $request->pernafasan12,
            'pernafasan13' => $request->pernafasan13,
            'pernafasan14' => $request->pernafasan14,
            'pernafasan15' => $request->pernafasan15,
            'pernafasan16' => $request->pernafasan16,
            'pernafasan17' => $request->pernafasan17,
            'pernafasan18' => $request->pernafasan18,
            'pernafasan19' => $request->pernafasan19,

            'lain1 ' => $request->lain1,
            'lain2 ' => $request->lain2,
            'lain3 ' => $request->lain3,
            'lain4 ' => $request->lain4,
            'lain5 ' => $request->lain5,
            'lain6 ' => $request->lain6,
            'lain7 ' => $request->lain7,
            'lain8 ' => $request->lain8,
            'lain9 ' => $request->lain9,
            'lain10' => $request->lain10,
            'lain11' => $request->lain11,
            'lain12' => $request->lain12,
            'lain13' => $request->lain13,
            'lain14' => $request->lain14,
            'lain15' => $request->lain15,
            'tgl_masuk_triase' => $now,
            'kode_paramedis' => $kp,
            'nama_dokter' => $user,
            'tg_entri_triase' => $now
        ]);

        $update = DB::connection('mysql2')->select('UPDATE tp_karcis_igd
      SET status_triase = 1
      WHERE no_antri = ?', [$antrian]);

        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function simpanassesmen(Request $request)
    {
        $a = $request->all();
        $diagnosa = $request->anamnesa;
        $ku = $request->ku;
        $kj = $request->kj;
        $kop = $request->kp;
        $norm = $request->norm;
        $unit = auth()->user()->unit;
        $name = auth()->user()->nama;


        $dt = Carbon::now()->timezone('Asia/Jakarta');
        $date = $dt->toDateString();
        $time = $dt->toTimeString();
        $now = Carbon::now();
        $sp = 'OPN';
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;
        $kondisi = $request->kopul;
        $jenispasien = $request->alpul;
        $gambar1 = $request->gambar1;
        // dd($gambar1);
        //jenis pasien
        if ($jenispasien == 'Pasien Anak') {
            $jenispasien = '1';
        } elseif ($jenispasien == 'Pasien Bedah') {
            $jenispasien = '2';
        } elseif ($jenispasien == 'Pasien Non Bedah') {
            $jenispasien = '3';
        } elseif ($jenispasien == 'Pasien Psikomatic') {
            $jenispasien = '4';
        } elseif ($jenispasien == 'Pasien Kebidanan') {
            $jenispasien = '5';
        } else {
            $jenispasien = '0';
        }

        //kondisi
        if ($kondisi == 'Dirawat') {
            $kondisi = '1';
        } elseif ($kondisi == 'BATAL DIRAWAT') {
            $kondisi = '3';
        } else {
            $kondisi = '0';
        }
        //triase
        try {

            $triase = ts_triase::create([
                'no_rm' => $norm,
                'kode_kunjungan' => $kj,
                'kategori_triase' => $request->kategoritriase,
                'pemeriksaan_triase' => $request->jenisats,
                'kesadaran_1' => $request->kesadaran_1,
                'kesadaran_2' => $request->kesadaran_2,
                'kesadaran_3' => $request->kesadaran_3,
                'status_psikologis1' => $request->spsi1,
                'status_psikologis2' => $request->spsi2,
                'status_psikologis3' => $request->spsi3,
                'status_psikologis4' => $request->spsi4,
                'status_psikologis5' => $request->spsi5,
                'status_psikologis6' => $request->spsi6,
                'status_psikologis7' => $request->spsi7,
                'status_psikologis8' => $request->spsi8,
                'status_psikologis9' => $request->spsi9,
                'status_psikologis' => $request->spsi,
                'kesadaran1' => $request->kesadaran1,
                'kesadaran2' => $request->kesadaran2,
                'kesadaran3' => $request->kesadaran3,
                'kesadaran4' => $request->kesadaran4,
                'kesadaran5' => $request->kesadaran5,
                'kesadaran6' => $request->kesadaran6,
                'kesadaran7' => $request->kesadaran7,
                'kesadaran8' => $request->kesadaran8,
                'kesadaran9' => $request->kesadaran9,
                'kesadaran10' => $request->kesadaran10,
                'kesadaran11' => $request->kesadaran11,
                'kesadaran12' => $request->kesadaran12,
                'jalan_nafas1' => $request->jalannafas1,
                'jalan_nafas2' => $request->jalannafas2,
                'jalan_nafas3' => $request->jalannafas3,
                'jalan_nafas4' => $request->jalannafas4,
                'jalan_nafas5' => $request->jalannafas5,
                'upaya1' => $request->upaya1,
                'upaya2' => $request->upaya2,
                'upaya3' => $request->upaya3,
                'upaya4' => $request->upaya4,
                'upaya5' => $request->upaya5,
                'upaya6' => $request->upaya6,
                'upaya7' => $request->upaya7,
                'upaya8' => $request->upaya8,
                'sirkulasi1' => $request->sirkulasi1,
                'sirkulasi2' => $request->sirkulasi2,
                'sirkulasi3' => $request->sirkulasi3,
                'sirkulasi4' => $request->sirkulasi4,
                'sirkulasi5' => $request->sirkulasi5,
                'sirkulasi6' => $request->sirkulasi6,
                'sirkulasi7' => $request->sirkulasi7,
                'sirkulasi8' => $request->sirkulasi8,
                'sirkulasi9' => $request->sirkulasi9,
                'sirkulasi10' => $request->sirkulasi10,
                'sirkulasi11' => $request->sirkulasi11,
                'sirkulasi12' => $request->sirkulasi12,
                'sirkulasi13' => $request->sirkulasi13,
                'sirkulasi14' => $request->sirkulasi14,
                'sirkulasi15' => $request->sirkulasi15,
                'sirkulasi16' => $request->sirkulasi16,
                'sirkulasi17' => $request->sirkulasi17,
                'sirkulasi18' => $request->sirkulasi18,
                'sirkulasi19' => $request->sirkulasi19,
                'sirkulasi20' => $request->sirkulasi20,
                'sirkulasi21' => $request->sirkulasi21,
                'sirkulasi22' => $request->sirkulasi22,
                'sirkulasi23' => $request->sirkulasi23,
                'sirkulasi24' => $request->sirkulasi24,
                'sirkulasi25' => $request->sirkulasi25,
                'gejala_respirasi1' => $request->gejala1,
                'gejala_respirasi2' => $request->gejala2,
                'gejala_respirasi3' => $request->gejala3,
                'gejala_respirasi4' => $request->gejala4,
                'gejala_respirasi5' => $request->gejala5,
                'gejala_respirasi6' => $request->gejala6,
                'gejala_respirasi7' => $request->gejala7,
                'gejala_respirasi8' => $request->gejala8,
                'gejala_respirasi9' => $request->gejala9,
                'gejala_respirasi10' => $request->gejala10,
                'gejala_respirasi11' => $request->gejala11,
                'gejala_respirasi12' => $request->gejala12,
                'gejala_respirasi13' => $request->gejala13,
                'gejala_respirasi14' => $request->gejala14,
                'gejala_respirasi15' => $request->gejala15,
                'gejala_respirasi16' => $request->gejala16,
                'gejala_respirasi17' => $request->gejala17,
                'gejala_respirasi18' => $request->gejala18,
                'gejala_respirasi19' => $request->gejala19,
                'gejala_respirasi20' => $request->gejala20,
                'gejala_respirasi21' => $request->gejala21,
                'gejala_respirasi22' => $request->gejala22,
                'gejala_respirasi23' => $request->gejala23,
                'gejala_respirasi24' => $request->gejala24,
                'gejala_respirasi25' => $request->gejala25,
                'gejala_respirasi26' => $request->gejala26,
                'gejala_respirasi27' => $request->gejala27,
                'gejala_respirasi28' => $request->gejala28,
                'gejala_respirasi29' => $request->gejala29,
                'tgl_entri_triase' => $now,
                'kode_paramedis' => $kp,
                'jenis_triase' => $request->jenistriase,
                'penandaan_gambar' => $request->gambar1,
                'nama_dokter' => $name,
                'status' => 1,

            ]);

            //     $update = DB::connection('mysql2')->select('UPDATE tp_karcis_igd
            //   SET status_triase = 1
            //   WHERE no_antri = ?', [$antrian]);
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }

        //assesmen
        try {

            $assesmen = erm_cppt_dokter::create([
                'id_cppt_dokter' => $user,
                'tgl_kunjungan' => $request->tglmasuk,
                'tgl_input' => $now,
                'kode_unit' => $unit,
                'kode_kunjungan' => $request->kj,
                'no_rm' => $request->norm,
                'sumber_data' => $request->sumberdata,
                'macam_kasus' => $request->macamkasus,
                'keluhan_utama' => $request->subject,
                'trauma' => $request->trauma,
                'anamnesa' => $request->anamnesa,
                'tata_laksana' => $request->talaksana,
                'tata_laksana_dpjp' => $request->talaksanadpjp,
                // 'kode_dpjp' => $request->kodedpjp,
                // 'nama_dpjp' => $request->namadpjp,
                'riwayat_penyakit' => $request->riwayatpenyakit,
                'tiga_pertama' => $request->tigap,
                'tiga_kedua' => $request->tigak,
                'diagnosa_kerja' => $request->diagnosa,
                'cara_pulang' => $request->alpul . ' ' . $request->alpul1,
                'keadaan_pulang' => $request->kopul . ' ' . $request->kopul1,
                'primary_survey' => $request->primary,
                'secondary_survey' => $request->secondary,
                'kode_paramedis' => $kp,
                'nama_paramedis' => $name,
                'is_ranap' => $kondisi,
                'status' => '1'

            ]);
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        //laboratorium
        try {
            $datalab = json_decode($_POST['datalab'], true);
            if ($datalab == null) {
            } else {
                foreach ($datalab as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSet[$index] = $value;
                    if ($index == 'cyto') {
                        $arrayindexlab[] = $dataSet;
                    }
                }
                $sum = 0;
                foreach ($arrayindexlab as $arr) {
                    $discount = $arr['disc'];
                    $cyto = $arr['cyto'];
                    $trf = array($arr['tarif']);
                    $tarif =
                        $sum += array_sum($trf);
                    if ($cyto == 1) {
                        if ($discount == $discount) {
                            $a = $tarif + ($tarif * (50 / 100));

                            $gt = $a - ($a * $discount / 100);
                        } else {
                            $gt = $tarif + ($tarif * (50 / 100));
                        }
                    } elseif ($discount == $discount) {
                        $gt = $tarif - ($tarif * $discount / 100);
                    } else {
                        $gt = $tarif;
                    }
                }
                $kode_header = $this->createOrderHeader();
                if ($kop == 'P01') {
                    if ($ku == '2') {
                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $request->norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSet['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSet['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'status_order' => 1,
                            'kode_unit' => '3002',
                            'kode_tipe_transaksi' => 2,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexlab as $arr) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $arr['kodelayanan'],
                                'total_tarif' => $arr['tarif'],
                                'jumlah_layanan' => $arr['qty'],
                                'diskon_dokter' => $arr['disc'],
                                'cyto' => $arr['cyto'],
                                'total_layanan' => $arr['tarif'],
                                'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $arr['tarif'],
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    } else {

                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $request->norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSet['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSet['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'status_order' => 1,
                            'kode_unit' => '3002',
                            'kode_tipe_transaksi' => 1,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexlab as $arr) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $arr['kodelayanan'],
                                'total_tarif' => $arr['tarif'],
                                'jumlah_layanan' => $arr['qty'],
                                'diskon_dokter' => $arr['disc'],
                                'cyto' => $arr['cyto'],
                                'total_layanan' => $arr['tarif'],
                                'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $arr['tarif'],
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    }
                } else {
                    $data_layanan_header = [
                        'kode_layanan_header' => $kode_header,
                        'tgl_entry' => $now,
                        'tgl_periksa' => $now,
                        'no_rm' => $request->norm,
                        'kode_kunjungan' => $request->kj,
                        'qty_header' => $dataSet['qty'],
                        'keterangan' => 'PENDING',
                        'unit_pengirim' => $unit,
                        'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                        'dok_kirim' => $kp,
                        'total_layanan' => $gt,
                        'tagihan_pribadi' => $gt,
                        'diskon_global' => $dataSet['disc'],
                        'status_pembayaran' => $sp,
                        'status_layanan' => 2,
                        'status_order' => 1,
                        'kode_unit' => '3002',
                        'kode_tipe_transaksi' => 2,
                        'kode_penjaminx' => $request->kp,
                        'pic' => $user,
                    ];

                    $head = ts_layanan_header_igd::create($data_layanan_header);
                    $id_detail = $this->createLayanandetail();
                    foreach ($arrayindexlab as $arr) {
                        $savedetail = [
                            'id_layanan_detail' => $id_detail,
                            'kode_layanan_header' => $kode_header,
                            'kode_tarif_detail' =>  $arr['kodelayanan'],
                            'total_tarif' => $arr['tarif'],
                            'jumlah_layanan' => $arr['qty'],
                            'diskon_dokter' => $arr['disc'],
                            'cyto' => $arr['cyto'],
                            'total_layanan' => $arr['tarif'],
                            'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                            'status_layanan_detail' => 'OPN',
                            'tgl_layanan_detail' => $now,
                            'tagihan_penjamin' => $arr['tarif'],
                            'tgl_layanan_detail_2' => $now,
                            'row_id_header' => $head['id']
                        ];

                        $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                    }
                }
                $kode_header = $ts_layanan_detail_igd['kode_layanan_header'];
                $idhed = $ts_layanan_detail_igd['row_id_header'];
                $update = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd SET status_order = 2 WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $request->norm]);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        //radiologi
        try {
            $datarad = json_decode($_POST['datarad'], true);

            if ($datarad == null) {
            } else {
                foreach ($datarad as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSetr[$index] = $value;
                    if ($index == 'cyto') {
                        $arrayindexr[] = $dataSetr;
                    }
                }
                $sum = 0;
                foreach ($arrayindexr as $rad) {
                    $discount = $rad['disc'];
                    $cyto = $rad['cyto'];
                    $trf = array($rad['tarif']);
                    $tarif =
                        $sum += array_sum($trf);
                    if ($cyto == 1) {
                        if ($discount == $discount) {
                            $a = $tarif + ($tarif * (50 / 100));

                            $gt = $a - ($a * $discount / 100);
                        } else {
                            $gt = $tarif + ($tarif * (50 / 100));
                        }
                    } elseif ($discount == $discount) {
                        $gt = $tarif - ($tarif * $discount / 100);
                    } else {
                        $gt = $tarif;
                    }
                }
                $kode_header = $this->createOrderHeaderrad();

                if ($kop == 'P01') {
                    if ($ku == '2') {
                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSetr['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSetr['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'kode_unit' => '3003',
                            'kode_tipe_transaksi' => 2,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexr as $rad) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $rad['kodelayanan'],
                                'total_tarif' => $rad['tarif'],
                                'jumlah_layanan' => $rad['qty'],
                                'diskon_dokter' => $rad['disc'],
                                'cyto' => $rad['cyto'],
                                'total_layanan' => $rad['tarif'],
                                'grantotal_layanan' => $rad['tarif'] * $rad['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $rad['tarif'],
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    } else {

                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSetr['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSetr['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'kode_unit' => '3003',
                            'kode_tipe_transaksi' => 1,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexr as $rad) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $rad['kodelayanan'],
                                'total_tarif' => $rad['tarif'],
                                'jumlah_layanan' => $rad['qty'],
                                'diskon_dokter' => $rad['disc'],
                                'cyto' => $rad['cyto'],
                                'total_layanan' => $rad['tarif'],
                                'grantotal_layanan' => $rad['tarif'] * $rad['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $rad['tarif'],
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    }
                } else {
                    $data_layanan_header = [
                        'kode_layanan_header' => $kode_header,
                        'tgl_entry' => $now,
                        'tgl_periksa' => $now,
                        'no_rm' => $norm,
                        'kode_kunjungan' => $request->kj,
                        'qty_header' => $dataSetr['qty'],
                        'keterangan' => 'PENDING',
                        'unit_pengirim' => $unit,
                        'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                        'dok_kirim' => $kp,
                        'total_layanan' => $gt,
                        'tagihan_pribadi' => $gt,
                        'diskon_global' => $dataSetr['disc'],
                        'status_pembayaran' => $sp,
                        'status_layanan' => 2,
                        'kode_unit' => '3003',
                        'kode_tipe_transaksi' => 2,
                        'kode_penjaminx' => $request->kp,
                        'pic' => $user,
                    ];

                    $head = ts_layanan_header_igd::create($data_layanan_header);
                    $id_detail = $this->createLayanandetail();
                    foreach ($arrayindexr as $rad) {
                        $savedetail = [
                            'id_layanan_detail' => $id_detail,
                            'kode_layanan_header' => $kode_header,
                            'kode_tarif_detail' =>  $rad['kodelayanan'],
                            'total_tarif' => $rad['tarif'],
                            'jumlah_layanan' => $rad['qty'],
                            'diskon_dokter' => $rad['disc'],
                            'cyto' => $rad['cyto'],
                            'total_layanan' => $rad['tarif'],
                            'grantotal_layanan' => $rad['tarif'] * $rad['qty'],
                            'status_layanan_detail' => 'OPN',
                            'tgl_layanan_detail' => $now,
                            'tagihan_penjamin' => $rad['tarif'],
                            'tgl_layanan_detail_2' => $now,
                            'row_id_header' => $head['id']
                        ];

                        $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                    }
                }
                $kode_header = $ts_layanan_detail_igd['kode_layanan_header'];
                $idhed = $ts_layanan_detail_igd['row_id_header'];
                $update = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd SET status_order = 2
                 WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $request->norm]);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }


        // rekonsiliasi obat
        try {

            $rekobat = json_decode($_POST['rekobat'], true);
            if ($rekobat == null) {
            } else {
                foreach ($rekobat as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSet[$index] = $value;
                    if ($index == 'kodetail') {
                        $obatrekon[] = $dataSet;
                    }
                }
                foreach ($obatrekon as $arr) {
                    $savedetail = $arr['tinjut'];
                    $kodetail = $arr['kodetail'];
                    $rekonsiliasiobat = DB::connection('mysql2')->select('UPDATE rekonsiliasi_obat SET lanjut = ? WHERE kode_detail_obat = ? ', [$savedetail, $kodetail]);
                }
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        //fr diagnosa      
        // try {

        //     $frunit = di_pasien_diagnosa_frunit::create([
        //         'no_rm' => $request->norm,
        //         'kode_unit' => $unit,
        //         'counter' => $request->counter,
        //         'kode_kunjungan' => $request->kj,
        //         'input_date' => $now,
        //         'kode_paramedis' => $kp,
        //         'diag_00' => $request->anamnesa,
        //         'tipe_pasien' => $jenispasien,
        //         'pic' => $user,
        //         'is_ranap' => $kondisi,
        //         'isSynch' => 0,
        //         'created_at' => $now,
        //         'status' => '1'

        //     ]);
        // } catch (\Exception $e) {
        //     $back = [
        //         'kode' => 200,
        //         'message' => $e->getMessage()
        //     ];
        //     echo json_encode($back);
        //     die;
        // }
        // tindakan dpjp
        try {
            $tindakandpjp = json_decode($_POST['tindakandpjp'], true);
            foreach ($tindakandpjp as $nama) {
                $index = $nama['name'];
                $value = $nama['value'];
                $dataSet[$index] = $value;
                if ($index == 'talaksanadpjp') {
                    $tindakan[] = $dataSet;
                }
            }
            // $id_detail = $this->createLayanandetail();
            foreach ($tindakan as $arrr) {
                $savedetail = [
                    // 'kode_detail_obat' => $id_detail,
                    'no_rm' => $norm,
                    'kode_kunjungan' => $kj,
                    'kode_unit' => '1002',
                    'kode_paramedis' => $arrr['kode_dpjp'],
                    'tindakan_kedokteran' => $arrr['talaksanadpjp'],
                    'tgl_input' => $now,
                    'status' => 1

                ];
                $tindakandpjpdetail = erm_tindakan_kedokteran::create($savedetail);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }


        //tindakan GP
        try {
            $tindakangp = json_decode($_POST['tindakangp'], true);


            if ($tindakangp == null) {
            } else {
                foreach ($tindakangp as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataGP[$index] = $value;
                    if ($index == 'kode_dpjp') {
                        $arrayindexgp[] = $dataGP;
                    }
                }
                $sum = 0;
                foreach ($arrayindexgp as $gp) {
                    $discount = 0;
                    $cyto = 0;
                    $trf = array($gp['tarif']);
                    $tarif =
                        $sum += array_sum($trf);
                    if ($cyto == 1) {
                        if ($discount == $discount) {
                            $a = $tarif + ($tarif * (50 / 100));

                            $gt = $a - ($a * $discount / 100);
                        } else {
                            $gt = $tarif + ($tarif * (50 / 100));
                        }
                    } elseif ($discount == $discount) {
                        $gt = $tarif - ($tarif * $discount / 100);
                    } else {
                        $gt = $tarif;
                    }
                }
                $kode_headergp = $this->createOrderHeadergp();
                if ($kop == 'P01') {
                    if ($ku == '2') {
                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_headergp,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $request->norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataGP['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => 0,
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'status_order' => 1,
                            'kode_unit' => '1002',
                            'kode_tipe_transaksi' => 2,
                            'kode_penjaminx' => $request->kp,
                            // 'pic' => $user,
                        ];

                        $head = ts_layanan_header_igd::create($data_layanan_header);

                        $id_detail = $this->createLayanandetailgp();
                        foreach ($arrayindexgp as $gp) {
                            $savedetailgp = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_headergp,
                                'kode_tarif_detail' =>  $gp['kodelayanan'],
                                'total_tarif' => $gp['tarif'],
                                'kode_dokter1' => $gp['kode_dpjp'],

                                'jumlah_layanan' => $gp['qty'],
                                'diskon_dokter' => 0,
                                'cyto' => 0,
                                'total_layanan' => $gp['tarif'],
                                'grantotal_layanan' => $gp['tarif'] * $gp['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];

                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetailgp);
                        }
                    } else {

                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_headergp,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $request->norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataGP['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => 0,
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'status_order' => 1,
                            'kode_unit' => '1002',
                            'kode_tipe_transaksi' => 1,
                            'kode_penjaminx' => $request->kp,
                            // 'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);


                        $id_detail = $this->createLayanandetailgp();
                        foreach ($arrayindexgp as $gp) {
                            $savedetailgp = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_headergp,
                                'kode_tarif_detail' =>  $gp['kodelayanan'],
                                'total_tarif' => $gp['tarif'],
                                'jumlah_layanan' => $gp['qty'],
                                'diskon_dokter' => 0,
                                'kode_dokter1' => $gp['kode_dpjp'],

                                'cyto' => 0,
                                'total_layanan' => $gp['tarif'],
                                'grantotal_layanan' => $gp['tarif'] * $gp['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];

                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetailgp);
                        }
                    }
                } else {
                    $data_layanan_header = [
                        'kode_layanan_header' => $kode_headergp,
                        'tgl_entry' => $now,
                        'tgl_periksa' => $now,
                        'no_rm' => $request->norm,
                        'kode_kunjungan' => $request->kj,
                        'qty_header' => $dataGP['qty'],
                        'keterangan' => 'PENDING',
                        'unit_pengirim' => $unit,
                        'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                        'dok_kirim' => $kp,
                        'total_layanan' => $gt,
                        'tagihan_pribadi' => $gt,
                        'diskon_global' => 0,
                        'status_pembayaran' => $sp,
                        'status_layanan' => 2,
                        'status_order' => 1,
                        'kode_unit' => '1002',
                        'kode_tipe_transaksi' => 2,
                        'kode_penjaminx' => $request->kp,
                        // 'pic' => $user,
                    ];

                    $head = ts_layanan_header_igd::create($data_layanan_header);


                    $id_detail = $this->createLayanandetailgp();
                    foreach ($arrayindexgp as $gp) {
                        $savedetailgp = [
                            'id_layanan_detail' => $id_detail,
                            'kode_layanan_header' => $kode_headergp,
                            'kode_tarif_detail' =>  $gp['kodelayanan'],
                            'total_tarif' => $gp['tarif'],
                            'jumlah_layanan' => $gp['qty'],
                            'kode_dokter1' => $gp['kode_dpjp'],

                            'diskon_dokter' => 0,
                            'cyto' => 0,
                            'total_layanan' => $gp['tarif'],
                            'grantotal_layanan' => $gp['tarif'] * $gp['qty'],
                            'status_layanan_detail' => 'OPN',
                            'tgl_layanan_detail' => $now,
                            'tagihan_penjamin' => $gt,
                            'tgl_layanan_detail_2' => $now,
                            'row_id_header' => $head['id']
                        ];

                        $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetailgp);
                    }
                }
                $kode_header = $ts_layanan_detail_igd['kode_layanan_header'];
                $idhed = $ts_layanan_detail_igd['row_id_header'];
                $update = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd SET status_order = 2 WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $request->norm]);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        // $update = DB::connection('mysql2')->select('UPDATE ts_kunjungan
        //     SET diagx = ?, kode_paramedis = ?
        //     WHERE no_rm = ? AND kode_kunjungan = ?', [$diagnosa, $kp, $norm, $kj]);

        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function simpanassesdokkebid(Request $request)
    {
        $a = $request->all();
        $diagnosa = $request->anamnesa;
        $ku = $request->ku;
        $kj = $request->kj;
        $norm = $request->norm;
        $unit = auth()->user()->unit;
        $name = auth()->user()->nama;


        $dt = Carbon::now()->timezone('Asia/Jakarta');
        $date = $dt->toDateString();
        $time = $dt->toTimeString();
        $now = Carbon::now();
        $sp = 'OPN';
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;
        $kondisi = $request->kopul;
        $jenispasien = $request->alpul;
        //jenis pasien
        if ($jenispasien == 'Pasien Anak') {
            $jenispasien = '1';
        } elseif ($jenispasien == 'Pasien Bedah') {
            $jenispasien = '2';
        } elseif ($jenispasien == 'Pasien Non Bedah') {
            $jenispasien = '3';
        } elseif ($jenispasien == 'Pasien Psikomatic') {
            $jenispasien = '4';
        } elseif ($jenispasien == 'Pasien Kebidanan') {
            $jenispasien = '5';
        } else {
            $jenispasien = '0';
        }

        //kondisi
        if ($kondisi == 'Dirawat') {
            $kondisi = '1';
        } elseif ($kondisi == 'BATAL DIRAWAT') {
            $kondisi = '3';
        } else {
            $kondisi = '0';
        }

        //assesmen

        try {
            $assesmen = erm_cppt_dokter_kebidanan::create([
                'ku' => $request->ku,
                'keluhan_utama' => $request->subject,
                'pemfis' => $request->pemfis,
                'tfu' => $request->tfu,
                'tbj' => $request->tbj,
                'his' => $request->his,
                'djj' => $request->djj,
                'kontraksi' => $request->kontraksi,
                'inspeksi' => $request->inspeksi,
                'inspekulo' => $request->inspekulo,
                'vt' => $request->vt,
                'rt' => $request->rt,
                'promontorium' => $request->promontorium,
                'Linea' => $request->Linea,
                'Dinding' => $request->Dinding,
                'Spina' => $request->Spina,
                'Distansia' => $request->Distansia,
                'Interspinarum' => $request->Interspinarum,
                'SAKRUM' => $request->SAKRUM,
                'Arkus' => $request->Arkus,
                'Kesan' => $request->Kesan,
                'imbang' => $request->imbang,
                'namadpjp' => $request->namadpjp,
                'kodedpjp' => $request->kodedpjp,
                'diagnosis' => $request->diagnosis,
                'planning' => $request->planning,
                'norm' => $request->norm,
                'kj' => $request->kj,
                'kp' => $request->kp,
                'counter' => $request->counter,
                'cara_pulang' => $request->alpul . $request->alpul1,
                'keadaan_pulang' => $request->kopul . $request->kopul1,
                'id_cppt_dokter' => $user,
                'tgl_kunjungan' => $request->tglmasuk,
                'tgl_input' => $now,
                'kode_unit' => $unit,
                'kode_kunjungan' => $request->kj,
                'no_rm' => $request->norm,
                'sumber_data' => $request->sumberdata,
                'macam_kasus' => $request->macamkasus,
                'keluhan_utama' => $request->subject,
                'trauma' => $request->trauma,
                'id_cppt_dokter' => $user,
                'kode_paramedis' => $kp,
                'nama_paramedis' => $name,
                'is_ranap' => $kondisi,
                'status' => '1'

            ]);
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        //laboratorium
        try {
            $datalab = json_decode($_POST['datalab'], true);
            if ($datalab == null) {
            } else {
                foreach ($datalab as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSet[$index] = $value;
                    if ($index == 'cyto') {
                        $arrayindexlab[] = $dataSet;
                    }
                }
                $sum = 0;
                foreach ($arrayindexlab as $arr) {
                    $discount = $arr['disc'];
                    $cyto = $arr['cyto'];
                    $trf = array($arr['tarif']);
                    $tarif =
                        $sum += array_sum($trf);
                    if ($cyto == 1) {
                        if ($discount == $discount) {
                            $a = $tarif + ($tarif * (50 / 100));

                            $gt = $a - ($a * $discount / 100);
                        } else {
                            $gt = $tarif + ($tarif * (50 / 100));
                        }
                    } elseif ($discount == $discount) {
                        $gt = $tarif - ($tarif * $discount / 100);
                    } else {
                        $gt = $tarif;
                    }
                }
                $kode_header = $this->createOrderHeader();
                if ($kp == 'P01') {
                    if ($ku == '2') {
                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $request->norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSet['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSet['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'status_order' => 1,
                            'kode_unit' => '3002',
                            'kode_tipe_transaksi' => 2,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexlab as $arr) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $arr['kodelayanan'],
                                'total_tarif' => $arr['tarif'],
                                'jumlah_layanan' => $arr['qty'],
                                'diskon_dokter' => $arr['disc'],
                                'cyto' => $arr['cyto'],
                                'total_layanan' => $arr['tarif'],
                                'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    } else {

                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $request->norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSet['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSet['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'status_order' => 1,
                            'kode_unit' => '3002',
                            'kode_tipe_transaksi' => 1,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexlab as $arr) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $arr['kodelayanan'],
                                'total_tarif' => $arr['tarif'],
                                'jumlah_layanan' => $arr['qty'],
                                'diskon_dokter' => $arr['disc'],
                                'cyto' => $arr['cyto'],
                                'total_layanan' => $arr['tarif'],
                                'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    }
                } else {
                    $data_layanan_header = [
                        'kode_layanan_header' => $kode_header,
                        'tgl_entry' => $now,
                        'tgl_periksa' => $now,
                        'no_rm' => $request->norm,
                        'kode_kunjungan' => $request->kj,
                        'qty_header' => $dataSet['qty'],
                        'keterangan' => 'PENDING',
                        'unit_pengirim' => $unit,
                        'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                        'dok_kirim' => $kp,
                        'total_layanan' => $gt,
                        'tagihan_pribadi' => $gt,
                        'diskon_global' => $dataSet['disc'],
                        'status_pembayaran' => $sp,
                        'status_layanan' => 2,
                        'status_order' => 1,
                        'kode_unit' => '3002',
                        'kode_tipe_transaksi' => 2,
                        'kode_penjaminx' => $request->kp,
                        'pic' => $user,
                    ];

                    $head = ts_layanan_header_igd::create($data_layanan_header);
                    $id_detail = $this->createLayanandetail();
                    foreach ($arrayindexlab as $arr) {
                        $savedetail = [
                            'id_layanan_detail' => $id_detail,
                            'kode_layanan_header' => $kode_header,
                            'kode_tarif_detail' =>  $arr['kodelayanan'],
                            'total_tarif' => $arr['tarif'],
                            'jumlah_layanan' => $arr['qty'],
                            'diskon_dokter' => $arr['disc'],
                            'cyto' => $arr['cyto'],
                            'total_layanan' => $arr['tarif'],
                            'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                            'status_layanan_detail' => 'OPN',
                            'tgl_layanan_detail' => $now,
                            'tagihan_penjamin' => $gt,
                            'tgl_layanan_detail_2' => $now,
                            'row_id_header' => $head['id']
                        ];

                        $ts_layanan_detail = ts_layanan_detail_igd::create($savedetail);
                    }
                }
                $kode_header = $ts_layanan_detail['kode_layanan_header'];
                $idhed = $ts_layanan_detail['row_id_header'];
                // $update = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd SET status_order = 2 WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $request->norm]);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        //radiologi
        try {
            $datarad = json_decode($_POST['datarad'], true);

            if ($datarad == null) {
            } else {
                foreach ($datarad as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSetr[$index] = $value;
                    if ($index == 'cyto') {
                        $arrayindexr[] = $dataSetr;
                    }
                }
                $sum = 0;
                foreach ($arrayindexr as $rad) {
                    $discount = $rad['disc'];
                    $cyto = $rad['cyto'];
                    $trf = array($rad['tarif']);
                    $tarif =
                        $sum += array_sum($trf);
                    if ($cyto == 1) {
                        if ($discount == $discount) {
                            $a = $tarif + ($tarif * (50 / 100));

                            $gt = $a - ($a * $discount / 100);
                        } else {
                            $gt = $tarif + ($tarif * (50 / 100));
                        }
                    } elseif ($discount == $discount) {
                        $gt = $tarif - ($tarif * $discount / 100);
                    } else {
                        $gt = $tarif;
                    }
                }
                $kode_header = $this->createOrderHeaderrad();

                if ($kp == 'P01') {
                    if ($ku == '2') {
                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSetr['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSetr['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'kode_unit' => '3003',
                            'kode_tipe_transaksi' => 2,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexr as $rad) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $rad['kodelayanan'],
                                'total_tarif' => $rad['tarif'],
                                'jumlah_layanan' => $rad['qty'],
                                'diskon_dokter' => $rad['disc'],
                                'cyto' => $rad['cyto'],
                                'total_layanan' => $rad['tarif'],
                                'grantotal_layanan' => $rad['tarif'] * $rad['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    } else {

                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSetr['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSetr['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'kode_unit' => '3003',
                            'kode_tipe_transaksi' => 1,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexr as $rad) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $rad['kodelayanan'],
                                'total_tarif' => $rad['tarif'],
                                'jumlah_layanan' => $rad['qty'],
                                'diskon_dokter' => $rad['disc'],
                                'cyto' => $rad['cyto'],
                                'total_layanan' => $rad['tarif'],
                                'grantotal_layanan' => $rad['tarif'] * $rad['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    }
                } else {
                    $data_layanan_header = [
                        'kode_layanan_header' => $kode_header,
                        'tgl_entry' => $now,
                        'tgl_periksa' => $now,
                        'no_rm' => $norm,
                        'kode_kunjungan' => $request->kj,
                        'qty_header' => $dataSetr['qty'],
                        'keterangan' => 'PENDING',
                        'unit_pengirim' => $unit,
                        'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                        'dok_kirim' => $kp,
                        'total_layanan' => $gt,
                        'tagihan_pribadi' => $gt,
                        'diskon_global' => $dataSetr['disc'],
                        'status_pembayaran' => $sp,
                        'status_layanan' => 2,
                        'kode_unit' => '3003',
                        'kode_tipe_transaksi' => 2,
                        'kode_penjaminx' => $request->kp,
                        'pic' => $user,
                    ];

                    $head = ts_layanan_header_igd::create($data_layanan_header);
                    $id_detail = $this->createLayanandetail();
                    foreach ($arrayindexr as $rad) {
                        $savedetail = [
                            'id_layanan_detail' => $id_detail,
                            'kode_layanan_header' => $kode_header,
                            'kode_tarif_detail' =>  $rad['kodelayanan'],
                            'total_tarif' => $rad['tarif'],
                            'jumlah_layanan' => $rad['qty'],
                            'diskon_dokter' => $rad['disc'],
                            'cyto' => $rad['cyto'],
                            'total_layanan' => $rad['tarif'],
                            'grantotal_layanan' => $rad['tarif'] * $rad['qty'],
                            'status_layanan_detail' => 'OPN',
                            'tgl_layanan_detail' => $now,
                            'tagihan_penjamin' => $gt,
                            'tgl_layanan_detail_2' => $now,
                            'row_id_header' => $head['id']
                        ];

                        $ts_layanan_detail = ts_layanan_detail_igd::create($savedetail);
                    }
                }
                $kode_header = $ts_layanan_detail['kode_layanan_header'];
                $idhed = $ts_layanan_detail['row_id_header'];
                // $update = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd SET status_order = 2
                // WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $request->norm]);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        // rekonsiliasi obat
        try {

            $rekobat = json_decode($_POST['rekobat'], true);
            if ($rekobat == null) {
            } else {
                foreach ($rekobat as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSet[$index] = $value;
                    if ($index == 'kodetail') {
                        $arrayindex[] = $dataSet;
                    }
                }
                foreach ($arrayindex as $arr) {
                    $savedetail = $arr['tinjut'];
                    $kodetail = $arr['kodetail'];
                    $rekonsiliasiobat = DB::connection('mysql2')->select('UPDATE rekonsiliasi_obat SET lanjut = ? WHERE kode_detail_obat = ? ', [$savedetail, $kodetail]);
                }
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        //fr diagnosa      
        // try {

        //     $frunit = di_pasien_diagnosa_frunit::create([
        //         'no_rm' => $request->norm,
        //         'kode_unit' => $unit,
        //         'counter' => $request->counter,
        //         'kode_kunjungan' => $request->kj,
        //         'input_date' => $now,
        //         'kode_paramedis' => $kp,
        //         'diag_00' => $request->anamnesa,
        //         'tipe_pasien' => $jenispasien,
        //         'pic' => $user,
        //         'is_ranap' => $kondisi,
        //         'isSynch' => 0,
        //         'created_at' => $now,
        //         'status' => '1'

        //     ]);
        // } catch (\Exception $e) {
        //     $back = [
        //         'kode' => 200,
        //         'message' => $e->getMessage()
        //     ];
        //     echo json_encode($back);
        //     die;
        // }
        // tindakan dpjp
        try {
            $tindakandjp = json_decode($_POST['tindakandjp'], true);
            foreach ($tindakandjp as $nama) {
                $index = $nama['name'];
                $value = $nama['value'];
                $dataSet[$index] = $value;
                if ($index == 'talaksanadpjp') {
                    $tindakand[] = $dataSet;
                }
            }
            // $id_detail = $this->createLayanandetail();
            foreach ($tindakand as $arrr) {
                $savedetail = [
                    // 'kode_detail_obat' => $id_detail,
                    'no_rm' => $norm,
                    'kode_kunjungan' => $kj,
                    'kode_unit' => '1023',
                    'kode_paramedis' => $arrr['kode_dpjp'],
                    'tindakan_kedokteran' => $arrr['talaksanadpjp'],
                    'tgl_input' => $now,
                    'status' => 1

                ];
                $tindakandpjpdetail = erm_tindakan_kedokteran::create($savedetail);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        // $update = DB::connection('mysql2')->select('UPDATE ts_kunjungan
        //     SET diagx = ?, kode_paramedis = ?
        //     WHERE no_rm = ? AND kode_kunjungan = ?', [$diagnosa, $kp, $norm, $kj]);

        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }


    public function simpanassesdokbay(Request $request)
    {
        $a = $request->all();
        $diagnosa = $request->anamnesa;
        $ku = $request->ku;
        $kj = $request->kj;
        $norm = $request->norm;
        $unit = auth()->user()->unit;
        $name = auth()->user()->nama;


        $dt = Carbon::now()->timezone('Asia/Jakarta');
        $date = $dt->toDateString();
        $time = $dt->toTimeString();
        $now = Carbon::now();
        $sp = 'OPN';
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;
        $kondisi = $request->kopul;
        $jenispasien = $request->alpul;
        //jenis pasien
        if ($jenispasien == 'Pasien Anak') {
            $jenispasien = '1';
        } elseif ($jenispasien == 'Pasien Bedah') {
            $jenispasien = '2';
        } elseif ($jenispasien == 'Pasien Non Bedah') {
            $jenispasien = '3';
        } elseif ($jenispasien == 'Pasien Psikomatic') {
            $jenispasien = '4';
        } elseif ($jenispasien == 'Pasien Kebidanan') {
            $jenispasien = '5';
        } else {
            $jenispasien = '0';
        }

        //kondisi
        if ($kondisi == 'Dirawat') {
            $kondisi = '1';
        } elseif ($kondisi == 'BATAL DIRAWAT') {
            $kondisi = '3';
        } else {
            $kondisi = '0';
        }

        //assesmen

        try {
            $assesmen = erm_cppt_dokter_kebidanan::create([
                'ku' => $request->ku,
                'keluhan_utama' => $request->subject,
                'pemfis' => $request->pemfis,

                'namadpjp' => $request->namadpjp,
                'kodedpjp' => $request->kodedpjp,
                'diagnosis' => $request->diagnosa,
                'planning' => $request->planning,
                'norm' => $request->norm,
                'kj' => $request->kj,
                'kp' => $request->kp,
                'counter' => $request->counter,
                'cara_pulang' => $request->alpul . $request->alpul1,
                'keadaan_pulang' => $request->kopul . $request->kopul1,
                'id_cppt_dokter' => $user,
                'tgl_kunjungan' => $request->tglmasuk,
                'tgl_input' => $now,
                'kode_unit' => $unit,
                'kode_kunjungan' => $request->kj,
                'no_rm' => $request->norm,
                'sumber_data' => $request->sumberdata,
                'macam_kasus' => $request->macamkasus,
                'keluhan_utama' => $request->subject,
                'trauma' => $request->trauma,
                'id_cppt_dokter' => $user,
                'kode_paramedis' => $kp,
                'nama_paramedis' => $name,
                'is_ranap' => $kondisi,
                'status' => '1'

            ]);
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        //laboratorium
        try {
            $datalab = json_decode($_POST['datalab'], true);
            if ($datalab == null) {
            } else {
                foreach ($datalab as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSet[$index] = $value;
                    if ($index == 'cyto') {
                        $arrayindexlab[] = $dataSet;
                    }
                }
                $sum = 0;
                foreach ($arrayindexlab as $arr) {
                    $discount = $arr['disc'];
                    $cyto = $arr['cyto'];
                    $trf = array($arr['tarif']);
                    $tarif =
                        $sum += array_sum($trf);
                    if ($cyto == 1) {
                        if ($discount == $discount) {
                            $a = $tarif + ($tarif * (50 / 100));

                            $gt = $a - ($a * $discount / 100);
                        } else {
                            $gt = $tarif + ($tarif * (50 / 100));
                        }
                    } elseif ($discount == $discount) {
                        $gt = $tarif - ($tarif * $discount / 100);
                    } else {
                        $gt = $tarif;
                    }
                }
                $kode_header = $this->createOrderHeader();
                if ($kp == 'P01') {
                    if ($ku == '2') {
                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $request->norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSet['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSet['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'status_order' => 1,
                            'kode_unit' => '3002',
                            'kode_tipe_transaksi' => 2,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexlab as $arr) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $arr['kodelayanan'],
                                'total_tarif' => $arr['tarif'],
                                'jumlah_layanan' => $arr['qty'],
                                'diskon_dokter' => $arr['disc'],
                                'cyto' => $arr['cyto'],
                                'total_layanan' => $arr['tarif'],
                                'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    } else {

                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $request->norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSet['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSet['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'status_order' => 1,
                            'kode_unit' => '3002',
                            'kode_tipe_transaksi' => 1,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexlab as $arr) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $arr['kodelayanan'],
                                'total_tarif' => $arr['tarif'],
                                'jumlah_layanan' => $arr['qty'],
                                'diskon_dokter' => $arr['disc'],
                                'cyto' => $arr['cyto'],
                                'total_layanan' => $arr['tarif'],
                                'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    }
                } else {
                    $data_layanan_header = [
                        'kode_layanan_header' => $kode_header,
                        'tgl_entry' => $now,
                        'tgl_periksa' => $now,
                        'no_rm' => $request->norm,
                        'kode_kunjungan' => $request->kj,
                        'qty_header' => $dataSet['qty'],
                        'keterangan' => 'PENDING',
                        'unit_pengirim' => $unit,
                        'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                        'dok_kirim' => $kp,
                        'total_layanan' => $gt,
                        'tagihan_pribadi' => $gt,
                        'diskon_global' => $dataSet['disc'],
                        'status_pembayaran' => $sp,
                        'status_layanan' => 2,
                        'status_order' => 1,
                        'kode_unit' => '3002',
                        'kode_tipe_transaksi' => 2,
                        'kode_penjaminx' => $request->kp,
                        'pic' => $user,
                    ];

                    $head = ts_layanan_header_igd::create($data_layanan_header);
                    $id_detail = $this->createLayanandetail();
                    foreach ($arrayindexlab as $arr) {
                        $savedetail = [
                            'id_layanan_detail' => $id_detail,
                            'kode_layanan_header' => $kode_header,
                            'kode_tarif_detail' =>  $arr['kodelayanan'],
                            'total_tarif' => $arr['tarif'],
                            'jumlah_layanan' => $arr['qty'],
                            'diskon_dokter' => $arr['disc'],
                            'cyto' => $arr['cyto'],
                            'total_layanan' => $arr['tarif'],
                            'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                            'status_layanan_detail' => 'OPN',
                            'tgl_layanan_detail' => $now,
                            'tagihan_penjamin' => $gt,
                            'tgl_layanan_detail_2' => $now,
                            'row_id_header' => $head['id']
                        ];

                        $ts_layanan_detail = ts_layanan_detail_igd::create($savedetail);
                    }
                }
                $kode_header = $ts_layanan_detail['kode_layanan_header'];
                $idhed = $ts_layanan_detail['row_id_header'];
                // $update = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd SET status_order = 2 WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $request->norm]);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        //radiologi
        try {
            $datarad = json_decode($_POST['datarad'], true);

            if ($datarad == null) {
            } else {
                foreach ($datarad as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSetr[$index] = $value;
                    if ($index == 'cyto') {
                        $arrayindexr[] = $dataSetr;
                    }
                }
                $sum = 0;
                foreach ($arrayindexr as $rad) {
                    $discount = $rad['disc'];
                    $cyto = $rad['cyto'];
                    $trf = array($rad['tarif']);
                    $tarif =
                        $sum += array_sum($trf);
                    if ($cyto == 1) {
                        if ($discount == $discount) {
                            $a = $tarif + ($tarif * (50 / 100));

                            $gt = $a - ($a * $discount / 100);
                        } else {
                            $gt = $tarif + ($tarif * (50 / 100));
                        }
                    } elseif ($discount == $discount) {
                        $gt = $tarif - ($tarif * $discount / 100);
                    } else {
                        $gt = $tarif;
                    }
                }
                $kode_header = $this->createOrderHeaderrad();

                if ($kp == 'P01') {
                    if ($ku == '2') {
                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSetr['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSetr['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'kode_unit' => '3003',
                            'kode_tipe_transaksi' => 2,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexr as $rad) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $rad['kodelayanan'],
                                'total_tarif' => $rad['tarif'],
                                'jumlah_layanan' => $rad['qty'],
                                'diskon_dokter' => $rad['disc'],
                                'cyto' => $rad['cyto'],
                                'total_layanan' => $rad['tarif'],
                                'grantotal_layanan' => $rad['tarif'] * $rad['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    } else {

                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSetr['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSetr['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'kode_unit' => '3003',
                            'kode_tipe_transaksi' => 1,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexr as $rad) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $rad['kodelayanan'],
                                'total_tarif' => $rad['tarif'],
                                'jumlah_layanan' => $rad['qty'],
                                'diskon_dokter' => $rad['disc'],
                                'cyto' => $rad['cyto'],
                                'total_layanan' => $rad['tarif'],
                                'grantotal_layanan' => $rad['tarif'] * $rad['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    }
                } else {
                    $data_layanan_header = [
                        'kode_layanan_header' => $kode_header,
                        'tgl_entry' => $now,
                        'tgl_periksa' => $now,
                        'no_rm' => $norm,
                        'kode_kunjungan' => $request->kj,
                        'qty_header' => $dataSetr['qty'],
                        'keterangan' => 'PENDING',
                        'unit_pengirim' => $unit,
                        'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                        'dok_kirim' => $kp,
                        'total_layanan' => $gt,
                        'tagihan_pribadi' => $gt,
                        'diskon_global' => $dataSetr['disc'],
                        'status_pembayaran' => $sp,
                        'status_layanan' => 2,
                        'kode_unit' => '3003',
                        'kode_tipe_transaksi' => 2,
                        'kode_penjaminx' => $request->kp,
                        'pic' => $user,
                    ];

                    $head = ts_layanan_header_igd::create($data_layanan_header);
                    $id_detail = $this->createLayanandetail();
                    foreach ($arrayindexr as $rad) {
                        $savedetail = [
                            'id_layanan_detail' => $id_detail,
                            'kode_layanan_header' => $kode_header,
                            'kode_tarif_detail' =>  $rad['kodelayanan'],
                            'total_tarif' => $rad['tarif'],
                            'jumlah_layanan' => $rad['qty'],
                            'diskon_dokter' => $rad['disc'],
                            'cyto' => $rad['cyto'],
                            'total_layanan' => $rad['tarif'],
                            'grantotal_layanan' => $rad['tarif'] * $rad['qty'],
                            'status_layanan_detail' => 'OPN',
                            'tgl_layanan_detail' => $now,
                            'tagihan_penjamin' => $gt,
                            'tgl_layanan_detail_2' => $now,
                            'row_id_header' => $head['id']
                        ];

                        $ts_layanan_detail = ts_layanan_detail_igd::create($savedetail);
                    }
                }
                $kode_header = $ts_layanan_detail['kode_layanan_header'];
                $idhed = $ts_layanan_detail['row_id_header'];
                // $update = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd SET status_order = 2
                // WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $request->norm]);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        // rekonsiliasi obat
        try {

            $rekobatt = json_decode($_POST['rekobat'], true);
            if ($rekobatt == null) {
            } else {
                foreach ($rekobatt as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSet[$index] = $value;
                    if ($index == 'kodetail') {
                        $obatindex[] = $dataSet;
                    }
                }
                foreach ($obatindex as $arr) {
                    $savedetail = $arr['tinjut'];
                    $kodetail = $arr['kodetail'];
                    $rekonsiliasiobat = DB::connection('mysql2')->select('UPDATE rekonsiliasi_obat SET lanjut = ? WHERE kode_detail_obat = ? ', [$savedetail, $kodetail]);
                }
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        //fr diagnosa      
        // try {

        //     $frunit = di_pasien_diagnosa_frunit::create([
        //         'no_rm' => $request->norm,
        //         'kode_unit' => $unit,
        //         'counter' => $request->counter,
        //         'kode_kunjungan' => $request->kj,
        //         'input_date' => $now,
        //         'kode_paramedis' => $kp,
        //         'diag_00' => $request->anamnesa,
        //         'tipe_pasien' => $jenispasien,
        //         'pic' => $user,
        //         'is_ranap' => $kondisi,
        //         'isSynch' => 0,
        //         'created_at' => $now,
        //         'status' => '1'

        //     ]);
        // } catch (\Exception $e) {
        //     $back = [
        //         'kode' => 200,
        //         'message' => $e->getMessage()
        //     ];
        //     echo json_encode($back);
        //     die;
        // }
        // tindakan dpjp
        try {
            $tindakanddjp = json_decode($_POST['tindakandjp'], true);
            foreach ($tindakanddjp as $nama) {
                $index = $nama['name'];
                $value = $nama['value'];
                $dataSet[$index] = $value;
                if ($index == 'talaksanadpjp') {
                    $tindakandd[] = $dataSet;
                }
            }
            // $id_detail = $this->createLayanandetail();
            foreach ($tindakandd as $arrr) {
                $savedetail = [
                    // 'kode_detail_obat' => $id_detail,
                    'no_rm' => $norm,
                    'kode_kunjungan' => $kj,
                    'kode_unit' => '1023',
                    'kode_paramedis' => $arrr['kode_dpjp'],
                    'tindakan_kedokteran' => $arrr['talaksanadpjp'],
                    'tgl_input' => $now,
                    'status' => 1

                ];
                $tindakandpjpdetail = erm_tindakan_kedokteran::create($savedetail);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        // $update = DB::connection('mysql2')->select('UPDATE ts_kunjungan
        //     SET diagx = ?, kode_paramedis = ?
        //     WHERE no_rm = ? AND kode_kunjungan = ?', [$diagnosa, $kp, $norm, $kj]);

        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function returorderradiologi(Request $request)
    {
        $kj = $request->kj;
        $rheader = $request->rheader;
        $rdetail = $request->rdetail;
        $idrdetail = $request->idrdetail;
        $update = DB::connection('mysql2')->select('UPDATE  ts_layanan_detail_igd
        SET satus_order = ?, keterangan = ?
        
        WHERE id = ?', ['3', 'RETUR', $idrdetail]);

        $hitung = DB::connection('mysql2')->select('SELECT total_tarif AS tarif FROM ts_layanan_detail_igd WHERE id_layanan_detail = ? AND kode_layanan_header = ? ', [$rdetail, $rheader]);
        $hitung1 = DB::connection('mysql2')->select('SELECT tagihan_penjamin as tagpen, tagihan_pribadi as tagpri FROM ts_layanan_header_igd WHERE  kode_layanan_header = ? ', [$rheader]);
        $tarrif = $hitung[0]->tarif;
        $tagpri = $hitung1[0]->tagpri;
        $tagpen = $hitung1[0]->tagpen;
        if ($tagpri == 0) {
            $sisatagpen = $tagpen - $tarrif;
            $updatehed = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd	SET total_layanan = ? ,tagihan_penjamin = ?	WHERE kode_layanan_header = ?', [$sisatagpen,  $sisatagpen, $rheader]);
        } elseif ($tagpen == 0) {
            $sisatagpri = $tagpri - $tarrif;
            $updatehed = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd	SET total_layanan = ? ,tagihan_pribadi = ?	WHERE kode_layanan_header = ?', [$sisatagpri,  $sisatagpri, $rheader]);
        }

        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }

    public function returordertdp(Request $request)
    {
        $id = $request->idtdp;
        $retin = DB::connection('mysql2')->select('UPDATE erm_tindakan_kedokteran SET status = "3"  WHERE id = ? ', [$id]);






        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function returordergp(Request $request)
    {
        $kj = $request->kj;

        $dheader = $request->dheader;
        $ddetail = $request->ddetail;
        $idddetail = $request->idddetail;


        $update = DB::connection('mysql2')->select('UPDATE  ts_layanan_detail_igd
        SET satus_order = ?, keterangan = ?
        
        WHERE id = ?', ['3', 'RETUR', $idddetail]);

        $hitung = DB::connection('mysql2')->select('SELECT total_tarif AS tarif FROM ts_layanan_detail_igd WHERE id_layanan_detail = ? AND kode_layanan_header = ? ', [$ddetail, $dheader]);
        $hitung1 = DB::connection('mysql2')->select('SELECT tagihan_penjamin as tagpen, tagihan_pribadi as tagpri FROM ts_layanan_header_igd WHERE  kode_layanan_header = ? ', [$dheader]);
        $tarrif = $hitung[0]->tarif;
        $tagpri = $hitung1[0]->tagpri;
        $tagpen = $hitung1[0]->tagpen;
        if ($tagpri == 0) {
            $sisatagpen = $tagpen - $tarrif;
            $updatehed = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd	SET total_layanan = ? ,tagihan_penjamin = ?	WHERE kode_layanan_header = ?', [$sisatagpen,  $sisatagpen, $dheader]);
        } elseif ($tagpen == 0) {
            $sisatagpri = $tagpri - $tarrif;
            $updatehed = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd	SET total_layanan = ? ,tagihan_pribadi = ?	WHERE kode_layanan_header = ?', [$sisatagpri,  $sisatagpri, $dheader]);
        }



        // $cektag = DB::connection('mysql2')->select('SELECT 
        //     tagihan_pribadi + tagihan_penjamin AS tagihan
        //     FROM ts_layanan_header
        //     WHERE id = ?', [$request->idhed]);
        // $hasil = $cektag[0]->tagihan;
        // if ($hasil == NULL) {
        //     $updatehead = DB::connection('mysql2')->select('UPDATE ts_layanan_header SET status_layanan = 3  WHERE id = ?', array($request->idhed));
        // }


        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function returorderlaboratorium(Request $request)
    {
        $kj = $request->kj;

        $header = $request->header;
        $detail = $request->detail;
        $iddetail = $request->iddetail;


        $update = DB::connection('mysql2')->select('UPDATE  ts_layanan_detail_igd
        SET satus_order = ?, keterangan = ?
        
        WHERE id = ?', ['3', 'RETUR', $iddetail]);

        $hitung = DB::connection('mysql2')->select('SELECT total_tarif AS tarif FROM ts_layanan_detail_igd WHERE id_layanan_detail = ? AND kode_layanan_header = ? ', [$detail, $header]);
        $hitung1 = DB::connection('mysql2')->select('SELECT tagihan_penjamin as tagpen, tagihan_pribadi as tagpri FROM ts_layanan_header_igd WHERE  kode_layanan_header = ? ', [$header]);
        $tarrif = $hitung[0]->tarif;
        $tagpri = $hitung1[0]->tagpri;
        $tagpen = $hitung1[0]->tagpen;
        if ($tagpri == 0) {
            $sisatagpen = $tagpen - $tarrif;
            $updatehed = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd	SET total_layanan = ? ,tagihan_penjamin = ?	WHERE kode_layanan_header = ?', [$sisatagpen,  $sisatagpen, $header]);
        } elseif ($tagpen == 0) {
            $sisatagpri = $tagpri - $tarrif;
            $updatehed = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd	SET total_layanan = ? ,tagihan_pribadi = ?	WHERE kode_layanan_header = ?', [$sisatagpri,  $sisatagpri, $header]);
        }



        // $cektag = DB::connection('mysql2')->select('SELECT 
        //     tagihan_pribadi + tagihan_penjamin AS tagihan
        //     FROM ts_layanan_header
        //     WHERE id = ?', [$request->idhed]);
        // $hasil = $cektag[0]->tagihan;
        // if ($hasil == NULL) {
        //     $updatehead = DB::connection('mysql2')->select('UPDATE ts_layanan_header SET status_layanan = 3  WHERE id = ?', array($request->idhed));
        // }


        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }

    public function validasiasssesdok(Request $request)
    {
        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;
        $kj = $request->kj;
        $norm = $request->norm;

        $update = DB::connection('mysql2')->select('UPDATE erm_cppt_dokter
        SET status = 3 WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        $back = [
            'kode' => 200,
            'message' => 'Validasi Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function validasiasssesdokbid(Request $request)
    {

        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;
        $kj = $request->kj;
        $norm = $request->norm;
        try {

            $update = DB::connection('mysql2')->select('UPDATE erm_cppt_dokter_kebidanan
        SET status = 2 WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        try {
            $delete = DB::connection('mysql2')->select('DELETE FROM erm_cppt_dokter_kebidanan WHERE no_rm = ? AND kode_kunjungan = ? AND STATUS = "3" ', [$norm, $kj]);
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        $back = [
            'kode' => 200,
            'message' => 'Validasi Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function validasiasssesdokbidbay(Request $request)
    {

        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;
        $kj = $request->kj;
        $norm = $request->norm;
        try {

            $update = DB::connection('mysql2')->select('UPDATE erm_cppt_dokter_kebidanan
        SET status = 2 WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        try {
            $delete = DB::connection('mysql2')->select('DELETE FROM erm_cppt_dokter_kebidanan WHERE no_rm = ? AND kode_kunjungan = ? AND STATUS = "3" ', [$norm, $kj]);
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        $back = [
            'kode' => 200,
            'message' => 'Validasi Berhasil'
        ];
        echo json_encode($back);
        die;
    }

    public function updateassemen(Request $request)
    {

        $a = $request->all();
        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;
        $subyektif = $request->subject;
        $assesment = $request->assesmen;
        $planning = $request->planning;
        $tiga_pertama = $request->tigap;
        $tiga_kedua = $request->tigak;
        $primary = $request->primary;
        $secondary = $request->secondary;
        $diagnosa = $request->diagnosa;
        $diagnosa = $request->diagnosa;
        $ku = $request->ku;
        $kj = $request->kj;
        $norm = $request->norm;

        $unit = auth()->user()->unit;
        $name = auth()->user()->nama;

        $dt = Carbon::now()->timezone('Asia/Jakarta');
        $date = $dt->toDateString();
        $time = $dt->toTimeString();
        $now = Carbon::now();
        $sp = 'OPN';
        $kp = auth()->user()->kode_paramedis;
        $kondisi = $request->kopul;
        $jenispasien = $request->alpul;
        //jenis pasien
        if ($jenispasien == 'Pasien Anak') {
            $jenispasien = '1';
        } elseif ($jenispasien == 'Pasien Bedah') {
            $jenispasien = '2';
        } elseif ($jenispasien == 'Pasien Non Bedah') {
            $jenispasien = '3';
        } elseif ($jenispasien == 'Pasien Psikomatic') {
            $jenispasien = '4';
        } elseif ($jenispasien == 'Pasien Kebidanan') {
            $jenispasien = '5';
        } else {
            $jenispasien = '0';
        }

        //kondisi
        if ($kondisi == 'Dirawat') {
            $kondisi = '1';
        } elseif ($kondisi == 'BATAL DIRAWAT') {
            $kondisi = '3';
        } else {
            $kondisi = '0';
        }

        //assesmentdokter
        try {

            $update = DB::connection('mysql2')->select('UPDATE erm_cppt_dokter SET id_cppt_dokter = ?, tgl_input_2 = ?, sumber_data = ?, macam_kasus = ?, keluhan_utama = ?, trauma = ?,anamnesa = ?,tata_laksana = ?,  riwayat_penyakit = ?, tiga_pertama = ?, tiga_kedua = ?, diagnosa_kerja = ?,cara_pulang = ? ,keadaan_pulang = ?, primary_survey = ?,secondary_survey = ?, kode_paramedis_2 = ?, nama_paramedis2 = ?, is_ranap = ?, status = 2 WHERE no_rm = ? AND kode_kunjungan = ?', [$user, $now, $request->sumberdata, $request->macamkasus, $request->subject, $request->trauma, $request->anamnesa, $request->talaksana, $request->riwayatpenyakit, $request->tigap, $request->tigak, $request->diagnosa, $request->alpul . ' ' . $request->alpul1, $request->kopul . ' ' . $request->kopul1, $request->primary, $request->secondary, $kp, $name, $kondisi, $norm, $kj]);


            // $updatee = DB::connection('mysql2')->select('UPDATE ts_kunjungan SET diagx = ? WHERE no_rm = ? AND kode_kunjungan = ?', [$request->anamnesa, $norm, $kj]);
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        //lab
        try {
            $datalab = json_decode($_POST['datalab'], true);
            if ($datalab == null) {
            } else {
                foreach ($datalab as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSet[$index] = $value;
                    if ($index == 'cyto') {
                        $arrayindexlab[] = $dataSet;
                    }
                }

                $sum = 0;

                foreach ($arrayindexlab as $arr) {
                    $discount = $arr['disc'];
                    $cyto = $arr['cyto'];
                    $trf = array($arr['tarif']);
                    $tarif =
                        $sum += array_sum($trf);
                    if ($cyto == 1) {
                        if ($discount == $discount) {
                            $a = $tarif + ($tarif * (50 / 100));

                            $gt = $a - ($a * $discount / 100);
                        } else {
                            $gt = $tarif + ($tarif * (50 / 100));
                        }
                    } elseif ($discount == $discount) {
                        $gt = $tarif - ($tarif * $discount / 100);
                    } else {
                        $gt = $tarif;
                    }
                }
                $kode_header = $this->createOrderHeader();

                if ($kp == 'P01') {
                    if ($ku == '2') {
                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $request->norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSet['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => '1002',
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSet['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'kode_unit' => '3002',
                            'kode_tipe_transaksi' => 2,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexlab as $arr) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $arr['kodelayanan'],
                                'total_tarif' => $arr['tarif'],
                                'jumlah_layanan' => $arr['qty'],
                                'diskon_dokter' => $arr['disc'],
                                'cyto' => $arr['cyto'],
                                'total_layanan' => $arr['tarif'],
                                'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    } else {

                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $request->norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSet['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => '1002',
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSet['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'kode_unit' => '3002',
                            'kode_tipe_transaksi' => 1,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexlab as $arr) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $arr['kodelayanan'],
                                'total_tarif' => $arr['tarif'],
                                'jumlah_layanan' => $arr['qty'],
                                'diskon_dokter' => $arr['disc'],
                                'cyto' => $arr['cyto'],
                                'total_layanan' => $arr['tarif'],
                                'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    }
                } else {
                    $data_layanan_header = [
                        'kode_layanan_header' => $kode_header,
                        'tgl_entry' => $now,
                        'tgl_periksa' => $now,
                        'no_rm' => $request->norm,
                        'kode_kunjungan' => $request->kj,
                        'qty_header' => $dataSet['qty'],
                        'keterangan' => 'PENDING',
                        'unit_pengirim' => '1002',
                        'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                        'dok_kirim' => $kp,
                        'total_layanan' => $gt,
                        'tagihan_pribadi' => $gt,
                        'diskon_global' => $dataSet['disc'],
                        'status_pembayaran' => $sp,
                        'status_layanan' => 2,
                        'kode_unit' => '3002',
                        'kode_tipe_transaksi' => 2,
                        'kode_penjaminx' => $request->kp,
                        'pic' => $user,
                    ];

                    $head = ts_layanan_header_igd::create($data_layanan_header);
                    $id_detail = $this->createLayanandetail();
                    foreach ($arrayindexlab as $arr) {
                        $savedetail = [
                            'id_layanan_detail' => $id_detail,
                            'kode_layanan_header' => $kode_header,
                            'kode_tarif_detail' =>  $arr['kodelayanan'],
                            'total_tarif' => $arr['tarif'],
                            'jumlah_layanan' => $arr['qty'],
                            'diskon_dokter' => $arr['disc'],
                            'cyto' => $arr['cyto'],
                            'total_layanan' => $arr['tarif'],
                            'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                            'status_layanan_detail' => 'OPN',
                            'tgl_layanan_detail' => $now,
                            'tagihan_penjamin' => $gt,
                            'tgl_layanan_detail_2' => $now,
                            'row_id_header' => $head['id']
                        ];

                        $ts_layanan_detail = ts_layanan_detail_igd::create($savedetail);
                    }
                }
                $kode_header = $ts_layanan_detail['kode_layanan_header'];
                $idhed = $ts_layanan_detail['row_id_header'];
                $update = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd SET status_order = 2 WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $request->norm]);
                $updatediag = DB::connection('mysql2')->select('UPDATE di_pasien_diagnosa_frunit SET diag_00 = ? WHERE kode_kunjungan = ? AND no_rm = ?', [$request->diagnosa, $request->kode_kunjungan, $request->norm]);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }

        // radiologi

        try {


            $datarad = json_decode($_POST['datarad'], true);

            if ($datarad == null) {
            } else {
                foreach ($datarad as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSetr[$index] = $value;
                    if ($index == 'cyto') {
                        $arrayindexrad[] = $dataSetr;
                    }
                }

                $sum = 0;

                foreach ($arrayindexrad as $arr) {
                    $discount = $arr['disc'];
                    $cyto = $arr['cyto'];
                    $trf = array($arr['tarif']);
                    $tarif =
                        $sum += array_sum($trf);
                    if ($cyto == 1) {
                        if ($discount == $discount) {
                            $a = $tarif + ($tarif * (50 / 100));

                            $gt = $a - ($a * $discount / 100);
                        } else {
                            $gt = $tarif + ($tarif * (50 / 100));
                        }
                    } elseif ($discount == $discount) {
                        $gt = $tarif - ($tarif * $discount / 100);
                    } else {
                        $gt = $tarif;
                    }
                }
                $kode_header = $this->createOrderHeaderrad();

                if ($kp == 'P01') {
                    if ($ku == '2') {
                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $request->norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSetr['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => '1002',
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSetr['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'kode_unit' => '3003',
                            'kode_tipe_transaksi' => 2,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexrad as $arr) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $arr['kodelayanan'],
                                'total_tarif' => $arr['tarif'],
                                'jumlah_layanan' => $arr['qty'],
                                'diskon_dokter' => $arr['disc'],
                                'cyto' => $arr['cyto'],
                                'total_layanan' => $arr['tarif'],
                                'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    } else {

                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $request->norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSetr['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => '1002',
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSetr['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'kode_unit' => '3003',
                            'kode_tipe_transaksi' => 1,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexrad as $arr) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $arr['kodelayanan'],
                                'total_tarif' => $arr['tarif'],
                                'jumlah_layanan' => $arr['qty'],
                                'diskon_dokter' => $arr['disc'],
                                'cyto' => $arr['cyto'],
                                'total_layanan' => $arr['tarif'],
                                'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    }
                } else {
                    $data_layanan_header = [
                        'kode_layanan_header' => $kode_header,
                        'tgl_entry' => $now,
                        'tgl_periksa' => $now,
                        'no_rm' => $request->norm,
                        'kode_kunjungan' => $request->kj,
                        'qty_header' => $dataSetr['qty'],
                        'keterangan' => 'PENDING',
                        'unit_pengirim' => '1002',
                        'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                        'dok_kirim' => $kp,
                        'total_layanan' => $gt,
                        'tagihan_pribadi' => $gt,
                        'diskon_global' => $dataSetr['disc'],
                        'status_pembayaran' => $sp,
                        'status_layanan' => 2,
                        'kode_unit' => '3003',
                        'kode_tipe_transaksi' => 2,
                        'kode_penjaminx' => $request->kp,
                        'pic' => $user,
                    ];

                    $head = ts_layanan_header_igd::create($data_layanan_header);
                    $id_detail = $this->createLayanandetail();
                    foreach ($arrayindexrad as $arr) {
                        $savedetail = [
                            'id_layanan_detail' => $id_detail,
                            'kode_layanan_header' => $kode_header,
                            'kode_tarif_detail' =>  $arr['kodelayanan'],
                            'total_tarif' => $arr['tarif'],
                            'jumlah_layanan' => $arr['qty'],
                            'diskon_dokter' => $arr['disc'],
                            'cyto' => $arr['cyto'],
                            'total_layanan' => $arr['tarif'],
                            'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                            'status_layanan_detail' => 'OPN',
                            'tgl_layanan_detail' => $now,
                            'tagihan_penjamin' => $gt,
                            'tgl_layanan_detail_2' => $now,
                            'row_id_header' => $head['id']
                        ];

                        $ts_layanan_detail = ts_layanan_detail_igd::create($savedetail);
                    }
                }
                $kode_header = $ts_layanan_detail['kode_layanan_header'];
                $idhed = $ts_layanan_detail['row_id_header'];
                $update = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd SET status_order = 2
                WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $request->norm]);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }

        // tindakan dpjp
        try {
            $tindakandpjp = json_decode($_POST['tindakandpjp'], true);
            if ($tindakandpjp == null) {
            } else {
                // dd($tindakandpjp);
                foreach ($tindakandpjp as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSet[$index] = $value;
                    if ($index == 'talaksanadpjp') {
                        $tindakan[] = $dataSet;
                    }
                }
                // $id_detail = $this->createLayanandetail();
                foreach ($tindakan as $arrr) {
                    $savedetail = [
                        // 'kode_detail_obat' => $id_detail,
                        'no_rm' => $norm,
                        'kode_kunjungan' => $kj,
                        'kode_unit' => '1002',
                        'kode_paramedis' => $arrr['kode_dpjp'],
                        'tindakan_kedokteran' => $arrr['talaksanadpjp'],
                        'tgl_input' => $now,
                        'status' => 1

                    ];
                    $tindakandpjpdetail = erm_tindakan_kedokteran::create($savedetail);
                }
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }



        // rekonobat
        try {

            $rekobat = json_decode($_POST['rekobat'], true);
            if ($rekobat == null) {
            } else {
                foreach ($rekobat as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSet[$index] = $value;
                    if ($index == 'kodetail') {
                        $obatrekon[] = $dataSet;
                    }
                }
                foreach ($obatrekon as $arr) {
                    $savedetail = $arr['tinjut'];
                    $kodetail = $arr['kodetail'];


                    $rekonsiliasiobat = DB::connection('mysql2')->select('UPDATE rekonsiliasi_obat SET lanjut = ? WHERE kode_detail_obat = ? ', [$savedetail, $kodetail]);
                    // dd($rekonsiliasiobat);
                }
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        //triase
        try {

            $triase = ts_triase::create([
                'no_rm' => $norm,
                'kode_kunjungan' => $kj,
                'kategori_triase' => $request->kategoritriase,
                'pemeriksaan_triase' => $request->jenisats,
                'kesadaran1' => $request->kesadaran1,
                'kesadaran2' => $request->kesadaran2,
                'kesadaran3' => $request->kesadaran3,
                'kesadaran4' => $request->kesadaran4,
                'kesadaran5' => $request->kesadaran5,
                'kesadaran6' => $request->kesadaran6,
                'kesadaran7' => $request->kesadaran7,
                'kesadaran8' => $request->kesadaran8,
                'kesadaran9' => $request->kesadaran9,
                'kesadaran10' => $request->kesadaran10,
                'kesadaran11' => $request->kesadaran11,
                'kesadaran12' => $request->kesadaran12,
                'jalan_nafas1' => $request->jalannafas1,
                'jalan_nafas2' => $request->jalannafas2,
                'jalan_nafas3' => $request->jalannafas3,
                'jalan_nafas4' => $request->jalannafas4,
                'jalan_nafas5' => $request->jalannafas5,
                'upaya1' => $request->upaya1,
                'upaya2' => $request->upaya2,
                'upaya3' => $request->upaya3,
                'upaya4' => $request->upaya4,
                'upaya5' => $request->upaya5,
                'upaya6' => $request->upaya6,
                'upaya7' => $request->upaya7,
                'upaya8' => $request->upaya8,
                'sirkulasi1' => $request->sirkulasi1,
                'sirkulasi2' => $request->sirkulasi2,
                'sirkulasi3' => $request->sirkulasi3,
                'sirkulasi4' => $request->sirkulasi4,
                'sirkulasi5' => $request->sirkulasi5,
                'sirkulasi6' => $request->sirkulasi6,
                'sirkulasi7' => $request->sirkulasi7,
                'sirkulasi8' => $request->sirkulasi8,
                'sirkulasi9' => $request->sirkulasi9,
                'sirkulasi10' => $request->sirkulasi10,
                'sirkulasi11' => $request->sirkulasi11,
                'sirkulasi12' => $request->sirkulasi12,
                'sirkulasi13' => $request->sirkulasi13,
                'sirkulasi14' => $request->sirkulasi14,
                'sirkulasi15' => $request->sirkulasi15,
                'sirkulasi16' => $request->sirkulasi16,
                'sirkulasi17' => $request->sirkulasi17,
                'sirkulasi18' => $request->sirkulasi18,
                'sirkulasi19' => $request->sirkulasi19,
                'sirkulasi20' => $request->sirkulasi20,
                'sirkulasi21' => $request->sirkulasi21,
                'sirkulasi22' => $request->sirkulasi22,
                'sirkulasi23' => $request->sirkulasi23,
                'sirkulasi24' => $request->sirkulasi24,
                'sirkulasi25' => $request->sirkulasi25,
                'gejala_respirasi1' => $request->gejala1,
                'gejala_respirasi2' => $request->gejala2,
                'gejala_respirasi3' => $request->gejala3,
                'gejala_respirasi4' => $request->gejala4,
                'gejala_respirasi5' => $request->gejala5,
                'gejala_respirasi6' => $request->gejala6,
                'gejala_respirasi7' => $request->gejala7,
                'gejala_respirasi8' => $request->gejala8,
                'gejala_respirasi9' => $request->gejala9,
                'gejala_respirasi10' => $request->gejala10,
                'gejala_respirasi11' => $request->gejala11,
                'gejala_respirasi12' => $request->gejala12,
                'gejala_respirasi13' => $request->gejala13,
                'gejala_respirasi14' => $request->gejala14,
                'gejala_respirasi15' => $request->gejala15,
                'gejala_respirasi16' => $request->gejala16,
                'gejala_respirasi17' => $request->gejala17,
                'gejala_respirasi18' => $request->gejala18,
                'gejala_respirasi19' => $request->gejala19,
                'gejala_respirasi20' => $request->gejala20,
                'gejala_respirasi21' => $request->gejala21,
                'gejala_respirasi22' => $request->gejala22,
                'gejala_respirasi23' => $request->gejala23,
                'gejala_respirasi24' => $request->gejala24,
                'gejala_respirasi25' => $request->gejala25,
                'gejala_respirasi26' => $request->gejala26,
                'gejala_respirasi27' => $request->gejala27,
                'gejala_respirasi28' => $request->gejala28,
                'gejala_respirasi29' => $request->gejala29,
                'tgl_masuk_triase' => $now,
                'kode_paramedis_update' => $kp,
                'jenis_triase' => $request->jenistriase,
                'penandaan_gambar' => $request->gambar1,
                'nama_dokter_update' => $name,
                'tg_entri_triase_update' => $now,
                'status' => 2

            ]);

            $update = DB::connection('mysql2')->select('UPDATE ts_triase
              SET status = 3
              WHERE status = 1 AND no_rm = ? AND kode_kunjungan = ? ', [$norm, $kj]);
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }

        //tindakan GP
        try {
            $tindakangp = json_decode($_POST['tindakangp'], true);


            if ($tindakangp == null) {
            } else {
                foreach ($tindakangp as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataGP[$index] = $value;
                    if ($index == 'kode_dpjp') {
                        $arrayindexgp[] = $dataGP;
                    }
                }
                $sum = 0;
                foreach ($arrayindexgp as $gp) {
                    $discount = 0;
                    $cyto = 0;
                    $trf = array($gp['tarif']);
                    $tarif =
                        $sum += array_sum($trf);
                    if ($cyto == 1) {
                        if ($discount == $discount) {
                            $a = $tarif + ($tarif * (50 / 100));

                            $gt = $a - ($a * $discount / 100);
                        } else {
                            $gt = $tarif + ($tarif * (50 / 100));
                        }
                    } elseif ($discount == $discount) {
                        $gt = $tarif - ($tarif * $discount / 100);
                    } else {
                        $gt = $tarif;
                    }
                }
                $kode_headergp = $this->createOrderHeadergp();
                if ($kp == 'P01') {
                    if ($ku == '2') {
                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_headergp,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $request->norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataGP['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => 0,
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'status_order' => 1,
                            'kode_unit' => '1002',
                            'kode_tipe_transaksi' => 2,
                            'kode_penjaminx' => $request->kp,
                            // 'pic' => $user,
                        ];

                        $head = ts_layanan_header_igd::create($data_layanan_header);

                        $id_detail = $this->createLayanandetailgp();
                        foreach ($arrayindexgp as $gp) {
                            $savedetailgp = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_headergp,
                                'kode_tarif_detail' =>  $gp['kodelayanan'],
                                'total_tarif' => $gp['tarif'],
                                'kode_dokter1' => $gp['kode_dpjp'],

                                'jumlah_layanan' => $gp['qty'],
                                'diskon_dokter' => 0,
                                'cyto' => 0,
                                'total_layanan' => $gp['tarif'],
                                'grantotal_layanan' => $gp['tarif'] * $gp['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];

                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetailgp);
                        }
                    } else {

                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_headergp,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $request->norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataGP['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => 0,
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'status_order' => 1,
                            'kode_unit' => '1002',
                            'kode_tipe_transaksi' => 1,
                            'kode_penjaminx' => $request->kp,
                            // 'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);


                        $id_detail = $this->createLayanandetailgp();
                        foreach ($arrayindexgp as $gp) {
                            $savedetailgp = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_headergp,
                                'kode_tarif_detail' =>  $gp['kodelayanan'],
                                'total_tarif' => $gp['tarif'],
                                'jumlah_layanan' => $gp['qty'],
                                'diskon_dokter' => 0,
                                'kode_dokter1' => $gp['kode_dpjp'],

                                'cyto' => 0,
                                'total_layanan' => $gp['tarif'],
                                'grantotal_layanan' => $gp['tarif'] * $gp['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];

                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetailgp);
                        }
                    }
                } else {
                    $data_layanan_header = [
                        'kode_layanan_header' => $kode_headergp,
                        'tgl_entry' => $now,
                        'tgl_periksa' => $now,
                        'no_rm' => $request->norm,
                        'kode_kunjungan' => $request->kj,
                        'qty_header' => $dataGP['qty'],
                        'keterangan' => 'PENDING',
                        'unit_pengirim' => $unit,
                        'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                        'dok_kirim' => $kp,
                        'total_layanan' => $gt,
                        'tagihan_pribadi' => $gt,
                        'diskon_global' => 0,
                        'status_pembayaran' => $sp,
                        'status_layanan' => 2,
                        'status_order' => 1,
                        'kode_unit' => '1002',
                        'kode_tipe_transaksi' => 2,
                        'kode_penjaminx' => $request->kp,
                        // 'pic' => $user,
                    ];

                    $head = ts_layanan_header_igd::create($data_layanan_header);


                    $id_detail = $this->createLayanandetailgp();
                    foreach ($arrayindexgp as $gp) {
                        $savedetailgp = [
                            'id_layanan_detail' => $id_detail,
                            'kode_layanan_header' => $kode_headergp,
                            'kode_tarif_detail' =>  $gp['kodelayanan'],
                            'total_tarif' => $gp['tarif'],
                            'jumlah_layanan' => $gp['qty'],
                            'kode_dokter1' => $gp['kode_dpjp'],

                            'diskon_dokter' => 0,
                            'cyto' => 0,
                            'total_layanan' => $gp['tarif'],
                            'grantotal_layanan' => $gp['tarif'] * $gp['qty'],
                            'status_layanan_detail' => 'OPN',
                            'tgl_layanan_detail' => $now,
                            'tagihan_penjamin' => $gt,
                            'tgl_layanan_detail_2' => $now,
                            'row_id_header' => $head['id']
                        ];

                        $ts_layanan_detail = ts_layanan_detail_igd::create($savedetailgp);
                    }
                }
                $kode_header = $ts_layanan_detail['kode_layanan_header'];
                $idhed = $ts_layanan_detail['row_id_header'];
                $update = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd SET status_order = 2 WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $request->norm]);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        // try {

        //     $updatriase = DB::connection('mysql2')->select('UPDATE ts_triase SET kode_paramedis_update = ?, jenis_triase = ?, tg_entri_triase_update = ?,klasifikasi_pasien = ?,kategori_triase = ?,pemeriksaan_triase = ?, kesadaran1 = ?,kesadaran2 = ?, kesadaran3 = ?, kesadaran4 = ?,kesadaran5 = ?, kesadaran6 = ?,kesadaran8 = ?,kesadaran9 = ?,kesadaran10 = ?,kesadaran11 = ?,kesadaran12 = ?,jalan_nafas1 = ?,jalan_nafas2 = ?,jalan_nafas3 = ?,jalan_nafas4 = ?,jalan_nafas5 = ?,upaya1 = ?,upaya2 = ?,upaya3 = ?,upaya4 = ?,upaya5 = ?,upaya6 = ?,upaya7 = ?,upaya8 = ?,sirkulasi1 = ?,sirkulasi2 = ?,sirkulasi3 = ?,sirkulasi4 = ?,sirkulasi5 = ?,sirkulasi6 = ?,sirkulasi7 = ?,sirkulasi8 = ?,sirkulasi9 = ?,sirkulasi10 = ?,sirkulasi11 = ?,sirkulasi12 = ?,sirkulasi13 = ?,sirkulasi14 = ?,sirkulasi15 = ?,sirkulasi16 = ?,sirkulasi17 = ?,sirkulasi18 = ?,sirkulasi20 = ?,sirkulasi21 = ?,sirkulasi22 = ?,sirkulasi23 = ?,sirkulasi24 = ?,sirkulasi25 = ?,gejala_respirasi1  = ?,gejala_respirasi2  = ?,gejala_respirasi3  = ?,gejala_respirasi4  = ?,gejala_respirasi5  = ?,gejala_respirasi7  = ?,gejala_respirasi8  = ?,gejala_respirasi9  = ?,gejala_respirasi10 = ?,gejala_respirasi11 = ?,gejala_respirasi12 = ?,gejala_respirasi13 = ?,gejala_respirasi14 = ?,gejala_respirasi15 = ?,gejala_respirasi16 = ?,gejala_respirasi17 = ?,gejala_respirasi18 = ?,gejala_respirasi19 = ?,gejala_respirasi20 = ?,gejala_respirasi21 = ?,gejala_respirasi22 = ?,gejala_respirasi23 = ?,gejala_respirasi24 = ?,gejala_respirasi25 = ?,gejala_respirasi26 = ?,gejala_respirasi27 = ?,gejala_respirasi28 = ?,gejala_respirasi29 = ?,status = 2 WHERE kode_kunjungan = 22495703', [$kp, $request->jenistriase, $dt, $request->klasifikasipasien, $request->kategoritriase, $request->jenisats, $request->kesadaran1, $request->kesadaran2, $request->kesadaran3, $request->kesadaran4, $request->kesadaran5, $request->kesadaran6, $request->kesadaran7, $request->kesadaran8, $request->kesadaran9, $request->kesadaran10, $request->kesadaran11, $request->kesadaran12, $request->jalannafas1, $request->jalannafas2, $request->jalannafas3, $request->jalannafas4, $request->jalannafas5, $request->upaya1, $request->upaya2, $request->upaya3, $request->upaya4, $request->upaya5, $request->upaya6, $request->upaya7, $request->upaya8, $request->sirkulasi1, $request->sirkulasi2, $request->sirkulasi3, $request->sirkulasi4, $request->sirkulasi5, $request->sirkulasi6, $request->sirkulasi7, $request->sirkulasi8, $request->sirkulasi9, $request->sirkulasi10, $request->sirkulasi11, $request->sirkulasi12, $request->sirkulasi13, $request->sirkulasi14, $request->sirkulasi15, $request->sirkulasi16, $request->sirkulasi17, $request->sirkulasi18, $request->sirkulasi19, $request->sirkulasi20, $request->sirkulasi21, $request->sirkulasi22, $request->sirkulasi23, $request->sirkulasi24, $request->sirkulasi25, $request->gejala1, $request->gejala2, $request->gejala3, $request->gejala4, $request->gejala5, $request->gejala6, $request->gejala7, $request->gejala8, $request->gejala9, $request->gejala10, $request->gejala11, $request->gejala12, $request->gejala13, $request->gejala14, $request->gejala15, $request->gejala16, $request->gejala17, $request->gejala18, $request->gejala19, $request->gejala20, $request->gejala21, $request->gejala22, $request->gejala23, $request->gejala24, $request->gejala25, $request->gejala26, $request->gejala27, $request->gejala28, $request->gejala29, $request->kj]);
        //     dd($updatriase);


        //     // $updatee = DB::connection('mysql2')->select('UPDATE ts_kunjungan SET diagx = ? WHERE no_rm = ? AND kode_kunjungan = ?', [$request->anamnesa, $norm, $kj]);
        // } catch (\Exception $e) {
        //     $back = [
        //         'kode' => 200,
        //         'message' => $e->getMessage()
        //     ];
        //     echo json_encode($back);
        //     die;
        // }

        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }

    public function updateassesdokbid(Request $request)
    {

        $a = $request->all();
        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;
        $subyektif = $request->subject;
        $assesment = $request->assesmen;
        $planning = $request->planning;
        $tiga_pertama = $request->tigap;
        $tiga_kedua = $request->tigak;
        $primary = $request->primary;
        $secondary = $request->secondary;
        $diagnosa = $request->diagnosa;
        $diagnosa = $request->diagnosa;
        $ku = $request->ku;
        $kj = $request->kj;
        $norm = $request->norm;

        $unit = auth()->user()->unit;
        $name = auth()->user()->nama;

        $dt = Carbon::now()->timezone('Asia/Jakarta');
        $date = $dt->toDateString();
        $time = $dt->toTimeString();
        $now = Carbon::now();
        $sp = 'OPN';
        $kp = auth()->user()->kode_paramedis;
        $kondisi = $request->kopul;
        $jenispasien = $request->alpul;
        //jenis pasien
        if ($jenispasien == 'Pasien Anak') {
            $jenispasien = '1';
        } elseif ($jenispasien == 'Pasien Bedah') {
            $jenispasien = '2';
        } elseif ($jenispasien == 'Pasien Non Bedah') {
            $jenispasien = '3';
        } elseif ($jenispasien == 'Pasien Psikomatic') {
            $jenispasien = '4';
        } elseif ($jenispasien == 'Pasien Kebidanan') {
            $jenispasien = '5';
        } else {
            $jenispasien = '0';
        }

        //kondisi
        if ($kondisi == 'Dirawat') {
            $kondisi = '1';
        } elseif ($kondisi == 'BATAL DIRAWAT') {
            $kondisi = '3';
        } else {
            $kondisi = '0';
        }

        //assesmentdokter
        try {

            $cekd = DB::connection('mysql2')->select('SELECT status FROM erm_cppt_dokter_kebidanan WHERE no_rm = ? AND kode_kunjungan = ? AND status = 1', [$norm, $kj]);
            if ($cekd[0]->status == 1) {
                $cekd = DB::connection('mysql2')->select('UPDATE erm_cppt_dokter_kebidanan SET status = "3"  WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);

                $assesmen = erm_cppt_dokter_kebidanan::create([
                    'ku' => $request->ku,
                    'keluhan_utama' => $request->subject,
                    'pemfis' => $request->pemfis,
                    'tfu' => $request->tfu,
                    'tbj' => $request->tbj,
                    'his' => $request->his,
                    'djj' => $request->djj,
                    'kontraksi' => $request->kontraksi,
                    'inspeksi' => $request->inspeksi,
                    'inspekulo' => $request->inspekulo,
                    'vt' => $request->vt,
                    'rt' => $request->rt,
                    'promontorium' => $request->promontorium,
                    'Linea' => $request->Linea,
                    'Dinding' => $request->Dinding,
                    'Spina' => $request->Spina,
                    'Distansia' => $request->Distansia,
                    'Interspinarum' => $request->Interspinarum,
                    'SAKRUM' => $request->SAKRUM,
                    'Arkus' => $request->Arkus,
                    'Kesan' => $request->Kesan,
                    'imbang' => $request->imbang,
                    'namadpjp' => $request->namadpjp,
                    'kodedpjp' => $request->kodedpjp,
                    'diagnosis' => $request->diagnosis,
                    'planning' => $request->planning,
                    'norm' => $request->norm,
                    'kj' => $request->kj,
                    'kp' => $request->kp,
                    'counter' => $request->counter,
                    'cara_pulang' => $request->alpul . $request->alpul1,
                    'keadaan_pulang' => $request->kopul . $request->kopul1,
                    'id_cppt_dokter' => $user,
                    'tgl_kunjungan' => $request->tglmasuk,
                    'tgl_input' => $now,
                    'kode_unit' => $unit,
                    'kode_kunjungan' => $request->kj,
                    'no_rm' => $request->norm,
                    'sumber_data' => $request->sumberdata,
                    'macam_kasus' => $request->macamkasus,
                    'keluhan_utama' => $request->subject,
                    'trauma' => $request->trauma,
                    'id_cppt_dokter' => $user,
                    'kode_paramedis_2' => $kp,
                    'nama_paramedis2' => $name,
                    'is_ranap' => $kondisi,
                    'status' => '1'

                ]);
                // dd($assesmen);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        //laboratorium
        try {
            $datalab = json_decode($_POST['datalab'], true);
            if ($datalab == null) {
            } else {
                foreach ($datalab as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSet[$index] = $value;
                    if ($index == 'cyto') {
                        $arrayindexlab[] = $dataSet;
                    }
                }
                $sum = 0;
                foreach ($arrayindexlab as $arr) {
                    $discount = $arr['disc'];
                    $cyto = $arr['cyto'];
                    $trf = array($arr['tarif']);
                    $tarif =
                        $sum += array_sum($trf);
                    if ($cyto == 1) {
                        if ($discount == $discount) {
                            $a = $tarif + ($tarif * (50 / 100));

                            $gt = $a - ($a * $discount / 100);
                        } else {
                            $gt = $tarif + ($tarif * (50 / 100));
                        }
                    } elseif ($discount == $discount) {
                        $gt = $tarif - ($tarif * $discount / 100);
                    } else {
                        $gt = $tarif;
                    }
                }
                $kode_header = $this->createOrderHeader();
                if ($kp == 'P01') {
                    if ($ku == '2') {
                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $request->norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSet['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSet['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'status_order' => 1,
                            'kode_unit' => '3002',
                            'kode_tipe_transaksi' => 2,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexlab as $arr) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $arr['kodelayanan'],
                                'total_tarif' => $arr['tarif'],
                                'jumlah_layanan' => $arr['qty'],
                                'diskon_dokter' => $arr['disc'],
                                'cyto' => $arr['cyto'],
                                'total_layanan' => $arr['tarif'],
                                'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    } else {

                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $request->norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSet['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSet['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'status_order' => 1,
                            'kode_unit' => '3002',
                            'kode_tipe_transaksi' => 1,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexlab as $arr) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $arr['kodelayanan'],
                                'total_tarif' => $arr['tarif'],
                                'jumlah_layanan' => $arr['qty'],
                                'diskon_dokter' => $arr['disc'],
                                'cyto' => $arr['cyto'],
                                'total_layanan' => $arr['tarif'],
                                'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    }
                } else {
                    $data_layanan_header = [
                        'kode_layanan_header' => $kode_header,
                        'tgl_entry' => $now,
                        'tgl_periksa' => $now,
                        'no_rm' => $request->norm,
                        'kode_kunjungan' => $request->kj,
                        'qty_header' => $dataSet['qty'],
                        'keterangan' => 'PENDING',
                        'unit_pengirim' => $unit,
                        'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                        'dok_kirim' => $kp,
                        'total_layanan' => $gt,
                        'tagihan_pribadi' => $gt,
                        'diskon_global' => $dataSet['disc'],
                        'status_pembayaran' => $sp,
                        'status_layanan' => 2,
                        'status_order' => 1,
                        'kode_unit' => '3002',
                        'kode_tipe_transaksi' => 2,
                        'kode_penjaminx' => $request->kp,
                        'pic' => $user,
                    ];

                    $head = ts_layanan_header_igd::create($data_layanan_header);
                    $id_detail = $this->createLayanandetail();
                    foreach ($arrayindexlab as $arr) {
                        $savedetail = [
                            'id_layanan_detail' => $id_detail,
                            'kode_layanan_header' => $kode_header,
                            'kode_tarif_detail' =>  $arr['kodelayanan'],
                            'total_tarif' => $arr['tarif'],
                            'jumlah_layanan' => $arr['qty'],
                            'diskon_dokter' => $arr['disc'],
                            'cyto' => $arr['cyto'],
                            'total_layanan' => $arr['tarif'],
                            'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                            'status_layanan_detail' => 'OPN',
                            'tgl_layanan_detail' => $now,
                            'tagihan_penjamin' => $gt,
                            'tgl_layanan_detail_2' => $now,
                            'row_id_header' => $head['id']
                        ];

                        $ts_layanan_detail = ts_layanan_detail_igd::create($savedetail);
                    }
                }
                $kode_header = $ts_layanan_detail['kode_layanan_header'];
                $idhed = $ts_layanan_detail['row_id_header'];
                // $update = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd SET status_order = 2 WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $request->norm]);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        //radiologi
        try {
            $datarad = json_decode($_POST['datarad'], true);

            if ($datarad == null) {
            } else {
                foreach ($datarad as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSetr[$index] = $value;
                    if ($index == 'cyto') {
                        $arrayindexr[] = $dataSetr;
                    }
                }
                $sum = 0;
                foreach ($arrayindexr as $rad) {
                    $discount = $rad['disc'];
                    $cyto = $rad['cyto'];
                    $trf = array($rad['tarif']);
                    $tarif =
                        $sum += array_sum($trf);
                    if ($cyto == 1) {
                        if ($discount == $discount) {
                            $a = $tarif + ($tarif * (50 / 100));

                            $gt = $a - ($a * $discount / 100);
                        } else {
                            $gt = $tarif + ($tarif * (50 / 100));
                        }
                    } elseif ($discount == $discount) {
                        $gt = $tarif - ($tarif * $discount / 100);
                    } else {
                        $gt = $tarif;
                    }
                }
                $kode_header = $this->createOrderHeaderrad();

                if ($kp == 'P01') {
                    if ($ku == '2') {
                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSetr['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSetr['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'kode_unit' => '3003',
                            'kode_tipe_transaksi' => 2,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexr as $rad) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $rad['kodelayanan'],
                                'total_tarif' => $rad['tarif'],
                                'jumlah_layanan' => $rad['qty'],
                                'diskon_dokter' => $rad['disc'],
                                'cyto' => $rad['cyto'],
                                'total_layanan' => $rad['tarif'],
                                'grantotal_layanan' => $rad['tarif'] * $rad['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    } else {

                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSetr['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSetr['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'kode_unit' => '3003',
                            'kode_tipe_transaksi' => 1,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexr as $rad) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $rad['kodelayanan'],
                                'total_tarif' => $rad['tarif'],
                                'jumlah_layanan' => $rad['qty'],
                                'diskon_dokter' => $rad['disc'],
                                'cyto' => $rad['cyto'],
                                'total_layanan' => $rad['tarif'],
                                'grantotal_layanan' => $rad['tarif'] * $rad['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    }
                } else {
                    $data_layanan_header = [
                        'kode_layanan_header' => $kode_header,
                        'tgl_entry' => $now,
                        'tgl_periksa' => $now,
                        'no_rm' => $norm,
                        'kode_kunjungan' => $request->kj,
                        'qty_header' => $dataSetr['qty'],
                        'keterangan' => 'PENDING',
                        'unit_pengirim' => $unit,
                        'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                        'dok_kirim' => $kp,
                        'total_layanan' => $gt,
                        'tagihan_pribadi' => $gt,
                        'diskon_global' => $dataSetr['disc'],
                        'status_pembayaran' => $sp,
                        'status_layanan' => 2,
                        'kode_unit' => '3003',
                        'kode_tipe_transaksi' => 2,
                        'kode_penjaminx' => $request->kp,
                        'pic' => $user,
                    ];

                    $head = ts_layanan_header_igd::create($data_layanan_header);
                    $id_detail = $this->createLayanandetail();
                    foreach ($arrayindexr as $rad) {
                        $savedetail = [
                            'id_layanan_detail' => $id_detail,
                            'kode_layanan_header' => $kode_header,
                            'kode_tarif_detail' =>  $rad['kodelayanan'],
                            'total_tarif' => $rad['tarif'],
                            'jumlah_layanan' => $rad['qty'],
                            'diskon_dokter' => $rad['disc'],
                            'cyto' => $rad['cyto'],
                            'total_layanan' => $rad['tarif'],
                            'grantotal_layanan' => $rad['tarif'] * $rad['qty'],
                            'status_layanan_detail' => 'OPN',
                            'tgl_layanan_detail' => $now,
                            'tagihan_penjamin' => $gt,
                            'tgl_layanan_detail_2' => $now,
                            'row_id_header' => $head['id']
                        ];

                        $ts_layanan_detail = ts_layanan_detail_igd::create($savedetail);
                    }
                }
                $kode_header = $ts_layanan_detail['kode_layanan_header'];
                $idhed = $ts_layanan_detail['row_id_header'];
                // $update = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd SET status_order = 2
                // WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $request->norm]);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        // rekonsiliasi obat
        try {

            $rekobat = json_decode($_POST['rekobat'], true);
            if ($rekobat == null) {
            } else {
                foreach ($rekobat as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSet[$index] = $value;
                    if ($index == 'kodetail') {
                        $arrayindex[] = $dataSet;
                    }
                }
                foreach ($arrayindex as $arr) {
                    $savedetail = $arr['tinjut'];
                    $kodetail = $arr['kodetail'];
                    $rekonsiliasiobat = DB::connection('mysql2')->select('UPDATE rekonsiliasi_obat SET lanjut = ? WHERE kode_detail_obat = ? ', [$savedetail, $kodetail]);
                }
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        //fr diagnosa      
        // try {

        //     $frunit = di_pasien_diagnosa_frunit::create([
        //         'no_rm' => $request->norm,
        //         'kode_unit' => $unit,
        //         'counter' => $request->counter,
        //         'kode_kunjungan' => $request->kj,
        //         'input_date' => $now,
        //         'kode_paramedis' => $kp,
        //         'diag_00' => $request->anamnesa,
        //         'tipe_pasien' => $jenispasien,
        //         'pic' => $user,
        //         'is_ranap' => $kondisi,
        //         'isSynch' => 0,
        //         'created_at' => $now,
        //         'status' => '1'

        //     ]);
        // } catch (\Exception $e) {
        //     $back = [
        //         'kode' => 200,
        //         'message' => $e->getMessage()
        //     ];
        //     echo json_encode($back);
        //     die;
        // }
        // tindakan dpjp
        try {
            $tindakandjp = json_decode($_POST['tindakandjp'], true);
            foreach ($tindakandjp as $nama) {
                $index = $nama['name'];
                $value = $nama['value'];
                $dataSet[$index] = $value;
                if ($index == 'talaksanadpjp') {
                    $tindakand[] = $dataSet;
                }
            }
            // $id_detail = $this->createLayanandetail();
            foreach ($tindakand as $arrr) {
                $savedetail = [
                    // 'kode_detail_obat' => $id_detail,
                    'no_rm' => $norm,
                    'kode_kunjungan' => $kj,
                    'kode_unit' => '1023',
                    'kode_paramedis' => $arrr['kode_dpjp'],
                    'tindakan_kedokteran' => $arrr['talaksanadpjp'],
                    'tgl_input' => $now,
                    'status' => 1

                ];
                $tindakandpjpdetail = erm_tindakan_kedokteran::create($savedetail);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        // $update = DB::connection('mysql2')->select('UPDATE ts_kunjungan
        //     SET diagx = ?, kode_paramedis = ?
        //     WHERE no_rm = ? AND kode_kunjungan = ?', [$diagnosa, $kp, $norm, $kj]);


        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function updateassesdokbidbay(Request $request)
    {
        $a = $request->all();
        $diagnosa = $request->anamnesa;
        $ku = $request->ku;
        $kj = $request->kj;
        $norm = $request->norm;
        $unit = auth()->user()->unit;
        $name = auth()->user()->nama;


        $dt = Carbon::now()->timezone('Asia/Jakarta');
        $date = $dt->toDateString();
        $time = $dt->toTimeString();
        $now = Carbon::now();
        $sp = 'OPN';
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;
        $kondisi = $request->kopul;
        $jenispasien = $request->alpul;
        //jenis pasien
        if ($jenispasien == 'Pasien Anak') {
            $jenispasien = '1';
        } elseif ($jenispasien == 'Pasien Bedah') {
            $jenispasien = '2';
        } elseif ($jenispasien == 'Pasien Non Bedah') {
            $jenispasien = '3';
        } elseif ($jenispasien == 'Pasien Psikomatic') {
            $jenispasien = '4';
        } elseif ($jenispasien == 'Pasien Kebidanan') {
            $jenispasien = '5';
        } else {
            $jenispasien = '0';
        }

        //kondisi
        if ($kondisi == 'Dirawat') {
            $kondisi = '1';
        } elseif ($kondisi == 'BATAL DIRAWAT') {
            $kondisi = '3';
        } else {
            $kondisi = '0';
        }

        //assesmen
        //assesmentdokter
        try {

            $cekd = DB::connection('mysql2')->select('SELECT status FROM erm_cppt_dokter_kebidanan WHERE no_rm = ? AND kode_kunjungan = ? AND status = 1', [$norm, $kj]);
            if ($cekd[0]->status == 1) {
                $cekd = DB::connection('mysql2')->select('UPDATE erm_cppt_dokter_kebidanan SET status = "3"  WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);

                $assesmen = erm_cppt_dokter_kebidanan::create([
                    'ku' => $request->ku,
                    'keluhan_utama' => $request->subject,
                    'pemfis' => $request->pemfis,

                    'namadpjp' => $request->namadpjp,
                    'kodedpjp' => $request->kodedpjp,
                    'diagnosis' => $request->diagnosa,
                    'planning' => $request->planning,
                    'norm' => $request->norm,
                    'kj' => $request->kj,
                    'kp' => $request->kp,
                    'counter' => $request->counter,
                    'cara_pulang' => $request->alpul . $request->alpul1,
                    'keadaan_pulang' => $request->kopul . $request->kopul1,
                    'id_cppt_dokter' => $user,
                    'tgl_kunjungan' => $request->tglmasuk,
                    'tgl_input' => $now,
                    'kode_unit' => $unit,
                    'kode_kunjungan' => $request->kj,
                    'no_rm' => $request->norm,
                    'sumber_data' => $request->sumberdata,
                    'macam_kasus' => $request->macamkasus,
                    'keluhan_utama' => $request->subject,
                    'trauma' => $request->trauma,
                    'id_cppt_dokter' => $user,
                    'kode_paramedis' => $kp,
                    'nama_paramedis' => $name,
                    'is_ranap' => $kondisi,
                    'status' => '1'

                ]);
                // dd($assesmen);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }

        //laboratorium
        try {
            $datalab = json_decode($_POST['datalab'], true);
            if ($datalab == null) {
            } else {
                foreach ($datalab as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSet[$index] = $value;
                    if ($index == 'cyto') {
                        $arrayindexlab[] = $dataSet;
                    }
                }
                $sum = 0;
                foreach ($arrayindexlab as $arr) {
                    $discount = $arr['disc'];
                    $cyto = $arr['cyto'];
                    $trf = array($arr['tarif']);
                    $tarif =
                        $sum += array_sum($trf);
                    if ($cyto == 1) {
                        if ($discount == $discount) {
                            $a = $tarif + ($tarif * (50 / 100));

                            $gt = $a - ($a * $discount / 100);
                        } else {
                            $gt = $tarif + ($tarif * (50 / 100));
                        }
                    } elseif ($discount == $discount) {
                        $gt = $tarif - ($tarif * $discount / 100);
                    } else {
                        $gt = $tarif;
                    }
                }
                $kode_header = $this->createOrderHeader();
                if ($kp == 'P01') {
                    if ($ku == '2') {
                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $request->norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSet['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSet['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'status_order' => 1,
                            'kode_unit' => '3002',
                            'kode_tipe_transaksi' => 2,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexlab as $arr) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $arr['kodelayanan'],
                                'total_tarif' => $arr['tarif'],
                                'jumlah_layanan' => $arr['qty'],
                                'diskon_dokter' => $arr['disc'],
                                'cyto' => $arr['cyto'],
                                'total_layanan' => $arr['tarif'],
                                'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    } else {

                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $request->norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSet['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSet['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'status_order' => 1,
                            'kode_unit' => '3002',
                            'kode_tipe_transaksi' => 1,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexlab as $arr) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $arr['kodelayanan'],
                                'total_tarif' => $arr['tarif'],
                                'jumlah_layanan' => $arr['qty'],
                                'diskon_dokter' => $arr['disc'],
                                'cyto' => $arr['cyto'],
                                'total_layanan' => $arr['tarif'],
                                'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    }
                } else {
                    $data_layanan_header = [
                        'kode_layanan_header' => $kode_header,
                        'tgl_entry' => $now,
                        'tgl_periksa' => $now,
                        'no_rm' => $request->norm,
                        'kode_kunjungan' => $request->kj,
                        'qty_header' => $dataSet['qty'],
                        'keterangan' => 'PENDING',
                        'unit_pengirim' => $unit,
                        'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                        'dok_kirim' => $kp,
                        'total_layanan' => $gt,
                        'tagihan_pribadi' => $gt,
                        'diskon_global' => $dataSet['disc'],
                        'status_pembayaran' => $sp,
                        'status_layanan' => 2,
                        'status_order' => 1,
                        'kode_unit' => '3002',
                        'kode_tipe_transaksi' => 2,
                        'kode_penjaminx' => $request->kp,
                        'pic' => $user,
                    ];

                    $head = ts_layanan_header_igd::create($data_layanan_header);
                    $id_detail = $this->createLayanandetail();
                    foreach ($arrayindexlab as $arr) {
                        $savedetail = [
                            'id_layanan_detail' => $id_detail,
                            'kode_layanan_header' => $kode_header,
                            'kode_tarif_detail' =>  $arr['kodelayanan'],
                            'total_tarif' => $arr['tarif'],
                            'jumlah_layanan' => $arr['qty'],
                            'diskon_dokter' => $arr['disc'],
                            'cyto' => $arr['cyto'],
                            'total_layanan' => $arr['tarif'],
                            'grantotal_layanan' => $arr['tarif'] * $arr['qty'],
                            'status_layanan_detail' => 'OPN',
                            'tgl_layanan_detail' => $now,
                            'tagihan_penjamin' => $gt,
                            'tgl_layanan_detail_2' => $now,
                            'row_id_header' => $head['id']
                        ];

                        $ts_layanan_detail = ts_layanan_detail_igd::create($savedetail);
                    }
                }
                $kode_header = $ts_layanan_detail['kode_layanan_header'];
                $idhed = $ts_layanan_detail['row_id_header'];
                // $update = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd SET status_order = 2 WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $request->norm]);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        //radiologi
        try {
            $datarad = json_decode($_POST['datarad'], true);

            if ($datarad == null) {
            } else {
                foreach ($datarad as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSetr[$index] = $value;
                    if ($index == 'cyto') {
                        $arrayindexr[] = $dataSetr;
                    }
                }
                $sum = 0;
                foreach ($arrayindexr as $rad) {
                    $discount = $rad['disc'];
                    $cyto = $rad['cyto'];
                    $trf = array($rad['tarif']);
                    $tarif =
                        $sum += array_sum($trf);
                    if ($cyto == 1) {
                        if ($discount == $discount) {
                            $a = $tarif + ($tarif * (50 / 100));

                            $gt = $a - ($a * $discount / 100);
                        } else {
                            $gt = $tarif + ($tarif * (50 / 100));
                        }
                    } elseif ($discount == $discount) {
                        $gt = $tarif - ($tarif * $discount / 100);
                    } else {
                        $gt = $tarif;
                    }
                }
                $kode_header = $this->createOrderHeaderrad();

                if ($kp == 'P01') {
                    if ($ku == '2') {
                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSetr['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSetr['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'kode_unit' => '3003',
                            'kode_tipe_transaksi' => 2,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexr as $rad) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $rad['kodelayanan'],
                                'total_tarif' => $rad['tarif'],
                                'jumlah_layanan' => $rad['qty'],
                                'diskon_dokter' => $rad['disc'],
                                'cyto' => $rad['cyto'],
                                'total_layanan' => $rad['tarif'],
                                'grantotal_layanan' => $rad['tarif'] * $rad['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    } else {

                        $data_layanan_header = [
                            'kode_layanan_header' => $kode_header,
                            'tgl_entry' => $now,
                            'tgl_periksa' => $now,
                            'no_rm' => $norm,
                            'kode_kunjungan' => $request->kj,
                            'qty_header' => $dataSetr['qty'],
                            'keterangan' => 'PENDING',
                            'unit_pengirim' => $unit,
                            'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                            'dok_kirim' => $kp,
                            'total_layanan' => $gt,
                            'tagihan_pribadi' => $gt,
                            'diskon_global' => $dataSetr['disc'],
                            'status_pembayaran' => $sp,
                            'status_layanan' => 1,
                            'kode_unit' => '3003',
                            'kode_tipe_transaksi' => 1,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindexr as $rad) {
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' =>  $rad['kodelayanan'],
                                'total_tarif' => $rad['tarif'],
                                'jumlah_layanan' => $rad['qty'],
                                'diskon_dokter' => $rad['disc'],
                                'cyto' => $rad['cyto'],
                                'total_layanan' => $rad['tarif'],
                                'grantotal_layanan' => $rad['tarif'] * $rad['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_pribadi' => $gt,
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail_igd = ts_layanan_detail_igd::create($savedetail);
                        }
                    }
                } else {
                    $data_layanan_header = [
                        'kode_layanan_header' => $kode_header,
                        'tgl_entry' => $now,
                        'tgl_periksa' => $now,
                        'no_rm' => $norm,
                        'kode_kunjungan' => $request->kj,
                        'qty_header' => $dataSetr['qty'],
                        'keterangan' => 'PENDING',
                        'unit_pengirim' => $unit,
                        'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                        'dok_kirim' => $kp,
                        'total_layanan' => $gt,
                        'tagihan_pribadi' => $gt,
                        'diskon_global' => $dataSetr['disc'],
                        'status_pembayaran' => $sp,
                        'status_layanan' => 2,
                        'kode_unit' => '3003',
                        'kode_tipe_transaksi' => 2,
                        'kode_penjaminx' => $request->kp,
                        'pic' => $user,
                    ];

                    $head = ts_layanan_header_igd::create($data_layanan_header);
                    $id_detail = $this->createLayanandetail();
                    foreach ($arrayindexr as $rad) {
                        $savedetail = [
                            'id_layanan_detail' => $id_detail,
                            'kode_layanan_header' => $kode_header,
                            'kode_tarif_detail' =>  $rad['kodelayanan'],
                            'total_tarif' => $rad['tarif'],
                            'jumlah_layanan' => $rad['qty'],
                            'diskon_dokter' => $rad['disc'],
                            'cyto' => $rad['cyto'],
                            'total_layanan' => $rad['tarif'],
                            'grantotal_layanan' => $rad['tarif'] * $rad['qty'],
                            'status_layanan_detail' => 'OPN',
                            'tgl_layanan_detail' => $now,
                            'tagihan_penjamin' => $gt,
                            'tgl_layanan_detail_2' => $now,
                            'row_id_header' => $head['id']
                        ];

                        $ts_layanan_detail = ts_layanan_detail_igd::create($savedetail);
                    }
                }
                $kode_header = $ts_layanan_detail['kode_layanan_header'];
                $idhed = $ts_layanan_detail['row_id_header'];
                // $update = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd SET status_order = 2
                // WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $request->norm]);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        // rekonsiliasi obat
        try {

            $rekobatt = json_decode($_POST['rekobat'], true);
            if ($rekobatt == null) {
            } else {
                foreach ($rekobatt as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSet[$index] = $value;
                    if ($index == 'kodetail') {
                        $obatindex[] = $dataSet;
                    }
                }
                foreach ($obatindex as $arr) {
                    $savedetail = $arr['tinjut'];
                    $kodetail = $arr['kodetail'];
                    $rekonsiliasiobat = DB::connection('mysql2')->select('UPDATE rekonsiliasi_obat SET lanjut = ? WHERE kode_detail_obat = ? ', [$savedetail, $kodetail]);
                }
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        //fr diagnosa      
        // try {

        //     $frunit = di_pasien_diagnosa_frunit::create([
        //         'no_rm' => $request->norm,
        //         'kode_unit' => $unit,
        //         'counter' => $request->counter,
        //         'kode_kunjungan' => $request->kj,
        //         'input_date' => $now,
        //         'kode_paramedis' => $kp,
        //         'diag_00' => $request->anamnesa,
        //         'tipe_pasien' => $jenispasien,
        //         'pic' => $user,
        //         'is_ranap' => $kondisi,
        //         'isSynch' => 0,
        //         'created_at' => $now,
        //         'status' => '1'

        //     ]);
        // } catch (\Exception $e) {
        //     $back = [
        //         'kode' => 200,
        //         'message' => $e->getMessage()
        //     ];
        //     echo json_encode($back);
        //     die;
        // }
        // tindakan dpjp
        try {
            $tindakanddjp = json_decode($_POST['tindakandjp'], true);
            foreach ($tindakanddjp as $nama) {
                $index = $nama['name'];
                $value = $nama['value'];
                $dataSet[$index] = $value;
                if ($index == 'talaksanadpjp') {
                    $tindakandd[] = $dataSet;
                }
            }
            // $id_detail = $this->createLayanandetail();
            foreach ($tindakandd as $arrr) {
                $savedetail = [
                    // 'kode_detail_obat' => $id_detail,
                    'no_rm' => $norm,
                    'kode_kunjungan' => $kj,
                    'kode_unit' => '1023',
                    'kode_paramedis' => $arrr['kode_dpjp'],
                    'tindakan_kedokteran' => $arrr['talaksanadpjp'],
                    'tgl_input' => $now,
                    'status' => 1

                ];
                $tindakandpjpdetail = erm_tindakan_kedokteran::create($savedetail);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        // $update = DB::connection('mysql2')->select('UPDATE ts_kunjungan
        //     SET diagx = ?, kode_paramedis = ?
        //     WHERE no_rm = ? AND kode_kunjungan = ?', [$diagnosa, $kp, $norm, $kj]);

        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function createOrderHeader()
    {
        $q = DB::select('SELECT id,kode_header,RIGHT(kode_header,6) AS kd_max  FROM mt_kode_order_header
        WHERE DATE(tgl_header) = CURDATE()
        ORDER BY id DESC
        LIMIT 1');
        $kd = "";
        if (count($q) > 0) {
            foreach ($q as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
            $kd = "000001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return 'LAB' . date('ymd') . $kd;
    }
    public function createOrderHeadergp()
    {
        $q = DB::connection('mysql2')->select('SELECT id,kode_header,RIGHT(kode_header,6) AS kd_max  FROM mt_kode_order_header
        WHERE DATE(tgl_header) = CURDATE()
        ORDER BY id DESC
        LIMIT 1');
        $kd = "";
        if (count($q) > 0) {
            foreach ($q as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
            $kd = "000001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return 'UGD' . date('ymd') . $kd;
    }
    public function createOrderHeaderrad()
    {
        $q = DB::select('SELECT id,kode_header,RIGHT(kode_header,6) AS kd_max  FROM mt_kode_order_header
        WHERE DATE(tgl_header) = CURDATE()
        ORDER BY id DESC
        LIMIT 1');
        $kd = "";
        if (count($q) > 0) {
            foreach ($q as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
            $kd = "000001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return 'RAD' . date('ymd') . $kd;
    }
    public function createLayanandetail()
    {
        $q = DB::select('SELECT id,id_layanan_detail,RIGHT(id_layanan_detail,6) AS kd_max  FROM ts_layanan_detail
        WHERE DATE(tgl_layanan_detail) = CURDATE()
        ORDER BY id DESC
        LIMIT 1');
        $kd = "";
        if (count($q) > 0) {
            foreach ($q as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
            $kd = "000001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return 'DET' . date('ymd') . $kd;
    }
    public function createLayanandetailgp()
    {
        $q = DB::connection('mysql2')->select('SELECT id,id_layanan_detail,RIGHT(id_layanan_detail,6) AS kd_max  FROM ts_layanan_detail_igd
        WHERE DATE(tgl_layanan_detail) = CURDATE()
        ORDER BY id DESC
        LIMIT 1');
        $kd = "";
        if (count($q) > 0) {
            foreach ($q as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
            $kd = "000001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return 'DET' . date('ymd') . $kd;
    }
    public function cetakkarcistindakan(Request $request)
    {

        $kodeunit = $request->kodeunit;
        $tanggalvisit = $request->tanggalvisit;

        $tanggalvisit1 = $request->tanggalvisit1;


        // $receive_items = $this->cetakpdf($kode_header, $idhed);
        $back = [
            'kode' => 200,
            'kodeunit' => $kodeunit,
            'tanggalvisit' => $tanggalvisit,
            'tanggalvisit1' => $tanggalvisit1,

        ];
        echo json_encode($back);
        die;
    }
    public function cetakresumecpptdokter(Request $request)
    {

        $kj = $request->kj;
        $norm = $request->norm;




        // $receive_items = $this->cetakpdf($kode_header, $idhed);
        $back = [
            'kode' => 200,
            'kj' => $kj,
            'norm' => $norm,



        ];
        echo json_encode($back);
        die;
    }

    public function cetaktresumecppt($kj, $norm)
    {

        $now = Carbon::now()->format('d M Y');
        $noww = Carbon::now();


        $unit = auth()->user()->unit;

        $now = Carbon::now()->format('Y-m-d H:i:s');
        $pasien = DB::select('SELECT 
        a.nama_px,
        a.no_rm,
        fc_alamat(a.no_rm) AS alamat,
        a.jenis_kelamin AS jk,
        fc_umur(a.no_rm) AS umur,
        a.tgl_lahir
        FROM mt_pasien  a
        WHERE no_rm = ?', [$norm]);
        $dpjp = DB::connection('mysql2')->select('SELECT fc_NAMA_PARAMEDIS1(a.kode_paramedis) AS nama_dpjp,a.kode_paramedis,a.tindakan_kedokteran FROM erm_tindakan_kedokteran a WHERE kode_kunjungan = ?', [$kj]);
        // dd($pasien);
        $tgllahir = Carbon::parse($pasien[0]->tgl_lahir)->format('d-M-Y');
        $kunjungan = DB::select('SELECT 

        fc_NAMA_PARAMEDIS1(a.kode_paramedis) AS dokter,
        fc_NAMA_PENJAMIN(a.no_rm) AS penjamin,
        b.diag_00 AS diagnosa,
        a.tgl_masuk,
        a.tgl_keluar

        FROM ts_kunjungan a

        INNER JOIN di_pasien_diagnosa_frunit b ON b.kode_kunjungan = a.kode_kunjungan
        WHERE a.no_rm = ?
        AND a.kode_kunjungan  = ?', [$norm, $kj]);
        $tglmasuk = Carbon::parse($kunjungan[0]->tgl_masuk)->format('d-M-Y');
        $jammasuk = Carbon::parse($kunjungan[0]->tgl_masuk)->format('H:i:s');
        $tglklr = Carbon::parse($kunjungan[0]->tgl_keluar)->format('d-M-Y');
        $jamklr = Carbon::parse($kunjungan[0]->tgl_keluar)->format('H:i:s');
        $triase = DB::connection('mysql2')->select('SELECT * FROM ts_triase
           WHERE no_rm = ? AND kode_kunjungan = ? AND STATUS IN (1,2) ', [$norm, $kj]);

        // dd($triase);
        $assesdok = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_dokter
        WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        $tglass = Carbon::parse($assesdok[0]->tgl_input)->format('d-M-Y');
        $jamass = Carbon::parse($assesdok[0]->tgl_input)->format('H:i:s');
        $assesper = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_perawat
          WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        $tglassp = Carbon::parse($assesper[0]->tgl_input)->format('d-M-Y');
        $jamassp = Carbon::parse($assesper[0]->tgl_input)->format('H:i:s');
        $assesbid = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_kebidanan WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        $assesbidbay = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_kebidanan_bayi WHERE no_rm = ? AND kode_kunjungan = ? AND status IN (1,2)', [$norm, $kj]);

        $riwayatorderrad = DB::connection('mysql2')->select('SELECT
        a.no_rm,
        a.kode_layanan_header,
        a.id,
        b.total_tarif,
        fc_nama_tindakan(LEFT(b.kode_tarif_detail,6)) as nama_tindakan
        FROM
        ts_layanan_header_igd a
        INNER JOIN ts_layanan_detail_igd b ON b.row_id_header = a.id
        WHERE a.kode_unit = ?
        AND a.kode_kunjungan = ?
        AND a.status_order ="1"', ['3003', $kj]);
        $riwayatorderlab = DB::connection('mysql2')->select('SELECT
         a.no_rm,
         a.kode_layanan_header,
         a.id,
         b.total_tarif,
         fc_nama_tindakan(LEFT(b.kode_tarif_detail,6)) as nama_tindakan
         FROM
         ts_layanan_header_igd a
         INNER JOIN ts_layanan_detail_igd b ON b.row_id_header = a.id
         WHERE a.kode_unit = ?
         AND a.kode_kunjungan = ?
         AND a.status_order ="1"', ['3002', $kj]);
        $riwayatobat = DB::select('SELECT
        a.kode_layanan_header,
        a.id,
        a.kode_kunjungan,
        b.total_tarif,
        b.kode_barang,
        b.aturan_pakai,
        b.jumlah_layanan,
        c.nama_barang
         FROM
         ts_layanan_header a
         INNER JOIN ts_layanan_detail b ON b.row_id_header = a.id
         INNER JOIN mt_barang c ON c.kode_barang = b.kode_barang
         WHERE a.kode_layanan_header LIKE "%DP%"
         AND b.kode_tarif_detail NOT LIKE "%tx%"
         AND a.kode_kunjungan = ?', [$kj]);
        $ttv = DB::connection('mysql2')->select('SELECT tekanan_darah, sumber_data, frekuensi_nafas, keadaan_umum, kesadaran, frekuensi_nadi, suhu, berat_badan, umur FROM erm_cppt_perawat WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        $riwayatrekonobat = DB::connection('mysql2')->select('SELECT * FROM rekonsiliasi_obat
        WHERE kode_kunjungan = ?', [$kj]);
        $tindakan = DB::connection('mysql2')->select('SELECT * FROM erm_tindakan_kedokteran WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        $tindakanp = DB::connection('mysql2')->select('SELECT * FROM erm_tindakan_keperawatan WHERE no_rm = ? AND kode_kunjungan = ? AND status = 1', [$norm, $kj]);

        $unit = auth()->user()->unit;

        if ($triase[0]->kesadaran1 !== NULL) {
            $kesadaran1 = $triase[0]->kesadaran1 . ', ';
        } else {
            $kesadaran1 = $triase[0]->kesadaran1;
        }

        if ($triase[0]->kesadaran2 !== NULL) {
            $kesadaran2 = $triase[0]->kesadaran2;
        } else {
            $kesadaran2 = $triase[0]->kesadaran2;
        }
        if ($triase[0]->kesadaran3 !== NULL) {
            $kesadaran3 = ', ' . $triase[0]->kesadaran3;
        } else {
            $kesadaran3 = $triase[0]->kesadaran3;
        }

        if ($triase[0]->kesadaran4 !== NULL) {
            $kesadaran4 = ', ' . $triase[0]->kesadaran4;
        } else {
            $kesadaran4 = $triase[0]->kesadaran4;
        }
        if ($triase[0]->kesadaran5 !== NULL) {
            $kesadaran5 = ', ' . $triase[0]->kesadaran5;
        } else {
            $kesadaran5 = $triase[0]->kesadaran5;
        }
        if ($triase[0]->kesadaran6 !== NULL) {
            $kesadaran6 = ', ' . $triase[0]->kesadaran6;
        } else {
            $kesadaran6 = $triase[0]->kesadaran6;
        }

        if ($triase[0]->kesadaran7 !== NULL) {
            $kesadaran7 = ', ' . $triase[0]->kesadaran7;
        } else {
            $kesadaran7 = $triase[0]->kesadaran7;
        }
        if ($triase[0]->kesadaran8 !== NULL) {
            $kesadaran8 = ', ' . $triase[0]->kesadaran8;
        } else {
            $kesadaran8 = $triase[0]->kesadaran8;
        }
        if ($triase[0]->kesadaran9 !== NULL) {
            $kesadaran9 = ', ' . $triase[0]->kesadaran9;
        } else {
            $kesadaran9 = $triase[0]->kesadaran9;
        }
        if ($triase[0]->kesadaran10 !== NULL) {
            $kesadaran10 = ', ' . $triase[0]->kesadaran10;
        } else {
            $kesadaran10 = $triase[0]->kesadaran10;
        }
        if ($triase[0]->kesadaran11 !== NULL) {
            $kesadaran11 = ', ' . $triase[0]->kesadaran11;
        } else {
            $kesadaran11 = $triase[0]->kesadaran11;
        }
        if ($triase[0]->kesadaran12 !== NULL) {
            $kesadaran12 = ', ' . $triase[0]->kesadaran12;
        } else {
            $kesadaran12 = $triase[0]->kesadaran12;
        }


        if ($triase[0]->jalan_nafas1 !== NULL) {
            $jalan_nafas1 = $triase[0]->jalan_nafas1 . ', ';
        } else {
            $jalan_nafas1 = $triase[0]->jalan_nafas1;
        }

        if ($triase[0]->jalan_nafas2 !== NULL) {
            $jalan_nafas2 = $triase[0]->jalan_nafas2;
        } else {
            $jalan_nafas2 = $triase[0]->jalan_nafas2;
        }
        if ($triase[0]->jalan_nafas3 !== NULL) {
            $jalan_nafas3 = ', ' . $triase[0]->jalan_nafas3;
        } else {
            $jalan_nafas3 = $triase[0]->jalan_nafas3;
        }

        if ($triase[0]->jalan_nafas4 !== NULL) {
            $jalan_nafas4 = ', ' . $triase[0]->jalan_nafas4;
        } else {
            $jalan_nafas4 = $triase[0]->jalan_nafas4;
        }
        if ($triase[0]->jalan_nafas5 !== NULL) {
            $jalan_nafas5 = ', ' . $triase[0]->jalan_nafas5;
        } else {
            $jalan_nafas5 = $triase[0]->jalan_nafas5;
        }
        if ($triase[0]->jalan_nafas6 !== NULL) {
            $jalan_nafas6 = ', ' . $triase[0]->jalan_nafas6;
        } else {
            $jalan_nafas6 = $triase[0]->jalan_nafas6;
        }

        if ($triase[0]->jalan_nafas7 !== NULL) {
            $jalan_nafas7 = ', ' . $triase[0]->jalan_nafas7;
        } else {
            $jalan_nafas7 = $triase[0]->jalan_nafas7;
        }
        if ($triase[0]->jalan_nafas8 !== NULL) {
            $jalan_nafas8 = ', ' . $triase[0]->jalan_nafas8;
        } else {
            $jalan_nafas8 = $triase[0]->jalan_nafas8;
        }
        if ($triase[0]->jalan_nafas9 !== NULL) {
            $jalan_nafas9 = ', ' . $triase[0]->jalan_nafas9;
        } else {
            $jalan_nafas9 = $triase[0]->jalan_nafas9;
        }
        if ($triase[0]->jalan_nafas10 !== NULL) {
            $jalan_nafas10 = ', ' . $triase[0]->jalan_nafas10;
        } else {
            $jalan_nafas10 = $triase[0]->jalan_nafas10;
        }
        if ($triase[0]->jalan_nafas11 !== NULL) {
            $jalan_nafas11 = ', ' . $triase[0]->jalan_nafas11;
        } else {
            $jalan_nafas11 = $triase[0]->jalan_nafas11;
        }


        if ($triase[0]->upaya1 !== NULL) {
            $upaya1 = $triase[0]->upaya1 . ', ';
        } else {
            $upaya1 = $triase[0]->upaya1;
        }

        if ($triase[0]->upaya2 !== NULL) {
            $upaya2 = $triase[0]->upaya2;
        } else {
            $upaya2 = $triase[0]->upaya2;
        }
        if ($triase[0]->upaya3 !== NULL) {
            $upaya3 = ', ' . $triase[0]->upaya3;
        } else {
            $upaya3 = $triase[0]->upaya3;
        }

        if ($triase[0]->upaya4 !== NULL) {
            $upaya4 = ', ' . $triase[0]->upaya4;
        } else {
            $upaya4 = $triase[0]->upaya4;
        }
        if ($triase[0]->upaya5 !== NULL) {
            $upaya5 = ', ' . $triase[0]->upaya5;
        } else {
            $upaya5 = $triase[0]->upaya5;
        }
        if ($triase[0]->upaya6 !== NULL) {
            $upaya6 = ', ' . $triase[0]->upaya6;
        } else {
            $upaya6 = $triase[0]->upaya6;
        }

        if ($triase[0]->upaya7 !== NULL) {
            $upaya7 = ', ' . $triase[0]->upaya7;
        } else {
            $upaya7 = $triase[0]->upaya7;
        }
        if ($triase[0]->upaya8 !== NULL) {
            $upaya8 = ', ' . $triase[0]->upaya8;
        } else {
            $upaya8 = $triase[0]->upaya8;
        }
        if ($triase[0]->upaya9 !== NULL) {
            $upaya9 = ', ' . $triase[0]->upaya9;
        } else {
            $upaya9 = $triase[0]->upaya9;
        }
        if ($triase[0]->upaya10 !== NULL) {
            $upaya10 = ', ' . $triase[0]->upaya10;
        } else {
            $upaya10 = $triase[0]->upaya10;
        }
        if ($triase[0]->upaya11 !== NULL) {
            $upaya11 = ', ' . $triase[0]->upaya11;
        } else {
            $upaya11 = $triase[0]->upaya11;
        }



        if ($triase[0]->sirkulasi1 !== NULL) {
            $sirkulasi1 = $triase[0]->sirkulasi1 . ', ';
        } else {
            $sirkulasi1 = $triase[0]->sirkulasi1;
        }

        if ($triase[0]->sirkulasi2 !== NULL) {
            $sirkulasi2 = $triase[0]->sirkulasi2;
        } else {
            $sirkulasi2 = $triase[0]->sirkulasi2;
        }
        if ($triase[0]->sirkulasi3 !== NULL) {
            $sirkulasi3 = ', ' . $triase[0]->sirkulasi3;
        } else {
            $sirkulasi3 = $triase[0]->sirkulasi3;
        }

        if ($triase[0]->sirkulasi4 !== NULL) {
            $sirkulasi4 = ', ' . $triase[0]->sirkulasi4;
        } else {
            $sirkulasi4 = $triase[0]->sirkulasi4;
        }
        if ($triase[0]->sirkulasi5 !== NULL) {
            $sirkulasi5 = ', ' . $triase[0]->sirkulasi5;
        } else {
            $sirkulasi5 = $triase[0]->sirkulasi5;
        }
        if ($triase[0]->sirkulasi6 !== NULL) {
            $sirkulasi6 = ', ' . $triase[0]->sirkulasi6;
        } else {
            $sirkulasi6 = $triase[0]->sirkulasi6;
        }

        if ($triase[0]->sirkulasi7 !== NULL) {
            $sirkulasi7 = ', ' . $triase[0]->sirkulasi7;
        } else {
            $sirkulasi7 = $triase[0]->sirkulasi7;
        }
        if ($triase[0]->sirkulasi8 !== NULL) {
            $sirkulasi8 = ', ' . $triase[0]->sirkulasi8;
        } else {
            $sirkulasi8 = $triase[0]->sirkulasi8;
        }
        if ($triase[0]->sirkulasi9 !== NULL) {
            $sirkulasi9 = ', ' . $triase[0]->sirkulasi9;
        } else {
            $sirkulasi9 = $triase[0]->sirkulasi9;
        }
        if ($triase[0]->sirkulasi10 !== NULL) {
            $sirkulasi10 = ', ' . $triase[0]->sirkulasi10;
        } else {
            $sirkulasi10 = $triase[0]->sirkulasi10;
        }
        if ($triase[0]->sirkulasi11 !== NULL) {
            $sirkulasi11 = ', ' . $triase[0]->sirkulasi11;
        } else {
            $sirkulasi11 = $triase[0]->sirkulasi11;
        }
        if ($triase[0]->sirkulasi12 !== NULL) {
            $sirkulasi12 = ', ' . $triase[0]->sirkulasi12;
        } else {
            $sirkulasi12 = $triase[0]->sirkulasi12;
        }
        if ($triase[0]->sirkulasi13 !== NULL) {
            $sirkulasi13 = ', ' . $triase[0]->sirkulasi13;
        } else {
            $sirkulasi13 = $triase[0]->sirkulasi13;
        }
        if ($triase[0]->sirkulasi14 !== NULL) {
            $sirkulasi14 = ', ' . $triase[0]->sirkulasi14;
        } else {
            $sirkulasi14 = $triase[0]->sirkulasi14;
        }
        if ($triase[0]->sirkulasi15 !== NULL) {
            $sirkulasi15 = ', ' . $triase[0]->sirkulasi15;
        } else {
            $sirkulasi15 = $triase[0]->sirkulasi15;
        }
        if ($triase[0]->sirkulasi16 !== NULL) {
            $sirkulasi16 = ', ' . $triase[0]->sirkulasi16;
        } else {
            $sirkulasi16 = $triase[0]->sirkulasi16;
        }
        if ($triase[0]->sirkulasi17 !== NULL) {
            $sirkulasi17 = ', ' . $triase[0]->sirkulasi17;
        } else {
            $sirkulasi17 = $triase[0]->sirkulasi17;
        }
        if ($triase[0]->sirkulasi18 !== NULL) {
            $sirkulasi18 = ', ' . $triase[0]->sirkulasi18;
        } else {
            $sirkulasi18 = $triase[0]->sirkulasi18;
        }
        if ($triase[0]->sirkulasi19 !== NULL) {
            $sirkulasi19 = ', ' . $triase[0]->sirkulasi19;
        } else {
            $sirkulasi19 = $triase[0]->sirkulasi19;
        }
        if ($triase[0]->sirkulasi20 !== NULL) {
            $sirkulasi20 = ', ' . $triase[0]->sirkulasi20;
        } else {
            $sirkulasi20 = $triase[0]->sirkulasi20;
        }
        if ($triase[0]->sirkulasi21 !== NULL) {
            $sirkulasi21 = ', ' . $triase[0]->sirkulasi21;
        } else {
            $sirkulasi21 = $triase[0]->sirkulasi21;
        }
        if ($triase[0]->sirkulasi22 !== NULL) {
            $sirkulasi22 = ', ' . $triase[0]->sirkulasi22;
        } else {
            $sirkulasi22 = $triase[0]->sirkulasi22;
        }
        if ($triase[0]->sirkulasi23 !== NULL) {
            $sirkulasi23 = ', ' . $triase[0]->sirkulasi23;
        } else {
            $sirkulasi23 = $triase[0]->sirkulasi23;
        }
        if ($triase[0]->sirkulasi24 !== NULL) {
            $sirkulasi24 = ', ' . $triase[0]->sirkulasi24;
        } else {
            $sirkulasi24 = $triase[0]->sirkulasi24;
        }
        if ($triase[0]->sirkulasi25 !== NULL) {
            $sirkulasi25 = ', ' . $triase[0]->sirkulasi25;
        } else {
            $sirkulasi25 = $triase[0]->sirkulasi25;
        }


        if ($triase[0]->gejala_respirasi1 !== NULL) {
            $gejala_respirasi1 = $triase[0]->gejala_respirasi1 . ', ';
        } else {
            $gejala_respirasi1 = $triase[0]->gejala_respirasi1;
        }

        if ($triase[0]->gejala_respirasi2 !== NULL) {
            $gejala_respirasi2 = $triase[0]->gejala_respirasi2;
        } else {
            $gejala_respirasi2 = $triase[0]->gejala_respirasi2;
        }
        if ($triase[0]->gejala_respirasi3 !== NULL) {
            $gejala_respirasi3 = ', ' . $triase[0]->gejala_respirasi3;
        } else {
            $gejala_respirasi3 = $triase[0]->gejala_respirasi3;
        }

        if ($triase[0]->gejala_respirasi4 !== NULL) {
            $gejala_respirasi4 = ', ' . $triase[0]->gejala_respirasi4;
        } else {
            $gejala_respirasi4 = $triase[0]->gejala_respirasi4;
        }
        if ($triase[0]->gejala_respirasi5 !== NULL) {
            $gejala_respirasi5 = ', ' . $triase[0]->gejala_respirasi5;
        } else {
            $gejala_respirasi5 = $triase[0]->gejala_respirasi5;
        }
        if ($triase[0]->gejala_respirasi6 !== NULL) {
            $gejala_respirasi6 = ', ' . $triase[0]->gejala_respirasi6;
        } else {
            $gejala_respirasi6 = $triase[0]->gejala_respirasi6;
        }

        if ($triase[0]->gejala_respirasi7 !== NULL) {
            $gejala_respirasi7 = ', ' . $triase[0]->gejala_respirasi7;
        } else {
            $gejala_respirasi7 = $triase[0]->gejala_respirasi7;
        }
        if ($triase[0]->gejala_respirasi8 !== NULL) {
            $gejala_respirasi8 = ', ' . $triase[0]->gejala_respirasi8;
        } else {
            $gejala_respirasi8 = $triase[0]->gejala_respirasi8;
        }
        if ($triase[0]->gejala_respirasi9 !== NULL) {
            $gejala_respirasi9 = ', ' . $triase[0]->gejala_respirasi9;
        } else {
            $gejala_respirasi9 = $triase[0]->gejala_respirasi9;
        }
        if ($triase[0]->gejala_respirasi10 !== NULL) {
            $gejala_respirasi10 = ', ' . $triase[0]->gejala_respirasi10;
        } else {
            $gejala_respirasi10 = $triase[0]->gejala_respirasi10;
        }
        if ($triase[0]->gejala_respirasi11 !== NULL) {
            $gejala_respirasi11 = ', ' . $triase[0]->gejala_respirasi11;
        } else {
            $gejala_respirasi11 = $triase[0]->gejala_respirasi11;
        }
        if ($triase[0]->gejala_respirasi12 !== NULL) {
            $gejala_respirasi12 = ', ' . $triase[0]->gejala_respirasi12;
        } else {
            $gejala_respirasi12 = $triase[0]->gejala_respirasi12;
        }
        if ($triase[0]->gejala_respirasi13 !== NULL) {
            $gejala_respirasi13 = ', ' . $triase[0]->gejala_respirasi13;
        } else {
            $gejala_respirasi13 = $triase[0]->gejala_respirasi13;
        }
        if ($triase[0]->gejala_respirasi14 !== NULL) {
            $gejala_respirasi14 = ', ' . $triase[0]->gejala_respirasi14;
        } else {
            $gejala_respirasi14 = $triase[0]->gejala_respirasi14;
        }
        if ($triase[0]->gejala_respirasi15 !== NULL) {
            $gejala_respirasi15 = ', ' . $triase[0]->gejala_respirasi15;
        } else {
            $gejala_respirasi15 = $triase[0]->gejala_respirasi15;
        }
        if ($triase[0]->gejala_respirasi16 !== NULL) {
            $gejala_respirasi16 = ', ' . $triase[0]->gejala_respirasi16;
        } else {
            $gejala_respirasi16 = $triase[0]->gejala_respirasi16;
        }
        if ($triase[0]->gejala_respirasi17 !== NULL) {
            $gejala_respirasi17 = ', ' . $triase[0]->gejala_respirasi17;
        } else {
            $gejala_respirasi17 = $triase[0]->gejala_respirasi17;
        }
        if ($triase[0]->gejala_respirasi18 !== NULL) {
            $gejala_respirasi18 = ', ' . $triase[0]->gejala_respirasi18;
        } else {
            $gejala_respirasi18 = $triase[0]->gejala_respirasi18;
        }
        if ($triase[0]->gejala_respirasi19 !== NULL) {
            $gejala_respirasi19 = ', ' . $triase[0]->gejala_respirasi19;
        } else {
            $gejala_respirasi19 = $triase[0]->gejala_respirasi19;
        }
        if ($triase[0]->gejala_respirasi20 !== NULL) {
            $gejala_respirasi20 = ', ' . $triase[0]->gejala_respirasi20;
        } else {
            $gejala_respirasi20 = $triase[0]->gejala_respirasi20;
        }
        if ($triase[0]->gejala_respirasi21 !== NULL) {
            $gejala_respirasi21 = ', ' . $triase[0]->gejala_respirasi21;
        } else {
            $gejala_respirasi21 = $triase[0]->gejala_respirasi21;
        }
        if ($triase[0]->gejala_respirasi22 !== NULL) {
            $gejala_respirasi22 = ', ' . $triase[0]->gejala_respirasi22;
        } else {
            $gejala_respirasi22 = $triase[0]->gejala_respirasi22;
        }
        if ($triase[0]->gejala_respirasi23 !== NULL) {
            $gejala_respirasi23 = ', ' . $triase[0]->gejala_respirasi23;
        } else {
            $gejala_respirasi23 = $triase[0]->gejala_respirasi23;
        }
        if ($triase[0]->gejala_respirasi24 !== NULL) {
            $gejala_respirasi24 = ', ' . $triase[0]->gejala_respirasi24;
        } else {
            $gejala_respirasi24 = $triase[0]->gejala_respirasi24;
        }
        if ($triase[0]->gejala_respirasi25 !== NULL) {
            $gejala_respirasi25 = ', ' . $triase[0]->gejala_respirasi25;
        } else {
            $gejala_respirasi25 = $triase[0]->gejala_respirasi25;
        }
        if ($triase[0]->gejala_respirasi26 !== NULL) {
            $gejala_respirasi26 = ', ' . $triase[0]->gejala_respirasi26;
        } else {
            $gejala_respirasi26 = $triase[0]->gejala_respirasi26;
        }
        if ($triase[0]->gejala_respirasi27 !== NULL) {
            $gejala_respirasi27 = ', ' . $triase[0]->gejala_respirasi27;
        } else {
            $gejala_respirasi27 = $triase[0]->gejala_respirasi27;
        }
        if ($triase[0]->gejala_respirasi28 !== NULL) {
            $gejala_respirasi28 = ', ' . $triase[0]->gejala_respirasi28;
        } else {
            $gejala_respirasi28 = $triase[0]->gejala_respirasi28;
        }
        if ($triase[0]->gejala_respirasi29 !== NULL) {
            $gejala_respirasi29 = ', ' . $triase[0]->gejala_respirasi29;
        } else {
            $gejala_respirasi29 = $triase[0]->gejala_respirasi29;
        }
        if ($assesdok[0]->riwayat_penyakit !== NULL) {
            $riwayatpenyakit =  $assesdok[0]->riwayat_penyakit;
        } else {
            $riwayatpenyakit = 'Tidak Ada';
        }

        if ($triase[0]->kardio1 !== NULL) {
            $kardio1 = $triase[0]->kardio1 . ', ';
        } else {
            $kardio1 = $triase[0]->kardio1;
        }

        if ($triase[0]->kardio2 !== NULL) {
            $kardio2 = $triase[0]->kardio2;
        } else {
            $kardio2 = $triase[0]->kardio2;
        }
        if ($triase[0]->kardio3 !== NULL) {
            $kardio3 = ', ' . $triase[0]->kardio3;
        } else {
            $kardio3 = $triase[0]->kardio3;
        }

        if ($triase[0]->kardio4 !== NULL) {
            $kardio4 = ', ' . $triase[0]->kardio4;
        } else {
            $kardio4 = $triase[0]->kardio4;
        }
        if ($triase[0]->kardio5 !== NULL) {
            $kardio5 = ', ' . $triase[0]->kardio5;
        } else {
            $kardio5 = $triase[0]->kardio5;
        }
        if ($triase[0]->kardio6 !== NULL) {
            $kardio6 = ', ' . $triase[0]->kardio6;
        } else {
            $kardio6 = $triase[0]->kardio6;
        }

        if ($triase[0]->kardio7 !== NULL) {
            $kardio7 = ', ' . $triase[0]->kardio7;
        } else {
            $kardio7 = $triase[0]->kardio7;
        }
        if ($triase[0]->kardio8 !== NULL) {
            $kardio8 = ', ' . $triase[0]->kardio8;
        } else {
            $kardio8 = $triase[0]->kardio8;
        }
        if ($triase[0]->kardio9 !== NULL) {
            $kardio9 = ', ' . $triase[0]->kardio9;
        } else {
            $kardio9 = $triase[0]->kardio9;
        }
        if ($triase[0]->kardio10 !== NULL) {
            $kardio10 = ', ' . $triase[0]->kardio10;
        } else {
            $kardio10 = $triase[0]->kardio10;
        }
        if ($triase[0]->kardio11 !== NULL) {
            $kardio11 = ', ' . $triase[0]->kardio11;
        } else {
            $kardio11 = $triase[0]->kardio11;
        }
        if ($triase[0]->pernafasan1 !== NULL) {
            $pernafasan1 = $triase[0]->pernafasan1 . ', ';
        } else {
            $pernafasan1 = $triase[0]->pernafasan1;
        }

        if ($triase[0]->pernafasan2 !== NULL) {
            $pernafasan2 = $triase[0]->pernafasan2;
        } else {
            $pernafasan2 = $triase[0]->pernafasan2;
        }
        if ($triase[0]->pernafasan3 !== NULL) {
            $pernafasan3 = ', ' . $triase[0]->pernafasan3;
        } else {
            $pernafasan3 = $triase[0]->pernafasan3;
        }

        if ($triase[0]->pernafasan4 !== NULL) {
            $pernafasan4 = ', ' . $triase[0]->pernafasan4;
        } else {
            $pernafasan4 = $triase[0]->pernafasan4;
        }
        if ($triase[0]->pernafasan5 !== NULL) {
            $pernafasan5 = ', ' . $triase[0]->pernafasan5;
        } else {
            $pernafasan5 = $triase[0]->pernafasan5;
        }
        if ($triase[0]->pernafasan6 !== NULL) {
            $pernafasan6 = ', ' . $triase[0]->pernafasan6;
        } else {
            $pernafasan6 = $triase[0]->pernafasan6;
        }

        if ($triase[0]->pernafasan7 !== NULL) {
            $pernafasan7 = ', ' . $triase[0]->pernafasan7;
        } else {
            $pernafasan7 = $triase[0]->pernafasan7;
        }
        if ($triase[0]->pernafasan8 !== NULL) {
            $pernafasan8 = ', ' . $triase[0]->pernafasan8;
        } else {
            $pernafasan8 = $triase[0]->pernafasan8;
        }
        if ($triase[0]->pernafasan9 !== NULL) {
            $pernafasan9 = ', ' . $triase[0]->pernafasan9;
        } else {
            $pernafasan9 = $triase[0]->pernafasan9;
        }
        if ($triase[0]->pernafasan10 !== NULL) {
            $pernafasan10 = ', ' . $triase[0]->pernafasan10;
        } else {
            $pernafasan10 = $triase[0]->pernafasan10;
        }
        if ($triase[0]->pernafasan11 !== NULL) {
            $pernafasan11 = ', ' . $triase[0]->pernafasan11;
        } else {
            $pernafasan11 = $triase[0]->pernafasan11;
        }
        if ($triase[0]->pernafasan12 !== NULL) {
            $pernafasan12 = ', ' . $triase[0]->pernafasan12;
        } else {
            $pernafasan12 = $triase[0]->pernafasan12;
        }
        if ($triase[0]->pernafasan13 !== NULL) {
            $pernafasan13 = ', ' . $triase[0]->pernafasan13;
        } else {
            $pernafasan13 = $triase[0]->pernafasan13;
        }
        if ($triase[0]->pernafasan14 !== NULL) {
            $pernafasan14 = ', ' . $triase[0]->pernafasan14;
        } else {
            $pernafasan14 = $triase[0]->pernafasan14;
        }
        if ($triase[0]->pernafasan15 !== NULL) {
            $pernafasan15 = ', ' . $triase[0]->pernafasan15;
        } else {
            $pernafasan15 = $triase[0]->pernafasan15;
        }
        if ($triase[0]->pernafasan16 !== NULL) {
            $pernafasan16 = ', ' . $triase[0]->pernafasan16;
        } else {
            $pernafasan16 = $triase[0]->pernafasan16;
        }
        if ($triase[0]->pernafasan17 !== NULL) {
            $pernafasan17 = ', ' . $triase[0]->pernafasan17;
        } else {
            $pernafasan17 = $triase[0]->pernafasan17;
        }
        if ($triase[0]->pernafasan18 !== NULL) {
            $pernafasan18 = ', ' . $triase[0]->pernafasan18;
        } else {
            $pernafasan18 = $triase[0]->pernafasan18;
        }
        if ($triase[0]->pernafasan19 !== NULL) {
            $pernafasan19 = ', ' . $triase[0]->pernafasan19;
        } else {
            $pernafasan19 = $triase[0]->pernafasan19;
        }
        if ($triase[0]->abuse1 !== NULL) {
            $abuse1 = $triase[0]->abuse1 . ', ';
        } else {
            $abuse1 = $triase[0]->abuse1;
        }

        if ($triase[0]->abuse2 !== NULL) {
            $abuse2 = $triase[0]->abuse2;
        } else {
            $abuse2 = $triase[0]->abuse2;
        }
        if ($triase[0]->abuse3 !== NULL) {
            $abuse3 = ', ' . $triase[0]->abuse3;
        } else {
            $abuse3 = $triase[0]->abuse3;
        }

        if ($triase[0]->abuse4 !== NULL) {
            $abuse4 = ', ' . $triase[0]->abuse4;
        } else {
            $abuse4 = $triase[0]->abuse4;
        }
        if ($triase[0]->lain1 !== NULL) {
            $lain1 = $triase[0]->lain1 . ', ';
        } else {
            $lain1 = $triase[0]->lain1;
        }

        if ($triase[0]->lain2 !== NULL) {
            $lain2 = $triase[0]->lain2;
        } else {
            $lain2 = $triase[0]->lain2;
        }
        if ($triase[0]->lain3 !== NULL) {
            $lain3 = ', ' . $triase[0]->lain3;
        } else {
            $lain3 = $triase[0]->lain3;
        }

        if ($triase[0]->lain4 !== NULL) {
            $lain4 = ', ' . $triase[0]->lain4;
        } else {
            $lain4 = $triase[0]->lain4;
        }
        if ($triase[0]->lain5 !== NULL) {
            $lain5 = ', ' . $triase[0]->lain5;
        } else {
            $lain5 = $triase[0]->lain5;
        }
        if ($triase[0]->lain6 !== NULL) {
            $lain6 = ', ' . $triase[0]->lain6;
        } else {
            $lain6 = $triase[0]->lain6;
        }

        if ($triase[0]->lain7 !== NULL) {
            $lain7 = ', ' . $triase[0]->lain7;
        } else {
            $lain7 = $triase[0]->lain7;
        }
        if ($triase[0]->lain8 !== NULL) {
            $lain8 = ', ' . $triase[0]->lain8;
        } else {
            $lain8 = $triase[0]->lain8;
        }
        if ($triase[0]->lain9 !== NULL) {
            $lain9 = ', ' . $triase[0]->lain9;
        } else {
            $lain9 = $triase[0]->lain9;
        }
        if ($triase[0]->lain10 !== NULL) {
            $lain10 = ', ' . $triase[0]->lain10;
        } else {
            $lain10 = $triase[0]->lain10;
        }
        if ($triase[0]->lain11 !== NULL) {
            $lain11 = ', ' . $triase[0]->lain11;
        } else {
            $lain11 = $triase[0]->lain11;
        }
        if ($triase[0]->lain12 !== NULL) {
            $lain12 = ', ' . $triase[0]->lain12;
        } else {
            $lain12 = $triase[0]->lain12;
        }
        if ($triase[0]->lain13 !== NULL) {
            $lain13 = ', ' . $triase[0]->lain13;
        } else {
            $lain13 = $triase[0]->lain13;
        }
        if ($triase[0]->lain14 !== NULL) {
            $lain14 = ', ' . $triase[0]->lain14;
        } else {
            $lain14 = $triase[0]->lain14;
        }
        if ($triase[0]->lain15 !== NULL) {
            $lain15 = ', ' . $triase[0]->lain15;
        } else {
            $lain15 = $triase[0]->lain15;
        }
        $imageURL = $triase[0]->penandaan_gambar;
        $image_content = base64_decode(str_replace("data:image/png;base64,", "", $imageURL)); // remove "data:image/png;base64,"
        $tempfile = tmpfile(); // create temporary file
        fwrite($tempfile, $image_content); // fill data to temporary file
        $metaDatas = stream_get_meta_data($tempfile);
        $tmpFilename = $metaDatas['uri'];

        $imageURLi = $assesper[0]->penandaan_gambar;
        $image_contentt = base64_decode(str_replace("data:image/png;base64,", "", $imageURLi)); // remove "data:image/png;base64,"
        $tempfilee = tmpfile(); // create temporary file
        fwrite($tempfilee, $image_contentt); // fill data to temporary file
        $metaDatass = stream_get_meta_data($tempfilee);
        $tmpFilenamee = $metaDatass['uri'];

        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf::AddPage('P', 'letter');
        //Awal Header kertas
        $pdf::Image('public/img/kab_cirebonn.png', 10, 4, 20, 20);
        $pdf::Image('public/img/rsss.png', 180, 4, 20, 20);
        $pdf::SetFont('Times', 'B', 12);
        $pdf::SetXY(65, 5);
        $pdf::Cell(40, 10, 'PEMERINTAH KABUPATEN CIREBON');
        $pdf::SetFont('Times', 'B', 16);
        $pdf::SetXY(50, 10);
        $pdf::Cell(40, 10, 'RUMAH SAKIT UMUM DAERAH WALED');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(49.5, 15);
        $pdf::Cell(40, 10, 'Jl. Prabu Kiansantang No. 4 Telp. 0231 - 661126 Fax. 0231 - 664091 Cirebon');
        $pdf::SetLineWidth(1);
        $pdf::Line(10, 25, 200, 25);
        $pdf::SetLineWidth(0.25);
        $pdf::Line(10, 27, 200, 27);
        $pdf::SetFont('Times', 'BU', 18);
        $pdf::SetXY(75, 30);
        $pdf::Cell(40, 10, 'RESUME MEDIS IGD');

        //Awal kotak data pasien
        $pdf::Rect(8, 40, 198, 40);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 39);
        $pdf::MultiCell(40, 10, 'Nama Pasien');
        $pdf::SetXY(40, 39);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 39);
        $pdf::Cell(42, 10, $pasien[0]->nama_px);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 39);
        $pdf::Cell(40, 10, 'NO. RM');
        $pdf::SetXY(139, 39);
        $pdf::Cell(45, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(141, 39);
        $pdf::MultiCell(70, 10, $pasien[0]->no_rm);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 45);
        $pdf::Cell(40, 10, 'Penjamin');
        $pdf::SetXY(40, 45);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 45);
        $pdf::Cell(42, 10, $kunjungan[0]->penjamin);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 45);
        $pdf::Cell(40, 10, 'Tgl. Lahir');
        $pdf::SetXY(139, 45);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', 'B', 10);
        $pdf::SetXY(141, 45);
        $pdf::MultiCell(70, 10, $tgllahir);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 51);
        $pdf::Cell(40, 10, 'Umur');
        $pdf::SetXY(40, 51);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 51);
        $pdf::Cell(42, 10,  $pasien[0]->umur . ' th');

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 51);
        $pdf::Cell(40, 10, 'Diagnosis ');
        $pdf::SetXY(139, 51);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', 'B', 10);
        $pdf::SetXY(141, 51);
        $pdf::Cell(70, 10, $kunjungan[0]->diagnosa);




        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 57);
        $pdf::Cell(40, 10, 'ALAMAT');
        $pdf::SetXY(40, 57);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 9);
        $pdf::SetXY(42, 59.5);
        $pdf::MultiCell(79, 5, $pasien[0]->alamat);


        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(120, 57);
        $pdf::Cell(40, 10, 'Dokter');
        $pdf::SetXY(139, 57);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(141, 57);
        $pdf::MultiCell(70, 10, $kunjungan[0]->dokter);

        //triase
        $pdf::SetFont('Times', 'BU', 14);
        $pdf::SetXY(10, 80);
        $pdf::Cell(240, 10, 'TRIASE');
        $pdf::SetFont('Times', 'UI', 14);
        $pdf::SetXY(70, 90);

        //Awal kotak data pasien
        //triase dewasa
        if ($triase[0]->jenis_triase == 'dewasa') {
            $pdf::Rect(8, 91, 40, 10);
            $pdf::Rect(48, 91, 158, 10);
            $pdf::Rect(8, 101, 40, 10);
            $pdf::Rect(48, 101, 158, 10);
            $pdf::Rect(8, 111, 40, 10);
            $pdf::Rect(48, 111, 158, 10);
            $pdf::Rect(8, 121, 40, 10);
            $pdf::Rect(48, 121, 158, 10);
            $pdf::Rect(8, 131, 40, 10);
            $pdf::Rect(48, 131, 158, 10);
            $pdf::Rect(8, 141, 40, 10);
            $pdf::Rect(48, 141, 158, 10);
            $pdf::Rect(8, 151, 40, 10);
            $pdf::Rect(48, 151, 158, 10);


            $pdf::SetFont('Times', 'B', 11);
            $pdf::SetXY(10, 91);
            $pdf::Cell(40, 10, 'Kategori Triase');

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(50, 91);
            $pdf::MultiCell(70, 10, $triase[0]->kategori_triase);

            $pdf::SetFont('Times', 'B', 11);
            $pdf::SetXY(10, 101);
            $pdf::Cell(40, 10, 'Pemeriksaan Triase');

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(50, 101);
            $pdf::MultiCell(70, 10, $triase[0]->pemeriksaan_triase);

            $pdf::SetFont('Times', 'B', 11);
            $pdf::SetXY(10, 111);
            $pdf::Cell(40, 10, 'Kesadaran');

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(50, 111);
            $pdf::MultiCell(70, 10, $kesadaran1 . $kesadaran2 . $kesadaran3 . $kesadaran4 . $kesadaran5 . $kesadaran6 . $kesadaran7 . $kesadaran8 . $kesadaran9 . $kesadaran10 . $kesadaran11 . $kesadaran12);

            $pdf::SetFont('Times', 'B', 11);
            $pdf::SetXY(10, 121);
            $pdf::Cell(40, 10, 'Jalan Nafas');

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(50, 121);
            $pdf::MultiCell(70, 10, $jalan_nafas1 . $jalan_nafas2 . $jalan_nafas3 . $jalan_nafas4 . $jalan_nafas5 . $jalan_nafas6 . $jalan_nafas7 . $jalan_nafas8 . $jalan_nafas9 . $jalan_nafas10 . $jalan_nafas11);

            $pdf::SetFont('Times', 'B', 11);
            $pdf::SetXY(10, 131);
            $pdf::Cell(40, 10, 'Pernafasan');

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(50, 131);
            $pdf::MultiCell(70, 10, $upaya1 . $upaya2 . $upaya3 . $upaya4 . $upaya5 . $upaya6 . $upaya7 . $upaya8 . $upaya9 . $upaya10 . $upaya11);

            $pdf::SetFont('Times', 'B', 11);
            $pdf::SetXY(10, 141);
            $pdf::Cell(40, 10, 'Sirkulasi');

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(50, 141);
            $pdf::MultiCell(70, 10, $sirkulasi1 . $sirkulasi2 . $sirkulasi3 . $sirkulasi4 . $sirkulasi5 . $sirkulasi6 . $sirkulasi7 . $sirkulasi8 . $sirkulasi9 . $sirkulasi10 . $sirkulasi11 . $sirkulasi12 . $sirkulasi13 . $sirkulasi14 . $sirkulasi15 . $sirkulasi16 . $sirkulasi17 . $sirkulasi18 . $sirkulasi19 . $sirkulasi20 . $sirkulasi21 . $sirkulasi22 . $sirkulasi23 . $sirkulasi24 . $sirkulasi25);

            $pdf::SetFont('Times', 'B', 11);
            $pdf::SetXY(10, 151);
            $pdf::Cell(40, 10, 'Gejala Spesifik');

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(50, 151);
            $pdf::MultiCell(150, 10, $gejala_respirasi1 . $gejala_respirasi2 . $gejala_respirasi3 . $gejala_respirasi4 . $gejala_respirasi5 . $gejala_respirasi6 . $gejala_respirasi7 . $gejala_respirasi8 . $gejala_respirasi9 . $gejala_respirasi10 . $gejala_respirasi11 . $gejala_respirasi12 . $gejala_respirasi13 . $gejala_respirasi14 . $gejala_respirasi15 . $gejala_respirasi16 . $gejala_respirasi17 . $gejala_respirasi18 . $gejala_respirasi19 . $gejala_respirasi20 . $gejala_respirasi21 . $gejala_respirasi22 . $gejala_respirasi23 . $gejala_respirasi24 . $gejala_respirasi25 . $gejala_respirasi26 . $gejala_respirasi27 . $gejala_respirasi28 . $gejala_respirasi29);

            //kotak ttv
            $pdf::Rect(8, 161, 198, 25);
            //isi ttv

            $pdf::SetFont('Times', '', 11);
            $pdf::SetXY(10, 161);
            $pdf::MultiCell(40, 10, 'Keadaan Umum');
            $pdf::SetXY(41, 161);
            $pdf::Cell(40, 10, ':');
            $pdf::SetFont('Times', '', 11);
            $pdf::SetXY(43, 161);
            $pdf::Cell(43, 10, $ttv[0]->keadaan_umum);


            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(120, 161);
            $pdf::Cell(40, 10, 'Kesadaran');
            $pdf::SetXY(147, 161);
            $pdf::Cell(45, 10, ':');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(149, 161);
            $pdf::MultiCell(70, 10, $ttv[0]->kesadaran);


            $pdf::SetFont('Times', '', 11);
            $pdf::SetXY(10, 166);
            $pdf::MultiCell(40, 10, 'Berat Badan');
            $pdf::SetXY(41, 166);
            $pdf::Cell(40, 10, ':');
            $pdf::SetFont('Times', '', 11);
            $pdf::SetXY(43, 166);
            $pdf::Cell(43, 10, $ttv[0]->berat_badan . ' KG');


            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(120, 166);
            $pdf::Cell(40, 10, 'Tinggi Badan');
            $pdf::SetXY(147, 166);
            $pdf::Cell(45, 10, ':');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(149, 166);
            $pdf::MultiCell(70, 10, $ttv[0]->berat_badan . ' cm');


            $pdf::SetFont('Times', '', 11);
            $pdf::SetXY(10, 171);
            $pdf::MultiCell(40, 10, 'Tekanan Darah');
            $pdf::SetXY(41, 171);
            $pdf::Cell(40, 10, ':');
            $pdf::SetFont('Times', '', 11);
            $pdf::SetXY(43, 171);
            $pdf::Cell(43, 10, $ttv[0]->tekanan_darah . ' mm Hg');


            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(120, 171);
            $pdf::Cell(40, 10, 'Frekuensi Nadi');
            $pdf::SetXY(147, 171);
            $pdf::Cell(45, 10, ':');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(149, 171);
            $pdf::MultiCell(70, 10, $ttv[0]->frekuensi_nadi . ' x / menit');


            $pdf::SetFont('Times', '', 11);
            $pdf::SetXY(10, 176);
            $pdf::MultiCell(40, 10, 'Frekuensi Nafas');
            $pdf::SetXY(41, 176);
            $pdf::Cell(40, 10, ':');
            $pdf::SetFont('Times', '', 11);
            $pdf::SetXY(43, 176);
            $pdf::Cell(43, 10, $ttv[0]->frekuensi_nafas . ' x / menit');


            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(120, 176);
            $pdf::Cell(40, 10, 'Suhu');
            $pdf::SetXY(147, 176);
            $pdf::Cell(45, 10, ':');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(149, 176);
            $pdf::MultiCell(70, 10, $ttv[0]->suhu . ' °C');

            // gambar triase
            $pdf::Rect(8, 186, 99, 70);
            $pdf::Rect(107, 186, 99, 70);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(10, 186);
            $pdf::Cell(40, 10, 'Pastikan tanda pada gambar sesuai ketentuan yang ditetapkan');
            if ($triase[0]->penandaan_gambar == NULL) {
                $pdf::Image('public/img/nyeri.png', 12, 195, 100, 40);
            } else {
                // $pdf::Image($triase[0]->penandaan_gambar, 12, 195, 80, 40);
                // $pdf::Image($tmpFilename, null, null, 0, 0);
                $pdf::SetXY(12, 195);

                $pdf::Image($tmpFilename, null, null, 100, 40, 'PNG');
                // $pdf::SetXY(10, 186);

                // $pdf::Cell(40, 10, $triase[0]->penandaan_gambar);
            }
            $pdf::SetXY(10, 233);
            $pdf::Cell(40, 10, 'V di area yang LEBAM / OEDEMA');
            $pdf::SetXY(10, 238);
            $pdf::Cell(40, 10, 'O di area yang terdapat SAYATAN');
            $pdf::SetXY(10, 243);
            $pdf::Cell(40, 10, 'X di area yang terdapat LUKA');
            $pdf::SetXY(10, 248);
            $pdf::Cell(40, 10, '+ di area yang terdapat LUKA');
            $pdf::SetXY(113, 186);
            $pdf::Cell(40, 10, 'Kesadaran :' . $triase[0]->kesadaran_1 . ' , ' . $triase[0]->kesadaran_2 . ' , ' . $triase[0]->kesadaran_3);
            $pdf::SetXY(113, 191);
            $pdf::Cell(40, 10, 'Status Psikologi :' . $triase[0]->status_psikologis . ' , ' . $triase[0]->status_psikologis1 . ' , ' . $triase[0]->status_psikologis2 . ' , ' . $triase[0]->status_psikologis3 . ' , ' . $triase[0]->status_psikologis4 . ' , ' . $triase[0]->status_psikologis5 . ' , ' . $triase[0]->status_psikologis6 . ' , ' . $triase[0]->status_psikologis7 . ' , ' . $triase[0]->status_psikologis8 . ' , ' . $triase[0]->status_psikologis9);
            //ttd dokter
            // $pdf::Rect(8, 200, 40, 10);
            // $pdf::Rect(48, 200, 158, 10);
        } else {
            //triase anak
            $pdf::Rect(8, 91, 40, 10);
            $pdf::Rect(48, 91, 158, 10);
            $pdf::Rect(8, 101, 40, 10);
            $pdf::Rect(48, 101, 158, 10);
            $pdf::Rect(8, 111, 40, 10);
            $pdf::Rect(48, 111, 158, 10);
            $pdf::Rect(8, 121, 40, 10);
            $pdf::Rect(48, 121, 158, 10);
            $pdf::Rect(8, 131, 40, 10);
            $pdf::Rect(48, 131, 158, 10);
            $pdf::Rect(8, 141, 40, 10);
            $pdf::Rect(48, 141, 158, 10);
            $pdf::Rect(8, 151, 40, 10);
            $pdf::Rect(48, 151, 158, 10);
            $pdf::Rect(8, 161, 40, 10);
            $pdf::Rect(48, 161, 158, 10);
            $pdf::Rect(8, 171, 40, 10);
            $pdf::Rect(48, 171, 158, 10);
            $pdf::Rect(8, 181, 40, 10);
            $pdf::Rect(48, 181, 158, 10);


            $pdf::SetFont('Times', 'B', 11);
            $pdf::SetXY(10, 91);
            $pdf::Cell(40, 10, 'Kategori Triase');

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(50, 91);
            $pdf::MultiCell(70, 10, $triase[0]->kategori_triase);

            $pdf::SetFont('Times', 'B', 11);
            $pdf::SetXY(10, 101);
            $pdf::Cell(40, 10, 'Pemeriksaan Triase');

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(50, 101);
            $pdf::MultiCell(70, 10, $triase[0]->pemeriksaan_triase);

            $pdf::SetFont('Times', 'B', 11);
            $pdf::SetXY(10, 111);
            $pdf::Cell(40, 10, 'Kesadaran');

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(50, 111);
            $pdf::MultiCell(70, 10, $kesadaran1 . $kesadaran2 . $kesadaran3 . $kesadaran4 . $kesadaran5 . $kesadaran6 . $kesadaran7 . $kesadaran8 . $kesadaran9 . $kesadaran10 . $kesadaran11 . $kesadaran12);

            $pdf::SetFont('Times', 'B', 11);
            $pdf::SetXY(10, 121);
            $pdf::Cell(40, 10, 'Upaya Nafas');

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(50, 121);
            $pdf::MultiCell(70, 10, $upaya1 . $upaya2 . $upaya3 . $upaya4 . $upaya5 . $upaya6 . $upaya7 . $upaya8 . $upaya9 . $upaya10 . $upaya11);

            $pdf::SetFont('Times', 'B', 11);
            $pdf::SetXY(10, 131);
            $pdf::Cell(40, 10, 'Sirkulasi');

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(50, 131);
            $pdf::MultiCell(70, 10, $sirkulasi1 . $sirkulasi2 . $sirkulasi3 . $sirkulasi4 . $sirkulasi5 . $sirkulasi6 . $sirkulasi7 . $sirkulasi8 . $sirkulasi9 . $sirkulasi10 . $sirkulasi11);

            $pdf::SetFont('Times', 'B', 11);
            $pdf::SetXY(10, 141);
            $pdf::Cell(40, 10, 'Sistem Respirasi');

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(50, 141);
            $pdf::MultiCell(70, 10, $gejala_respirasi1 . $gejala_respirasi2 . $gejala_respirasi3 . $gejala_respirasi4 . $gejala_respirasi5 . $gejala_respirasi6 . $gejala_respirasi7 . $gejala_respirasi8 . $gejala_respirasi9 . $gejala_respirasi10 . $gejala_respirasi11);

            $pdf::SetFont('Times', 'B', 11);
            $pdf::SetXY(10, 151);
            $pdf::Cell(40, 10, 'Sistem Kardiovaskular');

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(50, 151);
            $pdf::MultiCell(70, 10, $kardio1 . $kardio2 . $kardio3 . $kardio4 . $kardio5 . $kardio6 . $kardio7 . $kardio8 . $kardio9 . $kardio10 . $kardio11);


            $pdf::SetFont('Times', 'B', 11);
            $pdf::SetXY(10, 161);
            $pdf::Cell(40, 10, 'Sistem Pernafasan');

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(50, 161);
            $pdf::MultiCell(70, 10, $pernafasan1 . $pernafasan2 . $pernafasan3 . $pernafasan4 . $pernafasan5 . $pernafasan6 . $pernafasan7 . $pernafasan8 . $pernafasan9 . $pernafasan10 . $pernafasan11 . $pernafasan12 . $pernafasan13 . $pernafasan14 . $pernafasan15 . $pernafasan16 . $pernafasan17 . $pernafasan18 . $pernafasan19);


            $pdf::SetFont('Times', 'B', 11);
            $pdf::SetXY(10, 171);
            $pdf::Cell(40, 10, 'Child Abuse');

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(50, 171);
            $pdf::MultiCell(70, 10, $abuse1 . $abuse2 . $abuse3 . $abuse4);


            $pdf::SetFont('Times', 'B', 11);
            $pdf::SetXY(10, 181);
            $pdf::Cell(40, 10, 'Lain-lain');

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(50, 181);
            $pdf::MultiCell(70, 10, $lain1 . $lain2 . $lain3 . $lain4 . $lain5 . $lain6 . $lain7 . $lain8 . $lain9 . $lain10 . $lain11 . $lain12 . $lain13 . $lain14 . $lain15);

            //kotak ttv
            $pdf::Rect(8, 191, 198, 25);
            //isi ttv

            $pdf::SetFont('Times', '', 11);
            $pdf::SetXY(10, 191);
            $pdf::MultiCell(40, 10, 'Keadaan Umum');
            $pdf::SetXY(41, 191);
            $pdf::Cell(40, 10, ':');
            $pdf::SetFont('Times', '', 11);
            $pdf::SetXY(43, 191);
            $pdf::Cell(43, 10, $ttv[0]->keadaan_umum);


            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(120, 191);
            $pdf::Cell(40, 10, 'Kesadaran');
            $pdf::SetXY(147, 191);
            $pdf::Cell(45, 10, ':');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(149, 191);
            $pdf::MultiCell(70, 10, $ttv[0]->kesadaran);


            $pdf::SetFont('Times', '', 11);
            $pdf::SetXY(10, 196);
            $pdf::MultiCell(40, 10, 'Berat Badan');
            $pdf::SetXY(41, 196);
            $pdf::Cell(40, 10, ':');
            $pdf::SetFont('Times', '', 11);
            $pdf::SetXY(43, 196);
            $pdf::Cell(43, 10, $ttv[0]->berat_badan . ' KG');


            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(120, 196);
            $pdf::Cell(40, 10, 'Tinggi Badan');
            $pdf::SetXY(147, 196);
            $pdf::Cell(45, 10, ':');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(149, 196);
            $pdf::MultiCell(70, 10, $ttv[0]->berat_badan . ' cm');


            $pdf::SetFont('Times', '', 11);
            $pdf::SetXY(10, 201);
            $pdf::MultiCell(40, 10, 'Tekanan Darah');
            $pdf::SetXY(41, 201);
            $pdf::Cell(40, 10, ':');
            $pdf::SetFont('Times', '', 11);
            $pdf::SetXY(43, 201);
            $pdf::Cell(43, 10, $ttv[0]->tekanan_darah . ' mm Hg');


            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(120, 201);
            $pdf::Cell(40, 10, 'Frekuensi Nadi');
            $pdf::SetXY(147, 201);
            $pdf::Cell(45, 10, ':');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(149, 201);
            $pdf::MultiCell(70, 10, $ttv[0]->frekuensi_nadi . ' x / menit');


            $pdf::SetFont('Times', '', 11);
            $pdf::SetXY(10, 206);
            $pdf::MultiCell(40, 10, 'Frekuensi Nafas');
            $pdf::SetXY(41, 206);
            $pdf::Cell(40, 10, ':');
            $pdf::SetFont('Times', '', 11);
            $pdf::SetXY(43, 206);
            $pdf::Cell(43, 10, $ttv[0]->frekuensi_nafas . ' x / menit');


            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(120, 206);
            $pdf::Cell(40, 10, 'Suhu');
            $pdf::SetXY(147, 206);
            $pdf::Cell(45, 10, ':');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(149, 206);
            $pdf::MultiCell(70, 10, $ttv[0]->suhu . ' °C');

            // gambar triase
            $pdf::Rect(8, 216, 99, 60);
            $pdf::Rect(107, 216, 99, 60);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(10, 232);
            $pdf::Cell(40, 10, 'Pastikan tanda pada gambar sesuai ketentuan yang ditetapkan');
            if ($triase[0]->penandaan_gambar == NULL) {
                $pdf::SetXY(12, 210);

                $pdf::Image('public/img/nyeri.png',  100, 40);
            } else {
                // $pdf::Image($triase[0]->penandaan_gambar, 12, 195, 80, 40);
                // $pdf::Image($tmpFilename, null, null, 0, 0);
                $pdf::SetXY(12, 216);

                $pdf::Image($tmpFilename, null, null, 100, 40, 'PNG');
                // $pdf::SetXY(10, 186);

                // $pdf::Cell(40, 10, $triase[0]->penandaan_gambar);
            }
            $pdf::SetXY(10, 237);
            $pdf::Cell(40, 10, 'V di area yang LEBAM / OEDEMA');
            $pdf::SetXY(10, 240);
            $pdf::Cell(40, 10, 'O di area yang terdapat SAYATAN');
            $pdf::SetXY(10, 243);
            $pdf::Cell(40, 10, 'X di area yang terdapat LUKA');
            $pdf::SetXY(10, 246);
            $pdf::Cell(40, 10, '+ di area yang terdapat LUKA');
            $pdf::SetXY(113, 216);
            $pdf::Cell(40, 10, 'Kesadaran :' . $triase[0]->kesadaran_1 . ' , ' . $triase[0]->kesadaran_2 . ' , ' . $triase[0]->kesadaran_3);
            $pdf::SetXY(113, 226);
            $pdf::Cell(40, 10, 'Status Psikologi :' . $triase[0]->status_psikologis . ' , ' . $triase[0]->status_psikologis1 . ' , ' . $triase[0]->status_psikologis2 . ' , ' . $triase[0]->status_psikologis3 . ' , ' . $triase[0]->status_psikologis4 . ' , ' . $triase[0]->status_psikologis5 . ' , ' . $triase[0]->status_psikologis6 . ' , ' . $triase[0]->status_psikologis7 . ' , ' . $triase[0]->status_psikologis8 . ' , ' . $triase[0]->status_psikologis9);
            //ttd dokter
            // $pdf::Rect(8, 200, 40, 10);
            // $pdf::Rect(48, 200, 158, 10);
            //ttd dokter
            // $pdf::Rect(8, 200, 40, 10);
            // $pdf::Rect(48, 200, 158, 10);
        }


        // $pdf::SetFont('Arial', 'B', 30);
        // $pdf::SetTextColor(255, 192, 203);




        $pdf::AddPage('P', 'letter');
        //Awal Header kertas
        $pdf::Image('public/img/kab_cirebonn.png', 10, 4, 20, 20);
        $pdf::Image('public/img/rsss.png', 180, 4, 20, 20);
        $pdf::SetFont('Times', 'B', 12);
        $pdf::SetXY(65, 5);
        $pdf::Cell(40, 10, 'PEMERINTAH KABUPATEN CIREBON');
        $pdf::SetFont('Times', 'B', 16);
        $pdf::SetXY(50, 10);
        $pdf::Cell(40, 10, 'RUMAH SAKIT UMUM DAERAH WALED');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(49.5, 15);
        $pdf::Cell(40, 10, 'Jl. Prabu Kiansantang No. 4 Telp. 0231 - 661126 Fax. 0231 - 664091 Cirebon');
        $pdf::SetLineWidth(1);
        $pdf::Line(10, 25, 200, 25);
        $pdf::SetLineWidth(0.25);
        $pdf::Line(10, 27, 200, 27);
        $pdf::SetFont('Times', 'BU', 18);
        $pdf::SetXY(75, 30);
        $pdf::Cell(40, 10, 'RESUME MEDIS IGD');

        //Awal kotak data pasien
        $pdf::Rect(8, 40, 198, 40);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 39);
        $pdf::MultiCell(40, 10, 'Nama Pasien');
        $pdf::SetXY(40, 39);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 39);
        $pdf::Cell(42, 10, $pasien[0]->nama_px);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 39);
        $pdf::Cell(40, 10, 'NO. RM');
        $pdf::SetXY(139, 39);
        $pdf::Cell(45, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(141, 39);
        $pdf::MultiCell(70, 10, $pasien[0]->no_rm);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 45);
        $pdf::Cell(40, 10, 'Penjamin');
        $pdf::SetXY(40, 45);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 45);
        $pdf::Cell(42, 10, $kunjungan[0]->penjamin);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 45);
        $pdf::Cell(40, 10, 'Tgl. Lahir');
        $pdf::SetXY(139, 45);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', 'B', 10);
        $pdf::SetXY(141, 45);
        $pdf::MultiCell(70, 10, $tgllahir);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 51);
        $pdf::Cell(40, 10, 'Umur');
        $pdf::SetXY(40, 51);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 51);
        $pdf::Cell(42, 10,  $pasien[0]->umur . ' th');

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 51);
        $pdf::Cell(40, 10, 'Diagnosis ');
        $pdf::SetXY(139, 51);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', 'B', 10);
        $pdf::SetXY(141, 51);
        $pdf::Cell(70, 10, $kunjungan[0]->diagnosa);




        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 57);
        $pdf::Cell(40, 10, 'ALAMAT');
        $pdf::SetXY(40, 57);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 9);
        $pdf::SetXY(42, 59.5);
        $pdf::MultiCell(79, 5, $pasien[0]->alamat);


        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(120, 57);
        $pdf::Cell(40, 10, 'Dokter');
        $pdf::SetXY(139, 57);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(141, 57);
        $pdf::MultiCell(70, 10, $kunjungan[0]->dokter);


        //ASSES AWAL DOKTER
        $pdf::SetFont('Times', 'BU', 14);
        $pdf::SetXY(10, 80);
        $pdf::Cell(240, 10, 'ASSESMEN MEDIS INSTALASI GAWAT DARURAT (IGD)');
        $pdf::SetFont('Times', 'UI', 14);
        $pdf::SetXY(70, 90);

        //kotak sumber data
        $pdf::Rect(8, 91, 198, 20);
        // $pdf::Rect(48, 91, 158, 10);



        //isi sumber data
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 91);
        $pdf::MultiCell(40, 10, 'Tangaal Kunjungan');
        $pdf::SetXY(41, 91);
        $pdf::Cell(40, 10, ':');
        $pdf::SetXY(65, 91);
        $pdf::Cell(40, 10, 'jam :');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 91);
        $pdf::Cell(43, 10, $tglmasuk);
        $pdf::SetXY(74, 91);
        $pdf::Cell(43, 10, $jammasuk . ' WIB');

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 91);
        $pdf::Cell(40, 10, 'Tanggal Assesmen');
        $pdf::SetXY(147, 91);
        $pdf::Cell(45, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(169, 91);
        $pdf::Cell(40, 10, 'jam :');
        $pdf::SetXY(149, 91);
        $pdf::MultiCell(70, 10, $tglass);
        $pdf::SetXY(177, 91);
        $pdf::MultiCell(70, 10, $jamass . ' WIB');


        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 96);
        $pdf::MultiCell(40, 10, 'Sumber Data');
        $pdf::SetXY(41, 96);
        $pdf::Cell(40, 10, ':');

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 96);
        $pdf::Cell(43, 10, $assesdok[0]->sumber_data);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 96);
        $pdf::MultiCell(40, 10, 'Sumber Data');
        $pdf::SetXY(41, 96);
        $pdf::Cell(40, 10, ':');

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 96);
        $pdf::Cell(43, 10, $ttv[0]->sumber_data);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 101);
        $pdf::MultiCell(40, 10, 'Macam Kasus');
        $pdf::SetXY(41, 101);
        $pdf::Cell(40, 10, ':');

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 101);
        $pdf::Cell(43, 10, $assesdok[0]->macam_kasus);


        //kotak ttv
        $pdf::Rect(8, 111, 198, 25);


        //isi ttv

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 111);
        $pdf::MultiCell(40, 10, 'Keadaan Umum');
        $pdf::SetXY(41, 111);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 111);
        $pdf::Cell(43, 10, $ttv[0]->keadaan_umum);


        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 111);
        $pdf::Cell(40, 10, 'Kesadaran');
        $pdf::SetXY(147, 111);
        $pdf::Cell(45, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(149, 111);
        $pdf::MultiCell(70, 10, $ttv[0]->kesadaran);


        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 116);
        $pdf::MultiCell(40, 10, 'Berat Badan');
        $pdf::SetXY(41, 116);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 116);
        $pdf::Cell(43, 10, $ttv[0]->berat_badan . ' KG');


        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 116);
        $pdf::Cell(40, 10, 'Tinggi Badan');
        $pdf::SetXY(147, 116);
        $pdf::Cell(45, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(149, 116);
        $pdf::MultiCell(70, 10, $ttv[0]->berat_badan . ' cm');


        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 121);
        $pdf::MultiCell(40, 10, 'Tekanan Darah');
        $pdf::SetXY(41, 121);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 121);
        $pdf::Cell(43, 10, $ttv[0]->tekanan_darah . ' mm Hg');


        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 121);
        $pdf::Cell(40, 10, 'Frekuensi Nadi');
        $pdf::SetXY(147, 121);
        $pdf::Cell(45, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(149, 121);
        $pdf::MultiCell(70, 10, $ttv[0]->frekuensi_nadi . ' x / menit');


        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 126);
        $pdf::MultiCell(40, 10, 'Frekuensi Nafas');
        $pdf::SetXY(41, 126);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 126);
        $pdf::Cell(43, 10, $ttv[0]->frekuensi_nafas . ' x / menit');


        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 126);
        $pdf::Cell(40, 10, 'Suhu');
        $pdf::SetXY(147, 126);
        $pdf::Cell(45, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(149, 126);
        $pdf::MultiCell(70, 10, $ttv[0]->suhu . ' °C');


        // assesmen awal 


        $pdf::Rect(8, 136, 198, 50);

        $pdf::SetFont('Times', 'B', 11);
        $pdf::SetXY(10, 136);
        $pdf::MultiCell(40, 10, 'Keluhan Utama');
        $pdf::SetXY(41, 136);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 136);
        $pdf::MultiCell(150, 10, $assesdok[0]->keluhan_utama);


        $pdf::SetFont('Times', 'B', 11);
        $pdf::SetXY(10, 146);
        $pdf::MultiCell(40, 10, 'Anamnesis');
        $pdf::SetXY(41, 146);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 146);
        $pdf::MultiCell(150, 10, $assesdok[0]->anamnesa);


        $pdf::SetFont('Times', 'B', 11);
        $pdf::SetXY(10, 156);
        $pdf::MultiCell(40, 10, 'Riwayat Alergi');
        $pdf::SetXY(41, 156);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 156);
        $pdf::MultiCell(198, 10, $riwayatpenyakit);


        //rekonsiliasi Obat
        $pdf::Rect(8, 186, 198, 8);
        $pdf::Rect(8, 194, 198, 50);


        $pdf::SetFont('Times', 'B', 11);
        $pdf::SetXY(10, 186);
        $pdf::MultiCell(198, 10, 'Rekonsiliasi Obat dan Data Obat Pasien Yang di Gunakan Saat Masuk Rumah Sakit');

        $pdf::AddPage('P', 'letter');

        //pemeriksaan fisik

        $pdf::Rect(8, 5, 198, 100);


        $pdf::SetFont('Times', 'B', 11);
        $pdf::SetXY(10, 5);
        $pdf::MultiCell(40, 10, 'Pemeriksaan Fisik');
        $pdf::SetXY(41, 5);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 10);
        $pdf::MultiCell(40, 10, 'Primary Survey');
        $pdf::SetXY(41, 10);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(43, 13);
        $pdf::MultiCell(198, 5, $assesdok[0]->primary_survey);

        $pdf::SetXY(10, 45);
        $pdf::MultiCell(40, 10, 'Secondary Survey');
        $pdf::SetXY(41, 45);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(43, 48);
        $pdf::MultiCell(198, 5, $assesdok[0]->secondary_survey);


        //diagnosa kerja
        $pdf::Rect(8, 105, 198, 15);
        $pdf::SetFont('Times', 'B', 10);
        $pdf::SetXY(10, 105);
        $pdf::MultiCell(40, 10, 'Diagnosa Kerja  :');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(40, 108);
        $pdf::MultiCell(198, 5, $assesdok[0]->diagnosa_kerja);


        //tatalaksana

        $pdf::Rect(8, 120, 198, 100);
        $pdf::SetFont('Times', 'B', 10);
        $pdf::SetXY(10, 120);
        $pdf::MultiCell(40, 10, 'Tata Laksana  :');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(10, 125);
        $pdf::MultiCell(40, 10, 'Tata Laksana GP  :');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(40, 127.5);
        $pdf::MultiCell(198, 5, $assesdok[0]->tata_laksana);
        $pdf::SetXY(10, 160);
        $pdf::MultiCell(40, 10, 'Tata Laksana DPJP  :');
        $pdf::SetFont('Times', '', 10);
        foreach ($dpjp as $d) {
            $pdf::SetX(10);
            $pdf::Cell(60, 10, $d->nama_dpjp, 0, "", "L");
            $pdf::Cell(80, 10, ': ' . $d->tindakan_kedokteran, 0, "", "L");

            $pdf::Ln();
            // $pdf::SetXY(10, 164.5);
            // $pdf::Cell(40, 10, ':');
            // $pdf::SetXY(60, 167);

            // $pdf::MultiCell(160, 5, $d->tindakan_kedokteran);
        }
        //evluasi 30 pertama
        $pdf::Rect(8, 220, 198, 20);
        $pdf::SetFont('Times', 'B', 11);
        $pdf::SetXY(10, 220);
        $pdf::MultiCell(53, 10, 'Evaluasi (30 Menit Pertama) :');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(61, 222);
        $pdf::MultiCell(140, 5, $assesdok[0]->tiga_pertama);

        //evluasi 30 kedua
        $pdf::Rect(8, 240, 198, 20);
        $pdf::SetFont('Times', 'B', 11);
        $pdf::SetXY(10, 240);
        $pdf::MultiCell(53, 10, 'Evaluasi (30 Menit Kedua) :');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(58, 242.5);
        $pdf::MultiCell(140, 5, $assesdok[0]->tiga_kedua);

        $pdf::AddPage('P', 'letter');

        //Tindak Lanjut

        $pdf::Rect(8, 5, 198, 10);


        $pdf::SetFont('Times', 'B', 11);
        $pdf::SetXY(10, 5);
        $pdf::MultiCell(40, 10, 'Tindak Lanjut');
        $pdf::SetXY(41, 5);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(43, 5);
        $pdf::MultiCell(198, 10, 'belum');

        //Cara keluar

        $pdf::Rect(8, 15, 198, 10);


        $pdf::SetFont('Times', 'B', 11);
        $pdf::SetXY(10, 15);
        $pdf::MultiCell(80, 10, 'Cara Keluar Dari Instalasi Gawat Darurat');
        $pdf::SetXY(82, 15);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(84, 15);
        $pdf::MultiCell(198, 10, $assesdok[0]->cara_pulang);

        //keadaan keluar

        $pdf::Rect(8, 25, 198, 10);


        $pdf::SetFont('Times', 'B', 11);
        $pdf::SetXY(10, 25);
        $pdf::MultiCell(30, 10, 'Keadaan Keluar');
        $pdf::SetXY(42, 25);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(44, 25);
        $pdf::MultiCell(198, 10, $assesdok[0]->keadaan_pulang);

        //pasien keluar dari

        $pdf::Rect(8, 35, 198, 10);


        $pdf::SetFont('Times', 'B', 11);
        $pdf::SetXY(10, 35);
        $pdf::MultiCell(90, 10, 'Pasien Keluar dari Instalasi Gawat Darurat,');
        $pdf::SetXY(85, 35);
        $pdf::Cell(40, 10, 'Tanggal :');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(104, 35);
        $pdf::Cell(198, 10, $tglklr);
        $pdf::SetFont('Times', 'B', 11);

        $pdf::SetXY(130, 35);
        $pdf::Cell(40, 10, 'Jam :');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(140, 35);
        $pdf::Cell(198, 10, $jamklr . ' WIB');


        //kotak TTD
        $pdf::Rect(8, 205, 198, 10);

        $pdf::Rect(8, 215, 66, 10);
        $pdf::Rect(74, 215, 66, 10);
        $pdf::Rect(140, 215, 66, 10);

        $pdf::SetFont('Times', 'B', 11);
        $pdf::SetXY(80, 205);
        $pdf::Cell(40, 10, 'Yang Melakukan Assesmen');
        $pdf::SetXY(10, 215);
        $pdf::Cell(40, 10, 'Tanggal dan Jam selesai Asssesmen');
        $pdf::SetXY(95, 215);
        $pdf::Cell(40, 10, 'Nama Dokter');
        $pdf::SetXY(160, 215);
        $pdf::Cell(40, 10, 'Tanda Tangan');

        $pdf::Rect(8, 225, 66, 40);
        $pdf::Rect(74, 225, 66, 40);
        $pdf::Rect(140, 225, 66, 40);
        $pdf::SetFont('Times', '', 10);


        $pdf::SetXY(10, 225);

        $pdf::Cell(40, 10, 'Tanggal : ' . $tglass . '   Jam : ' . $jamass);
        $pdf::SetXY(85, 225);
        $pdf::Cell(40, 10, $kunjungan[0]->dokter);
        $pdf::SetXY(160, 225);
        $pdf::Cell(40, 10, 'Tanda Tangan');



        $pdf::AddPage('P', 'letter');
        //Awal Header kertas
        $pdf::Image('public/img/kab_cirebonn.png', 10, 4, 20, 20);
        $pdf::Image('public/img/rsss.png', 180, 4, 20, 20);
        $pdf::SetFont('Times', 'B', 12);
        $pdf::SetXY(65, 5);
        $pdf::Cell(40, 10, 'PEMERINTAH KABUPATEN CIREBON');
        $pdf::SetFont('Times', 'B', 16);
        $pdf::SetXY(50, 10);
        $pdf::Cell(40, 10, 'RUMAH SAKIT UMUM DAERAH WALED');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(49.5, 15);
        $pdf::Cell(40, 10, 'Jl. Prabu Kiansantang No. 4 Telp. 0231 - 661126 Fax. 0231 - 664091 Cirebon');
        $pdf::SetLineWidth(1);
        $pdf::Line(10, 25, 200, 25);
        $pdf::SetLineWidth(0.25);
        $pdf::Line(10, 27, 200, 27);
        $pdf::SetFont('Times', 'BU', 18);
        $pdf::SetXY(75, 30);
        $pdf::Cell(40, 10, 'RESUME MEDIS IGD');

        //Awal kotak data pasien
        $pdf::Rect(8, 40, 198, 40);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 39);
        $pdf::MultiCell(40, 10, 'Nama Pasien');
        $pdf::SetXY(40, 39);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 39);
        $pdf::Cell(42, 10, $pasien[0]->nama_px);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 39);
        $pdf::Cell(40, 10, 'NO. RM');
        $pdf::SetXY(139, 39);
        $pdf::Cell(45, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(141, 39);
        $pdf::MultiCell(70, 10, $pasien[0]->no_rm);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 45);
        $pdf::Cell(40, 10, 'Penjamin');
        $pdf::SetXY(40, 45);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 45);
        $pdf::Cell(42, 10, $kunjungan[0]->penjamin);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 45);
        $pdf::Cell(40, 10, 'Tgl. Lahir');
        $pdf::SetXY(139, 45);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', 'B', 10);
        $pdf::SetXY(141, 45);
        $pdf::MultiCell(70, 10, $tgllahir);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 51);
        $pdf::Cell(40, 10, 'Umur');
        $pdf::SetXY(40, 51);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 51);
        $pdf::Cell(42, 10,  $pasien[0]->umur . ' th');

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 51);
        $pdf::Cell(40, 10, 'Diagnosis ');
        $pdf::SetXY(139, 51);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', 'B', 10);
        $pdf::SetXY(141, 51);
        $pdf::Cell(70, 10, $kunjungan[0]->diagnosa);




        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 57);
        $pdf::Cell(40, 10, 'ALAMAT');
        $pdf::SetXY(40, 57);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 9);
        $pdf::SetXY(42, 59.5);
        $pdf::MultiCell(79, 5, $pasien[0]->alamat);


        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(120, 57);
        $pdf::Cell(40, 10, 'Dokter');
        $pdf::SetXY(139, 57);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(141, 57);
        $pdf::MultiCell(70, 10, $kunjungan[0]->dokter);


        //ASSES AWAL Perawat
        $pdf::SetFont('Times', 'BU', 14);
        $pdf::SetXY(10, 80);
        $pdf::Cell(240, 10, 'ASSESMEN KEPERAWATAN INSTALASI GAWAT DARURAT (IGD)');
        $pdf::SetFont('Times', 'UI', 14);
        $pdf::SetXY(70, 90);

        //kotak sumber data
        $pdf::Rect(8, 91, 198, 25.5);
        // $pdf::Rect(48, 91, 158, 10);



        //isi sumber data
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 91);
        $pdf::MultiCell(40, 10, 'Tangaal Kunjungan');
        $pdf::SetXY(41, 91);
        $pdf::Cell(40, 10, ':');
        $pdf::SetXY(65, 91);
        $pdf::Cell(40, 10, 'jam :');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 91);
        $pdf::Cell(43, 10, $tglmasuk);
        $pdf::SetXY(74, 91);
        $pdf::Cell(43, 10, $jammasuk . ' WIB');

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 91);
        $pdf::Cell(40, 10, 'Tanggal Assesmen');
        $pdf::SetXY(147, 91);
        $pdf::Cell(45, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(169, 91);
        $pdf::Cell(40, 10, 'jam :');
        $pdf::SetXY(149, 91);
        $pdf::MultiCell(70, 10, $tglassp);
        $pdf::SetXY(177, 91);
        $pdf::MultiCell(70, 10, $jamassp . ' WIB');


        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 96);
        $pdf::MultiCell(40, 10, 'Sumber Data');
        $pdf::SetXY(41, 96);
        $pdf::Cell(40, 10, ':');

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 96);
        $pdf::Cell(43, 10, $assesper[0]->sumber_data);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 96);
        $pdf::MultiCell(40, 10, 'Sumber Data');
        $pdf::SetXY(41, 96);
        $pdf::Cell(40, 10, ':');

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 96);
        $pdf::Cell(43, 10, $ttv[0]->sumber_data);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 101);
        $pdf::MultiCell(40, 10, 'Asal Masuk');
        $pdf::SetXY(41, 101);
        $pdf::Cell(40, 10, ':');

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 101);
        $pdf::Cell(43, 10, $assesper[0]->asal_masuk);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 106);
        $pdf::MultiCell(40, 10, 'Asal Masuk');
        $pdf::SetXY(41, 106);
        $pdf::Cell(40, 10, ':');

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 106);
        $pdf::Cell(43, 10, $assesper[0]->cara_masuk);


        //kotak ttv
        $pdf::Rect(8, 116.5, 198, 25);


        //isi ttv

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 116.5);
        $pdf::MultiCell(40, 10, 'Keadaan Umum');
        $pdf::SetXY(41, 116.5);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 116.5);
        $pdf::Cell(43, 10, $ttv[0]->keadaan_umum);


        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 116.5);
        $pdf::Cell(40, 10, 'Kesadaran');
        $pdf::SetXY(147, 116.5);
        $pdf::Cell(45, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(149, 116.5);
        $pdf::MultiCell(70, 10, $ttv[0]->kesadaran);


        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 121.5);
        $pdf::MultiCell(40, 10, 'Berat Badan');
        $pdf::SetXY(41, 121.5);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 121.5);
        $pdf::Cell(43, 10, $ttv[0]->berat_badan . ' KG');


        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 121.5);
        $pdf::Cell(40, 10, 'Tinggi Badan');
        $pdf::SetXY(147, 121.5);
        $pdf::Cell(45, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(149, 121.5);
        $pdf::MultiCell(70, 10, $ttv[0]->berat_badan . ' cm');


        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 126.5);
        $pdf::MultiCell(40, 10, 'Tekanan Darah');
        $pdf::SetXY(41, 126.5);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 126.5);
        $pdf::Cell(43, 10, $ttv[0]->tekanan_darah . ' mm Hg');


        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 126.5);
        $pdf::Cell(40, 10, 'Frekuensi Nadi');
        $pdf::SetXY(147, 126.5);
        $pdf::Cell(45, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(149, 126.5);
        $pdf::MultiCell(70, 10, $ttv[0]->frekuensi_nadi . ' x / menit');


        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 131.5);
        $pdf::MultiCell(40, 10, 'Frekuensi Nafas');
        $pdf::SetXY(41, 131.5);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(43, 131.5);
        $pdf::Cell(43, 10, $ttv[0]->frekuensi_nafas . ' x / menit');


        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 131.5);
        $pdf::Cell(40, 10, 'Suhu');
        $pdf::SetXY(147, 131.5);
        $pdf::Cell(45, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(149, 131.5);
        $pdf::MultiCell(70, 10, $ttv[0]->suhu . ' °C');



        //kotak Pemeriksaan fisik
        $pdf::Rect(8, 141.5, 198, 10);
        $pdf::Rect(8, 151.5, 198, 100);

        $pdf::SetFont('Times', 'B', 11);
        $pdf::SetXY(8, 141.5);
        $pdf::Cell(40, 10, 'PEMERIKSAAN FISIK');

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 151.5);
        $pdf::MultiCell(40, 10, '- Tekanan Intrakranial');
        $pdf::SetXY(46, 151.5);
        $pdf::Cell(43, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(50, 151.5);
        $pdf::Cell(100, 10, $assesper[0]->tekanan_intrakranial);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 161.5);
        $pdf::Cell(40, 10, '- Neuro Sensorik /');
        $pdf::SetXY(10, 166.5);
        $pdf::Cell(40, 10, '  Muskolo Skeletal');
        $pdf::SetXY(46, 161.5);
        $pdf::Cell(43, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(50, 161.5);
        $pdf::Cell(120, 10, $assesper[0]->neuro_sensorik, $assesper[0]->muskolo_skletal);


        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 171.5);
        $pdf::Cell(40, 10, '- Intlegumen');
        $pdf::SetXY(46, 171.5);
        $pdf::Cell(43, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(50, 171.5);
        $pdf::Cell(120, 10, $assesper[0]->integumen);


        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 181.5);
        $pdf::Cell(40, 10, '- Tugor Kulit');
        $pdf::SetXY(46, 181.5);
        $pdf::Cell(43, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(50, 181.5);
        $pdf::Cell(120, 10, $assesper[0]->turgor_kulit);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 191.5);
        $pdf::Cell(40, 10, '- Edema');
        $pdf::SetXY(46, 191.5);
        $pdf::Cell(43, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(50, 191.5);
        $pdf::Cell(120, 10, $assesper[0]->edema);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 201.5);
        $pdf::Cell(40, 10, '- Mukosa Mulut');
        $pdf::SetXY(46, 201.5);
        $pdf::Cell(43, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(50, 201.5);
        $pdf::Cell(120, 10, $assesper[0]->mukosa_mulut);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 211.5);
        $pdf::Cell(40, 10, '- Pendarahn');
        $pdf::SetXY(46, 211.5);
        $pdf::Cell(43, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(50, 211.5);
        $pdf::Cell(120, 10, $assesper[0]->jumlah_pendarahan);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 221.5);
        $pdf::Cell(40, 10, '- Intoksikasi');
        $pdf::SetXY(46, 221.5);
        $pdf::Cell(43, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(50, 221.5);
        $pdf::Cell(120, 10, $assesper[0]->introksikasi);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 231.5);
        $pdf::Cell(40, 10, '- Eliminasi');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(46, 231.5);
        $pdf::Cell(40, 10, 'BAB :');

        $pdf::SetXY(58, 231.5);
        $pdf::Cell(50, 10,  'Frekuensi : ' . $assesper[0]->bab_frekuensi . ' X');
        $pdf::SetXY(90, 231.5);
        $pdf::Cell(50, 10,  'Konsistensi : ' . $assesper[0]->bab_konsistensi);
        $pdf::SetXY(122, 231.5);
        $pdf::Cell(50, 10,  'Warna : ' . $assesper[0]->bab_warna);
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(46, 236.5);
        $pdf::Cell(40, 10, 'BAK :');
        $pdf::SetXY(58, 236.5);
        $pdf::Cell(50, 10,  'Frekuensi : ' . $assesper[0]->bak_frekuensi . ' X');
        $pdf::SetXY(90, 236.5);
        $pdf::Cell(50, 10,  'Konsistensi : ' . $assesper[0]->bak_konsistensi);
        $pdf::SetXY(122, 236.5);
        $pdf::Cell(50, 10,  'Warna : ' . $assesper[0]->bak_warna);


        // psikososial
        $pdf::AddPage('P', 'letter');

        $pdf::Rect(8, 5, 198, 10);

        $pdf::SetFont('Times', 'B', 11);
        $pdf::SetXY(10, 5);
        $pdf::Cell(40, 10, 'PSIKOSOSIAL, EKONOMI DAN SPIRITUAL');
        $pdf::Rect(8, 15, 198, 25);


        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 15);
        $pdf::Cell(40, 10, 'Kecemasan');
        $pdf::SetXY(46, 15);
        $pdf::Cell(43, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(50, 15);
        $pdf::Cell(120, 10, $assesper[0]->kecemasan);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 20);
        $pdf::Cell(40, 10, 'Koping Mekanisme');
        $pdf::SetXY(46, 20);
        $pdf::Cell(43, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(50, 20);
        $pdf::Cell(120, 10, $assesper[0]->koping_mekanisme);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 25);
        $pdf::Cell(40, 10, 'Pekerjaan');
        $pdf::SetXY(46, 25);
        $pdf::Cell(43, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(50, 25);
        $pdf::Cell(120, 10, $assesper[0]->pekerjaan);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 30);
        $pdf::Cell(40, 10, 'Agama');
        $pdf::SetXY(46, 30);
        $pdf::Cell(43, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(50, 30);
        $pdf::Cell(120, 10, $assesper[0]->agama);

        //skrining nyeri
        $pdf::Rect(8, 40, 198, 10);

        $pdf::SetFont('Times', 'B', 11);
        $pdf::SetXY(10, 40);
        $pdf::Cell(40, 10, 'SKRINING NYERI');

        $pdf::Rect(8, 50, 198, 10);
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 50);
        $pdf::Cell(40, 10, 'Apakah Terdapat Keluhan nyeri ??');
        // $pdf::SetXY(90, 50);
        // $pdf::Cell(43, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(70, 50);
        $pdf::Cell(120, 10, $assesper[0]->keluhan_nyeri);

        $pdf::Rect(8, 60, 90, 70);
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(45.5, 60);
        $pdf::Cell(40, 10, 'Lokasi Nyeri');
        $pdf::SetXY(41.5, 65);
        $pdf::Cell(40, 10, '(Beri Tanda Arsiran)');
        if ($assesper[0]->penandaan_gambar == NULL) {
            $pdf::Image('public/img/nyeri.png', 12, 195, 100, 40);
        } else {
            // $pdf::Image($triase[0]->penandaan_gambar, 12, 195, 80, 40);
            // $pdf::Image($tmpFilename, null, null, 0, 0);
            $pdf::SetXY(12, 75);

            $pdf::Image($tmpFilenamee, null, null, 80, 40, 'PNG');
            // $pdf::SetXY(10, 186);

            // $pdf::Cell(40, 10, $triase[0]->penandaan_gambar);
        }

        $pdf::SetFont('Times', 'I', 10);
        $pdf::SetXY(10, 120);
        $pdf::Cell(40, 10, 'Catatan : Beri Tanda V pada [] Pilihan');

        $pdf::Rect(98, 60, 108, 10);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(99, 60);
        $pdf::Cell(40, 10, 'Apakah Nyerinya berpindah dari tempat satu ke tempat lainya??');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(152, 60);
        // $pdf::Cell(20, 10, '$assesper[0]->keluhan_nyeri');


        $pdf::Rect(98, 70, 108, 10);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(99, 70);
        $pdf::Cell(40, 10, 'Berapa Lama Nyeri ini??');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(145, 70);
        $pdf::Cell(20, 10, $assesper[0]->lamanya_nyeri);

        $pdf::Rect(98, 80, 108, 10);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(99, 80);
        $pdf::Cell(40, 10, 'Rasa Nyeri :');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(118, 80);
        $pdf::Cell(20, 10, $assesper[0]->rasa_nyeri);

        $pdf::Rect(98, 80, 108, 10);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(99, 80);
        $pdf::Cell(40, 10, 'Rasa Nyeri :');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(118, 80);
        $pdf::Cell(20, 10, $assesper[0]->rasa_nyeri);


        $pdf::Rect(98, 90, 108, 20);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(99, 90);
        $pdf::Cell(40, 10, 'Seberapa sering anda mengalami nyeri ini? berapa lama? setiap :');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(99, 95);
        $pdf::Cell(99, 10, $assesper[0]->sering_nyeri . '  Selama : ' . $assesper[0]->serring_nyeri);

        $pdf::Rect(98, 110, 108, 20);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(99, 110);
        $pdf::Cell(40, 10, 'Apa yang membuat nyeri berkurang atau bertambah parah?');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(99, 115);
        $pdf::Cell(99, 10, $assesper[0]->berkurang_nyeri);


        $pdf::Rect(8, 130, 198, 70);
        if ($triase[0]->jenis_triase == 'dewasa') {
            $pdf::SetFont('Times', 'BI', 10);
            $pdf::SetXY(8, 130);
            $pdf::Cell(40, 10, '*) Pasien Dewasa Menggunakan Numeric Rating Scale');

            $pdf::Image('public/img/numeric.jpg', 12, 140, 100, 40);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(130, 130);
            $pdf::Cell(40, 10, $assesper[0]->scale_nyeri);
            $pdf::SetXY(130, 135);
            $pdf::Cell(40, 10, 'score = ' . $assesper[0]->scale_nyeri1);

            // penilaian resiko jatuh
            $pdf::AddPage('P', 'letter');
            // $pdf::Rect(8, 10, 198, 10);
            $pdf::Rect(8, 10, 99, 10);
            $pdf::Rect(107, 10, 99, 10);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(8, 10);
            $pdf::Cell(40, 10, 'PENILAIAN RESIKO JATUH');
            $pdf::SetXY(109, 10);
            $pdf::Cell(40, 10, 'SKRINING NUTRISI');
            // $pdf::Rect(8, 20, 198, 10);
            $pdf::Rect(8, 20, 99, 10);
            $pdf::Rect(107, 20, 99, 10);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(8, 20);
            $pdf::Cell(40, 10, 'Pasien dewasa menggunakan skala morse falls scale');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(107, 20);
            $pdf::Cell(40, 10, 'Pasien dewasa menggunakan Malnutrition screening tools');
            $pdf::Rect(8, 30, 99, 240);
            $pdf::Rect(107, 30, 99, 240);



            //kotak skrining nutrisi

            $pdf::Rect(109, 32, 10, 5);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(111, 32);
            $pdf::MultiCell(20, 5, 'No');
            $pdf::Rect(119, 32, 60, 5);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(140, 32);
            $pdf::MultiCell(30, 5, 'Parameter');
            $pdf::Rect(179, 32, 12.5, 5);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(181, 32);
            $pdf::MultiCell(20, 5, 'Nilai');
            $pdf::Rect(191.5, 32, 12.5, 5);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(192.5, 32);
            $pdf::MultiCell(20, 5, 'Skor');

            //kotak penilain resiko jatuh batas maksimal 95 

            $pdf::Rect(10, 32, 20, 10);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(12, 32);
            $pdf::MultiCell(20, 5, 'Faktor Resiko');
            $pdf::Rect(30, 32, 50, 10);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(50, 34);
            $pdf::MultiCell(20, 5, 'Skala');
            $pdf::Rect(80, 32, 12.5, 10);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(82, 34);
            $pdf::MultiCell(20, 5, 'Poin');
            $pdf::Rect(92.5, 32, 12.5, 10);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(93.5, 34);
            $pdf::MultiCell(20, 5, 'Skor');

            // riwayat jatuh
            $pdf::Rect(10, 42, 20, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(12, 42);
            $pdf::MultiCell(20, 5, 'Riwayat Jatuh');
            $pdf::Rect(30, 42, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 42);
            $pdf::MultiCell(20, 5, 'Ya');
            $pdf::Rect(30, 47, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 47);
            $pdf::MultiCell(20, 5, 'Tidak');
            $pdf::Rect(80, 42, 12.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 42);
            $pdf::MultiCell(20, 5, '25');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 47);
            $pdf::MultiCell(20, 5, '0');

            $pdf::Rect(92.5, 42, 12.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(95.5, 44);
            $pdf::MultiCell(20, 5, $assesper[0]->riwayat_jatuh);

            // diagnosis sekunder
            $pdf::Rect(10, 52, 20, 20);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(12, 53);
            $pdf::MultiCell(18, 3, 'Diagnosis sekunder (>= 2 diagnosis medis)');
            $pdf::Rect(30, 52, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 52);
            $pdf::MultiCell(20, 5, 'Ya');
            $pdf::Rect(30, 57, 62.5, 15);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 57);
            $pdf::MultiCell(20, 5, 'Tidak');
            $pdf::Rect(80, 52, 12.5, 20);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 52);
            $pdf::MultiCell(20, 5, '15');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 57);
            $pdf::MultiCell(20, 5, '0');

            $pdf::Rect(92.5, 52, 12.5, 20);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(95.5, 54);
            $pdf::MultiCell(20, 5, $assesper[0]->diagnosis_sekunder);


            // alat bantu
            $pdf::Rect(10, 72, 20, 20);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(12, 73);
            $pdf::MultiCell(18, 3, 'Alat Bantu');
            $pdf::Rect(30, 72, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 72);
            $pdf::MultiCell(40, 5, 'Berpegangan pada perabot');
            $pdf::Rect(30, 77, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 77);
            $pdf::MultiCell(40, 5, 'Berpegangan pada perabot');
            $pdf::Rect(30, 82, 62.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 82);
            $pdf::MultiCell(40, 5, 'Tidak ada / kursi roda / perawat / tirah baring');
            $pdf::Rect(80, 72, 12.5, 20);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 72);
            $pdf::MultiCell(20, 5, '30');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 77);
            $pdf::MultiCell(20, 5, '15');
            $pdf::SetXY(82, 82);
            $pdf::MultiCell(20, 5, '0');



            $pdf::Rect(92.5, 72, 12.5, 20);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(95.5, 72);
            $pdf::MultiCell(20, 5, $assesper[0]->alat_bantu);

            // Terpasang infuse
            $pdf::Rect(10, 92, 20, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(12, 92);
            $pdf::MultiCell(20, 5, 'Terpasang infuse');
            $pdf::Rect(30, 92, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 92);
            $pdf::MultiCell(20, 5, 'Ya');
            $pdf::Rect(30, 97, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 97);
            $pdf::MultiCell(20, 5, 'Tidak');
            $pdf::Rect(80, 92, 12.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 92);
            $pdf::MultiCell(20, 5, '20');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 97);
            $pdf::MultiCell(20, 5, '0');

            $pdf::Rect(92.5, 92, 12.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(95.5, 94);
            $pdf::MultiCell(20, 5, $assesper[0]->terpasang_infuse);



            // gaya berjalan
            $pdf::Rect(10, 102, 20, 20);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(12, 103);
            $pdf::MultiCell(18, 3, 'Gaya Berjalan');
            $pdf::Rect(30, 102, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 102);
            $pdf::MultiCell(40, 5, 'Terganggu');
            $pdf::Rect(30, 107, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 107);
            $pdf::MultiCell(40, 5, 'Lemah');
            $pdf::Rect(30, 112, 62.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 112);
            $pdf::MultiCell(40, 5, 'Normal / tirah baring / imobilisasi');
            $pdf::Rect(80, 102, 12.5, 20);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 102);
            $pdf::MultiCell(20, 5, '20');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 107);
            $pdf::MultiCell(20, 5, '10');
            $pdf::SetXY(82, 112);
            $pdf::MultiCell(20, 5, '0');



            $pdf::Rect(92.5, 102, 12.5, 20);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(95.5, 102);
            $pdf::MultiCell(20, 5, $assesper[0]->gaya_berjalan);

            // Status Mental
            $pdf::Rect(10, 122, 20, 20);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(12, 123);
            $pdf::MultiCell(18, 3, 'Status Mental');
            $pdf::Rect(30, 122, 62.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 122);
            $pdf::MultiCell(40, 5, 'Sering Lupa Makan');

            $pdf::Rect(30, 132, 62.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 132);
            $pdf::MultiCell(40, 5, 'Normal / tirah baring / imobilisasi');
            $pdf::Rect(80, 122, 12.5, 20);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 122);
            $pdf::MultiCell(20, 5, '15');
            $pdf::SetFont('Times', '', 10);
            // $pdf::SetXY(82, 127);
            // $pdf::MultiCell(20, 5, '10');
            $pdf::SetXY(82, 132);
            $pdf::MultiCell(20, 5, '0');



            $pdf::Rect(92.5, 122, 12.5, 20);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(95.5, 122);
            $pdf::MultiCell(20, 5, $assesper[0]->status_mental);

            // total score dewasa
            $pdf::Rect(10, 142, 20, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(12, 143);
            $pdf::MultiCell(20, 3, 'Keterangan Skor');

            $pdf::Rect(30, 142, 47.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 142);

            if ($assesper[0]->total_resiko_dewasa <= 24) {
                $pdf::MultiCell(40, 5, 'resiko jatuh rendah');
            } elseif ($assesper[0]->total_resiko_dewasa >= 25 && $assesper[0]->total_resiko_dewasa <= 44) {
                $pdf::MultiCell(40, 5, 'resiko jatuh sedang');
            } else {
                $pdf::MultiCell(40, 5, 'resiko jatuh Tinggi');
            }

            $pdf::Rect(77.5, 142, 15, 10);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(77.5, 142);
            $pdf::MultiCell(15, 5, 'TOTAL');

            $pdf::Rect(92.5, 142, 12.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(95.5, 142);
            $pdf::MultiCell(20, 5, $assesper[0]->total_resiko_dewasa);




            //skrining nutrisi table
            //skrining nutrisi 1


            $pdf::Rect(109, 37, 10, 65);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(111, 37);
            $pdf::MultiCell(20, 5, '1');
            $pdf::Rect(119, 37, 60, 10);
            $pdf::SetFont('Times', '', 8);
            $pdf::SetXY(120, 37);
            $pdf::MultiCell(55, 5, 'Apakah pasien mengalami penurunan berat badan yang tidak direncakan?');
            $pdf::Rect(179, 37, 12.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 37);
            $pdf::MultiCell(20, 5, '');
            $pdf::Rect(191.5, 37, 12.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 37);
            $pdf::MultiCell(20, 5, '');

            $pdf::Rect(119, 47, 60, 10);
            $pdf::SetFont('Times', '', 8);
            $pdf::SetXY(120, 47);
            $pdf::MultiCell(55, 5, 'a. Tidak (tidak terjadi penurunan dalam 6 bulan terakhir)');
            $pdf::Rect(179, 47, 12.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 47);
            $pdf::MultiCell(20, 5, '0');
            $pdf::Rect(191.5, 47, 12.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 47);
            $pdf::MultiCell(20, 5, $assesper[0]->penurunan_bb);

            $pdf::Rect(119, 57, 60, 10);
            $pdf::SetFont('Times', '', 8);
            $pdf::SetXY(120, 57);
            $pdf::MultiCell(55, 5, 'b. Tidak yakin (tanyakan apakah naju / celana terasa longgar)');
            $pdf::Rect(179, 57, 12.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 57);
            $pdf::MultiCell(20, 5, '2');
            $pdf::Rect(191.5, 57, 12.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 57);
            $pdf::MultiCell(20, 5, '');

            $pdf::Rect(119, 67, 60, 10);
            $pdf::SetFont('Times', '', 8);
            $pdf::SetXY(120, 67);
            $pdf::MultiCell(55, 5, 'c. ya, berapakah penurunan berat badan tersebut?');
            $pdf::Rect(179, 67, 12.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 67);
            $pdf::MultiCell(20, 5, '');
            $pdf::Rect(191.5, 67, 12.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 67);
            $pdf::MultiCell(20, 5, '');

            $pdf::Rect(119, 77, 60, 5);
            $pdf::SetFont('Times', '', 8);
            $pdf::SetXY(120, 77);
            $pdf::MultiCell(55, 5, 'O 1 - 5 Kg');
            $pdf::Rect(179, 77, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 77);
            $pdf::MultiCell(20, 5, '1');
            $pdf::Rect(191.5, 77, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 77);
            $pdf::MultiCell(20, 5, '');

            $pdf::Rect(119, 82, 60, 5);
            $pdf::SetFont('Times', '', 8);
            $pdf::SetXY(120, 82);
            $pdf::MultiCell(55, 5, 'O 6 - 10 Kg');
            $pdf::Rect(179, 82, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 82);
            $pdf::MultiCell(20, 5, '2');
            $pdf::Rect(191.5, 82, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 82);
            $pdf::MultiCell(20, 5, '');

            $pdf::Rect(119, 87, 60, 5);
            $pdf::SetFont('Times', '', 8);
            $pdf::SetXY(120, 87);
            $pdf::MultiCell(55, 5, 'O 11 -15 Kg');
            $pdf::Rect(179, 87, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 87);
            $pdf::MultiCell(20, 5, '3');
            $pdf::Rect(191.5, 87, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 87);
            $pdf::MultiCell(20, 5, '');

            $pdf::Rect(119, 92, 60, 5);
            $pdf::SetFont('Times', '', 8);
            $pdf::SetXY(120, 92);
            $pdf::MultiCell(55, 5, 'O > 15 Kg');
            $pdf::Rect(179, 92, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 92);
            $pdf::MultiCell(20, 5, '4');
            $pdf::Rect(191.5, 92, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 92);
            $pdf::MultiCell(20, 5, '');


            $pdf::Rect(119, 97, 60, 5);
            $pdf::SetFont('Times', '', 8);
            $pdf::SetXY(120, 97);
            $pdf::MultiCell(55, 5, 'O tidak yakin');
            $pdf::Rect(179, 97, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 97);
            $pdf::MultiCell(20, 5, '2');
            $pdf::Rect(191.5, 97, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 97);
            $pdf::MultiCell(20, 5, '');


            $pdf::Rect(109, 102, 10, 20);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(111, 102);
            $pdf::MultiCell(20, 5, '2');
            $pdf::Rect(119, 102, 60, 10);
            $pdf::SetFont('Times', '', 8);
            $pdf::SetXY(120, 102);
            $pdf::MultiCell(55, 3, 'Apakah asuhan makanan pasien buruk akibat nafsu makan yang menurun **? (misalnya asupan makan hanya % dari biasanya)');
            $pdf::Rect(179, 102, 12.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 102);
            $pdf::MultiCell(20, 5, '');
            $pdf::Rect(191.5, 102, 12.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 102);
            $pdf::MultiCell(20, 5, '');

            $pdf::Rect(119, 112, 60, 5);
            $pdf::SetFont('Times', '', 8);
            $pdf::SetXY(120, 112);
            $pdf::MultiCell(55, 5, 'a. Tidak ');
            $pdf::Rect(179, 112, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 112);
            $pdf::MultiCell(20, 5, '0');
            $pdf::Rect(191.5, 112, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 112);
            $pdf::MultiCell(20, 5, $assesper[0]->asupan);

            $pdf::Rect(119, 117, 60, 5);
            $pdf::SetFont('Times', '', 8);
            $pdf::SetXY(120, 117);
            $pdf::MultiCell(55, 5, 'b. Ya ');
            $pdf::Rect(179, 117, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 117);
            $pdf::MultiCell(20, 5, '1');
            $pdf::Rect(191.5, 117, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 117);
            $pdf::MultiCell(20, 5, '');

            $pdf::Rect(109, 122, 70, 5);
            $pdf::SetFont('Times', '', 8);
            $pdf::SetXY(120, 122);
            $pdf::MultiCell(55, 5, 'Total Skor ');
            $pdf::Rect(179, 122, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 122);
            $pdf::MultiCell(20, 5, '');
            $pdf::Rect(191.5, 122, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 122);
            $pdf::MultiCell(20, 5, $assesper[0]->total_nutrisi_dws);

            $pdf::Rect(109, 127, 10, 15);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(111, 127);
            $pdf::MultiCell(20, 5, '3');
            $pdf::Rect(119, 127, 60, 5);
            $pdf::SetFont('Times', '', 8);
            $pdf::SetXY(120, 127);
            $pdf::MultiCell(55, 5, 'Sakit berat**)');
            $pdf::Rect(179, 127, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 127);
            $pdf::MultiCell(20, 5, '');
            $pdf::Rect(191.5, 127, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 127);
            $pdf::MultiCell(20, 5, '');

            $pdf::Rect(119, 132, 60, 5);
            $pdf::SetFont('Times', '', 8);
            $pdf::SetXY(120, 132);
            $pdf::MultiCell(55, 5, 'Tidak');
            $pdf::Rect(179, 132, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 132);
            $pdf::MultiCell(20, 5, '');
            $pdf::Rect(191.5, 132, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 132);
            $pdf::MultiCell(20, 5, '');

            $pdf::Rect(119, 137, 60, 5);
            $pdf::SetFont('Times', '', 8);
            $pdf::SetXY(120, 137);
            $pdf::MultiCell(55, 5, 'Ya');
            $pdf::Rect(179, 137, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 137);
            $pdf::MultiCell(20, 5, '');
            $pdf::Rect(191.5, 137, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 137);
            $pdf::MultiCell(20, 5, '');


            $pdf::Rect(109, 142, 70, 5);
            $pdf::SetFont('Times', '', 8);
            $pdf::SetXY(120, 142);
            $pdf::MultiCell(55, 5, 'Total Skor ');
            $pdf::Rect(179, 142, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 142);
            $pdf::MultiCell(20, 5, '');
            $pdf::Rect(191.5, 142, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 142);
            $pdf::MultiCell(20, 5, $assesper[0]->total_nutrisi_dws);
        } else {
            $pdf::SetFont('Times', 'BI', 10);
            $pdf::SetXY(8, 130);
            $pdf::Cell(40, 10, '*) Pasien Anak - anak Menggunakan Wong Baker Scale');

            $pdf::Image('public/img/wongbaker.jpg', 12, 140, 100, 40);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(130, 130);
            $pdf::Cell(40, 10, $assesper[0]->scale_nyeri);
            $pdf::SetXY(130, 135);
            $pdf::Cell(40, 10, 'score = ' . $assesper[0]->scale_nyeri1);

            // penilaian resiko jatuh
            $pdf::AddPage('P', 'letter');
            // $pdf::Rect(8, 10, 198, 10);
            $pdf::Rect(8, 10, 99, 10);
            $pdf::Rect(107, 10, 99, 10);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(8, 10);
            $pdf::Cell(40, 10, 'PENILAIAN RESIKO JATUH');
            $pdf::SetXY(109, 10);
            $pdf::Cell(40, 10, 'SKRINING NUTRISI');
            // $pdf::Rect(8, 20, 198, 10);
            $pdf::Rect(8, 20, 99, 10);
            $pdf::Rect(107, 20, 99, 10);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(8, 20);
            $pdf::Cell(40, 10, 'Pasien Anak menggunakan skala Humpty Dumpty');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(107, 20);
            $pdf::Cell(40, 10, 'Pasien Anak menggunakan Strong Kids');
            $pdf::Rect(8, 30, 99, 240);
            $pdf::Rect(107, 30, 99, 240);

            //kotak skrining nutrisi

            $pdf::Rect(109, 32, 10, 5);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(111, 32);
            $pdf::MultiCell(20, 5, 'No');
            $pdf::Rect(119, 32, 60, 5);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(140, 32);
            $pdf::MultiCell(30, 5, 'Parameter');
            $pdf::Rect(179, 32, 12.5, 5);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(181, 32);
            $pdf::MultiCell(20, 5, 'Nilai');
            $pdf::Rect(191.5, 32, 12.5, 5);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(192.5, 32);
            $pdf::MultiCell(20, 5, 'KET');

            //kotak penilain resiko jatuh batas maksimal 95 

            $pdf::Rect(10, 32, 20, 10);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(12, 32);
            $pdf::MultiCell(20, 5, 'Faktor Resiko');
            $pdf::Rect(30, 32, 50, 10);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(50, 34);
            $pdf::MultiCell(20, 5, 'Skala');
            $pdf::Rect(80, 32, 12.5, 10);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(82, 34);
            $pdf::MultiCell(20, 5, 'Poin');
            $pdf::Rect(92.5, 32, 12.5, 10);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(93.5, 34);
            $pdf::MultiCell(20, 5, 'Skor');

            // UMUR
            $pdf::Rect(10, 42, 20, 20);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(12, 42);
            $pdf::MultiCell(20, 5, 'UMUR');
            $pdf::Rect(30, 42, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 42);
            $pdf::MultiCell(50, 5, 'Kurang Dari 3 Tahun');
            $pdf::Rect(30, 47, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 47);
            $pdf::MultiCell(50, 5, '3 tahun - 7 tahun');
            $pdf::Rect(30, 52, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 52);
            $pdf::MultiCell(50, 5, '7 tahun - 13 tahun');
            $pdf::Rect(30, 57, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 57);
            $pdf::MultiCell(50, 5, 'Lebih dari 13 tahun');
            $pdf::Rect(80, 42, 12.5, 20);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 42);
            $pdf::MultiCell(20, 5, '4');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 47);
            $pdf::MultiCell(20, 5, '3');
            $pdf::SetXY(82, 52);
            $pdf::MultiCell(20, 5, '2');
            $pdf::SetXY(82, 57);
            $pdf::MultiCell(20, 5, '1');

            $pdf::Rect(92.5, 42, 12.5, 20);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(95.5, 44);
            $pdf::MultiCell(20, 5, $assesper[0]->umur_resiko);

            //jatuh kelamin
            $pdf::Rect(10, 62, 20, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(12, 62);
            $pdf::MultiCell(20, 5, 'Jenis Kelamin');
            $pdf::Rect(30, 62, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 62);
            $pdf::MultiCell(50, 5, 'Laki - laki');
            $pdf::Rect(30, 67, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 67);
            $pdf::MultiCell(50, 5, 'Wanita');
            $pdf::Rect(80, 62, 12.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 62);
            $pdf::MultiCell(20, 5, '2');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 67);
            $pdf::MultiCell(20, 5, '1');
            $pdf::Rect(92.5, 62, 12.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(95.5, 64);
            $pdf::MultiCell(20, 5, $assesper[0]->jk_resiko);

            // jatuh diagnosa
            $pdf::Rect(10, 72, 20, 25);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(12, 72);
            $pdf::MultiCell(20, 5, 'Diagnosa');
            $pdf::Rect(30, 72, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 72);
            $pdf::MultiCell(50, 5, 'Neuorlogi');
            $pdf::Rect(30, 77, 62.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 77);
            $pdf::MultiCell(40, 5, 'Respirator, dehidrasi, anemia, anorexia, syncope');
            $pdf::Rect(30, 87, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 87);
            $pdf::MultiCell(40, 5, 'Perilaku');
            $pdf::Rect(30, 92, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 92);
            $pdf::MultiCell(40, 5, 'Lain - lain');
            $pdf::Rect(80, 72, 12.5, 25);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 72);
            $pdf::MultiCell(20, 5, '4');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 77);
            $pdf::MultiCell(20, 5, '3');
            $pdf::SetXY(82, 87);
            $pdf::MultiCell(20, 5, '2');
            $pdf::SetXY(82, 92);
            $pdf::MultiCell(20, 5, '1');
            $pdf::Rect(92.5, 72, 12.5, 25);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(95.5, 72);
            $pdf::MultiCell(20, 5, $assesper[0]->diagnosa_resiko);

            // jatuh kognitif
            $pdf::Rect(10, 97, 20, 25);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(12, 97);
            $pdf::MultiCell(20, 5, 'Gangguan Kognitif');
            $pdf::Rect(30, 97, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 97);
            $pdf::MultiCell(50, 5, 'Keterbatasan daya piker');
            $pdf::Rect(30, 102, 62.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 102);
            $pdf::MultiCell(40, 5, 'pelupa berkurangnya orientasi sekitar');
            $pdf::Rect(30, 112, 62.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 112);
            $pdf::MultiCell(40, 5, 'dapat menggunakan daya pikir tanpa hambatan');

            $pdf::Rect(80, 97, 12.5, 25);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 97);
            $pdf::MultiCell(20, 5, '3');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 102);
            $pdf::MultiCell(20, 5, '2');
            $pdf::SetXY(82, 112);
            $pdf::MultiCell(20, 5, '1');

            $pdf::Rect(92.5, 97, 12.5, 25);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(95.5, 97);
            $pdf::MultiCell(20, 5, $assesper[0]->kognitif_resiko);

            // jatuh Lingkungan
            $pdf::Rect(10, 122, 20, 45);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(11, 122);
            $pdf::MultiCell(20, 5, 'Faktor Lingkungan');
            $pdf::Rect(30, 122, 62.5, 15);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 122);
            $pdf::MultiCell(40, 5, 'Riwayat jatuh atau Bayi / balita yang ditempatkan di tempat tidur');
            $pdf::Rect(30, 137, 62.5, 15);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 137);
            $pdf::MultiCell(40, 5, 'Pasien yang menggunakan alat bantu / bayi balita dalam ayunan');
            $pdf::Rect(30, 152, 62.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 152);
            $pdf::MultiCell(40, 5, 'pasien di tempat tidur standar');
            $pdf::Rect(30, 162, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 162);
            $pdf::MultiCell(40, 5, 'Area Pasien dirawat');

            $pdf::Rect(80, 122, 12.5, 45);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 122);
            $pdf::MultiCell(20, 5, '4');
            $pdf::SetXY(82, 137);
            $pdf::MultiCell(20, 5, '3');
            $pdf::SetXY(82, 152);
            $pdf::MultiCell(20, 5, '2');
            $pdf::SetXY(82, 162);
            $pdf::MultiCell(20, 5, '1');

            $pdf::Rect(92.5, 122, 12.5, 45);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(95.5, 122);
            $pdf::MultiCell(20, 5, 'belum');


            // jatuh Respon
            $pdf::Rect(10, 167, 20, 25);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(11, 167);
            $pdf::MultiCell(20, 5, 'Respon terhadap pembedahan, sedasi dan anestesi');

            $pdf::Rect(30, 167, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 167);
            $pdf::MultiCell(40, 5, 'dalam 24 jam');
            $pdf::Rect(30, 172, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 172);
            $pdf::MultiCell(40, 5, 'dalam 48 jam');
            $pdf::Rect(30, 177, 62.5, 15);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 177);
            $pdf::MultiCell(40, 5, 'Lebih dari 48 jam / tidak ada respon');

            $pdf::Rect(80, 167, 12.5, 25);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 167);
            $pdf::MultiCell(20, 5, '3');
            $pdf::SetXY(82, 172);
            $pdf::MultiCell(20, 5, '2');
            $pdf::SetXY(82, 177);
            $pdf::MultiCell(20, 5, '1');

            $pdf::Rect(92.5, 167, 12.5, 25);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(95.5, 167);
            $pdf::MultiCell(20, 5, $assesper[0]->respon_resiko);

            // jatuh Obat2an
            $pdf::Rect(10, 192, 20, 30);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(11, 192);
            $pdf::MultiCell(20, 5, 'Penggunaan obat-obatan');

            $pdf::Rect(30, 192, 62.5, 15);
            $pdf::SetFont('Times', '', 9);
            $pdf::SetXY(31, 192);
            $pdf::MultiCell(40, 5, 'Penggunaan bersamaan sedative, barbiturate, anti depresan, diuretik, narkotik');
            $pdf::Rect(30, 207, 62.5, 5);
            $pdf::SetFont('Times', '', 9);
            $pdf::SetXY(31, 207);
            $pdf::MultiCell(40, 5, 'salah satu dari obat diatas');
            $pdf::Rect(30, 212, 62.5, 10);
            $pdf::SetFont('Times', '', 9);
            $pdf::SetXY(31, 212);
            $pdf::MultiCell(40, 5, 'obat-obatan lainya / tanpa obat');

            $pdf::Rect(80, 192, 12.5, 30);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(82, 192);
            $pdf::MultiCell(20, 5, '3');
            $pdf::SetXY(82, 207);
            $pdf::MultiCell(20, 5, '2');
            $pdf::SetXY(82, 212);
            $pdf::MultiCell(20, 5, '1');

            $pdf::Rect(92.5, 192, 12.5, 30);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(95.5, 192);
            $pdf::MultiCell(20, 5, $assesper[0]->obat_resiko);

            //total score dewasa
            $pdf::Rect(10, 222, 20, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(12, 223);
            $pdf::MultiCell(20, 3, 'Keterangan Skor');

            $pdf::Rect(30, 222, 47.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(34, 222);

            if ($assesper[0]->total_resiko_anak <= 9) {
                $pdf::MultiCell(40, 5, 'resiko jatuh rendah');
            } else {
                $pdf::MultiCell(40, 5, 'resiko jatuh Tinggi');
            }

            $pdf::Rect(77.5, 222, 15, 10);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(77.5, 222);
            $pdf::MultiCell(15, 5, 'TOTAL');

            $pdf::Rect(92.5, 222, 12.5, 10);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(95.5, 222);
            $pdf::MultiCell(20, 5, $assesper[0]->total_resiko_anak);




            //skrining nutrisi table
            //skrining nutrisi anak

            //kurus 
            $pdf::Rect(109, 37, 10, 5);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(111, 37);
            $pdf::MultiCell(20, 5, '1');
            $pdf::Rect(119, 37, 60, 5);
            $pdf::SetFont('Times', '', 9);
            $pdf::SetXY(120, 37);
            $pdf::MultiCell(55, 5, 'Apakah pasien tampak Kurus?');
            $pdf::Rect(179, 37, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 37);
            $pdf::MultiCell(20, 5, $assesper[0]->tampak_kurus);
            $pdf::Rect(191.5, 37, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 37);
            if ($assesper[0]->tampak_kurus == '1') {
                $pdf::MultiCell(20, 5, 'YA');
            } else {
                $pdf::MultiCell(20, 5, 'TIDAK');
            }

            // bb sebulan
            $pdf::Rect(109, 42, 10, 35);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(111, 42);
            $pdf::MultiCell(20, 5, '2');

            $pdf::Rect(119, 42, 60, 35);
            $pdf::SetFont('Times', '', 9);
            $pdf::SetXY(120, 42);
            $pdf::MultiCell(55, 5, 'Apakah ada penurunan BB selama satu bulan terakhir (berdasarkan penilaian objektif data BB bila ada / penialaian subjektif dari orang tua pasien ATAU untuk bayi < 1 tahun : BB naik selama 3 bulan terakhir');
            $pdf::Rect(179, 42, 12.5, 35);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 42);
            $pdf::MultiCell(20, 5, $assesper[0]->bb_sebulan);
            $pdf::Rect(191.5, 42, 12.5, 35);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(191.5, 42);
            if ($assesper[0]->bb_sebulan == '1') {
                $pdf::MultiCell(20, 5, 'YA');
            } else {
                $pdf::MultiCell(20, 5, 'TIDAK');
            }

            // terdapat salah satu kondisi
            $pdf::Rect(109, 77, 10, 30);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(111, 77);
            $pdf::MultiCell(20, 5, '3');
            $pdf::Rect(119, 77, 60, 30);
            $pdf::SetFont('Times', '', 9);
            $pdf::SetXY(120, 77);
            $pdf::MultiCell(55, 5, 'Apakah Terdapat salah dari kondisi berikut ?');
            $pdf::SetXY(122, 87);
            $pdf::MultiCell(55, 5, '- Diari > kali/hari dan atau muntah > 3 kali/hari dalam seminggu terakhir');
            $pdf::SetXY(122, 97);
            $pdf::MultiCell(55, 5, '- Asupan makanan berkurang selama 1 minggu terakhir');

            $pdf::Rect(179, 77, 12.5, 30);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 77);
            $pdf::MultiCell(20, 5, $assesper[0]->kondisi);
            $pdf::Rect(191.5, 77, 12.5, 30);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(191.5, 77);
            if ($assesper[0]->kondisi == '1') {
                $pdf::MultiCell(20, 5, 'YA');
            } else {
                $pdf::MultiCell(20, 5, 'TIDAK');
            }

               // terdapat salah satu kondisi
            $pdf::Rect(109, 107, 10, 15);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(111, 107);
            $pdf::MultiCell(20, 5, '4');
            $pdf::Rect(119, 107, 60, 15);
            $pdf::SetFont('Times', '', 9);
            $pdf::SetXY(120, 107);
            $pdf::MultiCell(55, 5, 'Apakah terdapat penyakit atau keadaan yang mengakibatkan pasien berisiko mengalami malnutrisi ?');
           

            $pdf::Rect(179, 107, 12.5, 15);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(181, 107);
            $pdf::MultiCell(20, 5, '$assesper[0]->kondisi');
            $pdf::Rect(191.5, 107, 12.5, 15);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(191.5, 107);
            // if ($assesper[0]->kondisi == '1') {
            //     $pdf::MultiCell(20, 5, 'YA');
            // } else {
            //     $pdf::MultiCell(20, 5, 'TIDAK');
            // }

            $pdf::Rect(109, 122, 20, 5);
            $pdf::SetFont('Times', 'B', 10);
            $pdf::SetXY(111, 122);
            $pdf::MultiCell(55, 5, 'Total Skor ');
            $pdf::Rect(129, 122, 62.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(131, 122);
            if ($assesper[0]->total_nutrisi_ank  == '0'){
            $pdf::MultiCell(50, 5, 'Beresiko Rendah');
            }elseif ($assesper[0]->total_nutrisi_ank  > 1 && $assesper[0]->total_nutrisi_ank< 3){
            $pdf::MultiCell(50, 5, 'Beresiko Menengah');

            }else{
            $pdf::MultiCell(50, 5, 'Beresiko tinggi, dilaporkan ke DPJP');

            }
            $pdf::Rect(191.5, 122, 12.5, 5);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(192.5, 122);
            $pdf::MultiCell(20, 5, $assesper[0]->total_nutrisi_ank);
        }



        // if ($triase[0]->jenis_triase == 'dewasa') {
        // } else {
        //     $pdf::SetFont('Times', '', 10);
        //     $pdf::SetXY(8, 20);
        //     $pdf::Cell(40, 10, 'Pasien anak menggunakan Humpty Dumpty');
        // }


        $pdf::AddPage('P', 'letter');
        $pdf::Rect(8, 10, 198, 260);
        $pdf::Rect(8, 10, 198, 10);

        $pdf::SetFont('Times', 'B', 10);
        $pdf::SetXY(10, 12);
        $pdf::MultiCell(55, 5, 'DIAGNOSA KEPERAWATAN ');
        function checkbox($pdf, $checked = TRUE, $checkbox_size = 5, $ori_font_family = 'Arial', $ori_font_size = '10', $ori_font_style = '')
        {
            if ($checked == TRUE)
                $check = "4";
            else
                $check = "";

            $pdf::SetFont('ZapfDingbats', '', $ori_font_size);
            $pdf::Cell($checkbox_size, $checkbox_size, $check, 1, 0);
            $pdf::SetFont($ori_font_family, $ori_font_style, $ori_font_size);
        }

        if ($assesper[0]->diagnosa_perawat1 == NULL) {
            $pdf::SetXY(10, 25);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 25);
            $pdf::Cell(55, 5, 'Aktual / Risiko bersihan jalan nafas tidak efektif');
        } else {
            $pdf::SetXY(10, 25);
            checkbox($pdf, True);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 25);
            $pdf::Cell(55, 5, 'Aktual / Risiko bersihan jalan nafas tidak efektif');
        }
        if ($assesper[0]->diagnosa_perawat2 == NULL) {
            $pdf::SetXY(10, 32);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 32);
            $pdf::Cell(55, 5, 'Aktual / Risiko pola nafas tidak efektif');
        } else {
            $pdf::SetXY(10, 32);

            checkbox($pdf, True);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 32);
            $pdf::Cell(55, 5, 'Aktual / Risiko pola nafas tidak efektif');
        }
        if ($assesper[0]->diagnosa_perawat3 == NULL) {
            $pdf::SetXY(10, 39);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 39);
            $pdf::Cell(55, 5, 'Aktual / Risiko gangguan pertukaran gas');
        } else {
            $pdf::SetXY(10, 39);

            checkbox($pdf, True);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 39);
            $pdf::Cell(55, 5, 'Aktual / Risiko gangguan pertukaran gas');
        }
        if ($assesper[0]->diagnosa_perawat4 == NULL) {
            $pdf::SetXY(10, 46);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 46);
            $pdf::Cell(55, 5, 'Aktual / Risiko gangguan sirkulasi');
        } else {
            $pdf::SetXY(10, 46);

            checkbox($pdf, True);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 46);
            $pdf::Cell(55, 5, 'Aktual / Risiko gangguan sirkulasi');
        }
        if ($assesper[0]->diagnosa_perawat5 == NULL) {
            $pdf::SetXY(10, 53);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 53);
            $pdf::Cell(55, 5, 'Aktual / Risiko gangguan perfusi jaringan / cerebral');
        } else {
            $pdf::SetXY(10, 53);

            checkbox($pdf, True);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 53);
            $pdf::Cell(55, 5, 'Aktual / Risiko gangguan perfusi jaringan / cerebral');
        }
        if ($assesper[0]->diagnosa_perawat6 == NULL) {
            $pdf::SetXY(10, 60);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 60);
            $pdf::Cell(55, 5, 'hipertermia');
        } else {
            $pdf::SetXY(10, 60);

            checkbox($pdf, True);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 60);
            $pdf::Cell(55, 5, 'hipertermia');
        }
        if ($assesper[0]->diagnosa_perawat7 == NULL) {
            $pdf::SetXY(10, 67);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 67);
            $pdf::Cell(55, 5, 'Aktual / Risiko gangguan keseimbangan cairan');
        } else {
            $pdf::SetXY(10, 67);

            checkbox($pdf, True);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 67);
            $pdf::Cell(55, 5, 'Aktual / Risiko gangguan keseimbangan cairan');
        }
        if ($assesper[0]->diagnosa_perawat8 == NULL) {
            $pdf::SetXY(10, 74);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 74);
            $pdf::Cell(55, 5, 'Aktual / Risiko gangguan integritas kulit');
        } else {
            $pdf::SetXY(10, 74);

            checkbox($pdf, True);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 74);
            $pdf::Cell(55, 5, 'Aktual / Risiko gangguan integritas kulit');
        }
        if ($assesper[0]->diagnosa_perawat9 == NULL) {
            $pdf::SetXY(10, 81);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 81);
            $pdf::Cell(55, 5, 'Aktual / Risiko cemas / Takut');
        } else {
            $pdf::SetXY(10, 81);

            checkbox($pdf, True);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 81);
            $pdf::Cell(55, 5, 'Aktual / Risiko cemas / Takut');
        }
        if ($assesper[0]->diagnosa_perawat10 == NULL) {
            $pdf::SetXY(10, 89);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 89);
            $pdf::Cell(55, 5, 'Risiko Penyebaran Toksik');
        } else {
            $pdf::SetXY(10, 89);

            checkbox($pdf, True);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 89);
            $pdf::Cell(55, 5, 'Risiko Penyebaran Toksik');
        }
        if ($assesper[0]->diagnosa_perawat11 == NULL) {
            $pdf::SetXY(10, 96);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 96);
            $pdf::Cell(55, 5, 'Risiko cedera / Jatuh');
        } else {
            $pdf::SetXY(10, 96);

            checkbox($pdf, True);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 96);
            $pdf::Cell(55, 5, 'Risiko cedera / Jatuh');
        }
        if ($assesper[0]->diagnosa_perawat12 == NULL) {
            $pdf::SetXY(10, 103);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 103);
            $pdf::Cell(55, 5, 'Nyeri');
        } else {
            $pdf::SetXY(10, 103);

            checkbox($pdf, True);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 103);
            $pdf::Cell(55, 5, 'Nyeri');
        }

        if ($assesper[0]->diagnosa_perawat == NULL) {
            $pdf::SetXY(10, 110);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 110);
            $pdf::Cell(55, 5, $assesper[0]->diagnosa_perawat);
        } else {
            $pdf::SetXY(10, 110);

            checkbox($pdf, True);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 110);
            $pdf::Cell(55, 5, $assesper[0]->diagnosa_perawat);
        }

        $pdf::Rect(8, 10, 198, 115);
        $pdf::Rect(8, 10, 198, 110);


        $pdf::SetFont('Times', 'B', 10);
        $pdf::SetXY(10, 120);
        $pdf::MultiCell(120, 5, 'RENCANA ASUHAN KEPERAWATAN ');
        $pdf::SetFont('Times', '', 10);

        $pdf::MultiCell(225, 5, $assesper[0]->rencana_asuhan);





        $pdf::AddPage('P', 'letter');
        $pdf::Rect(8, 10, 198, 260);
        $pdf::Rect(8, 10, 198, 10);
        $pdf::Rect(8, 20, 20, 180);


        $pdf::SetFont('Times', 'B', 10);
        $pdf::SetXY(10, 12);
        $pdf::MultiCell(120, 5, 'TINDAKAN KEPERAWATAN DAN EVALUASI ');
        $pdf::SetFont('Times', '', 10);

        $pdf::SetXY(8, 20);
        foreach ($tindakanp as $t) {
            $pdf::SetX(10);
            $pdf::Cell(20, 10, $t->waktu_tindakan . ' WIB');
            $pdf::SetX(30);
            $pdf::Cell(220, 10, $t->tindakan_keperawatan);


            $pdf::Ln();
            // $pdf::SetXY(10, 164.5);
            // $pdf::Cell(40, 10, ':');
            // $pdf::SetXY(60, 167);

            // $pdf::MultiCell(160, 5, $d->tindakan_kedokteran);
        }


        // KOLABORASI
        $pdf::Rect(8, 200, 198, 260);
        $pdf::Rect(8, 200, 198, 10);
        $pdf::SetXY(8, 200);
        $pdf::SetFont('Times', 'B', 10);

        $pdf::MultiCell(120, 5, 'KOLABORASI ');
        if ($assesper[0]->kolaborasi_1 == NULL) {
            $pdf::SetXY(10, 211);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 211);
            $pdf::Cell(55, 5, 'Infus/ IVFD');
        } else {
            $pdf::SetXY(10, 211);
            checkbox($pdf, True);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 211);
            $pdf::Cell(55, 5, 'Infus/ IVFD');
        }

        if ($assesper[0]->kolaborasi_2 == NULL) {
            $pdf::SetXY(10, 220);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 220);
            $pdf::Cell(55, 5, 'LAB');
        } else {
            $pdf::SetXY(10, 220);
            checkbox($pdf, True);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 220);
            $pdf::Cell(55, 5, 'LAB');
        }

        if ($assesper[0]->kolaborasi_3 == NULL) {
            $pdf::SetXY(10, 229);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 229);
            $pdf::Cell(55, 5, 'EKG');
        } else {
            $pdf::SetXY(10, 229);
            checkbox($pdf, True);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(15, 229);
            $pdf::Cell(55, 5, 'EKG');
        }

        if ($assesper[0]->kolaborasi_4 == NULL) {
            $pdf::SetXY(40, 211);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(45, 211);
            $pdf::Cell(55, 5, 'Oksigenasi');
        } else {
            $pdf::SetXY(40, 211);
            checkbox($pdf, True);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(45, 211);
            $pdf::Cell(55, 5, 'Oksigenasi');
        }

        if ($assesper[0]->kolaborasi_5 == NULL) {
            $pdf::SetXY(40, 220);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(45, 220);
            $pdf::Cell(55, 5, 'Nebulizer');
        } else {
            $pdf::SetXY(40, 220);
            checkbox($pdf, True);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(45, 220);
            $pdf::Cell(55, 5, 'Nebulizer');
        }

        if ($assesper[0]->kolaborasi_6 == NULL) {
            $pdf::SetXY(40, 229);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(45, 229);
            $pdf::Cell(55, 5, 'Saturasi Oksigen');
        } else {
            $pdf::SetXY(40, 229);
            checkbox($pdf, True);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(45, 229);
            $pdf::Cell(55, 5, 'Saturasi Oksigen');
        }
        if ($assesper[0]->kolaborasi_7 == NULL) {
            $pdf::SetXY(70, 211);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(75, 211);
            $pdf::Cell(55, 5, 'NGT');
        } else {
            $pdf::SetXY(70, 211);
            checkbox($pdf, True);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(75, 211);
            $pdf::Cell(55, 5, 'NGT');
        }

        if ($assesper[0]->kolaborasi_8 == NULL) {
            $pdf::SetXY(70, 220);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(75, 220);
            $pdf::Cell(55, 5, 'Mengumbah Lambung');
        } else {
            $pdf::SetXY(70, 220);
            checkbox($pdf, True);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(75, 220);
            $pdf::Cell(55, 5, 'Mengumbah Lambung');
        }

        if ($assesper[0]->kolaborasi_9 == NULL) {
            $pdf::SetXY(70, 229);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(75, 229);
            $pdf::Cell(55, 5, 'Kateter');
        } else {
            $pdf::SetXY(70, 229);
            checkbox($pdf, True);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(75, 229);
            $pdf::Cell(55, 5, 'Kateter');
        }

        if ($assesper[0]->kolaborasi_10 == NULL) {
            $pdf::SetXY(110, 211);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(115, 211);
            $pdf::Cell(55, 5, 'Defibrilasi');
        } else {
            $pdf::SetXY(110, 211);
            checkbox($pdf, True);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(115, 211);
            $pdf::Cell(55, 5, 'Defibrilasi');
        }

        if ($assesper[0]->kolaborasi_11 == NULL) {
            $pdf::SetXY(110, 220);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(115, 220);
            $pdf::Cell(55, 5, 'Mayo');
        } else {
            $pdf::SetXY(110, 220);
            checkbox($pdf, True);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(115, 220);
            $pdf::Cell(55, 5, 'Mayo');
        }

        if ($assesper[0]->kolaborasi_12 == NULL) {
            $pdf::SetXY(110, 229);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(115, 229);
            $pdf::Cell(55, 5, 'ETT');
        } else {
            $pdf::SetXY(110, 229);
            checkbox($pdf, True);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(115, 229);
            $pdf::Cell(55, 5, 'ETT');
        }

        if ($assesper[0]->kolaborasi_13 == NULL) {
            $pdf::SetXY(150, 211);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(155, 211);
            $pdf::Cell(55, 5, 'Suction');
        } else {
            $pdf::SetXY(150, 211);
            checkbox($pdf, True);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(155, 211);
            $pdf::Cell(55, 5, 'Suction');
        }

        if ($assesper[0]->kolaborasi_14 == NULL) {
            $pdf::SetXY(150, 220);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(155, 220);
            $pdf::Cell(55, 5, 'Mayo');
        } else {
            $pdf::SetXY(150, 220);
            checkbox($pdf, True);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(155, 220);
            $pdf::Cell(55, 5, 'Mayo');
        }

        if ($assesper[0]->kolaborasi_15 == NULL) {
            $pdf::SetXY(150, 229);

            checkbox($pdf, false);
            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(155, 229);
            $pdf::Cell(55, 5, 'ETT');
        } else {
            $pdf::SetXY(150, 229);
            checkbox($pdf, True);

            $pdf::SetFont('Times', '', 10);
            $pdf::SetXY(155, 229);
            $pdf::Cell(55, 5, 'ETT');
        }


        //kotak TTD
        $pdf::Rect(8, 239, 198, 10);

        $pdf::Rect(8, 249, 66, 10);
        $pdf::Rect(74, 249, 66, 10);
        $pdf::Rect(140, 249, 66, 10);

        $pdf::SetFont('Times', 'B', 11);
        $pdf::SetXY(80, 239);
        $pdf::Cell(40, 10, 'Yang Melakukan Assesmen');
        $pdf::SetXY(10, 249);
        $pdf::Cell(40, 10, 'Tanggal dan Jam selesai Asssesmen');
        $pdf::SetXY(95, 249);
        $pdf::Cell(40, 10, 'Nama Perawat');
        $pdf::SetXY(160, 249);
        $pdf::Cell(40, 10, 'Tanda Tangan');

        $pdf::Rect(8, 249, 66, 20);
        $pdf::Rect(74, 249, 66, 20);
        $pdf::Rect(140, 249, 66, 20);
        $pdf::Output();

        // $pdfTitle = 'C:/resume/test.pdf/';
        $pdf::Output('F', 'C:/resume/Resume_medis_igd_' . $norm . '_' . $kj . '.pdf');
        // $pdf::Output('F', 'C:/resume/$norm_report.pdf');
        // $filename = "/C:/resume/test.pdf/";
        // $pdf::download($filename . '.pdf', 'D');
        exit;
        // $pdf = PDF::loadview('dokter/cetakan', [
        //     'title' => 'SiRAMAH DOKTER',
        //     'unist' => $unit,
        //     'assesdok' => $assesdok
        // ]);
        // return $pdf->stream();
    }

    public function cetakresumedokterkebidanan(Request $request)
    {

        $kj = $request->kj;
        $norm = $request->norm;




        // $receive_items = $this->cetakpdf($kode_header, $idhed);
        $back = [
            'kode' => 200,
            'kj' => $kj,
            'norm' => $norm,



        ];
        echo json_encode($back);
        die;
    }

    public function cetaktresumekebidanan($kj, $norm)
    {
        $now = Carbon::now()->format('d M Y');
        $noww = Carbon::now();

        // dd($norm);
        $unit = auth()->user()->unit;

        $now = Carbon::now()->format('Y-m-d H:i:s');
        $pasien = DB::select('SELECT 
        a.nama_px,
        a.no_rm,
        fc_alamat(a.no_rm) AS alamat,
        a.jenis_kelamin AS jk,
        fc_umur(a.no_rm) AS umur,
        a.tgl_lahir
        FROM mt_pasien  a
        WHERE no_rm = ?', [$norm]);
        $tgllahir = Carbon::parse($pasien[0]->tgl_lahir)->format('d-M-Y');


        $kunjungan = DB::select('SELECT 

        fc_NAMA_PARAMEDIS1(a.kode_paramedis) AS dokter,
        fc_NAMA_PENJAMIN(a.no_rm) AS penjamin,
        b.diag_00 AS diagnosa,
        a.tgl_masuk,
        a.tgl_keluar

        FROM ts_kunjungan a

        INNER JOIN di_pasien_diagnosa_frunit b ON b.kode_kunjungan = a.kode_kunjungan
        WHERE a.no_rm = ?
        AND a.kode_kunjungan  = ?', [$norm, $kj]);


        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf::AddPage('P', 'letter');
        //Awal Header kertas
        $pdf::Image('public/img/kab_cirebonn.png', 10, 4, 20, 20);
        $pdf::Image('public/img/rsss.png', 180, 4, 20, 20);
        $pdf::SetFont('Times', 'B', 12);
        $pdf::SetXY(65, 5);
        $pdf::Cell(40, 10, 'PEMERINTAH KABUPATEN CIREBON');
        $pdf::SetFont('Times', 'B', 16);
        $pdf::SetXY(50, 10);
        $pdf::Cell(40, 10, 'RUMAH SAKIT UMUM DAERAH WALED');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(49.5, 15);
        $pdf::Cell(40, 10, 'Jl. Prabu Kiansantang No. 4 Telp. 0231 - 661126 Fax. 0231 - 664091 Cirebon');
        $pdf::SetLineWidth(1);
        $pdf::Line(10, 25, 200, 25);
        $pdf::SetLineWidth(0.25);
        $pdf::Line(10, 27, 200, 27);
        $pdf::SetFont('Times', 'BU', 18);
        $pdf::SetXY(75, 30);
        $pdf::Cell(40, 10, 'RESUME MEDIS IGD KEBIDANAN');

        //Awal kotak data pasien
        $pdf::Rect(8, 40, 198, 40);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 39);
        $pdf::MultiCell(40, 10, 'Nama Pasien');
        $pdf::SetXY(40, 39);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 39);
        $pdf::Cell(42, 10, $pasien[0]->nama_px);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 39);
        $pdf::Cell(40, 10, 'NO. RM');
        $pdf::SetXY(139, 39);
        $pdf::Cell(45, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(141, 39);
        $pdf::MultiCell(70, 10, $pasien[0]->no_rm);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 45);
        $pdf::Cell(40, 10, 'Penjamin');
        $pdf::SetXY(40, 45);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 45);
        // $pdf::Cell(42, 10, $kunjungan[0]->penjamin);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 45);
        $pdf::Cell(40, 10, 'Tgl. Lahir');
        $pdf::SetXY(139, 45);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', 'B', 10);
        $pdf::SetXY(141, 45);
        $pdf::MultiCell(70, 10, $tgllahir);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 51);
        $pdf::Cell(40, 10, 'Umur');
        $pdf::SetXY(40, 51);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 51);
        $pdf::Cell(42, 10,  $pasien[0]->umur . ' th');

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 51);
        $pdf::Cell(40, 10, 'Diagnosis ');
        $pdf::SetXY(139, 51);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', 'B', 10);
        $pdf::SetXY(141, 51);
        // $pdf::Cell(70, 10, $kunjungan[0]->diagnosa);




        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 57);
        $pdf::Cell(40, 10, 'ALAMAT');
        $pdf::SetXY(40, 57);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 9);
        $pdf::SetXY(42, 59.5);
        $pdf::MultiCell(79, 5, $pasien[0]->alamat);


        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(120, 57);
        $pdf::Cell(40, 10, 'Dokter');
        $pdf::SetXY(139, 57);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(141, 57);
        // $pdf::MultiCell(70, 10, $kunjungan[0]->dokter);

        //triase
        $pdf::SetFont('Times', 'BU', 14);
        $pdf::SetXY(10, 80);
        $pdf::Cell(240, 10, 'ASSES');
        $pdf::SetFont('Times', 'UI', 14);
        $pdf::SetXY(70, 90);

        $pdf::Output();
    }
    // public function cetaktresumecppt($kj, $norm)
    // {

    //     $now = Carbon::now()->format('d M Y');
    //     $noww = Carbon::now();


    //     $unit = auth()->user()->unit;

    //     $now = Carbon::now()->format('Y-m-d H:i:s');
    //     $pasien = DB::select('SELECT * FROM mt_pasien WHERE no_rm = ?', [$norm]);
    //     $tgllahir = Carbon::parse($pasien[0]->tgl_lahir)->format('d-M-Y');
    //     $kunjungan = DB::select('SELECT * FROM ts_kunjungan WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
    //     $tglmasuk = Carbon::parse($kunjungan[0]->tgl_masuk)->format('d-M-Y');
    //     $jammasuk = Carbon::parse($kunjungan[0]->tgl_masuk)->format('H:i:s');
    //     $triase = DB::connection('mysql2')->select('SELECT * FROM ts_triase
    //        WHERE no_rm = ? AND kode_kunjungan = ? AND STATUS IN (1,2) ', [$norm, $kj]);


    //     $assesdok = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_dokter
    //     WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);

    //     $riwayatorderrad = DB::connection('mysql2')->select('SELECT
    //     a.no_rm,
    //     a.kode_layanan_header,
    //     a.id,
    //     b.total_tarif,
    //     fc_nama_tindakan(LEFT(b.kode_tarif_detail,6)) as nama_tindakan
    //     FROM
    //     ts_layanan_header_igd a
    //     INNER JOIN ts_layanan_detail_igd b ON b.row_id_header = a.id
    //     WHERE a.kode_unit = ?
    //     AND a.kode_kunjungan = ?
    //     AND a.status_order ="1"', ['3003', $kj]);
    //     $riwayatorderlab = DB::connection('mysql2')->select('SELECT
    //      a.no_rm,
    //      a.kode_layanan_header,
    //      a.id,
    //      b.total_tarif,
    //      fc_nama_tindakan(LEFT(b.kode_tarif_detail,6)) as nama_tindakan
    //      FROM
    //      ts_layanan_header_igd a
    //      INNER JOIN ts_layanan_detail_igd b ON b.row_id_header = a.id
    //      WHERE a.kode_unit = ?
    //      AND a.kode_kunjungan = ?
    //      AND a.status_order ="1"', ['3002', $kj]);
    //     $riwayatobat = DB::select('SELECT
    //     a.kode_layanan_header,
    //     a.id,
    //     a.kode_kunjungan,
    //     b.total_tarif,
    //     b.kode_barang,
    //     b.aturan_pakai,
    //     b.jumlah_layanan,
    //     c.nama_barang
    //      FROM
    //      ts_layanan_header a
    //      INNER JOIN ts_layanan_detail b ON b.row_id_header = a.id
    //      INNER JOIN mt_barang c ON c.kode_barang = b.kode_barang
    //      WHERE a.kode_layanan_header LIKE "%DP%"
    //      AND b.kode_tarif_detail NOT LIKE "%tx%"
    //      AND a.kode_kunjungan = ?', [$kj]);
    //     $ttv = DB::connection('mysql2')->select('SELECT tekanan_darah, frekuensi_nafas, keadaan_umum, kesadaran, frekuensi_nadi, suhu, berat_badan, umur FROM erm_cppt_perawat WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
    //     $riwayatrekonobat = DB::connection('mysql2')->select('SELECT * FROM rekonsiliasi_obat
    //     WHERE kode_kunjungan = ?', [$kj]);
    //     $tindakan = DB::connection('mysql2')->select('SELECT * FROM erm_tindakan_kedokteran WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);

    //     // dd($triase);

    //     $pdf = new FPDF('L', 'mm', 'A4');
    //     $pdf::AddPage('L', 'letter');
    //     //Awal Header kertas


    //     $pdf::Image('public/img/rsss.png', 10, 4, 20, 20);
    //     // $pdf::Image('public/img/rsss.png', 250, 4, 20, 20);
    //     $pdf::SetFont('Times', 'B', 12);

    //     $pdf::SetXY(3, 3);
    //     $pdf::cell(140, 25, "", 1, "", "C");
    //     $pdf::cell(130, 35, "", 1, "", "C");

    //     //kiri
    //     $pdf::SetXY(40, 5);
    //     $pdf::Cell(40, 10, 'PEMERINTAH KABUPATEN CIREBON');
    //     $pdf::SetFont('Times', 'B', 12);
    //     $pdf::SetXY(35, 10);
    //     $pdf::Cell(40, 10, 'RUMAH SAKIT UMUM DAERAH WALED');
    //     $pdf::SetFont('Times', '', 8);
    //     $pdf::SetXY(35.5, 15);
    //     $pdf::Cell(40, 10, 'Jl. Prabu Kiansantang No. 4 Telp. 0231 - 661126 Fax. 0231 - 664091 Cirebon');
    //     $pdf::Ln();
    //     $pdf::SetXY(3, 28);
    //     $pdf::SetFont('Times', 'B', 12);

    //     $pdf::cell(140, 10, "RESUME MEDIS RAWAT JALAN", 1, "", "C");

    //     //kanan
    //     $pdf::SetXY(145, 5);
    //     $pdf::SetFont('Times', 'B', 14);

    //     $pdf::Cell(40, 10, 'Nomor RM');
    //     $pdf::Cell(40, 10, ' : ' . $norm);

    //     $pdf::SetFont('Times', 'B', 14);
    //     $pdf::SetXY(145, 10);
    //     $pdf::Cell(40, 10, 'Nama');
    //     $pdf::Cell(40, 10, ' : ' . $pasien[0]->nama_px);

    //     $pdf::SetFont('Times', 'B', 14);
    //     $pdf::SetXY(145, 15);
    //     $pdf::Cell(40, 10, 'Tanggal Lahir');

    //     $pdf::Cell(40, 10, ' : ' . $tgllahir);

    //     $pdf::SetFont('Times', 'B', 14);
    //     $pdf::SetXY(145, 20);
    //     $pdf::Cell(40, 10, 'Jenis Kelamin');
    //     $pdf::Cell(40, 10, ' : ' . $pasien[0]->jenis_kelamin);

    //     $pdf::Ln();
    //     $pdf::SetXY(3, 38);
    //     $pdf::cell(90, 15, "Tanggal Masuk : " . $tglmasuk, 1, "", "C");
    //     $pdf::cell(90, 15, "Jam Masuk : " . $jammasuk . "WIB", 1, "", "C");
    //     $pdf::cell(90, 15, "IGD", 1, "", "C");
    //     $pdf::Ln();
    //     $pdf::SetXY(3, 53);
    //     $pdf::SetFillColor(234, 247, 168);
    //     $pdf::cell(270, 15, "Ringkasan Riwayat Penyakit : ", 1, "", "L", true);
    //     $pdf::Ln();
    //     $pdf::SetXY(3, 58);
    //     $pdf::SetFont('Times', 'B', 14);
    //     $pdf::cell(270, 30, "Keluhan : ");
    //     $pdf::SetXY(3, 68);
    //     $pdf::SetFont('Times', '', 12);

    //     $pdf::cell(270, 30, "   " . $assesdok[0]->keluhan_utama, 1, "", "L");
    //     $pdf::Ln();
    //     $pdf::SetXY(3, 88);
    //     $pdf::SetFont('Times', 'B', 14);
    //     $pdf::cell(270, 30, "Pemeriksaan Fisik : ");
    //     $pdf::SetXY(3, 98);
    //     $pdf::SetFont('Times', '', 10);
    //     $pdf::cell(270, 30, "Trauma : " . $assesdok[0]->trauma, 1, "", "L");
    //     $pdf::SetXY(3, 108);

    //     $pdf::cell(270, 30,  $assesdok[0]->primary_survey, 0, 1);



    //     $pdf::Output();
    //     exit;
    // }
}
