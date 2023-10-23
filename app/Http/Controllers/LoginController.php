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
            'title' => 'SIRAMAH-IGD LOGIN'
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

                return redirect()->intended('dokter');

            } elseif ($hak == 4) {
                return redirect()->intended('perawat');
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
