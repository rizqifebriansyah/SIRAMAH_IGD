<?php

namespace App\Http\Controllers;

use App\Models\mt_kode_header;
use App\Models\ts_layanan_header;
use App\Models\ts_layanan_detail;
use App\Models\assesmenawal_dokter;
use App\Models\mt_acc_number;
use App\Models\order_table;
use App\Models\tb_tampungan_label;
use App\Models\ts_retur_header;
use App\Models\ts_retur_detail;
use App\Models\tb_pemakaian_radiologi;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use App\Models\ts_layanan_detail_tambahan;
use Mike42\Escpos\EscposImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\ImagickEscposImage;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;


use Mike42\Escpos\Printer;
use Fpdf;
use Carbon\Carbon;
use simitsdk\phpjasperxml\PHPJasperXML;
use Illuminate\Support\Facades\Http;
use mysqli;

class RadiologiController extends Controller
{

    // public $baseUrl = "http://sim.rsudwaled.id/simrs/api/penunjang/";
    // public $baseRis = "http://sim.rsudwaled.id/simrs/api/ris/";

    public $baseUrl = "http://192.168.2.30/simrs/api/penunjang/";
    public $baseRis = "http://192.168.2.30/simrs/api/ris/";

    public function radiologi()
    {




        $unit = auth()->user()->unit;
        $user = auth()->user()->username;
        $now = Carbon::now()->format('Y-m-d');
        $tgl_masuk_x = date('Y-m-d', strtotime('-2 days', strtotime($now)));
        $menu = 'radiologi';

        $pasienkunjunganrs = DB::select(
            'SELECT * FROM (
                     SELECT
                           a.tgl_masuk,
                           a.kelas,
                           b.kelas_unit,
                           a.kode_kunjungan,
                           fc_nama_unit1(a.kode_unit) AS nama_unit,
                           a.no_rm,
                           fc_nama_px(a.no_rm) AS nama_px,
                           fc_NAMA_PARAMEDIS1(a.kode_paramedis) AS nama_dokter,
                           a.kode_paramedis,
                           a.kode_penjamin,
                           fc_NAMA_PENJAMIN2(a.kode_penjamin) AS nama_penjamin,
                           fc_alamat4(a.no_rm) AS alamat,
                           d.diag_00 AS DIAGX,
                           c.jenis_kelamin,
                           a.counter,
                           a.status_kunjungan,
                           0 AS orderan
                            FROM ts_kunjungan a
                            INNER JOIN mt_unit b ON b.kode_unit = a.kode_unit
                            INNER JOIN mt_pasien c ON c.no_rm = a.no_rm
                            INNER JOIN di_pasien_diagnosa_frunit d ON d.kode_kunjungan = a.kode_kunjungan
                            WHERE DATE(a.tgl_masuk) BETWEEN ? AND ?
                            AND a.status_kunjungan NOT IN (8,11,2)
                            
                            UNION 
                            
                            SELECT
                           a.tgl_masuk,
                           a.kelas,
                           b.kelas_unit,
                           a.kode_kunjungan,
                           fc_nama_unit1(a.kode_unit) AS nama_unit,
                           a.no_rm,
                           fc_nama_px(a.no_rm) AS nama_px,
                           fc_NAMA_PARAMEDIS1(a.kode_paramedis) AS nama_dokter,
                           a.kode_paramedis,
                           a.kode_penjamin,
                           fc_NAMA_PENJAMIN2(a.kode_penjamin) AS nama_penjamin,
                           fc_alamat4(a.no_rm) AS alamat,
                           d.diag_00 AS DIAGX,
                           c.jenis_kelamin,
                           a.counter,
                           a.status_kunjungan,
                           1 AS orderan
                            FROM ts_kunjungan a
                            INNER JOIN mt_unit b ON b.kode_unit = a.kode_unit
                            INNER JOIN mt_pasien c ON c.no_rm = a.no_rm
                            INNER JOIN di_pasien_diagnosa_frunit d ON d.kode_kunjungan = a.kode_kunjungan
                            INNER JOIN ts_layanan_header_order e ON e.kode_kunjungan = a.kode_kunjungan AND e.kode_unit = ?
                            WHERE DATE(a.tgl_masuk) BETWEEN ? AND ?
                            AND a.status_kunjungan NOT IN (8,11)
                            AND e.status_order = 1
                            
                            UNION 
                            
                            SELECT
                           a.tgl_masuk,
                           a.kelas,
                           b.kelas_unit,
                           a.kode_kunjungan,
                           fc_nama_unit1(a.kode_unit) AS nama_unit,
                           a.no_rm,
                           fc_nama_px(a.no_rm) AS nama_px,
                           fc_NAMA_PARAMEDIS1(a.kode_paramedis) AS nama_dokter,
                           a.kode_paramedis,
                           a.kode_penjamin,
                           fc_NAMA_PENJAMIN2(a.kode_penjamin) AS nama_penjamin,
                           fc_alamat4(a.no_rm) AS alamat,
                           IFNULL(diag_00,"-") AS DIAGX,
                           c.jenis_kelamin,
                           a.counter,
                           a.status_kunjungan,
                           0 AS orderan
                            FROM ts_kunjungan a
                            INNER JOIN mt_unit b ON b.kode_unit = a.kode_unit
                            INNER JOIN mt_pasien c ON c.no_rm = a.no_rm
                            LEFT OUTER JOIN di_pasien_diagnosa_frunit d ON d.kode_kunjungan = a.kode_kunjungan
                            WHERE a.status_kunjungan = 1
                            
                            )q
                            ORDER BY orderan DESC ,kelas_unit,nama_px',
            [$now, $now, $unit, $now, $now]
        );


        return view('radiologi.radiologi', [
            'title' => 'SIRAMAH | RADIOLOGI',
            'unit' => $unit,
            'menu' => $menu,

            'pasienkunjunganrs' => $pasienkunjunganrs,
            'user' => $user



        ]);
        # code...

    }
    public function riwayatorder()
    {
        $unit = auth()->user()->unit;
        $user = auth()->user()->username;
        $now = Carbon::now()->format('Y-m-d');
        $tgl_masuk_x = date('Y-m-d', strtotime('-2 days', strtotime($now)));

        $pasienorder = DB::select("CALL SP_RIWAYAT_LAYANAN_RADIOLOGI('$unit','$now','$now','')");
        $menu = 'riwayatorder';

        return view('radiologi.riwayatorder', [
            'title' => 'SIRAMAH | RADIOLOGI',

            'pasienorder' => $pasienorder,
            'menu' => $menu,

            'user' => $user



        ]);
    }
    public function riwayatbridging()
    {
        $unit = auth()->user()->unit;
        $user = auth()->user()->username;
        $now = Carbon::now()->format('Y-m-d');
        $tgl_masuk_x = date('Y-m-d', strtotime('-2 days', strtotime($now)));

        $pasienbridging = DB::connection('mysql3')->select('SELECT * FROM order_table a
        WHERE DATE(a.ADMITDATE) = ?', [$now]);

        $menu = 'riwayatbridging';

        return view('radiologi.riwayatbridging', [
            'title' => 'SIRAMAH | RADIOLOGI',

            'pasienbridging' => $pasienbridging,
            'menu' => $menu,

            'user' => $user



        ]);
    }
    public function detailpasienradiologi(Request $request)

    {
        $all = $request->all();
        $unit = auth()->user()->unit;
        $diagx = $request->diagx;
        $now = Carbon::now()->format('H:i:s');
        $idsimrs = auth()->user()->id_simrs;

        $paket = DB::select('SELECT DISTINCT
        id_rutin AS id_paket
        ,nama
        ,kode_unit
        FROM mt_tarif_rutin_unit
        WHERE kode_unit = ?', [$unit]);
        $pasienkunjungan = DB::select('SELECT DISTINCT 
        a.no_rm,
        fc_nama_px(a.no_rm) AS nama_px,
        fc_nama_unit1(a.kode_unit) AS nama_unit,
        a.kode_unit,
        b.KELAS_UNIT,
        a.kelas,
        a.kode_kunjungan,
        a.kode_penjamin,
        fc_alamat4(a.no_rm) AS alamat,
        fc_NAMA_PARAMEDIS1(a.kode_paramedis) AS nama_paramedis,
        a.kode_paramedis AS Dokter,
        fc_umur(a.no_rm) AS Umur,
        fc_NAMA_PENJAMIN2(a.kode_penjamin) AS nama_penjamin
        FROM ts_kunjungan a
        INNER JOIN mt_unit b ON b.kode_unit = a.kode_unit
        LEFT OUTER JOIN di_pasien_diagnosa_frunit d ON d.no_rm = a.no_rm
        WHERE a.kode_kunjungan = ?
       
        AND a.status_kunjungan = 1', [$request->kode_kunjungan]);


        $pasienkunjunganorder = DB::select("CALL SP_PANGGIL_PASIEN_ORDER_PENUNJANG('$request->kode_kunjungan','$request->norm','$request->nama','','','$unit')");

        $pasienpoli = DB::select('SELECT * FROM ts_layanan_header_order WHERE id = ?;', [$request->idheader]);
        $layanan = DB::select('SELECT b.kode_tarif_detail AS kode, a.nama_tarif AS Tindakan, b.tarif_penunjang AS tarif 
            FROM mt_tarif_header a 
            INNER JOIN mt_tarif_detail b ON b.kode_tarif_header = a.kode_tarif_header 
            WHERE a.USER_INPUT_ID ="1" 
            AND  a.kelompok_tarif_id IN (19) AND b.tarif_penunjang <> 0 
            AND b.act = 1 
            AND b.kelas_tarif = ?', [$request->kelas]);
        return view('radiologi.billingview', [
            'title' => 'SIRAMAH | RADIOLOGI',
            'layanan' => $layanan,
            'index' => $request->index,
            'diagx' => $diagx,
            'pasienkunjungan' => $pasienkunjungan,
            'unit' => $unit,
            'now' => $now,
            'idsimrs' => $idsimrs,

            'pasienpoli' => $pasienpoli,
            'paket' => $paket,

            'pasienkunjunganorder' => $pasienkunjunganorder



        ]);
    }
    public function detailbarang(Request $request)
    {
        $kj = $request->kodekunjungan;

        $layanan = DB::select('SELECT
        a.kode_layanan_header,
        a.kode_kunjungan,
        c.no_rm
        FROM
        ts_layanan_header a
        INNER JOIN ts_layanan_detail b ON b.row_id_header = a.id
        INNER JOIN ts_kunjungan c ON c.kode_kunjungan = a.kode_kunjungan
        WHERE a.kode_unit = ?
        AND a.kode_kunjungan = ?', ['3003', $request->kodekunjungan]);
        $barang = DB::select('SELECT
        a.no_rm,
        a.id,
        fc_nama_px(a.no_rm)AS nama_pasien,
        a.Nama_barang,
        a.kode_layanan_header,
        a.kode_kunjungan,
        a.qty,
        a.qty_retur
        FROM tb_pemakaian_radiologi a
        WHERE a.kode_layanan_header = ?', [$request->kodeheader]);
        return view('radiologi.detailpasienorder', [
            'barang' => $barang,
            'layanan' => $layanan

        ]);
    }
    public function caritanggalorderrad(Request $request)
    {
        $unit = auth()->user()->unit;

        $pasienorder = DB::select("CALL SP_RIWAYAT_LAYANAN_RADIOLOGI('$unit','$request->tgl_entry','$request->tgl_entry1','$request->no_rm')");


        return view('radiologi.ordertable', [
            'title' => 'SIRAMAH | RADIOLOGI',
            'pasienorder' => $pasienorder,
            'unit' => $unit,
        ]);
    }
    public function caririwayatbridging(Request $request)
    {
        $unit = auth()->user()->unit;
        $tglbridging = Carbon::parse($request->tanggal_bridging)->format('Ymd');
        $pasienbridging = DB::connection('mysql3')->select('SELECT * from order_table a WHERE DATE(a.ADMITDATE) = ?', [$tglbridging]);

        // dd($pasienbridging);
        return view('radiologi.tablebridging', [
            'title' => 'SIRAMAH | RADIOLOGI',

            'pasienbridging' => $pasienbridging,

        ]);
    }
    public function editriwayatbridging(Request $request)
    {
        $unit = auth()->user()->unit;
        $tglbridging = Carbon::parse($request->tanggal_bridging)->format('Ymd');
        $pb = DB::connection('mysql3')->select('SELECT * from order_table a WHERE ACCESSIONNUMBER = ?', [$request->acc]);

        return view('radiologi.editbridgingview', [
            'title' => 'SIRAMAH | RADIOLOGI',

            'pb' => $pb,

        ]);
    }

    public function simpanorderradiologi(Request $request)
    {
        $kodepenjamin = $request->kodepenjamin;
        $kelasunit = $request->kelasunit;
        $norm  = $request->norm;
        $kodekunjungan  = $request->kodekunjungan;

        $namaunit = $request->namaunit;
        $kelas = $request->kelas;
        $kodeunit = $request->kodeunit;
        $ukirim = $kodeunit . ' | ' . $namaunit . ' | ' . $kelas;
        $pasien = DB::select('SELECT * FROM mt_pasien WHERE no_rm =?', [$norm]);
        $tgllahir = Carbon::parse($pasien[0]->tgl_lahir)->format('Ymd');

        $dokkirim = DB::select('SELECT nama_paramedis FROM mt_paramedis WHERE kode_paramedis =?', [$request->dokter]);
        $dorad = $request->dorad;
        if ($dorad == 'DOK036') {
            $dorad = 'dr. Nunik Royyani, Sp.Rad';
        } else {
            $dorad = 'dr. Muhammad Amar Latief, Sp.Rad';
        }
        // dd($dorad);
        $sp = 'OPN';
        $dt = Carbon::now()->timezone('Asia/Jakarta');
        $date = $dt->toDateString();
        $tglmasuk = Carbon::now()->timezone('Asia/Jakarta')->format('YmdHis');

        // dd();
        $time = $dt->toTimeString();
        $now = $date . ' ' . $time;

        //input orderan radiologi
        $data = json_decode($_POST['data'], true);
        foreach ($data as $nama) {
            $index = $nama['name'];
            $value = $nama['value'];
            $dataSet[$index] = $value;
            if ($index == 'cyto') {
                $arrayindex[] = $dataSet;
            }
        }
        // dd($dataSet);
        $count = count($arrayindex);
        $sum = 0;
        foreach ($arrayindex as $arr) {

            if ($arr['cyto'] == 1) {
                $cyt = $arr['tarif'] * (10 / 100);
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
        $kode_header = DB::select("CALL GET_NOMOR_LAYANAN_HEADER('3003')");
        $kode_header  = $kode_header[0]->no_trx_layanan;

        if ($kode_header == null) {
            $kode_header = $this->createOrderHeader('RAD');
            $kode_header = mt_kode_header::create([
                'kode_header' => $kode_header,
                'tgl_header' => date('Y-m-d')
            ]);
        } else {
            $kode_header = DB::select("CALL GET_NOMOR_LAYANAN_HEADER('3003')");
            $kode_header  = $kode_header[0]->no_trx_layanan;
        }
        // dd($kode_header);


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
                    'kode_unit' => 3003,
                    'kode_tipe_transaksi' => 2,
                    'kode_penjaminx' => $request->kodepenjamin,
                    'pic' => 10,
                ];
                $head = ts_layanan_header::create($data_layanan_header);
                $id_detail = $this->createLayanandetail();
                foreach ($arrayindex as $arr) {

                    if ($arr['cyto'] == 1) {
                        $cyt = $arr['tarif'] * (10 / 100);
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
                        'tagihan_pribadi' => ($arr['tarif'] * $arr['qty']) + $cyt - $disc,
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
                    'kode_unit' => 3003,
                    'kode_tipe_transaksi' => 1,
                    'kode_penjaminx' => $request->kodepenjamin,
                    'pic' => 10,
                ];
                $head = ts_layanan_header::create($data_layanan_header);
                $id_detail = $this->createLayanandetail();
                foreach ($arrayindex as $arr) {

                    if ($arr['cyto'] == 1) {
                        $cyt = $arr['tarif'] * (10 / 100);
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
                        'tagihan_pribadi' => ($arr['tarif'] * $arr['qty']) + $cyt - $disc,
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
                'kode_unit' => 3003,
                'kode_tipe_transaksi' => 2,
                'kode_penjaminx' => $request->kodepenjamin,
                'pic' => 10,
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
                    'tagihan_penjamin' => ($arr['tarif'] * $arr['qty']) + $cyt - $disc,
                    'tgl_layanan_detail_2' => $now,
                    'row_id_header' => $head['id']
                ];

                $ts_layanan_detail = ts_layanan_detail::create($savedetail);
            }
        }


        $kode_header = $ts_layanan_detail['kode_layanan_header'];

        $idhed = $ts_layanan_detail['row_id_header'];
        $jenisk = $pasien[0]->jenis_kelamin;
        if ($jenisk == 'P') {
            $jenisk = 'F';
        } else {
            $jenisk = 'M';
        }
        // $update = DB::select('UPDATE ts_layanan_header_order SET status_order = 2
        // WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $norm]);
        $iddet = DB::select('SELECT a.id FROM ts_layanan_detail a WHERE a.id_layanan_detail = ?',[$id_detail]);
        try {

            foreach ($arrayindex as $arr) {
                $accnumber = $this->createAccNumber('ACC');

                $inpacc = [
                    'kode_header' => $accnumber,
                    'tgl_header' => $now
                ];
                $accn = mt_acc_number::create($inpacc);
                $pacs = [
                    'PID' => $norm,
                    'KODE_KUNJUNGAN' => $kodekunjungan,

                    'NAME' => $pasien[0]->nama_px,
                    'ACCESSIONNUMBER' => $accnumber,
                    'NAMEALIAS' => $pasien[0]->nama_px,
                    'BIRTHDATE' => $tgllahir,
                    'SEX' => $jenisk,
                    'PATIENTCLASS' => "O",
                    'ATTENDINGDOCTORID' => $request->dorad,
                    'ATTENDINGDOCTORNAME' => $dorad,
                    'REFERRINGDOCTORID' => $request->dokter,
                    'REFERRINGDOCTORNAME' => $dokkirim[0]->nama_paramedis,
                    'AMBULATORYSTATUS' => 'N',
                    'VIPINDICATOR' => 'N',
                    'ADMITDATE' => $tglmasuk,
                    'EFFECTIVEDATE' => $tglmasuk,

                    'RELEVANTCLINICALINFO' => $request->diagnosa,
                    // 'PROCEDUREID' => $arr['kodelayanan'],
                    'PROCEDURE' => $arr['kodelayanan'],
                    'SPECIFIEDRADIOLOGISTID' => $request->dorad,
                    'SPECIFIEDRADIOLOGISTNAME' => $dorad,
                    'PROCEDURENAME' => $arr['namatindakan'],
                    'ASSIGNEDPATIENTLOCATION' => $arr['lokasi'],
                    'ENTERINGOGANIZATION' => $namaunit,
                    'BODYPART' => 'NULL',
                    'MODALITY' => $arr['modality'],
                    'PHONENUMBER' => $pasien[0]->no_hp,
                    'id_layanan_detail' => $iddet,
                    'STATUS' => 'NW'


                ];
                // dd($pacs);

                $pacsdetail = order_table::create($pacs);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => 'ada masalah di bridging'
            ];
            echo json_encode($back);
            die;
        }


        //input barang terpakai
        $barang = json_decode($_POST['barang'], true);
        foreach ($barang as $nama) {
            $index = $nama['name'];
            $value = $nama['value'];
            $dataSet[$index] = $value;
            if ($index == 'barang[]') {
                $arraybarang[] = $dataSet;
            }
        }
        foreach ($arraybarang as $b) {
            $savedetailbarang = [
                'no_rm' => $norm,
                'kode_layanan_header' => $kode_header,
                'kode_kunjungan' =>  $request->kodekunjungan,
                'qty' => $b['qtybrg[]'],
                'Nama_barang' => $b['barang[]'],
                'tanggal_input' => $now,
                'user' => 10
            ];
            $tb_pemakaian_radiologi = tb_pemakaian_radiologi::create($savedetailbarang);
        }
        $receive_items = $this->cetakpdf($kode_header, $idhed);
        $back = [
            'kode' => 200,
            'idhed' => $idhed,
            'kode_header' => $kode_header,
        ];
        echo json_encode($back);
        die;


        $back = [
            'kode' => 200,
            'message' => 'INPUT BERHASIL SEMUA'
        ];
        echo json_encode($back);
        die;
    }

    public function returorderrad(Request $request)
    {
        $dt = Carbon::now()->timezone('Asia/Jakarta');

        $date = $dt->toDateString();
        $time = $dt->toTimeString();
        $now = $date . ' ' . $time;
        $cek = $request->all();
        $total = $request->totallayanan;
        $gt = $request->gt;
        $sisatotal = $total - $gt;
        $sisaqty = $request->qty - 1;
        $total_retur = $request->gt - $sisaqty;

        $kode_header = $this->createReturHeader('RETRAD');
        $header = mt_kode_header::create([
            'kode_header' => $kode_header,
            'tgl_header' => date('Y-m-d')
        ]);
        $data_layanan_header = [
            'kode_kunjungan' => $request->kodekunjungan,
            'kode_retur_header' => $kode_header,
            'kode_layanan_header' => $request->kodeheader,
            'tgl_retur' => $now,
            'total_retur' => $request->gt,
            'alasan_retur' => 'RETUR',
            'status_retur' => 'CLS',
            'pic' => 10,
        ];
        $head = ts_retur_header::create($data_layanan_header);
        // $get = DB::select("CALL GET_NOMOR_LAYANAN_HEADER_RETUR('3003')");
        $cekidret = DB::select('Select ID from TS_RETUR_HEADER
        WHERE kode_kunjungan = ?
            AND kode_retur_header =  ?
            AND kode_layanan_header =  ?', [$head['kode_kunjungan'], $head['kode_retur_header'], $head['kode_layanan_header']]);

        $id_detail = $this->createReturdetail('DET');

        $savedetail = [
            'kode_retur_detail' => $id_detail,
            'tgl_retur_detail' => $now,
            'kode_retur_header' => $head['kode_retur_header'],
            'id_layanan_detail' => $request->idlayanandetail,
            'qty_Awal' => $request->qty,
            'qty_retur' => 1,
            'qty_sisa' => $sisaqty,
            'tarif_layanan' => $request->gt,
            'total_retur_detail' => $request->gt, //tarif layanan * qty sisa
            'status_retur_detail' => 'CLS',
            'row_id_header' => $request->idhed

        ];
        $ts_retur_detail = ts_retur_detail::create($savedetail);
        $statuslayanan = 'CCL';
        $updatedet = DB::select('UPDATE ts_layanan_detail SET status_layanan_detail = "CCL", tagihan_pribadi = 0,tagihan_penjamin = 0 WHERE id = ?', array($request->iddet));

        $hitung = DB::select('SELECT IFNULL (SUM(tagihan_pribadi),0) AS TAGPRI,IFNULL(SUM(tagihan_penjamin),0) AS TAGPEN FROM ts_layanan_detail WHERE row_id_header = ? AND status_layanan_detail = ?', [$request->idhed, 'OPN']);
        $tagpri = $hitung[0]->TAGPRI;
        $tagpen = $hitung[0]->TAGPEN;
        $updatehed = DB::select('UPDATE ts_layanan_header	SET total_layanan =?, tagihan_pribadi = ? ,tagihan_penjamin = ?	WHERE ID = ?', [$sisatotal, $tagpri, $tagpen, $request->idhed]);

        $back = [
            'kode' => 200,
            'message' => 'Retur Berhasil'
        ];
        echo json_encode($back);
        die;
    }

    public function riwayatradiologipasien(Request $request)
    {
        // $riwayat = DB::select("CALL SP_RIWAYAT_LAYANAN_RADIOLOGI_PASIEN('3003','$request->norm')");
        $riwayat = DB::select('SELECT 
                a.kode_layanan_header 
                , b.status_layanan_detail
                , g.NAMA_TARIF
                , a.tgl_entry
                , f.nama_unit as unit_pengirim
                from ts_layanan_header a
                INNER join ts_layanan_detail b on b.row_id_header = a.id
                INNER join ts_kunjungan c on c.kode_kunjungan = a.kode_kunjungan
                INNER JOIN mt_tarif_detail d ON d.KODE_TARIF_DETAIL = b.kode_tarif_detail
                INNER JOIN mt_tarif_header g ON g.KODE_TARIF_HEADER = d.KODE_TARIF_HEADER
                INNER join mt_unit f on f.kode_unit = c.kode_unit
                WHERE c.no_rm = ?
                AND a.kode_layanan_header LIKE "%RAD%"', [$request->norm]);
        return view('radiologi.riwayatpasien', [
            'riwayat' => $riwayat
        ]);
    }


    public function cetakexpertise(Request $request)
    {

        $acc = $request->acc;


        // $receive_items = $this->cetakpdf($kode_header, $idhed);
        $back = [
            'kode' => 200,
            'acc' => $acc
        ];
        echo json_encode($back);
        die;
    }
    public function cetakexpertise1($acc)
    {

        $now = Carbon::now();
        $url = "https://ris-api.radsaas.co.id/report/opinions?accessionNumber=$acc";
        // dd($url);

        $headers = [
            "Authorization: 11njwBQnAqn6yZi2unnW76KzoH7fVehFVYwf12iPOHs46RQKS",
            "HospitalCode: 68e5d273bf77b221da14a00e"

        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        curl_close($ch);
        // echo $response;
        $ex = json_decode($response);
        // $data = json_decode($_POST[$response], true);
        // dd($ex);
        $pemeriksaan = DB::connection('mysql3')->select('SELECT 
            a.ID,
            a.PID,
            a.NAME,
            a.ADMITDATE,
            a.BIRTHDATE,
            a.PROCEDURENAME,
            a.ENTERINGOGANIZATION,
            a.PROCEDURENAME,
            a.KODE_KUNJUNGAN,
            a.RELEVANTCLINICALINFO

            from order_table a
            where a.ACCESSIONNUMBER = ?', [$acc]);
        $updatestatus = DB::connection('mysql3')->select('UPDATE order_table SET STATUS = "FN" WHERE ACCESSIONNUMBER = ?', [$acc]);
        // dd($pemeriksaan);
        $kj = $pemeriksaan[0]->KODE_KUNJUNGAN;
        $path = public_path('\qrcoderad\qr' . $kj . time() . '.png');
        // dd($path);
        $d = QrCode::size(300)->format('png')->generate($ex->data->qrLink, $path);
        // $qr = QrCode::PNG($qrCode);

        // dd($qrCode);
        $pasien = DB::select('SELECT 

            b.alamat,
            a.no_rm,
            c.nama_penjamin,
            a.tgl_masuk,
            b.tgl_lahir,
            fc_umur(b.no_rm) AS usia

            FROM ts_kunjungan a
            LEFT OUTER JOIN	 mt_pasien b ON b.no_rm =a.no_rm
            LEFT OUTER JOIN  mt_penjamin c ON c.kode_penjamin = a.kode_penjamin
            WHERE a.kode_kunjungan = ?', [$kj]);
        // dd($pasien);

        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf::AddPage('P', 'letter');
        //Awal Header kertas
        $pdf::Image('public/img/kab_cirebonn.png', 10, 4, 20, 20);
        $pdf::Image('public/img/rsss.png', 180, 4, 20, 20);

        $pdf::SetFont('Times', 'B', 12);
        // $pdf::cell(10, 10,$qrCode );

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
        $pdf::SetXY(67, 30);
        $pdf::Cell(40, 10, 'INSTALASI RADIOLOGI');

        //Awal kotak data pasien
        $pdf::Rect(8, 40, 198, 50);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 39);
        $pdf::Cell(40, 10, 'Nomor Rad');
        $pdf::SetXY(40, 39);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 39);
        $pdf::Cell(42, 10, $pemeriksaan[0]->ID);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 39);
        $pdf::Cell(40, 10, 'Tgl. REG');
        $pdf::SetXY(139, 39);
        $pdf::Cell(45, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(141, 39);
        $pdf::MultiCell(70, 10, $pasien[0]->tgl_masuk . 'WIB');

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 45);
        $pdf::Cell(40, 10, 'Ruangan');
        $pdf::SetXY(40, 45);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 45);
        $pdf::Cell(42, 10, $pemeriksaan[0]->ENTERINGOGANIZATION);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 45);
        $pdf::Cell(40, 10, 'Nama Pasien');
        $pdf::SetXY(139, 45);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', 'B', 10);
        $pdf::SetXY(141, 45);
        $pdf::MultiCell(70, 10, $pemeriksaan[0]->NAME);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 51);
        $pdf::Cell(40, 10, 'Penjamin / Kelas');
        $pdf::SetXY(40, 51);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 51);
        $pdf::Cell(42, 10, $pasien[0]->nama_penjamin);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 51);
        $pdf::Cell(40, 10, 'NO. RM');
        $pdf::SetXY(139, 51);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', 'B', 10);
        $pdf::SetXY(141, 51);
        $pdf::Cell(70, 10, $pemeriksaan[0]->PID);

        $pdf::SetXY(160, 51);
        $pdf::Cell(40, 10, '/');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(162, 51);
        $pdf::Cell(70, 10, $pasien[0]->usia);


        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 57);
        $pdf::Cell(40, 10, 'Dr. Pengirim');
        $pdf::SetXY(40, 57);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 57);
        $pdf::Cell(42, 10, $ex->data->approver);


        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 57);
        $pdf::Cell(40, 10, 'Tgl. Lahir');
        $pdf::SetXY(139, 57);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(141, 57);
        $lahir = Carbon::parse($pasien[0]->tgl_lahir)->translatedFormat('d-F-Y');

        $pdf::Cell(70, 10, $lahir);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(120, 63);
        $pdf::Cell(40, 10, 'Diagnosis');
        $pdf::SetXY(139, 63);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(141, 63);
        $pdf::Cell(42, 10, $pemeriksaan[0]->RELEVANTCLINICALINFO);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 63);
        $pdf::Cell(40, 10, 'Alamat');
        $pdf::SetXY(40, 63);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        //$pdf::SetXY(42, 63);
        //$pdf::Cell(42, 10, $hasil['alamat'], 0, 1,'RIGHT');
        $pdf::SetXY(42, 67);
        $pdf::MultiCell(120, 3, $pasien[0]->alamat, 0, 'L');


        $pdf::SetFont('Times', 'BU', 14);
        $pdf::SetXY(10, 90);
        $pdf::Cell(40, 10, 'HASIL PEMERIKSAAN : ');
        $pdf::SetFont('Times', 'UI', 14);
        $pdf::SetXY(70, 90);
        $tgl_baca = Carbon::parse($ex->data->approveTime)->translatedFormat('d-F-Y H:i:s');
        $pdf::Cell(40, 10, 'Tanggal ' . $tgl_baca . ' WIB');
        $pdf::SetFont('Times', 'B', 12);
        $pdf::SetXY(10, 96);
        $pdf::Cell(40, 10, 'Jenis Pemeriksaan : ');

        $pdf::SetXY(50, 96);
        $pdf::SetFont('Times', 'I', 12);
        $pdf::Cell(40, 10, $pemeriksaan[0]->PROCEDURENAME);

        $pdf::SetFont('Arial', 'B', 30);
        $pdf::SetTextColor(255, 192, 203);
        // $pdf::SetXY(20, 150);
        // $pdf::Cell(40, 10, 'HASIL INI TIDAK UNTUK DI CETAK');
        //$pdf::RotatedText(35,190,'HASIL INI TIDAK UNTUK DI CETAK',45);
        $pdf::Ln();
        $pdf::SetTextColor(0, 0, 0);
        $pdf::SetFont('Times', '', 12);
        // $hasilex = $hasil[0]->hasil_exp;
        $pdf::SetX(10);
        $pdf::MultiCell(190, 5, $ex->data->finding, 0, 'L');
        $pdf::Ln();
        $pdf::SetFont('Times', 'B', 12);

        $pdf::MultiCell(190, 3, 'Kesan :', 0, 'L');
        $pdf::Ln();
        $pdf::SetFont('Times', '', 12);

        $pdf::MultiCell(190, 5, $ex->data->conclusion, 0, 'L');
        $pdf::Ln();
        $pdf::SetFont('Times', 'B', 12);

        $pdf::MultiCell(190, 3, 'Tindak Lanjut :', 0, 'L');
        $pdf::Ln();
        $pdf::SetFont('Times', '', 12);

        $pdf::MultiCell(190, 5, $ex->data->recommendation, 0, 'L');
        // Akhir kotak Hasil pemeriksaan

        $pdf::SetFont('Times', '', 12);
        $pdf::SetXY(145, 200);
        $tgl_bacaa = Carbon::parse($ex->data->approveTime)->translatedFormat('d-F-Y');

        $pdf::Cell(40, 10, 'Waled, ' . $tgl_bacaa);
        $pdf::SetXY(158, 205);
        $pdf::Cell(40, 10, 'Radiologi,');
        $pdf::SetFont('Times', 'B', 12);
        $pdf::Image('public/img/cap.png', 145, 211, 40, 25);

        if ($ex->data->approver == 'dr. Nunik Royyani. Sp.Rad') {
            $pdf::Image($path, 123, 220, 20, 20, 'PNG');

            $pdf::Image('public/img/ttd_036.png', 150, 211, 40, 25);
            $pdf::SetXY(145, 232);
            $pdf::Cell(40, 10, $ex->data->approver);


            $pdf::SetLineWidth(0.5);

            $pdf::Line(145, 240, 195, 240);
            $pdf::SetXY(152, 237);
            $pdf::Cell(40, 10, 'Spesialis Radiologi');
        } else {



            $pdf::Image($path, 113, 220, 20, 20, 'PNG');

            $pdf::Image('public/img/ttd_369.png', 150, 211, 40, 25);
            $pdf::SetXY(135, 232);
            $pdf::Cell(40, 10, $ex->data->approver);


            $pdf::SetLineWidth(0.5);

            $pdf::Line(135, 240, 205, 240);
            $pdf::SetXY(152, 237);
            $pdf::Cell(40, 10, 'Spesialis Radiologi');
        }




        $pdf::SetLineWidth(0.1);
        $pdf::Line(10, 245, 200, 245);
        $pdf::SetFont('Times', 'I', 8);
        $pdf::SetXY(10, 244);
        $pdf::Cell(40, 10, 'Dicetak pada tanggal : ' . $now . ' WIB ');
        $pdf::SetXY(160, 247);
        $pdf::Cell(40, 10, 'Cetakan : ' . $now);
        $pdf::SetFont('Times', 'I', 7);
        $pdf::SetXY(10, 247);
        $pdf::Cell(40, 10, '* Hasil Expertisi ini Dianggap Sah Jika Terdapat Tanda Tangan Dokter dan Stempel Unit !');

        $pdf::Output();
        exit;
        // AKHIR Header Kertas

    }
    public function sendResponse($message, $data, $code = 200)
    {
        $response = [
            'response' => $data,
            'metadata' => [
                'message' => $message,
                'code' => $code,
            ],
        ];
        return response()->json($response, $code);
    }
    public function sendError($error, $code = 404)
    {
        $response = [
            'metadata' => [
                'message' => $error,
                'code' => $code,
            ],
        ];
        return response()->json($response, $code);
    }
    public function caridokterradiologi(Request $request)
    {
        $namadokter = $request->namadokter;
        $dokter = DB::select("CALL sp_cari_dokter_rajal_nama_ad('$namadokter')");

        return view('radiologi.detaildokter', [
            'title' => 'SIRAMAH | Radiologi',
            'dokter' => $dokter
        ]);
        # code...

    }



    public function successview()
    {

        return view('radiologi.successview', [
            'title' => 'SIRAMAH | RADIOLOGI',




        ]);
    }

    public function printlabelrad(Request $request)
    {
        $kode_header = $request->kodeheader;
        $idhed = $request->idhed;

        // $receive_items = $this->cetakpdf($kode_header, $idhed);
        $back = [
            'kode' => 200,
            'idhed' => $idhed,
            'kode_header' => $kode_header,
        ];
        echo json_encode($back);
        die;
    }
    public function etiket($kode_header, $idhed)
    {
        $unit = auth()->user()->unit;
        $user = auth()->user()->id_simrs;

        $data = $idhed . '|' . $kode_header . '|' . '2';
        $now = Carbon::now();

        date_default_timezone_set('Asia/Jakarta');
        try {
            $data = [
                'datalabel' => $data,
                'tgl_input' => $now

            ];
            $label = tb_tampungan_label::create($data);
            // exec('c:\WINDOWS\system32\cmd.exe /c START C:\LABEL_RAD.exe');
            // exec('c:\WINDOWS\system32\cmd.exe \\192.168.30.125 -u it-pc1 -p pastibisa2016 /c START C:\WINDOWS\system32\notepad.exe');
            if ($user == '1141') {
                $payload = file_get_contents('http://192.168.2.182/LABEL.php');
            } else {

                $payload = file_get_contents('http://192.168.2.131/LABEL.php');
            }

            // c:\\WINDOWS\\system32\\psexec.exe \\192.168.1.224 -u myuser -p mypassword -accepteula cacls c:\\documents\\RRHH && exit
            // $now = Carbon::now();
            // $PDO = DB::connection()->getPdo();
            // $nota = $PDO->prepare("CALL SP_ETIKET_RADIOLOGI('$kode_header','$idhed')");
            // $nota->execute();

            // $data = $nota->fetchAll();
            // $filename = __DIR__ . '/etiket2.jrxml';
            // $config = ['driver' => 'array', 'data' => $data];
            // $report =  new PHPJasperXML();
            // $report->load_xml_file($filename)->setDataSource($config)->export('pdf');
            // $pdf = $report;

        } catch (\Exception $e) {
            return $e->getMessage();
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
    }
    public function cetakpdf($kode_header, $idhed)
    {
        $unit = auth()->user()->unit;
        $user = auth()->user()->id_simrs;

        $nota = DB::select("CALL SP_NOTA_TINDAKAN_NEW('$kode_header','$idhed')");
        $now = Carbon::now();
        $penjamin = $nota[0]->kode_penjamin;


        date_default_timezone_set('Asia/Jakarta');

        try {



            // $img = EscposImage::load("public/img/rsss.png");
            if ($user == '1141') {
                $connector = new WindowsPrintConnector("smb://192.168.2.182/EPSON TM-T82X Receipt");
            } else {

                $connector = new WindowsPrintConnector("smb://192.168.2.131/printernota");
            }
            $printer = new Printer($connector);
            function buatBaris4Kolom($kolom1, $kolom2, $kolom3, $kolom4)
            {
                // Mengatur lebar setiap kolom (dalam satuan karakter)
                $lebar_kolom_1 = 25;
                $lebar_kolom_2 = 3;
                $lebar_kolom_3 = 8;
                $lebar_kolom_4 = 9;

                // Melakukan wordwrap(), jadi jika karakter teks melebihi lebar kolom, ditambahkan \n
                $kolom1 = wordwrap($kolom1, $lebar_kolom_1, "\n", true);
                $kolom2 = wordwrap($kolom2, $lebar_kolom_2, "\n", true);
                $kolom3 = wordwrap($kolom3, $lebar_kolom_3, "\n", true);
                $kolom4 = wordwrap($kolom4, $lebar_kolom_4, "\n", true);

                // Merubah hasil wordwrap menjadi array, kolom yang memiliki 2 index array berarti memiliki 2 baris (kena wordwrap)
                $kolom1Array = explode("\n", $kolom1);
                $kolom2Array = explode("\n", $kolom2);
                $kolom3Array = explode("\n", $kolom3);
                $kolom4Array = explode("\n", $kolom4);

                // Mengambil jumlah baris terbanyak dari kolom-kolom untuk dijadikan titik akhir perulangan
                $jmlBarisTerbanyak = max(count($kolom1Array), count($kolom2Array), count($kolom3Array), count($kolom4Array));

                // Mendeklarasikan variabel untuk menampung kolom yang sudah di edit
                $hasilBaris = array();

                // Melakukan perulangan setiap baris (yang dibentuk wordwrap), untuk menggabungkan setiap kolom menjadi 1 baris
                for ($i = 0; $i < $jmlBarisTerbanyak; $i++) {

                    // memberikan spasi di setiap cell berdasarkan lebar kolom yang ditentukan,
                    $hasilKolom1 = str_pad((isset($kolom1Array[$i]) ? $kolom1Array[$i] : ""), $lebar_kolom_1, " ");
                    $hasilKolom2 = str_pad((isset($kolom2Array[$i]) ? $kolom2Array[$i] : ""), $lebar_kolom_2, " ");

                    // memberikan rata kanan pada kolom 3 dan 4 karena akan kita gunakan untuk harga dan total harga
                    $hasilKolom3 = str_pad((isset($kolom3Array[$i]) ? $kolom3Array[$i] : ""), $lebar_kolom_3, " ", STR_PAD_LEFT);
                    $hasilKolom4 = str_pad((isset($kolom4Array[$i]) ? $kolom4Array[$i] : ""), $lebar_kolom_4, " ", STR_PAD_LEFT);

                    // Menggabungkan kolom tersebut menjadi 1 baris dan ditampung ke variabel hasil (ada 1 spasi disetiap kolom)
                    $hasilBaris[] = $hasilKolom1 . " " . $hasilKolom2 . " " . $hasilKolom3 . " " . $hasilKolom4;
                }

                // Hasil yang berupa array, disatukan kembali menjadi string dan tambahkan \n disetiap barisnya.
                return implode($hasilBaris) . "\n";
            }

            // Membuat judul
            //penunjang
            $printer->initialize();

            $printer->selectPrintMode(Printer::MODE_DOUBLE_HEIGHT); // Setting teks menjadi lebih besar
            $printer->setJustification(Printer::JUSTIFY_CENTER); // Setting teks menjadi rata tengah
            // $printer->graphics($img);
            $printer->text("\n");
            $printer->text("Rincian Tindakan Pelayanan\n");
            $printer->text("UNIT " . $nota[0]->UNIT_CETAK . "\n");
            $printer->text("RSUD WALED KAB.CIREBON\n");
            $printer->text("----------------------------------------\n");
            $printer->text("\n");

            // Data transaksi
            $printer->initialize();
            $printer->text("Kode Layanan : " . $nota[0]->kode_layanan_header . "\n");
            $printer->text("No RM        : " . $nota[0]->no_rm . "\n");
            $printer->text("Nama Pasien  : " . $nota[0]->nama_px . "\n");
            $printer->text("TGL LHR/JK   : " . $nota[0]->tgl_lahir_ris . " / " . $nota[0]->JK . "\n");
            $printer->text("Umur         : " . $nota[0]->umur . "\n");
            $printer->text("Alamat       : " . $nota[0]->alamat . "\n");
            $printer->text("Unit Asal    : " . $nota[0]->nama_unit . "\n");
            $printer->text("Penjamin     : " . $nota[0]->nama_penjamin . "\n");
            $printer->text("Diagnosa     : " . $nota[0]->DIAGX . "\n");

            // Membuat tabel
            $printer->initialize(); // Reset bentuk/jenis teks
            $printer->text("----------------------------------------\n");
            $printer->text(buatBaris4Kolom("layanan", "qty", "harsat", "subtotal"));
            $printer->text("----------------------------------------\n");
            foreach ($nota as $n) {
                $printer->text(buatBaris4Kolom("$n->NAMA_TARIF", "$n->jumlah_layanan", "$n->total_layanan", "$n->grantotal_layanan"));
            }
            $printer->text("----------------------------------------\n");
            $printer->text(buatBaris4Kolom('', '', "Total", "$n->total_layanan_header"));
            $printer->text("\n");



            // Pesan penutup
            $printer->initialize();
            $printer->setJustification(Printer::JUSTIFY_LEFT);
            $printer->text("User      : " . $nota[0]->username . "\n");
            $printer->text("Tgl Inp   : " . $nota[0]->tgl_entry . "\n");
            $printer->text("Tgl Cetak : $now\n");


            $printer->feed(5); // mencetak 5 baris kosong agar terangkat (pemotong kertas saya memiliki jarak 5 baris dari toner)
            $printer->cut();
            //kasir
            // $printer->initialize();

            // $printer->selectPrintMode(Printer::MODE_DOUBLE_HEIGHT); // Setting teks menjadi lebih besar
            // $printer->setJustification(Printer::JUSTIFY_CENTER); // Setting teks menjadi rata tengah
            // $printer->graphics($img);
            // $printer->text("\n");
            // $printer->text("Rincian Tindakan Pelayanan\n");
            // $printer->text("UNIT " . $nota[0]->UNIT_CETAK . "\n");
            // $printer->text("RSUD WALED KAB.CIREBON\n");

            // $printer->text("----------------------------------------\n");
            // $printer->text("\n");

            // // Data transaksi
            // $printer->initialize();
            // $printer->text("Kode Layanan : " . $nota[0]->kode_layanan_header . "\n");
            // $printer->text("No RM        : " . $nota[0]->no_rm . "\n");
            // $printer->text("Nama Pasien  : " . $nota[0]->nama_px . "\n");
            // $printer->text("TGL LHR/JK   : " . $nota[0]->tgl_lahir_ris . " / " . $nota[0]->JK . "\n");
            // $printer->text("Umur         : " . $nota[0]->umur . "\n");
            // $printer->text("Alamat       : " . $nota[0]->alamat . "\n");
            // $printer->text("Unit Asal    : " . $nota[0]->nama_unit . "\n");
            // $printer->text("Penjamin     : " . $nota[0]->nama_penjamin . "\n");




            // // Membuat tabel
            // $printer->initialize(); // Reset bentuk/jenis teks
            // $printer->text("----------------------------------------\n");
            // $printer->text(buatBaris4Kolom("layanan", "qty", "harsat", "subtotal"));
            // $printer->text("----------------------------------------\n");
            // foreach ($nota as $n) {
            //     $printer->text(buatBaris4Kolom("$n->NAMA_TARIF", "$n->jumlah_layanan", "$n->grantotal_layanan", "$n->total_layanan"));
            // }
            // $printer->text("----------------------------------------\n");
            // $printer->text(buatBaris4Kolom('', '', "Total", "$n->total_layanan_header"));
            // $printer->text("\n");

            // // Pesan penutup
            // $printer->initialize();
            // $printer->setJustification(Printer::JUSTIFY_LEFT);
            // $printer->text("User    : " . $nota[0]->username . "\n");
            // $printer->text("Tgl Inp : $now\n");

            // $printer->feed(5); // mencetak 5 baris kosong agar terangkat (pemotong kertas saya memiliki jarak 5 baris dari toner)
            // $printer->cut();
            $printer->close();
            $printer->initialize();

            $printer->selectPrintMode(Printer::MODE_DOUBLE_HEIGHT); // Setting teks menjadi lebih besar
            $printer->setJustification(Printer::JUSTIFY_CENTER); // Setting teks menjadi rata tengah
            // $printer->graphics($img);
            $printer->text("\n");
            $printer->text("Rincian Tindakan Pelayanan\n");
            $printer->text("UNIT " . $nota[0]->UNIT_CETAK . "\n");
            $printer->text("RSUD WALED KAB.CIREBON\n");
            $printer->text("----------------------------------------\n");
            $printer->text("\n");

            // Data transaksi
            $printer->initialize();
            $printer->text("Kode Layanan : " . $nota[0]->kode_layanan_header . "\n");
            $printer->text("No RM        : " . $nota[0]->no_rm . "\n");
            $printer->text("Nama Pasien  : " . $nota[0]->nama_px . "\n");
            $printer->text("TGL LHR/JK   : " . $nota[0]->tgl_lahir_ris . " / " . $nota[0]->JK . "\n");
            $printer->text("Umur         : " . $nota[0]->umur . "\n");
            $printer->text("Alamat       : " . $nota[0]->alamat . "\n");
            $printer->text("Unit Asal    : " . $nota[0]->nama_unit . "\n");
            $printer->text("Penjamin     : " . $nota[0]->nama_penjamin . "\n");
            $printer->text("Diagnosa     : " . $nota[0]->DIAGX . "\n");

            // Membuat tabel
            $printer->initialize(); // Reset bentuk/jenis teks
            $printer->text("----------------------------------------\n");
            $printer->text(buatBaris4Kolom("layanan", "qty", "harsat", "subtotal"));
            $printer->text("----------------------------------------\n");
            foreach ($nota as $n) {
                $printer->text(buatBaris4Kolom("$n->NAMA_TARIF", "$n->jumlah_layanan", "$n->total_layanan", "$n->grantotal_layanan"));
            }
            $printer->text("----------------------------------------\n");
            $printer->text(buatBaris4Kolom('', '', "Total", "$n->total_layanan_header"));
            $printer->text("\n");



            // Pesan penutup
            $printer->initialize();
            $printer->setJustification(Printer::JUSTIFY_LEFT);
            $printer->text("User      : " . $nota[0]->username . "\n");
            $printer->text("Tgl Inp   : " . $nota[0]->tgl_entry . "\n");
            $printer->text("Tgl Cetak : $now\n");


            $printer->feed(5); // mencetak 5 baris kosong agar terangkat (pemotong kertas saya memiliki jarak 5 baris dari toner)
            $printer->cut();
            $printer->close();


            // /** RATA TENGAH */
            // $title = "TEST PRINTER ANTRIAN";

            // $printer->initialize();
            // $printer->setFont(Printer::FONT_B);
            // $printer->setJustification(Printer::JUSTIFY_CENTER);
            // $printer->setTextSize(2, 1);
            // $printer->text("RINCIAN TINDAKAN PELAYANAN \n");
            // $printer->setLineSpacing(2);
            // $printer->setJustification(Printer::JUSTIFY_CENTER);
            // $printer->text("\n");
            // $printer->text("UNIT " .  $nota[0]->UNIT_CETAK);
            // $printer->setLineSpacing(2);
            // $printer->text("\n");
            // $printer->text("____________________________");
            // $printer->setLineSpacing(2);
            // $printer->setJustification(Printer::JUSTIFY_LEFT);
            // $printer->text("\n");
            // $printer->text("Kode Layanan   : " . $nota[0]->kode_layanan_header);
            // $printer->setLineSpacing(2);
            // $printer->setJustification(Printer::JUSTIFY_LEFT);
            // $printer->text("\n");
            // $printer->text("No. RM         : " . $nota[0]->no_rm);
            // $printer->setLineSpacing(2);
            // $printer->setJustification(Printer::JUSTIFY_LEFT);
            // $printer->text("\n");
            // $printer->text("Nama Pasien    : " . $nota[0]->nama_px);
            // $printer->setLineSpacing(2);
            // $printer->setJustification(Printer::JUSTIFY_LEFT);
            // $printer->text("\n");
            // $printer->text("TTL/JK         : " . $nota[0]->tgl_lahir_ris);
            // $printer->setLineSpacing(2);
            // $printer->setJustification(Printer::JUSTIFY_LEFT);
            // $printer->text("\n");






            // $printer->cut();

            // /* Close printer */
            // $printer->close();
        } catch (\Exception $e) {
            echo "Couldn't print to this printer: " . $e->getMessage() . "\n";
        }
    }
    public function createReturHeader($unit)
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
        return $unit . date('ymd') . $kd;
    }
    public function createReturdetail()
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
        return 'RETDET' . date('ymd') . $kd;
    }
    public function createOrderHeader($unit)
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
        return $unit . date('ymd') . $kd;
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
    public function createAccNumber($unit)
    {
        $q = DB::select('SELECT id,kode_header,RIGHT(kode_header,6) AS kd_max  FROM mt_acc_number
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
        return $unit . date('ymd') . $kd;
    }
}
