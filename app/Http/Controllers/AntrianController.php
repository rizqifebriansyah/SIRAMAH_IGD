<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function index(){

        return view('antrian.index',[
            'title' => 'SIRAMAH_IGD ANTRIAN'

        ]);
    }
}