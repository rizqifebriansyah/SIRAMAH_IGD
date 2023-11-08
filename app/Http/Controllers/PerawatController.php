<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\erm_cppt_perawat;



class PerawatController extends Controller
{
    public function index()
    {
        $user = auth()->user()->nama;

        $menu = 'perawat';
        return view(
            'perawat.index',
            [
                'title' => 'SiRAMAH PERAWAT',
                'menu' => $menu,
                'user' => $user
            ]
        );
    }


    public function assesperawat()
    {
        $menu = 'assesperawat';
        $user = auth()->user()->nama;


        $now = Carbon::now()->format('Y-m-d');
        $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','1002','$now')");
        return view(
            'perawat.assesperawat',
            [
                'title' => 'ERM Perawat',
                'menu' => $menu,
                'pasienigd' => $pasienigd,
                'user' => $user
            ]
        );
    }

    public function ermperawat(Request $request)
    {
        $norm = $request->norm;
        $namapx = $request->namapx;
        $jk = $request->jk;
        $kj = $request->kj;
        $tglmasuk = $request->tglmasuk;
        $ttv = DB::connection('mysql2')->select('SELECT tekanan_darah, frekuensi_nafas, frekuensi_nadi, suhu, berat_badan, umur, keadaan_umum, kesadaran FROM erm_cppt_perawat WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        $cek = DB::select('SELECT
      fc_nama_unit1(kode_unit) AS nama_unit
      ,a.*

      FROM assesmen_dokters a
      WHERE  id_pasien = ?', [$norm]);

        return view(
            'perawat.ermperawatview',
            [
                'title' => 'ERM PERAWAT',
                'cek' => $cek,
                'norm' => $norm,
                'namapx' => $namapx,
                'jk' => $jk,
                'kj' => $kj,
                'tglmasuk' => $tglmasuk,
                'ttv' => $ttv
            ]
        );
    }
    public function formermperawat(Request $request)
    {
        $kj = $request->kj;
        $norm = $request->norm;

        $alasanplg  = DB::select('SELECT * FROM mt_alasan_pulang');
        $assesper = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_perawat WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        return view(
            'perawat.formermperawat',
            [
                'title' => 'SiRAMAH DOKTER',
                'assesper' => $assesper,
                'alasanpulang' => $alasanplg


            ]
        );
    }


    public function resumecpptperawat(Request $request)
    {

        $resume = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_perawat
        WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        return view(
            'perawat.resumecpptperawat',
            [
                'title' => 'ERM PERAWAT',
                'resume' => $resume
            ]
        );
    }
    public function riwayatcpptperawat(Request $request)
    {
        $norm = $request->norm;
        $cek = DB::select('SELECT
      fc_nama_unit1(kode_unit) AS nama_unit
      ,a.*

      FROM assesmen_dokters a
      WHERE  id_pasien = ?', [$norm]);

        return view(
            'perawat.riwayatpoliklinik',
            [
                'norm' => $norm,
                'cek' => $cek
            ]
        );
    }

    public function caripasienigdperawat(Request $request)
    {
        $tgl = $request->tglkunjungan;
        $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','1002','$tgl')");


        return view(
            'perawat.tablepasienigdperawat',
            [
                'title' => 'ERM DOKTER',
                'pasienigd' => $pasienigd,

            ]
        );
    }
    public function hasillabperawat(Request $request)
    {
        $kodekunjungan = $request->kj;
        $cek = DB::select('select * from ts_layanan_header where kode_kunjungan = ? and kode_unit = ?', [$kodekunjungan, '3002']);

        if (count($cek) == 0) {
            echo "<h4 class='text-danger'> Tidak Ada Hasil Laboratorium ...</h5>";
        } else {
            return view('perawat.hasillabo', compact(
                ['cek']
            ));
        }
    }

    public function hasilradioperawat(Request $request)
    {
        $kodekunjungan = $request->kj;
        $cek = DB::select('select *,date(tgl_baca) as tanggalnya,fc_acc_number_ris(id_detail) as acc_number from ts_hasil_expertisi where kode_kunjungan = ?', [$kodekunjungan]);
        if (count($cek) == 0) {
            echo "<h4 class='text-danger'> Tidak Ada Hasil Radiologi ...</h5>";
        } else {
            return view('perawat.hasilradioperawat', compact(
                ['cek']
            ));
        }
    }
    public function simpanassemenperawat(Request $request)
    {
        $a = $request->all();
        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;

        $assesmen = erm_cppt_perawat::create([
            'id_cppt_dokter' => $user,
            'tekanan_darah' => $request->tekanandarah,
            'frekuensi_nadi' => $request->frekuensinadi,
            'frekuensi_nafas' => $request->frekuensinafas,
            'suhu' => $request->suhutubuh,
            'berat_badan' => $request->beratbadan,
            'umur' => $request->usia,
            'keadaan_umum' => $request->keadaanumum,
            'kesadaran' => $request->kesadaran,
            'tgl_kunjungan' => $request->tglmasuk,
            'tgl_input' => $now,
            'kode_unit' => '1002',
            'kode_kunjungan' => $request->kj,
            'no_rm' => $request->norm,
            'subyektif' => $request->subject,
            'diagnosa_perawat' => $request->objek,
            'assesment' => $request->assesmen,
            'planning' => $request->planning,
            'cara_pulang' => $request->alpul .' ' . $request->alpul1,
            'keadaan_pulang' => $request->kopul .' ' . $request->kopul1,

            'kode_paramedis' => $kp,
            'status' => '1'


        ]);




        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function updateassemenperawat(Request $request)
    {
        $a = $request->all();
        $tekanandarah = $request->tekanandarah;
        $frekuensinadi = $request->frekuensinadi;
        $frekuensinafas = $request->frekuensinafas;
        $suhu = $request->suhutubuh;
        $beratbadan = $request->beratbadan;
        $umur = $request->usia;
        $subyektif = $request->subject;
        $obyektif = $request->objek;
        $assesment = $request->assesmen;
        $planning = $request->planning;
        $kj = $request->kj;
        $norm = $request->norm;
        $kesadaran = $request->kesadaran;
        $keadaanumum = $request->keadaanumum;

        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;
        $update = DB::connection('mysql2')->select('UPDATE erm_cppt_perawat
        SET tekanan_darah = ? , frekuensi_nadi = ?, frekuensi_nafas = ? , suhu = ?, berat_badan = ? , umur = ?,
        subyektif = ? , diagnosa_perawat = ?, assesment = ? , planning = ?, keadaan_umum = ?, kesadaran = ?
        WHERE no_rm = ? AND kode_kunjungan = ?', [$tekanandarah, $frekuensinadi, $frekuensinafas, $suhu, $beratbadan,  $umur, $subyektif,  $obyektif, $assesment, $planning, $norm, $kj, $keadaanumum, $kesadaran]);









        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
}
