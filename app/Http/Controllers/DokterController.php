<?php

namespace App\Http\Controllers;

use App\Models\erm_cppt_dokter;
use App\Models\ts_antrian_igd;
use App\Models\mt_kode_igd_header;
use App\Models\ts_layanan_detail_igd;
use App\Models\ts_layanan_header_igd;
use App\Models\ts_triase;
use Illuminate\Http\Request;
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
    public function kpo()
    {
        $user = auth()->user()->nama;

        $menu = 'kpo';
        return view(
            'dokter.kpo',
            [
                'title' => 'SiRAMAH DOKTER',
                'menu' => $menu,
                'user' => $user

            ]
        );
    }
    public function triase()
    {
        $user = auth()->user()->nama;

        $menu = 'triase';
        $now = Carbon::now()->format('Y-m-d');

        $antrian = DB::connection('mysql2')->select('SELECT no_antri, kode_kunjungan, tgl, no_rm, nama_px, status, status_triase FROM tp_karcis_igd
      WHERE DATE(tgl) BETWEEN ? AND ?', [$now, $now]);
        $nama = DB::connection('mysql2')->select('SELECT  no_rm, kode_kunjungan FROM ts_kunjungan
        WHERE DATE(tgl_masuk) BETWEEN ? AND ?', [$now, $now]);
        return view(
            'dokter.triase',
            [
                'title' => 'TRIASE DOKTER',
                'menu' => $menu,
                'antrian' => $antrian,
                'nama' => $nama,

                'user' => $user
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

    public function caripasienigd(Request $request)
    {
        $tgl = $request->tglkunjungan;
        $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','1002','$tgl')");


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


        $now = Carbon::now()->format('Y-m-d');
        $pasienigd = DB::connection('mysql2')->select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','1002','$now')");
        $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','1002','$now')");

        return view(
            'dokter.asses',
            [
                'title' => 'ERM DOKTER',
                'menu' => $menu,
                'pasienigd' => $pasienigd,
                'user' => $user
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
        $kelas = $request->kelas;
        $tglmasuk = $request->tglmasuk;
        $ttv = DB::connection('mysql2')->select('SELECT tekanan_darah, keadaan_umum, kesadaran, frekuensi_nafas, frekuensi_nadi, suhu, berat_badan, umur FROM erm_cppt_perawat WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);

        $cek = DB::select('SELECT
      fc_nama_unit1(kode_unit) AS nama_unit
      ,a.*

      FROM assesmen_dokters a
      WHERE  id_pasien = ?', [$norm]);
        $cek1 = DB::select('SELECT a.no_rm, b.kode_layanan_header FROM ts_kunjungan a INNER JOIN ts_layanan_header b
        ON b.kode_kunjungan = a.kode_kunjungan
        WHERE b.kode_unit = ? AND  a.no_rm = ? ', ['3002',$norm]);
        $cekr = DB::select('select *,date(tgl_baca) as tanggalnya,fc_acc_number_ris(id_detail) as acc_number from ts_hasil_expertisi where no_rm = ?', [$norm]);

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
                'cek1' => $cek1,
                'cekr' => $cekr,
                'norm' => $norm,
                'namapx' => $namapx,
                'jk' => $jk,
                'kj' => $kj,
                'tglmasuk' => $tglmasuk,
                'ttv' => $ttv,
                'kelas' => $kelas,
                'kp' => $kp,
                'ku' => $ku,

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
    public function formermdokter(Request $request)
    {
        $kj = $request->kj;
        $norm = $request->norm;
        $kelas = $request->kelas;
        $kp = $request->kp;
        $ku = $request->ku;
        $cek1 = DB::select('select * from ts_layanan_header where kode_kunjungan = ? and kode_unit = ?', [$kj, '3002']);
        $cek = DB::select('select *,date(tgl_baca) as tanggalnya,fc_acc_number_ris(id_detail) as acc_number from ts_hasil_expertisi where kode_kunjungan = ?', [$kj]);

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
        AND a.kode_kunjungan = ?', ['3003', $request->kj]);
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
         AND a.kode_kunjungan = ?', ['3002', $request->kj]);
        $layananlab = DB::select("CALL SP_PANGGIL_TARIF_LAB('$kelas','')");
        $layanan = DB::select("CALL SP_CARI_TARIF_PELAYANAN_RAD('$ku','','$kelas')");
        $diagnosa = DB::select('SELECT * FROM mt_jenis_diagnosa_medis');
        $alasanplg  = DB::select('SELECT * FROM mt_alasan_pulang');
        $ttv = DB::connection('mysql2')->select('SELECT tekanan_darah, frekuensi_nafas, keadaan_umum, kesadaran, frekuensi_nadi, suhu, berat_badan, umur FROM erm_cppt_perawat WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        $assesdok = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_dokter WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        return view(
            'dokter.formermdokter',
            [
                'title' => 'SiRAMAH DOKTER',
                'layananlab' => $layananlab,
                'layanan' => $layanan,
                'diagnosa' => $diagnosa,
                'alasanpulang' => $alasanplg,
                'ttv' => $ttv,
                'assesdok' => $assesdok,
                'kelas' => $kelas,
                'kp' => $kp,
                'ku' => $ku,
                'cek1' => $cek1,
                'cek' => $cek,
                'riwayatorderrad' => $riwayatorderrad,
                'riwayatorderlab' => $riwayatorderlab


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

    public function resumecpptdokter(Request $request)
    {

        $resumedok = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_dokter
        WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
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
        AND a.kode_kunjungan = ?', ['3003', $request->kj]);
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
         AND a.kode_kunjungan = ?', ['3002', $request->kj]);
        return view(
            'dokter.resumecpptdokter',
            [
                'title' => 'ERM DOKTER',
                'resumedok' => $resumedok,
                'riwayatorderrad' => $riwayatorderrad,
                'riwayatorderlab' => $riwayatorderlab

            ]
        );
    }
    public function hasillabo(Request $request)
    {
        $kodekunjungan = $request->kj;
        $norm = $request->norm;

        $cek = DB::select('SELECT a.no_rm, b.kode_layanan_header FROM ts_kunjungan a INNER JOIN ts_layanan_header b
        ON b.kode_kunjungan = a.kode_kunjungan
        WHERE b.kode_unit = ? AND  a.no_rm = ? ', ['3002',$norm]);

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
    public function simpanpemeriksaantriaseanak(Request $request)
    {
        $a = $request->all();
        $now = Carbon::now();
        $ats = $request->jenisats;
        $antrian = $request->antrian;
        $klasifikasi = $request->klasifikasipasien;
        $user = auth()->user()->id_simrs;
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
            'kesadaran' => $request->tidakada . '   ' . $request->penurunan . '   ' . $request->unconsable . '   ' . $request->consolable . '   ' . $request->tidakberubah . '   ' . $request->letargis . '   ' . $request->atypical . '   ' . $request->atypical1 . '   ' . $request->tidaknetek . '   ' . $request->tidakriwayat,
            'jalan_nafas' => $request->gagalnafas . '   ' . $request->rr . '   ' . $request->rr1 . '   ' . $request->laju1 . '   ' . $request->laju2 . '   ' . $request->rr2 . '   ' . $request->rr3 . '   ' . $request->stdr . '   ' . $request->stdr1 . '   ' . $request->distress . '   ' . $request->distress1,

            'sirkulasi' => $request->hentijantung . '   ' . $request->rr4 . '   ' . $request->rr5 . '   ' . $request->freknafas . '   ' . $request->laju3 . '   ' . $request->laju4 . '   ' . $request->syok . '   ' . $request->rr6 . '   ' . $request->rr7 . '   ' . $request->sianosis . '   ' . $request->waktu . '   ' . $request->waktu1,

            'respirasi' => $request->gangguan . '   ' . $request->stdr2 . '   ' . $request->stdr3 . '   ' . $request->asma . '   ' . $request->gagalnafas1 . '   ' . $request->distressnafas . '   ' . $request->distressnafas1 . '   ' . $request->T . '   ' . $request->asmaber . '   ' . $request->serangan1 . '   ' . $request->trauma . '   ' . $request->aspirasi2 . '   ' . $request->aspirasi3 . '   ' . $request->trauma1 . '   ' . $request->batukber,
            'kardiovaskular' => $request->hipo . '   ' . $request->takikardia . '   ' . $request->takikardia1 . '   ' . $request->nyerda . '   ' . $request->node . '   ' . $request->pendarahan . '   ' . $request->bradikardia . '   ' . $request->dehi1 . '   ' . $request->dehi2 . '   ' . $request->pendarahan1 . '   ' . $request->pendarahan2,
            'pernafasan' => $request->trauma2 . '   ' . $request->trauma3 . '   ' . $request->trauma4 . '   ' . $request->trauma5 . '   ' . $request->gcs10 . '   ' . $request->gcs13 . '   ' . $request->gcs15 . '   ' . $request->sakitpala . '   ' . $request->kejang . '   ' . $request->penurunankes . '   ' . $request->sakitpala1 . '   ' . $request->kejangberulang . '   ' . $request->penurunankes1 . '   ' . $request->sakitpala2 . '   ' . $request->tisa . '   ' . $request->sapal . '   ' . $request->shunt . '   ' . $request->shunt1 . '   ' . $request->kjg,
            'abuse' => $request->konflik . '   ' . $request->risikoch . '   ' . $request->ksex . '   ' . $request->kdrt,
            'lain' => $request->anafileksis . '   ' . $request->letargis1 . '   ' . $request->infant . '   ' . $request->rewel . '   ' . $request->dm . '   ' . $request->bayi7 . '   ' . $request->bayi3 . '   ' . $request->bayi36 . '   ' . $request->bayi3bln . '   ' . $request->reaksi . '   ' . $request->reaksi1 . '   ' . $request->gangguan1 . '   ' . $request->kesulitan . '   ' . $request->perilaku . '   ' . $request->KAD,
            'kesadaran_pasien' => $request->kesadaranlain,
            'status_psikologi' => $request->statusps,
            'keluhan_utama' => $request->kelut,
            'visum' => $request->pemfis,
            'diagnosa_triase' => $request->ditri,
            'tatalaksana' => $request->talak,
            'pasien_pulang' => $request->kondisi,
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
        $diagnosa = $request->diagnosa ;
        $ku = $request->ku;
        $kj = $request->kj;
        $norm = $request->norm;


        $dt = Carbon::now()->timezone('Asia/Jakarta');
        $date = $dt->toDateString();
        $time = $dt->toTimeString();
        $now = Carbon::now();
        $sp = 'OPN';
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;

        try {

            $assesmen = erm_cppt_dokter::create([
                'id_cppt_dokter' => $user,
                'tgl_kunjungan' => $request->tglmasuk,

                'tgl_input' => $now,
                'kode_unit' => '1002',
                'kode_kunjungan' => $request->kj,
                'no_rm' => $request->norm,
                'subyektif' => $request->subject,
                'obyektif' => $request->objek,
                'assesment' => $request->assesmen,
                'planning' => $request->planning,
                'tiga_pertama' => $request->tigap,
                'tiga_kedua' => $request->tigak,
                'diagnosa' => $request->diagnosa . ' ' . $request->diagnosa1,
                'cara_pulang' => $request->alpul . ' ' . $request->alpul1,
                'keadaan_pulang' => $request->kopul . ' ' . $request->kopul1,
                'primary_survey' => $request->primary,
                'secondary_survey' => $request->secondary,
                'kode_paramedis' => $kp,
                'status' => '1'

            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }


        try {
            $datalab = json_decode($_POST['datalab'], true);
            if ($datalab == null) {
            } else {
                foreach ($datalab as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSet[$index] = $value;
                    if ($index == 'cyto') {
                        $arrayindex[] = $dataSet;
                    }
                }

                $sum = 0;

                foreach ($arrayindex as $arr) {
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
                        foreach ($arrayindex as $arr) {
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
                        foreach ($arrayindex as $arr) {
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
                    foreach ($arrayindex as $arr) {
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
            return $e->getMessage();
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }



        try {


            $datarad = json_decode($_POST['datarad'], true);

            if ($datarad == null) {
            } else {
                foreach ($datarad as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSet[$index] = $value;
                    if ($index == 'cyto') {
                        $arrayindex[] = $dataSet;
                    }
                }

                $sum = 0;

                foreach ($arrayindex as $arr) {
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
                            'kode_unit' => '3003',
                            'kode_tipe_transaksi' => 2,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindex as $arr) {
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
                            'kode_unit' => '3003',
                            'kode_tipe_transaksi' => 1,
                            'kode_penjaminx' => $request->kp,
                            'pic' => $user,
                        ];
                        $head = ts_layanan_header_igd::create($data_layanan_header);
                        $id_detail = $this->createLayanandetail();
                        foreach ($arrayindex as $arr) {
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
                        'kode_unit' => '3003',
                        'kode_tipe_transaksi' => 2,
                        'kode_penjaminx' => $request->kp,
                        'pic' => $user,
                    ];

                    $head = ts_layanan_header_igd::create($data_layanan_header);
                    $id_detail = $this->createLayanandetail();
                    foreach ($arrayindex as $arr) {
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
            //     $update = DB::connection('mysql2')->select('UPDATE ts_layanan_header_igd SET status_order = 2
            // WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $request->norm]);
            }
        } catch (\Exception $e) {
            return $e->getMessage();
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
     $update = DB::connection('mysql2')->select('UPDATE ts_kunjungan
            SET diagx = ?
            WHERE no_rm = ? AND kode_kunjungan = ?', [$diagnosa, $norm, $kj]);

        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
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


        $kj = $request->kj;
        $norm = $request->norm;

        $update = DB::connection('mysql2')->select('UPDATE erm_cppt_dokter
        SET
        subyektif = ? , assesment = ?, primary_survey = ?, secondary_survey = ?, planning = ?, tiga_pertama = ?, tiga_kedua = ?, diagnosa = ?
        WHERE no_rm = ? AND kode_kunjungan = ?', [$subyektif, $assesment, $primary, $secondary, $planning, $tiga_pertama, $tiga_kedua, $diagnosa, $norm, $kj]);


        $updatee = DB::connection('mysql2')->select('UPDATE ts_kunjungan
    SET diagx = ?
    WHERE no_rm = ? AND kode_kunjungan = ?', [$diagnosa, $norm, $kj]);
        dd($update);


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
}
