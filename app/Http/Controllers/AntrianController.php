<?php


namespace App\Http\Controllers;

use App\Models\ts_antrian_igd;
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


class AntrianController extends Controller
{
    public function index()
    {

        $bed = DB::select('CALL SP_BRIDGING_SIRANAP2()');
        return view('antrian.index', [
            'title' => 'SIRAMAH_IGD ANTRIAN',
            'bed' => $bed

        ]);
    }
    public function ambildata()
    {

        $bed = DB::select('CALL SP_BRIDGING_SIRANAP2()');
        return view('antrian.index', [
            'title' => 'SIRAMAH_IGD ANTRIAN',
            'bed' => $bed

        ]);
    }

    public function ambilantrianumum()
    {
        $kode_header = $this->createantrianumum('A');
        $now = Carbon::now();

        // $id_detail = $this->createLayanandetail();
        $header = ts_antrian_igd::create([
            'no_antri' => $kode_header,

        ]);


        try {
            /**
             * Printer Harus Dishare
             * Nama Printer Contoh: Generic
             */
            // $connector = new WindowsPrintConnector("EPSON TM-T82X Receipt");
            $connector = new WindowsPrintConnector("printantrian");

            // $connector = new WindowsPrintConnector("smb://192.168.2.200/EPSON TM-T82X Receipt");
            // $connector = new WindowsPrintConnector("smb://192.168.2.23/EPSON TM-T82X Receipt");

            $printer = new Printer($connector);

            /** RATA TENGAH */
            $title = "TEST PRINTER ANTRIAN";
            $printer->initialize();
            $printer->setFont(Printer::FONT_A);
            $printer->setJustification(Printer::JUSTIFY_CENTER);
            $printer->text("\n");

            $printer->initialize();
            $printer->setFont(Printer::FONT_B);
            $printer->setJustification(Printer::JUSTIFY_CENTER);
            $printer->text($now . "\n");
            $printer->setLineSpacing(5);
            $printer->text("\n");

            $printer->initialize();
            $printer->setFont(Printer::FONT_A);
            $printer->setJustification(Printer::JUSTIFY_CENTER);
            $printer->text("Nomor Kunjungan IGD UMUM :\n");
            $printer->text("\n");

            $printer->initialize();
            $printer->setJustification(Printer::JUSTIFY_CENTER);
            $printer->setTextSize(3, 2);
            $printer->text($kode_header . "\n");
            $printer->text("\n");



            $printer->initialize();
            $printer->setFont(Printer::FONT_A);
            $printer->setJustification(Printer::JUSTIFY_CENTER);
            $printer->text("Silahkan Menunggu Antrian Anda\n");
            $printer->text("Terima Kasih\n");
            $printer->text("\n");

            $printer->cut();

            /* Close printer */
            $printer->close();
        } catch (\Exception $e) {
            echo "Couldn't print to this printer: " . $e->getMessage() . "\n";
        }
    }
    public function ambilantrianbidan()
    {
        $kode_header = $this->createantrianbidan('B');
        $now = Carbon::now();

        // $id_detail = $this->createLayanandetail();
        $header = ts_antrian_igd::create([
            'no_antri' => $kode_header,

        ]);


        try {
            /**
             * Printer Harus Dishare
             * Nama Printer Contoh: Generic
             */
            // $connector = new WindowsPrintConnector("EPSON TM-T82X Receipt");
            $connector = new WindowsPrintConnector("printantrian");

            // $connector = new WindowsPrintConnector("smb://192.168.2.200/EPSON TM-T82X Receipt");
            // $connector = new WindowsPrintConnector("smb://192.168.2.23/EPSON TM-T82X Receipt");

            $printer = new Printer($connector);

            /** RATA TENGAH */
            $title = "TEST PRINTER ANTRIAN";
            $printer->initialize();
            $printer->setFont(Printer::FONT_A);
            $printer->setJustification(Printer::JUSTIFY_CENTER);
            $printer->text("\n");

            $printer->initialize();
            $printer->setFont(Printer::FONT_B);
            $printer->setJustification(Printer::JUSTIFY_CENTER);
            $printer->text($now . "\n");
            $printer->setLineSpacing(5);
            $printer->text("\n");

            $printer->initialize();
            $printer->setFont(Printer::FONT_A);
            $printer->setJustification(Printer::JUSTIFY_CENTER);
            $printer->text("Nomor Kunjungan IGD KEBIDANAN :\n");
            $printer->text("\n");

            $printer->initialize();
            $printer->setJustification(Printer::JUSTIFY_CENTER);
            $printer->setTextSize(3, 2);
            $printer->text($kode_header . "\n");
            $printer->text("\n");



            $printer->initialize();
            $printer->setFont(Printer::FONT_A);
            $printer->setJustification(Printer::JUSTIFY_CENTER);
            $printer->text("Silahkan Menunggu Antrian Anda\n");
            $printer->text("Terima Kasih\n");
            $printer->text("\n");

            $printer->cut();

            /* Close printer */
            $printer->close();
        } catch (\Exception $e) {
            echo "Couldn't print to this printer: " . $e->getMessage() . "\n";
        }
    }
    public function createantrianumum()
    {
        $q = DB::connection('mysql2')->select('SELECT id,no_antri,RIGHT(no_antri,3) AS kd_max  FROM tp_karcis_igd
        WHERE DATE(tgl) = CURDATE()
        ORDER BY id DESC
        LIMIT 1');
        $kd = "";
        if (count($q) > 0) {
            foreach ($q as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%03s", $tmp);
            }
        } else {
            $kd = "001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return "A". date('ymd') . $kd;

    }
    public function createantrianbidan()
    {
        $q = DB::connection('mysql2')->select('SELECT id,no_antri,RIGHT(no_antri,3) AS kd_max  FROM tp_karcis_igd
        WHERE DATE(tgl) = CURDATE()
        ORDER BY id DESC
        LIMIT 1');
        $kd = "";
        if (count($q) > 0) {
            foreach ($q as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%03s", $tmp);
            }
        } else {
            $kd = "001";
        }
        date_default_timezone_set('Asia/Jakarta');
        date_default_timezone_set('Asia/Jakarta');
        return "B". date('ymd') . $kd;
    }
}
