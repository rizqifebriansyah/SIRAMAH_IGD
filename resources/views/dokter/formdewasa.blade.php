<div class="card-header">
    <h3 class="card-title">TRIASE DEWASA</h3>
</div>

<div class="card-body">
    <div class="card">
        <div class="card-header text-bold bg-success">+ SKRINING PASIEN IGD +</div>
        <div class="card-body">
            <form action="" class="form_pemeriksaan_1">
                <table class="table">
                    <tbody>
                        <tr hidden="">
                            <td class="text-bold font-italic">Tanggal Kunjungan</td>
                            <td><input readonly="" type="text" name="tanggalkunjungan" class="form-control" value="2023-09-07 07:43:55"></td>
                            <td class="text-bold font-italic">Tanggal Assesmen</td>
                            <td><input type="text" name="tanggalassesmen" class="form-control datepicker" data-date-format="yyyy-mm-dd"></td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Sumber Data</td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Pasien Sendiri" checked="">
                                    <label class="form-check-label" for="inlineRadio1">Pasien Sendiri /
                                        Autoanamase</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Keluarga">
                                    <label class="form-check-label" for="inlineRadio2">Keluarga / Alloanamnesa</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Primary Survey</td>
                            <td colspan="2">
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
                            <td class="text-bold font-italic">Klasifikasi Pasien</td>

                            <td>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="igd" name="igd" value="1">
                                            <label class="form-check-label" for="exampleCheck1">IGD</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="poliklinik" name="poliklinik" value="1">
                                            <label class="form-check-label" for="exampleCheck1">Poliklinik
                                                Paru</label>
                                        </div>
                                    </div>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Riwayat Penyakit / Pengobatan Sebelumnya</td>
                            <td colspan="3">

                                <textarea class="form-control" id="riwayatpenyakit" name="riwayatpenyakit" placeholder="Ketik riwayat penyakit ..."></textarea>

                            </td>
                        </tr>
                    </tbody>
                </table>




                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Triase (ATS : Australian Triage Scale)
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body bg-light">

                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-bold ">KATEGORI TRIASE </td>

                                            <td>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="medikal" name="medikal" value="1">
                                                            <label class="form-check-label" for="exampleCheck1">Medikal</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="bedah" name="bedah" value="1">
                                                            <label class="form-check-label" for="exampleCheck1">Bedah
                                                                Paru</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="obgyn" name="obgyn" value="1">
                                                            <label class="form-check-label" for="exampleCheck1">Obgyn
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="anak" name="anak" value="1">
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
                                                            <input type="checkbox" class="form-check-input" id="ats1" name="ats1" value="ats1">
                                                            <label class="form-check-label" for="exampleCheck1">ATS1 <br>Resusitasi</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2" style="background-color: chocolate;">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="ats2" name="ats2" value="ats2">
                                                            <label class="form-check-label" for="exampleCheck1">ATS2 <br>
                                                                Emergency</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 bg-warning">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="ats3" name="ats3" value="ats3">
                                                            <label class="form-check-label" for="exampleCheck1">ATS3 <br> Urgent
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 bg-success">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="ats4" name="ats4" value="ats4">
                                                            <label class="form-check-label" for="exampleCheck1">ATS4 <br> Non Urgent
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 bg-primary">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="ats5" name="ats5" value="ats5">
                                                            <label class="form-check-label" for="exampleCheck1">ATS5 <br> False Emergency
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
                                                            <label class="form-check-label" for="exampleCheck1">10 Menit </label>
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
                                                            <input type="checkbox" class="form-check-input" id="gcs1" name="gcs1" value="GCS < 9">
                                                            <label class="form-check-label" for="exampleCheck1">GCS < 9</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="gcs2" name="gcs2" value="GCS 9 - 12">
                                                            <label class="form-check-label" for="exampleCheck1">GCS 9 - 12</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="gcs3" name="gcs3" value="GCS > 12">
                                                            <label class="form-check-label" for="exampleCheck1">GCS > 12
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="gcs4" name="gcs4" value="GCS 15">
                                                            <label class="form-check-label" for="exampleCheck1">GCS 15
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="gcs5" name="gcs5" value="GCS 15">
                                                            <label class="form-check-label" for="exampleCheck1">GCS 15
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
                                                            <input type="checkbox" class="form-check-input" id="kejang" name="kejang" value="Kejang">
                                                            <label class="form-check-label" for="exampleCheck1">Kejang</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="letargis" name="letargis" value="Letargis">
                                                            <label class="form-check-label" for="exampleCheck1">Letargis</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="traumakepala" name="traumakepala" value="Trauma Kepala Riwayat Pingsan">
                                                            <label class="form-check-label" for="exampleCheck1">Trauma Kepala Riwayat Pingsan
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="traumakepalakurang" name="traumakepalakurang" value="Trauma Kepala Riwayat Pingsan (-)">
                                                            <label class="form-check-label" for="exampleCheck1">Trauma Kepala Riwayat Pingsan (-)
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <label class="form-check-label" for="exampleCheck1">
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
                                                            <input type="checkbox" class="form-check-input" id="tidakrespon" name="tidakrespon" value="">
                                                            <label class="form-check-label" for="exampleCheck1">Tidak Ada Respon</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group form-check">
                                                            <label class="form-check-label" for="exampleCheck1"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="somnolen" name="somnolen" value="Somnolen">
                                                            <label class="form-check-label" for="exampleCheck1">Somnolen
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <label class="form-check-label" for="exampleCheck1">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <label class="form-check-label" for="exampleCheck1">
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
                                                            <label class="form-check-label" for="exampleCheck1"></label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group form-check">
                                                            <label class="form-check-label" for="exampleCheck1"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="paskakejang" name="paskakejang" value="Paska Kejang">
                                                            <label class="form-check-label" for="exampleCheck1">Paska Kejang
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <label class="form-check-label" for="exampleCheck1">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <label class="form-check-label" for="exampleCheck1">
                                                            </label>
                                                        </div>
                                                    </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold">JALAN NAFAS</td>

                                            <td>

                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="sumbatantotal" name="sumbatantotal" value="Sumbatan Total">
                                                            <label class="form-check-label" for="exampleCheck1">Sumbatan Total</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="sumbatanparsial" name="sumbatanparsial" value="Sumbatan Parsial">
                                                            <label class="form-check-label" for="exampleCheck1">Sumbatan Parsial</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="bebas1" name="bebas1" value="Bebas">
                                                            <label class="form-check-label" for="exampleCheck1">Bebas
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="bebas2" name="bebas2" value="Bebas">
                                                            <label class="form-check-label" for="exampleCheck1">Bebas
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="bebas3" name="bebas3" value="Bebas">
                                                            <label class="form-check-label" for="exampleCheck1">Bebas
                                                            </label>
                                                        </div>
                                                    </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold">PERNAFASAN</td>

                                            <td>

                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="hentinafas" name="hentinafas" value="Henti Nafas">
                                                            <label class="form-check-label" for="exampleCheck1">Henti Nafas</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="distrespenafasan" name="distrespenafasan" value="Distres Pernafasan">
                                                            <label class="form-check-label" for="exampleCheck1">Distres Pernafasan</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="sesaknafas" name="sesaknafas" value="Sesak Nafas">
                                                            <label class="form-check-label" for="exampleCheck1">Sesak Nafas
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="freknafas" name="freknafas" value="Frek Nafas Normal">
                                                            <label class="form-check-label" for="exampleCheck1">Frek Nafas Normal
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="freknafas1" name="freknafas1" value="Frek Nafas Normal">
                                                            <label class="form-check-label" for="exampleCheck1">Frek Nafas Normal
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
                                                            <input type="checkbox" class="form-check-input" id="rr" name="rr" value="RR < 10 x/menit">
                                                            <label class="form-check-label" for="exampleCheck1">RR < 10 x/menit</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group form-check">
                                                            <label class="form-check-label" for="exampleCheck1"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="SaO2" name="SaO2" value="SaO2">
                                                            <label class="form-check-label" for="exampleCheck1">SaO2 90 - 95%
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                           
                                                            <label class="form-check-label" for="exampleCheck1">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <label class="form-check-label" for="exampleCheck1">
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
                                                            <input type="checkbox" class="form-check-input" id="sianosis" name="sianosis" value="Sianosis">
                                                            <label class="form-check-label" for="exampleCheck1">Sianosis</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group form-check">
                                                            <label class="form-check-label" for="exampleCheck1"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <label class="form-check-label" for="exampleCheck1">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                           
                                                            <label class="form-check-label" for="exampleCheck1">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <label class="form-check-label" for="exampleCheck1">
                                                            </label>
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
                                                            <input type="checkbox" class="form-check-input" id="hentijantung" name="hentijantung" value="Henti Jantung">
                                                            <label class="form-check-label" for="exampleCheck1">Henti Jantung</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="naditerabalemah" name="naditerabalemah" value="Nadi Teraba Lemah">
                                                            <label class="form-check-label" for="exampleCheck1">Nadi Teraba Lemah</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="gcs3" name="gcs3" value="GCS > 12">
                                                            <label class="form-check-label" for="exampleCheck1">GCS > 12
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="gcs4" name="gcs4" value="GCS 15">
                                                            <label class="form-check-label" for="exampleCheck1">GCS 15
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 ">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="gcs5" name="gcs5" value="GCS 15">
                                                            <label class="form-check-label" for="exampleCheck1">GCS 15
                                                            </label>
                                                        </div>
                                                    </div>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>