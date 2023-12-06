<div class="card-header">
    <h3 class="card-title">TRIASE ANAK</h3>
</div>

<div class="card-body">
    <div class="card">
        <div class="card-header text-bold bg-success">+ SKRINING PASIEN IGD +</div>
        <form action="" class="formpemeriksaantriase">
            <div class="card-body">
                <!-- skrining pasien -->
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-bold font-italic">Nama pasien</td>
                            <td colspan="3">

                                <textarea class="form-control" id="namapasien" name="namapasien" placeholder="Ketik nama pasien ..."></textarea>

                            </td>
                        </tr>
                        <tr hidden="">
                            <td class="text-bold font-italic">Tanggal Kunjungan</td>
                            <td><input readonly="" type="text" name="tanggalkunjungan" class="form-control"
                                    value="2023-09-07 07:43:55"></td>
                            <td class="text-bold font-italic">Tanggal Assesmen</td>
                            <td><input type="text" name="tanggalassesmen" class="form-control datepicker"
                                    data-date-format="yyyy-mm-dd"></td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Sumber Data</td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata"
                                        value="Pasien Sendiri">
                                    <label class="form-check-label" for="inlineRadio1">Pasien Sendiri /
                                        Autoanamase</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata"
                                        value="Keluarga">
                                    <label class="form-check-label" for="inlineRadio2">Keluarga / Alloanamnesa</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Klasifikasi pasien</td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klasifikasipasien"
                                        id="klasifikasipasien" value="IGD">
                                    <label class="form-check-label" for="inlineRadio1">IGD</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klasifikasipasien"
                                        id="klasifikasipasien" value="IGK">
                                    <label class="form-check-label" for="inlineRadio2">IGD KEBIDANAN</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klasifikasipasien"
                                        id="klasifikasipasien" value="PULANG">
                                    <label class="form-check-label" for="inlineRadio2">Pulang</label>
                                </div>
                            </td>
                        </tr>
                        {{-- <tr>
                            <td class="text-bold font-italic">Primary Survey</td>
                            <td colspan="3">
                                <h5> A (Airway) , B (Breathing), C (Circulation), D (Disability), E (Exposure)</h5>
                                <h5 class="text-bold">Keterangan</h5>
                                <textarea class="form-control" id="primarysurvey" name="primarysurvey" placeholder="Ketik primary survey ..."></textarea>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Pemeriksaan Fisik</td>
                            <td colspan="3">

                                <textarea class="form-control" id="pemeriksaanfisik" name="pemeriksaanfisik" placeholder="Ketik pemeriksaan fisik ..."></textarea>

                            </td>
                        </tr>

                        <tr>
                            <td class="text-bold font-italic">Riwayat Penyakit / Pengobatan Sebelumnya</td>
                            <td colspan="3">

                                <textarea class="form-control" id="riwayatpenyakit" name="riwayatpenyakit" placeholder="Ketik riwayat penyakit ..."></textarea>

                            </td>
                        </tr> --}}
                    </tbody>
                </table>
                <div class="accordion " id="accordionExample">

                    <div class="card-header bg-secondary" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Triase (ATS : Australian Triage Scale)
                                ANAK
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">




                        <table class=" table">
                            <tbody>
                                <tr>
                                    <td class="text-bold ">KATEGORI TRIASE </td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kategoritriase"
                                                        name="kategoritriase" value="Medikal">
                                                    <label class="form-check-label" for="exampleCheck1">Medikal</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="kategoritriase" name="kategoritriase" value="Bedah Paru">
                                                    <label class="form-check-label" for="exampleCheck1">Bedah
                                                        Paru</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="kategoritriase" name="kategoritriase" value="Obgyn">
                                                    <label class="form-check-label" for="exampleCheck1">Obgyn
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="kategoritriase" name="kategoritriase" value="Anak">
                                                    <label class="form-check-label" for="exampleCheck1">Anak
                                                    </label>
                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold">PEMERIKSAAN</td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2 bg-danger">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="jenisats"
                                                        name="jenisats" value="ATS1 Resusitasi">
                                                    <label class="form-check-label" for="exampleCheck1">ATS1
                                                        <br>Resusitasi</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2" style="background-color: chocolate;">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="jenisats"
                                                        name="jenisats" value="ATS2 Emergency">
                                                    <label class="form-check-label" for="exampleCheck1">ATS2 <br>
                                                        Emergency</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 bg-warning">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="jenisats"
                                                        name="jenisats" value="ATS3 Urgent">
                                                    <label class="form-check-label" for="exampleCheck1">ATS3 <br>
                                                        Urgent
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 bg-success">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="jenisats"
                                                        name="jenisats" value="ATS4 Non Urgent">
                                                    <label class="form-check-label" for="exampleCheck1">ATS4 <br> Non
                                                        Urgent
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 bg-primary">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="jenisats"
                                                        name="jenisats" value="ATS5 False Emergency">
                                                    <label class="form-check-label" for="exampleCheck1">ATS5 <br>
                                                        False Emergency
                                                    </label>
                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold">RESPON</td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                    <label class="form-check-label" for="exampleCheck1">Segera</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <label class="form-check-label" for="exampleCheck1">10 Menit
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <label class="form-check-label" for="exampleCheck1">30 Menit
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <label class="form-check-label" for="exampleCheck1">60 Menit
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <label class="form-check-label" for="exampleCheck1">120 Menit
                                                    </label>
                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold">KESADARAN</td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="tidakada"
                                                        name="tidakada" value="Tidak ada">
                                                    <label class="form-check-label" for="exampleCheck1">Tidak
                                                        ada</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="penurunan"
                                                        name="penurunan" value="Penurunan Kesadaran">
                                                    <label class="form-check-label" for="exampleCheck1">Penurunan
                                                        Kesadaran</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="unconsable"
                                                        name="unconsable" value="Unconsable">
                                                    <label class="form-check-label" for="exampleCheck1">Unconsable
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="consolable"
                                                        name="consolable" value="Consolable">
                                                    <label class="form-check-label" for="exampleCheck1">Consolable
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="tidakberubah"
                                                        name="tidakberubah"
                                                        value="Tidak ada perbuahan perilaku atau tanda vital">
                                                    <label class="form-check-label" for="exampleCheck1">Tidak ada
                                                        perbuahan perilaku atau tanda vital
                                                    </label>
                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">

                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="letargis"
                                                        name="letargis" value="Letargis">
                                                    <label class="form-check-label"
                                                        for="exampleCheck1">Letargis</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="atypical"
                                                        name="atypical" value="Atypical Behaviour">
                                                    <label class="form-check-label" for="exampleCheck1">Atypical
                                                        Behaviour
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="atypical1"
                                                        name="atypical1" value="Atypical Behaviour">
                                                    <label class="form-check-label" for="exampleCheck1">Atypical
                                                        Behaviour
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">

                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="tidaknetek"
                                                        name="tidaknetek" value="Tidak Mau Menetek">
                                                    <label class="form-check-label" for="exampleCheck1">Tidak Mau
                                                        Menetek
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="tidakriwayat"
                                                        name="tidakriwayat" value="Tidak Ada Riwayat">
                                                    <label class="form-check-label" for="exampleCheck1">Tidak Ada
                                                        Riwayat
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold">UPAYA NAFAS</td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="gagalnafas"
                                                        name="gagalnafas" value="Gagal Nafas">
                                                    <label class="form-check-label" for="exampleCheck1">Gagal
                                                        Nafas</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="rr"
                                                        name="rr" value="RR < normal ± 2 SD">
                                                    <label class="form-check-label" for="exampleCheck1">RR < normal ±
                                                            2 SD</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="rr1"
                                                        name="rr1" value="RR < normal ± 1 SD">
                                                    <label class="form-check-label" for="exampleCheck1">RR < normal ±
                                                            1 SD </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="laju1"
                                                        name="laju1" value="Laju Nafas normal sesuai usia">
                                                    <label class="form-check-label" for="exampleCheck1">Laju Nafas
                                                        normal sesuai usia
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="laju2"
                                                        name="laju2"
                                                        value="Tidak ada perbuahan perilaku atau tanda vital">
                                                    <label class="form-check-label" for="exampleCheck1">Laju Nafas
                                                        normal sesuai usia
                                                    </label>
                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">

                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="rr2"
                                                        name="rr2" value="RR > normal ± 2 SD">
                                                    <label class="form-check-label" for="exampleCheck1">RR > normal ±
                                                        2 SD</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="rr3"
                                                        name="rr3" value="RR > normal ± 1 SD">
                                                    <label class="form-check-label" for="exampleCheck1">RR > normal ±
                                                        1 SD
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">

                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="stdr"
                                                        name="stdr" value="Stidor jelas">
                                                    <label class="form-check-label" for="exampleCheck1">Stidor
                                                        jelas</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="stdr1"
                                                        name="stdr1" value="Stidor">
                                                    <label class="form-check-label" for="exampleCheck1">Stidor
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">

                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="distress"
                                                        name="distress" value="Distress nafas">
                                                    <label class="form-check-label" for="exampleCheck1">Distress
                                                        nafas</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="distress1"
                                                        name="distress1" value="Distress nafas ringan">
                                                    <label class="form-check-label" for="exampleCheck1">Distress nafas
                                                        ringan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold">SIRKULASI</td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="hentijantung"
                                                        name="hentijantung" value="Henti Jantung">
                                                    <label class="form-check-label" for="exampleCheck1">Henti
                                                        Jantung</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="rr4"
                                                        name="rr4" value="RR < normal ± 2 SD">
                                                    <label class="form-check-label" for="exampleCheck1">RR < normal ±
                                                            2 SD</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="rr5"
                                                        name="rr5" value="RR < normal ± 1 SD">
                                                    <label class="form-check-label" for="exampleCheck1">RR < normal ±
                                                            1 SD </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="laju3"
                                                        name="laju3" value="Laju Nafas normal sesuai usia">
                                                    <label class="form-check-label" for="exampleCheck1">Laju Nafas
                                                        normal sesuai usia
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="laju4"
                                                        name="laju4"
                                                        value="Tidak ada perbuahan perilaku atau tanda vital">
                                                    <label class="form-check-label" for="exampleCheck1">Laju Nafas
                                                        normal sesuai usia
                                                    </label>
                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="syok"
                                                        name="syok" value="Syok">
                                                    <label class="form-check-label" for="exampleCheck1">Syok</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="rr6"
                                                        name="rr6" value="RR > normal ± 2 SD">
                                                    <label class="form-check-label" for="exampleCheck1">RR > normal ±
                                                        2 SD</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="rr7"
                                                        name="rr7" value="RR > normal ± 1 SD">
                                                    <label class="form-check-label" for="exampleCheck1">RR > normal ±
                                                        1 SD
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="sianosis"
                                                        name="sianosis" value="Sianosis">
                                                    <label class="form-check-label"
                                                        for="exampleCheck1">Sianosis</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="waktu"
                                                        name="waktu" value="Waktu pengisian kapiter > 4 detik">
                                                    <label class="form-check-label" for="exampleCheck1">Waktu
                                                        pengisian kapiter > 4 detik</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="waktu1"
                                                        name="waktu1" value="Waktu pengisian kapiter > 2 detik">
                                                    <label class="form-check-label" for="exampleCheck1">Waktu
                                                        pengisian kapiter > 2 detik
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h5 class="text-center"> Tabel Respiratory Rate (RR) dan Heart Rate (HR) pada anak usia
                            (lingkari RR dan HR sesuai dengan kategori usia)</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th rowspan="2"> Usia</th>
                                    <th class="text-center" colspan="3">Respiratory Rate (RR)</th>
                                    <th class="text-center" colspan="3"> Heart Rate (HR)</th>
                                </tr>
                                <tr>
                                    <th>+/-2SD</th>
                                    <th>+/-1SD</th>
                                    <th>Batas Normal</th>
                                    <th>+/-2SD</th>
                                    <th>+/-1SD</th>
                                    <th>Batas Normal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"> Lahir - 3 bulan </td>
                                    <td class="text-center"> 10 - 80 </td>
                                    <td class="text-center"> 20 - 70 </td>
                                    <td class="text-center"> 30 - 60 </td>
                                    <td class="text-center"> 40 - 230 </td>
                                    <td class="text-center"> 65 - 205 </td>
                                    <td class="text-center"> 90 - 180 </td>
                                </tr>
                                <tr>
                                    <td class="text-center"> 2 bulan - 6 bulan </td>
                                    <td class="text-center"> 10 - 80 </td>
                                    <td class="text-center"> 20 - 70 </td>
                                    <td class="text-center"> 30 - 60 </td>
                                    <td class="text-center"> 40 - 210 </td>
                                    <td class="text-center"> 63 - 180 </td>
                                    <td class="text-center"> 80 - 160 </td>
                                </tr>
                                <tr>
                                    <td class="text-center"> 6 bulan - 1 tahun </td>
                                    <td class="text-center"> 10 - 60 </td>
                                    <td class="text-center"> 17 - 55 </td>
                                    <td class="text-center"> 25 - 45 </td>
                                    <td class="text-center"> 40 - 180 </td>
                                    <td class="text-center"> 60 - 160 </td>
                                    <td class="text-center"> 80 - 140 </td>
                                </tr>
                                <tr>
                                    <td class="text-center"> 1 tahun - 3 tahun </td>
                                    <td class="text-center"> 10 - 40 </td>
                                    <td class="text-center"> 15 - 35 </td>
                                    <td class="text-center"> 20 - 30 </td>
                                    <td class="text-center"> 40 - 165 </td>
                                    <td class="text-center"> 58 - 145 </td>
                                    <td class="text-center"> 75 - 130 </td>
                                </tr>
                                <tr>
                                    <td class="text-center"> 6 tahun </td>
                                    <td class="text-center"> 8 - 32 </td>
                                    <td class="text-center"> 12 - 28 </td>
                                    <td class="text-center"> 16 - 24 </td>
                                    <td class="text-center"> 40 - 140 </td>
                                    <td class="text-center"> 55 - 125 </td>
                                    <td class="text-center"> 70 - 110 </td>
                                </tr>
                                <tr>
                                    <td class="text-center"> 10 tahun </td>
                                    <td class="text-center"> 8 - 26 </td>
                                    <td class="text-center"> 10 - 24 </td>
                                    <td class="text-center"> 14 - 20 </td>
                                    <td class="text-center"> 30 - 120 </td>
                                    <td class="text-center"> 45 - 105 </td>
                                    <td class="text-center"> 60 - 90 </td>
                                </tr>
                            </tbody>

                        </table>

                        <table class=" table">
                            <tbody>
                                <tr>
                                    <td class="text-bold">SISTEM RESPIRASI</td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="gangguan"
                                                        name="gangguan" value="Gangguan Saluran Pernafasan">
                                                    <label class="form-check-label" for="exampleCheck1">Gangguan
                                                        Saluran Pernafasan</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="stdr2"
                                                        name="stdr2" value="Stridor jelas">
                                                    <label class="form-check-label" for="exampleCheck1">Stridor
                                                        jelas</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="stdr3"
                                                        name="stdr3" value="Stridor">
                                                    <label class="form-check-label" for="exampleCheck1">Stridor
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="asma"
                                                        name="asma" value="Serangan asma ringan">
                                                    <label class="form-check-label" for="exampleCheck1">Serangan asma
                                                        ringan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="gagalnafas1"
                                                        name="gagalnafas1" value="Gagal nafas">
                                                    <label class="form-check-label" for="exampleCheck1">Gagal
                                                        nafas</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="distressnafas" name="distressnafas"
                                                        value="Distress nafas ">
                                                    <label class="form-check-label" for="exampleCheck1">Distress nafas
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="distressnafas1" name="distressnafas1"
                                                        value="Distress nafas ringan">
                                                    <label class="form-check-label" for="exampleCheck1">Distress nafas
                                                        ringan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="asp1"
                                                        name="asp1"
                                                        value="Kemungkinan Aspirasi benda asing tanpa distress nafas">
                                                    <label class="form-check-label" for="exampleCheck1">Kemungkinan
                                                        Aspirasi benda asing tanpa distress nafas
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="T"
                                                        name="T" value="T thorax disertai distress nafas">
                                                    <label class="form-check-label" for="exampleCheck1">T thorax
                                                        disertai distress nafas</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="asmaber"
                                                        name="asmaber" value="Asma Berat">
                                                    <label class="form-check-label" for="exampleCheck1">Asma
                                                        Berat</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="serangan1"
                                                        name="serangan1" value="Serangan asma sedang">
                                                    <label class="form-check-label" for="exampleCheck1">Serangan asma
                                                        sedang
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="trauma"
                                                        name="trauma"
                                                        value="Trauma thorax minor tanpa distress nafas">
                                                    <label class="form-check-label" for="exampleCheck1">Trauma thorax
                                                        minor tanpa distress nafas
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">

                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="aspirasi2"
                                                        name="aspirasi2"
                                                        value="Aspirasi benda asing dengan distress nafas">
                                                    <label class="form-check-label" for="exampleCheck1">Aspirasi benda
                                                        asing dengan distress nafas</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="aspirasi3"
                                                        name="aspirasi3" value="Aspirasi benda asing">
                                                    <label class="form-check-label" for="exampleCheck1">Aspirasi benda
                                                        asing
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">

                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="trauma1"
                                                        name="trauma1" value="Trauma inhealed/keracunan">
                                                    <label class="form-check-label" for="exampleCheck1">Trauma
                                                        inhealed/keracunan</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="batukber"
                                                        name="batukber" value="Batuk berulang dengan distress nafas">
                                                    <label class="form-check-label" for="exampleCheck1">Batuk berulang
                                                        dengan distress nafas
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold">SISTEM KARDIOVASKULAR </td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="hipo"
                                                        name="hipo" value="Hipotensi">
                                                    <label class="form-check-label"
                                                        for="exampleCheck1">Hipotensi</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="takikardia"
                                                        name="takikardia" value="Takikardia ++">
                                                    <label class="form-check-label" for="exampleCheck1">Takikardia
                                                        ++</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="takikardia1"
                                                        name="takikardia1" value="Takikardia">
                                                    <label class="form-check-label" for="exampleCheck1">Takikardia
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="nyerda"
                                                        name="nyerda" value="Nyeri dada">
                                                    <label class="form-check-label" for="exampleCheck1">Nyeri dada
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="node"
                                                        name="node" value="Tidak ada dehidrasi">
                                                    <label class="form-check-label" for="exampleCheck1">Tidak ada
                                                        dehidrasi
                                                    </label>
                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"> </td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="pendarahan"
                                                        name="pendarahan"
                                                        value="Pendarahan yang memerlukan kontrol bedah">
                                                    <label class="form-check-label" for="exampleCheck1">Pendarahan
                                                        yang memerlukan kontrol bedah</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="bradikardia"
                                                        name="bradikardia" value="Bradikardia">
                                                    <label class="form-check-label"
                                                        for="exampleCheck1">Bradikardia</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="dehi1"
                                                        name="dehi1" value="Dehidrasi">
                                                    <label class="form-check-label" for="exampleCheck1">Dehidrasi
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"> </td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">

                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="dehi2"
                                                        name="dehi2" value="Dehidrasi berat">
                                                    <label class="form-check-label" for="exampleCheck1">Dehidrasi
                                                        berat</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="pendarahan1"
                                                        name="pendarahan1" value="Pendarahan ringan tidak kontrol">
                                                    <label class="form-check-label" for="exampleCheck1">Pendarahan
                                                        ringan tidak kontrol
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"> </td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">

                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="pendarahan2"
                                                        name="pendarahan2" value="Pendarahan masif tidak terkontrol">
                                                    <label class="form-check-label" for="exampleCheck1">Pendarahan
                                                        masif tidak terkontrol
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold">SISTEM PERNAFASAN </td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="trauma2"
                                                        name="trauma2" value="Trauma Kepala berat">
                                                    <label class="form-check-label" for="exampleCheck1">Trauma Kepala
                                                        berat</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="trauma3"
                                                        name="trauma3" value="Trauma kepala sedang">
                                                    <label class="form-check-label" for="exampleCheck1">Trauma kepala
                                                        sedang</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="trauma4"
                                                        name="trauma4" value="Trauma kepala ringan">
                                                    <label class="form-check-label" for="exampleCheck1">Trauma kepala
                                                        ringan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="trauma5"
                                                        name="trauma5"
                                                        value="Trauma kepala ringan tanpa muntah dan penurunan kesadaran">
                                                    <label class="form-check-label" for="exampleCheck1">Trauma kepala
                                                        ringan tanpa muntah dan penurunan kesadaran
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"> </td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="gcs10"
                                                        name="gcs10" value="GCS < 10">
                                                    <label class="form-check-label" for="exampleCheck1">GCS <
                                                            10</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="gcs13"
                                                        name="gcs13" value="GCS < 13">
                                                    <label class="form-check-label" for="exampleCheck1">GCS <
                                                            13</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="gcs15"
                                                        name="gcs15" value="GCS < 15 Riwayat penurunan kesadaran">
                                                    <label class="form-check-label" for="exampleCheck1">GCS < 15
                                                            Riwayat penurunan kesadaran </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="sakitpala"
                                                        name="sakitpala" value="Sakit kepala kronis">
                                                    <label class="form-check-label" for="exampleCheck1">Sakit kepala
                                                        kronis
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"> </td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kejang"
                                                        name="kejang" value="Kejang berulang">
                                                    <label class="form-check-label" for="exampleCheck1">Kejang
                                                        berulang</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="penurunankes"
                                                        name="penurunankes" value="Penurunan Kesadaran">
                                                    <label class="form-check-label" for="exampleCheck1">Penurunan
                                                        Kesadaran</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="sakitpala1"
                                                        name="sakitpala1" value="Sakit kepala kronis">
                                                    <label class="form-check-label" for="exampleCheck1">Sakit kepala
                                                        kronis
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"> </td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="kejangberulang" name="kejangberulang"
                                                        value="Kejang berulang">
                                                    <label class="form-check-label" for="exampleCheck1">Kejang
                                                        berulang</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="penurunankes1" name="penurunankes1"
                                                        value="Penurunan Kesadaran">
                                                    <label class="form-check-label" for="exampleCheck1">Penurunan
                                                        Kesadaran</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="sakitpala2" name="sakitpala2"
                                                        value="Sakit kepala kronis">
                                                    <label class="form-check-label" for="exampleCheck1">Sakit kepala
                                                        kronis
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"> </td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="tisa"
                                                        name="tisa" value="Tidak sadar">
                                                    <label class="form-check-label" for="exampleCheck1">Tidak
                                                        sadar</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="sapal"
                                                        name="sapal" value="Sakit kepala berat mendadak">
                                                    <label class="form-check-label" for="exampleCheck1">Sakit kepala
                                                        berat mendadak</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="shunt"
                                                        name="shunt" value="Kemungkinan disfungsi shunt">
                                                    <label class="form-check-label" for="exampleCheck1">Kemungkinan
                                                        disfungsi shunt
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"> </td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">

                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="shunt1"
                                                        name="shunt1" value="Disfungsi shunt">
                                                    <label class="form-check-label" for="exampleCheck1">Disfungsi
                                                        shunt</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kjg"
                                                        name="kjg" value="Kejang">
                                                    <label class="form-check-label" for="exampleCheck1">Kejang
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold">CHILD ABUSE</td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="konflik"
                                                        name="konflik" value="Daerah Konfilik">
                                                    <label class="form-check-label" for="exampleCheck1">Daerah
                                                        Konfilik</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="risikoch"
                                                        name="risikoch" value="memiliki risiko child abuse">
                                                    <label class="form-check-label" for="exampleCheck1">memiliki
                                                        risiko child abuse</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="ksex"
                                                        name="ksex"
                                                        value="Mengalami kekerasan fisik atau kekerasan seksual < 48 jam">
                                                    <label class="form-check-label" for="exampleCheck1">Mengalami
                                                        kekerasan fisik atau kekerasan seksual < 48 jam </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kdrt"
                                                        name="kdrt"
                                                        value="Riwayat adanya kekerasan dalam keluarga">
                                                    <label class="form-check-label" for="exampleCheck1">Riwayat
                                                        adanya kekerasan dalam keluarga
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold">Lain-lain</td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="anafileksis" name="anafileksis" value="Anafileksis">
                                                    <label class="form-check-label"
                                                        for="exampleCheck1">Anafileksis</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="letargis1"
                                                        name="letargis1" value="Tampak Letargis">
                                                    <label class="form-check-label" for="exampleCheck1">Tampak
                                                        Letargis</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="infant"
                                                        name="infant" value="Unconsolable Infant">
                                                    <label class="form-check-label" for="exampleCheck1">Unconsolable
                                                        Infant
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="rewel"
                                                        name="rewel" value="Bayi Rewel">
                                                    <label class="form-check-label" for="exampleCheck1">Bayi Rewel
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="dm"
                                                        name="dm" value="DM dengan penurunan kesadaran">
                                                    <label class="form-check-label" for="exampleCheck1">DM dengan
                                                        penurunan kesadaran</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="bayi7"
                                                        name="bayi7" value="Bayi < 7 hari">
                                                    <label class="form-check-label" for="exampleCheck1">Bayi < 7
                                                            hari</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="bayi3"
                                                        name="bayi3"
                                                        value="Bayi 3 - 36bulan dengan suhu > 38.5°C">
                                                    <label class="form-check-label" for="exampleCheck1">Bayi 3 -
                                                        36bulan dengan suhu > 38.5°C
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="bayi36"
                                                        name="bayi36"
                                                        value="Bayi > 36bulan dengan suhu > 38°C dan tidak tampak toksik">
                                                    <label class="form-check-label" for="exampleCheck1">Bayi >
                                                        36bulan dengan suhu > 38°C dan tidak tampak toksik
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">

                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="bayi3bln"
                                                        name="bayi3bln"
                                                        value="Bayi 3 - 36bulan dengan suhu > 38°C dan tampak toksik">
                                                    <label class="form-check-label" for="exampleCheck1">Bayi 3 -
                                                        36bulan dengan suhu > 38°C dan tampak toksik</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="reaksi"
                                                        name="reaksi" value="Reaksi Alergi sedang">
                                                    <label class="form-check-label" for="exampleCheck1">Reaksi
                                                        Alergi sedang
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="reaksi1"
                                                        name="reaksi1" value="Reaksi Alergi lokal">
                                                    <label class="form-check-label" for="exampleCheck1">Reaksi
                                                        Alergi lokal
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">

                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="gangguan1"
                                                        name="gangguan1" value="Gangguan pendarahan">
                                                    <label class="form-check-label" for="exampleCheck1">Gangguan
                                                        pendarahan</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kesulitan"
                                                        name="kesulitan" value="Kesulitan makan pada bayi">
                                                    <label class="form-check-label" for="exampleCheck1">Kesulitan
                                                        makan pada bayi
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="perilaku"
                                                        name="perilaku" value="Perilaku atipical">
                                                    <label class="form-check-label" for="exampleCheck1">Perilaku
                                                        atipical
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">

                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="KAD"
                                                        name="KAD" value="KAD">
                                                    <label class="form-check-label" for="exampleCheck1">KAD</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>

                {{-- <button class="btn btn-secondary triasedewasa" style="margin-bottom: 10px; margin-top:10px"><i
                        class="fas fa-male mr-2"></i> Triase Dewasa</button>
                <button class="btn btn-secondary triaseanak" style="margin-bottom: 10px; margin-top:10px"><i
                        class="fas fa-child mr-2"></i> Triase Anak</button> --}}

                <!-- triase ats  -->
                <div class="triaseview">

                </div>
                <!-- triase   -->
                {{-- <div class="accordion" id="accordionExample1" style="margin-top: 10px;">

                    <div class="card-header bg-secondary" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true"
                                aria-controls="collapseOne1">
                                <i class="bi bi-ticket-detailed mr-1 ml-1"></i> TRIASE
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne1" class="collapse" aria-labelledby="headingOne"
                        data-parent="#accordionExample1">
                        <div class="card-body bg-light">

                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-bold font-italic">kesadaran : </td>

                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="kesadaran_lain"
                                                    name="kesadaran_lain" value="Compos Mentis">
                                                <label class="form-check-label" for="exampleCheck1">Compos Mentis
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="kesadaran_lain"
                                                    name="kesadaran_lain" value="Letargik">
                                                <label class="form-check-label" for="exampleCheck1">Letargik
                                                </label>
                                            </div>
                                        </td>


                                    </tr>

                                    <tr>
                                        <td colspan="4">

                                            <textarea class="form-control" id="kesadaran_lain" name="kesadaran_lain" placeholder=""></textarea>

                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="text-bold font-italic">Status Psikologi</td>

                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps"
                                                    name="statusps" value="Marah">
                                                <label class="form-check-label" for="exampleCheck1">Marah
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps"
                                                    name="statusps" value="Depresi">
                                                <label class="form-check-label" for="exampleCheck1">Depresi
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps"
                                                    name="statusps" value="Takut">
                                                <label class="form-check-label" for="exampleCheck1">Takut
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps"
                                                    name="statusps" value="Gelisah">
                                                <label class="form-check-label" for="exampleCheck1">Gelisah
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps"
                                                    name="statusps" value="Psikotik">
                                                <label class="form-check-label" for="exampleCheck1">Psikotik
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps"
                                                    name="statusps" value="Cemas">
                                                <label class="form-check-label" for="exampleCheck1">Cemas
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps"
                                                    name="statusps" value="Kecenderungan bunuh diri">
                                                <label class="form-check-label" for="exampleCheck1">Kecenderungan
                                                    bunuh diri
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps"
                                                    name="statusps" value="Tidak Ada Masalah">
                                                <label class="form-check-label" for="exampleCheck1">Tidak Ada Masalah
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps"
                                                    name="statusps" value="lain-lain">
                                                <label class="form-check-label" for="exampleCheck1">lain-lain <input
                                                        type="text">
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold font-italic">Keluhan Utama</td>
                                        <td colspan="4">

                                            <textarea class="form-control" id="kelut" name="kelut" placeholder=""></textarea>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold font-italic">Pemeriksaan Fisik (Temuan Signifikan) :</td>
                                        <td colspan="4">

                                            <textarea class="form-control" id="pemfis" name="pemfis" placeholder=""></textarea>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold font-italic">Diagnosa Triase :</td>
                                        <td colspan="4">

                                            <textarea class="form-control" id="ditri" name="ditri" placeholder=""></textarea>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold font-italic">Tata Laksana :</td>
                                        <td colspan="4">

                                            <textarea class="form-control" id="talak" name="talak" placeholder=""></textarea>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <div class="accordion" id="accordionExample4" style="margin-top: 10px;">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne4" aria-expanded="true"
                                    aria-controls="collapseOne4">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Keadaan Pasien Saat Keluar
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne4" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample4">
                            <div class="card-body bg-light">

                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kondisi"
                                                        name="kondisi" value="Sembuh">
                                                    <label class="form-check-label" for="exampleCheck1">Sembuh
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kondisi"
                                                        name="kondisi" value="Tidak Sembuh">
                                                    <label class="form-check-label" for="exampleCheck1">Tidak Sembuh
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kondisi"
                                                        name="kondisi" value="Perbaikan">
                                                    <label class="form-check-label" for="exampleCheck1">Perbaikan
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kondisi"
                                                        name="kondisi" value="Meninggal">
                                                    <label class="form-check-label" for="exampleCheck1">Meninggal
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="4">

                                                <textarea class="form-control" id="kondisi" name="kondisi" placeholder=""></textarea>

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div type="button" class="btn float-right btn-success simpantriaseanak"
                    style="margin-top: 20px;">
                    SIMPAN
                </div>
            </div>
        </form>


    </div>
</div>
</div>

<script>
    $(".simpantriaseanak").click(function() {
        var data = $('.formpemeriksaantriase').serializeArray();
        var antrian = $('#antrian').val()
        var namapasien = $('#namapasien').val()
        var sumberdata = $("#sumberdata:checked").val();
        var primarysurvey = $('#primarysurvey').val()
        var pemeriksaanfisik = $('#pemeriksaanfisik').val()
        var klasifikasipasien = $("#klasifikasipasien:checked").val();
        var riwayatpenyakit = $("#riwayatpenyakit").val();
        var kategoritriase = $("#kategoritriase:checked").val();
        // var bedah = $("#bedah:checked").val();
        // var obgyn = $("#obgyn:checked").val();
        // var anak = $("#anak:checked").val();
        // var jenisats = $("#jenisats:checked").val();

        // var ats1 = $("#ats1:checked").val();
        // var ats2 = $("#ats2:checked").val();
        // var ats3 = $("#ats3:checked").val();
        // var ats4 = $("#ats4:checked").val();
        // var ats5 = $("#ats5:checked").val();


        //kesadaran
        var tidakada = $('#tidakada:checked').val();
        var penurunan = $('#penurunan:checked').val();
        var unconsable = $('#unconsable:checked').val();
        var consolable = $('#consolable:checked').val();
        var tidakberubah = $('#tidakberubah:checked').val();
        var letargis = $('#letargis:checked').val();
        var atypical = $('#atypical:checked').val();
        var atypical1 = $('#atypical1:checked').val();
        var tidaknetek = $('#tidaknetek:checked').val();
        var tidakriwayat = $('#tidakriwayat:checked').val();
        //upaya nafas
        var gagalnafas = $('#gagalnafas:checked').val();
        var rr = $('#rr:checked').val();
        var rr1 = $('#rr1:checked').val();
        var laju1 = $('#laju1:checked').val();
        var laju2 = $('#laju2:checked').val();
        var rr2 = $('#rr2:checked').val();
        var rr3 = $('#rr3:checked').val();
        var stdr = $('#stdr:checked').val();
        var stdr1 = $('#stdr1:checked').val();
        var distress = $('#distress:checked').val();
        var distress1 = $('#distress1:checked').val();

        //sirkulasi
        var hentijantung = $('#hentijantung:checked').val();
        var rr4 = $('#rr4:checked').val();
        var rr5 = $('#rr5:checked').val();
        var freknafas = $('#freknafas:checked').val();
        var laju3 = $('#laju3:checked').val();
        var laju4 = $('#laju4:checked').val();
        var syok = $('#syok:checked').val();
        var rr6 = $('#rr6:checked').val();


        var rr7 = $('#rr7:checked').val();
        var sianosis = $('#sianosis:checked').val();
        var waktu = $('#waktu:checked').val();
        var waktu1 = $('#waktu1:checked').val();
        //sistem respirasi
        var gangguan = $('#gangguan:checked').val();
        var stdr2 = $('#stdr2:checked').val();
        var stdr3 = $('#stdr3:checked').val();
        var asma = $('#asma:checked').val();
        var gagalnafas1 = $('#gagalnafas1:checked').val();
        var distressnafas = $('#distressnafas:checked').val();
        var distressnafas1 = $('#distressnafas1:checked').val();
        var T = $('#T:checked').val();
        var asmaber = $('#asmaber:checked').val();
        var serangan1 = $('#serangan1:checked').val();
        var trauma = $('#trauma:checked').val();
        var aspirasi2 = $('#aspirasi2:checked').val();
        var aspirasi3 = $('#aspirasi3:checked').val();
        var trauma1 = $('#trauma1:checked').val();
        var batukber = $('#batukber:checked').val();

        //sisteem kardio vaskular
        var hipo = $('#hipo:checked').val();
        var takikardia = $('#takikardia:checked').val();
        var takikardia1 = $('#takikardia1:checked').val();
        var nyerda = $('#nyerda:checked').val();
        var node = $('#node:checked').val();
        var pendarahan = $('#pendarahan:checked').val();
        var bradikardia = $('#bradikardia:checked').val();
        var dehi1 = $('#dehi1:checked').val();
        var dehi2 = $('#dehi2:checked').val();
        var pendarahan1 = $('#pendarahan1:checked').val();
        var pendarahan2 = $('#pendarahan2:checked').val();

        //sistem pernafasan
        var trauma2 = $('#trauma2:checked').val();
        var trauma3 = $('#trauma3:checked').val();
        var trauma4 = $('#trauma4:checked').val();
        var trauma5 = $('#trauma5:checked').val();
        var gcs10 = $('#gcs10:checked').val();
        var gcs13 = $('#gcs13:checked').val();
        var gcs15 = $('#gcs15:checked').val();
        var sakitpala = $('#sakitpala:checked').val();
        var kejang = $('#kejang:checked').val();
        var penurunankes = $('#penurunankes:checked').val();
        var sakitpala1 = $('#sakitpala1:checked').val();
        var kejangberulang = $('#kejangberulang:checked').val();
        var penurunankes1 = $('#penurunankes1:checked').val();
        var sakitpala2 = $('#sakitpala2:checked').val();
        var tisa = $('#tisa:checked').val();
        var sapal = $('#sapal:checked').val();
        var shunt = $('#shunt:checked').val();
        var shunt1 = $('#shunt1:checked').val();
        var kjg = $('#kjg:checked').val();
        //child abuse
        var konflik = $('#konflik:checked').val();
        var risikoch = $('#risikoch:checked').val();
        var ksex = $('#ksex:checked').val();
        var kdrt = $('#kdrt:checked').val();
        //lain-lain
        var anafileksis = $('#anafileksis:checked').val();
        var letargis1 = $("#letargis1:checked").val();
        var infant = $("#infant:checked").val();
        var rewel = $("#rewel:checked").val();
        var dm = $("#dm:checked").val();
        var bayi7 = $("#bayi7:checked").val();
        var bayi3 = $("#bayi3:checked").val();
        var bayi36 = $("#bayi36:checked").val();
        var bayi3bln = $("#bayi3bln:checked").val();
        var reaksi = $("#reaksi:checked").val();
        var reaksi1 = $("#reaksi1:checked").val();
        var gangguan1 = $("#gangguan1:checked").val();
        var kesulitan = $("#kesulitan:checked").val();
        var perilaku = $("#perilaku:checked").val();
        var KAD = $("#KAD:checked").val();

        Swal.fire({
            title: "Yakin Simpan TRIASE?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ya',
            cancelButtonColor: '#d33',
            cancelButtonText: "Batal"

        }).then(result => {
            //jika klik ya maka arahkan ke proses.php
            if (result.isConfirmed) {
                $.ajax({
                    async: true,
                    type: 'post',
                    dataType: 'json',
                    data: {
                        _token: "{{ csrf_token() }}",
                        data: JSON.stringify(data),
                        antrian,
                        namapasien: $('#namapasien').val(),
                        sumberdata: $('#sumberdata:checked').val(),
                        primarysurvey: $('#primarysurvey').val(),
                        pemeriksaanfisik: $('#pemeriksaanfisik').val(),
                        klasifikasipasien: $('#klasifikasipasien:checked').val(),
                        riwayatpenyakit: $('#riwayatpenyakit').val(),
                        kategoritriase: $("#kategoritriase:checked").val(),
                        // bedah : $("#bedah:checked").val(),
                        // obgyn : $("#obgyn:checked").val(),
                        // anak : $("#anak:checked").val(),
                        jenisats: $("#jenisats:checked").val(),

                        // ats1 : $("#ats1:checked").val(),
                        // ats2 : $("#ats2:checked").val(),
                        // ats3 : $("#ats3:checked").val(),
                        // ats4 : $("#ats4:checked").val(),
                        // ats5 : $("#ats5:checked").val(),
                        //kesadaran
                        tidakada: $('#tidakada:checked').val(),
                        penurunan: $('#penurunan:checked').val(),
                        unconsable: $('#unconsable:checked').val(),
                        consolable: $('#consolable:checked').val(),
                        tidakberubah: $('#tidakberubah:checked').val(),
                        letargis: $('#letargis:checked').val(),
                        atypical: $('#atypical:checked').val(),
                        atypical1: $('#atypical1:checked').val(),
                        tidaknetek: $('#tidaknetek:checked').val(),
                        tidakriwayat: $('#tidakriwayat:checked').val(),

                        //upaya nafas
                        gagalnafas: $('#gagalnafas:checked').val(),
                        rr: $('#rr:checked').val(),
                        rr1: $('#rr1:checked').val(),
                        laju1: $('#laju1:checked').val(),
                        laju2: $('#laju2:checked').val(),
                        rr2: $('#rr2:checked').val(),
                        rr3: $('#rr3:checked').val(),
                        stdr: $('#stdr:checked').val(),
                        stdr1: $('#stdr1:checked').val(),
                        distress: $('#distress:checked').val(),
                        distress1: $('#distress1:checked').val(),

                        //sirkulasi
                        hentijantung: $('#hentijantung:checked').val(),
                        rr4: $('#rr4:checked').val(),
                        rr5: $('#rr5:checked').val(),
                        freknafas: $('#freknafas:checked').val(),
                        laju3: $('#laju3:checked').val(),
                        laju4: $('#laju4:checked').val(),
                        syok: $('#syok:checked').val(),
                        rr6: $('#rr6:checked').val(),


                        rr7: $('#rr7:checked').val(),
                        sianosis: $('#sianosis:checked').val(),
                        waktu: $('#waktu:checked').val(),
                        waktu1: $('#waktu1:checked').val(),
                        //sistem respirasi
                        gangguan: $('#gangguan:checked').val(),
                        stdr2: $('#stdr2:checked').val(),
                        stdr3: $('#stdr3:checked').val(),
                        asma: $('#asma:checked').val(),
                        gagalnafas1: $('#gagalnafas1:checked').val(),
                        distressnafas: $('#distressnafas:checked').val(),
                        distressnafas1: $('#distressnafas1:checked').val(),
                        T: $('#T:checked').val(),
                        asmaber: $('#asmaber:checked').val(),
                        serangan1: $('#serangan1:checked').val(),
                        trauma: $('#trauma:checked').val(),
                        aspirasi2: $('#aspirasi2:checked').val(),
                        aspirasi3: $('#aspirasi3:checked').val(),
                        trauma1: $('#trauma1:checked').val(),
                        batukber: $('#batukber:checked').val(),

                        //sisteem kardio vaskular
                        hipo: $('#hipo:checked').val(),
                        takikardia: $('#takikardia:checked').val(),
                        takikardia1: $('#takikardia1:checked').val(),
                        nyerda: $('#nyerda:checked').val(),
                        node: $('#node:checked').val(),
                        pendarahan: $('#pendarahan:checked').val(),
                        bradikardia: $('#bradikardia:checked').val(),
                        dehi1: $('#dehi1:checked').val(),
                        dehi2: $('#dehi2:checked').val(),
                        pendarahan1: $('#pendarahan1:checked').val(),
                        pendarahan2: $('#pendarahan2:checked').val(),

                        //sistem pernafasan
                        trauma2: $('#trauma2:checked').val(),
                        trauma3: $('#trauma3:checked').val(),
                        trauma4: $('#trauma4:checked').val(),
                        trauma5: $('#trauma5:checked').val(),
                        gcs10: $('#gcs10:checked').val(),
                        gcs13: $('#gcs13:checked').val(),
                        gcs15: $('#gcs15:checked').val(),
                        sakitpala: $('#sakitpala:checked').val(),
                        kejang: $('#kejang:checked').val(),
                        penurunankes: $('#penurunankes:checked').val(),
                        sakitpala1: $('#sakitpala1:checked').val(),
                        kejangberulang: $('#kejangberulang:checked').val(),
                        penurunankes1: $('#penurunankes1:checked').val(),
                        sakitpala2: $('#sakitpala2:checked').val(),
                        tisa: $('#tisa:checked').val(),
                        sapal: $('#sapal:checked').val(),
                        shunt: $('#shunt:checked').val(),
                        shunt1: $('#shunt1:checked').val(),
                        kjg: $('#kjg:checked').val(),
                        //child abuse
                        konflik: $('#konflik:checked').val(),
                        risikoch: $('#risikoch:checked').val(),
                        ksex: $('#ksex:checked').val(),
                        kdrt: $('#kdrt:checked').val(),
                        //lain-lain
                        anafileksis: $('#anafileksis:checked').val(),
                        letargis1: $("#letargis1:checked").val(),
                        infant: $("#infant:checked").val(),
                        rewel: $("#rewel:checked").val(),
                        dm: $("#dm:checked").val(),
                        bayi7: $("#bayi7:checked").val(),
                        bayi3: $("#bayi3:checked").val(),
                        bayi36: $("#bayi36:checked").val(),
                        bayi3bln: $("#bayi3bln:checked").val(),
                        reaksi: $("#reaksi:checked").val(),
                        reaksi1: $("#reaksi1:checked").val(),
                        gangguan1: $("#gangguan1:checked").val(),
                        kesulitan: $("#kesulitan:checked").val(),
                        perilaku: $("#perilaku:checked").val(),
                        KAD: $("#KAD:checked").val(),

                    },
                    url: '<?= route('simpanpemeriksaantriaseanak') ?>',

                    error: function(data) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Sepertinya ada masalah ...',
                            footer: ''
                        })
                    },
                    success: function(data) {
                        console.log(data)
                        if (data.kode == 500) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: data.message,
                                footer: ''
                            })
                        } else {
                            Swal.fire({
                                icon: 'success',
                                title: 'OK',
                                text: 'data berhasil disimpan',
                                footer: ''
                            })


                        }
                    }
                });
            }
        })
        return false;
    });
</script>
