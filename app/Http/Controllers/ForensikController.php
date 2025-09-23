<?php

namespace App\Http\Controllers;

use App\Models\mt_kode_header;
use App\Models\ts_layanan_header;
use App\Models\ts_layanan_detail;
use App\Models\assesmenawal_dokter;
use App\Models\surat_kematian;
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

class ForensikController extends Controller
{
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

        $pasienorderkjn = DB::select("CALL SP_RIWAYAT_LAYANAN_LABORATORIUM('$unit','$now','$now','');");
        // dd($pasienorderkjn);


        return view('forensik.index', [
            'title' => 'SIRAMAH | FORENSIK',
            'unit' => $unit,
            'pasienkunjunganrs' => $pasienkunjunganrs,
            'pasienorderkjn' => $pasienorderkjn,
            'user' => $user



        ]);
        # code...

    }
    public function terpilihpasienkjn(Request $request)

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

        $layanankjn = DB::select('SELECT b.kode_tarif_detail AS kode, a.nama_tarif AS Tindakan, b.tarif_penunjang AS tarif 
        FROM mt_tarif_header a 
        INNER JOIN mt_tarif_detail b ON b.kode_tarif_header = a.kode_tarif_header 
        WHERE a.USER_INPUT_ID = "1" 
        AND  a.kelompok_tarif_id IN (33) AND b.tarif_penunjang <> 0 
        AND b.act = 1 
        AND b.kelas_tarif = ? ', [$request->kelas]);


        return view('forensik.pasienpilihan', [
            'title' => 'SIRAMAH | FORENSIK',
            'layanankjn' => $layanankjn,
            'index' => $request->index,
            'pasienkunjungan' => $pasienkunjungan,

            'diagx' => $diagx,
            'unit' => $unit,
        ]);
    }
    public function caripasienpendaftaranforensik(Request $request)
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
        return view('forensik.tablependaftaran', [
            'title' => 'SIRAMAH | FORENSIK',
            'pasienkunjunganrs' => $pasienkunjunganrs,
            'orderpoli' => $orderpoli
        ]);
    }
    public function riwayatpasienforensik(Request $request)
    {
        $riwayat = DB::select("CALL SP_RIWAYAT_LAYANAN_RADIOLOGI_PASIEN('3014','$request->norm')");
        return view('forensik.riwayatpasien', [
            'riwayat' => $riwayat
        ]);
    }
    public function suratkematian(Request $request)
    {
        $norm = $request->norm;
        $kj = $request->kodekunjungan;
        return view('forensik.suratkematian', [
            'norm' => $norm,
            'kj' => $kj
        ]);
    }
    public function returorderforensik(Request $request)
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

        $kode_header = $this->createReturHeader('RETKJN');
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
    public function datapasienforensik()
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


        return view('forensik.tablependaftaran', [
            'pasienkunjungan' => $pasienkunjungan,
            'orderpoli' => $orderpoli,


        ]);
    }
    public function ambildataforensik()
    {
        $unit = auth()->user()->unit;
        $now = Carbon::now()->format('Ymd');

        $pasienorderkjn = DB::select("CALL SP_RIWAYAT_LAYANAN_LABORATORIUM('3014','$now','$now','');");

        return view('forensik.ordertable', [
            'title' => 'SIRAMAH | FORENSIK',
            'pasienorderkjn' => $pasienorderkjn,
            'unit' => $unit,



        ]);
    }
    public function caritanggalforensik(Request $request)
    {
        $unit = auth()->user()->unit;

        $pasienorderkjn = DB::select("CALL SP_RIWAYAT_LAYANAN_LABORATORIUM('$unit','$request->tgl_entry','$request->tgl_entry1','$request->no_rm');");

        return view('forensik.ordertable', [
            'title' => 'SIRAMAH | FORENSIK',
            'pasienorderkjn' => $pasienorderkjn,
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

    public function simpansuratkematian(Request $request)
    {
        $pasien = DB::select('SELECT
        a.no_rm,
        a.nama_px,
        a.jenis_kelamin,
        a.tempat_lahir,
        a.tgl_lahir,
        fc_agama_px(a.no_rm) AS agama,
        a.no_ktp,
        b.name AS provinsi,
        c.name AS kabupaten,
        d.name AS kecamatan,
        e.name AS desa,
        a.alamat AS jalan
        FROM mt_pasien a
        INNER JOIN mt_lokasi_provinces b ON b.id = a.propinsi
        INNER JOIN mt_lokasi_regencies c ON c.id = a.kabupaten
        INNER JOIN mt_lokasi_districts d ON d.id = a.kecamatan
        INNER JOIN mt_lokasi_villages e ON e.id = a.desa
        WHERE a.no_rm =  ?', [$request->norm]);
        date_default_timezone_set('Asia/Jakarta');
        $m = date('m');
        if ($m == 1) {
            $m = 'I';
        } elseif ($m == 2) {
            $m = 'II';
        } elseif ($m == 3) {
            $m = 'III';
        } elseif ($m == 4) {
            $m = 'IV';
        } elseif ($m == 5) {
            $m = 'V';
        } elseif ($m == 6) {
            $m = 'VI';
        } elseif ($m == 7) {
            $m = 'VII';
        } elseif ($m == 8) {
            $m = 'VIII';
        } elseif ($m == 9) {
            $m = 'IX';
        } elseif ($m == 10) {
            $m = 'X';
        } elseif ($m == 11) {
            $m = 'XI';
        } elseif ($m == 12) {
            $m = 'XII';
        }

        $sk = $request->sebabkematian;
        $urut = $request->urut;
        $kode_header = '400.7.22.1' . '/' . $urut . '/' . date('d') . '/' . $m . '/' . date('y') . '/' . $sk;
        dd($kode_header);
        $user = auth()->user()->nama;
        $dt = Carbon::now()->timezone('Asia/Jakarta');

        // $data_layanan_header = [
        //     'nomor_surat' => $kode_header,
        //     'bulan_kematian' => $request->bulanmati,
        //     'tahun_kematian' => $request->tahunmati,
        //     'no_rm' => $request->norm,
        //     'kode_kunjungan' => $request->kj,
        //     'nama_px' => $pasien[0]->nama_px,
        //     'nik' => $pasien[0]->no_ktp,
        //     'jenis_kelamin' => $pasien[0]->jenis_kelamin,
        //     'tmpt_lahir' => $pasien[0]->tempat_lahir,
        //     'tgl_lahir' => $pasien[0]->tgl_lahir,
        //     'jalan' => $pasien[0]->jalan,
        //     'kelurahan' => $pasien[0]->desa,
        //     'kecamatan' => $pasien[0]->kecamatan,
        //     'kabupaten' => $pasien[0]->kabupaten,
        //     'status_kependudukan' => $request->statuskependudukan,
        //     'tgl_meninggal' => $request->tglmati,
        //     'kode_pos' => $request->kodepos,

        //     'waktu_meninggal' => $request->wktmati,
        //     'umur_hari' => $request->umurhari,
        //     'umur_bulan' => $request->umurbulan,
        //     'umur_tahun' => $request->umurtahun,
        //     'lahir_mati' => $request->lahirmati,
        //     'keadaan_mati' => $request->keadaanmati,
        //     'rawat_jam' => $request->jamrawat,
        //     'lama_hari' => $request->harirawat,
        //     'doa' => $request->doa,
        //     'diagnosis_dasar' => $request->dasardiagnosis,
        //     'dikubur' => $request->dikubur,
        //     'dikremasi' => $request->dikremasi,
        //     'transportasi_keluar_negeri' => $request->tkn,
        //     'transportasi_keluar_kota' => $request->tkk,
        //     'tgl_input' => $dt,
        //     'user' => $user
        // ];
        // $head = surat_kematian::create($data_layanan_header);
        $norm = $request->norm;
        $back = [
            'kode' => 200,
            'norm' => $norm,
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

    public function cetaksuratmati(Request $request)
    {

        $norm = $request->norm;



        // $receive_items = $this->cetakpdf($kode_header, $idhed);
        $back = [
            'kode' => 200,
            'norm' => $norm,


        ];
        echo json_encode($back);
        die;
    }
    public function cetaksuratmatii($norm)
    {

        $now = Carbon::now()->format('d M Y');
        $noww = Carbon::now();

        $hasil = DB::connection('mysql2')->select('SELECT * FROM surat_kematian WHERE no_rm =?', [$norm]);
        // dd($hasil);
        $pdf = new FPDF('P', 'mm', 'letter');
        $pdf::AddPage('P', 'letter');
        //Awal Header kertas
        $pdf::Image('public/img/kab_cirebonn.png', 10, 4, 20, 20);
        $pdf::Image('public/img/rsss.png', 184.5, 4, 20, 20);
        $pdf::SetFont('Times', 'B', 12);
        $pdf::SetXY(70, 5);
        $pdf::Cell(40, 10, 'PEMERINTAH KABUPATEN CIREBON');
        $pdf::SetFont('Times', 'B', 16);
        $pdf::SetXY(55, 10);
        $pdf::Cell(40, 10, 'RUMAH SAKIT UMUM DAERAH WALED');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(54.5, 15);
        $pdf::Cell(20, 10, 'Jl. Prabu Kiansantang No. 4 Telp. 0231 - 661126 Fax. 0231 - 664091 Cirebon');
        $pdf::SetLineWidth(1);
        $pdf::Line(10, 25, 205, 25);
        $pdf::SetLineWidth(0.25);
        $pdf::Line(10, 27, 205, 27);
        $pdf::SetFont('Times', 'BU', 18);
        $pdf::SetXY(60, 30);
        $pdf::Cell(20, 10, 'SURAT KETERANGAN KEMATIAN');
        $pdf::Ln();

        $pdf::SetFont('Times', '', 12);
        $pdf::Cell(20, 7.5, 'Nomor Surat');
        $pdf::SetX(70);
        $pdf::Cell(20, 7.5,  ':  ' . $hasil[0]->nomor_surat);
        $pdf::Ln();
        $pdf::Cell(20, 7.5, 'Bulan/Tahun Kematian');
        $pdf::SetX(70);
        $pdf::Cell(20, 7.5, ':  ' . $hasil[0]->bulan_kematian . '/' . $hasil[0]->tahun_kematian);
        $pdf::Ln();
        $pdf::Cell(20, 7.5, 'Nomor Rekam Medis');
        $pdf::SetX(70);
        $pdf::Cell(20, 10, ':  ' . $hasil[0]->no_rm);
        $pdf::Ln();
        $pdf::SetFont('Times', 'B', 14);

        $pdf::Cell(20, 7.5, 'IDENTITAS JENAZAH');
        $pdf::Ln();
        $pdf::SetFont('Times', '', 12);
        $pdf::Cell(20, 7.5, '1.');
        $pdf::SetX(15);
        $pdf::Cell(20, 7.5, 'Nama Lengkap');
        $pdf::SetX(90);
        $pdf::Cell(20, 7.5, ':  ' . $hasil[0]->nama_px);
        $pdf::Ln();
        $pdf::Cell(20, 7.5, '2.');
        $pdf::SetX(15);
        $pdf::Cell(20, 7.5, 'Nomor Induk Kependudukan (NIK)');
        $pdf::SetX(90);
        $pdf::Cell(20, 7.5, ':  ' . $hasil[0]->nik);
        $pdf::Ln();
        $pdf::Cell(20, 7.5, '3.');
        $pdf::SetX(15);
        $pdf::Cell(20, 7.5, 'Jenis Kelamin');
        $pdf::SetX(90);
        if ($hasil[0]->jenis_kelamin == 'L') {
            $pdf::Cell(20, 7.5, ':  ' . 'Laki - laki');
        } else {
            $pdf::Cell(20, 7.5, ':  ' . 'Perempuan');
        }
        $pdf::Ln();
        $pdf::Cell(20, 7.5, '4.');
        $pdf::SetX(15);
        $pdf::Cell(20, 7.5, 'Tempat/Tanggal Lahir');
        $pdf::SetX(90);
        $tgllahir = $hasil[0]->tgl_lahir;
        $tgllahir = Carbon::parse($tgllahir)->isoFormat('D-MMMM-Y');
        $pdf::Cell(20, 7.5, ':  ' . $hasil[0]->tmpt_lahir . ', ' . $tgllahir);
        $pdf::Ln();
        $pdf::Cell(20, 7.5, '5.');
        $pdf::SetX(15);
        $pdf::Cell(20, 7.5, 'Alamat Sesuai KTP/KK');
        $pdf::SetX(90);
        $pdf::Cell(20, 7.5, ':  ' . 'Jalan/Gang ' . ': ' . $hasil[0]->jalan);
        $pdf::Ln();
        $pdf::SetX(90);
        $pdf::Cell(20, 7.5, '   ' . 'Kelurahan/Desa ' . ': ' . $hasil[0]->kelurahan);
        $pdf::Ln();
        $pdf::SetX(90);
        $pdf::Cell(20, 7.5, '   ' . 'Kecamatan ' . ': ' . $hasil[0]->kecamatan);
        $pdf::Ln();
        $pdf::SetX(90);
        $pdf::Cell(20, 7.5, '   ' . 'Kabupaten ' . ': ' . $hasil[0]->kabupaten . ' Kode POS : ' . $hasil[0]->kode_pos);
        $pdf::Ln();
        $pdf::Cell(20, 7.5, '6.');
        $pdf::SetX(15);
        $pdf::Cell(20, 7.5, 'Status Kependudukan');
        $pdf::SetX(90);
        $pdf::Cell(20, 7.5, ': ' . $hasil[0]->status_kependudukan);
        $pdf::SetFont('Times', 'B', 10);
        $pdf::Ln();
        $pdf::SetX(10);
        $pdf::Cell(20, 7.5, '==================== YANG BERSANGKUTAN DINYATAKAN TELAH MENINGGAL DUNIA ====================');
        $pdf::SetFont('Times', '', 12);
        $pdf::Ln();
        $pdf::Cell(20, 7.5, '7.');
        $pdf::SetX(15);
        $pdf::Cell(20, 7.5, 'Waktu Meninggal');
        $pdf::SetX(90);
        $tglmeninggal = Carbon::parse($hasil[0]->tgl_meninggal)->isoFormat('D/MM/Y');

        $pdf::Cell(20, 7.5, ':  ' . $tglmeninggal . '  Pukul :  ' . $hasil[0]->waktu_meninggal . ' WIB');
        $pdf::Ln();
        $pdf::Cell(20, 7.5, '8.');
        $pdf::SetX(15);
        $pdf::Cell(20, 7.5, 'Umur Saat Meninggal');
        $pdf::SetX(90);
        $pdf::Cell(20, 7.5, ':  a. ' . $hasil[0]->umur_hari . '  Hari (<29 hari)                             ' . 'b. ' . $hasil[0]->umur_tahun . ' Tahun ( >= 5 tahun)');
        $pdf::Ln();
        $pdf::SetX(90);
        $pdf::Cell(20, 7.5, '   c. ' . $hasil[0]->umur_bulan . '  Bulan (> 28 hari s/d 59 Bulan)      ' . 'd. ' . ' Lahir mati : ' . $hasil[0]->lahir_mati);
        $pdf::Ln();
        $pdf::Cell(20, 7.5, '9.');
        $pdf::SetX(15);
        $pdf::Cell(20, 7.5, 'Bila yang Meninggal Wanita Umur 10 - 59 tahun, Almarhumah dalam keadaan');
        $pdf::SetX(150);
        $pdf::Cell(20, 7.5, ': ' . $hasil[0]->keadaan_mati);
        $pdf::Ln();
        $pdf::Cell(20, 7.5, '10. ');
        $pdf::SetX(15);
        $pdf::Cell(20, 7.5, '  Lama dirawat di Rumah Sakit');
        $pdf::SetX(90);
        $pdf::Cell(20, 7.5, ': a. ' . $hasil[0]->rawat_jam . ' Jam (Jika < 48 jam)     ' . 'b. ' . $hasil[0]->lama_hari . ' Hari    ' . 'c. DOA : ' . $hasil[0]->doa);
        $pdf::Ln();
        $pdf::Cell(20, 7.5, '11. ');
        $pdf::SetX(15);
        $pdf::Cell(20, 7.5, '  Dasar Diagnosis');
        $pdf::SetX(90);
        $pdf::Cell(20, 7.5, ': ' . $hasil[0]->diagnosis_dasar);
        $pdf::Ln();
        $pdf::Cell(20, 7.5, '12. ');
        $pdf::SetX(15);
        $pdf::Cell(20, 7.5, ' Rencana Pemulasaran :');
        $pdf::Ln();
        $pdf::SetX(18);
        $pdf::Cell(20, 7.5, '3. Di Kubur ');
        $pdf::SetX(45);
        $tglkubur = Carbon::parse($hasil[0]->dikubur)->isoFormat('D/MM/Y');
        $pdf::Cell(20, 7.5, ': ' . $tglkubur . '  tgl/bln/thn');
        $pdf::SetX(90);
        $pdf::Cell(20, 7.5, '3. Transportasi Keluar Kota ');
        $pdf::SetX(140);
        $tgltkk = Carbon::parse($hasil[0]->transportasi_keluar_kota)->isoFormat('D/MM/Y');
        $pdf::Cell(20, 7.5, '  : ' . $tgltkk . '  tgl/bln/thn');
        $pdf::Ln();
        $pdf::SetX(18);
        $pdf::Cell(20, 7.5, '4. Di Kremasi ');
        $pdf::SetX(45);
        $tglkremasi = Carbon::parse($hasil[0]->dikremasi)->isoFormat('D/MM/Y');
        $pdf::Cell(20, 7.5, ': ' . $tglkremasi . '  tgl/bln/thn');
        $pdf::SetX(90);
        $pdf::Cell(20, 7.5, '4. Transportasi Keluar Negeri ');
        $pdf::SetX(140);
        $tgltkn = Carbon::parse($hasil[0]->transportasi_keluar_negeri)->isoFormat('D/MM/Y');
        $pdf::Cell(20, 7.5, '  : ' . $tgltkn . '  tgl/bln/thn');
        $pdf::Ln();
        $pdf::SetXY(120, 215);
        $pdf::Cell(40, 10, 'Waled , ' . $now);
        $pdf::Ln();
        $pdf::SetXY(120, 220);
        $pdf::Cell(40, 10, 'Dokter yang menerangkan , ');
        $pdf::SetXY(120, 244);
        $pdf::Cell(40, 10, 'Nama Jelas :');
        $pdf::SetXY(120, 244);
        $pdf::Cell(40, 10, '___________________________________________');
        $pdf::SetXY(120, 249);
        $pdf::Cell(40, 10, 'Jabatan dan Cap instansi');
        $pdf::Ln();
        $pdf::SetXY(15, 220);
        $pdf::Cell(40, 10, 'Pihak yang Menerima ');
        $pdf::SetXY(15, 244);
        $pdf::Cell(40, 10, 'Nama Jelas :');
        $pdf::SetXY(15, 244);
        $pdf::Cell(40, 10, '___________________________________________');
        $pdf::SetXY(15, 249);
        $pdf::Cell(40, 10, 'Hubungan dengan keluarga');
        // $pdf::Ln();
        // $pdf::SetFont('Times', 'I', 7);
        // $pdf::SetXY(10, 249);
        // $pdf::Cell(40, 10, $noww);
        $pdf::Output();
        exit;
        // AKHIR Header Kertas

    }
    public function simpanorderkjn(Request $request)
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
                    $a = $tarif + ($tarif * (10 / 100));

                    $gt = $a - ($a * $discount / 100);
                } else {
                    $gt = $tarif + ($tarif * (10 / 100));
                }
            } elseif ($discount == $discount) {
                $gt = $tarif - ($tarif * $discount / 100);
            } else {
                $gt = $tarif;
            }
        }
        // $kode_header = DB::select("CALL GET_NOMOR_LAYANAN_HEADER('3014')");
        // $kode_header  = $kode_header[0]->no_trx_layanan;
        $kode_header = $this->createOrderHeader('KJN');
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
                    'kode_unit' => 3014,
                    'kode_tipe_transaksi' => 2,
                    'kode_penjaminx' => $request->kodepenjamin,
                    'pic' => 181,
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
                        'tgl_layanan_detail_2' => $request->tglinlay,
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
                    'kode_unit' => 3014,
                    'kode_tipe_transaksi' => 1,
                    'kode_penjaminx' => $request->kodepenjamin,
                    'pic' => 181,
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
                        'tgl_layanan_detail_2' => $request->tglinlay,
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
                'kode_unit' => 3014,
                'kode_tipe_transaksi' => 2,
                'kode_penjaminx' => $request->kodepenjamin,
                'pic' => 181,
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
                    'tgl_layanan_detail_2' => $request->tglinlay,
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
    public function createNomorSuratKematian()
    {
        $q = DB::connection('mysql2')->select('SELECT id,nomor_surat,RIGHT(nomor_surat,6) AS kd_max  FROM surat_kematian
        WHERE DATE(tgl_input) = CURDATE()
        ORDER BY id DESC
        LIMIT 1');
        $kd = "";
        if (count($q) > 0) {
            foreach ($q as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
        }
        date_default_timezone_set('Asia/Jakarta');
        return '400.7.22.1' . '/' . date('d') . '/' . date('m') . '/' . date('y');
    }
}
