<?php

namespace App\Http\Controllers;

use App\Models\erm_cppt_kebidanan;
use App\Models\pemantauan_ttv;

use App\Models\erm_cppt_kebidanan_bayi;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\erm_cppt_perawat;
use App\Models\erm_tindakan_keperawatan;

use App\Models\rencana_plg;
use App\Models\mt_kode_header;
use App\Models\ts_layanan_header;
use App\Models\ts_layanan_detail;



use App\Models\tx_rujukan_intern;
use File;

use function Laravel\Prompts\select;


class MonitoringController extends Controller
{
    public function monitoring()
    {
        $menu = 'monitoring';
        $user = auth()->user()->nama;
        $unit = auth()->user()->unit;



        $now = Carbon::now()->format('Y-m-d');
        $tgl_masuk_x = date('Y-m-d', strtotime('-1 days', strtotime($now)));

        // $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','$unit','$now')");
        // $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','$unit','$now')");
        $pasienigd = DB::select('SELECT 
                e.diagnosa_kerja AS DIAGX,
                a.no_rm,
                "" AS nama_perawat,
                IFNULL(d.nama_perawat1, IFNULL(d.nama_perawat,"")) AS nama_perawat1,
                IFNULL(e.nama_paramedis2, IFNULL(e.nama_paramedis,"")) AS nama_paramedis,
                fc_nama_px(a.no_rm) AS nama_px,
                a.tgl_masuk,
                  d.status,
                e.status as status_dokter,
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
                FROM erm_cppt_perawat d1
                INNER JOIN (
                    SELECT kode_kunjungan, MAX(id) AS max_id
                    FROM erm_cppt_perawat
                    WHERE STATUS NOT IN (2,3)
                    GROUP BY kode_kunjungan
                ) d2 
                ON d1.kode_kunjungan = d2.kode_kunjungan 
                AND d1.id = d2.max_id
            ) d ON d.kode_kunjungan = a.kode_kunjungan

            -- FIX DOKTER (INI KUNCI)
            LEFT JOIN (
                SELECT e1.*
                FROM erm_cppt_dokter e1
                INNER JOIN (
                    SELECT kode_kunjungan, MAX(id) AS max_id
                    FROM erm_cppt_dokter
                    GROUP BY kode_kunjungan
                ) e2 
                ON e1.kode_kunjungan = e2.kode_kunjungan 
                AND e1.id = e2.max_id
            ) e ON e.kode_kunjungan = a.kode_kunjungan

            WHERE a.tgl_masuk >= ?
            AND a.tgl_masuk < ?
            AND a.status_kunjungan NOT IN (8,11)
            AND a.kode_unit = ?', [$tgl_masuk_x,  $now, $unit]);
        return view(
            'monitoring.assesigd',
            [
                'title' => 'MONITORING RME',
                'menu' => $menu,
                'pasienigd' => $pasienigd,
                'user' => $user,
                'unit' => $unit
            ]
        );
    }
     public function monitoringigdk()
    {
        $menu = 'monitoringigdk';
        $user = auth()->user()->nama;
        $unit = '1023';
        // dd($unit);


        $now = Carbon::now()->format('Y-m-d');
        // $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','$unit','$now')");
        // $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','$unit','$now')");
        $tgl_masuk_1 = date('Ymd', strtotime('-2 days', strtotime($now)));

        $pasienigd = DB::select('SELECT 
                e.diagnosis AS DIAGX,
                a.no_rm,
                "" AS nama_perawat,
                IFNULL(d.nama_bidan, IFNULL(d.nama_bidan,"")) AS nama_perawat1,
                IFNULL(e.nama_paramedis2, IFNULL(e.nama_paramedis,"")) AS nama_paramedis,
                fc_nama_px(a.no_rm) AS nama_px,
                a.tgl_masuk,
                  d.status,
                e.status as status_dokter,
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
                    GROUP BY kode_kunjungan
                ) e2 
                ON e1.kode_kunjungan = e2.kode_kunjungan 
                AND e1.id = e2.max_id
            ) e ON e.kode_kunjungan = a.kode_kunjungan

            WHERE a.tgl_masuk >= ?
            AND a.tgl_masuk < ?
            AND a.status_kunjungan NOT IN (8,11)
            AND a.kode_unit = "1023"', [$tgl_masuk_1, $now]);

        return view(
            'monitoring.assesigdk',
            [
                'title' => 'MONITORING RME',
                'menu' => $menu,
                'pasienigd' => $pasienigd,
                'user' => $user,
                'unit' => $unit
            ]
        );
    }
    public function carimonitoringpasien(Request $request)
    {
        $tgl = $request->tglkunjungan;
        $unit = auth()->user()->unit;

        // $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','$unit','$tgl')");
        // $pasienigd = DB::select("CALL WSP_PANGGIL_PASIEN_RAWAT_JALAN_NONIGD_PLUS_SEP('','','','1002','$tgl')");

        $pasienigd = DB::select('SELECT DISTINCT
        e.diagnosa_kerja AS DIAGX
        ,a.no_rm
        ,IFNULL(d.nama_perawat,"") AS nama_perawat
        ,IFNULL(d.nama_perawat1,"") AS nama_perawat1
        ,IFNULL(e.nama_paramedis,"") AS nama_paramedis
        ,fc_nama_px(a.no_rm) AS nama_px
        ,a.tgl_masuk
          d.status,
                e.status as status_dokter,
        ,fc_NAMA_PARAMEDIS1(a.kode_paramedis) nama_dpjp
        ,a.kode_penjamin
        ,a.kode_kunjungan
        ,a.kelas
        ,a.kelas AS KELAS_UNIT
        ,a.counter
        ,b.jenis_kelamin

        FROM ts_kunjungan a
        INNER JOIN mt_pasien b ON b.no_rm = a.no_rm
        LEFT OUTER JOIN di_pasien_diagnosa_frunit c ON c.kode_kunjungan = a.kode_kunjungan 
        LEFT OUTER JOIN erm_cppt_perawat d ON d.kode_kunjungan = a.kode_kunjungan
        LEFT OUTER JOIN	erm_cppt_dokter e ON e.kode_kunjungan = a.kode_kunjungan
        where Date(a.tgl_masuk) = ?
        AND a.status_kunjungan NOT IN (8,11)
        and d.status NOT IN (2,3)
        and e.status NOT IN (2, 3)
        and a.kode_unit = ?
        
        
        UNION
        SELECT DISTINCT
        e.diagnosa_kerja AS DIAGX
        ,a.no_rm
        ,IFNULL(d.nama_perawat,"") AS nama_perawat
        ,IFNULL(d.nama_perawat1,"") AS nama_perawat1

        ,IFNULL(e.nama_paramedis,"") AS nama_paramedis
        ,fc_nama_px(a.no_rm) AS nama_px
        ,a.tgl_masuk
        ,fc_NAMA_PARAMEDIS1(a.kode_paramedis) nama_dpjp
        ,a.kode_penjamin
        ,a.kode_kunjungan
        ,a.kelas
        ,a.kelas AS KELAS_UNIT
        ,a.counter
        ,b.jenis_kelamin

        FROM ts_kunjungan a
        INNER JOIN mt_pasien b ON b.no_rm = a.no_rm
        LEFT OUTER JOIN di_pasien_diagnosa_frunit c ON c.kode_kunjungan = a.kode_kunjungan 
        LEFT OUTER JOIN erm_cppt_perawat d ON d.kode_kunjungan = a.kode_kunjungan
        LEFT OUTER JOIN	erm_cppt_dokter e ON e.kode_kunjungan = a.kode_kunjungan
        where Date(a.tgl_masuk) = ?
        and a.status_kunjungan NOT IN (8,11)
        and a.kode_unit = ?', [$tgl, $unit, $tgl, $unit]);

        return view(
            'monitoring.tablemonitoringpasien',
            [
                'title' => 'MONITORING RME',
                'pasienigd' => $pasienigd,

            ]
        );
    }
    public function ermpreview(Request $request)
    {
        $kj =  $request->kj;
        $norm =  $request->norm;
        $unit = auth()->user()->unit;

        $now = Carbon::now()->format('Y-m-d H:i:s');
        $rencanaplg = DB::select('SELECT * FROM rencana_plg WHERE kode_kunjungan = ?
        ', [$kj]);
        $triase = DB::select('SELECT * FROM ts_triase
           WHERE no_rm = ? AND kode_kunjungan = ? AND STATUS IN (11) ', [$request->norm, $request->kj]);
        $hasil = DB::select('SELECT 
         a.tgl_kunjungan,
         a.hasil_ekg,
         a.surat_penolakan,
         a.informasi_tindakan,
         a.transfer_pasien
         FROM erm_cppt_perawat a
         WHERE a.kode_kunjungan = ?', [$kj]);
        //  dd($hasil);

        $assesdok = DB::select('SELECT * FROM erm_cppt_dokter
        WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        if ($assesdok != NULL) {
            $tgl_msk_skrining = Carbon::parse($assesdok[0]->tgl_kunjungan)->subMinutes(10);
        } else {
            $tgl_masuk_skrining = '0';
        }
        $assesdokbid = DB::select('SELECT * FROM erm_cppt_dokter_kebidanan WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $kj]);
        // dd($assesdokbid);
        $riwayatorderrad = DB::select('SELECT
        a.no_rm,
        a.kode_layanan_header,
        a.id,
        b.total_tarif,
        fc_nama_tindakan(LEFT(b.kode_tarif_detail,6)) as nama_tindakan
        FROM
        ts_layanan_header_igd a
        INNER JOIN ts_layanan_detail_igd b ON b.row_id_header = a.id
        WHERE a.kode_unit = ?
        AND a.kode_kunjungan = ?
        AND a.status_order ="1"', ['3003', $request->kj]);
        $riwayatorderlab = DB::select('SELECT
         a.no_rm,
         a.kode_layanan_header,
         a.id,
         b.total_tarif,
         fc_nama_tindakan(LEFT(b.kode_tarif_detail,6)) as nama_tindakan
         FROM
         ts_layanan_header_igd a
         INNER JOIN ts_layanan_detail_igd b ON b.row_id_header = a.id
         WHERE a.kode_unit = ?
         AND a.kode_kunjungan = ?
         AND a.status_order ="1"', ['3002', $request->kj]);
        $riwayatobat = DB::select('SELECT
        a.kode_layanan_header,
        a.id,
        a.kode_kunjungan,
        b.total_tarif,
        b.kode_barang,
        b.aturan_pakai,
        b.jumlah_layanan,
        c.nama_barang
         FROM
         ts_layanan_header a
         INNER JOIN ts_layanan_detail b ON b.row_id_header = a.id
         INNER JOIN mt_barang c ON c.kode_barang = b.kode_barang
         WHERE a.kode_layanan_header LIKE "%DP%"
         AND b.kode_tarif_detail NOT LIKE "%tx%"
         AND a.kode_kunjungan = ?', [$request->kj]);
        $ttv = DB::select('SELECT tekanan_darah, frekuensi_nafas, keadaan_umum, kesadaran, frekuensi_nadi, suhu, berat_badan, umur FROM erm_cppt_perawat WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        $ttb = DB::select('SELECT tekanan_darah, frekuensi_nafas, keadaan_umum, kesadaran, frekuensi_nadi, suhu, berat_badan, GCS, SPO2, umur FROM erm_cppt_kebidanan WHERE kode_kunjungan = ?', [$kj]);
        $riwayatrekonobat = DB::select('SELECT * FROM rekonsiliasi_obat
        WHERE kode_kunjungan = ?', [$kj]);
        $tindakan = DB::select('SELECT * FROM erm_tindakan_kedokteran WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        $tindakan1 = DB::select('SELECT * FROM erm_tindakan_keperawatan WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        // dd($tindakan1); 
        $assesper = DB::select('SELECT * FROM erm_cppt_perawat
          WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        $assesbid = DB::select('SELECT * FROM erm_cppt_kebidanan WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $kj]);
        $assesbidbay = DB::select('SELECT * FROM erm_cppt_kebidanan_bayi WHERE no_rm = ? AND kode_kunjungan = ? AND status IN (1,2)', [$request->norm, $kj]);
        $dpjp = DB::select('SELECT fc_NAMA_PARAMEDIS1(a.kode_paramedis) AS nama_dpjp,a.kode_paramedis,a.tindakan_kedokteran FROM erm_tindakan_kedokteran a WHERE kode_kunjungan = ?', [$kj]);
        $riwayattindakandpjp = DB::select('SELECT id,fc_NAMA_PARAMEDIS1(a.kode_paramedis) AS nama_dpjp,a.kode_paramedis,a.tindakan_kedokteran FROM erm_tindakan_kedokteran a WHERE kode_kunjungan = ? AND status = 1', [$kj]);

        return view(
            'monitoring.ermpreview',
            [
                'title' => 'ERM IGD',
                'assesdok' => $assesdok,
                'assesper' => $assesper,
                'triase' => $triase,
                'now' => $now,
                'ttv' => $ttv,
                'ttb' => $ttb,
                'dpjp' => $dpjp,
                // 'tgl_msk_skrining' => $tgl_msk_skrining,
                'riwayattindakandpjp' => $riwayattindakandpjp,
                'rencanaplg' => $rencanaplg,
                'tindakan' => $tindakan,
                'tindakan1' => $tindakan1,
                'kj' => $kj,
                'norm' => $norm,
                'unit' => $unit,
                'hasil' => $hasil,
                'riwayatorderrad' => $riwayatorderrad,
                'riwayatobat' => $riwayatobat,
                'riwayatrekonobat' => $riwayatrekonobat,
                'assesbid' => $assesbid,
                'riwayatorderlab' => $riwayatorderlab,
                'assesdokbid' => $assesdokbid,

                'assesbidbay' => $assesbidbay


            ]
        );
    }
    public function resumeigd(Request $request)
    {
        $kj =  $request->kj;
        $norm =  $request->kj;
        // $unit = auth()->user()->unit;
        $unit = '1002';

        $now = Carbon::now()->format('Y-m-d H:i:s');
        $rencanaplg = DB::connection('mysql2')->select('SELECT * FROM rencana_plg WHERE kode_kunjungan = ?
        ', [$kj]);
        $triase = DB::connection('mysql2')->select('SELECT * FROM ts_triase
           WHERE no_rm = ? AND kode_kunjungan = ? AND STATUS IN (1,2) ', [$request->norm, $request->kj]);
        $hasil = DB::connection('mysql2')->select('SELECT 
         a.tgl_kunjungan,
         a.hasil_ekg,
         a.surat_penolakan,
         a.informasi_tindakan,
         a.transfer_pasien
         FROM erm_cppt_perawat a
         WHERE a.kode_kunjungan = ?', [$kj]);

        $assesdok = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_dokter
        WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        $assesdokbid = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_dokter_kebidanan WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $kj]);
        // dd($assesdokbid);
        $riwayatorderrad = DB::connection('mysql2')->select('SELECT
        a.no_rm,
        a.kode_layanan_header,
        a.id,
        b.total_tarif,
        fc_nama_tindakan(LEFT(b.kode_tarif_detail,6)) as nama_tindakan
        FROM
        ts_layanan_header_igd a
        INNER JOIN ts_layanan_detail_igd b ON b.row_id_header = a.id
        WHERE a.kode_unit = ?
        AND a.kode_kunjungan = ?
        AND a.status_order ="1"', ['3003', $request->kj]);
        $riwayatorderlab = DB::connection('mysql2')->select('SELECT
         a.no_rm,
         a.kode_layanan_header,
         a.id,
         b.total_tarif,
         fc_nama_tindakan(LEFT(b.kode_tarif_detail,6)) as nama_tindakan
         FROM
         ts_layanan_header_igd a
         INNER JOIN ts_layanan_detail_igd b ON b.row_id_header = a.id
         WHERE a.kode_unit = ?
         AND a.kode_kunjungan = ?
         AND a.status_order ="1"', ['3002', $request->kj]);
        $riwayatobat = DB::connection('mysql2')->select('SELECT
        a.kode_layanan_header,
        a.id,
        a.kode_kunjungan,
        b.total_tarif,
        b.kode_barang,
        b.aturan_pakai,
        b.jumlah_layanan,
        c.nama_barang
         FROM
         ts_layanan_header a
         INNER JOIN ts_layanan_detail b ON b.row_id_header = a.id
         INNER JOIN mt_barang c ON c.kode_barang = b.kode_barang
         WHERE a.kode_layanan_header LIKE "%DP%"
         AND b.kode_tarif_detail NOT LIKE "%tx%"
         AND a.kode_kunjungan = ?', [$request->kj]);
        $ttv = DB::connection('mysql2')->select('SELECT tekanan_darah, frekuensi_nafas, keadaan_umum, kesadaran, frekuensi_nadi, suhu, berat_badan, umur FROM erm_cppt_perawat WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        $ttb = DB::connection('mysql2')->select('SELECT tekanan_darah, frekuensi_nafas, keadaan_umum, kesadaran, frekuensi_nadi, suhu, berat_badan, GCS, SPO2, umur FROM erm_cppt_kebidanan WHERE kode_kunjungan = ?', [$kj]);
        $riwayatrekonobat = DB::connection('mysql2')->select('SELECT * FROM rekonsiliasi_obat
        WHERE kode_kunjungan = ?', [$kj]);
        $tindakan = DB::connection('mysql2')->select('SELECT * FROM erm_tindakan_kedokteran WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        $tindakan1 = DB::connection('mysql2')->select('SELECT * FROM erm_tindakan_keperawatan WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        // dd($tindakan1); 
        $assesper = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_perawat
          WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $request->kj]);
        $assesbid = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_kebidanan WHERE no_rm = ? AND kode_kunjungan = ?', [$request->norm, $kj]);
        $assesbidbay = DB::connection('mysql2')->select('SELECT * FROM erm_cppt_kebidanan_bayi WHERE no_rm = ? AND kode_kunjungan = ? AND status IN (1,2)', [$request->norm, $kj]);
        $dpjp = DB::connection('mysql2')->select('SELECT fc_NAMA_PARAMEDIS1(a.kode_paramedis) AS nama_dpjp,a.kode_paramedis,a.tindakan_kedokteran FROM erm_tindakan_kedokteran a WHERE kode_kunjungan = ?', [$kj]);


        return view(
            'monitoring.resumeigd',
            [
                'title' => 'RESUME IGD',
                'assesdok' => $assesdok,
                'assesper' => $assesper,
                'triase' => $triase,
                'now' => $now,
                'ttv' => $ttv,
                'ttb' => $ttb,
                'dpjp' => $dpjp,


                'rencanaplg' => $rencanaplg,
                'tindakan' => $tindakan,
                'tindakan1' => $tindakan1,
                'kj' => $kj,
                'norm' => $norm,
                'unit' => $unit,
                'hasil' => $hasil,
                'riwayatorderrad' => $riwayatorderrad,
                'riwayatobat' => $riwayatobat,
                'riwayatrekonobat' => $riwayatrekonobat,
                'assesbid' => $assesbid,
                'riwayatorderlab' => $riwayatorderlab,
                'assesdokbid' => $assesdokbid,

                'assesbidbay' => $assesbidbay


            ]
        );
    }
}
