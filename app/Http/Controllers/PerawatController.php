<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


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
            'perawat.asses',
            [
                'title' => 'ERM Perawat',
                'menu' => $menu,
                'pasienigd' => $pasienigd,
                'user' => $user
            ]
        );
    }
}
