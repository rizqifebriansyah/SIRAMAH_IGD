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
        $unit = auth()->user()->unit;
        $user = auth()->user()->username;
        $now = Carbon::now()->format('Y-m-d');
        $tgl_masuk_x = date('Y-m-d', strtotime('-2 days', strtotime($now)));

        $pasienorderlab = DB::select("CALL SP_RIWAYAT_LAYANAN_LABORATORIUM('3013','$now','$now','')");
        $unit = DB::select('SELECT kode_unit,nama_unit FROM mt_unit WHERE kode_unit LIKE "%20%"');
        $pasienranap = DB::select("CALL SP_PANGGIL_PASIEN_RAWAT_INAP_PER_UNIT_KUNJUNGAN_AKTIF_NEW('2011','','');");
        $pagi = DB::connection('mysql2')->select('SELECT * FROM ts_layanan_detail_gizi WHERE waktu_makan = "MAKAN PAGI" ');
        $siang = DB::connection('mysql2')->select('SELECT * FROM ts_layanan_detail_gizi WHERE waktu_makan = "MAKAN SIANG" ');
        $malam = DB::connection('mysql2')->select('SELECT * FROM ts_layanan_detail_gizi WHERE waktu_makan = "MAKAN MALAM" ');




        // dd($unit);
        return view('gizi.index', [
            'title' => 'SIRAMAH | GIZI',
            'unit' => $unit,
            'user' => $user,
            'pasienorderlab' => $pasienorderlab,
            'unit' => $unit,
            'pagi' => $pagi,
            'siang' => $siang,
            'malam' => $malam,
            'pasienranap' => $pasienranap
        ]);



        # code...

    }
    public function caripasienranap(Request $request)
    {
        $pasienranap = DB::select("CALL SP_PANGGIL_PASIEN_RAWAT_INAP_PER_UNIT_KUNJUNGAN_AKTIF_NEW('$request->unit','','');");
        $unit = $request->unit;
        // dd($pasienranap);

        return view('gizi.tablependaftaran', [
            'title' => 'SIRAMAH | GIZI',
            'pasienranap' => $pasienranap,
            'unit' => $unit




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
            $update = DB::connection('mysql2')->select('UPDATE ts_layanan_detail_gizi SET status = 2 , tgl_proses = ? WHERE no_rm = ? AND kode_kunjungan = ? AND id = ?', [$now, $request->norm,$request->kj,$request->id]);
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
            $update = DB::connection('mysql2')->select('UPDATE ts_layanan_detail_gizi SET status = 3 , tgl_antar = ? WHERE no_rm = ? AND kode_kunjungan = ? AND id = ?', [$now, $request->norm,$request->kj,$request->id]);
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
            $update = DB::connection('mysql2')->select('UPDATE ts_layanan_detail_gizi SET status = 4 , tgl_selesai = ? WHERE no_rm = ? AND kode_kunjungan = ? AND id = ?', [$now, $request->norm,$request->kj,$request->id]);
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
                if ($index == 'diet1') {
                    $ordergizi[] = $dataSet;
                }
            }

            foreach ($ordergizi as $p) {
                $pasien = DB::select("CALL SP_PANGGIL_PASIEN_RAWAT_INAP_PER_UNIT_KUNJUNGAN_AKTIF_NEW('$p[unit]','$p[norm]','');");
                foreach ($pasien as $pa) {
                    $savedetail = [
                        'no_rm' => $pa->no_rm,
                        'kode_kunjungan' => $pa->kode_kunjungan,
                        'diit' => $p['diet'],
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
