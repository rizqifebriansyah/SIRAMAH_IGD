<div class="card-header bg-info">
    <h3 class="card-title ">ASSESMENT KEBIDANAN INSTALASI GAWAT DARURAT KEBIDANAN (IGDK) PASIEN NEONATUS</h3>
</div>
@if ($assesper == null)
<table class="table">
    <tbody>
        <tr>
            <td class="text-bold font-italic">Tanggal Kunjungan</td>
            <td>
                <h5 class="text-bold">{{$now}}</h5>

            </td>
            <td class="text-bold font-italic">Tanggal Pengkajian</td>
            <td>
                <input class="form-control" type="datetime-local" name="tgl_pengkajian" id="tgl_pengkajian" value="">


            </td>
        </tr>
        <tr>
            <td class="text-bold font-italic">Sumber Data</td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="sumberdata" id="sumberdata"
                        value="Pasien Sendiri">
                    <label class="form-check-label" for="inlineRadio1">Pasien Sendiri /
                        Autoanamase</label>
                </div>

            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="sumberdata" id="sumberdata" value="Keluarga">
                    <label class="form-check-label" for="inlineRadio2">Keluarga / Alloanamnesa</label>
                </div>
            </td>
            <td>

            </td>
        </tr>
        <tr>
            <td class="text-bold font-italic">Asal Masuk</td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="asalmasuk" id="asalmasuk" value="Non Rujukan">
                    <label class="form-check-label" for="inlineRadio1">Non Rujukan</label>
                </div>

            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="asalmasuk" id="asalmasuk" value="Rujukan">
                    <label class="form-check-label" for="inlineRadio2">Rujukan </label>
                </div>
            </td>
            <td>
                <input type="text" class="form-control"
                    placeholder="Asal Rujukan ..." id="asal_rujukan"
                    name="asal_rujukan" value="">
            </td>
        </tr>
        <tr>
            <td class="text-bold font-italic">cara Masuk</td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="caramasuk" id="caramasuk" value="Jalan Kaki">
                    <label class="form-check-label" for="inlineRadio1">Jalan Kaki</label>
                </div>

            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="caramasuk" id="caramasuk" value="Kursi Roda">
                    <label class="form-check-label" for="inlineRadio2">Kursi Roda </label>
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="caramasuk" id="caramasuk" value="Brankar">
                    <label class="form-check-label" for="inlineRadio2">Brankar </label>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<div class="accordion" id="accordionExample92">
    <div class="card">
        <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
            <h2 class="mb-0">
                <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse"
                    data-target="#collapseOne92" aria-expanded="true" aria-controls="collapseOne92">
                    <i class="bi bi-book mr-1 ml-1"></i> (S) SUBYEKTIF
                </button>
            </h2>
        </div>

        <div id="collapseOne92" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample92">
            <div class="card-body bg-light">
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-bold font-italic">SUBYEKTIF</td>
                            <td>
                                <div class="input-group">
                                    <textarea class="form-control" id="anamnesis" name="anamnesis"
                                        placeholder=""></textarea>

                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="accordionExample93">
    <div class="card">
        <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
            <h2 class="mb-0">
                <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse"
                    data-target="#collapseOne93" aria-expanded="true" aria-controls="collapseOne93">
                    <i class="bi bi-book mr-1 ml-1"></i> (O) OBYEKTIF
                </button>
            </h2>
        </div>

        <div id="collapseOne93" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample93">
            <div class="card-body bg-light">
                <div class="accordion" id="accordionExample9">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne9" aria-expanded="true"
                                    aria-controls="collapseOne9">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Tanda-tanda Vital
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne9" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample9">
                            <div class="card-body bg-light">

                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-bold font-italic">Keadaan Umum</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="keadaanumum"
                                                        id="keadaanumum" value="Baik">
                                                    <label class="form-check-label">Baik</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="keadaanumum"
                                                        id="keadaanumum" value="Sedang">
                                                    <label class="form-check-label">Sedang</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="keadaanumum"
                                                        id="keadaanumum" value="Buruk">
                                                    <label class="form-check-label">Buruk</label>
                                                </div>
                                            </td>
                                            <td class="text-bold font-italic">Kesadaran</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="kesadaran"
                                                        id="kesadaran" value="13-15">
                                                    <label class="form-check-label">13-15</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="kesadaran"
                                                        id="kesadaran" value="9-12">
                                                    <label class="form-check-label">9-12</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="kesadaran"
                                                        id="kesadaran" value="3-8">
                                                    <label class="form-check-label">3-8</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">SKOR AFGAR</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Tekanan darah pasien ..."
                                                        aria-label="Recipient's username" id="skor_afgar_1"
                                                        name="skor_afgar_1" aria-describedby="basic-addon2" value="">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- <td class="text-bold font-italic">Tekanan Darah</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Tekanan darah pasien ..."
                                                        aria-label="Recipient's username" id="tekanandarah"
                                                        name="tekanandarah" aria-describedby="basic-addon2" value="">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">mmHg</span>
                                                    </div>
                                                </div>
                                            </td> -->
                                            <td class="text-bold font-italic">Frekuensi Nadi</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Frekuensi nadi pasien ..." id="frekuensinadi"
                                                        name="frekuensinadi" aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2" value="">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">x/menit</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Frekuensi Nafas</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Frekuensi Nafas Pasien ..." name="frekuensinafas"
                                                        id="frekuensinafas" aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2" value="">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">x/menit</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-bold font-italic">Suhu</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Suhu tubuh pasien ..."
                                                        aria-label="Suhu tubuh pasien" name="suhutubuh" id="suhutubuh"
                                                        aria-describedby="basic-addon2" value="">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">°C</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Berat Badan </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Berat badan Pasien ..." name="beratbadan"
                                                        id="beratbadan" aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2" value="">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">Kg</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-bold font-italic">Tinggi Badan</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Tinggi Badan pasien ..."
                                                        aria-label="Suhu tubuh pasien" name="tb" id="tb"
                                                        aria-describedby="basic-addon2" value="">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">CM</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">GCS </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Berat badan Pasien ..." name="gcs" id="gcs"
                                                        aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2" value="">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-bold font-italic">SPO2</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" SPO2 pasien ..." aria-label="Suhu tubuh pasien"
                                                        name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2"></span>
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
                <!-- assesmen perawat igk -->
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">a. Riwayat Penyakit Ibu</td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">
                                    anak Ke :
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input class="form-control" type="text" id="anake" name="anake" placeholder="">

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic"></td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu" id="riwayatpenyakitibu" value="DM">
                                                <label class="form-check-label">DM</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu1" id="riwayatpenyakitibu1"
                                                    value="Hipertensi">
                                                <label class="form-check-label">Hipertensi</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu2" id="riwayatpenyakitibu2" value="Jantung">
                                                <label class="form-check-label">Jantung</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu3" id="riwayatpenyakitibu3" value="TBC">
                                                <label class="form-check-label">TBC</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu4" id="riwayatpenyakitibu4"
                                                    value="Hepatitis">
                                                <label class="form-check-label">Hepatitis</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu5" id="riwayatpenyakitibu5" value="Anemia">
                                                <label class="form-check-label">Anemia</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu6" id="riwayatpenyakitibu6" value="Alergi">
                                                <label class="form-check-label">Alergi</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="lain-lain" type="input"
                                                    name="riwayatpenyakitibu7" id="riwayatpenyakitibu7" value="">
                                            </div>
                                        </div>


                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Pengobatan Ibu</td>
                                <td>
                                    <div class="input-group">
                                        <input class="form-control" type="text" id="rpengoibu" name="rpengoibu"
                                            placeholder="">

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">b. Riwayat Intranatal</td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic"> Diagnosa Ibu : </td>
                                <td>
                                    <div class="input-group">
                                        <input class="form-control" type="text" id="rintra" name="rintra"
                                            placeholder="">

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Tanggal Lahir</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <input class="form-control" type="date" id="rintratgl" name="rintratgl"
                                                    placeholder="Tanggal Lahir">

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <input class="form-control" id="rintrawkt" name="rintrawkt"
                                                    placeholder="Jam">

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <input class="form-control" id="rintrakon" name="rintrakon"
                                                    placeholder="Kondisi Saat Lahir">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <input class="form-control" id="apgarscore" name="apgarscore"
                                                    placeholder="APGAR SCORE">
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Cara Persalinan</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="carrapersalinan"
                                                    id="carrapersalinan" value="Spontan">
                                                <label class="form-check-label">Spontan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="carrapersalinan1"
                                                    id="carrapersalinan1" value="Vacum Ekstraksi">
                                                <label class="form-check-label">Vacum Ekstraksi</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="carrapersalinan2"
                                                    id="carrapersalinan2" value="Forcep Ekstraksi">
                                                <label class="form-check-label">Forcep Ekstraksi</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="carrapersalinan3"
                                                    id="carrapersalinan3" value="Secttio Cesarea">
                                                <label class="form-check-label">Secttio Cesarea</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="lain-lain" type="input"
                                                    name="carrapersalinan4" id="carrapersalinan4" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="Letak" type="input"
                                                    name="carrapersalinanltk" id="carrapersalinanltk" value="">
                                            </div>
                                        </div>

                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Tali Pusat</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="talipusat"
                                                    id="talipusat" value="Segar">
                                                <label class="form-check-label">Segar</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="talipusat1"
                                                    id="talipusat1" value="Layu">
                                                <label class="form-check-label">Layu</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="talipusat2"
                                                    id="talipusat2" value="Simpul">
                                                <label class="form-check-label">Simpul</label>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">C. Faktor Resiko Infeksi</td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Mayor</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="mayor" id="mayor"
                                                    value="Ibu Demam >= 38°C ">
                                                <label class="form-check-label">Ibu Demam ≥ 38°C </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="mayor1"
                                                    id="mayor1" value="KPD > 24 Jam">
                                                <label class="form-check-label">KPD > 24 Jam</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="mayor2"
                                                    id="mayor2" value="Ketubah Hujau">
                                                <label class="form-check-label">Ketubah Hujau</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="mayor3"
                                                    id="mayor3" value="Korioamniotis">
                                                <label class="form-check-label">Korioamniotis</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="mayor4"
                                                    id="mayor4" value="Fetal Distres">
                                                <label class="form-check-label">Fetal Distres</label>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Minor</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="minor" id="minor"
                                                    value="KPD < 12 Jam ">
                                                <label class="form-check-label">KPD < 12 Jam </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="minor1"
                                                    id="minor1" value="Asfiksia">
                                                <label class="form-check-label">Asfiksia</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="minor2"
                                                    id="minor2" value="BBLR">
                                                <label class="form-check-label">BBLR</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="minor3"
                                                    id="minor3" value="ISK">
                                                <label class="form-check-label">ISK</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="minor4"
                                                    id="minor4" value="UK <  37 mg">
                                                <label class="form-check-label">UK < 37 mg</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="minor5"
                                                    id="minor5" value="Gemeli">
                                                <label class="form-check-label">Gemeli</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="minor6"
                                                    id="minor6" value="Keputihan">
                                                <label class="form-check-label">Keputihan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="minor7"
                                                    id="minor7" value="Ibu Temperatur > 37°C ">
                                                <label class="form-check-label">Ibu Temperatur > 37°C </label>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">d. Kebutuhan Biologis</td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Nutrisi</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="nutrisi"
                                                    id="nutrisi" value="ASI">
                                                <label class="form-check-label">ASI</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="Lainya" type="input"
                                                    name="nutrisi1" id="nutrisi1" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="Frekuensi ........ cc"
                                                    type="input" name="frekuensi" id="frekuensi" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="........c" type="input"
                                                    name="frekuensi1" id="frekuensi1" value="">
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Eliminasi</td>
                                <td>
                                    <div class="row">

                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="BAK" type="input" name="bak"
                                                    id="bak" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="keluhan" type="input"
                                                    name="kelbak" id="kelbak" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="kelbak1"
                                                    id="kelbak1" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic"></td>
                                <td>
                                    <div class="row">

                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="BAB" type="input" name="BAB"
                                                    id="BAB" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="keluhan" type="input"
                                                    name="kelbab" id="kelbab" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="kelbab1"
                                                    id="kelbab1" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">e. Alergi/Reaksi (Pada Orang Tua : Ayah/Ibu)</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="reaksi"
                                                    id="reaksi" value="ya">
                                                <label class="form-check-label">ya</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="reaksi"
                                                    id="reaksi" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="Sebutkan" type="input"
                                                    name="reaksii" id="reaksii" value="">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="accordion" id="accordionExample91">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne91" aria-expanded="true"
                                    aria-controls="collapseOne91">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> PSIKOSOSIAL, EKONOMI DAN SPIRITUAL
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne91" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample91">
                            <div class="card-body bg-light">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-bold font-italic">Kecemasan Orang Tua</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kecemasan" id="kecemasan" value="Sedang">
                                                            <label class="form-check-label">Sedang </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kecemasan" id="kecemasan" value="Berat">
                                                            <label class="form-check-label">Berat </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kecemasan" id="kecemasan" value="Panik">
                                                            <label class="form-check-label">Panik </label>
                                                        </div>
                                                    </div>



                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Koping Mekanisme Orang Tua</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="koping" id="koping" value="Merusak Diri">
                                                            <label class="form-check-label">Merusak Diri </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="koping" id="koping"
                                                                value="Menarik Diri / Isolasi Sosial">
                                                            <label class="form-check-label">Menarik Diri / Isolasi
                                                                Sosial </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="koping" id="koping" value="Perilaku Kekerasan">
                                                            <label class="form-check-label">Perilaku Kekerasan </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Pekerjaan Orang Tua</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="pekerjaan" id="pekerjaan" value="Pelajar">
                                                            <label class="form-check-label">Pelajar </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="pekerjaan" id="pekerjaan" value="PNS">
                                                            <label class="form-check-label">PNS </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="pekerjaan" id="pekerjaan" value="Pekerja Swasta">
                                                            <label class="form-check-label">Pekerja Swasta </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="pekerjaan" id="pekerjaan" value="lain-lain">
                                                            <label class="form-check-label">lain-lain </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Agama orang Tua</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="agama"
                                                                id="agama" value="Islam">
                                                            <label class="form-check-label">Islam </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="agama"
                                                                id="agama" value="Kristen">
                                                            <label class="form-check-label">Kristen </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="agama"
                                                                id="agama" value="Hindu">
                                                            <label class="form-check-label">Hindu </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="agama"
                                                                id="agama" value="Budha">
                                                            <label class="form-check-label">Budha </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="agama"
                                                                id="agama" value="Katolik">
                                                            <label class="form-check-label">Katolik </label>
                                                        </div>
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
                <div class="accordion" id="accordionExample100">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne100" aria-expanded="true"
                                    aria-controls="collapseOne100">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> SKRINING RESIKO JATUH
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne100" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample100">
                            <div class="card-body bg-light">
                                <h4 class="text-bold">PENGKAJIAN NYERI</h4>
                                <table class="table">
                                    <thead>
                                        <th class="text-bold float-center">Penilaian</th>
                                        <th class="text-bold float-center">0</th>
                                        <th class="text-bold float-center">1</th>
                                        <th class="text-bold float-center">2</th>
                                        <th class="text-bold float-center">Nilai</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-bold">Crying</td>
                                            <td>Tidak ada tangisan / tangisan tidak melengking</td>
                                            <td>Tangisan melengking tetapi bayi mudah dihibur</td>
                                            <td>Tangisan melengking tetapi bayi tidak mudah dihibur</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="cryingvalue" id="cryingvalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold">Requires</td>
                                            <td>Tidak perlu oksigen</td>
                                            <td>Tangisan melengking tetapi bayi mudah dihibur</td>
                                            <td>Perlu oksigen ≤ 30%</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="requiresvalue" id="requiresvalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold">Increased</td>
                                            <td>Detak jantung dan tekanan darah tidak berubah atau kurang dari nilai
                                                base line</td>
                                            <td>Detak jantung atau tekanan darah meningkat, tetapi peningkatan ≤ 20%
                                            </td>
                                            <td>Detak jantung atau tekanan darah meningkat ≥ 20% dari nilai base line
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="increasedvalue" id="increasedvalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold">Expression</td>
                                            <td>Tidak ada seringai</td>
                                            <td>Seringai ada</td>
                                            <td>Seringai ada dan tidak ada suara tangisan dengkur</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="expressionvalue" id="expressionvalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold">Sleepless</td>
                                            <td>Bayi secara terus menerus tidur</td>
                                            <td>Bayi terbangun pada interval berulang</td>
                                            <td>Bayi terjaga, terbangun secara terus menerus</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="sleeplessvalue" id="sleeplessvalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="float-right"> Total Score</td>

                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="totalnyeri" id="totalnyeri"
                                                        class="form-control" readonly />
                                                </div>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample101">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne101" aria-expanded="true"
                                    aria-controls="collapseOne101">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> SKRINING GIZI NEONATUS PEDIATRIC
                                    YORKHILL MALNUTRITION SCORE (PYMS)
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne101" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample101">
                            <div class="card-body bg-light">
                                <h4 class="text-bold">PENGKAJIAN NYERI</h4>
                                <table class="table">
                                    <thead>
                                        <th class="text-bold float-center">KRITERIA</th>
                                        <th class="text-bold float-center">0</th>
                                        <th class="text-bold float-center">2</th>
                                        <th class="text-bold float-center">SKOR</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Status Antropometri BB/PB</td>
                                            <td>> (-2 SD) </td>
                                            <td>
                                                < (-2 SD) </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="bbvalue" id="bbvalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Kehilangan atau penurunan berat badan akhir-akhir ini</td>
                                            <td>Tidak ada </td>
                                            <td>ada</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="pbvalue" id="pbvalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Asupan makanan dalam mingi terakhir</td>
                                            <td>Makanan seperti biasa </td>
                                            <td>Ada penurunan</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="mingivalue" id="mingivalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Anak sakit berat *</td>
                                            <td>Tidak </td>
                                            <td>ada</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="sakitvalue" id="sakitvalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td> </td>
                                            <td>Total score</td>
                                            <td>
                                                <div class="form-group">
                                                    <input readonly type="number" name="totalgizi" id="totalgizi"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="accordion" id="accordionExample94">
    <div class="card">
        <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
            <h2 class="mb-0">
                <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse"
                    data-target="#collapseOne94" aria-expanded="true" aria-controls="collapseOne94">
                    <i class="bi bi-book mr-1 ml-1"></i>(A) ASSESMEN
                </button>
            </h2>
        </div>

        <div id="collapseOne94" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample94">
            <div class="card-body bg-light">
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-bold font-italic">Diagnosa Kebidanan</td>

                            <td>
                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan" id="diagnosakebidanan"
                                                        value="Aktual / Risiko bersihan jalan nafas tidak efektif">
                                                    <label class="form-check-label">Aktual / Risiko bersihan jalan nafas
                                                        tidak efektif</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan1" id="diagnosakebidanan1"
                                                        value="Aktual / Risiko pola nafas tidak efektif">
                                                    <label class="form-check-label">Aktual / Risiko pola nafas tidak
                                                        efektif</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan2" id="diagnosakebidanan2"
                                                        value="Aktual / Risiko gangguan pertukaran gas">
                                                    <label class="form-check-label">Aktual / Risiko gangguan pertukaran
                                                        gas</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan3" id="diagnosakebidanan3"
                                                        value="Aktual / Risiko gangguan sirkulasi">
                                                    <label class="form-check-label">Aktual / Risiko gangguan
                                                        sirkulasi</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan4" id="diagnosakebidanan4"
                                                        value="Aktual / Risiko gangguan perfusi jaringan / cerebral ">
                                                    <label class="form-check-label">Aktual / Risiko gangguan perfusi
                                                        jaringan / cerebral </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan5" id="diagnosakebidanan5"
                                                        value="Hipertermia">
                                                    <label class="form-check-label">Hipertermia </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan6" id="diagnosakebidanan6"
                                                        value="Aktual / Risiko gangguan keseimbangan cairan">
                                                    <label class="form-check-label">Aktual / Risiko gangguan
                                                        keseimbangan cairan </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan7" id="diagnosakebidanan7"
                                                        value="Aktual / Risiko gangguan integritas kulit">
                                                    <label class="form-check-label">Aktual / Risiko gangguan
                                                        integritas kulit </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan8" id="diagnosakebidanan8"
                                                        value="Aktual / Risiko cemas / takut">
                                                    <label class="form-check-label">Aktual / Risiko cemas / takut
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan9" id="diagnosakebidanan9"
                                                        value="Risiko penyebaran toksik">
                                                    <label class="form-check-label">Risiko penyebaran toksik
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan10" id="diagnosakebidanan10"
                                                        value="risiko jatuh / cedera">
                                                    <label class="form-check-label">risiko jatuh / cedera</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan11" id="diagnosakebidanan11"
                                                        value="nyeri">
                                                    <label class="form-check-label">nyeri</label>
                                                </div>
                                                <textarea class="form-control" id="diagnosakebidanan12"
                                                    name="diagnosakebidanan12" rows="2" placeholder=""></textarea>

                                            </div>
                                        </div>

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
<div class="accordion" id="accordionExample95">
    <div class="card">
        <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
            <h2 class="mb-0">
                <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse"
                    data-target="#collapseOne95" aria-expanded="true" aria-controls="collapseOne95">
                    <i class="bi bi-book mr-1 ml-1"></i> (P) PLANNING
                </button>
            </h2>
        </div>

        <div id="collapseOne95" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample95">
            <div class="card-body bg-light">
                <table class="table">
                    <tbody>

                        <tr>
                            <td class="text-bold font-italic">Rencana Asuhan Kebidanan</td>
                            <td>
                                <div class="input-group">
                                    <textarea class="form-control" id="planning" name="planning"
                                        placeholder=""></textarea>

                                </div>
                            </td>
                        </tr>
                        <!-- <tr>
                                    <td class="text-bold font-italic">Tindakan Kebidanan dan Evaluasi</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="tindakan" name="tindakan" placeholder=""></textarea>

                                        </div>
                                    </td>
                                </tr> -->
                        <tr>
                            <td class="text-bold font-italic">KOLABORASI </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kolaborasi1"
                                                id="kolaborasi1" value="Infus/ IVFD">
                                            <label class="form-check-label">Infus/ IVFD </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kolaborasi2"
                                                id="kolaborasi2" value="Oksigenasi">
                                            <label class="form-check-label">Oksigenasi </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kolaborasi3"
                                                id="kolaborasi3" value="NGT">
                                            <label class="form-check-label">NGT </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kolaborasi4"
                                                id="kolaborasi4" value="Defibrilasi">
                                            <label class="form-check-label">Defibrilasi </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kolaborasi5"
                                                id="kolaborasi5" value="Suction">
                                            <label class="form-check-label">Suction </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kolaborasi6"
                                                id="kolaborasi6" value="LAB">
                                            <label class="form-check-label">LAB </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kolaborasi7"
                                                id="kolaborasi7" value="Nebulizer">
                                            <label class="form-check-label">Nebulizer </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kolaborasi8"
                                                id="kolaborasi8" value="Mengumbah lambung">
                                            <label class="form-check-label">Mengumbah lambung </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kolaborasi9"
                                                id="kolaborasi9" value="Mayo">
                                            <label class="form-check-label">Mayo </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kolaborasi10"
                                                id="kolaborasi10" value="Explorasi / Irigasi">
                                            <label class="form-check-label">Explorasi / Irigasi </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kolaborasi11"
                                                id="kolaborasi11" value="EKG">
                                            <label class="form-check-label">EKG </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kolaborasi12"
                                                id="kolaborasi12" value="Saturasi Oksigen">
                                            <label class="form-check-label">Saturasi Oksigen </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kolaborasi13"
                                                id="kolaborasi13" value="Kateter">
                                            <label class="form-check-label">Kateter </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kolaborasi14"
                                                id="kolaborasi14" value="ETT">
                                            <label class="form-check-label">ETT </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kolaborasi15"
                                                id="kolaborasi15" value="Obat">
                                            <label class="form-check-label">Obat </label>
                                        </div>
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
<div class="accordion" id="accordionExample912">
    <div class="card">
        <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
            <h2 class="mb-0">
                <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse"
                    data-target="#collapseOne12" aria-expanded="true" aria-controls="collapseOne12">
                    <i class="bi bi-book mr-1 ml-1"></i>(I) IMPLEMENTATION
                </button>
            </h2>
        </div>

        <div id="collapseOne12" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample912">
            <div class="card-body bg-light">
                <table class="table">
                    <tbody>

                        <tr>
                            <td class="text-bold font-italic">TINDAKAN KEPERAWATAN</td>
                            <td>
                                <form id="dynamic-form" class="formtindakankebidanan">
                                    <h5>Klik Tombol Tambah untuk menambahkan Tindakan
                                    </h5>

                                    <div class="field_wrapperrrr">
                                        <div class="row mt-2">


                                            <div class="col-md-2">
                                                <a class="btn btn-success" href="javascript:void(0);" id="add_buttonnn"
                                                    title="Add field">TAMBAH</a>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </td>

                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


<div type="button" class="btn float-right btn-success simpanassesbidanbayi" style="margin-top: 20px;">
    SIMPAN
</div>
@elseif($assesper[0]->status == 2)
<h1>Data Sudah Tidak Bisa Diubah Karena sudah di Validasi</h1>
@else
<table class="table">
    <tbody>
        <tr>
            <td class="text-bold font-italic">Tanggal Kunjungan</td>
            <td>
                <h5 class="text-bold">{{$now}}</h5>

            </td>
            <td class="text-bold font-italic">Tanggal Pengkajian</td>
            <td>
                <input class="form-control" type="datetime-local" name="tgl_pengkajian" id="tgl_pengkajian" value="{{$assesper[0]->tgl_pengkajian}}">


            </td>
        </tr>
        <tr>
            <td class="text-bold font-italic">Sumber Data</td>
            <td>
                <div class="form-check form-check-inline">
                    @if($assesper[0]->sumber_data == 'Pasien Sendiri')
                    <input class="form-check-input" type="checkbox" name="sumberdata" id="sumberdata" checked
                        value="Pasien Sendiri">
                    <label class="form-check-label" for="inlineRadio1">Pasien Sendiri /Autoanamase</label>
                    @else
                    <input class="form-check-input" type="checkbox" name="sumberdata" id="sumberdata"
                        value="Pasien Sendiri">
                    <label class="form-check-label" for="inlineRadio1">Pasien Sendiri /Autoanamase</label>
                    @endif
                </div>

            </td>
            <td>
                <div class="form-check form-check-inline">
                    @if($assesper[0]->sumber_data == 'Keluarga')
                    <input class="form-check-input" type="checkbox" name="sumberdata" id="sumberdata" checked
                        value="Keluarga">
                    <label class="form-check-label" for="inlineRadio2">Keluarga / Alloanamnesa</label>
                    @else
                    <input class="form-check-input" type="checkbox" name="sumberdata" id="sumberdata" value="Keluarga">
                    <label class="form-check-label" for="inlineRadio2">Keluarga / Alloanamnesa</label>
                    @endif
                </div>
            </td>
            <td>

            </td>
        </tr>
        <tr>
            <td class="text-bold font-italic">Asal Masuk</td>
            <td>
                <div class="form-check form-check-inline">
                    @if($assesper[0]->asal_masuk == 'Non Rujukan')
                    <input class="form-check-input" type="checkbox" name="asalmasuk" checked id="asalmasuk"
                        value="Non Rujukan">
                    <label class="form-check-label" for="inlineRadio1">Non Rujukan</label>
                    @else
                    <input class="form-check-input" type="checkbox" name="asalmasuk" id="asalmasuk" value="Non Rujukan">
                    <label class="form-check-label" for="inlineRadio1">Non Rujukan</label>
                    @endif
                </div>

            </td>
            <td>
                <div class="form-check form-check-inline">
                    @if($assesper[0]->asal_masuk == 'Rujukan')
                    <input class="form-check-input" type="checkbox" name="asalmasuk" checked id="asalmasuk"
                        value="Rujukan">
                    <label class="form-check-label" for="inlineRadio2">Rujukan </label>
                    @else
                    <input class="form-check-input" type="checkbox" name="asalmasuk" id="asalmasuk" value="Rujukan">
                    <label class="form-check-label" for="inlineRadio2">Rujukan </label>
                    @endif
                </div>
            </td>
            <td>
                <input type="text" class="form-control"
                    placeholder="Asal Rujukan ..." id="asal_rujukan"
                    name="asal_rujukan" value="">
            </td>
        </tr>
        <tr>
            <td class="text-bold font-italic">cara Masuk</td>
            <td>
                <div class="form-check form-check-inline">
                    @if($assesper[0]->cara_masuk == 'Jalan Kaki')
                    <input class="form-check-input" type="checkbox" checked name="caramasuk" id="caramasuk"
                        value="Jalan Kaki">
                    <label class="form-check-label" for="inlineRadio1">Jalan Kaki</label>
                    @else
                    <input class="form-check-input" type="checkbox" name="caramasuk" id="caramasuk" value="Jalan Kaki">
                    <label class="form-check-label" for="inlineRadio1">Jalan Kaki</label>
                    @endif
                </div>

            </td>
            <td>
                <div class="form-check form-check-inline">
                    @if($assesper[0]->cara_masuk == 'Kursi Roda')

                    <input class="form-check-input" type="checkbox" name="caramasuk" checked id="caramasuk"
                        value="Kursi Roda">
                    <label class="form-check-label" for="inlineRadio2">Kursi Roda </label>
                    @else
                    <input class="form-check-input" type="checkbox" name="caramasuk" id="caramasuk" value="Kursi Roda">
                    <label class="form-check-label" for="inlineRadio2">Kursi Roda </label>
                    @endif
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    @if($assesper[0]->cara_masuk == 'Brankar')
                    <input class="form-check-input" type="checkbox" name="caramasuk" id="caramasuk" checked
                        value="Brankar">
                    <label class="form-check-label" for="inlineRadio2">Brankar </label>
                    @else
                    <input class="form-check-input" type="checkbox" name="caramasuk" id="caramasuk" value="Brankar">
                    <label class="form-check-label" for="inlineRadio2">Brankar </label>
                    @endif
                </div>
            </td>
        </tr>
    </tbody>
</table>
<div class="accordion" id="accordionExample92">
    <div class="card">
        <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
            <h2 class="mb-0">
                <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse"
                    data-target="#collapseOne92" aria-expanded="true" aria-controls="collapseOne92">
                    <i class="bi bi-book mr-1 ml-1"></i> (S) SUBYEKTIF
                </button>
            </h2>
        </div>

        <div id="collapseOne92" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample92">
            <div class="card-body bg-light">
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-bold font-italic">SUBYEKTIF</td>
                            <td>
                                <div class="input-group">
                                    <textarea class="form-control" id="anamnesis" name="anamnesis"
                                        placeholder="">{{$assesper[0]->subyek}}</textarea>

                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="accordionExample93">
    <div class="card">
        <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
            <h2 class="mb-0">
                <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse"
                    data-target="#collapseOne93" aria-expanded="true" aria-controls="collapseOne93">
                    <i class="bi bi-book mr-1 ml-1"></i> (O) OBYEKTIF
                </button>
            </h2>
        </div>

        <div id="collapseOne93" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample93">
            <div class="card-body bg-light">
                <div class="accordion" id="accordionExample9">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne9" aria-expanded="true"
                                    aria-controls="collapseOne9">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Tanda-tanda Vital
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne9" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample9">
                            <div class="card-body bg-light">


                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-bold font-italic">Keadaan Umum</td>
                                            <td>
                                                <div class="form-check">
                                                    @if($assesper[0]->keadaan_umum == 'Baik')
                                                    <input class="form-check-input" type="radio" checked
                                                        name="keadaanumum" id="keadaanumum" value="Baik">
                                                    <label class="form-check-label">Baik</label>
                                                    @else
                                                    <input class="form-check-input" type="radio" name="keadaanumum"
                                                        id="keadaanumum" value="Baik">
                                                    <label class="form-check-label">Baik</label>
                                                    @endif

                                                </div>
                                                <div class="form-check">
                                                    @if($assesper[0]->keadaan_umum == 'Sedang')
                                                    <input class="form-check-input" type="radio" name="keadaanumum"
                                                        checked id="keadaanumum" value="Sedang">
                                                    <label class="form-check-label">Sedang</label>
                                                    @else
                                                    <input class="form-check-input" type="radio" name="keadaanumum"
                                                        id="keadaanumum" value="Sedang">
                                                    <label class="form-check-label">Sedang</label>
                                                    @endif
                                                </div>
                                                <div class="form-check">
                                                    @if($assesper[0]->keadaan_umum == 'Buruk')
                                                    <input class="form-check-input" type="radio" checked
                                                        name="keadaanumum" id="keadaanumum" value="Buruk">
                                                    <label class="form-check-label">Buruk</label>
                                                    @else
                                                    <input class="form-check-input" type="radio" name="keadaanumum"
                                                        id="keadaanumum" value="Buruk">
                                                    <label class="form-check-label">Buruk</label>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="text-bold font-italic">Kesadaran</td>
                                            <td>
                                                <div class="form-check">
                                                    @if($assesper[0]->kesadaran == '13-15')
                                                    <input class="form-check-input" checked type="radio"
                                                        name="kesadaran" id="kesadaran" value="13-15">
                                                    <label class="form-check-label">13-15</label>
                                                    @else
                                                    <input class="form-check-input" type="radio" name="kesadaran"
                                                        id="kesadaran" value="13-15">
                                                    <label class="form-check-label">13-15</label>
                                                    @endif
                                                </div>
                                                <div class="form-check">
                                                    @if($assesper[0]->kesadaran == '9-12')
                                                    <input class="form-check-input" checked type="radio"
                                                        name="kesadaran" id="kesadaran" value="9-12">
                                                    <label class="form-check-label">9-12</label>
                                                    @else
                                                    <input class="form-check-input" type="radio" name="kesadaran"
                                                        id="kesadaran" value="9-12">
                                                    <label class="form-check-label">9-12</label>
                                                    @endif
                                                </div>
                                                <div class="form-check">
                                                    @if($assesper[0]->kesadaran == '3-8')
                                                    <input class="form-check-input" type="radio" checked
                                                        name="kesadaran" id="kesadaran" value="3-8">
                                                    <label class="form-check-label">3-8</label>
                                                    @else
                                                    <input class="form-check-input" type="radio" name="kesadaran"
                                                        id="kesadaran" value="3-8">
                                                    <label class="form-check-label">3-8</label>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                             <td class="text-bold font-italic">SKOR AFGAR</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Tekanan darah pasien ..."
                                                        aria-label="Recipient's username" id="skor_afgar_1"
                                                        name="skor_afgar_1" aria-describedby="basic-addon2" value="{{$assesper[0]->skor_afgar_1}}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- <td class="text-bold font-italic">Tekanan Darah</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Tekanan darah pasien ..."
                                                        aria-label="Recipient's username" id="tekanandarah"
                                                        name="tekanandarah" aria-describedby="basic-addon2"
                                                        value="{{$assesper[0]->tekanan_darah}}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">mmHg</span>
                                                    </div>
                                                </div>
                                            </td> -->
                                            <td class="text-bold font-italic">Frekuensi Nadi</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Frekuensi nadi pasien ..." id="frekuensinadi"
                                                        name="frekuensinadi" aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2"
                                                        value="{{$assesper[0]->frekuensi_nadi}}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">x/menit</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Frekuensi Nafas</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Frekuensi Nafas Pasien ..." name="frekuensinafas"
                                                        id="frekuensinafas" aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2"
                                                        value="{{$assesper[0]->frekuensi_nafas}}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">x/menit</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-bold font-italic">Suhu</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Suhu tubuh pasien ..."
                                                        aria-label="Suhu tubuh pasien" name="suhutubuh" id="suhutubuh"
                                                        aria-describedby="basic-addon2" value="{{$assesper[0]->suhu}}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">°C</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Berat Badan </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Berat badan Pasien ..." name="beratbadan"
                                                        id="beratbadan" aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2"
                                                        value="{{$assesper[0]->berat_badan}}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">Kg</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-bold font-italic">Tinggi Badan</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Tinggi Badan pasien ..."
                                                        aria-label="Tinggi tubuh pasien" name="tb" id="tb"
                                                        aria-describedby="basic-addon2" value="{{$assesper[0]->tb}}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">CM</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">GCS </td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Berat badan Pasien ..." name="gcs" id="gcs"
                                                        aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2" value="{{$assesper[0]->GCS}}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-bold font-italic">SPO2</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder=" SPO2 pasien ..." aria-label="Suhu tubuh pasien"
                                                        name="SPO2" id="SPO2" aria-describedby="basic-addon2"
                                                        value="{{$assesper[0]->SPO2}}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2"></span>
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
                <!-- assesmen perawat igk -->
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">a. Riwayat Penyakit Ibu</td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">
                                    anak Ke :
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input class="form-control" type="text" id="anake" name="anake"
                                            value="{{$assesper[0]->anake}}" placeholder="">

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic"></td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->rpenyakit == 'DM')
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu" id="riwayatpenyakitibu" value="DM"
                                                    checked>
                                                <label class="form-check-label">DM</label>
                                                @else
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu" id="riwayatpenyakitibu" value="DM">
                                                <label class="form-check-label">DM</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->rpenyakit1 == 'Hipertensi')
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu1" id="riwayatpenyakitibu1"
                                                    value="Hipertensi" checked>
                                                <label class="form-check-label">Hipertensi</label>
                                                @else
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu1" id="riwayatpenyakitibu1"
                                                    value="Hipertensi">
                                                <label class="form-check-label">Hipertensi</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->rpenyakit2 == 'Jantung')
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu2" id="riwayatpenyakitibu2" value="Jantung"
                                                    checked>
                                                <label class="form-check-label">Jantung</label>
                                                @else
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu2" id="riwayatpenyakitibu2" value="Jantung">
                                                <label class="form-check-label">Jantung</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->rpenyakit3 == 'TBC')
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu3" id="riwayatpenyakitibu3" value="TBC"
                                                    checked>
                                                <label class="form-check-label">TBC</label>
                                                @else
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu3" id="riwayatpenyakitibu3" value="TBC">
                                                <label class="form-check-label">TBC</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->rpenyakit4 == 'Hepatitis')
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu4" id="riwayatpenyakitibu4"
                                                    value="Hepatitis" checked>
                                                <label class="form-check-label">Hepatitis</label>
                                                @else
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu4" id="riwayatpenyakitibu4"
                                                    value="Hepatitis">
                                                <label class="form-check-label">Hepatitis</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->rpenyakit5 == 'Anemia')
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu5" id="riwayatpenyakitibu5" value="Anemia"
                                                    checked>
                                                <label class="form-check-label">Anemia</label>
                                                @else
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu5" id="riwayatpenyakitibu5" value="Anemia">
                                                <label class="form-check-label">Anemia</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->rpenyakit6 == 'Alergi')
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu6" id="riwayatpenyakitibu6" value="Alergi"
                                                    checked>
                                                <label class="form-check-label">Alergi</label>
                                                @else
                                                <input class="form-check-input" type="checkbox"
                                                    name="riwayatpenyakitibu6" id="riwayatpenyakitibu6" value="Alergi">
                                                <label class="form-check-label">Alergi</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="lain-lain" type="input"
                                                    name="riwayatpenyakitibu7" id="riwayatpenyakitibu7"
                                                    value="{{$assesper[0]->rpenyakit7}}">
                                            </div>
                                        </div>


                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Pengobatan Ibu</td>
                                <td>
                                    <div class="input-group">
                                        <input class="form-control" type="text" id="rpengoibu"
                                            value="{{$assesper[0]->rpengoibu}}" name="rpengoibu" placeholder="">

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">b. Riwayat Intranatal</td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic"> Diagnosa Ibu : </td>
                                <td>
                                    <div class="input-group">
                                        <input class="form-control" type="text" id="rintra" name="rintra"
                                            value="{{$assesper[0]->rintra}}" placeholder="">

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Tanggal Lahir</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <input class="form-control" type="date" id="rintratgl" name="rintratgl"
                                                    value="{{$assesper[0]->rintratgl}}" placeholder="Tanggal Lahir">

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <input class="form-control" id="rintrawkt" name="rintrawkt"
                                                    value="{{$assesper[0]->rintrawkt}}" placeholder="Jam">

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <input class="form-control" id="rintrakon" name="rintrakon"
                                                    value="{{$assesper[0]->rintrakon}}"
                                                    placeholder="Kondisi Saat Lahir">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <input class="form-control" id="apgarscore" name="apgarscore"
                                                    value="{{$assesper[0]->apgarscore}}" placeholder="APGAR SCORE">
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Cara Persalinan</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->carrapersalinan == 'Spontan')
                                                <input class="form-check-input" type="checkbox" name="carrapersalinan"
                                                    id="carrapersalinan" value="Spontan" checked>
                                                <label class="form-check-label">Spontan</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="carrapersalinan"
                                                    id="carrapersalinan" value="Spontan">
                                                <label class="form-check-label">Spontan</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->carrapersalinan1 == 'Vacum Ekstraksi')
                                                <input class="form-check-input" type="checkbox" name="carrapersalinan1"
                                                    id="carrapersalinan1" value="Vacum Ekstraksi" checked>
                                                <label class="form-check-label">Vacum Ekstraksi</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="carrapersalinan1"
                                                    id="carrapersalinan1" value="Vacum Ekstraksi">
                                                <label class="form-check-label">Vacum Ekstraksi</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->carrapersalinan2 == 'Forcep Ekstraksi')
                                                <input class="form-check-input" type="checkbox" name="carrapersalinan2"
                                                    id="carrapersalinan2" value="Forcep Ekstraksi" checked>
                                                <label class="form-check-label">Forcep Ekstraksi</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="carrapersalinan2"
                                                    id="carrapersalinan2" value="Forcep Ekstraksi">
                                                <label class="form-check-label">Forcep Ekstraksi</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->carrapersalinan3 == 'Secttio Cesarea')
                                                <input class="form-check-input" type="checkbox" name="carrapersalinan3"
                                                    id="carrapersalinan3" value="Secttio Cesarea" checked>
                                                <label class="form-check-label">Secttio Cesarea</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="carrapersalinan3"
                                                    id="carrapersalinan3" value="Secttio Cesarea">
                                                <label class="form-check-label">Secttio Cesarea</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="lain-lain" type="input"
                                                    name="carrapersalinan4" id="carrapersalinan4"
                                                    value="{{$assesper[0]->carrapersalinan4}}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="Letak" type="input"
                                                    name="carrapersalinanltk" id="carrapersalinanltk"
                                                    value="{{$assesper[0]->carrapersalinanltk}}">
                                            </div>
                                        </div>

                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Tali Pusat</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->talipusat == 'Segar')
                                                <input class="form-check-input" type="checkbox" name="talipusat"
                                                    id="talipusat" value="Segar" checked>
                                                <label class="form-check-label">Segar</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="talipusat"
                                                    id="talipusat" value="Segar">
                                                <label class="form-check-label">Segar</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->talipusat1 == 'Layu')
                                                <input class="form-check-input" type="checkbox" name="talipusat1"
                                                    id="talipusat1" value="Layu" checked>
                                                <label class="form-check-label">Layu</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="talipusat1"
                                                    id="talipusat1" value="Layu">
                                                <label class="form-check-label">Layu</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->talipusat2 == 'Simpul')
                                                <input class="form-check-input" type="checkbox" name="talipusat2"
                                                    checked id="talipusat2" value="Simpul" checked>
                                                <label class="form-check-label">Simpul</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="talipusat2"
                                                    id="talipusat2" value="Simpul">
                                                <label class="form-check-label">Simpul</label>
                                                @endif

                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">C. Faktor Resiko Infeksi</td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Mayor</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->mayor == 'Ibu Demam >= 38°C')
                                                <input class="form-check-input" type="checkbox" name="mayor" id="mayor"
                                                    value="Ibu Demam >= 38°C" checked>
                                                <label class="form-check-label">Ibu Demam ≥ 38°C </label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="mayor" id="mayor"
                                                    value="Ibu Demam >= 38°C ">
                                                <label class="form-check-label">Ibu Demam ≥ 38°C </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->mayor1 == 'KPD > 24 Jam')
                                                <input class="form-check-input" type="checkbox" name="mayor1"
                                                    id="mayor1" value="KPD > 24 Jam" checked>
                                                <label class="form-check-label">KPD > 24 Jam</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="mayor1"
                                                    id="mayor1" value="KPD > 24 Jam">
                                                <label class="form-check-label">KPD > 24 Jam</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->mayor2 == 'Ketubah Hujau')
                                                <input class="form-check-input" type="checkbox" name="mayor2"
                                                    id="mayor2" value="Ketubah Hujau" checked>
                                                <label class="form-check-label">Ketubah Hujau</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="mayor2"
                                                    id="mayor2" value="Ketubah Hujau">
                                                <label class="form-check-label">Ketubah Hujau</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->mayor3 == 'Korioamniotis')
                                                <input class="form-check-input" type="checkbox" name="mayor3"
                                                    id="mayor3" value="Korioamniotis" checked>
                                                <label class="form-check-label">Korioamniotis</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="mayor3"
                                                    id="mayor3" value="Korioamniotis">
                                                <label class="form-check-label">Korioamniotis</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->mayor4 == 'Fetal Distres')
                                                <input class="form-check-input" type="checkbox" name="mayor4"
                                                    id="mayor4" value="Fetal Distres" checked>
                                                <label class="form-check-label">Fetal Distres</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="mayor4"
                                                    id="mayor4" value="Fetal Distres">
                                                <label class="form-check-label">Fetal Distres</label>
                                                @endif

                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Minor</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->minor == 'KPD < 12 Jam')
                                                    <input class="form-check-input" type="checkbox" name="minor" id="minor"
                                                    value="KPD < 12 Jam " checked>
                                                    <label class="form-check-label">KPD < 12 Jam </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="minor"
                                                                id="minor" value="KPD < 12 Jam ">
                                                            <label class="form-check-label">KPD < 12 Jam </label>
                                                                    @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->minor1 == 'Asfiksia')
                                                <input class="form-check-input" type="checkbox" name="minor1"
                                                    id="minor1" value="Asfiksia" checked>
                                                <label class="form-check-label">Asfiksia</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="minor1"
                                                    id="minor1" value="Asfiksia">
                                                <label class="form-check-label">Asfiksia</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->minor2 == 'BBLR')
                                                <input class="form-check-input" type="checkbox" name="minor2"
                                                    id="minor2" value="BBLR" checked>
                                                <label class="form-check-label">BBLR</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="minor2"
                                                    id="minor2" value="BBLR">
                                                <label class="form-check-label">BBLR</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->minor3 == 'ISK')
                                                <input class="form-check-input" type="checkbox" name="minor3"
                                                    id="minor3" value="ISK" checked>
                                                <label class="form-check-label">ISK</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="minor3"
                                                    id="minor3" value="ISK">
                                                <label class="form-check-label">ISK</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->minor4 == 'UK < 37 mg')
                                                    <input class="form-check-input" type="checkbox" name="minor4"
                                                    id="minor4" value="UK <  37 mg" checked>
                                                    <label class="form-check-label">UK < 37 mg</label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="minor4"
                                                                id="minor4" value="UK <  37 mg">
                                                            <label class="form-check-label">UK < 37 mg</label>
                                                                    @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->minor5 == 'Gemeli')
                                                <input class="form-check-input" type="checkbox" name="minor5"
                                                    id="minor5" value="Gemeli" checked>
                                                <label class="form-check-label">Gemeli</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="minor5"
                                                    id="minor5" value="Gemeli">
                                                <label class="form-check-label">Gemeli</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->minor6 == 'Keputihan')
                                                <input class="form-check-input" type="checkbox" name="minor6"
                                                    id="minor6" value="Keputihan" checked>
                                                <label class="form-check-label">Keputihan</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="minor6"
                                                    id="minor6" value="Keputihan">
                                                <label class="form-check-label">Keputihan</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->minor7 == 'Ibu Temperatur > 37°C')
                                                <input class="form-check-input" type="checkbox" name="minor7"
                                                    id="minor7" value="Ibu Temperatur > 37°C " checked>
                                                <label class="form-check-label">Ibu Temperatur > 37°C </label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="minor7"
                                                    id="minor7" value="Ibu Temperatur > 37°C ">
                                                <label class="form-check-label">Ibu Temperatur > 37°C </label>
                                                @endif

                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">d. Kebutuhan Biologis</td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Nutrisi</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->nutrisi == 'ASI')
                                                <input class="form-check-input" type="checkbox" name="nutrisi"
                                                    id="nutrisi" value="ASI" checked>
                                                <label class="form-check-label">ASI</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="nutrisi"
                                                    id="nutrisi" value="ASI">
                                                <label class="form-check-label">ASI</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="Lainya" type="input"
                                                    name="nutrisi1" id="nutrisi1" value="{{$assesper[0]->nutrisi1}}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="Frekuensi ........ cc"
                                                    type="input" name="frekuensi" id="frekuensi"
                                                    value="{{$assesper[0]->frekuensi}}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="........c" type="input"
                                                    name="frekuensi1" id="frekuensi1"
                                                    value="{{$assesper[0]->frekuensi1}}">
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Eliminasi</td>
                                <td>
                                    <div class="row">

                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="BAK" type="input" name="bak"
                                                    id="bak" value="{{$assesper[0]->bak}}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="keluhan" type="input"
                                                    name="kelbak" id="kelbak" value="{{$assesper[0]->kelbak}}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->kelbak1 == 'tidak')
                                                <input class="form-check-input" type="checkbox" name="kelbak1"
                                                    id="kelbak1" value="tidak" checked>
                                                <label class="form-check-label">tidak</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="kelbak1"
                                                    id="kelbak1" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                                @endif

                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic"></td>
                                <td>
                                    <div class="row">

                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="BAB" type="input" name="BAB"
                                                    id="BAB" value="{{$assesper[0]->BAB}}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="keluhan" type="input"
                                                    name="kelbab" id="kelbab" value="{{$assesper[0]->kelbab}}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->kelbab1 == 'tidak')
                                                <input class="form-check-input" type="checkbox" name="kelbab1"
                                                    id="kelbab1" value="tidak" checked>
                                                <label class="form-check-label">tidak</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="kelbab1"
                                                    id="kelbab1" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                                @endif

                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">e. Alergi/Reaksi (Pada Orang Tua : Ayah/Ibu)</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->reaksi == 'ya')
                                                <input class="form-check-input" type="checkbox" name="reaksi"
                                                    id="reaksi" value="ya" checked>
                                                <label class="form-check-label">ya</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="reaksi"
                                                    id="reaksi" value="ya">
                                                <label class="form-check-label">ya</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->reaksi == 'tidak')
                                                <input class="form-check-input" type="checkbox" name="reaksi"
                                                    id="reaksi" value="tidak" checked>
                                                <label class="form-check-label">tidak</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="reaksi"
                                                    id="reaksi" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-control" placeholder="Sebutkan" type="input"
                                                    name="reaksii" id="reaksii" value="{{$assesper[0]->reaksii}}">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="accordion" id="accordionExample91">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne91" aria-expanded="true"
                                    aria-controls="collapseOne91">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> PSIKOSOSIAL, EKONOMI DAN SPIRITUAL
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne91" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample91">
                            <div class="card-body bg-light">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-bold font-italic">Kecemasan Orang Tua</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->kecemasan == 'Sedang')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kecemasan" id="kecemasan" value="Sedang" checked>
                                                            <label class="form-check-label">Sedang </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kecemasan" id="kecemasan" value="Sedang">
                                                            <label class="form-check-label">Sedang </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->kecemasan == 'Berat')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kecemasan" id="kecemasan" value="Berat" checked>
                                                            <label class="form-check-label">Berat </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kecemasan" id="kecemasan" value="Berat">
                                                            <label class="form-check-label">Berat </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->kecemasan == 'Panik')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kecemasan" id="kecemasan" value="Panik" checked>
                                                            <label class="form-check-label">Panik </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kecemasan" id="kecemasan" value="Panik">
                                                            <label class="form-check-label">Panik </label>
                                                            @endif

                                                        </div>
                                                    </div>



                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Koping Mekanisme Orang Tua</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->koping == 'Merusak Diri')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="koping" id="koping" value="Merusak Diri" checked>
                                                            <label class="form-check-label">Merusak Diri </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="koping" id="koping" value="Merusak Diri">
                                                            <label class="form-check-label">Merusak Diri </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->koping == 'Menarik Diri / Isolasi Sosial')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="koping" id="koping"
                                                                value="Menarik Diri / Isolasi Sosial" checked>
                                                            <label class="form-check-label">Menarik Diri / Isolasi
                                                                Sosial </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="koping" id="koping"
                                                                value="Menarik Diri / Isolasi Sosial">
                                                            <label class="form-check-label">Menarik Diri / Isolasi
                                                                Sosial </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->koping == 'Perilaku Kekerasan')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="koping" id="koping" value="Perilaku Kekerasan"
                                                                checked>
                                                            <label class="form-check-label">Perilaku Kekerasan </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="koping" id="koping" value="Perilaku Kekerasan">
                                                            <label class="form-check-label">Perilaku Kekerasan </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Pekerjaan Orang Tua</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="pekerjaan" id="pekerjaan" value="Pelajar">
                                                            <label class="form-check-label">Pelajar </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="pekerjaan" id="pekerjaan" value="PNS">
                                                            <label class="form-check-label">PNS </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="pekerjaan" id="pekerjaan" value="Pekerja Swasta">
                                                            <label class="form-check-label">Pekerja Swasta </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="pekerjaan" id="pekerjaan" value="lain-lain">
                                                            <label class="form-check-label">lain-lain </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Agama orang Tua</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="agama"
                                                                id="agama" value="Islam">
                                                            <label class="form-check-label">Islam </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="agama"
                                                                id="agama" value="Kristen">
                                                            <label class="form-check-label">Kristen </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="agama"
                                                                id="agama" value="Hindu">
                                                            <label class="form-check-label">Hindu </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="agama"
                                                                id="agama" value="Budha">
                                                            <label class="form-check-label">Budha </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="agama"
                                                                id="agama" value="Katolik">
                                                            <label class="form-check-label">Katolik </label>
                                                        </div>
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
                <div class="accordion" id="accordionExample100">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne100" aria-expanded="true"
                                    aria-controls="collapseOne100">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> SKRINING RESIKO JATUH
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne100" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample100">
                            <div class="card-body bg-light">
                                <h4 class="text-bold">PENGKAJIAN NYERI</h4>
                                <table class="table">
                                    <thead>
                                        <th class="text-bold float-center">Penilaian</th>
                                        <th class="text-bold float-center">0</th>
                                        <th class="text-bold float-center">1</th>
                                        <th class="text-bold float-center">2</th>
                                        <th class="text-bold float-center">Nilai</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-bold">Crying</td>
                                            <td>Tidak ada tangisan / tangisan tidak melengking</td>
                                            <td>Tangisan melengking tetapi bayi mudah dihibur</td>
                                            <td>Tangisan melengking tetapi bayi tidak mudah dihibur</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="cryingvalue" id="cryingvalue"
                                                        value="{{$assesper[0]->cryingvalue}}" class="form-control"
                                                        min="0" placeholder="Enter first value" required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold">Requires</td>
                                            <td>Tidak perlu oksigen</td>
                                            <td>Tangisan melengking tetapi bayi mudah dihibur</td>
                                            <td>Perlu oksigen ≤ 30%</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="requiresvalue" id="requiresvalue"
                                                        class="form-control" value="{{$assesper[0]->requiresvalue}}"
                                                        min="0" placeholder="Enter first value" required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold">Increased</td>
                                            <td>Detak jantung dan tekanan darah tidak berubah atau kurang dari nilai
                                                base line</td>
                                            <td>Detak jantung atau tekanan darah meningkat, tetapi peningkatan ≤ 20%
                                            </td>
                                            <td>Detak jantung atau tekanan darah meningkat ≥ 20% dari nilai base line
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="increasedvalue" id="increasedvalue"
                                                        class="form-control" value="{{$assesper[0]->increasedvalue}}"
                                                        min="0" placeholder="Enter first value" required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold">Expression</td>
                                            <td>Tidak ada seringai</td>
                                            <td>Seringai ada</td>
                                            <td>Seringai ada dan tidak ada suara tangisan dengkur</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="expressionvalue" id="expressionvalue"
                                                        class="form-control" value="{{$assesper[0]->expressionvalue}}"
                                                        min="0" placeholder="Enter first value" required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold">Sleepless</td>
                                            <td>Bayi secara terus menerus tidur</td>
                                            <td>Bayi terbangun pada interval berulang</td>
                                            <td>Bayi terjaga, terbangun secara terus menerus</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="sleeplessvalue" id="sleeplessvalue"
                                                        value="{{$assesper[0]->sleeplessvalue}}" class="form-control"
                                                        min="0" placeholder="Enter first value" required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="float-right"> Total Score</td>

                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="totalnyeri" id="totalnyeri"
                                                        class="form-control" value="{{$assesper[0]->totalnyeri}}"
                                                        readonly />
                                                </div>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample101">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne101" aria-expanded="true"
                                    aria-controls="collapseOne101">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> SKRINING GIZI NEONATUS PEDIATRIC
                                    YORKHILL MALNUTRITION SCORE (PYMS)
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne101" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample101">
                            <div class="card-body bg-light">
                                <h4 class="text-bold">PENGKAJIAN NYERI</h4>
                                <table class="table">
                                    <thead>
                                        <th class="text-bold float-center">KRITERIA</th>
                                        <th class="text-bold float-center">0</th>
                                        <th class="text-bold float-center">2</th>
                                        <th class="text-bold float-center">SKOR</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Status Antropometri BB/PB</td>
                                            <td>> (-2 SD) </td>
                                            <td>
                                                < (-2 SD) </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="bbvalue" id="bbvalue"
                                                        value="{{$assesper[0]->pbvalue}}" class="form-control" min="0"
                                                        placeholder="Enter first value" required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Kehilangan atau penurunan berat badan akhir-akhir ini</td>
                                            <td>Tidak ada </td>
                                            <td>ada</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="pbvalue" id="pbvalue"
                                                        value="{{$assesper[0]->pbvalue}}" class="form-control" min="0"
                                                        placeholder="Enter first value" required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Asupan makanan dalam mingi terakhir</td>
                                            <td>Makanan seperti biasa </td>
                                            <td>Ada penurunan</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="mingivalue" id="mingivalue"
                                                        value="{{$assesper[0]->mingivalue}}" class="form-control"
                                                        min="0" placeholder="Enter first value" required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Anak sakit berat *</td>
                                            <td>Tidak </td>
                                            <td>ada</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="sakitvalue" id="sakitvalue"
                                                        value="{{$assesper[0]->sakitvalue}}" class="form-control"
                                                        min="0" placeholder="Enter first value" required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td> </td>
                                            <td>Total score</td>
                                            <td>
                                                <div class="form-group">
                                                    <input readonly type="number" name="totalgizi" id="totalgizi"
                                                        value="{{$assesper[0]->totalgizi}}" class="form-control" min="0"
                                                        placeholder="Enter first value" required />
                                                </div>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="accordion" id="accordionExample94">
    <div class="card">
        <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
            <h2 class="mb-0">
                <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse"
                    data-target="#collapseOne94" aria-expanded="true" aria-controls="collapseOne94">
                    <i class="bi bi-book mr-1 ml-1"></i>(A) ASSESMEN
                </button>
            </h2>
        </div>

        <div id="collapseOne94" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample94">
            <div class="card-body bg-light">
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-bold font-italic">Diagnosa Kebidanan</td>

                            <td>
                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-sm-12">

                                            <div class="form-group">
                                                <div class="form-check">
                                                    @if($assesper[0]->diagnosakebidananbayi == 'Aktual / Risiko bersihan jalan nafas tidak efektif')
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan" id="diagnosakebidanan"
                                                        value="Aktual / Risiko bersihan jalan nafas tidak efektif"
                                                        checked>
                                                    <label class="form-check-label">Aktual / Risiko bersihan jalan nafas
                                                        tidak efektif</label>
                                                    @else
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan" id="diagnosakebidanan"
                                                        value="Aktual / Risiko bersihan jalan nafas tidak efektif">
                                                    <label class="form-check-label">Aktual / Risiko bersihan jalan nafas
                                                        tidak efektif</label>
                                                    @endif

                                                </div>
                                                <div class="form-check">
                                                    @if($assesper[0]->diagnosakebidanan1 == 'Aktual / Risiko pola nafas tidak efektif')
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan1" id="diagnosakebidanan1"
                                                        value="Aktual / Risiko pola nafas tidak efektif" checked>
                                                    <label class="form-check-label">Aktual / Risiko pola nafas tidak
                                                        efektif</label>
                                                    @else
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan1" id="diagnosakebidanan1"
                                                        value="Aktual / Risiko pola nafas tidak efektif">
                                                    <label class="form-check-label">Aktual / Risiko pola nafas tidak
                                                        efektif</label>
                                                    @endif

                                                </div>
                                                <div class="form-check">
                                                    @if($assesper[0]->diagnosakebidanan2 == 'Aktual / Risiko gangguan pertukaran gas')
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan2" id="diagnosakebidanan2"
                                                        value="Aktual / Risiko gangguan pertukaran gas" checked>
                                                    <label class="form-check-label">Aktual / Risiko gangguan pertukaran
                                                        gas</label>
                                                    @else
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan2" id="diagnosakebidanan2"
                                                        value="Aktual / Risiko gangguan pertukaran gas">
                                                    <label class="form-check-label">Aktual / Risiko gangguan pertukaran
                                                        gas</label>
                                                    @endif
                                                </div>
                                                <div class="form-check">
                                                    @if($assesper[0]->diagnosakebidanan3 == 'Aktual / Risiko gangguan sirkulasi')
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan3" id="diagnosakebidanan3"
                                                        value="Aktual / Risiko gangguan sirkulasi" checked>
                                                    <label class="form-check-label">Aktual / Risiko gangguan
                                                        sirkulasi</label>
                                                    @else
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan3" id="diagnosakebidanan3"
                                                        value="Aktual / Risiko gangguan sirkulasi">
                                                    <label class="form-check-label">Aktual / Risiko gangguan
                                                        sirkulasi</label>
                                                    @endif

                                                </div>
                                                <div class="form-check">
                                                    @if($assesper[0]->diagnosakebidanan4 == 'Aktual / Risiko gangguan perfusi jaringan / cerebral')
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan4" id="diagnosakebidanan4"
                                                        value="Aktual / Risiko gangguan perfusi jaringan / cerebral "
                                                        checked>
                                                    <label class="form-check-label">Aktual / Risiko gangguan perfusi
                                                        jaringan / cerebral </label>
                                                    @else
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan4" id="diagnosakebidanan4"
                                                        value="Aktual / Risiko gangguan perfusi jaringan / cerebral ">
                                                    <label class="form-check-label">Aktual / Risiko gangguan perfusi
                                                        jaringan / cerebral </label>
                                                    @endif
                                                </div>
                                                <div class="form-check">
                                                    @if($assesper[0]->diagnosakebidanan5 == 'Hipertermia')
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan5" id="diagnosakebidanan5"
                                                        value="Hipertermia" checked>
                                                    <label class="form-check-label">Hipertermia </label>
                                                    @else
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan5" id="diagnosakebidanan5"
                                                        value="Hipertermia">
                                                    <label class="form-check-label">Hipertermia </label>
                                                    @endif

                                                </div>
                                                <div class="form-check">
                                                    @if($assesper[0]->diagnosakebidanan6 == 'Aktual / Risiko gangguan keseimbangan cairan')
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan6" id="diagnosakebidanan6"
                                                        value="Aktual / Risiko gangguan keseimbangan cairan" checked>
                                                    <label class="form-check-label">Aktual / Risiko gangguan
                                                        keseimbangan cairan </label>
                                                    @else
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan6" id="diagnosakebidanan6"
                                                        value="Aktual / Risiko gangguan keseimbangan cairan">
                                                    <label class="form-check-label">Aktual / Risiko gangguan
                                                        keseimbangan cairan </label>
                                                    @endif

                                                </div>
                                                <div class="form-check">
                                                    @if($assesper[0]->diagnosakebidanan7 == 'Aktual / Risiko gangguan integritas kulit')
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan7" id="diagnosakebidanan7"
                                                        value="Aktual / Risiko gangguan integritas kulit" checked>
                                                    <label class="form-check-label">Aktual / Risiko gangguan
                                                        integritas kulit </label>
                                                    @else
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan7" id="diagnosakebidanan7"
                                                        value="Aktual / Risiko gangguan integritas kulit">
                                                    <label class="form-check-label">Aktual / Risiko gangguan
                                                        integritas kulit </label>
                                                    @endif

                                                </div>
                                                <div class="form-check">
                                                    @if($assesper[0]->diagnosakebidanan8 == 'Aktual / Risiko cemas / takut')
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan8" id="diagnosakebidanan8"
                                                        value="Aktual / Risiko cemas / takut" checked>
                                                    <label class="form-check-label">Aktual / Risiko cemas / takut
                                                    </label>
                                                    @else
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan8" id="diagnosakebidanan8"
                                                        value="Aktual / Risiko cemas / takut">
                                                    <label class="form-check-label">Aktual / Risiko cemas / takut
                                                    </label>
                                                    @endif

                                                </div>
                                                <div class="form-check">
                                                    @if($assesper[0]->diagnosakebidanan9 == 'Risiko penyebaran toksik')
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan9" id="diagnosakebidanan9"
                                                        value="Risiko penyebaran toksik" checked>
                                                    <label class="form-check-label">Risiko penyebaran toksik
                                                    </label>
                                                    @else
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan9" id="diagnosakebidanan9"
                                                        value="Risiko penyebaran toksik">
                                                    <label class="form-check-label">Risiko penyebaran toksik
                                                    </label>
                                                    @endif

                                                </div>
                                                <div class="form-check">
                                                    @if($assesper[0]->diagnosakebidanan10 == 'risiko jatuh / cedera')
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan10" id="diagnosakebidanan10"
                                                        value="risiko jatuh / cedera" checked>
                                                    <label class="form-check-label">risiko jatuh / cedera</label>
                                                    @else
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan10" id="diagnosakebidanan10"
                                                        value="risiko jatuh / cedera">
                                                    <label class="form-check-label">risiko jatuh / cedera</label>
                                                    @endif

                                                </div>
                                                <div class="form-check">
                                                    @if($assesper[0]->diagnosakebidanan11 == 'nyeri')
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan11" id="diagnosakebidanan11"
                                                        value="nyeri" checked>
                                                    <label class="form-check-label">nyeri</label>
                                                    @else
                                                    <input class="form-check-input" type="checkbox"
                                                        name="diagnosakebidanan11" id="diagnosakebidanan11"
                                                        value="nyeri">
                                                    <label class="form-check-label">nyeri</label>
                                                    @endif

                                                </div>
                                                <textarea class="form-control" id="diagnosakebidanan12"
                                                    name="diagnosakebidanan12" rows="2"
                                                    placeholder="">{{$assesper[0]->diagnosakebidanan12}}</textarea>

                                            </div>
                                        </div>

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
<div class="accordion" id="accordionExample95">
    <div class="card">
        <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
            <h2 class="mb-0">
                <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse"
                    data-target="#collapseOne95" aria-expanded="true" aria-controls="collapseOne95">
                    <i class="bi bi-book mr-1 ml-1"></i> (P) PLANNING
                </button>
            </h2>
        </div>

        <div id="collapseOne95" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample95">
            <div class="card-body bg-light">
                <table class="table">
                    <tbody>

                        <tr>
                            <td class="text-bold font-italic">Rencana Asuhan Kebidanan</td>
                            <td>
                                <div class="input-group">
                                    <textarea class="form-control" id="planning" name="planning"
                                        placeholder="">{{$assesper[0]->rencanaasuhan}}</textarea>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Tindakan Kebidanan dan Evaluasi</td>
                            <td>
                                <div class="input-group">
                                    <textarea class="form-control" id="tindakan" name="tindakan"
                                        placeholder="">{{$assesper[0]->tindakan}}</textarea>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">KOLABORASI </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            @if($assesper[0]->kolaborasi1 == 'Infus/ IVFD')
                                            <input class="form-check-input" type="checkbox" name="kolaborasi1"
                                                id="kolaborasi1" value="Infus/ IVFD" checked>
                                            <label class="form-check-label">Infus/ IVFD </label>
                                            @else
                                            <input class="form-check-input" type="checkbox" name="kolaborasi1"
                                                id="kolaborasi1" value="Infus/ IVFD">
                                            <label class="form-check-label">Infus/ IVFD </label>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            @if($assesper[0]->kolaborasi2 == 'Oksigenasi')
                                            <input class="form-check-input" type="checkbox" name="kolaborasi2"
                                                id="kolaborasi2" value="Oksigenasi" checked>
                                            <label class="form-check-label">Oksigenasi </label>
                                            @else
                                            <input class="form-check-input" type="checkbox" name="kolaborasi2"
                                                id="kolaborasi2" value="Oksigenasi">
                                            <label class="form-check-label">Oksigenasi </label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            @if($assesper[0]->kolaborasi3 == 'NGT')
                                            <input class="form-check-input" type="checkbox" name="kolaborasi3"
                                                id="kolaborasi3" value="NGT" checked>
                                            <label class="form-check-label">NGT </label>
                                            @else
                                            <input class="form-check-input" type="checkbox" name="kolaborasi3"
                                                id="kolaborasi3" value="NGT">
                                            <label class="form-check-label">NGT </label>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            @if($assesper[0]->kolaborasi4 == 'Defibrilasi')
                                            <input class="form-check-input" type="checkbox" name="kolaborasi4"
                                                id="kolaborasi4" value="Defibrilasi" checked>
                                            <label class="form-check-label">Defibrilasi </label>
                                            @else
                                            <input class="form-check-input" type="checkbox" name="kolaborasi4"
                                                id="kolaborasi4" value="Defibrilasi">
                                            <label class="form-check-label">Defibrilasi </label>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            @if($assesper[0]->kolaborasi5 == 'Suction')
                                            <input class="form-check-input" type="checkbox" name="kolaborasi5"
                                                id="kolaborasi5" value="Suction" checked>
                                            <label class="form-check-label">Suction </label>
                                            @else
                                            <input class="form-check-input" type="checkbox" name="kolaborasi5"
                                                id="kolaborasi5" value="Suction">
                                            <label class="form-check-label">Suction </label>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            @if($assesper[0]->kolaborasi6 == 'LAB')
                                            <input class="form-check-input" type="checkbox" name="kolaborasi6"
                                                id="kolaborasi6" value="LAB" checked>
                                            <label class="form-check-label">LAB </label>
                                            @else
                                            <input class="form-check-input" type="checkbox" name="kolaborasi6"
                                                id="kolaborasi6" value="LAB">
                                            <label class="form-check-label">LAB </label>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            @if($assesper[0]->kolaborasi7 == 'Nebulizer')
                                            <input class="form-check-input" type="checkbox" name="kolaborasi7"
                                                id="kolaborasi7" value="Nebulizer" checked>
                                            <label class="form-check-label">Nebulizer </label>
                                            @else
                                            <input class="form-check-input" type="checkbox" name="kolaborasi7"
                                                id="kolaborasi7" value="Nebulizer">
                                            <label class="form-check-label">Nebulizer </label>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            @if($assesper[0]->kolaborasi8 == 'Mengumbah lambung')
                                            <input class="form-check-input" type="checkbox" name="kolaborasi8"
                                                id="kolaborasi8" value="Mengumbah lambung" checked>
                                            <label class="form-check-label">Mengumbah lambung </label>
                                            @else
                                            <input class="form-check-input" type="checkbox" name="kolaborasi8"
                                                id="kolaborasi8" value="Mengumbah lambung">
                                            <label class="form-check-label">Mengumbah lambung </label>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            @if($assesper[0]->kolaborasi9 == 'Mayo')
                                            <input class="form-check-input" type="checkbox" name="kolaborasi9"
                                                id="kolaborasi9" value="Mayo" checked>
                                            <label class="form-check-label">Mayo </label>
                                            @else
                                            <input class="form-check-input" type="checkbox" name="kolaborasi9"
                                                id="kolaborasi9" value="Mayo">
                                            <label class="form-check-label">Mayo </label>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            @if($assesper[0]->kolaborasi10 == 'Explorasi / Irigasi')
                                            <input class="form-check-input" type="checkbox" name="kolaborasi10"
                                                id="kolaborasi10" value="Explorasi / Irigasi" checked>
                                            <label class="form-check-label">Explorasi / Irigasi </label>
                                            @else
                                            <input class="form-check-input" type="checkbox" name="kolaborasi10"
                                                id="kolaborasi10" value="Explorasi / Irigasi">
                                            <label class="form-check-label">Explorasi / Irigasi </label>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            @if($assesper[0]->kolaborasi11 == 'EKG')
                                            <input class="form-check-input" type="checkbox" name="kolaborasi11"
                                                id="kolaborasi11" value="EKG" checked>
                                            <label class="form-check-label">EKG </label>
                                            @else
                                            <input class="form-check-input" type="checkbox" name="kolaborasi11"
                                                id="kolaborasi11" value="EKG">
                                            <label class="form-check-label">EKG </label>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            @if($assesper[0]->kolaborasi12 == 'Saturasi Oksigen')
                                            <input class="form-check-input" type="checkbox" name="kolaborasi12"
                                                id="kolaborasi12" value="Saturasi Oksigen" checked>
                                            <label class="form-check-label">Saturasi Oksigen </label>
                                            @else
                                            <input class="form-check-input" type="checkbox" name="kolaborasi12"
                                                id="kolaborasi12" value="Saturasi Oksigen">
                                            <label class="form-check-label">Saturasi Oksigen </label>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            @if($assesper[0]->kolaborasi13 == 'Kateter')
                                            <input class="form-check-input" type="checkbox" name="kolaborasi13"
                                                id="kolaborasi13" value="Kateter" checked>
                                            <label class="form-check-label">Kateter </label>
                                            @else
                                            <input class="form-check-input" type="checkbox" name="kolaborasi13"
                                                id="kolaborasi13" value="Kateter">
                                            <label class="form-check-label">Kateter </label>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            @if($assesper[0]->kolaborasi14 == 'ETT')
                                            <input class="form-check-input" type="checkbox" name="kolaborasi14"
                                                id="kolaborasi14" value="ETT" checked>
                                            <label class="form-check-label">ETT </label>
                                            @else
                                            <input class="form-check-input" type="checkbox" name="kolaborasi14"
                                                id="kolaborasi14" value="ETT">
                                            <label class="form-check-label">ETT </label>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            @if($assesper[0]->kolaborasi15 == 'Obat')
                                            <input class="form-check-input" type="checkbox" name="kolaborasi15"
                                                id="kolaborasi15" value="Obat" checked>
                                            <label class="form-check-label">Obat </label>
                                            @else
                                            <input class="form-check-input" type="checkbox" name="kolaborasi15"
                                                id="kolaborasi15" value="Obat">
                                            <label class="form-check-label">Obat </label>
                                            @endif

                                        </div>
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
<div class="accordion" id="accordionExample912">
    <div class="card">
        <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
            <h2 class="mb-0">
                <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse"
                    data-target="#collapseOne12" aria-expanded="true" aria-controls="collapseOne12">
                    <i class="bi bi-book mr-1 ml-1"></i>(I) IMPLEMENTATION
                </button>
            </h2>
        </div>

        <div id="collapseOne12" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample912">
            <div class="card-body bg-light">
                <table class="table">
                    <tbody>

                        <tr>
                            <td class="text-bold font-italic">TINDAKAN KEPERAWATAN</td>
                            <td>
                                <form id="dynamic-form" class="formtindakankebidanan">
                                    <h5>Klik Tombol Tambah untuk menambahkan Tindakan
                                    </h5>

                                    <div class="field_wrapperrrr">
                                        <div class="row mt-2">


                                            <div class="col-md-2">
                                                <a class="btn btn-success" href="javascript:void(0);" id="add_buttonnn"
                                                    title="Add field">TAMBAH</a>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                                 <table class="table">
                                    <thead>
                                        <th>WAKTU</th>
                                        <th>TINDAKAN</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($tindakan as $ti => $t)
                                        <tr>
                                            <td class="wtt">{{$t->waktu_tindakan}} </td>
                                            <td class="tindakan"> {{$t->tindakan_keperawatan}} </td>
                                            <td class="idtindakan" hidden> {{$t->id}}</td>
                                            <td> <a class=" btn btn-danger btn-sm returtinper" href="#">
                                                    <i class="fas fa-sync-alt fa-spin"></i>
                                                    RETUR
                                                </a></td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </td>

                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


<div type="button" class="btn float-right btn-success updateassesbidanbayi ml-2" style="margin-top: 20px;">
    UPDATE
</div>
<div type="button" class="btn btn-info float-right validasiassesbidanbayi" style="margin-top: 20px;">
    VALIDASI
</div>
@endif
<script>
    $(function() {
        $(' #cryingvalue, #requiresvalue, #increasedvalue, #expressionvalue, #sleeplessvalue ').keyup(function() {
            var cryingvalue = parseFloat($(' #cryingvalue').val()) || 0;
            var requiresvalue = parseFloat($('#requiresvalue').val()) || 0;
            var increasedvalue = parseFloat($('#increasedvalue').val()) || 0;
            var expressionvalue = parseFloat($('#expressionvalue').val()) || 0;
            var sleeplessvalue = parseFloat($('#sleeplessvalue').val()) || 0;



            $('#totalnyeri').val(cryingvalue + requiresvalue + increasedvalue + expressionvalue + sleeplessvalue);
        });
    });
    $(function() {
        $('#bbvalue, #pbvalue, #mingivalue, #sakitvalue ').keyup(function() {
            var bbvalue = parseFloat($(' #bbvalue').val()) || 0;
            var pbvalue = parseFloat($('#pbvalue').val()) || 0;
            var mingivalue = parseFloat($('#mingivalue').val()) || 0;
            var sakitvalue = parseFloat($('#sakitvalue').val()) || 0;



            $('#totalgizi').val(bbvalue + pbvalue + mingivalue + sakitvalue);
        });
    });

    $(document).ready(function() {
        var maxField = 100; //Input fields increment limitation
        var addButton = $('#add_buttonnn'); //Add button selector
        var wrapper = $('.field_wrapperrrr'); //Input field wrapper
        var fieldHTML = '<div class="row mt-2">';
        fieldHTML = fieldHTML + '   <div class="col-4"><div class="form-group"><label for="name">Jam Tindakan:</label><input type="time" name="jam_tindakan" id="jam_tindakan" value="" class="obat form-control"></div></div>';
        fieldHTML = fieldHTML + ' <div class="col-4"><div class="form-group"><label for="name">Tindakan :</label><input type="text" name="tindakan_kebidanan" id="tindakan_kebidanan" value="" class="dss form-control"></div></div>';

        fieldHTML = fieldHTML + '<div class="col-md-2"><a href="javascript:void(0);" class="remove_button btn btn-danger">HAPUS</a></div>';
        fieldHTML = fieldHTML + '</div></div>';
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function() {
            //Check maximum number of input fields
            if (x < maxField) {
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e) {
            e.preventDefault();
            $(this).parent('').parent('').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });


    $(".simpanassesbidanbayi").click(function() {
        var tindakankebidanan = $('.formtindakankebidanan').serializeArray();
        var anamnesis_triase_bidan = $('#anamnesis_triase_bidan').val()
        var diagnosa_triase_bidan = $('#diagnosa_triase_bidan').val()
        var asal_rujukan = $('#asal_rujukan').val()


        var norm = $('#norm').val()
        var kj = $('#kj').val()
        var tglmasuk = $('#tglmasuk').val()
        var sumberdata = $('#sumberdata:checked').val()
        var asalmasuk = $('#asalmasuk:checked').val()
        var caramasuk = $('#caramasuk:checked').val()
        var subyek = $('#anamnesis').val()
        var keadaanumum = $('#keadaanumum:checked').val()
        var kesadaran = $('#kesadaran:checked').val()
        var skor_afgar_1 = $('#skor_afgar_1').val()
        
        var frekuensinadi = $('#frekuensinadi').val()
        var frekuensinafas = $('#frekuensinafas').val()
        var suhutubuh = $('#suhutubuh').val()
        var beratbadan = $('#beratbadan').val()
        var tb = $('#tb').val()
        var gcs = $('#gcs').val()
        var spo2 = $('#SPO2').val()
        var anake = $('#anake').val()
        var riwayatpenyakitibu = $('#riwayatpenyakitibu:checked').val()
        var riwayatpenyakitibu1 = $('#riwayatpenyakitibu1:checked').val()
        var riwayatpenyakitibu2 = $('#riwayatpenyakitibu2:checked').val()
        var riwayatpenyakitibu3 = $('#riwayatpenyakitibu3:checked').val()
        var riwayatpenyakitibu4 = $('#riwayatpenyakitibu4:checked').val()
        var riwayatpenyakitibu5 = $('#riwayatpenyakitibu5:checked').val()
        var riwayatpenyakitibu6 = $('#riwayatpenyakitibu6:checked').val()
        var riwayatpenyakitibu7 = $('#riwayatpenyakitibu7').val()
        var rpengoibu = $('#rpengoibu').val()
        var rintra = $('#rintra').val()
        var rintratgl = $('#rintratgl').val()
        var rintrawkt = $('#rintrawkt').val()
        var rintrakon = $('#rintrakon').val()
        var apgarscore = $('#apgarscore').val()
        var carrapersalinan = $('#carrapersalinan:checked').val()
        var carrapersalinan1 = $('#carrapersalinan1:checked').val()
        var carrapersalinan2 = $('#carrapersalinan2:checked').val()
        var carrapersalinan3 = $('#carrapersalinan3:checked').val()
        var carrapersalinan4 = $('#carrapersalinan4').val()
        var carrapersalinanltk = $('#carrapersalinanltk').val()

        var talipusat = $('#talipusat:checked').val()
        var talipusat1 = $('#talipusat1:checked').val()
        var talipusat2 = $('#talipusat2:checked').val()
        var mayor = $('#mayor:checked').val()
        var mayor1 = $('#mayor1:checked').val()
        var mayor2 = $('#mayor2:checked').val()
        var mayor3 = $('#mayor3:checked').val()
        var mayor4 = $('#mayor4:checked').val()
        var minor = $('#minor:checked').val()
        var minor1 = $('#minor1:checked').val()
        var minor2 = $('#minor2:checked').val()
        var minor3 = $('#minor3:checked').val()
        var minor4 = $('#minor4:checked').val()
        var minor5 = $('#minor5:checked').val()
        var minor6 = $('#minor6:checked').val()
        var minor7 = $('#minor7:checked').val()
        var nutrisi = $('#nutrisi:checked').val()
        var nutrisi1 = $('#nutrisi1').val()
        var frekuensi = $('#frekuensi').val()
        var frekuensi1 = $('#frekuensi1').val()
        var bak = $('#bak').val()
        var kelbak = $('#kelbak').val()
        var kelbak1 = $('#kelbak1:checked').val()
        var BAB = $('#BAB').val()
        var kelbab = $('#kelbab').val()
        var kelbab1 = $('#kelbab1:checked').val()
        var reaksii = $('#reaksii').val()
        var reaksi = $('#reaksi:checked').val()
        var kecemasan = $('#kecemasan:checked').val()
        var koping = $('#koping:checked').val()
        var pekerjaan = $('#pekerjaan:checked').val()
        var agama = $('#agama:checked').val()
        var cryingvalue = $('#cryingvalue').val()
        var requiresvalue = $('#requiresvalue').val()
        var increasedvalue = $('#increasedvalue').val()
        var expressionvalue = $('#expressionvalue').val()
        var sleeplessvalue = $('#sleeplessvalue').val()
        var totalnyeri = $('#totalnyeri').val()
        var pbvalue = $('#pbvalue').val()
        var mingivalue = $('#mingivalue').val()
        var sakitvalue = $('#sakitvalue').val()
        var totalgizi = $('#totalgizi').val()
        var diagnosakebidanan = $('#diagnosakebidanan:checked').val()
        var diagnosakebidanan1 = $('#diagnosakebidanan1:checked').val()
        var diagnosakebidanan2 = $('#diagnosakebidanan2:checked').val()
        var diagnosakebidanan3 = $('#diagnosakebidanan3:checked').val()
        var diagnosakebidanan4 = $('#diagnosakebidanan4:checked').val()
        var diagnosakebidanan5 = $('#diagnosakebidanan5:checked').val()
        var diagnosakebidanan6 = $('#diagnosakebidanan6:checked').val()
        var diagnosakebidanan7 = $('#diagnosakebidanan7:checked').val()
        var diagnosakebidanan8 = $('#diagnosakebidanan8:checked').val()
        var diagnosakebidanan9 = $('#diagnosakebidanan9:checked').val()
        var diagnosakebidanan10 = $('#diagnosakebidanan10:checked').val()
        var diagnosakebidanan11 = $('#diagnosakebidanan11:checked').val()
        var diagnosakebidanan12 = $('#diagnosakebidanan12').val()
        var kolaborasi1 = $('#kolaborasi1:checked').val()
        var kolaborasi2 = $('#kolaborasi2:checked').val()
        var kolaborasi3 = $('#kolaborasi3:checked').val()
        var kolaborasi4 = $('#kolaborasi4:checked').val()
        var kolaborasi5 = $('#kolaborasi5:checked').val()
        var kolaborasi6 = $('#kolaborasi6:checked').val()
        var kolaborasi7 = $('#kolaborasi7:checked').val()
        var kolaborasi8 = $('#kolaborasi8:checked').val()
        var kolaborasi9 = $('#kolaborasi9:checked').val()
        var kolaborasi10 = $('#kolaborasi10:checked').val()
        var kolaborasi11 = $('#kolaborasi11:checked').val()
        var kolaborasi12 = $('#kolaborasi12:checked').val()
        var kolaborasi13 = $('#kolaborasi13:checked').val()
        var kolaborasi14 = $('#kolaborasi14:checked').val()
        var kolaborasi15 = $('#kolaborasi15:checked').val()

        var tindakan = $('#tindakan').val()

        var rencanaasuhan = $('#planning').val()


        // var sumberdata=$("#sumberdata:checked").val();
        Swal.fire({
            title: "Yakin Simpan Assesmen?",
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
                        tindakankebidanan: JSON.stringify(tindakankebidanan),
                        anamnesis_triase_bidan: $('#anamnesis_triase_bidan').val(),
                        diagnosa_triase_bidan: $('#diagnosa_triase_bidan').val(),
                        rekomendasi: $('#rekomendasi').val(),

                        asal_rujukan: $('#asal_rujukan').val(),

                        norm: $('#norm').val(),
                        kj: $('#kj').val(),
                        tglmasuk: $('#tglmasuk').val(),
                        alpul: $('#alpul').val(),
                        sumberdata: $('#sumberdata:checked').val(),
                        asalmasuk: $('#asalmasuk:checked').val(),
                        caramasuk: $('#caramasuk:checked').val(),
                        subyek: $('#anamnesis').val(),
                        keadaanumum: $('#keadaanumum:checked').val(),
                        kesadaran: $('#kesadaran:checked').val(),
                        skor_afgar_1: $('#skor_afgar_1').val(),
                        frekuensinadi: $('#frekuensinadi').val(),
                        frekuensinafas: $('#frekuensinafas').val(),
                        suhutubuh: $('#suhutubuh').val(),
                        beratbadan: $('#beratbadan').val(),
                        tb: $('#tb').val(),
                        gcs: $('#gcs').val(),
                        spo2: $('#SPO2').val(),
                        anake: $('#anake').val(),
                        riwayatpenyakitibu: $('#riwayatpenyakitibu:checked').val(),
                        riwayatpenyakitibu1: $('#riwayatpenyakitibu1:checked').val(),
                        riwayatpenyakitibu2: $('#riwayatpenyakitibu2:checked').val(),
                        riwayatpenyakitibu3: $('#riwayatpenyakitibu3:checked').val(),
                        riwayatpenyakitibu4: $('#riwayatpenyakitibu4:checked').val(),
                        riwayatpenyakitibu5: $('#riwayatpenyakitibu5:checked').val(),
                        riwayatpenyakitibu6: $('#riwayatpenyakitibu6:checked').val(),
                        riwayatpenyakitibu7: $('#riwayatpenyakitibu7').val(),
                        rpengoibu: $('#rpengoibu').val(),
                        rintra: $('#rintra').val(),
                        rintratgl: $('#rintratgl').val(),
                        rintrawkt: $('#rintrawkt').val(),
                        rintrakon: $('#rintrakon').val(),
                        apgarscore: $('#apgarscore').val(),
                        carrapersalinan: $('#carrapersalinan:checked').val(),
                        carrapersalinan1: $('#carrapersalinan1:checked').val(),
                        carrapersalinan2: $('#carrapersalinan2:checked').val(),
                        carrapersalinan3: $('#carrapersalinan3:checked').val(),
                        carrapersalinan4: $('#carrapersalinan4').val(),
                        carrapersalinanltk: $('#carrapersalinanltk').val(),
                        talipusat: $('#talipusat:checked').val(),
                        talipusat1: $('#talipusat1:checked').val(),
                        talipusat2: $('#talipusat2:checked').val(),
                        mayor: $('#mayor:checked').val(),
                        mayor1: $('#mayor1:checked').val(),
                        mayor2: $('#mayor2:checked').val(),
                        mayor3: $('#mayor3:checked').val(),
                        mayor4: $('#mayor4:checked').val(),
                        minor: $('#minor:checked').val(),
                        minor1: $('#minor1:checked').val(),
                        minor2: $('#minor2:checked').val(),
                        minor3: $('#minor3:checked').val(),
                        minor4: $('#minor4:checked').val(),
                        minor5: $('#minor5:checked').val(),
                        minor6: $('#minor6:checked').val(),
                        minor7: $('#minor7:checked').val(),
                        nutrisi: $('#nutrisi:checked').val(),
                        nutrisi1: $('#nutrisi1').val(),
                        frekuensi: $('#frekuensi').val(),
                        frekuensi1: $('#frekuensi1').val(),
                        bak: $('#bak').val(),
                        kelbak: $('#kelbak').val(),
                        kelbak1: $('#kelbak1:checked').val(),
                        BAB: $('#BAB').val(),
                        kelbab: $('#kelbab').val(),
                        kelbab1: $('#kelbab1:checked').val(),
                        reaksii: $('#reaksii').val(),
                        reaksi: $('#reaksi:checked').val(),
                        kecemasan: $('#kecemasan:checked').val(),
                        koping: $('#koping:checked').val(),
                        pekerjaan: $('#pekerjaan:checked').val(),
                        agama: $('#agama:checked').val(),
                        cryingvalue: $('#cryingvalue').val(),
                        requiresvalue: $('#requiresvalue').val(),
                        increasedvalue: $('#increasedvalue').val(),
                        expressionvalue: $('#expressionvalue').val(),
                        sleeplessvalue: $('#sleeplessvalue').val(),
                        totalnyeri: $('#totalnyeri').val(),
                        pbvalue: $('#pbvalue').val(),
                        mingivalue: $('#mingivalue').val(),
                        sakitvalue: $('#sakitvalue').val(),
                        totalgizi: $('#totalgizi').val(),
                        diagnosakebidanan: $('#diagnosakebidanan:checked').val(),
                        diagnosakebidanan1: $('#diagnosakebidanan1:checked').val(),
                        diagnosakebidanan2: $('#diagnosakebidanan2:checked').val(),
                        diagnosakebidanan3: $('#diagnosakebidanan3:checked').val(),
                        diagnosakebidanan4: $('#diagnosakebidanan4:checked').val(),
                        diagnosakebidanan5: $('#diagnosakebidanan5:checked').val(),
                        diagnosakebidanan6: $('#diagnosakebidanan6:checked').val(),
                        diagnosakebidanan7: $('#diagnosakebidanan7:checked').val(),
                        diagnosakebidanan8: $('#diagnosakebidanan8:checked').val(),
                        diagnosakebidanan9: $('#diagnosakebidanan9:checked').val(),
                        diagnosakebidanan10: $('#diagnosakebidanan10:checked').val(),
                        diagnosakebidanan11: $('#diagnosakebidanan11:checked').val(),
                        diagnosakebidanan12: $('#diagnosakebidanan12').val(),
                        kolaborasi1: $('#kolaborasi1:checked').val(),
                        kolaborasi2: $('#kolaborasi2:checked').val(),
                        kolaborasi3: $('#kolaborasi3:checked').val(),
                        kolaborasi4: $('#kolaborasi4:checked').val(),
                        kolaborasi5: $('#kolaborasi5:checked').val(),
                        kolaborasi6: $('#kolaborasi6:checked').val(),
                        kolaborasi7: $('#kolaborasi7:checked').val(),
                        kolaborasi8: $('#kolaborasi8:checked').val(),
                        kolaborasi9: $('#kolaborasi9:checked').val(),
                        kolaborasi10: $('#kolaborasi10:checked').val(),
                        kolaborasi11: $('#kolaborasi11:checked').val(),
                        kolaborasi12: $('#kolaborasi12:checked').val(),
                        kolaborasi13: $('#kolaborasi13:checked').val(),
                        kolaborasi14: $('#kolaborasi14:checked').val(),
                        kolaborasi15: $('#kolaborasi15:checked').val(),
                        tindakan: $('#tindakan').val(),
                        rencanaasuhan: $('#planning').val(),


                    },
                    url: '<?= route('simpanassesbidanbayi') ?>',

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


    $(".updateassesbidanbayi").click(function() {
        var tindakankebidanan = $('.formtindakankebidanan').serializeArray();
        var anamnesis_triase_bidan = $('#anamnesis_triase_bidan').val()
        var diagnosa_triase_bidan = $('#diagnosa_triase_bidan').val()
        var rekomendasi = $('#rekomendasi').val()

        
        var asal_rujukan = $('#asal_rujukan').val()

        var norm = $('#norm').val()
        var kj = $('#kj').val()
        var tglmasuk = $('#tglmasuk').val()
        var sumberdata = $('#sumberdata:checked').val()
        var asalmasuk = $('#asalmasuk:checked').val()
        var caramasuk = $('#caramasuk:checked').val()
        var subyek = $('#anamnesis').val()
        var keadaanumum = $('#keadaanumum:checked').val()
        var kesadaran = $('#kesadaran:checked').val()
        var skor_afgar_1 = $('#skor_afgar_1').val()
        var frekuensinadi = $('#frekuensinadi').val()
        var frekuensinafas = $('#frekuensinafas').val()
        var suhutubuh = $('#suhutubuh').val()
        var beratbadan = $('#beratbadan').val()
        var tb = $('#tb').val()
        var gcs = $('#gcs').val()
        var spo2 = $('#SPO2').val()
        var anake = $('#anake').val()
        var riwayatpenyakitibu = $('#riwayatpenyakitibu:checked').val()
        var riwayatpenyakitibu1 = $('#riwayatpenyakitibu1:checked').val()
        var riwayatpenyakitibu2 = $('#riwayatpenyakitibu2:checked').val()
        var riwayatpenyakitibu3 = $('#riwayatpenyakitibu3:checked').val()
        var riwayatpenyakitibu4 = $('#riwayatpenyakitibu4:checked').val()
        var riwayatpenyakitibu5 = $('#riwayatpenyakitibu5:checked').val()
        var riwayatpenyakitibu6 = $('#riwayatpenyakitibu6:checked').val()
        var riwayatpenyakitibu7 = $('#riwayatpenyakitibu7').val()
        var rpengoibu = $('#rpengoibu').val()
        var rintra = $('#rintra').val()
        var rintratgl = $('#rintratgl').val()
        var rintrawkt = $('#rintrawkt').val()
        var rintrakon = $('#rintrakon').val()
        var apgarscore = $('#apgarscore').val()
        var carrapersalinan = $('#carrapersalinan:checked').val()
        var carrapersalinan1 = $('#carrapersalinan1:checked').val()
        var carrapersalinan2 = $('#carrapersalinan2:checked').val()
        var carrapersalinan3 = $('#carrapersalinan3:checked').val()
        var carrapersalinan4 = $('#carrapersalinan4').val()
        var carrapersalinanltk = $('#carrapersalinanltk').val()

        var talipusat = $('#talipusat:checked').val()
        var talipusat1 = $('#talipusat1:checked').val()
        var talipusat2 = $('#talipusat2:checked').val()
        var mayor = $('#mayor:checked').val()
        var mayor1 = $('#mayor1:checked').val()
        var mayor2 = $('#mayor2:checked').val()
        var mayor3 = $('#mayor3:checked').val()
        var mayor4 = $('#mayor4:checked').val()
        var minor = $('#minor:checked').val()
        var minor1 = $('#minor1:checked').val()
        var minor2 = $('#minor2:checked').val()
        var minor3 = $('#minor3:checked').val()
        var minor4 = $('#minor4:checked').val()
        var minor5 = $('#minor5:checked').val()
        var minor6 = $('#minor6:checked').val()
        var minor7 = $('#minor7:checked').val()
        var nutrisi = $('#nutrisi:checked').val()
        var nutrisi1 = $('#nutrisi1').val()
        var frekuensi = $('#frekuensi').val()
        var frekuensi1 = $('#frekuensi1').val()
        var bak = $('#bak').val()
        var kelbak = $('#kelbak').val()
        var kelbak1 = $('#kelbak1:checked').val()
        var BAB = $('#BAB').val()
        var kelbab = $('#kelbab').val()
        var kelbab1 = $('#kelbab1:checked').val()
        var reaksii = $('#reaksii').val()
        var reaksi = $('#reaksi:checked').val()
        var kecemasan = $('#kecemasan:checked').val()
        var koping = $('#koping:checked').val()
        var pekerjaan = $('#pekerjaan:checked').val()
        var agama = $('#agama:checked').val()
        var cryingvalue = $('#cryingvalue').val()
        var requiresvalue = $('#requiresvalue').val()
        var increasedvalue = $('#increasedvalue').val()
        var expressionvalue = $('#expressionvalue').val()
        var sleeplessvalue = $('#sleeplessvalue').val()
        var totalnyeri = $('#totalnyeri').val()
        var pbvalue = $('#pbvalue').val()
        var mingivalue = $('#mingivalue').val()
        var sakitvalue = $('#sakitvalue').val()
        var totalgizi = $('#totalgizi').val()
        var diagnosakebidanan = $('#diagnosakebidanan:checked').val()
        var diagnosakebidanan1 = $('#diagnosakebidanan1:checked').val()
        var diagnosakebidanan2 = $('#diagnosakebidanan2:checked').val()
        var diagnosakebidanan3 = $('#diagnosakebidanan3:checked').val()
        var diagnosakebidanan4 = $('#diagnosakebidanan4:checked').val()
        var diagnosakebidanan5 = $('#diagnosakebidanan5:checked').val()
        var diagnosakebidanan6 = $('#diagnosakebidanan6:checked').val()
        var diagnosakebidanan7 = $('#diagnosakebidanan7:checked').val()
        var diagnosakebidanan8 = $('#diagnosakebidanan8:checked').val()
        var diagnosakebidanan9 = $('#diagnosakebidanan9:checked').val()
        var diagnosakebidanan10 = $('#diagnosakebidanan10:checked').val()
        var diagnosakebidanan11 = $('#diagnosakebidanan11:checked').val()
        var diagnosakebidanan12 = $('#diagnosakebidanan12').val()
        var kolaborasi1 = $('#kolaborasi1:checked').val()
        var kolaborasi2 = $('#kolaborasi2:checked').val()
        var kolaborasi3 = $('#kolaborasi3:checked').val()
        var kolaborasi4 = $('#kolaborasi4:checked').val()
        var kolaborasi5 = $('#kolaborasi5:checked').val()
        var kolaborasi6 = $('#kolaborasi6:checked').val()
        var kolaborasi7 = $('#kolaborasi7:checked').val()
        var kolaborasi8 = $('#kolaborasi8:checked').val()
        var kolaborasi9 = $('#kolaborasi9:checked').val()
        var kolaborasi10 = $('#kolaborasi10:checked').val()
        var kolaborasi11 = $('#kolaborasi11:checked').val()
        var kolaborasi12 = $('#kolaborasi12:checked').val()
        var kolaborasi13 = $('#kolaborasi13:checked').val()
        var kolaborasi14 = $('#kolaborasi14:checked').val()
        var kolaborasi15 = $('#kolaborasi15:checked').val()

        var tindakan = $('#tindakan').val()

        var rencanaasuhan = $('#planning').val()


        // var sumberdata=$("#sumberdata:checked").val();
        Swal.fire({
            title: "Yakin Update Assesmen?",
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
                        tindakankebidanan: JSON.stringify(tindakankebidanan),
                        anamnesis_triase_bidan: $('#anamnesis_triase_bidan').val(),
                        diagnosa_triase_bidan: $('#diagnosa_triase_bidan').val(),
                        rekomendasi: $('#rekomendasi').val(),

                        
                        asal_rujukan: $('#asal_rujukan').val(),

                        norm: $('#norm').val(),
                        kj: $('#kj').val(),
                        tglmasuk: $('#tglmasuk').val(),
                        alpul: $('#alpul').val(),
                        sumberdata: $('#sumberdata:checked').val(),
                        asalmasuk: $('#asalmasuk:checked').val(),
                        caramasuk: $('#caramasuk:checked').val(),
                        subyek: $('#anamnesis').val(),
                        keadaanumum: $('#keadaanumum:checked').val(),
                        kesadaran: $('#kesadaran:checked').val(),
                        skor_afgar_1: $('#skor_afgar_1').val(),
                        frekuensinadi: $('#frekuensinadi').val(),
                        frekuensinafas: $('#frekuensinafas').val(),
                        suhutubuh: $('#suhutubuh').val(),
                        beratbadan: $('#beratbadan').val(),
                        tb: $('#tb').val(),
                        gcs: $('#gcs').val(),
                        spo2: $('#SPO2').val(),
                        anake: $('#anake').val(),
                        riwayatpenyakitibu: $('#riwayatpenyakitibu:checked').val(),
                        riwayatpenyakitibu1: $('#riwayatpenyakitibu1:checked').val(),
                        riwayatpenyakitibu2: $('#riwayatpenyakitibu2:checked').val(),
                        riwayatpenyakitibu3: $('#riwayatpenyakitibu3:checked').val(),
                        riwayatpenyakitibu4: $('#riwayatpenyakitibu4:checked').val(),
                        riwayatpenyakitibu5: $('#riwayatpenyakitibu5:checked').val(),
                        riwayatpenyakitibu6: $('#riwayatpenyakitibu6:checked').val(),
                        riwayatpenyakitibu7: $('#riwayatpenyakitibu7').val(),
                        rpengoibu: $('#rpengoibu').val(),
                        rintra: $('#rintra').val(),
                        rintratgl: $('#rintratgl').val(),
                        rintrawkt: $('#rintrawkt').val(),
                        rintrakon: $('#rintrakon').val(),
                        apgarscore: $('#apgarscore').val(),
                        carrapersalinan: $('#carrapersalinan:checked').val(),
                        carrapersalinan1: $('#carrapersalinan1:checked').val(),
                        carrapersalinan2: $('#carrapersalinan2:checked').val(),
                        carrapersalinan3: $('#carrapersalinan3:checked').val(),
                        carrapersalinan4: $('#carrapersalinan4').val(),
                        carrapersalinanltk: $('#carrapersalinanltk').val(),
                        talipusat: $('#talipusat:checked').val(),
                        talipusat1: $('#talipusat1:checked').val(),
                        talipusat2: $('#talipusat2:checked').val(),
                        mayor: $('#mayor:checked').val(),
                        mayor1: $('#mayor1:checked').val(),
                        mayor2: $('#mayor2:checked').val(),
                        mayor3: $('#mayor3:checked').val(),
                        mayor4: $('#mayor4:checked').val(),
                        minor: $('#minor:checked').val(),
                        minor1: $('#minor1:checked').val(),
                        minor2: $('#minor2:checked').val(),
                        minor3: $('#minor3:checked').val(),
                        minor4: $('#minor4:checked').val(),
                        minor5: $('#minor5:checked').val(),
                        minor6: $('#minor6:checked').val(),
                        minor7: $('#minor7:checked').val(),
                        nutrisi: $('#nutrisi:checked').val(),
                        nutrisi1: $('#nutrisi1').val(),
                        frekuensi: $('#frekuensi').val(),
                        frekuensi1: $('#frekuensi1').val(),
                        bak: $('#bak').val(),
                        kelbak: $('#kelbak').val(),
                        kelbak1: $('#kelbak1:checked').val(),
                        BAB: $('#BAB').val(),
                        kelbab: $('#kelbab').val(),
                        kelbab1: $('#kelbab1:checked').val(),
                        reaksii: $('#reaksii').val(),
                        reaksi: $('#reaksi:checked').val(),
                        kecemasan: $('#kecemasan:checked').val(),
                        koping: $('#koping:checked').val(),
                        pekerjaan: $('#pekerjaan:checked').val(),
                        agama: $('#agama:checked').val(),
                        cryingvalue: $('#cryingvalue').val(),
                        requiresvalue: $('#requiresvalue').val(),
                        increasedvalue: $('#increasedvalue').val(),
                        expressionvalue: $('#expressionvalue').val(),
                        sleeplessvalue: $('#sleeplessvalue').val(),
                        totalnyeri: $('#totalnyeri').val(),
                        pbvalue: $('#pbvalue').val(),
                        mingivalue: $('#mingivalue').val(),
                        sakitvalue: $('#sakitvalue').val(),
                        totalgizi: $('#totalgizi').val(),
                        diagnosakebidanan: $('#diagnosakebidanan:checked').val(),
                        diagnosakebidanan1: $('#diagnosakebidanan1:checked').val(),
                        diagnosakebidanan2: $('#diagnosakebidanan2:checked').val(),
                        diagnosakebidanan3: $('#diagnosakebidanan3:checked').val(),
                        diagnosakebidanan4: $('#diagnosakebidanan4:checked').val(),
                        diagnosakebidanan5: $('#diagnosakebidanan5:checked').val(),
                        diagnosakebidanan6: $('#diagnosakebidanan6:checked').val(),
                        diagnosakebidanan7: $('#diagnosakebidanan7:checked').val(),
                        diagnosakebidanan8: $('#diagnosakebidanan8:checked').val(),
                        diagnosakebidanan9: $('#diagnosakebidanan9:checked').val(),
                        diagnosakebidanan10: $('#diagnosakebidanan10:checked').val(),
                        diagnosakebidanan11: $('#diagnosakebidanan11:checked').val(),
                        diagnosakebidanan12: $('#diagnosakebidanan12').val(),
                        kolaborasi1: $('#kolaborasi1:checked').val(),
                        kolaborasi2: $('#kolaborasi2:checked').val(),
                        kolaborasi3: $('#kolaborasi3:checked').val(),
                        kolaborasi4: $('#kolaborasi4:checked').val(),
                        kolaborasi5: $('#kolaborasi5:checked').val(),
                        kolaborasi6: $('#kolaborasi6:checked').val(),
                        kolaborasi7: $('#kolaborasi7:checked').val(),
                        kolaborasi8: $('#kolaborasi8:checked').val(),
                        kolaborasi9: $('#kolaborasi9:checked').val(),
                        kolaborasi10: $('#kolaborasi10:checked').val(),
                        kolaborasi11: $('#kolaborasi11:checked').val(),
                        kolaborasi12: $('#kolaborasi12:checked').val(),
                        kolaborasi13: $('#kolaborasi13:checked').val(),
                        kolaborasi14: $('#kolaborasi14:checked').val(),
                        kolaborasi15: $('#kolaborasi15:checked').val(),
                        tindakan: $('#tindakan').val(),
                        rencanaasuhan: $('#planning').val(),


                    },
                    url: '<?= route('updateassesbidanbayi') ?>',

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
    $(".validasiassesbidanbayi").click(function() {
        var data = $('.formerm').serializeArray();

        var norm = $('#norm').val()
        var kj = $('#kj').val()


        // var sumberdata = $("#sumberdata:checked").val();
        Swal.fire({
            title: "Yakin Validasi Assesmen?",
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
                        norm: $('#norm').val(),
                        kj: $('#kj').val(),


                    },
                    url: '<?= route('validasiassesbidanbayi') ?>',

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
                            cpptperawat()
                        }
                    }
                });
            }
        })
        return false;
    });
</script>