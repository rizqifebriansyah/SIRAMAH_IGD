<?php

namespace App\Http\Controllers;


use App\Models\erm_cppt_kebidanan;
use App\Models\pemantauan_ttv;
use App\Models\upload_berkas_igd;

use App\Models\catatan_transfer_pasien;

use App\Models\erm_cppt_kebidanan_bayi;

use App\Models\erm_cppt_kebidanan_lanjutan;
use App\Models\riwayat_partus;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\erm_cppt_perawat;
use App\Models\erm_tindakan_keperawatan;
use App\Models\erm_obat_pulang_igd;

use App\Models\rencana_plg;
use App\Models\mt_kode_header;
use App\Models\ts_layanan_header;
use App\Models\ts_layanan_detail;



use App\Models\tx_rujukan_intern;
use File;

use function Laravel\Prompts\select;


class VKController extends Controller
{
    public function vk()
    {
        $menu = 'vk';
        $user = auth()->user()->nama;
        $unit = auth()->user()->unit;



        $now = Carbon::now()->format('Y-m-d');
        $tgl_masuk_1 = date('Ymd', strtotime('+1 days', strtotime($now)));
        $pasienigd = DB::select('SELECT 
                    e.diagnosis AS DIAGX,
                    a.no_rm,
                    "" AS nama_perawat,
                    IFNULL(d.nama_bidan, IFNULL(d.nama_bidan,"")) AS nama_perawat,
                    d.status,
                    e.status as status_dokter,

                    IFNULL(e.nama_paramedis2, IFNULL(e.nama_paramedis,"")) AS nama_paramedis,
                    fc_nama_px(a.no_rm) AS nama_px,
                    a.tgl_masuk,
                    fc_NAMA_PARAMEDIS1(a.kode_paramedis) AS nama_dpjp,
                    a.kode_penjamin,
                    a.kode_kunjungan,
                    a.kelas,
                    a.kelas AS KELAS_UNIT,
                    a.counter,
                    b.jenis_kelamin

                FROM ts_kunjungan a
                INNER JOIN mt_pasien b ON b.no_rm = a.no_rm

                -- FIX PERAWAT (optional tapi disarankan)
                LEFT JOIN (
                    SELECT d1.*
                    FROM erm_cppt_kebidanan d1
                    INNER JOIN (
                        SELECT kode_kunjungan, MAX(id) AS max_id
                        FROM erm_cppt_kebidanan
                        WHERE STATUS NOT IN (2,3)
                        GROUP BY kode_kunjungan
                    ) d2 
                    ON d1.kode_kunjungan = d2.kode_kunjungan 
                    AND d1.id = d2.max_id
                ) d ON d.kode_kunjungan = a.kode_kunjungan

                -- FIX DOKTER (INI KUNCI)
                LEFT JOIN (
                    SELECT e1.*
                    FROM erm_cppt_dokter_kebidanan e1
                    INNER JOIN (
                        SELECT kode_kunjungan, MAX(id) AS max_id
                        FROM erm_cppt_dokter_kebidanan
                        WHERE STATUS NOT IN (2,3)

                        GROUP BY kode_kunjungan
                    ) e2 
                    ON e1.kode_kunjungan = e2.kode_kunjungan 
                    AND e1.id = e2.max_id
                ) e ON e.kode_kunjungan = a.kode_kunjungan

                WHERE a.tgl_masuk >= ?
                AND a.tgl_masuk < ?
                AND a.status_kunjungan NOT IN (8,11)
                AND a.kode_unit = ?', [$now, $tgl_masuk_1, $unit]);
        // dd($pasienigd);
        return view(
            'vk.assesvk',
            [
                'title' => 'ERM Kebidanan',
                'menu' => $menu,
                'pasienigd' => $pasienigd,
                'user' => $user,
                'unit' => $unit
            ]
        );
    }
    public function caripasienvk(Request $request)
    {
        $now = Carbon::now()->format('Y-m-d');

        $normm = $request->norm;
        $norm = '%' . $normm . '%';
        $pasienkunjunganrs = DB::select('SELECT
            a.tgl_masuk,
            a.kelas,
            b.kelas_unit,
            a.kode_kunjungan,
            fc_nama_unit1(a.kode_unit) AS nama_unit,
            a.no_rm,
            fc_nama_px(a.no_rm) AS nama_px,
            fc_NAMA_PARAMEDIS1(a.kode_paramedis) AS nama_dokter,
            a.kode_paramedis,
            a.kode_penjamin,
            fc_NAMA_PENJAMIN2(a.kode_penjamin) AS nama_penjamin,
            fc_alamat4(a.no_rm) AS alamat,
            IFNULL(d.diag_00, "") AS DIAGX,
            c.jenis_kelamin,
            a.counter,
            a.status_kunjungan,
            1 AS orderan
        FROM ts_kunjungan a
        INNER JOIN mt_unit b
            ON b.kode_unit = a.kode_unit
        INNER JOIN mt_pasien c
            ON c.no_rm = a.no_rm
        LEFT JOIN (
            SELECT 
                kode_kunjungan,
                MAX(diag_00) AS diag_00
            FROM di_pasien_diagnosa_frunit
            GROUP BY kode_kunjungan
        ) d
            ON d.kode_kunjungan = a.kode_kunjungan
        WHERE a.status_kunjungan = 1
        AND a.no_rm LIKE ?
        ORDER BY orderan DESC, kelas_unit, nama_px;
        ', [$norm]
        );
        return view(
            'vk.tablepasienvk',
            [
                'norm' => $norm,
                'pasienkunjunganrs' => $pasienkunjunganrs,



            ]
        );
    }
}
