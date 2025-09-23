<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user()->nama;

        $menu = 'KEUANGAN';
        return view(
            'keuangan.index',
            [
                'title' => 'KEUANGAN',
                'menu' => $menu,
                'user' => $user
            ]
        );
    }
    public function bukukas()
    {
        $user = auth()->user()->nama;

        $menu = 'BUKU KAS';
        return view(
            'keuangan.bukukas',
            [
                'title' => 'BUKU KAS',
                'menu' => $menu,
                'user' => $user
            ]
        );
    }
    public function rab()
    {
        $user = auth()->user()->nama;

        $menu = 'RAB';
        return view(
            'keuangan.rab',
            [
                'title' => 'RAB',
                'menu' => $menu,
                'user' => $user
            ]
        );
    }
}
