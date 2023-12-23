<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\erm_cppt_perawat;
use App\Models\rencana_plg;
use File;

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
        $pasienigd = DB::connection('mysql2')->select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','1002','$now')");

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
            'perawat.ermperawatview',
            [
                'title' => 'ERM PERAWAT',
                'cek' => $cek,
                'cek1' => $cek1,
                'cekr' => $cekr,
                'cekpa' => $cekpa,
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
        $kj =  $request->kj;
        $hasil = DB::connection('mysql2')->select('SELECT 
         a.tgl_kunjungan,
         a.hasil_ekg,
         a.surat_penolakan,
         a.informasi_tindakan,
         a.transfer_pasien
         FROM erm_cppt_perawat a
         WHERE a.kode_kunjungan = ?', [$kj]);
        return view(
            'perawat.resumecpptperawat',
            [
                'title' => 'ERM PERAWAT',
                'resume' => $resume,
                'riwayatorderrad' => $riwayatorderrad,
                'riwayatorderlab' => $riwayatorderlab,
                'hasil' => $hasil
            ]
        );
    }
    public function rencanaplg(Request $request)
    {
        $norm = $request->norm;
        $kj = $request->kj;

        $data = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_dokter WHERE no_rm = "20922598" AND kode_kunjungan = "22274084"
');
        $poli = DB::select('SELECT * FROM mt_unit WHERE kode_unit LIKE "%10%" AND kelas_unit = "1" AND kode_unit <> "1002"');
        return view(
            'perawat.rencanaplg',
            [
                'data' => $data,
                'norm' => $norm,
                'kj' => $kj,

                'poli' => $poli

            ]
        );
    }
    public function upload(Request $request)
    {
        $norm = $request->norm;
        $kj = $request->kj;
        $pasien = DB::connection('mysql2')->select('SELECT a.no_rm, a.kode_kunjungan,
        fc_NAMA_PARAMEDIS(a.no_rm) AS nama_dokter,
        b.nama_px,
        b.alamat,
        fc_umur(a.no_rm) AS umur,
        c.diag_00
        FROM ts_kunjungan a
        INNER JOIN mt_pasien b ON b.no_rm = a.no_rm
        INNER JOIN di_pasien_diagnosa_frunit c ON c.kode_kunjungan = a.kode_kunjungan
        WHERE a.no_rm = ? AND a.kode_kunjungan = ?', [$norm, $kj]);

        $hasil = DB::connection('mysql2')->select('SELECT 
        a.tgl_kunjungan,
        a.hasil_ekg,
        a.surat_penolakan,
        a.informasi_tindakan,
        a.transfer_pasien
        FROM erm_cppt_perawat a
        WHERE a.no_rm = ?', [$norm]);


        return view(
            'perawat.upload',
            [
                'pasien' => $pasien,
                'hasil' => $hasil


            ]
        );
    }
    public function sri(Request $request)
    {
        $norm = $request->norm;
        $kj = $request->kj;

        $data = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_dokter WHERE no_rm = "20922598" AND kode_kunjungan = "22274084"
');
        $spri = DB::select('SELECT a.no_rm, a.kode_kunjungan,
        fc_NAMA_PARAMEDIS(a.no_rm) AS nama_dokter,
        b.nama_px,
        b.alamat,
        fc_umur(a.no_rm) AS umur,
        c.diag_00
        FROM ts_kunjungan a
        INNER JOIN mt_pasien b ON b.no_rm = a.no_rm
        INNER JOIN di_pasien_diagnosa_frunit c ON c.kode_kunjungan = a.kode_kunjungan
        WHERE a.no_rm = ? AND a.kode_kunjungan = ?', [$norm, $kj]);
        $poli = DB::select('SELECT * FROM mt_unit WHERE kode_unit LIKE "%20%" AND kode_unit <> "3020"');

        return view(
            'perawat.sri',
            [
                'data' => $data,
                'poli' => $poli,
                'spri' => $spri

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
            'perawat.riwayatpoliklinik',
            [
                'norm' => $norm,
                'cek' => $cek,
                'cek1' => $cek1,
                'cekr' => $cekr,
                'cekpa' => $cekpa,


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

    public function simpanrencanaplg(Request $request)
    {
        $a = $request->all();
        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;
        $kj = $request->kj;
        $norm = $request->norm;



        $rencanaplg = rencana_plg::create([
            'tgl_input' => $now,
            'tgl_kunjungan' => $now,
            'no_rm' => $request->norm,
            'kode_kunjungan' => $request->kj,
            'usia_lanjut' => $request->usialanjut,
            'hambatan' => $request->hambatan,
            'pelayanan_medis' => $request->medis,
            'tergantung' => $request->harian,
            'transportasi' => $request->kendaraan,
            'pendamping' => $request->pendamping,
            'diet_khusus' => $request->diet,
            'peralatan_medis' => $request->perawatan,
            'alat_bantu' => $request->alatbantu,
            'pendidikan_kesehatan' => $request->pendidikan,
            'diberikan' => $request->diberikan,
            'jadwal_kontrol' => $request->tglpoli,
            'poli_tuju' => $request->poli,
            'instruksi' => $request->planning,
            'status' => '1',



        ]);




        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
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
            'cara_pulang' => $request->alpul . ' ' . $request->alpul1,
            'keadaan_pulang' => $request->kopul . ' ' . $request->kopul1,

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

    public function simpanhasilekg(Request $request)
    {

        $dt = Carbon::now()->timezone('Asia/Jakarta');
        $date = $dt->toDateString();
        $time = $dt->toTimeString();
        $now = $date . ' ' . $time;
        $norm = $request->norm;
        $data = json_decode($_POST['data'], true);
        foreach ($data as $nama) {
            $index =  $nama['name'];
            $value =  $nama['value'];
            $dataSet[$index] = $value;
            if ($index == 'ekg') {
                $arrayindex[] = $dataSet;
            }
        }
        $kj = $dataSet['kj'];
        $norm = $dataSet['norm'];

        //upload foto
        $file = $request->file('file');
        $filename = $norm . '_' . $kj . '_' . 'EKG' . '_' . $file->getClientOriginalName();

        $location = '../files';

        // Upload file
        $file->move($location, $filename);

        // File path
        $filepath = url('../../files/' . $filename);


        // $update = DB::connection('mysql2')->table(' UPDATE erm_cppt_perawat
        // SET hasil_ekg = ? WHERE kode_kunjungan = ?', [$filepath,$kj]);
        $update = DB::connection('mysql2')->table('erm_cppt_perawat')
            ->where('kode_kunjungan', $kj)
            ->update(['hasil_ekg' => $filename]);


        // $request->file('$bukti')->store('public/images');
        // $foto = new mt_pasien();
        // $foto->save();

        $back = [
            'kode' => 200,
            'message' => ''
        ];
        echo json_encode($back);
        die;
    }
    public function simpanhasilspp(Request $request)
    {

        $dt = Carbon::now()->timezone('Asia/Jakarta');
        $date = $dt->toDateString();
        $time = $dt->toTimeString();
        $now = $date . ' ' . $time;
        $norm = $request->norm;
        $data = json_decode($_POST['data'], true);
        foreach ($data as $nama) {
            $index =  $nama['name'];
            $value =  $nama['value'];
            $dataSet[$index] = $value;
            if ($index == 'spp') {
                $arrayindex[] = $dataSet;
            }
        }
        $kj = $dataSet['kj'];
        $norm = $dataSet['norm'];

        //upload foto
        $file = $request->file('file');
        $filename = $norm . '_' . $kj . '_' . 'spp' . '_' . $file->getClientOriginalName();

        $location = '../files';

        // Upload file
        $file->move($location, $filename);

        // File path
        $filepath = url('../../files/' . $filename);


        // $update = DB::connection('mysql2')->table(' UPDATE erm_cppt_perawat
        // SET hasil_ekg = ? WHERE kode_kunjungan = ?', [$filepath,$kj]);
        $update = DB::connection('mysql2')->table('erm_cppt_perawat')
            ->where('kode_kunjungan', $kj)
            ->update(['surat_penolakan' => $filename]);


        // $request->file('$bukti')->store('public/images');
        // $foto = new mt_pasien();
        // $foto->save();

        $back = [
            'kode' => 200,
            'message' => ''
        ];
        echo json_encode($back);
        die;
    }
    public function simpanhasiltdkn(Request $request)
    {

        $dt = Carbon::now()->timezone('Asia/Jakarta');
        $date = $dt->toDateString();
        $time = $dt->toTimeString();
        $now = $date . ' ' . $time;
        $norm = $request->norm;
        $data = json_decode($_POST['data'], true);
        foreach ($data as $nama) {
            $index =  $nama['name'];
            $value =  $nama['value'];
            $dataSet[$index] = $value;
            if ($index == 'tdkn') {
                $arrayindex[] = $dataSet;
            }
        }
        $kj = $dataSet['kj'];
        $norm = $dataSet['norm'];

        //upload foto
        $file = $request->file('file');
        $filename = $norm . '_' . $kj . '_' . 'tdkn' . '_' . $file->getClientOriginalName();

        $location = '../files';

        // Upload file
        $file->move($location, $filename);

        // File path
        $filepath = url('../../files/' . $filename);


        // $update = DB::connection('mysql2')->table(' UPDATE erm_cppt_perawat
        // SET hasil_ekg = ? WHERE kode_kunjungan = ?', [$filepath,$kj]);
        $update = DB::connection('mysql2')->table('erm_cppt_perawat')
            ->where('kode_kunjungan', $kj)
            ->update(['informasi_tindakan' => $filename]);


        // $request->file('$bukti')->store('public/images');
        // $foto = new mt_pasien();
        // $foto->save();

        $back = [
            'kode' => 200,
            'message' => ''
        ];
        echo json_encode($back);
        die;
    }
    public function simpanhasiltf(Request $request)
    {

        $dt = Carbon::now()->timezone('Asia/Jakarta');
        $date = $dt->toDateString();
        $time = $dt->toTimeString();
        $now = $date . ' ' . $time;
        $norm = $request->norm;
        $data = json_decode($_POST['data'], true);
        foreach ($data as $nama) {
            $index =  $nama['name'];
            $value =  $nama['value'];
            $dataSet[$index] = $value;
            if ($index == 'tf') {
                $arrayindex[] = $dataSet;
            }
        }
        $kj = $dataSet['kj'];
        $norm = $dataSet['norm'];

        //upload foto
        $file = $request->file('file');
        $filename = $norm . '_' . $kj . '_' . 'tf' . '_' . $file->getClientOriginalName();

        $location = '../files';

        // Upload file
        $file->move($location, $filename);

        // File path
        $filepath = url('../../files/' . $filename);


        // $update = DB::connection('mysql2')->table(' UPDATE erm_cppt_perawat
        // SET hasil_ekg = ? WHERE kode_kunjungan = ?', [$filepath,$kj]);
        $update = DB::connection('mysql2')->table('erm_cppt_perawat')
            ->where('kode_kunjungan', $kj)
            ->update(['transfer_pasien' => $filename]);


        // $request->file('$bukti')->store('public/images');
        // $foto = new mt_pasien();
        // $foto->save();

        $back = [
            'kode' => 200,
            'message' => ''
        ];
        echo json_encode($back);
        die;
    }
}
