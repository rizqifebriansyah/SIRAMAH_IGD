<div class="card-header">
    <h3 class="card-title">TRIASE ANAK</h3>
</div>

<div class="card-body">
    <div class="card">
        <div class="card-header text-bold bg-success">+ SKRINING PASIEN IGD +</div>
        <form action="" class="formpemeriksaantriase">
            <div class="card-body">
                @if ($triase == null)

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
                            <td class="text-bold font-italic">Klasifikasi pasien</td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klasifikasipasien" id="klasifikasipasien" value="IGD">
                                    <label class="form-check-label" for="inlineRadio1">IGD</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klasifikasipasien" id="klasifikasipasien" value="IGK">
                                    <label class="form-check-label" for="inlineRadio2">IGD KEBIDANAN</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klasifikasipasien" id="klasifikasipasien" value="PULANG">
                                    <label class="form-check-label" for="inlineRadio2">Pulang</label>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <div class="accordion" id="accordionExample1">

                    <div class="card-header bg-secondary" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target=" #collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                <i class="bi bi-ticket-detailed mr-1 ml-1"></i> PENANDAAN GAMBAR
                            </button>
                        </h2>
                    </div>

                    <div id="collapsetwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample1">
                        <img id="gambarnya1" style="margin-top:50px" width="600px" height="400px" src="{{ asset('public/img-mark/demo/nyeri.jpg') }}" onclick="showMarkerArea(this);" />
                        <canvas hidden id="myCanvas1" width="600px" height="400px" style="border:1px solid #d3d3d3;">
                            Your browser does not support the HTML5 canvas tag.
                        </canvas>
                        <button type="button" class="btn btn-danger mt-2" onclick="batalgambar1()">batal</button>
                    </div>
                </div>
                <div class="accordion mt-3" id="accordionExample">

                    <div class="card-header bg-secondary" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Triase (ATS : Australian Triage Scale)
                                ANAK
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
                                            <label class="form-check-label" for="exampleCheck1">ATS4 <br> Non
                                                Urgent
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
                                            <input type="checkbox" class="form-check-input" id="kesadaran1" name="kesadaran1" value="Tidak ada">
                                            <label class="form-check-label" for="exampleCheck1">Tidak
                                                ada</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kesadaran2" name="kesadaran2" value="Penurunan Kesadaran">
                                            <label class="form-check-label" for="exampleCheck1">Penurunan
                                                Kesadaran</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kesadaran3" name="kesadaran3" value="Unconsable">
                                            <label class="form-check-label" for="exampleCheck1">Unconsable
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kesadaran4" name="kesadaran4" value="Consolable">
                                            <label class="form-check-label" for="exampleCheck1">Consolable
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kesadaran5" name="kesadaran5" value="Tidak ada perbuahan perilaku atau tanda vital">
                                            <label class="form-check-label" for="exampleCheck1">Tidak ada
                                                perbuahan perilaku atau tanda vital
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>
                                    <td>
                                        <div class="form-group form-check">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kesadaran6" name="kesadaran6" value="Letargis">
                                            <label class="form-check-label" for="exampleCheck1">Letargis</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kesadaran7" name="kesadaran7" value="Atypical Behaviour">
                                            <label class="form-check-label" for="exampleCheck1">Atypical
                                                Behaviour
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kesadaran8" name="kesadaran8" value="Atypical Behaviour">
                                            <label class="form-check-label" for="exampleCheck1">Atypical
                                                Behaviour
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

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kesadaran9" name="kesadaran9" value="Tidak Mau Menetek">
                                            <label class="form-check-label" for="exampleCheck1">Tidak Mau
                                                Menetek
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kesadaran10" name="kesadaran10" value="Tidak Ada Riwayat">
                                            <label class="form-check-label" for="exampleCheck1">Tidak Ada
                                                Riwayat
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold">UPAYA NAFAS</td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="upaya1" name="upaya1" value="Gagal Nafas">
                                            <label class="form-check-label" for="exampleCheck1">Gagal
                                                Nafas</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="upaya2" name="upaya2" value="RR < normal ± 2 SD">
                                            <label class="form-check-label" for="exampleCheck1">RR < normal ± 2 SD</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="upaya3" name="upaya3" value="RR < normal ± 1 SD">
                                            <label class="form-check-label" for="exampleCheck1">RR < normal ± 1 SD </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="upaya4" name="upaya4" value="Laju Nafas normal sesuai usia">
                                            <label class="form-check-label" for="exampleCheck1">Laju Nafas
                                                normal sesuai usia
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="upaya5" name="upaya5" value="Tidak ada perbuahan perilaku atau tanda vital">
                                            <label class="form-check-label" for="exampleCheck1">Laju Nafas
                                                normal sesuai usia
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>
                                    <td>
                                        <div class="form-group form-check">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="upaya6" name="upaya6" value="RR > normal ± 2 SD">
                                            <label class="form-check-label" for="exampleCheck1">RR > normal ±
                                                2 SD</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="upaya7" name="upaya7" value="RR > normal ± 1 SD">
                                            <label class="form-check-label" for="exampleCheck1">RR > normal ±
                                                1 SD
                                            </label>
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

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="upaya8" name="upaya8" value="Stidor jelas">
                                            <label class="form-check-label" for="exampleCheck1">Stidor
                                                jelas</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="upaya9" name="upaya9" value="Stidor">
                                            <label class="form-check-label" for="exampleCheck1">Stidor
                                            </label>
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

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="upaya10" name="upaya10" value="Distress nafas">
                                            <label class="form-check-label" for="exampleCheck1">Distress
                                                nafas</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="upaya11" name="upaya11" value="Distress nafas ringan">
                                            <label class="form-check-label" for="exampleCheck1">Distress nafas
                                                ringan
                                            </label>
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
                                            <input type="checkbox" class="form-check-input" id="sirkulasi2" name="sirkulasi2" value="RR < normal ± 2 SD">
                                            <label class="form-check-label" for="exampleCheck1">RR < normal ± 2 SD</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="sirkulasi3" name="sirkulasi3" value="RR < normal ± 1 SD">
                                            <label class="form-check-label" for="exampleCheck1">RR < normal ± 1 SD </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="sirkulasi4" name="sirkulasi4" value="Laju Nafas normal sesuai usia">
                                            <label class="form-check-label" for="exampleCheck1">Laju Nafas
                                                normal sesuai usia
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="sirkulasi5" name="sirkulasi5" value="Tidak ada perbuahan perilaku atau tanda vital">
                                            <label class="form-check-label" for="exampleCheck1">Laju Nafas
                                                normal sesuai usia
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="sirkulasi6" name="sirkulasi6" value="Syok">
                                            <label class="form-check-label" for="exampleCheck1">Syok</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="sirkulasi7" name="sirkulasi7" value="RR > normal ± 2 SD">
                                            <label class="form-check-label" for="exampleCheck1">RR > normal ±
                                                2 SD</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="sirkulasi8" name="sirkulasi8" value="RR > normal ± 1 SD">
                                            <label class="form-check-label" for="exampleCheck1">RR > normal ±
                                                1 SD
                                            </label>
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
                                            <input type="checkbox" class="form-check-input" id="sirkulasi9" name="sirkulasi9" value="Sianosis">
                                            <label class="form-check-label" for="exampleCheck1">Sianosis</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="sirkulasi10" name="sirkulasi10" value="Waktu pengisian kapiter > 4 detik">
                                            <label class="form-check-label" for="exampleCheck1">Waktu
                                                pengisian kapiter > 4 detik</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="sirkulasi11" name="sirkulasi11" value="Waktu pengisian kapiter > 2 detik">
                                            <label class="form-check-label" for="exampleCheck1">Waktu
                                                pengisian kapiter > 2 detik
                                            </label>
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

                        <table class=" table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="text-bold">SISTEM RESPIRASI</td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="gejala1" name="gejala1" value="Gangguan Saluran Pernafasan">
                                            <label class="form-check-label" for="exampleCheck1">Gangguan
                                                Saluran Pernafasan</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="gejala2" name="gejala2" value="Stridor jelas">
                                            <label class="form-check-label" for="exampleCheck1">Stridor
                                                jelas</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="gejala3" name="gejala3" value="Stridor">
                                            <label class="form-check-label" for="exampleCheck1">Stridor
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="gejala4" name="gejala4" value="Serangan asma ringan">
                                            <label class="form-check-label" for="exampleCheck1">Serangan asma
                                                ringan
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
                                            <input type="checkbox" class="form-check-input" id="gejala5" name="gejala5" value="Gagal nafas">
                                            <label class="form-check-label" for="exampleCheck1">Gagal
                                                nafas</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="gejala6" name="gejala6" value="Distress nafas ">
                                            <label class="form-check-label" for="exampleCheck1">Distress nafas
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="gejala7" name="gejala7" value="Distress nafas ringan">
                                            <label class="form-check-label" for="exampleCheck1">Distress nafas
                                                ringan
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="gejala8" name="gejala8" value="Kemungkinan Aspirasi benda asing tanpa distress nafas">
                                            <label class="form-check-label" for="exampleCheck1">Kemungkinan
                                                Aspirasi benda asing tanpa distress nafas
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
                                            <input type="checkbox" class="form-check-input" id="gejala8" name="gejala8" value="T thorax disertai distress nafas">
                                            <label class="form-check-label" for="exampleCheck1">T thorax
                                                disertai distress nafas</label>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="gejala9" name="gejala9" value="Asma Berat">
                                            <label class="form-check-label" for="exampleCheck1">Asma
                                                Berat</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="gejala10" name="gejala10" value="Serangan asma sedang">
                                            <label class="form-check-label" for="exampleCheck1">Serangan asma
                                                sedang
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="gejala11" name="gejala11" value="Trauma thorax minor tanpa distress nafas">
                                            <label class="form-check-label" for="exampleCheck1">Trauma thorax
                                                minor tanpa distress nafas
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

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="gejala12" name="gejala12" value="Aspirasi benda asing dengan distress nafas">
                                            <label class="form-check-label" for="exampleCheck1">Aspirasi benda
                                                asing dengan distress nafas</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="gejala13" name="gejala13" value="Aspirasi benda asing">
                                            <label class="form-check-label" for="exampleCheck1">Aspirasi benda
                                                asing
                                            </label>
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

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="gejala14" name="gejala14" value="Trauma inhealed/keracunan">
                                            <label class="form-check-label" for="exampleCheck1">Trauma
                                                inhealed/keracunan</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="gejala15" name="gejala15" value="Batuk berulang dengan distress nafas">
                                            <label class="form-check-label" for="exampleCheck1">Batuk berulang
                                                dengan distress nafas
                                            </label>
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
                                    <td class="text-bold">SISTEM KARDIOVASKULAR </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kardio1" name="kardio1" value="Hipotensi">
                                            <label class="form-check-label" for="exampleCheck1">Hipotensi</label>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kardio2" name="kardio2" value="Takikardia ++">
                                            <label class="form-check-label" for="exampleCheck1">Takikardia
                                                ++</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kardio3" name="kardio3" value="Takikardia">
                                            <label class="form-check-label" for="exampleCheck1">Takikardia
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kardio4" name="kardio4" value="Nyeri dada">
                                            <label class="form-check-label" for="exampleCheck1">Nyeri dada
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kardio5" name="kardio5" value="Tidak ada dehidrasi">
                                            <label class="form-check-label" for="exampleCheck1">Tidak ada
                                                dehidrasi
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"> </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kardio6" name="kardio6" value="Pendarahan yang memerlukan kontrol bedah">
                                            <label class="form-check-label" for="exampleCheck1">Pendarahan
                                                yang memerlukan kontrol bedah</label>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kardio7" name="kardio7" value="Bradikardia">
                                            <label class="form-check-label" for="exampleCheck1">Bradikardia</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kardio8" name="kardio8" value="Dehidrasi">
                                            <label class="form-check-label" for="exampleCheck1">Dehidrasi
                                            </label>
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
                                    <td class="text-bold"> </td>
                                    <td>
                                        <div class="form-group form-check">

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kardio9" name="kardio9" value="Dehidrasi berat">
                                            <label class="form-check-label" for="exampleCheck1">Dehidrasi
                                                berat</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kardio10" name="kardio10" value="Pendarahan ringan tidak kontrol">
                                            <label class="form-check-label" for="exampleCheck1">Pendarahan
                                                ringan tidak kontrol
                                            </label>
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
                                    <td class="text-bold"> </td>
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
                                            <input type="checkbox" class="form-check-input" id="kardio11" name="kardio11" value="Pendarahan masif tidak terkontrol">
                                            <label class="form-check-label" for="exampleCheck1">Pendarahan
                                                masif tidak terkontrol
                                            </label>
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
                                    <td class="text-bold">SISTEM PERNAFASAN </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan1" name="pernafasan1" value="Trauma Kepala berat">
                                            <label class="form-check-label" for="exampleCheck1">Trauma Kepala
                                                berat</label>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan2" name="pernafasan2" value="Trauma kepala sedang">
                                            <label class="form-check-label" for="exampleCheck1">Trauma kepala
                                                sedang</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan3" name="pernafasan3" value="Trauma kepala ringan">
                                            <label class="form-check-label" for="exampleCheck1">Trauma kepala
                                                ringan
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan4" name="pernafasan4" value="Trauma kepala ringan tanpa muntah dan penurunan kesadaran">
                                            <label class="form-check-label" for="exampleCheck1">Trauma kepala
                                                ringan tanpa muntah dan penurunan kesadaran
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"> </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan5" name="pernafasan5" value="GCS < 10">
                                            <label class="form-check-label" for="exampleCheck1">GCS < 10</label>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan6" name="pernafasan6" value="GCS < 13">
                                            <label class="form-check-label" for="exampleCheck1">GCS < 13</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan7" name="pernafasan7" value="GCS < 15 Riwayat penurunan kesadaran">
                                            <label class="form-check-label" for="exampleCheck1">GCS < 15 Riwayat penurunan kesadaran </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan8" name="pernafasan8" value="Sakit kepala kronis">
                                            <label class="form-check-label" for="exampleCheck1">Sakit kepala
                                                kronis
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"> </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan9" name="pernafasan9" value="Kejang berulang">
                                            <label class="form-check-label" for="exampleCheck1">Kejang
                                                berulang</label>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan10" name="pernafasan10" value="Penurunan Kesadaran">
                                            <label class="form-check-label" for="exampleCheck1">Penurunan
                                                Kesadaran</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan11" name="pernafasan11" value="Sakit kepala kronis">
                                            <label class="form-check-label" for="exampleCheck1">Sakit kepala
                                                kronis
                                            </label>
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
                                    <td class="text-bold"> </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan12" name="pernafasan12" value="Kejang berulang">
                                            <label class="form-check-label" for="exampleCheck1">Kejang
                                                berulang</label>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan13" name="pernafasan13" value="Penurunan Kesadaran">
                                            <label class="form-check-label" for="exampleCheck1">Penurunan
                                                Kesadaran</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan14" name="pernafasan14" value="Sakit kepala kronis">
                                            <label class="form-check-label" for="exampleCheck1">Sakit kepala
                                                kronis
                                            </label>
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
                                    <td class="text-bold"> </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan15" name="pernafasan15" value="Tidak sadar">
                                            <label class="form-check-label" for="exampleCheck1">Tidak
                                                sadar</label>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan16" name="pernafasan16" value="Sakit kepala berat mendadak">
                                            <label class="form-check-label" for="exampleCheck1">Sakit kepala
                                                berat mendadak</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan17" name="pernafasan17" value="Kemungkinan disfungsi shunt">
                                            <label class="form-check-label" for="exampleCheck1">Kemungkinan
                                                disfungsi shunt
                                            </label>
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
                                    <td class="text-bold"> </td>
                                    <td>
                                        <div class="form-group form-check">

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan18" name="pernafasan18" value="Disfungsi shunt">
                                            <label class="form-check-label" for="exampleCheck1">Disfungsi
                                                shunt</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="pernafasan19" name="pernafasan19" value="Kejang">
                                            <label class="form-check-label" for="exampleCheck1">Kejang
                                            </label>
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
                                    <td class="text-bold">CHILD ABUSE</td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="abuse1" name="abuse1" value="Daerah Konfilik">
                                            <label class="form-check-label" for="exampleCheck1">Daerah
                                                Konfilik</label>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="abuse2" name="abuse2" value="memiliki risiko child abuse">
                                            <label class="form-check-label" for="exampleCheck1">memiliki
                                                risiko child abuse</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="abuse3" name="abuse3" value="Mengalami kekerasan fisik atau kekerasan seksual < 48 jam">
                                            <label class="form-check-label" for="exampleCheck1">Mengalami
                                                kekerasan fisik atau kekerasan seksual < 48 jam </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="abuse4" name="abuse4" value="Riwayat adanya kekerasan dalam keluarga">
                                            <label class="form-check-label" for="exampleCheck1">Riwayat
                                                adanya kekerasan dalam keluarga
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold">Lain-lain</td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="lain1" name="lain1" value="Anafileksis">
                                            <label class="form-check-label" for="exampleCheck1">Anafileksis</label>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="lain2" name="lain2" value="Tampak Letargis">
                                            <label class="form-check-label" for="exampleCheck1">Tampak
                                                Letargis</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="lain3" name="lain3" value="Unconsolable Infant">
                                            <label class="form-check-label" for="exampleCheck1">Unconsolable
                                                Infant
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="lain4" name="lain4" value="Bayi Rewel">
                                            <label class="form-check-label" for="exampleCheck1">Bayi Rewel
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
                                            <input type="checkbox" class="form-check-input" id="lain5" name="lain5" value="DM dengan penurunan kesadaran">
                                            <label class="form-check-label" for="exampleCheck1">DM dengan
                                                penurunan kesadaran</label>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="lain6" name="lain6" value="Bayi < 7 hari">
                                            <label class="form-check-label" for="exampleCheck1">Bayi < 7 hari</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="lain7" name="lain7" value="Bayi 3 - 36bulan dengan suhu > 38.5°C">
                                            <label class="form-check-label" for="exampleCheck1">Bayi 3 -
                                                36bulan dengan suhu > 38.5°C
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="lain8" name="lain8" value="Bayi > 36bulan dengan suhu > 38°C dan tidak tampak toksik">
                                            <label class="form-check-label" for="exampleCheck1">Bayi >
                                                36bulan dengan suhu > 38°C dan tidak tampak toksik
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

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="lain9" name="lain9" value="Bayi 3 - 36bulan dengan suhu > 38°C dan tampak toksik">
                                            <label class="form-check-label" for="exampleCheck1">Bayi 3 -
                                                36bulan dengan suhu > 38°C dan tampak toksik</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="lain10" name="lain10" value="Reaksi Alergi sedang">
                                            <label class="form-check-label" for="exampleCheck1">Reaksi
                                                Alergi sedang
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="lain11" name="lain11" value="Reaksi Alergi lokal">
                                            <label class="form-check-label" for="exampleCheck1">Reaksi
                                                Alergi lokal
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

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="lain12" name="lain12" value="Gangguan pendarahan">
                                            <label class="form-check-label" for="exampleCheck1">Gangguan
                                                pendarahan</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="lain13" name="lain13" value="Kesulitan makan pada bayi">
                                            <label class="form-check-label" for="exampleCheck1">Kesulitan
                                                makan pada bayi
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="lain14" name="lain14" value="Perilaku atipical">
                                            <label class="form-check-label" for="exampleCheck1">Perilaku
                                                atipical
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

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="lain15" name="lain15" value="KAD">
                                            <label class="form-check-label" for="exampleCheck1">KAD</label>
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

                            </tbody>
                        </table>
                    </div>

                </div>


                @else
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-bold font-italic">Nama pasien</td>
                            <td colspan="3">

                                <textarea class="form-control" id="namapasien" name="namapasien" placeholder="Ketik nama pasien ...">{{$triase[0]->nama_pasien}}</textarea>

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
                                @if ($triase[0]->sumber_data == 'Pasien Sendiri')

                                <div class="form-check form-check-inline">
                                    <input checked class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Pasien Sendiri">
                                    <label class="form-check-label" for="inlineRadio1">Pasien Sendiri /
                                        Autoanamase</label>
                                </div>
                                @else
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Pasien Sendiri">
                                    <label class="form-check-label" for="inlineRadio1">Pasien Sendiri /
                                        Autoanamase</label>
                                </div>
                                @endif
                                @if ($triase[0]->sumber_data == 'Keluarga')
                                <div class="form-check form-check-inline">
                                    <input checked class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Keluarga">
                                    <label class="form-check-label" for="inlineRadio2">Keluarga / Alloanamnesa</label>
                                </div>
                                @else
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Keluarga">
                                    <label class="form-check-label" for="inlineRadio2">Keluarga / Alloanamnesa</label>
                                </div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Klasifikasi pasien</td>
                            <td colspan="3">
                                @if ($triase[0]->klasifikasi_pasien == 'IGD')
                                <div class="form-check form-check-inline">
                                    <input checked class="form-check-input" type="radio" name="klasifikasipasien" id="klasifikasipasien" value="IGD">
                                    <label class="form-check-label" for="inlineRadio1">IGD</label>
                                </div>
                                @else
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klasifikasipasien" id="klasifikasipasien" value="IGD">
                                    <label class="form-check-label" for="inlineRadio1">IGD</label>
                                </div>
                                @endif
                                @if ($triase[0]->klasifikasi_pasien == 'IGK')
                                <div class="form-check form-check-inline">
                                    <input checked class="form-check-input" type="radio" name="klasifikasipasien" id="klasifikasipasien" value="IGK">
                                    <label class="form-check-label" for="inlineRadio2">IGD KEBIDANAN</label>
                                </div>
                                @else
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klasifikasipasien" id="klasifikasipasien" value="IGK">
                                    <label class="form-check-label" for="inlineRadio2">IGD KEBIDANAN</label>
                                </div>
                                @endif
                                @if ($triase[0]->klasifikasi_pasien == 'PULANG')

                                <div class="form-check form-check-inline">
                                    <input checked class="form-check-input" type="radio" name="klasifikasipasien" id="klasifikasipasien" value="PULANG">
                                    <label class="form-check-label" for="inlineRadio2">Pulang</label>
                                </div>
                                @else
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klasifikasipasien" id="klasifikasipasien" value="PULANG">
                                    <label class="form-check-label" for="inlineRadio2">Pulang</label>
                                </div>
                                @endif
                            </td>
                        </tr>

                    </tbody>
                </table>
                <div class="accordion " id="accordionExample">

                    <div class="card-header bg-secondary" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Triase (ATS : Australian Triage Scale)
                                DEWASA
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">




                        <table class=" table" border="1">
                            <tbody>
                                <tr>
                                    <td class="text-bold ">KATEGORI TRIASE </td>
                                            @if ($triase[0]->kategori_triase == 'Medikal')
                                    <td>
                                        <div class="form-group form-check">
                                            <input checked type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Medikal">
                                            <label class="form-check-label" for="exampleCheck1">Medikal</label>
                                        </div>
                                    </td>
                                    @else
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Medikal">
                                            <label class="form-check-label" for="exampleCheck1">Medikal</label>
                                        </div>
                                    </td>
                                    @endif
                                    @if ($triase[0]->kategori_triase == 'Bedah')
                                    <td>
                                        <div class="form-group form-check">
                                            <input checked type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Bedah">
                                            <label class="form-check-label" for="exampleCheck1">Bedah
                                                Paru</label>
                                        </div>
                                    </td>
                                    @else
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Bedah">
                                            <label class="form-check-label" for="exampleCheck1">Bedah
                                                Paru</label>
                                        </div>
                                    </td>
                                    @endif
                                    @if ($triase[0]->kategori_triase == 'Obgyn')
                                    <td>
                                        <div class="form-group form-check">
                                            <input checked type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Obgyn">
                                            <label class="form-check-label" for="exampleCheck1">Obgyn
                                            </label>
                                        </div>
                                    </td>
                                    @else
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Obgyn">
                                            <label class="form-check-label" for="exampleCheck1">Obgyn
                                            </label>
                                        </div>
                                    </td>
                                    @endif
                                    @if ($triase[0]->kategori_triase == 'Anak')
                                    <td>
                                        <div class="form-group form-check">
                                            <input checked type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Anak">
                                            <label class="form-check-label" for="exampleCheck1">Anak
                                            </label>
                                        </div>
                                    </td>
                                    @else
                                    <td>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Anak">
                                            <label class="form-check-label" for="exampleCheck1">Anak
                                            </label>
                                        </div>
                                    </td>
                                    @endif

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold">PEMERIKSAAN</td>
                                            <div class="col-md-2 bg-danger">
                                                @if ($triase[0]->pemeriksaan_triase == 'ATS1 Resusitasi')

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
                                            </div>
                                            <div class="col-md-2" style="background-color: chocolate;">
                                                @if ($triase[0]->pemeriksaan_triase == 'ATS2 Emergency')

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
                                            </div>
                                            <div class="col-md-2 bg-warning">
                                                @if ($triase[0]->pemeriksaan_triase == 'ATS3 Urgent')

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
                                            </div>
                                            <div class="col-md-2 bg-success">
                                                @if ($triase[0]->pemeriksaan_triase == 'ATS4 Non Urgent')

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
                                            </div>
                                            <div class="col-md-2 bg-primary">
                                                @if ($triase[0]->pemeriksaan_triase == 'ATS5 False Emergency')

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
                                            @if ($triase[0]->kesadaran1 == 'Tidak ada')
                                            <input type="checkbox" class="form-check-input" id="kesadaran1" name="kesadaran1" value="Tidak ada" checked>
                                            <label class="form-check-label" for="exampleCheck1">Tidak ada</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kesadaran1" name="kesadaran1" value="Tidak ada">
                                            <label class="form-check-label" for="exampleCheck1">Tidak ada</label>
                                            @endif
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->kesadaran2 == 'Penurunan Kesadaran')
                                            <input type="checkbox" class="form-check-input" id="kesadaran2" name="kesadaran2" value="Penurunan Kesadaran" checked>
                                            <label class="form-check-label" for="exampleCheck1">Penurunan
                                                Kesadaran</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kesadaran2" name="kesadaran2" value="Penurunan Kesadaran">
                                            <label class="form-check-label" for="exampleCheck1">Penurunan
                                                Kesadaran</label>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->kesadaran3 == 'Unconsable')

                                            <input type="checkbox" class="form-check-input" id="kesadaran3" name="kesadaran3" value="Unconsable" checked>
                                            <label class="form-check-label" for="exampleCheck1">Unconsable
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kesadaran3" name="kesadaran3" value="Unconsable">
                                            <label class="form-check-label" for="exampleCheck1">Unconsable
                                            </label>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->kesadaran4 == 'Unconsable')

                                            <input type="checkbox" class="form-check-input" id="kesadaran4" name="kesadaran4" value="Consolable" checked>
                                            <label class="form-check-label" for="exampleCheck1">Consolable
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kesadaran4" name="kesadaran4" value="Consolable">
                                            <label class="form-check-label" for="exampleCheck1">Consolable
                                            </label>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->kesadaran5 == 'Tidak ada perbuahan perilaku atau tanda vital')

                                            <input type="checkbox" class="form-check-input" id="kesadaran5" name="kesadaran5" value="Tidak ada perbuahan perilaku atau tanda vital" endif>
                                            <label class="form-check-label" for="exampleCheck1">Tidak ada
                                                perbuahan perilaku atau tanda vital
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kesadaran5" name="kesadaran5" value="Tidak ada perbuahan perilaku atau tanda vital">
                                            <label class="form-check-label" for="exampleCheck1">Tidak ada
                                                perbuahan perilaku atau tanda vital
                                            </label>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>
                                    <td>
                                        <div class="form-group form-check">

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->kesadaran6 == 'Letargis')

                                            <input type="checkbox" class="form-check-input" id="kesadaran6" name="kesadaran6" value="Letargis" checked>
                                            <label class="form-check-label" for="exampleCheck1">Letargis</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kesadaran6" name="kesadaran6" value="Letargis">
                                            <label class="form-check-label" for="exampleCheck1">Letargis</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->kesadaran7 == 'Atypical Behaviour')
                                            <input type="checkbox" class="form-check-input" id="kesadaran7" name="kesadaran7" value="Atypical Behaviour" checked>
                                            <label class="form-check-label" for="exampleCheck1">Atypical
                                                Behaviour
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kesadaran7" name="kesadaran7" value="Atypical Behaviour">
                                            <label class="form-check-label" for="exampleCheck1">Atypical
                                                Behaviour
                                            </label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->kesadaran8 == 'Atypical Behaviour')
                                            <input type="checkbox" class="form-check-input" id="kesadaran8" name="kesadaran8" value="Atypical Behaviour" checked>
                                            <label class="form-check-label" for="exampleCheck1">Atypical
                                                Behaviour
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kesadaran8" name="kesadaran8" value="Atypical Behaviour">
                                            <label class="form-check-label" for="exampleCheck1">Atypical
                                                Behaviour
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

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->kesadaran9 == 'Tidak Mau Menetek')
                                            <input type="checkbox" class="form-check-input" id="kesadaran9" name="kesadaran9" value="Tidak Mau Menetek" checked>
                                            <label class="form-check-label" for="exampleCheck1">Tidak Mau
                                                Menetek
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kesadaran9" name="kesadaran9" value="Tidak Mau Menetek">
                                            <label class="form-check-label" for="exampleCheck1">Tidak Mau
                                                Menetek
                                            </label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>

                                        <div class="form-group form-check">
                                            @if ($triase[0]->kesadaran10 == 'Tidak Ada Riwayat')
                                            <input type="checkbox" class="form-check-input" id="kesadaran10" name="kesadaran10" value="Tidak Ada Riwayat" checked>
                                            <label class="form-check-label" for="exampleCheck1">Tidak Ada
                                                Riwayat
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kesadaran10" name="kesadaran10" value="Tidak Ada Riwayat">
                                            <label class="form-check-label" for="exampleCheck1">Tidak Ada
                                                Riwayat
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
                                    <td class="text-bold">UPAYA NAFAS</td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->upaya1 == 'Gagal Nafas')
                                            <input type="checkbox" class="form-check-input" id="upaya1" name="upaya1" value="Gagal Nafas" checked>
                                            <label class="form-check-label" for="exampleCheck1">Gagal
                                                Nafas</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="upaya1" name="upaya1" value="Gagal Nafas">
                                            <label class="form-check-label" for="exampleCheck1">Gagal
                                                Nafas</label>
                                            @endif

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->upaya2 == 'RR < normal ± 2 SD') <input type="checkbox" class="form-check-input" id="upaya2" name="upaya2" value="RR < normal ± 2 SD" checked>
                                                <label class="form-check-label" for="exampleCheck1">RR < normal ± 2 SD</label>
                                                        @else
                                                        <input type="checkbox" class="form-check-input" id="upaya2" name="upaya2" value="RR < normal ± 2 SD">
                                                        <label class="form-check-label" for="exampleCheck1">RR < normal ± 2 SD</label>
                                                                @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->upaya3 == 'RR < normal ± 1 SD') <input type="checkbox" class="form-check-input" id="upaya3" name="upaya3" value="RR < normal ± 1 SD" checked>
                                                <label class="form-check-label" for="exampleCheck1">RR < normal ± 1 SD </label>
                                                        @else
                                                        <input type="checkbox" class="form-check-input" id="upaya3" name="upaya3" value="RR < normal ± 1 SD">
                                                        <label class="form-check-label" for="exampleCheck1">RR < normal ± 1 SD </label>
                                                                @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->upaya4 == 'Laju Nafas normal sesuai usia')
                                            <input type="checkbox" class="form-check-input" id="upaya4" name="upaya4" value="Laju Nafas normal sesuai usia" checked>
                                            <label class="form-check-label" for="exampleCheck1">Laju Nafas
                                                normal sesuai usia
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="upaya4" name="upaya4" value="Laju Nafas normal sesuai usia">
                                            <label class="form-check-label" for="exampleCheck1">Laju Nafas
                                                normal sesuai usia
                                            </label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->upaya5 == 'Tidak ada perbuahan perilaku atau tanda vital')
                                            <input type="checkbox" class="form-check-input" id="upaya5" name="upaya5" value="Tidak ada perbuahan perilaku atau tanda vital" checked>
                                            <label class="form-check-label" for="exampleCheck1">Laju Nafas
                                                normal sesuai usia
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="upaya5" name="upaya5" value="Tidak ada perbuahan perilaku atau tanda vital">
                                            <label class="form-check-label" for="exampleCheck1">Laju Nafas
                                                normal sesuai usia
                                            </label>
                                            @endif

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>
                                    <td>
                                        <div class="form-group form-check">

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->upaya6 == 'RR > normal ± 2 SD')
                                            <input type="checkbox" class="form-check-input" id="upaya6" name="upaya6" value="RR > normal ± 2 SD" checked>
                                            <label class="form-check-label" for="exampleCheck1">RR > normal ±
                                                2 SD</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="upaya6" name="upaya6" value="RR > normal ± 2 SD">
                                            <label class="form-check-label" for="exampleCheck1">RR > normal ±
                                                2 SD</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->upaya7 == 'RR > normal ± 1 SD')
                                            <input type="checkbox" class="form-check-input" id="upaya7" name="upaya7" value="RR > normal ± 1 SD" checked>
                                            <label class="form-check-label" for="exampleCheck1">RR > normal ±
                                                1 SD
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="upaya7" name="upaya7" value="RR > normal ± 1 SD">
                                            <label class="form-check-label" for="exampleCheck1">RR > normal ±
                                                1 SD
                                            </label>
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
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>
                                    <td>
                                        <div class="form-group form-check">

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->upaya8 == 'Stidor jelas')
                                            <input type="checkbox" class="form-check-input" id="upaya8" name="upaya8" value="Stidor jelas" checked>
                                            <label class="form-check-label" for="exampleCheck1">Stidor
                                                jelas</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="upaya8" name="upaya8" value="Stidor jelas">
                                            <label class="form-check-label" for="exampleCheck1">Stidor
                                                jelas</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->upaya9 == 'Stidor')
                                            <input type="checkbox" class="form-check-input" id="upaya9" name="upaya9" value="Stidor" checked>
                                            <label class="form-check-label" for="exampleCheck1">Stidor
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="upaya9" name="upaya9" value="Stidor">
                                            <label class="form-check-label" for="exampleCheck1">Stidor
                                            </label>
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
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>
                                    <td>
                                        <div class="form-group form-check">

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->upaya10 == 'Distress nafas')
                                            <input type="checkbox" class="form-check-input" id="upaya10" name="upaya10" value="Distress nafas" checked>
                                            <label class="form-check-label" for="exampleCheck1">Distress
                                                nafas</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="upaya10" name="upaya10" value="Distress nafas">
                                            <label class="form-check-label" for="exampleCheck1">Distress
                                                nafas</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->upaya11 == 'Distress nafas ringan')
                                            <input type="checkbox" class="form-check-input" id="upaya11" name="upaya11" value="Distress nafas ringan" checked>
                                            <label class="form-check-label" for="exampleCheck1">Distress nafas
                                                ringan
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="upaya11" name="upaya11" value="Distress nafas ringan">
                                            <label class="form-check-label" for="exampleCheck1">Distress nafas
                                                ringan
                                            </label>
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
                                            @if ($triase[0]->sirkulasi2 == 'RR < normal ± 2 SD') <input type="checkbox" class="form-check-input" id="sirkulasi2" name="sirkulasi2" value="RR < normal ± 2 SD" checked>
                                                <label class="form-check-label" for="exampleCheck1">RR < normal ± 2 SD</label>
                                                        @else
                                                        <input type="checkbox" class="form-check-input" id="sirkulasi2" name="sirkulasi2" value="RR < normal ± 2 SD">
                                                        <label class="form-check-label" for="exampleCheck1">RR < normal ± 2 SD</label>
                                                                @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->sirkulasi3 == 'RR < normal ± 1 SD') <input type="checkbox" class="form-check-input" id="sirkulasi3" name="sirkulasi3" value="RR < normal ± 1 SD" checked>
                                                <label class="form-check-label" for="exampleCheck1">RR < normal ± 1 SD </label>
                                                        @else
                                                        <input type="checkbox" class="form-check-input" id="sirkulasi3" name="sirkulasi3" value="RR < normal ± 1 SD">
                                                        <label class="form-check-label" for="exampleCheck1">RR < normal ± 1 SD </label>
                                                                @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->sirkulasi4 == 'Laju Nafas normal sesuai usia')
                                            <input type="checkbox" class="form-check-input" id="sirkulasi4" name="sirkulasi4" value="Laju Nafas normal sesuai usia" checked>
                                            <label class="form-check-label" for="exampleCheck1">Laju Nafas
                                                normal sesuai usia
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="sirkulasi4" name="sirkulasi4" value="Laju Nafas normal sesuai usia">
                                            <label class="form-check-label" for="exampleCheck1">Laju Nafas
                                                normal sesuai usia
                                            </label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->sirkulasi5 == 'Tidak ada perbuahan perilaku atau tanda vital')
                                            <input type="checkbox" class="form-check-input" id="sirkulasi5" name="sirkulasi5" value="Tidak ada perbuahan perilaku atau tanda vital" checked>
                                            <label class="form-check-label" for="exampleCheck1">Laju Nafas
                                                normal sesuai usia
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="sirkulasi5" name="sirkulasi5" value="Tidak ada perbuahan perilaku atau tanda vital">
                                            <label class="form-check-label" for="exampleCheck1">Laju Nafas
                                                normal sesuai usia
                                            </label>
                                            @endif

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->sirkulasi6 == 'Syok')
                                            <input type="checkbox" class="form-check-input" id="sirkulasi6" name="sirkulasi6" value="Syok" checked>
                                            <label class="form-check-label" for="exampleCheck1">Syok</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="sirkulasi6" name="sirkulasi6" value="Syok">
                                            <label class="form-check-label" for="exampleCheck1">Syok</label>
                                            @endif

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->sirkulasi7 == 'RR > normal ± 2 SD')
                                            <input type="checkbox" class="form-check-input" id="sirkulasi7" name="sirkulasi7" value="RR > normal ± 2 SD" checked>
                                            <label class="form-check-label" for="exampleCheck1">RR > normal ±
                                                2 SD</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="sirkulasi7" name="sirkulasi7" value="RR > normal ± 2 SD">
                                            <label class="form-check-label" for="exampleCheck1">RR > normal ±
                                                2 SD</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->sirkulasi8 == 'RR > normal ± 1 SD')
                                            <input type="checkbox" class="form-check-input" id="sirkulasi8" name="sirkulasi8" value="RR > normal ± 1 SD" checked>
                                            <label class="form-check-label" for="exampleCheck1">RR > normal ±
                                                1 SD
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="sirkulasi8" name="sirkulasi8" value="RR > normal ± 1 SD">
                                            <label class="form-check-label" for="exampleCheck1">RR > normal ±
                                                1 SD
                                            </label>
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
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->sirkulasi9 == 'Sianosis')
                                            <input type="checkbox" class="form-check-input" id="sirkulasi9" name="sirkulasi9" value="Sianosis" checked>
                                            <label class="form-check-label" for="exampleCheck1">Sianosis</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="sirkulasi9" name="sirkulasi9" value="Sianosis">
                                            <label class="form-check-label" for="exampleCheck1">Sianosis</label>
                                            @endif

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->sirkulasi10 == 'Waktu pengisian kapiter > 4 detik')
                                            <input type="checkbox" class="form-check-input" id="sirkulasi10" name="sirkulasi10" value="Waktu pengisian kapiter > 4 detik" checked>
                                            <label class="form-check-label" for="exampleCheck1">Waktu
                                                pengisian kapiter > 4 detik</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="sirkulasi10" name="sirkulasi10" value="Waktu pengisian kapiter > 4 detik">
                                            <label class="form-check-label" for="exampleCheck1">Waktu
                                                pengisian kapiter > 4 detik</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->sirkulasi11 == 'Waktu pengisian kapiter > 2 detik')
                                            <input type="checkbox" class="form-check-input" id="sirkulasi11" name="sirkulasi11" value="Waktu pengisian kapiter > 2 detik" checked>
                                            <label class="form-check-label" for="exampleCheck1">Waktu
                                                pengisian kapiter > 2 detik
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="sirkulasi11" name="sirkulasi11" value="Waktu pengisian kapiter > 2 detik">
                                            <label class="form-check-label" for="exampleCheck1">Waktu
                                                pengisian kapiter > 2 detik
                                            </label>
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
                                        <div class="form-group form-check">
                                            @if ($triase[0]->gejala_respirasi1 == 'Gangguan Saluran Pernafasan')
                                            <input type="checkbox" class="form-check-input" id="gejala1" name="gejala1" value="Gangguan Saluran Pernafasan" checked>
                                            <label class="form-check-label" for="exampleCheck1">Gangguan
                                                Saluran Pernafasan</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="gejala1" name="gejala1" value="Gangguan Saluran Pernafasan">
                                            <label class="form-check-label" for="exampleCheck1">Gangguan
                                                Saluran Pernafasan</label>
                                            @endif

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->gejala_respirasi2 == 'Stridor jelas')
                                            <input type="checkbox" class="form-check-input" id="gejala2" name="gejala2" value="Stridor jelas" checked>
                                            <label class="form-check-label" for="exampleCheck1">Stridor
                                                jelas</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="gejala2" name="gejala2" value="Stridor jelas">
                                            <label class="form-check-label" for="exampleCheck1">Stridor
                                                jelas</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->gejala_respirasi3 == 'Stridor')
                                            <input type="checkbox" class="form-check-input" id="gejala3" name="gejala3" value="" checked>
                                            <label class="form-check-label" for="exampleCheck1">Stridor
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="gejala3" name="gejala3" value="Stridor">
                                            <label class="form-check-label" for="exampleCheck1">Stridor
                                            </label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->gejala_respirasi4 == 'Serangan asma ringan')
                                            <input type="checkbox" class="form-check-input" id="gejala4" name="gejala4" value="Serangan asma ringan" checked>
                                            <label class="form-check-label" for="exampleCheck1">Serangan asma
                                                ringan
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="gejala4" name="gejala4" value="Serangan asma ringan">
                                            <label class="form-check-label" for="exampleCheck1">Serangan asma
                                                ringan
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
                                            @if ($triase[0]->gejala_respirasi5 == 'Gagal nafas')
                                            <input type="checkbox" class="form-check-input" id="gejala5" name="gejala5" value="Gagal nafas" checked>
                                            <label class="form-check-label" for="exampleCheck1">Gagal
                                                nafas</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="gejala5" name="gejala5" value="Gagal nafas">
                                            <label class="form-check-label" for="exampleCheck1">Gagal
                                                nafas</label>
                                            @endif

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->gejala_respirasi6 == 'Distress nafas ')
                                            <input type="checkbox" class="form-check-input" id="gejala6" name="gejala6" value="Distress nafas " checked>
                                            <label class="form-check-label" for="exampleCheck1">Distress nafas
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="gejala6" name="gejala6" value="Distress nafas ">
                                            <label class="form-check-label" for="exampleCheck1">Distress nafas
                                            </label>
                                            @endif


                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->gejala_respirasi7 == 'Distress nafas ringan')
                                            <input type="checkbox" class="form-check-input" id="gejala7" name="gejala7" value="Distress nafas ringan" checked>
                                            <label class="form-check-label" for="exampleCheck1">Distress nafas
                                                ringan
                                            </label>>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="gejala7" name="gejala7" value="Distress nafas ringan">
                                            <label class="form-check-label" for="exampleCheck1">Distress nafas
                                                ringan
                                            </label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->gejala_respirasi8 == 'Kemungkinan Aspirasi benda asing tanpa distress nafas')
                                            <input type="checkbox" class="form-check-input" id="gejala8" name="gejala8" value="Kemungkinan Aspirasi benda asing tanpa distress nafas" checked>
                                            <label class="form-check-label" for="exampleCheck1">Kemungkinan
                                                Aspirasi benda asing tanpa distress nafas
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="gejala8" name="gejala8" value="Kemungkinan Aspirasi benda asing tanpa distress nafas">
                                            <label class="form-check-label" for="exampleCheck1">Kemungkinan
                                                Aspirasi benda asing tanpa distress nafas
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
                                            @if ($triase[0]->gejala_respirasi9 == 'T thorax disertai distress nafas')
                                            <input type="checkbox" class="form-check-input" id="gejala9" name="gejala9" value="T thorax disertai distress nafas">
                                            <label class="form-check-label" for="exampleCheck1">T thorax
                                                disertai distress nafas</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="gejala9" name="gejala9" value="T thorax disertai distress nafas">
                                            <label class="form-check-label" for="exampleCheck1">T thorax
                                                disertai distress nafas</label>
                                            @endif

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->gejala_respirasi10 == 'T thorax disertai distress nafas')
                                            <input type="checkbox" class="form-check-input" id="gejala10" name="gejala10" value="Asma Berat" checked>
                                            <label class="form-check-label" for="exampleCheck1">Asma
                                                Berat</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="gejala10" name="gejala10" value="Asma Berat">
                                            <label class="form-check-label" for="exampleCheck1">Asma
                                                Berat</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->gejala_respirasi11 == 'T thorax disertai distress nafas')
                                            <input type="checkbox" class="form-check-input" id="gejala11" name="gejala11" value="Serangan asma sedang" checked>
                                            <label class="form-check-label" for="exampleCheck1">Serangan asma
                                                sedang
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="gejala11" name="gejala11" value="Serangan asma sedang">
                                            <label class="form-check-label" for="exampleCheck1">Serangan asma
                                                sedang
                                            </label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->gejala_respirasi12 == 'Trauma thorax minor tanpa distress nafas')
                                            <input type="checkbox" class="form-check-input" id="gejala12" name="gejala12" value="Trauma thorax minor tanpa distress nafas" checked>
                                            <label class="form-check-label" for="exampleCheck1">Trauma thorax
                                                minor tanpa distress nafas
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="gejala12" name="gejala12" value="Trauma thorax minor tanpa distress nafas">
                                            <label class="form-check-label" for="exampleCheck1">Trauma thorax
                                                minor tanpa distress nafas
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

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->gejala_respirasi13 == 'Aspirasi benda asing dengan distress nafas')
                                            <input type="checkbox" class="form-check-input" id="gejala13" name="gejala13" value="Aspirasi benda asing dengan distress nafas" checked>
                                            <label class="form-check-label" for="exampleCheck1">Aspirasi benda
                                                asing dengan distress nafas</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="gejala13" name="gejala13" value="Aspirasi benda asing dengan distress nafas">
                                            <label class="form-check-label" for="exampleCheck1">Aspirasi benda
                                                asing dengan distress nafas</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->gejala_respirasi14 == 'Aspirasi benda asing')
                                            <input type="checkbox" class="form-check-input" id="gejala14" name="gejala14" value="Aspirasi benda asing" checked>
                                            <label class="form-check-label" for="exampleCheck1">Aspirasi benda
                                                asing
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="gejala14" name="gejala14" value="Aspirasi benda asing">
                                            <label class="form-check-label" for="exampleCheck1">Aspirasi benda
                                                asing
                                            </label>
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
                                </tr>
                                <tr>
                                    <td class="text-bold"></td>
                                    <td>
                                        <div class="form-group form-check">

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->gejala_respirasi15 == 'Trauma inhealed/keracunan')
                                            <input type="checkbox" class="form-check-input" id="gejala15" name="gejala15" value="Trauma inhealed/keracunan" checked>
                                            <label class="form-check-label" for="exampleCheck1">Trauma
                                                inhealed/keracunan</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="gejala15" name="gejala15" value="Trauma inhealed/keracunan">
                                            <label class="form-check-label" for="exampleCheck1">Trauma
                                                inhealed/keracunan</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->gejala_respirasi15 == 'Batuk berulang dengan distress nafas')
                                            <input type="checkbox" class="form-check-input" id="gejala15" name="gejala15" value="Batuk berulang dengan distress nafas" checked>
                                            <label class="form-check-label" for="exampleCheck1">Batuk berulang
                                                dengan distress nafas
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="gejala15" name="gejala15" value="Batuk berulang dengan distress nafas">
                                            <label class="form-check-label" for="exampleCheck1">Batuk berulang
                                                dengan distress nafas
                                            </label>
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
                                </tr>
                                <tr>
                                    <td class="text-bold">SISTEM KARDIOVASKULAR </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->kardio1 == 'Hipotensi')
                                            <input type="checkbox" class="form-check-input" id="kardio1" name="kardio1" value="Hipotensi" checked>
                                            <label class="form-check-label" for="exampleCheck1">Hipotensi</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kardio1" name="kardio1" value="Hipotensi">
                                            <label class="form-check-label" for="exampleCheck1">Hipotensi</label>
                                            @endif

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->kardio2 == 'Takikardia ++')
                                            <input type="checkbox" class="form-check-input" id="kardio2" name="kardio2" value="Takikardia ++" checked>
                                            <label class="form-check-label" for="exampleCheck1">Takikardia
                                                ++</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kardio2" name="kardio2" value="Takikardia ++">
                                            <label class="form-check-label" for="exampleCheck1">Takikardia
                                                ++</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->kardio3 == 'Takikardia ++')
                                            <input type="checkbox" class="form-check-input" id="kardio3" name="kardio3" value="Takikardia" checked>
                                            <label class="form-check-label" for="exampleCheck1">Takikardia
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kardio3" name="kardio3" value="Takikardia">
                                            <label class="form-check-label" for="exampleCheck1">Takikardia
                                            </label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->kardio4 == 'Nyeri dada')
                                            <input type="checkbox" class="form-check-input" id="kardio4" name="kardio4" value="Nyeri dada" checked>
                                            <label class="form-check-label" for="exampleCheck1">Nyeri dada
                                            </label>="form-check-label" for="exampleCheck1">Takikardia
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kardio4" name="kardio4" value="Nyeri dada">
                                            <label class="form-check-label" for="exampleCheck1">Nyeri dada
                                            </label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->kardio5 == 'Tidak ada dehidrasi')
                                            <input type="checkbox" class="form-check-input" id="kardio5" name="kardio5" value="Tidak ada dehidrasi" checked>
                                            <label class="form-check-label" for="exampleCheck1">Tidak ada
                                                dehidrasi
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kardio5" name="kardio5" value="Tidak ada dehidrasi">
                                            <label class="form-check-label" for="exampleCheck1">Tidak ada
                                                dehidrasi
                                            </label>
                                            @endif

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold"> </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->kardio6 == 'Pendarahan yang memerlukan kontrol bedah')
                                            <input type="checkbox" class="form-check-input" id="kardio6" name="kardio6" value="Pendarahan yang memerlukan kontrol bedah" checked>
                                            <label class="form-check-label" for="exampleCheck1">Pendarahan
                                                yang memerlukan kontrol bedah</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kardio6" name="kardio6" value="Pendarahan yang memerlukan kontrol bedah">
                                            <label class="form-check-label" for="exampleCheck1">Pendarahan
                                                yang memerlukan kontrol bedah</label>
                                            @endif

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->kardio7 == 'Bradikardia')
                                            <input type="checkbox" class="form-check-input" id="kardio7" name="kardio7" value="Bradikardia" checked>
                                            <label class="form-check-label" for="exampleCheck1">Bradikardia</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kardio7" name="kardio7" value="Bradikardia">
                                            <label class="form-check-label" for="exampleCheck1">Bradikardia</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->kardio8 == 'Dehidrasi')
                                            <input type="checkbox" class="form-check-input" id="kardio8" name="kardio8" value="Dehidrasi" checked>
                                            <label class="form-check-label" for="exampleCheck1">Dehidrasi
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kardio8" name="kardio8" value="Dehidrasi">
                                            <label class="form-check-label" for="exampleCheck1">Dehidrasi
                                            </label>
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
                                </tr>
                                <tr>
                                    <td class="text-bold"> </td>
                                    <td>
                                        <div class="form-group form-check">

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->kardio9 == 'Dehidrasi berat')
                                            <input type="checkbox" class="form-check-input" id="kardio9" name="kardio9" value="Dehidrasi berat" checked>
                                            <label class="form-check-label" for="exampleCheck1">Dehidrasi
                                                berat</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kardio9" name="kardio9" value="Dehidrasi berat">
                                            <label class="form-check-label" for="exampleCheck1">Dehidrasi
                                                berat</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->kardio10 == 'Pendarahan ringan tidak kontrol')
                                            <input type="checkbox" class="form-check-input" id="kardio10" name="kardio10" value="Pendarahan ringan tidak kontrol" checked>
                                            <label class="form-check-label" for="exampleCheck1">Pendarahan
                                                ringan tidak kontrol
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kardio10" name="kardio10" value="Pendarahan ringan tidak kontrol">
                                            <label class="form-check-label" for="exampleCheck1">Pendarahan
                                                ringan tidak kontrol
                                            </label>
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
                                </tr>
                                <tr>
                                    <td class="text-bold"> </td>
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
                                            @if ($triase[0]->kardio11 == 'Pendarahan masif tidak terkontrol')
                                            <input type="checkbox" class="form-check-input" id="kardio11" name="kardio11" value="Pendarahan masif tidak terkontrol" checked>
                                            <label class="form-check-label" for="exampleCheck1">Pendarahan
                                                masif tidak terkontrol
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="kardio11" name="kardio11" value="Pendarahan masif tidak terkontrol">
                                            <label class="form-check-label" for="exampleCheck1">Pendarahan
                                                masif tidak terkontrol
                                            </label>
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
                                </tr>
                                <tr>
                                    <td class="text-bold">SISTEM PERNAFASAN </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan1 == 'Trauma Kepala berat')
                                            <input type="checkbox" class="form-check-input" id="pernafasan1" name="pernafasan1" value="Trauma Kepala berat" checked>
                                            <label class="form-check-label" for="exampleCheck1">Trauma Kepala
                                                berat</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="pernafasan1" name="pernafasan1" value="Trauma Kepala berat">
                                            <label class="form-check-label" for="exampleCheck1">Trauma Kepala
                                                berat</label>
                                            @endif

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan2 == 'Trauma kepala sedang')
                                            <input type="checkbox" class="form-check-input" id="pernafasan2" name="pernafasan2" value="Trauma kepala sedang" checked>
                                            <label class="form-check-label" for="exampleCheck1">Trauma kepala
                                                sedang</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="pernafasan2" name="pernafasan2" value="Trauma kepala sedang">
                                            <label class="form-check-label" for="exampleCheck1">Trauma kepala
                                                sedang</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan3 == 'Trauma kepala ringan')
                                            <input type="checkbox" class="form-check-input" id="pernafasan3" name="pernafasan3" value="Trauma kepala ringan" checked>
                                            <label class="form-check-label" for="exampleCheck1">Trauma kepala
                                                ringan
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="pernafasan3" name="pernafasan3" value="Trauma kepala ringan">
                                            <label class="form-check-label" for="exampleCheck1">Trauma kepala
                                                ringan
                                            </label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan4 == 'Trauma kepala ringan tanpa muntah dan penurunan kesadaran')
                                            <input type="checkbox" class="form-check-input" id="pernafasan4" name="pernafasan4" value="Trauma kepala ringan tanpa muntah dan penurunan kesadaran" checked>
                                            <label class="form-check-label" for="exampleCheck1">Trauma kepala
                                                ringan tanpa muntah dan penurunan kesadaran
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="pernafasan4" name="pernafasan4" value="Trauma kepala ringan tanpa muntah dan penurunan kesadaran">
                                            <label class="form-check-label" for="exampleCheck1">Trauma kepala
                                                ringan tanpa muntah dan penurunan kesadaran
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
                                    <td class="text-bold"> </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan5 == 'GCS < 10') <input type="checkbox" class="form-check-input" id="pernafasan5" name="pernafasan5" value="GCS < 10" checked>
                                                <label class="form-check-label" for="exampleCheck1">GCS < 10</label>
                                                        @else
                                                        <input type="checkbox" class="form-check-input" id="pernafasan5" name="pernafasan5" value="GCS < 10">
                                                        <label class="form-check-label" for="exampleCheck1">GCS < 10</label>
                                                                @endif

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan6 == 'GCS < 13') <input type="checkbox" class="form-check-input" id="pernafasan6" name="pernafasan6" value="GCS < 13" checked>
                                                <label class="form-check-label" for="exampleCheck1">GCS < 13</label>
                                                        @else
                                                        <input type="checkbox" class="form-check-input" id="pernafasan6" name="pernafasan6" value="GCS < 13">
                                                        <label class="form-check-label" for="exampleCheck1">GCS < 13</label>
                                                                @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan7 == 'GCS < 15 Riwayat penurunan kesadaran') <input type="checkbox" class="form-check-input" id="pernafasan7" name="pernafasan7" value="GCS < 15 Riwayat penurunan kesadaran" checked>
                                                <label class="form-check-label" for="exampleCheck1">GCS < 15 Riwayat penurunan kesadaran </label>
                                                        @else
                                                        <input type="checkbox" class="form-check-input" id="pernafasan7" name="pernafasan7" value="GCS < 15 Riwayat penurunan kesadaran">
                                                        <label class="form-check-label" for="exampleCheck1">GCS < 15 Riwayat penurunan kesadaran </label>
                                                                @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan8 == 'GCS < 15 Riwayat penurunan kesadaran') <input type="checkbox" class="form-check-input" id="pernafasan8" name="pernafasan8" value="Sakit kepala kronis" checked>
                                                <label class="form-check-label" for="exampleCheck1">Sakit kepala
                                                    kronis
                                                </label>
                                                @else
                                                <input type="checkbox" class="form-check-input" id="pernafasan8" name="pernafasan8" value="Sakit kepala kronis">
                                                <label class="form-check-label" for="exampleCheck1">Sakit kepala
                                                    kronis
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
                                    <td class="text-bold"> </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan9 == 'Kejang berulang')
                                            <input type="checkbox" class="form-check-input" id="pernafasan9" name="pernafasan9" value="Kejang berulang" checked>
                                            <label class="form-check-label" for="exampleCheck1">Kejang
                                                berulang</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="pernafasan9" name="pernafasan9" value="Kejang berulang">
                                            <label class="form-check-label" for="exampleCheck1">Kejang
                                                berulang</label>
                                            @endif

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan10 == 'Penurunan Kesadaran')
                                            <input type="checkbox" class="form-check-input" id="pernafasan10" name="pernafasan10" value="Penurunan Kesadaran" checked>
                                            <label class="form-check-label" for="exampleCheck1">Penurunan
                                                Kesadaran</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="pernafasan10" name="pernafasan10" value="Penurunan Kesadaran">
                                            <label class="form-check-label" for="exampleCheck1">Penurunan
                                                Kesadaran</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan11 == 'Sakit kepala kronis')
                                            <input type="checkbox" class="form-check-input" id="pernafasan11" name="pernafasan11" value="Sakit kepala kronis" checked>
                                            <label class="form-check-label" for="exampleCheck1">Sakit kepala
                                                kronis
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="pernafasan11" name="pernafasan11" value="Sakit kepala kronis">
                                            <label class="form-check-label" for="exampleCheck1">Sakit kepala
                                                kronis
                                            </label>
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
                                </tr>
                                <tr>
                                    <td class="text-bold"> </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan12 == 'Kejang berulang')
                                            <input type="checkbox" class="form-check-input" id="pernafasan12" name="pernafasan12" value="Kejang berulang" checked>
                                            <label class="form-check-label" for="exampleCheck1">Kejang
                                                berulang</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="pernafasan12" name="pernafasan12" value="Kejang berulang">
                                            <label class="form-check-label" for="exampleCheck1">Kejang
                                                berulang</label>
                                            @endif

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan13 == 'Penurunan Kesadaran')
                                            <input type="checkbox" class="form-check-input" id="pernafasan13" name="pernafasan13" value="Penurunan Kesadaran" checked>
                                            <label class="form-check-label" for="exampleCheck1">Penurunan
                                                Kesadaran</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="pernafasan13" name="pernafasan13" value="Penurunan Kesadaran">
                                            <label class="form-check-label" for="exampleCheck1">Penurunan
                                                Kesadaran</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan14 == 'Sakit kepala kronis')
                                            <input type="checkbox" class="form-check-input" id="pernafasan14" name="pernafasan14" value="Sakit kepala kronis" checked>
                                            <label class="form-check-label" for="exampleCheck1">Sakit kepala
                                                kronis
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="pernafasan14" name="pernafasan14" value="Sakit kepala kronis">
                                            <label class="form-check-label" for="exampleCheck1">Sakit kepala
                                                kronis
                                            </label>
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
                                </tr>
                                <tr>
                                    <td class="text-bold"> </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan15 == 'Tidak sadar')
                                            <input type="checkbox" class="form-check-input" id="pernafasan15" name="pernafasan15" value="Tidak sadar" checked>
                                            <label class="form-check-label" for="exampleCheck1">Tidak
                                                sadar</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="pernafasan15" name="pernafasan15" value="Tidak sadar">
                                            <label class="form-check-label" for="exampleCheck1">Tidak
                                                sadar</label>
                                            @endif

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan16 == 'Sakit kepala berat mendadak')
                                            <input type="checkbox" class="form-check-input" id="pernafasan16" name="pernafasan16" value="Sakit kepala berat mendadak" checked>
                                            <label class="form-check-label" for="exampleCheck1">Sakit kepala
                                                berat mendadak</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="pernafasan16" name="pernafasan16" value="Sakit kepala berat mendadak">
                                            <label class="form-check-label" for="exampleCheck1">Sakit kepala
                                                berat mendadak</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan17 == 'Kemungkinan disfungsi shunt')
                                            <input type="checkbox" class="form-check-input" id="pernafasan17" name="pernafasan17" value="Kemungkinan disfungsi shunt" checked>
                                            <label class="form-check-label" for="exampleCheck1">Kemungkinan
                                                disfungsi shunt
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="pernafasan17" name="pernafasan17" value="Kemungkinan disfungsi shunt">
                                            <label class="form-check-label" for="exampleCheck1">Kemungkinan
                                                disfungsi shunt
                                            </label>
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
                                </tr>
                                <tr>
                                    <td class="text-bold"> </td>
                                    <td>
                                        <div class="form-group form-check">

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan18 == 'Disfungsi shunt')
                                            <input type="checkbox" class="form-check-input" id="pernafasan18" name="pernafasan18" value="Disfungsi shunt" checked>
                                            <label class="form-check-label" for="exampleCheck1">Disfungsi
                                                shunt</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="pernafasan18" name="pernafasan18" value="Disfungsi shunt">
                                            <label class="form-check-label" for="exampleCheck1">Disfungsi
                                                shunt</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->pernafasan19 == 'Kejang')
                                            <input type="checkbox" class="form-check-input" id="pernafasan19" name="pernafasan19" value="Kejang" checked>
                                            <label class="form-check-label" for="exampleCheck1">Kejang
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="pernafasan19" name="pernafasan19" value="Kejang">
                                            <label class="form-check-label" for="exampleCheck1">Kejang
                                            </label>
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
                                </tr>
                                <tr>
                                    <td class="text-bold">CHILD ABUSE</td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->abuse1 == 'Daerah Konfilik')
                                            <input type="checkbox" class="form-check-input" id="abuse1" name="abuse1" value="Daerah Konfilik" checked>
                                            <label class="form-check-label" for="exampleCheck1">Daerah
                                                Konfilik</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="abuse1" name="abuse1" value="Daerah Konfilik">
                                            <label class="form-check-label" for="exampleCheck1">Daerah
                                                Konfilik</label>
                                            @endif

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->abuse2 == 'memiliki risiko child abuse')
                                            <input type="checkbox" class="form-check-input" id="abuse2" name="abuse2" value="memiliki risiko child abuse" checked>
                                            <label class="form-check-label" for="exampleCheck1">memiliki
                                                risiko child abuse</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="abuse2" name="abuse2" value="memiliki risiko child abuse">
                                            <label class="form-check-label" for="exampleCheck1">memiliki
                                                risiko child abuse</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->abuse3 == 'Mengalami kekerasan fisik atau kekerasan seksual < 48 jam') <input type="checkbox" class="form-check-input" id="abuse3" name="abuse3" value="Mengalami kekerasan fisik atau kekerasan seksual < 48 jam" checked>
                                                <label class="form-check-label" for="exampleCheck1">Mengalami
                                                    kekerasan fisik atau kekerasan seksual < 48 jam </label>
                                                        @else
                                                        <input type="checkbox" class="form-check-input" id="abuse3" name="abuse3" value="Mengalami kekerasan fisik atau kekerasan seksual < 48 jam">
                                                        <label class="form-check-label" for="exampleCheck1">Mengalami
                                                            kekerasan fisik atau kekerasan seksual < 48 jam </label>
                                                                @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->abuse4 == 'Riwayat adanya kekerasan dalam keluarga')
                                            <input type="checkbox" class="form-check-input" id="abuse4" name="abuse4" value="Riwayat adanya kekerasan dalam keluarga" checked>
                                            <label class="form-check-label" for="exampleCheck1">Riwayat
                                                adanya kekerasan dalam keluarga
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="abuse4" name="abuse4" value="Riwayat adanya kekerasan dalam keluarga">
                                            <label class="form-check-label" for="exampleCheck1">Riwayat
                                                adanya kekerasan dalam keluarga
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
                                    <td class="text-bold">Lain-lain</td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->lain1 == 'Anafileksis')
                                            <input type="checkbox" class="form-check-input" id="lain1" name="lain1" value="Anafileksis" checked>
                                            <label class="form-check-label" for="exampleCheck1">Anafileksis</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="lain1" name="lain1" value="Anafileksis">
                                            <label class="form-check-label" for="exampleCheck1">Anafileksis</label>
                                            @endif

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->lain2 == 'Tampak Letargis')
                                            <input type="checkbox" class="form-check-input" id="lain2" name="lain2" value="Tampak Letargis" checked>
                                            <label class="form-check-label" for="exampleCheck1">Tampak
                                                Letargis</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="lain2" name="lain2" value="Tampak Letargis">
                                            <label class="form-check-label" for="exampleCheck1">Tampak
                                                Letargis</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->lain3 == 'Unconsolable Infant')
                                            <input type="checkbox" class="form-check-input" id="lain3" name="lain3" value="Unconsolable Infant" checked>
                                            <label class="form-check-label" for="exampleCheck1">Unconsolable
                                                Infant
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="lain3" name="lain3" value="Unconsolable Infant">
                                            <label class="form-check-label" for="exampleCheck1">Unconsolable
                                                Infant
                                            </label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->lain4 == 'Bayi Rewel')
                                            <input type="checkbox" class="form-check-input" id="lain4" name="lain4" value="Bayi Rewel" checked>
                                            <label class="form-check-label" for="exampleCheck1">Bayi Rewel
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="lain4" name="lain4" value="Bayi Rewel">
                                            <label class="form-check-label" for="exampleCheck1">Bayi Rewel
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
                                            @if ($triase[0]->lain5 == 'DM dengan penurunan kesadaran')
                                            <input type="checkbox" class="form-check-input" id="lain5" name="lain5" value="DM dengan penurunan kesadaran" checked>
                                            <label class="form-check-label" for="exampleCheck1">DM dengan
                                                penurunan kesadaran</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="lain5" name="lain5" value="DM dengan penurunan kesadaran">
                                            <label class="form-check-label" for="exampleCheck1">DM dengan
                                                penurunan kesadaran</label>
                                            @endif

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->lain6 == 'Bayi < 7 hari') <input type="checkbox" class="form-check-input" id="lain6" name="lain6" value="Bayi < 7 hari" checked>
                                                <label class="form-check-label" for="exampleCheck1">Bayi < 7 hari</label>
                                                        @else
                                                        <input type="checkbox" class="form-check-input" id="lain6" name="lain6" value="Bayi < 7 hari">
                                                        <label class="form-check-label" for="exampleCheck1">Bayi < 7 hari</label>
                                                                @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->lain7 == 'Bayi 3 - 36bulan dengan suhu > 38.5°C')
                                            <input type="checkbox" class="form-check-input" id="lain7" name="lain7" value="Bayi 3 - 36bulan dengan suhu > 38.5°C">
                                            <label class="form-check-label" for="exampleCheck1">Bayi 3 -
                                                36bulan dengan suhu > 38.5°C
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="lain7" name="lain7" value="Bayi 3 - 36bulan dengan suhu > 38.5°C">
                                            <label class="form-check-label" for="exampleCheck1">Bayi 3 -
                                                36bulan dengan suhu > 38.5°C
                                            </label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->lain8 == 'Bayi > 36bulan dengan suhu > 38°C dan tidak tampak toksik')
                                            <input type="checkbox" class="form-check-input" id="lain8" name="lain8" value="Bayi > 36bulan dengan suhu > 38°C dan tidak tampak toksik" checked>
                                            <label class="form-check-label" for="exampleCheck1">Bayi >
                                                36bulan dengan suhu > 38°C dan tidak tampak toksik
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="lain8" name="lain8" value="Bayi > 36bulan dengan suhu > 38°C dan tidak tampak toksik">
                                            <label class="form-check-label" for="exampleCheck1">Bayi >
                                                36bulan dengan suhu > 38°C dan tidak tampak toksik
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

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->lain9 == 'Bayi 3 - 36bulan dengan suhu > 38°C dan tampak toksik')
                                            <input type="checkbox" class="form-check-input" id="lain9" name="lain9" value="Bayi 3 - 36bulan dengan suhu > 38°C dan tampak toksik" checked>
                                            <label class="form-check-label" for="exampleCheck1">Bayi 3 -
                                                36bulan dengan suhu > 38°C dan tampak toksik</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="lain9" name="lain9" value="Bayi 3 - 36bulan dengan suhu > 38°C dan tampak toksik">
                                            <label class="form-check-label" for="exampleCheck1">Bayi 3 -
                                                36bulan dengan suhu > 38°C dan tampak toksik</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->lain10 == 'Reaksi Alergi sedang')
                                            <input type="checkbox" class="form-check-input" id="lain10" name="lain10" value="Reaksi Alergi sedang" checked>
                                            <label class="form-check-label" for="exampleCheck1">Reaksi
                                                Alergi sedang
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="lain10" name="lain10" value="Reaksi Alergi sedang">
                                            <label class="form-check-label" for="exampleCheck1">Reaksi
                                                Alergi sedang
                                            </label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->lain11 == 'Reaksi Alergi lokal')
                                            <input type="checkbox" class="form-check-input" id="lain11" name="lain11" value="Reaksi Alergi lokal" checked>
                                            <label class="form-check-label" for="exampleCheck1">Reaksi
                                                Alergi lokal
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="lain11" name="lain11" value="Reaksi Alergi lokal">
                                            <label class="form-check-label" for="exampleCheck1">Reaksi
                                                Alergi lokal
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

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->lain12 == 'Gangguan pendarahan')
                                            <input type="checkbox" class="form-check-input" id="lain12" name="lain12" value="Gangguan pendarahan" checked>
                                            <label class="form-check-label" for="exampleCheck1">Gangguan
                                                pendarahan</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="lain12" name="lain12" value="Gangguan pendarahan">
                                            <label class="form-check-label" for="exampleCheck1">Gangguan
                                                pendarahan</label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->lain13 == 'Kesulitan makan pada bayi')
                                            <input type="checkbox" class="form-check-input" id="lain13" name="lain13" value="Kesulitan makan pada bayi" checked>
                                            <label class="form-check-label" for="exampleCheck1">Kesulitan
                                                makan pada bayi
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="lain13" name="lain13" value="Kesulitan makan pada bayi">
                                            <label class="form-check-label" for="exampleCheck1">Kesulitan
                                                makan pada bayi
                                            </label>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->lain14 == 'Perilaku atipical')
                                            <input type="checkbox" class="form-check-input" id="lain14" name="lain14" value="Perilaku atipical" checked>
                                            <label class="form-check-label" for="exampleCheck1">Perilaku
                                                atipical
                                            </label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="lain14" name="lain14" value="Perilaku atipical">
                                            <label class="form-check-label" for="exampleCheck1">Perilaku
                                                atipical
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

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group form-check">
                                            @if ($triase[0]->lain15 == 'KAD')
                                            <input type="checkbox" class="form-check-input" id="lain15" name="lain15" value="KAD" checked>
                                            <label class="form-check-label" for="exampleCheck1">KAD</label>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="lain15" name="lain15" value="KAD">
                                            <label class="form-check-label" for="exampleCheck1">KAD</label>
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

                            </tbody>
                        </table>
                    </div>

                </div>
                @endif


                <div type="button" class="btn float-right btn-success simpantriaseanak" style="margin-top: 20px;">
                    SIMPAN
                </div>
            </div>
        </form>


    </div>
</div>
</div>
<script src="{{ asset('public/marker/markerjs2.js') }}"></script>
<script>
    function showMarkerArea(target) {
        const markerArea = new markerjs2.MarkerArea(target);
        markerArea.addEventListener("render", (event) => (target.src = event.dataUrl));
        markerArea.show();
    }
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


        //kesadaran
        var kesadaran1 = $("#kesadaran1:checked").val();
        var kesadaran2 = $("#kesadaran2:checked").val();
        var kesadaran3 = $("#kesadaran3:checked").val();
        var kesadaran4 = $("#kesadaran4:checked").val();
        var kesadaran5 = $("#kesadaran5:checked").val();
        var kesadaran6 = $("#kesadaran6:checked").val();
        var kesadaran7 = $("#kesadaran7:checked").val();
        var kesadaran8 = $("#kesadaran8:checked").val();
        var kesadaran9 = $("#kesadaran9:checked").val();
        var kesadaran10 = $("#kesadaran10:checked").val();

        //pernafasan
        var upaya1 = $("#upaya1:checked").val();
        var upaya2 = $("#upaya2:checked").val();
        var upaya3 = $("#upaya3:checked").val();
        var upaya4 = $("#upaya4:checked").val();
        var upaya5 = $("#upaya5:checked").val();
        var upaya6 = $("#upaya6:checked").val();
        var upaya7 = $("#upaya7:checked").val();
        var upaya8 = $("#upaya8:checked").val();
        var upaya9 = $("#upaya9:checked").val();
        var upaya10 = $("#upaya10:checked").val();
        var upaya11 = $("#upaya11:checked").val();


        //sirkulasi
        var sirkulasi1 = $("#sirkulasi1:checked").val();
        var sirkulasi2 = $("#sirkulasi2:checked").val();
        var sirkulasi3 = $("#sirkulasi3:checked").val();
        var sirkulasi4 = $("#sirkulasi4:checked").val();
        var sirkulasi5 = $("#sirkulasi5:checked").val();
        var sirkulasi6 = $("#sirkulasi6:checked").val();
        var sirkulasi7 = $("#sirkulasi7:checked").val();
        var sirkulasi8 = $("#sirkulasi8:checked").val();
        var sirkulasi9 = $("#sirkulasi9:checked").val();
        var sirkulasi10 = $("#sirkulasi10:checked").val();
        var sirkulasi11 = $("#sirkulasi11:checked").val();


        //gejalaspesifik
        var gejala1 = $("#gejala1:checked").val();
        var gejala2 = $("#gejala2:checked").val();
        var gejala3 = $("#gejala3:checked").val();
        var gejala4 = $("#gejala4:checked").val();
        var gejala5 = $("#gejala5:checked").val();
        var gejala6 = $("#gejala6:checked").val();
        var gejala7 = $("#gejala7:checked").val();
        var gejala8 = $("#gejala8:checked").val();
        var gejala9 = $("#gejala9:checked").val();
        var gejala10 = $("#gejala10:checked").val();
        var gejala11 = $("#gejala11:checked").val();
        var gejala12 = $("#gejala12:checked").val();
        var gejala13 = $("#gejala13:checked").val();
        var gejala14 = $("#gejala14:checked").val();
        var gejala15 = $("#gejala15:checked").val();
        //    kardio
        var kardio1 = $("#kardio1:checked").val();
        var kardio2 = $("#kardio2:checked").val();
        var kardio3 = $("#kardio3:checked").val();
        var kardio4 = $("#kardio4:checked").val();
        var kardio5 = $("#kardio5:checked").val();
        var kardio6 = $("#kardio6:checked").val();
        var kardio7 = $("#kardio7:checked").val();
        var kardio8 = $("#kardio8:checked").val();
        var kardio9 = $("#kardio9:checked").val();
        var kardio10 = $("#kardio10:checked").val();
        var kardio11 = $("#kardio11:checked").val();

        //    aaabuse
        var abuse1 = $("#abuse1:checked").val();
        var abuse2 = $("#abuse2:checked").val();
        var abuse3 = $("#abuse3:checked").val();
        var abuse4 = $("#abuse4:checked").val();

        var lain1 = $("#lain1:checked").val();
        var lain2 = $("#lain2:checked").val();
        var lain3 = $("#lain3:checked").val();
        var lain4 = $("#lain4:checked").val();
        var lain5 = $("#lain5:checked").val();
        var lain6 = $("#lain6:checked").val();
        var lain7 = $("#lain7:checked").val();
        var lain8 = $("#lain8:checked").val();
        var lain9 = $("#lain9:checked").val();
        var lain10 = $("#lain10:checked").val();
        var lain11 = $("#lain11:checked").val();
        var lain12 = $("#lain12:checked").val();
        var lain13 = $("#lain13:checked").val();
        var lain14 = $("#lain14:checked").val();
        var lain15 = $("#lain15:checked").val();
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

                        jenisats: $("#jenisats:checked").val(),


                        //kesadaran
                        kesadaran1: $("#kesadaran1:checked").val(),
                        kesadaran2: $("#kesadaran2:checked").val(),
                        kesadaran3: $("#kesadaran3:checked").val(),
                        kesadaran4: $("#kesadaran4:checked").val(),
                        kesadaran5: $("#kesadaran5:checked").val(),
                        kesadaran6: $("#kesadaran6:checked").val(),
                        kesadaran7: $("#kesadaran7:checked").val(),
                        kesadaran8: $("#kesadaran8:checked").val(),
                        kesadaran9: $("#kesadaran9:checked").val(),
                        kesadaran10: $("#kesadaran10:checked").val(),

                        //pernafasan
                        upaya1: $("#upaya1:checked").val(),
                        upaya2: $("#upaya2:checked").val(),
                        upaya3: $("#upaya3:checked").val(),
                        upaya4: $("#upaya4:checked").val(),
                        upaya5: $("#upaya5:checked").val(),
                        upaya6: $("#upaya6:checked").val(),
                        upaya7: $("#upaya7:checked").val(),
                        upaya8: $("#upaya8:checked").val(),
                        upaya9: $("#upaya9:checked").val(),
                        upaya10: $("#upaya10:checked").val(),
                        upaya11: $("#upaya11:checked").val(),


                        //sirkulasi
                        sirkulasi1: $("#sirkulasi1:checked").val(),
                        sirkulasi2: $("#sirkulasi2:checked").val(),
                        sirkulasi3: $("#sirkulasi3:checked").val(),
                        sirkulasi4: $("#sirkulasi4:checked").val(),
                        sirkulasi5: $("#sirkulasi5:checked").val(),
                        sirkulasi6: $("#sirkulasi6:checked").val(),
                        sirkulasi7: $("#sirkulasi7:checked").val(),
                        sirkulasi8: $("#sirkulasi8:checked").val(),
                        sirkulasi9: $("#sirkulasi9:checked").val(),
                        sirkulasi10: $("#sirkulasi10:checked").val(),
                        sirkulasi11: $("#sirkulasi11:checked").val(),


                        //gejalaspesifik
                        gejala1: $("#gejala1:checked").val(),
                        gejala2: $("#gejala2:checked").val(),
                        gejala3: $("#gejala3:checked").val(),
                        gejala4: $("#gejala4:checked").val(),
                        gejala5: $("#gejala5:checked").val(),
                        gejala6: $("#gejala6:checked").val(),
                        gejala7: $("#gejala7:checked").val(),
                        gejala8: $("#gejala8:checked").val(),
                        gejala9: $("#gejala9:checked").val(),
                        gejala10: $("#gejala10:checked").val(),
                        gejala11: $("#gejala11:checked").val(),
                        gejala12: $("#gejala12:checked").val(),
                        gejala13: $("#gejala13:checked").val(),
                        gejala14: $("#gejala14:checked").val(),
                        gejala15: $("#gejala15:checked").val(),
                        //    kardio
                        kardio1: $("#kardio1:checked").val(),
                        kardio2: $("#kardio2:checked").val(),
                        kardio3: $("#kardio3:checked").val(),
                        kardio4: $("#kardio4:checked").val(),
                        kardio5: $("#kardio5:checked").val(),
                        kardio6: $("#kardio6:checked").val(),
                        kardio7: $("#kardio7:checked").val(),
                        kardio8: $("#kardio8:checked").val(),
                        kardio9: $("#kardio9:checked").val(),
                        kardio10: $("#kardio10:checked").val(),
                        kardio11: $("#kardio11:checked").val(),

                        //    aaabuse
                        abuse1: $("#abuse1:checked").val(),
                        abuse2: $("#abuse2:checked").val(),
                        abuse3: $("#abuse3:checked").val(),
                        abuse4: $("#abuse4:checked").val(),

                        lain1: $("#lain1:checked").val(),
                        lain2: $("#lain2:checked").val(),
                        lain3: $("#lain3:checked").val(),
                        lain4: $("#lain4:checked").val(),
                        lain5: $("#lain5:checked").val(),
                        lain6: $("#lain6:checked").val(),
                        lain7: $("#lain7:checked").val(),
                        lain8: $("#lain8:checked").val(),
                        lain9: $("#lain9:checked").val(),
                        lain10: $("#lain10:checked").val(),
                        lain11: $("#lain11:checked").val(),
                        lain12: $("#lain12:checked").val(),
                        lain13: $("#lain13:checked").val(),
                        lain14: $("#lain14:checked").val(),
                        lain15: $("#lain15:checked").val()

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