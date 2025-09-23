<?php

namespace App\Http\Controllers;

use App\Models\mt_kode_header;
use App\Models\ts_layanan_header;
use App\Models\ts_layanan_detail;
use App\Models\ts_retur_header;
use App\Models\ts_retur_detail;
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

class LabController extends Controller
{
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
        $jumlahinput = DB::select("CALL PANGGIL_HASIL_INPUTAN_HARIAN_2('3002','$now','')");
        $orderpoli = DB::select('SELECT
        a.*
        ,fc_nama_px(no_rm) AS nama_pasien
        ,fc_NAMA_PENJAMIN2(kode_penjaminx) AS penjamin
        FROM ts_layanan_header_order a
        WHERE DATE(a.tgl_entry) = ? AND a.status_layanan = 1 AND a.kode_unit = "3002"', [$now]);
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


        return view('laboratorium.index', [
            'title' => 'SIRAMAH | LABORATORIUM',
            'pasienkunjungan' => $pasienkunjungan,
            'orderpoli' => $orderpoli,
            'jumlahorder' => $jumlahorder,
            'jumlahorderpasien' => $jumlahorderpasien,
            'jumlahinput' => $jumlahinput,
            'unit' => $unit,
            'pasienkunjunganrs' => $pasienkunjunganrs,
            'pasienorderlab' => $pasienorderlab,
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


        return view('laboratorium.tablependaftaran', [
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
    public function ambildatalab()
    {
        $unit = auth()->user()->unit;
        $now = Carbon::now()->format('Ymd');

        $pasienorderlab = DB::select("CALL SP_RIWAYAT_LAYANAN_LABORATORIUM('$unit','$now','$now','');");

        return view('laboratorium.ordertable', [
            'title' => 'SIRAMAH | LABORATORIUM',
            'pasienorderlab' => $pasienorderlab,
            'unit' => $unit,



        ]);
    }
    public function hitungtotal(Request $request)
    {
        $data = json_decode($_POST['data'], true);
        foreach ($data as $nama) {
            $index = $nama['name'];
            $value = $nama['value'];
            $dataSet[$index] = $value;
            if ($index == 'cyto') {
                $arrayindex[] = $dataSet;
            }
        }
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
        $total = number_format($gt);

        return view('laboratorium.totaltagihan', [
            'total' => $total
        ]);
    }

    public function riwayatlab(Request $request)
    {
        $riwayat = DB::select("CALL SP_RIWAYAT_LAYANAN_RADIOLOGI_PASIEN('3002','$request->norm')");
        return view('laboratorium.riwayatpasien', [
            'riwayat' => $riwayat
        ]);
    }
    public function caridokter(Request $request)
    {
        $namadokter = $request->namadokter;
        $dokter = DB::select("CALL sp_cari_dokter_rajal_nama_ad('$namadokter')");

        return view('laboratorium.detaildokter', [
            'title' => 'SIRAMAH | LABORATORIUM',
            'dokter' => $dokter
        ]);
        # code...

    }
    public function terpilihpasienlab(Request $request)

    {
        $all = $request->all();
        $unit = auth()->user()->unit;
        $idsimrs = auth()->user()->id_simrs;
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
        $layananlab = DB::select('SELECT b.kode_tarif_detail AS kode, a.nama_tarif AS Tindakan, b.tarif_penunjang AS tarif 
FROM mt_tarif_header a 
INNER JOIN mt_tarif_detail b ON b.kode_tarif_header = a.kode_tarif_header 
WHERE a.USER_INPUT_ID ="1" 
AND  a.kelompok_tarif_id IN (13) AND b.tarif_penunjang <> 0 
AND b.act = 1 
AND b.kelas_tarif = ?', [$request->kelas]);






        return view('laboratorium.pasienpilihan', [
            'title' => 'SIRAMAH | LABORATORIUM',
            'layananlab' => $layananlab,
            'index' => $request->index,
            'diagx' => $diagx,
            'pasienkunjungan' => $pasienkunjungan,
            'unit' => $unit,
            'pasienpoli' => $pasienpoli,
            'paket' => $paket,
            'idsimrs' => $idsimrs,
            'pasienkunjunganorder' => $pasienkunjunganorder



        ]);
    }


    public function caritanggallab(Request $request)
    {
        $unit = auth()->user()->unit;

        $pasienorderlab = DB::select("CALL SP_RIWAYAT_LAYANAN_LABORATORIUM('$unit','$request->tgl_entry','$request->tgl_entry1','$request->no_rm');");

        return view('laboratorium.ordertable', [
            'title' => 'SIRAMAH | LABORATORIUM',
            'pasienorderlab' => $pasienorderlab,
            'unit' => $unit,
        ]);
    }

    public function tampilpaketlab(Request $request)
    {

        $unit = auth()->user()->unit;

        $paketdetail = DB::select("CALL SP_CARI_LAYANAN_PAKET('$unit','$request->kelas','$request->idpaket')");
        return view('laboratoirum.tabelpaket', [
            'paketdetail' => $paketdetail,


        ]);
    }
    public function caripasienpendaftaranlab(Request $request)
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
        return view('laboratorium.tablependaftaran', [
            'title' => 'SIRAMAH | LABORATORIUM',
            'pasienkunjunganrs' => $pasienkunjunganrs,
            'orderpoli' => $orderpoli
        ]);
    }

    public function detailpaketlab(Request $request)
    {

        $unit = auth()->user()->unit;
        $namatindakan = $request->namatindakan;
        $paketdetail = DB::select("CALL SP_CARI_LAYANAN_PAKET('$unit','1','$request->idpaket')");

        return view('laboratorium.formtindakan', [
            'paketdetail' => $paketdetail,
            'namatindakan' => $namatindakan


        ]);
    }


    public function printulanglabo(Request $request)
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


    public function simpanorderlab(Request $request)
    {
        $kodepenjamin = $request->kodepenjamin;
        $lis = $request->lis;
        $kelasunit = $request->kelasunit;
        $unit = auth()->user()->unit;
        $idsimrs = auth()->user()->id_simrs;

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

        try {
            $kode_header = DB::select("CALL GET_NOMOR_LAYANAN_HEADER('3002')");
            $kode_header  = $kode_header[0]->no_trx_layanan;
            if ($kode_header == null) {
                $kode_header = $this->createOrderHeader('LAB');
                $kode_header = mt_kode_header::create([
                    'kode_header' => $kode_header,
                    'tgl_header' => date('Y-m-d')
                ]);
            } else {
                $kode_header = DB::select("CALL GET_NOMOR_LAYANAN_HEADER('3002')");
                $kode_header  = $kode_header[0]->no_trx_layanan;
            }

            //     }else{
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
                        'kode_unit' => 3002,
                        'kode_tipe_transaksi' => 2,
                        'kode_penjaminx' => $request->kodepenjamin,
                        'keterangan' => 'Persiapan',
                        'pic' => $idsimrs,
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

                        //  jika paket
                        //looping arryindex jenis paket
                        if ($arr['jenis'] == 'paket') {
                            $kodepaket = $arr['kodelayanan'];
                            $paket = DB::select("CALL SP_CARI_LAYANAN_PAKET('$unit','1','$kodepaket')");
                            foreach ($paket as $p) {
                                $id_detail = $this->createLayanandetail();
                                $savedetail = [
                                    'id_layanan_detail' => $id_detail,
                                    'kode_layanan_header' => $kode_header,
                                    'kode_tarif_detail' => $arr['kodelayanan'],
                                    'total_tarif' => $p->harga,
                                    'jumlah_layanan' => $arr['qty'],
                                    'diskon_dokter' => $arr['disc'],
                                    'cyto' => $arr['cyto'],
                                    'total_layanan' => $p->harga,
                                    'grantotal_layanan' => 0,
                                    'status_layanan_detail' => 'OPN',
                                    'tgl_layanan_detail' => $now,
                                    'tagihan_pribadi' => $arr['tarif'],
                                    'tgl_layanan_detail_2' => $now,
                                    'row_id_header' => $head['id']
                                ];
                                $ts_layanan_detail = ts_layanan_detail::create($savedetail);
                            }
                        } else {
                            $id_detail = $this->createLayanandetail();
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
                        'tagihan_pribadi' => $gt,
                        'diskon_global' => $dataSet['disc'],
                        'status_layanan' => 1,
                        'kode_unit' => 3002,
                        'kode_tipe_transaksi' => 1,
                        'keterangan' => 'Persiapan',

                        'kode_penjaminx' => $request->kodepenjamin,
                        'pic' => $idsimrs,
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
                        if ($arr['jenis'] == 'paket') {
                            $kodepaket = $arr['kodelayanan'];
                            $paket = DB::select("CALL SP_CARI_LAYANAN_PAKET('$unit','1','$kodepaket')");
                            foreach ($paket as $p) {
                                $id_detail = $this->createLayanandetail();
                                $savedetail = [
                                    'id_layanan_detail' => $id_detail,
                                    'kode_layanan_header' => $kode_header,
                                    'kode_tarif_detail' => $p->kode_tarif_detail,
                                    'total_tarif' => $p->harga,
                                    'jumlah_layanan' => $arr['qty'],
                                    'diskon_dokter' => $arr['disc'],
                                    'cyto' => $arr['cyto'],
                                    'total_layanan' => $p->harga,
                                    'grantotal_layanan' => $p->harga * $arr['qty'],
                                    'status_layanan_detail' => 'OPN',
                                    'tgl_layanan_detail' => $now,
                                    'tagihan_pribadi' => $arr['tarif'],
                                    'tgl_layanan_detail_2' => $now,
                                    'row_id_header' => $head['id']
                                ];
                                $ts_layanan_detail = ts_layanan_detail::create($savedetail);
                            }
                        } else {
                            $id_detail = $this->createLayanandetail();
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
                    'kode_unit' => 3002,
                    'kode_tipe_transaksi' => 2,
                    'keterangan' => 'Persiapan',
                    'kode_penjaminx' => $request->kodepenjamin,
                    'pic' => $idsimrs,
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
                    if ($arr['jenis'] == 'paket') {
                        $kodepaket = $arr['kodelayanan'];
                        $paket = DB::select("CALL SP_CARI_LAYANAN_PAKET('$unit','1','$kodepaket')");
                        foreach ($paket as $p) {
                            $id_detail = $this->createLayanandetail();
                            $savedetail = [
                                'id_layanan_detail' => $id_detail,
                                'kode_layanan_header' => $kode_header,
                                'kode_tarif_detail' => $p->kode_tarif_detail,
                                'total_tarif' => $p->harga,
                                'jumlah_layanan' => $arr['qty'],
                                'diskon_dokter' => $arr['disc'],
                                'cyto' => $arr['cyto'],
                                'total_layanan' => $p->harga,
                                'grantotal_layanan' => $p->harga * $arr['qty'],
                                'status_layanan_detail' => 'OPN',
                                'tgl_layanan_detail' => $now,
                                'tagihan_penjamin' => $arr['tarif'],
                                'tgl_layanan_detail_2' => $now,
                                'row_id_header' => $head['id']
                            ];
                            $ts_layanan_detail = ts_layanan_detail::create($savedetail);
                        }
                    } else {
                        $id_detail = $this->createLayanandetail();
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
                // $receive_items = $this->cetakpdf($kode_header, $idhed);

            }
            $kode_header = $ts_layanan_detail['kode_layanan_header'];
            $idhed = $ts_layanan_detail['row_id_header'];
            $update = DB::select('UPDATE ts_layanan_header_order SET status_order = 2
            WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $norm]);
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        if ($lis == 'lis') {
            try {
                // 1. INSERT TO histolisheader_HIS 
                $insert = DB::select("CALL SP_HIS2LIS_INSERT_TO_HEADER_DETAIL_LIS_IN_HIS_2('$kode_header','$idhed') ");
            } catch (\Exception $e) {
                $back = [
                    'kode' => 200,
                    'message' => $e->getMessage()
                ];
                echo json_encode($back);
                die;
            }
            try {
                // 2.	INSERT TO histolisheader_HIS 
                $insert1 = DB::select("CALL SP_HIS2LIS_INSERT_TO_DETAIL_LIS_IN_HIS3('$kode_header','$idhed') ");
            } catch (\Exception $e) {
                $back = [
                    'kode' => 200,
                    'message' => $e->getMessage()
                ];
                echo json_encode($back);
                die;
            }
            try {
                // 3.	UPDATE TO histolisheader_HIS + INSERT TO histolisheader_LIS + INSERT TO histolisDETAIL_LIS  => KIRIM ROW ID = 0 
                $insert2 = DB::select("CALL SP_HIS2LIS_UPDATE_TO_HEADER_COUNTDETAIL_LIS_IN_HIS_1('$kode_header','$idhed') ");
            } catch (\Exception $e) {
                $back = [
                    'kode' => 200,
                    'message' => $e->getMessage()
                ];
                echo json_encode($back);
                die;
            }
            try {
                // 4.	IN DB HIS2LIS '''INSERT TO histolisheader_LIS 
                $insert3 = DB::select("CALL SP_HIS2LIS_INSERT_TO_HEADER_LIS_IN_LIS('$kode_header') ");
            } catch (\Exception $e) {
                $back = [
                    'kode' => 200,
                    'message' => $e->getMessage()
                ];
                echo json_encode($back);
                die;
            }
            try {
                // 5.	IN DB HIS2LIS '''INSERT TO histolisheader_LIS 
                $insert4 = DB::select("CALL SP_HIS2LIS_INSERT_TO_DETAIL_LIS_IN_LIS('$kode_header') ");
            } catch (\Exception $e) {
                $back = [
                    'kode' => 200,
                    'message' => $e->getMessage()
                ];
                echo json_encode($back);
                die;
            }
            try {
                // 6.	IN DB HIS2LIS '''INSERT TO histolisheader_LIS 
                $cek2 = DB::select("CALL SP_HIS2LIS_CEK_ROWID_IN_LIS('$kode_header') ");
                $rowid = $cek2[0]->RowId;
                $upd = DB::select("CALL SP_HIS2LIS_UPDATE_TO_DETAIL_HISTOLISHEADERID_LIS_IN_LIS('$rowid') ");
                $updd = DB::select('UPDATE ts_layanan_header SET keterangan = "Terkirim"
        ,cek_kirim_lis = 1 
        where kode_layanan_header = ? 
        and id =  ?', [$kode_header, $idhed]);
            } catch (\Exception $e) {
                $back = [
                    'kode' => 200,
                    'message' => $e->getMessage()
                ];
                echo json_encode($back);
                die;
            }
        } else {
        }


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
    public function batallaboratorium(Request $request)
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


    public function returorderlabo(Request $request)
    {
        $dt = Carbon::now()->timezone('Asia/Jakarta');
        $date = $dt->toDateString();
        $time = $dt->toTimeString();
        $idsimrs = auth()->user()->id_simrs;

        $now = $date . ' ' . $time;
        $cek = $request->all();
        $total = $request->totallayanan;
        $gt = $request->gt;
        $sisatotal = $total - $gt;
        $sisaqty = $request->qty - 1;
        $total_retur = $request->gt - $sisaqty;

        $kode_header = $this->createReturHeader('RETLAB');
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
            'pic' => $idsimrs,
        ];
        $head = ts_retur_header::create($data_layanan_header);
        // $get = DB::select("CALL GET_NOMOR_LAYANAN_HEADER_RETUR('3003')");
        $cekidret = DB::select('Select ID from TS_RETUR_HEADER
        WHERE kode_kunjungan = ?
	AND kode_retur_header =  ?
	AND kode_layanan_header =  ?', [$head['kode_kunjungan'], $head['kode_retur_header'], $head['kode_layanan_header']]);

        $id_detail = $this->createReturdetail();

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

        $updatehed = DB::select('UPDATE ts_layanan_header	SET total_layanan = ?, tagihan_pribadi = ? ,tagihan_penjamin = ?	WHERE ID = ?', [$sisatotal, $tagpri, $tagpen, $request->idhed]);


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

    public function labnotaorder($kode_header, $idhed)
    {
        $unit = auth()->user()->unit;
        $user = auth()->user()->id_simrs;
        $nota = DB::select("CALL SP_NOTA_TINDAKAN_NEW('$kode_header','$idhed')");
        $now = Carbon::now();


        date_default_timezone_set('Asia/Jakarta');

        try {
            $img = EscposImage::load("public/img/rsss.png");

            if ($user == '134') {
                //lab igd
                $connector = new WindowsPrintConnector("smb://192.168.2.181/EPSON TM-T82X Receipt");
                $printer = new Printer($connector);
                function barikolom($kolom1, $kolom2, $kolom3, $kolom4)
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
                $printer->text("Nota Tindakan Pelayanan\n");
                $printer->text($nota[0]->UNIT_CETAK . " TERINTEGRASI" . "\n");
                $printer->text("PATOLOGI KLINIK" . " , " . "PATOLOGI ANATOMI" . " , " . "BANK DARAH" . "\n");

                $printer->text("----------------------------------------\n");
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




                // Membuat tabel
                $printer->initialize(); // Reset bentuk/jenis teks
                $printer->text("----------------------------------------\n");
                $printer->text(barikolom("layanan", "qty", "harsat", "subtotal"));
                $printer->text("----------------------------------------\n");
                foreach ($nota as $n) {
                    $printer->text(barikolom("$n->NAMA_TARIF", "$n->jumlah_layanan", "$n->total_layanan", "$n->grantotal_layanan"));
                }
                $printer->text("----------------------------------------\n");
                $printer->text(barikolom('', '', "Total", "$n->total_layanan_header"));
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
                // $printer->text("Nota Tindakan Pelayanan\n");
                // $printer->text($nota[0]->UNIT_CETAK . " TERINTEGRASI" . "\n");
                // $printer->text("PATOLOGI KLINIK" . " , " . "PATOLOGI ANATOMI" . " , " . "BANK DARAH" . "\n");

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
                // $printer->text(barikolom("layanan", "qty", "harsat", "subtotal"));
                // $printer->text("----------------------------------------\n");
                // foreach ($nota as $n) {
                //     $printer->text(barikolom("$n->NAMA_TARIF", "$n->jumlah_layanan", "$n->total_tarif", "$n->grantotal_layanan"));
                // }
                // $printer->text("----------------------------------------\n");
                // $printer->text(barikolom('', '', "Total", "$n->total_layanan_header"));
                // $printer->text("\n");

                // // Pesan penutup
                // $printer->initialize();
                // $printer->setJustification(Printer::JUSTIFY_LEFT);
                // $printer->text("User    : " . $nota[0]->username . "\n");
                // $printer->text("Tgl Inp : $now\n");

                // $printer->feed(5); // mencetak 5 baris kosong agar terangkat (pemotong kertas saya memiliki jarak 5 baris dari toner)
                // $printer->cut();
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
            } else {

                $connector = new WindowsPrintConnector("smb://192.168.2.190/EPSON TM-T82X Receipt6");

                $printer = new Printer($connector);
                function barikolom($kolom1, $kolom2, $kolom3, $kolom4)
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
                $printer->text("Nota Tindakan Pelayanan\n");
                $printer->text($nota[0]->UNIT_CETAK . " TERINTEGRASI" . "\n");
                $printer->text("PATOLOGI KLINIK" . " , " . "PATOLOGI ANATOMI" . " , " . "BANK DARAH" . "\n");

                $printer->text("----------------------------------------\n");
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




                // Membuat tabel
                $printer->initialize(); // Reset bentuk/jenis teks
                $printer->text("----------------------------------------\n");
                $printer->text(barikolom("layanan", "qty", "harsat", "subtotal"));
                $printer->text("----------------------------------------\n");
                foreach ($nota as $n) {
                    $printer->text(barikolom("$n->NAMA_TARIF", "$n->jumlah_layanan", "$n->total_layanan", "$n->grantotal_layanan"));
                }
                $printer->text("----------------------------------------\n");
                $printer->text(barikolom('', '', "Total", "$n->total_layanan_header"));
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
                // $printer->text("Nota Tindakan Pelayanan\n");
                // $printer->text($nota[0]->UNIT_CETAK . " TERINTEGRASI" . "\n");
                // $printer->text("PATOLOGI KLINIK" . " , " . "PATOLOGI ANATOMI" . " , " . "BANK DARAH" . "\n");

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
                // $printer->text(barikolom("layanan", "qty", "harsat", "subtotal"));
                // $printer->text("----------------------------------------\n");
                // foreach ($nota as $n) {
                //     $printer->text(barikolom("$n->NAMA_TARIF", "$n->jumlah_layanan", "$n->total_tarif" , "$n->grantotal_layanan"));

                // }
                // $printer->text("----------------------------------------\n");
                // $printer->text(barikolom('', '', "Total", "$n->total_layanan_header"));
                // $printer->text("\n");

                // // Pesan penutup
                // $printer->initialize();
                // $printer->setJustification(Printer::JUSTIFY_LEFT);
                // $printer->text("User    : " . $nota[0]->username . "\n");
                // $printer->text("Tgl Inp : $now\n");

                // $printer->feed(5); // mencetak 5 baris kosong agar terangkat (pemotong kertas saya memiliki jarak 5 baris dari toner)
                // $printer->cut();
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
            }

            // $connector = new WindowsPrintConnector("smb://192.168.2.23/EPSON TM-T82X Receipt");


        } catch (\Exception $e) {
            echo "Couldn't print to this printer: " . $e->getMessage() . "\n";
        }
    }
}
