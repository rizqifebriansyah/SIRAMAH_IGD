<div class="card-header">
    <h3 class="card-title">ASSESMENT MEDIS INSTALASI GAWAT DARURAT (IGD)</h3>
</div>

<div class="card-body">
    <div class="card">
        <form action="" class="formerm">
            @if ($assesper == null)
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
                                            <td class="text-bold font-italic">Tekanan Darah</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Tekanan darah pasien ..."
                                                        aria-label="Recipient's username" id="tekanandarah"
                                                        name="tekanandarah" aria-describedby="basic-addon2"
                                                        value="">
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
                                            <td class="text-bold font-italic">Berat Badan / tinggi badan / IMT</td>
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
                                            <td class="text-bold font-italic">Umur</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Umur pasien ..." aria-label="Suhu tubuh pasien"
                                                        name="usia" id="usia" aria-describedby="basic-addon2"
                                                        value="">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">th</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Keadaan Umum</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Keadaan Umum Pasien ..." name="keadaanumum"
                                                        id="keadaanumum" aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2" value="">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-bold font-italic">Kesadaran</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Kesadaran pasien ..."
                                                        aria-label="Suhu tubuh pasien" name="kesadaran"
                                                        id="kesadaran" aria-describedby="basic-addon2"
                                                        value="">
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
                <div class="card-header text-bold bg-warning" style="text-align: center;">S.O.A.P</div>
                <div class="card-body">
                    <!-- assesmen dokter -->
                    <table class="table">
                        <tbody>
                            <div class="row">
                                <div class="col-sm-3">

                                    <div class="form-group">
                                        <center>
                                            <h3>Anamnesis</h3>
                                        </center>
                                        <textarea class="form-control" id="anamnesis" name="anamnesis" rows="17" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-3">

                                    <div class="form-group">
                                        <center>
                                            <h3>Diagnosa Keperawatan</h3>
                                        </center>
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Aktual / Risiko bersihan jalan
                                                            nafas tidak efektif</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Aktual / Risiko pola nafas
                                                            tidak efektif</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Aktual / Risiko gangguan
                                                            pertukaran gas</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Aktual / Risiko gangguan
                                                            sirkulasi</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Aktual / Risiko gangguan
                                                            perfusi jaringan / cerebral </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Hipertermia </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Aktual / Risiko gangguan
                                                            keseimbangan cairan </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Aktual / Risiko gangguan
                                                            integritas kulit </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Aktual / Risiko cemas / takut
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Risiko penyebaran toksik
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">risiko jatuh / cedera</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">nyeri</label>
                                                    </div>
                                                    <textarea class="form-control" id="diagnosakeperawatan1" name="diagnosakeperawatan1" rows="2" placeholder=""></textarea>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">

                                    <div class="form-group">
                                        <center>
                                            <h3>Planning</h3>
                                        </center>
                                        <textarea class="form-control" id="planning" name="planning" rows="17" placeholder=""> </textarea>
                                    </div>
                                </div>
                                <div class="col-sm-3">

                                    <div class="form-group">
                                        <center>
                                            <h3>Tindakan</h3>
                                        </center>
                                        <textarea class="form-control" id="assesmen" name="assesmen" rows="17" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>

                        </tbody>
                    </table>








                    <!-- Cara Keluar -->

                    <div class="accordion" id="accordionExample3">
                        <div class="card">
                            <div class="card-header bg-secondary" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-light font-weight"
                                        type="button" data-toggle="collapse" data-target="#collapseOne3"
                                        aria-expanded="true" aria-controls="collapseOne3">
                                        <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Cara Keluar Dari Instalasi
                                        Gawat
                                        Darurat
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne3" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample3">
                                <div class="card-body bg-light">
                                    <select class="form-control select2" name="alpul" id="alpul">
                                        <option value=""> -- Select One --</option>
                                        @foreach ($alasanpulang as $i => $p)
                                            <option value="Pasien Anak">Pasien Anak
                                            </option>
                                            <option value="Pasien Bedah">Pasien Bedah
                                            </option>
                                            <option value="Pasien Non Bedah">Pasien Non Bedah
                                            </option>
                                            <option value="Pasien Kebidanan">Pasien Kebidanan
                                            </option>
                                            <option value="Pasien Psikomatic">Pasien Psikomatic
                                            </option>
                                        @endforeach

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
                                    <button class="btn btn-link btn-block text-left text-light font-weight"
                                        type="button" data-toggle="collapse" data-target="#collapseOne4"
                                        aria-expanded="true" aria-controls="collapseOne4">
                                        <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Keadaan Pasien Saat Keluar
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne4" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample4">
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
                    <div type="button" class="btn float-right btn-success simpanassesperawat"
                        style="margin-top: 20px;">
                        SIMPAN
                    </div>

                </div>
            @else
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
                                            <td class="text-bold font-italic">Tekanan Darah</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Tekanan darah pasien ..."
                                                        aria-label="Recipient's username" id="tekanandarah"
                                                        name="tekanandarah" aria-describedby="basic-addon2"
                                                        value="{{ $assesper[0]->tekanan_darah }}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2"> mmHg</span>
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
                                                        value="{{ $assesper[0]->frekuensi_nadi }}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">
                                                            x/menit</span>
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
                                                        value="{{ $assesper[0]->frekuensi_nafas }}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2">
                                                            x/menit</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-bold font-italic">Suhu</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Suhu tubuh pasien ..."
                                                        aria-label="Suhu tubuh pasien" name="suhutubuh"
                                                        id="suhutubuh" aria-describedby="basic-addon2"
                                                        value="{{ $assesper[0]->suhu }}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2"> °C</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Berat Badan / tinggi badan / IMT</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Berat badan Pasien ..." name="beratbadan"
                                                        id="beratbadan" aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2"
                                                        value="{{ $assesper[0]->berat_badan }}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2"> Kg</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-bold font-italic">Umur</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Umur pasien ..." aria-label="Suhu tubuh pasien"
                                                        name="usia" id="usia" aria-describedby="basic-addon2"
                                                        value="{{ $assesper[0]->umur }}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2"> th</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold font-italic">Keadaan Umum</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Keadaan Umum Pasien ..." name="keadaanumum"
                                                        id="keadaanumum" aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2" value="{{ $assesper[0]->keadaan_umum }}">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon2"></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-bold font-italic">Kesadaran</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Kesadaran pasien ..."
                                                        aria-label="Suhu tubuh pasien" name="kesadaran"
                                                        id="kesadaran" aria-describedby="basic-addon2"
                                                        value="{{ $assesper[0]->kesadaran }}">
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
                <div class="card-header text-bold bg-warning" style="text-align: center;">S.O.A.P</div>
                <div class="card-body">
                    <!-- assesmen dokter -->
                    <table class="table">
                        <tbody>
                            <div class="row">
                                <div class="col-sm-3">

                                    <div class="form-group">
                                        <center>
                                            <h3>Anamnesis</h3>
                                        </center>
                                        <textarea class="form-control" id="anamnesis" name="anamnesis" rows="17" placeholder="">{{ $assesper[0]->subyektif }}</textarea>
                                    </div>
                                </div>
                                <div class="col-sm-3">

                                    <div class="form-group">
                                        <center>
                                            <h3>Diagnosa Keperawatan</h3>
                                        </center>
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Aktual / Risiko bersihan jalan
                                                            nafas tidak efektif</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Aktual / Risiko pola nafas
                                                            tidak efektif</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Aktual / Risiko gangguan
                                                            pertukaran gas</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Aktual / Risiko gangguan
                                                            sirkulasi</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Aktual / Risiko gangguan
                                                            perfusi jaringan / cerebral </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Hipertermia </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Aktual / Risiko gangguan
                                                            keseimbangan cairan </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Aktual / Risiko gangguan
                                                            integritas kulit </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Aktual / Risiko cemas / takut
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">Risiko penyebaran toksik
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">risiko jatuh / cedera</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="diagnosakeperawatan" id="diagnosakeperawatan">
                                                        <label class="form-check-label">nyeri</label>
                                                    </div>
                                                    <textarea class="form-control" id="diagnosakeperawatan1" name="diagnosakeperawatan1" rows="2" placeholder=""></textarea>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">

                                    <div class="form-group">
                                        <center>
                                            <h3>Planning</h3>
                                        </center>
                                        <textarea class="form-control" id="planning" name="planning" rows="17" placeholder=""> {{ $assesper[0]->planning }}</textarea>
                                    </div>
                                </div>
                                <div class="col-sm-3">

                                    <div class="form-group">
                                        <center>
                                            <h3>Tindakan</h3>
                                        </center>
                                        <textarea class="form-control" id="assesmen" name="assesmen" rows="17" placeholder="">{{ $assesper[0]->assesment }}</textarea>
                                    </div>
                                </div>
                            </div>

                        </tbody>
                    </table>








                    <!-- Cara Keluar -->

                    <div class="accordion" id="accordionExample3">
                        <div class="card">
                            <div class="card-header bg-secondary" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-light font-weight"
                                        type="button" data-toggle="collapse" data-target="#collapseOne3"
                                        aria-expanded="true" aria-controls="collapseOne3">
                                        <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Cara Keluar Dari Instalasi
                                        Gawat
                                        Darurat
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne3" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample3">
                                <div class="card-body bg-light">

                                    <div class="form-group" data-select2-id="29">
                                        <select class="form-control select2" name="alpul" id="alpul">
                                            <option value=""> {{ $assesper[0]->cara_pulang }}</option>
                                            @foreach ($alasanpulang as $i => $p)
                                                <option value="Pasien Anak">Pasien Anak
                                                </option>
                                                <option value="Pasien Bedah">Pasien Bedah
                                                </option>
                                                <option value="Pasien Non Bedah">Pasien Non Bedah
                                                </option>
                                                <option value="Pasien Kebidanan">Pasien Kebidanan
                                                </option>
                                                <option value="Pasien Psikomatic">Pasien Psikomatic
                                                </option>
                                            @endforeach

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
                                        <button class="btn btn-link btn-block text-left text-light font-weight"
                                            type="button" data-toggle="collapse" data-target="#collapseOne4"
                                            aria-expanded="true" aria-controls="collapseOne4">
                                            <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Keadaan Pasien Saat Keluar
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne4" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample4">
                                    <div class="card-body bg-light">

                                        <select class="form-control select2" name="kopul" id="kopul">
                                            <option value=""> {{ $assesper[0]->keadaan_pulang }}</option>
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
                        <div type="button" class="btn float-right btn-success updateassesperawat"
                            style="margin-top: 20px;">
                            SIMPAN
                        </div>

                    </div>
            @endif


        </form>
    </div>
</div>
</div>

<script>
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
        var data = $('.formerm').serializeArray();
        var tekanandarah = $('#tekanandarah').val()
        var frekuensinadi = $('#frekuensinadi').val()
        var frekuensinafas = $('#frekuensinafas').val()
        var suhutubuh = $('#suhutubuh').val()
        var beratbadan = $('#beratbadan').val()
        var usia = $('#usia').val()
        var keadaanumum = $('#keadaanumum').val()
        var kesadaran = $('#kesadaran').val()
        var subject = $('#anamnesis').val()
        var objek = $('#diagnosakeperawatan:checked').val()
        var assesmen = $('#assesmen').val()
        var planning = $('#planning').val()
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
                        subject: $('#anamnesis').val(),
                        objek: $('#diagnosakeperawatan:checked').val(),
                        assesmen: $('#assesmen').val(),
                        planning: $('#planning').val(),
                        norm: $('#norm').val(),
                        kj: $('#kj').val(),
                        tglmasuk: $('#tglmasuk').val(),
                        tekanandarah: $('#tekanandarah').val(),
                        frekuensinadi: $('#frekuensinadi').val(),
                        frekuensinafas: $('#frekuensinafas').val(),
                        suhutubuh: $('#suhutubuh').val(),
                        beratbadan: $('#beratbadan').val(),
                        keadaanumum: $('#keadaanumum').val(),
                        kesadaran: $('#kesadaran').val(),
                        alpul: $('#alpul').val(),
                        alpul1: $('#alpul1').val(),
                        kopul: $('#kopul').val(),
                        kopul1: $('#kopul1').val(),
                        usia: $('#usia').val(),


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

                        }

                    }
                });
                ambildata(),
                    ambildata_form()
            }
        })
        return false;
    });
    $(".updateassesperawat").click(function() {
        var data = $('.formerm').serializeArray();
        var tekanandarah = $('#tekanandarah').val()
        var frekuensinadi = $('#frekuensinadi').val()
        var frekuensinafas = $('#frekuensinafas').val()
        var suhutubuh = $('#suhutubuh').val()
        var beratbadan = $('#beratbadan').val()
        var usia = $('#usia').val()
        var keadaanumum = $('#keadaanumum').val()
        var kesadaran = $('#kesadaran').val()
        var subject = $('#anamnesis').val()
        var objek = $('#diagnosakeperawatan:checked').val()
        var assesmen = $('#assesmen').val()
        var planning = $('#planning').val()
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
                        subject: $('#anamnesis').val(),
                        objek: $('#diagnosakeperawatan:checked').val(),
                        assesmen: $('#assesmen').val(),
                        planning: $('#planning').val(),
                        norm: $('#norm').val(),
                        kj: $('#kj').val(),
                        tglmasuk: $('#tglmasuk').val(),
                        tekanandarah: $('#tekanandarah').val(),
                        frekuensinadi: $('#frekuensinadi').val(),
                        frekuensinafas: $('#frekuensinafas').val(),
                        suhutubuh: $('#suhutubuh').val(),
                        beratbadan: $('#beratbadan').val(),
                        keadaanumum: $('#keadaanumum').val(),
                        kesadaran: $('#kesadaran').val(),
                        alpul: $('#alpul').val(),
                        alpul1: $('#alpul1').val(),
                        kopul: $('#kopul').val(),
                        kopul1: $('#kopul1').val(),
                        usia: $('#usia').val(),

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


                        }
                    }
                });
            }
        })
        return false;
    });
</script>
