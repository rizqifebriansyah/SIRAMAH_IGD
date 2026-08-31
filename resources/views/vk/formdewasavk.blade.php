@if ($assesper == null)

<div class="card-header bg-info">
    <h3 class="card-title ">ASSESMENT IBU KEBIDANAN VK </h3>
</div>
<table class="table">
    <tbody>
        <tr>
            <td class="text-bold font-italic">Tanggal Kunjungan</td>
            <td>
                <h5 class="text-bold">{{$now}}</h5>

            </td>
            <td class="text-bold font-italic">Tanggal Pengkajian</td>
            <td>
                <input class="form-control" type="datetime-local" value="" name="tgl_pengkajian" id="tgl_pengkajian">

            </td>
        </tr>
        <tr>
            <td class="text-bold font-italic">Sumber Data</td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata"
                        value="Pasien Sendiri">
                    <label class="form-check-label" for="inlineRadio1">Pasien Sendiri /
                        Autoanamase</label>
                </div>

            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Keluarga">
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
                    <input class="form-check-input" type="radio" name="asalmasuk" id="asalmasuk" value="Non Rujukan">
                    <label class="form-check-label" for="inlineRadio1">Non Rujukan</label>
                </div>

            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="asalmasuk" id="asalmasuk" value="Rujukan">
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
                    <input class="form-check-input" type="radio" name="caramasuk" id="caramasuk" value="Jalan Kaki">
                    <label class="form-check-label" for="inlineRadio1">Jalan Kaki</label>
                </div>

            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="caramasuk" id="caramasuk" value="Kursi Roda">
                    <label class="form-check-label" for="inlineRadio2">Kursi Roda </label>
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="caramasuk" id="caramasuk" value="Brankar">
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
                                                    <input class="form-check-input" type="radio" name="keadaanumum"
                                                        id="keadaanumum" value="Baik">
                                                    <label class="form-check-label">Baik</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="keadaanumum"
                                                        id="keadaanumum" value="Sedang">
                                                    <label class="form-check-label">Sedang</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="keadaanumum"
                                                        id="keadaanumum" value="Buruk">
                                                    <label class="form-check-label">Buruk</label>
                                                </div>
                                            </td>
                                            <td class="text-bold font-italic">Kesadaran</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="kesadaran"
                                                        id="kesadaran" value="13-15">
                                                    <label class="form-check-label">13-15</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="kesadaran"
                                                        id="kesadaran" value="9-12">
                                                    <label class="form-check-label">9-12</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="kesadaran"
                                                        id="kesadaran" value="3-8">
                                                    <label class="form-check-label">3-8</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Tekanan Darah</td>
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
                                            </td>
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
                                                    <input type="text" class="form-control" placeholder="GCS" name="gcs"
                                                        id="gcs" aria-label="Recipient's username"
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
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Imunisasi</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi"
                                                    id="imunisasi" value="BCG">
                                                <label class="form-check-label">BCG</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi1"
                                                    id="imunisasi1" value="DPT">
                                                <label class="form-check-label">DPT</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi2"
                                                    id="imunisasi2" value="POLIO">
                                                <label class="form-check-label">POLIO</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi3"
                                                    id="imunisasi3" value="CAMPAK">
                                                <label class="form-check-label">CAMPAK</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi4"
                                                    id="imunisasi4" value="Hepatitis B">
                                                <label class="form-check-label">Hepatitis B</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi5"
                                                    id="imunisasi5" value="PCV">
                                                <label class="form-check-label">PCV</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi6"
                                                    id="imunisasi6" value="Varicela">
                                                <label class="form-check-label">Varicela</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi7"
                                                    id="imunisasi7" value="Typoid">
                                                <label class="form-check-label">Typoid</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi8"
                                                    id="imunisasi8" value="Hepatitis A">
                                                <label class="form-check-label">Hepatitis A</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi9"
                                                    id="imunisasi9" value="Meningitis">
                                                <label class="form-check-label">Meningitis</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi10"
                                                    id="imunisasi10" value="Rotavirus">
                                                <label class="form-check-label">Rotavirus</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi11"
                                                    id="imunisasi11" value="HIB">
                                                <label class="form-check-label">HIB</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi12"
                                                    id="imunisasi12" value="MMR">
                                                <label class="form-check-label">MMR</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi13"
                                                    id="imunisasi13" value="Influenza">
                                                <label class="form-check-label">Influenza</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi14"
                                                    id="imunisasi14" value="HPV">
                                                <label class="form-check-label">HPV</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi15"
                                                    id="imunisasi15" value="Pneumokokus">
                                                <label class="form-check-label">Pneumokokus</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi16"
                                                    id="imunisasi16" value="Tetanus">
                                                <label class="form-check-label">Tetanus</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi17"
                                                    id="imunisasi17" value="Zooster">
                                                <label class="form-check-label">Zooster</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasi18"
                                                    id="imunisasi18" value="Yellow Fever">
                                                <label class="form-check-label">Yellow Fever</label>
                                            </div>
                                        </div>

                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Keluarga Berencana</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="text-bold font-italic" for="">Metode KB yang di pakai</label>

                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="kberencana"
                                                    id="kberencana" value="suntik">
                                                <label class="form-check-label">suntik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="kberencana1"
                                                    id="kberencana1" value="Pil">
                                                <label class="form-check-label">Pil</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="kberencana2"
                                                    id="kberencana2" value="AKD">
                                                <label class="form-check-label">AKD</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="kberencana3"
                                                    id="kberencana3" value="MOW">
                                                <label class="form-check-label">MOW</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="kberencana4"
                                                    id="kberencana4" value="IMPLAN">
                                                <label class="form-check-label">IMPLAN</label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="kberencana5"
                                                    id="kberencana5" value="AKDR">
                                                <label class="form-check-label">AKDR</label>
                                            </div>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic"></td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="text-bold font-italic" for="">Komplikasi KB</label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="komplikasikb"
                                                    id="komplikasikb" value="Pendarahan">
                                                <label class="form-check-label">Pendarahan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="komplikasikb1"
                                                    id="komplikasikb1" value="PID / radang panggul">
                                                <label class="form-check-label">PID / radang panggul</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="komplikasikb2"
                                                    id="komplikasikb2" value="Tidak Ada Komplikasi">
                                                <label class="form-check-label">Tidak Ada Komplikasi</label>
                                            </div>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Penyakit</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpenyakit"
                                                    id="rpenyakit" value="Diabetes Melitus">
                                                <label class="form-check-label">Diabetes Melitus</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpenyakit1"
                                                    id="rpenyakit1" value="Hepatitis">
                                                <label class="form-check-label">Hepatitis</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpenyakit2"
                                                    id="rpenyakit2" value="Stroke">
                                                <label class="form-check-label">Stroke</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpenyakit3"
                                                    id="rpenyakit3" value="Ginjal">
                                                <label class="form-check-label">Ginjal</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpenyakit4"
                                                    id="rpenyakit4" value="Hipertensi">
                                                <label class="form-check-label">Hipertensi</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpenyakit5"
                                                    id="rpenyakit5" value="TBC">
                                                <label class="form-check-label">TBC</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpenyakit6"
                                                    id="rpenyakit6" value="Jantung">
                                                <label class="form-check-label">Jantung</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpenyakit7"
                                                    id="rpenyakit7" value="Keganasan">
                                                <label class="form-check-label">Keganasan</label>
                                            </div>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Operasi</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="operasi"
                                                    id="operasi" value="">
                                                <label class="form-check-label">Pernah dirawat :</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="operasi1"
                                                    id="operasi1" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="operasi2"
                                                    id="operasi2" value="ya">
                                                <label class="form-check-label">ya</label>
                                            </div>
                                        </div>



                                    </div>
                                </td>

                            </tr>

                            <tr>
                                <td class="text-bold font-italic">Riwayat Ginekologi</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="ginekologi"
                                                    id="ginekologi" value="Infertilitas">
                                                <label class="form-check-label">Infertilitas</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="ginekologi1"
                                                    id="ginekologi1" value="Infeksi Virus">
                                                <label class="form-check-label">Infeksi Virus</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="ginekologi2"
                                                    id="ginekologi2" value="PMS">
                                                <label class="form-check-label">PMS</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="ginekologi3"
                                                    id="ginekologi3" value="Cervictis Kronis">
                                                <label class="form-check-label">Cervictis Kronis</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="ginekologi4"
                                                    id="ginekologi4" value="Endometriosis">
                                                <label class="form-check-label">Endometriosis</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="ginekologi5"
                                                    id="ginekologi5" value="Mioma">
                                                <label class="form-check-label">Mioma</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="ginekologi6"
                                                    id="ginekologi6" value="Polip Cevix">
                                                <label class="form-check-label">Polip Cevix</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="ginekologi8"
                                                    id="ginekologi8" value="Kanker Kandungan">
                                                <label class="form-check-label">Kanker Kandungan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="ginekologi9"
                                                    id="ginekologi9" value="Perkosaan">
                                                <label class="form-check-label">Perkosaan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="ginekologi10"
                                                    id="ginekologi10" value="Operasi Kandungan">
                                                <label class="form-check-label">Operasi Kandungan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="ginekologi11"
                                                    id="ginekologi11" value="Tidak Ada">
                                                <label class="form-check-label">Tidak Ada</label>
                                            </div>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Penyakit Keluarga</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpk" id="rpk"
                                                    value="Kanker">
                                                <label class="form-check-label">Kanker</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpk1" id="rpk1"
                                                    value="Penyakit Hati">
                                                <label class="form-check-label">Penyakit Hati</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpk2" id="rpk2"
                                                    value="Hipertensi">
                                                <label class="form-check-label">Hipertensi</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpk3" id="rpk3"
                                                    value="DM">
                                                <label class="form-check-label">DM</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpk4" id="rpk4"
                                                    value="Penyakit Ginjal">
                                                <label class="form-check-label">Penyakit Ginjal</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpk5" id="rpk5"
                                                    value="Penyakit Jiwa">
                                                <label class="form-check-label">Penyakit Jiwa</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpk6" id="rpk6"
                                                    value="Hamil Kembar">
                                                <label class="form-check-label">Hamil Kembar</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpk7" id="rpk7"
                                                    value="TBC">
                                                <label class="form-check-label">TBC</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpk8" id="rpk8"
                                                    value="Epilepsi">
                                                <label class="form-check-label">Epilepsi</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpk8" id="rpk8"
                                                    value="Alergi">
                                                <label class="form-check-label">Alergi</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rpk9" id="rpk9"
                                                    value="Tidak Ada">
                                                <label class="form-check-label">Tidak Ada</label>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Obat</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-bold font-italic">Pengobatan yang di lanjutkan
                                                            di rumah : </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <form id="dynamic-form" class="formobatplg">
                                                                <h5>Klik Tombol Tambah untuk menambahkan Riwayat Obat
                                                                </h5>

                                                                <div class="field_wrapperrr">
                                                                    <div class="row mt-2">


                                                                        <div class="col-md-2">
                                                                            <a class="btn btn-success"
                                                                                href="javascript:void(0);"
                                                                                id="add_button"
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
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Apa ada Terapi Komplementari</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="terapi"
                                                    id="terapi" value="Jamu">
                                                <label class="form-check-label">Jamu</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="terapi1"
                                                    id="terapi1" value="Accupunture">
                                                <label class="form-check-label">Accupunture</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="terapi2"
                                                    id="terapi2" value="Pijat">
                                                <label class="form-check-label">Pijat</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="terapi3"
                                                    id="terapi3" value="Tidak Ada">
                                                <label class="form-check-label">Tidak Ada</label>
                                            </div>
                                        </div>


                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Alergi</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="aler" id="aler"
                                                    value="tidak">
                                                <label class="form-check-label">tidak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="aler1" id="aler1"
                                                    value="ada">
                                                <label class="form-check-label">ada</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="text" name="aler2" id="aler2"
                                                    placeholder="Sebutkan" value="">
                                            </div>
                                        </div>


                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Apakah Ada Kebiasaan</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="text-bold font-italic">Merokok : </label>

                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="kebiasaan"
                                                    id="kebiasaan" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="kebiasaan1"
                                                    id="kebiasaan1" value="ya">
                                                <label class="form-check-label">ya</label>
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

                                            <label class="text-bold font-italic">Obat Tidur / Narkoba : </label>


                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="otidur"
                                                    id="otidur" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="otidur1"
                                                    id="otidur1" value="ya">
                                                <label class="form-check-label">ya</label>
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

                                            <label class="text-bold font-italic">Alkohol : </label>

                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="alkohol"
                                                    id="alkohol" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="alkohol1"
                                                    id="alkohol1" value="ya">
                                                <label class="form-check-label">ya</label>
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

                                            <label class="text-bold font-italic">Olahraga : </label>


                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="Olahraga"
                                                    id="Olahraga" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="Olahraga1"
                                                    id="Olahraga1" value="ya">
                                                <label class="form-check-label">ya</label>
                                            </div>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Mentruasi</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <label class="form-check-label">Umur Menarche : </label>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" size="5" type="Text" name="umurmenarche"
                                                    id="umurmenarche" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <label class="form-check-label">Lamanya Haid </label>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" size="5" type="Text" name="lamanyahaid"
                                                    id="lamanyahaid" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <label class="form-check-label">Banyaknya : </label>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" size="5" type="Text" name="pembalut"
                                                    id="pembalut" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <label class="form-check-label">Haid Terakhir : </label>

                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                            <div class="form-check">
                                                <input class="form-check-input" size="5" type="date" name="haidterakhir"
                                                    id="haidterakhir" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <label class="form-check-label">TP : </label>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" size="5" type="Text" name="TP" id="TP"
                                                    value="">
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
                                                <label class="form-check-label">Dismonore : </label>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="Dismonore"
                                                    id="Dismonore" value="Spoting">
                                                <label class="form-check-label">Spoting </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="Dismonore1"
                                                    id="Dismonore1" value="Menorrhagia">
                                                <label class="form-check-label">Menorrhagia </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="Dismonore2"
                                                    id="Dismonore2" value="Methoragia">
                                                <label class="form-check-label">Methoragia </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="Dismonore3"
                                                    id="Dismonore3" value="Pre Menstrual Syndrome">
                                                <label class="form-check-label">Pre Menstrual Syndrome </label>
                                            </div>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Perkawinan</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <label class="form-check-label">Menikah : </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" size="5" type="text" name="menikah"
                                                    id="menikah" placeholder="kali" value="">
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
                                                <label class="form-check-label">Usia Perkawinan I </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" size="5" type="text" name="menikah1"
                                                    id="menikah1" placeholder="Tahun" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="menikah2"
                                                    id="menikah2" value="Masih Menikah">
                                                <label class="form-check-label">Masih Menikah </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="menikah3"
                                                    id="menikah3" value="Cerai">
                                                <label class="form-check-label">Cerai </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="menikah4"
                                                    id="menikah4" value="Meninggal">
                                                <label class="form-check-label">Meninggal </label>
                                            </div>
                                        </div>


                                    </div>
                                </td>

                            </tr>

                            <tr>
                                <td class="text-bold font-italic">Riwayat Kehamilan</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-group-label ">G : </label>

                                                <input class="form-group" type="text" name="G" id="G" placeholder="G:"
                                                    value="">

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-group-label">P : </label>
                                                <input class="form-group" type="text" name="P" id="P" placeholder="P:"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-group-label">A : </label>

                                                <input class="form-group" type="text" name="A" id="A" placeholder="A:"
                                                    value="">
                                            </div>
                                        </div>


                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-bold font-italic"> Riwayat Partus</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <form id="dynamic-form" class="formriwayatpartus">
                                                    <h5>Klik Tombol Tambah untuk menambahkan Riwayat Partus</h5>

                                                    <div class="field_wrappperrr">
                                                        <div class="row mt-2">


                                                            <div class="col-md-2">
                                                                <a class="btn btn-success" href="javascript:void(0);"
                                                                    id="add_buttonn" title="Add field">TAMBAH</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Kehamilan Sekarang</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="text-bold">Hamil Muda : </label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="hamud" id="hamud"
                                                    value="Mual">
                                                <label class="form-check-label">Mual </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="hamud1"
                                                    id="hamud1" value="Muntah">
                                                <label class="form-check-label">Muntah </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="hamud2"
                                                    id="hamud2" value="Pendarahan">
                                                <label class="form-check-label">Pendarahan </label>
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
                                            <label class="text-bold">Hamil Tua : </label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="hatu" id="hatu"
                                                    value="Pusing">
                                                <label class="form-check-label">Pusing </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="hatu1" id="hatu1"
                                                    value="Sakit Kepala">
                                                <label class="form-check-label">Sakit Kepala </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="hatu2" id="hatu2"
                                                    value="Pendarahan">
                                                <label class="form-check-label">Pendarahan </label>
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
                                            <label class="text-bold">ANC : </label>

                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="anc" id="anc"
                                                    value="Teratur">
                                                <label class="form-check-label">Teratur </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" size="5" type="checkbox" name="anc1"
                                                    id="anc1" value="Tidak Teratur">
                                                <label class="form-check-label">Tidak Teratur </label>
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
                                            <label class="text-bold">Imunisasi : </label>

                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="imunisasii"
                                                    id="imunisasii" value="1">
                                                <label class="form-check-label">1 </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" size="5" type="checkbox"
                                                    name="imunisasii1" id="imunisasii1" value="2">
                                                <label class="form-check-label">2 </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" size="5" type="checkbox"
                                                    name="imunisasii2" id="imunisasii2" value="3">
                                                <label class="form-check-label">3 </label>
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
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> PEMERIKSAAN FISIK
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne91" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample91">
                            <div class="card-body bg-light">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-bold font-italic">Mata</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="mata"
                                                                id="mata" value="Pandangan Kabur">
                                                            <label class="form-check-label">Pandangan Kabur </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="mata1"
                                                                id="mata1" value="Penglihatan G anda">
                                                            <label class="form-check-label">Penglihatan G anda </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="mata2"
                                                                id="mata2" value="Sklera Icterik">
                                                            <label class="form-check-label">Sklera Icterik </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="mata3"
                                                                id="mata3" value="Konjungtiva Pusat">
                                                            <label class="form-check-label">Konjungtiva Pusat </label>
                                                        </div>
                                                    </div>


                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Dada dan Aksila</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="dadak"
                                                                id="dadak" value="Mamae Simetris">
                                                            <label class="form-check-label">Mamae Simetris </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dadak1" id="dadak1" value="Mamae Asimetris">
                                                            <label class="form-check-label">Mamae Asimetris </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dadak2" id="dadak2" value="AreolaHiperpigmentasi">
                                                            <label class="form-check-label">AreolaHiperpigmentasi
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dadak3" id="dadak3" value="Tumor">
                                                            <label class="form-check-label">Tumor </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dadak4" id="dadak4" value="Puting Susu Menonjol">
                                                            <label class="form-check-label">Puting Susu Menonjol
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dadak5" id="dadak5" value="Kolostrum (+)">
                                                            <label class="form-check-label">Kolostrum (+) </label>
                                                        </div>
                                                    </div>


                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Ektremitas</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="Ekstremitas" id="Ekstremitas"
                                                                value="Tungkai Simetris">
                                                            <label class="form-check-label">Tungkai Simetris </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="Ekstremitas1" id="Ekstremitas1"
                                                                value="Tungkai Asimetris">
                                                            <label class="form-check-label">Tungkai Asimetris </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="Ekstremitas2" id="Ekstremitas2" value="Oedema">
                                                            <label class="form-check-label">Oedema </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="Ekstremitas3" id="Ekstremitas3"
                                                                value="Refleks : +/-">
                                                            <label class="form-check-label">Refleks : +/- </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Sistem Pernafasan</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas" id="sistemnafas" value="Dispnue">
                                                            <label class="form-check-label">Dispnue </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas1" id="sistemnafas1" value="Orthopneu">
                                                            <label class="form-check-label">Orthopneu </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas2" id="sistemnafas2" value="Tacypneu">
                                                            <label class="form-check-label">Tacypneu </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas3" id="sistemnafas3" value="Wheezing">
                                                            <label class="form-check-label">Wheezing </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas4" id="sistemnafas4" value="Batuk">
                                                            <label class="form-check-label">Batuk </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas5" id="sistemnafas5" value="Sputum">
                                                            <label class="form-check-label">Sputum </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas6" id="sistemnafas6"
                                                                value="Batu Darah">
                                                            <label class="form-check-label">Batu Darah </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas7" id="sistemnafas7"
                                                                value="Nyeri Dada">
                                                            <label class="form-check-label">Nyeri Dada </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas8 " id="sistemnafas8 "
                                                                value="Keringat Malam">
                                                            <label class="form-check-label">Keringat Malam </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Sosial Support</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="sosup"
                                                                id="sosup" value="Suami">
                                                            <label class="form-check-label">Suami </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sosup1" id="sosup1" value="Orang Tua">
                                                            <label class="form-check-label">Orang Tua </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sosup2" id="sosup2" value="Mertua">
                                                            <label class="form-check-label">Mertua </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sosup3" id="sosup3" value="Anak">
                                                            <label class="form-check-label">Anak </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sosup4" id="sosup4" value="Keluarga Lain">
                                                            <label class="form-check-label">Keluarga Lain </label>
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
                <div class="accordion" id="accordionExample92">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne92" aria-expanded="true"
                                    aria-controls="collapseOne92">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> DATA PSIKOLOGIS
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne92" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample92">
                            <div class="card-body bg-light">
                                <table class="table">
                                    <tbody>

                                        <tr>
                                            <td></td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="dapsi"
                                                                id="dapsi" value="Denial (Menolak / Tidak Percaya)">
                                                            <label class="form-check-label">Denial (Menolak / Tidak
                                                                Percaya) </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi1" id="dapsi1" value="Anger (marah)">
                                                            <label class="form-check-label">Anger (marah) </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi2" id="dapsi2"
                                                                value="Bergaining (Tawar menawar)">
                                                            <label class="form-check-label">Bergaining (Tawar menawar)
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi3" id="dapsi3" value="Depresi">
                                                            <label class="form-check-label">Depresi </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi4" id="dapsi4" value="Menerima">
                                                            <label class="form-check-label">Menerima </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi5" id="dapsi5" value="Tidak Semangat">
                                                            <label class="form-check-label">Tidak Semangat </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi6" id="dapsi6" value="Rasa Tertekan">
                                                            <label class="form-check-label">Rasa Tertekan </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi7" id="dapsi7" value="Sulit Tidur">
                                                            <label class="form-check-label">Sulit Tidur </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi8" id="dapsi8" value="Cepat Lelah">
                                                            <label class="form-check-label">Cepat Lelah </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi9" id="dapsi9" value="Sulit Berbicara">
                                                            <label class="form-check-label">Sulit Berbicara </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi11" id="dapsi11" value="Sulit Konsentrasi">
                                                            <label class="form-check-label">Sulit Konsentrasi </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi12" id="dapsi12" value="Merasa Bersalah">
                                                            <label class="form-check-label">Merasa Bersalah </label>
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
                <div class="accordion" id="accordionExample921">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne921" aria-expanded="true"
                                    aria-controls="collapseOne921">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> BUDAYA PASIEN
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne921" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample921">
                            <div class="card-body bg-light">
                                <table class="table">
                                    <tbody>

                                        <tr>
                                            <td></td>
                                            <td>
                                                <h5>Nilai Budaya yang dimiliki terkait dengan "Penyebab penyakit/
                                                    maslaah keesehatan" sakit adalah</h5> <br>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="nilbud" id="nilbud" value="Hukuman">
                                                            <label class="form-check-label">Hukuman </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="nilbud1" id="nilbud1" value="Ujian">
                                                            <label class="form-check-label">Ujian </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="nilbud2" id="nilbud2" value="Kesalahan">
                                                            <label class="form-check-label">Kesalahan </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="nilbud3" id="nilbud3" value="Takdir">
                                                            <label class="form-check-label">Takdir </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="nilbud4" id="nilbud4" value="Buatan Orang lain">
                                                            <label class="form-check-label">Buatan Orang lain </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="nilbud5" id="nilbud5" value="Keturunan">
                                                            <label class="form-check-label">Keturunan </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Kebiasaan Pasien saat sakit (pola aktivitas dan istirahat)</td>
                                            <td>
                                                <textarea class="form-control" id="polaak" name="polaak"
                                                    placeholder=""></textarea>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pola Komunikasi</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="polkom" id="polkom" value="Normal">
                                                            <label class="form-check-label">Normal </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="polkom1" id="polkom1" value="Introvert">
                                                            <label class="form-check-label">Introvert </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="polkom2" id="polkom2" value="Ekstrovert">
                                                            <label class="form-check-label">Ekstrovert </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <label class="form-check-label">Lainya </label>

                                                            <input class="form-input" type="input" name="polkom5"
                                                                id="polkom5" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Pola Makanan</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="polmak" id="polmak" value="sehat">
                                                            <label class="form-check-label">sehat </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="polmak1" id="polmak1" value="tidak sehat">
                                                            <label class="form-check-label">tidak sehat </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <label class="form-check-label">Pokok : </label>

                                                            <input class="form-check-input" type="checkbox"
                                                                name="polmak2" id="polmak2" value="nasi">
                                                            <label class="form-check-label">nasi </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <label class="form-check-label">Selain nasi </label>

                                                            <input class="form-input" type="input" name="polmak3"
                                                                id="polmak3" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Pantang Makanan</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="panmak" id="panmak" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="panmak1" id="panmak1" value="ya">
                                                            <label class="form-check-label">ya : </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-check">

                                                            <input class="form-input" type="input" name="panmak2"
                                                                id="panmak2" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Mempunyai pengaruh kepercayaan yang dianut terhadap penyakit : </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="penmak" id="penmak" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="penmak1" id="penmak1" value="ya">
                                                            <label class="form-check-label">ya : </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-check">

                                                            <input class="form-input" type="input" name="penmak2"
                                                                id="penmak2" value="">
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
                <div class="accordion" id="accordionExample922">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne922" aria-expanded="true"
                                    aria-controls="collapseOne922">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> KEBUTUHAN BELAJAR / EDUKASI
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne922" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample922">
                            <div class="card-body bg-light">
                                <table class="table">
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="kebel"
                                                                id="kebel" value="Aktivitas">
                                                            <label class="form-check-label">Aktivitas </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel1" id="kebel1" value="Kontrol">
                                                            <label class="form-check-label">Kontrol </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel2" id="kebel2" value="Makanan">
                                                            <label class="form-check-label">Makanan </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel3" id="kebel3" value="Senam">
                                                            <label class="form-check-label">Senam </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel4" id="kebel4" value="Pengobatan">
                                                            <label class="form-check-label">Pengobatan </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel5" id="kebel5" value="Rawat Luka">
                                                            <label class="form-check-label">Rawat Luka </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel6" id="kebel6" value="Tumbang">
                                                            <label class="form-check-label">Tumbang </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel7" id="kebel7" value="Seksual">
                                                            <label class="form-check-label">Seksual </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel8" id="kebel8" value="Modifikasi Lingkungan">
                                                            <label class="form-check-label">Modifikasi Lingkungan
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel9" id="kebel9" value="Manajemen stress">
                                                            <label class="form-check-label">Manajemen stress </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel10" id="kebel10" value="Pencegahan Penyakit">
                                                            <label class="form-check-label">Pencegahan Penyakit </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel11" id="kebel11"
                                                                value="Pencegahan Komplikasi">
                                                            <label class="form-check-label">Pencegahan Komplikasi
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Pemahaman tentang penyakit :</label>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="penyak" id="penyak" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="penyak" id="penyak" value="ya">
                                                            <label class="form-check-label">ya : </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Pemahaman tentang perawatan :</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="penper" id="penper" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="penper" id="penper" value="ya">
                                                            <label class="form-check-label">ya : </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Pemahaman tentang pengobatan :</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="pengob" id="pengob" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="pengob" id="pengob" value="ya">
                                                            <label class="form-check-label">ya : </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Pemahaman tentang nutrisi/diet :</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="pennut" id="pennut" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="pennut" id="pennut" value="ya">
                                                            <label class="form-check-label">ya : </label>
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
                <div class="accordion" id="accordionExample923">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne923" aria-expanded="true"
                                    aria-controls="collapseOne923">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Hambatan Untuk Menerima Edukasi
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne923" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample923">
                            <div class="card-body bg-light">
                                <table class="table">
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="hambatan" id="hambatan" value="Tidak Ada">
                                                            <label class="form-check-label">Tidak Ada </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="hambatan1" id="hambatan1"
                                                                value="Ada gangguan penglihatan">
                                                            <label class="form-check-label">Ada gangguan penglihatan
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="hambatan2" id="hambatan2"
                                                                value="ada gangguan pendengaran">
                                                            <label class="form-check-label">ada gangguan pendengaran
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="hambatan3" id="hambatan3"
                                                                value="Belum melek huruf">
                                                            <label class="form-check-label">Belum melek huruf </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="hambatan4" id="hambatan4"
                                                                value="Ada gangguan emosi">
                                                            <label class="form-check-label">Ada gangguan emosi </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="hambatan5" id="hambatan5"
                                                                value="Ada gangguan fisik">
                                                            <label class="form-check-label">Ada gangguan fisik </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="hambatan6" id="hambatan6"
                                                                value="Ada gangguan kognitif">
                                                            <label class="form-check-label">Ada gangguan kognitif
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="hambatan7" id="hambatan7"
                                                                value="Keterbatasan motivasi">
                                                            <label class="form-check-label">Keterbatasan motivasi
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Ada keterbatasan dalam hal budaya / spiritual /
                                                            agama :</label>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="spiritual" id="spiritual" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="spiritual" id="spiritual" value="ya">
                                                            <label class="form-check-label">ya : </label>
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
                                        <th class="text-bold float-center">Faktor Risiko</th>
                                        <th class="text-bold float-center">Skala</th>
                                        <th class="text-bold float-center">Poin</th>
                                        <th class="text-bold float-center">Skor Pasien</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="2">Riwayat Jatuh</td>
                                            <td>Ya</td>
                                            <td>25</td>

                                            <td rowspan="2">
                                                <div class="form-group">
                                                    <input type="number" name="rjvalue" id="rjvalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Tidak</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">Diagnosis sekunder (>= 2 diagnosa medis)</td>
                                            <td>Ya</td>
                                            <td>15</td>
                                            <td rowspan="2">
                                                <div class="form-group">
                                                    <input type="number" name="dsvalue" id="dsvalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Tidak</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="3">Alat bantu</td>
                                            <td>Berpegangan pada perabot</td>
                                            <td>30</td>
                                            <td rowspan="3">
                                                <div class="form-group">
                                                    <input type="number" name="abvalue" id="abvalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Berpegangan pada peratbot</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                            <td>Tidak ada / kursi roda/perawat/tirah baring</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">Terpasang infuse</td>
                                            <td>Ya</td>
                                            <td>20</td>
                                            <td rowspan="2">
                                                <div class="form-group">
                                                    <input type="number" name="tivalue" id="tivalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Tidak</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="3">Gaya berjalan</td>
                                            <td>Terganggu</td>
                                            <td>20</td>
                                            <td rowspan="3">
                                                <div class="form-group">
                                                    <input type="number" name="gjvalue" id="gjvalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Lemah</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>Normal/tirah baring/imobilisasi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">Status Mental</td>
                                            <td>Sering lupa akan keterbatasan yang dimiliki</td>
                                            <td>15</td>
                                            <td rowspan="2">
                                                <div class="form-group">
                                                    <input type="number" name="smvalue" id="smvalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>sadar akan kemampuan diri sendiri</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
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
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> SKRINING NUTRISI (Malnutrition
                                    Screening tools)
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne101" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample101">
                            <div class="card-body bg-light">
                                <table class="table">
                                    <thead>
                                        <th class="text-bold float-center">No</th>
                                        <th class="text-bold float-center">Parameter</th>
                                        <th class="text-bold float-center">Nilai</th>
                                        <th class="text-bold float-center">SKOR</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="9">1</td>
                                            <td>Apakah pasien mengalami penurunan berat badan yang tidak direncanakan ?
                                            </td>
                                            <td>
                                            </td>
                                            <td rowspan="9">
                                                <div class="form-group">
                                                    <input type="number" name="bbvalue" id="bbvalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Tidak (tidak terjadi penurunan dalam 6 bulan terakhir)</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Tidak yakain (tanyakan apakah baju / celana terasa longggar)</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>Ya, berapakah penurunan berat badan tersebut</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="bbbvalue" id="bbbvalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1 - 5 kg</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>6 - 10 kg</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>11 - 15 kg</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>> 15 kg</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>tidak yakin</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="3">2</td>
                                            <td>Apakah asupan makanan pasien buruk akibat nafsu makan yang menurun **?
                                                (misal asupan makan hanya 3/4 dari biasanya) </td>
                                            <td></td>
                                            <td rowspan="3">
                                                <div class="form-group">
                                                    <input type="number" name="pbvalue" id="pbvalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>tidak</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>ya</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td>Total Skor</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="total_nutrisi" id="total_nutrisi"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td rowspan="3">3</td>
                                            <td colspan="2">Sakit berat ***)</td>
                                            <td rowspan="3">
                                                <div class="form-group">
                                                    <input type="number" name="sbvalue" id="sbvalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td colspan="2"><input class="form-check-input" type="radio"
                                                    name="sakit_berat" id="sakit_berat" value="Tidak">
                                                <label class="form-check-label">Tidak </label>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="form-check-input" type="radio" name="sakit_berat"
                                                    id="sakit_berat" value="Ya">
                                                <label class="form-check-label">Ya </label>
                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Total nutrisi</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="totalnutrisi" id="totalnutrisi"
                                                        class="form-control" />
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="text-bold font-italic">Apakah Terdapat Keluhan Nyeri ?? </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="nyeri"
                                                                id="nyeri" value="Ya">
                                                            <label class="form-check-label">Ya </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="nyeri"
                                                                id="nyeri" value="Tidak ada">
                                                            <label class="form-check-label">Tidak ada </label>
                                                        </div>
                                                    </div>


                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Apakah Nyerinya Berpindah ?? </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="nyeri_pindah" id="nyeri_pindah" value="Ya">
                                                            <label class="form-check-label">Ya </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="nyeri_pindah" id="nyeri_pindah" value="Tidak">
                                                            <label class="form-check-label">Tidak </label>
                                                        </div>
                                                    </div>


                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Berapa Lama Nyeri Ini ?? </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="lamanyeri" id="lamanyeri"
                                                                value="< 3 bulan = akut">
                                                            <label class="form-check-label">
                                                                < 3 bulan=akut </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="lamanyeri" id="lamanyeri"
                                                                value="> 3 bulan = kronik">
                                                            <label class="form-check-label">> 3 bulan = kronik </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="lamanyeri" id="lamanyeri" value="Tidak Ada"
                                                                checked>
                                                            <label class="form-check-label">Tidak Ada </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Rasa Nyeri ?? </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri" id="rasanyeri" value="Tajam">
                                                            <label class="form-check-label">Tajam </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri1" id="rasanyeri1" value="Nyeri Tumpul">
                                                            <label class="form-check-label">Nyeri Tumpul </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri2" id="rasanyeri2"
                                                                value="Seperti Ditarik">
                                                            <label class="form-check-label">Seperti Ditarik </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri3" id="rasanyeri3"
                                                                value="Seperti Di tusuk">
                                                            <label class="form-check-label">Seperti Di tusuk </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri4" id="rasanyeri4"
                                                                value="Seperti Dipukul">
                                                            <label class="form-check-label">Seperti Dipukul </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri5" id="rasanyeri5"
                                                                value="Seperti Dibakar">
                                                            <label class="form-check-label">Seperti Dibakar </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri6" id="rasanyeri6"
                                                                value="Seperti Berdenyut">
                                                            <label class="form-check-label">Seperti Berdenyut </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri7" id="rasanyeri7"
                                                                value="Seperti Ditikam">
                                                            <label class="form-check-label">Seperti Ditikam </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri8" id="rasanyeri8" value="Seperti Kram">
                                                            <label class="form-check-label">Seperi Kram </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri9" id="rasanyeri9" value="Tidak Ada"
                                                                checked>
                                                            <label class="form-check-label">Tidak Ada </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Seberapa Sering Anda Mengalami Nyeri ini?
                                                Berapa Lama ?? </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <label class="texxt-bold">Setiap :</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="seringnyeri" id="seringnyeri" value="1 -2 jam">
                                                            <label class="form-check-label">1 -2 jam </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="seringnyeri" id="seringnyeri" value="3 - 4 jam">
                                                            <label class="form-check-label">3 - 4 jam </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="seringnyeri" checked id="seringnyeri"
                                                                value="Tidak Ada">
                                                            <label class="form-check-label">Tidak Ada </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <label class="texxt-bold">Selama :</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="serringnyeri" id="serringnyeri"
                                                                value="< 30 Menit">
                                                            <label class="form-check-label">
                                                                < 30 Menit </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="serringnyeri" id="serringnyeri"
                                                                value="> 30 Menit">
                                                            <label class="form-check-label">> 30 Menit </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="serringnyeri" id="serringnyeri" checked
                                                                value="Tidak Ada">
                                                            <label class="form-check-label">Tidak Ada </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Apa yang membuat nyeri berkurang dan
                                                bertambah parah? </td>
                                            <td>
                                                <div class="row">

                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="berkurangnyeri" id="berkurangnyeri"
                                                                value="Kompres hangat/ dingin">
                                                            <label class="form-check-label">Kompres hangat/ dingin
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="berkurangnyeri" id="berkurangnyeri"
                                                                value="Aktivitas dikurangi / bertambah">
                                                            <label class="form-check-label">Aktivitas dikurangi /
                                                                bertambah </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="berkurangnyeri" id="berkurangnyeri"
                                                                value="Tidak Ada" checked>
                                                            <label class="form-check-label">Tidak Ada </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold">LOKASI NYERI </td>

                                            <td>
                                                <!-- <div type="button" class="btn btn-secondary penandaan ml-3 mb-3" style="margin-top: 20px;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        PENANDAAN GAMBAR
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div> -->
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <div class="penandaangambar">
                                                            <div class="card">
                                                                <div class="card-header  bg-warning">Penandaan Gambar
                                                                </div>
                                                                <div class="card-body">
                                                                    <input type="text" hidden id="gambarcoret"
                                                                        name="gambarcoret">
                                                                    <img id="gambarnya1" style="margin-top:50px"
                                                                        width="600px" height="400px"
                                                                        src="{{ asset('public/img/nyeri.png') }}"
                                                                        onclick="showMarkerArea(this);" />
                                                                    <canvas hidden id="myCanvas1" width="600px"
                                                                        height="400px"
                                                                        style="border:1px solid #d3d3d3;">
                                                                    </canvas>
                                                                    <button type="button" class="btn btn-danger mt-2"
                                                                        onclick="batalgambar1()">batal</button>

                                                                </div>
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
                    <i class="bi bi-book mr-1 ml-1"></i> (A) ASSESMEN
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
                                <div class="input-group">
                                    <textarea class="form-control" id="diagnosakebidanan" name="diagnosakebidanan"
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
<!-- <div class="accordion" id="accordionExample95">
        <div class="card">
            <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse"
                        data-target="#collapseOne95" aria-expanded="true" aria-controls="collapseOne95">
                        <i class="bi bi-book mr-1 ml-1"></i>(P) PLANNING
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
                                        <textarea class="form-control" id="rencanaasuhan" name="rencanaasuhan"
                                            placeholder=""></textarea>
                                    </div>
                                </td>
                            </tr>
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
    </div> -->
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

<div type="button" class="btn float-right btn-success simpanassesvk" style="margin-top: 20px;">
    SIMPAN
</div>
@elseif($assesper[0]->status == 2)
<h1>Data Sudah Tidak Bisa Diubah Karena sudah di Validasi</h1>
@else
<div class="card-header bg-info">
    <h3 class="card-title ">ASSESMENT IBU KEBIDANAN INSTALASI GAWAT DARURAT KEBIDANAN (IGDK) </h3>
</div>
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
                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" checked
                        value="Pasien Sendiri">
                    <label class="form-check-label" for="inlineRadio1">Pasien Sendiri /Autoanamase</label>
                    @else
                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata"
                        value="Pasien Sendiri">
                    <label class="form-check-label" for="inlineRadio1">Pasien Sendiri /Autoanamase</label>
                    @endif
                </div>

            </td>
            <td>
                <div class="form-check form-check-inline">
                    @if($assesper[0]->sumber_data == 'Keluarga')
                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" checked
                        value="Keluarga">
                    <label class="form-check-label" for="inlineRadio2">Keluarga / Alloanamnesa</label>
                    @else
                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Keluarga">
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
                    <input class="form-check-input" type="radio" name="asalmasuk" checked id="asalmasuk"
                        value="Non Rujukan">
                    <label class="form-check-label" for="inlineRadio1">Non Rujukan</label>
                    @else
                    <input class="form-check-input" type="radio" name="asalmasuk" id="asalmasuk" value="Non Rujukan">
                    <label class="form-check-label" for="inlineRadio1">Non Rujukan</label>
                    @endif
                </div>

            </td>
            <td>
                <div class="form-check form-check-inline">
                    @if($assesper[0]->asal_masuk == 'Rujukan')
                    <input class="form-check-input" type="radio" name="asalmasuk" checked id="asalmasuk"
                        value="Rujukan">
                    <label class="form-check-label" for="inlineRadio2">Rujukan </label>
                    @else
                    <input class="form-check-input" type="radio" name="asalmasuk" id="asalmasuk" value="Rujukan">
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
                    <input class="form-check-input" type="radio" checked name="caramasuk" id="caramasuk"
                        value="Jalan Kaki">
                    <label class="form-check-label" for="inlineRadio1">Jalan Kaki</label>
                    @else
                    <input class="form-check-input" type="radio" name="caramasuk" id="caramasuk" value="Jalan Kaki">
                    <label class="form-check-label" for="inlineRadio1">Jalan Kaki</label>
                    @endif
                </div>

            </td>
            <td>
                <div class="form-check form-check-inline">
                    @if($assesper[0]->cara_masuk == 'Kursi Roda')

                    <input class="form-check-input" type="radio" name="caramasuk" checked id="caramasuk"
                        value="Kursi Roda">
                    <label class="form-check-label" for="inlineRadio2">Kursi Roda </label>
                    @else
                    <input class="form-check-input" type="radio" name="caramasuk" id="caramasuk" value="Kursi Roda">
                    <label class="form-check-label" for="inlineRadio2">Kursi Roda </label>
                    @endif
                </div>
            </td>
            <td>
                <div class="form-check form-check-inline">
                    @if($assesper[0]->cara_masuk == 'Brankar')
                    <input class="form-check-input" type="radio" name="caramasuk" id="caramasuk" checked
                        value="Brankar">
                    <label class="form-check-label" for="inlineRadio2">Brankar </label>
                    @else
                    <input class="form-check-input" type="radio" name="caramasuk" id="caramasuk" value="Brankar">
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
                                            <td class="text-bold font-italic">Tekanan Darah</td>
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
                                            </td>
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
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Imunisasi</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi == 'BCG')
                                                <input class="form-check-input" type="checkbox" name="imunisasi" checked
                                                    id="imunisasi" value="BCG">
                                                <label class="form-check-label">BCG</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi"
                                                    id="imunisasi" value="BCG">
                                                <label class="form-check-label">BCG</label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi1 == 'DPT')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="imunisasi1" id="imunisasi1" value="DPT">
                                                <label class="form-check-label">DPT</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi1"
                                                    id="imunisasi1" value="DPT">
                                                <label class="form-check-label">DPT</label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi2 == 'POLIO')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="imunisasi2" id="imunisasi2" value="POLIO">
                                                <label class="form-check-label">POLIO</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi2"
                                                    id="imunisasi2" value="POLIO">
                                                <label class="form-check-label">POLIO</label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi3 == 'CAMPAK')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="imunisasi3" id="imunisasi3" value="CAMPAK">
                                                <label class="form-check-label">CAMPAK</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi3"
                                                    id="imunisasi3" value="CAMPAK">
                                                <label class="form-check-label">CAMPAK</label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi4 == 'Hepatitis B')
                                                <input class="form-check-input" type="checkbox" name="imunisasi4"
                                                    checked id="imunisasi4" value="Hepatitis B">
                                                <label class="form-check-label">Hepatitis B</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi4"
                                                    id="imunisasi4" value="Hepatitis B">
                                                <label class="form-check-label">Hepatitis B</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi5 == 'PCV')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="imunisasi5" id="imunisasi5" value="PCV">
                                                <label class="form-check-label">PCV</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi5"
                                                    id="imunisasi5" value="PCV">
                                                <label class="form-check-label">PCV</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi6 == 'Varicela')
                                                <input class="form-check-input" type="checkbox" name="imunisasi6"
                                                    checked id="imunisasi6" value="Varicela">
                                                <label class="form-check-label">Varicela</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi6"
                                                    id="imunisasi6" value="Varicela">
                                                <label class="form-check-label">Varicela</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi7 == 'Typoid')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="imunisasi7" id="imunisasi7" value="Typoid">
                                                <label class="form-check-label">Typoid</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi7"
                                                    id="imunisasi7" value="Typoid">
                                                <label class="form-check-label">Typoid</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi8 == 'Hepatitis A')
                                                <input class="form-check-input" type="checkbox" name="imunisasi8"
                                                    checked id="imunisasi8" value="Hepatitis A">
                                                <label class="form-check-label">Hepatitis A</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi8"
                                                    id="imunisasi8" value="Hepatitis A">
                                                <label class="form-check-label">Hepatitis A</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi9 == 'Meningitis')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="imunisasi9" id="imunisasi9" value="Meningitis">
                                                <label class="form-check-label">Meningitis</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi9"
                                                    id="imunisasi9" value="Meningitis">
                                                <label class="form-check-label">Meningitis</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi10 == 'Rotavirus')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="imunisasi10" id="imunisasi10" value="Rotavirus">
                                                <label class="form-check-label">Rotavirus</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi10"
                                                    id="imunisasi10" value="Rotavirus">
                                                <label class="form-check-label">Rotavirus</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi11 == 'HIB')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="imunisasi11" id="imunisasi11" value="HIB">
                                                <label class="form-check-label">HIB</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi11"
                                                    id="imunisasi11" value="HIB">
                                                <label class="form-check-label">HIB</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi12 == 'MMR')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="imunisasi12" id="imunisasi12" value="MMR">
                                                <label class="form-check-label">MMR</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi12"
                                                    id="imunisasi12" value="MMR">
                                                <label class="form-check-label">MMR</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi13 == 'Influenza')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="imunisasi13" id="imunisasi13" value="Influenza">
                                                <label class="form-check-label">Influenza</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi13"
                                                    id="imunisasi13" value="Influenza">
                                                <label class="form-check-label">Influenza</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi14 == 'HPV')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="imunisasi14" id="imunisasi14" value="HPV">
                                                <label class="form-check-label">HPV</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi14"
                                                    id="imunisasi14" value="HPV">
                                                <label class="form-check-label">HPV</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi15 == 'Pneumokokus')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="imunisasi15" id="imunisasi15" value="Pneumokokus">
                                                <label class="form-check-label">Pneumokokus</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi15"
                                                    id="imunisasi15" value="Pneumokokus">
                                                <label class="form-check-label">Pneumokokus</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi16 == 'Tetanus')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="imunisasi16" id="imunisasi16" value="Tetanus">
                                                <label class="form-check-label">Tetanus</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi16"
                                                    id="imunisasi16" value="Tetanus">
                                                <label class="form-check-label">Tetanus</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi17 == 'Zooster')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="imunisasi17" id="imunisasi17" value="Zooster">
                                                <label class="form-check-label">Zooster</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi17"
                                                    id="imunisasi17" value="Zooster">
                                                <label class="form-check-label">Zooster</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasi18 == 'Yellow Fever')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="imunisasi18" id="imunisasi18" value="Yellow Fever">
                                                <label class="form-check-label">Yellow Fever</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasi18"
                                                    id="imunisasi18" value="Yellow Fever">
                                                <label class="form-check-label">Yellow Fever</label>
                                                @endif

                                            </div>
                                        </div>

                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Keluarga Berencana</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="text-bold font-italic" for="">Metode KB yang di pakai</label>

                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kberencana == 'suntik')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="kberencana" id="kberencana" value="suntik">
                                                <label class="form-check-label">suntik</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="kberencana"
                                                    id="kberencana" value="suntik">
                                                <label class="form-check-label">suntik</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kberencana1 == 'Pil')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="kberencana1" id="kberencana1" value="Pil">
                                                <label class="form-check-label">Pil</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="kberencana1"
                                                    id="kberencana1" value="Pil">
                                                <label class="form-check-label">Pil</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kberencana2 == 'AKD')
                                                <input class="form-check-input" type="checkbox" name="kberencana2"
                                                    id="kberencana2" value="AKD">
                                                <label class="form-check-label">AKD</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="kberencana2"
                                                    id="kberencana2" value="AKD">
                                                <label class="form-check-label">AKD</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kberencana3 == 'MOW')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="kberencana3" id="kberencana3" value="MOW">
                                                <label class="form-check-label">MOW</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="kberencana3"
                                                    id="kberencana3" value="MOW">
                                                <label class="form-check-label">MOW</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kberencana4 == 'IMPLAN')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="kberencana4" id="kberencana4" value="IMPLAN">
                                                <label class="form-check-label">IMPLAN</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="kberencana4"
                                                    id="kberencana4" value="IMPLAN">
                                                <label class="form-check-label">IMPLAN</label>
                                                @endif

                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kberencana5 == 'AKDR')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="kberencana5" id="kberencana5" value="AKDR">
                                                <label class="form-check-label">AKDR</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="kberencana5"
                                                    id="kberencana5" value="AKDR">
                                                <label class="form-check-label">AKDR</label>
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
                                        <div class="col-md-3">
                                            <label class="text-bold font-italic" for="">Komplikasi KB</label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->komplikasikb == 'Pendarahan')
                                                <input class="form-check-input" type="checkbox" checked
                                                    name="komplikasikb" id="komplikasikb" value="Pendarahan">
                                                <label class="form-check-label">Pendarahan</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="komplikasikb"
                                                    id="komplikasikb" value="Pendarahan">
                                                <label class="form-check-label">Pendarahan</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->komplikasikb1 == 'PID / radang panggul')
                                                <input class="form-check-input" type="checkbox" name="komplikasikb1"
                                                    checked id="komplikasikb1" value="PID / radang panggul">
                                                <label class="form-check-label">PID / radang panggul</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="komplikasikb1"
                                                    id="komplikasikb1" value="PID / radang panggul">
                                                <label class="form-check-label">PID / radang panggul</label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->komplikasikb2 == 'Tidak Ada Komplikasi')
                                                <input class="form-check-input" type="checkbox" name="komplikasikb2"
                                                    id="komplikasikb2" checked value="Tidak Ada Komplikasi">
                                                <label class="form-check-label">Tidak Ada Komplikasi</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="komplikasikb2"
                                                    id="komplikasikb2" value="Tidak Ada Komplikasi">
                                                <label class="form-check-label">Tidak Ada Komplikasi</label>
                                                @endif

                                            </div>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Penyakit</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->rpenyakit == 'Diabetes Melitus')
                                                <input class="form-check-input" type="checkbox" name="rpenyakit" checked
                                                    id="rpenyakit" value="Diabetes Melitus">
                                                <label class="form-check-label">Diabetes Melitus</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpenyakit"
                                                    id="rpenyakit" value="Diabetes Melitus">
                                                <label class="form-check-label">Diabetes Melitus</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->rpenyakit1 == 'Hepatitis')
                                                <input class="form-check-input" type="checkbox" name="rpenyakit1"
                                                    checked id="rpenyakit1" value="Hepatitis">
                                                <label class="form-check-label">Hepatitis</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpenyakit1"
                                                    id="rpenyakit1" value="Hepatitis">
                                                <label class="form-check-label">Hepatitis</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->rpenyakit2 == 'Stroke')
                                                <input class="form-check-input" type="checkbox" name="rpenyakit2"
                                                    checked id="rpenyakit2" value="Stroke">
                                                <label class="form-check-label">Stroke</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpenyakit2"
                                                    id="rpenyakit2" value="Stroke">
                                                <label class="form-check-label">Stroke</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->rpenyakit3 == 'Ginjal')
                                                <input class="form-check-input" type="checkbox" name="rpenyakit3"
                                                    checked id="rpenyakit3" value="Ginjal">
                                                <label class="form-check-label">Ginjal</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpenyakit3"
                                                    id="rpenyakit3" value="Ginjal">
                                                <label class="form-check-label">Ginjal</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->rpenyakit4 == 'Hipertensi')
                                                <input class="form-check-input" type="checkbox" name="rpenyakit4"
                                                    checked id="rpenyakit4" value="Hipertensi">
                                                <label class="form-check-label">Hipertensi</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpenyakit4"
                                                    id="rpenyakit4" value="Hipertensi">
                                                <label class="form-check-label">Hipertensi</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->rpenyakit5 == 'TBC')
                                                <input class="form-check-input" type="checkbox" name="rpenyakit5"
                                                    checked id="rpenyakit5" value="TBC">
                                                <label class="form-check-label">TBC</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpenyakit5"
                                                    id="rpenyakit5" value="TBC">
                                                <label class="form-check-label">TBC</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->rpenyakit6 == 'Jantung')
                                                <input class="form-check-input" type="checkbox" name="rpenyakit6"
                                                    checked id="rpenyakit6" value="Jantung">
                                                <label class="form-check-label">Jantung</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpenyakit6"
                                                    id="rpenyakit6" value="Jantung">
                                                <label class="form-check-label">Jantung</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->rpenyakit7 == 'Keganasan')
                                                <input class="form-check-input" type="checkbox" name="rpenyakit7"
                                                    checked id="rpenyakit7" value="Keganasan">
                                                <label class="form-check-label">Keganasan</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpenyakit7"
                                                    id="rpenyakit7" value="Keganasan">
                                                <label class="form-check-label">Keganasan</label>
                                                @endif

                                            </div>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Operasi</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->operasi == '')
                                                <input class="form-check-input" type="checkbox" name="operasi" checked
                                                    id="operasi" value="">
                                                <label class="form-check-label">Pernah dirawat :</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="operasi"
                                                    id="operasi" value="">
                                                <label class="form-check-label">Pernah dirawat :</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->operasi1 == 'tidak')
                                                <input class="form-check-input" type="checkbox" name="operasi1" checked
                                                    id="operasi1" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="operasi1"
                                                    id="operasi1" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->operasi2 == 'ya')
                                                <input class="form-check-input" type="checkbox" name="operasi2" checked
                                                    id="operasi2" value="ya">
                                                <label class="form-check-label">ya</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="operasi2"
                                                    id="operasi2" value="ya">
                                                <label class="form-check-label">ya</label>
                                                @endif

                                            </div>
                                        </div>



                                    </div>
                                </td>

                            </tr>

                            <tr>
                                <td class="text-bold font-italic">Riwayat Ginekologi</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->ginekologi == 'Infertilitas')
                                                <input class="form-check-input" type="checkbox" name="ginekologi"
                                                    checked id="ginekologi" value="Infertilitas">
                                                <label class="form-check-label">Infertilitas</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="ginekologi"
                                                    id="ginekologi" value="Infertilitas">
                                                <label class="form-check-label">Infertilitas</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->ginekologi1 == 'Infeksi Virus')
                                                <input class="form-check-input" type="checkbox" name="ginekologi1"
                                                    checked id="ginekologi1" value="Infeksi Virus">
                                                <label class="form-check-label">Infeksi Virus</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="ginekologi1"
                                                    id="ginekologi1" value="Infeksi Virus">
                                                <label class="form-check-label">Infeksi Virus</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->ginekologi2 == 'PMS')
                                                <input class="form-check-input" type="checkbox" name="ginekologi2"
                                                    checked id="ginekologi2" value="PMS">
                                                <label class="form-check-label">PMS</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="ginekologi2"
                                                    id="ginekologi2" value="PMS">
                                                <label class="form-check-label">PMS</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->ginekologi3 == 'Cervictis Kronis')
                                                <input class="form-check-input" type="checkbox" name="ginekologi3"
                                                    checked id="ginekologi3" value="Cervictis Kronis">
                                                <label class="form-check-label">Cervictis Kronis</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="ginekologi3"
                                                    id="ginekologi3" value="Cervictis Kronis">
                                                <label class="form-check-label">Cervictis Kronis</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->ginekologi4 == 'Endometriosis')
                                                <input class="form-check-input" type="checkbox" name="ginekologi4"
                                                    checked id="ginekologi4" value="Endometriosis">
                                                <label class="form-check-label">Endometriosis</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="ginekologi4"
                                                    id="ginekologi4" value="Endometriosis">
                                                <label class="form-check-label">Endometriosis</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->ginekologi5 == 'Mioma')
                                                <input class="form-check-input" type="checkbox" name="ginekologi5"
                                                    checked id="ginekologi5" value="Mioma">
                                                <label class="form-check-label">Mioma</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="ginekologi5"
                                                    id="ginekologi5" value="Mioma">
                                                <label class="form-check-label">Mioma</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->ginekologi6 == 'Polip Cevix')
                                                <input class="form-check-input" type="checkbox" name="ginekologi6"
                                                    checked id="ginekologi6" value="Polip Cevix">
                                                <label class="form-check-label">Polip Cevix</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="ginekologi6"
                                                    id="ginekologi6" value="Polip Cevix">
                                                <label class="form-check-label">Polip Cevix</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->ginekologi8 == 'Kanker Kandungan')
                                                <input class="form-check-input" type="checkbox" name="ginekologi8"
                                                    id="ginekologi8" value="Kanker Kandungan">
                                                <label class="form-check-label">Kanker Kandungan</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="ginekologi8"
                                                    id="ginekologi8" value="Kanker Kandungan">
                                                <label class="form-check-label">Kanker Kandungan</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->ginekologi9 == 'Perkosaan')
                                                <input class="form-check-input" type="checkbox" name="ginekologi9"
                                                    checked id="ginekologi9" value="Perkosaan">
                                                <label class="form-check-label">Perkosaan</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="ginekologi9"
                                                    id="ginekologi9" value="Perkosaan">
                                                <label class="form-check-label">Perkosaan</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->ginekologi10 == 'Operasi Kandungan')
                                                <input class="form-check-input" type="checkbox" name="ginekologi10"
                                                    checked id="ginekologi10" value="Operasi Kandungan">
                                                <label class="form-check-label">Operasi Kandungan</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="ginekologi10"
                                                    id="ginekologi10" value="Operasi Kandungan">
                                                <label class="form-check-label">Operasi Kandungan</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->ginekologi11 == 'Tidak Ada')
                                                <input class="form-check-input" type="checkbox" name="ginekologi11"
                                                    checked id="ginekologi11" value="Tidak Ada">
                                                <label class="form-check-label">Tidak Ada</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="ginekologi11"
                                                    id="ginekologi11" value="Tidak Ada">
                                                <label class="form-check-label">Tidak Ada</label>
                                                @endif

                                            </div>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Penyakit Keluarga</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->rpk == 'Kanker')
                                                <input class="form-check-input" type="checkbox" name="rpk" checked
                                                    id="rpk" value="Kanker">
                                                <label class="form-check-label">Kanker</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpk" id="rpk"
                                                    value="Kanker">
                                                <label class="form-check-label">Kanker</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->rpk1 == 'Penyakit Hati')
                                                <input class="form-check-input" type="checkbox" name="rpk1" checked
                                                    id="rpk1" value="Penyakit Hati">
                                                <label class="form-check-label">Penyakit Hati</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpk1" id="rpk1"
                                                    value="Penyakit Hati">
                                                <label class="form-check-label">Penyakit Hati</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->rpk2 == 'Hipertensi')
                                                <input class="form-check-input" type="checkbox" name="rpk2" checked
                                                    id="rpk2" value="Hipertensi">
                                                <label class="form-check-label">Hipertensi</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpk2" id="rpk2"
                                                    value="Hipertensi">
                                                <label class="form-check-label">Hipertensi</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->rpk3 == 'DM')
                                                <input class="form-check-input" type="checkbox" name="rpk3" checked
                                                    id="rpk3" value="DM">
                                                <label class="form-check-label">DM</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpk3" id="rpk3"
                                                    value="DM">
                                                <label class="form-check-label">DM</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->rpk4 == 'Penyakit Ginjal')
                                                <input class="form-check-input" type="checkbox" name="rpk4" checked
                                                    id="rpk4" value="Penyakit Ginjal">
                                                <label class="form-check-label">Penyakit Ginjal</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpk4" id="rpk4"
                                                    value="Penyakit Ginjal">
                                                <label class="form-check-label">Penyakit Ginjal</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->rpk5 == 'Penyakit Jiwa')
                                                <input class="form-check-input" type="checkbox" name="rpk5" checked
                                                    id="rpk5" value="Penyakit Jiwa">
                                                <label class="form-check-label">Penyakit Jiwa</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpk5" id="rpk5"
                                                    value="Penyakit Jiwa">
                                                <label class="form-check-label">Penyakit Jiwa</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->rpk6 == 'Hamil Kembar')
                                                <input class="form-check-input" type="checkbox" name="rpk6" checked
                                                    id="rpk6" value="Hamil Kembar">
                                                <label class="form-check-label">Hamil Kembar</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpk6" id="rpk6"
                                                    value="Hamil Kembar">
                                                <label class="form-check-label">Hamil Kembar</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->rpk7 == 'TBC')
                                                <input class="form-check-input" type="checkbox" name="rpk7" checked
                                                    id="rpk7" value="TBC">
                                                <label class="form-check-label">TBC</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpk7" id="rpk7"
                                                    value="TBC">
                                                <label class="form-check-label">TBC</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->rpk8 == 'Epilepsi')
                                                <input class="form-check-input" type="checkbox" name="rpk8" checked
                                                    id="rpk8" value="Epilepsi">
                                                <label class="form-check-label">Epilepsi</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpk8" id="rpk8"
                                                    value="Epilepsi">
                                                <label class="form-check-label">Epilepsi</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->rpk8 == 'Epilepsi')
                                                <input class="form-check-input" type="checkbox" name="rpk8" checked
                                                    id="rpk8" value="Alergi">
                                                <label class="form-check-label">Alergi</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpk8" id="rpk8"
                                                    value="Alergi">
                                                <label class="form-check-label">Alergi</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->rpk9 == 'Tidak Ada')
                                                <input class="form-check-input" type="checkbox" name="rpk9" checked
                                                    id="rpk9" value="Tidak Ada">
                                                <label class="form-check-label">Tidak Ada</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="rpk9" id="rpk9"
                                                    value="Tidak Ada">
                                                <label class="form-check-label">Tidak Ada</label>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Obat</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-bold font-italic">Pengobatan yang di lanjutkan
                                                            di rumah : </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <form id="dynamic-form" class="formobatplg">
                                                                <h5>Klik Tombol Tambah untuk menambahkan Riwayat Obat
                                                                </h5>

                                                                <div class="field_wrapperrr">
                                                                    <div class="row mt-2">


                                                                        <div class="col-md-2">
                                                                            <a class="btn btn-success"
                                                                                href="javascript:void(0);"
                                                                                id="add_button"
                                                                                title="Add field">TAMBAH</a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </form>
                                                            <table id="tableobatrekon" class="table">
                                                                <thead>
                                                                    <th hidden>ID</th>
                                                                    <th>Nama Obat</th>
                                                                    <th>Dosis</th>
                                                                    <th>Jam Pemberian</th>
                                                                    <th>Instruksi Khusus</th>

                                                                    <th>Action</th>

                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($obatplg as $ri => $r)
                                                                    <tr>
                                                                        <td class="id" hidden>{{$r->id}}</td>
                                                                        <td class="nama_obat">{{$r->nama_obat}}</td>
                                                                        <td class="dosis">{{$r->dosis}}</td>

                                                                        <td class="jam_pemberian">{{$r->jam_pemberian}}
                                                                        </td>
                                                                        <td class="instruksi_khusus">
                                                                            {{$r->instruksi_khusus}}
                                                                        </td>

                                                                        <td>
                                                                            <button
                                                                                class="badge badge-danger returobatplg"
                                                                                id="returobatplg"> Hapus </button>

                                                                        </td>
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
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Apa ada Terapi Komplementari</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->terapi == 'Jamu')
                                                <input class="form-check-input" type="checkbox" name="terapi" checked
                                                    id="terapi" value="Jamu">
                                                <label class="form-check-label">Jamu</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="terapi"
                                                    id="terapi" value="Jamu">
                                                <label class="form-check-label">Jamu</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->terapi1 == 'Accupunture')
                                                <input class="form-check-input" type="checkbox" name="terapi1" checked
                                                    id="terapi1" value="Accupunture">
                                                <label class="form-check-label">Accupunture</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="terapi1"
                                                    id="terapi1" value="Accupunture">
                                                <label class="form-check-label">Accupunture</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->terapi2 == 'Pijat')
                                                <input class="form-check-input" type="checkbox" name="terapi2" checked
                                                    id="terapi2" value="Pijat">
                                                <label class="form-check-label">Pijat</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="terapi2"
                                                    id="terapi2" value="Pijat">
                                                <label class="form-check-label">Pijat</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->terapi3 == 'Tidak Ada')
                                                <input class="form-check-input" type="checkbox" name="terapi3" checked
                                                    id="terapi3" value="Tidak Ada">
                                                <label class="form-check-label">Tidak Ada</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="terapi3"
                                                    id="terapi3" value="Tidak Ada">
                                                <label class="form-check-label">Tidak Ada</label>
                                                @endif

                                            </div>
                                        </div>


                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Alergi</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->aler == 'tidak')
                                                <input class="form-check-input" type="checkbox" name="aler" checked
                                                    id="aler" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="aler" id="aler"
                                                    value="tidak">
                                                <label class="form-check-label">tidak</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->aler1 == 'ada')
                                                <input class="form-check-input" type="checkbox" name="aler1" checked
                                                    id="aler1" value="ada">
                                                <label class="form-check-label">ada</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="aler1" id="aler1"
                                                    value="ada">
                                                <label class="form-check-label">ada</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="text" name="aler2" id="aler2"
                                                    placeholder="Sebutkan" value="">
                                            </div>
                                        </div>


                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Apakah Ada Kebiasaan</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="text-bold font-italic">Merokok : </label>

                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->kebiasaan == 'tidak')
                                                <input class="form-check-input" type="checkbox" name="kebiasaan" checked
                                                    id="kebiasaan" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="kebiasaan"
                                                    id="kebiasaan" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->kebiasaan1 == 'ya')
                                                <input class="form-check-input" type="checkbox" name="kebiasaan1"
                                                    checked id="kebiasaan1" value="ya">
                                                <label class="form-check-label">ya</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="kebiasaan1"
                                                    id="kebiasaan1" value="ya">
                                                <label class="form-check-label">ya</label>
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

                                            <label class="text-bold font-italic">Obat Tidur / Narkoba : </label>


                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->otidur == 'tidak')
                                                <input class="form-check-input" type="checkbox" name="otidur" checked
                                                    id="otidur" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="otidur"
                                                    id="otidur" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->otidur1 == 'ya')
                                                <input class="form-check-input" type="checkbox" name="otidur1" checked
                                                    id="otidur1" value="ya">
                                                <label class="form-check-label">ya</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="otidur1"
                                                    id="otidur1" value="ya">
                                                <label class="form-check-label">ya</label>
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

                                            <label class="text-bold font-italic">Alkohol : </label>

                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->alkohol == 'tidak')
                                                <input class="form-check-input" type="checkbox" name="alkohol" checked
                                                    id="alkohol" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="alkohol"
                                                    id="alkohol" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->alkohol1 == 'ya')
                                                <input class="form-check-input" type="checkbox" name="alkohol1" checked
                                                    id="alkohol1" value="ya">
                                                <label class="form-check-label">ya</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="alkohol1"
                                                    id="alkohol1" value="ya">
                                                <label class="form-check-label">ya</label>
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

                                            <label class="text-bold font-italic">Olahraga : </label>


                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->olahraga == 'tidak')
                                                <input class="form-check-input" type="checkbox" name="Olahraga"
                                                    id="Olahraga" checked value="tidak">
                                                <label class="form-check-label">tidak</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="Olahraga"
                                                    id="Olahraga" value="tidak">
                                                <label class="form-check-label">tidak</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->olahraga1 == 'ya')
                                                <input class="form-check-input" type="checkbox" name="Olahraga1" checked
                                                    id="Olahraga1" value="ya">
                                                <label class="form-check-label">ya</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="Olahraga1"
                                                    id="Olahraga1" value="ya">
                                                <label class="form-check-label">ya</label>
                                                @endif

                                            </div>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Mentruasi</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <label class="form-check-label">Umur Menarche : </label>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" size="5" type="Text" name="umurmenarche"
                                                    id="umurmenarche" value="{{$assesper[0]->umurmenarche}}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <label class="form-check-label">Lamanya Haid </label>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" size="5" type="Text" name="lamanyahaid"
                                                    id="lamanyahaid" value="{{$assesper[0]->lamanyahaid}}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <label class="form-check-label">Banyaknya : </label>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" size="5" type="Text" name="pembalut"
                                                    id="pembalut" value="{{$assesper[0]->pembalut}}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <label class="form-check-label">Haid Terakhir : </label>

                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                            <div class="form-check">
                                                <input class="form-check-input" size="5" type="date" name="haidterakhir"
                                                    id="haidterakhir" value="{{$assesper[0]->haidterakhir}}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <label class="form-check-label">TP : </label>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" size="5" type="Text" name="TP" id="TP"
                                                    value="{{$assesper[0]->TP}}">
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
                                                <label class="form-check-label">Dismonore : </label>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->Dismonore == 'Spoting')
                                                <input class="form-check-input" type="checkbox" name="Dismonore" checked
                                                    id="Dismonore" value="Spoting">
                                                <label class="form-check-label">Spoting </label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="Dismonore"
                                                    id="Dismonore" value="Spoting">
                                                <label class="form-check-label">Spoting </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->Dismonore1 == 'Menorrhagia')
                                                <input class="form-check-input" type="checkbox" name="Dismonore1"
                                                    checked id="Dismonore1" value="Menorrhagia">
                                                <label class="form-check-label">Menorrhagia </label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="Dismonore1"
                                                    id="Dismonore1" value="Menorrhagia">
                                                <label class="form-check-label">Menorrhagia </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->Dismonore2 == 'Methoragia')
                                                <input class="form-check-input" type="checkbox" name="Dismonore2"
                                                    checked id="Dismonore2" value="Methoragia">
                                                <label class="form-check-label">Methoragia </label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="Dismonore2"
                                                    id="Dismonore2" value="Methoragia">
                                                <label class="form-check-label">Methoragia </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->Dismonore3 == 'Pre Menstrual Syndrome')
                                                <input class="form-check-input" type="checkbox" name="Dismonore3"
                                                    checked id="Dismonore3" value="Pre Menstrual Syndrome">
                                                <label class="form-check-label">Pre Menstrual Syndrome </label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="Dismonore3"
                                                    id="Dismonore3" value="Pre Menstrual Syndrome">
                                                <label class="form-check-label">Pre Menstrual Syndrome </label>
                                                @endif

                                            </div>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Perkawinan</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <label class="form-check-label">Menikah : </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" size="5" type="text" name="menikah"
                                                    id="menikah" placeholder="kali" value="{{$assesper[0]->menikah}}">
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
                                                <label class="form-check-label">Usia Perkawinan I </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" size="5" type="text" name="menikah1"
                                                    id="menikah1" placeholder="Tahun"
                                                    value="{{$assesper[0]->menikah1}}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->menikah2 == 'Masih Menikah')
                                                <input class="form-check-input" type="checkbox" name="menikah2"
                                                    id="menikah2" value="Masih Menikah">
                                                <label class="form-check-label">Masih Menikah </label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="menikah2"
                                                    id="menikah2" value="Masih Menikah">
                                                <label class="form-check-label">Masih Menikah </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->menikah3 == 'Cerai')
                                                <input class="form-check-input" type="checkbox" name="menikah3" checked
                                                    id="menikah3" value="Cerai">
                                                <label class="form-check-label">Cerai </label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="menikah3"
                                                    id="menikah3" value="Cerai">
                                                <label class="form-check-label">Cerai </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->menikah4 == 'Meninggal')
                                                <input class="form-check-input" type="checkbox" name="menikah4" checked
                                                    id="menikah4" value="Meninggal">
                                                <label class="form-check-label">Meninggal </label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="menikah4"
                                                    id="menikah4" value="Meninggal">
                                                <label class="form-check-label">Meninggal </label>
                                                @endif

                                            </div>
                                        </div>


                                    </div>
                                </td>

                            </tr>

                            <tr>
                                <td class="text-bold font-italic">Riwayat Kehamilan</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-group-label ">G : </label>

                                                <input class="form-group" type="text" name="G" id="G" placeholder="G:"
                                                    value="{{$assesper[0]->G}}">

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-group-label">P : </label>
                                                <input class="form-group" type="text" name="P" id="P" placeholder="P:"
                                                    value="{{$assesper[0]->P}}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-group-label">A : </label>

                                                <input class="form-group" type="text" name="A" id="A" placeholder="A:"
                                                    value="{{$assesper[0]->A}}">
                                            </div>
                                        </div>


                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-bold font-italic"> Riwayat Partus</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <form id="dynamic-form" class="formriwayatpartus">
                                                    <h5>Klik Tombol Tambah untuk menambahkan Riwayat Partus</h5>

                                                    <div class="field_wrappperrr">
                                                        <div class="row mt-2">


                                                            <div class="col-md-2">
                                                                <a class="btn btn-success" href="javascript:void(0);"
                                                                    id="add_buttonn" title="Add field">TAMBAH</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>
                                                <table class="table">
                                                    <thead>
                                                        <th>Tanggal </th>
                                                        <th>Tempat </th>
                                                        <th>Umur Hamil</th>
                                                        <th>Jenis Persalinan</th>
                                                        <th>Penolong Persalinan</th>
                                                        <th>Penyulit</th>
                                                        <th>Nifas</th>
                                                        <th>Kelamin/BB</th>
                                                        <th>Keadaan Anak Sekarang</th>
                                                        <th>action</th>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($partus as $pr => $p)

                                                        <tr>
                                                            <td>{{$p->tgl_partus}}</td>
                                                            <td>{{$p->tempat_partus}}</td>
                                                            <td>{{$p->umur_partus}}</td>
                                                            <td>{{$p->jenis_persalinan}}</td>
                                                            <td>{{$p->penolong_persalinan}}</td>
                                                            <td>{{$p->penyulit}}</td>
                                                            <td>{{$p->nifas}}</td>
                                                            <td>{{$p->kelamin_BB}}</td>
                                                            <td>{{$p->keadaan_anak}}</td>
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
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Kehamilan Sekarang</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="text-bold">Hamil Muda : </label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->hamud == 'Mual')
                                                <input class="form-check-input" type="checkbox" name="hamud" id="hamud"
                                                    checked value="Mual">
                                                <label class="form-check-label">Mual </label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="hamud" id="hamud"
                                                    value="Mual">
                                                <label class="form-check-label">Mual </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->hamud1 == 'Muntah')
                                                <input class="form-check-input" type="checkbox" name="hamud1" checked
                                                    id="hamud1" value="Muntah">
                                                <label class="form-check-label">Muntah </label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="hamud1"
                                                    id="hamud1" value="Muntah">
                                                <label class="form-check-label">Muntah </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->hamud2 == 'Pendarahan')
                                                <input class="form-check-input" type="checkbox" name="hamud2" checked
                                                    id="hamud2" value="Pendarahan">
                                                <label class="form-check-label">Pendarahan </label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="hamud2"
                                                    id="hamud2" value="Pendarahan">
                                                <label class="form-check-label">Pendarahan </label>
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
                                            <label class="text-bold">Hamil Tua : </label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->hatu == 'Pusing')
                                                <input class="form-check-input" type="checkbox" name="hatu" checked
                                                    id="hatu" value="Pusing">
                                                <label class="form-check-label">Pusing </label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="hatu" id="hatu"
                                                    value="Pusing">
                                                <label class="form-check-label">Pusing </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->hatu1 == 'Sakit Kepala')
                                                <input class="form-check-input" type="checkbox" name="hatu1" checked
                                                    id="hatu1" value="Sakit Kepala">
                                                <label class="form-check-label">Sakit Kepala </label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="hatu1" id="hatu1"
                                                    value="Sakit Kepala">
                                                <label class="form-check-label">Sakit Kepala </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->hatu2 == 'Pendarahan')
                                                <input class="form-check-input" type="checkbox" checked name="hatu2"
                                                    id="hatu2" value="Pendarahan">
                                                <label class="form-check-label">Pendarahan </label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="hatu2" id="hatu2"
                                                    value="Pendarahan">
                                                <label class="form-check-label">Pendarahan </label>
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
                                            <label class="text-bold">ANC : </label>

                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->anc == 'Teratur')
                                                <input class="form-check-input" type="checkbox" name="anc" checked
                                                    id="anc" value="Teratur">
                                                <label class="form-check-label">Teratur </label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="anc" id="anc"
                                                    value="Teratur">
                                                <label class="form-check-label">Teratur </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->anc1 == 'Teratur')
                                                <input class="form-check-input" size="5" type="checkbox" name="anc1"
                                                    checked id="anc1" value="Tidak Teratur">
                                                <label class="form-check-label">Tidak Teratur </label>
                                                @else
                                                <input class="form-check-input" size="5" type="checkbox" name="anc1"
                                                    id="anc1" value="Tidak Teratur">
                                                <label class="form-check-label">Tidak Teratur </label>
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
                                            <label class="text-bold">Imunisasi : </label>

                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasii == '1')
                                                <input class="form-check-input" type="checkbox" name="imunisasii"
                                                    checked id="imunisasii" value="1">
                                                <label class="form-check-label">1 </label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="imunisasii"
                                                    id="imunisasii" value="1">
                                                <label class="form-check-label">1 </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasii1 == '2')
                                                <input class="form-check-input" size="5" type="checkbox"
                                                    name="imunisasii1" checked id="imunisasii1" value="2">
                                                <label class="form-check-label">2 </label>
                                                @else
                                                <input class="form-check-input" size="5" type="checkbox"
                                                    name="imunisasii1" id="imunisasii1" value="2">
                                                <label class="form-check-label">2 </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if($assesper[0]->imunisasii2 == '3')
                                                <input class="form-check-input" size="5" type="checkbox"
                                                    name="imunisasii2" cheked id="imunisasii2" value="3">
                                                <label class="form-check-label">3 </label>
                                                @else
                                                <input class="form-check-input" size="5" type="checkbox"
                                                    name="imunisasii2" id="imunisasii2" value="3">
                                                <label class="form-check-label">3 </label>
                                                @endif

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
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> PEMERIKSAAN FISIK
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne91" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample91">
                            <div class="card-body bg-light">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-bold font-italic">Mata</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->mata == 'Pandangan Kabur')
                                                            <input class="form-check-input" type="checkbox" name="mata"
                                                                checked id="mata" value="Pandangan Kabur">
                                                            <label class="form-check-label">Pandangan Kabur </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="mata"
                                                                id="mata" value="Pandangan Kabur">
                                                            <label class="form-check-label">Pandangan Kabur </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->mata1 == 'Penglihatan G anda')
                                                            <input class="form-check-input" type="checkbox" name="mata1"
                                                                checked id="mata1" value="Penglihatan G anda">
                                                            <label class="form-check-label">Penglihatan G anda </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="mata1"
                                                                id="mata1" value="Penglihatan G anda">
                                                            <label class="form-check-label">Penglihatan G anda </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->mata2 == 'Sklera Icterik')
                                                            <input class="form-check-input" type="checkbox" name="mata2"
                                                                cheked id="mata2" value="Sklera Icterik">
                                                            <label class="form-check-label">Sklera Icterik </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="mata2"
                                                                id="mata2" value="Sklera Icterik">
                                                            <label class="form-check-label">Sklera Icterik </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->mata3 == 'Konjungtiva Pusat')
                                                            <input class="form-check-input" type="checkbox" name="mata3"
                                                                checked id="mata3" value="Konjungtiva Pusat">
                                                            <label class="form-check-label">Konjungtiva Pusat </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="mata3"
                                                                id="mata3" value="Konjungtiva Pusat">
                                                            <label class="form-check-label">Konjungtiva Pusat </label>
                                                            @endif

                                                        </div>
                                                    </div>


                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Dada dan Aksila</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->dadak == 'Mamae Simetris')
                                                            <input class="form-check-input" type="checkbox" name="dadak"
                                                                checked id="dadak" value="Mamae Simetris">
                                                            <label class="form-check-label">Mamae Simetris </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="dadak"
                                                                id="dadak" value="Mamae Simetris">
                                                            <label class="form-check-label">Mamae Simetris </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->dadak1 == 'Mamae Asimetris')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dadak1" checked id="dadak1"
                                                                value="Mamae Asimetris">
                                                            <label class="form-check-label">Mamae Asimetris </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dadak1" id="dadak1" value="Mamae Asimetris">
                                                            <label class="form-check-label">Mamae Asimetris </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->dadak2 == 'AreolaHiperpigmentasi')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dadak2" checked id="dadak2"
                                                                value="AreolaHiperpigmentasi">
                                                            <label class="form-check-label">AreolaHiperpigmentasi
                                                            </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dadak2" id="dadak2" value="AreolaHiperpigmentasi">
                                                            <label class="form-check-label">AreolaHiperpigmentasi
                                                            </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->dadak3 == 'Tumor')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dadak3" checked id="dadak3" value="Tumor">
                                                            <label class="form-check-label">Tumor </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dadak3" id="dadak3" value="Tumor">
                                                            <label class="form-check-label">Tumor </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->dadak4 == 'Puting Susu Menonjol')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dadak4" checked id="dadak4"
                                                                value="Puting Susu Menonjol">
                                                            <label class="form-check-label">Puting Susu Menonjol
                                                            </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dadak4" id="dadak4" value="Puting Susu Menonjol">
                                                            <label class="form-check-label">Puting Susu Menonjol
                                                            </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->dadak5 == 'Kolostrum (+)')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dadak5" id="dadak5" checked value="Kolostrum (+)">
                                                            <label class="form-check-label">Kolostrum (+) </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dadak5" id="dadak5" value="Kolostrum (+)">
                                                            <label class="form-check-label">Kolostrum (+) </label>
                                                            @endif

                                                        </div>
                                                    </div>


                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Ektremitas</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->Ektremitas == 'Tungkai Simetris')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="Ekstremitas" checked id="Ekstremitas"
                                                                value="Tungkai Simetris">
                                                            <label class="form-check-label">Tungkai Simetris </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="Ekstremitas" id="Ekstremitas"
                                                                value="Tungkai Simetris">
                                                            <label class="form-check-label">Tungkai Simetris </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->Ektremitas1 == 'Tungkai Asimetris')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="Ekstremitas1" cheked id="Ekstremitas1"
                                                                value="Tungkai Asimetris">
                                                            <label class="form-check-label">Tungkai Asimetris </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="Ekstremitas1" id="Ekstremitas1"
                                                                value="Tungkai Asimetris">
                                                            <label class="form-check-label">Tungkai Asimetris </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->Ektremitas2 == 'Oedema')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="Ekstremitas2" checked id="Ekstremitas2"
                                                                value="Oedema">
                                                            <label class="form-check-label">Oedema </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="Ekstremitas2" id="Ekstremitas2" value="Oedema">
                                                            <label class="form-check-label">Oedema </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->Ektremitas3 == 'Refleks : +/-')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="Ekstremitas3" checked id="Ekstremitas3"
                                                                value="Refleks : +/-">
                                                            <label class="form-check-label">Refleks : +/- </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="Ekstremitas3" id="Ekstremitas3"
                                                                value="Refleks : +/-">
                                                            <label class="form-check-label">Refleks : +/- </label>
                                                            @endif

                                                        </div>
                                                    </div>

                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Sistem Pernafasan</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            @if($assesper[0]->sistemnafas == 'Dispnue')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas" checked id="sistemnafas"
                                                                value="Dispnue">
                                                            <label class="form-check-label">Dispnue </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas" id="sistemnafas" value="Dispnue">
                                                            <label class="form-check-label">Dispnue </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            @if($assesper[0]->sistemnafas1 == 'Orthopneu')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas1" checked id="sistemnafas1"
                                                                value="Orthopneu">
                                                            <label class="form-check-label">Orthopneu </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas1" id="sistemnafas1" value="Orthopneu">
                                                            <label class="form-check-label">Orthopneu </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            @if($assesper[0]->sistemnafas2 == 'Tacypneu')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas2" checked id="sistemnafas2"
                                                                value="Tacypneu">
                                                            <label class="form-check-label">Tacypneu </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas2" id="sistemnafas2" value="Tacypneu">
                                                            <label class="form-check-label">Tacypneu </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            @if($assesper[0]->sistemnafas3 == 'Wheezing')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas3" checked id="sistemnafas3"
                                                                value="Wheezing">
                                                            <label class="form-check-label">Wheezing </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas3" id="sistemnafas3" value="Wheezing">
                                                            <label class="form-check-label">Wheezing </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            @if($assesper[0]->sistemnafas4 == 'Batuk')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas4" checked id="sistemnafas4"
                                                                value="Batuk">
                                                            <label class="form-check-label">Batuk </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas4" id="sistemnafas4" value="Batuk">
                                                            <label class="form-check-label">Batuk </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            @if($assesper[0]->sistemnafas5 == 'Sputum')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas5" checked id="sistemnafas5"
                                                                value="Sputum">
                                                            <label class="form-check-label">Sputum </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas5" id="sistemnafas5" value="Sputum">
                                                            <label class="form-check-label">Sputum </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            @if($assesper[0]->sistemnafas6 == 'Batu Darah')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas6" checked id="sistemnafas6"
                                                                value="Batu Darah">
                                                            <label class="form-check-label">Batu Darah </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas6" id="sistemnafas6"
                                                                value="Batu Darah">
                                                            <label class="form-check-label">Batu Darah </label>
                                                            @endif


                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            @if($assesper[0]->sistemnafas7 == 'Nyeri Dada')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas7" checked id="sistemnafas7"
                                                                value="Nyeri Dada">
                                                            <label class="form-check-label">Nyeri Dada </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas7" id="sistemnafas7"
                                                                value="Nyeri Dada">
                                                            <label class="form-check-label">Nyeri Dada </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            @if($assesper[0]->sistemnafas8 == 'Keringat Malam')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas8 " checked id="sistemnafas8 "
                                                                value="Keringat Malam">
                                                            <label class="form-check-label">Keringat Malam </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sistemnafas8 " id="sistemnafas8 "
                                                                value="Keringat Malam">
                                                            <label class="form-check-label">Keringat Malam </label>
                                                            @endif

                                                        </div>
                                                    </div>

                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Sosial Support</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            @if($assesper[0]->sosup == 'Suami')
                                                            <input class="form-check-input" type="checkbox" name="sosup"
                                                                checked id="sosup" value="Suami">
                                                            <label class="form-check-label">Suami </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="sosup"
                                                                id="sosup" value="Suami">
                                                            <label class="form-check-label">Suami </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            @if($assesper[0]->sosup1 == 'Orang Tua')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sosup1" checked id="sosup1" value="Orang Tua">
                                                            <label class="form-check-label">Orang Tua </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sosup1" id="sosup1" value="Orang Tua">
                                                            <label class="form-check-label">Orang Tua </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            @if($assesper[0]->sosup2 == 'Mertua')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sosup2" checked id="sosup2" value="Mertua">
                                                            <label class="form-check-label">Mertua </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sosup2" id="sosup2" value="Mertua">
                                                            <label class="form-check-label">Mertua </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            @if($assesper[0]->sosup3 == 'Anak')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sosup3" checked id="sosup3" value="Anak">
                                                            <label class="form-check-label">Anak </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sosup3" id="sosup3" value="Anak">
                                                            <label class="form-check-label">Anak </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check">
                                                            @if($assesper[0]->sosup4 == 'Keluarga Lain')
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sosup4" checked id="sosup4" value="Keluarga Lain">
                                                            <label class="form-check-label">Keluarga Lain </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="sosup4" id="sosup4" value="Keluarga Lain">
                                                            <label class="form-check-label">Keluarga Lain </label>
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

                <div class="accordion" id="accordionExample92">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne92" aria-expanded="true"
                                    aria-controls="collapseOne92">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> DATA PSIKOLOGIS
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne92" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample92">
                            <div class="card-body bg-light">
                                <table class="table">
                                    <tbody>

                                        <tr>
                                            <td></td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->data_psikologi != NULL)

                                                            <input class="form-check-input" type="checkbox" name="dapsi"
                                                                id="dapsi" value="Denial (Menolak / Tidak Percaya)"
                                                                checked>
                                                            <label class="form-check-label">Denial (Menolak / Tidak
                                                                Percaya) </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="dapsi"
                                                                id="dapsi" value="Denial (Menolak / Tidak Percaya)">
                                                            <label class="form-check-label">Denial (Menolak / Tidak
                                                                Percaya) </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->data_psikologi_1 != NULL)

                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi1" id="dapsi1" value="Anger (marah)" checked>
                                                            <label class="form-check-label">Anger (marah) </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi1" id="dapsi1" value="Anger (marah)">
                                                            <label class="form-check-label">Anger (marah) </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->data_psikologi_2 != NULL)

                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi2" id="dapsi2"
                                                                value="Bergaining (Tawar menawar)" checked>
                                                            <label class="form-check-label">Bergaining (Tawar menawar)
                                                            </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi2" id="dapsi2"
                                                                value="Bergaining (Tawar menawar)">
                                                            <label class="form-check-label">Bergaining (Tawar menawar)
                                                            </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->data_psikologi_3 != NULL)

                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi3" id="dapsi3" value="Depresi checked">
                                                            <label class="form-check-label">Depresi </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi3" id="dapsi3" value="Depresi">
                                                            <label class="form-check-label">Depresi </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->data_psikologi_4 != NULL)
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi4" id="dapsi4" value="Menerima" checked>
                                                            <label class="form-check-label">Menerima </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi4" id="dapsi4" value="Menerima">
                                                            <label class="form-check-label">Menerima </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->data_psikologi_5 != NULL)
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi5" id="dapsi5" value="Tidak Semangat"
                                                                checked>
                                                            <label class="form-check-label">Tidak Semangat </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi5" id="dapsi5" value="Tidak Semangat">
                                                            <label class="form-check-label">Tidak Semangat </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->data_psikologi_6 != NULL)
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi6" id="dapsi6" value="Rasa Tertekan" checked>
                                                            <label class="form-check-label">Rasa Tertekan </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi6" id="dapsi6" value="Rasa Tertekan">
                                                            <label class="form-check-label">Rasa Tertekan </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->data_psikologi_7 != NULL)
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi7" id="dapsi7" value="Sulit Tidur">
                                                            <label class="form-check-label">Sulit Tidur </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi7" id="dapsi7" value="Sulit Tidur">
                                                            <label class="form-check-label">Sulit Tidur </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->data_psikologi_8 != NULL)
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi8" id="dapsi8" value="Cepat Lelah" checked>
                                                            <label class="form-check-label">Cepat Lelah </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi8" id="dapsi8" value="Cepat Lelah">
                                                            <label class="form-check-label">Cepat Lelah </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->data_psikologi_9 != NULL)
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi9" id="dapsi9" value="Sulit Berbicara"
                                                                checked>
                                                            <label class="form-check-label">Sulit Berbicara </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi9" id="dapsi9" value="Sulit Berbicara">
                                                            <label class="form-check-label">Sulit Berbicara </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->data_psikologi_11 != NULL)
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi11" id="dapsi11" value="Sulit Konsentrasi">
                                                            <label class="form-check-label">Sulit Konsentrasi </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi11" id="dapsi11" value="Sulit Konsentrasi">
                                                            <label class="form-check-label">Sulit Konsentrasi </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->data_psikologi_12 != NULL)
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi12" id="dapsi12" checked
                                                                value="Merasa Bersalah">
                                                            <label class="form-check-label">Merasa Bersalah </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="dapsi12" id="dapsi12" value="Merasa Bersalah">
                                                            <label class="form-check-label">Merasa Bersalah </label>
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
                <div class="accordion" id="accordionExample921">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne921" aria-expanded="true"
                                    aria-controls="collapseOne921">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> BUDAYA PASIEN
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne921" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample921">
                            <div class="card-body bg-light">
                                <table class="table">
                                    <tbody>

                                        <tr>
                                            <td></td>
                                            <td>
                                                <h5>Nilai Budaya yang dimiliki terkait dengan "Penyebab penyakit/
                                                    maslaah keesehatan" sakit adalah</h5> <br>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->nilai_budaya != NULL)
                                                            <input class="form-check-input" type="checkbox"
                                                                name="nilbud" id="nilbud" value="Hukuman" checked>
                                                            <label class="form-check-label">Hukuman </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="nilbud" id="nilbud" value="Hukuman">
                                                            <label class="form-check-label">Hukuman </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->nilai_budaya_1 != NULL)
                                                            <input class="form-check-input" type="checkbox"
                                                                name="nilbud1" id="nilbud1" value="Ujian" checked>
                                                            <label class="form-check-label">Ujian </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="nilbud1" id="nilbud1" value="Ujian">
                                                            <label class="form-check-label">Ujian </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->nilai_budaya_2 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="nilbud2" id="nilbud2" value="Kesalahan">
                                                            <label class="form-check-label">Kesalahan </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="nilbud2" id="nilbud2" value="Kesalahan">
                                                            <label class="form-check-label">Kesalahan </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->nilai_budaya_3 != NULL)
                                                            <input class="form-check-input" type="checkbox"
                                                                name="nilbud3" id="nilbud3" value="Takdir" checked>
                                                            <label class="form-check-label">Takdir </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="nilbud3" id="nilbud3" value="Takdir">
                                                            <label class="form-check-label">Takdir </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->nilai_budaya_4 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="nilbud4" id="nilbud4" value="Buatan Orang lain">
                                                            <label class="form-check-label">Buatan Orang lain </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="nilbud4" id="nilbud4" value="Buatan Orang lain">
                                                            <label class="form-check-label">Buatan Orang lain </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->nilai_budaya_5 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="nilbud5" id="nilbud5" value="Keturunan">
                                                            <label class="form-check-label">Keturunan </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="nilbud5" id="nilbud5" value="Keturunan">
                                                            <label class="form-check-label">Keturunan </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Kebiasaan Pasien saat sakit (pola aktivitas dan istirahat)</td>
                                            <td>
                                                <textarea class="form-control" id="polaak" name="polaak"
                                                    placeholder="">{{ $assesper[0]->kebiasaan_pasien }}</textarea>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pola Komunikasi</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->pola_komunikasi_1 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="polkom" id="polkom" value="Normal">
                                                            <label class="form-check-label">Normal </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="polkom" id="polkom" value="Normal">
                                                            <label class="form-check-label">Normal </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->pola_komunikasi_2 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="polkom1" id="polkom1" value="Introvert">
                                                            <label class="form-check-label">Introvert </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="polkom1" id="polkom1" value="Introvert">
                                                            <label class="form-check-label">Introvert </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->pola_komunikasi_3 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="polkom2" id="polkom2" value="Ekstrovert">
                                                            <label class="form-check-label">Ekstrovert </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="polkom2" id="polkom2" value="Ekstrovert">
                                                            <label class="form-check-label">Ekstrovert </label>
                                                            @endif

                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <label class="form-check-label">Lainya </label>

                                                            <input class="form-input" type="input" name="polkom5"
                                                                id="polkom5"
                                                                placeholder="{{ $assesper[0]->pola_komunikasi_4 }}"
                                                                value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Pola Makanan</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->pola_makan_1 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="polmak" id="polmak" value="sehat">
                                                            <label class="form-check-label">sehat </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="polmak" id="polmak" value="sehat">
                                                            <label class="form-check-label">sehat </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->pola_makan_2 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="polmak1" id="polmak1" value="tidak sehat">
                                                            <label class="form-check-label">tidak sehat </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="polmak1" id="polmak1" value="tidak sehat">
                                                            <label class="form-check-label">tidak sehat </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <label class="form-check-label">Pokok : </label>
                                                            @if($assesper[0]->pola_makan_3 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="polmak2" id="polmak2" value="nasi">
                                                            <label class="form-check-label">nasi </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="polmak2" id="polmak2" value="nasi">
                                                            <label class="form-check-label">nasi </label>
                                                            @endif

                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <label class="form-check-label">Selain nasi </label>

                                                            <input class="form-input" type="input" name="polmak3"
                                                                id="polmak3"
                                                                placeholder="{{ $assesper[0]->pola_makan_4 }}" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Pantang Makanan</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->pantangan_makan != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="panmak" id="panmak" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="panmak" id="panmak" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->pantangan_makan_1 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="panmak1" id="panmak1" value="ya">
                                                            <label class="form-check-label">ya : </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="panmak1" id="panmak1" value="ya">
                                                            <label class="form-check-label">ya : </label>
                                                            @endif

                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-check">

                                                            <input class="form-input" type="input" name="panmak2"
                                                                id="panmak2"
                                                                placeholder="{{ $assesper[0]->pantangan_makan_2 }}"
                                                                value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Mempunyai pengaruh kepercayaan yang dianut terhadap penyakit : </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->kepercayaan_anut != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="penmak" id="penmak" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="penmak" id="penmak" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesper[0]->kepercayaan_anut_1 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="penmak1" id="penmak1" value="ya">
                                                            <label class="form-check-label">ya : </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="penmak1" id="penmak1" value="ya">
                                                            <label class="form-check-label">ya : </label>
                                                            @endif

                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-check">

                                                            <input class="form-input" type="input" name="penmak2"
                                                                id="penmak2"
                                                                placeholder="{{ $assesper[0]->kepercayaan_anut_2 }}"
                                                                value="">
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
                <div class="accordion" id="accordionExample922">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne922" aria-expanded="true"
                                    aria-controls="collapseOne922">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> KEBUTUHAN BELAJAR / EDUKASI
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne922" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample922">
                            <div class="card-body bg-light">
                                <table class="table">
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->edukasi != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="kebel" id="kebel" value="Aktivitas">
                                                            <label class="form-check-label">Aktivitas </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="penmak1" id="penmak1" value="ya">
                                                            <label class="form-check-label">ya : </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->edukasi_1 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="kebel1" id="kebel1" value="Kontrol">
                                                            <label class="form-check-label">Kontrol </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel1" id="kebel1" value="Kontrol">
                                                            <label class="form-check-label">Kontrol </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->edukasi_2 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="kebel2" id="kebel2" value="Makanan">
                                                            <label class="form-check-label">Makanan </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel2" id="kebel2" value="Makanan">
                                                            <label class="form-check-label">Makanan </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->edukasi_3 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="kebel3" id="kebel3" value="Senam">
                                                            <label class="form-check-label">Senam </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel3" id="kebel3" value="Senam">
                                                            <label class="form-check-label">Senam </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->edukasi_4 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="kebel4" id="kebel4" value="Pengobatan">
                                                            <label class="form-check-label">Pengobatan </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel4" id="kebel4" value="Pengobatan">
                                                            <label class="form-check-label">Pengobatan </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->edukasi_5 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="kebel5" id="kebel5" value="Rawat Luka">
                                                            <label class="form-check-label">Rawat Luka </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel5" id="kebel5" value="Rawat Luka">
                                                            <label class="form-check-label">Rawat Luka </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->edukasi_6 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="kebel6" id="kebel6" value="Tumbang">
                                                            <label class="form-check-label">Tumbang </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel6" id="kebel6" value="Tumbang">
                                                            <label class="form-check-label">Tumbang </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->edukasi_7 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="kebel7" id="kebel7" value="Seksual">
                                                            <label class="form-check-label">Seksual </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel7" id="kebel7" value="Seksual">
                                                            <label class="form-check-label">Seksual </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->edukasi_8 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="kebel8" id="kebel8" value="Modifikasi Lingkungan">
                                                            <label class="form-check-label">Modifikasi Lingkungan
                                                            </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel8" id="kebel8" value="Modifikasi Lingkungan">
                                                            <label class="form-check-label">Modifikasi Lingkungan
                                                            </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->edukasi_9 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="kebel9" id="kebel9" value="Manajemen stress">
                                                            <label class="form-check-label">Manajemen stress </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel9" id="kebel9" value="Manajemen stress">
                                                            <label class="form-check-label">Manajemen stress </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->edukasi_10 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="kebel10" id="kebel10" value="Pencegahan Penyakit">
                                                            <label class="form-check-label">Pencegahan Penyakit </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel10" id="kebel10" value="Pencegahan Penyakit">
                                                            <label class="form-check-label">Pencegahan Penyakit </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->edukasi_11 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="kebel11" id="kebel11"
                                                                value="Pencegahan Komplikasi">
                                                            <label class="form-check-label">Pencegahan Komplikasi
                                                            </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="kebel11" id="kebel11"
                                                                value="Pencegahan Komplikasi">
                                                            <label class="form-check-label">Pencegahan Komplikasi
                                                            </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Pemahaman tentang penyakit :</label>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->pemahaman_penyakit == 'tidak')
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="penyak" id="penyak" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="penyak" id="penyak" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->pemahaman_penyakit == 'ya')
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="penyak" id="penyak" value="ya">
                                                            <label class="form-check-label">ya : </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="penyak" id="penyak" value="ya">
                                                            <label class="form-check-label">ya : </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Pemahaman tentang perawatan :</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->pemahaman_perawatan == 'tidak')
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="penper" id="penper" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="penper" id="penper" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->pemahaman_perawatan == 'ya')
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="penper" id="penper" value="ya">
                                                            <label class="form-check-label">ya : </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="penper" id="penper" value="ya">
                                                            <label class="form-check-label">ya : </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Pemahaman tentang pengobatan :</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->pemahaman_pengobatan == 'tidak')
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="pengob" id="pengob" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="pengob" id="pengob" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="pengob" id="pengob" value="ya">
                                                            <label class="form-check-label">ya : </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Pemahaman tentang nutrisi/diet :</label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->pemahaman_nutrisi == 'tidak')
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="pennut" id="pennut" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="pennut" id="pennut" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->pemahaman_nutrisi == 'ya')
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="pennut" id="pennut" value="ya">
                                                            <label class="form-check-label">ya : </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="pennut" id="pennut" value="ya">
                                                            <label class="form-check-label">ya : </label>
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
                <div class="accordion" id="accordionExample923">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne923" aria-expanded="true"
                                    aria-controls="collapseOne923">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Hambatan Untuk Menerima Edukasi
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne923" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample923">
                            <div class="card-body bg-light">
                                <table class="table">
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->hambatan_8 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="hambatan" id="hambatan" value="Tidak Ada">
                                                            <label class="form-check-label">Tidak Ada </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="hambatan" id="hambatan" value="Tidak Ada">
                                                            <label class="form-check-label">Tidak Ada </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->hambatan_1 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="hambatan1" id="hambatan1"
                                                                value="Ada gangguan penglihatan">
                                                            <label class="form-check-label">Ada gangguan penglihatan
                                                            </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="hambatan1" id="hambatan1"
                                                                value="Ada gangguan penglihatan">
                                                            <label class="form-check-label">Ada gangguan penglihatan
                                                            </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->hambatan_2 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="hambatan2" id="hambatan2"
                                                                value="ada gangguan pendengaran">
                                                            <label class="form-check-label">ada gangguan pendengaran
                                                            </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="hambatan2" id="hambatan2"
                                                                value="ada gangguan pendengaran">
                                                            <label class="form-check-label">ada gangguan pendengaran
                                                            </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->hambatan_3 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="hambatan3" id="hambatan3"
                                                                value="Belum melek huruf">
                                                            <label class="form-check-label">Belum melek huruf </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="hambatan3" id="hambatan3"
                                                                value="Belum melek huruf">
                                                            <label class="form-check-label">Belum melek huruf </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->hambatan_4 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="hambatan4" id="hambatan4"
                                                                value="Ada gangguan emosi">
                                                            <label class="form-check-label">Ada gangguan emosi </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="hambatan4" id="hambatan4"
                                                                value="Ada gangguan emosi">
                                                            <label class="form-check-label">Ada gangguan emosi </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->hambatan_5 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="hambatan5" id="hambatan5"
                                                                value="Ada gangguan fisik">
                                                            <label class="form-check-label">Ada gangguan fisik </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="hambatan5" id="hambatan5"
                                                                value="Ada gangguan fisik">
                                                            <label class="form-check-label">Ada gangguan fisik </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->hambatan_6 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="hambatan6" id="hambatan6"
                                                                value="Ada gangguan kognitif">
                                                            <label class="form-check-label">Ada gangguan kognitif
                                                            </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="hambatan6" id="hambatan6"
                                                                value="Ada gangguan kognitif">
                                                            <label class="form-check-label">Ada gangguan kognitif
                                                            </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->hambatan_7 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="hambatan7" id="hambatan7"
                                                                value="Keterbatasan motivasi">
                                                            <label class="form-check-label">Keterbatasan motivasi
                                                            </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="hambatan7" id="hambatan7"
                                                                value="Keterbatasan motivasi">
                                                            <label class="form-check-label">Keterbatasan motivasi
                                                            </label>
                                                            @endif

                                                        </div>
                                                    </div>

                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Ada keterbatasan dalam hal budaya / spiritual /
                                                            agama :</label>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->keterbatasan_budaya == 'tidak')
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="spiritual" id="spiritual" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="spiritual" id="spiritual" value="tidak">
                                                            <label class="form-check-label">tidak </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->keterbatasan_budaya == 'ya')
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="spiritual" id="spiritual" value="ya">
                                                            <label class="form-check-label">ya : </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="spiritual" id="spiritual" value="ya">
                                                            <label class="form-check-label">ya : </label>
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
                                        <th class="text-bold float-center">Faktor Risiko</th>
                                        <th class="text-bold float-center">Skala</th>
                                        <th class="text-bold float-center">Poin</th>
                                        <th class="text-bold float-center">Skor Pasien</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="2">Riwayat Jatuh</td>
                                            <td>Ya</td>
                                            <td>25</td>

                                            <td rowspan="2">
                                                <div class="form-group">
                                                    <input type="number" name="rjvalue" id="rjvalue"
                                                        value="{{ $lanjutan[0]->jatuh_rj }}" class="form-control"
                                                        min="0" placeholder="Enter first value" required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Tidak</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">Diagnosis sekunder (>= 2 diagnosa medis)</td>
                                            <td>Ya</td>
                                            <td>15</td>
                                            <td rowspan="2">
                                                <div class="form-group">
                                                    <input type="number" name="dsvalue" id="dsvalue"
                                                        value="{{ $lanjutan[0]->jatuh_ds }}" class="form-control"
                                                        min="0" placeholder="Enter first value" required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Tidak</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="3">Alat bantu</td>
                                            <td>Berpegangan pada perabot</td>
                                            <td>30</td>
                                            <td rowspan="3">
                                                <div class="form-group">
                                                    <input type="number" name="abvalue" id="abvalue"
                                                        class="form-control" min="0" placeholder="Enter first value"
                                                        value="{{ $lanjutan[0]->jatuh_ab }}" required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Berpegangan pada peratbot</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                            <td>Tidak ada / kursi roda/perawat/tirah baring</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">Terpasang infuse</td>
                                            <td>Ya</td>
                                            <td>20</td>
                                            <td rowspan="2">
                                                <div class="form-group">
                                                    <input type="number" name="tivalue" id="tivalue"
                                                        value="{{ $lanjutan[0]->jatuh_ti }}" class="form-control"
                                                        min="0" placeholder="Enter first value" required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Tidak</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="3">Gaya berjalan</td>
                                            <td>Terganggu</td>
                                            <td>20</td>
                                            <td rowspan="3">
                                                <div class="form-group">
                                                    <input type="number" name="gjvalue" id="gjvalue"
                                                        value="{{ $lanjutan[0]->jatuh_gn }}" class="form-control"
                                                        min="0" placeholder="Enter first value" required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Lemah</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>Normal/tirah baring/imobilisasi</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">Status Mental</td>
                                            <td>Sering lupa akan keterbatasan yang dimiliki</td>
                                            <td>15</td>
                                            <td rowspan="2">
                                                <div class="form-group">
                                                    <input type="number" name="smvalue" id="smvalue"
                                                        value="{{ $lanjutan[0]->jatuh_sm }}" class="form-control"
                                                        min="0" placeholder="Enter first value" required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>sadar akan kemampuan diri sendiri</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="float-right"> Total Score</td>

                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="totalnyeri" id="totalnyeri"
                                                        value="{{ $lanjutan[0]->total_jatuh }}" class="form-control"
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
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> SKRINING NUTRISI (Malnutrition
                                    Screening tools)
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne101" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample101">
                            <div class="card-body bg-light">
                                <table class="table">
                                    <thead>
                                        <th class="text-bold float-center">No</th>
                                        <th class="text-bold float-center">Parameter</th>
                                        <th class="text-bold float-center">Nilai</th>
                                        <th class="text-bold float-center">SKOR</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="9">1</td>
                                            <td>Apakah pasien mengalami penurunan berat badan yang tidak direncanakan ?
                                            </td>
                                            <td>
                                            </td>
                                            <td rowspan="9">
                                                <div class="form-group">
                                                    <input type="number" name="bbvalue" id="bbvalue"
                                                        value="{{ $lanjutan[0]->nutrisi_bb }}" class="form-control"
                                                        min="0" placeholder="Enter first value" required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Tidak (tidak terjadi penurunan dalam 6 bulan terakhir)</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Tidak yakain (tanyakan apakah baju / celana terasa longggar)</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>Ya, berapakah penurunan berat badan tersebut</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="bbbvalue" id="bbbvalue"
                                                        value="{{ $lanjutan[0]->nutrisi_bbb }}" class="form-control"
                                                        min="0" placeholder="Enter first value" required />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1 - 5 kg</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>6 - 10 kg</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>11 - 15 kg</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>> 15 kg</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>tidak yakin</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="3">2</td>
                                            <td>Apakah asupan makanan pasien buruk akibat nafsu makan yang menurun **?
                                                (misal asupan makan hanya 3/4 dari biasanya) </td>
                                            <td></td>
                                            <td rowspan="3">
                                                <div class="form-group">
                                                    <input type="number" name="pbvalue" id="pbvalue"
                                                        value="{{ $lanjutan[0]->nutrisi_asupan }}" class="form-control"
                                                        min="0" placeholder="Enter first value" required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>tidak</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>ya</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td>Total Skor</td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="total_nutrisi" id="total_nutrisi"
                                                        value="{{ $lanjutan[0]->total_skor }}" class="form-control"
                                                        min="0" placeholder="Enter first value" required />
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td rowspan="3">3</td>
                                            <td colspan="2">Sakit berat ***)</td>
                                            <td rowspan="3">
                                                <!-- <div class="form-group">
                                                                                                                                                                            <input type="number" name="sbvalue" id="sbvalue"
                                                                                                                                                                                class="form-control" min="0" placeholder="Enter first value"
                                                                                                                                                                                required />
                                                                                                                                                                        </div> -->
                                            </td>

                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                @if($lanjutan[0]->nutrisi_sakit_berat == 'Tidak')
                                                <input class="form-check-input" type="radio" checked name="sakit_berat"
                                                    id="sakit_berat" value="Tidak">
                                                <label class="form-check-label">Tidak </label>
                                                @else
                                                <input class="form-check-input" type="radio" name="sakit_berat"
                                                    id="sakit_berat" value="Tidak">
                                                <label class="form-check-label">Tidak </label>
                                                @endif

                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                @if($lanjutan[0]->nutrisi_sakit_berat == 'Ya')
                                                <input class="form-check-input" type="radio" name="sakit_berat"
                                                    id="sakit_berat" value="Ya" checked>
                                                <label class="form-check-label">Ya </label>
                                                @else
                                                <input class="form-check-input" type="radio" name="sakit_berat"
                                                    id="sakit_berat" value="Ya">
                                                <label class="form-check-label">Ya </label>
                                                @endif

                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                        <!-- <tr>
                                                                                                                                                                    <td colspan="3">Total nutrisi</td>
                                                                                                                                                                    <td>
                                                                                                                                                                        <div class="form-group">
                                                                                                                                                                            <input type="number" name="totalnutrisi" id="totalnutrisi"
                                                                                                                                                                                class="form-control" />
                                                                                                                                                                        </div>
                                                                                                                                                                    </td>
                                                                                                                                                                </tr> -->

                                    </tbody>
                                </table>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="text-bold font-italic">Apakah Terdapat Keluhan Nyeri ?? </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->nyeri == 'Ya')
                                                            <input class="form-check-input" type="radio" name="nyeri"
                                                                checked id="nyeri" value="Ya">
                                                            <label class="form-check-label">Ya </label>
                                                            @else
                                                            <input class="form-check-input" type="radio" name="nyeri"
                                                                id="nyeri" value="Ya">
                                                            <label class="form-check-label">Ya </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->nyeri == 'Tidak ada')
                                                            <input class="form-check-input" type="radio" name="nyeri"
                                                                checked id="nyeri" value="Tidak ada">
                                                            <label class="form-check-label">Tidak ada </label>
                                                            @else
                                                            <input class="form-check-input" type="radio" name="nyeri"
                                                                id="nyeri" value="Tidak ada">
                                                            <label class="form-check-label">Tidak ada </label>
                                                            @endif

                                                        </div>
                                                    </div>


                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Apakah Nyerinya Berpindah ?? </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->nyeri_pindah == 'Ya')
                                                            <input class="form-check-input" type="radio" checked
                                                                name="nyeri_pindah" id="nyeri_pindah" value="Ya">
                                                            <label class="form-check-label">Ya </label>
                                                            @else
                                                            <input class="form-check-input" type="radio"
                                                                name="nyeri_pindah" id="nyeri_pindah" value="Ya">
                                                            <label class="form-check-label">Ya </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->nyeri_pindah == 'Tidak')
                                                            <input class="form-check-input" type="radio" checked
                                                                name="nyeri_pindah" id="nyeri_pindah" value="Tidak">
                                                            <label class="form-check-label">Tidak </label>
                                                            @else
                                                            <input class="form-check-input" type="radio"
                                                                name="nyeri_pindah" id="nyeri_pindah" value="Tidak">
                                                            <label class="form-check-label">Tidak </label>
                                                            @endif

                                                        </div>
                                                    </div>


                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Berapa Lama Nyeri Ini ?? </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->lamanyeri == '< 3 bulan=akut')
                                                                <input class="form-check-input" type="radio" checked
                                                                name="lamanyeri" id="lamanyeri"
                                                                value="< 3 bulan = akut">
                                                                <label class="form-check-label">
                                                                    < 3 bulan=akut </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio"
                                                                            name="lamanyeri" id="lamanyeri"
                                                                            value="< 3 bulan = akut">
                                                                        <label class="form-check-label">
                                                                            < 3 bulan=akut </label>
                                                                                @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->lamanyeri == '> 3 bulan = kronik')
                                                            <input class="form-check-input" type="radio" checked
                                                                name="lamanyeri" id="lamanyeri"
                                                                value="> 3 bulan = kronik">
                                                            <label class="form-check-label">> 3 bulan = kronik </label>
                                                            @else
                                                            <input class="form-check-input" type="radio"
                                                                name="lamanyeri" id="lamanyeri"
                                                                value="> 3 bulan = kronik">
                                                            <label class="form-check-label">> 3 bulan = kronik </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->lamanyeri == 'Tidak Ada')
                                                            <input class="form-check-input" type="radio"
                                                                name="lamanyeri" id="lamanyeri" value="Tidak Ada"
                                                                checked>
                                                            <label class="form-check-label">Tidak Ada </label>
                                                            @else
                                                            <input class="form-check-input" type="radio"
                                                                name="lamanyeri" id="lamanyeri" value="Tidak Ada">
                                                            <label class="form-check-label">Tidak Ada </label>
                                                            @endif

                                                        </div>
                                                    </div>

                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Rasa Nyeri ?? </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->rasanyeri != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="rasanyeri" id="rasanyeri" value="Tajam">
                                                            <label class="form-check-label">Tajam </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri" id="rasanyeri" value="Tajam">
                                                            <label class="form-check-label">Tajam </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->rasanyeri1 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="rasanyeri1" id="rasanyeri1" value="Nyeri Tumpul">
                                                            <label class="form-check-label">Nyeri Tumpul </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri1" id="rasanyeri1" value="Nyeri Tumpul">
                                                            <label class="form-check-label">Nyeri Tumpul </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->rasanyeri2 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="rasanyeri2" id="rasanyeri2"
                                                                value="Seperti Ditarik">
                                                            <label class="form-check-label">Seperti Ditarik </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri2" id="rasanyeri2"
                                                                value="Seperti Ditarik">
                                                            <label class="form-check-label">Seperti Ditarik </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->rasanyeri3 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="rasanyeri3" id="rasanyeri3"
                                                                value="Seperti Di tusuk">
                                                            <label class="form-check-label">Seperti Di tusuk </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri3" id="rasanyeri3"
                                                                value="Seperti Di tusuk">
                                                            <label class="form-check-label">Seperti Di tusuk </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->rasanyeri4 != NULL)
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri4" id="rasanyeri4"
                                                                value="Seperti Dipukul">
                                                            <label class="form-check-label">Seperti Dipukul </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri4" id="rasanyeri4"
                                                                value="Seperti Dipukul">
                                                            <label class="form-check-label">Seperti Dipukul </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->rasanyeri5 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="rasanyeri5" id="rasanyeri5"
                                                                value="Seperti Dibakar">
                                                            <label class="form-check-label">Seperti Dibakar </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri5" id="rasanyeri5"
                                                                value="Seperti Dibakar">
                                                            <label class="form-check-label">Seperti Dibakar </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->rasanyeri6 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="rasanyeri6" id="rasanyeri6"
                                                                value="Seperti Berdenyut">
                                                            <label class="form-check-label">Seperti Berdenyut </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri6" id="rasanyeri6"
                                                                value="Seperti Berdenyut">
                                                            <label class="form-check-label">Seperti Berdenyut </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->rasanyeri7 != NULL)
                                                            <input class="form-check-input" type="checkbox" checked
                                                                name="rasanyeri7" id="rasanyeri7"
                                                                value="Seperti Ditikam">
                                                            <label class="form-check-label">Seperti Ditikam </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri7" id="rasanyeri7"
                                                                value="Seperti Ditikam">
                                                            <label class="form-check-label">Seperti Ditikam </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->rasanyeri8 != NULL)
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri8" id="rasanyeri8" value="Seperti Kram">
                                                            <label class="form-check-label">Seperi Kram </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri8" id="rasanyeri8" value="Seperti Kram">
                                                            <label class="form-check-label">Seperi Kram </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->rasanyeri9 != NULL)
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri9" id="rasanyeri9" value="Tidak Ada"
                                                                checked>
                                                            <label class="form-check-label">Tidak Ada </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox"
                                                                name="rasanyeri9" id="rasanyeri9" value="Tidak Ada">
                                                            <label class="form-check-label">Tidak Ada </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Seberapa Sering Anda Mengalami Nyeri ini?
                                                Berapa Lama ?? </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <label class="texxt-bold">Setiap :</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->seringnyeri == '1 -2 jam')
                                                            <input class="form-check-input" type="radio" checked
                                                                name="seringnyeri" id="seringnyeri" value="1 -2 jam">
                                                            <label class="form-check-label">1 -2 jam </label>
                                                            @else
                                                            <input class="form-check-input" type="radio"
                                                                name="seringnyeri" id="seringnyeri" value="1 -2 jam">
                                                            <label class="form-check-label">1 -2 jam </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->seringnyeri == '3 - 4 jam')
                                                            <input class="form-check-input" type="radio" checked
                                                                name="seringnyeri" id="seringnyeri" value="3 - 4 jam">
                                                            <label class="form-check-label">3 - 4 jam </label>
                                                            @else
                                                            <input class="form-check-input" type="radio"
                                                                name="seringnyeri" id="seringnyeri" value="3 - 4 jam">
                                                            <label class="form-check-label">3 - 4 jam </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->seringnyeri == 'Tidak Ada')
                                                            <input class="form-check-input" type="radio"
                                                                name="seringnyeri" checked id="seringnyeri"
                                                                value="Tidak Ada">
                                                            <label class="form-check-label">Tidak Ada </label>
                                                            @else
                                                            <input class="form-check-input" type="radio"
                                                                name="seringnyeri" id="seringnyeri" value="Tidak Ada">
                                                            <label class="form-check-label">Tidak Ada </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <label class="texxt-bold">Selama :</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->serringnyeri == '< 30 Menit')
                                                                <input class="form-check-input" type="radio" checked
                                                                name="serringnyeri" id="serringnyeri"
                                                                value="< 30 Menit">
                                                                <label class="form-check-label">
                                                                    < 30 Menit </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio"
                                                                            name="serringnyeri" id="serringnyeri"
                                                                            value="< 30 Menit">
                                                                        <label class="form-check-label">
                                                                            < 30 Menit </label>
                                                                                @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->serringnyeri == '> 30 Menit')
                                                            <input class="form-check-input" type="radio"
                                                                name="serringnyeri" id="serringnyeri"
                                                                value="> 30 Menit">
                                                            <label class="form-check-label">> 30 Menit </label>
                                                            @else
                                                            <input class="form-check-input" type="radio"
                                                                name="serringnyeri" id="serringnyeri"
                                                                value="> 30 Menit">
                                                            <label class="form-check-label">> 30 Menit </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->serringnyeri == 'Tidak Ada')
                                                            <input class="form-check-input" type="radio"
                                                                name="serringnyeri" id="serringnyeri" checked
                                                                value="Tidak Ada">
                                                            <label class="form-check-label">Tidak Ada </label>
                                                            @else
                                                            <input class="form-check-input" type="radio"
                                                                name="serringnyeri" id="serringnyeri" value="Tidak Ada">
                                                            <label class="form-check-label">Tidak Ada </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Apa yang membuat nyeri berkurang dan
                                                bertambah parah? </td>
                                            <td>
                                                <div class="row">

                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->berkurangnyeri == 'Kompres hangat/ dingin')
                                                            <input class="form-check-input" type="radio" checked
                                                                name="berkurangnyeri" id="berkurangnyeri"
                                                                value="Kompres hangat/ dingin">
                                                            <label class="form-check-label">Kompres hangat/ dingin
                                                            </label>
                                                            @else
                                                            <input class="form-check-input" type="radio"
                                                                name="berkurangnyeri" id="berkurangnyeri"
                                                                value="Kompres hangat/ dingin">
                                                            <label class="form-check-label">Kompres hangat/ dingin
                                                            </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->berkurangnyeri == 'Aktivitas dikurangi / bertambah')
                                                            <input class="form-check-input" type="radio" checked
                                                                name="berkurangnyeri" id="berkurangnyeri"
                                                                value="Aktivitas dikurangi / bertambah">
                                                            <label class="form-check-label">Aktivitas dikurangi /
                                                                bertambah </label>
                                                            @else
                                                            <input class="form-check-input" type="radio"
                                                                name="berkurangnyeri" id="berkurangnyeri"
                                                                value="Aktivitas dikurangi / bertambah">
                                                            <label class="form-check-label">Aktivitas dikurangi /
                                                                bertambah </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-check">
                                                            @if($lanjutan[0]->berkurangnyeri == 'Tidak Ada')
                                                            <input class="form-check-input" type="radio"
                                                                name="berkurangnyeri" id="berkurangnyeri"
                                                                value="Tidak Ada" checked>
                                                            <label class="form-check-label">Tidak Ada </label>
                                                            @else
                                                            <input class="form-check-input" type="radio"
                                                                name="berkurangnyeri" id="berkurangnyeri"
                                                                value="Tidak Ada">
                                                            <label class="form-check-label">Tidak Ada </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-bold">LOKASI NYERI </td>

                                            <td>
                                                <!-- <div type="button" class="btn btn-secondary penandaan ml-3 mb-3" style="margin-top: 20px;">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        PENANDAAN GAMBAR
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div> -->
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <div class="penandaangambar">
                                                            @if($lanjutan[0]->penandaan_gambar == NULL)
                                                            <div class="card">
                                                                <div class="card-header  bg-warning">
                                                                    Penandaan Gambar</div>
                                                                <div class="card-body">
                                                                    <input type="text" hidden id="gambarcoret"
                                                                        name="gambarcoret">
                                                                    <img id="gambarnya1" style="margin-top:50px"
                                                                        width="600px" height="400px"
                                                                        src="{{ asset('public/img/nyeri.png') }}"
                                                                        onclick="showMarkerArea(this);" />
                                                                    <canvas hidden id="myCanvas1" width="600px"
                                                                        height="400px"
                                                                        style="border:1px solid #d3d3d3;">
                                                                    </canvas>
                                                                    <button type="button" class="btn btn-danger mt-2"
                                                                        onclick="batalgambar1()">batal</button>

                                                                </div>
                                                            </div>
                                                            @else
                                                            <img id="gambarnya1" style="margin-top:50px" width="600px"
                                                                height="400px"
                                                                src="{{ $lanjutan[0]->penandaan_gambar }}"
                                                                onclick="showMarkerArea(this);" />

                                                            <div class="card">
                                                                <div class="card-header  bg-warning">
                                                                    Penandaan Gambar</div>
                                                                <div class="card-body">
                                                                    <input type="text" hidden id="gambarcoret"
                                                                        name="gambarcoret">
                                                                    <img id="gambarnya1" style="margin-top:50px"
                                                                        width="600px" height="400px"
                                                                        src="{{ asset('public/img/nyeri.png') }}"
                                                                        onclick="showMarkerArea(this);" />
                                                                    <canvas hidden id="myCanvas1" width="600px"
                                                                        height="400px"
                                                                        style="border:1px solid #d3d3d3;">
                                                                    </canvas>
                                                                    <button type="button" class="btn btn-danger mt-2"
                                                                        onclick="batalgambar1()">batal</button>

                                                                </div>
                                                            </div>


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
                    <i class="bi bi-book mr-1 ml-1"></i> (A) ASSESMEN
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
                                <div class="input-group">
                                    <textarea class="form-control" id="diagnosakebidanan" name="diagnosakebidanan"
                                        placeholder="">{{$assesper[0]->diagnosakebidanan}}</textarea>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- <div class="accordion" id="accordionExample95">
        <div class="card">
            <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse"
                        data-target="#collapseOne95" aria-expanded="true" aria-controls="collapseOne95">
                        <i class="bi bi-book mr-1 ml-1"></i>(P) PLANNING
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
                                        <textarea class="form-control" id="rencanaasuhan" name="rencanaasuhan"
                                            placeholder="">{{$assesper[0]->diagnosakebidanan}}</textarea>
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
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Infus/ IVFD" checked>
                                                    <label class="form-check-label">Infus/ IVFD </label>
                                                @else
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Infus/ IVFD">
                                                    <label class="form-check-label">Infus/ IVFD </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kolaborasi2 == 'Oksigenasi')
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Oksigenasi" checked>
                                                    <label class="form-check-label">Oksigenasi </label>
                                                @else
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Oksigenasi">
                                                    <label class="form-check-label">Oksigenasi </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kolaborasi3 == 'NGT')
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="NGT" checked>
                                                    <label class="form-check-label">NGT </label>
                                                @else
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="NGT">
                                                    <label class="form-check-label">NGT </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kolaborasi4 == 'Defibrilasi')
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Defibrilasi" checked>
                                                    <label class="form-check-label">Defibrilasi </label>
                                                @else
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Defibrilasi">
                                                    <label class="form-check-label">Defibrilasi </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kolaborasi5 == 'Suction')
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Suction" checked>
                                                    <label class="form-check-label">Suction </label>
                                                @else
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Suction">
                                                    <label class="form-check-label">Suction </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kolaborasi6 == 'LAB')
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="LAB" checked>
                                                    <label class="form-check-label">LAB </label>
                                                @else
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="LAB">
                                                    <label class="form-check-label">LAB </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kolaborasi7 == 'Nebulizer')
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Nebulizer" checked>
                                                    <label class="form-check-label">Nebulizer </label>
                                                @else
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Nebulizer">
                                                    <label class="form-check-label">Nebulizer </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kolaborasi8 == 'Mengumbah lambung')
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Mengumbah lambung" checked>
                                                    <label class="form-check-label">Mengumbah lambung </label>
                                                @else
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Mengumbah lambung">
                                                    <label class="form-check-label">Mengumbah lambung </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kolaborasi9 == 'Mayo')
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Mayo" checked>
                                                    <label class="form-check-label">Mayo </label>
                                                @else
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Mayo">
                                                    <label class="form-check-label">Mayo </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kolaborasi10 == 'Explorasi / Irigasi')
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Explorasi / Irigasi" checked>
                                                    <label class="form-check-label">Explorasi / Irigasi </label>
                                                @else
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Explorasi / Irigasi">
                                                    <label class="form-check-label">Explorasi / Irigasi </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kolaborasi11 == 'EKG')
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="EKG" checked>
                                                    <label class="form-check-label">EKG </label>
                                                @else
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="EKG">
                                                    <label class="form-check-label">EKG </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kolaborasi12 == 'Saturasi Oksigen')
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Saturasi Oksigen" checked>
                                                    <label class="form-check-label">Saturasi Oksigen </label>
                                                @else
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Saturasi Oksigen">
                                                    <label class="form-check-label">Saturasi Oksigen </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kolaborasi13 == 'Kateter')
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Kateter" checked>
                                                    <label class="form-check-label">Kateter </label>
                                                @else
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Kateter">
                                                    <label class="form-check-label">Kateter </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kolaborasi14 == 'ETT')
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="ETT" checked>
                                                    <label class="form-check-label">ETT </label>
                                                @else
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="ETT">
                                                    <label class="form-check-label">ETT </label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                @if($assesper[0]->kolaborasi15 == 'Obat')
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Obat" checked>
                                                    <label class="form-check-label">Obat </label>
                                                @else
                                                    <input class="form-check-input" type="checkbox" name="kolaborasi"
                                                        id="kolaborasi" value="Obat">
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
    </div> -->
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

<div type="button" class="btn float-right btn-success updateassesvk" style="margin-top: 20px;">
    Update
</div>
<div type="button" class="btn float-right btn-info mr-2 validasiassesvk" style="margin-top: 20px;">
    Validasi
</div>
@endif
<script src="{{ asset('public/marker/markerjs2.js') }}"></script>
<script>
    $(".formdewasa").click(function() {
        spinner = $('#loader2');
        spinner.show();

        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                norm,
                kj

            },
            url: '<?= route('formdewasaigk') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.formdewasaigk').html(response);

            }
        });
    });
    $(".formbayik").click(function() {
        spinner = $('#loader2');
        spinner.show();

        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                norm,
                kj

            },
            url: '<?= route('formbayikigk') ?>',

            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.formbayikigk').html(response);

            }
        });
    });
    $(document).ready(function() {
        var maxField = 100; //Input fields increment limitation
        var addButton = $('#add_button'); //Add button selector
        var wrapper = $('.field_wrapperrr'); //Input field wrapper
        var fieldHTML = '<div class="row mt-2">';
        fieldHTML = fieldHTML + '   <div class="col-2"><div class="form-group"><label for="name">Nama Obat:</label><input type="text" name="namaobat" id="namaobat" value="" class="obat form-control"></div></div>';
        fieldHTML = fieldHTML + ' <div class="col-2"><div class="form-group"><label for="name">Jumlah / Dosis :</label><input type="text" name="dosis" id="dosis" value="" class="dss form-control"></div></div>';
        fieldHTML = fieldHTML + '   <div class="col-2"><div class="form-group"><label for="name">Jam Pemberian :</label><input type="text" name="jampemberian" id="jampemberian" value="" class="jp form-control"></div></div>';
        fieldHTML = fieldHTML + '<div class="col-2"> <div class="form-group"><label for="name">Instruksi Khusus :</label><input type="text" name="intruksi" id="intruksi" value="" class="ik form-control"></div></div>';

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
    $(document).ready(function() {
        var maxField = 100; //Input fields increment limitation
        var addButton = $('#add_buttonn'); //Add button selector
        var wrapper = $('.field_wrappperrr'); //Input field wrapper
        var fieldHTML = '<div class="row mt-2">';
        fieldHTML = fieldHTML + '   <div class="col-2"><div class="form-group"><label for="name">tgl tahun partus</label><input type="text" name="tt_partus" id="tt_partus" value="" class="tt_partus form-control"></div></div>';
        fieldHTML = fieldHTML + ' <div class="col-2"><div class="form-group"><label for="name">Tmpt Partus</label><input type="text" name="tempat_partus" id="tempat_partus" value="" class="tempat_partus form-control"></div></div>';
        fieldHTML = fieldHTML + '   <div class="col-2"><div class="form-group"><label for="name">Umur Hamil</label><input type="text" name="umur_hamil" id="umur_hamil" value="" class="umur_hamil form-control"></div></div>';
        fieldHTML = fieldHTML + '<div class="col-2"> <div class="form-group"><label for="name">Jenis Persalinan</label><input type="text" name="jenis_persalinan" id="jenis_persalinan" value="" class="ik form-control"></div></div>';
        fieldHTML = fieldHTML + '<div class="col-2"> <div class="form-group"><label for="name">Penolong Persalinan</label><input type="text" name="penolong_persalinan" id="penolong_persalinan" value="" class="penolong_persalinan form-control"></div></div>';
        fieldHTML = fieldHTML + '<div class="col-2"> <div class="form-group"><label for="name">Penyulit</label><input type="text" name="penyulit" id="penyulit" value="" class="penyulit form-control"></div></div>';
        fieldHTML = fieldHTML + '<div class="col-2"> <div class="form-group"><label for="name">Nifas</label><input type="text" name="nifas" id="nifas" value="" class="nifas form-control"></div></div>';
        fieldHTML = fieldHTML + '<div class="col-2"> <div class="form-group"><label for="name">Kelamin/BB</label><input type="text" name="kelamin_bb" id="kelamin_bb" value="" class="kelamin_bb form-control"></div></div>';
        fieldHTML = fieldHTML + '<div class="col-2"> <div class="form-group"><label for="name">Keadaan Anak Sekarang</label><input type="text" name="keadaan_anak_sekarang" id="keadaan_anak_sekarang" value="" class="keadaan_anak_sekarang form-control"></div></div>';

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
    $(function() {
        $('#rjvalue, #dsvalue, #abvalue, #tivalue, #gjvalue, #smvalue ').keyup(function() {
            var rjvalue = parseFloat($('#rjvalue').val()) || 0;
            var dsvalue = parseFloat($('#dsvalue').val()) || 0;
            var abvalue = parseFloat($('#abvalue').val()) || 0;
            var tivalue = parseFloat($('#tivalue').val()) || 0;
            var gjvalue = parseFloat($('#gjvalue').val()) || 0;
            var smvalue = parseFloat($('#smvalue').val()) || 0;


            $('#totalnyeri').val(rjvalue + dsvalue + abvalue + tivalue + gjvalue + smvalue);
        });
    });
    $(function() {
        $('#bbvalue, #bbbvalue, #pbvalue, #mingivalue, #sbvalue ').keyup(function() {
            var bbvalue = parseFloat($('#bbvalue').val()) || 0;
            var bbbvalue = parseFloat($('#bbbvalue').val()) || 0;
            var pbvalue = parseFloat($('#pbvalue').val()) || 0;
            var mingivalue = parseFloat($('#mingivalue').val()) || 0;
            var sbvalue = parseFloat($('#sbvalue').val()) || 0;
            $('#totalnutrisi').val(bbvalue + bbbvalue + pbvalue + mingivalue + sbvalue);
        });
    });
    document.getElementById('tgl_input').valueAsDate = new Date()

    $("[data-widget='collapse']").click(function() {
        //Find the box parent
        var box = $(this).parents(".box").first();
        //Find the body and the footer
        var bf = box.find(".box-body, .box-footer");
        if (!box.hasClass("collapsed-box")) {
            box.addClass("collapsed-box");
            bf.slideUp();
        } else {
            box.removeClass("collapsed-box");
            bf.slideDown();
        }
    });

    function showMarkerArea(target) {
        const markerArea = new markerjs2.MarkerArea(target);
        markerArea.addEventListener("render", (event) => (target.src = event.dataUrl));
        markerArea.show();
    }
</script>
<script>
    $(".simpanassesvk").click(function() {
        var gambar = document.getElementById("myCanvas1");

        var ctx1 = gambar.getContext("2d");
        var img1 = document.getElementById("gambarnya1");
        ctx1.drawImage(img1, 10, 10);
        var dataUrl1 = gambar.toDataURL();
        $('#gambarcoret').val(dataUrl1)
        gambar1 = $('#gambarcoret').val()
        var obatplg = $('.formobatplg').serializeArray();
        var riwayatpartus = $('.formriwayatpartus').serializeArray();
        var tindakankebidanan = $('.formtindakankebidanan').serializeArray();


        var norm = $('#norm').val()
        var asal_rujukan = $('#asal_rujukan').val()

        var anamnesis_triase_bidan = $('#anamnesis_triase_bidan').val()
        var diagnosa_triase_bidan = $('#diagnosa_triase_bidan').val()
        var rekomendasi = $('#rekomendasi').val()


        var kj = $('#kj').val()

        var tgl_pengkajian = $('#tgl_pengkajian').val()

        var tglmasuk = $('#tglmasuk').val()
        var sumberdata = $('#sumberdata:checked').val()
        var asalmasuk = $('#asalmasuk:checked').val()
        var caramasuk = $('#caramasuk:checked').val()
        var subyek = $('#anamnesis').val()
        var keadaanumum = $('#keadaanumum:checked').val()
        var kesadaran = $('#kesadaran:checked').val()
        var tekanandarah = $('#tekanandarah').val()
        var frekuensinadi = $('#frekuensinadi').val()
        var frekuensinafas = $('#frekuensinafas').val()
        var suhutubuh = $('#suhutubuh').val()
        var beratbadan = $('#beratbadan').val()
        var tb = $('#tb').val()
        var gcs = $('#gcs').val()
        var spo2 = $('#SPO2').val()
        var imunisasi = $('#imunisasi:checked').val()
        var imunisasi1 = $('#imunisasi1:checked').val()
        var imunisasi2 = $('#imunisasi2:checked').val()
        var imunisasi3 = $('#imunisasi3:checked').val()
        var imunisasi4 = $('#imunisasi4:checked').val()
        var imunisasi5 = $('#imunisasi5:checked').val()
        var imunisasi6 = $('#imunisasi6:checked').val()
        var imunisasi7 = $('#imunisasi7:checked').val()
        var imunisasi8 = $('#imunisasi8:checked').val()
        var imunisasi9 = $('#imunisasi9:checked').val()
        var imunisasi10 = $('#imunisasi10:checked').val()
        var imunisasi11 = $('#imunisasi11:checked').val()
        var imunisasi12 = $('#imunisasi12:checked').val()
        var imunisasi13 = $('#imunisasi13:checked').val()
        var imunisasi14 = $('#imunisasi14:checked').val()
        var imunisasi15 = $('#imunisasi15:checked').val()
        var imunisasi16 = $('#imunisasi16:checked').val()
        var imunisasi17 = $('#imunisasi17:checked').val()
        var imunisasi18 = $('#imunisasi18:checked').val()
        var kberencana = $('#kberencana:checked').val()
        var kberencana1 = $('#kberencana1:checked').val()
        var kberencana2 = $('#kberencana2:checked').val()
        var kberencana3 = $('#kberencana3:checked').val()
        var kberencana4 = $('#kberencana4:checked').val()
        var kberencana5 = $('#kberencana5:checked').val()
        var komplikasikb = $('#komplikasikb:checked').val()
        var komplikasikb1 = $('#komplikasikb1:checked').val()
        var komplikasikb2 = $('#komplikasikb2:checked').val()
        var rpenyakit = $('#rpenyakit:checked').val()
        var rpenyakit1 = $('#rpenyakit1:checked').val()
        var rpenyakit2 = $('#rpenyakit2:checked').val()
        var rpenyakit3 = $('#rpenyakit3:checked').val()
        var rpenyakit4 = $('#rpenyakit4:checked').val()
        var rpenyakit5 = $('#rpenyakit5:checked').val()
        var rpenyakit6 = $('#rpenyakit6:checked').val()
        var rpenyakit7 = $('#rpenyakit7:checked').val()
        var operasi = $('#operasi:checked').val()
        var operasi1 = $('#operasi1:checked').val()
        var operasi2 = $('#operasi2:checked').val()
        var ginekologi = $('#ginekologi:checked').val()
        var ginekologi1 = $('#ginekologi1:checked').val()
        var ginekologi2 = $('#ginekologi2:checked').val()
        var ginekologi3 = $('#ginekologi3:checked').val()
        var ginekologi4 = $('#ginekologi4:checked').val()
        var ginekologi5 = $('#ginekologi5:checked').val()
        var ginekologi6 = $('#ginekologi6:checked').val()
        var ginekologi7 = $('#ginekologi7:checked').val()
        var ginekologi8 = $('#ginekologi8:checked').val()
        var ginekologi9 = $('#ginekologi9:checked').val()
        var ginekologi10 = $('#ginekologi10:checked').val()
        var ginekologi11 = $('#ginekologi11:checked').val()
        var rpk = $('#rpk:checked').val()
        var rpk1 = $('#rpk1:checked').val()
        var rpk2 = $('#rpk2:checked').val()
        var rpk3 = $('#rpk3:checked').val()
        var rpk4 = $('#rpk4:checked').val()
        var rpk5 = $('#rpk5:checked').val()
        var rpk6 = $('#rpk6:checked').val()
        var rpk7 = $('#rpk7:checked').val()
        var rpk8 = $('#rpk8:checked').val()
        var rpk9 = $('#rpk9:checked').val()
        var terapi = $('#terapi:checked').val()
        var terapi1 = $('#terapi1:checked').val()
        var terapi2 = $('#terapi2:checked').val()
        var terapi3 = $('#terapi3:checked').val()
        var aler = $('#aler:checked').val()
        var aler1 = $('#aler1:checked').val()
        var aler2 = $('#aler2').val()
        var kebiasaan = $('#kebiasaan:checked').val()
        var kebiasaan1 = $('#kebiasaan1:checked').val()
        var otidur = $('#otidur:checked').val()
        var otidur1 = $('#otidur1:checked').val()
        var alkohol = $('#alkohol:checked').val()
        var alkohol1 = $('#alkohol1:checked').val()
        var olahraga = $('#olahraga:checked').val()
        var olahraga1 = $('#olahraga1:checked').val()
        var umurmenarche = $('#umurmenarche').val()
        var lamanyahaid = $('#lamanyahaid').val()
        var pembalut = $('#pembalut').val()
        var haidterakhir = $('#haidterakhir').val()
        var TP = $('#TP').val()
        var Dismonore = $('#Dismonore:checked').val()
        var Dismonore1 = $('#Dismonore1:checked').val()
        var Dismonore2 = $('#Dismonore2:checked').val()
        var Dismonore3 = $('#Dismonore3:checked').val()
        var menikah = $('#menikah').val()
        var menikah1 = $('#menikah1').val()
        var menikah2 = $('#menikah2:checked').val()
        var menikah3 = $('#menikah3:checked').val()
        var menikah4 = $('#menikah4:checked').val()
        var G = $('#G').val()
        var P = $('#P').val()
        var A = $('#A').val()
        var hamud1 = $('#hamud1:checked').val()
        var hamud2 = $('#hamud2:checked').val()
        var hamud = $('#hamud:checked').val()
        var hatu = $('#hatu:checked').val()
        var hatu1 = $('#hatu1:checked').val()
        var hatu2 = $('#hatu2:checked').val()
        var anc = $('#anc:checked').val()
        var anc1 = $('#anc1:checked').val()
        var imunisasii = $('#imunisasii:checked').val()
        var imunisasii1 = $('#imunisasii1:checked').val()
        var imunisasii2 = $('#imunisasii2:checked').val()
        var mata = $('#mata:checked').val()
        var mata1 = $('#mata1:checked').val()
        var mata2 = $('#mata2:checked').val()
        var mata3 = $('#mata3:checked').val()
        var dadak = $('#dadak:checked').val()
        var dadak1 = $('#dadak1:checked').val()
        var dadak2 = $('#dadak2:checked').val()
        var dadak3 = $('#dadak3:checked').val()
        var dadak4 = $('#dadak4:checked').val()
        var dadak5 = $('#dadak5:checked').val()
        var Ektremitas = $('#Ektremitas:checked').val()
        var Ektremitas1 = $('#Ektremitas1:checked').val()
        var Ektremitas2 = $('#Ektremitas2:checked').val()
        var Ektremitas3 = $('#Ektremitas3:checked').val()
        var sistemnafas = $('#sistemnafas:checked').val()
        var sistemnafas1 = $('#sistemnafas1:checked').val()
        var sistemnafas2 = $('#sistemnafas2:checked').val()
        var sistemnafas3 = $('#sistemnafas3:checked').val()
        var sistemnafas4 = $('#sistemnafas4:checked').val()
        var sistemnafas5 = $('#sistemnafas5:checked').val()
        var sistemnafas6 = $('#sistemnafas6:checked').val()
        var sistemnafas7 = $('#sistemnafas7:checked').val()
        var sistemnafas8 = $('#sistemnafas8:checked').val()


        var dapsi = $('#dapsi:checked').val()
        var dapsi1 = $('#dapsi1:checked').val()
        var dapsi2 = $('#dapsi2:checked').val()
        var dapsi3 = $('#dapsi3:checked').val()
        var dapsi4 = $('#dapsi4:checked').val()
        var dapsi5 = $('#dapsi5:checked').val()
        var dapsi6 = $('#dapsi6:checked').val()
        var dapsi7 = $('#dapsi7:checked').val()
        var dapsi8 = $('#dapsi8:checked').val()
        var dapsi9 = $('#dapsi9:checked').val()
        var dapsi10 = $('#dapsi10:checked').val()
        var dapsi11 = $('#dapsi11:checked').val()
        var dapsi12 = $('#dapsi12:checked').val()


        var nilbud = $('#nilbud:checked').val()
        var nilbud1 = $('#nilbud1:checked').val()
        var nilbud2 = $('#nilbud2:checked').val()
        var nilbud3 = $('#nilbud3:checked').val()
        var nilbud4 = $('#nilbud4:checked').val()
        var nilbud5 = $('#nilbud5:checked').val()

        var polaak = $('#polaak').val()

        var polkom = $('#polkom:checked').val()
        var polkom1 = $('#polkom1:checked').val()
        var polkom2 = $('#polkom2:checked').val()
        var polkom5 = $('#polkom5').val()

        var polmak = $('#polmak:checked').val()
        var polmak1 = $('#polmak1:checked').val()
        var polmak2 = $('#polmak2:checked').val()
        var polmak3 = $('#polmak3').val()

        var panmak = $('#panmak:checked').val()
        var panmak1 = $('#panmak1:checked').val()
        var panmak2 = $('#panmak2').val()

        var penmak = $('#penmak:checked').val()
        var penmak1 = $('#penmak1:checked').val()
        var penmak2 = $('#penmak2').val()

        var kebel = $('#kebel:checked').val()
        var kebel1 = $('#kebel1:checked').val()
        var kebel2 = $('#kebel2:checked').val()
        var kebel3 = $('#kebel3:checked').val()
        var kebel4 = $('#kebel4:checked').val()
        var kebel5 = $('#kebel5:checked').val()
        var kebel6 = $('#kebel6:checked').val()
        var kebel7 = $('#kebel7:checked').val()
        var kebel8 = $('#kebel8:checked').val()
        var kebel9 = $('#kebel9:checked').val()
        var kebel10 = $('#kebel10:checked').val()
        var kebel11 = $('#kebel11:checked').val()
        var kebel12 = $('#kebel12:checked').val()

        var penyak = $('#penyak:checked').val()
        var penper = $('#penper:checked').val()
        var pengob = $('#pengob:checked').val()
        var pennut = $('#pennut:checked').val()

        var hambatan = $('#hambatan:checked').val()
        var hambatan1 = $('#hambatan1:checked').val()
        var hambatan2 = $('#hambatan2:checked').val()
        var hambatan3 = $('#hambatan3:checked').val()
        var hambatan4 = $('#hambatan4:checked').val()
        var hambatan5 = $('#hambatan5:checked').val()
        var hambatan6 = $('#hambatan6:checked').val()
        var hambatan7 = $('#hambatan7:checked').val()

        var spiritual = $('#spiritual:checked').val()


        var rjvalue = $('#rjvalue').val()
        var dsvalue = $('#dsvalue').val()
        var abvalue = $('#abvalue').val()
        var tivalue = $('#tivalue').val()
        var gjvalue = $('#gjvalue').val()
        var smvalue = $('#smvalue').val()
        var totalnyeri = $('#totalnyeri').val()

        var bbvalue = $('#bbvalue').val()
        var bbbvalue = $('#bbbvalue').val()
        var pbvalue = $('#pbvalue').val()
        var total_nutrisi = $('#total_nutrisi').val()

        var sakit_berat = $('#sakit_berat:checked').val()
        var nyeri_pindah = $('#nyeri_pindah:checked').val()
        var lamanyeri = $('#lamanyeri:checked').val()

        var rasanyeri = $('#rasanyeri:checked').val()
        var rasanyeri1 = $('#rasanyeri1:checked').val()
        var rasanyeri2 = $('#rasanyeri2:checked').val()
        var rasanyeri3 = $('#rasanyeri3:checked').val()
        var rasanyeri4 = $('#rasanyeri4:checked').val()
        var rasanyeri5 = $('#rasanyeri5:checked').val()
        var rasanyeri6 = $('#rasanyeri6:checked').val()
        var rasanyeri7 = $('#rasanyeri7:checked').val()
        var rasanyeri8 = $('#rasanyeri8:checked').val()
        var rasanyeri9 = $('#rasanyeri9:checked').val()

        var seringnyeri = $('#seringnyeri:checked').val()
        var serringnyeri = $('#serringnyeri:checked').val()
        var berkurangnyeri = $('#berkurangnyeri:checked').val()



        var sosup = $('#sosup:checked').val()
        var sosup1 = $('#sosup1:checked').val()
        var sosup2 = $('#sosup2:checked').val()
        var sosup3 = $('#sosup3:checked').val()
        var sosup4 = $('#sosup4:checked').val()

        var diagnosakebidanan = $('#diagnosakebidanan').val()
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
        var rencanaasuhan = $('#rencanaasuhan').val()


        // var sumberdata = $("#sumberdata:checked").val();
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
                        obatplg: JSON.stringify(obatplg),
                        riwayatpartus: JSON.stringify(riwayatpartus),
                        tindakankebidanan: JSON.stringify(tindakankebidanan),


                        norm: $('#norm').val(),
                        asal_rujukan: $('#asal_rujukan').val(),

                        anamnesis_triase_bidan: $('#anamnesis_triase_bidan').val(),
                        diagnosa_triase_bidan: $('#diagnosa_triase_bidan').val(),
                        rekomendasi: $('#rekomendasi').val(),

                        

                        kj: $('#kj').val(),
                        tgl_pengkajian: $('#tgl_pengkajian').val(),


                        tglmasuk: $('#tglmasuk').val(),
                        alpul: $('#alpul').val(),
                        sumberdata: $('#sumberdata:checked').val(),
                        asalmasuk: $('#asalmasuk:checked').val(),
                        caramasuk: $('#caramasuk:checked').val(),
                        subyek: $('#anamnesis').val(),
                        keadaanumum: $('#keadaanumum:checked').val(),
                        kesadaran: $('#kesadaran:checked').val(),
                        tekanandarah: $('#tekanandarah').val(),
                        frekuensinadi: $('#frekuensinadi').val(),
                        frekuensinafas: $('#frekuensinafas').val(),
                        suhutubuh: $('#suhutubuh').val(),
                        beratbadan: $('#beratbadan').val(),
                        tb: $('#tb').val(),
                        gcs: $('#gcs').val(),
                        spo2: $('#SPO2').val(),
                        imunisasi: $('#imunisasi:checked').val(),
                        imunisasi1: $('#imunisasi1:checked').val(),
                        imunisasi2: $('#imunisasi2:checked').val(),
                        imunisasi3: $('#imunisasi3:checked').val(),
                        imunisasi4: $('#imunisasi4:checked').val(),
                        imunisasi5: $('#imunisasi5:checked').val(),
                        imunisasi6: $('#imunisasi6:checked').val(),
                        imunisasi7: $('#imunisasi7:checked').val(),
                        imunisasi8: $('#imunisasi8:checked').val(),
                        imunisasi9: $('#imunisasi9:checked').val(),
                        imunisasi10: $('#imunisasi10:checked').val(),
                        imunisasi11: $('#imunisasi11:checked').val(),
                        imunisasi12: $('#imunisasi12:checked').val(),
                        imunisasi13: $('#imunisasi13:checked').val(),
                        imunisasi14: $('#imunisasi14:checked').val(),
                        imunisasi15: $('#imunisasi15:checked').val(),
                        imunisasi16: $('#imunisasi16:checked').val(),
                        imunisasi17: $('#imunisasi17:checked').val(),
                        imunisasi18: $('#imunisasi18:checked').val(),
                        kberencana: $('#kberencana:checked').val(),
                        kberencana1: $('#kberencana1:checked').val(),
                        kberencana2: $('#kberencana2:checked').val(),
                        kberencana3: $('#kberencana3:checked').val(),
                        kberencana4: $('#kberencana4:checked').val(),
                        kberencana5: $('#kberencana5:checked').val(),
                        komplikasikb: $('#komplikasikb:checked').val(),
                        komplikasikb1: $('#komplikasikb1:checked').val(),
                        komplikasikb2: $('#komplikasikb2:checked').val(),
                        rpenyakit: $('#rpenyakit:checked').val(),
                        rpenyakit1: $('#rpenyakit1:checked').val(),
                        rpenyakit2: $('#rpenyakit2:checked').val(),
                        rpenyakit3: $('#rpenyakit3:checked').val(),
                        rpenyakit4: $('#rpenyakit4:checked').val(),
                        rpenyakit5: $('#rpenyakit5:checked').val(),
                        rpenyakit6: $('#rpenyakit6:checked').val(),
                        rpenyakit7: $('#rpenyakit7:checked').val(),
                        operasi: $('#operasi:checked').val(),
                        operasi1: $('#operasi1:checked').val(),
                        operasi2: $('#operasi2:checked').val(),
                        ginekologi: $('#ginekologi:checked').val(),
                        ginekologi1: $('#ginekologi1:checked').val(),
                        ginekologi2: $('#ginekologi2:checked').val(),
                        ginekologi3: $('#ginekologi3:checked').val(),
                        ginekologi4: $('#ginekologi4:checked').val(),
                        ginekologi5: $('#ginekologi5:checked').val(),
                        ginekologi6: $('#ginekologi6:checked').val(),
                        ginekologi7: $('#ginekologi7:checked').val(),
                        ginekologi8: $('#ginekologi8:checked').val(),
                        ginekologi9: $('#ginekologi9:checked').val(),
                        ginekologi10: $('#ginekologi10:checked').val(),
                        ginekologi11: $('#ginekologi11:checked').val(),
                        rpk: $('#rpk:checked').val(),
                        rpk1: $('#rpk1:checked').val(),
                        rpk2: $('#rpk2:checked').val(),
                        rpk3: $('#rpk3:checked').val(),
                        rpk4: $('#rpk4:checked').val(),
                        rpk5: $('#rpk5:checked').val(),
                        rpk6: $('#rpk6:checked').val(),
                        rpk7: $('#rpk7:checked').val(),
                        rpk8: $('#rpk8:checked').val(),
                        rpk9: $('#rpk9:checked').val(),
                        terapi: $('#terapi:checked').val(),
                        terapi1: $('#terapi1:checked').val(),
                        terapi2: $('#terapi2:checked').val(),
                        terapi3: $('#terapi3:checked').val(),
                        aler: $('#aler:checked').val(),
                        aler1: $('#aler1:checked').val(),
                        aler2: $('#aler2').val(),
                        kebiasaan: $('#kebiasaan:checked').val(),
                        kebiasaan1: $('#kebiasaan1:checked').val(),
                        otidur: $('#otidur:checked').val(),
                        otidur1: $('#otidur1:checked').val(),
                        alkohol: $('#alkohol:checked').val(),
                        alkohol1: $('#alkohol1:checked').val(),
                        olahraga: $('#olahraga:checked').val(),
                        olahraga1: $('#olahraga1:checked').val(),
                        umurmenarche: $('#umurmenarche').val(),
                        lamanyahaid: $('#lamanyahaid').val(),
                        pembalut: $('#pembalut').val(),
                        haidterakhir: $('#haidterakhir').val(),
                        TP: $('#TP').val(),
                        Dismonore: $('#Dismonore:checked').val(),
                        Dismonore1: $('#Dismonore1:checked').val(),
                        Dismonore2: $('#Dismonore2:checked').val(),
                        Dismonore3: $('#Dismonore3:checked').val(),
                        menikah: $('#menikah').val(),
                        menikah1: $('#menikah1').val(),
                        menikah2: $('#menikah2:checked').val(),
                        menikah3: $('#menikah3:checked').val(),
                        menikah4: $('#menikah4:checked').val(),
                        G: $('#G').val(),
                        P: $('#P').val(),
                        A: $('#A').val(),
                        hamud1: $('#hamud1:checked').val(),
                        hamud2: $('#hamud2:checked').val(),
                        hamud: $('#hamud:checked').val(),
                        hatu: $('#hatu:checked').val(),
                        hatu1: $('#hatu1:checked').val(),
                        hatu2: $('#hatu2:checked').val(),
                        anc: $('#anc:checked').val(),
                        anc1: $('#anc1:checked').val(),
                        imunisasii: $('#imunisasii:checked').val(),
                        imunisasii1: $('#imunisasii1:checked').val(),
                        imunisasii2: $('#imunisasii2:checked').val(),
                        mata: $('#mata:checked').val(),
                        mata1: $('#mata1:checked').val(),
                        mata2: $('#mata2:checked').val(),
                        mata3: $('#mata3:checked').val(),
                        dadak: $('#dadak:checked').val(),
                        dadak1: $('#dadak1:checked').val(),
                        dadak2: $('#dadak2:checked').val(),
                        dadak3: $('#dadak3:checked').val(),
                        dadak4: $('#dadak4:checked').val(),
                        dadak5: $('#dadak5:checked').val(),
                        Ektremitas: $('#Ektremitas:checked').val(),
                        Ektremitas1: $('#Ektremitas1:checked').val(),
                        Ektremitas2: $('#Ektremitas2:checked').val(),
                        Ektremitas3: $('#Ektremitas3:checked').val(),
                        sistemnafas: $('#sistemnafas:checked').val(),
                        sistemnafas1: $('#sistemnafas1:checked').val(),
                        sistemnafas2: $('#sistemnafas2:checked').val(),
                        sistemnafas3: $('#sistemnafas3:checked').val(),
                        sistemnafas4: $('#sistemnafas4:checked').val(),
                        sistemnafas5: $('#sistemnafas5:checked').val(),
                        sistemnafas6: $('#sistemnafas6:checked').val(),
                        sistemnafas7: $('#sistemnafas7:checked').val(),
                        sistemnafas8: $('#sistemnafas8:checked').val(),
                        dapsi: $('#dapsi:checked').val(),
                        dapsi1: $('#dapsi1:checked').val(),
                        dapsi2: $('#dapsi2:checked').val(),
                        dapsi3: $('#dapsi3:checked').val(),
                        dapsi4: $('#dapsi4:checked').val(),
                        dapsi5: $('#dapsi5:checked').val(),
                        dapsi6: $('#dapsi6:checked').val(),
                        dapsi7: $('#dapsi7:checked').val(),
                        dapsi8: $('#dapsi8:checked').val(),
                        dapsi9: $('#dapsi9:checked').val(),
                        dapsi10: $('#dapsi10:checked').val(),
                        dapsi11: $('#dapsi11:checked').val(),
                        dapsi12: $('#dapsi12:checked').val(),


                        nilbud: $('#nilbud:checked').val(),
                        nilbud1: $('#nilbud1:checked').val(),
                        nilbud2: $('#nilbud2:checked').val(),
                        nilbud3: $('#nilbud3:checked').val(),
                        nilbud4: $('#nilbud4:checked').val(),
                        nilbud5: $('#nilbud5:checked').val(),

                        polaak: $('#polaak').val(),

                        polkom: $('#polkom:checked').val(),
                        polkom1: $('#polkom1:checked').val(),
                        polkom2: $('#polkom2:checked').val(),
                        polkom5: $('#polkom5').val(),

                        polmak: $('#polmak:checked').val(),
                        polmak1: $('#polmak1:checked').val(),
                        polmak2: $('#polmak2:checked').val(),
                        polmak3: $('#polmak3').val(),

                        panmak: $('#panmak:checked').val(),
                        panmak1: $('#panmak1:checked').val(),
                        panmak2: $('#panmak2').val(),

                        penmak: $('#penmak:checked').val(),
                        penmak1: $('#penmak1:checked').val(),
                        penmak2: $('#penmak2').val(),

                        kebel: $('#kebel:checked').val(),
                        kebel1: $('#kebel1:checked').val(),
                        kebel2: $('#kebel2:checked').val(),
                        kebel3: $('#kebel3:checked').val(),
                        kebel4: $('#kebel4:checked').val(),
                        kebel5: $('#kebel5:checked').val(),
                        kebel6: $('#kebel6:checked').val(),
                        kebel7: $('#kebel7:checked').val(),
                        kebel8: $('#kebel8:checked').val(),
                        kebel9: $('#kebel9:checked').val(),
                        kebel10: $('#kebel10:checked').val(),
                        kebel11: $('#kebel11:checked').val(),
                        kebel12: $('#kebel12:checked').val(),

                        penyak: $('#penyak:checked').val(),
                        penper: $('#penper:checked').val(),
                        pengob: $('#pengob:checked').val(),
                        pennut: $('#pennut:checked').val(),

                        hambatan: $('#hambatan:checked').val(),
                        hambatan1: $('#hambatan1:checked').val(),
                        hambatan2: $('#hambatan2:checked').val(),
                        hambatan3: $('#hambatan3:checked').val(),
                        hambatan4: $('#hambatan4:checked').val(),
                        hambatan5: $('#hambatan5:checked').val(),
                        hambatan6: $('#hambatan6:checked').val(),
                        hambatan7: $('#hambatan7:checked').val(),

                        spiritual: $('#spiritual:checked').val(),


                        rjvalue: $('#rjvalue').val(),
                        dsvalue: $('#dsvalue').val(),
                        abvalue: $('#abvalue').val(),
                        tivalue: $('#tivalue').val(),
                        gjvalue: $('#gjvalue').val(),
                        smvalue: $('#smvalue').val(),
                        totalnyeri: $('#totalnyeri').val(),

                        bbvalue: $('#bbvalue').val(),
                        bbbvalue: $('#bbbvalue').val(),
                        pbvalue: $('#pbvalue').val(),
                        total_nutrisi: $('#total_nutrisi').val(),

                        sakit_berat: $('#sakit_berat:checked').val(),
                        nyeri_pindah: $('#nyeri_pindah:checked').val(),
                        lamanyeri: $('#lamanyeri:checked').val(),

                        rasanyeri: $('#rasanyeri:checked').val(),
                        rasanyeri1: $('#rasanyeri1:checked').val(),
                        rasanyeri2: $('#rasanyeri2:checked').val(),
                        rasanyeri3: $('#rasanyeri3:checked').val(),
                        rasanyeri4: $('#rasanyeri4:checked').val(),
                        rasanyeri5: $('#rasanyeri5:checked').val(),
                        rasanyeri6: $('#rasanyeri6:checked').val(),
                        rasanyeri7: $('#rasanyeri7:checked').val(),
                        rasanyeri8: $('#rasanyeri8:checked').val(),
                        rasanyeri9: $('#rasanyeri9:checked').val(),

                        seringnyeri: $('#seringnyeri:checked').val(),
                        serringnyeri: $('#serringnyeri:checked').val(),
                        berkurangnyeri: $('#berkurangnyeri:checked').val(),
                        gambar1: $('#gambarcoret').val(),


                        sosup: $('#sosup:checked').val(),
                        sosup1: $('#sosup1:checked').val(),
                        sosup2: $('#sosup2:checked').val(),
                        sosup3: $('#sosup3:checked').val(),
                        sosup4: $('#sosup4:checked').val(),
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
                        diagnosakebidanan: $('#diagnosakebidanan').val(),
                        rencanaasuhan: $('#rencanaasuhan').val(),


                    },
                    url: '<?= route('simpanassesvk') ?>',

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
    $(".updateassesvk").click(function() {
        var gambar = document.getElementById("myCanvas1");

        var ctx1 = gambar.getContext("2d");
        var img1 = document.getElementById("gambarnya1");
        ctx1.drawImage(img1, 10, 10);
        var dataUrl1 = gambar.toDataURL();
        $('#gambarcoret').val(dataUrl1)
        gambar1 = $('#gambarcoret').val()
        var obatplg = $('.formobatplg').serializeArray();
        var riwayatpartus = $('.formriwayatpartus').serializeArray();
        var tindakankebidanan = $('.formtindakankebidanan').serializeArray();
        var anamnesis_triase_bidan = $('#anamnesis_triase_bidan').val()
        var diagnosa_triase_bidan = $('#diagnosa_triase_bidan').val()
        var rekomendasi = $('#rekomendasi').val()


        var asal_rujukan = $('#asal_rujukan').val()

        var norm = $('#norm').val()
        var kj = $('#kj').val()

        var tgl_pengkajian = $('#tgl_pengkajian').val()

        var tglmasuk = $('#tglmasuk').val()
        var sumberdata = $('#sumberdata:checked').val()
        var asalmasuk = $('#asalmasuk:checked').val()
        var caramasuk = $('#caramasuk:checked').val()
        var subyek = $('#anamnesis').val()
        var keadaanumum = $('#keadaanumum:checked').val()
        var kesadaran = $('#kesadaran:checked').val()
        var tekanandarah = $('#tekanandarah').val()
        var frekuensinadi = $('#frekuensinadi').val()
        var frekuensinafas = $('#frekuensinafas').val()
        var suhutubuh = $('#suhutubuh').val()
        var beratbadan = $('#beratbadan').val()
        var tb = $('#tb').val()
        var gcs = $('#gcs').val()
        var spo2 = $('#SPO2').val()
        var imunisasi = $('#imunisasi:checked').val()
        var imunisasi1 = $('#imunisasi1:checked').val()
        var imunisasi2 = $('#imunisasi2:checked').val()
        var imunisasi3 = $('#imunisasi3:checked').val()
        var imunisasi4 = $('#imunisasi4:checked').val()
        var imunisasi5 = $('#imunisasi5:checked').val()
        var imunisasi6 = $('#imunisasi6:checked').val()
        var imunisasi7 = $('#imunisasi7:checked').val()
        var imunisasi8 = $('#imunisasi8:checked').val()
        var imunisasi9 = $('#imunisasi9:checked').val()
        var imunisasi10 = $('#imunisasi10:checked').val()
        var imunisasi11 = $('#imunisasi11:checked').val()
        var imunisasi12 = $('#imunisasi12:checked').val()
        var imunisasi13 = $('#imunisasi13:checked').val()
        var imunisasi14 = $('#imunisasi14:checked').val()
        var imunisasi15 = $('#imunisasi15:checked').val()
        var imunisasi16 = $('#imunisasi16:checked').val()
        var imunisasi17 = $('#imunisasi17:checked').val()
        var imunisasi18 = $('#imunisasi18:checked').val()
        var kberencana = $('#kberencana:checked').val()
        var kberencana1 = $('#kberencana1:checked').val()
        var kberencana2 = $('#kberencana2:checked').val()
        var kberencana3 = $('#kberencana3:checked').val()
        var kberencana4 = $('#kberencana4:checked').val()
        var kberencana5 = $('#kberencana5:checked').val()
        var komplikasikb = $('#komplikasikb:checked').val()
        var komplikasikb1 = $('#komplikasikb1:checked').val()
        var komplikasikb2 = $('#komplikasikb2:checked').val()
        var rpenyakit = $('#rpenyakit:checked').val()
        var rpenyakit1 = $('#rpenyakit1:checked').val()
        var rpenyakit2 = $('#rpenyakit2:checked').val()
        var rpenyakit3 = $('#rpenyakit3:checked').val()
        var rpenyakit4 = $('#rpenyakit4:checked').val()
        var rpenyakit5 = $('#rpenyakit5:checked').val()
        var rpenyakit6 = $('#rpenyakit6:checked').val()
        var rpenyakit7 = $('#rpenyakit7:checked').val()
        var operasi = $('#operasi:checked').val()
        var operasi1 = $('#operasi1:checked').val()
        var operasi2 = $('#operasi2:checked').val()
        var ginekologi = $('#ginekologi:checked').val()
        var ginekologi1 = $('#ginekologi1:checked').val()
        var ginekologi2 = $('#ginekologi2:checked').val()
        var ginekologi3 = $('#ginekologi3:checked').val()
        var ginekologi4 = $('#ginekologi4:checked').val()
        var ginekologi5 = $('#ginekologi5:checked').val()
        var ginekologi6 = $('#ginekologi6:checked').val()
        var ginekologi7 = $('#ginekologi7:checked').val()
        var ginekologi8 = $('#ginekologi8:checked').val()
        var ginekologi9 = $('#ginekologi9:checked').val()
        var ginekologi10 = $('#ginekologi10:checked').val()
        var ginekologi11 = $('#ginekologi11:checked').val()
        var rpk = $('#rpk:checked').val()
        var rpk1 = $('#rpk1:checked').val()
        var rpk2 = $('#rpk2:checked').val()
        var rpk3 = $('#rpk3:checked').val()
        var rpk4 = $('#rpk4:checked').val()
        var rpk5 = $('#rpk5:checked').val()
        var rpk6 = $('#rpk6:checked').val()
        var rpk7 = $('#rpk7:checked').val()
        var rpk8 = $('#rpk8:checked').val()
        var rpk9 = $('#rpk9:checked').val()
        var terapi = $('#terapi:checked').val()
        var terapi1 = $('#terapi1:checked').val()
        var terapi2 = $('#terapi2:checked').val()
        var terapi3 = $('#terapi3:checked').val()
        var aler = $('#aler:checked').val()
        var aler1 = $('#aler1:checked').val()
        var aler2 = $('#aler2').val()
        var kebiasaan = $('#kebiasaan:checked').val()
        var kebiasaan1 = $('#kebiasaan1:checked').val()
        var otidur = $('#otidur:checked').val()
        var otidur1 = $('#otidur1:checked').val()
        var alkohol = $('#alkohol:checked').val()
        var alkohol1 = $('#alkohol1:checked').val()
        var olahraga = $('#olahraga:checked').val()
        var olahraga1 = $('#olahraga1:checked').val()
        var umurmenarche = $('#umurmenarche').val()
        var lamanyahaid = $('#lamanyahaid').val()
        var pembalut = $('#pembalut').val()
        var haidterakhir = $('#haidterakhir').val()
        var TP = $('#TP').val()
        var Dismonore = $('#Dismonore:checked').val()
        var Dismonore1 = $('#Dismonore1:checked').val()
        var Dismonore2 = $('#Dismonore2:checked').val()
        var Dismonore3 = $('#Dismonore3:checked').val()
        var menikah = $('#menikah').val()
        var menikah1 = $('#menikah1').val()
        var menikah2 = $('#menikah2:checked').val()
        var menikah3 = $('#menikah3:checked').val()
        var menikah4 = $('#menikah4:checked').val()
        var G = $('#G').val()
        var P = $('#P').val()
        var A = $('#A').val()
        var hamud1 = $('#hamud1:checked').val()
        var hamud2 = $('#hamud2:checked').val()
        var hamud = $('#hamud:checked').val()
        var hatu = $('#hatu:checked').val()
        var hatu1 = $('#hatu1:checked').val()
        var hatu2 = $('#hatu2:checked').val()
        var anc = $('#anc:checked').val()
        var anc1 = $('#anc1:checked').val()
        var imunisasii = $('#imunisasii:checked').val()
        var imunisasii1 = $('#imunisasii1:checked').val()
        var imunisasii2 = $('#imunisasii2:checked').val()
        var mata = $('#mata:checked').val()
        var mata1 = $('#mata1:checked').val()
        var mata2 = $('#mata2:checked').val()
        var mata3 = $('#mata3:checked').val()
        var dadak = $('#dadak:checked').val()
        var dadak1 = $('#dadak1:checked').val()
        var dadak2 = $('#dadak2:checked').val()
        var dadak3 = $('#dadak3:checked').val()
        var dadak4 = $('#dadak4:checked').val()
        var dadak5 = $('#dadak5:checked').val()
        var Ektremitas = $('#Ektremitas:checked').val()
        var Ektremitas1 = $('#Ektremitas1:checked').val()
        var Ektremitas2 = $('#Ektremitas2:checked').val()
        var Ektremitas3 = $('#Ektremitas3:checked').val()
        var sistemnafas = $('#sistemnafas:checked').val()
        var sistemnafas1 = $('#sistemnafas1:checked').val()
        var sistemnafas2 = $('#sistemnafas2:checked').val()
        var sistemnafas3 = $('#sistemnafas3:checked').val()
        var sistemnafas4 = $('#sistemnafas4:checked').val()
        var sistemnafas5 = $('#sistemnafas5:checked').val()
        var sistemnafas6 = $('#sistemnafas6:checked').val()
        var sistemnafas7 = $('#sistemnafas7:checked').val()
        var sistemnafas8 = $('#sistemnafas8:checked').val()


        var dapsi = $('#dapsi:checked').val()
        var dapsi1 = $('#dapsi1:checked').val()
        var dapsi2 = $('#dapsi2:checked').val()
        var dapsi3 = $('#dapsi3:checked').val()
        var dapsi4 = $('#dapsi4:checked').val()
        var dapsi5 = $('#dapsi5:checked').val()
        var dapsi6 = $('#dapsi6:checked').val()
        var dapsi7 = $('#dapsi7:checked').val()
        var dapsi8 = $('#dapsi8:checked').val()
        var dapsi9 = $('#dapsi9:checked').val()
        var dapsi10 = $('#dapsi10:checked').val()
        var dapsi11 = $('#dapsi11:checked').val()
        var dapsi12 = $('#dapsi12:checked').val()


        var nilbud = $('#nilbud:checked').val()
        var nilbud1 = $('#nilbud1:checked').val()
        var nilbud2 = $('#nilbud2:checked').val()
        var nilbud3 = $('#nilbud3:checked').val()
        var nilbud4 = $('#nilbud4:checked').val()
        var nilbud5 = $('#nilbud5:checked').val()

        var polaak = $('#polaak').val()

        var polkom = $('#polkom:checked').val()
        var polkom1 = $('#polkom1:checked').val()
        var polkom2 = $('#polkom2:checked').val()
        var polkom5 = $('#polkom5').val()

        var polmak = $('#polmak:checked').val()
        var polmak1 = $('#polmak1:checked').val()
        var polmak2 = $('#polmak2:checked').val()
        var polmak3 = $('#polmak3').val()

        var panmak = $('#panmak:checked').val()
        var panmak1 = $('#panmak1:checked').val()
        var panmak2 = $('#panmak2').val()

        var penmak = $('#penmak:checked').val()
        var penmak1 = $('#penmak1:checked').val()
        var penmak2 = $('#penmak2').val()

        var kebel = $('#kebel:checked').val()
        var kebel1 = $('#kebel1:checked').val()
        var kebel2 = $('#kebel2:checked').val()
        var kebel3 = $('#kebel3:checked').val()
        var kebel4 = $('#kebel4:checked').val()
        var kebel5 = $('#kebel5:checked').val()
        var kebel6 = $('#kebel6:checked').val()
        var kebel7 = $('#kebel7:checked').val()
        var kebel8 = $('#kebel8:checked').val()
        var kebel9 = $('#kebel9:checked').val()
        var kebel10 = $('#kebel10:checked').val()
        var kebel11 = $('#kebel11:checked').val()
        var kebel12 = $('#kebel12:checked').val()

        var penyak = $('#penyak:checked').val()
        var penper = $('#penper:checked').val()
        var pengob = $('#pengob:checked').val()
        var pennut = $('#pennut:checked').val()

        var hambatan = $('#hambatan:checked').val()
        var hambatan1 = $('#hambatan1:checked').val()
        var hambatan2 = $('#hambatan2:checked').val()
        var hambatan3 = $('#hambatan3:checked').val()
        var hambatan4 = $('#hambatan4:checked').val()
        var hambatan5 = $('#hambatan5:checked').val()
        var hambatan6 = $('#hambatan6:checked').val()
        var hambatan7 = $('#hambatan7:checked').val()

        var spiritual = $('#spiritual:checked').val()


        var rjvalue = $('#rjvalue').val()
        var dsvalue = $('#dsvalue').val()
        var abvalue = $('#abvalue').val()
        var tivalue = $('#tivalue').val()
        var gjvalue = $('#gjvalue').val()
        var smvalue = $('#smvalue').val()
        var totalnyeri = $('#totalnyeri').val()

        var bbvalue = $('#bbvalue').val()
        var bbbvalue = $('#bbbvalue').val()
        var pbvalue = $('#pbvalue').val()
        var total_nutrisi = $('#total_nutrisi').val()

        var sakit_berat = $('#sakit_berat:checked').val()
        var nyeri_pindah = $('#nyeri_pindah:checked').val()
        var lamanyeri = $('#lamanyeri:checked').val()

        var rasanyeri = $('#rasanyeri:checked').val()
        var rasanyeri1 = $('#rasanyeri1:checked').val()
        var rasanyeri2 = $('#rasanyeri2:checked').val()
        var rasanyeri3 = $('#rasanyeri3:checked').val()
        var rasanyeri4 = $('#rasanyeri4:checked').val()
        var rasanyeri5 = $('#rasanyeri5:checked').val()
        var rasanyeri6 = $('#rasanyeri6:checked').val()
        var rasanyeri7 = $('#rasanyeri7:checked').val()
        var rasanyeri8 = $('#rasanyeri8:checked').val()
        var rasanyeri9 = $('#rasanyeri9:checked').val()

        var seringnyeri = $('#seringnyeri:checked').val()
        var serringnyeri = $('#serringnyeri:checked').val()
        var berkurangnyeri = $('#berkurangnyeri:checked').val()



        var sosup = $('#sosup:checked').val()
        var sosup1 = $('#sosup1:checked').val()
        var sosup2 = $('#sosup2:checked').val()
        var sosup3 = $('#sosup3:checked').val()
        var sosup4 = $('#sosup4:checked').val()

        var diagnosakebidanan = $('#diagnosakebidanan').val()
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
        var rencanaasuhan = $('#rencanaasuhan').val()


        // var sumberdata = $("#sumberdata:checked").val();
        Swal.fire({
            title: "Yakin update Assesmen?",
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
                        obatplg: JSON.stringify(obatplg),
                        riwayatpartus: JSON.stringify(riwayatpartus),
                        tindakankebidanan: JSON.stringify(tindakankebidanan),


                        norm: $('#norm').val(),
                        asal_rujukan: $('#asal_rujukan').val(),

                        kj: $('#kj').val(),
                        tgl_pengkajian: $('#tgl_pengkajian').val(),


                        tglmasuk: $('#tglmasuk').val(),
                        alpul: $('#alpul').val(),
                        sumberdata: $('#sumberdata:checked').val(),
                        asalmasuk: $('#asalmasuk:checked').val(),
                        anamnesis_triase_bidan: $('#anamnesis_triase_bidan').val(),
                        diagnosa_triase_bidan: $('#diagnosa_triase_bidan').val(),
                        rekomendasi: $('#rekomendasi').val(),


                        caramasuk: $('#caramasuk:checked').val(),
                        subyek: $('#anamnesis').val(),
                        keadaanumum: $('#keadaanumum:checked').val(),
                        kesadaran: $('#kesadaran:checked').val(),
                        tekanandarah: $('#tekanandarah').val(),
                        frekuensinadi: $('#frekuensinadi').val(),
                        frekuensinafas: $('#frekuensinafas').val(),
                        suhutubuh: $('#suhutubuh').val(),
                        beratbadan: $('#beratbadan').val(),
                        tb: $('#tb').val(),
                        gcs: $('#gcs').val(),
                        spo2: $('#SPO2').val(),
                        imunisasi: $('#imunisasi:checked').val(),
                        imunisasi1: $('#imunisasi1:checked').val(),
                        imunisasi2: $('#imunisasi2:checked').val(),
                        imunisasi3: $('#imunisasi3:checked').val(),
                        imunisasi4: $('#imunisasi4:checked').val(),
                        imunisasi5: $('#imunisasi5:checked').val(),
                        imunisasi6: $('#imunisasi6:checked').val(),
                        imunisasi7: $('#imunisasi7:checked').val(),
                        imunisasi8: $('#imunisasi8:checked').val(),
                        imunisasi9: $('#imunisasi9:checked').val(),
                        imunisasi10: $('#imunisasi10:checked').val(),
                        imunisasi11: $('#imunisasi11:checked').val(),
                        imunisasi12: $('#imunisasi12:checked').val(),
                        imunisasi13: $('#imunisasi13:checked').val(),
                        imunisasi14: $('#imunisasi14:checked').val(),
                        imunisasi15: $('#imunisasi15:checked').val(),
                        imunisasi16: $('#imunisasi16:checked').val(),
                        imunisasi17: $('#imunisasi17:checked').val(),
                        imunisasi18: $('#imunisasi18:checked').val(),
                        kberencana: $('#kberencana:checked').val(),
                        kberencana1: $('#kberencana1:checked').val(),
                        kberencana2: $('#kberencana2:checked').val(),
                        kberencana3: $('#kberencana3:checked').val(),
                        kberencana4: $('#kberencana4:checked').val(),
                        kberencana5: $('#kberencana5:checked').val(),
                        komplikasikb: $('#komplikasikb:checked').val(),
                        komplikasikb1: $('#komplikasikb1:checked').val(),
                        komplikasikb2: $('#komplikasikb2:checked').val(),
                        rpenyakit: $('#rpenyakit:checked').val(),
                        rpenyakit1: $('#rpenyakit1:checked').val(),
                        rpenyakit2: $('#rpenyakit2:checked').val(),
                        rpenyakit3: $('#rpenyakit3:checked').val(),
                        rpenyakit4: $('#rpenyakit4:checked').val(),
                        rpenyakit5: $('#rpenyakit5:checked').val(),
                        rpenyakit6: $('#rpenyakit6:checked').val(),
                        rpenyakit7: $('#rpenyakit7:checked').val(),
                        operasi: $('#operasi:checked').val(),
                        operasi1: $('#operasi1:checked').val(),
                        operasi2: $('#operasi2:checked').val(),
                        ginekologi: $('#ginekologi:checked').val(),
                        ginekologi1: $('#ginekologi1:checked').val(),
                        ginekologi2: $('#ginekologi2:checked').val(),
                        ginekologi3: $('#ginekologi3:checked').val(),
                        ginekologi4: $('#ginekologi4:checked').val(),
                        ginekologi5: $('#ginekologi5:checked').val(),
                        ginekologi6: $('#ginekologi6:checked').val(),
                        ginekologi7: $('#ginekologi7:checked').val(),
                        ginekologi8: $('#ginekologi8:checked').val(),
                        ginekologi9: $('#ginekologi9:checked').val(),
                        ginekologi10: $('#ginekologi10:checked').val(),
                        ginekologi11: $('#ginekologi11:checked').val(),
                        rpk: $('#rpk:checked').val(),
                        rpk1: $('#rpk1:checked').val(),
                        rpk2: $('#rpk2:checked').val(),
                        rpk3: $('#rpk3:checked').val(),
                        rpk4: $('#rpk4:checked').val(),
                        rpk5: $('#rpk5:checked').val(),
                        rpk6: $('#rpk6:checked').val(),
                        rpk7: $('#rpk7:checked').val(),
                        rpk8: $('#rpk8:checked').val(),
                        rpk9: $('#rpk9:checked').val(),
                        terapi: $('#terapi:checked').val(),
                        terapi1: $('#terapi1:checked').val(),
                        terapi2: $('#terapi2:checked').val(),
                        terapi3: $('#terapi3:checked').val(),
                        aler: $('#aler:checked').val(),
                        aler1: $('#aler1:checked').val(),
                        aler2: $('#aler2').val(),
                        kebiasaan: $('#kebiasaan:checked').val(),
                        kebiasaan1: $('#kebiasaan1:checked').val(),
                        otidur: $('#otidur:checked').val(),
                        otidur1: $('#otidur1:checked').val(),
                        alkohol: $('#alkohol:checked').val(),
                        alkohol1: $('#alkohol1:checked').val(),
                        olahraga: $('#olahraga:checked').val(),
                        olahraga1: $('#olahraga1:checked').val(),
                        umurmenarche: $('#umurmenarche').val(),
                        lamanyahaid: $('#lamanyahaid').val(),
                        pembalut: $('#pembalut').val(),
                        haidterakhir: $('#haidterakhir').val(),
                        TP: $('#TP').val(),
                        Dismonore: $('#Dismonore:checked').val(),
                        Dismonore1: $('#Dismonore1:checked').val(),
                        Dismonore2: $('#Dismonore2:checked').val(),
                        Dismonore3: $('#Dismonore3:checked').val(),
                        menikah: $('#menikah').val(),
                        menikah1: $('#menikah1').val(),
                        menikah2: $('#menikah2:checked').val(),
                        menikah3: $('#menikah3:checked').val(),
                        menikah4: $('#menikah4:checked').val(),
                        G: $('#G').val(),
                        P: $('#P').val(),
                        A: $('#A').val(),
                        hamud1: $('#hamud1:checked').val(),
                        hamud2: $('#hamud2:checked').val(),
                        hamud: $('#hamud:checked').val(),
                        hatu: $('#hatu:checked').val(),
                        hatu1: $('#hatu1:checked').val(),
                        hatu2: $('#hatu2:checked').val(),
                        anc: $('#anc:checked').val(),
                        anc1: $('#anc1:checked').val(),
                        imunisasii: $('#imunisasii:checked').val(),
                        imunisasii1: $('#imunisasii1:checked').val(),
                        imunisasii2: $('#imunisasii2:checked').val(),
                        mata: $('#mata:checked').val(),
                        mata1: $('#mata1:checked').val(),
                        mata2: $('#mata2:checked').val(),
                        mata3: $('#mata3:checked').val(),
                        dadak: $('#dadak:checked').val(),
                        dadak1: $('#dadak1:checked').val(),
                        dadak2: $('#dadak2:checked').val(),
                        dadak3: $('#dadak3:checked').val(),
                        dadak4: $('#dadak4:checked').val(),
                        dadak5: $('#dadak5:checked').val(),
                        Ektremitas: $('#Ektremitas:checked').val(),
                        Ektremitas1: $('#Ektremitas1:checked').val(),
                        Ektremitas2: $('#Ektremitas2:checked').val(),
                        Ektremitas3: $('#Ektremitas3:checked').val(),
                        sistemnafas: $('#sistemnafas:checked').val(),
                        sistemnafas1: $('#sistemnafas1:checked').val(),
                        sistemnafas2: $('#sistemnafas2:checked').val(),
                        sistemnafas3: $('#sistemnafas3:checked').val(),
                        sistemnafas4: $('#sistemnafas4:checked').val(),
                        sistemnafas5: $('#sistemnafas5:checked').val(),
                        sistemnafas6: $('#sistemnafas6:checked').val(),
                        sistemnafas7: $('#sistemnafas7:checked').val(),
                        sistemnafas8: $('#sistemnafas8:checked').val(),
                        dapsi: $('#dapsi:checked').val(),
                        dapsi1: $('#dapsi1:checked').val(),
                        dapsi2: $('#dapsi2:checked').val(),
                        dapsi3: $('#dapsi3:checked').val(),
                        dapsi4: $('#dapsi4:checked').val(),
                        dapsi5: $('#dapsi5:checked').val(),
                        dapsi6: $('#dapsi6:checked').val(),
                        dapsi7: $('#dapsi7:checked').val(),
                        dapsi8: $('#dapsi8:checked').val(),
                        dapsi9: $('#dapsi9:checked').val(),
                        dapsi10: $('#dapsi10:checked').val(),
                        dapsi11: $('#dapsi11:checked').val(),
                        dapsi12: $('#dapsi12:checked').val(),


                        nilbud: $('#nilbud:checked').val(),
                        nilbud1: $('#nilbud1:checked').val(),
                        nilbud2: $('#nilbud2:checked').val(),
                        nilbud3: $('#nilbud3:checked').val(),
                        nilbud4: $('#nilbud4:checked').val(),
                        nilbud5: $('#nilbud5:checked').val(),

                        polaak: $('#polaak').val(),

                        polkom: $('#polkom:checked').val(),
                        polkom1: $('#polkom1:checked').val(),
                        polkom2: $('#polkom2:checked').val(),
                        polkom5: $('#polkom5').val(),

                        polmak: $('#polmak:checked').val(),
                        polmak1: $('#polmak1:checked').val(),
                        polmak2: $('#polmak2:checked').val(),
                        polmak3: $('#polmak3').val(),

                        panmak: $('#panmak:checked').val(),
                        panmak1: $('#panmak1:checked').val(),
                        panmak2: $('#panmak2').val(),

                        penmak: $('#penmak:checked').val(),
                        penmak1: $('#penmak1:checked').val(),
                        penmak2: $('#penmak2').val(),

                        kebel: $('#kebel:checked').val(),
                        kebel1: $('#kebel1:checked').val(),
                        kebel2: $('#kebel2:checked').val(),
                        kebel3: $('#kebel3:checked').val(),
                        kebel4: $('#kebel4:checked').val(),
                        kebel5: $('#kebel5:checked').val(),
                        kebel6: $('#kebel6:checked').val(),
                        kebel7: $('#kebel7:checked').val(),
                        kebel8: $('#kebel8:checked').val(),
                        kebel9: $('#kebel9:checked').val(),
                        kebel10: $('#kebel10:checked').val(),
                        kebel11: $('#kebel11:checked').val(),
                        kebel12: $('#kebel12:checked').val(),

                        penyak: $('#penyak:checked').val(),
                        penper: $('#penper:checked').val(),
                        pengob: $('#pengob:checked').val(),
                        pennut: $('#pennut:checked').val(),

                        hambatan: $('#hambatan:checked').val(),
                        hambatan1: $('#hambatan1:checked').val(),
                        hambatan2: $('#hambatan2:checked').val(),
                        hambatan3: $('#hambatan3:checked').val(),
                        hambatan4: $('#hambatan4:checked').val(),
                        hambatan5: $('#hambatan5:checked').val(),
                        hambatan6: $('#hambatan6:checked').val(),
                        hambatan7: $('#hambatan7:checked').val(),

                        spiritual: $('#spiritual:checked').val(),


                        rjvalue: $('#rjvalue').val(),
                        dsvalue: $('#dsvalue').val(),
                        abvalue: $('#abvalue').val(),
                        tivalue: $('#tivalue').val(),
                        gjvalue: $('#gjvalue').val(),
                        smvalue: $('#smvalue').val(),
                        totalnyeri: $('#totalnyeri').val(),

                        bbvalue: $('#bbvalue').val(),
                        bbbvalue: $('#bbbvalue').val(),
                        pbvalue: $('#pbvalue').val(),
                        total_nutrisi: $('#total_nutrisi').val(),

                        sakit_berat: $('#sakit_berat:checked').val(),
                        nyeri_pindah: $('#nyeri_pindah:checked').val(),
                        lamanyeri: $('#lamanyeri:checked').val(),

                        rasanyeri: $('#rasanyeri:checked').val(),
                        rasanyeri1: $('#rasanyeri1:checked').val(),
                        rasanyeri2: $('#rasanyeri2:checked').val(),
                        rasanyeri3: $('#rasanyeri3:checked').val(),
                        rasanyeri4: $('#rasanyeri4:checked').val(),
                        rasanyeri5: $('#rasanyeri5:checked').val(),
                        rasanyeri6: $('#rasanyeri6:checked').val(),
                        rasanyeri7: $('#rasanyeri7:checked').val(),
                        rasanyeri8: $('#rasanyeri8:checked').val(),
                        rasanyeri9: $('#rasanyeri9:checked').val(),

                        seringnyeri: $('#seringnyeri:checked').val(),
                        serringnyeri: $('#serringnyeri:checked').val(),
                        berkurangnyeri: $('#berkurangnyeri:checked').val(),
                        gambar1: $('#gambarcoret').val(),


                        sosup: $('#sosup:checked').val(),
                        sosup1: $('#sosup1:checked').val(),
                        sosup2: $('#sosup2:checked').val(),
                        sosup3: $('#sosup3:checked').val(),
                        sosup4: $('#sosup4:checked').val(),
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
                        diagnosakebidanan: $('#diagnosakebidanan').val(),
                        rencanaasuhan: $('#rencanaasuhan').val(),


                    },
                    url: '<?= route('updateassesvk') ?>',

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
    $(".validasiassesvk").click(function() {
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
                    url: '<?= route('validasiassesvk') ?>',

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