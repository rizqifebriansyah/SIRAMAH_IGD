<?php

namespace App\Http\Controllers;

use App\Models\rekonsiliasiobat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FarmasiController extends Controller
{
    public function index()
    {

        $menu = 'farmasi';
        $user = auth()->user()->nama;
        $unit = auth()->user()->unit;



        $now = Carbon::now()->format('Y-m-d');
        // $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','$unit','$now')");
        $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','1002','$now')");

        return view(
            'farmasi.index',
            [
                'title' => 'SIRAMAH FARMASI',
                'menu' => $menu,
                'pasienigd' => $pasienigd,
                'user' => $user,
                'unit' => $unit
            ]
        );
    }
    public function kpoo()
    {
        $user = auth()->user()->nama;
        $unit = auth()->user()->unit;

        $menu = 'kpo';
        return view(
            'farmasi.kpoo',
            [
                'title' => 'SiRAMAH FARMASI',
                'menu' => $menu,
                'user' => $user,
                'unit' => $unit

            ]
        );
    }
    public function riwayatrekon(Request $request)
    {
        $norm = $request->norm;
        $kj = $request->kj;

        $riwayatobat = DB::connection('mysql2')->select('SELECT * FROM rekonsiliasi_obat
        WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        return view(
            'farmasi.riwayatrekon',
            [
                'title' => 'SiRAMAH FARMASI',
                'riwayatobat' => $riwayatobat,


            ]
        );
    }
    public function isiobat(Request $request)
    {
        $a = $request->all();
        $norm = $request->norm;
        $namapx = $request->namapx;
        $jk = $request->jk;
        $kj = $request->kj;
        $kp = $request->kp;
        $kp = $request->kp;
        $ku = $request->ku;
        $counter = $request->counter;

        $kelas = $request->kelas;
        $tglmasuk = $request->tglmasuk;
        $riwayatobat = DB::connection('mysql2')->select('SELECT * FROM rekonsiliasi_obat
        WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        return view(
            'farmasi.rekonsiliasiobat',
            [
                'title' => 'REKONSILIASI OBAT',
                'riwayatobat' => $riwayatobat,
                'norm' => $norm,
                'namapx' => $namapx,
                'jk' => $jk,
                'kj' => $kj,
                'tglmasuk' => $tglmasuk,
                'kelas' => $kelas,
                'kp' => $kp,
                'ku' => $ku,
                'counter' => $counter

            ]
        );
    }
    public function simpanrekon(Request $request)
    {
        $a = $request->all();

        $norm = $request->norm;
        $kj = $request->kj;
        $now = Carbon::now();
        try {
            $rekon = json_decode($_POST['data'], true);
            foreach ($rekon as $nama) {
                $index = $nama['name'];
                $value = $nama['value'];
                $dataSet[$index] = $value;
                if ($index == 'aturan') {
                    $arrayindex[] = $dataSet;
                }
            }
            $id_detail = $this->createLayanandetail();
            foreach ($arrayindex as $arr) {
                $savedetail = [
                    'kode_detail_obat' => $id_detail,
                    'no_rm' => $norm,
                    'kode_kunjungan' => $kj,
                    'kode_unit' => '1002',
                    'nama_obat' => $arr['obatan'],
                    'aturan_pakai' => $arr['aturan'],
                    'tgl_input' => $now,
                    'status' => 1

                ];
                $rekonsiliasiobat = rekonsiliasiobat::create($savedetail);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
    }
    public function createLayanandetail()
    {
        $q = DB::connection('mysql2')->select('SELECT id,kode_detail_obat,RIGHT(kode_detail_obat,3) AS kd_max  FROM rekonsiliasi_obat
        WHERE DATE(tgl_input) = CURDATE()
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
        return 'RO' . date('ymd') . $kd;
    }
}
