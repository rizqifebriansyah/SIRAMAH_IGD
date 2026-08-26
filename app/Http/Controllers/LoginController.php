<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'SIRAMAH LOGIN'
        ]);
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $hak = auth()->user()->hak_akses;
            $unit = auth()->user()->unit;
            if ($hak == 5) {

                return redirect()->intended('asses');
            } elseif ($hak == 3) {
                return redirect()->intended('radiologi');
            } elseif ($hak == 4) {
                return redirect()->intended('assesperawat');
            } elseif ($hak == 6) {
                return redirect()->intended('farmasi');
            } elseif ($hak == 11) {
                return redirect()->intended('bankdarah');
            } elseif ($hak == 12) {
                return redirect()->intended('laboratorium');
            } elseif ($hak == 13) {
                return redirect()->intended('forensik');
            } elseif ($hak == 14) {
                return redirect()->intended('penunjang');
            } elseif ($hak == 15) {
                return redirect()->intended('reporting');
            } elseif ($hak == 16) {
                return redirect()->intended('keuangan');
            } elseif ($hak == 17) {
                return redirect()->intended('gizi');
            } elseif ($hak == 18) {
                return redirect()->intended('monitoring');
            }elseif ($hak == 19) {
                return redirect()->intended('vk');
            }
        }
        return back()->with('loginError', 'Login gagal !');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
