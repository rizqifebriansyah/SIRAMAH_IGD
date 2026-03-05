<?php

namespace App\Http\Controllers;

use App\Models\erm_cppt_kebidanan;
use App\Models\pemantauan_ttv;

use App\Models\erm_cppt_kebidanan_bayi;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\erm_cppt_perawat;
use App\Models\erm_tindakan_keperawatan;

use App\Models\rencana_plg;
use App\Models\mt_kode_header;
use App\Models\ts_layanan_header;
use App\Models\ts_layanan_detail;



use App\Models\tx_rujukan_intern;
use File;

use function Laravel\Prompts\select;

class PerawatController extends Controller
{
    public function index()
    {
        $user = auth()->user()->nama;
        $unit = auth()->user()->unit;
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

    public function pemantauanview(Request $request)
    {
        $kj  = $request->kj;
        $norm = $request->norm;
        $hasilp = DB::select('SELECT * FROM pemantauan_ttv WHERE kj = ? AND norm = ?', [$kj, $norm]);
        // dd($hasilp);

        return view('perawat.pemantauanview', [
            'hasilp' => $hasilp



        ]);
    }
    public function assesperawat()
    {
        $menu = 'assesperawat';
        $user = auth()->user()->nama;
        $unit = auth()->user()->unit;



        $now = Carbon::now()->format('Y-m-d');
        // $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','$unit','$now')");
        // $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','$unit','$now')");

        $pasienigd = DB::select('SELECT DISTINCT
        e.diagnosa_kerja AS DIAGX
        ,a.no_rm
        ,IFNULL(d.nama_perawat,"") AS nama_perawat
        ,IFNULL(d.nama_perawat1,"") AS nama_perawat1
        ,IFNULL(e.nama_paramedis,"") AS nama_paramedis
        ,fc_nama_px(a.no_rm) AS nama_px
        ,a.tgl_masuk
        ,fc_NAMA_PARAMEDIS1(a.kode_paramedis) nama_dpjp
        ,a.kode_penjamin
        ,a.kode_kunjungan
        ,a.kelas
        ,a.kelas AS KELAS_UNIT
        ,a.counter
        ,b.jenis_kelamin

        FROM ts_kunjungan a
        INNER JOIN mt_pasien b ON b.no_rm = a.no_rm
        LEFT OUTER JOIN di_pasien_diagnosa_frunit c ON c.kode_kunjungan = a.kode_kunjungan 
        LEFT OUTER JOIN erm_cppt_perawat d ON d.kode_kunjungan = a.kode_kunjungan
        LEFT OUTER JOIN	erm_cppt_dokter e ON e.kode_kunjungan = a.kode_kunjungan
        where Date(a.tgl_masuk) = ?
        AND a.status_kunjungan NOT IN (8,11)
        and d.status NOT IN (2,3)
        and a.kode_unit = ?
        
        
        UNION
        SELECT DISTINCT
        e.diagnosa_kerja AS DIAGX
        ,a.no_rm
        ,IFNULL(d.nama_perawat,"") AS nama_perawat
        ,IFNULL(d.nama_perawat1,"") AS nama_perawat1

        ,IFNULL(e.nama_paramedis,"") AS nama_paramedis
        ,fc_nama_px(a.no_rm) AS nama_px
        ,a.tgl_masuk
        ,fc_NAMA_PARAMEDIS1(a.kode_paramedis) nama_dpjp
        ,a.kode_penjamin
        ,a.kode_kunjungan
        ,a.kelas
        ,a.kelas AS KELAS_UNIT
        ,a.counter
        ,b.jenis_kelamin

        FROM ts_kunjungan a
        INNER JOIN mt_pasien b ON b.no_rm = a.no_rm
        LEFT OUTER JOIN di_pasien_diagnosa_frunit c ON c.kode_kunjungan = a.kode_kunjungan 
        LEFT OUTER JOIN erm_cppt_perawat d ON d.kode_kunjungan = a.kode_kunjungan
        LEFT OUTER JOIN	erm_cppt_dokter e ON e.kode_kunjungan = a.kode_kunjungan
        where Date(a.tgl_masuk) = ?
        and a.status_kunjungan NOT IN (8,11)
        and a.kode_unit = ?', [$now, $unit,$now, $unit]);

        // if ($pasienigd == null) {

        //     $pasienigd = DB::select('SELECT DISTINCT
        // e.diagnosa_kerja AS DIAGX
        // ,a.no_rm
        // ,IFNULL(d.nama_perawat,"") AS nama_perawat
        // ,IFNULL(d.nama_perawat1,"") AS nama_perawat1

        // ,IFNULL(e.nama_paramedis,"") AS nama_paramedis
        // ,fc_nama_px(a.no_rm) AS nama_px
        // ,a.tgl_masuk
        // ,fc_NAMA_PARAMEDIS1(a.kode_paramedis) nama_dpjp
        // ,a.kode_penjamin
        // ,a.kode_kunjungan
        // ,a.kelas
        // ,a.kelas AS KELAS_UNIT
        // ,a.counter
        // ,b.jenis_kelamin

        // FROM ts_kunjungan a
        // INNER JOIN mt_pasien b ON b.no_rm = a.no_rm
        // LEFT OUTER JOIN di_pasien_diagnosa_frunit c ON c.kode_kunjungan = a.kode_kunjungan 
        // LEFT OUTER JOIN erm_cppt_perawat d ON d.kode_kunjungan = a.kode_kunjungan
        // LEFT OUTER JOIN	erm_cppt_dokter e ON e.kode_kunjungan = a.kode_kunjungan
        // where Date(a.tgl_masuk) = ?
        // and a.status_kunjungan NOT IN (8,11)
        // and a.kode_unit = ?', [$now, $unit]);
        // }
        // dd($pasienigd);
        return view(
            'perawat.assesperawat',
            [
                'title' => 'ERM Perawat',
                'menu' => $menu,
                'pasienigd' => $pasienigd,
                'user' => $user,
                'unit' => $unit
            ]
        );
    }
    public function billingigk()
    {
        $menu = 'billing';
        $user = auth()->user()->nama;
        $unit = auth()->user()->unit;



        $now = Carbon::now()->format('Y-m-d');
        $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','$unit','$now')");
        // $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','$unit','$now')");

        return view(
            'perawat.billingigk',
            [
                'title' => 'Billing IGD KEBIDANAN',
                'menu' => $menu,
                'pasienigd' => $pasienigd,
                'user' => $user,
                'unit' => $unit
            ]
        );
    }
    public function billinginput(Request $request)
    {
        $unit = auth()->user()->unit;



        $now = Carbon::now()->format('Y-m-d');
        $norm = $request->norm;
        $namapx = $request->namapx;
        $diagnosa = $request->diag;

        $jk = $request->jk;
        $kj = $request->kj;
        $tglmasuk = $request->tglmasuk;
        $unit = auth()->user()->unit;

        $layanan = DB::select("CALL SP_PANGGIL_TARIF_TINDAKAN_RS_2024_IGD('1','','$unit')");
        $p = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('$norm','','','$unit','$now')");
        $riwayattindakan = DB::select('SELECT
     
        a.kode_layanan_header,
        a.kode_kunjungan,
        a.id,
        b.id_layanan_detail,
        b.total_tarif,
        a.total_layanan,
        fc_nama_tindakan(LEFT(b.kode_tarif_detail,6)) AS nama_tindakan,
        a.status_order
        FROM
        ts_layanan_header a
        INNER JOIN ts_layanan_detail b ON b.row_id_header = a.id
        WHERE a.kode_unit = "1023"
        AND a.kode_kunjungan = ?', [$kj]);

        return view(
            'perawat.billingigdkview',
            [
                'title' => 'BILLING IGD KEBIDANAN',
                'p' => $p,
                'riwayattindakan' => $riwayattindakan,

                'layanan' => $layanan
            ]
        );
    }
    public function simpantindakankebidanan(Request $request)
    {
        $kodepenjamin = $request->kodepenjamin;
        $kelasunit = $request->kelasunit;
        $norm  = $request->norm;
        $namaunit = $request->namaunit;
        $unit = auth()->user()->unit;
        $idsimrs = auth()->user()->id_simrs;
        $kelas = $request->kelas;
        $kodeunit = $request->kodeunit;
        $goldar = $request->goldar;
        $ukirim = $unit . ' | ' . $namaunit . ' | ' . $kelas;
        $sp = 'OPN';
        $dt = Carbon::now()->timezone('Asia/Jakarta');
        $date = $dt->toDateString();
        $time = $dt->toTimeString();
        $now = $date . ' ' . $time;
        $data = json_decode($_POST['data'], true);
        foreach ($data as $nama) {
            $index = $nama['name'];
            $value = $nama['value'];
            $dataSet[$index] = $value;
            if ($index == 'cyto') {
                $arrayindex[] = $dataSet;
            }
        }
        $count = count($arrayindex);
        $sum = 0;
        foreach ($arrayindex as $arr) {
            if ($arr['cyto'] == 1) {
                $cyt = $arr['tarif'] * (50 / 100);
            } else {
                $cyt = 0;
            }
            if ($arr['disc'] == 0) {
                $disc = 0;
            } else {
                $disc = ($arr['tarif'] * $arr['disc'] / 100);
            }
            $ttl = ($arr['tarif'] * $arr['qty']) + $cyt - $disc;
            $trf = array($ttl);
            $gt =
                $sum += array_sum($trf);
        }
        try {
            $kode_header = DB::select("CALL GET_NOMOR_LAYANAN_HEADER('1023')");
            $kode_header  = $kode_header[0]->no_trx_layanan;
            if ($kode_header == null) {
                $kode_header = $this->createOrderHeader('UGK');
                $kode_header = mt_kode_header::create([
                    'kode_header' => $kode_header,
                    'tgl_header' => date('Y-m-d')
                ]);
            } else {
                $kode_header = DB::select("CALL GET_NOMOR_LAYANAN_HEADER('1023')");
                $kode_header  = $kode_header[0]->no_trx_layanan;
            }


            if ($kodepenjamin == 'P01') {
                if ($kelasunit == '2') {
                    $data_layanan_header = [
                        'kode_layanan_header' => $kode_header,
                        'tgl_entry' => $now,
                        'kode_kunjungan' => $request->kodekunjungan,
                        'qty_header' => $dataSet['qty'],
                        'keterangan' => 'PENDING',
                        'unit_pengirim' => $ukirim,
                        'diagnosa' => $request->diagnosa,
                        'dok_kirim' => $request->dokter,
                        'total_layanan' => $gt,
                        'tagihan_pribadi' => $gt,
                        'diskon_global' => $dataSet['disc'],
                        'status_pembayaran' => $sp,
                        'status_layanan' => 1,
                        'kode_unit' => 1023,
                        'kode_tipe_transaksi' => 2,
                        'kode_penjaminx' => $request->kodepenjamin,
                        'status_order' => 1,
                        'pic' => $idsimrs,
                    ];
                    $head = ts_layanan_header::create($data_layanan_header);
                    $id_detail = $this->createLayanandetail();
                    foreach ($arrayindex as $arr) {

                        if ($arr['cyto'] == 1) {
                            $cyt = $arr['tarif'] * (50 / 100);
                        } else {
                            $cyt = 0;
                        }
                        if ($arr['disc'] == 0) {
                            $disc = 0;
                        } else {
                            $disc = ($arr['tarif'] * $arr['disc'] / 100);
                        }
                        $savedetail = [
                            'id_layanan_detail' => $id_detail,
                            'kode_layanan_header' => $kode_header,
                            'kode_tarif_detail' =>  $arr['kodelayanan'],
                            'total_tarif' => $arr['tarif'],
                            'jumlah_layanan' => $arr['qty'],
                            'diskon_dokter' => $arr['disc'],
                            'cyto' => $arr['cyto'],
                            'total_layanan' => $arr['tarif'],
                            'grantotal_layanan' => ($arr['tarif'] * $arr['qty']) + $cyt - $disc,
                            'status_layanan_detail' => 'OPN',
                            'tgl_layanan_detail' => $arr['tarif'],
                            'tagihan_pribadi' => $gt * $arr['qty'],
                            'tgl_layanan_detail_2' => $now,
                            'row_id_header' => $head['id']
                        ];
                        $ts_layanan_detail = ts_layanan_detail::create($savedetail);
                    }
                } else {

                    $data_layanan_header = [
                        'kode_layanan_header' => $kode_header,
                        'tgl_entry' => $now,
                        'kode_kunjungan' => $request->kodekunjungan,
                        'status_pembayaran' => $sp,
                        'keterangan' => 'PENDING',
                        'qty_header' => $dataSet['qty'],
                        'unit_pengirim' => $ukirim,
                        'diagnosa' => $request->diagnosa,
                        'dok_kirim' => $request->dokter,
                        'total_layanan' => $gt,
                        'tagihan_pribadi' => $gt,
                        'diskon_global' => $dataSet['disc'],
                        'status_layanan' => 1,
                        'kode_unit' => 1023,
                        'kode_tipe_transaksi' => 1,
                        'kode_penjaminx' => $request->kodepenjamin,
                        'status_order' => 1,
                        'pic' => $idsimrs,
                    ];
                    $head = ts_layanan_header::create($data_layanan_header);
                    $id_detail = $this->createLayanandetail();
                    foreach ($arrayindex as $arr) {
                        if ($arr['cyto'] == 1) {
                            $cyt = $arr['tarif'] * (50 / 100);
                        } else {
                            $cyt = 0;
                        }
                        if ($arr['disc'] == 0) {
                            $disc = 0;
                        } else {
                            $disc = ($arr['tarif'] * $arr['disc'] / 100);
                        }
                        $savedetail = [
                            'id_layanan_detail' => $id_detail,
                            'kode_layanan_header' => $kode_header,
                            'kode_tarif_detail' =>  $arr['kodelayanan'],
                            'total_tarif' => $arr['tarif'],
                            'jumlah_layanan' => $arr['qty'],
                            'diskon_dokter' => $arr['disc'],
                            'cyto' => $arr['cyto'],
                            'total_layanan' => $gt * $arr['qty'],
                            'grantotal_layanan' => ($arr['tarif'] * $arr['qty']) + $cyt - $disc,
                            'status_layanan_detail' => 'OPN',
                            'tgl_layanan_detail' => $now,
                            'tagihan_pribadi' => $arr['tarif'],
                            'tgl_layanan_detail_2' => $now,


                            'row_id_header' => $head['id']
                        ];
                        $ts_layanan_detail = ts_layanan_detail::create($savedetail);
                    }
                }
            } else {
                $data_layanan_header = [
                    'kode_layanan_header' => $kode_header,
                    'tgl_entry' => $now,
                    'kode_kunjungan' => $request->kodekunjungan,
                    'status_pembayaran' => $sp,
                    'keterangan' => 'PENDING',
                    'qty_header' => $dataSet['qty'],
                    'unit_pengirim' => $ukirim,
                    'diagnosa' => $request->diagnosa,
                    'dok_kirim' => $request->dokter,
                    'total_layanan' => $gt,
                    'tagihan_penjamin' => $gt,
                    'diskon_global' => $dataSet['disc'],
                    'status_layanan' => 2,
                    'kode_unit' => 1023,
                    'kode_tipe_transaksi' => 2,
                    'kode_penjaminx' => $request->kodepenjamin,
                    'status_order' => 1,
                    'pic' => $idsimrs,
                ];
                $head = ts_layanan_header::create($data_layanan_header);
                $id_detail = $this->createLayanandetail();
                foreach ($arrayindex as $arr) {
                    if ($arr['cyto'] == 1) {
                        $cyt = $arr['tarif'] * (50 / 100);
                    } else {
                        $cyt = 0;
                    }
                    if ($arr['disc'] == 0) {
                        $disc = 0;
                    } else {
                        $disc = ($arr['tarif'] * $arr['disc'] / 100);
                    }
                    $savedetail = [
                        'id_layanan_detail' => $id_detail,
                        'kode_layanan_header' => $kode_header,
                        'kode_tarif_detail' =>  $arr['kodelayanan'],
                        'total_tarif' => $arr['tarif'],
                        'jumlah_layanan' => $arr['qty'],
                        'diskon_dokter' => $arr['disc'],
                        'cyto' => $arr['cyto'],
                        'total_layanan' => $arr['tarif'],
                        'grantotal_layanan' => ($arr['tarif'] * $arr['qty']) + $cyt - $disc,
                        'status_layanan_detail' => 'OPN',
                        'tgl_layanan_detail' => $now,
                        'tagihan_penjamin' => $gt * $arr['qty'],
                        'tgl_layanan_detail_2' => $now,

                        'row_id_header' => $head['id']
                    ];
                    $ts_layanan_detail = ts_layanan_detail::create($savedetail);
                }
            }

            //     $kode_header = $ts_layanan_detail['kode_layanan_header'];
            $idhed = $ts_layanan_detail['row_id_header'];
            //     $update = DB::select('UPDATE ts_layanan_header_order SET status_order = 2
            // WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $norm]);
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }



        // $receive_items = $this->cetakpdf($kode_header, $idhed);
        $back = [
            'kode' => 200,
            'idhed' => $idhed,
            'kode_header' => $kode_header,
        ];
        echo json_encode($back);
        die;


        $back = [
            'kode' => 200,
            'message' => ''
        ];
        echo json_encode($back);
        die;
    }
    public function ermperawat(Request $request)
    {
        $norm = $request->norm;
        $namapx = $request->namapx;
        $unit = auth()->user()->unit;

        $jk = $request->jk;
        $kj = $request->kj;
        $tglmasuk = $request->tglmasuk;
        $ttv = DB::select('SELECT tekanan_darah, frekuensi_nafas, frekuensi_nadi, suhu, berat_badan, umur, keadaan_umum, kesadaran, gcs, spo2 FROM erm_cppt_perawat WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        $ttvb = DB::select('SELECT tekanan_darah, frekuensi_nafas, frekuensi_nadi, suhu, berat_badan, umur, keadaan_umum, kesadaran, gcs, spo2 FROM erm_cppt_kebidanan WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        $ttvc = DB::select('SELECT tekanan_darah, frekuensi_nafas, frekuensi_nadi, suhu, berat_badan, umur, keadaan_umum, kesadaran, gcs, spo2 FROM erm_cppt_kebidanan_bayi WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        // dd($ttvc);
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
                'ttv' => $ttv,
                'ttvb' => $ttvb,
                'ttvc' => $ttvc,


                'unit' => $unit

            ]
        );
    }

    public function transferpasien(Request $request)
    {
        $unit = auth()->user()->unit;

        $kj = $request->kj;
        $norm = $request->norm;
        $now = Carbon::now()->format('Y-m-d H:i:s');
        $ranap = DB::select('SELECT kode_unit,nama_unit FROM mt_unit WHERE kelas_unit = 2');
        $ttv = DB::select('SELECT tekanan_darah, frekuensi_nafas, frekuensi_nadi, suhu, berat_badan, umur, keadaan_umum, kesadaran, gcs, spo2 FROM erm_cppt_perawat WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        $riwayatrekonobat = DB::select('SELECT * FROM rekonsiliasi_obat WHERE kode_kunjungan = ?', [$kj]);

        return view(
            'perawat.transferpasien',
            [
                'title' => 'SiRAMAH PERAWAT',
                'unit' => $unit,

                'now' => $now,
                'norm' => $norm,
                'ranap' => $ranap,
                'ttv' => $ttv,
                'riwayatrekonobat' => $riwayatrekonobat,
                'kj' => $kj




            ]
        );
    }

    public function pemantauan(Request $request)
    {
        $unit = auth()->user()->unit;

        $kj = $request->kj;
        $norm = $request->norm;
        $now = Carbon::now()->format('Y-m-d H:i:s');

        return view(
            'perawat.pemantauan',
            [
                'title' => 'SiRAMAH PERAWAT',
                'unit' => $unit,

                'now' => $now,
                'norm' => $norm,

                'kj' => $kj




            ]
        );
    }
    public function formermperawat(Request $request)
    {
        $unit = auth()->user()->unit;

        $kj = $request->kj;
        $norm = $request->norm;
        $now = Carbon::now()->format('Y-m-d H:i:s');
        $datadiri = DB::select('SELECT 
        a.perujuk,
        fc_umur(a.no_rm) AS umur,
        fc_agama_px(a.no_rm) AS agama,
        fc_pekerjaan_px(a.no_rm) AS pekerjaan
        FROM ts_kunjungan a
        WHERE a.kode_kunjungan = ?', [$kj]);
        $assesdok = DB::select('SELECT * FROM erm_cppt_dokter
        WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        $assesper = DB::select('SELECT * FROM erm_cppt_perawat WHERE no_rm = ? AND kode_kunjungan = ? AND status IN (1,2)', [$norm, $kj]);
        // dd($assesper);
        $tindakan = DB::select('SELECT * FROM erm_tindakan_keperawatan WHERE no_rm = ? AND kode_kunjungan = ? AND status = 1', [$norm, $kj]);
        // dd($tindakan);
        return view(
            'perawat.formermperawat',
            // 'perawat.perbaikan',

            [
                'title' => 'SiRAMAH PERAWAT',
                'unit' => $unit,
                'assesdok' => $assesdok,
                'assesper' => $assesper,

                'datadiri' => $datadiri,
                'tindakan' => $tindakan,
                'now' => $now,
                'norm' => $norm,

                'kj' => $kj




            ]
        );
    }

    public function formdewasaigk(Request $request)
    {
        $unit = auth()->user()->unit;
        $now = Carbon::now()->format('Y-m-d H:i:s');

        $kj = $request->kj;
        $norm = $request->norm;

        $alasanplg  = DB::select('SELECT * FROM mt_alasan_pulang');
        $assesper = DB::select('SELECT * FROM erm_cppt_kebidanan WHERE no_rm = ? AND kode_kunjungan = ? AND status IN (1,2)', [$norm, $kj]);

        return view(
            'perawat.formdewasaigk',
            [
                'title' => 'SiRAMAH BIDAN',
                'unit' => $unit,
                'assesper' => $assesper,
                'alasanpulang' => $alasanplg,
                'norm' => $norm,
                'kj' => $kj,

                'now' => $now

            ]
        );
    }
    public function formbayikigk(Request $request)
    {
        $unit = auth()->user()->unit;
        $now = Carbon::now()->format('Y-m-d H:i:s');

        $kj = $request->kj;
        $norm = $request->norm;

        $alasanplg  = DB::select('SELECT * FROM mt_alasan_pulang');
        $assesper = DB::select('SELECT * FROM erm_cppt_kebidanan_bayi WHERE no_rm = ? AND kode_kunjungan = ? AND status IN (1,2)', [$norm, $kj]);
        // dd($assesper);
        return view(
            'perawat.formbayikigk',
            [
                'title' => 'SiRAMAH BIDAN',
                'unit' => $unit,
                'assesper' => $assesper,
                'alasanpulang' => $alasanplg,
                'now' => $now


            ]
        );
    }
    public function resumecpptperawat(Request $request)
    {
        $kj =  $request->kj;
        $antrian = $request->antrian;
        $unit = auth()->user()->unit;

        $now = Carbon::now()->format('Y-m-d H:i:s');
        $name = auth()->user()->nama;
        $rencanaplg = DB::select('SELECT * FROM rencana_plg WHERE kode_kunjungan = ?
        ', [$kj]);
        $triase = DB::select('SELECT * FROM ts_triase
           WHERE no_rm = ? AND kode_kunjungan = ? AND STATUS IN (1,2) ', [$request->norm, $request->kj]);
        $hasil = DB::select('SELECT 
         a.tgl_kunjungan,
         a.hasil_ekg,
         a.surat_penolakan,
         a.informasi_tindakan,
         a.transfer_pasien
         FROM erm_cppt_perawat a
         WHERE a.kode_kunjungan = ?', [$kj]);
        $assesper = DB::select('SELECT * FROM erm_cppt_perawat
          WHERE no_rm = ? AND kode_kunjungan = ? AND status IN (1,2)', [$request->norm, $request->kj]);
        $assesbid = DB::select('SELECT * FROM erm_cppt_kebidanan WHERE no_rm = ? AND kode_kunjungan = ? AND status IN (1,2)', [$request->norm, $kj]);
        $assesbidbay = DB::select('SELECT * FROM erm_cppt_kebidanan_bayi WHERE no_rm = ? AND kode_kunjungan = ? AND status IN (1,2)', [$request->norm, $kj]);

        $assesdok = DB::select('SELECT * FROM erm_cppt_dokter
        WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        $riwayatorderrad = DB::select('SELECT
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
        $riwayatorderlab = DB::select('SELECT
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
        $ttv = DB::select('SELECT tekanan_darah, frekuensi_nafas, keadaan_umum, kesadaran, frekuensi_nadi, suhu, berat_badan, umur FROM erm_cppt_perawat WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        $riwayatrekonobat = DB::select('SELECT * FROM rekonsiliasi_obat
        WHERE kode_kunjungan = ?', [$kj]);
        $tindakan = DB::select('SELECT * FROM erm_tindakan_kedokteran WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        $tindakan1 = DB::select('SELECT * FROM erm_tindakan_keperawatan WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);

        return view(
            'perawat.resumecpptperawat',
            [
                'title' => 'ERM PERAWAT',
                'name' => $name,
                'assesdok' => $assesdok,
                'assesper' => $assesper,
                'triase' => $triase,
                'ttv' => $ttv,
                'tindakan' => $tindakan,
                'tindakan1' => $tindakan1,
                'hasil' => $hasil,
                'rencanaplg' => $rencanaplg,
                'riwayatorderrad' => $riwayatorderrad,
                'riwayatobat' => $riwayatobat,
                'riwayatrekonobat' => $riwayatrekonobat,
                'riwayatorderlab' => $riwayatorderlab,
                'unit' => $unit,
                'kj' => $kj,

                'assesbid' => $assesbid,
                'assesbidbay' => $assesbidbay,

            ]
        );
    }
    public function penandaangambar(Request $request)
    {

        return view(
            'perawat.penandaangambar',
            []
        );
    }
    public function rencanaplg(Request $request)
    {
        $norm = $request->norm;
        $kj = $request->kj;

        $rencanaplg = DB::select('SELECT * FROM rencana_plg WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        // $unit = DB::select('SELECT kode_unit,nama_unit FROM mt_unit WHERE kode_unit = ?', [$rencanaplg[0]->poli_tuju]);
        // dd($unit);
        $poli = DB::select('SELECT kode_unit,nama_unit FROM mt_unit WHERE kelas_unit = 1');
        return view(
            'perawat.rencanaplg',
            [
                'rencanaplg' => $rencanaplg,
                'norm' => $norm,
                'kj' => $kj,
                'poli' => $poli
                // 'unit' => $unit


            ]
        );
    }
    public function upload(Request $request)
    {
        $norm = $request->norm;
        $kj = $request->kj;
        // $pasien = DB::select('SELECT a.no_rm, a.kode_kunjungan,
        // fc_NAMA_PARAMEDIS(a.no_rm) AS nama_dokter,
        // b.nama_px,
        // b.alamat,
        // fc_umur(a.no_rm) AS umur,
        // c.diag_00
        // FROM ts_kunjungan a
        // INNER JOIN mt_pasien b ON b.no_rm = a.no_rm
        // INNER JOIN di_pasien_diagnosa_frunit c ON c.kode_kunjungan = a.kode_kunjungan
        // WHERE a.no_rm = ? AND a.kode_kunjungan = ?', [$norm, $kj]);

        $hasil = DB::select('SELECT 
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
                'hasil' => $hasil,
                'norm' => $norm,
                'kj' => $kj

            ]
        );
    }
    public function sri(Request $request)
    {
        $norm = $request->norm;
        $kj = $request->kj;

        $data = DB::select('SELECT 
        fc_NAMA_PARAMEDIS1(kode_paramedis) as nama_dokter FROM erm_cppt_dokter
        WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        $kelas = DB::select('SELECT kelas FROM ts_kunjungan WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
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
        $poli = DB::select('SELECT * FROM mt_unit WHERE  kode_unit LIKE "%20%" AND kode_unit <> "3020"');


        return view(
            'perawat.sri',
            [
                'data' => $data,
                'poli' => $poli,
                'spri' => $spri,
                'kelas' => $kelas

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
        $unit = auth()->user()->unit;

        // $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','$unit','$tgl')");
        // $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','1002','$tgl')");
 $pasienigd = DB::select('SELECT DISTINCT
        e.diagnosa_kerja AS DIAGX
        ,a.no_rm
        ,IFNULL(d.nama_perawat,"") AS nama_perawat
        ,IFNULL(d.nama_perawat1,"") AS nama_perawat1
        ,IFNULL(e.nama_paramedis,"") AS nama_paramedis
        ,fc_nama_px(a.no_rm) AS nama_px
        ,a.tgl_masuk
        ,fc_NAMA_PARAMEDIS1(a.kode_paramedis) nama_dpjp
        ,a.kode_penjamin
        ,a.kode_kunjungan
        ,a.kelas
        ,a.kelas AS KELAS_UNIT
        ,a.counter
        ,b.jenis_kelamin

        FROM ts_kunjungan a
        INNER JOIN mt_pasien b ON b.no_rm = a.no_rm
        LEFT OUTER JOIN di_pasien_diagnosa_frunit c ON c.kode_kunjungan = a.kode_kunjungan 
        LEFT OUTER JOIN erm_cppt_perawat d ON d.kode_kunjungan = a.kode_kunjungan
        LEFT OUTER JOIN	erm_cppt_dokter e ON e.kode_kunjungan = a.kode_kunjungan
        where Date(a.tgl_masuk) = ?
        AND a.status_kunjungan NOT IN (8,11)
        and d.status NOT IN (2,3)
        and a.kode_unit = ?
        
        
        UNION
        SELECT DISTINCT
        e.diagnosa_kerja AS DIAGX
        ,a.no_rm
        ,IFNULL(d.nama_perawat,"") AS nama_perawat
        ,IFNULL(d.nama_perawat1,"") AS nama_perawat1

        ,IFNULL(e.nama_paramedis,"") AS nama_paramedis
        ,fc_nama_px(a.no_rm) AS nama_px
        ,a.tgl_masuk
        ,fc_NAMA_PARAMEDIS1(a.kode_paramedis) nama_dpjp
        ,a.kode_penjamin
        ,a.kode_kunjungan
        ,a.kelas
        ,a.kelas AS KELAS_UNIT
        ,a.counter
        ,b.jenis_kelamin

        FROM ts_kunjungan a
        INNER JOIN mt_pasien b ON b.no_rm = a.no_rm
        LEFT OUTER JOIN di_pasien_diagnosa_frunit c ON c.kode_kunjungan = a.kode_kunjungan 
        LEFT OUTER JOIN erm_cppt_perawat d ON d.kode_kunjungan = a.kode_kunjungan
        LEFT OUTER JOIN	erm_cppt_dokter e ON e.kode_kunjungan = a.kode_kunjungan
        where Date(a.tgl_masuk) = ?
        and a.status_kunjungan NOT IN (8,11)
        and a.kode_unit = ?', [$tgl, $unit,$tgl, $unit]);
        // $pasienigd = DB::select('SELECT DISTINCT
        // e.diagnosa_kerja AS DIAGX
        // ,a.no_rm
        // ,IFNULL(d.nama_perawat,"") AS nama_perawat
        // ,IFNULL(d.nama_perawat1,"") AS nama_perawat1
        // ,IFNULL(e.nama_paramedis,"") AS nama_paramedis
        // ,fc_nama_px(a.no_rm) AS nama_px
        // ,a.tgl_masuk
        // ,fc_NAMA_PARAMEDIS1(a.kode_paramedis) nama_dpjp
        // ,a.kode_penjamin
        // ,a.kode_kunjungan
        // ,a.kelas
        // ,a.kelas AS KELAS_UNIT
        // ,a.counter
        // ,b.jenis_kelamin

        // FROM ts_kunjungan a
        // INNER JOIN mt_pasien b ON b.no_rm = a.no_rm
        // LEFT OUTER JOIN di_pasien_diagnosa_frunit c ON c.kode_kunjungan = a.kode_kunjungan 
        // LEFT OUTER JOIN erm_cppt_perawat d ON d.kode_kunjungan = a.kode_kunjungan
        // LEFT OUTER JOIN	erm_cppt_dokter e ON e.kode_kunjungan = a.kode_kunjungan
        // where Date(a.tgl_masuk) = ?
        // AND a.status_kunjungan NOT IN (8,11)
        // and d.status NOT IN (2,3)
        // and a.kode_unit = ?', [$tgl, $unit]);

        // if ($pasienigd == null) {

        // $pasienigd = DB::select('SELECT DISTINCT
        // e.diagnosa_kerja AS DIAGX
        // ,a.no_rm
        // ,IFNULL(d.nama_perawat,"") AS nama_perawat
        // ,IFNULL(d.nama_perawat1,"") AS nama_perawat1

        // ,IFNULL(e.nama_paramedis,"") AS nama_paramedis
        // ,fc_nama_px(a.no_rm) AS nama_px
        // ,a.tgl_masuk
        // ,fc_NAMA_PARAMEDIS1(a.kode_paramedis) nama_dpjp
        // ,a.kode_penjamin
        // ,a.kode_kunjungan
        // ,a.kelas
        // ,a.kelas AS KELAS_UNIT
        // ,a.counter
        // ,b.jenis_kelamin

        // FROM ts_kunjungan a
        // INNER JOIN mt_pasien b ON b.no_rm = a.no_rm
        // LEFT OUTER JOIN di_pasien_diagnosa_frunit c ON c.kode_kunjungan = a.kode_kunjungan 
        // LEFT OUTER JOIN erm_cppt_perawat d ON d.kode_kunjungan = a.kode_kunjungan
        // LEFT OUTER JOIN	erm_cppt_dokter e ON e.kode_kunjungan = a.kode_kunjungan
        // where Date(a.tgl_masuk) = ?
        // and a.status_kunjungan NOT IN (8,11)
        // and a.kode_unit = ?', [$tgl, $unit]);
        // }

        return view(
            'perawat.tablepasienigdperawat',
            [
                'title' => 'ERM PERAWAT',
                'pasienigd' => $pasienigd,

            ]
        );
    }
    public function cariruangan(Request $request)
    {
        //     $unit = auth()->user()->unit;
        $kodeunit = $request->kodeunit;
        $kelas = $request->kelas;

        $ruangan = DB::select('SELECT
           a.nama_kamar,
        a.id_ruangan,
        a.id_ruangan,
        a.id_kelas,
        a.no_bed
           FROM
           mt_ruangan a
           WHERE a.kode_unit = ?
           AND a.id_kelas = ?
           AND a.status_incharge = "0"
           AND  a.status = "1"', [$kodeunit, $kelas]);
        $namaunit = DB::select('SELECT
           nama_unit,
           prefix_unit 
            FROM mt_unit WHERE kode_unit = ? AND kode_unit <> "3020"', [$kodeunit]);



        return view(
            'perawat.detailruangan',
            [
                'title' => 'ERM DOKTER',
                'ruangan' => $ruangan,
                'namaunit' => $namaunit


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
    public function simpansri(Request $request)
    {
        $prefix = $request->prefix;
        $diag = $request->diagnosa;
        $kj = $request->kj;
        $norm = $request->norm;
        $kamar = $request->kamar;
        $nobed = $request->nobed;
        $kelas = $request->kelas;


        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;
        $namadokter = auth()->user()->nama;


        $unit = auth()->user()->unit;
        if ($unit == 1002) {
            $unit = 'UGD';
        } else {
            $unit = 'UGK';
        }




        $q = DB::select('SELECT id,kode_rujukan,RIGHT(kode_rujukan,4) AS kd_max  FROM tx_rujukan_intern
             WHERE DATE(tgl_rujukan) = CURDATE()
             ORDER BY id DESC
             LIMIT 1');
        $kd = "";
        if (count($q) > 0) {
            foreach ($q as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        $kode = 'RI' . date('ymd') . '/' . $unit . '/' . $prefix . '/' . date('y') . $kd;

        $spri = tx_rujukan_intern::create([
            'tgl_rujukan' => $now,
            'kode_rujukan' => $kode,
            'kode_unit_asal' => $unit,
            'kode_unit_tujuan' => $prefix,
            'no_rm' => $norm,
            'kode_kunjungan' => $kj,
            'ruangan' => $kamar,
            'bed' => $nobed,
            'status_rujukan' => 0,
            'kelas' => $kelas,
            'diagnosa' => $diag,
            'penyebab' => $request->kecelakaan,
            'dokter' => $request->dpjp

        ]);
        dd($spri);




        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }

    public function simpanrencanaplg(Request $request)
    {
        $a = $request->all();
        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $name = auth()->user()->nama;
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

            'peralatan_medis1' => $request->peralatan1,
            'peralatan_medis2' => $request->peralatan2,
            'peralatan_medis3' => $request->peralatan3,
            'peralatan_medis4' => $request->peralatan4,

            'alat_bantu' => $request->alatbantu,
            'alat_bantu1' => $request->alatbantu1,
            'alat_bantu2' => $request->alatbantu2,

            'pendidikan_kesehatan' => $request->pendidikan,
            'pendidikan_kesehatan1' => $request->pendidikan1,
            'pendidikan_kesehatan2' => $request->pendidikan2,
            'pendidikan_kesehatan3' => $request->pendidikan3,
            'pendidikan_kesehatan4' => $request->pendidikan4,
            'pendidikan_kesehatan5' => $request->pendidikan5,
            'pendidikan_kesehatan6' => $request->pendidikan6,
            'pendidikan_kesehatan7' => $request->pendidikan7,
            'pendidikan_kesehatan8' => $request->pendidikan8,

            'diberikan' => $request->diberikan,
            'diberikan1' => $request->diberikan1,
            'diberikan2' => $request->diberikan2,
            'diberikan3' => $request->diberikan3,
            'diberikan4' => $request->diberikan4,
            'diberikan5' => $request->diberikan5,
            'diberikan6' => $request->diberikan6,

            'tgl_kontrol' => $request->tglpoli,
            'poli_tuju' => $request->poli,
            'instruksi' => $request->planning,
            'status' => '1',
            'nama_perawat' => $name



        ]);




        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function updaterencanaplg(Request $request)
    {
        $a = $request->all();
        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $name = auth()->user()->nama;
        $kp = auth()->user()->kode_paramedis;
        $kj = $request->kj;
        $norm = $request->norm;
        $update = DB::select('UPDATE rencana_plg SET  tgl_input1 = ?,usia_lanjut = ?,hambatan = ?,pelayanan_medis = ?,tergantung = ?,transportasi = ?,pendamping = ?,diet_khusus = ?,peralatan_medis1 = ?,peralatan_medis2 = ?,peralatan_medis3 = ?, peralatan_medis4 = ?,alat_bantu = ?,alat_bantu1 = ?,alat_bantu2 = ?, pendidikan_kesehatan = ?,pendidikan_kesehatan1 = ?,pendidikan_kesehatan2 = ?,pendidikan_kesehatan3 = ?,pendidikan_kesehatan4 = ?,pendidikan_kesehatan5 = ?,pendidikan_kesehatan6 = ?,pendidikan_kesehatan7 = ?,pendidikan_kesehatan8 = ?,diberikan = ?,diberikan1 = ?,diberikan2 = ?,diberikan3 = ?,diberikan4 = ?,diberikan5 = ?,diberikan6 = ?,instruksi = ?,status = ?,nama_perawat1 = ?
        WHERE no_rm = ? AND kode_kunjungan = ?', [$now, $request->usialanjut, $request->hambatan, $request->medis, $request->harian, $request->kendaraan, $request->pendamping, $request->diet, $request->peralatan1, $request->peralatan2, $request->peralatan3, $request->peralatan4, $request->alatbantu, $request->alatbantu1, $request->alatbantu2, $request->pendidikan, $request->pendidikan1, $request->pendidikan2, $request->pendidikan3, $request->pendidikan4, $request->pendidikan5, $request->pendidikan6, $request->pendidikan7, $request->pendidikan8, $request->diberikan, $request->diberikan1, $request->diberikan2, $request->diberikan3, $request->diberikan4, $request->diberikan5, $request->diberikan6, $name, $norm, $kj]);





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
        $name = auth()->user()->nama;

        $norm = $request->norm;
        $kj = $request->kj;
        try {

            $assesmen = erm_cppt_perawat::create([
                'sumber_data' =>  $request->sumberdata,
                'sumber_data_1' =>  $request->sumberdata1,

                'asal_masuk' =>  $request->asalmasuk,
                'cara_masuk' =>  $request->caramasuk,
                'keluhan_utama' =>  $request->subyek,
                'tgl_input' => $now,
                'tgl_kunjungan' => $request->tglmasuk,
                'tekanan_darah' => $request->tekanandarah,
                'frekuensi_nadi' => $request->frekuensinadi,
                'frekuensi_nafas' => $request->frekuensinafas,
                'suhu' => $request->suhutubuh,
                'berat_badan' => $request->beratbadan,
                'umur' => $request->usia,
                'keadaan_umum' => $request->keadaanumum,
                'kesadaran' => $request->kesadaran,
                'GCS' => $request->gcs,
                'SPO2' => $request->spo2,
                'kode_unit' => '1002',
                'no_rm' => $request->norm,
                'kode_kunjungan' => $request->kj,
                'kode_paramedis' => $kp,
                'subyektif' => $request->subyek,
                'pupil' =>  $request->pupil,
                'pupil_1' =>  $request->pupil1,
                'pupil_2' =>  $request->pupil2,
                'pupil_3' =>  $request->pupil3,
                'pupil_4' =>  $request->pupil4,
                'pupil_5' =>  $request->pupil5,
                'tekanan_intrakranial' =>  $request->intra,
                'tekanan_intrakranial_1' =>  $request->intra1,
                'tekanan_intrakranial_2' =>  $request->intra2,
                'tekanan_intrakranial_3' =>  $request->intra3,
                'tekanan_intrakranial_4' =>  $request->intra4,
                'tekanan_intrakranial_5' =>  $request->intra5,
                'tekanan_intrakranial_6' =>  $request->intra6,

                'neuro_sensorik' =>  $request->neuro,
                'neuro_sensorik_1' =>  $request->neuro1,
                'neuro_sensorik_2' =>  $request->neuro2,
                'neuro_sensorik_3' =>  $request->neuro3,

                'muskolo_skletal' =>  $request->muskolo,
                'muskolo_skletal_1' =>  $request->muskolo1,
                'muskolo_skletal_2' =>  $request->muskolo2,
                'muskolo_skletal_3' =>  $request->muskolo3,
                'muskolo_skletal_4' =>  $request->muskolo4,

                'integumen' =>  $request->intergumen,
                'integumen_1' =>  $request->intergumen1,
                'integumen_2' =>  $request->intergumen2,
                'integumen_3' =>  $request->intergumen3,
                'integumen_4' =>  $request->intergumen4,
                'integumen_5' =>  $request->intergumen5,

                'turgor_kulit' =>  $request->turgor,
                'turgor_kulit_1' =>  $request->turgor1,
                'turgor_kulit_2' =>  $request->turgor2,

                'edema' =>  $request->edema,
                'edema_1' =>  $request->edema1,
                'edema_2' =>  $request->edema2,
                'edema_3' =>  $request->edema3,
                'edema_4' =>  $request->edema4,

                'mukosa_mulut' =>  $request->mukosa,
                'mukosa_mulut_1' =>  $request->mukosa1,
                'mukosa_mulut_2' =>  $request->mukosa2,

                'pendarahan' =>  $request->pendarahan,
                'jumlah_pendarahan' =>  $request->jumlahdarah,
                'introksikasi' =>  $request->introksikasi,
                'introksikasi_1' =>  $request->introksikasi1,
                'introksikasi_2' =>  $request->introksikasi2,
                'introksikasi_3' =>  $request->introksikasi3,
                'introksikasi_4' =>  $request->introksikasi4,
                'introksikasi_5' =>  $request->introksikasi5,

                'bab_frekuensi' => $request->BABF,
                'bab_konsistensi' => $request->BABK,
                'bab_warna' => $request->BABKW,
                'bak_frekuensi' => $request->BAKF,
                'bak_konsistensi' => $request->BAKK,
                'bak_warna' => $request->BAKKW,
                'kecemasan' => $request->kecemasan,
                'koping_mekanisme' => $request->koping,
                'pekerjaan' => $request->pekerjaan,
                'agama' => $request->agama,
                'keluhan_nyeri' => $request->nyeri,
                'lamanya_nyeri' => $request->lamanyeri,
                'rasa_nyeri' => $request->rasanyeri,
                'rasa_nyeri_1' => $request->rasanyeri1,
                'rasa_nyeri_2' => $request->rasanyeri2,
                'rasa_nyeri_3' => $request->rasanyeri3,
                'rasa_nyeri_4' => $request->rasanyeri4,
                'rasa_nyeri_5' => $request->rasanyeri5,
                'rasa_nyeri_6' => $request->rasanyeri6,
                'rasa_nyeri_7' => $request->rasanyeri7,
                'rasa_nyeri_8' => $request->rasanyeri8,
                'rasa_nyeri_9' => $request->rasanyeri9,

                'sering_nyeri' => $request->seringnyeri,
                'serring_nyeri' => $request->serringnyeri,
                'berkurang_nyeri' => $request->berkurangnyeri,
                'penandaan_gambar' => $request->gambar1,
                'scale_nyeri' => $request->scalenyeri,
                'scale_nyeri1' => $request->scalenyeri1,
                'penilaian_resiko_dewasa' => $request->jatuhdewasa,
                'riwayat_jatuh' => $request->rjvalue,
                'diagnosis_sekunder' => $request->dsvalue,
                'alat_bantu' => $request->abvalue,
                'terpasang_infuse' => $request->tivalue,
                'gaya_berjalan' => $request->gbvalue,
                'status_mental' => $request->smvalue,
                'total_resiko_dewasa' => $request->totalrisiko,
                'penilaian_resiko_anak' => $request->jatuhanak,
                'umur_resiko' => $request->uvalue,
                'jk_resiko' => $request->jkvalue,
                'diagnosa_resiko' => $request->dvalue,
                'kognitif_resiko' => $request->gkvalue,
                'respon_resiko' => $request->rvalue,
                'obat_resiko' => $request->ovalue,
                'total_resiko_anak' => $request->totalrisiko1,
                'skrining_nutrisi_dws' => $request->nutrisidws,
                'penurunan_bb' => $request->pnvalue,
                'asupan' => $request->nmvalue,
                'total_nutrisi_dws' => $request->totalnutrisi,
                'skrining_nutrisi_anak' => $request->nutrisiank,
                'tampak_kurus' => $request->kuvalue,
                'bb_sebulan' => $request->tbbvalue,
                'kondisi' => $request->ssvalue,
                'total_nutrisi_ank' => $request->totalnutrisi1,
                'diagnosa_perawat' => $request->diagnosakeperawatan,
                'diagnosa_perawat1' => $request->diagnosakeperawatan1,
                'diagnosa_perawat2' => $request->diagnosakeperawatan2,
                'diagnosa_perawat3' => $request->diagnosakeperawatan3,
                'diagnosa_perawat4' => $request->diagnosakeperawatan4,
                'diagnosa_perawat5' => $request->diagnosakeperawatan5,
                'diagnosa_perawat6' => $request->diagnosakeperawatan6,
                'diagnosa_perawat7' => $request->diagnosakeperawatan7,
                'diagnosa_perawat8' => $request->diagnosakeperawatan8,
                'diagnosa_perawat9' => $request->diagnosakeperawatan9,
                'diagnosa_perawat10' => $request->diagnosakeperawatan10,
                'diagnosa_perawat11' => $request->diagnosakeperawatan11,
                'diagnosa_perawat12' => $request->diagnosakeperawatan12,
                'rencana_asuhan' => $request->rencanaasuhan,
                'rencana_asuhan1' => $request->rencanaasuhan1,
                'rencana_asuhan2' => $request->rencanaasuhan2,
                'rencana_asuhan3' => $request->rencanaasuhan3,
                'rencana_asuhan4' => $request->rencanaasuhan4,
                'kolaborasi_1' => $request->kolaborasi1,
                'kolaborasi_2' => $request->kolaborasi2,
                'kolaborasi_3' => $request->kolaborasi3,
                'kolaborasi_4' => $request->kolaborasi4,
                'kolaborasi_5' => $request->kolaborasi5,
                'kolaborasi_6' => $request->kolaborasi6,
                'kolaborasi_7' => $request->kolaborasi7,
                'kolaborasi_8' => $request->kolaborasi8,
                'kolaborasi_9' => $request->kolaborasi9,
                'kolaborasi_10' => $request->kolaborasi10,
                'kolaborasi_11' => $request->kolaborasi11,
                'kolaborasi_12' => $request->kolaborasi12,
                'kolaborasi_13' => $request->kolaborasi13,
                'kolaborasi_14' => $request->kolaborasi14,
                'kolaborasi_15' => $request->kolaborasi15,
                'status' => '1',
                'nama_perawat' => $name
            ]);
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => 'error input asses'
            ];
            echo json_encode($back);
            die;
        }
        try {
            $rekon = json_decode($_POST['data'], true);
            foreach ($rekon as $nama) {
                $index = $nama['name'];
                $value = $nama['value'];
                $dataSet[$index] = $value;
                if ($index == 'tindakankeperawatan') {
                    $arrayindex[] = $dataSet;
                }
            }
            // $id_detail = $this->createLayanandetail();
            foreach ($arrayindex as $arr) {
                $savedetail = [
                    // 'kode_detail_obat' => $id_detail,
                    'no_rm' => $norm,
                    'kode_kunjungan' => $kj,
                    'kode_unit' => '1002',
                    'tindakan_keperawatan' => $arr['tindakankeperawatan'],
                    'waktu_tindakan' => $arr['waktu'],
                    'tgl_input' => $now,
                    'status' => 1

                ];
                $tindakanperawat = erm_tindakan_keperawatan::create($savedetail);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => 'error input tindakan'
            ];
            echo json_encode($back);
            die;
        }


        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function simpanassesbidanbayi(Request $request)
    {
        $a = $request->all();
        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;
        $name = auth()->user()->nama;

        $norm = $request->norm;
        $kj = $request->kj;
        $assesmen = erm_cppt_kebidanan_bayi::create([
            'sumber_data' =>  $request->sumberdata,
            'asal_masuk' =>  $request->asalmasuk,
            'cara_masuk' =>  $request->caramasuk,
            'subyek' =>  $request->subyek,
            'tgl_input' => $now,
            'tgl_kunjungan' => $request->tglmasuk,
            'tekanan_darah' => $request->tekanandarah,
            'frekuensi_nadi' => $request->frekuensinadi,
            'frekuensi_nafas' => $request->frekuensinafas,
            'suhu' => $request->suhutubuh,
            'berat_badan' => $request->beratbadan,
            'umur' => $request->usia,
            'keadaan_umum' => $request->keadaanumum,
            'kesadaran' => $request->kesadaran,
            'GCS' => $request->gcs,
            'SPO2' => $request->spo2,
            'tb' =>  $request->tb,
            'kode_unit' => '1023',
            'no_rm' => $request->norm,
            'kode_kunjungan' => $request->kj,
            'kode_paramedis' => $kp,
            'subyektif' => $request->subyek,
            'anake' => $request->anake,
            'rpenyakit' => $request->riwayatpenyakitibu,
            'rpenyakit1' => $request->riwayatpenyakitibu1,
            'rpenyakit2' => $request->riwayatpenyakitibu2,
            'rpenyakit3' => $request->riwayatpenyakitibu3,
            'rpenyakit4' => $request->riwayatpenyakitibu4,
            'rpenyakit5' => $request->riwayatpenyakitibu5,
            'rpenyakit6' => $request->riwayatpenyakitibu6,
            'rpenyakit7' => $request->riwayatpenyakitibu7,
            'rpengoibu' => $request->rpengoibu,
            'rintra' => $request->rintra,
            'rintratgl' => $request->rintratgl,
            'rintrawkt' => $request->rintrawkt,
            'rintrakon' => $request->rintrakon,
            'apgarscore' => $request->apgarscore,
            'carrapersalinan' => $request->carrapersalinan,
            'carrapersalinan1' => $request->carrapersalinan1,
            'carrapersalinan2' => $request->carrapersalinan2,
            'carrapersalinan3' => $request->carrapersalinan3,
            'carrapersalinan4' => $request->carrapersalinan4,
            'carrapersalinanltk' => $request->carrapersalinanltk,
            'talipusat' => $request->talipusat,
            'talipusat1' => $request->talipusat1,
            'talipusat2' => $request->talipusat2,
            'mayor' => $request->mayor,
            'mayor1' => $request->mayor1,
            'mayor2' => $request->mayor2,
            'mayor3' => $request->mayor3,
            'mayor4' => $request->mayor4,
            'minor' => $request->minor,
            'minor1' => $request->minor1,
            'minor2' => $request->minor2,
            'minor3' => $request->minor3,
            'minor4' => $request->minor4,
            'minor5' => $request->minor5,
            'minor6' => $request->minor6,
            'minor7' => $request->minor7,
            'nutrisi' => $request->nutrisi,
            'nutrisi1' => $request->nutrisi1,
            'frekuensi' => $request->frekuensi,
            'frekuensi1' => $request->frekuensi1,
            'bak' => $request->bak,
            'kelbak' => $request->kelbak,
            'kelbak1' => $request->kelbak1,
            'BAB' => $request->BAB,
            'kelbab' => $request->kelbab,
            'kelbab1' => $request->kelbab1,
            'reaksii' => $request->reaksii,
            'reaksi' => $request->reaksi,
            'kecemasan' => $request->kecemasan,
            'koping' => $request->koping,
            'pekerjaan' => $request->pekerjaan,
            'agama' => $request->agama,
            'cryingvalue' => $request->cryingvalue,
            'requiresvalue' => $request->requiresvalue,
            'increasedvalue' => $request->increasedvalue,
            'expressionvalue' => $request->expressionvalue,
            'sleeplessvalue' => $request->sleeplessvalue,
            'totalnyeri' => $request->totalnyeri,
            'pbvalue' => $request->pbvalue,
            'mingivalue' => $request->mingivalue,
            'sakitvalue' => $request->sakitvalue,
            'totalgizi' => $request->totalgizi,
            'diagnosakebidananbayi' => $request->diagnosakebidanan,
            'diagnosakebidanan1' => $request->diagnosakebidanan1,
            'diagnosakebidanan2' => $request->diagnosakebidanan2,
            'diagnosakebidanan3' => $request->diagnosakebidanan3,
            'diagnosakebidanan4' => $request->diagnosakebidanan4,
            'diagnosakebidanan5' => $request->diagnosakebidanan5,
            'diagnosakebidanan6' => $request->diagnosakebidanan6,
            'diagnosakebidanan7' => $request->diagnosakebidanan7,
            'diagnosakebidanan8' => $request->diagnosakebidanan8,
            'diagnosakebidanan9' => $request->diagnosakebidanan9,
            'diagnosakebidanan10' => $request->diagnosakebidanan10,
            'diagnosakebidanan11' => $request->diagnosakebidanan11,
            'diagnosakebidanan12' => $request->diagnosakebidanan12,
            'tindakan' => $request->tindakan,
            'rencanaasuhan' => $request->rencanaasuhan,
            'kolaborasi1' => $request->kolaborasi1,
            'kolaborasi2' => $request->kolaborasi2,
            'kolaborasi3' => $request->kolaborasi3,
            'kolaborasi4' => $request->kolaborasi4,
            'kolaborasi5' => $request->kolaborasi5,
            'kolaborasi6' => $request->kolaborasi6,
            'kolaborasi7' => $request->kolaborasi7,
            'kolaborasi8' => $request->kolaborasi8,
            'kolaborasi9' => $request->kolaborasi9,
            'kolaborasi10' => $request->kolaborasi10,
            'kolaborasi11' => $request->kolaborasi11,
            'kolaborasi12' => $request->kolaborasi12,
            'kolaborasi13' => $request->kolaborasi13,
            'kolaborasi14' => $request->kolaborasi14,
            'kolaborasi15' => $request->kolaborasi15,

            'status' => '1',
            'nama_bidan' => $name
        ]);

        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function simpanpemantauan(Request $request)
    {
        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;
        $name = auth()->user()->nama;

        $norm = $request->norm;
        $kj = $request->kj;
        // dd($data);
        $input = pemantauan_ttv::create([
            'waktu_jaga_dokter' => $request->wdj,
            'dokter_jaga' => $request->dj,
            'waktu_jaga_perawat' => $request->wpj,
            'perawat_jaga' => $request->pj,
            'kategori_pasien' => $request->kapa,
            'diagnosa_kerja' => $request->dk,
            'td' => $request->ttd,
            'nadi' => $request->nadi,
            'rr' => $request->rr,
            'suhu' => $request->suhu,
            'gcs' => $request->gcs,
            'pupil' => $request->pupil,
            'urine' => $request->urine,
            'spo2' => $request->spo2,

            'nyeri' => $request->nyeri,
            'keterangan' => $request->keterangan,

            'norm' => $request->norm,
            'kj' => $request->kj,
            'tgl_input' => $now,
            'user' => $user
        ]);



        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function simpanassesbidan(Request $request)
    {
        $a = $request->all();
        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;
        $name = auth()->user()->nama;

        $norm = $request->norm;
        $kj = $request->kj;
        $assesmen = erm_cppt_kebidanan::create([
            'sumber_data' =>  $request->sumberdata,
            'asal_masuk' =>  $request->asalmasuk,
            'cara_masuk' =>  $request->caramasuk,
            'subyek' =>  $request->subyek,
            'tgl_input' => $now,
            'tgl_kunjungan' => $request->tglmasuk,
            'tekanan_darah' => $request->tekanandarah,
            'frekuensi_nadi' => $request->frekuensinadi,
            'frekuensi_nafas' => $request->frekuensinafas,
            'suhu' => $request->suhutubuh,
            'berat_badan' => $request->beratbadan,
            'umur' => $request->usia,
            'keadaan_umum' => $request->keadaanumum,
            'kesadaran' => $request->kesadaran,
            'GCS' => $request->gcs,
            'SPO2' => $request->spo2,
            'tb' =>  $request->tb,
            'kode_unit' => '1023',
            'no_rm' => $request->norm,
            'kode_kunjungan' => $request->kj,
            'kode_paramedis' => $kp,
            'subyektif' => $request->subyek,
            'imunisasi' => $request->imunisasi,
            'imunisasi1' => $request->imunisasi1,
            'imunisasi2' => $request->imunisasi2,
            'imunisasi3' => $request->imunisasi3,
            'imunisasi4' => $request->imunisasi4,
            'imunisasi5' => $request->imunisasi5,
            'imunisasi6' => $request->imunisasi6,
            'imunisasi7' => $request->imunisasi7,
            'imunisasi8' => $request->imunisasi8,
            'imunisasi9' => $request->imunisasi9,
            'imunisasi10' => $request->imunisasi10,
            'imunisasi11' => $request->imunisasi11,
            'imunisasi12' => $request->imunisasi12,
            'imunisasi13' => $request->imunisasi13,
            'imunisasi14' => $request->imunisasi14,
            'imunisasi15' => $request->imunisasi15,
            'imunisasi16' => $request->imunisasi16,
            'imunisasi17' => $request->imunisasi17,
            'imunisasi18' => $request->imunisasi18,
            'kberencana' => $request->kberencana,
            'kberencana1' => $request->kberencana1,
            'kberencana2' => $request->kberencana2,
            'kberencana3' => $request->kberencana3,
            'kberencana4' => $request->kberencana4,
            'kberencana5' => $request->kberencana5,
            'komplikasikb' => $request->komplikasikb,
            'komplikasikb1' => $request->komplikasikb1,
            'komplikasikb2' => $request->komplikasikb2,
            'rpenyakit' => $request->rpenyakit,
            'rpenyakit1' => $request->rpenyakit1,
            'rpenyakit2' => $request->rpenyakit2,
            'rpenyakit3' => $request->rpenyakit3,
            'rpenyakit4' => $request->rpenyakit4,
            'rpenyakit5' => $request->rpenyakit5,
            'rpenyakit6' => $request->rpenyakit6,
            'rpenyakit7' => $request->rpenyakit7,
            'operasi' => $request->operasi,
            'operasi1' => $request->operasi1,
            'operasi2' => $request->operasi2,
            'ginekologi' => $request->ginekologi,
            'ginekologi1' => $request->ginekologi1,
            'ginekologi2' => $request->ginekologi2,
            'ginekologi3' => $request->ginekologi3,
            'ginekologi4' => $request->ginekologi4,
            'ginekologi5' => $request->ginekologi5,
            'ginekologi6' => $request->ginekologi6,
            'ginekologi7' => $request->ginekologi7,
            'ginekologi8' => $request->ginekologi8,
            'ginekologi9' => $request->ginekologi9,
            'ginekologi10' => $request->ginekologi10,
            'ginekologi11' => $request->ginekologi11,
            'rpk' => $request->rpk,
            'rpk1' => $request->rpk1,
            'rpk2' => $request->rpk2,
            'rpk3' => $request->rpk3,
            'rpk4' => $request->rpk4,
            'rpk5' => $request->rpk5,
            'rpk6' => $request->rpk6,
            'rpk7' => $request->rpk7,
            'rpk8' => $request->rpk8,
            'rpk9' => $request->rpk9,
            'terapi' => $request->terapi,
            'terapi1' => $request->terapi1,
            'terapi2' => $request->terapi2,
            'terapi3' => $request->terapi3,
            'aler' => $request->aler,
            'aler1' => $request->aler1,
            'aler2' => $request->aler2,
            'kebiasaan' => $request->kebiasaan,
            'kebiasaan1' => $request->kebiasaan1,
            'otidur' => $request->otidur,
            'otidur1' => $request->otidur1,
            'alkohol' => $request->alkohol,
            'alkohol1' => $request->alkohol1,
            'olahraga' => $request->olahraga,
            'olahraga1' => $request->olahraga1,
            'umurmenarche' => $request->umurmenarche,
            'lamanyahaid' => $request->lamanyahaid,
            'pembalut' => $request->pembalut,
            'haidterakhir' => $request->haidterakhir,
            'TP' => $request->TP,
            'Dismonore' => $request->Dismonore,
            'Dismonore1' => $request->Dismonore1,
            'Dismonore2' => $request->Dismonore2,
            'Dismonore3' => $request->Dismonore3,
            'menikah' => $request->menikah,
            'menikah1' => $request->menikah1,
            'menikah2' => $request->menikah2,
            'menikah3' => $request->menikah3,
            'menikah4' => $request->menikah4,
            'G' => $request->G,
            'P' => $request->P,
            'A' => $request->A,
            'hamud1' => $request->hamud1,
            'hamud2' => $request->hamud2,
            'hamud' => $request->hamud,
            'hatu' => $request->hatu,
            'hatu1' => $request->hatu1,
            'hatu2' => $request->hatu2,
            'anc' => $request->anc,
            'anc1' => $request->anc1,
            'imunisasii' => $request->imunisasii,
            'imunisasii1' => $request->imunisasii1,
            'imunisasii2' => $request->imunisasii2,
            'mata' => $request->mata,
            'mata1' => $request->mata1,
            'mata2' => $request->mata2,
            'mata3' => $request->mata3,
            'dadak' => $request->dadak,
            'dadak1' => $request->dadak1,
            'dadak2' => $request->dadak2,
            'dadak3' => $request->dadak3,
            'dadak4' => $request->dadak4,
            'dadak5' => $request->dadak5,
            'Ektremitas' => $request->Ektremitas,
            'Ektremitas1' => $request->Ektremitas1,
            'Ektremitas2' => $request->Ektremitas2,
            'Ektremitas3' => $request->Ektremitas3,
            'sistemnafas' => $request->sistemnafas,
            'sistemnafas1' => $request->sistemnafas1,
            'sistemnafas2' => $request->sistemnafas2,
            'sistemnafas3' => $request->sistemnafas3,
            'sistemnafas4' => $request->sistemnafas4,
            'sistemnafas5' => $request->sistemnafas5,
            'sistemnafas6' => $request->sistemnafas6,
            'sistemnafas7' => $request->sistemnafas7,
            'sistemnafas8' => $request->sistemnafas8,
            'sosup' => $request->sosup,
            'sosup1' => $request->sosup1,
            'sosup2' => $request->sosup2,
            'sosup3' => $request->sosup3,
            'sosup4' => $request->sosup4,
            'diagnosakebidanan' => $request->diagnosakebidanan,
            'rencanaasuhan' => $request->rencanaasuhan,
            'status' => '1',
            'nama_bidan' => $name,
            'kolaborasi1' => $request->kolaborasi1,
            'kolaborasi2' => $request->kolaborasi2,
            'kolaborasi3' => $request->kolaborasi3,
            'kolaborasi4' => $request->kolaborasi4,
            'kolaborasi5' => $request->kolaborasi5,
            'kolaborasi6' => $request->kolaborasi6,
            'kolaborasi7' => $request->kolaborasi7,
            'kolaborasi8' => $request->kolaborasi8,
            'kolaborasi9' => $request->kolaborasi9,
            'kolaborasi10' => $request->kolaborasi10,
            'kolaborasi11' => $request->kolaborasi11,
            'kolaborasi12' => $request->kolaborasi12,
            'kolaborasi13' => $request->kolaborasi13,
            'kolaborasi14' => $request->kolaborasi14,
            'kolaborasi15' => $request->kolaborasi15,
        ]);

        // try {
        //     $rekon = json_decode($_POST['data'], true);
        //     foreach ($rekon as $nama) {
        //         $index = $nama['name'];
        //         $value = $nama['value'];
        //         $dataSet[$index] = $value;
        //         if ($index == 'tindakankeperawatan') {
        //             $arrayindex[] = $dataSet;
        //         }
        //     }
        //     // $id_detail = $this->createLayanandetail();
        //     foreach ($arrayindex as $arr) {
        //         $savedetail = [
        //             // 'kode_detail_obat' => $id_detail,
        //             'no_rm' => $norm,
        //             'kode_kunjungan' => $kj,
        //             'kode_unit' => '1002',
        //             'tindakan_keperawatan' => $arr['tindakankeperawatan'],
        //             'waktu_tindakan' => $arr['waktu'],
        //             'tgl_input' => $now,
        //             'status' => 1

        //         ];
        //         $rekonsiliasiobat = erm_tindakan_keperawatan::create($savedetail);
        //     }
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
        $planning = $request->rencanaasuhan;

        $kj = $request->kj;
        $norm = $request->norm;
        $kesadaran = $request->kesadaran;
        $keadaanumum = $request->keadaanumum;

        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $name = auth()->user()->nama;

        $kp = auth()->user()->kode_paramedis;
        try {
            $cekcpp = DB::select('SELECT status FROM erm_cppt_perawat WHERE no_rm = ? AND kode_kunjungan = ? AND status = 1', [$norm, $kj]);
            //ada
            if ($cekcpp[0]->status == 1) {
                $cekcpp = DB::select('UPDATE erm_cppt_perawat SET status = "3"  WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
                $assesmen = erm_cppt_perawat::create([
                    'sumber_data' =>  $request->sumberdata,
                    'sumber_data_1' =>  $request->sumberdata1,

                    'asal_masuk' =>  $request->asalmasuk,
                    'cara_masuk' =>  $request->caramasuk,
                    'keluhan_utama' =>  $request->subyek,
                    'tgl_input' => $now,
                    'tgl_kunjungan' => $request->tglmasuk,
                    'tekanan_darah' => $request->tekanandarah,
                    'frekuensi_nadi' => $request->frekuensinadi,
                    'frekuensi_nafas' => $request->frekuensinafas,
                    'suhu' => $request->suhutubuh,
                    'berat_badan' => $request->beratbadan,
                    'umur' => $request->usia,
                    'keadaan_umum' => $request->keadaanumum,
                    'kesadaran' => $request->kesadaran,
                    'GCS' => $request->gcs,
                    'SPO2' => $request->spo2,
                    'kode_unit' => '1002',
                    'no_rm' => $request->norm,
                    'kode_kunjungan' => $request->kj,
                    'kode_paramedis' => $kp,
                    'subyektif' => $request->subyek,
                    'pupil' =>  $request->pupil,
                    'pupil_1' =>  $request->pupil1,
                    'pupil_2' =>  $request->pupil2,
                    'pupil_3' =>  $request->pupil3,
                    'pupil_4' =>  $request->pupil4,
                    'pupil_5' =>  $request->pupil5,
                    'tekanan_intrakranial' =>  $request->intra,
                    'tekanan_intrakranial_1' =>  $request->intra1,
                    'tekanan_intrakranial_2' =>  $request->intra2,
                    'tekanan_intrakranial_3' =>  $request->intra3,
                    'tekanan_intrakranial_4' =>  $request->intra4,
                    'tekanan_intrakranial_5' =>  $request->intra5,
                    'tekanan_intrakranial_6' =>  $request->intra6,

                    'neuro_sensorik' =>  $request->neuro,
                    'neuro_sensorik_1' =>  $request->neuro1,
                    'neuro_sensorik_2' =>  $request->neuro2,
                    'neuro_sensorik_3' =>  $request->neuro3,

                    'muskolo_skletal' =>  $request->muskolo,
                    'muskolo_skletal_1' =>  $request->muskolo1,
                    'muskolo_skletal_2' =>  $request->muskolo2,
                    'muskolo_skletal_3' =>  $request->muskolo3,
                    'muskolo_skletal_4' =>  $request->muskolo4,

                    'integumen' =>  $request->intergumen,
                    'integumen_1' =>  $request->intergumen1,
                    'integumen_2' =>  $request->intergumen2,
                    'integumen_3' =>  $request->intergumen3,
                    'integumen_4' =>  $request->intergumen4,
                    'integumen_5' =>  $request->intergumen5,

                    'turgor_kulit' =>  $request->turgor,
                    'turgor_kulit_1' =>  $request->turgor1,
                    'turgor_kulit_2' =>  $request->turgor2,

                    'edema' =>  $request->edema,
                    'edema_1' =>  $request->edema1,
                    'edema_2' =>  $request->edema2,
                    'edema_3' =>  $request->edema3,
                    'edema_4' =>  $request->edema4,

                    'mukosa_mulut' =>  $request->mukosa,
                    'mukosa_mulut_1' =>  $request->mukosa1,
                    'mukosa_mulut_2' =>  $request->mukosa2,

                    'pendarahan' =>  $request->pendarahan,
                    'jumlah_pendarahan' =>  $request->jumlahdarah,
                    'introksikasi' =>  $request->introksikasi,
                    'introksikasi_1' =>  $request->introksikasi1,
                    'introksikasi_2' =>  $request->introksikasi2,
                    'introksikasi_3' =>  $request->introksikasi3,
                    'introksikasi_4' =>  $request->introksikasi4,
                    'introksikasi_5' =>  $request->introksikasi5,

                    'bab_frekuensi' => $request->BABF,
                    'bab_konsistensi' => $request->BABK,
                    'bab_warna' => $request->BABKW,
                    'bak_frekuensi' => $request->BAKF,
                    'bak_konsistensi' => $request->BAKK,
                    'bak_warna' => $request->BAKKW,
                    'kecemasan' => $request->kecemasan,
                    'koping_mekanisme' => $request->koping,
                    'pekerjaan' => $request->pekerjaan,
                    'agama' => $request->agama,
                    'keluhan_nyeri' => $request->nyeri,
                    'lamanya_nyeri' => $request->lamanyeri,
                    'rasa_nyeri' => $request->rasanyeri,
                    'rasa_nyeri_1' => $request->rasanyeri1,
                    'rasa_nyeri_2' => $request->rasanyeri2,
                    'rasa_nyeri_3' => $request->rasanyeri3,
                    'rasa_nyeri_4' => $request->rasanyeri4,
                    'rasa_nyeri_5' => $request->rasanyeri5,
                    'rasa_nyeri_6' => $request->rasanyeri6,
                    'rasa_nyeri_7' => $request->rasanyeri7,
                    'rasa_nyeri_8' => $request->rasanyeri8,
                    'rasa_nyeri_9' => $request->rasanyeri9,

                    'sering_nyeri' => $request->seringnyeri,
                    'serring_nyeri' => $request->serringnyeri,
                    'berkurang_nyeri' => $request->berkurangnyeri,
                    'penandaan_gambar' => $request->gambar1,
                    'scale_nyeri' => $request->scalenyeri,
                    'scale_nyeri1' => $request->scalenyeri1,
                    'penilaian_resiko_dewasa' => $request->jatuhdewasa,
                    'riwayat_jatuh' => $request->rjvalue,
                    'diagnosis_sekunder' => $request->dsvalue,
                    'alat_bantu' => $request->abvalue,
                    'terpasang_infuse' => $request->tivalue,
                    'gaya_berjalan' => $request->gbvalue,
                    'status_mental' => $request->smvalue,
                    'total_resiko_dewasa' => $request->totalrisiko,
                    'penilaian_resiko_anak' => $request->jatuhanak,
                    'umur_resiko' => $request->uvalue,
                    'jk_resiko' => $request->jkvalue,
                    'diagnosa_resiko' => $request->dvalue,
                    'kognitif_resiko' => $request->gkvalue,
                    'respon_resiko' => $request->rvalue,
                    'obat_resiko' => $request->ovalue,
                    'total_resiko_anak' => $request->totalrisiko1,
                    'skrining_nutrisi_dws' => $request->nutrisidws,
                    'penurunan_bb' => $request->pnvalue,
                    'asupan' => $request->nmvalue,
                    'total_nutrisi_dws' => $request->totalnutrisi,
                    'skrining_nutrisi_anak' => $request->nutrisiank,
                    'tampak_kurus' => $request->kuvalue,
                    'bb_sebulan' => $request->tbbvalue,
                    'kondisi' => $request->ssvalue,
                    'total_nutrisi_ank' => $request->totalnutrisi1,
                    'diagnosa_perawat' => $request->diagnosakeperawatan,
                    'diagnosa_perawat1' => $request->diagnosakeperawatan1,
                    'diagnosa_perawat2' => $request->diagnosakeperawatan2,
                    'diagnosa_perawat3' => $request->diagnosakeperawatan3,
                    'diagnosa_perawat4' => $request->diagnosakeperawatan4,
                    'diagnosa_perawat5' => $request->diagnosakeperawatan5,
                    'diagnosa_perawat6' => $request->diagnosakeperawatan6,
                    'diagnosa_perawat7' => $request->diagnosakeperawatan7,
                    'diagnosa_perawat8' => $request->diagnosakeperawatan8,
                    'diagnosa_perawat9' => $request->diagnosakeperawatan9,
                    'diagnosa_perawat10' => $request->diagnosakeperawatan10,
                    'diagnosa_perawat11' => $request->diagnosakeperawatan11,
                    'diagnosa_perawat12' => $request->diagnosakeperawatan12,
                    'rencana_asuhan' => $request->rencanaasuhan,
                    'rencana_asuhan1' => $request->rencanaasuhan1,
                    'rencana_asuhan2' => $request->rencanaasuhan2,
                    'rencana_asuhan3' => $request->rencanaasuhan3,
                    'rencana_asuhan4' => $request->rencanaasuhan4,
                    'kolaborasi_1' => $request->kolaborasi1,
                    'kolaborasi_2' => $request->kolaborasi2,
                    'kolaborasi_3' => $request->kolaborasi3,
                    'kolaborasi_4' => $request->kolaborasi4,
                    'kolaborasi_5' => $request->kolaborasi5,
                    'kolaborasi_6' => $request->kolaborasi6,
                    'kolaborasi_7' => $request->kolaborasi7,
                    'kolaborasi_8' => $request->kolaborasi8,
                    'kolaborasi_9' => $request->kolaborasi9,
                    'kolaborasi_10' => $request->kolaborasi10,
                    'kolaborasi_11' => $request->kolaborasi11,
                    'kolaborasi_12' => $request->kolaborasi12,
                    'kolaborasi_13' => $request->kolaborasi13,
                    'kolaborasi_14' => $request->kolaborasi14,
                    'kolaborasi_15' => $request->kolaborasi15,
                    'status' => '1',
                    'nama_perawat1' => $name
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
        try {
            $rekon = json_decode($_POST['data'], true);
            foreach ($rekon as $nama) {
                $index = $nama['name'];
                $value = $nama['value'];
                $dataSet[$index] = $value;
                if ($index == 'tindakankeperawatan') {
                    $arrayindex[] = $dataSet;
                }
            }
            // $id_detail = $this->createLayanandetail();
            foreach ($arrayindex as $arr) {
                $savedetail = [
                    // 'kode_detail_obat' => $id_detail,
                    'no_rm' => $norm,
                    'kode_kunjungan' => $kj,
                    'kode_unit' => '1002',
                    'tindakan_keperawatan' => $arr['tindakankeperawatan'],
                    'waktu_tindakan' => $arr['waktu'],
                    'tgl_input' => $now,
                    'status' => 2

                ];
                $tindakanperawat = erm_tindakan_keperawatan::create($savedetail);
            }
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
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }

    public function updateassesbidan(Request $request)
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
        $name = auth()->user()->nama;

        $kp = auth()->user()->kode_paramedis;

        try {
            $cekcpp = DB::select('SELECT status FROM erm_cppt_kebidanan WHERE no_rm = ? AND kode_kunjungan = ? AND status = 1', [$norm, $kj]);
            //ada
            //ada
            if ($cekcpp[0]->status == 1) {
                $cekcpp = DB::select('UPDATE erm_cppt_kebidanan SET status = "3"  WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
                $assesmen = erm_cppt_kebidanan::create([
                    'sumber_data' =>  $request->sumberdata,
                    'asal_masuk' =>  $request->asalmasuk,
                    'cara_masuk' =>  $request->caramasuk,
                    'subyek' =>  $request->subyek,
                    'tgl_input' => $now,
                    'tgl_kunjungan' => $request->tglmasuk,
                    'tekanan_darah' => $request->tekanandarah,
                    'frekuensi_nadi' => $request->frekuensinadi,
                    'frekuensi_nafas' => $request->frekuensinafas,
                    'suhu' => $request->suhutubuh,
                    'berat_badan' => $request->beratbadan,
                    'umur' => $request->usia,
                    'keadaan_umum' => $request->keadaanumum,
                    'kesadaran' => $request->kesadaran,
                    'GCS' => $request->gcs,
                    'SPO2' => $request->spo2,
                    'tb' =>  $request->tb,
                    'kode_unit' => '1023',
                    'no_rm' => $request->norm,
                    'kode_kunjungan' => $request->kj,
                    'kode_paramedis' => $kp,
                    'subyektif' => $request->subyek,
                    'imunisasi' => $request->imunisasi,
                    'imunisasi1' => $request->imunisasi1,
                    'imunisasi2' => $request->imunisasi2,
                    'imunisasi3' => $request->imunisasi3,
                    'imunisasi4' => $request->imunisasi4,
                    'imunisasi5' => $request->imunisasi5,
                    'imunisasi6' => $request->imunisasi6,
                    'imunisasi7' => $request->imunisasi7,
                    'imunisasi8' => $request->imunisasi8,
                    'imunisasi9' => $request->imunisasi9,
                    'imunisasi10' => $request->imunisasi10,
                    'imunisasi11' => $request->imunisasi11,
                    'imunisasi12' => $request->imunisasi12,
                    'imunisasi13' => $request->imunisasi13,
                    'imunisasi14' => $request->imunisasi14,
                    'imunisasi15' => $request->imunisasi15,
                    'imunisasi16' => $request->imunisasi16,
                    'imunisasi17' => $request->imunisasi17,
                    'imunisasi18' => $request->imunisasi18,
                    'kberencana' => $request->kberencana,
                    'kberencana1' => $request->kberencana1,
                    'kberencana2' => $request->kberencana2,
                    'kberencana3' => $request->kberencana3,
                    'kberencana4' => $request->kberencana4,
                    'kberencana5' => $request->kberencana5,
                    'komplikasikb' => $request->komplikasikb,
                    'komplikasikb1' => $request->komplikasikb1,
                    'komplikasikb2' => $request->komplikasikb2,
                    'rpenyakit' => $request->rpenyakit,
                    'rpenyakit1' => $request->rpenyakit1,
                    'rpenyakit2' => $request->rpenyakit2,
                    'rpenyakit3' => $request->rpenyakit3,
                    'rpenyakit4' => $request->rpenyakit4,
                    'rpenyakit5' => $request->rpenyakit5,
                    'rpenyakit6' => $request->rpenyakit6,
                    'rpenyakit7' => $request->rpenyakit7,
                    'operasi' => $request->operasi,
                    'operasi1' => $request->operasi1,
                    'operasi2' => $request->operasi2,
                    'ginekologi' => $request->ginekologi,
                    'ginekologi1' => $request->ginekologi1,
                    'ginekologi2' => $request->ginekologi2,
                    'ginekologi3' => $request->ginekologi3,
                    'ginekologi4' => $request->ginekologi4,
                    'ginekologi5' => $request->ginekologi5,
                    'ginekologi6' => $request->ginekologi6,
                    'ginekologi7' => $request->ginekologi7,
                    'ginekologi8' => $request->ginekologi8,
                    'ginekologi9' => $request->ginekologi9,
                    'ginekologi10' => $request->ginekologi10,
                    'ginekologi11' => $request->ginekologi11,
                    'rpk' => $request->rpk,
                    'rpk1' => $request->rpk1,
                    'rpk2' => $request->rpk2,
                    'rpk3' => $request->rpk3,
                    'rpk4' => $request->rpk4,
                    'rpk5' => $request->rpk5,
                    'rpk6' => $request->rpk6,
                    'rpk7' => $request->rpk7,
                    'rpk8' => $request->rpk8,
                    'rpk9' => $request->rpk9,
                    'terapi' => $request->terapi,
                    'terapi1' => $request->terapi1,
                    'terapi2' => $request->terapi2,
                    'terapi3' => $request->terapi3,
                    'aler' => $request->aler,
                    'aler1' => $request->aler1,
                    'aler2' => $request->aler2,
                    'kebiasaan' => $request->kebiasaan,
                    'kebiasaan1' => $request->kebiasaan1,
                    'otidur' => $request->otidur,
                    'otidur1' => $request->otidur1,
                    'alkohol' => $request->alkohol,
                    'alkohol1' => $request->alkohol1,
                    'olahraga' => $request->olahraga,
                    'olahraga1' => $request->olahraga1,
                    'umurmenarche' => $request->umurmenarche,
                    'lamanyahaid' => $request->lamanyahaid,
                    'pembalut' => $request->pembalut,
                    'haidterakhir' => $request->haidterakhir,
                    'TP' => $request->TP,
                    'Dismonore' => $request->Dismonore,
                    'Dismonore1' => $request->Dismonore1,
                    'Dismonore2' => $request->Dismonore2,
                    'Dismonore3' => $request->Dismonore3,
                    'menikah' => $request->menikah,
                    'menikah1' => $request->menikah1,
                    'menikah2' => $request->menikah2,
                    'menikah3' => $request->menikah3,
                    'menikah4' => $request->menikah4,
                    'G' => $request->G,
                    'P' => $request->P,
                    'A' => $request->A,
                    'hamud1' => $request->hamud1,
                    'hamud2' => $request->hamud2,
                    'hamud' => $request->hamud,
                    'hatu' => $request->hatu,
                    'hatu1' => $request->hatu1,
                    'hatu2' => $request->hatu2,
                    'anc' => $request->anc,
                    'anc1' => $request->anc1,
                    'imunisasii' => $request->imunisasii,
                    'imunisasii1' => $request->imunisasii1,
                    'imunisasii2' => $request->imunisasii2,
                    'mata' => $request->mata,
                    'mata1' => $request->mata1,
                    'mata2' => $request->mata2,
                    'mata3' => $request->mata3,
                    'dadak' => $request->dadak,
                    'dadak1' => $request->dadak1,
                    'dadak2' => $request->dadak2,
                    'dadak3' => $request->dadak3,
                    'dadak4' => $request->dadak4,
                    'dadak5' => $request->dadak5,
                    'Ektremitas' => $request->Ektremitas,
                    'Ektremitas1' => $request->Ektremitas1,
                    'Ektremitas2' => $request->Ektremitas2,
                    'Ektremitas3' => $request->Ektremitas3,
                    'sistemnafas' => $request->sistemnafas,
                    'sistemnafas1' => $request->sistemnafas1,
                    'sistemnafas2' => $request->sistemnafas2,
                    'sistemnafas3' => $request->sistemnafas3,
                    'sistemnafas4' => $request->sistemnafas4,
                    'sistemnafas5' => $request->sistemnafas5,
                    'sistemnafas6' => $request->sistemnafas6,
                    'sistemnafas7' => $request->sistemnafas7,
                    'sistemnafas8' => $request->sistemnafas8,
                    'sosup' => $request->sosup,
                    'sosup1' => $request->sosup1,
                    'sosup2' => $request->sosup2,
                    'sosup3' => $request->sosup3,
                    'sosup4' => $request->sosup4,
                    'diagnosakebidanan' => $request->diagnosakebidanan,
                    'rencanaasuhan' => $request->rencanaasuhan,
                    'status' => '1',
                    'nama_bidan' => $name,
                    'kolaborasi1' => $request->kolaborasi1,
                    'kolaborasi2' => $request->kolaborasi2,
                    'kolaborasi3' => $request->kolaborasi3,
                    'kolaborasi4' => $request->kolaborasi4,
                    'kolaborasi5' => $request->kolaborasi5,
                    'kolaborasi6' => $request->kolaborasi6,
                    'kolaborasi7' => $request->kolaborasi7,
                    'kolaborasi8' => $request->kolaborasi8,
                    'kolaborasi9' => $request->kolaborasi9,
                    'kolaborasi10' => $request->kolaborasi10,
                    'kolaborasi11' => $request->kolaborasi11,
                    'kolaborasi12' => $request->kolaborasi12,
                    'kolaborasi13' => $request->kolaborasi13,
                    'kolaborasi14' => $request->kolaborasi14,
                    'kolaborasi15' => $request->kolaborasi15,
                ]);
            }
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
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }

    public function updateassesbidanbayi(Request $request)
    {
        $a = $request->all();

        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;
        $name = auth()->user()->nama;

        $norm = $request->norm;
        $kj = $request->kj;

        try {
            $cekcpp = DB::select('SELECT status FROM erm_cppt_kebidanan_bayi WHERE no_rm = ? AND kode_kunjungan = ? AND status = 1', [$norm, $kj]);
            //ada
            if ($cekcpp[0]->status == 1) {
                $cekcpp = DB::select('UPDATE erm_cppt_kebidanan_bayi SET status = "3"  WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
                $assesmen = erm_cppt_kebidanan_bayi::create([
                    'sumber_data' =>  $request->sumberdata,
                    'asal_masuk' =>  $request->asalmasuk,
                    'cara_masuk' =>  $request->caramasuk,
                    'subyek' =>  $request->subyek,
                    'tgl_input' => $now,
                    'tgl_kunjungan' => $request->tglmasuk,
                    'tekanan_darah' => $request->tekanandarah,
                    'frekuensi_nadi' => $request->frekuensinadi,
                    'frekuensi_nafas' => $request->frekuensinafas,
                    'suhu' => $request->suhutubuh,
                    'berat_badan' => $request->beratbadan,
                    'umur' => $request->usia,
                    'keadaan_umum' => $request->keadaanumum,
                    'kesadaran' => $request->kesadaran,
                    'GCS' => $request->gcs,
                    'SPO2' => $request->spo2,
                    'tb' =>  $request->tb,
                    'kode_unit' => '1023',
                    'no_rm' => $request->norm,
                    'kode_kunjungan' => $request->kj,
                    'kode_paramedis' => $kp,
                    'subyektif' => $request->subyek,
                    'anake' => $request->anake,
                    'rpenyakit' => $request->riwayatpenyakitibu,
                    'rpenyakit1' => $request->riwayatpenyakitibu1,
                    'rpenyakit2' => $request->riwayatpenyakitibu2,
                    'rpenyakit3' => $request->riwayatpenyakitibu3,
                    'rpenyakit4' => $request->riwayatpenyakitibu4,
                    'rpenyakit5' => $request->riwayatpenyakitibu5,
                    'rpenyakit6' => $request->riwayatpenyakitibu6,
                    'rpenyakit7' => $request->riwayatpenyakitibu7,
                    'rpengoibu' => $request->rpengoibu,
                    'rintra' => $request->rintra,
                    'rintratgl' => $request->rintratgl,
                    'rintrawkt' => $request->rintrawkt,
                    'rintrakon' => $request->rintrakon,
                    'apgarscore' => $request->apgarscore,
                    'carrapersalinan' => $request->carrapersalinan,
                    'carrapersalinan1' => $request->carrapersalinan1,
                    'carrapersalinan2' => $request->carrapersalinan2,
                    'carrapersalinan3' => $request->carrapersalinan3,
                    'carrapersalinan4' => $request->carrapersalinan4,
                    'carrapersalinanltk' => $request->carrapersalinanltk,
                    'talipusat' => $request->talipusat,
                    'talipusat1' => $request->talipusat1,
                    'talipusat2' => $request->talipusat2,
                    'mayor' => $request->mayor,
                    'mayor1' => $request->mayor1,
                    'mayor2' => $request->mayor2,
                    'mayor3' => $request->mayor3,
                    'mayor4' => $request->mayor4,
                    'minor' => $request->minor,
                    'minor1' => $request->minor1,
                    'minor2' => $request->minor2,
                    'minor3' => $request->minor3,
                    'minor4' => $request->minor4,
                    'minor5' => $request->minor5,
                    'minor6' => $request->minor6,
                    'minor7' => $request->minor7,
                    'nutrisi' => $request->nutrisi,
                    'nutrisi1' => $request->nutrisi1,
                    'frekuensi' => $request->frekuensi,
                    'frekuensi1' => $request->frekuensi1,
                    'bak' => $request->bak,
                    'kelbak' => $request->kelbak,
                    'kelbak1' => $request->kelbak1,
                    'BAB' => $request->BAB,
                    'kelbab' => $request->kelbab,
                    'kelbab1' => $request->kelbab1,
                    'reaksii' => $request->reaksii,
                    'reaksi' => $request->reaksi,
                    'kecemasan' => $request->kecemasan,
                    'koping' => $request->koping,
                    'pekerjaan' => $request->pekerjaan,
                    'agama' => $request->agama,
                    'cryingvalue' => $request->cryingvalue,
                    'requiresvalue' => $request->requiresvalue,
                    'increasedvalue' => $request->increasedvalue,
                    'expressionvalue' => $request->expressionvalue,
                    'sleeplessvalue' => $request->sleeplessvalue,
                    'totalnyeri' => $request->totalnyeri,
                    'pbvalue' => $request->pbvalue,
                    'mingivalue' => $request->mingivalue,
                    'sakitvalue' => $request->sakitvalue,
                    'totalgizi' => $request->totalgizi,
                    'diagnosakebidananbayi' => $request->diagnosakebidanan,
                    'diagnosakebidanan1' => $request->diagnosakebidanan1,
                    'diagnosakebidanan2' => $request->diagnosakebidanan2,
                    'diagnosakebidanan3' => $request->diagnosakebidanan3,
                    'diagnosakebidanan4' => $request->diagnosakebidanan4,
                    'diagnosakebidanan5' => $request->diagnosakebidanan5,
                    'diagnosakebidanan6' => $request->diagnosakebidanan6,
                    'diagnosakebidanan7' => $request->diagnosakebidanan7,
                    'diagnosakebidanan8' => $request->diagnosakebidanan8,
                    'diagnosakebidanan9' => $request->diagnosakebidanan9,
                    'diagnosakebidanan10' => $request->diagnosakebidanan10,
                    'diagnosakebidanan11' => $request->diagnosakebidanan11,
                    'diagnosakebidanan12' => $request->diagnosakebidanan12,
                    'tindakan' => $request->tindakan,
                    'rencanaasuhan' => $request->rencanaasuhan,
                    'kolaborasi1' => $request->kolaborasi1,
                    'kolaborasi2' => $request->kolaborasi2,
                    'kolaborasi3' => $request->kolaborasi3,
                    'kolaborasi4' => $request->kolaborasi4,
                    'kolaborasi5' => $request->kolaborasi5,
                    'kolaborasi6' => $request->kolaborasi6,
                    'kolaborasi7' => $request->kolaborasi7,
                    'kolaborasi8' => $request->kolaborasi8,
                    'kolaborasi9' => $request->kolaborasi9,
                    'kolaborasi10' => $request->kolaborasi10,
                    'kolaborasi11' => $request->kolaborasi11,
                    'kolaborasi12' => $request->kolaborasi12,
                    'kolaborasi13' => $request->kolaborasi13,
                    'kolaborasi14' => $request->kolaborasi14,
                    'kolaborasi15' => $request->kolaborasi15,

                    'status' => '1',
                    'nama_bidan' => $name
                ]);
            }
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
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function validasiassesbidan(Request $request)
    {



        $kj = $request->kj;
        $norm = $request->norm;


        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;

        try {
            $update = DB::select('UPDATE erm_cppt_kebidanan SET status = 2 WHERE no_rm = ? AND kode_kunjungan = ? AND STATUS = 1 ', [$norm, $kj]);
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        try {
            $delete = DB::select('DELETE FROM erm_cppt_kebidanan WHERE no_rm = ? AND kode_kunjungan = ? AND STATUS = "3" ', [$norm, $kj]);
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
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }



    public function validasiassemenperawat(Request $request)
    {



        $kj = $request->kj;
        $norm = $request->norm;


        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;
        try {
            $update = DB::select('UPDATE erm_cppt_perawat SET status = 2
        WHERE no_rm = ? AND kode_kunjungan = ? AND STATUS = 1 ', [$norm, $kj]);
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        try {
            $delete = DB::select('DELETE FROM erm_cppt_perawat WHERE no_rm = ? AND kode_kunjungan = ? AND STATUS = "3" ', [$norm, $kj]);
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
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function validasiassesbidanbayi(Request $request)
    {



        $kj = $request->kj;
        $norm = $request->norm;


        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;

        try {
            $update = DB::select('UPDATE erm_cppt_kebidanan_bayi SET status = 2 WHERE no_rm = ? AND kode_kunjungan = ? AND STATUS = 1 ', [$norm, $kj]);
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        try {
            $delete = DB::select('DELETE FROM erm_cppt_kebidanan_bayi WHERE no_rm = ? AND kode_kunjungan = ? AND STATUS = "3" ', [$norm, $kj]);
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
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }


    public function returtinper(Request $request)
    {
        $kj = $request->kj;

        $wtt = $request->wtt;
        $tindakan = $request->tindakan;
        $idtindakan = $request->idtindakan;
        $retin = DB::select('UPDATE erm_tindakan_keperawatan SET status = "3"  WHERE id = ? ', [$idtindakan]);





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


        // $update = DB::table(' UPDATE erm_cppt_perawat
        // SET hasil_ekg = ? WHERE kode_kunjungan = ?', [$filepath,$kj]);
        $update = DB::table('erm_cppt_perawat')
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


        // $update = DB::table(' UPDATE erm_cppt_perawat
        // SET hasil_ekg = ? WHERE kode_kunjungan = ?', [$filepath,$kj]);
        $update = DB::table('erm_cppt_perawat')
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


        // $update = DB::table(' UPDATE erm_cppt_perawat
        // SET hasil_ekg = ? WHERE kode_kunjungan = ?', [$filepath,$kj]);
        $update = DB::table('erm_cppt_perawat')
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


        // $update = DB::table(' UPDATE erm_cppt_perawat
        // SET hasil_ekg = ? WHERE kode_kunjungan = ?', [$filepath,$kj]);
        $update = DB::table('erm_cppt_perawat')
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
        return 'UGK' . date('ymd') . $kd;
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
