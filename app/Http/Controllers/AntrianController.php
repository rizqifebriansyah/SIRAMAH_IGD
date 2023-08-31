<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Illuminate\Support\Facades\DB;


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
}
