<div class="card-header bg-warning">
    <h3 class="card-title">ASSESMENT MEDIS INSTALASI GAWAT DARURAT KEBIDANAN (IGDK) NEONATUS</h3>

</div>

<div class="card-body">
    <div class="card">
        <input type="text" name="ku" id="ku" value="{{ $ku }}" hidden>
        <input type="text" name="kp" id="kp" value="{{ $kp }}" hidden>
        <input type="text" name="counter" id="counter" value="{{ $counter }}" hidden>
        <div class="card-header text-bold bg-warning" style="text-align: center;">
            <div class="row">
                <div class="col-md-4"><a class=" btn btn-info btn-block " id="hasillabo">
                        <i class="bi bi-journal-text"></i>
                        Hasil laboratorium
                    </a></div>
                <div class="col-md-4"><a class=" btn btn-info btn-block " id="hasilradio">
                        <i class="bi bi-journal-text"></i>
                        Hasil Radiologi
                    </a></div>
                <div class="col-md-4"><a class=" btn btn-info btn-block " id="hasilpa">
                        <i class="bi bi-journal-text"></i>
                        Hasil Patologi Anatomi
                    </a></div>
            </div>
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
                        <h5 class="text-bold">{{$now}}</h5>

                    </td>
                </tr>
                <tr>
                    <td class="text-bold font-italic">Sumber Data</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Pasien Sendiri">
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
                    <td class="text-bold font-italic">Macam Kasus</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="macamkasus" id="macamkasus" value="Non Trauma">
                            <label class="form-check-label" for="inlineRadio1">Non Trauma</label>
                        </div>

                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="macamkasus" id="macamkasus" value="Trauma">
                            <label class="form-check-label" for="inlineRadio2">Trauma </label>
                        </div>
                    </td>
                    <td>
                        <select class="form-control select2" name="trauma" id="trauma">
                            <option value=""> -- Pilih Trauma --</option>
                            <option value="Keecelakaan Lalu Lintas">Keecelakaan Lalu Lintas
                            </option>
                            <option value="Kekerasan Dalam Rumah Tangga">Kekerasan Dalam Rumah Tangga
                            </option>
                            <option value="Pasien Non Bedah">Pasien Non Bedah
                            </option>
                            <option value="Kecelakaan Kerja">Kecelakaan Kerja
                            </option>
                            <option value="Child Abuse (Kekerasan Anak)">Child Abuse (Kekerasan Anak)
                            </option>


                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        @if ($assesdok == null)

        <div class="accordion" id="accordionExample92">
            <div class="card">
                <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse" data-target="#collapseOne92" aria-expanded="true" aria-controls="collapseOne92">
                            <i class="bi bi-book mr-1 ml-1"></i>(S) SUBYEKTIF
                        </button>
                    </h2>
                </div>

                <div id="collapseOne92" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample92">
                    <div class="card-body bg-light">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-bold font-italic">KELUHAN UTAMA</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="subyek" name="subyek" placeholder=""></textarea>

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
                        <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse" data-target="#collapseOne93" aria-expanded="true" aria-controls="collapseOne92">
                            <i class="bi bi-book mr-1 ml-1"></i>(O) OBYEKTIF
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
                                                @if ($ttv == null)
                                                <tr>
                                                    <td class="text-bold font-italic">Keadaan Umum</td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Baik">
                                                            <label class="form-check-label">Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Sedang">
                                                            <label class="form-check-label">Sedang</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Buruk">
                                                            <label class="form-check-label">Buruk</label>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">Kesadaran</td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="13-15">
                                                            <label class="form-check-label">13-15</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="9-12">
                                                            <label class="form-check-label">9-12</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="3-8">
                                                            <label class="form-check-label">3-8</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold font-italic">Tekanan Darah</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Tekanan darah pasien ..." aria-label="Recipient's username" id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2" value="">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">mmHg</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">Frekuensi Nadi</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Frekuensi nadi pasien ..." id="frekuensinadi" name="frekuensinadi" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">
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
                                                            <input type="text" class="form-control" placeholder="Frekuensi Nafas Pasien ..." name="frekuensinafas" id="frekuensinafas" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">x/menit</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">Suhu</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Suhu tubuh pasien ..." aria-label="Suhu tubuh pasien" name="suhutubuh" id="suhutubuh" aria-describedby="basic-addon2" value="">
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
                                                            <input type="text" class="form-control" placeholder="Berat badan Pasien ..." name="beratbadan" id="beratbadan" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">Kg</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">Tinggi Badan</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Tinggi Badan pasien ..." aria-label="Suhu tubuh pasien" name="tb" id="tb" aria-describedby="basic-addon2" value="">
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
                                                            <input type="text" class="form-control" placeholder="Berat badan Pasien ..." name="gcs" id="gcs" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2"></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">SPO2</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder=" SPO2 pasien ..." aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2"></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <td class="text-bold font-italic">Keadaan Umum</td>
                                                    <td>
                                                        @if ($ttv[0]->keadaan_umum == 'Baik')
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Baik" checked>
                                                            <label class="form-check-label">Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Sedang">
                                                            <label class="form-check-label">Sedang</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Buruk">
                                                            <label class="form-check-label">Buruk</label>
                                                        </div>
                                                        @elseif ($ttv[0]->keadaan_umum == 'Sedang')
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Baik">
                                                            <label class="form-check-label">Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Sedang" checked>
                                                            <label class="form-check-label">Sedang</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Buruk">
                                                            <label class="form-check-label">Buruk</label>
                                                        </div>
                                                        @else
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Baik">
                                                            <label class="form-check-label">Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Sedang">
                                                            <label class="form-check-label">Sedang</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Buruk" checked>
                                                            <label class="form-check-label">Buruk</label>
                                                        </div>
                                                        @endif



                                                    </td>
                                                    <td class="text-bold font-italic">Kesadaran</td>
                                                    <td>
                                                        @if ($ttv[0]->kesadaran == '13-15')
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="13-15" checked>
                                                            <label class="form-check-label">13-15</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="9-12">
                                                            <label class="form-check-label">9-12</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="3-8">
                                                            <label class="form-check-label">3-8</label>
                                                        </div>
                                                        @elseif ($ttv[0]->kesadaran == '9-12')
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="13-15">
                                                            <label class="form-check-label">13-15</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="9-12" checked>
                                                            <label class="form-check-label">9-12</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="3-8">
                                                            <label class="form-check-label">3-8</label>
                                                        </div>
                                                        @else
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="13-15">
                                                            <label class="form-check-label">13-15</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="9-12">
                                                            <label class="form-check-label">9-12</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="3-8" checked>
                                                            <label class="form-check-label">3-8</label>
                                                        </div>
                                                        @endif

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold font-italic">Tekanan Darah</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Tekanan darah pasien ..." aria-label="Recipient's username" id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2" value="{{ $ttv[0]->tekanan_darah }}">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">mmHg</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">Frekuensi Nadi</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Frekuensi nadi pasien ..." id="frekuensinadi" name="frekuensinadi" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ $ttv[0]->frekuensi_nadi }}">
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
                                                            <input type="text" class="form-control" placeholder="Frekuensi Nafas Pasien ..." name="frekuensinafas" id="frekuensinafas" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ $ttv[0]->frekuensi_nafas }}">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">x/menit</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">Suhu</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Suhu tubuh pasien ..." aria-label="Suhu tubuh pasien" name="suhutubuh" id="suhutubuh" aria-describedby="basic-addon2" value="{{ $ttv[0]->suhu }}">
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
                                                            <input type="text" class="form-control" placeholder="Berat badan Pasien ..." name="beratbadan" id="beratbadan" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ $ttv[0]->berat_badan }}">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">Kg</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">Umur</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Umur pasien ..." aria-label="Suhu tubuh pasien" name="usia" id="usia" aria-describedby="basic-addon2" value="{{ $ttv[0]->umuR }}">
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
                                                            <input type="text" class="form-control" placeholder="Berat badan Pasien ..." name="gcs" id="gcs" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ $ttv[0]->GCS }}">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2"></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">SPO2</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder=" SPO2 pasien ..." aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{ $ttv[0]->SPO2 }}">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2"></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <table class="table">
                                    <tr>
                                        <td class="text-bold font-italic">PEMERIKSAAN FISIK</td>
                                        <td>

                                            <textarea class="form-control" id="pemfis" name="pemfis" placeholder="Ketik PEMERIKSAAN FISIK ..."></textarea>

                                        </td>
                                    </tr>
                                </table>
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
                            <i class="bi bi-book mr-1 ml-1"></i>(A) ASSESSMEN
                        </button>
                    </h2>
                </div>

                <div id="collapseOne94" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample94">
                    <div class="card-body bg-light">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td colspan="2">


                                        <form id="dynamic-form" class="formtindakandp">
                                            <div class="field_wrapper">
                                                <div class="row">


                                                    <div class="col-md-2">
                                                        <a class="btn btn-success" href="javascript:void(0);" id="add_button" title="Add field">TAMBAH</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-bold font-italic">DIAGNOSA </td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="diagnosa" name="diagnosa" placeholder=""></textarea>

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
                                    <td class="text-bold font-italic">TATA LAKSANA</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="planning" name="planning" placeholder=""></textarea>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- hasillab -->
        <div id="hasillab" class="modal">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">
                <span class="close float-right">&times;</span>
                @if ($cek1 == null)
                <h4>Tidak ada Hasil Laboratorium</h4>
                @else
                @foreach ($cek1 as $c)
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <iframe src="//192.168.2.74/smartlab_waled/his/his_report?hisno={{ $c->kode_layanan_header }}" width="1350px" height="650px"></iframe>
                    </div>
                </div>
                @endforeach
                @endif
            </div>

        </div>
        <!-- hasilradiologi -->
        <div id="hasilradioo" class="modall">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">

                <span class="closee float-right">&times;</span>
                @if ($cek == null)
                <h4>Tidak ada Hasil Radiologi</h4>
                @else
                @foreach ($cek as $c)
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <iframe src="http://192.168.10.17/ZFP?mode=proxy&lights=on&titlebar=on#View&ris_exam_id={{ $c->acc_number }}&un=radiologi&pw=YnanEegSoQr0lxvKr59DTyTO44qTbzbn9koNCrajqCRwHCVhfQAddGf%2f4PNjqOaV" width="1100px" height="1000px"></iframe>
                        <iframe src="http://192.168.10.17/ZFP?mode=proxy&lights=on&titlebar=on#View&ris_pat_id={{ $c->no_rm }}&un=radiologi&pw=YnanEegSoQr0lxvKr59DTyTO44qTbzbn9koNCrajqCRwHCVhfQAddGf%2f4PNjqOaV" width="100%" height="600px"></iframe>

                        <iframe src="https://192.168.2.233/expertise/cetak0.php?IDs={{ $c->id_header }}&IDd={{ $c->id_detail }}&tgl_cetak={{ $c->tanggalnya }}" width="1000px" height="600px"></iframe>

                    </div>
                </div>
                @endforeach
                @endif

            </div>

        </div>
        <!-- hasillapa -->
        <div id="hasillabpa" class="modalll">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">

                <span class="closeee float-right">&times;</span>
                @if ($cekpa == null)
                <h4>Tidak ada Hasil Lab PA</h4>
                @else
                @foreach ($cekpa as $pa => $p)
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Hasil Expertise Patologi Anatomi
                            {{ $p->tgl_baca }}
                        </h3>
                    </div>

                    <div class="card-body">
                        <div class="note-editable card-block" contenteditable="true" role="textbox" aria-multiline="true" spellcheck="true" autocorrect="true">
                            <h1><u>{{ $p->nama_px }}
                                </u></h1>
                            <h4>{{ $p->kode_header }}</h4>
                            <p>{{ $p->hasil }}</p>
                            <ul>
                                <li>{{ $p->tipe }}</li>
                                <li>{{ $p->diagnostik_klinik }}</li>
                                <li>{{ $p->diagnostik_pasca_bedah }}</li>
                            </ul>
                            <p>Dokter Baca</p>
                            <p>{{ $p->nama_dokter }}</p>
                        </div>
                    </div>



                </div>
                @endforeach
                @endif

            </div>

        </div>
        <!-- assesmen dokter -->

        <!-- Cara Keluar -->

        <div class="accordion" id="accordionExample3">
            <div class="card">
                <div class="card-header bg-secondary" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                            <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Cara Keluar Dari Instalasi
                            Gawat
                            Darurat
                        </button>
                    </h2>
                </div>

                <div id="collapseOne3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample3">
                    <div class="card-body bg-light">
                        <select class="form-control select2" name="alpul" id="alpul">
                            <option value=""> -- Select One --</option>
                            <option value="Pasien Anak">Pasien Anak
                            </option>
                            <option value="Pasien Bedah">Pasien Bedah
                            </option>
                            <option value="Pasien Non Bedah">Pasien Non Bedah
                            </option>
                            <option value="Pasien Psikomatic">Pasien Psikomatic
                            </option>
                            <option value="Pasien Kebidanan">Pasien Kebidanan
                            </option>


                        </select>
                        <label>Lain-lain</label>
                        <textarea class="form-control" id="alpul1" name="alpul1" rows="2" placeholder=""></textarea>

                    </div>
                </div>
            </div>
        </div>

        <!-- Keadaan Pasien  -->

        <div class="accordion" id="accordionExample4">
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
                        <select class="form-control select2" name="kopul" id="kopul">
                            <option value=""> -- Select One --</option>
                            @foreach ($alasanpulang as $i => $p)
                            <option value="{{ $p->alasan_pulang }}">{{ $p->alasan_pulang }}
                            </option>
                            @endforeach

                        </select>
                        <label>Lain-lain</label>
                        <textarea class="form-control" id="kopul1" name="kopul1" rows="2" placeholder=""></textarea>

                    </div>
                </div>
            </div>
        </div>
        <!-- KPO -->
        <div class="accordion" id="accordionExample8">
            <div class="card">
                <div class="card-header bg-success" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne8" aria-expanded="true" aria-controls="collapseOne8">
                            <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Order Obat
                        </button>
                    </h2>
                </div>

                <div id="collapseOne8" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample8">
                    <div class="card-body bg-light">
                        <div type="button" class="btn btn-secondary rekonobat ml-3 mb-3" style="margin-top: 20px;">
                            Riwayat Obat dan Rekonsiliasi Obat
                        </div>
                        <div class="rekonobatview">
                            <form class="formtinjutobat">


                            </form>

                        </div>
                        <iframe src="http://192.168.2.125/kpoelektronik/" width="1255px" height="750px"></iframe>

                    </div>
                </div>
            </div>
        </div>

        <!-- laboratorium -->
        <div class="accordion" id="accordionExample5">
            <div class="card">
                <div class="card-header bg-danger" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne5" aria-expanded="true" aria-controls="collapseOne5">
                            <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Order Laboratorium
                        </button>
                    </h2>
                </div>

                <div id="collapseOne5" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample5">
                    <div class="card-body bg-light">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Tanggal Pemeriksaan
                                        Penunjang</label>
                                    <input type="date" id="tanggalperiksapenunjang" name="tanggalperiksapenunjang" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <table id="tablelab" class="table table-sm mt-3 table-hover">
                                    <thead>
                                        <th>Nama tindakan</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($layananlab as $t)
                                        <tr class="pilihlayanan" jenis="nonpaket" namatindakan="{{ $t->Tindakan }}" tarif="{{ $t->tarif }}" kode="{{ $t->kode }}">
                                            <td>{{ $t->Tindakan }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-secondary">Tindakan / Layanan Pasien</div>
                                    <div class="card-body">
                                        <form action="" method="post" class="formlab">
                                            <div class="input_fields_wrap_lab">
                                                <div>

                                                </div>


                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <p>pilih layanan untuk pasien</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- radiologi -->
        <div class="accordion" id="accordionExample6">
            <div class="card">
                <div class="card-header bg-danger" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6">
                            <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Order Radiologi
                        </button>
                    </h2>
                </div>

                <div id="collapseOne6" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample6">
                    <div class="card-body bg-light">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Tanggal Pemeriksaan
                                        Penunjang</label>
                                    <input type="date" id="tanggalperiksapenunjang1" name="tanggalperiksapenunjang1" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <table id="tableradio" class="table table-sm mt-3 table-hover">
                                    <thead>
                                        <th>Nama tindakan</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($layanan as $r)
                                        <tr class="pilihlayanan1" jenis="nonpaket" namatindakan="{{ $r->Tindakan }}" tarif="{{ $r->tarif }}" kode="{{ $r->kode }}">
                                            <td>{{ $r->Tindakan }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-secondary">Tindakan / Layanan Pasien</div>
                                    <div class="card-body">
                                        <form action="" method="post" class="formradio">
                                            <div class="input_fields_wrap1">
                                                <div>
                                                </div>


                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <p>pilih layanan untuk pasien</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div type="button" class="btn float-right btn-success simpanassesdokbay mt-3 mb-3 mr-3">
                    SIMPAN
                </div>
            </div>
        </div>
        @elseif($assesdok[0]->status == 2)
        <h1>Data Sudah Tidak Bisa Diubah Karena sudah di Validasi</h1>

        <!-- igd kebidanan dengan isi  -->
        @else

        <div class="accordion" id="accordionExample92">
            <div class="card">
                <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse" data-target="#collapseOne92" aria-expanded="true" aria-controls="collapseOne92">
                            <i class="bi bi-book mr-1 ml-1"></i>(S) SUBYEKTIF
                        </button>
                    </h2>
                </div>

                <div id="collapseOne92" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample92">
                    <div class="card-body bg-light">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-bold font-italic">KELUHAN UTAMA</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="subyek" name="subyek" placeholder="">{{$assesdok[0]->keluhan_utama}}</textarea>

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
                        <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse" data-target="#collapseOne93" aria-expanded="true" aria-controls="collapseOne92">
                            <i class="bi bi-book mr-1 ml-1"></i>(O) OBYEKTIF
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
                                                @if ($ttv == null)
                                                <tr>
                                                    <td class="text-bold font-italic">Keadaan Umum</td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Baik">
                                                            <label class="form-check-label">Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Sedang">
                                                            <label class="form-check-label">Sedang</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Buruk">
                                                            <label class="form-check-label">Buruk</label>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">Kesadaran</td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="13-15">
                                                            <label class="form-check-label">13-15</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="9-12">
                                                            <label class="form-check-label">9-12</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="3-8">
                                                            <label class="form-check-label">3-8</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold font-italic">Tekanan Darah</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Tekanan darah pasien ..." aria-label="Recipient's username" id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2" value="">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">mmHg</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">Frekuensi Nadi</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Frekuensi nadi pasien ..." id="frekuensinadi" name="frekuensinadi" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">
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
                                                            <input type="text" class="form-control" placeholder="Frekuensi Nafas Pasien ..." name="frekuensinafas" id="frekuensinafas" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">x/menit</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">Suhu</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Suhu tubuh pasien ..." aria-label="Suhu tubuh pasien" name="suhutubuh" id="suhutubuh" aria-describedby="basic-addon2" value="">
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
                                                            <input type="text" class="form-control" placeholder="Berat badan Pasien ..." name="beratbadan" id="beratbadan" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">Kg</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">Tinggi Badan</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Tinggi Badan pasien ..." aria-label="Suhu tubuh pasien" name="tb" id="tb" aria-describedby="basic-addon2" value="">
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
                                                            <input type="text" class="form-control" placeholder="Berat badan Pasien ..." name="gcs" id="gcs" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2"></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">SPO2</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder=" SPO2 pasien ..." aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2"></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <td class="text-bold font-italic">Keadaan Umum</td>
                                                    <td>
                                                        @if ($ttv[0]->keadaan_umum == 'Baik')
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Baik" checked>
                                                            <label class="form-check-label">Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Sedang">
                                                            <label class="form-check-label">Sedang</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Buruk">
                                                            <label class="form-check-label">Buruk</label>
                                                        </div>
                                                        @elseif ($ttv[0]->keadaan_umum == 'Sedang')
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Baik">
                                                            <label class="form-check-label">Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Sedang" checked>
                                                            <label class="form-check-label">Sedang</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Buruk">
                                                            <label class="form-check-label">Buruk</label>
                                                        </div>
                                                        @else
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Baik">
                                                            <label class="form-check-label">Baik</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Sedang">
                                                            <label class="form-check-label">Sedang</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Buruk" checked>
                                                            <label class="form-check-label">Buruk</label>
                                                        </div>
                                                        @endif



                                                    </td>
                                                    <td class="text-bold font-italic">Kesadaran</td>
                                                    <td>
                                                        @if ($ttv[0]->kesadaran == '13-15')
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="13-15" checked>
                                                            <label class="form-check-label">13-15</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="9-12">
                                                            <label class="form-check-label">9-12</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="3-8">
                                                            <label class="form-check-label">3-8</label>
                                                        </div>
                                                        @elseif ($ttv[0]->kesadaran == '9-12')
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="13-15">
                                                            <label class="form-check-label">13-15</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="9-12" checked>
                                                            <label class="form-check-label">9-12</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="3-8">
                                                            <label class="form-check-label">3-8</label>
                                                        </div>
                                                        @else
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="13-15">
                                                            <label class="form-check-label">13-15</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="9-12">
                                                            <label class="form-check-label">9-12</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="3-8" checked>
                                                            <label class="form-check-label">3-8</label>
                                                        </div>
                                                        @endif

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold font-italic">Tekanan Darah</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Tekanan darah pasien ..." aria-label="Recipient's username" id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2" value="{{ $ttv[0]->tekanan_darah }}">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">mmHg</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">Frekuensi Nadi</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Frekuensi nadi pasien ..." id="frekuensinadi" name="frekuensinadi" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ $ttv[0]->frekuensi_nadi }}">
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
                                                            <input type="text" class="form-control" placeholder="Frekuensi Nafas Pasien ..." name="frekuensinafas" id="frekuensinafas" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ $ttv[0]->frekuensi_nafas }}">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">x/menit</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">Suhu</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Suhu tubuh pasien ..." aria-label="Suhu tubuh pasien" name="suhutubuh" id="suhutubuh" aria-describedby="basic-addon2" value="{{ $ttv[0]->suhu }}">
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
                                                            <input type="text" class="form-control" placeholder="Berat badan Pasien ..." name="beratbadan" id="beratbadan" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ $ttv[0]->berat_badan }}">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2">Kg</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">Umur</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Umur pasien ..." aria-label="Suhu tubuh pasien" name="usia" id="usia" aria-describedby="basic-addon2" value="{{ $ttv[0]->umuR }}">
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
                                                            <input type="text" class="form-control" placeholder="Berat badan Pasien ..." name="gcs" id="gcs" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ $ttv[0]->GCS }}">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2"></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">SPO2</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder=" SPO2 pasien ..." aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{ $ttv[0]->SPO2 }}">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2"></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <table class="table">
                                    <tr>
                                        <td class="text-bold font-italic">PEMERIKSAAN FISIK</td>
                                        <td>

                                            <textarea class="form-control" id="pemfis" name="pemfis">{{$assesdok[0]->keluhan_utama}}</textarea>

                                        </td>
                                    </tr>
                                </table>
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
                            <i class="bi bi-book mr-1 ml-1"></i>(A) ASSESSMEN
                        </button>
                    </h2>
                </div>

                <div id="collapseOne94" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample94">
                    <div class="card-body bg-light">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td colspan="2">


                                        <form id="dynamic-form" class="formtindakandp">
                                            <div class="field_wrapper">
                                                <div class="row">
                                                    @foreach ($riwayattindakandpjp as $rtd => $td)
                                                    <div class="col-md-5">
                                                        <label for="">NAMA DPJP</label>

                                                        <input class="form-control" readonly type="text" value="{{$td->nama_dpjp}}" />

                                                    </div>
                                                    <div class="col-md-5">
                                                        <label for="">Tata Laksana DPJP</label>
                                                        <!-- <input class="form-control" placeholder="Tata Laksana DPJP" type="text-area" row="3" name="talaksanadpjp[]" value="" /> -->
                                                        <textarea class="form-control" readonly>{{$td->tindakan_kedokteran}}</textarea>

                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-2">
                                                        <a class="btn btn-success" href="javascript:void(0);" id="add_button" title="Add field">TAMBAH</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-bold font-italic">DIAGNOSA </td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="diagnosa" name="diagnosa" placeholder="">{{$assesdok[0]->diagnosis}}</textarea>

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
                                    <td class="text-bold font-italic">TATA LAKSANA</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="planning" name="planning" placeholder="">{{$assesdok[0]->planning}}</textarea>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- hasillab -->
        <div id="hasillab" class="modal">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">
                <span class="close float-right">&times;</span>
                @if ($cek1 == null)
                <h4>Tidak ada Hasil Laboratorium</h4>
                @else
                @foreach ($cek1 as $c)
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <iframe src="//192.168.2.74/smartlab_waled/his/his_report?hisno={{ $c->kode_layanan_header }}" width="1350px" height="650px"></iframe>
                    </div>
                </div>
                @endforeach
                @endif
            </div>

        </div>
        <!-- hasilradiologi -->
        <div id="hasilradioo" class="modall">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">

                <span class="closee float-right">&times;</span>
                @if ($cek == null)
                <h4>Tidak ada Hasil Radiologi</h4>
                @else
                @foreach ($cek as $c)
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <iframe src="http://192.168.10.17/ZFP?mode=proxy&lights=on&titlebar=on#View&ris_exam_id={{ $c->acc_number }}&un=radiologi&pw=YnanEegSoQr0lxvKr59DTyTO44qTbzbn9koNCrajqCRwHCVhfQAddGf%2f4PNjqOaV" width="1100px" height="1000px"></iframe>
                        <iframe src="http://192.168.10.17/ZFP?mode=proxy&lights=on&titlebar=on#View&ris_pat_id={{ $c->no_rm }}&un=radiologi&pw=YnanEegSoQr0lxvKr59DTyTO44qTbzbn9koNCrajqCRwHCVhfQAddGf%2f4PNjqOaV" width="100%" height="600px"></iframe>

                        <iframe src="https://192.168.2.233/expertise/cetak0.php?IDs={{ $c->id_header }}&IDd={{ $c->id_detail }}&tgl_cetak={{ $c->tanggalnya }}" width="1000px" height="600px"></iframe>

                    </div>
                </div>
                @endforeach
                @endif

            </div>

        </div>
        <!-- hasillapa -->
        <div id="hasillabpa" class="modalll">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">

                <span class="closeee float-right">&times;</span>
                @if ($cekpa == null)
                <h4>Tidak ada Hasil Lab PA</h4>
                @else
                @foreach ($cekpa as $pa => $p)
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Hasil Expertise Patologi Anatomi
                            {{ $p->tgl_baca }}
                        </h3>
                    </div>

                    <div class="card-body">
                        <div class="note-editable card-block" contenteditable="true" role="textbox" aria-multiline="true" spellcheck="true" autocorrect="true">
                            <h1><u>{{ $p->nama_px }}
                                </u></h1>
                            <h4>{{ $p->kode_header }}</h4>
                            <p>{{ $p->hasil }}</p>
                            <ul>
                                <li>{{ $p->tipe }}</li>
                                <li>{{ $p->diagnostik_klinik }}</li>
                                <li>{{ $p->diagnostik_pasca_bedah }}</li>
                            </ul>
                            <p>Dokter Baca</p>
                            <p>{{ $p->nama_dokter }}</p>
                        </div>
                    </div>



                </div>
                @endforeach
                @endif

            </div>

        </div>
        <!-- assesmen dokter -->

        <!-- Cara Keluar -->

        <div class="accordion" id="accordionExample3">
            <div class="card">
                <div class="card-header bg-secondary" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                            <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Cara Keluar Dari Instalasi
                            Gawat
                            Darurat
                        </button>
                    </h2>
                </div>

                <div id="collapseOne3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample3">
                    <div class="card-body bg-light">
                        <select class="form-control select2" name="alpul" id="alpul">
                            <option value="">{{$assesdok[0]->cara_pulang}}</option>
                            <option value="Pasien Anak">Pasien Anak
                            </option>
                            <option value="Pasien Bedah">Pasien Bedah
                            </option>
                            <option value="Pasien Non Bedah">Pasien Non Bedah
                            </option>
                            <option value="Pasien Psikomatic">Pasien Psikomatic
                            </option>
                            <option value="Pasien Kebidanan">Pasien Kebidanan
                            </option>


                        </select>
                        <label>Lain-lain</label>
                        <textarea class="form-control" id="alpul1" name="alpul1" rows="2" placeholder=""></textarea>

                    </div>
                </div>
            </div>
        </div>

        <!-- Keadaan Pasien  -->

        <div class="accordion" id="accordionExample4">
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
                        <select class="form-control select2" name="kopul" id="kopul">
                            <option value=""> {{$assesdok[0]->keadaan_pulang}}</option>
                            @foreach ($alasanpulang as $i => $p)
                            <option value="{{ $p->alasan_pulang }}">{{ $p->alasan_pulang }}
                            </option>
                            @endforeach

                        </select>
                        <label>Lain-lain</label>
                        <textarea class="form-control" id="kopul1" name="kopul1" rows="2" placeholder=""></textarea>

                    </div>
                </div>
            </div>
        </div>
        <!-- KPO -->
        <div class="accordion" id="accordionExample8">
            <div class="card">
                <div class="card-header bg-success" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne8" aria-expanded="true" aria-controls="collapseOne8">
                            <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Order Obat
                        </button>
                    </h2>
                </div>

                <div id="collapseOne8" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample8">
                    <div class="card-body bg-light">
                        <div type="button" class="btn btn-secondary rekonobat ml-3 mb-3" style="margin-top: 20px;">
                            Riwayat Obat dan Rekonsiliasi Obat
                        </div>
                        <div class="rekonobatview">
                            <form class="formtinjutobat">


                            </form>

                        </div>
                        <iframe src="http://192.168.2.125/kpoelektronik/" width="1255px" height="750px"></iframe>

                    </div>
                </div>
            </div>
        </div>

        <!-- laboratorium -->
        <div class="accordion" id="accordionExample5">
            <div class="card">
                <div class="card-header bg-danger" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne5" aria-expanded="true" aria-controls="collapseOne5">
                            <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Order Laboratorium
                        </button>
                    </h2>
                </div>

                <div id="collapseOne5" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample5">
                    <div class="card-body bg-light">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Tanggal Pemeriksaan
                                        Penunjang</label>
                                    <input type="date" id="tanggalperiksapenunjang" name="tanggalperiksapenunjang" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <table id="tablelab" class="table table-sm mt-3 table-hover">
                                    <thead>
                                        <th>Nama tindakan</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($layananlab as $t)
                                        <tr class="pilihlayanan" jenis="nonpaket" namatindakan="{{ $t->Tindakan }}" tarif="{{ $t->tarif }}" kode="{{ $t->kode }}">
                                            <td>{{ $t->Tindakan }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-bordered">
                                    <thead>
                                        <th style="width: 10px">Kode Layanan Header</th>
                                        <th>Nama Tindakan</th>
                                        <th>Harga</th>
                                        <th style="width: 40px">Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($riwayatorderlab as $lab => $l)
                                        <tr>
                                            <td>{{ $l->kode_layanan_header }}</td>
                                            <td>{{ $l->nama_tindakan }}</td>
                                            <td>
                                                Rp.{{ $l->total_tarif }}
                                            </td>
                                            <td> <a class=" btn btn-danger btn-sm returorderlaboratorium" href="#">
                                                    <i class="fas fa-sync-alt fa-spin"></i>
                                                    RETUR
                                                </a></td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <div class="card">
                                    <div class="card-header bg-secondary">Tindakan / Layanan Pasien</div>
                                    <div class="card-body">
                                        <form action="" method="post" class="formlab">
                                            <div class="input_fields_wrap_lab">
                                                <div>

                                                </div>


                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <p>pilih layanan untuk pasien</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- radiologi -->
        <div class="accordion" id="accordionExample6">
            <div class="card">
                <div class="card-header bg-danger" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6">
                            <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Order Radiologi
                        </button>
                    </h2>
                </div>

                <div id="collapseOne6" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample6">
                    <div class="card-body bg-light">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Tanggal Pemeriksaan
                                        Penunjang</label>
                                    <input type="date" id="tanggalperiksapenunjang1" name="tanggalperiksapenunjang1" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <table id="tableradio" class="table table-sm mt-3 table-hover">
                                    <thead>
                                        <th>Nama tindakan</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($layanan as $r)
                                        <tr class="pilihlayanan1" jenis="nonpaket" namatindakan="{{ $r->Tindakan }}" tarif="{{ $r->tarif }}" kode="{{ $r->kode }}">
                                            <td>{{ $r->Tindakan }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-bordered">
                                    <thead>
                                        <th style="width: 10px">Kode Layanan Header</th>
                                        <th>Nama Tindakan</th>
                                        <th>Harga</th>
                                        <th style="width: 40px">Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($riwayatorderrad as $rad => $r)
                                        <tr>
                                            <td>{{ $r->kode_layanan_header }}</td>
                                            <td>{{ $r->nama_tindakan }}</td>
                                            <td>
                                                Rp.{{ $r->total_tarif }}
                                            </td>
                                            <td> <a class=" btn btn-danger btn-sm returorderradiologi" href="#">
                                                    <i class="fas fa-sync-alt fa-spin"></i>
                                                    RETUR
                                                </a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="card">
                                    <div class="card-header bg-secondary">Tindakan / Layanan Pasien</div>
                                    <div class="card-body">
                                        <form action="" method="post" class="formradio">
                                            <div class="input_fields_wrap1">
                                                <div>
                                                </div>


                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <p>pilih layanan untuk pasien</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row ml-3 mb-2">
            <div type="button" class="btn  btn-success float-right updateassesdokbidbay" style="margin-top: 20px;">
                UPDATE
            </div>
            <div type="button" class="btn  btn-info ml-2 float-right validasiasssesdokbidbay" style="margin-top: 20px;">
                Validasi
            </div>

        </div>




        @endif

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">



        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script>
            document.getElementById('tanggalperiksapenunjang').valueAsDate = new Date()
            document.getElementById('tanggalperiksapenunjang1').valueAsDate = new Date()
            $(document).ready(function() {

                $('.selectdpjp').select2({
                    width: '100%'
                });

            });


            $(document).ready(function() {
                var maxField = 10; //Input fields increment limitation
                var addButton = $('#add_button'); //Add button selector
                var wrapper = $('.field_wrapper'); //Input field wrapper
                var fieldHTML = '<div class="form-group add"><div class="row">';
                fieldHTML = fieldHTML + '<div class="col-md-5"><label>PILIH DPJP</label><select class="form-control selectdpjp" name="kode_dpjp[]">@foreach ($dpjp as $i => $p) <option value="{{ $p->kode_paramedis }}">{{ $p->nama_paramedis }}</option> @endforeach</select></div>';

                // fieldHTML = fieldHTML + '<div class="col-md-5"><label for="">PILIH DPJP</label><select class="form-control  select2" name="kode_dpjp" id="kode_dpjp" placeholder="Cari opsi...">@foreach ($dpjp as $i => $p) <option value="{{ $p->kode_paramedis }}">{{ $p->nama_paramedis }} </option> @endforeach</select></div>';
                fieldHTML = fieldHTML + '<div class="col-md-5"><label for="">Tata Laksana DPJP</label><textarea class="form-control" id="talaksanadpjp" name="talaksanadpjp" placeholder=""></textarea></div>';
                fieldHTML = fieldHTML + '<div class="col-md-2"><a href="javascript:void(0);" class="remove_button btn btn-danger">HAPUS</a></div>';
                fieldHTML = fieldHTML + '</div></div>';
                var x = 1; //Initial field counter is 1

                //Once add button is clicked
                $(addButton).click(function() {
                    //Check maximum number of input fields
                    if (x < maxField) {
                        x++; //Increment field counter
                        $(wrapper).append(fieldHTML); //Add field html
                        $('.selectdpjp').select2({
                            width: '100%'
                        });
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
                $("#tablelab").DataTable({
                    "responsive": false,
                    "lengthChange": false,
                    "pageLength": 5,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                });
            });
            $(function() {
                $("#tableradio").DataTable({
                    "responsive": false,
                    "lengthChange": false,
                    "pageLength": 5,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                });
            });
            $(".preloader2").fadeOut();
            $(document).ready(function() {
                $('#diagnosa').autocomplete({
                    source: "<?= route('caridiagnosa') ?>",
                    select: function(event, ui) {
                        $('[id="diagnosa"]').val(ui.item.label);
                    }
                });
            });
            $('#tablelab').on('click', '.pilihlayanan', function() {
                var max_fields = 10; //maximum input boxes allowed
                var wrapper = $(".input_fields_wrap_lab"); //Fields wrapper
                var x = 1; //initlal text box countnamatindakan
                kode = $(this).attr('kode')
                namatindakan = $(this).attr('namatindakan')
                tarif = $(this).attr('tarif')
                id = $(this).attr('id')
                jenis = $(this).attr('jenis')


                // e.preventDefault();
                if (x < max_fields) { //max input box allowed
                    x++; //text box increment
                    $(wrapper).append(
                        '<div class="form-row text-xs"><div class="form-group col-md-5"><label for="">Tindakan</label><input readonly type="" class="form-control form-control-sm" id="" name="namatindakan" value="' +
                        namatindakan +
                        '"><input hidden readonly type="" class="form-control form-control-sm" id="" name="kodelayanan" value="' +
                        kode +
                        '"><input hidden  readonly type="" class="form-control form-control-sm" id="" name="jenis" value="' +
                        jenis +
                        '"></div><div class="form-group col-md-2"><label for="inputPassword4">Tarif</label><input readonly type="" class="form-control form-control-sm" id="" name="tarif" value="' +
                        tarif +
                        '"></div><div class="form-group col-md-1"><label for="inputPassword4">Jumlah</label><input type="" class="form-control form-control-sm" id="" name="qty" value="1"></div><div class="form-group col-md-1"><label for="inputPassword4">Disc</label><input type="" class="form-control form-control-sm" id="" name="disc" value="0"></div><div class="form-group col-md-1"><label for="inputPassword4">Cyto</label><input type="" class="form-control form-control-sm" id="" name="cyto" value="1"></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i></div>'
                    );
                    $(wrapper).on("click", ".remove_field", function(e) { //user click on remove
                        e.preventDefault();
                        $(this).parent('div').remove();
                        x--;
                    })
                }
            });

            $('#tableradio').on('click', '.pilihlayanan1', function() {
                var max_fields = 10; //maximum input boxes allowed
                var wrapper = $(".input_fields_wrap1"); //Fields wrapper
                var x = 1; //initlal text box count
                kode = $(this).attr('kode')
                namatindakan = $(this).attr('namatindakan')
                tarif = $(this).attr('tarif')
                id = $(this).attr('id')
                jenis = $(this).attr('jenis')


                // e.preventDefault();
                if (x < max_fields) { //max input box allowed
                    x++; //text box increment
                    $(wrapper).append(
                        '<div class="form-row text-xs"><div class="form-group col-md-5"><label for="">Tindakan</label><input readonly type="" class="form-control form-control-sm" id="" name="namatindakan" value="' +
                        namatindakan +
                        '"><input hidden readonly type="" class="form-control form-control-sm" id="" name="kodelayanan" value="' +
                        kode +
                        '"><input hidden  readonly type="" class="form-control form-control-sm" id="" name="jenis" value="' +
                        jenis +
                        '"></div><div class="form-group col-md-2"><label for="inputPassword4">Tarif</label><input readonly type="" class="form-control form-control-sm" id="" name="tarif" value="' +
                        tarif +
                        '"></div><div class="form-group col-md-1"><label for="inputPassword4">Jumlah</label><input type="" class="form-control form-control-sm" id="" name="qty" value="1"></div><div class="form-group col-md-1"><label for="inputPassword4">Disc</label><input type="" class="form-control form-control-sm" id="" name="disc" value="0"></div><div class="form-group col-md-1"><label for="inputPassword4">Cyto</label><input type="" class="form-control form-control-sm" id="" name="cyto" value="1"></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i></div>'
                    );
                    $(wrapper).on("click", ".remove_field", function(e) { //user click on remove
                        e.preventDefault();
                        $(this).parent('div').remove();
                        x--;
                    })
                }
            });

            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            function filterFunction() {
                var input, filter, ul, li, a, i;
                input = document.getElementById("diagnosa");
                filter = input.value.toUpperCase();
                div = document.getElementById("myDropdown");
                a = div.getElementsByTagName("a");
                for (i = 0; i < a.length; i++) {
                    txtValue = a[i].textContent || a[i].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        a[i].style.display = "";
                    } else {
                        a[i].style.display = "none";
                    }
                }
            }
            $(".returorderradiologi").click(function() {
                var data = $('.formerm').serializeArray();

                var norm = $('#norm').val()
                var kj = $('#kj').val()
                alert(kj)



                // var sumberdata = $("#sumberdata:checked").val();
                Swal.fire({
                    title: "Yakin Retur Order?",
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
                            url: '<?= route('returorderradiologi') ?>',

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
                                        text: 'data berhasil diretur',
                                        footer: ''
                                    })


                                }
                            }
                        });
                    }
                })
                return false;
            });
            $(".returorderlaboratorium").click(function() {
                var data = $('.formerm').serializeArray();

                var norm = $('#norm').val()
                var kj = $('#kj').val()
                alert(kj)



                // var sumberdata = $("#sumberdata:checked").val();
                Swal.fire({
                    title: "Yakin Retur Order?",
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
                            url: '<?= route('returorderlaboratorium') ?>',

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
                                        text: 'data berhasil diretur',
                                        footer: ''
                                    })


                                }
                            }
                        });
                    }
                })
                return false;
            });

            $(".updateassesdokbidbay").click(function() {
                var datalab = $('.formlab').serializeArray();
                var datarad = $('.formradio').serializeArray();
                var tindakandjp = $('.formtindakandp').serializeArray();
                var rekobat = $('.formtinjutobat').serializeArray();

                var ku = $('#ku').val()
                var subject = $('#subyek').val()
                var pemfis = $('#pemfis').val()
                var planning = $('#planning').val()
                var norm = $('#norm').val()
                var kj = $('#kj').val()

                var tglmasuk = $('#tglmasuk').val()
                var diagnosa = $('#diagnosa').val()
                var alpul = $('#alpul').val()
                var alpul1 = $('#alpul1').val()
                var kopul = $('#kopul').val()
                var kopul1 = $('#kopul1').val()


                // var sumberdata = $("#sumberdata:checked").val();
                Swal.fire({
                    title: "Yakin Edit Assesmen?",
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
                                tindakandjp: JSON.stringify(tindakandjp),
                                rekobat: JSON.stringify(rekobat),

                                datalab: JSON.stringify(datalab),
                                datarad: JSON.stringify(datarad),

                                ku: $('#ku').val(),
                                subject: $('#subyek').val(),
                                pemfis: $('#pemfis').val(),
                                planning: $('#planning').val(),
                                norm: $('#norm').val(),
                                kj: $('#kj').val(),

                                tglmasuk: $('#tglmasuk').val(),
                                diagnosa: $('#diagnosa').val(),
                                alpul: $('#alpul').val(),
                                alpul1: $('#alpul1').val(),
                                kopul: $('#kopul').val(),
                                kopul1: $('#kopul1').val(),

                            },
                            url: '<?= route('updateassesdokbidbay') ?>',

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
                                        text: 'data berhasil diupdate',
                                        footer: ''
                                    })


                                }
                            }
                        });
                    }
                })
                return false;
            });
            $(".simpanassesdokbay").click(function() {
                var datalab = $('.formlab').serializeArray();
                var datarad = $('.formradio').serializeArray();
                var tindakandjp = $('.formtindakandp').serializeArray();
                var rekobat = $('.formtinjutobat').serializeArray();

                var ku = $('#ku').val()
                var subject = $('#subyek').val()
                var pemfis = $('#pemfis').val()
                var planning = $('#planning').val()
                var norm = $('#norm').val()
                var kj = $('#kj').val()

                var tglmasuk = $('#tglmasuk').val()
                var diagnosa = $('#diagnosa').val()
                var alpul = $('#alpul').val()
                var alpul1 = $('#alpul1').val()
                var kopul = $('#kopul').val()
                var kopul1 = $('#kopul1').val()


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
                                tindakandjp: JSON.stringify(tindakandjp),
                                rekobat: JSON.stringify(rekobat),

                                datalab: JSON.stringify(datalab),
                                datarad: JSON.stringify(datarad),

                                ku: $('#ku').val(),
                                subject: $('#subyek').val(),
                                pemfis: $('#pemfis').val(),
                                planning: $('#planning').val(),
                                norm: $('#norm').val(),
                                kj: $('#kj').val(),

                                tglmasuk: $('#tglmasuk').val(),
                                diagnosa: $('#diagnosa').val(),
                                alpul: $('#alpul').val(),
                                alpul1: $('#alpul1').val(),
                                kopul: $('#kopul').val(),
                                kopul1: $('#kopul1').val(),

                            },
                            url: '<?= route('simpanassesdokbay') ?>',

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
            $(".validasiasssesdokbidbay").click(function() {

                var norm = $('#norm').val()
                var kj = $('#kj').val()
                var kp = $('#kp').val()
                var counter = $('#counter').val()





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

                                norm: $('#norm').val(),
                                counter: $('#counter').val(),
                                kj: $('#kj').val(),

                            },
                            url: '<?= route('validasiasssesdokbidbay') ?>',

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
                                    cpptdokter();


                                }
                            }
                        });
                    }
                })
                return false;
            });

            // $(".returorderrad").click(function() {
            //     var $row = $(this).closest("tr");
            //     var kodepenjamin = $row.find(".kodepenjamin").text();
            //     var kodekunjungan = $row.find(".kodekunjungan").text();
            //     var counter = $row.find(".counter").text();
            //     var qty = $row.find(".qty").text();
            //     var statuspembayaran = $row.find(".statuspembayaran").text();
            //     var alamat = $row.find(".alamat").text();
            //     var iddet = $row.find(".iddet").text();
            //     var accnumber = $row.find(".accnumber").text();
            //     var idlayanandetail = $row.find(".idlayanandetail").text();
            //     var kodeheader = $row.find(".kodeheader").text();
            //     var idhed = $row.find(".idhed").text();
            //     var tglinput = $row.find(".tgl_input").text();
            //     var norm = $row.find(".norm").text();
            //     var namatarif = $row.find(".namatarif").text();

            //     var gt = $row.find(".gt").text();
            //     Swal.fire({
            //         title: "Yakin RETUR data?",
            //         icon: 'warning',
            //         showCancelButton: true,
            //         confirmButtonColor: '#3085d6',
            //         confirmButtonText: 'Ya',
            //         cancelButtonColor: '#d33',
            //         cancelButtonText: "Batal"

            //     }).then(result => {
            //         //jika klik ya maka arahkan ke proses.php
            //         if (result.isConfirmed) {
            //             $.ajax({
            //                 async: true,
            //                 type: 'post',
            //                 dataType: 'json',
            //                 data: {
            //                     _token: "{{ csrf_token() }}",
            //                     kodepenjamin,
            //                     kodekunjungan,
            //                     counter,
            //                     qty,
            //                     statuspembayaran,
            //                     alamat,
            //                     iddet,
            //                     accnumber,
            //                     idlayanandetail,
            //                     kodeheader,
            //                     idhed,
            //                     tglinput,
            //                     norm,
            //                     namatarif,
            //                     gt
            //                 },

            //                 error: function(data) {
            //                     spinner.hide()
            //                     Swal.fire({
            //                         icon: 'error',
            //                         title: 'Ooops....',
            //                         text: 'Sepertinya ada masalah......',
            //                         footer: ''
            //                     })
            //                 },
            //                 success: function(data) {
            //                     spinner.hide()
            //                     Swal.fire({
            //                         icon: 'success',
            //                         title: 'OK',
            //                         text: data.message,
            //                         footer: ''
            //                     })
            //                     ambildata()
            //                 }
            //             });
            //         }
            //     })
            //     return false;
            // });


            //hasil lab
            // Get the modal
            var modal = document.getElementById("hasillab");

            // Get the button that opens the modal
            var btn = document.getElementById("hasillabo");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

            //hasil radiologi
            // Get the modal
            var modall = document.getElementById("hasilradioo");

            // Get the button that opens the modal
            var btn = document.getElementById("hasilradio");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("closee")[0];

            // When the user clicks the button, open the modal
            btn.onclick = function() {
                modall.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modall.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modall) {
                    modall.style.display = "none";
                }
            }
            //hasil lab pa
            // Get the modal
            var modalll = document.getElementById("hasillabpa");

            // Get the button that opens the modal
            var btn = document.getElementById("hasilpa");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("closeee")[0];

            // When the user clicks the button, open the modal
            btn.onclick = function() {
                modalll.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modalll.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modalll) {
                    modalll.style.display = "none";
                }
            }
            $(".rekonobat").click(function() {
                spinner = $('#loader2');
                spinner.show();
                var ku = $('#ku').val()
                var kp = $('#kp').val()
                var kelas = $('#kelas').val()
                var kj = $('#kj').val()

                $.ajax({
                    type: "post",
                    data: {
                        _token: "{{ csrf_token() }}",
                        ku: $('#ku').val(),
                        kp: $('#kp').val(),
                        kelas: $('#kelas').val(),
                        kj: $('#kj').val(),

                    },
                    url: '<?= route('rekonobat') ?>',

                    error: function(data) {
                        spinner.hide();
                        alert('oke!!')
                    },
                    success: function(response) {
                        spinner.hide();
                        $('.rekonobatview').html(response);

                    }
                });
            });
        </script>