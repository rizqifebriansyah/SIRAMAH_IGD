@if ($triase == null)
<div class="accordion  mt-3 mb-2" id="accordionExample">
    <div class="card-header bg-secondary" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Triase (ATS : Australian Triage Scale)
                DEWASA
            </button>
        </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">



        <table class=" table table-bordered">
            <tbody>

                <tr>
                    <td class="text-bold ">KATEGORI TRIASE </td>

                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Medikal">
                            <input hidden type="text" class="form-control" placeholder="" aria-label="Recipient's username" id="jenistriase" name="jenistriase" aria-describedby="basic-addon2" value="dewasa">

                            <label class="form-check-label" for="exampleCheck1">Medikal</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Bedah">
                            <label class="form-check-label" for="exampleCheck1">Bedah</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Obgyn">
                            <label class="form-check-label" for="exampleCheck1">Obgyn
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Anak">
                            <label class="form-check-label" for="exampleCheck1">Anak
                            </label>
                        </div>
                    </td>
                    <td>

                    </td>

                </tr>
                <tr>
                    <td class="text-bold">PEMERIKSAAN</td>

                    <td class="bg-danger">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS1 Resusitasi">
                            <label class="form-check-label" for="exampleCheck1">ATS1
                                <br>Resusitasi</label>
                        </div>
                    </td>
                    <td style="background-color: chocolate;">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS2 Emergency">
                            <label class="form-check-label" for="exampleCheck1">ATS2 <br>
                                Emergency</label>
                        </div>
                    </td>
                    <td class="bg-warning">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS3 Urgent">
                            <label class="form-check-label" for="exampleCheck1">ATS3 <br>
                                Urgent
                            </label>
                        </div>
                    </td>
                    <td class="bg-success">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS4 Non Urgent">
                            <label class="form-check-label" for="exampleCheck1">ATS4 <br> Non Urgent
                            </label>
                        </div>
                    </td>
                    <td class="bg-primary">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS5 False Emergency">
                            <label class="form-check-label" for="exampleCheck1">ATS5 <br>
                                False Emergency
                            </label>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td class="text-bold">RESPON</td>

                    <td>
                        <div class="form-group form-check">

                            <label class="form-check-label" for="exampleCheck1">Segera</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">10 Menit
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">30 Menit
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">60 Menit
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">120 Menit
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold">KESADARAN</td>

                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kesadaran1" name="kesadaran1" value="GCS < 9">
                            <label class="form-check-label" for="exampleCheck1">GCS < 9</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kesadaran2" name="kesadaran2" value="GCS 9 - 12">
                            <label class="form-check-label" for="exampleCheck1">GCS 9 -
                                12</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kesadaran3" name="kesadaran3" value="GCS > 12">
                            <label class="form-check-label" for="exampleCheck1">GCS > 12
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kesadaran4" name="kesadaran4" value="GCS 15">
                            <label class="form-check-label" for="exampleCheck1">GCS 15
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kesadaran5" name="kesadaran5" value="GCS 15">
                            <label class="form-check-label" for="exampleCheck1">GCS 15
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kesadaran6" name="kesadaran6" value="Kejang">
                            <label class="form-check-label" for="exampleCheck1">Kejang</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kesadaran7" name="kesadaran7" value="Letargis">
                            <label class="form-check-label" for="exampleCheck1">Letargis</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kesadaran8" name="kesadaran8" value="Trauma Kepala Riwayat Pingsan">
                            <label class="form-check-label" for="exampleCheck1">Trauma Kepala
                                Riwayat Pingsan
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kesadaran9" name="kesadaran9" value="Trauma Kepala Riwayat Pingsan (-)">
                            <label class="form-check-label" for="exampleCheck1">Trauma Kepala
                                Riwayat Pingsan
                                (-)
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kesadaran10" name="kesadaran10" value="Tidak Ada Respon">
                            <label class="form-check-label" for="exampleCheck1">Tidak Ada
                                Respon</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kesadaran11" name="kesadaran11" value="Somnolen">
                            <label class="form-check-label" for="exampleCheck1">Somnolen
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kesadaran12" name="kesadaran12" value="Paska Kejang">
                            <label class="form-check-label" for="exampleCheck1">Paska Kejang
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold">JALAN NAFAS</td>

                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jalannafas1" name="jalannafas1" value="Sumbatan Total">
                            <label class="form-check-label" for="exampleCheck1">Sumbatan
                                Total</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jalannafas2" name="jalannafas2" value="Sumbatan Parsial">
                            <label class="form-check-label" for="exampleCheck1">Sumbatan
                                Parsial</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jalannafas3" name="jalannafas3" value="Bebas">
                            <label class="form-check-label" for="exampleCheck1">Bebas
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jalannafas4" name="jalannafas4" value="Bebas">
                            <label class="form-check-label" for="exampleCheck1">Bebas
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jalannafas5" name="jalannafas5" value="Bebas">
                            <label class="form-check-label" for="exampleCheck1">Bebas
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold">PERNAFASAN</td>

                    <td>
                        <div class="col-md-2">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="upaya1" name="upaya1" value="Henti Nafas">
                                <label class="form-check-label" for="exampleCheck1">Henti
                                    Nafas</label>
                            </div>
                        </div>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="upaya2" name="upaya2" value="Distres Pernafasan">
                            <label class="form-check-label" for="exampleCheck1">Distres
                                Pernafasan</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="upaya3" name="upaya3" value="Sesak Nafas">
                            <label class="form-check-label" for="exampleCheck1">Sesak Nafas
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="upaya4" name="upaya4" value="Frek Nafas Normal">
                            <label class="form-check-label" for="exampleCheck1">Frek Nafas
                                Normal
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="upaya5" name="upaya5" value="Frek Nafas Normal">
                            <label class="form-check-label" for="exampleCheck1">Frek Nafas
                                Normal
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="upaya6" name="upaya6" value="RR < 10 x/menit">
                            <label class="form-check-label" for="exampleCheck1">RR < 10 x/menit</label>
                        </div>

                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="upaya7" name="upaya7" value="SaO2">
                            <label class="form-check-label" for="exampleCheck1">SaO2 90 - 95%
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            <label class="form-check-label" for="exampleCheck1">
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            <label class="form-check-label" for="exampleCheck1">
                            </label>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="upaya8" name="upaya8" value="Sianosis">
                            <label class="form-check-label" for="exampleCheck1">Sianosis</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            <label class="form-check-label" for="exampleCheck1">
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold">SIRKULASI</td>

                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi1" name="sirkulasi1" value="Henti Jantung">
                            <label class="form-check-label" for="exampleCheck1">Henti
                                Jantung</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi2" name="sirkulasi2" value="Nadi Teraba Lemah">
                            <label class="form-check-label" for="exampleCheck1">Nadi Teraba
                                Lemah</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi3" name="sirkulasi3" value="Muntah Persisten">
                            <label class="form-check-label" for="exampleCheck1">Muntah Persisten
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi4" name="sirkulasi4" value="Nadi Kuat">
                            <label class="form-check-label" for="exampleCheck1">Nadi Kuat
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi5" name="sirkulasi5" value="Nadi Kuat">
                            <label class="form-check-label" for="exampleCheck1">Nadi Kuat
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi6" name="sirkulasi6" value="Nadi Tidak Teraba">
                            <label class="form-check-label" for="exampleCheck1">Nadi Tidak
                                Teraba</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi7" name="sirkulasi7" value="HR < 50x/menit">
                            <label class="form-check-label" for="exampleCheck1">HR < 50x/menit</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi8" name="sirkulasi8" value="Takikardia">
                            <label class="form-check-label" for="exampleCheck1">Takikardia
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi9" name="sirkulasi9" value="Frek Nadi Normal">
                            <label class="form-check-label" for="exampleCheck1">Frek Nadi
                                Normal
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi10" name="sirkulasi10" value="Frek Nadi Normal">
                            <label class="form-check-label" for="exampleCheck1">Frek Nadi
                                Normal
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi11" name="sirkulasi11" value="Akral Dingin">
                            <label class="form-check-label" for="exampleCheck1">Akral
                                Dingin</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi12" name="sirkulasi12" value="HR > 150x/menit">
                            <label class="form-check-label" for="exampleCheck1">HR >
                                150x/menit</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi13" name="sirkulasi13" value="TDS > 180">
                            <label class="form-check-label" for="exampleCheck1">TDS > 180
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi14" name="sirkulasi14" value="TDS 100 - 120">
                            <label class="form-check-label" for="exampleCheck1">TDS 100 - 120
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi15" name="sirkulasi15" value="TDS 100 - 120">
                            <label class="form-check-label" for="exampleCheck1">TDS 100 - 120
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>
                    <td>
                        <div class="col-md-2">
                            <div class="form-group form-check">
                                <label class="form-check-label" for="exampleCheck1"></label>
                            </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi16" name="sirkulasi16" value="Pucat">
                            <label class="form-check-label" for="exampleCheck1">Pucat</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi17" name="sirkulasi17" value="TDD > 120">
                            <label class="form-check-label" for="exampleCheck1">TDD > 120
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi18" name="sirkulasi18" value="TDD 70 - 90">
                            <label class="form-check-label" for="exampleCheck1">TDD 70 - 90
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi19" name="sirkulasi19" value="TDD 70 - 90">
                            <label class="form-check-label" for="exampleCheck1">TDD 70 - 90
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi20" name="sirkulasi20" value="Akral Dingin">
                            <label class="form-check-label" for="exampleCheck1">Akral
                                Dingin</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi21" name="sirkulasi21" value="Pendarahan">
                            <label class="form-check-label" for="exampleCheck1">Pendarahan
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi22" name="sirkulasi22" value="Muntah Atau Diare tanpa Dehidrasi">
                            <label class="form-check-label" for="exampleCheck1">Muntah Atau
                                Diare tanpa
                                Dehidrasi
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label>

                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi23" name="sirkulasi23" value="CRT > 2 detik">
                            <label class="form-check-label" for="exampleCheck1">CRT > 2
                                detik</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi26" name="sirkulasi26" value="Dehidrasi">
                            <label class="form-check-label" for="exampleCheck1">Dehidrasi</label>
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi24" name="sirkulasi24" value="Diastolik < 80">
                            <label class="form-check-label" for="exampleCheck1">Diastolik < 80</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="sirkulasi25" name="sirkulasi25" value="Pendarahan Hebat">
                            <label class="form-check-label" for="exampleCheck1">Pendarahan
                                Hebat</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"> GEJALA SPESIFIK</td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala1" name="gejala1" value="Nyeri Dada">
                            <label class="form-check-label" for="exampleCheck1">Nyeri
                                Dada</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala2" name="gejala2" value="Demam, pasien imunosupersi">
                            <label class="form-check-label" for="exampleCheck1">Demam, pasien
                                imunosupersi
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala3" name="gejala3" value="Aspirasi, tanpa sesak">
                            <label class="form-check-label" for="exampleCheck1">Aspirasi,
                                tanpa sesak
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala4" name="gejala4" value="Nyeri Ringan">
                            <label class="form-check-label" for="exampleCheck1">Nyeri Ringan
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala5" name="gejala5" value="Sepsis">
                            <label class="form-check-label" for="exampleCheck1">Sepsis</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala6" name="gejala6" value="Nyeri sedang - berat">
                            <label class="form-check-label" for="exampleCheck1">Nyeri sedang -
                                berat
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala7" name="gejala7" value="Trauma Dada/Nyeri tanpa sesak">
                            <label class="form-check-label" for="exampleCheck1">Trauma
                                Dada/Nyeri tanpa sesak
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala8" name="gejala8" value="Luka Kecil">
                            <label class="form-check-label" for="exampleCheck1">Luka Kecil
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala9" name="gejala9" value="Nyeri Hebat">
                            <label class="form-check-label" for="exampleCheck1">Nyeri
                                Hebat</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala10" name="gejala10" value="Kolik Abdomen">
                            <label class="form-check-label" for="exampleCheck1">Kolik Abdomen
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala11" name="gejala11" value="Sulit menelan/nyeri/tanpa sesak">
                            <label class="form-check-label" for="exampleCheck1">Sulit
                                menelan/nyeri/tanpa
                                sesak
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala12" name="gejala12" value="Pasien Kontrol">
                            <label class="form-check-label" for="exampleCheck1">Pasien Kontrol
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala13" name="gejala13" value="Multiple Trauma">
                            <label class="form-check-label" for="exampleCheck1">Multiple
                                Trauma</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala14" name="gejala14" value="Trauma Tungkai - Deformitas laserasi parah, Crush">
                            <label class="form-check-label" for="exampleCheck1">Trauma Tungkai
                                - Deformitas
                                laserasi parah, Crush
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala15" name="gejala15" value="Nyeri Sedang">
                            <label class="form-check-label" for="exampleCheck1">Nyeri Sedang
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala16" name="gejala16" value="Imunisasi">
                            <label class="form-check-label" for="exampleCheck1">Imunisasi
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala17" name="gejala17" value="Trama Lokal yang Parah">
                            <label class="form-check-label" for="exampleCheck1">Trama Lokal
                                yang Parah</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala18" name="gejala18" value="Gangguan Sensasi, Nadi pada Tungkai">
                            <label class="form-check-label" for="exampleCheck1">Gangguan
                                Sensasi, Nadi pada
                                Tungkai
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala19" name="gejala19" value="Trauma Tungkai Ringan">
                            <label class="form-check-label" for="exampleCheck1">Trauma Tungkai
                                Ringan
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala20" name="gejala20" value="Pasien Psikiatri Kronis">
                            <label class="form-check-label" for="exampleCheck1">Pasien
                                Psikiatri Kronis
                            </label>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td class="text-bold"></td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala21" name="gejala21" value="Racun/bisa/obat resiko tinggi">
                            <label class="form-check-label" for="exampleCheck1">Racun/bisa/obat resiko
                                tinggi</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala22" name="gejala22" value="Gelisah Psikosis">
                            <label class="form-check-label" for="exampleCheck1">Gelisah
                                Psikosis
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala23" name="gejala23" value="Peradangan Sendi">
                            <label class="form-check-label" for="exampleCheck1">Peradangan
                                Sendi
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala24" name="gejala24" value="Pasien Psikiatri Mengamuk">
                            <label class="form-check-label" for="exampleCheck1">Pasien
                                Psikiatri
                                Mengamuk</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala25" name="gejala25" value="Defisit neurologis akut dan sub akut ( < 7 hari sampai dengan 3 minggu )">
                            <label class="form-check-label" for="exampleCheck1">Defisit
                                neurologis akut dan
                                sub akut ( < 7 hari sampai dengan 3 minggu ) </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala26" name="gejala26" value="Reaksi Konversi">
                            <label class="form-check-label" for="exampleCheck1">Reaksi
                                Konversi
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala27" name="gejala27" value="Defisit neurologi hiper akut ( < 3 hari) ">
                            <label class="form-check-label" for="exampleCheck1">Defisit
                                neurologi hiper akut
                                ( < 3 hari) </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala28" name="gejala28" value="Riwayat kejang bertambah sering > = 5 x sehari ">
                            <label class="form-check-label" for="exampleCheck1">Riwayat
                                kejang bertambah
                                sering ≥ 5 x sehari </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="gejala29" name="gejala29" value="Nyeri Kepala hebat mendadak (VAS > = 8) ">
                            <label class="form-check-label" for="exampleCheck1">Nyeri Kepala
                                hebat mendadak
                                (VAS ≥ 8) </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold">
                        <h5>Lainya</h5>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="text" class="form-input" id="ast1lain" name="ast1lain" value="">
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="text" class="form-input" id="ats2lain" name="ats2lain" value="">
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="text" class="form-input" id="ats3lain" name="ats3lain" value="">
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="text" class="form-input" id="ats4lain" name="ats4lain" value="">
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <div class="form-group form-check">
                                <input type="text" class="form-input" id="ats5lain" name="ats5lain" value="">
                            </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</div>

@else
<div class="accordion mt-3 mb-2" id="accordionExample">

    <div class="card-header bg-secondary" id="headingOne">
        <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Triase (ATS : Australian Triage Scale)
                DEWASA
            </button>
        </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">




        <table class=" table table-bordered">
            <tbody>
                <tr>
                    <td class="text-bold ">KATEGORI TRIASE </td>
                    <td>@if ($triase[0]->kategori_triase == 'Medikal')
                        <div class="form-group form-check">
                            <input checked type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Medikal">
                            <label class="form-check-label" for="exampleCheck1">Medikal</label>
                        </div>
                        @else
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Medikal">
                            <label class="form-check-label" for="exampleCheck1">Medikal</label>
                        </div>
                        @endif
                    </td>
                    <td>@if ($triase[0]->kategori_triase == 'Bedah')
                        <div class="form-group form-check">
                            <input checked type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Bedah">
                            <label class="form-check-label" for="exampleCheck1">Bedah
                                Paru</label>
                        </div>
                        @else
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Bedah">
                            <label class="form-check-label" for="exampleCheck1">Bedah
                                Paru</label>
                        </div>
                        @endif
                    </td>
                    <td>@if ($triase[0]->kategori_triase == 'Obgyn')
                        <div class="form-group form-check">
                            <input checked type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Obgyn">
                            <label class="form-check-label" for="exampleCheck1">Obgyn
                            </label>
                        </div>
                        @else
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Obgyn">
                            <label class="form-check-label" for="exampleCheck1">Obgyn
                            </label>
                        </div>
                        @endif
                    </td>
                    <td> @if ($triase[0]->kategori_triase == 'Anak')
                        <div class="form-group form-check">
                            <input checked type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Anak">
                            <label class="form-check-label" for="exampleCheck1">Anak
                            </label>
                        </div>
                        @else
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Anak">
                            <label class="form-check-label" for="exampleCheck1">Anak
                            </label>
                        </div>
                        @endif
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-bold">PEMERIKSAAN</td>
                    <td class="bg-danger"> @if ($triase[0]->pemeriksaan_triase == 'ATS1 Resusitasi')

                        <div class="form-group form-check">
                            <input type="checkbox" checked class="form-check-input" id="jenisats" name="jenisats" value="ATS1 Resusitasi">
                            <label class="form-check-label" for="exampleCheck1">ATS1 <br>Resusitasi</label>
                        </div>
                        @else
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS1 Resusitasi">
                            <label class="form-check-label" for="exampleCheck1">ATS1 <br>Resusitasi</label>
                        </div>
                        @endif
                    </td>
                    <td style="background-color: chocolate;"> @if ($triase[0]->pemeriksaan_triase == 'ATS2 Emergency')

                        <div class="form-group form-check">
                            <input checked type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS2 Emergency">
                            <label class="form-check-label" for="exampleCheck1">ATS2 <br>
                                Emergency</label>
                        </div>
                        @else
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS2 Emergency">
                            <label class="form-check-label" for="exampleCheck1">ATS2 <br>
                                Emergency</label>
                        </div>
                        @endif
                    </td>
                    <td class="bg-warning"> @if ($triase[0]->pemeriksaan_triase == 'ATS3 Urgent')

                        <div class="form-group form-check">
                            <input checked type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS3 Urgent">

                            <label class="form-check-label" for="exampleCheck1">ATS3 <br>
                                Urgent
                            </label>
                        </div>
                        @else
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS3 Urgent">
                            <label class="form-check-label" for="exampleCheck1">ATS3 <br>
                                Urgent
                            </label>
                        </div>
                        @endif
                    </td>
                    <td class="bg-success">@if ($triase[0]->pemeriksaan_triase == 'ATS4 Non Urgent')

                        <div class="form-group form-check">
                            <input checked type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS4 Non Urgent">
                            <label class="form-check-label" for="exampleCheck1">ATS4 <br> Non
                                Urgent
                            </label>
                        </div>
                        @else
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS4 Non Urgent">
                            <label class="form-check-label" for="exampleCheck1">ATS4 <br> Non
                                Urgent
                            </label>
                        </div>
                        @endif
                    </td>
                    <td> @if ($triase[0]->pemeriksaan_triase == 'ATS5 False Emergency')

                        <div class="form-group form-check">
                            <input checked type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS5 False Emergency">
                            <label class="form-check-label" for="exampleCheck1">ATS5 <br>
                                False Emergency
                            </label>
                        </div>
                        @else
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="jenisats" name="jenisats" value="ATS5 False Emergency">
                            <label class="form-check-label" for="exampleCheck1">ATS5 <br>
                                False Emergency
                            </label>
                        </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="text-bold">RESPON</td>
                    <td>
                        <div class="form-group form-check">

                            <label class="form-check-label" for="exampleCheck1">Segera</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">10 Menit
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">30 Menit
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">60 Menit
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">120 Menit
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold">KESADARAN</td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->kesadaran1 == 'GCS < 9') <input type="checkbox" class="form-check-input" id="kesadaran1" name="kesadaran1" value="GCS < 9" checked>
                                <label class="form-check-label" for="exampleCheck1">GCS < 9</label>
                                        @else
                                        <input type="checkbox" class="form-check-input" id="kesadaran1" name="kesadaran1" value="GCS < 9">
                                        <label class="form-check-label" for="exampleCheck1">GCS < 9</label>
                                                @endif
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->kesadaran2 == 'GCS 9 - 12')
                            <input type="checkbox" class="form-check-input" id="kesadaran2" name="kesadaran2" value="GCS 9 - 12" checked>
                            <label class="form-check-label" for="exampleCheck1">GCS 9 - 12</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="kesadaran2" name="kesadaran2" value="GCS 9 - 12">
                            <label class="form-check-label" for="exampleCheck1">GCS 9 - 12</label>
                            @endif
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->kesadaran3 == 'GCS > 12')
                            <input type="checkbox" class="form-check-input" id="kesadaran3" name="kesadaran3" value="GCS > 12" checked>
                            <label class="form-check-label" for="exampleCheck1">GCS > 12
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="kesadaran3" name="kesadaran3" value="GCS > 12">
                            <label class="form-check-label" for="exampleCheck1">GCS > 12
                            </label>
                            @endif
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->kesadaran4 == 'GCS 15')
                            <input type="checkbox" class="form-check-input" id="kesadaran4" name="kesadaran4" value="GCS 15" checked>
                            <label class="form-check-label" for="exampleCheck1">GCS 15 </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="kesadaran4" name="kesadaran4" value="GCS 15">
                            <label class="form-check-label" for="exampleCheck1">GCS 15 </label>
                            @endif
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->kesadaran5 == 'GCS 15')
                            <input type="checkbox" class="form-check-input" id="kesadaran5" name="kesadaran5" value="GCS 15" checked>
                            <label class="form-check-label" for="exampleCheck1">GCS 15
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="kesadaran5" name="kesadaran5" value="GCS 15">
                            <label class="form-check-label" for="exampleCheck1">GCS 15
                            </label>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->kesadaran6 == 'Kejang')
                            <input type="checkbox" class="form-check-input" id="kesadaran6" name="kesadaran6" value="Kejang" checked>
                            <label class="form-check-label" for="exampleCheck1">Kejang</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="kesadaran6" name="kesadaran6" value="Kejang">
                            <label class="form-check-label" for="exampleCheck1">Kejang</label>
                            @endif
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->kesadaran7 == 'Letargis')
                            <input type="checkbox" class="form-check-input" id="kesadaran7" name="kesadaran7" value="Letargis" checked>
                            <label class="form-check-label" for="exampleCheck1">Letargis</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="kesadaran7" name="kesadaran7" value="Letargis">
                            <label class="form-check-label" for="exampleCheck1">Letargis</label>
                            @endif
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->kesadaran8 == 'Trauma Kepala Riwayat Pingsan')
                            <input type="checkbox" class="form-check-input" id="kesadaran8" name="kesadaran8" value="Trauma Kepala Riwayat Pingsan" checked>
                            <label class="form-check-label" for="exampleCheck1">Trauma Kepala
                                Riwayat Pingsan
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="kesadaran8" name="kesadaran8" value="Trauma Kepala Riwayat Pingsan">
                            <label class="form-check-label" for="exampleCheck1">Trauma Kepala
                                Riwayat Pingsan
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->kesadaran9 == 'Trauma Kepala Riwayat Pingsan (-)')
                            <input type="checkbox" class="form-check-input" id="kesadaran9" name="kesadaran9" value="Trauma Kepala Riwayat Pingsan (-)" checked>
                            <label class="form-check-label" for="exampleCheck1">Trauma Kepala
                                Riwayat Pingsan
                                (-)
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="kesadaran9" name="kesadaran9" value="Trauma Kepala Riwayat Pingsan (-)">
                            <label class="form-check-label" for="exampleCheck1">Trauma Kepala
                                Riwayat Pingsan
                                (-)
                            </label>
                            @endif
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">
                            </label>
                        </div>
                    </td>


                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->kesadaran10 == 'Tidak Ada Respon')
                            <input type="checkbox" class="form-check-input" id="kesadaran10" name="kesadaran10" value="Tidak Ada Respon" checked>
                            <label class="form-check-label" for="exampleCheck1">Tidak Ada
                                Respon</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="kesadaran10" name="kesadaran10" value="Tidak Ada Respon">
                            <label class="form-check-label" for="exampleCheck1">Tidak Ada
                                Respon</label>
                            @endif
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->kesadaran11 == 'Somnolen')

                            <input type="checkbox" class="form-check-input" id="kesadaran11" name="kesadaran11" value="Somnolen" checked>
                            <label class="form-check-label" for="exampleCheck1">Somnolen
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="kesadaran11" name="kesadaran11" value="Somnolen">
                            <label class="form-check-label" for="exampleCheck1">Somnolen
                            </label>
                            @endif
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->kesadaran12 == 'Paska Kejang')

                            <input type="checkbox" class="form-check-input" id="kesadaran12" name="kesadaran12" value="Paska Kejang" checked>
                            <label class="form-check-label" for="exampleCheck1">Paska Kejang
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="kesadaran12" name="kesadaran12" value="Paska Kejang">
                            <label class="form-check-label" for="exampleCheck1">Paska Kejang
                            </label>
                            @endif
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold">JALAN NAFAS</td>

                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->jalan_nafas1 == 'Sumbatan Total')

                            <input type="checkbox" class="form-check-input" id="jalannafas1" name="jalannafas1" value="Sumbatan Total" checked>
                            <label class="form-check-label" for="exampleCheck1">Sumbatan
                                Total</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="jalannafas1" name="jalannafas1" value="Sumbatan Total">
                            <label class="form-check-label" for="exampleCheck1">Sumbatan
                                Total</label>
                            @endif
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->jalan_nafas2 == 'Sumbatan Parsial')

                            <input type="checkbox" class="form-check-input" id="jalannafas2" name="jalannafas2" value="Sumbatan Parsial" checked>
                            <label class="form-check-label" for="exampleCheck1">Sumbatan
                                Parsial</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="jalannafas2" name="jalannafas2" value="Sumbatan Parsial">
                            <label class="form-check-label" for="exampleCheck1">Sumbatan
                                Parsial</label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->jalan_nafas3 == 'Bebas')

                            <input type="checkbox" class="form-check-input" id="jalannafas3" name="jalannafas3" value="Bebas" checked>
                            <label class="form-check-label" for="exampleCheck1">Bebas
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="jalannafas3" name="jalannafas3" value="Bebas">
                            <label class="form-check-label" for="exampleCheck1">Bebas
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->jalan_nafas4 == 'Bebas')

                            <input type="checkbox" class="form-check-input" id="jalannafas4" name="jalannafas4" value="Bebas" checked>
                            <label class="form-check-label" for="exampleCheck1">Bebas
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="jalannafas4" name="jalannafas4" value="Bebas">
                            <label class="form-check-label" for="exampleCheck1">Bebas
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->jalan_nafas5 == 'Bebas')

                            <input type="checkbox" class="form-check-input" id="jalannafas5" name="jalannafas5" value="Bebas" checked>
                            <label class="form-check-label" for="exampleCheck1">Bebas
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="jalannafas5" name="jalannafas5" value="Bebas">
                            <label class="form-check-label" for="exampleCheck1">Bebas
                            </label>
                            @endif

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold">PERNAFASAN</td>

                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->upaya1 == 'Henti Nafas')

                            <input type="checkbox" class="form-check-input" id="upaya1" name="upaya1" value="Henti Nafas" checked>
                            <label class="form-check-label" for="exampleCheck1">Henti
                                Nafas</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="upaya1" name="upaya1" value="Henti Nafas">
                            <label class="form-check-label" for="exampleCheck1">Henti
                                Nafas</label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->upaya2 == 'Distres Pernafasan')

                            <input type="checkbox" class="form-check-input" id="upaya2" name="upaya2" value="Distres Pernafasan" checked>
                            <label class="form-check-label" for="exampleCheck1">Distres
                                Pernafasan</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="upaya2" name="upaya2" value="Distres Pernafasan">
                            <label class="form-check-label" for="exampleCheck1">Distres
                                Pernafasan</label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->upaya3 == 'Sesak Nafas')

                            <input type="checkbox" class="form-check-input" id="upaya3" name="upaya3" value="Sesak Nafas" checked>
                            <label class="form-check-label" for="exampleCheck1">Sesak Nafas
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="upaya3" name="upaya3" value="Sesak Nafas">
                            <label class="form-check-label" for="exampleCheck1">Sesak Nafas
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->upaya4 == 'Frek Nafas Normal')

                            <input type="checkbox" class="form-check-input" id="upaya4" name="upaya4" value="Frek Nafas Normal" checked>
                            <label class="form-check-label" for="exampleCheck1">Frek Nafas
                                Normal
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="upaya4" name="upaya4" value="Frek Nafas Normal">
                            <label class="form-check-label" for="exampleCheck1">Frek Nafas
                                Normal
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->upaya5 == 'Frek Nafas Normal')

                            <input type="checkbox" class="form-check-input" id="upaya5" name="upaya5" value="Frek Nafas Normal" checked>
                            <label class="form-check-label" for="exampleCheck1">Frek Nafas
                                Normal
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="upaya5" name="upaya5" value="Frek Nafas Normal">
                            <label class="form-check-label" for="exampleCheck1">Frek Nafas
                                Normal
                            </label>
                            @endif

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->upaya6 == 'RR < 10 x/menit') <input type="checkbox" class="form-check-input" id="upaya6" name="upaya6" value="RR < 10 x/menit" checked>
                                <label class="form-check-label" for="exampleCheck1">RR < 10 x/menit</label>
                                        @else
                                        <input type="checkbox" class="form-check-input" id="upaya6" name="upaya6" value="RR < 10 x/menit">
                                        <label class="form-check-label" for="exampleCheck1">RR < 10 x/menit</label>
                                                @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->upaya7 == 'SaO2')
                            <input type="checkbox" class="form-check-input" id="upaya7" name="upaya7" value="SaO2" checked>
                            <label class="form-check-label" for="exampleCheck1">SaO2 90 - 95%
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="upaya7" name="upaya7" value="SaO2">
                            <label class="form-check-label" for="exampleCheck1">SaO2 90 - 95%
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            <label class="form-check-label" for="exampleCheck1">
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            <label class="form-check-label" for="exampleCheck1">
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->upaya8 == 'Sianosis')
                            <input type="checkbox" class="form-check-input" id="upaya8" name="upaya8" value="Sianosis" checked>
                            <label class="form-check-label" for="exampleCheck1">Sianosis</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="upaya8" name="upaya8" value="Sianosis">
                            <label class="form-check-label" for="exampleCheck1">Sianosis</label>
                            @endif
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold">SIRKULASI</td>

                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi1 == 'Henti Jantung')
                            <input type="checkbox" class="form-check-input" id="sirkulasi1" name="sirkulasi1" value="Henti Jantung" checked>
                            <label class="form-check-label" for="exampleCheck1">Henti
                                Jantung</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi1" name="sirkulasi1" value="Henti Jantung">
                            <label class="form-check-label" for="exampleCheck1">Henti
                                Jantung</label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi2 == 'Nadi Teraba Lemah')
                            <input type="checkbox" class="form-check-input" id="sirkulasi2" name="sirkulasi2" value="Nadi Teraba Lemah" checked>
                            <label class="form-check-label" for="exampleCheck1">Nadi Teraba
                                Lemah</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi2" name="sirkulasi2" value="Nadi Teraba Lemah">
                            <label class="form-check-label" for="exampleCheck1">Nadi Teraba
                                Lemah</label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi3 == 'Muntah Pasien')
                            <input type="checkbox" class="form-check-input" id="sirkulasi3" name="sirkulasi3" value="Muntah Pasien" checked>
                            <label class="form-check-label" for="exampleCheck1">Muntah Pasien
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi3" name="sirkulasi3" value="Muntah Pasien">
                            <label class="form-check-label" for="exampleCheck1">Muntah Pasien
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi4 == 'Nadi Kuat')
                            <input type="checkbox" class="form-check-input" id="sirkulasi4" name="sirkulasi4" value="Nadi Kuat" checked>
                            <label class="form-check-label" for="exampleCheck1">Nadi Kuat
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi4" name="sirkulasi4" value="Nadi Kuat">
                            <label class="form-check-label" for="exampleCheck1">Nadi Kuat
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi5 == 'Nadi Kuat')
                            <input type="checkbox" class="form-check-input" id="sirkulasi5" name="sirkulasi5" value="Nadi Kuat" checked>
                            <label class="form-check-label" for="exampleCheck1">Nadi Kuat
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi5" name="sirkulasi5" value="Nadi Kuat">
                            <label class="form-check-label" for="exampleCheck1">Nadi Kuat
                            </label>
                            @endif

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi6 == 'Nadi Tidak Teraba')
                            <input type="checkbox" class="form-check-input" id="sirkulasi6" name="sirkulasi6" value="Nadi Tidak Teraba" checked>
                            <label class="form-check-label" for="exampleCheck1">Nadi Tidak
                                Teraba</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi6" name="sirkulasi6" value="Nadi Tidak Teraba">
                            <label class="form-check-label" for="exampleCheck1">Nadi Tidak
                                Teraba</label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi7 == 'HR < 50x/menit') <input type="checkbox" class="form-check-input" id="sirkulasi7" name="sirkulasi7" value="HR < 50x/menit" checked>
                                <label class="form-check-label" for="exampleCheck1">HR < 50x/menit</label>
                                        @else
                                        <input type="checkbox" class="form-check-input" id="sirkulasi7" name="sirkulasi7" value="HR < 50x/menit">
                                        <label class="form-check-label" for="exampleCheck1">HR < 50x/menit</label>
                                                @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi8 == 'Takikardia')
                            <input type="checkbox" class="form-check-input" id="sirkulasi8" name="sirkulasi8" value="Takikardia" checked>
                            <label class="form-check-label" for="exampleCheck1">Takikardia
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi8" name="sirkulasi8" value="Takikardia">
                            <label class="form-check-label" for="exampleCheck1">Takikardia
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi9 == 'Frek Nadi Normal')
                            <input type="checkbox" class="form-check-input" id="sirkulasi9" name="sirkulasi9" value="Frek Nadi Normal" checked>
                            <label class="form-check-label" for="exampleCheck1">Frek Nadi
                                Normal
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi9" name="sirkulasi9" value="Frek Nadi Normal">
                            <label class="form-check-label" for="exampleCheck1">Frek Nadi
                                Normal
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi10 == 'Frek Nadi Normal')
                            <input type="checkbox" class="form-check-input" id="sirkulasi10" name="sirkulasi10" value="Frek Nadi Normal" checked>
                            <label class="form-check-label" for="exampleCheck1">Frek Nadi
                                Normal
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi10" name="sirkulasi10" value="Frek Nadi Normal">
                            <label class="form-check-label" for="exampleCheck1">Frek Nadi
                                Normal
                            </label>
                            @endif

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi11 == 'Akral Dingin')
                            <input type="checkbox" class="form-check-input" id="sirkulasi11" name="sirkulasi11" value="Akral Dingin" checked>
                            <label class="form-check-label" for="exampleCheck1">Akral
                                Dingin</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi11" name="sirkulasi11" value="Akral Dingin">
                            <label class="form-check-label" for="exampleCheck1">Akral
                                Dingin</label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi12 == 'HR > 150x/menit')
                            <input type="checkbox" class="form-check-input" id="sirkulasi12" name="sirkulasi12" value="HR > 150x/menit" checked>
                            <label class="form-check-label" for="exampleCheck1">HR >
                                150x/menit</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi12" name="sirkulasi12" value="HR > 150x/menit">
                            <label class="form-check-label" for="exampleCheck1">HR >
                                150x/menit</label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi13 == 'TDS > 180')
                            <input type="checkbox" class="form-check-input" id="sirkulasi13" name="sirkulasi13" value="TDS > 180" checked>
                            <label class="form-check-label" for="exampleCheck1">TDS > 180
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi13" name="sirkulasi13" value="TDS > 180">
                            <label class="form-check-label" for="exampleCheck1">TDS > 180
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi14 == 'TDS 100 - 120')
                            <input type="checkbox" class="form-check-input" id="sirkulasi14" name="sirkulasi14" value="TDS 100 - 120" checked>
                            <label class="form-check-label" for="exampleCheck1">TDS 100 - 120
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi14" name="sirkulasi14" value="TDS 100 - 120">
                            <label class="form-check-label" for="exampleCheck1">TDS 100 - 120
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi15 == 'TDS 100 - 120')
                            <input type="checkbox" class="form-check-input" id="sirkulasi15" name="sirkulasi15" value="TDS 100 - 120" checked>
                            <label class="form-check-label" for="exampleCheck1">TDS 100 - 120
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi15" name="sirkulasi15" value="TDS 100 - 120">
                            <label class="form-check-label" for="exampleCheck1">TDS 100 - 120
                            </label>
                            @endif

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi16 == 'Pucat')
                            <input type="checkbox" class="form-check-input" id="sirkulasi16" name="sirkulasi16" value="Pucat" checked>
                            <label class="form-check-label" for="exampleCheck1">Pucat</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi16" name="sirkulasi16" value="Pucat">
                            <label class="form-check-label" for="exampleCheck1">Pucat</label>
                            @endif
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi17 == 'TDD > 120')
                            <input type="checkbox" class="form-check-input" id="sirkulasi17" name="sirkulasi17" value="TDD > 120" checked>
                            <label class="form-check-label" for="exampleCheck1">TDD > 120
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi17" name="sirkulasi17" value="TDD > 120">
                            <label class="form-check-label" for="exampleCheck1">TDD > 120
                            </label>
                            @endif
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi18 == 'TDD 70 - 90')
                            <input type="checkbox" class="form-check-input" id="sirkulasi18" name="sirkulasi18" value="TDD 70 - 90" checked>
                            <label class="form-check-label" for="exampleCheck1">TDD 70 - 90
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi18" name="sirkulasi18" value="TDD 70 - 90">
                            <label class="form-check-label" for="exampleCheck1">TDD 70 - 90
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi19 == 'TDD 70 - 90')
                            <input type="checkbox" class="form-check-input" id="sirkulasi19" name="sirkulasi19" value="TDD 70 - 90" checked>
                            <label class="form-check-label" for="exampleCheck1">TDD 70 - 90
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi19" name="sirkulasi19" value="TDD 70 - 90">
                            <label class="form-check-label" for="exampleCheck1">TDD 70 - 90
                            </label>>
                            @endif

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi20 == 'Akral Dingin')
                            <input type="checkbox" class="form-check-input" id="sirkulasi20" name="sirkulasi20" value="Akral Dingin" checked>
                            <label class="form-check-label" for="exampleCheck1">Akral
                                Dingin</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi20" name="sirkulasi20" value="Akral Dingin">
                            <label class="form-check-label" for="exampleCheck1">Akral
                                Dingin</label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi21 == 'Pendarahan')
                            <input type="checkbox" class="form-check-input" id="sirkulasi21" name="sirkulasi21" value="Pendarahan" checked>
                            <label class="form-check-label" for="exampleCheck1">Pendarahan
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi21" name="sirkulasi21" value="Pendarahan">
                            <label class="form-check-label" for="exampleCheck1">Pendarahan
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi22 == 'Muntah Atau Diare tanpa Dehidrasi')
                            <input type="checkbox" class="form-check-input" id="sirkulasi22" name="sirkulasi22" value="Muntah Atau Diare tanpa Dehidrasi" checked>
                            <label class="form-check-label" for="exampleCheck1">Muntah Atau
                                Diare tanpa
                                Dehidrasi
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi22" name="sirkulasi22" value="Muntah Atau Diare tanpa Dehidrasi">
                            <label class="form-check-label" for="exampleCheck1">Muntah Atau
                                Diare tanpa
                                Dehidrasi
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi23 == 'CRT > 2 detik')
                            <input type="checkbox" class="form-check-input" id="sirkulasi23" name="sirkulasi23" value="CRT > 2 detik" checked>
                            <label class="form-check-label" for="exampleCheck1">CRT > 2
                                detik</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi23" name="sirkulasi23" value="CRT > 2 detik">
                            <label class="form-check-label" for="exampleCheck1">CRT > 2
                                detik</label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi24 == 'Diastolik < 80') <input type="checkbox" class="form-check-input" id="sirkulasi24" name="sirkulasi24" value="Diastolik < 80" checked>
                                <label class="form-check-label" for="exampleCheck1">Diastolik < 80</label>
                                        @else
                                        <input type="checkbox" class="form-check-input" id="sirkulasi24" name="sirkulasi24" value="Diastolik < 80">
                                        <label class="form-check-label" for="exampleCheck1">Diastolik < 80</label>
                                                @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">


                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">


                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">


                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->sirkulasi25 == 'Pendarahan Hebat')
                            <input type="checkbox" class="form-check-input" id="sirkulasi25" name="sirkulasi25" value="Pendarahan Hebat" checked>
                            <label class="form-check-label" for="exampleCheck1">Pendarahan
                                Hebat</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="sirkulasi25" name="sirkulasi25" value="Pendarahan Hebat">
                            <label class="form-check-label" for="exampleCheck1">Pendarahan
                                Hebat</label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"> GEJALA SPESIFIK</td>

                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi1 == 'Nyeri Dada')
                            <input type="checkbox" class="form-check-input" id="gejala1" name="gejala1" value="Nyeri Dada" checked>
                            <label class="form-check-label" for="exampleCheck1">Nyeri
                                Dada</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala1" name="gejala1" value="Nyeri Dada">
                            <label class="form-check-label" for="exampleCheck1">Nyeri
                                Dada</label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi2 == 'Demam, pasien imunosupersi')
                            <input type="checkbox" class="form-check-input" id="gejala2" name="gejala2" value="Demam, pasien imunosupersi" checked>
                            <label class="form-check-label" for="exampleCheck1">Demam, pasien
                                imunosupersi
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala2" name="gejala2" value="Demam, pasien imunosupersi">
                            <label class="form-check-label" for="exampleCheck1">Demam, pasien
                                imunosupersi
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi3 == 'Aspirasi, tanpa sesak')
                            <input type="checkbox" class="form-check-input" id="gejala3" name="gejala3" value="Aspirasi, tanpa sesak" checked>
                            <label class="form-check-label" for="exampleCheck1">Aspirasi,
                                tanpa sesak
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala3" name="gejala3" value="Aspirasi, tanpa sesak">
                            <label class="form-check-label" for="exampleCheck1">Aspirasi,
                                tanpa sesak
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi4 == 'Nyeri Ringan')
                            <input type="checkbox" class="form-check-input" id="gejala4" name="gejala4" value="Nyeri Ringan" checked>
                            <label class="form-check-label" for="exampleCheck1">Nyeri Ringan
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala4" name="gejala4" value="Nyeri Ringan">
                            <label class="form-check-label" for="exampleCheck1">Nyeri Ringan
                            </label>
                            @endif

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi5 == 'Sepsis')
                            <input type="checkbox" class="form-check-input" id="gejala5" name="gejala5" value="Sepsis" checked>
                            <label class="form-check-label" for="exampleCheck1">Sepsis</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala5" name="gejala5" value="Sepsis">
                            <label class="form-check-label" for="exampleCheck1">Sepsis</label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi6 == 'Nyeri sedang - berat')
                            <input type="checkbox" class="form-check-input" id="gejala6" name="gejala6" value="Nyeri sedang - berat" checked>
                            <label class="form-check-label" for="exampleCheck1">Nyeri sedang -
                                berat
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala6" name="gejala6" value="Nyeri sedang - berat">
                            <label class="form-check-label" for="exampleCheck1">Nyeri sedang -
                                berat
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi7 == 'Trauma Dada/Nyeri tanpa sesak')
                            <input type="checkbox" class="form-check-input" id="gejala7" name="gejala7" value="Trauma Dada/Nyeri tanpa sesak" checked>
                            <label class="form-check-label" for="exampleCheck1">Trauma
                                Dada/Nyeri tanpa sesak
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala7" name="gejala7" value="Trauma Dada/Nyeri tanpa sesak">
                            <label class="form-check-label" for="exampleCheck1">Trauma
                                Dada/Nyeri tanpa sesak
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi8 == 'Luka Kecil')
                            <input type="checkbox" class="form-check-input" id="gejala8" name="gejala8" value="Luka Kecil" checked>
                            <label class="form-check-label" for="exampleCheck1">Luka Kecil
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala8" name="gejala8" value="Luka Kecil">
                            <label class="form-check-label" for="exampleCheck1">Luka Kecil
                            </label>
                            @endif

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi9 == 'Nyeri Hebat')
                            <input type="checkbox" class="form-check-input" id="gejala9" name="gejala9" value="Nyeri Hebat" checked>
                            <label class="form-check-label" for="exampleCheck1">Nyeri
                                Hebat</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala9" name="gejala9" value="Nyeri Hebat">
                            <label class="form-check-label" for="exampleCheck1">Nyeri
                                Hebat</label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi10 == 'Kolik Abdomen')
                            <input type="checkbox" class="form-check-input" id="gejala10" name="gejala10" value="Kolik Abdomen" checked>
                            <label class="form-check-label" for="exampleCheck1">Kolik Abdomen
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala10" name="gejala10" value="Kolik Abdomen">
                            <label class="form-check-label" for="exampleCheck1">Kolik Abdomen
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi11 == 'Sulit menelan/nyeri/tanpa sesak')
                            <input type="checkbox" class="form-check-input" id="gejala11" name="gejala11" value="Sulit menelan/nyeri/tanpa sesak" checked>
                            <label class="form-check-label" for="exampleCheck1">Sulit
                                menelan/nyeri/tanpa
                                sesak
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala11" name="gejala11" value="Sulit menelan/nyeri/tanpa sesak">
                            <label class="form-check-label" for="exampleCheck1">Sulit
                                menelan/nyeri/tanpa
                                sesak
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi12 == 'Pasien Kontrol')
                            <input type="checkbox" class="form-check-input" id="gejala12" name="gejala12" value="Pasien Kontrol" checked>
                            <label class="form-check-label" for="exampleCheck1">Pasien Kontrol
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala12" name="gejala12" value="Pasien Kontrol">
                            <label class="form-check-label" for="exampleCheck1">Pasien Kontrol
                            </label>
                            @endif

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi13 == 'Multiple Trauma')
                            <input type="checkbox" class="form-check-input" id="gejala13" name="gejala13" value="Multiple Trauma" checked>
                            <label class="form-check-label" for="exampleCheck1">Multiple
                                Trauma</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala13" name="gejala13" value="Multiple Trauma">
                            <label class="form-check-label" for="exampleCheck1">Multiple
                                Trauma</label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi14 == 'Trauma Tungkai - Deformitas laserasi parah, Crush')
                            <input type="checkbox" class="form-check-input" id="gejala14" name="gejala14" value="Trauma Tungkai - Deformitas laserasi parah, Crush" checked>
                            <label class="form-check-label" for="exampleCheck1">Trauma Tungkai
                                - Deformitas
                                laserasi parah, Crush
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala14" name="gejala14" value="Trauma Tungkai - Deformitas laserasi parah, Crush">
                            <label class="form-check-label" for="exampleCheck1">Trauma Tungkai
                                - Deformitas
                                laserasi parah, Crush
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi15 == 'Nyeri Sedang')
                            <input type="checkbox" class="form-check-input" id="gejala15" name="gejala15" value="Nyeri Sedang" checked>
                            <label class="form-check-label" for="exampleCheck1">Nyeri Sedang
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala15" name="gejala15" value="Nyeri Sedang">
                            <label class="form-check-label" for="exampleCheck1">Nyeri Sedang
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi16 == 'Imunisasi')
                            <input type="checkbox" class="form-check-input" id="gejala16" name="gejala16" value="Imunisasi" checked>
                            <label class="form-check-label" for="exampleCheck1">Imunisasi
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala16" name="gejala16" value="Imunisasi">
                            <label class="form-check-label" for="exampleCheck1">Imunisasi
                            </label>
                            @endif

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi17 == 'Trama Lokal yang Parah')
                            <input type="checkbox" class="form-check-input" id="gejala17" name="gejala17" value="Trama Lokal yang Parah" checked>
                            <label class="form-check-label" for="exampleCheck1">Trama Lokal
                                yang Parah</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala17" name="gejala17" value="Trama Lokal yang Parah">
                            <label class="form-check-label" for="exampleCheck1">Trama Lokal
                                yang Parah</label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi18 == 'Gangguan Sensasi, Nadi pada Tungkai')
                            <input type="checkbox" class="form-check-input" id="gejala18" name="gejala18" value="Gangguan Sensasi, Nadi pada Tungkai" checked>
                            <label class="form-check-label" for="exampleCheck1">Gangguan
                                Sensasi, Nadi pada
                                Tungkai
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala18" name="gejala18" value="Gangguan Sensasi, Nadi pada Tungkai">
                            <label class="form-check-label" for="exampleCheck1">Gangguan
                                Sensasi, Nadi pada
                                Tungkai
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi19 == 'Trauma Tungkai Ringan')
                            <input type="checkbox" class="form-check-input" id="gejala19" name="gejala19" value="Trauma Tungkai Ringan" checked>
                            <label class="form-check-label" for="exampleCheck1">Trauma Tungkai
                                Ringan
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala19" name="gejala19" value="Trauma Tungkai Ringan">
                            <label class="form-check-label" for="exampleCheck1">Trauma Tungkai
                                Ringan
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi20 == 'Pasien Psikiatri Kronis')
                            <input type="checkbox" class="form-check-input" id="gejala20" name="gejala20" value="Pasien Psikiatri Kronis" checked>
                            <label class="form-check-label" for="exampleCheck1">Pasien
                                Psikiatri Kronis
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala20" name="gejala20" value="Pasien Psikiatri Kronis">
                            <label class="form-check-label" for="exampleCheck1">Pasien
                                Psikiatri Kronis
                            </label>
                            @endif

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi21 == 'Racun/bisa/obat resiko tinggi')
                            <input type="checkbox" class="form-check-input" id="gejala21" name="gejala21" value="Racun/bisa/obat resiko tinggi" checked>
                            <label class="form-check-label" for="exampleCheck1">Racun/bisa/obat resiko
                                tinggi</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala21" name="gejala21" value="Racun/bisa/obat resiko tinggi">
                            <label class="form-check-label" for="exampleCheck1">Racun/bisa/obat resiko
                                tinggi</label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi22 == 'Gelisah Psikosis')
                            <input type="checkbox" class="form-check-input" id="gejala22" name="gejala22" value="Gelisah Psikosis" checked>
                            <label class="form-check-label" for="exampleCheck1">Gelisah
                                Psikosis
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala22" name="gejala22" value="Gelisah Psikosis">
                            <label class="form-check-label" for="exampleCheck1">Gelisah
                                Psikosis
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi23 == 'Peradangan Sendi')
                            <input type="checkbox" class="form-check-input" id="gejala23" name="gejala23" value="Peradangan Sendi" checked>
                            <label class="form-check-label" for="exampleCheck1">Peradangan
                                Sendi
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala23" name="gejala23" value="Peradangan Sendi">
                            <label class="form-check-label" for="exampleCheck1">Peradangan
                                Sendi
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi24 == 'Pasien Psikiatri Mengamuk')
                            <input type="checkbox" class="form-check-input" id="gejala24" name="gejala24" value="Pasien Psikiatri Mengamuk" checked>
                            <label class="form-check-label" for="exampleCheck1">Pasien
                                Psikiatri
                                Mengamuk</label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala24" name="gejala24" value="Pasien Psikiatri Mengamuk">
                            <label class="form-check-label" for="exampleCheck1">Pasien
                                Psikiatri
                                Mengamuk</label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi25 == 'Defisit neurologis akut dan sub akut ( < 7 hari sampai dengan 3 minggu )') <input type="checkbox" class="form-check-input" id="gejala25" name="gejala25" value="Defisit neurologis akut dan sub akut ( < 7 hari sampai dengan 3 minggu )" checked>
                                <label class="form-check-label" for="exampleCheck1">Defisit
                                    neurologis akut dan
                                    sub akut ( < 7 hari sampai dengan 3 minggu ) </label>
                                        @else
                                        <input type="checkbox" class="form-check-input" id="gejala25" name="gejala25" value="Defisit neurologis akut dan sub akut ( < 7 hari sampai dengan 3 minggu )">
                                        <label class="form-check-label" for="exampleCheck1">Defisit
                                            neurologis akut dan
                                            sub akut ( < 7 hari sampai dengan 3 minggu ) </label>
                                                @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi26 == 'Reaksi Konversi')
                            <input type="checkbox" class="form-check-input" id="gejala26" name="gejala26" value="Reaksi Konversi" checked>
                            <label class="form-check-label" for="exampleCheck1">Reaksi
                                Konversi
                            </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala26" name="gejala26" value="Reaksi Konversi">
                            <label class="form-check-label" for="exampleCheck1">Reaksi
                                Konversi
                            </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi27 == 'Defisit neurologi hiper akut ( < 3 hari)')
                                <input type="checkbox" class="form-check-input" id="gejala27" name="gejala27" value="Defisit neurologi hiper akut ( < 3 hari) " checked>
                                <label class="form-check-label" for="exampleCheck1">Defisit
                                    neurologi hiper akut
                                    ( < 3 hari) </label>
                                        @else
                                        <input type="checkbox" class="form-check-input" id="gejala27" name="gejala27" value="Defisit neurologi hiper akut ( < 3 hari) ">
                                        <label class="form-check-label" for="exampleCheck1">Defisit
                                            neurologi hiper akut
                                            ( < 3 hari) </label>
                                                @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-2">
                            <div class="form-group form-check">
                                @if ($triase[0]->gejala_respirasi28 == 'Riwayat kejang bertambah sering > = 5 x sehari')
                                <input type="checkbox" class="form-check-input" id="gejala28" name="gejala28" value="Riwayat kejang bertambah sering > = 5 x sehari" checked>
                                <label class="form-check-label" for="exampleCheck1">Riwayat
                                    kejang bertambah
                                    sering ≥ 5 x sehari </label>
                                @else
                                <input type="checkbox" class="form-check-input" id="gejala28" name="gejala28" value="Riwayat kejang bertambah sering > = 5 x sehari">
                                <label class="form-check-label" for="exampleCheck1">Riwayat
                                    kejang bertambah
                                    sering ≥ 5 x sehari </label>
                                @endif

                            </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold"></td>

                    <td>
                        <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            @if ($triase[0]->gejala_respirasi29 == ' Nyeri Kepala heba mendadak (VAS > = 8)')
                            <input type="checkbox" class="form-check-input" id="gejala29" name="gejala29" value="Nyeri Kepala heba mendadak (VAS > = 8) " checked>
                            <label class="form-check-label" for="exampleCheck1">Nyeri Kepala
                                hebat mendadak
                                (VAS ≥ 8) </label>
                            @else
                            <input type="checkbox" class="form-check-input" id="gejala29" name="gejala29" value="Nyeri Kepala heba mendadak (VAS > = 8) ">
                            <label class="form-check-label" for="exampleCheck1">Nyeri Kepala
                                hebat mendadak
                                (VAS ≥ 8) </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">

                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold">
                        <h5>Lainya</h5>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="text" class="form-input" id="ast1lain" name="ast1lain" placeholder="{{$triase[0]->ats1lain}}" value="">
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="text" class="form-input" id="ats2lain" name="ats2lain" value="" placeholder="{{$triase[0]->ats2lain}}">
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="text" class="form-input" id="ats3lain" name="ats3lain" value="" placeholder="{{$triase[0]->ats3lain}}">
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <input type="text" class="form-input" id="ats4lain" name="ats4lain" value="" placeholder="{{$triase[0]->ats4lain}}">
                        </div>
                    </td>
                    <td>
                        <div class="form-group form-check">
                            <div class="form-group form-check">
                                <input type="text" class="form-input" id="ats5lain" name="ats5lain" value="" placeholder="{{$triase[0]->ats5lain}}">
                            </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    @endif