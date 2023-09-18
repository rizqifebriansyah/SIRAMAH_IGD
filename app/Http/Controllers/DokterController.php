<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use function Laravel\Prompts\select;

class DokterController extends Controller
{
   public function index()
   {
      $menu = 'dokter';
      return view(
         'dokter.index',
         [
            'title' => 'SiRAMAH DOKTER',
            'menu' => $menu
         ]
      );
   }
   public function triase()
   {
      $menu = 'triase';
      $now = Carbon::now()->format('Y-m-d');

      $antrian = DB::connection('mysql2')->select('SELECT no_antri, tgl, status FROM tp_karcis_igd
      WHERE DATE(tgl) BETWEEN ? AND ?', [$now, $now]);
      return view(
         'dokter.triase',
         [
            'title' => 'TRIASE DOKTER',
            'menu' => $menu,
            'antrian' => $antrian
         ]
      );
   }
   public function asses()
   {
      $menu = 'asses';

      $now = Carbon::now()->format('Y-m-d');
      $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','1002','$now')");

      return view(
         'dokter.asses',
         [
            'title' => 'ERM DOKTER',
            'menu' => $menu,
            'pasienigd' => $pasienigd
         ]
      );
   }
   public function assesmentdokter(Request $request)
   {

      $noantri = $request->noantri;
      $tgl = $request->tgl;

      return view(
         'dokter.assesmentdokterview',
         [
            'title' => 'ERM DOKTER',
            'noantri' => $noantri,
            'tgl' => $tgl

         ]
      );
   }
   public function ermdokter(Request $request)
   {
      $norm = $request->norm;
      $namapx = $request->namapx;
      $jk = $request->jk;



      return view(
         'dokter.ermdokterview',
         [
            'title' => 'ERM DOKTER',
            'norm' => $norm,
            'namapx' => $namapx,
            'jk'=> $jk

         ]
      );
   }

   public function formdewasa()
   {

      return view(
         'dokter.formdewasa',
         [
            'title' => 'SiRAMAH DOKTER',


         ]
      );
   }
   public function formermdokter()
   {

      return view(
         'dokter.formermdokter',
         [
            'title' => 'SiRAMAH DOKTER',


         ]
      );
   }
   public function formanak()
   {

      return view(
         'dokter.formanak',
         [
            'title' => 'SiRAMAH DOKTER',


         ]
      );
   }
   public function formbayi()
   {

      return view(
         'dokter.formbayi',
         [
            'title' => 'SiRAMAH DOKTER',


         ]
      );
   }
}
