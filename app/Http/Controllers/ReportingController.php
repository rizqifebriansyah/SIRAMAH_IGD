<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Fpdf;
use Carbon\Carbon;

class ReportingController extends Controller
{
    public function index()
    {
        $user = auth()->user()->nama;

        $menu = 'Reporting';
        return view(
            'reporting.index',
            [
                'title' => 'REPORTING',
                'menu' => $menu,
                'user' => $user
            ]
        );
    }

    //poli
    public function laporanpoli()
    {
        $poli = DB::select('SELECT kode_unit,nama_unit FROM mt_unit WHERE kelas_unit = 1');
        $menu = 'Reporting Poli';
        return view(
            'poli.laporanpoli',
            [
                'title' => 'REPORTING POLI',
                'menu' => $menu,
                'poli' => $poli
            ]
        );
    }

    public function carilaporanpoli(Request $request)
    {
        $kodeunit = $request->kodeunit;
        $tanggalvisit = $request->tanggalvisit;

        $tanggalvisit1 = $request->tanggalvisit1;
        $tindakanpoli = DB::select("CALL SP_rekap_karcis_tindakan_poliklinik('$kodeunit','$tanggalvisit','$tanggalvisit1') ");
        $sensus = DB::select("CALL SENSUS_KARCIS_POLIKLINIK('$tanggalvisit','$tanggalvisit1','$kodeunit') ");
        $sensuspoli = DB::select("CALL SENSUS_KARCIS_KONSUL_POLIKLINIK('$tanggalvisit','$tanggalvisit1','$kodeunit') ");
        $menu = 'Reporting Poli';
        return view(
            'poli.laporanpoliview',
            [
                'title' => 'REPORTING POLI',
                'menu' => $menu,
                'tindakanpoli' => $tindakanpoli,
                'sensus' => $sensus,
                'sensuspoli' => $sensuspoli


            ]
        );
    }
    public function cetakkarcistindakan(Request $request)
    {

        $kodeunit = $request->kodeunit;
        $tanggalvisit = $request->tanggalvisit;

        $tanggalvisit1 = $request->tanggalvisit1;


        // $receive_items = $this->cetakpdf($kode_header, $idhed);
        $back = [
            'kode' => 200,
            'kodeunit' => $kodeunit,
            'tanggalvisit' => $tanggalvisit,
            'tanggalvisit1' => $tanggalvisit1,

        ];
        echo json_encode($back);
        die;
    }

    public function cetakkarcistin($kodeunit, $tanggalvisit, $tanggalvisit1)
    {

        $now = Carbon::now()->format('d M Y');
        $noww = Carbon::now();

        $hasil = DB::select("CALL SP_rekap_karcis_tindakan_poliklinik('$kodeunit','$tanggalvisit', '$tanggalvisit1')");
        // dd($hasil);
        $pdf = new FPDF('L', 'mm', 'A4');
        $pdf::AddPage('L', 'letter');
        //Awal Header kertas
        $pdf::Image('public/img/kab_cirebonn.png', 10, 4, 20, 20);
        $pdf::Image('public/img/rsss.png', 250, 4, 20, 20);
        $pdf::SetFont('Times', 'B', 12);
        $pdf::SetXY(100, 5);
        $pdf::Cell(40, 10, 'PEMERINTAH KABUPATEN CIREBON');
        $pdf::SetFont('Times', 'B', 16);
        $pdf::SetXY(85, 10);
        $pdf::Cell(40, 10, 'RUMAH SAKIT UMUM DAERAH WALED');
        $pdf::SetFont('Times', '', 10);
        $pdf::SetXY(84.5, 15);
        $pdf::Cell(40, 10, 'Jl. Prabu Kiansantang No. 4 Telp. 0231 - 661126 Fax. 0231 - 664091 Cirebon');
        $pdf::SetLineWidth(1);
        $pdf::Line(10, 25, 270, 25);
        $pdf::SetLineWidth(0.25);
        $pdf::Line(10, 27, 270, 27);
        $pdf::SetFont('Times', 'B', 12);
        $pdf::SetXY(10, 30);
        $pdf::Cell(20, 10, 'REKAPITULASI KARCIS DAN KONSUL' . $hasil[0]->POLIKLINIK);
        $pdf::SetFont('Times', 'B', 12);
        $pdf::SetXY(10, 39);
        $pdf::MultiCell(70, 10, 'Periode : ' . $tanggalvisit . ' s/d ' . $tanggalvisit1);

        $pdf::SetFont('Times', 'B', 8);
        $pdf::cell(10, 10, "No", 1, "", "C");
        $pdf::cell(120, 10, "Nama Dokter", 1, "", "C");
        $pdf::cell(60, 5, "KARCIS", 1, "", "C");
        $pdf::cell(60, 5, "KONSUL", 1, "", "C");
        $pdf::Ln();
        $pdf::SetFont('Times', 'B', 8);
        $pdf::SetXY(140, 54);
        $pdf::cell(10, 5, "umum", 1, "", "C");
        $pdf::cell(10, 5, "PG", 1, "", "C");
        $pdf::cell(10, 5, "SKTM", 1, "", "C");
        $pdf::cell(10, 5, "BPJS", 1, "", "C");
        $pdf::cell(10, 5, "JR", 1, "", "C");
        $pdf::cell(10, 5, "Total", 1, "", "C");
        $pdf::cell(10, 5, "umum", 1, "", "C");
        $pdf::cell(10, 5, "PG", 1, "", "C");
        $pdf::cell(10, 5, "SKTM", 1, "", "C");
        $pdf::cell(10, 5, "BPJS", 1, "", "C");
        $pdf::cell(10, 5, "JR", 1, "", "C");
        $pdf::cell(10, 5, "Total", 1, "", "C");

        $pdf::Ln();
        $i = 1;
        $karcis = 0;
        $karcis1 = 0;
        $karcis2 = 0;
        $karcis3 = 0;
        $karcis4 = 0;
        $karcis5 = 0;
        $konsul = 0;
        $konsul1 = 0;
        $konsul2 = 0;
        $konsul3 = 0;
        $konsul4 = 0;
        $konsul5 = 0;

        foreach ($hasil as $k) {
            $pdf::SetX(10);
            $pdf::Cell(10, 10, $i++, 1, "", "C");
            $pdf::Cell(120, 10, $k->NAMA_PARAMEDIS, 1, "", "C");
            $pdf::Cell(10, 10, $k->karcis_umum, 1, "", "C");
            $pdf::Cell(10, 10, $k->karcis_kai, 1, "", "C");
            $pdf::Cell(10, 10, $k->karcis_sktm, 1, "", "C");
            $pdf::Cell(10, 10, $k->karcis_bpjs, 1, "", "C");
            $pdf::Cell(10, 10, $k->karcis_jr, 1, "", "C");
            $pdf::Cell(10, 10, $k->TOTAL_KARCIS_KUNJUNGAN, 1, "", "C");
            $pdf::Cell(10, 10, $k->konsul_umum, 1, "", "C");
            $pdf::Cell(10, 10, $k->konsul_kai, 1, "", "C");
            $pdf::Cell(10, 10, $k->konsul_sktm, 1, "", "C");
            $pdf::Cell(10, 10, $k->konsul_bpjs, 1, "", "C");
            $pdf::Cell(10, 10, $k->konsul_jr, 1, "", "C");
            $pdf::Cell(10, 10, $k->TOTAL_KONSUL_KUNJUNGAN, 1, "", "C");


            $pdf::Ln();

            $karcis = $k->karcis_umum + $karcis;
            $karcis1 = $k->karcis_kai + $karcis1;
            $karcis2 = $k->karcis_sktm + $karcis2;
            $karcis3 = $k->karcis_bpjs + $karcis3;
            $karcis4 = $k->karcis_jr + $karcis4;
            $karcis5 = $k->TOTAL_KARCIS_KUNJUNGAN + $karcis5;
            $konsul = $k->konsul_umum + $konsul;
            $konsul1 = $k->konsul_kai + $konsul1;
            $konsul2 = $k->konsul_sktm + $konsul2;
            $konsul3 = $k->konsul_bpjs + $konsul3;
            $konsul4 = $k->konsul_jr + $konsul4;
            $konsul5 = $k->TOTAL_KONSUL_KUNJUNGAN + $konsul5;
        }
        $pdf::SetFont('Times', 'B', 10);

        $pdf::SetY(100);

        $pdf::cell(10, 10, "", 0, "", "C");
        $pdf::cell(120, 5, "KARCIS", 0, "", "R");
        $pdf::cell(30, 5, "UMUM", 0, "", "L");
        $pdf::cell(15, 5, ": " . $karcis, 0, "", "L");
        $pdf::cell(15, 5, "KONSUL", 0, "", "L");

        $pdf::cell(30, 5, "UMUM", 0, "", "L");
        $pdf::cell(10, 5, ": " . $konsul, 0, "", "L");



        $pdf::Ln();
        $pdf::cell(10, 10, "", 0, "", "C");
        $pdf::cell(120, 5, "", 0, "", "R");
        $pdf::cell(30, 5, "PG RSUD WALED", 0, "", "L");
        $pdf::cell(30, 5, ": " . $karcis1, 0, "", "L");
        $pdf::cell(30, 5, "PG RSUD WALED", 0, "", "L");
        $pdf::cell(30, 5, ": " . $konsul1, 0, "", "L");

        $pdf::Ln();
        $pdf::cell(10, 10, "", 0, "", "C");
        $pdf::cell(120, 5, "", 0, "", "R");
        $pdf::cell(30, 5, "SKTM", 0, "", "L");
        $pdf::cell(30, 5, ": " . $karcis2, 0, "", "L");
        $pdf::cell(30, 5, "SKTM", 0, "", "L");
        $pdf::cell(30, 5, ": " . $konsul2, 0, "", "L");

        $pdf::Ln();
        $pdf::cell(10, 10, "", 0, "", "C");
        $pdf::cell(120, 5, "", 0, "", "R");
        $pdf::cell(30, 5, "BPJS", 0, "", "L");
        $pdf::cell(30, 5, ": " . $karcis3, 0, "", "L");
        $pdf::cell(30, 5, "BPJS", 0, "", "L");
        $pdf::cell(30, 5, ": " . $konsul3, 0, "", "L");

        $pdf::Ln();
        $pdf::cell(10, 10, "", 0, "", "C");
        $pdf::cell(120, 5, "", 0, "", "R");
        $pdf::cell(30, 5, "JR", 0, "", "L");
        $pdf::cell(30, 5, ": " . $karcis4, 0, "", "L");
        $pdf::cell(30, 5, "JR", 0, "", "L");
        $pdf::cell(30, 5, ": " . $konsul4, 0, "", "L");

        $pdf::Ln();
        $pdf::cell(10, 10, "", 0, "", "C");
        $pdf::cell(120, 5, "", 0, "", "R");
        $pdf::cell(30, 5, "TOTAL", 0, "", "L");
        $pdf::cell(30, 5, ": " . $karcis5, 0, "", "L");
        $pdf::cell(30, 5, "TOTAL", 0, "", "L");
        $pdf::cell(30, 5, ": " . $konsul5, 0, "", "L");

        $pdf::Ln();
        $pdf::SetXY(190, 140);
        $pdf::Cell(40, 10, 'WALED , ' . $now);
        $pdf::Ln();
        $pdf::SetXY(190, 145);
        $pdf::Cell(40, 10, 'PETUGAS , ' . $hasil[0]->POLIKLINIK);
        $pdf::SetXY(190, 175);
        $pdf::Cell(40, 10, '___________________________________________');
        $pdf::Ln();
        $pdf::SetFont('Times', 'I', 7);
        $pdf::SetXY(10, 180);
        $pdf::Cell(40, 10, $noww);

        $pdf::Output();
        exit;
        // AKHIR Header Kertas

    }
    public function cetaktindakan(Request $request)
    {

        $kodeunit = $request->kodeunit;
        $tanggalvisit = $request->tanggalvisit;

        $tanggalvisit1 = $request->tanggalvisit1;


        // $receive_items = $this->cetakpdf($kode_header, $idhed);
        $back = [
            'kode' => 200,
            'kodeunit' => $kodeunit,
            'tanggalvisit' => $tanggalvisit,
            'tanggalvisit1' => $tanggalvisit1,

        ];
        echo json_encode($back);
        die;
    }

    public function cetaktin($kodeunit, $tanggalvisit, $tanggalvisit1)
    {

        $now = Carbon::now()->format('d M Y');
        $noww = Carbon::now();

        $hasil = DB::select("CALL SP_rekap_karcis_tindakan_poliklinik_KELOMPOK_tindakan('$kodeunit','$tanggalvisit', '$tanggalvisit1')");
        $dokter = collect($hasil)->unique("nama_paramedis");
        // dd($hasil);
        $i = 1;

        foreach ($dokter as $t) {

            $pdf = new FPDF('L', 'mm', 'A4');
            $pdf::AddPage('L', 'letter');
            //Awal Header kertas
            $pdf::Image('public/img/kab_cirebonn.png', 10, 4, 20, 20);
            $pdf::Image('public/img/rsss.png', 250, 4, 20, 20);
            $pdf::SetFont('Times', 'B', 12);
            $pdf::SetTextColor(0, 0, 0);

            $pdf::SetXY(100, 5);
            $pdf::Cell(40, 10, 'PEMERINTAH KABUPATEN CIREBON');
            $pdf::SetFont('Times', 'B', 16);
            $pdf::SetTextColor(0, 0, 0);

            $pdf::SetXY(85, 10);
            $pdf::Cell(40, 10, 'RUMAH SAKIT UMUM DAERAH WALED');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetTextColor(0, 0, 0);

            $pdf::SetXY(84.5, 15);
            $pdf::Cell(40, 10, 'Jl. Prabu Kiansantang No. 4 Telp. 0231 - 661126 Fax. 0231 - 664091 Cirebon');
            $pdf::SetLineWidth(1);
            $pdf::Line(10, 25, 270, 25);
            $pdf::SetLineWidth(0.25);
            $pdf::Line(10, 27, 270, 27);
            $pdf::SetFont('Times', 'B', 12);
            $pdf::SetTextColor(0, 0, 0);

            $pdf::SetXY(10, 30);
            $pdf::Cell(20, 10, 'REKAPITULASI TINDAKAN' . $hasil[0]->POLIKLINIK);
            $pdf::SetFont('Times', 'B', 12);
            $pdf::SetTextColor(0, 0, 0);

            $pdf::SetXY(10, 39);
            $pdf::MultiCell(70, 10, 'Periode : ' . $tanggalvisit . ' s/d ' . $tanggalvisit1);

            $pdf::SetFont('Times', 'B', 8);
            $pdf::SetTextColor(0, 0, 0);

            $pdf::cell(10, 10, "No", 1, "", "C");
            $pdf::cell(110, 10, "Nama Dokter", 1, "", "C");
            $pdf::cell(140, 5, "TINDAKAN", 1, "", "C");
            $pdf::Ln();
            $pdf::SetFont('Times', 'B', 8);
            $pdf::SetTextColor(0, 0, 0);

            $pdf::SetXY(130, 54);
            $pdf::cell(25, 5, "umum", 1, "", "C");
            $pdf::cell(21, 5, "PG", 1, "", "C");
            $pdf::cell(21, 5, "SKTM", 1, "", "C");
            $pdf::cell(25, 5, "BPJS", 1, "", "C");
            $pdf::cell(21, 5, "JR", 1, "", "C");
            $pdf::cell(27, 5, "Total", 1, "", "C");
            $pdf::Ln();

            $pdf::SetFont('Times', 'B', 9);
            $pdf::SetTextColor(0, 0, 0);

            $pdf::SetX(10);
            $pdf::Cell(10, 10, $i++, 1, "", "C");
            $pdf::Cell(250, 10, $t->nama_paramedis, 0, "", "L");


            $pdf::Ln();
            $tindakan = 0;
            $tindakan1 = 0;
            $tindakan2 = 0;
            $tindakan3 = 0;
            $tindakan4 = 0;
            $tindakan5 = 0;
            foreach ($hasil as $k) {
                if ($t->nama_paramedis == $k->nama_paramedis) {
                    $pdf::SetX(10);
                    $pdf::Cell(120, 5, $k->NAMA_TARIF, 1, "", "L");
                    $pdf::Cell(25, 5, $k->tindakan_umum, 1, "", "R");
                    $pdf::Cell(21, 5, $k->tindakan_kai, 1, "", "R");
                    $pdf::Cell(21, 5, $k->tindakan_sktm, 1, "", "R");
                    $pdf::Cell(25, 5, $k->tindakan_bpjs, 1, "", "R");
                    $pdf::Cell(21, 5, $k->tindakan_jr, 1, "", "R");
                    $pdf::Cell(27, 5, $k->GRANDTOTAL, 1, "", "R");
                    $pdf::Ln();
                    $tindakan = $k->tindakan_umum + $tindakan;
                    $tindakan1 = $k->tindakan_kai + $tindakan1;
                    $tindakan2 = $k->tindakan_sktm + $tindakan2;
                    $tindakan3 = $k->tindakan_bpjs + $tindakan3;
                    $tindakan4 = $k->tindakan_jr + $tindakan4;
                    $tindakan5 = $k->GRANDTOTAL + $tindakan5;
                }
            }
            $pdf::SetX(10);
            $pdf::SetTextColor(0, 0, 255);

            $pdf::Cell(120, 5, "SUB TOTAL " . $t->nama_paramedis, 1, "", "C");
            $pdf::Cell(25, 5,  $tindakan, 1, "", "R");
            $pdf::Cell(21, 5, $tindakan1, 1, "", "R");
            $pdf::Cell(21, 5, $tindakan2, 1, "", "R");
            $pdf::Cell(25, 5,  $tindakan3, 1, "", "R");
            $pdf::Cell(21, 5, $tindakan4, 1, "", "R");
            $pdf::Cell(27, 5, $tindakan5, 1, "", "R");
            $pdf::Ln();
            $pdf::Ln();
        }

        $pdf::SetXY(190, 140);
        $pdf::SetTextColor(0, 0, 0);

        $pdf::Cell(40, 10, 'WALED , ' . $now);
        $pdf::Ln();
        $pdf::SetXY(190, 145);
        $pdf::Cell(40, 10, 'PETUGAS , ' . $hasil[0]->POLIKLINIK);
        $pdf::SetXY(190, 175);
        $pdf::Cell(40, 10, '___________________________________________');
        $pdf::Ln();
        $pdf::SetFont('Times', 'I', 7);
        $pdf::SetXY(10, 180);
        $pdf::Cell(40, 10, '..' . $noww);

        $pdf::Output();
        exit;
        // AKHIR Header Kertas

    }
    public function cetakpendapatan(Request $request)
    {

        $kodeunit = $request->kodeunit;
        $tanggalvisit = $request->tanggalvisit;

        $tanggalvisit1 = $request->tanggalvisit1;


        // $receive_items = $this->cetakpdf($kode_header, $idhed);
        $back = [
            'kode' => 200,
            'kodeunit' => $kodeunit,
            'tanggalvisit' => $tanggalvisit,
            'tanggalvisit1' => $tanggalvisit1,

        ];
        echo json_encode($back);
        die;
    }

    public function cetakpenn($kodeunit, $tanggalvisit, $tanggalvisit1)
    {

        $now = Carbon::now()->format('d M Y');
        $noww = Carbon::now();
        $unit = DB::select('SELECT kode_unit,nama_unit FROM mt_unit WHERE kode_unit =?', [$kodeunit]);
        $hasil = DB::select("CALL sp_laporan_pendapatan_bulanan_poliklinik('$kodeunit','$tanggalvisit', '$tanggalvisit1','')");
        // dd($hasil);
        $dokter = collect($hasil)->unique("NAMA_PARAMEDIS");
        $i = 1;

        foreach ($dokter as $t) {

            $pdf = new FPDF('L', 'mm', 'A4');
            $pdf::AddPage('L', 'letter');
            //Awal Header kertas
            $pdf::Image('public/img/kab_cirebonn.png', 10, 4, 20, 20);
            $pdf::Image('public/img/rsss.png', 250, 4, 20, 20);
            $pdf::SetFont('Times', 'B', 12);
            $pdf::SetTextColor(0, 0, 0);

            $pdf::SetXY(100, 5);
            $pdf::Cell(40, 10, 'PEMERINTAH KABUPATEN CIREBON');
            $pdf::SetFont('Times', 'B', 16);
            $pdf::SetTextColor(0, 0, 0);

            $pdf::SetXY(85, 10);
            $pdf::Cell(40, 10, 'RUMAH SAKIT UMUM DAERAH WALED');
            $pdf::SetFont('Times', '', 10);
            $pdf::SetTextColor(0, 0, 0);

            $pdf::SetXY(84.5, 15);
            $pdf::Cell(40, 10, 'Jl. Prabu Kiansantang No. 4 Telp. 0231 - 661126 Fax. 0231 - 664091 Cirebon');
            $pdf::SetLineWidth(1);
            $pdf::Line(10, 25, 270, 25);
            $pdf::SetLineWidth(0.25);
            $pdf::Line(10, 27, 270, 27);
            $pdf::SetFont('Times', 'B', 12);
            $pdf::SetTextColor(0, 0, 0);

            $pdf::SetXY(10, 30);
            $pdf::Cell(20, 10, 'REKAPITULASI PENDATAN ' . $unit[0]->nama_unit);
            $pdf::SetFont('Times', 'B', 12);
            $pdf::SetTextColor(0, 0, 0);

            $pdf::SetXY(10, 39);
            $pdf::MultiCell(70, 10, 'Periode : ' . $tanggalvisit . ' s/d ' . $tanggalvisit1);

            $pdf::SetFont('Times', 'B', 8);
            $pdf::SetTextColor(0, 0, 0);

            $pdf::cell(5, 10, "No", 1, "", "C");
            $pdf::cell(110, 10, "Nama Dokter", 1, "", "C");
            $pdf::cell(72.5, 5, "JUMLAH LAYANAN", 1, "", "C");
            $pdf::cell(72.5, 5, "JUMLAH PENDAPATAN", 1, "", "C");

            $pdf::Ln();
            $pdf::SetFont('Times', 'B', 8);
            $pdf::SetTextColor(0, 0, 0);

            $pdf::SetXY(125, 54);
            $pdf::cell(20, 5, "umum", 1, "", "C");
            $pdf::cell(20, 5, "BPJS", 1, "", "C");
            $pdf::cell(10, 5, "JR", 1, "", "C");
            $pdf::cell(22.5, 5, "Total", 1, "", "C");
            $pdf::cell(20, 5, "umum", 1, "", "C");
            $pdf::cell(20, 5, "BPJS", 1, "", "C");
            $pdf::cell(10, 5, "JR", 1, "", "C");
            $pdf::cell(22.5, 5, "Total", 1, "", "C");
            $pdf::Ln();

            $pdf::SetFont('Times', 'B', 9);
            $pdf::SetTextColor(0, 0, 0);

            $pdf::SetX(10);
            $pdf::Cell(5, 10, $i++, 1, "", "C");
            $pdf::Cell(250, 10, $t->NAMA_PARAMEDIS, 0, "", "L");


            $pdf::Ln();
            $tindakan = 0;
            $tindakan1 = 0;
            $tindakan2 = 0;
            $tindakan3 = 0;
            $tindakan4 = 0;
            $tindakan5 = 0;
            $tindakan6 = 0;
            $tindakan7 = 0;
            $f = 1;
            $z = 1;




            foreach ($hasil as $k) {
                if ($t->NAMA_PARAMEDIS == $k->NAMA_PARAMEDIS) {
                    $pdf::SetX(10);
                    $pdf::Cell(115, 5, $k->NAMA_TARIF, 1, "", "L");
                    $pdf::Cell(20, 5,  $k->qty_umum, 1, "", "R");
                    $pdf::Cell(20, 5, $k->qty_bpjs, 1, "", "R");
                    $pdf::Cell(10, 5, $k->qty_jr, 1, "", "R");
                    $pdf::Cell(22.5, 5, $k->qty_TINDAKAN, 1, "", "R");
                    $pdf::Cell(20, 5,  number_format($k->tindakan_umum * 10000, 0, ",", "."), 1, "", "R");
                    $pdf::Cell(20, 5, number_format($k->tindakan_bpjs * 10000, 0, ",", "."), 1, "", "R");
                    $pdf::Cell(10, 5, number_format($k->tindakan_jr * 10000, 0, ",", "."), 1, "", "R");
                    $pdf::Cell(22.5, 5, number_format($k->TOTAL_TINDAKAN * 10000, 0, ",", "."), 1, "", "R");

                    $pdf::Ln();
                    $tindakan = $k->qty_umum + $tindakan;
                    $tindakan1 = $k->qty_bpjs + $tindakan1;
                    $tindakan2 = $k->qty_jr + $tindakan2;
                    $tindakan3 = $k->qty_TINDAKAN + $tindakan3;

                    $tindakan4 = $k->tindakan_umum + $tindakan4;
                    $tindakan5 = $k->tindakan_bpjs + $tindakan5;
                    $tindakan6 = $k->tindakan_jr + $tindakan6;
                    $tindakan7 = $k->TOTAL_TINDAKAN + $tindakan7;
                }
            }
            $pdf::SetX(10);
            $pdf::SetTextColor(0, 0, 255);
            $pdf::Cell(115, 5, "SUB TOTAL " . $t->NAMA_PARAMEDIS, 1, "", "C");
            $pdf::Cell(20, 5,  $tindakan, 1, "", "R");
            $pdf::Cell(20, 5, $tindakan1, 1, "", "R");
            $pdf::Cell(10, 5, $tindakan2, 1, "", "R");
            $pdf::Cell(22.5, 5, $tindakan3, 1, "", "R");
            $pdf::Cell(20, 5,  number_format($tindakan4 * 10000, 0, ",", "."), 1, "", "R");
            $pdf::Cell(20, 5, number_format($tindakan5 * 10000, 0, ",", "."), 1, "", "R");
            $pdf::Cell(10, 5, number_format($tindakan6 * 10000, 0, ",", "."), 1, "", "R");
            $pdf::Cell(22.5, 5, number_format($tindakan7 * 10000, 0, ",", "."), 1, "", "R");


            $pdf::Ln();
        }
        $pdf::Ln();
        $pdf::SetTextColor(0, 0, 0);

        $pdf::cell(5, 5, "No", 1, "", "C");
        $pdf::cell(40, 5, "NAMA POLI", 1, "", "C");
        $pdf::cell(10, 5, "1", 1, "", "C");
        $pdf::cell(10, 5, "2", 1, "", "C");
        $pdf::cell(10, 5, "3", 1, "", "C");
        $pdf::cell(10, 5, "4", 1, "", "C");
        $pdf::cell(10, 5, "5", 1, "", "C");
        $pdf::cell(10, 5, "6", 1, "", "C");
        $pdf::cell(10, 5, "7", 1, "", "C");
        $pdf::cell(10, 5, "8", 1, "", "C");
        $pdf::cell(10, 5, "9", 1, "", "C");
        $pdf::cell(10, 5, "10", 1, "", "C");
        $pdf::cell(10, 5, "11", 1, "", "C");
        $pdf::cell(10, 5, "12", 1, "", "C");
        $pdf::cell(10, 5, "13", 1, "", "C");
        $pdf::cell(10, 5, "14", 1, "", "C");
        $pdf::cell(10, 5, "15", 1, "", "C");
        $pdf::cell(15, 5, "16", 1, "", "C");

        $pdf::Ln();
        $pdf::cell(5, 15, $f++, 1, "", "C");
        $pdf::cell(40, 15, $unit[0]->nama_unit, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL1, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL2, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL3, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL4, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL5, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL6, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL7, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL8, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL9, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL10, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL11, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL12, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL13, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL14, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL15, 1, "", "C");
        $pdf::cell(15, 5, $hasil[0]->TGL16, 1, "", "C");


        $pdf::Ln();
        $pdf::SetX(55);
        $pdf::cell(10, 5, "17", 1, "", "C");
        $pdf::cell(10, 5, "18", 1, "", "C");
        $pdf::cell(10, 5, "19", 1, "", "C");
        $pdf::cell(10, 5, "20", 1, "", "C");
        $pdf::cell(10, 5, "21", 1, "", "C");
        $pdf::cell(10, 5, "22", 1, "", "C");
        $pdf::cell(10, 5, "23", 1, "", "C");
        $pdf::cell(10, 5, "24", 1, "", "C");
        $pdf::cell(10, 5, "25", 1, "", "C");
        $pdf::cell(10, 5, "26", 1, "", "C");
        $pdf::cell(10, 5, "27", 1, "", "C");
        $pdf::cell(10, 5, "28", 1, "", "C");
        $pdf::cell(10, 5, "29", 1, "", "C");
        $pdf::cell(10, 5, "30", 1, "", "C");
        $pdf::cell(10, 5, "31", 1, "", "C");
        $pdf::cell(15, 5, "TOTAL", 1, "", "C");


        $pdf::Ln();
        $pdf::SetX(55);
        $pdf::cell(10, 5, $hasil[0]->TGL17, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL18, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL19, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL20, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL21, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL22, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL23, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL24, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL25, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL26, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL27, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL28, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL29, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL30, 1, "", "C");
        $pdf::cell(10, 5, $hasil[0]->TGL31, 1, "", "C");
        $pdf::cell(15, 5, $hasil[0]->TOTALPX, 1, "", "C");
        $pdf::Ln();
        $pdf::Ln();

        $pdf::cell(5, 5, "1.", 0, "", "C");
        $pdf::cell(65, 5, "Jumlah Pasien Baru", 0, "", "L");
        $pdf::cell(15, 5, "=  ". $hasil[0]->PXBARU, 0, "", "L");
        $pdf::cell(5, 5, "7.", 0, "", "C");
        $pdf::cell(65, 5, "Jumlah Pasien Terbanyak", 0, "", "L");
        $pdf::cell(15, 5, "=  ", 0, "", "L");
        $pdf::Ln();
        $pdf::cell(5, 5, "2.", 0, "", "C");
        $pdf::cell(65, 5, "Jumlah Pasien LAMA", 0, "", "L");
        $pdf::cell(15, 5, "=  ". $hasil[0]->PXLAMA, 0, "", "L");
        $pdf::cell(5, 5, "8.", 0, "", "C");
        $pdf::cell(65, 5, "Jam Mulai Pelayanan", 0, "", "L");
        $pdf::cell(15, 5, "=  ", 0, "", "L");
        $pdf::Ln();
        $pdf::cell(5, 5, "3.", 0, "", "C");
        $pdf::cell(65, 5, "Jumlah Pasien di Rujuk Rs Lain", 0, "", "L");
        $pdf::cell(15, 5, "=  ", 0, "", "L");
        $pdf::cell(5, 5, "9.", 0, "", "C");
        $pdf::cell(65, 5, "Dokter Pemberi Pelayanan", 0, "", "L");
        $pdf::cell(15, 5, "=  ", 0, "", "L");
        $pdf::Ln();
        $pdf::cell(5, 5, "4.", 0, "", "C");
        $pdf::cell(65, 5, "Jumlah Pasien Laki - laki", 0, "", "L");
        $pdf::cell(15, 5, "=  ". $hasil[0]->PXLK, 0, "", "L");
        $pdf::cell(5, 5, "", 0, "", "C");
        $pdf::cell(65, 5, "- Dokter UMUM", 0, "", "L");
        $pdf::cell(15, 5, "=  ", 0, "", "L");
        $pdf::Ln();
        $pdf::cell(5, 5, "5.", 0, "", "C");
        $pdf::cell(65, 5, "Jumlah Pasien Perempuan", 0, "", "L");
        $pdf::cell(15, 5, "=  ". $hasil[0]->PXPR, 0, "", "L");
        $pdf::cell(5, 5, " ", 0, "", "C");
        $pdf::cell(65, 5, "- Dokter Spesialis", 0, "", "L");
        $pdf::cell(15, 5, "=  ", 0, "", "L");
        $pdf::Ln();
        $pdf::cell(5, 5, "6.", 0, "", "C");
        $pdf::cell(65, 5, "Jumlah Diagnosa Keperawatan Terbanyak", 0, "", "L");
        $pdf::cell(15, 5, "=  ", 0, "", "L");
        $pdf::cell(5, 5, " ", 0, "", "C");
        $pdf::cell(65, 5, "Hari Pelayanan Dalam Sebulan", 0, "", "L");
        $pdf::cell(15, 5, "=  ", 0, "", "L");
        $pdf::Ln();
        $pdf::cell(5, 5, "", 0, "", "C");
        $pdf::cell(65, 5, "Nama Diagnosa ", 0, "", "L");
        $pdf::cell(15, 5, "=  ", 0, "", "L");
        $pdf::cell(5, 5, " ", 0, "", "C");
        $pdf::cell(65, 5, "Hari Pelayanan Hari Jum'at Dalam 1 bulan", 0, "", "L");
        $pdf::cell(15, 5, "=  ", 0, "", "L");
        $pdf::Ln();
        $pdf::SetXY(190, 140);
        $pdf::SetTextColor(0, 0, 0);

        $pdf::Cell(40, 10, 'WALED , ' . $now);
        $pdf::Ln();
        $pdf::SetXY(190, 145);
        $pdf::Cell(40, 10, 'PETUGAS , ' . $unit[0]->nama_unit);
        $pdf::SetXY(190, 175);
        $pdf::Cell(40, 10, '___________________________________________');
        $pdf::Ln();
        $pdf::SetFont('Times', 'I', 7);
        $pdf::SetXY(10, 180);
        $pdf::Cell(40, 10, '..' . $noww);

        $pdf::Output();
        exit;
        // AKHIR Header Kertas

    }
    //akhir poli
    public function rekapdokter()
    {
        $user = auth()->user()->nama;

        $menu = 'Rekap Dokter';
        return view(
            'reporting.rekapdokter',
            [
                'title' => 'Rekap Dokter',
                'menu' => $menu,
                'user' => $user
            ]
        );
    }
    public function indexkeuangan()
    {
        $user = auth()->user()->nama;

        $menu = 'Keuangan';
        return view(
            'reporting.indexkeuangan',
            [
                'title' => 'Keuangan',
                'menu' => $menu,
                'user' => $user
            ]
        );
    }

    public function carirekapdokter(Request $request)
    {
        $namadokter = $request->namadokter;
        $tanggalvisit = $request->tanggalvisit;

        $tanggalvisit1 = $request->tanggalvisit1;

        $datarekap = DB::select("CALL SP_LAPORAN_PENDAPATAN_PELAYANAN_1('$tanggalvisit','$tanggalvisit1','$namadokter')");

        // dd($datarekap);

        return view('reporting.rekapdokterdetail', [
            'datarekap' => $datarekap
        ]);
    }
    public function caridokterrekap(Request $request)
    {
        $result = DB::table('mt_paramedis')->where('nama_paramedis', 'LIKE', '%' . $request['term'] . '%')->get();
        if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => $row->nama_paramedis,
                );
            echo json_encode($arr_result);
        }
    }
}
