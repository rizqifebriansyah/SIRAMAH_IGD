<!-- form perawat igd umum  -->
@if ($unit == '1002')


<div class="card-header">
    <h3 class="card-title">ASSESMENT KEPERAWATAN INSTALASI GAWAT DARURAT (IGD)</h3>
    <div class="row">
        <div class="col-md-4"><a class=" btn btn-warning btn-block " id="cpptdokterr">
                <i class="bi bi-journal-text"></i>
                CPPT DOKTER
            </a></div>
        <div class="col-md-5"><a class=" btn btn-danger btn-block " id="riwayattigd">
                <i class="bi bi-journal-text"></i>
                RIWAYAT ASSESMEN PERAWAT
            </a></div>
    </div>
</div>

<div class="card-body">
    <!-- cppt dokter -->
    <div id="cpptdokter" class="modalld">

        <!-- Modal content -->
        <div class="modal-content" style="margin-bottom: 30px">

            <span class="closeed float-right">&times;</span>
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
                                    <textarea class="form-control" id="anamnesa" name="anamnesa" placeholder="">{{$assesdok[0]->anamnesa}}</textarea>

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
                            <td class="text-bold font-italic">TATA LAKSANA GP</td>
                            <td>
                                <div class="input-group">
                                    <textarea class="form-control" id="talaksana" name="talaksana" placeholder="">{{$assesdok[0]->tata_laksana}}</textarea>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">PILIH DPJP</td>
                            <td colspan="">
                                <div class="form-group detaildpjp">
                                    <input type="text " id="nama_paramedis" value="{{$assesdok[0]->kode_dpjp}}" class="form-control">
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">TATA LAKSANA DPJP</td>
                            <td>
                                <div class="input-group">
                                    <textarea class="form-control" id="talaksanadpjp" name="talaksanadpjp" placeholder="">{{$assesdok[0]->tata_laksana_dpjp}}</textarea>

                                </div>
                            </td>
                        </tr>
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


        </div>

    </div>
    <!-- riwayat -->
    <div id="riwayatigd" class="modalli">

        <!-- Modal content -->
        <div class="modal-content" style="margin-bottom: 30px">

            <span class="closeei float-right">&times;</span>
            <h4>Belum Ada Riwayat</h4>


        </div>

    </div>
    <div class="card">
        <form action="" class="formerm">
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
                        <td class="text-bold font-italic">Asal Masuk</td>
                        @if ($datadiri[0]->perujuk == null)

                        <td>
                            <div class="form-check form-check-inline">

                                <input class="form-check-input" type="radio" name="asalmasuk" id="asalmasuk" value="Non Rujukan" checked>
                                <label class="form-check-label" for="inlineRadio1">Non Rujukan</label>

                            </div>

                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="asalmasuk" id="asalmasuk" value="Rujukan">
                                <label class="form-check-label" for="inlineRadio2">Rujukan </label>
                            </div>
                        </td>
                        @else

                        <td>
                            <div class="form-check form-check-inline">

                                <input class="form-check-input" type="radio" name="asalmasuk" id="asalmasuk" value="Non Rujukan">
                                <label class="form-check-label" for="inlineRadio1">Non Rujukan</label>

                            </div>

                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="asalmasuk" id="asalmasuk" value="Rujukan" checked>
                                <label class="form-check-label" for="inlineRadio2">Rujukan </label>
                            </div>
                        </td>
                        @endif

                        <td>

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
                                        <td class="text-bold font-italic">SUBYEKTIF ( Anamnesis )</td>
                                        <td>
                                            <div class="input-group">
                                                <textarea class="form-control" id="anamnesis" name="anamnesis" placeholder=""></textarea>
                                                <input type="text" class="form-control" placeholder="" hidden aria-label="Recipient's username" id="kj" name="kj" aria-describedby="basic-addon2" value="{{$kj}}">
                                                <input type="text" class="form-control" placeholder="" hidden aria-label="Recipient's username" id="norm" name="norm" aria-describedby="basic-addon2" value="{{$norm}}">

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
                                                        <td class="text-bold font-italic">Berat Badan / tinggi badan / IMT</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Berat badan Pasien ..." name="beratbadan" id="beratbadan" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="basic-addon2">Kg</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-bold font-italic">Umur</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Umur pasien ..." aria-label="Suhu tubuh pasien" name="usia" id="usia" aria-describedby="basic-addon2" value="{{$datadiri[0]->umur}}">
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
                                                                <input type="text" class="form-control" placeholder="GCS Pasien ..." name="gcs" id="gcs" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">
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
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
                                                        <td class="text-bold font-italic">Pupil </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="pupil" id="pupil" value="Normal">
                                                                        <label class="form-check-label">Normal </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="pupil1" id="pupil1" value="Miosis">
                                                                        <label class="form-check-label">Miosis </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="pupil2" id="pupil2" value="Midriasis">
                                                                        <label class="form-check-label">Midriasis </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="pupil3" id="pupil3" value="Isokor">
                                                                        <label class="form-check-label">Isokor </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="pupil4" id="pupil4" value="Anisokor">
                                                                        <label class="form-check-label">Anisokor </label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="pupil5" id="pupil5" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Tekanan Intrakranial </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="intra" id="intra" value="Sakit Kepala">
                                                                        <label class="form-check-label">Sakit Kepala </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="intra1" id="intra1" value="Muntah">
                                                                        <label class="form-check-label">Muntah </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="intra2" id="intra2" value="Pusing">
                                                                        <label class="form-check-label">Pusing </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="intra3" id="intra3" value="Hypertensi">
                                                                        <label class="form-check-label">Hypertensi </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="intra4" id="intra4" value="Bingung">
                                                                        <label class="form-check-label">Bingung </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="intra5" id="intra5" value="Hipotensi">
                                                                        <label class="form-check-label">Hipotensi </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="intra6" id="intra6" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Neuro Sensorik</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="neuro" id="neuro" value="Spasme otot">
                                                                        <label class="form-check-label">Spasme otot </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="neuro1" id="neuro1" value="Perubahan Sensorik">
                                                                        <label class="form-check-label">Perubahan Sensorik </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="neuro2" id="neuro2" value="Perubahan Motorik">
                                                                        <label class="form-check-label">Perubahan Motorik </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="neuro3" id="neuro3" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Muskolo Skeletal</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="muskolo" id="muskolo" value="Kerusakan Jaringan / Luka">
                                                                        <label class="form-check-label">Kerusakan Jaringan / Luka </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="muskolo1" id="muskolo1" value="Perubahan Ekstremitas">
                                                                        <label class="form-check-label">Perubahan Ekstremitas </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="muskolo2" id="muskolo2" value="Penurunan Tingkat Kesadaran">
                                                                        <label class="form-check-label">Penurunan Tingkat Kesadaran </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="muskolo3" id="muskolo3" value="Fraktur / Dislokasi / Luksasio">
                                                                        <label class="form-check-label">Fraktur / Dislokasi / Luksasio </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="muskolo4" id="muskolo4" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Integumen</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="integumen" id="integumen" value="Luka Bakar">
                                                                        <label class="form-check-label">Luka Bakar </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="integumen1" id="integumen1" value="Luka Robek">
                                                                        <label class="form-check-label">Luka Robek </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="integumen2" id="integumen2" value="Lecet">
                                                                        <label class="form-check-label">Lecet </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="integumen3" id="integumen3" value="Luka Dekubitus">
                                                                        <label class="form-check-label">Luka Dekubitus </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="integumen4" id="integumen4" value="Luka gangren">
                                                                        <label class="form-check-label">Luka gangren </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="integumen5" id="integumen5" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Turgor Kulit</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="turgor" id="turgor" value="Baik">
                                                                        <label class="form-check-label">Baik </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="turgor1" id="turgor1" value="Menurun">
                                                                        <label class="form-check-label">Menurun </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="turgor2" id="turgor2" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Edema</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="edema" id="edema" value="Ekstremitas">
                                                                        <label class="form-check-label">Ekstremitas </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="edema1" id="edema1" value="Seluruh tubuh">
                                                                        <label class="form-check-label">Seluruh tubuh </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="edema2" id="edema2" value="Ascites">
                                                                        <label class="form-check-label">Ascites </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="edema3" id="edema3" value="Palpebra">
                                                                        <label class="form-check-label">Palpebra </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="edema4" id="edema4" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Mukosa Mulut</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="mukosa" id="mukosa" value="Kering">
                                                                        <label class="form-check-label">Kering </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="mukosa1" id="mukosa1" value="Lembab">
                                                                        <label class="form-check-label">Lembab </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="mukosa2" id="mukosa2" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Pendarahan</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="pendarahan" id="pendarahan" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <input class="form-check-input" type="radio" name="pendarahan" id="pendarahan" value="ADA">

                                                                        <label class="form-check-label">Jumlah </label>

                                                                        <input class="form-" type="input" name="jumlahdarah" id="jumlahdarah" value="">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Intoksikasi</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="intoksikasi" id="intoksikasi" value="Makanan">
                                                                        <label class="form-check-label">Makanan </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="intoksikasi1" id="intoksikasi1" value="Gigitan Binatang">
                                                                        <label class="form-check-label">Gigitan Binatang </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="intoksikasi2" id="intoksikasi2" value="Zat Kimia">
                                                                        <label class="form-check-label">Zat Kimia </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="intoksikasi3" id="intoksikasi3" value="Gas">
                                                                        <label class="form-check-label">Gas </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="intoksikasi4" id="intoksikasi4" value="Obat">
                                                                        <label class="form-check-label">Obat </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="intoksikasi5" id="intoksikasi5" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Eliminasi</td>
                                                        <td>

                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">BAB</td>
                                                        <td>
                                                            <div class="row">

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-check-label float-center">FREKUENSI</label>

                                                                        <input class="form-control" type="input" name="BABF" id="BABF" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-check-label float-center">KONSISTENSI</label>

                                                                        <input class="form-control" type="input" name="BABK" id="BABK" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-check-label float-center">WARNA</label>

                                                                        <input class="form-control" type="input" name="BABKW" id="BABKW" value="">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">BAK</td>
                                                        <td>
                                                            <div class="row">

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-check-label float-center">FREKUENSI</label>

                                                                        <input class="form-control" type="input" name="BAKF" id="BAKF" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-check-label float-center">KONSISTENSI</label>

                                                                        <input class="form-control" type="input" name="BAKK" id="BAKK" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-check-label float-center">WARNA</label>

                                                                        <input class="form-control" type="input" name="BAKKW" id="BAKKW" value="">
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
                            <div class="accordion" id="accordionExample97">
                                <div class="card">
                                    <div class="card-header bg-secondary" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne97" aria-expanded="true" aria-controls="collapseOne97">
                                                <i class="bi bi-ticket-detailed mr-1 ml-1"></i> PSIKOSOSIAL, EKONOMI DAN SPIRTUAL
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne97" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample97">
                                        <div class="card-body bg-light">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-bold font-italic">KECEMASAN </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kecemasan" id="kecemasan" value="Sedang">
                                                                        <label class="form-check-label">Sedang </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kecemasan" id="kecemasan" value="Berat">
                                                                        <label class="form-check-label">Berat </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kecemasan" id="kecemasan" value="Panik">
                                                                        <label class="form-check-label">Panik </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="kecemasan" id="kecemasan" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>

                                                    </tr>v
                                                    <tr>
                                                        <td class="text-bold font-italic">Koping Mekanisme </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="koping" id="koping" value="Merusak Diri">
                                                                        <label class="form-check-label">Merusak Diri </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="koping" id="koping" value="Menarik Diri / Isolasi Sosial">
                                                                        <label class="form-check-label">Menarik Diri / Isolasi Sosial </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="koping" id="koping" value="Perilaku Kekerasan">
                                                                        <label class="form-check-label">Perilaku Kekerasan </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="koping" id="koping" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Pekerjaan </td>
                                                        <td>

                                                            <div class="input-group">
                                                                <textarea class="form-control" id="pekerjaan" name="pekerjaan" placeholder="">{{$datadiri[0]->pekerjaan}}</textarea>

                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Agama </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <textarea class="form-control" id="agama" name="agama" placeholder="">{{$datadiri[0]->agama}}</textarea>

                                                            </div>

                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionExample98">
                                <div class="card">
                                    <div class="card-header bg-secondary" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne98" aria-expanded="true" aria-controls="collapseOne98">
                                                <i class="bi bi-ticket-detailed mr-1 ml-1"></i> SKALA NYERI
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne98" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample98">
                                        <div class="card-body bg-light">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-bold font-italic">Apakah Terdapat Keluhan Nyeri ?? </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="nyeri" id="nyeri" value="Ya">
                                                                        <label class="form-check-label">Ya </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="nyeri" id="nyeri" value="Tidak ada">
                                                                        <label class="form-check-label">Tidak ada </label>
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
                                                                        <input class="form-check-input" type="radio" name="lamanyeri" id="lamanyeri" value="< 3 bulan = akut">
                                                                        <label class="form-check-label">
                                                                            < 3 bulan=akut </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="lamanyeri" id="lamanyeri" value="> 3 bulan = kronik">
                                                                        <label class="form-check-label">> 3 bulan = kronik </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="lamanyeri" id="lamanyeri" value="Tidak Ada" checked>
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
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri" id="rasanyeri" value="Tajam">
                                                                        <label class="form-check-label">Tajam </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri1" id="rasanyeri1" value="Nyeri Tumpul">
                                                                        <label class="form-check-label">Nyeri Tumpul </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri2" id="rasanyeri2" value="Seperti Ditarik">
                                                                        <label class="form-check-label">Seperti Ditarik </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri3" id="rasanyeri3" value="Seperti Di tusuk">
                                                                        <label class="form-check-label">Seperti Di tusuk </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri4" id="rasanyeri4" value="Seperti Dipukul">
                                                                        <label class="form-check-label">Seperti Dipukul </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri5" id="rasanyeri5" value="Seperti Dibakar">
                                                                        <label class="form-check-label">Seperti Dibakar </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri6" id="rasanyeri6" value="Seperti Berdenyut">
                                                                        <label class="form-check-label">Seperti Berdenyut </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri7" id="rasanyeri7" value="Seperti Ditikam">
                                                                        <label class="form-check-label">Seperti Ditikam </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri8" id="rasanyeri8" value="Seperti Kram">
                                                                        <label class="form-check-label">Seperi Kram </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri9" id="rasanyeri9" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Seberapa Sering Anda Mengalami Nyeri ini? Berapa Lama ?? </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <label class="texxt-bold">Setiap :</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="seringnyeri" id="seringnyeri" value="1 -2 jam">
                                                                        <label class="form-check-label">1 -2 jam </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="seringnyeri" id="seringnyeri" value="3 - 4 jam">
                                                                        <label class="form-check-label">3 - 4 jam </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="seringnyeri" checked id="seringnyeri" value="Tidak Ada">
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
                                                                        <input class="form-check-input" type="radio" name="serringnyeri" id="serringnyeri" value="< 30 Menit">
                                                                        <label class="form-check-label">
                                                                            < 30 Menit </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="serringnyeri" id="serringnyeri" value="> 30 Menit">
                                                                        <label class="form-check-label">> 30 Menit </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="serringnyeri" id="serringnyeri" checked value="Tidak Ada">
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Apa yang membuat nyeri berkurang dan bertambah parah? </td>
                                                        <td>
                                                            <div class="row">

                                                                <div class="col-md-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="berkurangnyeri" id="berkurangnyeri" value="Kompres hangat/ dingin">
                                                                        <label class="form-check-label">Kompres hangat/ dingin </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="berkurangnyeri" id="berkurangnyeri" value="Aktivitas dikurangi / bertambah">
                                                                        <label class="form-check-label">Aktivitas dikurangi / bertambah </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="berkurangnyeri" id="berkurangnyeri" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>

                                                </tbody>
                                            </table>

                                            <!-- <div class="page_content">
                                                <h1>Lokasi Nyeri</h1>
                                                <div class="cell">
                                                    <div class="toolbar">
                                                        <div class="toolbar_left">
                                                            <div class="toolbar_btn btn_grey" id="add_pos_marker">Add Positive dot</div>
                                                            <div class="toolbar_btn btn_grey" id="add_neg_marker">Add Negative dot</div>
                                                            <div class="toolbar_btn btn_grey" id="save">Save</div>
                                                        </div>
                                                    </div>
                                                    <div id="element"></div>
                                                </div>
                                            </div> -->
                                            <table class="table">
                                                <tbody>
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
                                                                            <div class="card-header  bg-warning">Penandaan Gambar</div>
                                                                            <div class="card-body">
                                                                                <input type="text" hidden id="gambarcoret" name="gambarcoret">
                                                                                <img id="gambarnya1" style="margin-top:50px" width="600px" height="400px" src="{{ asset('public/img/nyeri.png') }}" onclick="showMarkerArea(this);" />
                                                                                <canvas hidden id="myCanvas1" width="600px" height="400px" style="border:1px solid #d3d3d3;">
                                                                                </canvas>
                                                                                <button type="button" class="btn btn-danger mt-2" onclick="batalgambar1()">batal</button>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Tidak ada Nyeri = 0">
                                                                <label class="form-check-label">Tidak Nyeri = 0 </label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Sedikit Nyeri = 1 - 2">
                                                                <label class="form-check-label">Sedikit Nyeri = 1 - 2 </label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Sedikit lebih Nyeri = 3 - 4">
                                                                <label class="form-check-label">Sedikit lebih Nyeri = 3 - 4 </label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Sedikit Nyeri = 5 - 6">
                                                                <label class="form-check-label">Sedikit Nyeri = 5 - 6 </label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Sedikit Nyeri = 7 - 8">
                                                                <label class="form-check-label">Sedikit Nyeri = 7 - 8 </label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Sedikit Nyeri = 9 - 10">
                                                                <label class="form-check-label">Sedikit Nyeri = 9 - 10 </label>
                                                            </div>
                                                        </td>
                                                        <td class="text-bold">Pasien Anak-anak Menggunakan Wong Baker Face <br> <img src="public/img/wongbakerr.jpg" /><br>
                                                            <div class="row mt-4" style="margin-left: 60px;">
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="0">
                                                                    <label class="form-check-label">0 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="1">
                                                                    <label class="form-check-label">1 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="2">
                                                                    <label class="form-check-label">2 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="3">
                                                                    <label class="form-check-label">3 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="4">
                                                                    <label class="form-check-label">4 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="5">
                                                                    <label class="form-check-label">5 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="6">
                                                                    <label class="form-check-label">6 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="7">
                                                                    <label class="form-check-label">7 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="8">
                                                                    <label class="form-check-label">8 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="9">
                                                                    <label class="form-check-label">9 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="10">
                                                                    <label class="form-check-label">10 </label>
                                                                </div>
                                                            </div>

                                                        </td>


                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Tidak Nyeri = 0">
                                                                <label class="form-check-label">Tidak Nyeri = 0 </label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Nyeri Ringan = 1 - 3">
                                                                <label class="form-check-label">Nyeri Ringan = 1 - 3 </label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Nyeri Sedang 4 - 6">
                                                                <label class="form-check-label">Nyeri Sedang 4 - 6 </label>
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Nyeri Hebat 7 - 10">
                                                                <label class="form-check-label">Nyeri Hebat 7 - 10 </label>
                                                            </div>

                                                        </td>
                                                        <td class="text-bold">Pasien Dewasa menggunakan numeric rating scale <br> <img src="public/img/numericcc.jpg" /><br>
                                                            <div class="row mt-4" style="margin-left: 30px;">
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="0.0">
                                                                    <label class="form-check-label">0 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 50px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="1.0">
                                                                    <label class="form-check-label">1 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 50px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="2.0">
                                                                    <label class="form-check-label">2 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 50px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="3.0">
                                                                    <label class="form-check-label">3 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 50px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="4.0">
                                                                    <label class="form-check-label">4 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 50px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="5.0">
                                                                    <label class="form-check-label">5 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 50px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="6.0">
                                                                    <label class="form-check-label">6 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 50px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="7.0">
                                                                    <label class="form-check-label">7 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 50px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="8.0">
                                                                    <label class="form-check-label">8 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 50px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="9.0">
                                                                    <label class="form-check-label">9 </label>
                                                                </div>
                                                                <div class="form-check" style="margin-left: 45px;">
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="10.0">
                                                                    <label class="form-check-label">10 </label>
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
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jatuh_dewasa" id="jatuh_dewasa" value="Pasien dewasa menggunakan skala morse falls scale">
                                                        <label class="form-check-label text-bold">Pasien dewasa menggunakan skala morse falls scale </label>
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
                                                                        <input type="number" name="rjvalue" id="rjvalue" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Diagnosis sekunder (≥2 diagnosis medis)</td>
                                                                <td>Ya<br>Tidak </td>
                                                                <td>15 <br> 0 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="dsvalue" id="dsvalue" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Alat bantu</td>
                                                                <td>Berpegangan pada perabot<br>Berpegangan pada perabot <br>Tidak ada / kursi roda / perawat / tirah baring </td>
                                                                <td>30 <br><br> 15 <br> <br> 0 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="abvalue" id="abvalue" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Terpasang infuse</td>
                                                                <td>Ya<br>Tidak </td>
                                                                <td>20 <br> 0 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="tivalue" id="tivalue" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Gaya berjalan</td>
                                                                <td>Terganggu<br>Lemah <br>Normal / tirah baring / imobilisasi</td>
                                                                <td>20 <br> 10 <br> 0 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="gbvalue" id="gbvalue" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Status mental </td>
                                                                <td>Sering lupa akan keterbatasan yang dimiliki<br>Sadar akan kemampuan diri sendiri </td>
                                                                <td>15 <br><br> 10 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="smvalue" id="smvalue" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td> </td>
                                                                <td>Total score</td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input readonly type="number" name="totalrisiko" id="totalrisiko" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="jatuh_dewasa" id="jatuh_dewasa" value="Pasien anak mengunakan skala humpty dumpty">
                                                        <label class="form-check-label text-bold">Pasien anak mengunakan skala humpty dumpty </label>
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
                                                                        <input type="number" name="uvalue" id="uvalue" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Kelamin</td>
                                                                <td>Laki – laki<br>Wanita</td>
                                                                <td> <br>1 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="jkvalue" id="jkvalue" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Diagnosa</td>
                                                                <td>Neurologi<br>Respiratori, dehidrasi, anemia, anorexia, syncope <br>Perilaku <br>lain-lain </td>
                                                                <td>4 <br> 3 <br><br>2 <br>1 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="dvalue" id="dvalue" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Gangguan Kognitif</td>
                                                                <td>Keterbatasan daya piker<br>Pelupa, berkurangnya orientasi sekitar <br>Dapat menggunakan daya pikir tanpa hambatan </td>
                                                                <td> 3 <br>2 <br><br>1 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="gkvalue" id="gkvalue" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Respon terhadap pembedahan, sedasi, dan anestesi</td>
                                                                <td>Dalam 24 jam<br>Dalam 48 jam <br>Lebih dari 48 jam / tidak ada respon </td>
                                                                <td> 3 <br>2 <br>1 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="rvalue" id="rvalue" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Penggunaan obat-obatan</td>
                                                                <td>Penggunaan bersamaan sedative, barbiturate, anti depresan, diuretik, narkotik<br>Salah satu dari obat di atas <br>Obatan – obatan lainnya / tanpa obat </td>
                                                                <td> 3 <br><br>2 <br><br>1 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="ovalue" id="ovalue" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td> </td>
                                                                <td>Total score</td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input readonly type="number" name="totalrisiko1" id="totalrisiko1" class="form-control" min="0" placeholder="Enter first value" required />
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
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="nutrisi_dws" id="nutrisi_dws" value="Pasien dewasa menggunakan Malnutrition screening tools (MST)">
                                                        <label class="form-check-label text-bold">Pasien dewasa menggunakan Malnutrition screening tools (MST) </label>
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
                                                                        <input type="number" name="pnvalue" id="pnvalue" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td></td>
                                                                <td>c. Ya , berapakah penurunan berat badan tersebut ? <br>1 – 5 Kg <br>6 – 10 kg <br>11 – 15 kg <br>>15 Kg <br> tidak yakin</td>
                                                                <td><br><br>1 <br>2 <br>3 <br>4 <br>2 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="pbbvalue" id="pbbvalue" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="text-bold">Apakah asupan makanan pasien buruk akibat nafsu makan yang menurun **? (misalnya asupan makan hanya ¾ dari biasanya)</td>
                                                                <td> a.Tidak <br><br>b.Ya</td>
                                                                <td>0 <br><br>1</td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="nmvalue" id="nmvalue" class="form-control" min="0" placeholder="Enter first value" required />
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
                                                                        <input readonly type="number" name="totalnutrisi" id="totalnutrisi" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="nutrisi_dws" id="nutrisi_dws" value="pasien anak menggunakan strong kids">
                                                        <label class="form-check-label text-bold">pasien anak menggunakan strong kids </label>
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
                                                                        <input type="number" name="kuvalue" id="kuvalue" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="text-bold">2. Apakah ada penurunan BB selama satu bulan terakhir (berdasarkan penilaian objektif data BB bila ada / penilaian subjektif dari orang tua pasien ATAU untuk bayi < 1 tahun : BB naik selama 3 bulan terakhir</td>
                                                                <td>Ya<br><br>Tidak </td>
                                                                <td>1 <br><br> 0 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="tbbvalue" id="tbbvalue" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="text-bold">3. Apakah terdapat salah satu dari kondisi berikut ? <br>• Diari > kali/hari dan atau muntah > 3 kali/hari dalam seminggu terakhir <br>• Asupan makanan berkurang selama 1 minggu terakhir</td>
                                                                <td>Ya<br><br>Tidak </td>
                                                                <td>1 <br><br> 0 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="ssvalue" id="ssvalue" class="form-control" min="0" placeholder="Enter first value" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td> </td>
                                                                <td>Total score</td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input readonly type="number" name="totalnutrisi1" id="totalnutrisi1" class="form-control" min="0" placeholder="Enter first value" required />
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
                                        <td class="text-bold">DIAGNOSA KEPERAWATAN</td>
                                        <td>

                                            <div class="row">
                                                <div class="col-sm-12">

                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan1" id="diagnosakeperawatan1" value="Aktual / Risiko bersihan jalan nafas tidak efektif">
                                                            <label class="form-check-label">Aktual / Risiko bersihan jalan
                                                                nafas tidak efektif</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan2" id="diagnosakeperawatan2" value="Aktual / Risiko pola nafas tidak efektif">
                                                            <label class="form-check-label">Aktual / Risiko pola nafas
                                                                tidak efektif</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan3" id="diagnosakeperawatan3" value="Aktual / Risiko gangguan pertukaran gas">
                                                            <label class="form-check-label">Aktual / Risiko gangguan
                                                                pertukaran gas</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan4" id="diagnosakeperawatan4" value="Aktual / Risiko gangguan sirkulasi">
                                                            <label class="form-check-label">Aktual / Risiko gangguan
                                                                sirkulasi</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan5" id="diagnosakeperawatan5" value="Aktual / Risiko gangguan perfusi jaringan / cerebral">
                                                            <label class="form-check-label">Aktual / Risiko gangguan perfusi jaringan / cerebral </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan6" id="diagnosakeperawatan6" value="Hipertermia">
                                                            <label class="form-check-label">Hipertermia </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan7" id="diagnosakeperawatan7" value="Aktual / Risiko gangguan keseimbangan cairan">
                                                            <label class="form-check-label">Aktual / Risiko gangguan
                                                                keseimbangan cairan </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan8" id="diagnosakeperawatan8" value="Aktual / Risiko gangguan integritas kulit">
                                                            <label class="form-check-label">Aktual / Risiko gangguan
                                                                integritas kulit </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan9" id="diagnosakeperawatan9" value="Aktual / Risiko cemas / takut">
                                                            <label class="form-check-label">Aktual / Risiko cemas / takut
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan10" id="diagnosakeperawatan10" value="Risiko penyebaran toksik">
                                                            <label class="form-check-label">Risiko penyebaran toksik
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan11" id="diagnosakeperawatan11" value="risiko jatuh / cedera">
                                                            <label class="form-check-label">risiko jatuh / cedera</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan12" id="diagnosakeperawatan12" value="nyeri">
                                                            <label class="form-check-label">nyeri</label>
                                                        </div>
                                                        <textarea class="form-control" id="diagnosakeperawatan" name="diagnosakeperawatan" rows="2" placeholder=""></textarea>

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
            <div class="accordion" id="accordionExample911">
                <div class="card">
                    <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse" data-target="#collapseOne11" aria-expanded="true" aria-controls="collapseOne11">
                                <i class="bi bi-book mr-1 ml-1"></i>(P) PLANNING
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne11" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample911">
                        <div class="card-body bg-light">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-bold font-italic">RENCANA ASUHAN KEPERAWATAN</td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rencanaasuhan1" id="rencanaasuhan1" value="Kaji keadaan umum pasien">
                                                <label class="form-check-label">Kaji keadaan umum pasien </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rencanaasuhan2" id="rencanaasuhan2" value="Monitor tanda - tanda vital">
                                                <label class="form-check-label">Monitor tanda - tanda vital </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rencanaasuhan3" id="rencanaasuhan3" value="Kolaborasi dengan tim medis">
                                                <label class="form-check-label">Kolaborasi dengan tim medis </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rencanaasuhan4" id="rencanaasuhan4" value="Berikan edukasi kepada pasien dan keluarga">
                                                <label class="form-check-label">Berikan edukasi kepada pasien dan keluarga </label>
                                            </div>
                                            <div class="input-group mt-2">
                                                <textarea class="form-control" id="rencanaasuhan" name="rencanaasuhan" placeholder=""></textarea>

                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-bold font-italic">KOLABORASI </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="kolaborasi1" id="kolaborasi1" value="Infus/ IVFD">
                                                        <label class="form-check-label">Infus/ IVFD </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="kolaborasi2" id="kolaborasi2" value="Oksigenasi">
                                                        <label class="form-check-label">Oksigenasi </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="kolaborasi3" id="kolaborasi3" value="NGT">
                                                        <label class="form-check-label">NGT </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="kolaborasi4" id="kolaborasi4" value="Defibrilasi">
                                                        <label class="form-check-label">Defibrilasi </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="kolaborasi5" id="kolaborasi5" value="Suction">
                                                        <label class="form-check-label">Suction </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="kolaborasi6" id="kolaborasi6" value="LAB">
                                                        <label class="form-check-label">LAB </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="kolaborasi7" id="kolaborasi7" value="Nebulizer">
                                                        <label class="form-check-label">Nebulizer </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="kolaborasi8" id="kolaborasi8" value="Mengumbah lambung">
                                                        <label class="form-check-label">Mengumbah lambung </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="kolaborasi9" id="kolaborasi9" value="Mayo">
                                                        <label class="form-check-label">Mayo </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="kolaborasi10" id="kolaborasi10" value="Explorasi / Irigasi">
                                                        <label class="form-check-label">Explorasi / Irigasi </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="kolaborasi11" id="kolaborasi11" value="EKG">
                                                        <label class="form-check-label">EKG </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="kolaborasi12" id="kolaborasi12" value="Saturasi Oksigen">
                                                        <label class="form-check-label">Saturasi Oksigen </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="kolaborasi13" id="kolaborasi13" value="Kateter">
                                                        <label class="form-check-label">Kateter </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="kolaborasi14" id="kolaborasi14" value="ETT">
                                                        <label class="form-check-label">ETT </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="kolaborasi15" id="kolaborasi15" value="Obat">
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
                            <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse" data-target="#collapseOne12" aria-expanded="true" aria-controls="collapseOne12">
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
                                            <form id="dynamic-form" class="formtindakanperawat">
                                                <div id="form-container">
                                                    <div class="row mt-2">
                                                        <div class="col-3">
                                                            <div class="form-group">
                                                                <label for="name">Jam:</label>
                                                                <input type="time" name="waktu" id="waktu" value="" class="waktu form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="name">TINDAKAN KEPERAWATAN :</label>
                                                                <input type="text" name="tindakankeperawatan" id="tindakankeperawatan" value="" class="tindakan_keperawatan form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-group">
                                                                <!-- <i class="bi bi-x-square remove form-group col-md-2 text-danger"></i> -->
                                                                <!-- <button type="button" class="btn btn-danger mb-2 remove" >x</button> -->
                                                                <button type="button" class="btn btn-success mb-2 " id="add">Tambah</button>

                                                            </div>
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
            <div type="button" class="btn float-right btn-success simpanassesperawat" style="margin-top: 20px;">
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
                            <h5 class="text-bold">{{$now}}</h5>

                        </td>
                    </tr>
                    <tr>
                        <td class="text-bold font-italic">Sumber Data</td>
                        <td>
                            <div class="form-check form-check-inline">
                                @if($assesper[0]->sumber_data == 'Pasien Sendiri')
                                <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Pasien Sendiri" checked>
                                <label class="form-check-label" for="inlineRadio1">Pasien Sendiri / Autoanamase</label>
                                @else
                                <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Pasien Sendiri">
                                <label class="form-check-label" for="inlineRadio1">Pasien Sendiri / Autoanamase</label>
                                @endif
                            </div>

                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                @if($assesper[0]->sumber_data == 'Keluarga')
                                <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Keluarga" checked>
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

                                <input class="form-check-input" type="radio" name="asalmasuk" id="asalmasuk" value="Non Rujukan" checked>
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
                                <input class="form-check-input" type="radio" name="asalmasuk" id="asalmasuk" value="Rujukan" checked>
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
                                @if($assesper[0]->cara_masuk == 'Jalan Kaki')
                                <input class="form-check-input" type="radio" name="caramasuk" id="caramasuk" value="Jalan Kaki" checked>
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
                                <input class="form-check-input" type="radio" name="caramasuk" id="caramasuk" value="Kursi Roda" checked>
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
                                <input class="form-check-input" type="radio" name="caramasuk" id="caramasuk" value="Brankar" checked>
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
                                <i class="bi bi-book mr-1 ml-1"></i>(S) SUBYEKTIF
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne92" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample92">
                        <div class="card-body bg-light">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion" id="accordionExample93">
                <div class="card">
                    <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse" data-target="#collapseOne93" aria-expanded="true" aria-controls="collapseOne93">
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
                                                            <div class="form-check">
                                                                @if($assesper[0]->keadaan_umum == 'Baik')
                                                                <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Baik" checked>
                                                                <label class="form-check-label">Baik</label>
                                                                @else
                                                                <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Baik">
                                                                <label class="form-check-label">Baik</label>
                                                                @endif
                                                            </div>
                                                            <div class="form-check">
                                                                @if($assesper[0]->keadaan_umum == 'Sedang')
                                                                <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Sedang" checked>
                                                                <label class="form-check-label">Sedang</label>
                                                                @else
                                                                <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Sedang">
                                                                <label class="form-check-label">Sedang</label>
                                                                @endif
                                                            </div>
                                                            <div class="form-check">
                                                                @if($assesper[0]->keadaan_umum == 'Buruk')
                                                                <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Buruk" checked>
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
                                                                @if($assesper[0]->kesadaran == '13-15')
                                                                <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="13-15" checked>
                                                                <label class="form-check-label">13-15</label>
                                                                @else
                                                                <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="13-15">
                                                                <label class="form-check-label">13-15</label>
                                                                @endif
                                                            </div>
                                                            <div class="form-check">
                                                                @if($assesper[0]->kesadaran == '9-12')
                                                                <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="9-12" checked>
                                                                <label class="form-check-label">9-12</label>
                                                                @else
                                                                <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="9-12">
                                                                <label class="form-check-label">9-12</label>
                                                                @endif
                                                            </div>
                                                            <div class="form-check">
                                                                @if($assesper[0]->kesadaran == '3-8')
                                                                <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="3-8" checked>
                                                                <label class="form-check-label">3-8</label>
                                                                @else
                                                                <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="3-8">
                                                                <label class="form-check-label">3-8</label>
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
                                                        <td class="text-bold font-italic">Pupil </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->pupil == 'Normal')
                                                                        <input class="form-check-input" type="checkbox" name="pupil" id="pupil" value="Normal" checked>
                                                                        <label class="form-check-label">Normal </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="pupil" id="pupil" value="Normal">
                                                                        <label class="form-check-label">Normal </label>
                                                                        @endif

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->pupil_1 == 'Miosis')
                                                                        <input class="form-check-input" type="checkbox" name="pupil1" id="pupil1" value="Miosis" checked>
                                                                        <label class="form-check-label">Miosis </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="pupil1" id="pupil1" value="Miosis">
                                                                        <label class="form-check-label">Miosis </label>
                                                                        @endif

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->pupil_2 == 'Midriasis')
                                                                        <input class="form-check-input" type="checkbox" name="pupil2" id="pupil2"  checked value="Midriasis">
                                                                        <label class="form-check-label">Midriasis </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="pupil2" id="pupil2"  value="Midriasis">
                                                                        <label class="form-check-label">Midriasis </label>
                                                                        @endif

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->pupil_3 == 'Isokor')
                                                                        <input class="form-check-input" type="checkbox" name="pupil3" id="pupil3" value="Isokor" checked>
                                                                        <label class="form-check-label">Isokor </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="pupil3" id="pupil3" value="Isokor">
                                                                        <label class="form-check-label">Isokor </label>
                                                                        @endif

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->pupil_4 == 'Anisokor')
                                                                        <input class="form-check-input" type="checkbox" name="pupil4" id="pupil4" checked value="Anisokor">
                                                                        <label class="form-check-label">Anisokor </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="pupil4" id="pupil4" value="Anisokor">
                                                                        <label class="form-check-label">Anisokor </label>
                                                                        @endif

                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->pupil_5 == 'Tidak Ada')
                                                                        <input class="form-check-input" type="checkbox" name="pupil5" id="pupil5" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="pupil5" id="pupil5" value="Tidak Ada">
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @endif

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Tekanan Intrakranial </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->tekanan_intrakranial == 'Sakit Kepala')
                                                                        <input class="form-check-input" type="checkbox" name="intra" id="intra" value="Sakit Kepala" checked>
                                                                        <label class="form-check-label">Sakit Kepala </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="intra" id="intra" value="Sakit Kepala">
                                                                        <label class="form-check-label">Sakit Kepala </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->tekanan_intrakranial_1 == 'Muntah')
                                                                        <input class="form-check-input" type="checkbox" name="intra1" id="intra1" value="Muntah" checked>
                                                                        <label class="form-check-label">Muntah </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="intra1" id="intra1" value="Muntah">
                                                                        <label class="form-check-label">Muntah </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->tekanan_intrakranial_2 == 'Pusing')
                                                                        <input class="form-check-input" type="checkbox" name="intra2" id="intra2" value="Pusing" checked>
                                                                        <label class="form-check-label">Pusing </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="intra2" id="intra2" value="Pusing">
                                                                        <label class="form-check-label">Pusing </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->tekanan_intrakranial_3 == 'Hypertensi')
                                                                        <input class="form-check-input" type="checkbox" name="intra3" id="intra3" value="Hypertensi" checked>
                                                                        <label class="form-check-label">Hypertensi </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="intra3" id="intra3" value="Hypertensi">
                                                                        <label class="form-check-label">Hypertensi </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->tekanan_intrakranial_4 == 'Bingung')
                                                                        <input class="form-check-input" type="checkbox" name="intra4" id="intra4" value="Bingung" checked>
                                                                        <label class="form-check-label">Bingung </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="intra4" id="intra4" value="Bingung">
                                                                        <label class="form-check-label">Bingung </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->tekanan_intrakranial_5 == 'Hipotensi')
                                                                        <input class="form-check-input" type="checkbox" name="intra5" id="intra5" value="Hipotensi" checked>
                                                                        <label class="form-check-label">Hipotensi </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="intra5" id="intra5" value="Hipotensi">
                                                                        <label class="form-check-label">Hipotensi </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->tekanan_intrakranial_6 == 'Tidak Ada')
                                                                        <input class="form-check-input" type="checkbox" name="intra6" id="intra6" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="intra6" id="intra6" value="Tidak Ada">
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Neuro Sensorik</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->neuro_sensorik == 'Spasme otot')
                                                                        <input class="form-check-input" type="checkbox" name="neuro" id="neuro" value="Spasme otot" checked>
                                                                        <label class="form-check-label">Spasme otot </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="neuro" id="neuro" value="Spasme otot">
                                                                        <label class="form-check-label">Spasme otot </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->neuro_sensorik_1 == 'Perubahan Sensorik')
                                                                        <input class="form-check-input" type="checkbox" name="neuro1" id="neuro1" value="Perubahan Sensorik" checked>
                                                                        <label class="form-check-label">Perubahan Sensorik </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="neuro1" id="neuro1" value="Perubahan Sensorik">
                                                                        <label class="form-check-label">Perubahan Sensorik </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->neuro_sensorik_2 == 'Perubahan Motorik')
                                                                        <input class="form-check-input" type="checkbox" name="neuro2" id="neuro2" value="Perubahan Motorik" checked>
                                                                        <label class="form-check-label">Perubahan Motorik </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="neuro2" id="neuro2" value="Perubahan Motorik">
                                                                        <label class="form-check-label">Perubahan Motorik </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->neuro_sensorik_3 == 'Tidak Ada')
                                                                        <input class="form-check-input" type="checkbox" name="neuro3" id="neuro3" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="neuro3" id="neuro3" value="Tidak Ada">
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Muskolo Skeletal</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->muskolo_skletal == 'Kerusakan Jaringan / Luka')
                                                                        <input class="form-check-input" type="checkbox" name="muskolo" id="muskolo" value="Kerusakan Jaringan / Luka" checked>
                                                                        <label class="form-check-label">Kerusakan Jaringan / Luka </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="muskolo" id="muskolo" value="Kerusakan Jaringan / Luka">
                                                                        <label class="form-check-label">Kerusakan Jaringan / Luka </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->muskolo_skletal_1 == 'Perubahan Ekstremitas')
                                                                        <input class="form-check-input" type="checkbox" name="muskolo1" id="muskolo1" value="Perubahan Ekstremitas" checked>
                                                                        <label class="form-check-label">Perubahan Ekstremitas </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="muskolo1" id="muskolo1" value="Perubahan Ekstremitas">
                                                                        <label class="form-check-label">Perubahan Ekstremitas </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->muskolo_skletal_2 == 'Penurunan Tingkat Kesadaran')
                                                                        <input class="form-check-input" type="checkbox" name="muskolo2" id="muskolo2" value="Penurunan Tingkat Kesadaran" checked>
                                                                        <label class="form-check-label">Penurunan Tingkat Kesadaran </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="muskolo2" id="muskolo2" value="Penurunan Tingkat Kesadaran">
                                                                        <label class="form-check-label">Penurunan Tingkat Kesadaran </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->muskolo_skletal_3 == 'Fraktur / Dislokasi / Luksasio')
                                                                        <input class="form-check-input" type="checkbox" name="muskolo3" id="muskolo3" value="Fraktur / Dislokasi / Luksasio" checked>
                                                                        <label class="form-check-label">Fraktur / Dislokasi / Luksasio </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="muskolo3" id="muskolo3" value="Fraktur / Dislokasi / Luksasio">
                                                                        <label class="form-check-label">Fraktur / Dislokasi / Luksasio </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->muskolo_skletal_4 == 'Tidak Ada')
                                                                        <input class="form-check-input" type="checkbox" name="muskolo" id="muskolo" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="muskolo4" id="muskolo4" value="Tidak Ada">
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Integumen</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->integumen == 'Luka Bakar')
                                                                        <input class="form-check-input" type="checkbox" name="integumen" id="integumen" value="Luka Bakar" checked>
                                                                        <label class="form-check-label">Luka Bakar </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="integumen" id="integumen" value="Luka Bakar">
                                                                        <label class="form-check-label">Luka Bakar </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->integumen_1 == 'Luka Robek')
                                                                        <input class="form-check-input" type="checkbox" name="integumen1" id="integumen1" value="Luka Robek" checked>
                                                                        <label class="form-check-label">Luka Robek </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="integumen1" id="integumen1" value="Luka Robek">
                                                                        <label class="form-check-label">Luka Robek </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->integumen_2 == 'Lecet')
                                                                        <input class="form-check-input" type="checkbox" name="integumen2" id="integumen2" value="Lecet" checked>
                                                                        <label class="form-check-label">Lecet </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="integumen2" id="integumen2" value="Lecet">
                                                                        <label class="form-check-label">Lecet </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->integumen_3 == 'Luka Dekubitus')
                                                                        <input class="form-check-input" type="checkbox" name="integumen3" id="integumen3" value="Luka Dekubitus" checked>
                                                                        <label class="form-check-label">Luka Dekubitus </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="integumen3" id="integumen3" value="Luka Dekubitus">
                                                                        <label class="form-check-label">Luka Dekubitus </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->integumen_4 == 'Luka gangren')
                                                                        <input class="form-check-input" type="checkbox" name="integumen4" id="integumen4" value="Luka gangren" checked>
                                                                        <label class="form-check-label">Luka gangren </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="integumen4" id="integumen4" value="Luka gangren">
                                                                        <label class="form-check-label">Luka gangren </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->integumen_5 == 'Tidak Ada')
                                                                        <input class="form-check-input" type="checkbox" name="integumen5" id="integumen5" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="integumen5" id="integumen5" value="Tidak Ada">
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Turgor Kulit</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->turgor_kulit == 'Baik')
                                                                        <input class="form-check-input" type="checkbox" name="turgor" id="turgor" value="Baik" checked>
                                                                        <label class="form-check-label">Baik </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="turgor" id="turgor" value="Baik">
                                                                        <label class="form-check-label">Baik </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->turgor_kulit_1 == 'Menurun')
                                                                        <input class="form-check-input" type="checkbox" name="turgor1" id="turgor1" value="Menurun" checked>
                                                                        <label class="form-check-label">Menurun </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="turgor1" id="turgor1" value="Menurun">
                                                                        <label class="form-check-label">Menurun </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->turgor_kulit_2 == 'Tidak Ada')
                                                                        <input class="form-check-input" type="checkbox" name="turgor2" id="turgor2" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="turgor2" id="turgor2" value="Tidak Ada">
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Edema</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->edema == 'Ekstremitas')
                                                                        <input class="form-check-input" type="checkbox" name="edema" id="edema" value="Ekstremitas" checked>
                                                                        <label class="form-check-label">Ekstremitas </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="edema" id="edema" value="Ekstremitas">
                                                                        <label class="form-check-label">Ekstremitas </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->edema_1 == 'Seluruh tubuh')
                                                                        <input class="form-check-input" type="checkbox" name="edema1" id="edema1" value="Seluruh tubuh" checked>
                                                                        <label class="form-check-label">Seluruh tubuh </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="edema1" id="edema1" value="Seluruh tubuh">
                                                                        <label class="form-check-label">Seluruh tubuh </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->edema_2 == 'Ascites')
                                                                        <input class="form-check-input" type="checkbox" name="edema2" id="edema2" value="Ascites" checked>
                                                                        <label class="form-check-label">Ascites </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="edema2" id="edema2" value="Ascites">
                                                                        <label class="form-check-label">Ascites </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->edema_3 == 'Palpebra')
                                                                        <input class="form-check-input" type="checkbox" name="edema3" id="edema3" value="Palpebra" checked>
                                                                        <label class="form-check-label">Palpebra </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="edema3" id="edema3" value="Palpebra">
                                                                        <label class="form-check-label">Palpebra </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->edema_4 == 'Tidak Ada')
                                                                        <input class="form-check-input" type="checkbox" name="edema4" id="edema4" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="edema4" id="edema4" value="Tidak Ada">
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Mukosa Mulut</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->mukosa_mulut == 'Kering')
                                                                        <input class="form-check-input" type="checkbox" name="Mukosa" id="Mukosa" value="Kering" checked>
                                                                        <label class="form-check-label">Kering </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="Mukosa" id="Mukosa" value="Kering">
                                                                        <label class="form-check-label">Kering </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->mukosa_mulut_1 == 'Lembab')
                                                                        <input class="form-check-input" type="checkbox" name="mukosa1" id="mukosa1" value="Lembab" checked>
                                                                        <label class="form-check-label">Lembab </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="mukosa1" id="mukosa1" value="Lembab">
                                                                        <label class="form-check-label">Lembab </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->mukosa_mulut_2 == 'Tidak Ada')
                                                                        <input class="form-check-input" type="checkbox" name="mukosa2" id="mukosa2" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="mukosa2" id="mukosa2" value="Tidak Ada">
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Pendarahan</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <div class="col-md-3">
                                                                            <div class="form-check">
                                                                                @if($assesper[0]->pendarahan == 'Tidak Ada')
                                                                                <input class="form-check-input" type="radio" name="pendarahan" id="pendarahan" value="Tidak Ada" checked>
                                                                                <label class="form-check-label">Tidak Ada </label>
                                                                                @else
                                                                                <input class="form-check-input" type="radio" name="pendarahan" id="pendarahan" value="Tidak Ada">
                                                                                <label class="form-check-label">Tidak Ada </label>
                                                                                @endif

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        @if($assesper[0]->pendarahan == 'ADA')
                                                                        <input class="form-check-input" type="radio" name="pendarahan" id="pendarahan" value="pendarahan" checked>
                                                                        <label class="form-check-label">Jumlah </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="pendarahan" id="pendarahan" value="pendarahan">
                                                                        <label class="form-check-label">Jumlah </label>
                                                                        @endif
                                                                        <input class="form-control" placeholder="{{$assesper[0]->jumlah_pendarahan}}" type="input" name="jumlahdarah" id="jumlahdarah" value="{{$assesper[0]->jumlah_pendarahan}}">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Intoksikasi</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->introksikasi == 'Makanan')
                                                                        <input class="form-check-input" type="checkbox" name="intoksikasi" id="intoksikasi" value="Makanan" checked>
                                                                        <label class="form-check-label">Makanan </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="intoksikasi" id="intoksikasi" value="Makanan">
                                                                        <label class="form-check-label">Makanan </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->introksikasi_1 == 'Gigitan Binatang')
                                                                        <input class="form-check-input" type="checkbox" name="intoksikasi1" id="intoksikasi1" value="Gigitan Binatang" checked>
                                                                        <label class="form-check-label">Gigitan Binatang </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="intoksikasi1" id="intoksikasi1" value="Gigitan Binatang">
                                                                        <label class="form-check-label">Gigitan Binatang </label>
                                                                        @endif

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->introksikasi_2 == 'Zat Kimia')
                                                                        <input class="form-check-input" type="checkbox" name="intoksikasi2" id="intoksikasi2" value="Zat Kimia" checked>
                                                                        <label class="form-check-label">Zat Kimia </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="intoksikasi2" id="intoksikasi2" value="Zat Kimia">
                                                                        <label class="form-check-label">Zat Kimia </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->introksikasi_3 == 'Gas')
                                                                        <input class="form-check-input" type="checkbox" name="intoksikasi3" id="intoksikasi3" value="Gas" checked>
                                                                        <label class="form-check-label">Gas </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="intoksikasi3" id="intoksikasi3" value="Gas">
                                                                        <label class="form-check-label">Gas </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->introksikasi_4 == 'Obat')
                                                                        <input class="form-check-input" type="checkbox" name="intoksikasi4" id="intoksikasi4" value="Obat" checked>
                                                                        <label class="form-check-label">Obat </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="intoksikasi4" id="intoksikasi4" value="Obat">
                                                                        <label class="form-check-label">Obat </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->introksikasi_5 == 'Tidak Ada')
                                                                        <input class="form-check-input" type="checkbox" name="intoksikasi5" id="intoksikasi5" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="intoksikasi5" id="intoksikasi5" value="Tidak Ada">
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Eliminasi</td>
                                                        <td>

                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">BAB</td>
                                                        <td>
                                                            <div class="row">

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-check-label float-center">FREKUENSI</label>

                                                                        <input class="form-control" placeholder="" type="input" name="BABF" id="BABF" value="{{$assesper[0]->bab_frekuensi}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-check-label float-center">KONSISTENSI</label>

                                                                        <input class="form-control" placeholder="" type="input" name="BABK" id="BABK" value="{{$assesper[0]->bab_konsistensi}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
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

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-check-label float-center">FREKUENSI</label>

                                                                        <input class="form-control" placeholder="" type="input" name="BAKF" id="BAKF" value="{{$assesper[0]->bak_frekuensi}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="form-check-label float-center">KONSISTENSI</label>

                                                                        <input class="form-control" placeholder="" type="input" name="BAKK" id="BAKK" value="{{$assesper[0]->bak_konsistensi}}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionExample97">
                                <div class="card">
                                    <div class="card-header bg-secondary" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne97" aria-expanded="true" aria-controls="collapseOne97">
                                                <i class="bi bi-ticket-detailed mr-1 ml-1"></i> PSIKOSOSIAL, EKONOMI DAN SPIRTUAL
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne97" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample97">
                                        <div class="card-body bg-light">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-bold font-italic">KECEMASAN </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->kecemasan == 'Sedang')
                                                                        <input class="form-check-input" type="radio" name="kecemasan" id="kecemasan" value="Sedang" checked>
                                                                        <label class="form-check-label">Sedang </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="kecemasan" id="kecemasan" value="Sedang">
                                                                        <label class="form-check-label">Sedang </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->kecemasan == 'Berat')
                                                                        <input class="form-check-input" type="radio" name="kecemasan" id="kecemasan" value="Berat" checked>
                                                                        <label class="form-check-label">Berat </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="kecemasan" id="kecemasan" value="Berat">
                                                                        <label class="form-check-label">Berat </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->kecemasan == 'Panik')
                                                                        <input class="form-check-input" type="radio" name="kecemasan" id="kecemasan" value="Panik" checked>
                                                                        <label class="form-check-label">Panik </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="kecemasan" id="kecemasan" value="Panik">
                                                                        <label class="form-check-label">Panik </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->kecemasan == 'Tidak Ada')
                                                                        <input class="form-check-input" type="radio" name="kecemasan" id="kecemasan" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="kecemasan" id="kecemasan" value="Tidak Ada">
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Koping Mekanisme </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->koping_mekanisme == 'Merusak Diri')
                                                                        <input class="form-check-input" type="radio" name="koping" id="koping" value="Merusak Diri" checked>
                                                                        <label class="form-check-label">Merusak Diri </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="koping" id="koping" value="Merusak Diri">
                                                                        <label class="form-check-label">Merusak Diri </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->koping_mekanisme == 'Menarik Diri / Isolasi Sosial')
                                                                        <input class="form-check-input" type="radio" name="koping" id="koping" value="Menarik Diri / Isolasi Sosial" checked>
                                                                        <label class="form-check-label">Menarik Diri / Isolasi Sosial </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="koping" id="koping" value="Menarik Diri / Isolasi Sosial">
                                                                        <label class="form-check-label">Menarik Diri / Isolasi Sosial </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->koping_mekanisme == 'Perilaku Kekerasan')
                                                                        <input class="form-check-input" type="radio" name="koping" id="koping" value="Perilaku Kekerasan" checked>
                                                                        <label class="form-check-label">Perilaku Kekerasan </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="koping" id="koping" value="Perilaku Kekerasan">
                                                                        <label class="form-check-label">Perilaku Kekerasan </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->koping_mekanisme == 'Tidak Ada')
                                                                        <input class="form-check-input" type="radio" name="koping" id="koping" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="koping" id="koping" value="Tidak Ada">
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @endif
                                                                    </div>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionExample98">
                                <div class="card">
                                    <div class="card-header bg-secondary" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne98" aria-expanded="true" aria-controls="collapseOne98">
                                                <i class="bi bi-ticket-detailed mr-1 ml-1"></i> SKALA NYERI
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne98" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample98">
                                        <div class="card-body bg-light">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-bold font-italic">Apakah Terdapat Keluhan Nyeri ?? </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->keluhan_nyeri == 'Ya')
                                                                        <input class="form-check-input" type="radio" name="nyeri" id="nyeri" value="Ya" checked>
                                                                        <label class="form-check-label">Ya </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="nyeri" id="nyeri" value="Ya">
                                                                        <label class="form-check-label">Ya </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->keluhan_nyeri == 'Tidak Ada')
                                                                        <input class="form-check-input" type="radio" name="nyeri" id="nyeri" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="nyeri" id="nyeri" value="Tidak Ada">
                                                                        <label class="form-check-label">Tidak Ada </label>
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
                                                                        @if($assesper[0]->lamanya_nyeri == '< 3 bulan=akut') <input class="form-check-input" type="radio" name="lamanyeri" id="lamanyeri" value="< 3 bulan = akut" checked>
                                                                            <label class="form-check-label">
                                                                                < 3 bulan=akut </label>
                                                                                    @else
                                                                                    <input class="form-check-input" type="radio" name="lamanyeri" id="lamanyeri" value="< 3 bulan = akut">
                                                                                    <label class="form-check-label">
                                                                                        < 3 bulan=akut </label>
                                                                                            @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->lamanya_nyeri == '> 3 bulan = kronik')
                                                                        <input class="form-check-input" type="radio" name="lamanyeri" id="lamanyeri" value="> 3 bulan = kronik" checked>
                                                                        <label class="form-check-label">> 3 bulan = kronik </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="lamanyeri" id="lamanyeri" value="> 3 bulan = kronik">
                                                                        <label class="form-check-label">> 3 bulan = kronik </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->lamanya_nyeri == 'Tidak Ada')
                                                                        <input class="form-check-input" type="radio" name="lamanyeri" id="lamanyeri" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="lamanyeri" id="lamanyeri" value="Tidak Ada">
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
                                                                        @if($assesper[0]->rasa_nyeri == 'Tajam')
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri" id="rasanyeri" value="Tajam" checked>
                                                                        <label class="form-check-label">Tajam </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri" id="rasanyeri" value="Tajam">
                                                                        <label class="form-check-label">Tajam </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->rasa_nyeri_1 == 'Nyeri Tumpul')
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri1" id="rasanyeri1" value="Nyeri Tumpul" checked>
                                                                        <label class="form-check-label">Nyeri Tumpul </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri1" id="rasanyeri1" value="Nyeri Tumpul">
                                                                        <label class="form-check-label">Nyeri Tumpul </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->rasa_nyeri_2 == 'Seperti Ditarik')
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri2" id="rasanyeri2" value="Seperti Ditarik" checked>
                                                                        <label class="form-check-label">Seperti Ditarik </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri2" id="rasanyeri2" value="Seperti Ditarik">
                                                                        <label class="form-check-label">Seperti Ditarik </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->rasa_nyeri_3 == 'Seperti Di tusuk')
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri3" id="rasanyeri3" value="Seperti Di tusuk" checked>
                                                                        <label class="form-check-label">Seperti Di tusuk </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri3" id="rasanyeri3" value="Seperti Di tusuk">
                                                                        <label class="form-check-label">Seperti Di tusuk </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->rasa_nyeri_4 == 'Seperti Dipukul')
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri4" id="rasanyeri4" value="Seperti Dipukul" checked>
                                                                        <label class="form-check-label">Seperti Dipukul </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri4" id="rasanyeri4" value="Seperti Dipukul">
                                                                        <label class="form-check-label">Seperti Dipukul </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->rasa_nyeri_5 == 'Seperti Dibakar')
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri5" id="rasanyeri5" value="Seperti Dibakar" checked>
                                                                        <label class="form-check-label">Seperti Dibakar </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri5" id="rasanyeri5" value="Seperti Dibakar">
                                                                        <label class="form-check-label">Seperti Dibakar </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->rasa_nyeri_6 == 'Seperti Berdenyut')
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri6" id="rasanyeri6" value="Seperti Berdenyut" checked>
                                                                        <label class="form-check-label">Seperti Berdenyut </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri6" id="rasanyeri6" value="Seperti Berdenyut">
                                                                        <label class="form-check-label">Seperti Berdenyut </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->rasa_nyeri_7 == 'Seperti Ditikam')
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri7" id="rasanyeri7" value="Seperti Ditikam" checked>
                                                                        <label class="form-check-label">Seperti Ditikam </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri7" id="rasanyeri7" value="Seperti Ditikam">
                                                                        <label class="form-check-label">Seperti Ditikam </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->rasa_nyeri_8 == 'Seperti Kram')
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri8" id="rasanyeri8" value="Seperti Kram" checked>
                                                                        <label class="form-check-label">Seperi Kram </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri8" id="rasanyeri8" value="Seperti Kram">
                                                                        <label class="form-check-label">Seperi Kram </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->rasa_nyeri_9 == 'Tidak Ada')
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri9" id="rasanyeri9" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Seperi Kram </label>
                                                                        @else
                                                                        <input class="form-check-input" type="checkbox" name="rasanyeri9" id="rasanyeri9" value="Tidak Ada">
                                                                        <label class="form-check-label">Seperi Kram </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Seberapa Sering Anda Mengalami Nyeri ini? Berapa Lama ?? </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        <label class="texxt-bold">Setiap :</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->sering_nyeri == '1 -2 jam')
                                                                        <input class="form-check-input" type="radio" name="seringnyeri" id="seringnyeri" value="1 -2 jam" checked>
                                                                        <label class="form-check-label">1 -2 jam </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="seringnyeri" id="seringnyeri" value="1 -2 jam">
                                                                        <label class="form-check-label">1 -2 jam </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->sering_nyeri == '3 - 4 jam')
                                                                        <input class="form-check-input" type="radio" name="seringnyeri" id="seringnyeri" value="3 - 4 jam" checked>
                                                                        <label class="form-check-label">3 - 4 jam </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="seringnyeri" id="seringnyeri" value="3 - 4 jam">
                                                                        <label class="form-check-label">3 - 4 jam </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->sering_nyeri == 'Tidak Ada')
                                                                        <input class="form-check-input" type="radio" name="seringnyeri" id="seringnyeri" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="seringnyeri" id="seringnyeri" value="Tidak Ada">
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
                                                                        @if($assesper[0]->serring_nyeri == '< 30 Menit') <input class="form-check-input" type="radio" name="serringnyeri" id="serringnyeri" value="< 30 Menit" checked>
                                                                            <label class="form-check-label">
                                                                                < 30 Menit </label>
                                                                                    @else
                                                                                    <input class="form-check-input" type="radio" name="serringnyeri" id="serringnyeri" value="< 30 Menit">
                                                                                    <label class="form-check-label">
                                                                                        < 30 Menit </label>
                                                                                            @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->serring_nyeri == '> 30 Menit') <input class="form-check-input" type="radio" name="serringnyeri" id="serringnyeri" value="> 30 Menit" checked>
                                                                        <label class="form-check-label">> 30 Menit </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="serringnyeri" id="serringnyeri" value="> 30 Menit">
                                                                        <label class="form-check-label">> 30 Menit </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->serring_nyeri == 'Tidak Ada') <input class="form-check-input" type="radio" name="serringnyeri" id="serringnyeri" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="serringnyeri" id="serringnyeri" value="Tidak Ada">
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @endif
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-bold font-italic">Apa yang membuat nyeri berkurang dan bertambah parah? </td>
                                                        <td>
                                                            <div class="row">

                                                                <div class="col-md-4">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->berkurang_nyeri == 'Kompres hangat/ dingin')
                                                                        <input class="form-check-input" type="radio" name="berkurangnyeri" id="berkurangnyeri" value="Kompres hangat/ dingin" checked>
                                                                        <label class="form-check-label">Kompres hangat/ dingin </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="berkurangnyeri" id="berkurangnyeri" value="Kompres hangat/ dingin">
                                                                        <label class="form-check-label">Kompres hangat/ dingin </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->berkurang_nyeri == 'Aktivitas dikurangi / bertambah')
                                                                        <input class="form-check-input" type="radio" name="berkurangnyeri" id="berkurangnyeri" value="Aktivitas dikurangi / bertambah" checked>
                                                                        <label class="form-check-label">Aktivitas dikurangi / bertambah </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="berkurangnyeri" id="berkurangnyeri" value="Aktivitas dikurangi / bertambah">
                                                                        <label class="form-check-label">Aktivitas dikurangi / bertambah </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-check">
                                                                        @if($assesper[0]->berkurang_nyeri == 'Tidak Ada')
                                                                        <input class="form-check-input" type="radio" name="berkurangnyeri" id="berkurangnyeri" value="Tidak Ada" checked>
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @else
                                                                        <input class="form-check-input" type="radio" name="berkurangnyeri" id="berkurangnyeri" value="Tidak Ada">
                                                                        <label class="form-check-label">Tidak Ada </label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>

                                                </tbody>
                                            </table>

                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-bold">LOKASI NYERI </td>

                                                        <td>
                                                            <div type="button" class="btn btn-secondary penandaan ml-3 mb-3" style="margin-top: 20px;">
                                                                PENANDAAN GAMBAR
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">

                                                                    <div class="penandaangambar">
                                                                        @if($assesper[0]->penandaan_gambar == NULL)
                                                                        <div class="card">
                                                                            <div class="card-header  bg-warning">Penandaan Gambar</div>
                                                                            <div class="card-body">
                                                                                <input type="text" hidden id="gambarcoret" name="gambarcoret">
                                                                                <img id="gambarnya1" style="margin-top:50px" width="600px" height="400px" src="{{ asset('public/img/nyeri.png') }}" onclick="showMarkerArea(this);" />
                                                                                <canvas hidden id="myCanvas1" width="600px" height="400px" style="border:1px solid #d3d3d3;">
                                                                                </canvas>
                                                                                <button type="button" class="btn btn-danger mt-2" onclick="batalgambar1()">batal</button>

                                                                            </div>
                                                                        </div>
                                                                        @else
                                                                        <img id="gambarnya1" style="margin-top:50px" width="600px" height="400px" src="{{ $assesper[0]->penandaan_gambar }}" onclick="showMarkerArea(this);" />

                                                                        <div class="card">
                                                                            <div class="card-header  bg-warning">Penandaan Gambar</div>
                                                                            <div class="card-body">
                                                                                <input type="text" hidden id="gambarcoret" name="gambarcoret">
                                                                                <img id="gambarnya1" style="margin-top:50px" width="600px" height="400px" src="{{ asset('public/img/nyeri.png') }}" onclick="showMarkerArea(this);" />
                                                                                <canvas hidden id="myCanvas1" width="600px" height="400px" style="border:1px solid #d3d3d3;">
                                                                                </canvas>
                                                                                <button type="button" class="btn btn-danger mt-2" onclick="batalgambar1()">batal</button>

                                                                            </div>
                                                                        </div>


                                                                        @endif

                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                @if($assesper[0]->scale_nyeri == 'Tidak ada Nyeri = 0')
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Tidak ada Nyeri = 0" checked>
                                                                <label class="form-check-label">Tidak Nyeri = 0 </label>
                                                                @else
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Tidak ada Nyeri = 0">
                                                                <label class="form-check-label">Tidak Nyeri = 0 </label>
                                                                @endif
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                @if($assesper[0]->scale_nyeri == 'Sedikit Nyeri = 1 - 2')
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Sedikit Nyeri = 1 - 2" checked>
                                                                <label class="form-check-label">Sedikit Nyeri = 1 - 2 </label>
                                                                @else
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Sedikit Nyeri = 1 - 2">
                                                                <label class="form-check-label">Sedikit Nyeri = 1 - 2 </label>
                                                                @endif
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                @if($assesper[0]->scale_nyeri == 'Sedikit lebih Nyeri = 3 - 4')
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Sedikit lebih Nyeri = 3 - 4" checked>
                                                                <label class="form-check-label">Sedikit lebih Nyeri = 3 - 4 </label>
                                                                @else
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Sedikit lebih Nyeri = 3 - 4">
                                                                <label class="form-check-label">Sedikit lebih Nyeri = 3 - 4 </label>
                                                                @endif
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                @if($assesper[0]->scale_nyeri == 'Sedikit Nyeri = 5 - 6')
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Sedikit Nyeri = 5 - 6" checked>
                                                                <label class="form-check-label">Sedikit Nyeri = 5 - 6 </label>
                                                                @else
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Sedikit Nyeri = 5 - 6">
                                                                <label class="form-check-label">Sedikit Nyeri = 5 - 6 </label>
                                                                @endif
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                @if($assesper[0]->scale_nyeri == 'Sedikit Nyeri = 7 - 8')
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Sedikit Nyeri = 7 - 8" checked>
                                                                <label class="form-check-label">Sedikit Nyeri = 7 - 8 </label>
                                                                @else
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Sedikit Nyeri = 7 - 8">
                                                                <label class="form-check-label">Sedikit Nyeri = 7 - 8 </label>
                                                                @endif
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                @if($assesper[0]->scale_nyeri == 'Sedikit Nyeri = 9 - 10')
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Sedikit Nyeri = 9 - 10" checked>
                                                                <label class="form-check-label">Sedikit Nyeri = 9 - 10 </label>
                                                                @else
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Sedikit Nyeri = 9 - 10">
                                                                <label class="form-check-label">Sedikit Nyeri = 9 - 10 </label>
                                                                @endif
                                                            </div>
                                                        </td>
                                                        <td class="text-bold">Pasien Anak-anak Menggunakan Wong Baker Face <br> <img src="public/img/wongbakerr.jpg" /><br>
                                                            <div class="row mt-4" style="margin-left: 60px;">
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '0')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="0" checked>
                                                                    <label class="form-check-label">0 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="0">
                                                                    <label class="form-check-label">0 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '1')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="1" checked>
                                                                    <label class="form-check-label">1 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="1">
                                                                    <label class="form-check-label">1 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '2')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="2" checked>
                                                                    <label class="form-check-label">2 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="2">
                                                                    <label class="form-check-label">2 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '3')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="3" checked>
                                                                    <label class="form-check-label">3 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="3">
                                                                    <label class="form-check-label">3 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '4')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="4" checked>
                                                                    <label class="form-check-label">4 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="4">
                                                                    <label class="form-check-label">4 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '5')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="5" checked>
                                                                    <label class="form-check-label">5 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="5">
                                                                    <label class="form-check-label">5 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '6')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="6" checked>
                                                                    <label class="form-check-label">6 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="6">
                                                                    <label class="form-check-label">6 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '7')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="7" checked>
                                                                    <label class="form-check-label">7 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="7">
                                                                    <label class="form-check-label">7 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '8')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="8" checked>
                                                                    <label class="form-check-label">8 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="8">
                                                                    <label class="form-check-label">8 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '9')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="9" checked>
                                                                    <label class="form-check-label">9 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="9">
                                                                    <label class="form-check-label">9 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '10')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="10" checked>
                                                                    <label class="form-check-label">10 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="10">
                                                                    <label class="form-check-label">10 </label>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                        </td>


                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                @if($assesper[0]->scale_nyeri == 'Tidak Nyeri = 0')
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Tidak Nyeri = 0" checked>
                                                                <label class="form-check-label">Tidak Nyeri = 0 </label>
                                                                @else
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Tidak Nyeri = 0">
                                                                <label class="form-check-label">Tidak Nyeri = 0 </label>
                                                                @endif
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                @if($assesper[0]->scale_nyeri == 'Nyeri Ringan = 1 - 3')
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Nyeri Ringan = 1 - 3" checked>
                                                                <label class="form-check-label">Nyeri Ringan = 1 - 3 </label>
                                                                @else
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Nyeri Ringan = 1 - 3">
                                                                <label class="form-check-label">Nyeri Ringan = 1 - 3 </label>
                                                                @endif
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                @if($assesper[0]->scale_nyeri == 'Nyeri Sedang 4 - 6')
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Nyeri Sedang 4 - 6" checked>
                                                                <label class="form-check-label">Nyeri Sedang 4 - 6 </label>
                                                                @else
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Nyeri Sedang 4 - 6">
                                                                <label class="form-check-label">Nyeri Sedang 4 - 6 </label>
                                                                @endif
                                                            </div>
                                                            <br>
                                                            <div class="form-check">
                                                                @if($assesper[0]->scale_nyeri == 'Nyeri Hebat 7 - 10')
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Nyeri Hebat 7 - 10" checked>
                                                                <label class="form-check-label">Nyeri Hebat 7 - 10 </label>
                                                                @else
                                                                <input class="form-check-input" type="radio" name="scalenyeri" id="scalenyeri" value="Nyeri Hebat 7 - 10">
                                                                <label class="form-check-label">Nyeri Hebat 7 - 10 </label>
                                                                @endif
                                                            </div>

                                                        </td>
                                                        <td class="text-bold">Pasien Dewasa menggunakan numeric rating scale <br> <img src="public/img/numericcc.jpg" /><br>
                                                            <div class="row mt-4" style="margin-left: 30px;">
                                                                <div class="form-check" style="margin-left: 35px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '0.0')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="0.0" checked>
                                                                    <label class="form-check-label">0 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="0.0">
                                                                    <label class="form-check-label">0 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 50px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '1.0')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="1.0" checked>
                                                                    <label class="form-check-label">1 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="1.0">
                                                                    <label class="form-check-label">1 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 50px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '2.0')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="2.0" checked>
                                                                    <label class="form-check-label">2 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="2.0">
                                                                    <label class="form-check-label">2 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 50px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '3.0')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="3.0" checked>
                                                                    <label class="form-check-label">3 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="3.0">
                                                                    <label class="form-check-label">3 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 50px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '4.0')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="4.0" checked>
                                                                    <label class="form-check-label">4 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="4.0">
                                                                    <label class="form-check-label">4 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 50px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '5.0')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="5.0" checked>
                                                                    <label class="form-check-label">5 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="5.0">
                                                                    <label class="form-check-label">5 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 50px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '6.0')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="6.0" checked>
                                                                    <label class="form-check-label">6 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="6.0">
                                                                    <label class="form-check-label">6 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 50px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '7.0')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="7.0" checked>
                                                                    <label class="form-check-label">7 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="7.0">
                                                                    <label class="form-check-label">7 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 50px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '8.0')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="8.0" checked>
                                                                    <label class="form-check-label">8 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="8.0">
                                                                    <label class="form-check-label">8 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 50px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '9.0')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="9.0" checked>
                                                                    <label class="form-check-label">9 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="9.0">
                                                                    <label class="form-check-label">9 </label>
                                                                    @endif
                                                                </div>
                                                                <div class="form-check" style="margin-left: 45px;">
                                                                    @if($assesper[0]->scale_nyeri1 == '10.0')
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="10.0" checked>
                                                                    <label class="form-check-label">10 </label>
                                                                    @else
                                                                    <input class="form-check-input" type="radio" name="scalenyeri1" id="scalenyeri1" value="10.0">
                                                                    <label class="form-check-label">10 </label>
                                                                    @endif
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
                                                <div class="col-md-6">
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
                                                                        <input type="number" name="rjvalue" id="rjvalue" class="form-control" min="0" value="{{$assesper[0]->riwayat_jatuh}}" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Diagnosis sekunder (≥2 diagnosis medis)</td>
                                                                <td>Ya<br>Tidak </td>
                                                                <td>15 <br> 0 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="dsvalue" id="dsvalue" class="form-control" min="0" value="{{$assesper[0]->diagnosis_sekunder}}" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Alat bantu</td>
                                                                <td>Berpegangan pada perabot<br>Berpegangan pada perabot <br>Tidak ada / kursi roda / perawat / tirah baring </td>
                                                                <td>30 <br><br> 15 <br> <br> 0 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="abvalue" id="abvalue" class="form-control" min="0" value="{{$assesper[0]->alat_bantu}}" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Terpasang infuse</td>
                                                                <td>Ya<br>Tidak </td>
                                                                <td>20 <br> 0 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="tivalue" id="tivalue" class="form-control" min="0" value="{{$assesper[0]->terpasang_infuse}}" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Gaya berjalan</td>
                                                                <td>Terganggu<br>Lemah <br>Normal / tirah baring / imobilisasi</td>
                                                                <td>20 <br> 10 <br> 0 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="gbvalue" id="gbvalue" class="form-control" min="0" value="{{$assesper[0]->gaya_berjalan}}" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Status mental </td>
                                                                <td>Sering lupa akan keterbatasan yang dimiliki<br>Sadar akan kemampuan diri sendiri </td>
                                                                <td>15 <br><br> 10 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="smvalue" id="smvalue" class="form-control" min="0" value="{{$assesper[0]->status_mental}}" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td> </td>
                                                                <td>Total score</td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input readonly type="number" name="totalrisiko" id="totalrisiko" class="form-control" min="0" value="{{$assesper[0]->total_resiko_dewasa}}" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        @if($assesper[0]->penilaian_resiko_dewasa == 'Pasien anak mengunakan skala humpty dumpty')
                                                        <input class="form-check-input" type="radio" name="jatuh_dewasa" id="jatuh_dewasa" value="Pasien anak mengunakan skala humpty dumpty" checked>
                                                        <label class="form-check-label text-bold">Pasien anak mengunakan skala humpty dumpty </label>
                                                        @else
                                                        <input class="form-check-input" type="radio" name="jatuh_dewasa" id="jatuh_dewasa" value="Pasien anak mengunakan skala humpty dumpty">
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
                                                                        <input type="number" name="uvalue" id="uvalue" class="form-control" min="0" value="{{$assesper[0]->umur_resiko}}" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Kelamin</td>
                                                                <td>Laki – laki<br>Wanita</td>
                                                                <td> <br>1 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="jkvalue" id="jkvalue" class="form-control" min="0" value="{{$assesper[0]->jk_resiko}}" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Diagnosa</td>
                                                                <td>Neurologi<br>Respiratori, dehidrasi, anemia, anorexia, syncope <br>Perilaku <br>lain-lain </td>
                                                                <td>4 <br> 3 <br><br>2 <br>1 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="dvalue" id="dvalue" class="form-control" min="0" value="{{$assesper[0]->diagnosa_resiko}}" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Gangguan Kognitif</td>
                                                                <td>Keterbatasan daya piker<br>Pelupa, berkurangnya orientasi sekitar <br>Dapat menggunakan daya pikir tanpa hambatan </td>
                                                                <td> 3 <br>2 <br><br>1 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="gkvalue" id="gkvalue" class="form-control" min="0" value="{{$assesper[0]->kognitif_resiko}}" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Respon terhadap pembedahan, sedasi, dan anestesi</td>
                                                                <td>Dalam 24 jam<br>Dalam 48 jam <br>Lebih dari 48 jam / tidak ada respon </td>
                                                                <td> 3 <br>2 <br>1 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="rvalue" id="rvalue" class="form-control" min="0" value="{{$assesper[0]->respon_resiko}}" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>Penggunaan obat-obatan</td>
                                                                <td>Penggunaan bersamaan sedative, barbiturate, anti depresan, diuretik, narkotik<br>Salah satu dari obat di atas <br>Obatan – obatan lainnya / tanpa obat </td>
                                                                <td> 3 <br><br>2 <br><br>1 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="ovalue" id="ovalue" class="form-control" min="0" value="{{$assesper[0]->obat_resiko}}" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td> </td>
                                                                <td>Total score</td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input readonly type="number" name="totalrisiko1" id="totalrisiko1" class="form-control" min="0" value="{{$assesper[0]->total_resiko_anak}}" required />
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
                                                <div class="col-md-6">
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
                                                                        <input type="number" name="rjvalue" id="rjvalue" class="form-control" min="0" value="{{$assesper[0]->penurunan_bb}}" required />
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td></td>
                                                                <td>c. Ya , berapakah penurunan berat badan tersebut ? <br>1 – 5 Kg <br>6 – 10 kg <br>11 – 15 kg <br>>15 Kg <br> tidak yakin</td>
                                                                <td><br><br>1 <br>2 <br>3 <br>4 <br>2 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="rjvalue" id="rjvalue" class="form-control" min="0" value="{{$assesper[0]->asupan}}" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="text-bold">Apakah asupan makanan pasien buruk akibat nafsu makan yang menurun **? (misalnya asupan makan hanya ¾ dari biasanya)</td>
                                                                <td> a.Tidak <br><br>b.Ya</td>
                                                                <td>0 <br><br>1</td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="rjvalue" id="rjvalue" class="form-control" min="0" placeholder="" value="{{$assesper[0]->asupan}}" required />
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
                                                                        <input readonly type="number" name="totalnutrisi" id="totalnutrisi" class="form-control" min="0" value="{{$assesper[0]->total_nutrisi_dws}}" placeholder="" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        @if($assesper[0]->skrining_nutrisi_dws == 'pasien anak menggunakan strong kids')
                                                        <input class="form-check-input" type="radio" name="nutrisi_dws" id="nutrisi_dws" value="pasien anak menggunakan strong kids" checked>
                                                        <label class="form-check-label text-bold">pasien anak menggunakan strong kids </label>
                                                        @else
                                                        <input class="form-check-input" type="radio" name="nutrisi_dws" id="nutrisi_dws" value="pasien anak menggunakan strong kids">
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
                                                                        <input type="number" name="kuvalue" id="kuvalue" class="form-control" min="0" value="{{$assesper[0]->tampak_kurus}}" placeholder="" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="text-bold">2. Apakah ada penurunan BB selama satu bulan terakhir (berdasarkan penilaian objektif data BB bila ada / penilaian subjektif dari orang tua pasien ATAU untuk bayi < 1 tahun : BB naik selama 3 bulan terakhir)</td>
                                                                <td>Ya<br><br>Tidak </td>
                                                                <td>1 <br><br> 0 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="uvalue" id="uvalue" class="form-control" value="{{$assesper[0]->bb_sebulan}}" min="0" placeholder="" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td class="text-bold">3. Apakah terdapat salah satu dari kondisi berikut ? <br>• Diari > kali/hari dan atau muntah > 3 kali/hari dalam seminggu terakhir <br>• Asupan makanan berkurang selama 1 minggu terakhir</td>
                                                                <td>Ya<br><br>Tidak </td>
                                                                <td>1 <br><br> 0 </td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input type="number" name="uvalue" id="uvalue" class="form-control" min="0" value="{{$assesper[0]->kondisi}}" placeholder="" required />
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td> </td>
                                                                <td>Total score</td>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <input readonly type="number" name="totalnutrisi1" id="totalnutrisi1" class="form-control" min="0" value="{{$assesper[0]->total_nutrisi_ank}}" placeholder="" required />
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
                                        <td class="text-bold">DIAGNOSA KEPERAWATAN</td>
                                        <td>

                                            <div class="row">
                                                <div class="col-sm-12">

                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            @if($assesper[0]->diagnosa_perawat1 == 'Aktual / Risiko bersihan jalan nafas tidak efektif')
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan1" id="diagnosakeperawatan1" value="Aktual / Risiko bersihan jalan nafas tidak efektif" checked>
                                                            <label class="form-check-label">Aktual / Risiko bersihan jalan nafas tidak efektif</label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan1" id="diagnosakeperawatan1" value="Aktual / Risiko bersihan jalan nafas tidak efektif">
                                                            <label class="form-check-label">Aktual / Risiko bersihan jalan nafas tidak efektif</label>
                                                            @endif
                                                        </div>
                                                        <div class="form-check">
                                                            @if($assesper[0]->diagnosa_perawat2 == 'Aktual / Risiko pola nafas tidak efektif')
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan2" id="diagnosakeperawatan2" value="Aktual / Risiko pola nafas tidak efektif" checked>
                                                            <label class="form-check-label">Aktual / Risiko pola nafas tidak efektif</label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan2" id="diagnosakeperawatan2" value="Aktual / Risiko pola nafas tidak efektif">
                                                            <label class="form-check-label">Aktual / Risiko pola nafas tidak efektif</label>
                                                            @endif
                                                        </div>
                                                        <div class="form-check">
                                                            @if($assesper[0]->diagnosa_perawat3 == 'Aktual / Risiko gangguan pertukaran gas')
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan3" id="diagnosakeperawatan3" value="Aktual / Risiko gangguan pertukaran gas" checked>
                                                            <label class="form-check-label">Aktual / Risiko gangguan pertukaran gas</label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan3" id="diagnosakeperawatan3" value="Aktual / Risiko gangguan pertukaran gas">
                                                            <label class="form-check-label">Aktual / Risiko gangguan pertukaran gas</label>
                                                            @endif
                                                        </div>
                                                        <div class="form-check">
                                                            @if($assesper[0]->diagnosa_perawat4 == 'Aktual / Risiko gangguan sirkulasi')
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan4" id="diagnosakeperawatan4" value="Aktual / Risiko gangguan sirkulasi" checked>
                                                            <label class="form-check-label">Aktual / Risiko gangguan sirkulasi</label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan4" id="diagnosakeperawatan4" value="Aktual / Risiko gangguan sirkulasi">
                                                            <label class="form-check-label">Aktual / Risiko gangguan sirkulasi</label>
                                                            @endif
                                                        </div>
                                                        <div class="form-check">
                                                            @if($assesper[0]->diagnosa_perawat5 == 'Aktual / Risiko gangguan perfusi jaringan / cerebral')
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan5" id="diagnosakeperawatan5" value="Aktual / Risiko gangguan perfusi jaringan / cerebral" checked>
                                                            <label class="form-check-label">Aktual / Risiko gangguan perfusi jaringan / cerebral </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan5" id="diagnosakeperawatan5" value="Aktual / Risiko gangguan perfusi jaringan / cerebral">
                                                            <label class="form-check-label">Aktual / Risiko gangguan perfusi jaringan / cerebral </label>
                                                            @endif
                                                        </div>
                                                        <div class="form-check">
                                                            @if($assesper[0]->diagnosa_perawat6 == 'Hipertermia')
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan6" id="diagnosakeperawatan6" value="Hipertermia" checked>
                                                            <label class="form-check-label">Hipertermia </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan6" id="diagnosakeperawatan6" value="Hipertermia">
                                                            <label class="form-check-label">Hipertermia </label>
                                                            @endif
                                                        </div>
                                                        <div class="form-check">
                                                            @if($assesper[0]->diagnosa_perawat7 == 'Aktual / Risiko gangguan keseimbangan cairan')
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan7" id="diagnosakeperawatan7" value="Aktual / Risiko gangguan keseimbangan cairan" checked>
                                                            <label class="form-check-label">Aktual / Risiko gangguan keseimbangan cairan </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan7" id="diagnosakeperawatan7" value="Aktual / Risiko gangguan keseimbangan cairan">
                                                            <label class="form-check-label">Aktual / Risiko gangguan keseimbangan cairan </label>
                                                            @endif
                                                        </div>
                                                        <div class="form-check">
                                                            @if($assesper[0]->diagnosa_perawat8 == 'Aktual / Risiko gangguan integritas kulit')
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan8" id="diagnosakeperawatan8" value="Aktual / Risiko gangguan integritas kulit" checked>
                                                            <label class="form-check-label">Aktual / Risiko gangguan integritas kulit </label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan8" id="diagnosakeperawatan8" value="Aktual / Risiko gangguan integritas kulit">
                                                            <label class="form-check-label">Aktual / Risiko gangguan integritas kulit </label>
                                                            @endif
                                                        </div>
                                                        <div class="form-check">
                                                            @if($assesper[0]->diagnosa_perawat9 == 'Aktual / Risiko cemas / takut')
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan9" id="diagnosakeperawatan9" value="Aktual / Risiko cemas / takut" checked>
                                                            <label class="form-check-label">Aktual / Risiko cemas / takut</label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan9" id="diagnosakeperawatan9" value="Aktual / Risiko cemas / takut">
                                                            <label class="form-check-label">Aktual / Risiko cemas / takut</label>
                                                            @endif
                                                        </div>
                                                        <div class="form-check">
                                                            @if($assesper[0]->diagnosa_perawat10 == 'Risiko penyebaran toksik')
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan10" id="diagnosakeperawatan10" value="Risiko penyebaran toksik" checked>
                                                            <label class="form-check-label">Risiko penyebaran toksik</label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan10" id="diagnosakeperawatan10" value="Risiko penyebaran toksik">
                                                            <label class="form-check-label">Risiko penyebaran toksik</label>
                                                            @endif
                                                        </div>
                                                        <div class="form-check">
                                                            @if($assesper[0]->diagnosa_perawat11 == 'risiko jatuh / cedera')
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan11" id="diagnosakeperawatan11" value="risiko jatuh / cedera" checked>
                                                            <label class="form-check-label">risiko jatuh / cedera</label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan11" id="diagnosakeperawatan11" value="risiko jatuh / cedera">
                                                            <label class="form-check-label">risiko jatuh / cedera</label>
                                                            @endif

                                                        </div>
                                                        <div class="form-check">
                                                            @if($assesper[0]->diagnosa_perawat12 == 'nyeri')
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan12" id="diagnosakeperawatan12" value="nyeri" checked>
                                                            <label class="form-check-label">nyeri</label>
                                                            @else
                                                            <input class="form-check-input" type="checkbox" name="diagnosakeperawatan12" id="diagnosakeperawatan12" value="nyeri">
                                                            <label class="form-check-label">nyeri</label>
                                                            @endif
                                                        </div>
                                                        <textarea class="form-control" id="diagnosakeperawatan" name="diagnosakeperawatan" rows="2" placeholder="">{{$assesper[0]->diagnosa_perawat}}</textarea>

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
            <div class="accordion" id="accordionExample911">
                <div class="card">
                    <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse" data-target="#collapseOne11" aria-expanded="true" aria-controls="collapseOne11">
                                <i class="bi bi-book mr-1 ml-1"></i>(P) PLANNING
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne11" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample911">
                        <div class="card-body bg-light">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-bold font-italic">RENCANA ASUHAN KEPERAWATAN</td>
                                        <td>
                                            @if($assesper[0]->rencana_asuhan1 == 'Kaji keadaan umum pasien')
                                            <div class="form-check">
                                                <input class="form-check-input" checked type="checkbox" name="rencanaasuhan1" id="rencanaasuhan1" value="Kaji keadaan umum pasien">
                                                <label class="form-check-label">Kaji keadaan umum pasien </label>
                                            </div>
                                            @else
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rencanaasuhan1" id="rencanaasuhan1" value="Kaji keadaan umum pasien">
                                                <label class="form-check-label">Kaji keadaan umum pasien </label>
                                            </div>
                                            @endif
                                            @if($assesper[0]->rencana_asuhan2 == 'Monitor tanda - tanda vital')

                                            <div class="form-check">
                                                <input class="form-check-input" checked type="checkbox" name="rencanaasuhan2" id="rencanaasuhan2" value="Monitor tanda - tanda vital">
                                                <label class="form-check-label">Monitor tanda - tanda vital </label>
                                            </div>
                                            @else
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rencanaasuhan2" id="rencanaasuhan2" value="Monitor tanda - tanda vital">
                                                <label class="form-check-label">Monitor tanda - tanda vital </label>
                                            </div>
                                            @endif
                                            @if($assesper[0]->rencana_asuhan3 == 'Kolaborasi dengan tim medis')
                                            <div class="form-check">
                                                <input class="form-check-input" checked type="checkbox" name="rencanaasuhan3" id="rencanaasuhan3" value="Kolaborasi dengan tim medis">
                                                <label class="form-check-label">Kolaborasi dengan tim medis </label>
                                            </div>
                                            @else
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rencanaasuhan3" id="rencanaasuhan3" value="Kolaborasi dengan tim medis">
                                                <label class="form-check-label">Kolaborasi dengan tim medis </label>
                                            </div>
                                            @endif
                                            @if($assesper[0]->rencana_asuhan4 == 'Berikan edukasi kepada pasien dan keluarga')
                                            <div class="form-check">
                                                <input class="form-check-input" checked type="checkbox" name="rencanaasuhan4" id="rencanaasuhan4" value="Berikan edukasi kepada pasien dan keluarga">
                                                <label class="form-check-label">Berikan edukasi kepada pasien dan keluarga </label>
                                            </div>
                                            @else
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rencanaasuhan4" id="rencanaasuhan4" value="Berikan edukasi kepada pasien dan keluarga">
                                                <label class="form-check-label">Berikan edukasi kepada pasien dan keluarga </label>
                                            </div>
                                            @endif

                                            <div class="input-group">
                                                <textarea class="form-control" id="rencanaasuhan" name="rencanaasuhan" placeholder="">{{$assesper[0]->rencana_asuhan}}</textarea>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold font-italic">KOLABORASI </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-check">
                                                        @if($assesper[0]->kolaborasi_1 == 'Infus/ IVFD')
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
                                                        @if($assesper[0]->kolaborasi_2 == 'Oksigenasi')
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
                                                        @if($assesper[0]->kolaborasi_3 == 'NGT')
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
                                                        @if($assesper[0]->kolaborasi_4 == 'Defibrilasi')
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
                                                        @if($assesper[0]->kolaborasi_5 == 'Suction')
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
                                                        @if($assesper[0]->kolaborasi_6 == 'LAB')
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
                                                        @if($assesper[0]->kolaborasi_7 == 'Nebulizer')
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
                                                        @if($assesper[0]->kolaborasi_8 == 'Mengumbah lambung')
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
                                                        @if($assesper[0]->kolaborasi_9 == 'Mayo')
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
                                                        @if($assesper[0]->kolaborasi_10 == 'Explorasi / Irigasi')
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
                                                        @if($assesper[0]->kolaborasi_11 == 'EKG')
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
                                                        @if($assesper[0]->kolaborasi_12 == 'Saturasi Oksigen')
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
                                                        @if($assesper[0]->kolaborasi_13 == 'Kateter')
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
                                                        @if($assesper[0]->kolaborasi_14 == 'ETT')
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
                                                        @if($assesper[0]->kolaborasi_15 == 'Obat')
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
            <div class="accordion" id="accordionExample912">
                <div class="card">
                    <div class="card-header " style="background-color: rgba(110, 245, 137, 0.745)" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn  btn-block text-left text-bold  font-weight" type="button" data-toggle="collapse" data-target="#collapseOne12" aria-expanded="true" aria-controls="collapseOne12">
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
                                            <form id="dynamic-form" class="formtindakanperawat">
                                                <div id="form-container">
                                                    <div class="row mt-2">
                                                        <!-- <div class="col-3">
                                                            <div class="form-group">
                                                                <label for="name">Jam:</label>
                                                                <input type="time" name="waktu" id="waktu" value="" class="waktu form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="name">TINDAKAN KEPERAWATAN :</label>
                                                                <input type="text" name="tindakankeperawatan" id="tindakankeperawatan" value="" class="tindakan_keperawatan form-control">
                                                            </div>
                                                        </div> -->
                                                        <div class="col-3">
                                                            <div class="form-group">
                                                                <!-- <i class="bi bi-x-square remove form-group col-md-2 text-danger"></i> -->
                                                                <button type="button" class="btn btn-success mb-2 " id="add">Tambah</button>

                                                            </div>
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
            <div type="button" class="btn float-right btn-info updateassesperawat" style="margin-top: 20px;">
                Edit
            </div>
            <div type="button" class="btn float-right btn-success ml-2 validasiassesperawat" style="margin-top: 20px;">
                Validasi
            </div>
            @endif



        </form>
    </div>
</div>
</div>

<!-- form kebidanan igd kebidanan  -->
@else


<div class="card-body">
    <div type="button" class="btn btn-secondary formdewasa ml-3 mb-3" style="margin-top: 20px;">
        FORM IBU
    </div>
    <div type="button" class="btn btn-secondary formbayik ml-3 mb-3" style="margin-top: 20px;">
        FORM NEONATUS
    </div>
    <div class="formigk">

        <div class="card">
            <form action="" class="formerm">



            </form>
        </div>
    </div>
</div>
</div>
@endif
<script src="{{ asset('public/marker/markerjs2.js') }}"></script>
<script>
    function showMarkerArea(target) {
        const markerArea = new markerjs2.MarkerArea(target);
        markerArea.addEventListener("render", (event) => (target.src = event.dataUrl));
        markerArea.show();
    }

    // function batalgambar1() {
    //     ambilgambar1()
    // }

    // function ambilgambar1() {
    //     $.ajax({
    //         type: 'post',
    //         data: {
    //             _token: "{{ csrf_token() }}",
    //         },
    //         error: function(data) {
    //             alert('ok')
    //         },
    //         success: function(response) {
    //             $('.gambar1').html(response)
    //         }
    //     });
    // }
    $(".returtinper").click(function() {
        var data = $('.formerm').serializeArray();
        var $row = $(this).closest("tr");
        var wtt = $row.find(".wtt").text();
        var idtindakan = $row.find(".idtindakan").text();
        var tindakan = $row.find(".tindakan").text();




        // var sumberdata = $("#sumberdata:checked").val();
        Swal.fire({
            title: "Yakin Retur Tindakan?",
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
                        wtt,
                        tindakan,
                        idtindakan



                    },
                    url: '<?= route('returtinper') ?>',

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
                            cpptperawat()



                        }
                    }
                });
            }
        })
        return false;
    });
    $(".penandaan").click(function() {
        spinner = $('#loader2');
        spinner.show();
        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
            },
            url: '<?= route('penandaangambar') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.penandaangambar').html(response);

            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        var wrapper = $('.form-container');
        // Menambahkan field baru
        $("#add").click(function() {
            var html = '<div class="row mt-2">';
            html += '<div class="col-3">';
            html += '<div class="form-group">';
            html += '<label for="name">JAM</label>';
            html += '<input type="time" name="waktu" id="waktu" value="" class="waktu form-control">';
            html += '</div>';
            html += '</div>';
            html += '<div class="col-6">';
            html += '<div class="form-group">';
            html += '<label for="name">TINDAKAN KEPERAWATAN</label>';
            html += '<input type="text" name="tindakankeperawatan" id="tindakankeperawatan" value="" class="tindakankeperawatan form-control">';
            html += '</div>';
            html += '</div>';
            html += '<div class="col-3">';
            html += '<div class="form-group">';
            html += '<i class="bi bi-x-square  form-group col-md-2 text-danger"></i>';
            html += '</div>';
            html += '</div>';
            // html += '';

            html += '</div>';

            $("#form-container").append(html);
            $(wrapper).append(html)
        });

        // Menghapus field
        $(wrapper).on("click", ".remove", function(e) {
            e.preventDefault();
            $(this).parent('').parent('').remove();
        });


    });
    $(function() {
        $('#bbvalue, #pbvalue, #mingivalue, #sakitvalue ').keyup(function() {
            var bbvalue = parseFloat($('#bbvalue').val()) || 0;
            var pbvalue = parseFloat($('#pbvalue').val()) || 0;
            var mingivalue = parseFloat($('#mingivalue').val()) || 0;
            var sakitvalue = parseFloat($('#sakitvalue').val()) || 0;



            $('#totalgizi').val(bbvalue + pbvalue + mingivalue + sakitvalue);
        });
    });

    $(function() {
        $('#rjvalue, #dsvalue, #abvalue, #tivalue, #gbvalue, #smvalue ').keyup(function() {
            var rjvalue = parseFloat($('#rjvalue').val()) || 0;
            var dsvalue = parseFloat($('#dsvalue').val()) || 0;
            var abvalue = parseFloat($('#abvalue').val()) || 0;
            var tivalue = parseFloat($('#tivalue').val()) || 0;
            var gbvalue = parseFloat($('#gbvalue').val()) || 0;
            var smvalue = parseFloat($('#smvalue').val()) || 0;

            $('#totalrisiko').val(rjvalue + dsvalue + abvalue + tivalue + gbvalue + smvalue);
        });
    });
    $(function() {
        $('#uvalue, #jkvalue, #dvalue, #gkvalue,#rvalue ,#ovalue  ').keyup(function() {
            var uvalue = parseFloat($('#uvalue').val()) || 0;
            var jkvalue = parseFloat($('#jkvalue').val()) || 0;
            var dvalue = parseFloat($('#dvalue').val()) || 0;
            var gkvalue = parseFloat($('#gkvalue').val()) || 0;
            var ovalue = parseFloat($('#ovalue').val()) || 0;
            var rvalue = parseFloat($('#rvalue').val()) || 0;

            $('#totalrisiko1').val(uvalue + jkvalue + dvalue + gkvalue + ovalue + rvalue);
        });
    });
    $(function() {
        $('#pnvalue, #pbbvalue, #nmvalue ').keyup(function() {
            var pnvalue = parseFloat($('#pnvalue').val()) || 0;
            var pbbvalue = parseFloat($('#pbbvalue').val()) || 0;
            var nmvalue = parseFloat($('#nmvalue').val()) || 0;

            $('#totalnutrisi').val(pnvalue + pbbvalue + nmvalue);
        });
    });

    $(function() {
        $('#kuvalue, #tbbvalue, #ssvalue ').keyup(function() {
            var kuvalue = parseFloat($('#kuvalue').val()) || 0;
            var tbbvalue = parseFloat($('#tbbvalue').val()) || 0;
            var ssvalue = parseFloat($('#ssvalue').val()) || 0;

            $('#totalnutrisi1').val(kuvalue + tbbvalue + ssvalue);
        });
    });


    function ambildata() {

        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",
            },
            type: "post",
            url: " {{ route('ermperawat') }}",
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.ermperawat1').html(response);

            }
        });
    }

    function ambildata_form() {

        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",
            },
            type: "post",
            url: " {{ route('formermperawat') }}",
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.formermperawat').html(response);

            }
        });
    }
    $(".simpanassesperawat").click(function() {
        var gambar = document.getElementById("myCanvas1");

        var ctx1 = gambar.getContext("2d");
        var img1 = document.getElementById("gambarnya1");
        ctx1.drawImage(img1, 10, 10);
        var dataUrl1 = gambar.toDataURL();
        $('#gambarcoret').val(dataUrl1)
        gambar1 = $('#gambarcoret').val()
        var data = $('.formerm').serializeArray();
        var tindakan = $('.formtindakanperawat').serializeArray();

        var sumberdata = $('#sumberdata:checked').val()
        var asalmasuk = $('#asalmasuk:checked').val()
        var caramasuk = $('#caramasuk:checked').val()
        var subyek = $('#anamnesis').val()
        var tekanandarah = $('#tekanandarah').val()
        var frekuensinadi = $('#frekuensinadi').val()
        var frekuensinafas = $('#frekuensinafas').val()
        var suhutubuh = $('#suhutubuh').val()
        var beratbadan = $('#beratbadan').val()
        var usia = $('#usia').val()
        var keadaanumum = $('#keadaanumum:checked').val()
        var kesadaran = $('#kesadaran:checked').val()
        var gcs = $('#gcs').val()
        var spo2 = $('#SPO2').val()
        var pupil = $('#pupil:checked').val()
        var pupil1 = $('#pupil1:checked').val()
        var pupil2 = $('#pupil2:checked').val()
        var pupil3 = $('#pupil3:checked').val()
        var pupil4 = $('#pupil4:checked').val()
        var pupil5 = $('#pupil5:checked').val()
        var intra = $('#intra:checked').val()
        var intra1 = $('#intra1:checked').val()
        var intra2 = $('#intra2:checked').val()
        var intra3 = $('#intra3:checked').val()
        var intra4 = $('#intra4:checked').val()
        var intra5 = $('#intra5:checked').val()
        var intra6 = $('#intra6:checked').val()
        var neuro = $('#neuro:checked').val()
        var neuro1 = $('#neuro1:checked').val()
        var neuro2 = $('#neuro2:checked').val()
        var neuro3 = $('#neuro3:checked').val()
        var muskolo = $('#muskolo:checked').val()
        var muskolo1 = $('#muskolo1:checked').val()
        var muskolo2 = $('#muskolo2:checked').val()
        var muskolo3 = $('#muskolo3:checked').val()
        var muskolo4 = $('#muskolo4:checked').val()
        var intergumen = $('#integumen:checked').val()
        var intergumen1 = $('#integumen1:checked').val()
        var intergumen2 = $('#integumen2:checked').val()
        var intergumen3 = $('#integumen3:checked').val()
        var intergumen4 = $('#integumen4:checked').val()
        var intergumen5 = $('#integumen5:checked').val()
        var turgor = $('#turgor:checked').val()
        var turgor1 = $('#turgor1:checked').val()
        var turgor2 = $('#turgor2:checked').val()

        var edema = $('#edema:checked').val()
        var edema1 = $('#edema1:checked').val()
        var edema2 = $('#edema2:checked').val()
        var edema3 = $('#edema3:checked').val()
        var edema4 = $('#edema4:checked').val()

        var mukosa = $('#mukosa:checked').val()
        var mukosa1 = $('#mukosa1:checked').val()
        var mukosa2 = $('#mukosa2:checked').val()

        var pendarahan = $('#pendarahan:checked').val()
        var jumlahdarah = $('#jumlahdarah').val()
        var introksikasi = $('#intoksikasi:checked').val()
        var introksikasi1 = $('#intoksikasi1:checked').val()
        var introksikasi2 = $('#intoksikasi2:checked').val()
        var introksikasi3 = $('#intoksikasi3:checked').val()
        var introksikasi4 = $('#intoksikasi4:checked').val()
        var introksikasi5 = $('#intoksikasi5:checked').val()

        var BABF = $('#BABF').val()
        var BABK = $('#BABK').val()
        var BABKW = $('#BABKW').val()
        var BAKF = $('#BAKF').val()
        var BAKK = $('#BAKK').val()
        var BAKKW = $('#BAKKW').val()
        var kecemasan = $('#kecemasan:checked').val()
        var koping = $('#koping:checked').val()
        var pekerjaan = $('#pekerjaan').val()
        var agama = $('#agama').val()
        var nyeri = $('#nyeri:checked').val()
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
        var scalenyeri = $('#scalenyeri:checked').val()
        var scalenyeri1 = $('#scalenyeri1:checked').val()
        // skrining jatuh 
        var jatuhdewasa = $('#jatuh_dewasa:checked').val()
        var rjvalue = $('#rjvalue').val()
        var dsvalue = $('#dsvalue').val()
        var abvalue = $('#abvalue').val()
        var tivalue = $('#tivalue').val()
        var gbvalue = $('#gbvalue').val()
        var smvalue = $('#smvalue').val()
        var totalrisiko = $('#totalrisiko').val()
        var jatuhanak = $('#jatuh_anak:checked').val()

        var uvalue = $('#uvalue').val()
        var jkvalue = $('#jkvalue').val()
        var dvalue = $('#dvalue').val()
        var gkvalue = $('#gkvalue').val()
        var rvalue = $('#rvalue').val()
        var ovalue = $('#ovalue').val()
        var totalrisiko1 = $('#totalrisiko1').val()
        // skrining nutrisi
        var nutrisidws = $('#nutrisi_dws:checked').val()
        var pnvalue = $('#pnvalue').val()
        var pbbvalue = $('#pbbvalue').val()
        var nmvalue = $('#nmvalue').val()
        var totalnutrisi = $('#totalnutrisi').val()
        var nutrisiank = $('#nutrisi_ank:checked').val()

        var kuvalue = $('#kuvalue').val()
        var tbbvalue = $('#tbbvalue').val()
        var ssvalue = $('#ssvalue').val()
        var totalnutrisi1 = $('#totalnutrisi1').val()
        var diagnosakeperawatan = $('#diagnosakeperawatan').val()
        var diagnosakeperawatan1 = $('#diagnosakeperawatan1:checked').val()
        var diagnosakeperawatan2 = $('#diagnosakeperawatan2:checked').val()
        var diagnosakeperawatan3 = $('#diagnosakeperawatan3:checked').val()
        var diagnosakeperawatan4 = $('#diagnosakeperawatan4:checked').val()
        var diagnosakeperawatan5 = $('#diagnosakeperawatan5:checked').val()
        var diagnosakeperawatan6 = $('#diagnosakeperawatan6:checked').val()
        var diagnosakeperawatan7 = $('#diagnosakeperawatan7:checked').val()
        var diagnosakeperawatan8 = $('#diagnosakeperawatan8:checked').val()
        var diagnosakeperawatan9 = $('#diagnosakeperawatan9:checked').val()
        var diagnosakeperawatan10 = $('#diagnosakeperawatan10:checked').val()
        var diagnosakeperawatan11 = $('#diagnosakeperawatan11:checked').val()
        var diagnosakeperawatan12 = $('#diagnosakeperawatan12:checked').val()

        var rencanaasuhan = $('#rencanaasuhan').val()
        var rencanaasuhan1 = $('#rencanaasuhan1:checked').val()
        var rencanaasuhan2 = $('#rencanaasuhan2:checked').val()
        var rencanaasuhan3 = $('#rencanaasuhan3:checked').val()
        var rencanaasuhan4 = $('#rencanaasuhan4:checked').val()
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

        var norm = $('#norm').val()
        var kj = $('#kj').val()
        var tglmasuk = $('#tglmasuk').val()
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
                        data: JSON.stringify(data),
                        tindakan: JSON.stringify(tindakan),

                        sumberdata: $('#sumberdata:checked').val(),
                        asalmasuk: $('#asalmasuk:checked').val(),
                        caramasuk: $('#caramasuk:checked').val(),
                        subyek: $('#anamnesis').val(),
                        tekanandarah: $('#tekanandarah').val(),
                        frekuensinadi: $('#frekuensinadi').val(),
                        frekuensinafas: $('#frekuensinafas').val(),
                        suhutubuh: $('#suhutubuh').val(),
                        beratbadan: $('#beratbadan').val(),
                        keadaanumum: $('#keadaanumum:checked').val(),
                        kesadaran: $('#kesadaran:checked').val(),
                        usia: $('#usia').val(),
                        gcs: $('#gcs').val(),
                        spo2: $('#SPO2').val(),
                        pupil: $('#pupil:checked').val(),
                        pupil1 : $('#pupil1:checked').val(),
                        pupil2 : $('#pupil2:checked').val(),
                        pupil3 : $('#pupil3:checked').val(),
                        pupil4 : $('#pupil4:checked').val(),
                        pupil5 : $('#pupil5:checked').val(),
                        intra: $('#intra:checked').val(),
                        intra1 : $('#intra1:checked').val(),
                        intra2 : $('#intra2:checked').val(),
                        intra3 : $('#intra3:checked').val(),
                        intra4 : $('#intra4:checked').val(),
                        intra5 : $('#intra5:checked').val(),
                        intra6 : $('#intra6:checked').val(),
                        neuro: $('#neuro:checked').val(),
                        neuro1 : $('#neuro1:checked').val(),
                        neuro2 : $('#neuro2:checked').val(),
                        neuro3 : $('#neuro3:checked').val(),
                        muskolo : $('#muskolo:checked').val(),
                        muskolo1 : $('#muskolo1:checked').val(),
                        muskolo2 : $('#muskolo2:checked').val(),
                        muskolo3 : $('#muskolo3:checked').val(),
                        muskolo4 : $('#muskolo4:checked').val(),
                        intergumen : $('#integumen:checked').val(),
                        intergumen1 : $('#integumen1:checked').val(),
                        intergumen2 : $('#integumen2:checked').val(),
                        intergumen3 : $('#integumen3:checked').val(),
                        intergumen4 : $('#integumen4:checked').val(),
                        intergumen5 : $('#integumen5:checked').val(),
                        turgor : $('#turgor:checked').val(),
                        turgor1 : $('#turgor1:checked').val(),
                        turgor2 : $('#turgor2:checked').val(),

                        edema : $('#edema:checked').val(),
                        edema1 : $('#edema1:checked').val(),
                        edema2 : $('#edema2:checked').val(),
                        edema3 : $('#edema3:checked').val(),
                        edema4 : $('#edema4:checked').val(),

                        mukosa : $('#mukosa:checked').val(),
                        mukosa1 : $('#mukosa1:checked').val(),
                        mukosa2 : $('#mukosa2:checked').val(),
                        pendarahan: $('#pendarahan:checked').val(),
                        jumlahdarah: $('#jumlahdarah').val(),
                        introksikasi: $('#intoksikasi:checked').val(),
                        introksikasi1 : $('#intoksikasi1:checked').val(),
                        introksikasi2 : $('#intoksikasi2:checked').val(),
                        introksikasi3 : $('#intoksikasi3:checked').val(),
                        introksikasi4 : $('#intoksikasi4:checked').val(),
                        introksikasi5 : $('#intoksikasi5:checked').val(),
                        BABF: $('#BABF').val(),
                        BABK: $('#BABK').val(),
                        BABKW: $('#BABKW').val(),
                        BAKF: $('#BAKF').val(),
                        BAKK: $('#BAKK').val(),
                        BAKKW: $('#BAKKW').val(),
                        kecemasan: $('#kecemasan:checked').val(),
                        koping: $('#koping:checked').val(),
                        pekerjaan: $('#pekerjaan').val(),
                        agama: $('#agama').val(),
                        nyeri: $('#nyeri:checked').val(),
                        gambar1: $('#gambarcoret').val(),
                        lamanyeri: $('#lamanyeri:checked').val(),
                        rasanyeri: $('#rasanyeri:checked').val(),
                        rasanyeri1 : $('#rasanyeri1:checked').val(),
                        rasanyeri2 : $('#rasanyeri2:checked').val(),
                        rasanyeri3 : $('#rasanyeri3:checked').val(),
                        rasanyeri4 : $('#rasanyeri4:checked').val(),
                        rasanyeri5 : $('#rasanyeri5:checked').val(),
                        rasanyeri6 : $('#rasanyeri6:checked').val(),
                        rasanyeri7 : $('#rasanyeri7:checked').val(),
                        rasanyeri8 : $('#rasanyeri8:checked').val(),
                        rasanyeri9 : $('#rasanyeri9:checked').val(),
                        seringnyeri: $('#seringnyeri:checked').val(),
                        serringnyeri: $('#serringnyeri:checked').val(),
                        berkurangnyeri: $('#berkurangnyeri:checked').val(),
                        scalenyeri: $('#scalenyeri:checked').val(),
                        scalenyeri1: $('#scalenyeri1:checked').val(),
                        jatuhdewasa: $('#jatuh_dewasa:checked').val(),
                        rjvalue: $('#rjvalue').val(),
                        dsvalue: $('#dsvalue').val(),
                        abvalue: $('#abvalue').val(),
                        tivalue: $('#tivalue').val(),
                        gbvalue: $('#gbvalue').val(),
                        smvalue: $('#smvalue').val(),
                        totalrisiko: $('#totalrisiko').val(),
                        jatuhanak: $('#jatuh_anak:checked').val(),
                        uvalue: $('#uvalue').val(),
                        jkvalue: $('#jkvalue').val(),
                        dvalue: $('#dvalue').val(),
                        gkvalue: $('#gkvalue').val(),
                        rvalue: $('#rvalue').val(),
                        ovalue: $('#ovalue').val(),
                        totalrisiko1: $('#totalrisiko1').val(),
                        nutrisidws: $('#nutrisi_dws:checked').val(),
                        pnvalue: $('#pnvalue').val(),
                        pbbvalue: $('#pbbvalue').val(),
                        nmvalue: $('#nmvalue').val(),
                        totalnutrisi: $('#totalnutrisi').val(),
                        nutrisiank: $('#nutrisi_ank:checked').val(),
                        kuvalue: $('#kuvalue').val(),
                        tbbvalue: $('#tbbvalue').val(),
                        ssvalue: $('#ssvalue').val(),
                        totalnutrisi1: $('#totalnutrisi1').val(),
                        diagnosakeperawatan: $('#diagnosakeperawatan').val(),
                        diagnosakeperawatan1: $('#diagnosakeperawatan1:checked').val(),
                        diagnosakeperawatan2: $('#diagnosakeperawatan2:checked').val(),
                        diagnosakeperawatan3: $('#diagnosakeperawatan3:checked').val(),
                        diagnosakeperawatan4: $('#diagnosakeperawatan4:checked').val(),
                        diagnosakeperawatan5: $('#diagnosakeperawatan5:checked').val(),
                        diagnosakeperawatan6: $('#diagnosakeperawatan6:checked').val(),
                        diagnosakeperawatan7: $('#diagnosakeperawatan7:checked').val(),
                        diagnosakeperawatan8: $('#diagnosakeperawatan8:checked').val(),
                        diagnosakeperawatan9: $('#diagnosakeperawatan9:checked').val(),
                        diagnosakeperawatan10: $('#diagnosakeperawatan10:checked').val(),
                        diagnosakeperawatan11: $('#diagnosakeperawatan11:checked').val(),
                        diagnosakeperawatan12: $('#diagnosakeperawatan12:checked').val(),
                        rencanaasuhan: $('#rencanaasuhan').val(),
                        rencanaasuhan1: $('#rencanaasuhan1:checked').val(),
                        rencanaasuhan2: $('#rencanaasuhan2:checked').val(),
                        rencanaasuhan3: $('#rencanaasuhan3:checked').val(),
                        rencanaasuhan4: $('#rencanaasuhan4:checked').val(),
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
                        norm: $('#norm').val(),
                        kj: $('#kj').val(),
                        tglmasuk: $('#tglmasuk').val(),
                        alpul: $('#alpul').val(),
                        alpul1: $('#alpul1').val(),
                        kopul: $('#kopul').val(),
                        kopul1: $('#kopul1').val(),


                    },
                    url: '<?= route('simpanassemenperawat') ?>',

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
    $(".validasiassesperawat").click(function() {
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
                    url: '<?= route('validasiassemenperawat') ?>',

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
    $(".updateassesperawat").click(function() {
        var gambar = document.getElementById("myCanvas1");

        var ctx1 = gambar.getContext("2d");
        var img1 = document.getElementById("gambarnya1");
        ctx1.drawImage(img1, 10, 10);
        var dataUrl1 = gambar.toDataURL();
        $('#gambarcoret').val(dataUrl1)
        gambar1 = $('#gambarcoret').val()
        var data = $('.formerm').serializeArray();
        var tindakan = $('.formtindakanperawat').serializeArray();

        var sumberdata = $('#sumberdata:checked').val()
        var asalmasuk = $('#asalmasuk:checked').val()
        var caramasuk = $('#caramasuk:checked').val()
        var subyek = $('#anamnesis').val()
        var tekanandarah = $('#tekanandarah').val()
        var frekuensinadi = $('#frekuensinadi').val()
        var frekuensinafas = $('#frekuensinafas').val()
        var suhutubuh = $('#suhutubuh').val()
        var beratbadan = $('#beratbadan').val()
        var usia = $('#usia').val()
        var keadaanumum = $('#keadaanumum:checked').val()
        var kesadaran = $('#kesadaran:checked').val()
        var gcs = $('#gcs').val()
        var spo2 = $('#SPO2').val()
        var pupil = $('#pupil:checked').val()
        var pupil1 = $('#pupil1:checked').val()
        var pupil2 = $('#pupil2:checked').val()
        var pupil3 = $('#pupil3:checked').val()
        var pupil4 = $('#pupil4:checked').val()
        var pupil5 = $('#pupil5:checked').val()
        var intra = $('#intra:checked').val()
        var intra1 = $('#intra1:checked').val()
        var intra2 = $('#intra2:checked').val()
        var intra3 = $('#intra3:checked').val()
        var intra4 = $('#intra4:checked').val()
        var intra5 = $('#intra5:checked').val()
        var intra6 = $('#intra6:checked').val()
        var neuro = $('#neuro:checked').val()
        var neuro1 = $('#neuro1:checked').val()
        var neuro2 = $('#neuro2:checked').val()
        var neuro3 = $('#neuro3:checked').val()
        var muskolo = $('#muskolo:checked').val()
        var muskolo1 = $('#muskolo1:checked').val()
        var muskolo2 = $('#muskolo2:checked').val()
        var muskolo3 = $('#muskolo3:checked').val()
        var muskolo4 = $('#muskolo4:checked').val()
        var intergumen = $('#integumen:checked').val()
        var intergumen1 = $('#integumen1:checked').val()
        var intergumen2 = $('#integumen2:checked').val()
        var intergumen3 = $('#integumen3:checked').val()
        var intergumen4 = $('#integumen4:checked').val()
        var intergumen5 = $('#integumen5:checked').val()
        var turgor = $('#turgor:checked').val()
        var turgor1 = $('#turgor1:checked').val()
        var turgor2 = $('#turgor2:checked').val()

        var edema = $('#edema:checked').val()
        var edema1 = $('#edema1:checked').val()
        var edema2 = $('#edema2:checked').val()
        var edema3 = $('#edema3:checked').val()
        var edema4 = $('#edema4:checked').val()

        var mukosa = $('#mukosa:checked').val()
        var mukosa1 = $('#mukosa1:checked').val()
        var mukosa2 = $('#mukosa2:checked').val()
        var pendarahan = $('#pendarahan:checked').val()
        var jumlahdarah = $('#jumlahdarah').val()
        var introksikasi = $('#intoksikasi:checked').val()
        var introksikasi1 = $('#intoksikasi1:checked').val()
        var introksikasi2 = $('#intoksikasi2:checked').val()
        var introksikasi3 = $('#intoksikasi3:checked').val()
        var introksikasi4 = $('#intoksikasi4:checked').val()
        var introksikasi5 = $('#intoksikasi5:checked').val()
        var BABF = $('#BABF').val()
        var BABK = $('#BABK').val()
        var BABKW = $('#BABKW').val()
        var BAKF = $('#BAKF').val()
        var BAKK = $('#BAKK').val()
        var BAKKW = $('#BAKKW').val()
        var kecemasan = $('#kecemasan:checked').val()
        var koping = $('#koping:checked').val()
        var pekerjaan = $('#pekerjaan').val()
        var agama = $('#agama').val()
        var nyeri = $('#nyeri:checked').val()
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
        var scalenyeri = $('#scalenyeri:checked').val()
        var scalenyeri1 = $('#scalenyeri1:checked').val()
        // skrining jatuh 
        var jatuhdewasa = $('#jatuh_dewasa:checked').val()
        var rjvalue = $('#rjvalue').val()
        var dsvalue = $('#dsvalue').val()
        var abvalue = $('#abvalue').val()
        var tivalue = $('#tivalue').val()
        var gbvalue = $('#gbvalue').val()
        var smvalue = $('#smvalue').val()
        var totalrisiko = $('#totalrisiko').val()
        var jatuhanak = $('#jatuh_anak:checked').val()

        var uvalue = $('#uvalue').val()
        var jkvalue = $('#jkvalue').val()
        var dvalue = $('#dvalue').val()
        var gkvalue = $('#gkvalue').val()
        var rvalue = $('#rvalue').val()
        var ovalue = $('#ovalue').val()
        var totalrisiko1 = $('#totalrisiko1').val()
        // skrining nutrisi
        var nutrisidws = $('#nutrisi_dws:checked').val()
        var pnvalue = $('#pnvalue').val()
        var pbbvalue = $('#pbbvalue').val()
        var nmvalue = $('#nmvalue').val()
        var totalnutrisi = $('#totalnutrisi').val()
        var nutrisiank = $('#nutrisi_ank:checked').val()

        var kuvalue = $('#kuvalue').val()
        var tbbvalue = $('#tbbvalue').val()
        var ssvalue = $('#ssvalue').val()
        var totalnutrisi1 = $('#totalnutrisi1').val()
        var diagnosakeperawatan = $('#diagnosakeperawatan').val()
        var diagnosakeperawatan1 = $('#diagnosakeperawatan1:checked').val()
        var diagnosakeperawatan2 = $('#diagnosakeperawatan2:checked').val()
        var diagnosakeperawatan3 = $('#diagnosakeperawatan3:checked').val()
        var diagnosakeperawatan4 = $('#diagnosakeperawatan4:checked').val()
        var diagnosakeperawatan5 = $('#diagnosakeperawatan5:checked').val()
        var diagnosakeperawatan6 = $('#diagnosakeperawatan6:checked').val()
        var diagnosakeperawatan7 = $('#diagnosakeperawatan7:checked').val()
        var diagnosakeperawatan8 = $('#diagnosakeperawatan8:checked').val()
        var diagnosakeperawatan9 = $('#diagnosakeperawatan9:checked').val()
        var diagnosakeperawatan10 = $('#diagnosakeperawatan10:checked').val()
        var diagnosakeperawatan11 = $('#diagnosakeperawatan11:checked').val()
        var diagnosakeperawatan12 = $('#diagnosakeperawatan12:checked').val()

        var rencanaasuhan = $('#rencanaasuhan').val()
        var rencanaasuhan1 = $('#rencanaasuhan1:checked').val()
        var rencanaasuhan2 = $('#rencanaasuhan2:checked').val()
        var rencanaasuhan3 = $('#rencanaasuhan3:checked').val()
        var rencanaasuhan4 = $('#rencanaasuhan4:checked').val()
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

        var norm = $('#norm').val()
        var kj = $('#kj').val()
        var tglmasuk = $('#tglmasuk').val()
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
                        data: JSON.stringify(data),
                        tindakan: JSON.stringify(tindakan),

                        sumberdata: $('#sumberdata:checked').val(),
                        asalmasuk: $('#asalmasuk:checked').val(),
                        caramasuk: $('#caramasuk:checked').val(),
                        subyek: $('#anamnesis').val(),
                        tekanandarah: $('#tekanandarah').val(),
                        frekuensinadi: $('#frekuensinadi').val(),
                        frekuensinafas: $('#frekuensinafas').val(),
                        suhutubuh: $('#suhutubuh').val(),
                        beratbadan: $('#beratbadan').val(),
                        keadaanumum: $('#keadaanumum:checked').val(),
                        kesadaran: $('#kesadaran:checked').val(),
                        usia: $('#usia').val(),
                        gcs: $('#gcs').val(),
                        spo2: $('#SPO2').val(),
                         pupil: $('#pupil:checked').val(),
                        pupil1 : $('#pupil1:checked').val(),
                        pupil2 : $('#pupil2:checked').val(),
                        pupil3 : $('#pupil3:checked').val(),
                        pupil4 : $('#pupil4:checked').val(),
                        pupil5 : $('#pupil5:checked').val(),
                        intra: $('#intra:checked').val(),
                        intra1 : $('#intra1:checked').val(),
                        intra2 : $('#intra2:checked').val(),
                        intra3 : $('#intra3:checked').val(),
                        intra4 : $('#intra4:checked').val(),
                        intra5 : $('#intra5:checked').val(),
                        intra6 : $('#intra6:checked').val(),
                        neuro: $('#neuro:checked').val(),
                        neuro1 : $('#neuro1:checked').val(),
                        neuro2 : $('#neuro2:checked').val(),
                        neuro3 : $('#neuro3:checked').val(),
                        muskolo : $('#muskolo:checked').val(),
                        muskolo1 : $('#muskolo1:checked').val(),
                        muskolo2 : $('#muskolo2:checked').val(),
                        muskolo3 : $('#muskolo3:checked').val(),
                        muskolo4 : $('#muskolo4:checked').val(),
                        intergumen : $('#integumen:checked').val(),
                        intergumen1 : $('#integumen1:checked').val(),
                        intergumen2 : $('#integumen2:checked').val(),
                        intergumen3 : $('#integumen3:checked').val(),
                        intergumen4 : $('#integumen4:checked').val(),
                        intergumen5 : $('#integumen5:checked').val(),
                        turgor : $('#turgor:checked').val(),
                        turgor1 : $('#turgor1:checked').val(),
                        turgor2 : $('#turgor2:checked').val(),

                        edema : $('#edema:checked').val(),
                        edema1 : $('#edema1:checked').val(),
                        edema2 : $('#edema2:checked').val(),
                        edema3 : $('#edema3:checked').val(),
                        edema4 : $('#edema4:checked').val(),

                        mukosa : $('#mukosa:checked').val(),
                        mukosa1 : $('#mukosa1:checked').val(),
                        mukosa2 : $('#mukosa2:checked').val(),
                        pendarahan: $('#pendarahan:checked').val(),
                        jumlahdarah: $('#jumlahdarah').val(),
                        introksikasi: $('#intoksikasi:checked').val(),
                        introksikasi1 : $('#intoksikasi1:checked').val(),
                        introksikasi2 : $('#intoksikasi2:checked').val(),
                        introksikasi3 : $('#intoksikasi3:checked').val(),
                        introksikasi4 : $('#intoksikasi4:checked').val(),
                        introksikasi5 : $('#intoksikasi5:checked').val(),
                        BABF: $('#BABF').val(),
                        BABK: $('#BABK').val(),
                        BABKW: $('#BABKW').val(),
                        BAKF: $('#BAKF').val(),
                        BAKK: $('#BAKK').val(),
                        BAKKW: $('#BAKKW').val(),
                        kecemasan: $('#kecemasan:checked').val(),
                        koping: $('#koping:checked').val(),
                        pekerjaan: $('#pekerjaan').val(),
                        agama: $('#agama').val(),
                        nyeri: $('#nyeri:checked').val(),
                        gambar1: $('#gambarcoret').val(),
                        lamanyeri: $('#lamanyeri:checked').val(),
                        rasanyeri: $('#rasanyeri:checked').val(),
                        rasanyeri1 : $('#rasanyeri1:checked').val(),
                        rasanyeri2 : $('#rasanyeri2:checked').val(),
                        rasanyeri3 : $('#rasanyeri3:checked').val(),
                        rasanyeri4 : $('#rasanyeri4:checked').val(),
                        rasanyeri5 : $('#rasanyeri5:checked').val(),
                        rasanyeri6 : $('#rasanyeri6:checked').val(),
                        rasanyeri7 : $('#rasanyeri7:checked').val(),
                        rasanyeri8 : $('#rasanyeri8:checked').val(),
                        rasanyeri9 : $('#rasanyeri9:checked').val(),
                        seringnyeri: $('#seringnyeri:checked').val(),
                        serringnyeri: $('#serringnyeri:checked').val(),
                        berkurangnyeri: $('#berkurangnyeri:checked').val(),
                        scalenyeri: $('#scalenyeri:checked').val(),
                        scalenyeri1: $('#scalenyeri1:checked').val(),
                        jatuhdewasa: $('#jatuh_dewasa:checked').val(),
                        rjvalue: $('#rjvalue').val(),
                        dsvalue: $('#dsvalue').val(),
                        abvalue: $('#abvalue').val(),
                        tivalue: $('#tivalue').val(),
                        gbvalue: $('#gbvalue').val(),
                        smvalue: $('#smvalue').val(),
                        totalrisiko: $('#totalrisiko').val(),
                        jatuhanak: $('#jatuh_anak:checked').val(),
                        uvalue: $('#uvalue').val(),
                        jkvalue: $('#jkvalue').val(),
                        dvalue: $('#dvalue').val(),
                        gkvalue: $('#gkvalue').val(),
                        rvalue: $('#rvalue').val(),
                        ovalue: $('#ovalue').val(),
                        totalrisiko1: $('#totalrisiko1').val(),
                        nutrisidws: $('#nutrisi_dws:checked').val(),
                        pnvalue: $('#pnvalue').val(),
                        pbbvalue: $('#pbbvalue').val(),
                        nmvalue: $('#nmvalue').val(),
                        totalnutrisi: $('#totalnutrisi').val(),
                        nutrisiank: $('#nutrisi_ank:checked').val(),
                        kuvalue: $('#kuvalue').val(),
                        tbbvalue: $('#tbbvalue').val(),
                        ssvalue: $('#ssvalue').val(),
                        totalnutrisi1: $('#totalnutrisi1').val(),
                        diagnosakeperawatan: $('#diagnosakeperawatan').val(),
                        diagnosakeperawatan1: $('#diagnosakeperawatan1:checked').val(),
                        diagnosakeperawatan2: $('#diagnosakeperawatan2:checked').val(),
                        diagnosakeperawatan3: $('#diagnosakeperawatan3:checked').val(),
                        diagnosakeperawatan4: $('#diagnosakeperawatan4:checked').val(),
                        diagnosakeperawatan5: $('#diagnosakeperawatan5:checked').val(),
                        diagnosakeperawatan6: $('#diagnosakeperawatan6:checked').val(),
                        diagnosakeperawatan7: $('#diagnosakeperawatan7:checked').val(),
                        diagnosakeperawatan8: $('#diagnosakeperawatan8:checked').val(),
                        diagnosakeperawatan9: $('#diagnosakeperawatan9:checked').val(),
                        diagnosakeperawatan10: $('#diagnosakeperawatan10:checked').val(),
                        diagnosakeperawatan11: $('#diagnosakeperawatan11:checked').val(),
                        diagnosakeperawatan12: $('#diagnosakeperawatan12:checked').val(),
                        rencanaasuhan: $('#rencanaasuhan').val(),
                        rencanaasuhan1: $('#rencanaasuhan1:checked').val(),
                        rencanaasuhan2: $('#rencanaasuhan2:checked').val(),
                        rencanaasuhan3: $('#rencanaasuhan3:checked').val(),
                        rencanaasuhan4: $('#rencanaasuhan4:checked').val(),
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
                        norm: $('#norm').val(),
                        kj: $('#kj').val(),
                        tglmasuk: $('#tglmasuk').val(),
                        alpul: $('#alpul').val(),
                        alpul1: $('#alpul1').val(),
                        kopul: $('#kopul').val(),
                        kopul1: $('#kopul1').val(),

                    },
                    url: '<?= route('updateassemenperawat') ?>',

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
                $('.formigk').html(response);

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
                $('.formigk').html(response);

            }
        });
    });

    function cpptperawat() {
        spinner = $('#loader2');
        spinner.show();
        kj = $('#kj').val()
        norm = $('#norm').val()
        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",
                norm,
                kj
            },
            type: "post",
            url: " {{ route('formermperawat') }}",
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.formermperawat').html(response);


            }
        });
    }
    //cppt perawat
    // Get the modal
    var modalld = document.getElementById("cpptdokter");

    // Get the button that opens the modal
    var btn = document.getElementById("cpptdokterr");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closeed")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modalld.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modalld.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modalld) {
            modalld.style.display = "none";
        }
    }
    //cppt riwayat
    // Get the modal
    var modalli = document.getElementById("riwayatigd");

    // Get the button that opens the modal
    var btn = document.getElementById("riwayattigd");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closeei")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modalli.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modalli.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modalli) {
            modalli.style.display = "none";
        }
    }
</script>
<script src="{{ asset('public/marker/markerjs2.js') }}"></script>
<script>
    function showMarkerArea(target) {
        const markerArea = new markerjs2.MarkerArea(target);
        markerArea.addEventListener("render", (event) => (target.src = event.dataUrl));
        markerArea.show();
    }
</script>
<!-- 
<script src="{{ asset('public/img-mark/src/jquery.image-marker.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('public/img-mark/src/jquery.image-marker.css') }}">


<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> -->
<!-- <script>
    $(function() {
        var img_src = 'public/img-mark/demo/nyerii.jpg';
        var imageMarker = $("#element").imageMarker({
            src: img_src,
            drag_disabled: false
        });
        if (!!window.localStorage.markers) {
            JSON.parse(window.localStorage.markers).forEach(function(m) {
                $(imageMarker).trigger('add_marker', m);
            })
        }
        $('#add_neg_marker').click(function() {
            $(imageMarker).trigger('add_marker', {
                className: 'yello'
            });
        });
        $('#add_pos_marker').click(function() {
            $(imageMarker).trigger('add_marker', {
                content: 'Content for mock marker should be a bit longer, longer, longer... ok that`s it.',
                className: 'green'
            });
        });
        $('#save').click(function() {
            $(imageMarker).trigger('get_markers', function(data) {
                alert(JSON.stringify(data));
            });
        });
    });
</script> -->