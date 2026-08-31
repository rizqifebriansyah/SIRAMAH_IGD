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
        // dd($unit);



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
        $pasienkunjunganrs = DB::select(
            'SELECT
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
        ',
            [$norm]
        );
        return view(
            'vk.tablepasienvk',
            [
                'norm' => $norm,
                'pasienkunjunganrs' => $pasienkunjunganrs,



            ]
        );
    }
    public function ermvk(Request $request)
    {
        $norm = $request->norm;
        $namapx = $request->namapx;
        $unit = auth()->user()->unit;

        $jk = $request->jk;
        $kj = $request->kj;
        $tglmasuk = $request->tglmasuk;
        $ttv = DB::select('SELECT tekanan_darah, frekuensi_nafas, frekuensi_nadi, suhu, berat_badan, umur, keadaan_umum, kesadaran, gcs, spo2 FROM erm_cppt_kebidanan WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
        // dd($ttvc);
        $cek = DB::select('SELECT
      fc_nama_unit1(kode_unit) AS nama_unit
      ,a.*

      FROM assesmen_dokters a
      WHERE  id_pasien = ?', [$norm]);
        $cek1 = DB::select('SELECT a.no_rm, b.kode_layanan_header FROM ts_kunjungan a INNER JOIN ts_layanan_header b
        ON b.kode_kunjungan = a.kode_kunjungan
        WHERE b.kode_unit = ? AND  a.no_rm = ? ', ['3002', $norm]);
        $cekr = DB::select('select *,date(tgl_baca) as tanggalnya,fc_acc_number_ris(id_detail) as acc_number from ts_hasil_expertisi where no_rm = ?', [$norm]);
        $cekpa = DB::select('SELECT
        kode_header
        , id_header
        , id_detail
        , unit_asal
        , no_rm
        , kode_kunjungan
        , fc_nama_px(no_rm) AS nama_px
        , hasil
        , fc_NAMA_PARAMEDIS1(kode_dokter) AS nama_dokter
        , tipe
        , diagnostik_klinik
        , diagnostik_pasca_bedah
        , tgl_baca
          FROM ts_hasil_expertisi_pa WHERE no_rm = ?', [$norm]);

        return view(
            'vk.ermvkview',
            [
                'title' => 'ERM PERAWAT',
                'cek' => $cek,
                'cek1' => $cek1,
                'cekr' => $cekr,
                'cekpa' => $cekpa,
                'norm' => $norm,
                'namapx' => $namapx,
                'jk' => $jk,
                'kj' => $kj,
                'tglmasuk' => $tglmasuk,
                'ttv' => $ttv,



                'unit' => $unit

            ]
        );
    }
    public function riwayatcpptlain(Request $request)
    {
        $norm = $request->norm;
        $cek = DB::select('SELECT
      fc_nama_unit1(kode_unit) AS nama_unit
      ,a.*

      FROM assesmen_dokters a
      WHERE  id_pasien = ?', [$norm]);
        $cek1 = DB::select('SELECT a.no_rm, b.kode_layanan_header FROM ts_kunjungan a INNER JOIN ts_layanan_header b
      ON b.kode_kunjungan = a.kode_kunjungan
      WHERE b.kode_unit = ? AND  a.no_rm = ? ', ['3002', $norm]);
        $cekr = DB::select('select *,date(tgl_baca) as tanggalnya,fc_acc_number_ris(id_detail) as acc_number from ts_hasil_expertisi where no_rm = ?', [$norm]);
        $cekpa = DB::select('SELECT
        kode_header
        , id_header
        , id_detail
        , unit_asal
        , no_rm
        , kode_kunjungan
        , fc_nama_px(no_rm) AS nama_px
        , hasil
        , fc_NAMA_PARAMEDIS1(kode_dokter) AS nama_dokter
        , tipe
        , diagnostik_klinik
        , diagnostik_pasca_bedah
        , tgl_baca
          FROM ts_hasil_expertisi_pa WHERE no_rm = ?', [$norm]);

        return view(
            'vk.riwayatpoliklinik',
            [
                'norm' => $norm,
                'cek' => $cek,
                'cek1' => $cek1,
                'cekr' => $cekr,
                'cekpa' => $cekpa,


            ]
        );
    }


    public function formermvk(Request $request)
    {
        $unit = auth()->user()->unit;
        $now = Carbon::now()->format('Y-m-d H:i:s');

        $kj = $request->kj;
        $norm = $request->norm;

        $alasanplg  = DB::select('SELECT * FROM mt_alasan_pulang');
        $assesper = DB::select('SELECT * FROM erm_cppt_kebidanan WHERE no_rm = ? AND kode_kunjungan = ? AND status IN (1,2)', [$norm, $kj]);
        $lanjutan = DB::select('SELECT * FROM erm_cppt_kebidanan_lanjutan WHERE no_rm = ? AND kode_kunjungan = ? AND status = 1', [$norm, $kj]);
        // dd($lanjutan);
        $tindakan = DB::select('SELECT * FROM erm_tindakan_keperawatan WHERE no_rm = ? AND kode_kunjungan = ? AND status = 1', [$norm, $kj]);
        $obatplg = DB::select('SELECT * FROM erm_obat_pulang_igd WHERE no_rm = ? AND kode_kunjungan = ? AND status = 1', [$norm, $kj]);
        $partus = DB::select('SELECT * FROM riwayat_partus WHERE no_rm = ? AND kode_kunjungan = ? AND status = 1', [$norm, $kj]);

        return view(
            'vk.formdewasavk',
            [
                'title' => 'SiRAMAH BIDAN',
                'unit' => $unit,
                'assesper' => $assesper,
                'tindakan' => $tindakan,
                'lanjutan' => $lanjutan,

                'partus' => $partus,

                'obatplg' => $obatplg,
                'alasanpulang' => $alasanplg,
                'norm' => $norm,
                'kj' => $kj,

                'now' => $now

            ]
        );
    }

    public function simpanassesvk(Request $request)
    {
        $a = $request->all();
        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;
        $name = auth()->user()->nama;

        $norm = $request->norm;
        $kj = $request->kj;
        try {

            $assesmen = erm_cppt_kebidanan::create([
                'sumber_data' => $request->sumberdata,
                'asal_masuk' => $request->asalmasuk,
                'cara_masuk' => $request->caramasuk,
                'subyek' => $request->subyek,
                'tgl_pengkajian' => $request->tgl_pengkajian,
                'asal_rujukan' => $request->asal_rujukan,

                'tgl_input' => $now,
                'tgl_kunjungan' => $request->tglmasuk,
                'tekanan_darah' => $request->tekanandarah,
                'frekuensi_nadi' => $request->frekuensinadi,
                'frekuensi_nafas' => $request->frekuensinafas,
                'suhu' => $request->suhutubuh,
                'berat_badan' => $request->beratbadan,
                'umur' => $request->usia,
                'keadaan_umum' => $request->keadaanumum,
                'kesadaran' => $request->kesadaran,
                'GCS' => $request->gcs,
                'SPO2' => $request->spo2,
                'tb' => $request->tb,
                'kode_unit' => '3005',
                'no_rm' => $request->norm,
                'kode_kunjungan' => $request->kj,
                'kode_paramedis' => $kp,
                'subyektif' => $request->subyek,
                'imunisasi' => $request->imunisasi,
                'imunisasi1' => $request->imunisasi1,
                'imunisasi2' => $request->imunisasi2,
                'imunisasi3' => $request->imunisasi3,
                'imunisasi4' => $request->imunisasi4,
                'imunisasi5' => $request->imunisasi5,
                'imunisasi6' => $request->imunisasi6,
                'imunisasi7' => $request->imunisasi7,
                'imunisasi8' => $request->imunisasi8,
                'imunisasi9' => $request->imunisasi9,
                'imunisasi10' => $request->imunisasi10,
                'imunisasi11' => $request->imunisasi11,
                'imunisasi12' => $request->imunisasi12,
                'imunisasi13' => $request->imunisasi13,
                'imunisasi14' => $request->imunisasi14,
                'imunisasi15' => $request->imunisasi15,
                'imunisasi16' => $request->imunisasi16,
                'imunisasi17' => $request->imunisasi17,
                'imunisasi18' => $request->imunisasi18,
                'kberencana' => $request->kberencana,
                'kberencana1' => $request->kberencana1,
                'kberencana2' => $request->kberencana2,
                'kberencana3' => $request->kberencana3,
                'kberencana4' => $request->kberencana4,
                'kberencana5' => $request->kberencana5,
                'komplikasikb' => $request->komplikasikb,
                'komplikasikb1' => $request->komplikasikb1,
                'komplikasikb2' => $request->komplikasikb2,
                'rpenyakit' => $request->rpenyakit,
                'rpenyakit1' => $request->rpenyakit1,
                'rpenyakit2' => $request->rpenyakit2,
                'rpenyakit3' => $request->rpenyakit3,
                'rpenyakit4' => $request->rpenyakit4,
                'rpenyakit5' => $request->rpenyakit5,
                'rpenyakit6' => $request->rpenyakit6,
                'rpenyakit7' => $request->rpenyakit7,
                'operasi' => $request->operasi,
                'operasi1' => $request->operasi1,
                'operasi2' => $request->operasi2,
                'ginekologi' => $request->ginekologi,
                'ginekologi1' => $request->ginekologi1,
                'ginekologi2' => $request->ginekologi2,
                'ginekologi3' => $request->ginekologi3,
                'ginekologi4' => $request->ginekologi4,
                'ginekologi5' => $request->ginekologi5,
                'ginekologi6' => $request->ginekologi6,
                'ginekologi7' => $request->ginekologi7,
                'ginekologi8' => $request->ginekologi8,
                'ginekologi9' => $request->ginekologi9,
                'ginekologi10' => $request->ginekologi10,
                'ginekologi11' => $request->ginekologi11,
                'rpk' => $request->rpk,
                'rpk1' => $request->rpk1,
                'rpk2' => $request->rpk2,
                'rpk3' => $request->rpk3,
                'rpk4' => $request->rpk4,
                'rpk5' => $request->rpk5,
                'rpk6' => $request->rpk6,
                'rpk7' => $request->rpk7,
                'rpk8' => $request->rpk8,
                'rpk9' => $request->rpk9,
                'terapi' => $request->terapi,
                'terapi1' => $request->terapi1,
                'terapi2' => $request->terapi2,
                'terapi3' => $request->terapi3,
                'aler' => $request->aler,
                'aler1' => $request->aler1,
                'aler2' => $request->aler2,
                'kebiasaan' => $request->kebiasaan,
                'kebiasaan1' => $request->kebiasaan1,
                'otidur' => $request->otidur,
                'otidur1' => $request->otidur1,
                'alkohol' => $request->alkohol,
                'alkohol1' => $request->alkohol1,
                'olahraga' => $request->olahraga,
                'olahraga1' => $request->olahraga1,
                'umurmenarche' => $request->umurmenarche,
                'lamanyahaid' => $request->lamanyahaid,
                'pembalut' => $request->pembalut,
                'haidterakhir' => $request->haidterakhir,
                'TP' => $request->TP,
                'Dismonore' => $request->Dismonore,
                'Dismonore1' => $request->Dismonore1,
                'Dismonore2' => $request->Dismonore2,
                'Dismonore3' => $request->Dismonore3,
                'menikah' => $request->menikah,
                'menikah1' => $request->menikah1,
                'menikah2' => $request->menikah2,
                'menikah3' => $request->menikah3,
                'menikah4' => $request->menikah4,
                'G' => $request->G,
                'P' => $request->P,
                'A' => $request->A,
                'hamud1' => $request->hamud1,
                'hamud2' => $request->hamud2,
                'hamud' => $request->hamud,
                'hatu' => $request->hatu,
                'hatu1' => $request->hatu1,
                'hatu2' => $request->hatu2,
                'anc' => $request->anc,
                'anc1' => $request->anc1,
                'imunisasii' => $request->imunisasii,
                'imunisasii1' => $request->imunisasii1,
                'imunisasii2' => $request->imunisasii2,
                'mata' => $request->mata,
                'mata1' => $request->mata1,
                'mata2' => $request->mata2,
                'mata3' => $request->mata3,
                'dadak' => $request->dadak,
                'dadak1' => $request->dadak1,
                'dadak2' => $request->dadak2,
                'dadak3' => $request->dadak3,
                'dadak4' => $request->dadak4,
                'dadak5' => $request->dadak5,
                'Ektremitas' => $request->Ektremitas,
                'Ektremitas1' => $request->Ektremitas1,
                'Ektremitas2' => $request->Ektremitas2,
                'Ektremitas3' => $request->Ektremitas3,
                'sistemnafas' => $request->sistemnafas,
                'sistemnafas1' => $request->sistemnafas1,
                'sistemnafas2' => $request->sistemnafas2,
                'sistemnafas3' => $request->sistemnafas3,
                'sistemnafas4' => $request->sistemnafas4,
                'sistemnafas5' => $request->sistemnafas5,
                'sistemnafas6' => $request->sistemnafas6,
                'sistemnafas7' => $request->sistemnafas7,
                'sistemnafas8' => $request->sistemnafas8,
                'sosup' => $request->sosup,
                'sosup1' => $request->sosup1,
                'sosup2' => $request->sosup2,
                'sosup3' => $request->sosup3,
                'sosup4' => $request->sosup4,
                'data_psikologi' => $request->dapsi,

                'data_psikologi_1' => $request->dapsi1,
                'data_psikologi_2' => $request->dapsi2,
                'data_psikologi_3' => $request->dapsi3,
                'data_psikologi_4' => $request->dapsi4,
                'data_psikologi_5' => $request->dapsi5,
                'data_psikologi_6' => $request->dapsi6,
                'data_psikologi_7' => $request->dapsi7,
                'data_psikologi_8' => $request->dapsi8,
                'data_psikologi_9' => $request->dapsi9,
                'data_psikologi_10' => $request->dapsi10,
                'data_psikologi_11' => $request->dapsi11,
                'data_psikologi_12' => $request->dapsi12,
                'nilai_budaya_1' => $request->nilbud1,
                'nilai_budaya_2' => $request->nilbud2,
                'nilai_budaya_3' => $request->nilbud3,
                'nilai_budaya_4' => $request->nilbud4,
                'nilai_budaya_5' => $request->nilbud5,
                'nilai_budaya' => $request->nilbud,
                'kebiasaan_pasien' => $request->polaak,
                'pola_komunikasi_1' => $request->polkom,
                'pola_komunikasi_2' => $request->polkom1,
                'pola_komunikasi_3' => $request->polkom2,
                'pola_komunikasi_4' => $request->polkom5,
                'pola_makan' => $request->polmak,
                'pola_makan_1' => $request->polmak1,
                'pola_makan_2' => $request->polmak2,
                'pola_makan_3' => $request->polmak3,
                'pantangan_makan' => $request->panmak,
                'pantangan_makan_1' => $request->panmak1,
                'pantangan_makan_2' => $request->panmak2,
                'kepercayaan_anut' => $request->penmak2,
                'kepercayaan_anut_1' => $request->penmak21,
                'kepercayaan_anut_2' => $request->penmak22,

                'diagnosakebidanan' => $request->diagnosakebidanan,
                'rencanaasuhan' => $request->rencanaasuhan,
                'status' => '1',
                'nama_bidan' => $name,
                'kolaborasi1' => $request->kolaborasi1,
                'kolaborasi2' => $request->kolaborasi2,
                'kolaborasi3' => $request->kolaborasi3,
                'kolaborasi4' => $request->kolaborasi4,
                'kolaborasi5' => $request->kolaborasi5,
                'kolaborasi6' => $request->kolaborasi6,
                'kolaborasi7' => $request->kolaborasi7,
                'kolaborasi8' => $request->kolaborasi8,
                'kolaborasi9' => $request->kolaborasi9,
                'kolaborasi10' => $request->kolaborasi10,
                'kolaborasi11' => $request->kolaborasi11,
                'kolaborasi12' => $request->kolaborasi12,
                'kolaborasi13' => $request->kolaborasi13,
                'kolaborasi14' => $request->kolaborasi14,
                'kolaborasi15' => $request->kolaborasi15,
                'nama_bidan' =>  $name,
                'id_user' => $user
            ]);
            $assesmenlanjutan = erm_cppt_kebidanan_lanjutan::create([
                'tgl_input' => $now,
                'tgl_kunjungan' => $request->tglmasuk,
                'tgl_pengkajian' => $request->tgl_pengkajian,
                'anamnesa_triase' => $request->anamnesis_triase_bidan,
                'diagnosa_triase' => $request->diagnosa_triase_bidan,


                'kode_unit' => '3005',
                'no_rm' => $request->norm,
                'kode_kunjungan' => $request->kj,
                'kode_paramedis' => $kp,
                'edukasi' => $request->kebel,

                'edukasi_1' => $request->kebel1,
                'edukasi_2' => $request->kebel2,
                'edukasi_3' => $request->kebel3,
                'edukasi_4' => $request->kebel4,
                'edukasi_5' => $request->kebel5,
                'edukasi_6' => $request->kebel6,
                'edukasi_7' => $request->kebel7,
                'edukasi_8' => $request->kebel8,
                'edukasi_9' => $request->kebel9,
                'edukasi_10' => $request->kebel10,
                'edukasi_11' => $request->kebel11,
                'pemahaman_penyakit' => $request->penyak,
                'pemahaman_perawatan' => $request->penper,
                'pemahaman_pengobatan' => $request->pengob,
                'pemahaman_nutrisi' => $request->pennut,
                'hambatan_8' => $request->hambatan,
                'hambatan_1' => $request->hambatan1,
                'hambatan_2' => $request->hambatan2,
                'hambatan_3' => $request->hambatan3,
                'hambatan_4' => $request->hambatan4,
                'hambatan_5' => $request->hambatan5,
                'hambatan_6' => $request->hambatan6,
                'hambatan_7' => $request->hambatan7,
                'keterbatasan_budaya' => $request->spiritual,
                'jatuh_rj' => $request->rjvalue,
                'jatuh_ds' => $request->dsvalue,
                'jatuh_ab' => $request->abvalue,
                'jatuh_ti' => $request->tivalue,
                'jatuh_gn' => $request->gjvalue,
                'jatuh_sm' => $request->smvalue,
                'total_jatuh' => $request->totalnyeri,
                'nutrisi_bb' => $request->bbvalue,
                'nutrisi_bbb' => $request->bbbvalue,
                'nutrisi_asupan' => $request->pbvalue,
                'nutrisi_sakit_berat' => $request->sakit_berat,
                'total_skor' => $request->total_nutrisi,
                'penandaan_gambar' => $request->gambar1,
                'nyeri' => $request->nyeri,

                'nyeri_pindah' => $request->nyeri_pindah,
                'lamanyeri' => $request->lamanyeri,
                'rasanyeri' => $request->rasanyeri,
                'rasanyeri1' => $request->rasanyeri1,
                'rasanyeri2' => $request->rasanyeri2,
                'rasanyeri3' => $request->rasanyeri3,
                'rasanyeri4' => $request->rasanyeri4,
                'rasanyeri5' => $request->rasanyeri5,
                'rasanyeri6' => $request->rasanyeri6,
                'rasanyeri7' => $request->rasanyeri7,
                'rasanyeri8' => $request->rasanyeri8,
                'rasanyeri9' => $request->rasanyeri9,
                'seringnyeri' => $request->seringnyeri,
                'serringnyeri' => $request->serringnyeri,
                'berkurangnyeri' => $request->berkurangnyeri,
                'rekomendasi' => $request->rekomendasi


            ]);
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => 'error input asses'
            ];
            echo json_encode($back);
            die;
        }

        //riwayat obat
        try {
            $obatpllg = json_decode($_POST['obatplg'], true);
            if ($obatpllg == null) {
            } else {
                foreach ($obatpllg as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSetobat[$index] = $value;
                    if ($index == 'intruksi') {
                        $arrayindexobat[] = $dataSetobat;
                    }
                }
                // $id_detail = $this->createLayanandetail();
                foreach ($arrayindexobat as $oba) {
                    $savedetailrwytobat = [
                        // 'kode_detail_obat' => $id_detail,
                        'no_rm' => $norm,
                        'kode_kunjungan' => $kj,
                        'kode_unit' => '3005',
                        'nama_obat' => $oba['namaobat'],
                        'dosis' => $oba['dosis'],
                        'jam_pemberian' => $oba['jampemberian'],
                        'instruksi_khusus' => $oba['intruksi'],


                        'tgl_input' => $now,
                        'status' => 1

                    ];
                    $riwayat = erm_obat_pulang_igd::create($savedetailrwytobat);
                }
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => 'error input riwayat obat'
            ];
            echo json_encode($back);
            die;
        }

        //riwayat partus
        try {
            $riwayatpartus = json_decode($_POST['riwayatpartus'], true);
            if ($riwayatpartus == null) {
            } else {
                foreach ($riwayatpartus as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSetpartus[$index] = $value;
                    if ($index == 'keadaan_anak_sekarang') {
                        $arrayindexpartus[] = $dataSetpartus;
                    }
                }
                // dd($arrayindexpartus);
                // $id_detail = $this->createLayanandetail();
                foreach ($arrayindexpartus as $pts) {
                    $savedetailpartus = [
                        // 'kode_detail_obat' => $id_detail,
                        'no_rm' => $norm,
                        'kode_kunjungan' => $kj,
                        'kode_unit' => '3005',
                        'tgl_partus' => $pts['tt_partus'],
                        'tempat_partus' => $pts['tempat_partus'],
                        'umur_partus' => $pts['umur_hamil'],
                        'jenis_persalinan' => $pts['jenis_persalinan'],
                        'penolong_persalinan' => $pts['penolong_persalinan'],
                        'penyulit' => $pts['penyulit'],
                        'nifas' => $pts['nifas'],
                        'kelamin_BB' => $pts['kelamin_bb'],
                        'keadaan_anak' => $pts['keadaan_anak_sekarang'],


                        'tgl_input' => $now,
                        'status' => 1

                    ];
                    $riwayat = riwayat_partus::create($savedetailpartus);
                }
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => 'error input riwayat partus'
                // 'error' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }

        //tindakan kebidanan
        try {
            $tindakanbidan = json_decode($_POST['tindakankebidanan'], true);
            if ($tindakanbidan == null) {
            } else {
                foreach ($tindakanbidan as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSet[$index] = $value;
                    if ($index == 'tindakan_kebidanan') {
                        $arrayindex[] = $dataSet;
                    }
                }
                // $id_detail = $this->createLayanandetail();
                foreach ($arrayindex as $arr) {
                    $savedetail = [
                        // 'kode_detail_obat' => $id_detail,
                        'no_rm' => $norm,
                        'kode_kunjungan' => $kj,
                        'kode_unit' => '3005',
                        'tindakan_keperawatan' => $arr['tindakan_kebidanan'],
                        'waktu_tindakan' => $arr['jam_tindakan'],
                        'tgl_input' => $now,
                        'status' => 1

                    ];
                    $tindakankebidanan = erm_tindakan_keperawatan::create($savedetail);
                }
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => 'error input tindakan'
            ];
            echo json_encode($back);
            die;
        }

        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function updateassesvk(Request $request)
    {
        $a = $request->all();

        $tekanandarah = $request->tekanandarah;
        $frekuensinadi = $request->frekuensinadi;
        $frekuensinafas = $request->frekuensinafas;
        $suhu = $request->suhutubuh;
        $beratbadan = $request->beratbadan;
        $umur = $request->usia;
        $subyektif = $request->subject;
        $obyektif = $request->objek;
        $assesment = $request->assesmen;
        $planning = $request->planning;

        $kj = $request->kj;
        $norm = $request->norm;
        $kesadaran = $request->kesadaran;
        $keadaanumum = $request->keadaanumum;

        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $name = auth()->user()->nama;

        $kp = auth()->user()->kode_paramedis;




        try {
            $cekcpp = DB::select('SELECT status FROM erm_cppt_kebidanan WHERE no_rm = ? AND kode_kunjungan = ? AND status = 1', [$norm, $kj]);
            $cekcppl = DB::select('SELECT status FROM erm_cppt_kebidanan_lanjutan WHERE no_rm = ? AND kode_kunjungan = ? AND status = 1', [$norm, $kj]);

            //ada
            //ada
            if ($cekcpp[0]->status == 1 && $cekcppl[0]->status == 1) {
                $cekcpp = DB::select('UPDATE erm_cppt_kebidanan SET status = "3"  WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);
                $assesmen = erm_cppt_kebidanan::create([
                    'sumber_data' => $request->sumberdata,
                    'asal_masuk' => $request->asalmasuk,
                    'cara_masuk' => $request->caramasuk,
                    'subyek' => $request->subyek,
                    'tgl_input' => $now,
                    'tgl_pengkajian' => $request->tgl_pengkajian,
                    'asal_rujukan' => $request->asal_rujukan,

                    'tgl_kunjungan' => $request->tglmasuk,
                    'tekanan_darah' => $request->tekanandarah,
                    'frekuensi_nadi' => $request->frekuensinadi,
                    'frekuensi_nafas' => $request->frekuensinafas,
                    'suhu' => $request->suhutubuh,
                    'berat_badan' => $request->beratbadan,
                    'umur' => $request->usia,
                    'keadaan_umum' => $request->keadaanumum,
                    'kesadaran' => $request->kesadaran,
                    'GCS' => $request->gcs,
                    'SPO2' => $request->spo2,
                    'tb' => $request->tb,
                    'kode_unit' => '3005',
                    'no_rm' => $request->norm,
                    'kode_kunjungan' => $request->kj,
                    'kode_paramedis' => $kp,
                    'subyektif' => $request->subyek,
                    'imunisasi' => $request->imunisasi,
                    'imunisasi1' => $request->imunisasi1,
                    'imunisasi2' => $request->imunisasi2,
                    'imunisasi3' => $request->imunisasi3,
                    'imunisasi4' => $request->imunisasi4,
                    'imunisasi5' => $request->imunisasi5,
                    'imunisasi6' => $request->imunisasi6,
                    'imunisasi7' => $request->imunisasi7,
                    'imunisasi8' => $request->imunisasi8,
                    'imunisasi9' => $request->imunisasi9,
                    'imunisasi10' => $request->imunisasi10,
                    'imunisasi11' => $request->imunisasi11,
                    'imunisasi12' => $request->imunisasi12,
                    'imunisasi13' => $request->imunisasi13,
                    'imunisasi14' => $request->imunisasi14,
                    'imunisasi15' => $request->imunisasi15,
                    'imunisasi16' => $request->imunisasi16,
                    'imunisasi17' => $request->imunisasi17,
                    'imunisasi18' => $request->imunisasi18,
                    'kberencana' => $request->kberencana,
                    'kberencana1' => $request->kberencana1,
                    'kberencana2' => $request->kberencana2,
                    'kberencana3' => $request->kberencana3,
                    'kberencana4' => $request->kberencana4,
                    'kberencana5' => $request->kberencana5,
                    'komplikasikb' => $request->komplikasikb,
                    'komplikasikb1' => $request->komplikasikb1,
                    'komplikasikb2' => $request->komplikasikb2,
                    'rpenyakit' => $request->rpenyakit,
                    'rpenyakit1' => $request->rpenyakit1,
                    'rpenyakit2' => $request->rpenyakit2,
                    'rpenyakit3' => $request->rpenyakit3,
                    'rpenyakit4' => $request->rpenyakit4,
                    'rpenyakit5' => $request->rpenyakit5,
                    'rpenyakit6' => $request->rpenyakit6,
                    'rpenyakit7' => $request->rpenyakit7,
                    'operasi' => $request->operasi,
                    'operasi1' => $request->operasi1,
                    'operasi2' => $request->operasi2,
                    'ginekologi' => $request->ginekologi,
                    'ginekologi1' => $request->ginekologi1,
                    'ginekologi2' => $request->ginekologi2,
                    'ginekologi3' => $request->ginekologi3,
                    'ginekologi4' => $request->ginekologi4,
                    'ginekologi5' => $request->ginekologi5,
                    'ginekologi6' => $request->ginekologi6,
                    'ginekologi7' => $request->ginekologi7,
                    'ginekologi8' => $request->ginekologi8,
                    'ginekologi9' => $request->ginekologi9,
                    'ginekologi10' => $request->ginekologi10,
                    'ginekologi11' => $request->ginekologi11,
                    'rpk' => $request->rpk,
                    'rpk1' => $request->rpk1,
                    'rpk2' => $request->rpk2,
                    'rpk3' => $request->rpk3,
                    'rpk4' => $request->rpk4,
                    'rpk5' => $request->rpk5,
                    'rpk6' => $request->rpk6,
                    'rpk7' => $request->rpk7,
                    'rpk8' => $request->rpk8,
                    'rpk9' => $request->rpk9,
                    'terapi' => $request->terapi,
                    'terapi1' => $request->terapi1,
                    'terapi2' => $request->terapi2,
                    'terapi3' => $request->terapi3,
                    'aler' => $request->aler,
                    'aler1' => $request->aler1,
                    'aler2' => $request->aler2,
                    'kebiasaan' => $request->kebiasaan,
                    'kebiasaan1' => $request->kebiasaan1,
                    'otidur' => $request->otidur,
                    'otidur1' => $request->otidur1,
                    'alkohol' => $request->alkohol,
                    'alkohol1' => $request->alkohol1,
                    'olahraga' => $request->olahraga,
                    'olahraga1' => $request->olahraga1,
                    'umurmenarche' => $request->umurmenarche,
                    'lamanyahaid' => $request->lamanyahaid,
                    'pembalut' => $request->pembalut,
                    'haidterakhir' => $request->haidterakhir,
                    'TP' => $request->TP,
                    'Dismonore' => $request->Dismonore,
                    'Dismonore1' => $request->Dismonore1,
                    'Dismonore2' => $request->Dismonore2,
                    'Dismonore3' => $request->Dismonore3,
                    'menikah' => $request->menikah,
                    'menikah1' => $request->menikah1,
                    'menikah2' => $request->menikah2,
                    'menikah3' => $request->menikah3,
                    'menikah4' => $request->menikah4,
                    'G' => $request->G,
                    'P' => $request->P,
                    'A' => $request->A,
                    'hamud1' => $request->hamud1,
                    'hamud2' => $request->hamud2,
                    'hamud' => $request->hamud,
                    'hatu' => $request->hatu,
                    'hatu1' => $request->hatu1,
                    'hatu2' => $request->hatu2,
                    'anc' => $request->anc,
                    'anc1' => $request->anc1,
                    'imunisasii' => $request->imunisasii,
                    'imunisasii1' => $request->imunisasii1,
                    'imunisasii2' => $request->imunisasii2,
                    'mata' => $request->mata,
                    'mata1' => $request->mata1,
                    'mata2' => $request->mata2,
                    'mata3' => $request->mata3,
                    'dadak' => $request->dadak,
                    'dadak1' => $request->dadak1,
                    'dadak2' => $request->dadak2,
                    'dadak3' => $request->dadak3,
                    'dadak4' => $request->dadak4,
                    'dadak5' => $request->dadak5,
                    'Ektremitas' => $request->Ektremitas,
                    'Ektremitas1' => $request->Ektremitas1,
                    'Ektremitas2' => $request->Ektremitas2,
                    'Ektremitas3' => $request->Ektremitas3,
                    'sistemnafas' => $request->sistemnafas,
                    'sistemnafas1' => $request->sistemnafas1,
                    'sistemnafas2' => $request->sistemnafas2,
                    'sistemnafas3' => $request->sistemnafas3,
                    'sistemnafas4' => $request->sistemnafas4,
                    'sistemnafas5' => $request->sistemnafas5,
                    'sistemnafas6' => $request->sistemnafas6,
                    'sistemnafas7' => $request->sistemnafas7,
                    'sistemnafas8' => $request->sistemnafas8,
                    'sosup' => $request->sosup,
                    'sosup1' => $request->sosup1,
                    'sosup2' => $request->sosup2,
                    'sosup3' => $request->sosup3,
                    'sosup4' => $request->sosup4,
                    'data_psikologi' => $request->dapsi,

                    'data_psikologi_1' => $request->dapsi1,
                    'data_psikologi_2' => $request->dapsi2,
                    'data_psikologi_3' => $request->dapsi3,
                    'data_psikologi_4' => $request->dapsi4,
                    'data_psikologi_5' => $request->dapsi5,
                    'data_psikologi_6' => $request->dapsi6,
                    'data_psikologi_7' => $request->dapsi7,
                    'data_psikologi_8' => $request->dapsi8,
                    'data_psikologi_9' => $request->dapsi9,
                    'data_psikologi_10' => $request->dapsi10,
                    'data_psikologi_11' => $request->dapsi11,
                    'data_psikologi_12' => $request->dapsi12,
                    'nilai_budaya_1' => $request->nilbud1,
                    'nilai_budaya_2' => $request->nilbud2,
                    'nilai_budaya_3' => $request->nilbud3,
                    'nilai_budaya_4' => $request->nilbud4,
                    'nilai_budaya_5' => $request->nilbud5,
                    'nilai_budaya' => $request->nilbud,
                    'kebiasaan_pasien' => $request->polaak,
                    'pola_komunikasi_1' => $request->polkom,
                    'pola_komunikasi_2' => $request->polkom1,
                    'pola_komunikasi_3' => $request->polkom2,
                    'pola_komunikasi_4' => $request->polkom5,
                    'pola_makan' => $request->polmak,
                    'pola_makan_1' => $request->polmak1,
                    'pola_makan_2' => $request->polmak2,
                    'pola_makan_3' => $request->polmak3,
                    'pantangan_makan' => $request->panmak,
                    'pantangan_makan_1' => $request->panmak1,
                    'pantangan_makan_2' => $request->panmak2,
                    'kepercayaan_anut' => $request->penmak2,
                    'kepercayaan_anut_1' => $request->penmak21,
                    'kepercayaan_anut_2' => $request->penmak22,

                    'diagnosakebidanan' => $request->diagnosakebidanan,
                    'rencanaasuhan' => $request->rencanaasuhan,
                    'status' => '1',
                    'nama_bidan' => $name,
                    'kolaborasi1' => $request->kolaborasi1,
                    'kolaborasi2' => $request->kolaborasi2,
                    'kolaborasi3' => $request->kolaborasi3,
                    'kolaborasi4' => $request->kolaborasi4,
                    'kolaborasi5' => $request->kolaborasi5,
                    'kolaborasi6' => $request->kolaborasi6,
                    'kolaborasi7' => $request->kolaborasi7,
                    'kolaborasi8' => $request->kolaborasi8,
                    'kolaborasi9' => $request->kolaborasi9,
                    'kolaborasi10' => $request->kolaborasi10,
                    'kolaborasi11' => $request->kolaborasi11,
                    'kolaborasi12' => $request->kolaborasi12,
                    'kolaborasi13' => $request->kolaborasi13,
                    'kolaborasi14' => $request->kolaborasi14,
                    'kolaborasi15' => $request->kolaborasi15,
                    'nama_bidan' =>  $name,
                    'id_user' => $user
                ]);
                $cekcppl = DB::select('UPDATE erm_cppt_kebidanan_lanjutan SET status = "3"  WHERE no_rm = ? AND kode_kunjungan = ?', [$norm, $kj]);

                $assesmenlanjutan = erm_cppt_kebidanan_lanjutan::create([
                    'tgl_input' => $now,
                    'tgl_kunjungan' => $request->tglmasuk,
                    'tgl_pengkajian' => $request->tgl_pengkajian,
                    'anamnesa_triase' => $request->anamnesis_triase_bidan,
                    'diagnosa_triase' => $request->diagnosa_triase_bidan,

                    'kode_unit' => '3005',
                    'no_rm' => $request->norm,
                    'kode_kunjungan' => $request->kj,
                    'kode_paramedis' => $kp,
                    'edukasi' => $request->kebel,

                    'edukasi_1' => $request->kebel1,
                    'edukasi_2' => $request->kebel2,
                    'edukasi_3' => $request->kebel3,
                    'edukasi_4' => $request->kebel4,
                    'edukasi_5' => $request->kebel5,
                    'edukasi_6' => $request->kebel6,
                    'edukasi_7' => $request->kebel7,
                    'edukasi_8' => $request->kebel8,
                    'edukasi_9' => $request->kebel9,
                    'edukasi_10' => $request->kebel10,
                    'edukasi_11' => $request->kebel11,
                    'pemahaman_penyakit' => $request->penyak,
                    'pemahaman_perawatan' => $request->penper,
                    'pemahaman_pengobatan' => $request->pengob,
                    'pemahaman_nutrisi' => $request->pennut,
                    'hambatan_8' => $request->hambatan,
                    'hambatan_1' => $request->hambatan1,
                    'hambatan_2' => $request->hambatan2,
                    'hambatan_3' => $request->hambatan3,
                    'hambatan_4' => $request->hambatan4,
                    'hambatan_5' => $request->hambatan5,
                    'hambatan_6' => $request->hambatan6,
                    'hambatan_7' => $request->hambatan7,
                    'keterbatasan_budaya' => $request->spiritual,
                    'jatuh_rj' => $request->rjvalue,
                    'jatuh_ds' => $request->dsvalue,
                    'jatuh_ab' => $request->abvalue,
                    'jatuh_ti' => $request->tivalue,
                    'jatuh_gn' => $request->gjvalue,
                    'jatuh_sm' => $request->smvalue,
                    'total_jatuh' => $request->totalnyeri,
                    'nutrisi_bb' => $request->bbvalue,
                    'nutrisi_bbb' => $request->bbbvalue,
                    'nutrisi_asupan' => $request->pbvalue,
                    'nutrisi_sakit_berat' => $request->sakit_berat,
                    'total_skor' => $request->total_nutrisi,
                    'penandaan_gambar' => $request->gambar1,
                    'nyeri' => $request->nyeri,

                    'nyeri_pindah' => $request->nyeri_pindah,
                    'lamanyeri' => $request->lamanyeri,
                    'rasanyeri' => $request->rasanyeri,
                    'rasanyeri1' => $request->rasanyeri1,
                    'rasanyeri2' => $request->rasanyeri2,
                    'rasanyeri3' => $request->rasanyeri3,
                    'rasanyeri4' => $request->rasanyeri4,
                    'rasanyeri5' => $request->rasanyeri5,
                    'rasanyeri6' => $request->rasanyeri6,
                    'rasanyeri7' => $request->rasanyeri7,
                    'rasanyeri8' => $request->rasanyeri8,
                    'rasanyeri9' => $request->rasanyeri9,
                    'seringnyeri' => $request->seringnyeri,
                    'serringnyeri' => $request->serringnyeri,
                    'berkurangnyeri' => $request->berkurangnyeri,
                    'rekomendasi' => $request->rekomendasi


                ]);
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }


        //riwayat obat
        try {
            $obatpllg = json_decode($_POST['obatplg'], true);
            if ($obatpllg == null) {
            } else {
                foreach ($obatpllg as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSetobat[$index] = $value;
                    if ($index == 'intruksi') {
                        $arrayindexobat[] = $dataSetobat;
                    }
                }
                // $id_detail = $this->createLayanandetail();
                foreach ($arrayindexobat as $oba) {
                    $savedetailrwytobat = [
                        // 'kode_detail_obat' => $id_detail,
                        'no_rm' => $norm,
                        'kode_kunjungan' => $kj,
                        'kode_unit' => '3005',
                        'nama_obat' => $oba['namaobat'],
                        'dosis' => $oba['dosis'],
                        'jam_pemberian' => $oba['jampemberian'],
                        'instruksi_khusus' => $oba['intruksi'],


                        'tgl_input' => $now,
                        'status' => 1

                    ];
                    $riwayat = erm_obat_pulang_igd::create($savedetailrwytobat);
                }
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => 'error input riwayat obat'
            ];
            echo json_encode($back);
            die;
        }

        //riwayat partus
        try {
            $riwayatpartus = json_decode($_POST['riwayatpartus'], true);
            if ($riwayatpartus == null) {
            } else {
                foreach ($riwayatpartus as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSetpartus[$index] = $value;
                    if ($index == 'keadaan_anak_sekarang') {
                        $arrayindexpartus[] = $dataSetpartus;
                    }
                }
                // dd($arrayindexpartus);
                // $id_detail = $this->createLayanandetail();
                foreach ($arrayindexpartus as $pts) {
                    $savedetailpartus = [
                        // 'kode_detail_obat' => $id_detail,
                        'no_rm' => $norm,
                        'kode_kunjungan' => $kj,
                        'kode_unit' => '3005',
                        'tgl_partus' => $pts['tt_partus'],
                        'tempat_partus' => $pts['tempat_partus'],
                        'umur_partus' => $pts['umur_hamil'],
                        'jenis_persalinan' => $pts['jenis_persalinan'],
                        'penolong_persalinan' => $pts['penolong_persalinan'],
                        'penyulit' => $pts['penyulit'],
                        'nifas' => $pts['nifas'],
                        'kelamin_BB' => $pts['kelamin_bb'],
                        'keadaan_anak' => $pts['keadaan_anak_sekarang'],


                        'tgl_input' => $now,
                        'status' => 1

                    ];
                    // dd($savedetailpartus);
                    $riwayat = riwayat_partus::create($savedetailpartus);
                }
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => 'error input riwayat partus'
                // 'error' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }

        //tindakan kebidanan
        try {
            $tindakanbidan = json_decode($_POST['tindakankebidanan'], true);
            if ($tindakanbidan == null) {
            } else {
                foreach ($tindakanbidan as $nama) {
                    $index = $nama['name'];
                    $value = $nama['value'];
                    $dataSet[$index] = $value;
                    if ($index == 'tindakan_kebidanan') {
                        $arrayindex[] = $dataSet;
                    }
                }
                // $id_detail = $this->createLayanandetail();
                foreach ($arrayindex as $arr) {
                    $savedetail = [
                        // 'kode_detail_obat' => $id_detail,
                        'no_rm' => $norm,
                        'kode_kunjungan' => $kj,
                        'kode_unit' => '3005',
                        'tindakan_keperawatan' => $arr['tindakan_kebidanan'],
                        'waktu_tindakan' => $arr['jam_tindakan'],
                        'tgl_input' => $now,
                        'status' => 1

                    ];
                    $tindakankebidanan = erm_tindakan_keperawatan::create($savedetail);
                }
            }
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => 'error input tindakan'
            ];
            echo json_encode($back);
            die;
        }

        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
    public function validasiassesvk(Request $request)
    {



        $kj = $request->kj;
        $norm = $request->norm;


        $now = Carbon::now();
        $user = auth()->user()->id_simrs;
        $kp = auth()->user()->kode_paramedis;

        try {
            $update = DB::select('UPDATE erm_cppt_kebidanan SET status = 2 WHERE no_rm = ? AND kode_kunjungan = ? AND STATUS = 1 ', [$norm, $kj]);
        } catch (\Exception $e) {
            $back = [
                'kode' => 200,
                'message' => $e->getMessage()
            ];
            echo json_encode($back);
            die;
        }
        // try {
        //     $delete = DB::select('DELETE FROM erm_cppt_kebidanan WHERE no_rm = ? AND kode_kunjungan = ? AND STATUS = "3" ', [$norm, $kj]);
        // } catch (\Exception $e) {
        //     $back = [
        //         'kode' => 200,
        //         'message' => $e->getMessage()
        //     ];
        //     echo json_encode($back);
        //     die;
        // }
        $back = [
            'kode' => 200,
            'message' => 'Berhasil'
        ];
        echo json_encode($back);
        die;
    }
}
