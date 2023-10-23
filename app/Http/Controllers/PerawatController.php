<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\erm_cppt_perawat;



class PerawatController extends Controller
{
    public function index()
    {
        $user = auth()->user()->nama;

        $menu = 'perawat';
        return view(
            'perawat.index',
            [
                'title' => 'SiRAMAH PERAWAT',
                'menu' => $menu,
                'user' => $user
            ]
        );
    }


    public function assesperawat()
    {
        $menu = 'assesperawat';
        $user = auth()->user()->nama;


        $now = Carbon::now()->format('Y-m-d');
        $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','1002','$now')");
        return view(
            'perawat.assesperawat',
            [
                'title' => 'ERM Perawat',
                'menu' => $menu,
                'pasienigd' => $pasienigd,
                'user' => $user
            ]
        );
    }

    public function ermperawat(Request $request)
    {
        $norm = $request->norm;
        $namapx = $request->namapx;
        $jk = $request->jk;
        $kj = $request->kj;
        $tglmasuk = $request->tglmasuk;

        $cek = DB::select('SELECT
      fc_nama_unit1(kode_unit) AS nama_unit
      ,a.*

      FROM assesmen_dokters a
      WHERE  id_pasien = ?', [$norm]);

        return view(
            'perawat.ermperawatview',
            [
                'title' => 'ERM PERAWAT',
                'cek' => $cek,
                'norm' => $norm,
                'namapx' => $namapx,
                'jk' => $jk,
                'kj' => $kj,
                'tglmasuk' => $tglmasuk
            ]
        );
    }
    public function formermperawat()
    {
       
        $alasanplg  = DB::select('SELECT * FROM mt_alasan_pulang');

        return view(
            'perawat.formermperawat',
            [
                'title' => 'SiRAMAH DOKTER',
                
                'alasanpulang' => $alasanplg


            ]
        );
    }

    public function simpanassemenperawat(Request $request)
    {
        $a = $request->all();
        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;

        $assesmen = erm_cppt_perawat::create([
            'id_cppt_dokter'=> $user,
            'tgl_kunjungan' => $request->tglmasuk,
            'tgl_input' => $now,
            'kode_unit' => '1002',
            'kode_kunjungan' => $request->kj,
            'no_rm' => $request->norm,
            'subyektif' => $request->subject,
            'obyektif' => $request->objek,
            'assesment' => $request->assesmen,
            'planning' => $request->planning,
            'kode_paramedis' => $kp,
            'status' => '1'

        ]);




        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
}
