<style>

</style>


<div class="card-header">
    <h3 class="card-title">TRIASE DEWASA</h3>
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
                            <td colspan="2">

                                <textarea class="form-control" id="namapasien" name="namapasien" placeholder="Ketik nama pasien ..."></textarea>

                            </td>
                        </tr>
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
                                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Pasien Sendiri">
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
                                            <input type="checkbox" class="form-check-input" id="klasifikasipasien" name="klasifikasipasien" value="IGD">
                                            <label class="form-check-label" for="exampleCheck1">IGD</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="klasifikasipasien" name="klasifikasipasien" value="POLI KLINIK">
                                            <label class="form-check-label" for="exampleCheck1">Poliklinik
                                            </label>
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


                <!-- triase ats  -->
                <div class="accordion" id="accordionExample">

                    <div class="card-header bg-secondary" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Triase (ATS : Australian Triage Scale)
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
                                                    <input type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Medikal">
                                                    <label class="form-check-label" for="exampleCheck1">Medikal</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Bedah Paru">
                                                    <label class="form-check-label" for="exampleCheck1">Bedah Paru</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Obgyn">
                                                    <label class="form-check-label" for="exampleCheck1">Obgyn
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Anak">
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
                                                    <input type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS1 Resusitasi">
                                                    <label class="form-check-label" for="exampleCheck1">ATS1 <br>Resusitasi</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2" style="background-color: chocolate;">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS2 Emergency">
                                                    <label class="form-check-label" for="exampleCheck1">ATS2 <br>
                                                        Emergency</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 bg-warning">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS3 Urgent">
                                                    <label class="form-check-label" for="exampleCheck1">ATS3 <br> Urgent
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 bg-success">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS4 Non Urgent">
                                                    <label class="form-check-label" for="exampleCheck1">ATS4 <br> Non Urgent
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 bg-primary">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS5 False Emergency">
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
                                                    <input type="checkbox" class="form-check-input" id="tidakrespon" name="tidakrespon" value="Tidak Ada Respon">
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
                                                    <input type="checkbox" class="form-check-input" id="muntahpasien" name="muntahpasien" value="Muntah Pasien">
                                                    <label class="form-check-label" for="exampleCheck1">Muntah Pasien
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="nadikuat" name="nadikuat" value="Nadi Kuat">
                                                    <label class="form-check-label" for="exampleCheck1">Nadi Kuat
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="nadikuat1" name="nadikuat1" value="Nadi Kuat">
                                                    <label class="form-check-label" for="exampleCheck1">Nadi Kuat
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
                                                    <input type="checkbox" class="form-check-input" id="naditidakteraba" name="naditidakteraba" value="Nadi Tidak Teraba">
                                                    <label class="form-check-label" for="exampleCheck1">Nadi Tidak Teraba</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="hr1" name="hr1" value="HR < 50x/menit">
                                                    <label class="form-check-label" for="exampleCheck1">HR < 50x/menit</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="takikardia" name="takikardia" value="Takikardia">
                                                    <label class="form-check-label" for="exampleCheck1">Takikardia
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="freknadinormal" name="freknadinormal" value="Frek Nadi Normal">
                                                    <label class="form-check-label" for="exampleCheck1">Frek Nadi Normal
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="freknadinormal1" name="freknadinormal1" value="Frek Nadi Normal">
                                                    <label class="form-check-label" for="exampleCheck1">Frek Nadi Normal
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
                                                    <input type="checkbox" class="form-check-input" id="akraldingin" name="akraldingin" value="Akral Dingin">
                                                    <label class="form-check-label" for="exampleCheck1">Akral Dingin</label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="hr2" name="hr2" value="HR > 150x/menit">
                                                    <label class="form-check-label" for="exampleCheck1">HR > 150x/menit</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="tds" name="tds" value="TDS > 180">
                                                    <label class="form-check-label" for="exampleCheck1">TDS > 180
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="tds1" name="tds1" value="TDS 100 - 120">
                                                    <label class="form-check-label" for="exampleCheck1">TDS 100 - 120
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="tds2" name="tds2" value="TDS 100 - 120">
                                                    <label class="form-check-label" for="exampleCheck1">TDS 100 - 120
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
                                                    <input type="checkbox" class="form-check-input" id="pucat" name="pucat" value="Pucat">
                                                    <label class="form-check-label" for="exampleCheck1">Pucat</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="tdd" name="tdd" value="TDD > 120">
                                                    <label class="form-check-label" for="exampleCheck1">TDD > 120
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="tdd1" name="tdd1" value="TDD 70 - 90">
                                                    <label class="form-check-label" for="exampleCheck1">TDD 70 - 90
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="tdd2" name="tdd2" value="TDD 70 - 90">
                                                    <label class="form-check-label" for="exampleCheck1">TDD 70 - 90
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
                                                    <input type="checkbox" class="form-check-input" id="akraldingin1" name="akraldingin1" value="Akral Dingin">
                                                    <label class="form-check-label" for="exampleCheck1">Akral Dingin</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="pendarahan" name="pendarahan" value="Pendarahan">
                                                    <label class="form-check-label" for="exampleCheck1">Pendarahan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="muntah1" name="muntah1" value="Muntah Atau Diare tanpa Dehidrasi">
                                                    <label class="form-check-label" for="exampleCheck1">Muntah Atau Diare tanpa Dehidrasi
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

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
                                                    <input type="checkbox" class="form-check-input" id="crt" name="crt" value="CRT > 2 detik">
                                                    <label class="form-check-label" for="exampleCheck1">CRT > 2 detik</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

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
                                                    <input type="checkbox" class="form-check-input" id="diastolik" name="diastolik" value="Diastolik < 80">
                                                    <label class="form-check-label" for="exampleCheck1">Diastolik < 80</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

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
                                                    <input type="checkbox" class="form-check-input" id="pendarahan1" name="pendarahan1" value="Pendarahan Hebat">
                                                    <label class="form-check-label" for="exampleCheck1">Pendarahan Hebat</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">

                                                    </label>
                                                </div>
                                            </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"> GEJALA SPESIFIK</td>

                                    <td>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <label class="form-check-label" for="exampleCheck1"></label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="nyeri" name="nyeri" value="Nyeri Dada">
                                                    <label class="form-check-label" for="exampleCheck1">Nyeri Dada</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="demam" name="demam" value="Demam, pasien imunosupersi">
                                                    <label class="form-check-label" for="exampleCheck1">Demam, pasien imunosupersi
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="aspirasi" name="aspirasi" value="Aspirasi, tanpa sesak">
                                                    <label class="form-check-label" for="exampleCheck1">Aspirasi, tanpa sesak
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="nyeri1" name="nyeri1" value="Nyeri Ringan">
                                                    <label class="form-check-label" for="exampleCheck1">Nyeri Ringan
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
                                                    <input type="checkbox" class="form-check-input" id="sepsis" name="sepsis" value="Sepsis">
                                                    <label class="form-check-label" for="exampleCheck1">Sepsis</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="nyeri2" name="nyeri2" value="Nyeri sedang - berat">
                                                    <label class="form-check-label" for="exampleCheck1">Nyeri sedang - berat
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="trauma1" name="trauma1" value="Trauma Dada/Nyeri tanpa sesak">
                                                    <label class="form-check-label" for="exampleCheck1">Trauma Dada/Nyeri tanpa sesak
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="luka" name="luka" value="Luka Kecil">
                                                    <label class="form-check-label" for="exampleCheck1">Luka Kecil
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
                                                    <input type="checkbox" class="form-check-input" id="nyeri3" name="nyeri3" value="Nyeri Hebat">
                                                    <label class="form-check-label" for="exampleCheck1">Nyeri Hebat</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kolik" name="kolik" value="Kolik Abdomen">
                                                    <label class="form-check-label" for="exampleCheck1">Kolik Abdomen
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="sulit" name="sulit" value="Sulit menelan/nyeri/tanpa sesak">
                                                    <label class="form-check-label" for="exampleCheck1">Sulit menelan/nyeri/tanpa sesak
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kontrol" name="kontrol" value="Pasien Kontrol">
                                                    <label class="form-check-label" for="exampleCheck1">Pasien Kontrol
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
                                                    <input type="checkbox" class="form-check-input" id="multiple" name="multiple" value="Multiple Trauma">
                                                    <label class="form-check-label" for="exampleCheck1">Multiple Trauma</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="terauma" name="terauma" value="Trauma Tungkai - Deformitas laserasi parah, Crush">
                                                    <label class="form-check-label" for="exampleCheck1">Trauma Tungkai - Deformitas laserasi parah, Crush
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="sedang1" name="sedang1" value="Nyeri Sedang">
                                                    <label class="form-check-label" for="exampleCheck1">Nyeri Sedang
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="imunisasi" name="imunisasi" value="Imunisasi">
                                                    <label class="form-check-label" for="exampleCheck1">Imunisasi
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
                                                    <input type="checkbox" class="form-check-input" id="lokal" name="lokal" value="Trama Lokal yang Parah">
                                                    <label class="form-check-label" for="exampleCheck1">Trama Lokal yang Parah</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="gangguan" name="gangguan" value="Gangguan Sensasi, Nadi pada Tungkai">
                                                    <label class="form-check-label" for="exampleCheck1">Gangguan Sensasi, Nadi pada Tungkai
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="terauma1" name="terauma1" value="Trauma Tungkai Ringan">
                                                    <label class="form-check-label" for="exampleCheck1">Trauma Tungkai Ringan
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="psikiatri" name="psikiatri" value="Pasien Psikiatri Kronis">
                                                    <label class="form-check-label" for="exampleCheck1">Pasien Psikiatri Kronis
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
                                                    <input type="checkbox" class="form-check-input" id="racun" name="racun" value="Racun/bisa/obat resiko tinggi">
                                                    <label class="form-check-label" for="exampleCheck1">Racun/bisa/obat resiko tinggi</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="psikosis" name="psikosis" value="Gelisah Psikosis">
                                                    <label class="form-check-label" for="exampleCheck1">Gelisah Psikosis
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="radang" name="radang" value="Peradangan Sendi">
                                                    <label class="form-check-label" for="exampleCheck1">Peradangan Sendi
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
                                                    <label class="form-check-label" for="exampleCheck1"></label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="ngamuk" name="ngamuk" value="Pasien Psikiatri Mengamuk">
                                                    <label class="form-check-label" for="exampleCheck1">Pasien Psikiatri Mengamuk</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="defisit" name="defisit" value="Defisit neurologis akut dan sub akut ( < 7 hari sampai dengan 3 minggu )">
                                                    <label class="form-check-label" for="exampleCheck1">Defisit neurologis akut dan sub akut ( < 7 hari sampai dengan 3 minggu ) </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="reaksi" name="reaksi" value="Reaksi Konversi">
                                                    <label class="form-check-label" for="exampleCheck1">Reaksi Konversi
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
                                                    <label class="form-check-label" for="exampleCheck1"></label>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="defisit1" name="defisit1" value="Defisit neurologi hiper akut ( < 3 hari) ">
                                                    <label class="form-check-label" for="exampleCheck1">Defisit neurologi hiper akut ( < 3 hari) </label>
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
                                                    <input type="checkbox" class="form-check-input" id="kejang1" name="kejang1" value="Riwayat kejang bertambah sering ≥ 5 x sehari ">
                                                    <label class="form-check-label" for="exampleCheck1">Riwayat kejang bertambah sering ≥ 5 x sehari </label>
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
                                                    <input type="checkbox" class="form-check-input" id="nyeri3" name="nyeri3" value="Nyeri Kepala heba mendadak (VAS ≥ 8) ">
                                                    <label class="form-check-label" for="exampleCheck1">Nyeri Kepala heba mendadak (VAS ≥ 8) </label>
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

                <!-- triase   -->
                <div class="accordion" id="accordionExample1" style="margin-top: 10px;">

                    <div class="card-header bg-secondary" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                <i class="bi bi-ticket-detailed mr-1 ml-1"></i> TRIASE
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample1">
                        <div class="card-body bg-light">

                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-bold font-italic">kesadaran : </td>

                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="kesadaran_lain" name="kesadaran_lain" value="Compos Mentis">
                                                <label class="form-check-label" for="exampleCheck1">Compos Mentis
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="kesadaran_lain" name="kesadaran_lain" value="Letargik">
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
                                                <input type="checkbox" class="form-check-input" id="statusps" name="statusps" value="Marah">
                                                <label class="form-check-label" for="exampleCheck1">Marah
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps" name="statusps" value="Depresi">
                                                <label class="form-check-label" for="exampleCheck1">Depresi
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps" name="statusps" value="Takut">
                                                <label class="form-check-label" for="exampleCheck1">Takut
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps" name="statusps" value="Gelisah">
                                                <label class="form-check-label" for="exampleCheck1">Gelisah
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps" name="statusps" value="Psikotik">
                                                <label class="form-check-label" for="exampleCheck1">Psikotik
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps" name="statusps" value="Cemas">
                                                <label class="form-check-label" for="exampleCheck1">Cemas
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps" name="statusps" value="Kecenderungan bunuh diri">
                                                <label class="form-check-label" for="exampleCheck1">Kecenderungan bunuh diri
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps" name="statusps" value="Tidak Ada Masalah">
                                                <label class="form-check-label" for="exampleCheck1">Tidak Ada Masalah
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps" name="statusps" value="lain-lain">
                                                <label class="form-check-label" for="exampleCheck1">lain-lain <input type="text">
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
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Keadaan Pasien Saat Keluar
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample4">
                            <div class="card-body bg-light">

                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kondisi" name="kondisi" value="Sembuh">
                                                    <label class="form-check-label" for="exampleCheck1">Sembuh
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kondisi" name="kondisi" value="Tidak Sembuh">
                                                    <label class="form-check-label" for="exampleCheck1">Tidak Sembuh
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kondisi" name="kondisi" value="Perbaikan">
                                                    <label class="form-check-label" for="exampleCheck1">Perbaikan
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kondisi" name="kondisi" value="Meninggal">
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
                </div>

                <div type="button" class="btn float-right btn-success simpantriase" style="margin-top: 20px;">SIMPAN</div>
            </div>
        </form>


    </div>
</div>
</div>

<script>
    $(".simpantriase").click(function() {
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
        var gcs1 = $("#gcs1:checked").val();
        var gcs2 = $("#gcs2:checked").val();
        var gcs3 = $("#gcs3:checked").val();
        var gcs4 = $("#gcs4:checked").val();
        var gcs5 = $("#gcs5:checked").val();
        var kejang = $("#kejang:checked").val();
        var letargis = $("#letargis:checked").val();
        var traumakepala = $("#traumakepala:checked").val();
        var traumakepalakurang = $("#traumakepalakurang:checked").val();
        var tidakrespon = $("#tidakrespon:checked").val();
        var somnolen = $("#somnolen:checked").val();
        var paskakejang = $("#paskakejang:checked").val();

        //jalannafas
        var sumbatantotal = $("#sumbatantotal:checked").val();
        var sumbatanparsial = $("#sumbatanparsial:checked").val();
        var bebas1 = $("#bebas1:checked").val();
        var bebas2 = $("#bebas2:checked").val();
        var bebas3 = $("#bebas3:checked").val();

        //pernafasan
        var hentinafas = $("#hentinafas:checked").val();
        var distrespenafasan = $("#distrespenafasan:checked").val();
        var sesaknafas = $("#sesaknafas:checked").val();
        var freknafas = $("#freknafas:checked").val();
        var freknafas1 = $("#freknafas1:checked").val();
        var rr = $("#rr:checked").val();
        var SaO2 = $("#SaO2:checked").val();
        var sianosis = $("#sianosis:checked").val();

        //sirkulasi
        var hentijantung = $("#hentijantung:checked").val();
        var naditerabalemah = $("#naditerabalemah:checked").val();
        var muntahpasien = $("#muntahpasien:checked").val();
        var nadikuat = $("#nadikuat:checked").val();
        var nadikuat1 = $("#nadikuat1:checked").val();
        var naditidakteraba = $("#naditidakteraba:checked").val();
        var hr1 = $("#hr1:checked").val();
        var takikardia = $("#takikardia:checked").val();
        var freknadinormal = $("#freknadinormal:checked").val();
        var freknadinormal1 = $("#freknadinormal1:checked").val();
        var akraldingin = $("#akraldingin:checked").val();
        var hr2 = $("#hr2:checked").val();
        var tds = $("#tds:checked").val();
        var tds1 = $("#tds1:checked").val();
        var tds2 = $("#tds2:checked").val();
        var pucat = $("#pucat:checked").val();
        var tdd = $("#tdd:checked").val();
        var tdd1 = $("#tdd1:checked").val();
        var tdd2 = $("#tdd2:checked").val();
        var akraldingin1 = $("#akraldingin1:checked").val();
        var pendarahan = $("#pendarahan:checked").val();
        var muntah1 = $("#muntah1:checked").val();
        var crt = $("#crt:checked").val();
        var diastolik = $("#diastolik:checked").val();
        var pendarahan1 = $("#pendarahan1:checked").val();

        //gejalaspesifik
        var nyeri = $("#nyeri:checked").val();
        var demam = $("#demam:checked").val();
        var aspirasi = $("#aspirasi:checked").val();
        var nyeri1 = $("#nyeri1:checked").val();
        var sepsis = $("#sepsis:checked").val();
        var nyeri2 = $("#nyeri2:checked").val();
        var trauma1 = $("#trauma1:checked").val();
        var luka = $("#luka:checked").val();
        var nyeri3 = $("#nyeri3:checked").val();
        var kolik = $("#kolik:checked").val();
        var sulit = $("#sulit:checked").val();
        var kontrol = $("#kontrol:checked").val();
        var multiple = $("#multiple:checked").val();
        var terauma = $("#terauma:checked").val();
        var sedang1 = $("#sedang1:checked").val();
        var imunisasi = $("#imunisasi:checked").val();
        var lokal = $("#lokal:checked").val();
        var gangguan = $("#gangguan:checked").val();
        var terauma1 = $("#terauma1:checked").val();
        var psikiatri = $("#psikiatri:checked").val();
        var racun = $("#racun:checked").val();
        var psikosis = $("#psikosis:checked").val();
        var radang = $("#radang:checked").val();
        var ngamuk = $("#ngamuk:checked").val();
        var defisit = $("#defisit:checked").val();
        var reaksi = $("#reaksi:checked").val();
        var defisit1 = $("#defisit1:checked").val();
        var kejang1 = $("#kejang1:checked").val();
        var nyeri3 = $("#nyeri3:checked").val();

        //triase lain
        var kesadaranlain = $("#kesadaran_lain:checked").val();
        var statusps = $("#statusps:checked").val();
        var kelut = $("#kelut").val();
        var pemfis = $("#pemfis").val();
        var ditri = $("#ditri").val();
        var talak = $("#talak").val();
        var kondisi = $("#kondisi").val();

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

                        gcs1: $('#gcs1:checked').val(),
                        gcs2: $('#gcs2:checked').val(),
                        gcs3: $('#gcs3:checked').val(),
                        gcs4: $('#gcs4:checked').val(),
                        gcs5: $('#gcs5:checked').val(),
                        kejang: $('#kejang:checked').val(),
                        letargis: $('#letargis:checked').val(),
                        traumakepala: $('#traumakepala:checked').val(),
                        traumakepalakurang: $('#traumakepalakurang:checked').val(),
                        tidakrespon: $('#tidakrespon:checked').val(),
                        somnolen: $('#somnolen:checked').val(),
                        paskakejang: $('#paskakejang:checked').val(),


                        sumbatantotal: $('#sumbatantotal:checked').val(),
                        sumbatanparsial: $('#sumbatanparsial:checked').val(),
                        bebas1: $('#bebas1:checked').val(),
                        bebas2: $('#bebas2:checked').val(),
                        bebas3: $('#bebas3:checked').val(),


                        hentinafas: $('#hentinafas:checked').val(),
                        distrespenafasan: $('#distrespenafasan:checked').val(),
                        sesaknafas: $('#sesaknafas:checked').val(),
                        freknafas: $('#freknafas:checked').val(),
                        freknafas1: $('#freknafas1:checked').val(),
                        rr: $('#rr:checked').val(),
                        SaO2: $('#SaO2:checked').val(),
                        sianosis: $('#sianosis:checked').val(),


                        hentijantung: $('#hentijantung:checked').val(),
                        naditerabalemah: $('#naditerabalemah:checked').val(),
                        muntahpasien: $('#muntahpasien:checked').val(),
                        nadikuat: $('#nadikuat:checked').val(),
                        nadikuat1: $('#nadikuat1:checked').val(),
                        naditidakteraba: $('#naditidakteraba:checked').val(),
                        hr1: $('#hr1:checked').val(),
                        takikardia: $('#takikardia:checked').val(),
                        freknadinormal: $('#freknadinormal:checked').val(),
                        freknadinormal1: $('#freknadinormal1:checked').val(),
                        akraldingin: $('#akraldingin:checked').val(),
                        hr2: $('#hr2:checked').val(),
                        tds: $('#tds:checked').val(),
                        tds1: $('#tds1:checked').val(),
                        tds2: $('#tds2:checked').val(),
                        pucat: $('#pucat:checked').val(),
                        tdd: $('#tdd:checked').val(),
                        tdd1: $('#tdd1:checked').val(),
                        tdd2: $('#tdd2:checked').val(),
                        akraldingin1: $('#akraldingin1:checked').val(),
                        pendarahan: $('#pendarahan:checked').val(),
                        muntah1: $('#muntah1:checked').val(),
                        crt: $('#crt:checked').val(),
                        diastolik: $('#diastolik:checked').val(),
                        pendarahan1: $('#pendarahan1:checked').val(),


                        nyeri: $('#nyeri:checked').val(),
                        demam: $('#demam:checked').val(),
                        aspirasi: $('#aspirasi:checked').val(),
                        nyeri1: $('#nyeri1:checked').val(),
                        sepsis: $('#sepsis:checked').val(),
                        nyeri2: $('#nyeri2:checked').val(),
                        trauma1: $('#trauma1:checked').val(),
                        luka: $('#luka:checked').val(),
                        nyeri3: $('#nyeri3:checked').val(),
                        kolik: $('#kolik:checked').val(),
                        sulit: $('#sulit:checked').val(),
                        kontrol: $('#kontrol:checked').val(),
                        multiple: $('#multiple:checked').val(),
                        terauma: $('#terauma:checked').val(),
                        sedang1: $('#sedang1:checked').val(),
                        imunisasi: $('#imunisasi:checked').val(),
                        lokal: $('#lokal:checked').val(),
                        gangguan: $('#gangguan:checked').val(),
                        terauma1: $('#terauma1:checked').val(),
                        psikiatri: $('#psikiatri:checked').val(),
                        racun: $('#racun:checked').val(),
                        psikosis: $('#psikosis:checked').val(),
                        radang: $('#radang:checked').val(),
                        ngamuk: $('#ngamuk:checked').val(),
                        defisit: $('#defisit:checked').val(),
                        reaksi: $('#reaksi:checked').val(),
                        defisit1: $('#defisit1:checked').val(),
                        kejang1: $('#kejang1:checked').val(),
                        nyeri3: $('#nyeri3:checked').val(),


                         kesadaranlain : $("#kesadaran_lain:checked").val(),
                         statusps : $("#statusps:checked").val(),
                         kelut : $("#kelut").val(),
                         pemfis : $("#pemfis").val(),
                         ditri : $("#ditri").val(),
                         talak : $("#talak").val(),
                         kondisi : $("#kondisi").val()



                    },
                    url: '<?= route('simpanpemeriksaantriase') ?>',

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