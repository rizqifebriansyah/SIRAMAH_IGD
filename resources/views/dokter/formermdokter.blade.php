<div class="card-header">
    <h3 class="card-title">ASSESMENT MEDIS INSTALASI GAWAT DARURAT (IGD)</h3>
</div>

<div class="card-body">
    <div class="card">
        <div class="card-header text-bold bg-success">+ ASSESMENT DOKTER +</div>
        <form action="" class="form_pemeriksaan_1">
            <div class="card-body">

                <table class="table">
                    <tbody>

                        <td class="text-bold font-italic">Keluhan Utama</td>
                        <td colspan="3">

                            <textarea class="form-control" id="keluhanutama" name="keluhanutama" placeholder="Ketik Keluhan Utama ..."></textarea>

                        </td>
                        </tr>

                        <tr>
                            <td class="text-bold font-italic">Anamnesis</td>
                            <td colspan="3">

                                <textarea class="form-control" id="anamnesis" name="anamnesis" placeholder="Ketik Anamnesis ..."></textarea>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Riwayat Alergi</td>

                            <td>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="tidakalergi" name="tidakalergi" value="Tidak Alergi">
                                            <label class="form-check-label" for="exampleCheck1">Tidak</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="adaalergi" name="adaalergi" value="">
                                            <label class="form-check-label" for="exampleCheck1">Ya , Sebutkan
                                                <input type="text" id="alergi" name="alergi" value="">
                                            </label>
                                        </div>
                                    </div>

                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="accordion" id="accordionExample1">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> REKONSILIASI DAN DATA OBAT PASIEN YANG DIGUNAKAN SAAT MASUK RUMAH SAKIT
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample1">
                            <div class="card-body bg-light">

                                <table class=" table">
                                    <thead>
                                        <th style="text-align: center;">Nama Obat <br> (Yang digunakan saat akan masuk Rumaah Sakit) </th>
                                        <th style="text-align: center;">Aturan Pakai Dosis dan Rute <br> Pemberian </th>
                                        <th style="text-align: center;">Dilanjutkan</th>

                                    </thead>
                                    <tbody>
                                        <td></td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-bold font-italic">Pemeriksaan Fisik</td>
                            <td colspan="3">

                                <textarea class="form-control" id="pemeriksaanfisik" name="pemeriksaanfisik" placeholder="Ketik Pemeriksaan Fisik ..."></textarea>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Diagnosa Kerja</td>
                            <td colspan="3">

                                <textarea class="form-control" id="diagnosakerja" name="diagnosakerja" placeholder="Ketik Diagnosa Kerja ..."></textarea>

                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>

        </form>
    </div>
</div>
</div>