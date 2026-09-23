@if($tf == NULL)
<table class="table">
    <tbody>
        <tr>
            <td class="text-bold font-italic">Kriteria Masuk ICU : </td>
            <td>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kricu" id="kricu" value="Prioritas 1">
                            <label class="form-check-label">Prioritas 1</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kricu" id="kricu" value="Prioritas 2">
                            <label class="form-check-label">Prioritas 2</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kricu" id="kricu" value="Prioritas 3">
                            <label class="form-check-label">Prioritas 3</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kricu" id="kricu" value="Pengecualian">
                            <label class="form-check-label">Pengecualian</label>
                        </div>
                    </div>

                </div>





            </td>
        </tr>
        <tr>
            <td class="text-bold font-italic">Kriteria Keluar ICU : </td>
            <td>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kkicu" id="kkicu" value="Prioritas 1">
                            <label class="form-check-label">Prioritas 1</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kkicu" id="kkicu" value="Prioritas 2">
                            <label class="form-check-label">Prioritas 2</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kkicu" id="kkicu" value="Prioritas 3">
                            <label class="form-check-label">Prioritas 3</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kkicu" id="kkicu" value="Pengecualian">
                            <label class="form-check-label">Pengecualian</label>
                        </div>
                    </div>

                </div>





            </td>
        </tr>
        <tr>
            <td class="text-bold font-italic">Kriteria Masuk PICU : </td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="krpicu" id="krpicu" value="Pasien dengan penyakit akut (life threatening)">
                    <label class="form-check-label">Pasien dengan penyakit akut (life threatening)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="krpicu" id="krpicu" value="Environmental injury. Pasien perlu pemantauan khusus">
                    <label class="form-check-label">Environmental injury. Pasien perlu pemantauan khusus</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="krpicu" id="krpicu" value="Pasien perlu pemantauan khusus/penggunaan mesin">
                    <label class="form-check-label">Pasien perlu pemantauan khusus/penggunaan mesin</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="krpicu" id="krpicu" value="Pasieen yang membutuhkkan ventilasi mekanik">
                    <label class="form-check-label">Pasieen yang membutuhkkan ventilasi mekanik</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="krpicu" id="krpicu" value="Pasien yang berpotensi mengalami gagal nafas">
                    <label class="form-check-label">Pasien yang berpotensi mengalami gagal nafas</label>
                </div>
            </td>
        </tr>
        <tr>
            <td class="text-bold font-italic">Kriteria Keluar PICU : </td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="kkpicu" id="kkpicu" value="Keadaan umum paien sudah stabil (hemodinamik, respirasi, & neurologis) dalam 24 jam">
                    <label class="form-check-label">Keadaan umum paien sudah stabil (hemodinamik, respirasi, & neurologis) dalam 24 jam</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="kkpicu" id="kkpicu" value="Tidak memerlukan pemantaun khusus">
                    <label class="form-check-label">Tidak memerlukan pemantaun khusus</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="kkpicu" id="kkpicu" value="Tidak ada manfaat melanjutkan perawatan di PICU (Pertimbangan keluarga pasien dan tim PICU)">
                    <label class="form-check-label">Tidak ada manfaat melanjutkan perawatan di PICU (Pertimbangan keluarga pasien dan tim PICU)</label>
                </div>
            </td>
        </tr>
        <tr>
            <td class="text-bold font-italic">Kriteria Masuk NICU : </td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="krnicu" id="krnicu" value="Pasien neonatus dengan usia kehamilan, 32 minggu & / BB lahir, 1250 gram">
                    <label class="form-check-label">Pasien neonatus dengan usia kehamilan, 32 minggu & / BB lahir, 1250 gram</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="krnicu" id="krnicu" value="Pasien neonatus dengan gagal nafas akut & . perluassisted ventilator">
                    <label class="form-check-label">Pasien neonatus dengan gagal nafas akut & . perluassisted ventilator</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="krnicu" id="krnicu" value="Hemodinamik tidak stabil">
                    <label class="form-check-label">Hemodinamik tidak stabil</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="krnicu" id="krnicu" value="Pasien yang menjalani operasi besar">
                    <label class="form-check-label">Pasien yang menjalani operasi besar</label>
                </div>
            </td>
        </tr>
        <tr>
            <td class="text-bold font-italic">Kriteria Keluar NICU : </td>
            <td>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="kknicu" id="kknicu" value="Pasien neonatus dengan BB>1250 gram & tidak memerlukan bantuan support ventilator">
                    <label class="form-check-label">Pasien neonatus dengan BB>1250 gram & tidak memerlukan bantuan support ventilator</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="kknicu" id="kknicu" value="Hemodinamik stabil, ditandai dengan RR 40-60x/menit, suhu 36-37,5 derajat celsius, frekuensi jantung 120-16x/menit, tekanan darah normal sesuai usia, nilai analisa gas darah normal">
                    <label class="form-check-label">Hemodinamik stabil, ditandai dengan RR 40-60x/menit, suhu 36-37,5 derajat celsius, frekuensi jantung 120-16x/menit, tekanan darah normal sesuai usia, nilai analisa gas darah normal</label>
                </div>

            </td>
        </tr>
    </tbody>
</table>
@else
<table class="table">
    <tbody>
        <tr>
            <td class="text-bold font-italic">Kriteria Masuk ICU : </td>
            <td>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check">
                            @if($tf[0]->kriteria_masuk_icu == 'Prioritas 1')
                            <input class="form-check-input" type="checkbox" checked name="kricu" id="kricu" value="Prioritas 1">
                            <label class="form-check-label">Prioritas 1</label>
                            @else
                            <input class="form-check-input" type="checkbox" name="kricu" id="kricu" value="Prioritas 1">
                            <label class="form-check-label">Prioritas 1</label>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            @if($tf[0]->kriteria_masuk_icu == 'Prioritas 2')
                            <input class="form-check-input" type="checkbox" checked name="kricu" id="kricu" value="Prioritas 2">
                            <label class="form-check-label">Prioritas 2</label>
                            @else
                            <input class="form-check-input" type="checkbox" name="kricu" id="kricu" value="Prioritas 2">
                            <label class="form-check-label">Prioritas 2</label>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            @if($tf[0]->kriteria_masuk_icu == 'Prioritas 3')
                            <input class="form-check-input" type="checkbox" checked name="kricu" id="kricu" value="Prioritas 3">
                            <label class="form-check-label">Prioritas 3</label>
                            @else
                            <input class="form-check-input" type="checkbox" name="kricu" id="kricu" value="Prioritas 3">
                            <label class="form-check-label">Prioritas 3</label>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            @if($tf[0]->kriteria_masuk_icu == 'Pengecualian')
                            <input class="form-check-input" type="checkbox" checked name="kricu" id="kricu" value="Pengecualian">
                            <label class="form-check-label">Pengecualian</label>
                            @else
                            <input class="form-check-input" type="checkbox" name="kricu" id="kricu" value="Pengecualian">
                            <label class="form-check-label">Pengecualian</label>
                            @endif

                        </div>
                    </div>

                </div>





            </td>
        </tr>
        <tr>
            <td class="text-bold font-italic">Kriteria Keluar ICU : </td>
            <td>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check">
                            @if($tf[0]->kriteria_keluar_icu == 'Prioritas 1')
                            <input class="form-check-input" checked type="checkbox" name="kkicu" id="kkicu" value="Prioritas 1">
                            <label class="form-check-label">Prioritas 1</label>
                            @else
                            <input class="form-check-input" type="checkbox" name="kkicu" id="kkicu" value="Prioritas 1">
                            <label class="form-check-label">Prioritas 1</label>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            @if($tf[0]->kriteria_keluar_icu == 'Prioritas 2')
                            <input class="form-check-input" type="checkbox" checked name="kkicu" id="kkicu" value="Prioritas 2">
                            <label class="form-check-label">Prioritas 2</label>
                            @else
                            <input class="form-check-input" type="checkbox" name="kkicu" id="kkicu" value="Prioritas 2">
                            <label class="form-check-label">Prioritas 2</label>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            @if($tf[0]->kriteria_keluar_icu == 'Prioritas 3')
                            <input class="form-check-input" type="checkbox" checked name="kkicu" id="kkicu" value="Prioritas 3">
                            <label class="form-check-label">Prioritas 3</label>
                            @else
                            <input class="form-check-input" type="checkbox" name="kkicu" id="kkicu" value="Prioritas 3">
                            <label class="form-check-label">Prioritas 3</label>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            @if($tf[0]->kriteria_keluar_icu == 'Pengecualian')
                            <input class="form-check-input" type="checkbox" checked name="kkicu" id="kkicu" value="Pengecualian">
                            <label class="form-check-label">Pengecualian</label>
                            @else
                            <input class="form-check-input" type="checkbox" name="kkicu" id="kkicu" value="Pengecualian">
                            <label class="form-check-label">Pengecualian</label>
                            @endif

                        </div>
                    </div>

                </div>





            </td>
        </tr>
        <tr>
            <td class="text-bold font-italic">Kriteria Masuk PICU : </td>
            <td>
                <div class="form-check">
                    @if($tf[0]->kriteria_masuk_picu == 'Pasien dengan penyakit akut (life threatening)')
                    <input class="form-check-input" type="checkbox" checked name="krpicu" id="krpicu" value="Pasien dengan penyakit akut (life threatening)">
                    <label class="form-check-label">Pasien dengan penyakit akut (life threatening)</label>
                    @else
                    <input class="form-check-input" type="checkbox" name="krpicu" id="krpicu" value="Pasien dengan penyakit akut (life threatening)">
                    <label class="form-check-label">Pasien dengan penyakit akut (life threatening)</label>
                    @endif

                </div>
                <div class="form-check">
                    @if($tf[0]->kriteria_masuk_picu == 'Environmental injury. Pasien perlu pemantauan khusus')
                    <input class="form-check-input" type="checkbox" name="krpicu" checked id="krpicu" value="Environmental injury. Pasien perlu pemantauan khusus">
                    <label class="form-check-label">Environmental injury. Pasien perlu pemantauan khusus</label>
                    @else
                    <input class="form-check-input" type="checkbox" name="krpicu" id="krpicu" value="Environmental injury. Pasien perlu pemantauan khusus">
                    <label class="form-check-label">Environmental injury. Pasien perlu pemantauan khusus</label>
                    @endif

                </div>
                <div class="form-check">
                    @if($tf[0]->kriteria_masuk_picu == 'Pasien perlu pemantauan khusus/penggunaan mesin')
                    <input class="form-check-input" checked type="checkbox" name="krpicu" id="krpicu" value="Pasien perlu pemantauan khusus/penggunaan mesin">
                    <label class="form-check-label">Pasien perlu pemantauan khusus/penggunaan mesin</label>
                    @else
                    <input class="form-check-input" type="checkbox" name="krpicu" id="krpicu" value="Pasien perlu pemantauan khusus/penggunaan mesin">
                    <label class="form-check-label">Pasien perlu pemantauan khusus/penggunaan mesin</label>
                    @endif

                </div>
                <div class="form-check">
                    @if($tf[0]->kriteria_masuk_picu == 'Pasieen yang membutuhkkan ventilasi mekanik')
                    <input class="form-check-input" checked type="checkbox" name="krpicu" id="krpicu" value="Pasieen yang membutuhkkan ventilasi mekanik">
                    <label class="form-check-label">Pasieen yang membutuhkkan ventilasi meka
                        @else
                        <input class="form-check-input" type="checkbox" name="krpicu" id="krpicu" value="Pasieen yang membutuhkkan ventilasi mekanik">
                        <label class="form-check-label">Pasieen yang membutuhkkan ventilasi meka
                            @endif
                            nik</label>
                </div>
                <div class="form-check">
                    @if($tf[0]->kriteria_masuk_picu == 'Pasien yang berpotensi mengalami gagal nafas')
                    <input class="form-check-input" type="checkbox" checked name="krpicu" id="krpicu" value="Pasien yang berpotensi mengalami gagal nafas">
                    @else
                    <input class="form-check-input" type="checkbox" name="krpicu" id="krpicu" value="Pasien yang berpotensi mengalami gagal nafas">
                    @endif
                    <label class="form-check-label">Pasien yang berpotensi mengalami gagal nafas</label>
                </div>
            </td>
        </tr>
        <tr>
            <td class="text-bold font-italic">Kriteria Keluar PICU : </td>
            <td>
                <div class="form-check">
                    @if($tf[0]->kriteria_keluar_picu == 'Keadaan umum paien sudah stabil (hemodinamik, respirasi, & neurologis) dalam 24 jam')
                    <input class="form-check-input" type="checkbox" checked name="kkpicu" id="kkpicu" value="Keadaan umum paien sudah stabil (hemodinamik, respirasi, & neurologis) dalam 24 jam">
                    @else
                    <input class="form-check-input" type="checkbox" name="kkpicu" id="kkpicu" value="Keadaan umum paien sudah stabil (hemodinamik, respirasi, & neurologis) dalam 24 jam">
                    @endif
                    <label class="form-check-label">Keadaan umum paien sudah stabil (hemodinamik, respirasi, & neurologis) dalam 24 jam</label>
                </div>
                <div class="form-check">
                    @if($tf[0]->kriteria_keluar_picu == 'Tidak memerlukan pemantaun khusus')
                    <input class="form-check-input" checked type="checkbox" name="kkpicu" id="kkpicu" value="Tidak memerlukan pemantaun khusus">
                    @else
                    <input class="form-check-input" type="checkbox" name="kkpicu" id="kkpicu" value="Tidak memerlukan pemantaun khusus">
                    @endif
                    <label class="form-check-label">Tidak memerlukan pemantaun khusus</label>
                </div>
                <div class="form-check">
                    @if($tf[0]->kriteria_keluar_picu == 'Tidak ada manfaat melanjutkan perawatan di PICU (Pertimbangan keluarga pasien dan tim PICU)')
                    <input class="form-check-input" checked type="checkbox" name="kkpicu" id="kkpicu" value="Tidak ada manfaat melanjutkan perawatan di PICU (Pertimbangan keluarga pasien dan tim PICU)">
                    @else
                    <input class="form-check-input" type="checkbox" name="kkpicu" id="kkpicu" value="Tidak ada manfaat melanjutkan perawatan di PICU (Pertimbangan keluarga pasien dan tim PICU)">
                    @endif

                    <label class="form-check-label">Tidak ada manfaat melanjutkan perawatan di PICU (Pertimbangan keluarga pasien dan tim PICU)</label>
                </div>
            </td>
        </tr>
        <tr>
            <td class="text-bold font-italic">Kriteria Masuk NICU : </td>
            <td>
                <div class="form-check">
                    @if($tf[0]->kriteria_masuk_nicu == 'Pasien neonatus dengan usia kehamilan, 32 minggu & / BB lahir, 1250 gram')
                    <input class="form-check-input" checked type="checkbox" name="krnicu" id="krnicu" value="Pasien neonatus dengan usia kehamilan, 32 minggu & / BB lahir, 1250 gram">
                    @else
                    <input class="form-check-input" type="checkbox" name="krnicu" id="krnicu" value="Pasien neonatus dengan usia kehamilan, 32 minggu & / BB lahir, 1250 gram">
                    @endif

                    <label class="form-check-label">Pasien neonatus dengan usia kehamilan, 32 minggu & / BB lahir, 1250 gram</label>
                </div>
                <div class="form-check">
                    @if($tf[0]->kriteria_masuk_nicu == 'Pasien neonatus dengan gagal nafas akut & . perluassisted ventilator')
                    <input class="form-check-input" checked type="checkbox" name="krnicu" id="krnicu" value="Pasien neonatus dengan gagal nafas akut & . perluassisted ventilator">
                    @else
                    <input class="form-check-input" type="checkbox" name="krnicu" id="krnicu" value="Pasien neonatus dengan gagal nafas akut & . perluassisted ventilator">
                    @endif

                    <label class="form-check-label">Pasien neonatus dengan gagal nafas akut & . perluassisted ventilator</label>
                </div>
                <div class="form-check">
                    @if($tf[0]->kriteria_masuk_nicu == 'Hemodinamik tidak stabil')
                    <input class="form-check-input" checked type="checkbox" name="krnicu" id="krnicu" value="Hemodinamik tidak stabil">
                    @else
                    <input class="form-check-input" type="checkbox" name="krnicu" id="krnicu" value="Hemodinamik tidak stabil">
                    @endif

                    <label class="form-check-label">Hemodinamik tidak stabil</label>
                </div>
                <div class="form-check">
                    @if($tf[0]->kriteria_masuk_nicu == 'Pasien yang menjalani operasi besar')
                    <input class="form-check-input" checked type="checkbox" name="krnicu" id="krnicu" value="Pasien yang menjalani operasi besar">
                    @else
                    <input class="form-check-input" type="checkbox" name="krnicu" id="krnicu" value="Pasien yang menjalani operasi besar">
                    @endif

                    <label class="form-check-label">Pasien yang menjalani operasi besar</label>
                </div>
            </td>
        </tr>
        <tr>
            <td class="text-bold font-italic">Kriteria Keluar NICU : </td>
            <td>
                <div class="form-check">
                    @if($tf[0]->kriteria_keluar_nicu == 'Pasien neonatus dengan BB>1250 gram & tidak memerlukan bantuan support ventilator')
                    <input class="form-check-input" checked type="checkbox" name="kknicu" id="kknicu" value="Pasien neonatus dengan BB>1250 gram & tidak memerlukan bantuan support ventilator">
                    @else
                    <input class="form-check-input" type="checkbox" name="kknicu" id="kknicu" value="Pasien neonatus dengan BB>1250 gram & tidak memerlukan bantuan support ventilator">
                    @endif

                    <label class="form-check-label">Pasien neonatus dengan BB>1250 gram & tidak memerlukan bantuan support ventilator</label>
                </div>
                <div class="form-check">
                    @if($tf[0]->kriteria_keluar_nicu == 'Hemodinamik stabil, ditandai dengan RR 40-60x/menit, suhu 36-37,5 derajat celsius, frekuensi jantung 120-16x/menit, tekanan darah normal sesuai usia, nilai analisa gas darah norma')
                    <input class="form-check-input" checked type="checkbox" name="kknicu" id="kknicu" value="Hemodinamik stabil, ditandai dengan RR 40-60x/menit, suhu 36-37,5 derajat celsius, frekuensi jantung 120-16x/menit, tekanan darah normal sesuai usia, nilai analisa gas darah normal">
                    @else
                    <input class="form-check-input" type="checkbox" name="kknicu" id="kknicu" value="Hemodinamik stabil, ditandai dengan RR 40-60x/menit, suhu 36-37,5 derajat celsius, frekuensi jantung 120-16x/menit, tekanan darah normal sesuai usia, nilai analisa gas darah normal">
                    @endif

                    <label class="form-check-label">Hemodinamik stabil, ditandai dengan RR 40-60x/menit, suhu 36-37,5 derajat celsius, frekuensi jantung 120-16x/menit, tekanan darah normal sesuai usia, nilai analisa gas darah normal</label>
                </div>

            </td>
        </tr>
    </tbody>
</table>

@endif