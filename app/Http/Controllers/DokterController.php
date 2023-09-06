<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{
   public function index()
   {
      $menu = 'dokter';
      return view(
         'dokter.index',
         [
            'title' => 'SiRAMAH Dokter',
            'menu' => $menu
         ]
      );
   }
   public function triase()
   {
      $menu = 'triase';
      return view(
         'dokter.triase',
         [
            'title' => 'SiRAMAH Dokter',
            'menu' => $menu
         ]
      );
   }
}
