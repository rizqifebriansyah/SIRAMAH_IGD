<?php

namespace App\Http\Controllers;

use App\Models\mt_kode_header;
use App\Models\ts_layanan_header;
use App\Models\ts_layanan_detail;
use App\Models\assesmenawal_dokter;
use App\Models\tb_tampungan_label;
use App\Models\ts_retur_header;
use App\Models\ts_retur_detail;
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
use PHPJasper\PHPJasper;
use Illuminate\Support\Facades\Http;
use mysqli;

class RadiologiController extends Controller
{

    // public $baseUrl = "http://sim.rsudwaled.id/simrs/api/penunjang/";
    // public $baseRis = "http://sim.rsudwaled.id/simrs/api/ris/";

    public $baseUrl = "http://192.168.2.30/simrs/api/penunjang/";
    public $baseRis = "http://192.168.2.30/simrs/api/ris/";

    public function index()
    {
        $unit = auth()->user()->unit;
        $user = auth()->user()->username;
        $now = Carbon::now()->format('Y-m-d');
        $tgl_masuk_x = date('Y-m-d', strtotime('-2 days', strtotime($now)));

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
        $jumlahinput = DB::select("CALL PANGGIL_HASIL_INPUTAN_HARIAN_2('$unit','$now','')");
        $orderpoli = DB::select('SELECT
        a.*
        ,fc_nama_px(no_rm) AS nama_pasien
        ,fc_NAMA_PENJAMIN2(kode_penjaminx) AS penjamin
        FROM ts_layanan_header_order a
        WHERE DATE(a.tgl_entry) = ? AND a.status_layanan = 1 AND a.kode_unit = ?', [$now, $unit]);
        $jumlahorder = count($orderpoli);
        // $order = Http::get($this->baseUrl . 'get_order_layanan', [
        //     'unit' => "3002",
        // ]);
        $pasienkunjungan = DB::select("CALL SP_PANGGIL_PASIEN_PENUNJANG_BARU('','','','$now')");
        $jumlahorderpasien = count($pasienkunjungan);
        // $response = Http::get($this->baseUrl . 'get_tarif_laboratorium', [
        //     'kelas' => '3',
        // ]);
        $pasienorderlab = DB::select("CALL SP_RIWAYAT_LAYANAN_LABORATORIUM('$unit','$now','$now','');");

        $pasienorder = DB::select("CALL SP_RIWAYAT_LAYANAN_RADIOLOGI('$unit','$now','$now','')");
        $pasienkjn = DB::select(' SELECT
        a.kode_kunjungan
        , fc_nama_px(a.no_rm) AS nama_px
        , a.no_rm
        , a.kode_penjamin
        , a.counter
        , b.status_pembayaran
        , c.id AS iddet
        , b.id AS idhed
        , c.id_layanan_detail
        , b.kode_layanan_header
        , fc_nama_tarif(LEFT(kode_tarif_detail, 6)) AS nama_tarif
        , a.tgl_masuk
        , b.total_layanan
        , c.total_tarif
        FROM ts_kunjungan a
        INNER JOIN ts_layanan_header b ON b.kode_kunjungan = a.kode_kunjungan
        INNER JOIN ts_layanan_detail c ON c.row_id_header = b.id

        WHERE DATE(a.tgl_masuk) BETWEEN ? AND ?
        AND c.status_layanan_detail = "OPN"
        AND b.status_layanan <> 3
        AND b.kode_unit = ?
        ', [$now, $now, $unit]);

        return view('radiologi.index', [
            'title' => 'SIRAMAH | RADIOLOGI',
            'pasienkunjungan' => $pasienkunjungan,
            'orderpoli' => $orderpoli,
            'jumlahorder' => $jumlahorder,
            'jumlahorderpasien' => $jumlahorderpasien,
            'jumlahinput' => $jumlahinput,
            'unit' => $unit,
            'pasienkunjunganrs' => $pasienkunjunganrs,
            'pasienorderlab' => $pasienorderlab,
            'pasienorder' => $pasienorder,
            'pasienkjn' => $pasienkjn,
            'user' => $user



        ]);
        # code...

    }
    public function datapasien()
    {
        $now = Carbon::now()->format('Ymd');
        $unit = auth()->user()->unit;

        $pasienkunjungan = DB::select("CALL SP_PANGGIL_PASIEN_PENUNJANG_BARU('','','','$now')");
        $orderpoli = DB::select('SELECT
        a.*
        ,fc_nama_px(no_rm) AS nama_pasien
        ,fc_NAMA_PENJAMIN2(kode_penjaminx) AS penjamin
        FROM ts_layanan_header_order a
        WHERE DATE(a.tgl_entry) = ? AND a.status_layanan = 1 AND a.kode_unit = ?', [$now, $unit]);


        return view('radiologi.tablependaftaran', [
            'pasienkunjungan' => $pasienkunjungan,
            'orderpoli' => $orderpoli,


        ]);
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
    public function hitungkunjungan()
    {
        $unit = auth()->user()->unit;
        $now = Carbon::now()->format('Ymd');

        $pasienorder = DB::select("CALL SP_RIWAYAT_LAYANAN_RADIOLOGI('$unit','$now','$now','')");
        $jumlahpasien = count($pasienorder);
        return view('radiologi.jumlahpasien', [
            'jumlahpasien' => $jumlahpasien,


        ]);
    }
    public function hitungorder()
    {
        $unit = auth()->user()->unit;
        $now = Carbon::now()->format('Ymd');
        $pasienkunjungan = DB::select("CALL SP_PANGGIL_PASIEN_PENUNJANG_BARU('','','','$now')");

        $jumlahorderpasien = count($pasienkunjungan);
        return view('radiologi.jumlahorderpasien', [
            'jumlahorderpasien' => $jumlahorderpasien,


        ]);
    }
    public function hitungorderpoli()
    {
        $unit = auth()->user()->unit;
        $now = Carbon::now()->format('Ymd');
        $orderpoli = DB::select('SELECT
        a.*
        ,fc_nama_px(no_rm) AS nama_pasien
        ,fc_NAMA_PENJAMIN2(kode_penjaminx) AS penjamin
        FROM ts_layanan_header_order a
        WHERE DATE(a.tgl_entry) = ? AND a.status_layanan = 1 AND a.kode_unit = ?', [$now, $unit]);
        $jumlahorder = count($orderpoli);
        return view('radiologi.jumlahorder', [
            'jumlahorder' => $jumlahorder,


        ]);
    }
    public function ambildataradiologi()
    {
        $unit = auth()->user()->unit;
        $now = Carbon::now()->format('Ymd');

        $pasienorder = DB::select("CALL SP_RIWAYAT_LAYANAN_RADIOLOGI('$unit','$now','$now','')");

        return view('radiologi.ordertable', [
            'title' => 'SIRAMAH | PENUNJANG',
            'pasienorder' => $pasienorder,
            'unit' => $unit,



        ]);
    }


    public function riwayatpasienradiologi(Request $request)
    {
        $riwayat = DB::select("CALL SP_RIWAYAT_LAYANAN_RADIOLOGI_PASIEN('3003','$request->norm')");
        return view('radiologi.riwayatpasien', [
            'riwayat' => $riwayat
        ]);
    }
    public function caridokter(Request $request)
    {
        $namadokter = $request->namadokter;
        $dokter = DB::select("CALL sp_cari_dokter_rajal_nama_ad('$namadokter')");

        return view('radiologi.detaildokter', [
            'title' => 'SIRAMAH | PENUNJANG',
            'dokter' => $dokter
        ]);
        # code...

    }
    public function terpilihpasienradiologi(Request $request)

    {
        $all = $request->all();
        $unit = auth()->user()->unit;
        $diagx = $request->diagx;
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
        $layanan = DB::select("CALL SP_CARI_TARIF_PELAYANAN_RAD('$request->kelas_unit','','$request->kelas')");






        return view('radiologi.pasienpilihan', [
            'title' => 'SIRAMAH | PENUNJANG',
            'layanan' => $layanan,
            'index' => $request->index,
            'diagx' => $diagx,
            'pasienkunjungan' => $pasienkunjungan,
            'unit' => $unit,
            'pasienpoli' => $pasienpoli,
            'paket' => $paket,
            'pasienkunjunganorder' => $pasienkunjunganorder



        ]);
    }


    public function caritanggalradiologi(Request $request)
    {
        $unit = auth()->user()->unit;

        $pasienorder = DB::select("CALL SP_RIWAYAT_LAYANAN_RADIOLOGI('$unit','$request->tgl_entry','$request->tgl_entry1','$request->no_rm')");

        return view('radiologi.ordertable', [
            'title' => 'SIRAMAH | PENUNJANG',
            'pasienorder' => $pasienorder,
            'unit' => $unit,
        ]);
    }


    public function caripasienpendaftaranradiologi(Request $request)
    {
        $unit = auth()->user()->unit;
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
                       AND b.kelas_unit NOT IN(4,2)
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
                       AND b.kelas_unit NOT IN(4,2)
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
                       WHERE
                       b.kelas_unit = 2
                       AND a.status_kunjungan = 1
                       
                       )q
                       ORDER BY orderan DESC ,kelas_unit,nama_px',
            [$request->tgl_kunjungann, $request->tgl_kunjungan, $unit, $request->tgl_kunjungann, $request->tgl_kunjungan]
        );
        $tgl = $request->tgl_kunjungan;


        $orderpoli = DB::select('SELECT
        a.*
        ,fc_nama_px(no_rm) AS nama_pasien
        ,fc_NAMA_PENJAMIN2(kode_penjaminx) AS penjamin
        FROM ts_layanan_header_order a
        WHERE DATE(a.tgl_entry) = ? AND a.status_layanan = 1 AND a.kode_unit = ?', [$tgl, $unit]);
        return view('radiologi.tablependaftaran', [
            'title' => 'SIRAMAH | PENUNJANG',
            'pasienkunjunganrs' => $pasienkunjunganrs,
            'orderpoli' => $orderpoli
        ]);
    }




    public function printulangradiologi(Request $request)
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


    public function simpanorderradiologi(Request $request)
    {
        $kodepenjamin = $request->kodepenjamin;
        $kelasunit = $request->kelasunit;
        $norm  = $request->norm;
        $namaunit = $request->namaunit;
        $kelas = $request->kelas;
        $kodeunit = $request->kodeunit;
        $ukirim = $kodeunit . ' | ' . $namaunit . ' | ' . $kelas;
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
        $kode_header = DB::select("CALL GET_NOMOR_LAYANAN_HEADER('3003')");
        $kode_header  = $kode_header[0]->no_trx_layanan;
        // $kode_header = $this->createOrderHeader('RAD');
        $header = mt_kode_header::create([
            'kode_header' => $kode_header,
            'tgl_header' => date('Y-m-d')
        ]);


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

                $ts_layanan_detail = ts_layanan_detail::create($savedetail);
            }
        }
        $kode_header = $ts_layanan_detail['kode_layanan_header'];
        $idhed = $ts_layanan_detail['row_id_header'];
        $update = DB::select('UPDATE ts_layanan_header_order SET status_order = 2
        WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $norm]);

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

    public function batalradiologi(Request $request)
    {
        $norm = $request->norm;
        $kokuj = $request->kodekunjungan;
        $update = DB::select('UPDATE ts_layanan_header_order SET status_order = 3
        WHERE kode_kunjungan = ? AND no_rm = ?', [$kokuj, $norm]);
        $back = [
            'kode' => 200,
            'message' => 'order dibatalkan !'
        ];
        echo json_encode($back);
        die;
    }

    public function returorderradiologi(Request $request)
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
        $updatedet = DB::select('UPDATE ts_layanan_detail SET status_layanan_detail = "CCL", jumlah_retur = ?, tagihan_pribadi = 0,tagihan_penjamin = 0 WHERE id = ?', array($request->qty, $request->iddet));
        $hitung = DB::select('SELECT IFNULL (SUM(tagihan_pribadi),0) AS TAGPRI,IFNULL(SUM(tagihan_penjamin),0) AS TAGPEN FROM ts_layanan_detail WHERE row_id_header = ? AND status_layanan_detail = ?', [$request->idhed, 'OPN']);
        $tagpri = $hitung[0]->TAGPRI;
        $tagpen = $hitung[0]->TAGPEN;
        if ($tagpri == 0) {
            $sisatotal = $tagpen;
        } elseif ($tagpen == 0) {
            $sisatotal = $tagpri;
        }
        $updatehed = DB::select('UPDATE ts_layanan_header	SET total_layanan =?, tagihan_pribadi = ? ,tagihan_penjamin = ?	WHERE ID = ?', [$sisatotal, $tagpri, $tagpen, $request->idhed]);


        $cektag = DB::select('SELECT 
            tagihan_pribadi + tagihan_penjamin AS tagihan
            FROM ts_layanan_header
            WHERE id = ?', [$request->idhed]);
        $hasil = $cektag[0]->tagihan;
        if ($hasil == NULL) {
            $updatehead = DB::select('UPDATE ts_layanan_header SET status_layanan = 3  WHERE id = ?', array($request->idhed));
        }


        $back = [
            'kode' => 200,
            'message' => 'Retur Berhasil'
        ];
        echo json_encode($back);
        die;
    }

    public function simpanorderdetail(Request $request)
    {
        $data = [
            'status_pembayaran' => 'OPN',
        ];
        ts_layanan_header::whereRaw('kode_kunjungan = ?', array($request->kodekunjungan))->update($data);

        ts_layanan_header::whereRaw('id = ?', array($request->idetail))->update($data);
        $back = [
            'kode' => 200,
            'message' => 'order diretur !'
        ];
        echo json_encode($back);
        die;
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
    public function coba($kode_header, $idhed)
    {
        $unit = auth()->user()->unit;

        date_default_timezone_set('Asia/Jakarta');

        try {

            $now = Carbon::now();
            $PDO = DB::connection()->getPdo();
            $nota = $PDO->prepare("CALL SP_NOTA_TINDAKAN_NEW('$kode_header','$idhed')");
            $nota->execute();

            $data = $nota->fetchAll();
            $filename = __DIR__ . '/report1.jrxml';
            $config = ['driver' => 'array', 'data' => $data];
            $report =  new PHPJasperXML();
            $report->load_xml_file($filename)->setDataSource($config)->export('pdf');
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
    public function cetakorderradiologi($kode_header, $idhed)
    {
        $unit = auth()->user()->unit;
        $nota = DB::select("CALL SP_NOTA_TINDAKAN_NEW('$kode_header','$idhed')");
        $now = Carbon::now();
        $penjamin = $nota[0]->kode_penjamin;


        date_default_timezone_set('Asia/Jakarta');

        try {

            $img = EscposImage::load("public/img/rsss.png");
            // $connector = new WindowsPrintConnector("EPSON TM-T82X Receipt");

            $connector = new WindowsPrintConnector("smb://192.168.2.85/printernota");
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
            $printer->graphics($img);
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
                $printer->text(buatBaris4Kolom("$n->NAMA_TARIF", "$n->jumlah_layanan", "$n->grantotal_layanan", "$n->total_layanan"));
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
            $printer->graphics($img);
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
                $printer->text(buatBaris4Kolom("$n->NAMA_TARIF", "$n->jumlah_layanan", "$n->grantotal_layanan", "$n->total_layanan"));
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
    public function lihatpasienex(Request $request)
    {
        $hasil = DB::select("CALL Radiologi_expertise_reborn_01('$request->tgl_kunjungan1','$request->tgl_kunjungan2','', '')");

        return view('radiologi.tablexpertise', [
            'hasil' => $hasil,


        ]);
    }
    public function cetakexpertise(Request $request)
    {

        $norm = $request->norm;
        $tglentry = Carbon::parse($request->tglentry)->format('Y-m-d');


        // $receive_items = $this->cetakpdf($kode_header, $idhed);
        $back = [
            'kode' => 200,
            'norm' => $norm,
            'tglentry' => $tglentry,
        ];
        echo json_encode($back);
        die;
    }
    public function cetakexpertise1($norm, $tglentry)
    {

        $now = Carbon::now();
        $hasil = DB::select("CALL Radiologi_expertise_reborn_01('$tglentry','$tglentry','', '$norm')");

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
        $pdf::Cell(42, 10, $hasil[0]->no_rm);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 39);
        $pdf::Cell(40, 10, 'Tgl. REG');
        $pdf::SetXY(139, 39);
        $pdf::Cell(45, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(141, 39);
        $pdf::MultiCell(70, 10, $hasil[0]->tgl_entry . 'WIB');

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 45);
        $pdf::Cell(40, 10, 'Ruangan');
        $pdf::SetXY(40, 45);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 45);
        $pdf::Cell(42, 10, $hasil[0]->unit_kirim);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 45);
        $pdf::Cell(40, 10, 'Nama Pasien');
        $pdf::SetXY(139, 45);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', 'B', 10);
        $pdf::SetXY(141, 45);
        $pdf::MultiCell(70, 10, $hasil[0]->nama_pasien);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 51);
        $pdf::Cell(40, 10, 'Penjamin / Kelas');
        $pdf::SetXY(40, 51);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 51);
        $pdf::Cell(42, 10, $hasil[0]->nama_penjamin);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 51);
        $pdf::Cell(40, 10, 'NO. RM');
        $pdf::SetXY(139, 51);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', 'B', 10);
        $pdf::SetXY(141, 51);
        $pdf::Cell(70, 10, $hasil[0]->no_rm);

        $pdf::SetXY(160, 51);
        $pdf::Cell(40, 10, '/');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(162, 51);
        $pdf::Cell(70, 10, $hasil[0]->umur);


        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 57);
        $pdf::Cell(40, 10, 'Dr. Pengirim');
        $pdf::SetXY(40, 57);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 57);
        $pdf::Cell(42, 10, $hasil[0]->dok_kirim);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 57);
        $pdf::Cell(40, 10, 'Umur');
        $pdf::SetXY(139, 57);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(141, 57);
        $pdf::Cell(70, 10, $hasil[0]->umur);

        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(120, 63);
        $pdf::Cell(40, 10, 'Tgl. Lahir');
        $pdf::SetXY(139, 63);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(141, 63);
        $lahir = Carbon::parse($hasil[0]->tgl_lahir)->translatedFormat('d-F-Y');

        $pdf::Cell(70, 10, $lahir);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 63);
        $pdf::Cell(40, 10, 'Diagnosis');
        $pdf::SetXY(40, 63);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(42, 63);
        // $pdf::Cell(42, 10, $hasil['DIAGNOSA']);

        $pdf::SetFont('Times', '', 11);
        $pdf::SetXY(10, 70);
        $pdf::Cell(40, 10, 'Alamat');
        $pdf::SetXY(40, 70);
        $pdf::Cell(40, 10, ':');
        $pdf::SetFont('Times', '', 11);
        //$pdf::SetXY(42, 70);
        //$pdf::Cell(42, 10, $hasil['alamat'], 0, 1,'RIGHT');
        $pdf::SetXY(42, 70);
        $pdf::MultiCell(120, 8, $hasil[0]->alamat1, 0, 'L');


        $pdf::SetFont('Times', 'BU', 14);
        $pdf::SetXY(10, 90);
        $pdf::Cell(40, 10, 'HASIL PEMERIKSAAN : ');
        $pdf::SetFont('Times', 'UI', 14);
        $pdf::SetXY(70, 90);
        $tgl_baca = Carbon::parse($hasil[0]->tgl_baca)->translatedFormat('d-F-Y H:i:s');
        $pdf::Cell(40, 10, 'Tanggal ' . $tgl_baca . ' WIB');
        $pdf::SetFont('Times', 'B', 12);
        $pdf::SetXY(10, 96);
        $pdf::Cell(40, 10, 'Jenis Pemeriksaan : ');

        $pdf::SetXY(50, 96);
        $pdf::SetFont('Times', 'I', 12);
        $pdf::Cell(40, 10, $hasil[0]->tindakan);

        $pdf::SetFont('Arial', 'B', 30);
        $pdf::SetTextColor(255, 192, 203);
        // $pdf::SetXY(20, 150);
        // $pdf::Cell(40, 10, 'HASIL INI TIDAK UNTUK DI CETAK');
        //$pdf::RotatedText(35,190,'HASIL INI TIDAK UNTUK DI CETAK',45);

        $pdf::SetTextColor(0, 0, 0);
        $pdf::SetFont('Times', '', 12);
        $hasilex = $hasil[0]->hasil_exp;
        $pdf::SetXY(10, 104);
        $pdf::MultiCell(190, 8, $hasilex, 0, 'L');

        // Akhir kotak Hasil pemeriksaan

        $pdf::SetFont('Times', '', 12);
        $pdf::SetXY(145, 200);
        $pdf::Cell(40, 10, 'Waled, ' . $hasil[0]->tgl_baca);
        $pdf::SetXY(158, 205);
        $pdf::Cell(40, 10, 'Radiologi,');
        $pdf::SetFont('Times', 'B', 12);

        if ($hasil[0]->dokter_baca == 'dr. M.Amar Latief, Sp.Rad') {
            $pdf::Image('public/img/ttd_369.png', 150, 210, 40, 25);
        } elseif ($hasil[0]->dokter_baca == 'dr. Nunik Royyani, Sp.Rad') {
            $pdf::Image('public/img/ttd_036.png', 150, 210, 40, 25);
        }
        $pdf::Image('public/img/cap.png', 135, 210, 40, 25);
        $pdf::SetXY(145, 232);
        if ($hasil[0]->dokter_baca == 'dr. M.Amar Latief, Sp.Rad') {
            $pdf::Cell(40, 10, $hasil[0]->dokter_baca);
        } elseif ($hasil[0]->dokter_baca == 'dr. Nunik Royyani, Sp.Rad') {
            $pdf::Cell(40, 10, $hasil[0]->dokter_baca);
        }

        $pdf::SetLineWidth(0.5);

        $pdf::Line(145, 240, 195, 240);
        $pdf::SetXY(152, 237);
        $pdf::Cell(40, 10, 'Spesialis Radiologi');

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

    public function etiketrad($kode_header, $idhed)
    {
        $unit = auth()->user()->unit;
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
            $payload = file_get_contents('http://192.168.2.85/LABEL.php');
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
}
