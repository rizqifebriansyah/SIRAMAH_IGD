<style>
    .borderless table {
        border-top-style: none;
        border-left-style: none;
        border-right-style: none;
        border-bottom-style: none;
    }
</style>

@if ($unit == '1023')
<div class="card-body">
    <div class="row">
        <div class="col-md-6">

            <div class="mailbox-read-message">
                <div class="card-header bg-warning float-center">
                    <p class="text-bold ">Resume KEBIDANAN</p>
                </div>
                <!-- form dewasa\ -->
                @if ($assesbid == null && $assesbidbay == null)
                <h1> belum ada CPPT KEBIDANAN</h1>
                @elseif ($assesbid != null)

                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-bold font-italic">Tanggal Kunjungan</td>
                            <td>
                                <h5 class="text-bold">{{$assesbid[0]->tgl_kunjungan}}</h5>

                            </td>
                            <td class="text-bold font-italic">Tanggal Pengkajian</td>
                            <td>
                                <h5 class="text-bold">{{$assesbid[0]->tgl_input}}</h5>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Sumber Data</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    @if($assesbid[0]->sumber_data == 'Pasien Sendiri')
                                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" checked value="Pasien Sendiri">
                                    <label class="form-check-label" for="inlineRadio1">Pasien Sendiri /Autoanamase</label>
                                    @else
                                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Pasien Sendiri">
                                    <label class="form-check-label" for="inlineRadio1">Pasien Sendiri /Autoanamase</label>
                                    @endif
                                </div>

                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    @if($assesbid[0]->sumber_data == 'Keluarga')
                                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" checked value="Keluarga">
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
                                    @if($assesbid[0]->asal_masuk == 'Non Rujukan')
                                    <input class="form-check-input" type="radio" name="asalmasuk" checked id="asalmasuk" value="Non Rujukan">
                                    <label class="form-check-label" for="inlineRadio1">Non Rujukan</label>
                                    @else
                                    <input class="form-check-input" type="radio" name="asalmasuk" id="asalmasuk" value="Non Rujukan">
                                    <label class="form-check-label" for="inlineRadio1">Non Rujukan</label>
                                    @endif
                                </div>

                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    @if($assesbid[0]->asal_masuk == 'Rujukan')
                                    <input class="form-check-input" type="radio" name="asalmasuk" checked id="asalmasuk" value="Rujukan">
                                    <label class="form-check-label" for="inlineRadio2">Rujukan </label>
                                    @else
                                    <input class="form-check-input" type="radio" name="asalmasuk" id="asalmasuk" value="Rujukan">
                                    <label class="form-check-label" for="inlineRadio2">Rujukan </label>
                                    @endif
                                </div>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">cara Masuk</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    @if($assesbid[0]->cara_masuk == 'Jalan Kaki')
                                    <input class="form-check-input" type="radio" checked name="caramasuk" id="caramasuk" value="Jalan Kaki">
                                    <label class="form-check-label" for="inlineRadio1">Jalan Kaki</label>
                                    @else
                                    <input class="form-check-input" type="radio" name="caramasuk" id="caramasuk" value="Jalan Kaki">
                                    <label class="form-check-label" for="inlineRadio1">Jalan Kaki</label>
                                    @endif
                                </div>

                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    @if($assesbid[0]->cara_masuk == 'Kursi Roda')

                                    <input class="form-check-input" type="radio" name="caramasuk" checked id="caramasuk" value="Kursi Roda">
                                    <label class="form-check-label" for="inlineRadio2">Kursi Roda </label>
                                    @else
                                    <input class="form-check-input" type="radio" name="caramasuk" id="caramasuk" value="Kursi Roda">
                                    <label class="form-check-label" for="inlineRadio2">Kursi Roda </label>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    @if($assesbid[0]->cara_masuk == 'Brankar')
                                    <input class="form-check-input" type="radio" name="caramasuk" id="caramasuk" checked value="Brankar">
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
                                <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse" data-target="#collapseOne92" aria-expanded="true" aria-controls="collapseOne92">
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
                                                    <textarea class="form-control" id="anamnesis" name="anamnesis" placeholder="">{{$assesbid[0]->subyek}}</textarea>

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
                                <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse" data-target="#collapseOne93" aria-expanded="true" aria-controls="collapseOne93">
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
                                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne9" aria-expanded="true" aria-controls="collapseOne9">
                                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Tanda-tanda Vital
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseOne9" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample9">
                                            <div class="card-body bg-light">

                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-bold font-italic">Keadaan Umum</td>
                                                            <td>
                                                                <div class="form-check">
                                                                    @if($assesbid[0]->keadaan_umum == 'Baik')
                                                                    <input class="form-check-input" type="radio" checked name="keadaanumum" id="keadaanumum" value="Baik">
                                                                    <label class="form-check-label">Baik</label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Baik">
                                                                    <label class="form-check-label">Baik</label>
                                                                    @endif

                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbid[0]->keadaan_umum == 'Sedang')
                                                                    <input class="form-check-input" type="radio" name="keadaanumum" checked id="keadaanumum" value="Sedang">
                                                                    <label class="form-check-label">Sedang</label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Sedang">
                                                                    <label class="form-check-label">Sedang</label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbid[0]->keadaan_umum == 'Buruk')
                                                                    <input class="form-check-input" type="radio" checked name="keadaanumum" id="keadaanumum" value="Buruk">
                                                                    <label class="form-check-label">Buruk</label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Buruk">
                                                                    <label class="form-check-label">Buruk</label>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                            <td class="text-bold font-italic">Kesadaran</td>
                                                            <td>
                                                                <div class="form-check">
                                                                    @if($assesbid[0]->kesadaran == '13-15')
                                                                    <input class="form-check-input" checked type="radio" name="kesadaran" id="kesadaran" value="13-15">
                                                                    <label class="form-check-label">13-15</label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="13-15">
                                                                    <label class="form-check-label">13-15</label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbid[0]->kesadaran == '9-12')
                                                                    <input class="form-check-input" checked type="radio" name="kesadaran" id="kesadaran" value="9-12">
                                                                    <label class="form-check-label">9-12</label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="9-12">
                                                                    <label class="form-check-label">9-12</label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbid[0]->kesadaran == '3-8')
                                                                    <input class="form-check-input" type="radio" checked name="kesadaran" id="kesadaran" value="3-8">
                                                                    <label class="form-check-label">3-8</label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="3-8">
                                                                    <label class="form-check-label">3-8</label>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold font-italic">Tekanan Darah</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Tekanan darah pasien ..." aria-label="Recipient's username" id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2" value="{{$assesbid[0]->tekanan_darah}}">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="basic-addon2">mmHg</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-bold font-italic">Frekuensi Nadi</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Frekuensi nadi pasien ..." id="frekuensinadi" name="frekuensinadi" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$assesbid[0]->frekuensi_nadi}}">
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
                                                                    <input type="text" class="form-control" placeholder="Frekuensi Nafas Pasien ..." name="frekuensinafas" id="frekuensinafas" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$assesbid[0]->frekuensi_nafas}}">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="basic-addon2">x/menit</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-bold font-italic">Suhu</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Suhu tubuh pasien ..." aria-label="Suhu tubuh pasien" name="suhutubuh" id="suhutubuh" aria-describedby="basic-addon2" value="{{$assesbid[0]->suhu}}">
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
                                                                    <input type="text" class="form-control" placeholder="Berat badan Pasien ..." name="beratbadan" id="beratbadan" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$assesbid[0]->berat_badan}}">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="basic-addon2">Kg</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-bold font-italic">Tinggi Badan</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Tinggi Badan pasien ..." aria-label="Tinggi tubuh pasien" name="tb" id="tb" aria-describedby="basic-addon2" value="">
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
                                                                    <input type="text" class="form-control" placeholder="Berat badan Pasien ..." name="gcs" id="gcs" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$assesbid[0]->GCS}}">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="basic-addon2"></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-bold font-italic">SPO2</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder=" SPO2 pasien ..." aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{$assesbid[0]->SPO2}}">
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
                                                                @if($assesbid[0]->imunisasi == 'BCG')
                                                                <input class="form-check-input" type="checkbox" name="imunisasi" checked id="imunisasi" value="BCG">
                                                                <label class="form-check-label">BCG</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi" id="imunisasi" value="BCG">
                                                                <label class="form-check-label">BCG</label>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasi1 == 'DPT')
                                                                <input class="form-check-input" type="checkbox" checked name="imunisasi1" id="imunisasi1" value="DPT">
                                                                <label class="form-check-label">DPT</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi1" id="imunisasi1" value="DPT">
                                                                <label class="form-check-label">DPT</label>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasi2 == 'POLIO')
                                                                <input class="form-check-input" type="checkbox" checked name="imunisasi2" id="imunisasi2" value="POLIO">
                                                                <label class="form-check-label">POLIO</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi2" id="imunisasi2" value="POLIO">
                                                                <label class="form-check-label">POLIO</label>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasi3 == 'CAMPAK')
                                                                <input class="form-check-input" type="checkbox" checked name="imunisasi3" id="imunisasi3" value="CAMPAK">
                                                                <label class="form-check-label">CAMPAK</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi3" id="imunisasi3" value="CAMPAK">
                                                                <label class="form-check-label">CAMPAK</label>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasi4 == 'Hepatitis B')
                                                                <input class="form-check-input" type="checkbox" name="imunisasi4" checked id="imunisasi4" value="Hepatitis B">
                                                                <label class="form-check-label">Hepatitis B</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi4" id="imunisasi4" value="Hepatitis B">
                                                                <label class="form-check-label">Hepatitis B</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasi5 == 'PCV')
                                                                <input class="form-check-input" type="checkbox" checked name="imunisasi5" id="imunisasi5" value="PCV">
                                                                <label class="form-check-label">PCV</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi5" id="imunisasi5" value="PCV">
                                                                <label class="form-check-label">PCV</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasi6 == 'Varicela')
                                                                <input class="form-check-input" type="checkbox" name="imunisasi6" checked id="imunisasi6" value="Varicela">
                                                                <label class="form-check-label">Varicela</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi6" id="imunisasi6" value="Varicela">
                                                                <label class="form-check-label">Varicela</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasi7 == 'Typoid')
                                                                <input class="form-check-input" type="checkbox" checked name="imunisasi7" id="imunisasi7" value="Typoid">
                                                                <label class="form-check-label">Typoid</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi7" id="imunisasi7" value="Typoid">
                                                                <label class="form-check-label">Typoid</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasi8 == 'Hepatitis A')
                                                                <input class="form-check-input" type="checkbox" name="imunisasi8" checked id="imunisasi8" value="Hepatitis A">
                                                                <label class="form-check-label">Hepatitis A</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi8" id="imunisasi8" value="Hepatitis A">
                                                                <label class="form-check-label">Hepatitis A</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasi9 == 'Meningitis')
                                                                <input class="form-check-input" type="checkbox" checked name="imunisasi9" id="imunisasi9" value="Meningitis">
                                                                <label class="form-check-label">Meningitis</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi9" id="imunisasi9" value="Meningitis">
                                                                <label class="form-check-label">Meningitis</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasi10 == 'Rotavirus')
                                                                <input class="form-check-input" type="checkbox" checked name="imunisasi10" id="imunisasi10" value="Rotavirus">
                                                                <label class="form-check-label">Rotavirus</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi10" id="imunisasi10" value="Rotavirus">
                                                                <label class="form-check-label">Rotavirus</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasi11 == 'HIB')
                                                                <input class="form-check-input" type="checkbox" checked name="imunisasi11" id="imunisasi11" value="HIB">
                                                                <label class="form-check-label">HIB</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi11" id="imunisasi11" value="HIB">
                                                                <label class="form-check-label">HIB</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasi12 == 'MMR')
                                                                <input class="form-check-input" type="checkbox" checked name="imunisasi12" id="imunisasi12" value="MMR">
                                                                <label class="form-check-label">MMR</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi12" id="imunisasi12" value="MMR">
                                                                <label class="form-check-label">MMR</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasi13 == 'Influenza')
                                                                <input class="form-check-input" type="checkbox" checked name="imunisasi13" id="imunisasi13" value="Influenza">
                                                                <label class="form-check-label">Influenza</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi13" id="imunisasi13" value="Influenza">
                                                                <label class="form-check-label">Influenza</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasi14 == 'HPV')
                                                                <input class="form-check-input" type="checkbox" checked name="imunisasi14" id="imunisasi14" value="HPV">
                                                                <label class="form-check-label">HPV</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi14" id="imunisasi14" value="HPV">
                                                                <label class="form-check-label">HPV</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasi15 == 'Pneumokokus')
                                                                <input class="form-check-input" type="checkbox" checked name="imunisasi15" id="imunisasi15" value="Pneumokokus">
                                                                <label class="form-check-label">Pneumokokus</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi15" id="imunisasi15" value="Pneumokokus">
                                                                <label class="form-check-label">Pneumokokus</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasi16 == 'Tetanus')
                                                                <input class="form-check-input" type="checkbox" checked name="imunisasi16" id="imunisasi16" value="Tetanus">
                                                                <label class="form-check-label">Tetanus</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi16" id="imunisasi16" value="Tetanus">
                                                                <label class="form-check-label">Tetanus</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasi17 == 'Zooster')
                                                                <input class="form-check-input" type="checkbox" checked name="imunisasi17" id="imunisasi17" value="Zooster">
                                                                <label class="form-check-label">Zooster</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi17" id="imunisasi17" value="Zooster">
                                                                <label class="form-check-label">Zooster</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasi18 == 'Yellow Fever')
                                                                <input class="form-check-input" type="checkbox" checked name="imunisasi18" id="imunisasi18" value="Yellow Fever">
                                                                <label class="form-check-label">Yellow Fever</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasi18" id="imunisasi18" value="Yellow Fever">
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
                                                                @if($assesbid[0]->kberencana == 'suntik')
                                                                <input class="form-check-input" type="checkbox" checked name="kberencana" id="kberencana" value="suntik">
                                                                <label class="form-check-label">suntik</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="kberencana" id="kberencana" value="suntik">
                                                                <label class="form-check-label">suntik</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->kberencana1 == 'Pil')
                                                                <input class="form-check-input" type="checkbox" checked name="kberencana1" id="kberencana1" value="Pil">
                                                                <label class="form-check-label">Pil</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="kberencana1" id="kberencana1" value="Pil">
                                                                <label class="form-check-label">Pil</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->kberencana2 == 'AKD')
                                                                <input class="form-check-input" type="checkbox" name="kberencana2" id="kberencana2" value="AKD">
                                                                <label class="form-check-label">AKD</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="kberencana2" id="kberencana2" value="AKD">
                                                                <label class="form-check-label">AKD</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">

                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->kberencana3 == 'MOW')
                                                                <input class="form-check-input" type="checkbox" checked name="kberencana3" id="kberencana3" value="MOW">
                                                                <label class="form-check-label">MOW</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="kberencana3" id="kberencana3" value="MOW">
                                                                <label class="form-check-label">MOW</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->kberencana4 == 'IMPLAN')
                                                                <input class="form-check-input" type="checkbox" checked name="kberencana4" id="kberencana4" value="IMPLAN">
                                                                <label class="form-check-label">IMPLAN</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="kberencana4" id="kberencana4" value="IMPLAN">
                                                                <label class="form-check-label">IMPLAN</label>
                                                                @endif

                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->kberencana5 == 'AKDR')
                                                                <input class="form-check-input" type="checkbox" checked name="kberencana5" id="kberencana5" value="AKDR">
                                                                <label class="form-check-label">AKDR</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="kberencana5" id="kberencana5" value="AKDR">
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
                                                                @if($assesbid[0]->komplikasikb == 'Pendarahan')
                                                                <input class="form-check-input" type="checkbox" checked name="komplikasikb" id="komplikasikb" value="Pendarahan">
                                                                <label class="form-check-label">Pendarahan</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="komplikasikb" id="komplikasikb" value="Pendarahan">
                                                                <label class="form-check-label">Pendarahan</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->komplikasikb1 == 'PID / radang panggul')
                                                                <input class="form-check-input" type="checkbox" name="komplikasikb1" checked id="komplikasikb1" value="PID / radang panggul">
                                                                <label class="form-check-label">PID / radang panggul</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="komplikasikb1" id="komplikasikb1" value="PID / radang panggul">
                                                                <label class="form-check-label">PID / radang panggul</label>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->komplikasikb2 == 'Tidak Ada Komplikasi')
                                                                <input class="form-check-input" type="checkbox" name="komplikasikb2" id="komplikasikb2" checked value="Tidak Ada Komplikasi">
                                                                <label class="form-check-label">Tidak Ada Komplikasi</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="komplikasikb2" id="komplikasikb2" value="Tidak Ada Komplikasi">
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
                                                                @if($assesbid[0]->rpenyakit == 'Diabetes Melitus')
                                                                <input class="form-check-input" type="checkbox" name="rpenyakit" checked id="rpenyakit" value="Diabetes Melitus">
                                                                <label class="form-check-label">Diabetes Melitus</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpenyakit" id="rpenyakit" value="Diabetes Melitus">
                                                                <label class="form-check-label">Diabetes Melitus</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->rpenyakit1 == 'Hepatitis')
                                                                <input class="form-check-input" type="checkbox" name="rpenyakit1" checked id="rpenyakit1" value="Hepatitis">
                                                                <label class="form-check-label">Hepatitis</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpenyakit1" id="rpenyakit1" value="Hepatitis">
                                                                <label class="form-check-label">Hepatitis</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->rpenyakit2 == 'Stroke')
                                                                <input class="form-check-input" type="checkbox" name="rpenyakit2" checked id="rpenyakit2" value="Stroke">
                                                                <label class="form-check-label">Stroke</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpenyakit2" id="rpenyakit2" value="Stroke">
                                                                <label class="form-check-label">Stroke</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->rpenyakit3 == 'Ginjal')
                                                                <input class="form-check-input" type="checkbox" name="rpenyakit3" checked id="rpenyakit3" value="Ginjal">
                                                                <label class="form-check-label">Ginjal</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpenyakit3" id="rpenyakit3" value="Ginjal">
                                                                <label class="form-check-label">Ginjal</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->rpenyakit4 == 'Hipertensi')
                                                                <input class="form-check-input" type="checkbox" name="rpenyakit4" checked id="rpenyakit4" value="Hipertensi">
                                                                <label class="form-check-label">Hipertensi</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpenyakit4" id="rpenyakit4" value="Hipertensi">
                                                                <label class="form-check-label">Hipertensi</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->rpenyakit5 == 'TBC')
                                                                <input class="form-check-input" type="checkbox" name="rpenyakit5" checked id="rpenyakit5" value="TBC">
                                                                <label class="form-check-label">TBC</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpenyakit5" id="rpenyakit5" value="TBC">
                                                                <label class="form-check-label">TBC</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->rpenyakit6 == 'Jantung')
                                                                <input class="form-check-input" type="checkbox" name="rpenyakit6" checked id="rpenyakit6" value="Jantung">
                                                                <label class="form-check-label">Jantung</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpenyakit6" id="rpenyakit6" value="Jantung">
                                                                <label class="form-check-label">Jantung</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->rpenyakit7 == 'Keganasan')
                                                                <input class="form-check-input" type="checkbox" name="rpenyakit7" checked id="rpenyakit7" value="Keganasan">
                                                                <label class="form-check-label">Keganasan</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpenyakit7" id="rpenyakit7" value="Keganasan">
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
                                                                @if($assesbid[0]->operasi == '')
                                                                <input class="form-check-input" type="checkbox" name="operasi" checked id="operasi" value="">
                                                                <label class="form-check-label">Pernah dirawat :</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="operasi" id="operasi" value="">
                                                                <label class="form-check-label">Pernah dirawat :</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->operasi1 == 'tidak')
                                                                <input class="form-check-input" type="checkbox" name="operasi1" checked id="operasi1" value="tidak">
                                                                <label class="form-check-label">tidak</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="operasi1" id="operasi1" value="tidak">
                                                                <label class="form-check-label">tidak</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->operasi2 == 'ya')
                                                                <input class="form-check-input" type="checkbox" name="operasi2" checked id="operasi2" value="ya">
                                                                <label class="form-check-label">ya</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="operasi2" id="operasi2" value="ya">
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
                                                                @if($assesbid[0]->ginekologi == 'Infertilitas')
                                                                <input class="form-check-input" type="checkbox" name="ginekologi" checked id="ginekologi" value="Infertilitas">
                                                                <label class="form-check-label">Infertilitas</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="ginekologi" id="ginekologi" value="Infertilitas">
                                                                <label class="form-check-label">Infertilitas</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->ginekologi1 == 'Infeksi Virus')
                                                                <input class="form-check-input" type="checkbox" name="ginekologi1" checked id="ginekologi1" value="Infeksi Virus">
                                                                <label class="form-check-label">Infeksi Virus</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="ginekologi1" id="ginekologi1" value="Infeksi Virus">
                                                                <label class="form-check-label">Infeksi Virus</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->ginekologi2 == 'PMS')
                                                                <input class="form-check-input" type="checkbox" name="ginekologi2" checked id="ginekologi2" value="PMS">
                                                                <label class="form-check-label">PMS</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="ginekologi2" id="ginekologi2" value="PMS">
                                                                <label class="form-check-label">PMS</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->ginekologi3 == 'Cervictis Kronis')
                                                                <input class="form-check-input" type="checkbox" name="ginekologi3" checked id="ginekologi3" value="Cervictis Kronis">
                                                                <label class="form-check-label">Cervictis Kronis</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="ginekologi3" id="ginekologi3" value="Cervictis Kronis">
                                                                <label class="form-check-label">Cervictis Kronis</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->ginekologi4 == 'Endometriosis')
                                                                <input class="form-check-input" type="checkbox" name="ginekologi4" checked id="ginekologi4" value="Endometriosis">
                                                                <label class="form-check-label">Endometriosis</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="ginekologi4" id="ginekologi4" value="Endometriosis">
                                                                <label class="form-check-label">Endometriosis</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->ginekologi5 == 'Mioma')
                                                                <input class="form-check-input" type="checkbox" name="ginekologi5" checked id="ginekologi5" value="Mioma">
                                                                <label class="form-check-label">Mioma</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="ginekologi5" id="ginekologi5" value="Mioma">
                                                                <label class="form-check-label">Mioma</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->ginekologi6 == 'Polip Cevix')
                                                                <input class="form-check-input" type="checkbox" name="ginekologi6" checked id="ginekologi6" value="Polip Cevix">
                                                                <label class="form-check-label">Polip Cevix</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="ginekologi6" id="ginekologi6" value="Polip Cevix">
                                                                <label class="form-check-label">Polip Cevix</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->ginekologi8 == 'Kanker Kandungan')
                                                                <input class="form-check-input" type="checkbox" name="ginekologi8" id="ginekologi8" value="Kanker Kandungan">
                                                                <label class="form-check-label">Kanker Kandungan</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="ginekologi8" id="ginekologi8" value="Kanker Kandungan">
                                                                <label class="form-check-label">Kanker Kandungan</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->ginekologi9 == 'Perkosaan')
                                                                <input class="form-check-input" type="checkbox" name="ginekologi9" checked id="ginekologi9" value="Perkosaan">
                                                                <label class="form-check-label">Perkosaan</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="ginekologi9" id="ginekologi9" value="Perkosaan">
                                                                <label class="form-check-label">Perkosaan</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->ginekologi10 == 'Operasi Kandungan')
                                                                <input class="form-check-input" type="checkbox" name="ginekologi10" checked id="ginekologi10" value="Operasi Kandungan">
                                                                <label class="form-check-label">Operasi Kandungan</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="ginekologi10" id="ginekologi10" value="Operasi Kandungan">
                                                                <label class="form-check-label">Operasi Kandungan</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->ginekologi11 == 'Tidak Ada')
                                                                <input class="form-check-input" type="checkbox" name="ginekologi11" checked id="ginekologi11" value="Tidak Ada">
                                                                <label class="form-check-label">Tidak Ada</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="ginekologi11" id="ginekologi11" value="Tidak Ada">
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
                                                                @if($assesbid[0]->rpk == 'Kanker')
                                                                <input class="form-check-input" type="checkbox" name="rpk" checked id="rpk" value="Kanker">
                                                                <label class="form-check-label">Kanker</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpk" id="rpk" value="Kanker">
                                                                <label class="form-check-label">Kanker</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->rpk1 == 'Penyakit Hati')
                                                                <input class="form-check-input" type="checkbox" name="rpk1" checked id="rpk1" value="Penyakit Hati">
                                                                <label class="form-check-label">Penyakit Hati</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpk1" id="rpk1" value="Penyakit Hati">
                                                                <label class="form-check-label">Penyakit Hati</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->rpk2 == 'Hipertensi')
                                                                <input class="form-check-input" type="checkbox" name="rpk2" checked id="rpk2" value="Hipertensi">
                                                                <label class="form-check-label">Hipertensi</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpk2" id="rpk2" value="Hipertensi">
                                                                <label class="form-check-label">Hipertensi</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->rpk3 == 'DM')
                                                                <input class="form-check-input" type="checkbox" name="rpk3" checked id="rpk3" value="DM">
                                                                <label class="form-check-label">DM</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpk3" id="rpk3" value="DM">
                                                                <label class="form-check-label">DM</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->rpk4 == 'Penyakit Ginjal')
                                                                <input class="form-check-input" type="checkbox" name="rpk4" checked id="rpk4" value="Penyakit Ginjal">
                                                                <label class="form-check-label">Penyakit Ginjal</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpk4" id="rpk4" value="Penyakit Ginjal">
                                                                <label class="form-check-label">Penyakit Ginjal</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->rpk5 == 'Penyakit Jiwa')
                                                                <input class="form-check-input" type="checkbox" name="rpk5" checked id="rpk5" value="Penyakit Jiwa">
                                                                <label class="form-check-label">Penyakit Jiwa</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpk5" id="rpk5" value="Penyakit Jiwa">
                                                                <label class="form-check-label">Penyakit Jiwa</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->rpk6 == 'Hamil Kembar')
                                                                <input class="form-check-input" type="checkbox" name="rpk6" checked id="rpk6" value="Hamil Kembar">
                                                                <label class="form-check-label">Hamil Kembar</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpk6" id="rpk6" value="Hamil Kembar">
                                                                <label class="form-check-label">Hamil Kembar</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->rpk7 == 'TBC')
                                                                <input class="form-check-input" type="checkbox" name="rpk7" checked id="rpk7" value="TBC">
                                                                <label class="form-check-label">TBC</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpk7" id="rpk7" value="TBC">
                                                                <label class="form-check-label">TBC</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->rpk8 == 'Epilepsi')
                                                                <input class="form-check-input" type="checkbox" name="rpk8" checked id="rpk8" value="Epilepsi">
                                                                <label class="form-check-label">Epilepsi</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpk8" id="rpk8" value="Epilepsi">
                                                                <label class="form-check-label">Epilepsi</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->rpk8 == 'Epilepsi')
                                                                <input class="form-check-input" type="checkbox" name="rpk8" checked id="rpk8" value="Alergi">
                                                                <label class="form-check-label">Alergi</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpk8" id="rpk8" value="Alergi">
                                                                <label class="form-check-label">Alergi</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->rpk9 == 'Tidak Ada')
                                                                <input class="form-check-input" type="checkbox" name="rpk9" checked id="rpk9" value="Tidak Ada">
                                                                <label class="form-check-label">Tidak Ada</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="rpk9" id="rpk9" value="Tidak Ada">
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
                                                            <h5 class="text-bold">Tabel Riwayat Obat Pasien</h5>
                                                            <table class="table ">
                                                                <thead class="bg-warning">
                                                                    <th>Nama Obat</th>
                                                                    <th>Dosis</th>
                                                                    <th>Aturan Pakai</th>
                                                                    <th>Jumlah Obat</th>
                                                                    <th>Mutu Obat</th>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Cetirizin</td>
                                                                        <td>3 x 15 ml</td>
                                                                        <td>Sebelum Makan</td>
                                                                        <td>Jumlah Obat</td>
                                                                        <td>Baik</td>
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
                                                                @if($assesbid[0]->terapi == 'Jamu')
                                                                <input class="form-check-input" type="checkbox" name="terapi" checked id="terapi" value="Jamu">
                                                                <label class="form-check-label">Jamu</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="terapi" id="terapi" value="Jamu">
                                                                <label class="form-check-label">Jamu</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->terapi1 == 'Accupunture')
                                                                <input class="form-check-input" type="checkbox" name="terapi1" checked id="terapi1" value="Accupunture">
                                                                <label class="form-check-label">Accupunture</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="terapi1" id="terapi1" value="Accupunture">
                                                                <label class="form-check-label">Accupunture</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->terapi2 == 'Pijat')
                                                                <input class="form-check-input" type="checkbox" name="terapi2" checked id="terapi2" value="Pijat">
                                                                <label class="form-check-label">Pijat</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="terapi2" id="terapi2" value="Pijat">
                                                                <label class="form-check-label">Pijat</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->terapi3 == 'Tidak Ada')
                                                                <input class="form-check-input" type="checkbox" name="terapi3" checked id="terapi3" value="Tidak Ada">
                                                                <label class="form-check-label">Tidak Ada</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="terapi3" id="terapi3" value="Tidak Ada">
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
                                                                @if($assesbid[0]->aler == 'tidak')
                                                                <input class="form-check-input" type="checkbox" name="aler" checked id="aler" value="tidak">
                                                                <label class="form-check-label">tidak</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="aler" id="aler" value="tidak">
                                                                <label class="form-check-label">tidak</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->aler1 == 'ada')
                                                                <input class="form-check-input" type="checkbox" name="aler1" checked id="aler1" value="ada">
                                                                <label class="form-check-label">ada</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="aler1" id="aler1" value="ada">
                                                                <label class="form-check-label">ada</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="text" name="aler2" id="aler2" placeholder="Sebutkan" value="">
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
                                                                @if($assesbid[0]->kebiasaan == 'tidak')
                                                                <input class="form-check-input" type="checkbox" name="kebiasaan" checked id="kebiasaan" value="tidak">
                                                                <label class="form-check-label">tidak</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="kebiasaan" id="kebiasaan" value="tidak">
                                                                <label class="form-check-label">tidak</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->kebiasaan1 == 'ya')
                                                                <input class="form-check-input" type="checkbox" name="kebiasaan1" checked id="kebiasaan1" value="ya">
                                                                <label class="form-check-label">ya</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="kebiasaan1" id="kebiasaan1" value="ya">
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
                                                                @if($assesbid[0]->otidur == 'tidak')
                                                                <input class="form-check-input" type="checkbox" name="otidur" checked id="otidur" value="tidak">
                                                                <label class="form-check-label">tidak</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="otidur" id="otidur" value="tidak">
                                                                <label class="form-check-label">tidak</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->otidur1 == 'ya')
                                                                <input class="form-check-input" type="checkbox" name="otidur1" checked id="otidur1" value="ya">
                                                                <label class="form-check-label">ya</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="otidur1" id="otidur1" value="ya">
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
                                                                @if($assesbid[0]->alkohol == 'tidak')
                                                                <input class="form-check-input" type="checkbox" name="alkohol" checked id="alkohol" value="tidak">
                                                                <label class="form-check-label">tidak</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="alkohol" id="alkohol" value="tidak">
                                                                <label class="form-check-label">tidak</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->alkohol1 == 'ya')
                                                                <input class="form-check-input" type="checkbox" name="alkohol1" checked id="alkohol1" value="ya">
                                                                <label class="form-check-label">ya</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="alkohol1" id="alkohol1" value="ya">
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
                                                                @if($assesbid[0]->olahraga == 'tidak')
                                                                <input class="form-check-input" type="checkbox" name="Olahraga" id="Olahraga" checked value="tidak">
                                                                <label class="form-check-label">tidak</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="Olahraga" id="Olahraga" value="tidak">
                                                                <label class="form-check-label">tidak</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->olahraga1 == 'ya')
                                                                <input class="form-check-input" type="checkbox" name="Olahraga1" checked id="Olahraga1" value="ya">
                                                                <label class="form-check-label">ya</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="Olahraga1" id="Olahraga1" value="ya">
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
                                                                <input class="form-check-input" size="5" type="Text" name="umurmenarche" id="umurmenarche" value="{{$assesbid[0]->umurmenarche}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                <label class="form-check-label">Lamanya Haid </label>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" size="5" type="Text" name="lamanyahaid" id="lamanyahaid" value="{{$assesbid[0]->lamanyahaid}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                <label class="form-check-label">Banyaknya : </label>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" size="5" type="Text" name="pembalut" id="pembalut" value="{{$assesbid[0]->pembalut}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                <label class="form-check-label">Haid Terakhir : </label>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 ">
                                                            <div class="form-check">
                                                                <input class="form-check-input" size="5" type="date" name="haidterakhir" id="haidterakhir" value="{{$assesbid[0]->haidterakhir}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                <label class="form-check-label">TP : </label>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" size="5" type="Text" name="TP" id="TP" value="{{$assesbid[0]->TP}}">
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
                                                                @if($assesbid[0]->Dismonore == 'Spoting')
                                                                <input class="form-check-input" type="checkbox" name="Dismonore" checked id="Dismonore" value="Spoting">
                                                                <label class="form-check-label">Spoting </label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="Dismonore" id="Dismonore" value="Spoting">
                                                                <label class="form-check-label">Spoting </label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->Dismonore1 == 'Menorrhagia')
                                                                <input class="form-check-input" type="checkbox" name="Dismonore1" checked id="Dismonore1" value="Menorrhagia">
                                                                <label class="form-check-label">Menorrhagia </label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="Dismonore1" id="Dismonore1" value="Menorrhagia">
                                                                <label class="form-check-label">Menorrhagia </label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->Dismonore2 == 'Methoragia')
                                                                <input class="form-check-input" type="checkbox" name="Dismonore2" checked id="Dismonore2" value="Methoragia">
                                                                <label class="form-check-label">Methoragia </label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="Dismonore2" id="Dismonore2" value="Methoragia">
                                                                <label class="form-check-label">Methoragia </label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->Dismonore3 == 'Pre Menstrual Syndrome')
                                                                <input class="form-check-input" type="checkbox" name="Dismonore3" checked id="Dismonore3" value="Pre Menstrual Syndrome">
                                                                <label class="form-check-label">Pre Menstrual Syndrome </label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="Dismonore3" id="Dismonore3" value="Pre Menstrual Syndrome">
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
                                                                <input class="form-check-input" size="5" type="text" name="menikah" id="menikah" placeholder="kali" value="{{$assesbid[0]->menikah}}">
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
                                                                <input class="form-check-input" size="5" type="text" name="menikah1" id="menikah1" placeholder="Tahun" value="{{$assesbid[0]->menikah1}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->menikah2 == 'Masih Menikah')
                                                                <input class="form-check-input" type="checkbox" name="menikah2" id="menikah2" value="Masih Menikah">
                                                                <label class="form-check-label">Masih Menikah </label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="menikah2" id="menikah2" value="Masih Menikah">
                                                                <label class="form-check-label">Masih Menikah </label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->menikah3 == 'Cerai')
                                                                <input class="form-check-input" type="checkbox" name="menikah3" checked id="menikah3" value="Cerai">
                                                                <label class="form-check-label">Cerai </label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="menikah3" id="menikah3" value="Cerai">
                                                                <label class="form-check-label">Cerai </label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->menikah4 == 'Meninggal')
                                                                <input class="form-check-input" type="checkbox" name="menikah4" checked id="menikah4" value="Meninggal">
                                                                <label class="form-check-label">Meninggal </label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="menikah4" id="menikah4" value="Meninggal">
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

                                                                <input class="form-group" type="text" name="G" id="G" placeholder="G:" value="{{$assesbid[0]->G}}">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-group-label">P : </label>
                                                                <input class="form-group" type="text" name="P" id="P" placeholder="P:" value="{{$assesbid[0]->P}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-group-label">A : </label>

                                                                <input class="form-group" type="text" name="A" id="A" placeholder="A:" value="{{$assesbid[0]->A}}">
                                                            </div>
                                                        </div>


                                                    </div>
                                                </td>

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
                                                                @if($assesbid[0]->hamud == 'Mual')
                                                                <input class="form-check-input" type="checkbox" name="hamud" id="hamud" checked value="Mual">
                                                                <label class="form-check-label">Mual </label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="hamud" id="hamud" value="Mual">
                                                                <label class="form-check-label">Mual </label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->hamud1 == 'Muntah')
                                                                <input class="form-check-input" type="checkbox" name="hamud1" checked id="hamud1" value="Muntah">
                                                                <label class="form-check-label">Muntah </label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="hamud1" id="hamud1" value="Muntah">
                                                                <label class="form-check-label">Muntah </label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->hamud2 == 'Pendarahan')
                                                                <input class="form-check-input" type="checkbox" name="hamud2" checked id="hamud2" value="Pendarahan">
                                                                <label class="form-check-label">Pendarahan </label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="hamud2" id="hamud2" value="Pendarahan">
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
                                                                @if($assesbid[0]->hatu == 'Pusing')
                                                                <input class="form-check-input" type="checkbox" name="hatu" checked id="hatu" value="Pusing">
                                                                <label class="form-check-label">Pusing </label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="hatu" id="hatu" value="Pusing">
                                                                <label class="form-check-label">Pusing </label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->hatu1 == 'Sakit Kepala')
                                                                <input class="form-check-input" type="checkbox" name="hatu1" checked id="hatu1" value="Sakit Kepala">
                                                                <label class="form-check-label">Sakit Kepala </label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="hatu1" id="hatu1" value="Sakit Kepala">
                                                                <label class="form-check-label">Sakit Kepala </label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->hatu2 == 'Pendarahan')
                                                                <input class="form-check-input" type="checkbox" checked name="hatu2" id="hatu2" value="Pendarahan">
                                                                <label class="form-check-label">Pendarahan </label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="hatu2" id="hatu2" value="Pendarahan">
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
                                                                @if($assesbid[0]->anc == 'Teratur')
                                                                <input class="form-check-input" type="checkbox" name="anc" checked id="anc" value="Teratur">
                                                                <label class="form-check-label">Teratur </label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="anc" id="anc" value="Teratur">
                                                                <label class="form-check-label">Teratur </label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->anc1 == 'Teratur')
                                                                <input class="form-check-input" size="5" type="checkbox" name="anc1" checked id="anc1" value="Tidak Teratur">
                                                                <label class="form-check-label">Tidak Teratur </label>
                                                                @else
                                                                <input class="form-check-input" size="5" type="checkbox" name="anc1" id="anc1" value="Tidak Teratur">
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
                                                                @if($assesbid[0]->imunisasii == '1')
                                                                <input class="form-check-input" type="checkbox" name="imunisasii" checked id="imunisasii" value="1">
                                                                <label class="form-check-label">1 </label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="imunisasii" id="imunisasii" value="1">
                                                                <label class="form-check-label">1 </label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasii1 == '2')
                                                                <input class="form-check-input" size="5" type="checkbox" name="imunisasii1" checked id="imunisasii1" value="2">
                                                                <label class="form-check-label">2 </label>
                                                                @else
                                                                <input class="form-check-input" size="5" type="checkbox" name="imunisasii1" id="imunisasii1" value="2">
                                                                <label class="form-check-label">2 </label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbid[0]->imunisasii2 == '3')
                                                                <input class="form-check-input" size="5" type="checkbox" name="imunisasii2" cheked id="imunisasii2" value="3">
                                                                <label class="form-check-label">3 </label>
                                                                @else
                                                                <input class="form-check-input" size="5" type="checkbox" name="imunisasii2" id="imunisasii2" value="3">
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
                                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne91" aria-expanded="true" aria-controls="collapseOne91">
                                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> PEMERIKSAAN FISIK
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseOne91" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample91">
                                            <div class="card-body bg-light">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-bold font-italic">Mata</td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->mata == 'Pandangan Kabur')
                                                                            <input class="form-check-input" type="checkbox" name="mata" checked id="mata" value="Pandangan Kabur">
                                                                            <label class="form-check-label">Pandangan Kabur </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="mata" id="mata" value="Pandangan Kabur">
                                                                            <label class="form-check-label">Pandangan Kabur </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->mata1 == 'Penglihatan G anda')
                                                                            <input class="form-check-input" type="checkbox" name="mata1" checked id="mata1" value="Penglihatan G anda">
                                                                            <label class="form-check-label">Penglihatan G anda </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="mata1" id="mata1" value="Penglihatan G anda">
                                                                            <label class="form-check-label">Penglihatan G anda </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->mata2 == 'Sklera Icterik')
                                                                            <input class="form-check-input" type="checkbox" name="mata2" cheked id="mata2" value="Sklera Icterik">
                                                                            <label class="form-check-label">Sklera Icterik </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="mata2" id="mata2" value="Sklera Icterik">
                                                                            <label class="form-check-label">Sklera Icterik </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->mata3 == 'Konjungtiva Pusat')
                                                                            <input class="form-check-input" type="checkbox" name="mata3" checked id="mata3" value="Konjungtiva Pusat">
                                                                            <label class="form-check-label">Konjungtiva Pusat </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="mata3" id="mata3" value="Konjungtiva Pusat">
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
                                                                            @if($assesbid[0]->dadak == 'Mamae Simetris')
                                                                            <input class="form-check-input" type="checkbox" name="dadak" checked id="dadak" value="Mamae Simetris">
                                                                            <label class="form-check-label">Mamae Simetris </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="dadak" id="dadak" value="Mamae Simetris">
                                                                            <label class="form-check-label">Mamae Simetris </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->dadak1 == 'Mamae Asimetris')
                                                                            <input class="form-check-input" type="checkbox" name="dadak1" checked id="dadak1" value="Mamae Asimetris">
                                                                            <label class="form-check-label">Mamae Asimetris </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="dadak1" id="dadak1" value="Mamae Asimetris">
                                                                            <label class="form-check-label">Mamae Asimetris </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->dadak2 == 'AreolaHiperpigmentasi')
                                                                            <input class="form-check-input" type="checkbox" name="dadak2" checked id="dadak2" value="AreolaHiperpigmentasi">
                                                                            <label class="form-check-label">AreolaHiperpigmentasi </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="dadak2" id="dadak2" value="AreolaHiperpigmentasi">
                                                                            <label class="form-check-label">AreolaHiperpigmentasi </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->dadak3 == 'Tumor')
                                                                            <input class="form-check-input" type="checkbox" name="dadak3" checked id="dadak3" value="Tumor">
                                                                            <label class="form-check-label">Tumor </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="dadak3" id="dadak3" value="Tumor">
                                                                            <label class="form-check-label">Tumor </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->dadak4 == 'Puting Susu Menonjol')
                                                                            <input class="form-check-input" type="checkbox" name="dadak4" checked id="dadak4" value="Puting Susu Menonjol">
                                                                            <label class="form-check-label">Puting Susu Menonjol </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="dadak4" id="dadak4" value="Puting Susu Menonjol">
                                                                            <label class="form-check-label">Puting Susu Menonjol </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->dadak5 == 'Kolostrum (+)')
                                                                            <input class="form-check-input" type="checkbox" name="dadak5" id="dadak5" checked value="Kolostrum (+)">
                                                                            <label class="form-check-label">Kolostrum (+) </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="dadak5" id="dadak5" value="Kolostrum (+)">
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
                                                                            @if($assesbid[0]->Ektremitas == 'Tungkai Simetris')
                                                                            <input class="form-check-input" type="checkbox" name="Ekstremitas" checked id="Ekstremitas" value="Tungkai Simetris">
                                                                            <label class="form-check-label">Tungkai Simetris </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="Ekstremitas" id="Ekstremitas" value="Tungkai Simetris">
                                                                            <label class="form-check-label">Tungkai Simetris </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->Ektremitas1 == 'Tungkai Asimetris')
                                                                            <input class="form-check-input" type="checkbox" name="Ekstremitas1" cheked id="Ekstremitas1" value="Tungkai Asimetris">
                                                                            <label class="form-check-label">Tungkai Asimetris </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="Ekstremitas1" id="Ekstremitas1" value="Tungkai Asimetris">
                                                                            <label class="form-check-label">Tungkai Asimetris </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->Ektremitas2 == 'Oedema')
                                                                            <input class="form-check-input" type="checkbox" name="Ekstremitas2" checked id="Ekstremitas2" value="Oedema">
                                                                            <label class="form-check-label">Oedema </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="Ekstremitas2" id="Ekstremitas2" value="Oedema">
                                                                            <label class="form-check-label">Oedema </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->Ektremitas3 == 'Refleks : +/-')
                                                                            <input class="form-check-input" type="checkbox" name="Ekstremitas3" checked id="Ekstremitas3" value="Refleks : +/-">
                                                                            <label class="form-check-label">Refleks : +/- </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="Ekstremitas3" id="Ekstremitas3" value="Refleks : +/-">
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
                                                                            @if($assesbid[0]->sistemnafas == 'Dispnue')
                                                                            <input class="form-check-input" type="checkbox" name="sistemnafas" checked id="sistemnafas" value="Dispnue">
                                                                            <label class="form-check-label">Dispnue </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="sistemnafas" id="sistemnafas" value="Dispnue">
                                                                            <label class="form-check-label">Dispnue </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->sistemnafas1 == 'Orthopneu')
                                                                            <input class="form-check-input" type="checkbox" name="sistemnafas1" checked id="sistemnafas1" value="Orthopneu">
                                                                            <label class="form-check-label">Orthopneu </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="sistemnafas1" id="sistemnafas1" value="Orthopneu">
                                                                            <label class="form-check-label">Orthopneu </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->sistemnafas2 == 'Tacypneu')
                                                                            <input class="form-check-input" type="checkbox" name="sistemnafas2" checked id="sistemnafas2" value="Tacypneu">
                                                                            <label class="form-check-label">Tacypneu </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="sistemnafas2" id="sistemnafas2" value="Tacypneu">
                                                                            <label class="form-check-label">Tacypneu </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->sistemnafas3 == 'Wheezing')
                                                                            <input class="form-check-input" type="checkbox" name="sistemnafas3" checked id="sistemnafas3" value="Wheezing">
                                                                            <label class="form-check-label">Wheezing </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="sistemnafas3" id="sistemnafas3" value="Wheezing">
                                                                            <label class="form-check-label">Wheezing </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->sistemnafas4 == 'Batuk')
                                                                            <input class="form-check-input" type="checkbox" name="sistemnafas4" checked id="sistemnafas4" value="Batuk">
                                                                            <label class="form-check-label">Batuk </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="sistemnafas4" id="sistemnafas4" value="Batuk">
                                                                            <label class="form-check-label">Batuk </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->sistemnafas5 == 'Sputum')
                                                                            <input class="form-check-input" type="checkbox" name="sistemnafas5" checked id="sistemnafas5" value="Sputum">
                                                                            <label class="form-check-label">Sputum </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="sistemnafas5" id="sistemnafas5" value="Sputum">
                                                                            <label class="form-check-label">Sputum </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->sistemnafas6 == 'Batu Darah')
                                                                            <input class="form-check-input" type="checkbox" name="sistemnafas6" checked id="sistemnafas6" value="Batu Darah">
                                                                            <label class="form-check-label">Batu Darah </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="sistemnafas6" id="sistemnafas6" value="Batu Darah">
                                                                            <label class="form-check-label">Batu Darah </label>
                                                                            @endif


                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->sistemnafas7 == 'Nyeri Dada')
                                                                            <input class="form-check-input" type="checkbox" name="sistemnafas7" checked id="sistemnafas7" value="Nyeri Dada">
                                                                            <label class="form-check-label">Nyeri Dada </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="sistemnafas7" id="sistemnafas7" value="Nyeri Dada">
                                                                            <label class="form-check-label">Nyeri Dada </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->sistemnafas8 == 'Keringat Malam')
                                                                            <input class="form-check-input" type="checkbox" name="sistemnafas8 " checked id="sistemnafas8 " value="Keringat Malam">
                                                                            <label class="form-check-label">Keringat Malam </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="sistemnafas8 " id="sistemnafas8 " value="Keringat Malam">
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
                                                                            @if($assesbid[0]->sosup == 'Suami')
                                                                            <input class="form-check-input" type="checkbox" name="sosup" checked id="sosup" value="Suami">
                                                                            <label class="form-check-label">Suami </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="sosup" id="sosup" value="Suami">
                                                                            <label class="form-check-label">Suami </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->sosup1 == 'Orang Tua')
                                                                            <input class="form-check-input" type="checkbox" name="sosup1" checked id="sosup1" value="Orang Tua">
                                                                            <label class="form-check-label">Orang Tua </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="sosup1" id="sosup1" value="Orang Tua">
                                                                            <label class="form-check-label">Orang Tua </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->sosup2 == 'Mertua')
                                                                            <input class="form-check-input" type="checkbox" name="sosup2" checked id="sosup2" value="Mertua">
                                                                            <label class="form-check-label">Mertua </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="sosup2" id="sosup2" value="Mertua">
                                                                            <label class="form-check-label">Mertua </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->sosup3 == 'Anak')
                                                                            <input class="form-check-input" type="checkbox" name="sosup3" checked id="sosup3" value="Anak">
                                                                            <label class="form-check-label">Anak </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="sosup3" id="sosup3" value="Anak">
                                                                            <label class="form-check-label">Anak </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-check">
                                                                            @if($assesbid[0]->sosup4 == 'Keluarga Lain')
                                                                            <input class="form-check-input" type="checkbox" name="sosup4" checked id="sosup4" value="Keluarga Lain">
                                                                            <label class="form-check-label">Keluarga Lain </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="sosup4" id="sosup4" value="Keluarga Lain">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample94">
                    <div class="card">
                        <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse" data-target="#collapseOne94" aria-expanded="true" aria-controls="collapseOne94">
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
                                                    <textarea class="form-control" id="diagnosakebidanan" name="diagnosakebidanan" placeholder="">{{$assesbid[0]->diagnosakebidanan}}</textarea>
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
                                <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse" data-target="#collapseOne95" aria-expanded="true" aria-controls="collapseOne95">
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
                                                    <textarea class="form-control" id="rencanaasuhan" name="rencanaasuhan" placeholder="">{{$assesbid[0]->diagnosakebidanan}}</textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">KOLABORASI </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbid[0]->kolaborasi1 == 'Infus/ IVFD')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Infus/ IVFD" checked>
                                                            <label class="form-check-label">Infus/ IVFD </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Infus/ IVFD">
                                                            <label class="form-check-label">Infus/ IVFD </label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbid[0]->kolaborasi2 == 'Oksigenasi')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Oksigenasi" checked>
                                                            <label class="form-check-label">Oksigenasi </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Oksigenasi">
                                                            <label class="form-check-label">Oksigenasi </label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbid[0]->kolaborasi3 == 'NGT')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="NGT" checked>
                                                            <label class="form-check-label">NGT </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="NGT">
                                                            <label class="form-check-label">NGT </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbid[0]->kolaborasi4 == 'Defibrilasi')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Defibrilasi" checked>
                                                            <label class="form-check-label">Defibrilasi </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Defibrilasi">
                                                            <label class="form-check-label">Defibrilasi </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbid[0]->kolaborasi5 == 'Suction')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Suction" checked>
                                                            <label class="form-check-label">Suction </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Suction">
                                                            <label class="form-check-label">Suction </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbid[0]->kolaborasi6 == 'LAB')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="LAB" checked>
                                                            <label class="form-check-label">LAB </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="LAB">
                                                            <label class="form-check-label">LAB </label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbid[0]->kolaborasi7 == 'Nebulizer')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Nebulizer" checked>
                                                            <label class="form-check-label">Nebulizer </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Nebulizer">
                                                            <label class="form-check-label">Nebulizer </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbid[0]->kolaborasi8 == 'Mengumbah lambung')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Mengumbah lambung" checked>
                                                            <label class="form-check-label">Mengumbah lambung </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Mengumbah lambung">
                                                            <label class="form-check-label">Mengumbah lambung </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbid[0]->kolaborasi9 == 'Mayo')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Mayo" checked>
                                                            <label class="form-check-label">Mayo </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Mayo">
                                                            <label class="form-check-label">Mayo </label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbid[0]->kolaborasi10 == 'Explorasi / Irigasi')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Explorasi / Irigasi" checked>
                                                            <label class="form-check-label">Explorasi / Irigasi </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Explorasi / Irigasi">
                                                            <label class="form-check-label">Explorasi / Irigasi </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbid[0]->kolaborasi11 == 'EKG')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="EKG" checked>
                                                            <label class="form-check-label">EKG </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="EKG">
                                                            <label class="form-check-label">EKG </label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbid[0]->kolaborasi12 == 'Saturasi Oksigen')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Saturasi Oksigen" checked>
                                                            <label class="form-check-label">Saturasi Oksigen </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Saturasi Oksigen">
                                                            <label class="form-check-label">Saturasi Oksigen </label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbid[0]->kolaborasi13 == 'Kateter')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Kateter" checked>
                                                            <label class="form-check-label">Kateter </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Kateter">
                                                            <label class="form-check-label">Kateter </label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbid[0]->kolaborasi14 == 'ETT')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="ETT" checked>
                                                            <label class="form-check-label">ETT </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="ETT">
                                                            <label class="form-check-label">ETT </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbid[0]->kolaborasi15 == 'Obat')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Obat" checked>
                                                            <label class="form-check-label">Obat </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi" id="kolaborasi" value="Obat">
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


                @else
                <!-- form bayi\ -->

                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-bold font-italic">Tanggal Kunjungan</td>
                            <td>
                                <h5 class="text-bold">{{$assesbidbay[0]->tgl_kunjungan}}</h5>

                            </td>
                            <td class="text-bold font-italic">Tanggal Pengkajian</td>
                            <td>
                                <h5 class="text-bold">{{$assesbidbay[0]->tgl_input}}</h5>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Sumber Data</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    @if($assesbidbay[0]->sumber_data == 'Pasien Sendiri')
                                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" checked value="Pasien Sendiri">
                                    <label class="form-check-label" for="inlineRadio1">Pasien Sendiri /Autoanamase</label>
                                    @else
                                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Pasien Sendiri">
                                    <label class="form-check-label" for="inlineRadio1">Pasien Sendiri /Autoanamase</label>
                                    @endif
                                </div>

                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    @if($assesbidbay[0]->sumber_data == 'Keluarga')
                                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" checked value="Keluarga">
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
                                    @if($assesbidbay[0]->asal_masuk == 'Non Rujukan')
                                    <input class="form-check-input" type="radio" name="asalmasuk" checked id="asalmasuk" value="Non Rujukan">
                                    <label class="form-check-label" for="inlineRadio1">Non Rujukan</label>
                                    @else
                                    <input class="form-check-input" type="radio" name="asalmasuk" id="asalmasuk" value="Non Rujukan">
                                    <label class="form-check-label" for="inlineRadio1">Non Rujukan</label>
                                    @endif
                                </div>

                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    @if($assesbidbay[0]->asal_masuk == 'Rujukan')
                                    <input class="form-check-input" type="radio" name="asalmasuk" checked id="asalmasuk" value="Rujukan">
                                    <label class="form-check-label" for="inlineRadio2">Rujukan </label>
                                    @else
                                    <input class="form-check-input" type="radio" name="asalmasuk" id="asalmasuk" value="Rujukan">
                                    <label class="form-check-label" for="inlineRadio2">Rujukan </label>
                                    @endif
                                </div>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">cara Masuk</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    @if($assesbidbay[0]->cara_masuk == 'Jalan Kaki')
                                    <input class="form-check-input" type="radio" checked name="caramasuk" id="caramasuk" value="Jalan Kaki">
                                    <label class="form-check-label" for="inlineRadio1">Jalan Kaki</label>
                                    @else
                                    <input class="form-check-input" type="radio" name="caramasuk" id="caramasuk" value="Jalan Kaki">
                                    <label class="form-check-label" for="inlineRadio1">Jalan Kaki</label>
                                    @endif
                                </div>

                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    @if($assesbidbay[0]->cara_masuk == 'Kursi Roda')

                                    <input class="form-check-input" type="radio" name="caramasuk" checked id="caramasuk" value="Kursi Roda">
                                    <label class="form-check-label" for="inlineRadio2">Kursi Roda </label>
                                    @else
                                    <input class="form-check-input" type="radio" name="caramasuk" id="caramasuk" value="Kursi Roda">
                                    <label class="form-check-label" for="inlineRadio2">Kursi Roda </label>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    @if($assesbidbay[0]->cara_masuk == 'Brankar')
                                    <input class="form-check-input" type="radio" name="caramasuk" id="caramasuk" checked value="Brankar">
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
                                <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse" data-target="#collapseOne92" aria-expanded="true" aria-controls="collapseOne92">
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
                                                    <textarea class="form-control" id="anamnesis" name="anamnesis" placeholder="">{{$assesbidbay[0]->subyek}}</textarea>

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
                                <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse" data-target="#collapseOne93" aria-expanded="true" aria-controls="collapseOne93">
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
                                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne9" aria-expanded="true" aria-controls="collapseOne9">
                                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Tanda-tanda Vital
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseOne9" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample9">
                                            <div class="card-body bg-light">


                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-bold font-italic">Keadaan Umum</td>
                                                            <td>
                                                                <div class="form-check">
                                                                    @if($assesbidbay[0]->keadaan_umum == 'Baik')
                                                                    <input class="form-check-input" type="radio" checked name="keadaanumum" id="keadaanumum" value="Baik">
                                                                    <label class="form-check-label">Baik</label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Baik">
                                                                    <label class="form-check-label">Baik</label>
                                                                    @endif

                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbidbay[0]->keadaan_umum == 'Sedang')
                                                                    <input class="form-check-input" type="radio" name="keadaanumum" checked id="keadaanumum" value="Sedang">
                                                                    <label class="form-check-label">Sedang</label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Sedang">
                                                                    <label class="form-check-label">Sedang</label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbidbay[0]->keadaan_umum == 'Buruk')
                                                                    <input class="form-check-input" type="radio" checked name="keadaanumum" id="keadaanumum" value="Buruk">
                                                                    <label class="form-check-label">Buruk</label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Buruk">
                                                                    <label class="form-check-label">Buruk</label>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                            <td class="text-bold font-italic">Kesadaran</td>
                                                            <td>
                                                                <div class="form-check">
                                                                    @if($assesbidbay[0]->kesadaran == '13-15')
                                                                    <input class="form-check-input" checked type="radio" name="kesadaran" id="kesadaran" value="13-15">
                                                                    <label class="form-check-label">13-15</label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="13-15">
                                                                    <label class="form-check-label">13-15</label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbidbay[0]->kesadaran == '9-12')
                                                                    <input class="form-check-input" checked type="radio" name="kesadaran" id="kesadaran" value="9-12">
                                                                    <label class="form-check-label">9-12</label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="9-12">
                                                                    <label class="form-check-label">9-12</label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbidbay[0]->kesadaran == '3-8')
                                                                    <input class="form-check-input" type="radio" checked name="kesadaran" id="kesadaran" value="3-8">
                                                                    <label class="form-check-label">3-8</label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="3-8">
                                                                    <label class="form-check-label">3-8</label>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold font-italic">Tekanan Darah</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Tekanan darah pasien ..." aria-label="Recipient's username" id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2" value="{{$assesbidbay[0]->tekanan_darah}}">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="basic-addon2">mmHg</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-bold font-italic">Frekuensi Nadi</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Frekuensi nadi pasien ..." id="frekuensinadi" name="frekuensinadi" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$assesbidbay[0]->frekuensi_nadi}}">
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
                                                                    <input type="text" class="form-control" placeholder="Frekuensi Nafas Pasien ..." name="frekuensinafas" id="frekuensinafas" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$assesbidbay[0]->frekuensi_nafas}}">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="basic-addon2">x/menit</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-bold font-italic">Suhu</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Suhu tubuh pasien ..." aria-label="Suhu tubuh pasien" name="suhutubuh" id="suhutubuh" aria-describedby="basic-addon2" value="{{$assesbidbay[0]->suhu}}">
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
                                                                    <input type="text" class="form-control" placeholder="Berat badan Pasien ..." name="beratbadan" id="beratbadan" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$assesbidbay[0]->berat_badan}}">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="basic-addon2">Kg</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-bold font-italic">Tinggi Badan</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Tinggi Badan pasien ..." aria-label="Tinggi tubuh pasien" name="tb" id="tb" aria-describedby="basic-addon2" value="{{$assesbidbay[0]->tb}}">
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
                                                                    <input type="text" class="form-control" placeholder="Berat badan Pasien ..." name="gcs" id="gcs" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$assesbidbay[0]->GCS}}">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="basic-addon2"></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-bold font-italic">SPO2</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder=" SPO2 pasien ..." aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{$assesbidbay[0]->SPO2}}">
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
                                                        <input class="form-control" type="text" id="anake" name="anake" value="{{$assesbidbay[0]->anake}}" placeholder="">

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold font-italic"></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->rpenyakit == 'DM')
                                                                <input class="form-check-input" type="checkbox" name="riwayatpenyakitibu" id="riwayatpenyakitibu" value="DM" checked>
                                                                <label class="form-check-label">DM</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="riwayatpenyakitibu" id="riwayatpenyakitibu" value="DM">
                                                                <label class="form-check-label">DM</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->rpenyakit1 == 'Hipertensi')
                                                                <input class="form-check-input" type="checkbox" name="riwayatpenyakitibu1" id="riwayatpenyakitibu1" value="Hipertensi" checked>
                                                                <label class="form-check-label">Hipertensi</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="riwayatpenyakitibu1" id="riwayatpenyakitibu1" value="Hipertensi">
                                                                <label class="form-check-label">Hipertensi</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->rpenyakit2 == 'Jantung')
                                                                <input class="form-check-input" type="checkbox" name="riwayatpenyakitibu2" id="riwayatpenyakitibu2" value="Jantung" checked>
                                                                <label class="form-check-label">Jantung</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="riwayatpenyakitibu2" id="riwayatpenyakitibu2" value="Jantung">
                                                                <label class="form-check-label">Jantung</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->rpenyakit3 == 'TBC')
                                                                <input class="form-check-input" type="checkbox" name="riwayatpenyakitibu3" id="riwayatpenyakitibu3" value="TBC" checked>
                                                                <label class="form-check-label">TBC</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="riwayatpenyakitibu3" id="riwayatpenyakitibu3" value="TBC">
                                                                <label class="form-check-label">TBC</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->rpenyakit4 == 'Hepatitis')
                                                                <input class="form-check-input" type="checkbox" name="riwayatpenyakitibu4" id="riwayatpenyakitibu4" value="Hepatitis" checked>
                                                                <label class="form-check-label">Hepatitis</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="riwayatpenyakitibu4" id="riwayatpenyakitibu4" value="Hepatitis">
                                                                <label class="form-check-label">Hepatitis</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->rpenyakit5 == 'Anemia')
                                                                <input class="form-check-input" type="checkbox" name="riwayatpenyakitibu5" id="riwayatpenyakitibu5" value="Anemia" checked>
                                                                <label class="form-check-label">Anemia</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="riwayatpenyakitibu5" id="riwayatpenyakitibu5" value="Anemia">
                                                                <label class="form-check-label">Anemia</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->rpenyakit6 == 'Alergi')
                                                                <input class="form-check-input" type="checkbox" name="riwayatpenyakitibu6" id="riwayatpenyakitibu6" value="Alergi" checked>
                                                                <label class="form-check-label">Alergi</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="riwayatpenyakitibu6" id="riwayatpenyakitibu6" value="Alergi">
                                                                <label class="form-check-label">Alergi</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <input class="form-control" placeholder="lain-lain" type="input" name="riwayatpenyakitibu7" id="riwayatpenyakitibu7" value="{{$assesbidbay[0]->rpenyakit7}}">
                                                            </div>
                                                        </div>


                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold font-italic">Riwayat Pengobatan Ibu</td>
                                                <td>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" id="rpengoibu" value="{{$assesbidbay[0]->rpengoibu}}" name="rpengoibu" placeholder="">

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
                                                        <input class="form-control" type="text" id="rintra" name="rintra" value="{{$assesbidbay[0]->rintra}}" placeholder="">

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold font-italic">Tanggal Lahir</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="input-group">
                                                                <input class="form-control" type="date" id="rintratgl" name="rintratgl" value="{{$assesbidbay[0]->rintratgl}}" placeholder="Tanggal Lahir">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="input-group">
                                                                <input class="form-control" id="rintrawkt" name="rintrawkt" value="{{$assesbidbay[0]->rintrawkt}}" placeholder="Jam">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="input-group">
                                                                <input class="form-control" id="rintrakon" name="rintrakon" value="{{$assesbidbay[0]->rintrakon}}" placeholder="Kondisi Saat Lahir">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="input-group">
                                                                <input class="form-control" id="apgarscore" name="apgarscore" value="{{$assesbidbay[0]->apgarscore}}" placeholder="APGAR SCORE">
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
                                                                @if($assesbidbay[0]->carrapersalinan == 'Spontan')
                                                                <input class="form-check-input" type="checkbox" name="carrapersalinan" id="carrapersalinan" value="Spontan" checked>
                                                                <label class="form-check-label">Spontan</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="carrapersalinan" id="carrapersalinan" value="Spontan">
                                                                <label class="form-check-label">Spontan</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->carrapersalinan1 == 'Vacum Ekstraksi')
                                                                <input class="form-check-input" type="checkbox" name="carrapersalinan1" id="carrapersalinan1" value="Vacum Ekstraksi" checked>
                                                                <label class="form-check-label">Vacum Ekstraksi</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="carrapersalinan1" id="carrapersalinan1" value="Vacum Ekstraksi">
                                                                <label class="form-check-label">Vacum Ekstraksi</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->carrapersalinan2 == 'Forcep Ekstraksi')
                                                                <input class="form-check-input" type="checkbox" name="carrapersalinan2" id="carrapersalinan2" value="Forcep Ekstraksi" checked>
                                                                <label class="form-check-label">Forcep Ekstraksi</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="carrapersalinan2" id="carrapersalinan2" value="Forcep Ekstraksi">
                                                                <label class="form-check-label">Forcep Ekstraksi</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->carrapersalinan3 == 'Secttio Cesarea')
                                                                <input class="form-check-input" type="checkbox" name="carrapersalinan3" id="carrapersalinan3" value="Secttio Cesarea" checked>
                                                                <label class="form-check-label">Secttio Cesarea</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="carrapersalinan3" id="carrapersalinan3" value="Secttio Cesarea">
                                                                <label class="form-check-label">Secttio Cesarea</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                <input class="form-control" placeholder="lain-lain" type="input" name="carrapersalinan4" id="carrapersalinan4" value="{{$assesbidbay[0]->carrapersalinan4}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                <input class="form-control" placeholder="Letak" type="input" name="carrapersalinanltk" id="carrapersalinanltk" value="{{$assesbidbay[0]->carrapersalinanltk}}">
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
                                                                @if($assesbidbay[0]->talipusat == 'Segar')
                                                                <input class="form-check-input" type="checkbox" name="talipusat" id="talipusat" value="Segar" checked>
                                                                <label class="form-check-label">Segar</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="talipusat" id="talipusat" value="Segar">
                                                                <label class="form-check-label">Segar</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->talipusat1 == 'Layu')
                                                                <input class="form-check-input" type="checkbox" name="talipusat1" id="talipusat1" value="Layu" checked>
                                                                <label class="form-check-label">Layu</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="talipusat1" id="talipusat1" value="Layu">
                                                                <label class="form-check-label">Layu</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->talipusat2 == 'Simpul')
                                                                <input class="form-check-input" type="checkbox" name="talipusat2" checked id="talipusat2" value="Simpul" checked>
                                                                <label class="form-check-label">Simpul</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="talipusat2" id="talipusat2" value="Simpul">
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
                                                                @if($assesbidbay[0]->mayor == 'Ibu Demam >= 38°C')
                                                                <input class="form-check-input" type="checkbox" name="mayor" id="mayor" value="Ibu Demam >= 38°C" checked>
                                                                <label class="form-check-label">Ibu Demam ≥ 38°C </label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="mayor" id="mayor" value="Ibu Demam >= 38°C ">
                                                                <label class="form-check-label">Ibu Demam ≥ 38°C </label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->mayor1 == 'KPD > 24 Jam')
                                                                <input class="form-check-input" type="checkbox" name="mayor1" id="mayor1" value="KPD > 24 Jam" checked>
                                                                <label class="form-check-label">KPD > 24 Jam</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="mayor1" id="mayor1" value="KPD > 24 Jam">
                                                                <label class="form-check-label">KPD > 24 Jam</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->mayor2 == 'Ketubah Hujau')
                                                                <input class="form-check-input" type="checkbox" name="mayor2" id="mayor2" value="Ketubah Hujau" checked>
                                                                <label class="form-check-label">Ketubah Hujau</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="mayor2" id="mayor2" value="Ketubah Hujau">
                                                                <label class="form-check-label">Ketubah Hujau</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->mayor3 == 'Korioamniotis')
                                                                <input class="form-check-input" type="checkbox" name="mayor3" id="mayor3" value="Korioamniotis" checked>
                                                                <label class="form-check-label">Korioamniotis</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="mayor3" id="mayor3" value="Korioamniotis">
                                                                <label class="form-check-label">Korioamniotis</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->mayor4 == 'Fetal Distres')
                                                                <input class="form-check-input" type="checkbox" name="mayor4" id="mayor4" value="Fetal Distres" checked>
                                                                <label class="form-check-label">Fetal Distres</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="mayor4" id="mayor4" value="Fetal Distres">
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
                                                                @if($assesbidbay[0]->minor == 'KPD < 12 Jam')
                                                                    <input class="form-check-input" type="checkbox" name="minor" id="minor" value="KPD < 12 Jam " checked>
                                                                    <label class="form-check-label">KPD < 12 Jam </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="minor" id="minor" value="KPD < 12 Jam ">
                                                                            <label class="form-check-label">KPD < 12 Jam </label>
                                                                                    @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->minor1 == 'Asfiksia')
                                                                <input class="form-check-input" type="checkbox" name="minor1" id="minor1" value="Asfiksia" checked>
                                                                <label class="form-check-label">Asfiksia</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="minor1" id="minor1" value="Asfiksia">
                                                                <label class="form-check-label">Asfiksia</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->minor2 == 'BBLR')
                                                                <input class="form-check-input" type="checkbox" name="minor2" id="minor2" value="BBLR" checked>
                                                                <label class="form-check-label">BBLR</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="minor2" id="minor2" value="BBLR">
                                                                <label class="form-check-label">BBLR</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->minor3 == 'ISK')
                                                                <input class="form-check-input" type="checkbox" name="minor3" id="minor3" value="ISK" checked>
                                                                <label class="form-check-label">ISK</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="minor3" id="minor3" value="ISK">
                                                                <label class="form-check-label">ISK</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->minor4 == 'UK < 37 mg')
                                                                    <input class="form-check-input" type="checkbox" name="minor4" id="minor4" value="UK <  37 mg" checked>
                                                                    <label class="form-check-label">UK < 37 mg</label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="minor4" id="minor4" value="UK <  37 mg">
                                                                            <label class="form-check-label">UK < 37 mg</label>
                                                                                    @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->minor5 == 'Gemeli')
                                                                <input class="form-check-input" type="checkbox" name="minor5" id="minor5" value="Gemeli" checked>
                                                                <label class="form-check-label">Gemeli</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="minor5" id="minor5" value="Gemeli">
                                                                <label class="form-check-label">Gemeli</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->minor6 == 'Keputihan')
                                                                <input class="form-check-input" type="checkbox" name="minor6" id="minor6" value="Keputihan" checked>
                                                                <label class="form-check-label">Keputihan</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="minor6" id="minor6" value="Keputihan">
                                                                <label class="form-check-label">Keputihan</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->minor7 == 'Ibu Temperatur > 37°C')
                                                                <input class="form-check-input" type="checkbox" name="minor7" id="minor7" value="Ibu Temperatur > 37°C " checked>
                                                                <label class="form-check-label">Ibu Temperatur > 37°C </label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="minor7" id="minor7" value="Ibu Temperatur > 37°C ">
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
                                                                @if($assesbidbay[0]->nutrisi == 'ASI')
                                                                <input class="form-check-input" type="checkbox" name="nutrisi" id="nutrisi" value="ASI" checked>
                                                                <label class="form-check-label">ASI</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="nutrisi" id="nutrisi" value="ASI">
                                                                <label class="form-check-label">ASI</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                <input class="form-control" placeholder="Lainya" type="input" name="nutrisi1" id="nutrisi1" value="{{$assesbidbay[0]->nutrisi1}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-control" placeholder="Frekuensi ........ cc" type="input" name="frekuensi" id="frekuensi" value="{{$assesbidbay[0]->frekuensi}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                <input class="form-control" placeholder="........c" type="input" name="frekuensi1" id="frekuensi1" value="{{$assesbidbay[0]->frekuensi1}}">
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
                                                                <input class="form-control" placeholder="BAK" type="input" name="bak" id="bak" value="{{$assesbidbay[0]->bak}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-control" placeholder="keluhan" type="input" name="kelbak" id="kelbak" value="{{$assesbidbay[0]->kelbak}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->kelbak1 == 'tidak')
                                                                <input class="form-check-input" type="checkbox" name="kelbak1" id="kelbak1" value="tidak" checked>
                                                                <label class="form-check-label">tidak</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="kelbak1" id="kelbak1" value="tidak">
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
                                                                <input class="form-control" placeholder="BAB" type="input" name="BAB" id="BAB" value="{{$assesbidbay[0]->BAB}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-control" placeholder="keluhan" type="input" name="kelbab" id="kelbab" value="{{$assesbidbay[0]->kelbab}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->kelbab1 == 'tidak')
                                                                <input class="form-check-input" type="checkbox" name="kelbab1" id="kelbab1" value="tidak" checked>
                                                                <label class="form-check-label">tidak</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="kelbab1" id="kelbab1" value="tidak">
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
                                                                @if($assesbidbay[0]->reaksi == 'ya')
                                                                <input class="form-check-input" type="checkbox" name="reaksi" id="reaksi" value="ya" checked>
                                                                <label class="form-check-label">ya</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="reaksi" id="reaksi" value="ya">
                                                                <label class="form-check-label">ya</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-check">
                                                                @if($assesbidbay[0]->reaksi == 'tidak')
                                                                <input class="form-check-input" type="checkbox" name="reaksi" id="reaksi" value="tidak" checked>
                                                                <label class="form-check-label">tidak</label>
                                                                @else
                                                                <input class="form-check-input" type="checkbox" name="reaksi" id="reaksi" value="tidak">
                                                                <label class="form-check-label">tidak</label>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-check">
                                                                <input class="form-control" placeholder="Sebutkan" type="input" name="reaksii" id="reaksii" value="{{$assesbidbay[0]->reaksii}}">
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
                                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne91" aria-expanded="true" aria-controls="collapseOne91">
                                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> PSIKOSOSIAL, EKONOMI DAN SPIRITUAL
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseOne91" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample91">
                                            <div class="card-body bg-light">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-bold font-italic">Kecemasan Orang Tua</td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            @if($assesbidbay[0]->kecemasan == 'Sedang')
                                                                            <input class="form-check-input" type="checkbox" name="kecemasan" id="kecemasan" value="Sedang" checked>
                                                                            <label class="form-check-label">Sedang </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="kecemasan" id="kecemasan" value="Sedang">
                                                                            <label class="form-check-label">Sedang </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            @if($assesbidbay[0]->kecemasan == 'Berat')
                                                                            <input class="form-check-input" type="checkbox" name="kecemasan" id="kecemasan" value="Berat" checked>
                                                                            <label class="form-check-label">Berat </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="kecemasan" id="kecemasan" value="Berat">
                                                                            <label class="form-check-label">Berat </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            @if($assesbidbay[0]->kecemasan == 'Panik')
                                                                            <input class="form-check-input" type="checkbox" name="kecemasan" id="kecemasan" value="Panik" checked>
                                                                            <label class="form-check-label">Panik </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="kecemasan" id="kecemasan" value="Panik">
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
                                                                            @if($assesbidbay[0]->koping == 'Merusak Diri')
                                                                            <input class="form-check-input" type="checkbox" name="koping" id="koping" value="Merusak Diri" checked>
                                                                            <label class="form-check-label">Merusak Diri </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="koping" id="koping" value="Merusak Diri">
                                                                            <label class="form-check-label">Merusak Diri </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            @if($assesbidbay[0]->koping == 'Menarik Diri / Isolasi Sosial')
                                                                            <input class="form-check-input" type="checkbox" name="koping" id="koping" value="Menarik Diri / Isolasi Sosial" checked>
                                                                            <label class="form-check-label">Menarik Diri / Isolasi Sosial </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="koping" id="koping" value="Menarik Diri / Isolasi Sosial">
                                                                            <label class="form-check-label">Menarik Diri / Isolasi Sosial </label>
                                                                            @endif

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            @if($assesbidbay[0]->koping == 'Perilaku Kekerasan')
                                                                            <input class="form-check-input" type="checkbox" name="koping" id="koping" value="Perilaku Kekerasan" checked>
                                                                            <label class="form-check-label">Perilaku Kekerasan </label>
                                                                            @else
                                                                            <input class="form-check-input" type="checkbox" name="koping" id="koping" value="Perilaku Kekerasan">
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
                                                                            <input class="form-check-input" type="checkbox" name="pekerjaan" id="pekerjaan" value="Pelajar">
                                                                            <label class="form-check-label">Pelajar </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="pekerjaan" id="pekerjaan" value="PNS">
                                                                            <label class="form-check-label">PNS </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="pekerjaan" id="pekerjaan" value="Pekerja Swasta">
                                                                            <label class="form-check-label">Pekerja Swasta </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="pekerjaan" id="pekerjaan" value="lain-lain">
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
                                                                            <input class="form-check-input" type="checkbox" name="agama" id="agama" value="Islam">
                                                                            <label class="form-check-label">Islam </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="agama" id="agama" value="Kristen">
                                                                            <label class="form-check-label">Kristen </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="agama" id="agama" value="Hindu">
                                                                            <label class="form-check-label">Hindu </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="agama" id="agama" value="Budha">
                                                                            <label class="form-check-label">Budha </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="agama" id="agama" value="Katolik">
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
                                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne100" aria-expanded="true" aria-controls="collapseOne100">
                                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> SKRINING RESIKO JATUH
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseOne100" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample100">
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
                                                                    <input type="number" name="cryingvalue" id="cryingvalue" value="{{$assesbidbay[0]->cryingvalue}}" class="form-control" min="0" placeholder="Enter first value" required />
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
                                                                    <input type="number" name="requiresvalue" id="requiresvalue" class="form-control" value="{{$assesbidbay[0]->requiresvalue}}" min="0" placeholder="Enter first value" required />
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold">Increased</td>
                                                            <td>Detak jantung dan tekanan darah tidak berubah atau kurang dari nilai base line</td>
                                                            <td>Detak jantung atau tekanan darah meningkat, tetapi peningkatan ≤ 20%</td>
                                                            <td>Detak jantung atau tekanan darah meningkat ≥ 20% dari nilai base line</td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="number" name="increasedvalue" id="increasedvalue" class="form-control" value="{{$assesbidbay[0]->increasedvalue}}" min="0" placeholder="Enter first value" required />
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
                                                                    <input type="number" name="expressionvalue" id="expressionvalue" class="form-control" value="{{$assesbidbay[0]->expressionvalue}}" min="0" placeholder="Enter first value" required />
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
                                                                    <input type="number" name="sleeplessvalue" id="sleeplessvalue" value="{{$assesbidbay[0]->sleeplessvalue}}" class="form-control" min="0" placeholder="Enter first value" required />
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
                                                                    <input type="number" name="totalnyeri" id="totalnyeri" class="form-control" value="{{$assesbidbay[0]->totalnyeri}}" readonly />
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
                                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne101" aria-expanded="true" aria-controls="collapseOne101">
                                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> SKRINING GIZI NEONATUS PEDIATRIC YORKHILL MALNUTRITION SCORE (PYMS)
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseOne101" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample101">
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
                                                                    <input type="number" name="bbvalue" id="bbvalue" value="{{$assesbidbay[0]->pbvalue}}" class="form-control" min="0" placeholder="Enter first value" required />
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Kehilangan atau penurunan berat badan akhir-akhir ini</td>
                                                            <td>Tidak ada </td>
                                                            <td>ada</td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="number" name="pbvalue" id="pbvalue" value="{{$assesbidbay[0]->pbvalue}}" class="form-control" min="0" placeholder="Enter first value" required />
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Asupan makanan dalam mingi terakhir</td>
                                                            <td>Makanan seperti biasa </td>
                                                            <td>Ada penurunan</td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="number" name="mingivalue" id="mingivalue" value="{{$assesbidbay[0]->mingivalue}}" class="form-control" min="0" placeholder="Enter first value" required />
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Anak sakit berat *</td>
                                                            <td>Tidak </td>
                                                            <td>ada</td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input type="number" name="sakitvalue" id="sakitvalue" value="{{$assesbidbay[0]->sakitvalue}}" class="form-control" min="0" placeholder="Enter first value" required />
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td> </td>
                                                            <td>Total score</td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input readonly type="number" name="totalgizi" id="totalgizi" value="{{$assesbidbay[0]->totalgizi}}" class="form-control" min="0" placeholder="Enter first value" required />
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
                                <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse" data-target="#collapseOne94" aria-expanded="true" aria-controls="collapseOne94">
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
                                                                    @if($assesbidbay[0]->diagnosakebidananbayi == 'Aktual / Risiko bersihan jalan nafas tidak efektif')
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan" id="diagnosakebidanan" value="Aktual / Risiko bersihan jalan nafas tidak efektif" checked>
                                                                    <label class="form-check-label">Aktual / Risiko bersihan jalan nafas tidak efektif</label>
                                                                    @else
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan" id="diagnosakebidanan" value="Aktual / Risiko bersihan jalan nafas tidak efektif">
                                                                    <label class="form-check-label">Aktual / Risiko bersihan jalan nafas tidak efektif</label>
                                                                    @endif

                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbidbay[0]->diagnosakebidanan1 == 'Aktual / Risiko pola nafas tidak efektif')
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan1" id="diagnosakebidanan1" value="Aktual / Risiko pola nafas tidak efektif" checked>
                                                                    <label class="form-check-label">Aktual / Risiko pola nafas tidak efektif</label>
                                                                    @else
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan1" id="diagnosakebidanan1" value="Aktual / Risiko pola nafas tidak efektif">
                                                                    <label class="form-check-label">Aktual / Risiko pola nafas tidak efektif</label>
                                                                    @endif

                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbidbay[0]->diagnosakebidanan2 == 'Aktual / Risiko gangguan pertukaran gas')
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan2" id="diagnosakebidanan2" value="Aktual / Risiko gangguan pertukaran gas" checked>
                                                                    <label class="form-check-label">Aktual / Risiko gangguan pertukaran gas</label>
                                                                    @else
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan2" id="diagnosakebidanan2" value="Aktual / Risiko gangguan pertukaran gas">
                                                                    <label class="form-check-label">Aktual / Risiko gangguan pertukaran gas</label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbidbay[0]->diagnosakebidanan3 == 'Aktual / Risiko gangguan sirkulasi')
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan3" id="diagnosakebidanan3" value="Aktual / Risiko gangguan sirkulasi" checked>
                                                                    <label class="form-check-label">Aktual / Risiko gangguan sirkulasi</label>
                                                                    @else
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan3" id="diagnosakebidanan3" value="Aktual / Risiko gangguan sirkulasi">
                                                                    <label class="form-check-label">Aktual / Risiko gangguan sirkulasi</label>
                                                                    @endif

                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbidbay[0]->diagnosakebidanan4 == 'Aktual / Risiko gangguan perfusi jaringan / cerebral')
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan4" id="diagnosakebidanan4" value="Aktual / Risiko gangguan perfusi jaringan / cerebral " checked>
                                                                    <label class="form-check-label">Aktual / Risiko gangguan perfusi jaringan / cerebral </label>
                                                                    @else
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan4" id="diagnosakebidanan4" value="Aktual / Risiko gangguan perfusi jaringan / cerebral ">
                                                                    <label class="form-check-label">Aktual / Risiko gangguan perfusi jaringan / cerebral </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbidbay[0]->diagnosakebidanan5 == 'Hipertermia')
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan5" id="diagnosakebidanan5" value="Hipertermia" checked>
                                                                    <label class="form-check-label">Hipertermia </label>
                                                                    @else
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan5" id="diagnosakebidanan5" value="Hipertermia">
                                                                    <label class="form-check-label">Hipertermia </label>
                                                                    @endif

                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbidbay[0]->diagnosakebidanan6 == 'Aktual / Risiko gangguan keseimbangan cairan')
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan6" id="diagnosakebidanan6" value="Aktual / Risiko gangguan keseimbangan cairan" checked>
                                                                    <label class="form-check-label">Aktual / Risiko gangguan
                                                                        keseimbangan cairan </label>
                                                                    @else
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan6" id="diagnosakebidanan6" value="Aktual / Risiko gangguan keseimbangan cairan">
                                                                    <label class="form-check-label">Aktual / Risiko gangguan
                                                                        keseimbangan cairan </label>
                                                                    @endif

                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbidbay[0]->diagnosakebidanan7 == 'Aktual / Risiko gangguan integritas kulit')
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan7" id="diagnosakebidanan7" value="Aktual / Risiko gangguan integritas kulit" checked>
                                                                    <label class="form-check-label">Aktual / Risiko gangguan
                                                                        integritas kulit </label>
                                                                    @else
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan7" id="diagnosakebidanan7" value="Aktual / Risiko gangguan integritas kulit">
                                                                    <label class="form-check-label">Aktual / Risiko gangguan
                                                                        integritas kulit </label>
                                                                    @endif

                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbidbay[0]->diagnosakebidanan8 == 'Aktual / Risiko cemas / takut')
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan8" id="diagnosakebidanan8" value="Aktual / Risiko cemas / takut" checked>
                                                                    <label class="form-check-label">Aktual / Risiko cemas / takut
                                                                    </label>
                                                                    @else
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan8" id="diagnosakebidanan8" value="Aktual / Risiko cemas / takut">
                                                                    <label class="form-check-label">Aktual / Risiko cemas / takut
                                                                    </label>
                                                                    @endif

                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbidbay[0]->diagnosakebidanan9 == 'Risiko penyebaran toksik')
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan9" id="diagnosakebidanan9" value="Risiko penyebaran toksik" checked>
                                                                    <label class="form-check-label">Risiko penyebaran toksik
                                                                    </label>
                                                                    @else
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan9" id="diagnosakebidanan9" value="Risiko penyebaran toksik">
                                                                    <label class="form-check-label">Risiko penyebaran toksik
                                                                    </label>
                                                                    @endif

                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbidbay[0]->diagnosakebidanan10 == 'risiko jatuh / cedera')
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan10" id="diagnosakebidanan10" value="risiko jatuh / cedera" checked>
                                                                    <label class="form-check-label">risiko jatuh / cedera</label>
                                                                    @else
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan10" id="diagnosakebidanan10" value="risiko jatuh / cedera">
                                                                    <label class="form-check-label">risiko jatuh / cedera</label>
                                                                    @endif

                                                                </div>
                                                                <div class="form-check">
                                                                    @if($assesbidbay[0]->diagnosakebidanan11 == 'nyeri')
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan11" id="diagnosakebidanan11" value="nyeri" checked>
                                                                    <label class="form-check-label">nyeri</label>
                                                                    @else
                                                                    <input class="form-check-input" type="checkbox" name="diagnosakebidanan11" id="diagnosakebidanan11" value="nyeri">
                                                                    <label class="form-check-label">nyeri</label>
                                                                    @endif

                                                                </div>
                                                                <textarea class="form-control" id="diagnosakebidanan12" name="diagnosakebidanan12" rows="2" placeholder="">{{$assesbidbay[0]->diagnosakebidanan12}}</textarea>

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
                                <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse" data-target="#collapseOne95" aria-expanded="true" aria-controls="collapseOne95">
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
                                                    <textarea class="form-control" id="planning" name="planning" placeholder="">{{$assesbidbay[0]->rencanaasuhan}}</textarea>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Tindakan Kebidanan dan Evaluasi</td>
                                            <td>
                                                <div class="input-group">
                                                    <textarea class="form-control" id="tindakan" name="tindakan" placeholder="">{{$assesbidbay[0]->tindakan}}</textarea>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">KOLABORASI </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbidbay[0]->kolaborasi1 == 'Infus/ IVFD')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi1" id="kolaborasi1" value="Infus/ IVFD" checked>
                                                            <label class="form-check-label">Infus/ IVFD </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi1" id="kolaborasi1" value="Infus/ IVFD">
                                                            <label class="form-check-label">Infus/ IVFD </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbidbay[0]->kolaborasi2 == 'Oksigenasi')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi2" id="kolaborasi2" value="Oksigenasi" checked>
                                                            <label class="form-check-label">Oksigenasi </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi2" id="kolaborasi2" value="Oksigenasi">
                                                            <label class="form-check-label">Oksigenasi </label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbidbay[0]->kolaborasi3 == 'NGT')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi3" id="kolaborasi3" value="NGT" checked>
                                                            <label class="form-check-label">NGT </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi3" id="kolaborasi3" value="NGT">
                                                            <label class="form-check-label">NGT </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbidbay[0]->kolaborasi4 == 'Defibrilasi')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi4" id="kolaborasi4" value="Defibrilasi" checked>
                                                            <label class="form-check-label">Defibrilasi </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi4" id="kolaborasi4" value="Defibrilasi">
                                                            <label class="form-check-label">Defibrilasi </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbidbay[0]->kolaborasi5 == 'Suction')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi5" id="kolaborasi5" value="Suction" checked>
                                                            <label class="form-check-label">Suction </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi5" id="kolaborasi5" value="Suction">
                                                            <label class="form-check-label">Suction </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbidbay[0]->kolaborasi6 == 'LAB')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi6" id="kolaborasi6" value="LAB" checked>
                                                            <label class="form-check-label">LAB </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi6" id="kolaborasi6" value="LAB">
                                                            <label class="form-check-label">LAB </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbidbay[0]->kolaborasi7 == 'Nebulizer')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi7" id="kolaborasi7" value="Nebulizer" checked>
                                                            <label class="form-check-label">Nebulizer </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi7" id="kolaborasi7" value="Nebulizer">
                                                            <label class="form-check-label">Nebulizer </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbidbay[0]->kolaborasi8 == 'Mengumbah lambung')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi8" id="kolaborasi8" value="Mengumbah lambung" checked>
                                                            <label class="form-check-label">Mengumbah lambung </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi8" id="kolaborasi8" value="Mengumbah lambung">
                                                            <label class="form-check-label">Mengumbah lambung </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbidbay[0]->kolaborasi9 == 'Mayo')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi9" id="kolaborasi9" value="Mayo" checked>
                                                            <label class="form-check-label">Mayo </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi9" id="kolaborasi9" value="Mayo">
                                                            <label class="form-check-label">Mayo </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbidbay[0]->kolaborasi10 == 'Explorasi / Irigasi')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi10" id="kolaborasi10" value="Explorasi / Irigasi" checked>
                                                            <label class="form-check-label">Explorasi / Irigasi </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi10" id="kolaborasi10" value="Explorasi / Irigasi">
                                                            <label class="form-check-label">Explorasi / Irigasi </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbidbay[0]->kolaborasi11 == 'EKG')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi11" id="kolaborasi11" value="EKG" checked>
                                                            <label class="form-check-label">EKG </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi11" id="kolaborasi11" value="EKG">
                                                            <label class="form-check-label">EKG </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbidbay[0]->kolaborasi12 == 'Saturasi Oksigen')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi12" id="kolaborasi12" value="Saturasi Oksigen" checked>
                                                            <label class="form-check-label">Saturasi Oksigen </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi12" id="kolaborasi12" value="Saturasi Oksigen">
                                                            <label class="form-check-label">Saturasi Oksigen </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbidbay[0]->kolaborasi13 == 'Kateter')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi13" id="kolaborasi13" value="Kateter" checked>
                                                            <label class="form-check-label">Kateter </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi13" id="kolaborasi13" value="Kateter">
                                                            <label class="form-check-label">Kateter </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbidbay[0]->kolaborasi14 == 'ETT')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi14" id="kolaborasi14" value="ETT" checked>
                                                            <label class="form-check-label">ETT </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi14" id="kolaborasi14" value="ETT">
                                                            <label class="form-check-label">ETT </label>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            @if($assesbidbay[0]->kolaborasi15 == 'Obat')
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi15" id="kolaborasi15" value="Obat" checked>
                                                            <label class="form-check-label">Obat </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="kolaborasi15" id="kolaborasi15" value="Obat">
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
                @endif
                <!-- batas bawah form bayi  -->
            </div>
        </div>
    </div>
</div>
@else




<div id="printableArea">
    <div class="card-header">
        <button type="submit" class="btn btn-info cetakresumecpptdokter"> <i class="fa fa-print"></i> Cetak Resume </button>
        <button type="submit" class="btn btn-warning cetakassesperawat"> <i class="fa fa-print"></i> Cetak assesmen perawat </button>
        <button type="submit" class="btn btn-info cetakresumecpptdokter"> <i class="fa fa-print"></i> Cetak assesmen dokter </button>


        <input type="text" class="form-check-input" id="kj" name="kj" value="{{$kj}}" hidden>

    </div>
    <div class="card-body">
        <form>
            @if ($triase == NULL)

            <h1> belum ada triase</h1>
            @else
            @if ($triase[0]->jenis_triase == 'dewasa')
            <!-- resume triase dewasa  -->


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

                    <div class="row penandaangambar">
                        <div class="col-md-5">

                            <div class="">
                                @if($triase[0]->penandaan_gambar == NULL)
                                @else
                                <img id="gambarnya1" style="margin-top:50px" width="600px" height="400px" src="{{ $triase[0]->penandaan_gambar }}" onclick="showMarkerArea(this);" />
                                @endif

                            </div>
                        </div>

                        <div class="col-md-5">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="text-bold font-italic">Kesadaran</td>
                                        <td>
                                            @if($triase[0]->kesadaran_1 == NULL)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="kesadaran_1" id="kesadaran_1" value="Compos Mentis">
                                                <label class="form-check-label" for="inlineRadio1">Compos Mentis</label>
                                            </div>
                                            @else
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" checked name="kesadaran_1" id="kesadaran_1" value="Compos Mentis">
                                                <label class="form-check-label" for="inlineRadio1">Compos Mentis</label>
                                            </div>
                                            @endif



                                        </td>
                                        <td>
                                            @if($triase[0]->kesadaran_2 == NULL)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="kesadaran_2" id="kesadaran_2" value="Letargik">
                                                <label class="form-check-label" for="inlineRadio2">Letargik</label>
                                            </div>
                                            @else
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" checked name="kesadaran_2" id="kesadaran_2" value="Letargik">
                                                <label class="form-check-label" for="inlineRadio2">Letargik</label>
                                            </div>
                                            @endif

                                        </td>
                                        <td>
                                            <label class="form-check-label" for="inlineRadio2">Lainya</label>

                                            <input class="form-" type="input" name="kesadaran_3" id="kesadaran_3" value="{{$triase[0]->kesadaran_3}}">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold font-italic">Status Psikologi</td>
                                        <td>
                                            @if($triase[0]->status_psikologis == NULL)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="spsi" id="spsi" value="Marah">
                                                <label class="form-check-label" for="inlineRadio1">Marah</label>
                                            </div>
                                            @else
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="spsi" checked id="spsi" value="Marah">
                                                <label class="form-check-label" for="inlineRadio1">Marah</label>
                                            </div>
                                            @endif


                                        </td>
                                        <td>
                                            @if($triase[0]->status_psikologis1 == NULL)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="spsi1" id="spsi1" value="Depresi">
                                                <label class="form-check-label" for="inlineRadio2">Depresi</label>
                                            </div>
                                            @else
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" checked name="spsi1" id="spsi1" value="Depresi">
                                                <label class="form-check-label" for="inlineRadio2">Depresi</label>
                                            </div>
                                            @endif

                                        </td>
                                        <td>
                                            @if($triase[0]->status_psikologis2 == NULL)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="spsi2" id="spsi2" value="Takut">
                                                <label class="form-check-label" for="inlineRadio2">Takut</label>
                                            </div>
                                            @else
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" checked name="spsi2" id="spsi2" value="Takut">
                                                <label class="form-check-label" for="inlineRadio2">Takut</label>
                                            </div>
                                            @endif

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold font-italic"></td>
                                        <td>
                                            @if($triase[0]->status_psikologis3 == NULL)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="spsi3" id="spsi3" value="Gelisah">
                                                <label class="form-check-label" for="inlineRadio1">Gelisah</label>
                                            </div>
                                            @else
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" checked name="spsi3" id="spsi3" value="Gelisah">
                                                <label class="form-check-label" for="inlineRadio1">Gelisah</label>
                                            </div>
                                            @endif


                                        </td>
                                        <td>
                                            @if($triase[0]->status_psikologis4 == NULL)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="spsi4" id="spsi4" value="Psikotik">
                                                <label class="form-check-label" for="inlineRadio2">Psikotik</label>
                                            </div>
                                            @else
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" checked name="spsi4" id="spsi4" value="Psikotik">
                                                <label class="form-check-label" for="inlineRadio2">Psikotik</label>
                                            </div>
                                            @endif

                                        </td>
                                        <td>
                                            @if($triase[0]->status_psikologis5 == NULL)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="spsi5" id="spsi5" value="Cemas">
                                                <label class="form-check-label" for="inlineRadio2">Cemas</label>
                                            </div>
                                            @else
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" checked name="spsi5" id="spsi5" value="Cemas">
                                                <label class="form-check-label" for="inlineRadio2">Cemas</label>
                                            </div>
                                            @endif


                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold font-italic"></td>
                                        <td>
                                            @if($triase[0]->status_psikologis6 == NULL)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="spsi6" id="spsi6" value="Gelisah">
                                                <label class="form-check-label" for="inlineRadio1">Gelisah</label>
                                            </div>
                                            @else
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" checked name="spsi6" id="spsi6" value="Gelisah">
                                                <label class="form-check-label" for="inlineRadio1">Gelisah</label>
                                            </div>
                                            @endif



                                        </td>
                                        <td>
                                            @if($triase[0]->status_psikologis7 == NULL)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="spsi7" id="spsi7" value="Kecendrungan Bunuh Diri">
                                                <label class="form-check-label" for="inlineRadio2">Kecendrungan Bunuh Diri</label>
                                            </div>
                                            @else
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" checked name="spsi7" id="spsi7" value="Kecendrungan Bunuh Diri">
                                                <label class="form-check-label" for="inlineRadio2">Kecendrungan Bunuh Diri</label>
                                            </div>
                                            @endif

                                        </td>
                                        <td>
                                            @if($triase[0]->status_psikologis8 == NULL)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="spsi8" id="spsi8" value="Tidak Ada Masalah">
                                                <label class="form-check-label" for="inlineRadio2">Tidak Ada Masalah</label>
                                            </div>
                                            @else
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" checked name="spsi8" id="spsi8" value="Tidak Ada Masalah">
                                                <label class="form-check-label" for="inlineRadio2">Tidak Ada Masalah</label>
                                            </div>
                                            @endif


                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold font-italic"></td>

                                        <td>
                                            <label class="form-check-label" for="inlineRadio2">Lainya</label>

                                            <input class="form-" type="input" name="spsi9" id="spsi9" value="{{$triase[0]->status_psikologis9}}">

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>


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
                                            heba mendadak
                                            (VAS ≥ 8) </label>
                                        @else
                                        <input type="checkbox" class="form-check-input" id="gejala29" name="gejala29" value="Nyeri Kepala heba mendadak (VAS > = 8) ">
                                        <label class="form-check-label" for="exampleCheck1">Nyeri Kepala
                                            heba mendadak
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

                        </tbody>
                    </table>
                </div>

                @else
                <div class="accordion  mt-3 mb-2" id="accordionExample">

                    <div class="card-header bg-secondary" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Triase (ATS : Australian Triage Scale)
                                ANAK
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="row penandaangambar">
                            <div class="col-md-5">

                                <div class="">
                                    @if($triase[0]->penandaan_gambar == NULL)
                                    @else
                                    <img id="gambarnya1" style="margin-top:50px" width="600px" height="400px" src="{{ $triase[0]->penandaan_gambar }}" onclick="showMarkerArea(this);" />
                                    @endif

                                </div>
                            </div>

                            <div class="col-md-5">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="text-bold font-italic">Kesadaran</td>
                                            <td>
                                                @if($triase[0]->kesadaran_1 == NULL)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="kesadaran_1" id="kesadaran_1" value="Compos Mentis">
                                                    <label class="form-check-label" for="inlineRadio1">Compos Mentis</label>
                                                </div>
                                                @else
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" checked name="kesadaran_1" id="kesadaran_1" value="Compos Mentis">
                                                    <label class="form-check-label" for="inlineRadio1">Compos Mentis</label>
                                                </div>
                                                @endif



                                            </td>
                                            <td>
                                                @if($triase[0]->kesadaran_2 == NULL)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="kesadaran_2" id="kesadaran_2" value="Letargik">
                                                    <label class="form-check-label" for="inlineRadio2">Letargik</label>
                                                </div>
                                                @else
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" checked name="kesadaran_2" id="kesadaran_2" value="Letargik">
                                                    <label class="form-check-label" for="inlineRadio2">Letargik</label>
                                                </div>
                                                @endif

                                            </td>
                                            <td>
                                                <label class="form-check-label" for="inlineRadio2">Lainya</label>

                                                <input class="form-" type="input" name="kesadaran_3" id="kesadaran_3" value="{{$triase[0]->kesadaran_3}}">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Status Psikologi</td>
                                            <td>
                                                @if($triase[0]->status_psikologis == NULL)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="spsi" id="spsi" value="Marah">
                                                    <label class="form-check-label" for="inlineRadio1">Marah</label>
                                                </div>
                                                @else
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="spsi" checked id="spsi" value="Marah">
                                                    <label class="form-check-label" for="inlineRadio1">Marah</label>
                                                </div>
                                                @endif


                                            </td>
                                            <td>
                                                @if($triase[0]->status_psikologis1 == NULL)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="spsi1" id="spsi1" value="Depresi">
                                                    <label class="form-check-label" for="inlineRadio2">Depresi</label>
                                                </div>
                                                @else
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" checked name="spsi1" id="spsi1" value="Depresi">
                                                    <label class="form-check-label" for="inlineRadio2">Depresi</label>
                                                </div>
                                                @endif

                                            </td>
                                            <td>
                                                @if($triase[0]->status_psikologis2 == NULL)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="spsi2" id="spsi2" value="Takut">
                                                    <label class="form-check-label" for="inlineRadio2">Takut</label>
                                                </div>
                                                @else
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" checked name="spsi2" id="spsi2" value="Takut">
                                                    <label class="form-check-label" for="inlineRadio2">Takut</label>
                                                </div>
                                                @endif

                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic"></td>
                                            <td>
                                                @if($triase[0]->status_psikologis3 == NULL)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="spsi3" id="spsi3" value="Gelisah">
                                                    <label class="form-check-label" for="inlineRadio1">Gelisah</label>
                                                </div>
                                                @else
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" checked name="spsi3" id="spsi3" value="Gelisah">
                                                    <label class="form-check-label" for="inlineRadio1">Gelisah</label>
                                                </div>
                                                @endif


                                            </td>
                                            <td>
                                                @if($triase[0]->status_psikologis4 == NULL)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="spsi4" id="spsi4" value="Psikotik">
                                                    <label class="form-check-label" for="inlineRadio2">Psikotik</label>
                                                </div>
                                                @else
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" checked name="spsi4" id="spsi4" value="Psikotik">
                                                    <label class="form-check-label" for="inlineRadio2">Psikotik</label>
                                                </div>
                                                @endif

                                            </td>
                                            <td>
                                                @if($triase[0]->status_psikologis5 == NULL)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="spsi5" id="spsi5" value="Cemas">
                                                    <label class="form-check-label" for="inlineRadio2">Cemas</label>
                                                </div>
                                                @else
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" checked name="spsi5" id="spsi5" value="Cemas">
                                                    <label class="form-check-label" for="inlineRadio2">Cemas</label>
                                                </div>
                                                @endif


                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic"></td>
                                            <td>
                                                @if($triase[0]->status_psikologis6 == NULL)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="spsi6" id="spsi6" value="Gelisah">
                                                    <label class="form-check-label" for="inlineRadio1">Gelisah</label>
                                                </div>
                                                @else
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" checked name="spsi6" id="spsi6" value="Gelisah">
                                                    <label class="form-check-label" for="inlineRadio1">Gelisah</label>
                                                </div>
                                                @endif



                                            </td>
                                            <td>
                                                @if($triase[0]->status_psikologis7 == NULL)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="spsi7" id="spsi7" value="Kecendrungan Bunuh Diri">
                                                    <label class="form-check-label" for="inlineRadio2">Kecendrungan Bunuh Diri</label>
                                                </div>
                                                @else
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" checked name="spsi7" id="spsi7" value="Kecendrungan Bunuh Diri">
                                                    <label class="form-check-label" for="inlineRadio2">Kecendrungan Bunuh Diri</label>
                                                </div>
                                                @endif

                                            </td>
                                            <td>
                                                @if($triase[0]->status_psikologis8 == NULL)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="spsi8" id="spsi8" value="Tidak Ada Masalah">
                                                    <label class="form-check-label" for="inlineRadio2">Tidak Ada Masalah</label>
                                                </div>
                                                @else
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" checked name="spsi8" id="spsi8" value="Tidak Ada Masalah">
                                                    <label class="form-check-label" for="inlineRadio2">Tidak Ada Masalah</label>
                                                </div>
                                                @endif


                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic"></td>

                                            <td>
                                                <label class="form-check-label" for="inlineRadio2">Lainya</label>

                                                <input class="form-" type="input" name="spsi9" id="spsi9" value="{{$triase[0]->status_psikologis9}}">

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <table class=" table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="text-bold ">KATEGORI TRIASE </td>

                                    <td>
                                        @if ($triase[0]->kategori_triase == 'Medikal')
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
                                    <td>
                                        @if ($triase[0]->kategori_triase == 'Bedah')

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
                                    <td>
                                        @if ($triase[0]->kategori_triase == 'Obgyn')

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
                                    <td>
                                        @if ($triase[0]->kategori_triase == 'Anak')

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
                                    <td class=" bg-danger">
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
                                    </td>
                                    <td style="background-color: chocolate;">
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
                                    </td>

                                    <td class="bg-warning">
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
                                    </td>
                                    <td class="bg-success">
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
                                    </td>
                                    <td class="bg-primary">
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
                        <table class="table table-bordered">
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
                @endif

        </form>
        <div class="row">
            <div class="col-md-6">

                <div class="mailbox-read-message">
                    <div class="card-header bg-info float-center">
                        <p class="text-bold ">Resume Perawat</p>

                    </div>
                    @if ($assesper == null)
                    <h1> belum ada CPPT</h1>
                    @else
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Tanggal Kunjungan</td>
                                <td>
                                    <h5 class="text-bold">{{$assesper[0]->tgl_kunjungan}}</h5>

                                </td>
                                <td class="text-bold font-italic">Tanggal Pengkajian</td>
                                <td>
                                    <h5 class="text-bold">{{$assesper[0]->tgl_input}}</h5>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Sumber Data</td>
                                <td colspan="3">
                                    <div class="input-group">
                                        <textarea class="form-control" id="anamnesis" name="anamnesis" placeholder="">{{$assesper[0]->sumber_data}}</textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Asal Masuk</td>
                                <td colspan="3">
                                    <div class="input-group">
                                        <textarea class="form-control" id="anamnesis" name="anamnesis" placeholder="">{{$assesper[0]->asal_masuk}}</textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">cara Masuk</td>
                                <td colspan="3">
                                    <div class="input-group">
                                        <textarea class="form-control" id="anamnesis" name="anamnesis" placeholder="">{{$assesper[0]->cara_masuk}}</textarea>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="card-header" style="background-color: rgba(110, 245, 137, 0.745)">
                        <i class="bi bi-book mr-1 ml-1"></i>(S) SUBYEKTIF
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">SUBYEKTIF (ANAMNESIS)</td>
                                <td>
                                    <div class="input-group">
                                        <textarea class="form-control" id="anamnesis" name="anamnesis" placeholder="">{{$assesper[0]->keluhan_utama}}</textarea>

                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="card-header" style="background-color: rgba(110, 245, 137, 0.745)">
                        <i class="bi bi-book mr-1 ml-1"></i>(O) OBYEKTIF
                    </div>

                    <div class="card-header bg-secondary">
                        <i class="bi bi-book mr-1 ml-1"></i>Tanda - tanda Vital
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Tekanan Darah</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2" value="{{$assesper[0]->tekanan_darah}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">mmHg</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-bold font-italic">Frekuensi Nadi</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" id="frekuensinadi" name="frekuensinadi" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$assesper[0]->frekuensi_nadi}}">
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
                                        <input type="text" class="form-control" placeholder="" name="frekuensinafas" id="frekuensinafas" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$assesper[0]->frekuensi_nafas}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">x/menit</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-bold font-italic">Suhu</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="suhutubuh" id="suhutubuh" aria-describedby="basic-addon2" value="{{$assesper[0]->suhu}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">°C</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Berat Badan / tinggi badan / IMT</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" name="beratbadan" id="beratbadan" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$assesper[0]->berat_badan}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">Kg</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-bold font-italic">Umur</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="usia" id="usia" aria-describedby="basic-addon2" value="{{$assesper[0]->umur}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">th</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">GCS </td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" name="gcs" id="gcs" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$assesper[0]->GCS}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-bold font-italic">SPO2</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{$assesper[0]->SPO2}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Keadaan Umum</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{$assesper[0]->keadaan_umum}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-bold font-italic">Kesadaran</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{$assesper[0]->kesadaran}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="card-header bg-secondary">
                        <i class="bi bi-book mr-1 ml-1"></i>PEMERIKSAAN FISIK
                    </div>

                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Tekanan Intrakranial </td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{$assesper[0]->tekanan_intrakranial}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"></span>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Neuro Sensorik</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{$assesper[0]->neuro_sensorik}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"></span>
                                        </div>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Muskolo Skeletal</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{$assesper[0]->muskolo_skletal}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"></span>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Integumen</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{$assesper[0]->integumen}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"></span>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Turgor Kulit</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{$assesper[0]->integumen}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"></span>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Edema</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{$assesper[0]->edema}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"></span>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Mukosa Mulut</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{$assesper[0]->mukosa_mulut}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"></span>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Pendarahan</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{$assesper[0]->pendarahan}} : {{$assesper[0]->jumlah_pendarahan}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"></span>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Intoksikasi</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{$assesper[0]->introksikasi}} ">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"></span>
                                        </div>
                                    </div>
                                </td>

                            </tr>

                            <tr>
                                <td class="text-bold font-italic">BAB</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-check-label float-center">FREKUENSI</label>
                                                <input class="form-control" placeholder="" type="input" name="BABF" id="BABF" value="{{$assesper[0]->bab_frekuensi}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-check-label float-center">KONSISTENSI</label>

                                                <input class="form-control" placeholder="" type="input" name="BABK" id="BABK" value="{{$assesper[0]->bab_konsistensi}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-check-label float-center">WARNA</label>

                                                <input class="form-control" placeholder="" type="input" name="BABKW" id="BABKW" value="{{$assesper[0]->bab_warna}}">
                                            </div>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">BAK</td>
                                <td>
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-check-label float-center">FREKUENSI</label>

                                                <input class="form-control" placeholder="" type="input" name="BAKF" id="BAKF" value="{{$assesper[0]->bak_frekuensi}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-check-label float-center">KONSISTENSI</label>

                                                <input class="form-control" placeholder="" type="input" name="BAKK" id="BAKK" value="{{$assesper[0]->bak_konsistensi}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-check-label float-center">WARNA</label>

                                                <input class="form-control" placeholder="" type="input" name="BAKKW" id="BAKKW" value="{{$assesper[0]->bak_warna}}">
                                            </div>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                        </tbody>
                    </table>

                    <div class="card-header bg-secondary">
                        <i class="bi bi-book mr-1 ml-1"></i>PSIKOSOSIAL, EKONOMI DAN SPIRTUAL
                    </div>

                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">KECEMASAN </td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{$assesper[0]->kecemasan}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"></span>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Koping Mekanisme </td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{$assesper[0]->koping_mekanisme}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"></span>
                                        </div>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Pekerjaan </td>
                                <td>
                                    <div class="input-group">
                                        <textarea class="form-control" id="pekerjaan" name="pekerjaan" placeholder="">{{$assesper[0]->pekerjaan}}</textarea>

                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Agama </td>
                                <td>
                                    <div class="input-group">
                                        <textarea class="form-control" id="agama" name="agama" placeholder="">{{$assesper[0]->agama}}</textarea>

                                    </div>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                    <div class="card-header bg-secondary">
                        <i class="bi bi-book mr-1 ml-1"></i>SKALA NYERI
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Apakah Terdapat Keluhan Nyeri ?? </td>
                                <td>
                                    <div class="input-group">
                                        <textarea class="form-control" id="agama" name="agama" placeholder="">{{$assesper[0]->keluhan_nyeri}}</textarea>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Berapa Lama Nyeri Ini ?? </td>
                                <td>
                                    <div class="input-group">
                                        <textarea class="form-control" id="agama" name="agama" placeholder="">{{$assesper[0]->lamanya_nyeri}}</textarea>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Rasa Nyeri ?? </td>
                                <td>
                                    <div class="input-group">
                                        <textarea class="form-control" id="agama" name="agama" placeholder="">{{$assesper[0]->rasa_nyeri}}</textarea>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Seberapa Sering Anda Mengalami Nyeri ini? Berapa Lama ?? </td>
                                <td>
                                    <div class="input-group">
                                        <textarea class="form-control" id="agama" name="agama" placeholder="">{{$assesper[0]->sering_nyeri}}</textarea>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Apa yang membuat nyeri berkurang dan bertambah parah? </td>
                                <td>
                                    <div class="input-group">
                                        <textarea class="form-control" id="agama" name="agama" placeholder="">{{$assesper[0]->berkurang_nyeri}}</textarea>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <table class="table">
                        <tbody>
                            <tr>
                                <td colspan="2" class="text-bold">LOKASI NYERI <br>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="penandaangambar">
                                                <img id="gambarnya1" style="margin-top:50px" width="600px" height="400px" src="{{ $assesper[0]->penandaan_gambar }}" onclick="showMarkerArea(this);" />


                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-check-label float-center">SKALA NYERI</label>

                                                <input class="form-control" placeholder="" type="input" name="BAKF" id="BAKF" value="{{$assesper[0]->scale_nyeri}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-check-label float-center">NILAI NYERI</label>

                                                <input class="form-control" placeholder="" type="input" name="BAKK" id="BAKK" value="{{$assesper[0]->scale_nyeri1}}">
                                            </div>
                                        </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="accordion" id="accordionExample99">
                        <div class="card">
                            <div class="card-header bg-secondary" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne99" aria-expanded="true" aria-controls="collapseOne99">
                                        <i class="bi bi-ticket-detailed mr-1 ml-1"></i> PENILAIAN RISIKO JATUH
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne99" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample99">
                                <div class="card-body bg-light">
                                    <div class="row">
                                        @if($assesper[0]->penilaian_resiko_dewasa == 'Pasien dewasa menggunakan skala morse falls scale')

                                        <div class="col-md-12">
                                            <div class="form-check">
                                                @if($assesper[0]->penilaian_resiko_dewasa == 'Pasien dewasa menggunakan skala morse falls scale')
                                                <input class="form-check-input" type="radio" name="jatuh_dewasa" id="jatuh_dewasa" value="Pasien dewasa menggunakan skala morse falls scale" checked>
                                                <label class="form-check-label text-bold">Pasien dewasa menggunakan skala morse falls scale </label>
                                                @else
                                                <input class="form-check-input" type="radio" name="jatuh_dewasa" id="jatuh_dewasa" value="Pasien dewasa menggunakan skala morse falls scale">
                                                <label class="form-check-label text-bold">Pasien dewasa menggunakan skala morse falls scale </label>
                                                @endif
                                            </div>
                                            <table class="table">
                                                <thead class="bg-warning">
                                                    <th class="text-bold float-center">Faktor risiko</th>
                                                    <th class="text-bold float-center">Skala</th>
                                                    <th class="text-bold float-center">POIN</th>
                                                    <th class="text-bold float-center">SKOR</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Riwayat jatuh</td>
                                                        <td>Ya<br>Tidak </td>
                                                        <td>25 <br> 0 </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" name="rjvalue" id="rjvalue" class="form-control" min="0" placeholder="{{$assesper[0]->riwayat_jatuh}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Diagnosis sekunder (≥2 diagnosis medis)</td>
                                                        <td>Ya<br>Tidak </td>
                                                        <td>15 <br> 0 </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" name="dsvalue" id="dsvalue" class="form-control" min="0" placeholder="{{$assesper[0]->diagnosis_sekunder}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Alat bantu</td>
                                                        <td>Berpegangan pada perabot<br>Berpegangan pada perabot <br>Tidak ada / kursi roda / perawat / tirah baring </td>
                                                        <td>30 <br><br> 15 <br> <br> 0 </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" name="abvalue" id="abvalue" class="form-control" min="0" placeholder="{{$assesper[0]->alat_bantu}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Terpasang infuse</td>
                                                        <td>Ya<br>Tidak </td>
                                                        <td>20 <br> 0 </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" name="tivalue" id="tivalue" class="form-control" min="0" placeholder="{{$assesper[0]->terpasang_infuse}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Gaya berjalan</td>
                                                        <td>Terganggu<br>Lemah <br>Normal / tirah baring / imobilisasi</td>
                                                        <td>20 <br> 10 <br> 0 </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" name="gbvalue" id="gbvalue" class="form-control" min="0" placeholder="{{$assesper[0]->gaya_berjalan}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Status mental </td>
                                                        <td>Sering lupa akan keterbatasan yang dimiliki<br>Sadar akan kemampuan diri sendiri </td>
                                                        <td>15 <br><br> 10 </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" name="smvalue" id="smvalue" class="form-control" min="0" placeholder="{{$assesper[0]->status_mental}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td> </td>
                                                        <td>Total score</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input readonly type="number" name="totalrisiko" id="totalrisiko" class="form-control" min="0" placeholder="{{$assesper[0]->total_resiko_dewasa}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        @elseif($assesper[0]->penilaian_resiko_dewasa == 'Pasien anak mengunakan skala humpty dumpty')
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                @if($assesper[0]->penilaian_resiko_anak == 'Pasien anak mengunakan skala humpty dumpty')
                                                <input class="form-check-input" type="radio" name="jatuh_anak" id="jatuh_anak" value="Pasien anak mengunakan skala humpty dumpty" checked>
                                                <label class="form-check-label text-bold">Pasien anak mengunakan skala humpty dumpty </label>
                                                @else
                                                <input class="form-check-input" type="radio" name="jatuh_anak" id="jatuh_anak" value="Pasien anak mengunakan skala humpty dumpty">
                                                <label class="form-check-label text-bold">Pasien anak mengunakan skala humpty dumpty </label>
                                                @endif
                                            </div>
                                            <table class="table">
                                                <thead class="bg-info">
                                                    <th class="text-bold float-center">Faktor risiko</th>
                                                    <th class="text-bold float-center">Skala</th>
                                                    <th class="text-bold float-center">POIN</th>
                                                    <th class="text-bold float-center">SKOR</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Umur</td>
                                                        <td>Kurang dari 3 tahun<br>3 tahun – 7 tahun <br>3 tahun – 7 tahun <br> Lebih 13 tahun </td>
                                                        <td>4 <br> 3 <br>2 <br>1 </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" name="uvalue" id="uvalue" class="form-control" min="0" placeholder="{{$assesper[0]->umur_resiko}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kelamin</td>
                                                        <td>Laki – laki<br>Wanita</td>
                                                        <td> <br>1 </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" name="jkvalue" id="jkvalue" class="form-control" min="0" placeholder="{{$assesper[0]->jk_resiko}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Diagnosa</td>
                                                        <td>Neurologi<br>Respiratori, dehidrasi, anemia, anorexia, syncope <br>Perilaku <br>lain-lain </td>
                                                        <td>4 <br> 3 <br><br>2 <br>1 </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" name="dvalue" id="dvalue" class="form-control" min="0" placeholder="{{$assesper[0]->diagnosa_resiko}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Gangguan Kognitif</td>
                                                        <td>Keterbatasan daya piker<br>Pelupa, berkurangnya orientasi sekitar <br>Dapat menggunakan daya pikir tanpa hambatan </td>
                                                        <td> 3 <br>2 <br><br>1 </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" name="gkvalue" id="gkvalue" class="form-control" min="0" placeholder="{{$assesper[0]->kognitif_resiko}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Respon terhadap pembedahan, sedasi, dan anestesi</td>
                                                        <td>Dalam 24 jam<br>Dalam 48 jam <br>Lebih dari 48 jam / tidak ada respon </td>
                                                        <td> 3 <br>2 <br>1 </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" name="rvalue" id="rvalue" class="form-control" min="0" placeholder="{{$assesper[0]->respon_resiko}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Penggunaan obat-obatan</td>
                                                        <td>Penggunaan bersamaan sedative, barbiturate, anti depresan, diuretik, narkotik<br>Salah satu dari obat di atas <br>Obatan – obatan lainnya / tanpa obat </td>
                                                        <td> 3 <br><br>2 <br><br>1 </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" name="ovalue" id="ovalue" class="form-control" min="0" placeholder="{{$assesper[0]->obat_resiko}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td> </td>
                                                        <td>Total score</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input readonly type="number" name="totalrisiko1" id="totalrisiko1" class="form-control" min="0" placeholder="{{$assesper[0]->total_resiko_anak}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion" id="accordionExample100">
                        <div class="card">
                            <div class="card-header bg-secondary" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne100" aria-expanded="true" aria-controls="collapseOne100">
                                        <i class="bi bi-ticket-detailed mr-1 ml-1"></i> SKRINING NUTRISI
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne100" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample100">
                                <div class="card-body bg-light">
                                    <div class="row">
                                        @if($assesper[0]->skrining_nutrisi_dws == 'Pasien dewasa menggunakan Malnutrition screening tools (MST)')
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                @if($assesper[0]->skrining_nutrisi_dws == 'Pasien dewasa menggunakan Malnutrition screening tools (MST)')
                                                <input class="form-check-input" type="radio" name="nutrisi_dws" id="nutrisi_dws" value="Pasien dewasa menggunakan Malnutrition screening tools (MST)" checked>
                                                <label class="form-check-label text-bold">Pasien dewasa menggunakan Malnutrition screening tools (MST) </label>
                                                @else
                                                <input class="form-check-input" type="radio" name="nutrisi_dws" id="nutrisi_dws" value="Pasien dewasa menggunakan Malnutrition screening tools (MST)">
                                                <label class="form-check-label text-bold">Pasien dewasa menggunakan Malnutrition screening tools (MST) </label>
                                                @endif
                                            </div>
                                            <table class="table">
                                                <thead class="bg-warning">
                                                    <th class="text-bold float-center">Parameter</th>
                                                    <th class="text-bold float-center"></th>
                                                    <th class="text-bold float-center">POIN</th>
                                                    <th class="text-bold float-center">SKOR</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-bold">Apakah pasien mengalami penurunan berat badan yang tidak direncanakan?</td>
                                                        <td>a. Tidak (tidak terjadi penurunan dalam 6 bulan terakhir) <br> b. Tidak yakin ( tanyakan apakah baju / celana terasa longgar)</td>
                                                        <td>0 <br><br>2</td>

                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" name="rjvalue" id="rjvalue" class="form-control" min="0" placeholder="{{$assesper[0]->penurunan_bb}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td></td>
                                                        <td>c. Ya , berapakah penurunan berat badan tersebut ? <br>1 – 5 Kg <br>6 – 10 kg <br>11 – 15 kg <br>>15 Kg <br> tidak yakin</td>
                                                        <td><br><br>1 <br>2 <br>3 <br>4 <br>2 </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" name="rjvalue" id="rjvalue" class="form-control" min="0" placeholder="{{$assesper[0]->asupan}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold">Apakah asupan makanan pasien buruk akibat nafsu makan yang menurun **? (misalnya asupan makan hanya ¾ dari biasanya)</td>
                                                        <td> a.Tidak <br><br>b.Ya</td>
                                                        <td>0 <br><br>1</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" name="rjvalue" id="rjvalue" class="form-control" min="0" placeholder="{{$assesper[0]->asupan}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td class="text-bold">Sakit berat(***)</td>
                                                        <td>Ya <br> Tidak</td>
                                                        <td> </td>
                                                        <td> </td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td> </td>
                                                        <td>Total score</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input readonly type="number" name="totalnutrisi" id="totalnutrisi" class="form-control" min="0" placeholder="{{$assesper[0]->total_nutrisi_dws}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        @elseif($assesper[0]->skrining_nutrisi_dws == 'pasien anak menggunakan strong kids')
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                @if($assesper[0]->skrining_nutrisi_dws == 'pasien anak menggunakan strong kids')
                                                <input class="form-check-input" type="radio" name="nutrisi_ank" id="nutrisi_ank" value="pasien anak menggunakan strong kids" checked>
                                                <label class="form-check-label text-bold">pasien anak menggunakan strong kids </label>
                                                @else
                                                <input class="form-check-input" type="radio" name="nutrisi_ank" id="nutrisi_ank" value="pasien anak menggunakan strong kids">
                                                <label class="form-check-label text-bold">pasien anak menggunakan strong kids </label>
                                                @endif
                                            </div>
                                            <table class="table">
                                                <thead class="bg-info">
                                                    <th class="text-bold float-center">PERTANYAAN</th>
                                                    <th class="text-bold float-center">ya/tidak</th>
                                                    <th class="text-bold float-center">POIN</th>
                                                    <th class="text-bold float-center">SKOR</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-bold">1. Apakah pasien tampak kurus</td>
                                                        <td>Ya<br>Tidak </td>
                                                        <td>1 <br> 0 </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" name="kuvalue" id="kuvalue" class="form-control" min="0" placeholder="{{$assesper[0]->tampak_kurus}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold">2. Apakah ada penurunan BB selama satu bulan terakhir (berdasarkan penilaian objektif data BB bila ada / penilaian subjektif dari orang tua pasien ATAU untuk bayi < 1 tahun : BB naik selama 3 bulan terakhir)</td>
                                                        <td>Ya<br><br>Tidak </td>
                                                        <td>1 <br><br> 0 </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" name="uvalue" id="uvalue" class="form-control" min="0" placeholder="{{$assesper[0]->bb_sebulan}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold">3. Apakah terdapat salah satu dari kondisi berikut ? <br>• Diari > kali/hari dan atau muntah > 3 kali/hari dalam seminggu terakhir <br>• Asupan makanan berkurang selama 1 minggu terakhir</td>
                                                        <td>Ya<br><br>Tidak </td>
                                                        <td>1 <br><br> 0 </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="number" name="uvalue" id="uvalue" class="form-control" min="0" placeholder="{{$assesper[0]->kondisi}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td> </td>
                                                        <td>Total score</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input readonly type="number" name="totalnutrisi1" id="totalnutrisi1" class="form-control" min="0" placeholder="{{$assesper[0]->total_nutrisi_ank}}" required />
                                                            </div>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header" style="background-color: rgba(110, 245, 137, 0.745)">
                        <i class="bi bi-book mr-1 ml-1"></i>(A) ASSESSMEN
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold">DIAGNOSA KEPERAWATAN</td>
                                <td>
                                    <div class="note-editable card-block" contenteditable="true" role="textbox" aria-multiline="true" spellcheck="true" autocorrect="true">
                                        <ul>
                                            @if($assesper[0]->diagnosa_perawat1 == NULL)
                                            @else
                                            <li> {{$assesper[0]->diagnosa_perawat1}}</li>
                                            @endif
                                            @if($assesper[0]->diagnosa_perawat2 == NULL)
                                            @else
                                            <li> {{$assesper[0]->diagnosa_perawat2}}</li>
                                            @endif
                                            @if($assesper[0]->diagnosa_perawat3 == NULL)
                                            @else
                                            <li> {{$assesper[0]->diagnosa_perawat3}}</li>
                                            @endif
                                            @if($assesper[0]->diagnosa_perawat4 == NULL)
                                            @else
                                            <li> {{$assesper[0]->diagnosa_perawat4}}</li>
                                            @endif
                                            @if($assesper[0]->diagnosa_perawat5 == NULL)
                                            @else
                                            <li> {{$assesper[0]->diagnosa_perawat5}}</li>
                                            @endif
                                            @if($assesper[0]->diagnosa_perawat6 == NULL)
                                            @else
                                            <li> {{$assesper[0]->diagnosa_perawat6}}</li>
                                            @endif
                                            @if($assesper[0]->diagnosa_perawat7 == NULL)
                                            @else
                                            <li> {{$assesper[0]->diagnosa_perawat7}}</li>
                                            @endif
                                            @if($assesper[0]->diagnosa_perawat8 == NULL)
                                            @else
                                            <li> {{$assesper[0]->diagnosa_perawat8}}</li>
                                            @endif
                                            @if($assesper[0]->diagnosa_perawat9 == NULL)
                                            @else
                                            <li> {{$assesper[0]->diagnosa_perawat9}}</li>
                                            @endif
                                            @if($assesper[0]->diagnosa_perawat10 == NULL)
                                            @else
                                            <li> {{$assesper[0]->diagnosa_perawat10}}</li>
                                            @endif
                                            @if($assesper[0]->diagnosa_perawat11 == NULL)
                                            @else
                                            <li> {{$assesper[0]->diagnosa_perawat11}}</li>
                                            @endif
                                            @if($assesper[0]->diagnosa_perawat12 == NULL)
                                            @else
                                            <li> {{$assesper[0]->diagnosa_perawat12}}</li>
                                            @endif
                                            @if($assesper[0]->diagnosa_perawat == NULL)
                                            @else
                                            <li> {{$assesper[0]->diagnosa_perawat}}</li>
                                            @endif
                                        </ul>

                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="card-header" style="background-color: rgba(110, 245, 137, 0.745)">
                        <i class="bi bi-book mr-1 ml-1"></i>(P) PLANNING
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">RENCANA ASUHAN KEPERAWATAN</td>
                                <td>
                                    <div class="input-group">
                                        <textarea class="form-control" id="planning" name="planning" placeholder="">{{$assesper[0]->rencana_asuhan}}</textarea>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">KOLABORASI </td>
                                <td>
                                    <div class="note-editable card-block" contenteditable="true" role="textbox" aria-multiline="true" spellcheck="true" autocorrect="true">
                                        <ul>
                                            @if($assesper[0]->kolaborasi_1 == NULL)
                                            @else
                                            <li> {{$assesper[0]->kolaborasi_1}}</li>
                                            @endif
                                            @if($assesper[0]->kolaborasi_2 == NULL)
                                            @else
                                            <li> {{$assesper[0]->kolaborasi_2}}</li>
                                            @endif
                                            @if($assesper[0]->kolaborasi_3 == NULL)
                                            @else
                                            <li> {{$assesper[0]->kolaborasi_3}}</li>
                                            @endif
                                            @if($assesper[0]->kolaborasi_4 == NULL)
                                            @else
                                            <li> {{$assesper[0]->kolaborasi_4}}</li>
                                            @endif
                                            @if($assesper[0]->kolaborasi_5 == NULL)
                                            @else
                                            <li> {{$assesper[0]->kolaborasi_5}}</li>
                                            @endif
                                            @if($assesper[0]->kolaborasi_6 == NULL)
                                            @else
                                            <li> {{$assesper[0]->kolaborasi_6}}</li>
                                            @endif
                                            @if($assesper[0]->kolaborasi_7 == NULL)
                                            @else
                                            <li> {{$assesper[0]->kolaborasi_7}}</li>
                                            @endif
                                            @if($assesper[0]->kolaborasi_8 == NULL)
                                            @else
                                            <li> {{$assesper[0]->kolaborasi_8}}</li>
                                            @endif
                                            @if($assesper[0]->kolaborasi_9 == NULL)
                                            @else
                                            <li> {{$assesper[0]->kolaborasi_9}}</li>
                                            @endif
                                            @if($assesper[0]->kolaborasi_10 == NULL)
                                            @else
                                            <li> {{$assesper[0]->kolaborasi_10}}</li>
                                            @endif
                                            @if($assesper[0]->kolaborasi_11 == NULL)
                                            @else
                                            <li> {{$assesper[0]->kolaborasi_11}}</li>
                                            @endif
                                            @if($assesper[0]->kolaborasi_12 == NULL)
                                            @else
                                            <li> {{$assesper[0]->kolaborasi_12}}</li>
                                            @endif
                                            @if($assesper[0]->kolaborasi_13 == NULL)
                                            @else
                                            <li> {{$assesper[0]->kolaborasi_13}}</li>
                                            @endif
                                            @if($assesper[0]->kolaborasi_14 == NULL)
                                            @else
                                            <li> {{$assesper[0]->kolaborasi_14}}</li>
                                            @endif @if($assesper[0]->kolaborasi_15 == NULL)
                                            @else
                                            <li> {{$assesper[0]->kolaborasi_15}}</li>
                                            @endif
                                        </ul>

                                    </div>

                                </td>

                            </tr>
                        </tbody>
                    </table>
                    <div class="card-header" style="background-color: rgba(110, 245, 137, 0.745)">
                        <i class="bi bi-book mr-1 ml-1"></i>(I) IMPLEMENTATION
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">RENCANA ASUHAN KEPERAWATAN</td>
                                <td>
                                    <div class="input-group">
                                        <textarea class="form-control" id="planning" name="planning" placeholder="">{{$assesper[0]->rencana_asuhan}}</textarea>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Waktu </td>
                                <td class="text-bold font-italic">
                                    Tindakan

                                </td>

                            </tr>
                            @foreach($tindakan1 as $t)
                            <tr>
                                <td>{{$t->waktu_tindakan}} </td>
                                <td>
                                    {{$t->tindakan_keperawatan}}

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @endif
                </div>
            </div>
            <div class="col-md-6 mt-2">
                <div class="card-header bg-success float-center">
                    <p class="text-bold ">Resume Dokter</p>

                </div>
                <form>
                    @if ($assesdok == null)
                    <h1> belum ada CPPT</h1>
                    @else

                    <form action="" class="formerm">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-bold font-italic">Tanggal Kunjungan</td>
                                    <td>
                                        <h5 class="text-bold">{{$assesdok[0]->tgl_kunjungan}}</h5>

                                    </td>
                                    <td class="text-bold font-italic">Tanggal Pengkajian</td>
                                    <td>
                                        <h5 class="text-bold">{{$assesdok[0]->tgl_input}}</h5>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold font-italic">Sumber Data</td>
                                    <td colspan="3">
                                        <textarea class="form-control" id="subyek" name="subyek" placeholder="">{{ $assesdok[0]->sumber_data }}</textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-bold font-italic">Macam Kasus</td>
                                    <td colspan="3">
                                        <textarea class="form-control" id="macam_kasus" name="macam_kasus" placeholder="">{{ $assesdok[0]->macam_kasus }}</textarea>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                        <!-- assesmen dokter -->
                        <div class="card-header float-center" style="background-color: rgba(110, 245, 137, 0.745)">
                            <i class="bi bi-book mr-1 ml-1"></i> (S) SUBYEKTIF

                        </div>
                        <table class="table mt-2">
                            <tbody>
                                <tr>
                                    <td class="text-bold font-italic">KELUHAN UTAMA</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="subyek" name="subyek" placeholder="">{{ $assesdok[0]->keluhan_utama }}</textarea>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold font-italic">ANAMNESA</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="anamnesa" name="anamnesa" placeholder="">{{$assesdok[0]->anamnesa}}</textarea>

                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-bold font-italic">RIWAYAT PENYAKIT</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="anamnesa" name="anamnesa" placeholder="">{{$assesdok[0]->riwayat_penyakit}}</textarea>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="card-header float-center" style="background-color: rgba(110, 245, 137, 0.745)">
                            <i class="bi bi-book mr-1 ml-1"></i> (O) OBYEKTIF

                        </div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-bold font-italic">Primary Survey</td>
                                    <td colspan="">
                                        <textarea class="form-control" id="primary" name="primary" rows="7">{{ $assesdok[0]->primary_survey }}</textarea>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold font-italic">Secondary Survey</td>
                                    <td colspan="">
                                        <textarea class="form-control" id="secondary" name="secondary" rows="7">{{$assesdok[0]->secondary_survey}}</textarea>

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="card-header float-center" style="background-color: rgba(110, 245, 137, 0.745)">
                            <i class="bi bi-book mr-1 ml-1"></i> (A) ASSESSMEN

                        </div>
                        <table class="table">
                            <tbody>

                                <tr>
                                    <td class="text-bold font-italic">Diagnosa Kerja</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="diagnosakerja" name="diagnosakerja" placeholder="">{{$assesdok[0]->diagnosa_kerja}}</textarea>

                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="card-header float-center" style="background-color: rgba(110, 245, 137, 0.745)">
                            <i class="bi bi-book mr-1 ml-1"></i> (P) PLANNING

                        </div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td colspan="2" class="text-bold font-italic">TATA LAKSANA GP</td>

                                </tr>
                                <tr>
                                    <td class="text-bold font-italic"> {{$assesdok[0]->nama_paramedis}}</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="talaksana" name="talaksana" placeholder="">{{$assesdok[0]->tata_laksana}}</textarea>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold font-italic" colspan="2">Tatalaksana DPJP</td>

                                </tr>
                                @foreach ($dpjp as $d)


                                <tr>
                                    <td class="text-bold font-italic">{{$d->nama_dpjp}}</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="talaksanadpjp" name="talaksanadpjp" placeholder="">{{$d->tindakan_kedokteran}}</textarea>

                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="text-bold font-italic">Evaluasi (30 menit pertama)</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="tigap" name="tigap" placeholder="">{{$assesdok[0]->tiga_pertama}}</textarea>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold font-italic">Evaluasi (30 menit kedua)</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="tigak" name="tigak" placeholder="">{{$assesdok[0]->tiga_kedua}}</textarea>

                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <!-- Cara Keluar -->

                        <div class="card-header bg-secondary float-center mb-2">
                            <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Cara Keluar Dari Instalasi
                            Gawat
                            Darurat

                        </div>
                        <table class="table">
                            <tr>
                                <td class="text-bold font-italic">KELUAR IGD</td>

                                <td>
                                    <textarea class="form-control" id="alpul1" name="alpul1" rows="2" placeholder="">{{ $assesdok[0]->cara_pulang }}</textarea>

                                </td>
                            </tr>
                        </table>


                        <!-- Keadaan Pasien  -->

                        <div class="card-header bg-secondary float-center mb-2">
                            <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Keadaan Pasien Saat Keluar
                        </div>
                        <table class="table">
                            <tr>
                                <td class="text-bold font-italic">Keadaan Pasien</td>

                                <td>
                                    <textarea class="form-control" id="alpul1" name="alpul1" rows="2" placeholder="">{{ $assesdok[0]->keadaan_pulang }} </textarea>

                                </td>
                            </tr>
                        </table>



                    </form>




                    @endif
                </form>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <h4>RESEP OBAT</h4>
                <div class="table tabelobat ">
                    <table id="tableobat">
                        <thead class="bg-warning">
                            <th>Kode</th>
                            <th>Nama Obat</th>
                            <th>qty</th>
                            <th>Aturan Pakai</th>
                        </thead>
                        <tbody>
                            @foreach($riwayatobat as $ob => $o)
                            <tr>
                                <td>{{$o->kode_layanan_header}}</td>
                                <td>{{$o->nama_barang}}</td>
                                <td>{{$o->jumlah_layanan}}</td>
                                <td>{{$o->aturan_pakai}}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <h4>REKONSILIASI OBAT</h4>
                <table id="tableobatrekon" class="table">
                    <thead class="bg-info">
                        <th>Kode Detail Obat</th>
                        <th>Nama Obat</th>
                        <th>Aturan Pakai</th>
                        <th>Lanjut</th>

                    </thead>
                    <tbody>
                        @foreach ($riwayatrekonobat as $ri => $r)
                        <tr>
                            <td>{{$r->kode_detail_obat}}</td>

                            <td>{{$r->nama_obat}}</td>
                            <td>{{$r->aturan_pakai}}</td>
                            <td>
                                <input type="text" name="tinjut" id="tinjut" value="{{$r->lanjut}}" class="lanjut form-control">
                                <!-- <input type="text" name="kodetail" id="kodetail" value="{{$r->kode_detail_obat}}" class="lanjut form-control"> -->



                            </td>

                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
        <div class="row" style="margin-left: 10px">
            <div class="col-md-6">
                <h4>Order Laboratorium</h4>
                <table id="tablelab" class="table table-bordered">
                    <thead>
                        <th style="width: 10px">Kode Layanan Header</th>
                        <th>Nama Tindakan</th>

                    </thead>
                    <tbody>
                        @foreach ($riwayatorderlab as $lab=>$l )

                        <tr>
                            <td>{{$l->kode_layanan_header}}</td>
                            <td>{{$l->nama_tindakan}}</td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="col-md-5" style="margin-left: 20px">
                <h4>Order Radiologi</h4>
                <table id="tablerad" class="table table-bordered">
                    <thead>
                        <th style="width: 10px">Kode Layanan Header</th>
                        <th>Nama Tindakan</th>
                    </thead>
                    <tbody>
                        @foreach ($riwayatorderrad as $rad=>$r )

                        <tr>
                            <td>{{$r->kode_layanan_header}}</td>
                            <td>{{$r->nama_tindakan}}</td>


                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if ($hasil == null)
                <h3 class="text-bold">Belum ada Upload</h3>
                @else
                @foreach ($hasil as $key => $h)

                <div class="accordion" id="accordionExample3" style="margin-top: 30px;">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Hasil Upload <h5 class="float-right">{{$h->tgl_kunjungan}}</h5>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample3">
                            <div style="margin-top: 20px;" class="card-body">
                                <div class="row">
                                    <table class="table">
                                        <tbody>
                                            <tr>

                                                <td> <label for="exampleInputFile"> Hasil EKG</label></td>
                                                <td>
                                                    <img width="1000px" src="{{ url('../../files/' . $h->hasil_ekg) }}" alt="" class="mr-3">

                                                </td>

                                            </tr>
                                            <tr>

                                                <td> <label for="exampleInputFile"> Surat Penolakan Perawatan</label></td>
                                                <td>
                                                    <img width="1000px" src="{{ url('../../files/' . $h->surat_penolakan) }}" alt="" class="mr-3">

                                                </td>
                                            </tr>
                                            <tr>

                                                <td> <label for="exampleInputFile"> Informasi Tindakan Dokter</label></td>
                                                <td>
                                                    <img width="1000px" src="{{ url('../../files/' . $h->informasi_tindakan) }}" alt="" class="mr-3">

                                                </td>
                                            </tr>
                                            <tr>

                                                <td> <label for="exampleInputFile"> Transfer Pasien</label></td>
                                                <td>
                                                    <img width="1000px" src="{{ url('../../files/' . $h->transfer_pasien) }}" alt="" class="mr-3">

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @endforeach

                @endif
            </div>
            <div class="col-md-12">
                @if ($rencanaplg == null)
                <h3 class="text-bold">Belum ada rencana Pulang</h3>
                @else
                <div class="accordion" id="accordionExample4" style="margin-top: 30px;">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Rencana Pulang <h5 class="float-right">{{$h->tgl_kunjungan}}</h5>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample4">
                            <div style="margin-top: 20px;" class="card-body">
                                <div class="row">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="text-bold">
                                                    Usia lanjut (60 tahun atau lebih)
                                                </td>
                                                <td>{{$rencanaplg[0]->usia_lanjut}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold">
                                                    Hambatan Mobilisasi
                                                </td>
                                                <td>{{$rencanaplg[0]->hambatan}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold">
                                                    Membutuhkan pelayanan medis dan perawatan
                                                    berkelanjutan
                                                </td>
                                                <td>{{$rencanaplg[0]->pelayanan_medis}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold">
                                                    Tergantung dengan orang lain dalam aktifitas harian
                                                </td>
                                                <td>{{$rencanaplg[0]->tergantung}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold">
                                                    Transportasi Pulang
                                                </td>
                                                <td>{{$rencanaplg[0]->pendamping}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold">
                                                    Diet Khusus
                                                </td>
                                                <td>{{$rencanaplg[0]->diet_khusus}}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold">
                                                    Perawatan / peralatan medis yang dilanjutkan di rumah
                                                </td>
                                                <td>
                                                    @if($rencanaplg[0]->peralatan_medis1 == 'Oksigen Portable')
                                                    {{$rencanaplg[0]->peralatan_medis1}}
                                                    @else
                                                    @endif
                                                    @if($rencanaplg[0]->peralatan_medis2 == 'Tracheostomi')
                                                    ,{{$rencanaplg[0]->peralatan_medis2}}
                                                    @else
                                                    @endif
                                                    @if($rencanaplg[0]->peralatan_medis3 == 'Dower-Kateter')
                                                    ,{{$rencanaplg[0]->peralatan_medis3}}
                                                    @else
                                                    @endif
                                                    @if($rencanaplg[0]->peralatan_medis4 == 'NGT')
                                                    ,{{$rencanaplg[0]->peralatan_medis4}}
                                                    @else
                                                    @endif

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold">
                                                    Alat bantu yang dipakai di rumah
                                                </td>
                                                <td>
                                                    @if($rencanaplg[0]->alat_bantu1 == 'Kursi Roda')
                                                    - {{$rencanaplg[0]->alat_bantu1}} <br>
                                                    @else
                                                    @endif
                                                    @if($rencanaplg[0]->alat_bantu2 == 'Tongkat')
                                                    - {{$rencanaplg[0]->alat_bantu2}} <br>
                                                    @else
                                                    @endif
                                                    @if($rencanaplg[0]->alat_bantu == null)

                                                    @else
                                                    - {{$rencanaplg[0]->alat_bantu}}
                                                    @endif



                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-bold">
                                                    Pendidikan Kesehatan Untuk di rumah
                                                </td>
                                                <td>
                                                    @if($rencanaplg[0]->pendidikan_kesehatan1 == 'Balutan jangan basah / kotor')
                                                    - {{$rencanaplg[0]->pendidikan_kesehatan1}} <br>
                                                    @else
                                                    @endif
                                                    @if($rencanaplg[0]->pendidikan_kesehatan2 == 'Hindari mengangkat beban berat')
                                                    - {{$rencanaplg[0]->pendidikan_kesehatan2}} <br>
                                                    @else
                                                    @endif
                                                    @if($rencanaplg[0]->pendidikan_kesehatan3 == 'Jangan mengendarai kendaraan sendiri / menyupir')
                                                    - {{$rencanaplg[0]->pendidikan_kesehatan3}} <br>
                                                    @else
                                                    @endif
                                                    @if($rencanaplg[0]->pendidikan_kesehatan4 == 'Cek Laboratorium sebelum kontrol')
                                                    - {{$rencanaplg[0]->pendidikan_kesehatan4}} <br>
                                                    @else
                                                    @endif
                                                    @if($rencanaplg[0]->pendidikan_kesehatan5 == 'Jangan menaiki tangga lebih dari dua atau tiga kali sehari')
                                                    - {{$rencanaplg[0]->pendidikan_kesehatan5}} <br>
                                                    @else
                                                    @endif
                                                    @if($rencanaplg[0]->pendidikan_kesehatan6 == 'Batasi pekerjaan rumah tangga dan kegiatan sosial melakukan aktifitas secara bertahap sampai kesehatan pulih kembali')
                                                    - {{$rencanaplg[0]->pendidikan_kesehatan6}} <br>
                                                    @else
                                                    @endif
                                                    @if($rencanaplg[0]->pendidikan_kesehatan7 == 'Jika muncul keluhan nyeri / rasa sakit tidak berkurang dengan obat anda atau menjadi lebih- segera datang ke RS')
                                                    - {{$rencanaplg[0]->pendidikan_kesehatan7}} <br>
                                                    @else
                                                    @endif
                                                    @if($rencanaplg[0]->pendidikan_kesehatan8 == 'Perlu perawatan lanjutan ke puskesmas / Rumah Sakit terdekat')
                                                    - {{$rencanaplg[0]->pendidikan_kesehatan8}} <br>
                                                    @else
                                                    @endif
                                                    @if($rencanaplg[0]->pendidikan_kesehatan == null)
                                                    @else
                                                    - {{$rencanaplg[0]->pendidikan_kesehatan}}

                                                    @endif



                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="tablelab" class="table table-bordered">
                    <thead>
                        <th>Nama Perawat</th>
                        <th>Dokter DPJP</th>
                        <th>Dokter GP</th>
                    </thead>
                    <tbody>
                        @if($assesper == null)
                        <td class="text-bold">
                        </td>

                        @else
                        <td class="text-bold">
                            {{$assesper[0]->nama_perawat}}
                        </td>
                        @endif

                        @if($assesdok == null)
                        <td class="text-bold">
                        </td>
                        <td class="text-bold">
                        </td>
                        @else

                        <td class="text-bold">
                            {{$assesdok[0]->nama_dpjp}}
                        </td>
                        <td class="text-bold">
                            {{$assesdok[0]->nama_paramedis}}
                        </td>
                        @endif


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif


    <script>
        $(function() {
            $("#tableobat").DataTable({
                "responsive": false,
                "lengthChange": false,
                "pageLength": 3,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            });
        });
        $(function() {
            $("#tableobatrekon").DataTable({
                "responsive": false,
                "lengthChange": false,
                "pageLength": 3,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            });
        });
        $(function() {
            $("#tablelab").DataTable({
                "responsive": false,
                "lengthChange": false,
                "pageLength": 3,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            });
        });
        $(function() {
            $("#tablerad").DataTable({
                "responsive": false,
                "lengthChange": false,
                "pageLength": 3,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            });
        });

        $(".cetakresumecpptdokter").click(function() {
            kj = $('#kj').val()
            norm = $('#norm').val()





            Swal.fire({
                title: "Apakah ingin print Resume Assesmen?",
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

                            kj,
                            norm

                        },
                        url: '<?= route('cetakresumecpptdokter') ?>',
                        error: function(data) {
                            spinner.hide()
                            Swal.fire({
                                icon: 'error',
                                title: 'Ooops....',
                                text: 'Sepertinya ada masalah......',
                                footer: ''
                            })
                        },
                        success: function(data) {
                            spinner.hide()
                            Swal.fire({
                                icon: 'success',
                                title: 'OK',
                                text: data.message,
                                footer: ''
                            })
                            cetaktresumecppt(data.kj, data.norm)

                        }
                    });
                }
            })
            return false;
        });


        function cetaktresumecppt(kj, norm) {
            window.open('cetaktresumecppt/' + kj + '/' + norm);

        }

         $(".cetakassesperawat").click(function() {
            kj = $('#kj').val()
            norm = $('#norm').val()





            Swal.fire({
                title: "Apakah ingin print Assesmen Perawat?",
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

                            kj,
                            norm

                        },
                        url: '<?= route('cetakassesperawat') ?>',
                        error: function(data) {
                            spinner.hide()
                            Swal.fire({
                                icon: 'error',
                                title: 'Ooops....',
                                text: 'Sepertinya ada masalah......',
                                footer: ''
                            })
                        },
                        success: function(data) {
                            spinner.hide()
                            Swal.fire({
                                icon: 'success',
                                title: 'OK',
                                text: data.message,
                                footer: ''
                            })
                            cetakassesmenperawat(data.kj, data.norm)

                        }
                    });
                }
            })
            return false;
        });


        function cetakassesmenperawat(kj, norm) {
            window.open('cetakassesmenperawat/' + kj + '/' + norm);

        }

        
    </script>