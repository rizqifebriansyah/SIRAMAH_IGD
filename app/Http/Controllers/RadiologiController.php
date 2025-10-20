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
}
