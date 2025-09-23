<?php

namespace App\Http\Controllers;

use App\Models\mt_kode_header;
use App\Models\ts_layanan_header;
use App\Models\ts_layanan_detail;
use App\Models\assesmenawal_dokter;
use App\Models\tb_stok_darah;
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


class BankdarahController extends Controller
{
    public function index()
    {
        $unit = auth()->user()->unit;
        $user = auth()->user()->username;
        $now = Carbon::now()->format('Y-m-d');
        $tgl_masuk_x = date('Y-m-d', strtotime('-2 days', strtotime($now)));
        $stok = DB::select('SELECT 
        a.nomor_kantong,
        a.goldar,
        a.stock_current,
        a.jenis,
        a.stock_in,
        a.stock_out,
        a.tanggal_exp
        FROM tb_stok_darah a
        ');
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

        // $pasienorderbnd = DB::select("CALL SP_RIWAYAT_LAYANAN_LABORATORIUM('3011','$now','$now','');");
        $pasienorderbnd = DB::select("CALL SP_RIWAYAT_LAYANAN_LABORATORIUM('3011','$now','$now','');");


        return view('bankdarah.index', [
            'title' => 'SIRAMAH | BANK DARAH',
            'unit' => $unit,
            'pasienkunjunganrs' => $pasienkunjunganrs,
            'pasienorderbnd' => $pasienorderbnd,
            'user' => $user,
            'stok' => $stok



        ]);
        # code...

    }
    public function riwayatpasienbankdarah(Request $request)
    {
        $riwayat = DB::select("CALL SP_RIWAYAT_LAYANAN_RADIOLOGI_PASIEN('3011','$request->norm')");
        return view('bankdarah.riwayatpasien', [
            'riwayat' => $riwayat
        ]);
    }

    public function caritanggalbnd(Request $request)
    {
        $unit = auth()->user()->unit;

        $pasienorderbnd = DB::select("CALL SP_RIWAYAT_LAYANAN_LABORATORIUM('3011','$request->tgl_entry','$request->tgl_entry1','$request->no_rm');");

        return view('bankdarah.ordertable', [
            'title' => 'SIRAMAH | BANK DARAH',
            'pasienorderbnd' => $pasienorderbnd,
            'unit' => $unit,
        ]);
    }
    public function caripasienpendaftaranbnd(Request $request)
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
        return view('bankdarah.tablependaftaran', [
            'title' => 'SIRAMAH | BANK DARAH',
            'pasienkunjunganrs' => $pasienkunjunganrs,
            'orderpoli' => $orderpoli
        ]);
    }
    public function terpilihpasienbnd(Request $request)

    {
        $all = $request->all();
        $unit = auth()->user()->unit;
        $diagx = $request->diagx;
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

        $layananbnd = DB::select('SELECT b.kode_tarif_detail AS kode, a.nama_tarif AS Tindakan, b.tarif_penunjang AS tarif 
FROM mt_tarif_header a 
INNER JOIN mt_tarif_detail b ON b.kode_tarif_header = a.kode_tarif_header 
WHERE a.USER_INPUT_ID ="1" 
AND  a.kelompok_tarif_id IN (39) AND b.tarif_penunjang <> 0 
AND b.act = 1 
AND b.kelas_tarif = ?', [$request->kelas]);


        return view('bankdarah.pasienpilihan', [
            'title' => 'SIRAMAH | BANK DARAH',
            'layananbnd' => $layananbnd,
            'index' => $request->index,
            'pasienkunjungan' => $pasienkunjungan,

            'diagx' => $diagx,
            'unit' => $unit,
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
    public function returorderbnd(Request $request)
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

        $kode_header = $this->createReturHeader('RETBND');
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
            'pic' => 100,
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
            'qty_Awal' => 1,
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
    public function datapasienbankdarah()
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


        return view('bankdarah.tablependaftaran', [
            'pasienkunjungan' => $pasienkunjungan,
            'orderpoli' => $orderpoli,


        ]);
    }
    public function ambildatabankdarah()
    {
        $unit = auth()->user()->unit;
        $now = Carbon::now()->format('Ymd');

        $pasienorderbnd = DB::select("CALL SP_RIWAYAT_LAYANAN_LABORATORIUM('3011','$now','$now','');");

        return view('bankdarah.ordertable', [
            'title' => 'SIRAMAH | BANK DARAH',
            'pasienorderbnd' => $pasienorderbnd,
            'unit' => $unit,



        ]);
    }
    public function caridokterbnd(Request $request)
    {
        $namadokter = $request->namadokter;
        $dokter = DB::select("CALL sp_cari_dokter_rajal_nama_ad('$namadokter')");

        return view('bankdarah.detaildokter', [
            'title' => 'SIRAMAH | BANK DARAH',
            'dokter' => $dokter
        ]);
        # code...

    }

    public function simpanstokdarah(Request $request)
    {
        $user = auth()->user()->username;
        $all = $request->goldar;
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
        // $kode_header = DB::select("CALL GET_NOMOR_LAYANAN_HEADER('3011')");
        // $kode_header  = $kode_header[0]->no_trx_layanan;
        $kode_header = $this->createOrderHeader('B');
        $header = mt_kode_header::create([
            'kode_header' => $kode_header,
            'tgl_header' => date('Y-m-d')
        ]);

        $stockin = $dataSet['qty_darah'];
        $goldar = $dataSet['golongan_darah'];
        $cek = DB::select('SELECT a.stock_in, a.stock_current FROM tb_stok_darah a WHERE a.goldar = ?', [$goldar]);
        $stckin = $cek[0]->stock_in;
        $stckcrnt = $cek[0]->stock_current;

        if ($stckin == null && $stckcrnt == null) {

            $input_stok = DB::select('UPDATE tb_stok_darah a SET a.stock_in = ?, a.stock_current = ? WHERE a.goldar = ?', [$stockin, $stockin, $goldar]);
        } else {
            // $current = $cek[0]->stock_in;
            $hitungin = $stockin + $stckin;
            $hitungcrnt = $stckcrnt + $stockin;
            $input_stok = DB::select('UPDATE tb_stok_darah a SET a.stock_in = ?, a.stock_current = ? WHERE a.goldar = ?', [$hitungin, $hitungcrnt, $goldar]);
        }
        // $input_stok = DB::select('UPDATE tb_stok_darah a SET a.stock_in = ? WHERE a.goldar = ?', [$stockin, $goldar]);
        // $input_stok = [
        //     'nomor_kantong' => $kode_header,
        //     'goldar' => $dataSet['golongan_darah'],
        //     'jenis' => $dataSet['jenis_darah'],
        //     'tanggal_aftap' => $now,
        //     'stock_in' => $dataSet['qty_darah'],
        //     'tanggal_exp' => $dataSet['tanggal_exp'],
        //     'tanggal_input' => $now,
        //     'status' => 1,
        //     'user' => $user,
        //     'status_reserved' => 1

        // ];
        // $head = tb_stok_darah::create($input_stok);

        $back = [
            'kode' => 200,
            'message' => ''
        ];
        echo json_encode($back);
        die;
    }
    public function ambilstok()
    {
        $unit = auth()->user()->unit;
        $now = Carbon::now()->format('Ymd');

        $stok = DB::select('SELECT 
        a.nomor_kantong,
        a.goldar,
        a.stock_current,
        a.jenis,
        a.stock_in,
        a.stock_out,
        a.tanggal_exp
        FROM tb_stok_darah a
        ');

        return view('bankdarah.tablestokdarah', [
            'title' => 'SIRAMAH | BANK DARAH',
            'stok' => $stok,
            'unit' => $unit,



        ]);
    }
    public function simpanorderbnd(Request $request)
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
        $qtydarah = $request->qtydarah;

        $ukirim = $kodeunit . ' | ' . $namaunit . ' | ' . $kelas;
        $goldarr = $goldar . ' | ' . $qtydarah;

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
            // $kode_header = DB::select("CALL GET_NOMOR_LAYANAN_HEADER('3011')");
            // $kode_header  = $kode_header[0]->no_trx_layanan;
            $kode_header = $this->createOrderHeader('BND');
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
                        'kode_unit' => 3011,
                        'kode_tipe_transaksi' => 2,
                        'kode_penjaminx' => $request->kodepenjamin,
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
                            'tagihan_pribadi' => ($arr['tarif'] * $arr['qty']) + $cyt - $disc,
                            'tgl_layanan_detail_2' => $now,
                            'kode_barang' => $goldarr,

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
                        'kode_unit' => 3011,
                        'kode_tipe_transaksi' => 1,
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
                            'kode_barang' => $goldarr,

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
                    'kode_unit' => 3011,
                    'kode_tipe_transaksi' => 2,
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
                        'kode_barang' => $goldarr,
                        'row_id_header' => $head['id']
                    ];
                    $ts_layanan_detail = ts_layanan_detail::create($savedetail);
                }
            }

            $kode_header = $ts_layanan_detail['kode_layanan_header'];
            $idhed = $ts_layanan_detail['row_id_header'];
            $update = DB::select('UPDATE ts_layanan_header_order SET status_order = 2
        WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $norm]);
            $cek = DB::select('SELECT a.stock_out, a.stock_current FROM tb_stok_darah a WHERE a.goldar = ?', [$goldar]);
            $stckout = $cek[0]->stock_out;
            $stckcrnt = $cek[0]->stock_current;

            if ($stckout == null) {
                $hitungcrnt = $stckcrnt - $qtydarah;

                $input_stok = DB::select('UPDATE tb_stok_darah a SET a.stock_out = ?, a.stock_current = ? WHERE a.goldar = ?', [$qtydarah, $hitungcrnt, $goldar]);
            } else {
                // $current = $cek[0]->stock_in;
                $hitungin = $qtydarah + $stckout;
                $hitungcrnt = $stckcrnt - $qtydarah;
                $input_stok = DB::select('UPDATE tb_stok_darah a SET a.stock_out = ?, a.stock_current = ? WHERE a.goldar = ?', [$hitungin, $hitungcrnt, $goldar]);
            }
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
    // public function simpanorderbnd(Request $request)
    // {
    //     $kodepenjamin = $request->kodepenjamin;
    //     $kelasunit = $request->kelasunit;
    //     $norm  = $request->norm;
    //     $namaunit = $request->namaunit;
    //     $unit = auth()->user()->unit;
    //     $idsimrs = auth()->user()->id_simrs;
    //     $kelas = $request->kelas;
    //     $kodeunit = $request->kodeunit;
    //     $goldar = $request->goldar;
    //     $ukirim = $kodeunit . ' | ' . $namaunit . ' | ' . $kelas;
    //     $sp = 'OPN';
    //     $dt = Carbon::now()->timezone('Asia/Jakarta');
    //     $date = $dt->toDateString();
    //     $time = $dt->toTimeString();
    //     $now = $date . ' ' . $time;
    //     $data = json_decode($_POST['data'], true);
    //     foreach ($data as $nama) {
    //         $index = $nama['name'];
    //         $value = $nama['value'];
    //         $dataSet[$index] = $value;
    //         if ($index == 'cyto') {
    //             $arrayindex[] = $dataSet;
    //         }
    //     }
    //     $count = count($arrayindex);
    //     $sum = 0;
    //     foreach ($arrayindex as $arr) {
    //         if ($arr['cyto'] == 1) {
    //             $cyt = $arr['tarif'] * (50 / 100);
    //         } else {
    //             $cyt = 0;
    //         }
    //         if ($arr['disc'] == 0) {
    //             $disc = 0;
    //         } else {
    //             $disc = ($arr['tarif'] * $arr['disc'] / 100);
    //         }
    //         $ttl = ($arr['tarif'] * $arr['qty']) + $cyt - $disc;
    //         $trf = array($ttl);
    //         $gt =
    //             $sum += array_sum($trf);
    //     }
    //     try {
    //         // $kode_header = DB::select("CALL GET_NOMOR_LAYANAN_HEADER('3011')");
    //         // $kode_header  = $kode_header[0]->no_trx_layanan;
    //         $kode_header = $this->createOrderHeader('BND');
    //         $header = mt_kode_header::create([
    //             'kode_header' => $kode_header,
    //             'tgl_header' => date('Y-m-d')
    //         ]);


    //         if ($kodepenjamin == 'P01') {
    //             if ($kelasunit == '2') {
    //                 $data_layanan_header = [
    //                     'kode_layanan_header' => $kode_header,
    //                     'tgl_entry' => $now,
    //                     'kode_kunjungan' => $request->kodekunjungan,
    //                     'qty_header' => $dataSet['qty'],
    //                     'keterangan' => 'PENDING',
    //                     'unit_pengirim' => $ukirim,
    //                     'diagnosa' => $request->diagnosa,
    //                     'dok_kirim' => $request->dokter,
    //                     'total_layanan' => $gt,
    //                     'tagihan_pribadi' => $gt,
    //                     'diskon_global' => $dataSet['disc'],
    //                     'status_pembayaran' => $sp,
    //                     'status_layanan' => 1,
    //                     'kode_unit' => 3011,
    //                     'kode_tipe_transaksi' => 2,
    //                     'kode_penjaminx' => $request->kodepenjamin,
    //                     'pic' => $idsimrs,
    //                 ];
    //                 $head = ts_layanan_header::create($data_layanan_header);
    //                 $id_detail = $this->createLayanandetail();
    //                 foreach ($arrayindex as $arr) {

    //                     if ($arr['cyto'] == 1) {
    //                         $cyt = $arr['tarif'] * (50 / 100);
    //                     } else {
    //                         $cyt = 0;
    //                     }
    //                     if ($arr['disc'] == 0) {
    //                         $disc = 0;
    //                     } else {
    //                         $disc = ($arr['tarif'] * $arr['disc'] / 100);
    //                     }
    //                     $savedetail = [
    //                         'id_layanan_detail' => $id_detail,
    //                         'kode_layanan_header' => $kode_header,
    //                         'kode_tarif_detail' =>  $arr['kodelayanan'],
    //                         'total_tarif' => $arr['tarif'],
    //                         'jumlah_layanan' => $arr['qty'],
    //                         'diskon_dokter' => $arr['disc'],
    //                         'cyto' => $arr['cyto'],
    //                         'total_layanan' => $arr['tarif'],
    //                         'grantotal_layanan' => ($arr['tarif'] * $arr['qty']) + $cyt - $disc,
    //                         'status_layanan_detail' => 'OPN',
    //                         'tgl_layanan_detail' => $now,
    //                         'tagihan_pribadi' => ($arr['tarif'] * $arr['qty']) + $cyt - $disc,
    //                         'tgl_layanan_detail_2' => $now,
    //                         'kode_barang' => $goldar,

    //                         'row_id_header' => $head['id']
    //                     ];
    //                     $ts_layanan_detail = ts_layanan_detail::create($savedetail);
    //                 }
    //             } else {

    //                 $data_layanan_header = [
    //                     'kode_layanan_header' => $kode_header,
    //                     'tgl_entry' => $now,
    //                     'kode_kunjungan' => $request->kodekunjungan,
    //                     'status_pembayaran' => $sp,
    //                     'keterangan' => 'PENDING',
    //                     'qty_header' => $dataSet['qty'],
    //                     'unit_pengirim' => $ukirim,
    //                     'diagnosa' => $request->diagnosa,
    //                     'dok_kirim' => $request->dokter,
    //                     'total_layanan' => $gt,
    //                     'tagihan_pribadi' => $gt,
    //                     'diskon_global' => $dataSet['disc'],
    //                     'status_layanan' => 1,
    //                     'kode_unit' => 3011,
    //                     'kode_tipe_transaksi' => 1,
    //                     'kode_penjaminx' => $request->kodepenjamin,
    //                     'pic' => $idsimrs,
    //                 ];
    //                 $head = ts_layanan_header::create($data_layanan_header);
    //                 $id_detail = $this->createLayanandetail();
    //                 foreach ($arrayindex as $arr) {
    //                     if ($arr['cyto'] == 1) {
    //                         $cyt = $arr['tarif'] * (50 / 100);
    //                     } else {
    //                         $cyt = 0;
    //                     }
    //                     if ($arr['disc'] == 0) {
    //                         $disc = 0;
    //                     } else {
    //                         $disc = ($arr['tarif'] * $arr['disc'] / 100);
    //                     }
    //                     $savedetail = [
    //                         'id_layanan_detail' => $id_detail,
    //                         'kode_layanan_header' => $kode_header,
    //                         'kode_tarif_detail' =>  $arr['kodelayanan'],
    //                         'total_tarif' => $arr['tarif'],
    //                         'jumlah_layanan' => $arr['qty'],
    //                         'diskon_dokter' => $arr['disc'],
    //                         'cyto' => $arr['cyto'],
    //                         'total_layanan' => $arr['tarif'],
    //                         'grantotal_layanan' => ($arr['tarif'] * $arr['qty']) + $cyt - $disc,
    //                         'status_layanan_detail' => 'OPN',
    //                         'tgl_layanan_detail' => $now,
    //                         'tagihan_pribadi' => ($arr['tarif'] * $arr['qty']) + $cyt - $disc,
    //                         'tgl_layanan_detail_2' => $now,
    //                         'kode_barang' => $goldar,

    //                         'row_id_header' => $head['id']
    //                     ];
    //                     $ts_layanan_detail = ts_layanan_detail::create($savedetail);
    //                 }
    //             }
    //         } else {
    //             $data_layanan_header = [
    //                 'kode_layanan_header' => $kode_header,
    //                 'tgl_entry' => $now,
    //                 'kode_kunjungan' => $request->kodekunjungan,
    //                 'status_pembayaran' => $sp,
    //                 'keterangan' => 'PENDING',
    //                 'qty_header' => $dataSet['qty'],
    //                 'unit_pengirim' => $ukirim,
    //                 'diagnosa' => $request->diagnosa,
    //                 'dok_kirim' => $request->dokter,
    //                 'total_layanan' => $gt,
    //                 'tagihan_penjamin' => $gt,
    //                 'diskon_global' => $dataSet['disc'],
    //                 'status_layanan' => 2,
    //                 'kode_unit' => 3011,
    //                 'kode_tipe_transaksi' => 2,
    //                 'kode_penjaminx' => $request->kodepenjamin,
    //                 'pic' => $idsimrs,
    //             ];
    //             $head = ts_layanan_header::create($data_layanan_header);
    //             $id_detail = $this->createLayanandetail();
    //             foreach ($arrayindex as $arr) {
    //                 if ($arr['cyto'] == 1) {
    //                     $cyt = $arr['tarif'] * (50 / 100);
    //                 } else {
    //                     $cyt = 0;
    //                 }
    //                 if ($arr['disc'] == 0) {
    //                     $disc = 0;
    //                 } else {
    //                     $disc = ($arr['tarif'] * $arr['disc'] / 100);
    //                 }
    //                 $savedetail = [
    //                     'id_layanan_detail' => $id_detail,
    //                     'kode_layanan_header' => $kode_header,
    //                     'kode_tarif_detail' =>  $arr['kodelayanan'],
    //                     'total_tarif' => $arr['tarif'],
    //                     'jumlah_layanan' => $arr['qty'],
    //                     'diskon_dokter' => $arr['disc'],
    //                     'cyto' => $arr['cyto'],
    //                     'total_layanan' => $arr['tarif'],
    //                     'grantotal_layanan' => ($arr['tarif'] * $arr['qty']) + $cyt - $disc,
    //                     'status_layanan_detail' => 'OPN',
    //                     'tgl_layanan_detail' => $now,
    //                     'tagihan_penjamin' => ($arr['tarif'] * $arr['qty']) + $cyt - $disc,
    //                     'tgl_layanan_detail_2' => $now,
    //                     'kode_barang' => $goldar,
    //                     'row_id_header' => $head['id']
    //                 ];
    //                 $ts_layanan_detail = ts_layanan_detail::create($savedetail);
    //             }
    //         }

    //         $kode_header = $ts_layanan_detail['kode_layanan_header'];
    //         $idhed = $ts_layanan_detail['row_id_header'];
    //         $update = DB::select('UPDATE ts_layanan_header_order SET status_order = 2
    //     WHERE kode_kunjungan = ? AND no_rm = ?', [$request->kode_kunjungan, $norm]);
    //     } catch (\Exception $e) {
    //         $back = [
    //             'kode' => 200,
    //             'message' => $e->getMessage()
    //         ];
    //         echo json_encode($back);
    //         die;
    //     }



    //     // $receive_items = $this->cetakpdf($kode_header, $idhed);
    //     $back = [
    //         'kode' => 200,
    //         'idhed' => $idhed,
    //         'kode_header' => $kode_header,
    //     ];
    //     echo json_encode($back);
    //     die;


    //     $back = [
    //         'kode' => 200,
    //         'message' => ''
    //     ];
    //     echo json_encode($back);
    //     die;
    // }


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
    public function printulangbnd(Request $request)
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
    public function bndnotaorder($kode_header, $idhed)
    {
        $unit = auth()->user()->unit;
        $nota = DB::select("CALL SP_NOTA_TINDAKAN_NEW('$kode_header','$idhed')");
        $now = Carbon::now();


        date_default_timezone_set('Asia/Jakarta');

        try {

            $img = EscposImage::load("public/img/rsss.png");
            // $connector = new WindowsPrintConnector("EPSON TM-T82X Receipt");

            $connector = new WindowsPrintConnector("smb://192.168.2.183/EPSON TM-T82X Receipt");
            // $connector = new WindowsPrintConnector("smb://192.168.2.23/EPSON TM-T82X Receipt");

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
            $printer->text("LABORATORIUM" . " TERINTEGRASI" . "\n");
            $printer->text("- PATOLOGI KLINIK" . " , " . "PATOLOGI ANATOMI" . " , " . "BANK DARAH -" . "\n");
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
            $printer->initialize();

            $printer->selectPrintMode(Printer::MODE_DOUBLE_HEIGHT); // Setting teks menjadi lebih besar
            $printer->setJustification(Printer::JUSTIFY_CENTER); // Setting teks menjadi rata tengah
            $printer->graphics($img);
            $printer->text("\n");
            $printer->text("Nota Tindakan Pelayanan\n");
            $printer->text($nota[0]->UNIT_CETAK . " TERINTEGRASI" . "\n");
            $printer->text("PATOLOGI KLINIK" . " , " . "PATOLOGI ANATOMI" . " , " . "BANK DARAH" . "\n");

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
            $printer->text("User    : " . $nota[0]->username . "\n");
            $printer->text("Tgl Inp : $now\n");

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
}
