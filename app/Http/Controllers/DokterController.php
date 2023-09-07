<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


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
            'title' => 'SiRAMAH DOKTER',
            'menu' => $menu,
            'antrian' => $antrian
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
            'title' => 'SiRAMAH DOKTER',
            'noantri' => $noantri,
            'tgl' => $tgl
            
         ]
      );
   }

   public function formdewasa(){

      return view(
         'dokter.formdewasa',
         [
            'title' => 'SiRAMAH DOKTER',
            
            
         ]
      );
   }
   public function formanak(){

      return view(
         'dokter.formanak',
         [
            'title' => 'SiRAMAH DOKTER',
            
            
         ]
      );
   }
   public function formbayi(){

      return view(
         'dokter.formbayi',
         [
            'title' => 'SiRAMAH DOKTER',
            
            
         ]
      );
   }
}
