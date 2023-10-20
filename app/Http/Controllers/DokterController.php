<?php

namespace App\Http\Controllers;

use App\Models\ts_antrian_igd;
use App\Models\ts_triase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use function Laravel\Prompts\select;

class DokterController extends Controller
{
    public function index()
    {
        $menu = 'dokter';
        return view(
            'dokter.index',
            [
                'title' => 'SiRAMAH DOKTER',
                'menu' => $menu
            ]
        );
    }
    public function kpo()
    {
        $menu = 'kpo';
        return view(
            'dokter.kpo',
            [
                'title' => 'SiRAMAH DOKTER',
                'menu' => $menu
            ]
        );
    }
    public function triase()
    {
        $menu = 'triase';
        $now = Carbon::now()->format('Y-m-d');

        $antrian = DB::connection('mysql2')->select('SELECT no_antri, tgl, no_rm, nama_px, status, status_triase FROM tp_karcis_igd
      WHERE DATE(tgl) BETWEEN ? AND ?', [$now, $now]);
        return view(
            'dokter.triase',
            [
                'title' => 'TRIASE DOKTER',
                'menu' => $menu,
                'antrian' => $antrian
            ]
        );
    }

    public function carinotriase(Request $request)
    {
        $tgl = $request->tgl_kunjungan;
        $antrian = DB::connection('mysql2')->select('SELECT no_antri, tgl, no_rm, nama_px, status, status_triase FROM tp_karcis_igd
      WHERE DATE(tgl) BETWEEN ? AND ?', [$tgl, $tgl]);


        return view(
            'dokter.tabletriase',
            [
                'title' => 'TRIASE DOKTER',
                'antrian' => $antrian
            ]
        );
    }
    public function asses()
    {
        $menu = 'asses';

        $now = Carbon::now()->format('Y-m-d');
        $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','1002','$now')");

        return view(
            'dokter.asses',
            [
                'title' => 'ERM DOKTER',
                'menu' => $menu,
                'pasienigd' => $pasienigd
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

        $cek = DB::select('SELECT
      fc_nama_unit1(kode_unit) AS nama_unit
      ,a.*

      FROM assesmen_dokters a
      WHERE  id_pasien = ?', [$norm]);

        return view(
            'dokter.ermdokterview',
            [
                'title' => 'ERM DOKTER',
                'cek' => $cek,
                'norm' => $norm,
                'namapx' => $namapx,
                'jk' => $jk,
                'kj' => $kj
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

        return view(
            'dokter.riwayatpoli',
            [
                'norm' => $norm,
                'cek' => $cek
            ]
        );
    }

    public function triaseanak()
    {
        return view(
            'dokter.triaseanak',
            [
                'title' => 'SiRAMAH DOKTER',


            ]
        );
    }
    public function triasedewasa()
    {

        return view(
            'dokter.triasedewasa',
            [
                'title' => 'SiRAMAH DOKTER',


            ]
        );
    }
    public function formdewasa()
    {

        return view(
            'dokter.formdewasa',
            [
                'title' => 'SiRAMAH DOKTER',


            ]
        );
    }
    public function formermdokter()
    {
        $layananlab = DB::select("CALL SP_PANGGIL_TARIF_LAB('1','')");
        $layanan = DB::select("CALL SP_CARI_TARIF_PELAYANAN_RAD('1','','1')");

        return view(
            'dokter.formermdokter',
            [
                'title' => 'SiRAMAH DOKTER',
                'layananlab' => $layananlab,
                'layanan' => $layanan


            ]
        );
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

    public function hasillabo(Request $request)
    {
        $kodekunjungan = $request->kj;
        $cek = DB::select('select * from ts_layanan_header where kode_kunjungan = ? and kode_unit = ?', [$kodekunjungan, '3002']);

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
        $cek = DB::select('select *,date(tgl_baca) as tanggalnya,fc_acc_number_ris(id_detail) as acc_number from ts_hasil_expertisi where kode_kunjungan = ?', [$kodekunjungan]);
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
            'kesadaran' => $request->gcs1 . '   ' . $request->gcs2 . '   ' . $request->gcs3 . '   ' . $request->gcs4 . '   ' . $request->gcs5 . '   ' . $request->kejang . '   ' . $request->letargis . '   ' . $request->traumakepala . '   ' . $request->traumakepalakurang . '   ' . $request->tidakrespon . '   ' . $request->somnolen . '   ' . $request->paskakejang,
            'jalan_nafas' => $request->sumbatantotal . '   ' . $request->sumbatanparsial . '   ' . $request->bebas1 . '   ' . $request->bebas2 . '   ' . $request->bebas3,
            'pernafasan' => $request->hentinafas . '   ' . $request->distrespenafasan . '   ' . $request->sesaknafas . '   ' . $request->freknafas . '   ' . $request->freknafas1 . '   ' . $request->rr . '   ' . $request->SaO2 . '   ' . $request->sianosis,
            'sirkulasi' => $request->hentijantung . '   ' . $request->naditerabalemah . '   ' . $request->muntahpasien . '   ' . $request->nadikuat . '   ' . $request->nadikuat1 . '   ' . $request->naditidakteraba . '   ' . $request->hr1 . '   ' . $request->takikardia . '   ' . $request->freknadinormal . '   ' . $request->freknadinormal1 . '   ' . $request->akraldingin . '   ' . $request->hr2 . '   ' . $request->tds . '   ' . $request->tds1 . '   ' . $request->tds2 . '   ' . $request->pucat . '   ' . $request->tdd . '   ' . $request->tdd1 . '   ' . $request->tdd2 . '   ' . $request->akraldingin1 . '   ' . $request->pendarahan . '   ' . $request->muntah1 . '   ' . $request->crt . '   ' . $request->diastolik . '   ' . $request->pendarahan1,
            'gejala_spesifik' => $request->nyeri . '   ' . $request->demam . '   ' . $request->aspirasi . '   ' . $request->nyeri1 . '   ' . $request->sepsis . '   ' . $request->nyeri2 . '   ' . $request->trauma1 . '   ' . $request->luka . '   ' . $request->nyeri3 . '   ' . $request->kolik . '   ' . $request->sulit . '   ' . $request->kontrol . '   ' . $request->multiple . '   ' . $request->terauma . '   ' . $request->sedang1 . '   ' . $request->imunisasi . '   ' . $request->lokal . '   ' . $request->gangguan . '   ' . $request->terauma1 . '   ' . $request->psikiatri . '   ' . $request->racun . '   ' . $request->psikosis . '   ' . $request->radang . '   ' . $request->ngamuk . '   ' . $request->defisit . '   ' . $request->reaksi . '   ' . $request->defisit1 . '   ' . $request->kejang1 . '   ' . $request->nyeri3,
            'kesadaran_pasien' => $request->kesadaranlain,
            'status_psikologi' => $request->statusps,
            'keluhan_utama' => $request->kelut,
            'visum' => $request->pemfis,
            'diagnosa_triase' => $request->ditri,
            'tatalaksana' => $request->talak,
            'pasien_pulang' => $request->kondisi,
            'tgl_masuk_triase' => $now,
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
}
