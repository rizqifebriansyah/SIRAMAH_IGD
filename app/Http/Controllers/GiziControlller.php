<?php

namespace App\Http\Controllers;

use App\Models\mt_kode_header;
use App\Models\ts_layanan_header;
use App\Models\ts_layanan_detail;
use App\Models\ts_layanan_detail_gizi;
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

class GiziControlller extends Controller
{

    public function index()
    {
        // $unit = auth()->user()->unit;
        $user = auth()->user()->username;
        $unit = DB::select('SELECT kode_unit,nama_unit FROM mt_unit WHERE kode_unit LIKE "%20%"');

        $menu = 'gizi';


        // dd($unit);
        return view('gizi.index', [
            'title' => 'SIRAMAH | GIZI',
            'unit' => $unit,
            'user' => $user,

            'menu' => $menu

        ]);



        # code...

    }
    public function asseesmengizi()
    {
        // $unit = auth()->user()->unit;
        $user = auth()->user()->username;
        $unit = DB::select('SELECT kode_unit,nama_unit FROM mt_unit WHERE kelas_unit IN (1,2)');

        $menu = 'asseesmengizi';


        // dd($unit);
        return view('gizi.asseesmengizi', [
            'title' => 'SIRAMAH | GIZI',
            'unit' => $unit,
            'user' => $user,

            'menu' => $menu

        ]);



        # code...

    }
    public function gizibilling()
    {
        $unit = auth()->user()->unit;
        $user = auth()->user()->username;
        $now = Carbon::now()->format('Y-m-d');
        $tgl_masuk_x = date('Y-m-d', strtotime('-2 days', strtotime($now)));

        $pasienordergizi = DB::select("CALL SP_RIWAYAT_LAYANAN_LABORATORIUM('3013','$now','$now','')");
        $menu = 'gizibilling';


        // dd($unit);
        return view('gizi.gizibilling', [
            'title' => 'SIRAMAH | GIZI',
            'pasienordergizi' => $pasienordergizi,

            'unit' => $unit,
            'user' => $user,
            'menu' => $menu

        ]);



        # code...

    }
    public function monitoringmakan()
    {
        $unit = auth()->user()->unit;
        $user = auth()->user()->username;
        $now = Carbon::now()->format('Y-m-d');

        $tgl_masuk_x = date('Y-m-d', strtotime('-2 days', strtotime($now)));

        $pagi = DB::connection('mysql2')->select('SELECT * FROM ts_layanan_detail_gizi WHERE waktu_makan = "MAKAN PAGI" ');
        $siang = DB::connection('mysql2')->select('SELECT * FROM ts_layanan_detail_gizi WHERE waktu_makan = "MAKAN SIANG" ');
        $malam = DB::connection('mysql2')->select('SELECT * FROM ts_layanan_detail_gizi WHERE waktu_makan = "MAKAN MALAM" ');


        $menu = 'monitoringmakan';


        // dd($unit);
        return view('gizi.monitoringmakan', [
            'title' => 'SIRAMAH | GIZI',
            'pagi' => $pagi,
            'siang' => $siang,
            'malam' => $malam,

            'unit' => $unit,
            'user' => $user,
            'menu' => $menu

        ]);



        # code...

    }
    public function riwayatordermakan()
    {
        $unit = auth()->user()->unit;
        $user = auth()->user()->username;
        $unit = DB::select('SELECT kode_unit,nama_unit FROM mt_unit WHERE kode_unit LIKE "%20%"');

        $menu = 'riwayatordermakan';


        // dd($unit);
        return view('gizi.riwayatordermakan', [
            'title' => 'SIRAMAH | GIZI',


            'unit' => $unit,
            'user' => $user,
            'menu' => $menu

        ]);



        # code...

    }

    public function assesgizi(Request $request)
    {
        $kj = $request->kj;
        $unit = $request->unit;
        $norm = $request->norm;
        $ttv = DB::select('SELECT tekanan_darah, frekuensi_nafas, keadaan_umum, kesadaran, frekuensi_nadi, suhu, berat_badan, umur FROM erm_cppt_perawat WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);

        $pasien = DB::select("CALL SP_PANGGIL_PASIEN_RAWAT_INAP_PER_UNIT_KUNJUNGAN_AKTIF_NEW('$unit','$norm','');");
        // dd($pasien);

        return view('gizi.formassesgizi', [
            'title' => 'SIRAMAH | GIZI',
            'pasien' => $pasien,
            'ttv' => $ttv,
            'unit' => $unit


        ]);
    }

    public function caripasienranap(Request $request)
    {
        $unit = $request->unit;
        $time = Carbon::now()->format('H:i:s');

        $pasienranap = DB::select("CALL SP_PANGGIL_PASIEN_RAWAT_INAP_PER_UNIT_KUNJUNGAN_AKTIF_NEW('$unit','','');");
        // dd($time);

        return view('gizi.pasienranap', [
            'title' => 'SIRAMAH | GIZI',
            'pasienranap' => $pasienranap,
            'time' => $time,
            'unit' => $unit




        ]);
    }
    public function caripasienranapgizi(Request $request)
    {
        $unit = $request->unit;

        $pasienranap = DB::select("CALL SP_PANGGIL_PASIEN_RAWAT_INAP_PER_UNIT_KUNJUNGAN_AKTIF_NEW('$unit','','');");
        // dd($pasienranap);

        return view('gizi.pasienranapgizi', [
            'title' => 'SIRAMAH | GIZI',
            'pasienranap' => $pasienranap,
            'unit' => $unit




        ]);
    }
    public function cariordergizi(Request $request)
    {

        $pasienordergizi = DB::select("CALL SP_RIWAYAT_LAYANAN_LABORATORIUM('3013','$request->tgl_entry','$request->tgl_entry1','')");


        return view('gizi.riwayatordergizi', [
            'title' => 'SIRAMAH | GIZI',
            'pasienordergizi' => $pasienordergizi,




        ]);
    }

    public function cariordermakan(Request $request)
    {
        $orderhariini = DB::connection('mysql2')->select('SELECT * FROM ts_layanan_detail_gizi WHERE waktu_makan = ? AND kode_unit = ?', [$request->waktumakanorder, $request->namaunit]);

        // dd($orderhariini);

        return view('gizi.tableordermakan', [
            'title' => 'SIRAMAH | GIZI',
            'orderhariini' => $orderhariini,




        ]);
    }

    public function prosesorder(Request $request)
    {
        // order makan dari ruangan
        $now = Carbon::now()->format('Y-m-d H:i:s');

        try {
            $update = DB::connection('mysql2')->select('UPDATE ts_layanan_detail_gizi SET status = 2 , tgl_proses = ? WHERE no_rm = ? AND kode_kunjungan = ? AND id = ?', [$now, $request->norm, $request->kj, $request->id]);
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
    public function antarorder(Request $request)
    {
        // order makan dari ruangan
        $now = Carbon::now()->format('Y-m-d H:i:s');

        try {
            $update = DB::connection('mysql2')->select('UPDATE ts_layanan_detail_gizi SET status = 3 , tgl_antar = ? WHERE no_rm = ? AND kode_kunjungan = ? AND id = ?', [$now, $request->norm, $request->kj, $request->id]);
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
    public function selesaiorder(Request $request)
    {
        // order makan dari ruangan
        $now = Carbon::now()->format('Y-m-d H:i:s');

        try {
            $update = DB::connection('mysql2')->select('UPDATE ts_layanan_detail_gizi SET status = 4 , tgl_selesai = ? WHERE no_rm = ? AND kode_kunjungan = ? AND id = ?', [$now, $request->norm, $request->kj, $request->id]);
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
    public function simpanordergizi(Request $request)
    {
        // order makan dari ruangan
        $now = Carbon::now()->format('Y-m-d H:i:s');


        try {
            $formordergizi = json_decode($_POST['formordergizi'], true);
            foreach ($formordergizi as $nama) {
                $index = $nama['name'];
                $value = $nama['value'];
                $dataSet[$index] = $value;
                if ($index == 'bentuk1') {
                    $ordergizi[] = $dataSet;
                }
            }

            foreach ($ordergizi as $p) {
                $pasien = DB::select("CALL SP_PANGGIL_PASIEN_RAWAT_INAP_PER_UNIT_KUNJUNGAN_AKTIF_NEW('$p[unit]','$p[norm]','');");
                foreach ($pasien as $pa) {
                    $savedetail = [
                        'no_rm' => $pa->no_rm,
                        'kode_kunjungan' => $pa->kode_kunjungan,
                        'bentuk' => $p['bentuk'],
                        'waktu_makan' => $p['waktumakan'],
                        'kode_unit' => $p['unit'],
                        'dokter' => $pa->Dokter,
                        'kamar' => $pa->kamar,
                        'kelas' => $pa->kelas,
                        'no_bed' => $pa->no_bed,
                        'nama_penjamin' => $pa->nama_penjamin,
                        'nama_pasien' => $pa->nama_px,
                        'tgl_input' => $now,
                        'status' => 1


                    ];
                    $ordergizi = ts_layanan_detail_gizi::create($savedetail);
                }
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
    public function simpanorderahligizi(Request $request)
    {
        // order makan dari ruangan
        $now = Carbon::now()->format('Y-m-d H:i:s');


        try {
            $formorderahligizi = json_decode($_POST['formorderahligizi'], true);
            // dd($formorderahligizi);
            foreach ($formorderahligizi as $nama) {
                $index = $nama['name'];
                $value = $nama['value'];
                $dataSet[$index] = $value;
                if ($index == 'diet1') {
                    $ordergizi[] = $dataSet;
                }
            }

            foreach ($ordergizi as $p) {
                    $diet = $p['diet'];
                    $kodetail = $p['kodetail'];
                    $diet1 = $p['diet1'];
                    $ordergizi = DB::connection('mysql2')->select('UPDATE ts_layanan_detail_gizi SET diit = ?, diit1 = ? WHERE id = ? ', [$diet, $diet1, $kodetail]);
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
    public function simpanorderruangan(Request $request)
    {
        // order makan dari ruangan
        $now = Carbon::now()->format('Y-m-d H:i:s');


        try {
            $formordergiziruangan = json_decode($_POST['formordergiziruangan'], true);


            foreach ($formordergiziruangan as $nama) {
                $index = $nama['name'];
                $value = $nama['value'];
                $dataSet[$index] = $value;
                if ($index == 'diet1') {
                    $ordergizi[] = $dataSet;
                }
            }

            foreach ($ordergizi as $p) {
                $pasien = DB::select("CALL SP_PANGGIL_PASIEN_RAWAT_INAP_PER_UNIT_KUNJUNGAN_AKTIF_NEW('2011','$p[norm]','');");
                foreach ($pasien as $pa) {
                    $savedetail = [
                        'no_rm' => $pa->no_rm,
                        'kode_kunjungan' => $pa->kode_kunjungan,
                        'diit' => $p['diet'],
                        'waktu_makan' => $p['waktumakan'],
                        'kode_unit' => $pa->kode_unit,
                        'dokter' => $pa->Dokter,
                        'kamar' => $pa->kamar,
                        'kelas' => $pa->kelas,
                        'no_bed' => $pa->no_bed,
                        'nama_penjamin' => $pa->nama_penjamin,
                        'nama_pasien' => $pa->nama_px,
                        'tgl_input' => $now,
                        'status' => 1


                    ];
                    $ordergizi = ts_layanan_detail_gizi::create($savedetail);
                }
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
    public function detailordergizi(Request $request)
    {
        $kj = $request->kj;
        $norm = $request->norm;
        $waktumakan = $request->waktumakan;

        $detail = DB::connection('mysql2')->select('SELECT * FROM ts_layanan_detail_gizi WHERE kode_kunjungan = ? AND waktu_makan = ? AND no_rm = ?', [$request->kj, $request->waktumakan, $request->norm]);
        // dd($detail);

        return view('gizi.detailpasienordergizi', [
            'detail' => $detail

        ]);
    }
}
