<!-- igd umum tanpa isi  -->
@if ($unit == '1002')
<div class="card-header">
    <h3 class="card-title">ASSESMENT MEDIS INSTALASI GAWAT DARURAT (IGD)</h3>

</div>

<div class="card-body">
    <div class="card">
        <form action="" class="formerm">
            <input type="text" name="ku" id="ku" value="{{ $ku }}" hidden>
            <input type="text" name="kp" id="kp" value="{{ $kp }}" hidden>
            <input type="text" name="counter" id="counter" value="{{ $counter }}" hidden>


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
                                                <input type="text" class="form-control" placeholder="Umur pasien ..." aria-label="Suhu tubuh pasien" name="usia" id="usia" aria-describedby="basic-addon2" value="">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">th</span>
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
                                    @else
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
                                                <input type="text" class="form-control" placeholder="Umur pasien ..." aria-label="Suhu tubuh pasien" name="usia" id="usia" aria-describedby="basic-addon2" value="{{ $ttv[0]->umur }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">th</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold font-italic">Keadaan Umum</td>
                                        <td>
                                            @if ($ttv[0]->keadaan_umum == 'Baik')
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Baik" checked>
                                                <label class="form-check-label">Baik</label>
                                            </div>
                                            @else
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Baik">
                                                <label class="form-check-label">Baik</label>
                                            </div>
                                            @endif

                                            @if ($ttv[0]->keadaan_umum == 'Sedang')
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Sedang" checked>
                                                <label class="form-check-label">Sedang</label>
                                            </div>
                                            @else
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Sedang">
                                                <label class="form-check-label">Sedang</label>
                                            </div>
                                            @endif

                                            @if ($ttv[0]->keadaan_umum == 'Buruk')


                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Buruk" checked>
                                                <label class="form-check-label">Buruk</label>
                                            </div>
                                            @else
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="keadaanumum" id="keadaanumum" value="Buruk">
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
                                            @else
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="13-15">
                                                <label class="form-check-label">13-15</label>
                                            </div>
                                            @endif

                                            @if ($ttv[0]->kesadaran == '9-12')

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="9-12" checked>
                                                <label class="form-check-label">9-12</label>
                                            </div>
                                            @else
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="9-12">
                                                <label class="form-check-label">9-12</label>
                                            </div>
                                            @endif

                                            @if ($ttv[0]->kesadaran == '3-8')

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="3-8" checked>
                                                <label class="form-check-label">3-8</label>
                                            </div>
                                            @else
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran" value="3-8">
                                                <label class="form-check-label">3-8</label>
                                            </div>
                                            @endif

                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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
                S.O.A.P
            </div>
            <div class="card-body">

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
                @if ($assesdok == null)
                <!-- assesmen dokter -->

                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-bold font-italic">SUBJEK</td>
                            <td colspan="">

                                <textarea class="form-control" id="subject" name="subject" placeholder="Ketik SUBJECT ..."></textarea>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">OBJEK</td>
                            <td colspan="">
                                <h4>Primary Survey</h4>
                                <textarea class="form-control" id="primary" name="primary" rows="5">A : &#13;&#10;B :  &#13;&#10;C :  &#13;&#10;D :  &#13;&#10;E : </textarea>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic"></td>
                            <td colspan="">
                                <h4>Secondary Survey</h4>
                                <textarea class="form-control" id="secondary" name="secondary" rows="10">Kepala : &#13;&#10;Telinga :  &#13;&#10;Hidung :  &#13;&#10;Mata :  &#13;&#10;Thorax : &#13;&#10;P : &#13;&#10;C : &#13;&#10;Punggung : &#13;&#10;Abd : &#13;&#10;Eks : </textarea>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">ASSESMEN</td>
                            <td colspan="">

                                <textarea class="form-control" id="assesmen" name="assesmen" placeholder="Ketik ASSESMEN ..."></textarea>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">PLANNING</td>
                            <td colspan="">

                                <textarea class="form-control" id="planning" name="planning" placeholder="Ketik planning ..."></textarea>

                            </td>
                        </tr>

                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-4">

                        <div class="form-group">
                            <center>
                                <h3>Evaluasi 30 menit pertama</h3>
                            </center>
                            <textarea class="form-control" id="tigap" name="tigap" rows="4" placeholder=""></textarea>
                        </div>
                    </div>
                    <div class="col-sm-4">

                        <div class="form-group">
                            <center>
                                <h3>Evaluasi 30 menit kedua</h3>
                            </center>
                            <textarea class="form-control" id="tigak" name="tigak" rows="4" placeholder=""></textarea>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>DIAGNOSA</label>
                            <select class="form-control select2" name="diagnosa" id="diagnosa">
                                <option value=""> -- Select One --</option>
                                @foreach ($diagnosa as $i => $t)
                                <option value="{{ $t->nama_diag }}">{{ $t->nama_diag }}
                                </option>
                                @endforeach

                            </select>
                            <label>Diagnosa Lain</label>
                            <textarea class="form-control" id="diagnosa1" name="diagnosa1" rows="2" placeholder=""></textarea>

                        </div>

                    </div>
                </div>
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
        </form>
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
                                    <label for="exampleFormControlSelect1">Diagnosa Pemeriksaan
                                        Penunjang</label>
                                    <input type="text" id="diagnosalabo" name="diagnosalabo" class="form-control" value="">
                                </div>
                            </div>
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
                                    <label for="exampleFormControlSelect1">Diagnosa Pemeriksaan
                                        Penunjang</label>
                                    <input type="text" id="diagnosaradio" name="diagnosaradio" class="form-control" value="">
                                </div>
                            </div>
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


        <div type="button" class="btn float-right btn-success simpanasses" style="margin-top: 20px;">
            SIMPAN
        </div>
        <!-- igd umum dengan isi  -->
        @else
        <form action="" class="formerm">

            <!-- assesmen dokter -->


            <table class="table">
                <tbody>
                    <tr>
                        <td class="text-bold font-italic">SUBJEK</td>
                        <td colspan="">

                            <textarea class="form-control" id="subject" name="subject" placeholder="Ketik SUBJECT ...">{{ $assesdok[0]->subyektif }}</textarea>

                        </td>
                    </tr>
                    <tr>
                        <td class="text-bold font-italic">OBJEK</td>
                        <td colspan="">
                            <h4>Primary Survey</h4>
                            <textarea class="form-control" id="primary" name="primary" rows="5">{{ $assesdok[0]->primary_survey }}</textarea>

                        </td>
                    </tr>
                    <tr>
                        <td class="text-bold font-italic"></td>
                        <td colspan="">
                            <h4>Secondary Survey</h4>
                            <textarea class="form-control" id="secondary" name="secondary" rows="10">{{ $assesdok[0]->secondary_survey }} </textarea>

                        </td>
                    </tr>
                    <tr>
                        <td class="text-bold font-italic">ASSESMEN</td>
                        <td colspan="">

                            <textarea class="form-control" id="assesmen" name="assesmen" placeholder="Ketik ASSESMEN ...">{{ $assesdok[0]->assesment }}</textarea>

                        </td>
                    </tr>
                    <tr>
                        <td class="text-bold font-italic">PLANNING</td>
                        <td colspan="">

                            <textarea class="form-control" id="planning" name="planning" placeholder="Ketik planning ...">{{ $assesdok[0]->planning }}</textarea>

                        </td>
                    </tr>


                    {{-- <div class="row">
                        <div class="col-sm-3">

                            <div class="form-group">
                                <center>
                                    <h3>Subject</h3>
                                </center>
                                <textarea class="form-control" id="subject" name="subject" rows="4" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col-sm-3">

                            <div class="form-group">
                                <center>
                                    <h3>Object</h3>
                                </center>
                                <textarea class="form-control" id="objek" name="objek" rows="4" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col-sm-3">

                            <div class="form-group">
                                <center>
                                    <h3>Assesmen</h3>
                                </center>
                                <textarea class="form-control" id="assesmen" name="assesmen" rows="4" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col-sm-3">

                            <div class="form-group">
                                <center>
                                    <h3>Planning</h3>
                                </center>
                                <textarea class="form-control" id="planning" name="planning" rows="4" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">

                            <div class="form-group">
                                <center>
                                    <h3>Evaluasi 30 menit pertama</h3>
                                </center>
                                <textarea class="form-control" id="tigap" name="tigap" rows="4" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col-sm-4">

                            <div class="form-group">
                                <center>
                                    <h3>Evaluasi 30 menit kedua</h3>
                                </center>
                                <textarea class="form-control" id="tigak" name="tigak" rows="4" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>DIAGNOSA</label>
                                <select class="form-control select2" name="diagnosa" id="diagnosa">
                                    <option value=""> -- Select One --</option>
                                    @foreach ($diagnosa as $i => $t)
                                        <option value="{{ $t->nama_diag }}">{{ $t->nama_diag }}
                    </option>
                    @endforeach

                    </select>
                    <label>Diagnosa Lain</label>
                    <textarea class="form-control" id="diagnosa1" name="diagnosa1" rows="2" placeholder=""></textarea>

    </div>

</div>
</div> --}}
</tbody>
</table>
<div class="row">
    <div class="col-sm-4">

        <div class="form-group">
            <center>
                <h3>Evaluasi 30 menit pertama</h3>
            </center>
            <textarea class="form-control" id="tigap" name="tigap" rows="4" placeholder="">{{ $assesdok[0]->tiga_pertama }}</textarea>
        </div>
    </div>
    <div class="col-sm-4">

        <div class="form-group">
            <center>
                <h3>Evaluasi 30 menit kedua</h3>
            </center>
            <textarea class="form-control" id="tigak" name="tigak" rows="4" placeholder="">{{ $assesdok[0]->tiga_kedua }}</textarea>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label>DIAGNOSA</label>
            <select class="form-control select2" name="diagnosa" id="diagnosa">
                <option value="">{{ $assesdok[0]->diagnosa }}</option>
                @foreach ($diagnosa as $i => $t)
                <option value="{{ $t->nama_diag }}">{{ $t->nama_diag }}
                </option>
                @endforeach

            </select>
            <label>Diagnosa Lain</label>
            <textarea class="form-control" id="diagnosa1" name="diagnosa1" rows="2" placeholder=""></textarea>

        </div>

    </div>
</div>

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
                    <option value=""> {{ $assesdok[0]->cara_pulang }}</option>
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
                    <option value="">{{ $assesdok[0]->keadaan_pulang }}</option>
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

</form>

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
                            <label for="exampleFormControlSelect1">Diagnosa Pemeriksaan
                                Penunjang</label>
                            <input type="text" id="diagnosalabo" name="diagnosalabo" class="form-control" value="">
                        </div>
                    </div>
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
                            <label for="exampleFormControlSelect1">Diagnosa Pemeriksaan
                                Penunjang</label>
                            <input type="text" id="diagnosaradio" name="diagnosaradio" class="form-control" value="">
                        </div>
                    </div>
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


<div type="button" class="btn float-right btn-success updateasses" style="margin-top: 20px;">
    SIMPAN
</div>

</div>



@endif



<!-- igd kebidanan tanpa isi  -->

@else

<div class="card-header">
    <h3 class="card-title">ASSESMENT MEDIS INSTALASI GAWAT DARURAT KEBIDANAN (IGDK)</h3>

</div>

<div class="card-body">
    <div class="card">
        <form action="" class="formerm">
            <input type="text" name="ku" id="ku" value="{{ $ku }}" hidden>
            <input type="text" name="kp" id="kp" value="{{ $kp }}" hidden>
            <input type="text" name="counter" id="counter" value="{{ $counter }}" hidden>


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
                                                <input type="text" class="form-control" placeholder="Umur pasien ..." aria-label="Suhu tubuh pasien" name="usia" id="usia" aria-describedby="basic-addon2" value="{{ $ttv[0]->umur }}">
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
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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
                S.O.A.P
            </div>
            <div class="card-body">

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
                @if ($assesdok == null)
                <!-- assesmen dokter -->

                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-bold font-italic">SUBJEK</td>
                            <td colspan="">

                                <textarea class="form-control" id="subject" name="subject" placeholder="Ketik SUBJECT ..."></textarea>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Pemeriksaan Fisik</td>
                            <td colspan="">

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">MATA</td>
                            <td colspan="">
                                <div class="row">

                                    <div class="form-check col-sm-5 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfismat" id="pemfismat" value="CA -/-">
                                        <label class="form-check-label" for="inlineRadio2">CA -/- </label>
                                    </div>
                                    <div class="form-check col-sm-5 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfismat" id="pemfismat" value="SI -/-">

                                        <label class="form-check-label" for="inlineRadio2">SI -/- </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">PARU</td>
                            <td colspan="">
                                <div class="row">

                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfispar" id="pemfispar" value="SD">
                                        <label class="form-check-label" for="inlineRadio2">SD </label>
                                    </div>
                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfispar" id="pemfispar" value="VES">

                                        <label class="form-check-label" for="inlineRadio2">VES </label>
                                    </div>
                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfispar" id="pemfispar" value="RBH -/-">
                                        <label class="form-check-label" for="inlineRadio2">RBH -/- </label>
                                    </div>
                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfispar" id="pemfispar" value="RBK -/-">

                                        <label class="form-check-label" for="inlineRadio2">RBK -/- </label>
                                    </div>
                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfispar" id="pemfispar" value="WHT -/-">

                                        <label class="form-check-label" for="inlineRadio2">WHT -/- </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">COR</td>
                            <td colspan="">
                                <div class="row">

                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfiscor" id="pemfiscor" value="BJI II">
                                        <label class="form-check-label" for="inlineRadio2">BJI II </label>
                                    </div>
                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfiscor" id="pemfiscor" value="REGULER">

                                        <label class="form-check-label" for="inlineRadio2">REGULER </label>
                                    </div>
                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfiscor" id="pemfiscor" value="IREGULER">
                                        <label class="form-check-label" for="inlineRadio2">IREGULER </label>
                                    </div>
                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfiscor" id="pemfiscor" value="MORMOR">

                                        <label class="form-check-label" for="inlineRadio2">MORMOR </label>
                                    </div>
                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfiscor" id="pemfiscor" value="GALOP">

                                        <label class="form-check-label" for="inlineRadio2">GALOP </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">ABDOMEN</td>
                            <td colspan="">
                                <div class="row">

                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfisabd" id="pemfisabd" value="Ballotement">
                                        <label class="form-check-label" for="inlineRadio2">Ballotement </label>
                                    </div>
                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfisabd" id="pemfisabd" value="Cembung">

                                        <label class="form-check-label" for="inlineRadio2">Cembung </label>
                                    </div>
                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfisabd" id="pemfisabd" value="Gravida">
                                        <label class="form-check-label" for="inlineRadio2">Gravida </label>
                                    </div>
                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfisabd" id="pemfisabd" value="Timpani">

                                        <label class="form-check-label" for="inlineRadio2">Timpani </label>
                                    </div>
                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfisabd" id="pemfisabd" value="BU +">

                                        <label class="form-check-label" for="inlineRadio2">BU + </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic"></td>
                            <td colspan="">
                                <div class="row">

                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfisabd" id="pemfisabd" value="Presentasi Kepala">
                                        <label class="form-check-label" for="inlineRadio2">Presentasi Kepala </label>
                                    </div>
                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfisabd" id="pemfisabd" value="Presentasi Bokong">

                                        <label class="form-check-label" for="inlineRadio2">Presentasi Bokong </label>
                                    </div>
                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfisabd" id="pemfisabd" value="Letak Lintang">
                                        <label class="form-check-label" for="inlineRadio2">Letak Lintang </label>
                                    </div>
                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfisabd" id="pemfisabd" value="Punggung Kanan">

                                        <label class="form-check-label" for="inlineRadio2">Punggung Kanan </label>
                                    </div>
                                    <div class="form-check col-sm-2 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfisabd" id="pemfisabd" value="Punggung Kiri">

                                        <label class="form-check-label" for="inlineRadio2">Punggung Kiri </label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Vagina</td>
                            <td colspan="">

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Pemeriksaan Luar</td>
                            <td colspan="">
                                <div class="row">

                                    <div class="form-check col-sm-5 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfisvgnluar" id="pemfisvgnluar" value="Laura Mayora Benjolan">
                                        <label class="form-check-label" for="inlineRadio2">Laura Mayora Benjolan </label>
                                    </div>
                                    <div class="form-check col-sm-5 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfisvgnluar" id="pemfisvgnluar" value="Laura Mayora Kemerahan">

                                        <label class="form-check-label" for="inlineRadio2">Laura Mayora Kemerahan </label>
                                    </div>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic"> </td>
                            <td colspan="">
                                <div class="row">

                                    <div class="form-check col-sm-5 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfisvgnluar1" id="pemfisvgnluar1" value="Laura Minora Benjolan">
                                        <label class="form-check-label" for="inlineRadio2">Laura Minora Benjolan </label>
                                    </div>
                                    <div class="form-check col-sm-5 form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemfisvgnluar1" id="pemfisvgnluar1" value="Laura Minora Kemerahan">

                                        <label class="form-check-label" for="inlineRadio2">Laura Minora Kemerahan </label>
                                    </div>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Pemeriksaan Dalam</td>
                            <td colspan="">
                                <textarea class="form-control" id="vgnpemdal" name="secondary" rows="3"></textarea>

                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="text-bold font-italic">TFU</td>
                            <td>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="TFU" aria-label="Recipient's username" id="tfu" name="tfu" aria-describedby="basic-addon2" value="">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">Cm</span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-bold font-italic">TBJ</td>
                            <td>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="TBJ ..." id="TBJ" name="TBJ" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">Gram</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">HIS</td>
                            <td>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="HIS" aria-label="Recipient's username" id="his" name="his" aria-describedby="basic-addon2" value="">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">x/10 menit</span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-bold font-italic">DJJ</td>
                            <td>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="DJJ ..." id="djj" name="djj" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">dom</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">KONTRAKSI </td>
                            <td colspan="3">
                                <div class="row">

                                    <div class="form-check col-sm-5 form-check-inline">
                                        <input class="form-check-input" type="radio" name="kontraksi" id="kontraksi" value="ya">
                                        <label class="form-check-label" for="inlineRadio2">Ya</label>
                                    </div>
                                    <div class="form-check col-sm-5 form-check-inline">
                                        <input class="form-check-input" type="radio" name="kontraksi" id="kontraksi" value="tidak">

                                        <label class="form-check-label" for="inlineRadio2">Tidak </label>
                                    </div>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic" colspan="2">INSPEKSI <br>
                                <textarea class="form-control" id="inspeksi" name="inspeksi" placeholder="Ketik inspeksi ..."></textarea>
                            </td>

                            <td class="text-bold font-italic" colspan="2">INSPEKULO
                                <textarea class="form-control" id="inspekulo" name="inspekulo" placeholder="Ketik inspekulo ..."></textarea>
                                <br>
                            </td>

                        </tr>

                        <tr>
                            <td class="text-bold font-italic" colspan="2">VT <br> <textarea class="form-control" id="vt" name="vt" placeholder="Ketik vt ..."></textarea></td>

                            <td class="text-bold font-italic" colspan="2">RT <br> <textarea class="form-control" id="rt" name="rt" placeholder="Ketik rt ..."></textarea></td>
                        </tr>

                        <tr>
                            <td class="text-bold font-italic">ASSESMEN</td>
                            <td colspan="3">

                                <textarea class="form-control" id="assesmen" name="assesmen" placeholder="Ketik ASSESMEN ..."></textarea>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">PLANNING</td>
                            <td colspan="3">

                                <textarea class="form-control" id="planning" name="planning" placeholder="Ketik planning ..."></textarea>

                            </td>
                        </tr>

                    </tbody>
                </table>
                <div class="card">
                    <div class="card-header bg-secondary">
                        Pelvimetri Klinis
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-bold font-italic">Promontorium</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="promontorium" aria-label="Recipient's username" id="promontorium" name="promontorium" aria-describedby="basic-addon2" value="">

                                        </div>
                                    </td>
                                    <td class="text-bold font-italic">Linea Inominata</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Linea ..." id="Linea" name="Linea" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold font-italic">Dinding Samping</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Dinding" aria-label="Recipient's username" id="Dinding" name="Dinding" aria-describedby="basic-addon2" value="">

                                        </div>
                                    </td>
                                    <td class="text-bold font-italic">Spina Ischiadika</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Spina ..." id="Spina" name="Spina" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold font-italic">Distansia</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Distansia" aria-label="Recipient's username" id="Distansia" name="Distansia" aria-describedby="basic-addon2" value="">

                                        </div>
                                    </td>
                                    <td class="text-bold font-italic">Interspinarum</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Interspinarum ..." id="Interspinarum" name="Interspinarum" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold font-italic">SAKRUM</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="SAKRUM" aria-label="Recipient's username" id="SAKRUM" name="SAKRUM" aria-describedby="basic-addon2" value="">

                                        </div>
                                    </td>
                                    <td class="text-bold font-italic">Arkus Pubis</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Arkus Pubis ..." id="Arkus" name="Arkus" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold font-italic">Kesan Panggul</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Kesan Panggul" aria-label="Recipient's username" id="Kesan" name="Kesan" aria-describedby="basic-addon2" value="">

                                        </div>
                                    </td>
                                    <td class="text-bold font-italic">Imbang Feto-Pelvic (IFP)</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="imbang Pubis ..." id="imbang" name="imbang" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">

                        <div class="form-group">
                            <center>
                                <h3>Evaluasi 30 menit pertama</h3>
                            </center>
                            <textarea class="form-control" id="tigap" name="tigap" rows="4" placeholder=""></textarea>
                        </div>
                    </div>
                    <div class="col-sm-4">

                        <div class="form-group">
                            <center>
                                <h3>Evaluasi 30 menit kedua</h3>
                            </center>
                            <textarea class="form-control" id="tigak" name="tigak" rows="4" placeholder=""></textarea>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>DIAGNOSA</label>
                            <select class="form-control select2" name="diagnosa" id="diagnosa">
                                <option value=""> -- Select One --</option>
                                @foreach ($diagnosa as $i => $t)
                                <option value="{{ $t->nama_diag }}">{{ $t->nama_diag }}
                                </option>
                                @endforeach

                            </select>
                            <label>Diagnosa Lain</label>
                            <textarea class="form-control" id="diagnosa1" name="diagnosa1" rows="2" placeholder=""></textarea>

                        </div>

                    </div>
                </div>
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
        </form>
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
                                    <label for="exampleFormControlSelect1">Diagnosa Pemeriksaan
                                        Penunjang</label>
                                    <input type="text" id="diagnosalabo" name="diagnosalabo" class="form-control" value="">
                                </div>
                            </div>
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
                                    <label for="exampleFormControlSelect1">Diagnosa Pemeriksaan
                                        Penunjang</label>
                                    <input type="text" id="diagnosaradio" name="diagnosaradio" class="form-control" value="">
                                </div>
                            </div>
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


        <div type="button" class="btn float-right btn-success simpanasses" style="margin-top: 20px;">
            SIMPAN
        </div>
        <!-- igd kebidanan dengan isi  -->
        @else
        <form action="" class="formerm">

            <!-- assesmen dokter -->


            <table class="table">
                <tbody>
                    <tr>
                        <td class="text-bold font-italic">SUBJEK</td>
                        <td colspan="">

                            <textarea class="form-control" id="subject" name="subject" placeholder="Ketik SUBJECT ...">{{ $assesdok[0]->subyektif }}</textarea>

                        </td>
                    </tr>
                    <tr>
                        <td class="text-bold font-italic">OBJEK</td>
                        <td colspan="">
                            <h4>Primary Survey</h4>
                            <textarea class="form-control" id="primary" name="primary" rows="5">{{ $assesdok[0]->primary_survey }}</textarea>

                        </td>
                    </tr>
                    <tr>
                        <td class="text-bold font-italic"></td>
                        <td colspan="">
                            <h4>Secondary Survey</h4>
                            <textarea class="form-control" id="secondary" name="secondary" rows="10">{{ $assesdok[0]->secondary_survey }} </textarea>

                        </td>
                    </tr>
                    <tr>
                        <td class="text-bold font-italic">ASSESMEN</td>
                        <td colspan="">

                            <textarea class="form-control" id="assesmen" name="assesmen" placeholder="Ketik ASSESMEN ...">{{ $assesdok[0]->assesment }}</textarea>

                        </td>
                    </tr>
                    <tr>
                        <td class="text-bold font-italic">PLANNING</td>
                        <td colspan="">

                            <textarea class="form-control" id="planning" name="planning" placeholder="Ketik planning ...">{{ $assesdok[0]->planning }}</textarea>

                        </td>
                    </tr>


                    {{-- <div class="row">
                        <div class="col-sm-3">

                            <div class="form-group">
                                <center>
                                    <h3>Subject</h3>
                                </center>
                                <textarea class="form-control" id="subject" name="subject" rows="4" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col-sm-3">

                            <div class="form-group">
                                <center>
                                    <h3>Object</h3>
                                </center>
                                <textarea class="form-control" id="objek" name="objek" rows="4" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col-sm-3">

                            <div class="form-group">
                                <center>
                                    <h3>Assesmen</h3>
                                </center>
                                <textarea class="form-control" id="assesmen" name="assesmen" rows="4" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col-sm-3">

                            <div class="form-group">
                                <center>
                                    <h3>Planning</h3>
                                </center>
                                <textarea class="form-control" id="planning" name="planning" rows="4" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">

                            <div class="form-group">
                                <center>
                                    <h3>Evaluasi 30 menit pertama</h3>
                                </center>
                                <textarea class="form-control" id="tigap" name="tigap" rows="4" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col-sm-4">

                            <div class="form-group">
                                <center>
                                    <h3>Evaluasi 30 menit kedua</h3>
                                </center>
                                <textarea class="form-control" id="tigak" name="tigak" rows="4" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>DIAGNOSA</label>
                                <select class="form-control select2" name="diagnosa" id="diagnosa">
                                    <option value=""> -- Select One --</option>
                                    @foreach ($diagnosa as $i => $t)
                                        <option value="{{ $t->nama_diag }}">{{ $t->nama_diag }}
                    </option>
                    @endforeach

                    </select>
                    <label>Diagnosa Lain</label>
                    <textarea class="form-control" id="diagnosa1" name="diagnosa1" rows="2" placeholder=""></textarea>

    </div>

</div>
</div> --}}
</tbody>
</table>
<div class="row">
    <div class="col-sm-4">

        <div class="form-group">
            <center>
                <h3>Evaluasi 30 menit pertama</h3>
            </center>
            <textarea class="form-control" id="tigap" name="tigap" rows="4" placeholder="">{{ $assesdok[0]->tiga_pertama }}</textarea>
        </div>
    </div>
    <div class="col-sm-4">

        <div class="form-group">
            <center>
                <h3>Evaluasi 30 menit kedua</h3>
            </center>
            <textarea class="form-control" id="tigak" name="tigak" rows="4" placeholder="">{{ $assesdok[0]->tiga_kedua }}</textarea>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label>DIAGNOSA</label>
            <select class="form-control select2" name="diagnosa" id="diagnosa">
                <option value="">{{ $assesdok[0]->diagnosa }}</option>
                @foreach ($diagnosa as $i => $t)
                <option value="{{ $t->nama_diag }}">{{ $t->nama_diag }}
                </option>
                @endforeach

            </select>
            <label>Diagnosa Lain</label>
            <textarea class="form-control" id="diagnosa1" name="diagnosa1" rows="2" placeholder=""></textarea>

        </div>

    </div>
</div>

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
                    <option value=""> {{ $assesdok[0]->cara_pulang }}</option>
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
                    <option value="">{{ $assesdok[0]->keadaan_pulang }}</option>
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

</form>

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
                            <label for="exampleFormControlSelect1">Diagnosa Pemeriksaan
                                Penunjang</label>
                            <input type="text" id="diagnosalabo" name="diagnosalabo" class="form-control" value="">
                        </div>
                    </div>
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
                            <label for="exampleFormControlSelect1">Diagnosa Pemeriksaan
                                Penunjang</label>
                            <input type="text" id="diagnosaradio" name="diagnosaradio" class="form-control" value="">
                        </div>
                    </div>
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


<div type="button" class="btn float-right btn-success updateasses" style="margin-top: 20px;">
    SIMPAN
</div>

</div>



@endif

@endif

</div>

</div>
</div>
</div>

<script>
    document.getElementById('tanggalperiksapenunjang').valueAsDate = new Date()
    document.getElementById('tanggalperiksapenunjang1').valueAsDate = new Date()



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
    $(".updateasses").click(function() {
        var data = $('.formerm').serializeArray();
        var datalab = $('.formlab').serializeArray();
        var datarad = $('.formradio').serializeArray();
        var ku = $('#ku').val()
        var subject = $('#subject').val()
        var objek = $('#objek').val()
        var primary = $('#primary').val()
        var secondary = $('#secondary').val()
        var assesmen = $('#assesmen').val()
        var planning = $('#planning').val()
        var tigap = $('#tigap').val()
        var tigak = $('#tigak').val()
        var norm = $('#norm').val()
        var kj = $('#kj').val()
        var kp = $('#kp').val()
        var counter = $('#counter').val()


        var tglmasuk = $('#tglmasuk').val()
        var diagnosa = $('#diagnosa').val()
        var diagnosa1 = $('#diagnosa1').val()
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
                        datalab: JSON.stringify(datalab),
                        datarad: JSON.stringify(datarad),
                        subject: $('#subject').val(),
                        objek: $('#objek').val(),
                        assesmen: $('#assesmen').val(),
                        planning: $('#planning').val(),
                        tigap: $('#tigap').val(),
                        tigak: $('#tigak').val(),
                        norm: $('#norm').val(),
                        counter: $('#counter').val(),

                        kj: $('#kj').val(),
                        diagnosa: $('#diagnosa').val(),
                        diagnosa1: $('#diagnosa1').val(),
                        alpul: $('#alpul').val(),
                        alpul1: $('#alpul1').val(),
                        kopul: $('#kopul').val(),
                        kopul1: $('#kopul1').val(),
                        ku: $('#ku').val(),
                        kp: $('#kp').val(),
                        primary: $('#primary').val(),
                        secondary: $('#secondary').val(),



                        tglmasuk: $('#tglmasuk').val(),



                    },
                    url: '<?= route('updateassemen') ?>',

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
    $(".simpanasses").click(function() {
        var data = $('.formerm').serializeArray();
        var datalab = $('.formlab').serializeArray();
        var datarad = $('.formradio').serializeArray();
        var ku = $('#ku').val()
        var subject = $('#subject').val()
        var objek = $('#objek').val()
        var primary = $('#primary').val()
        var secondary = $('#secondary').val()
        var assesmen = $('#assesmen').val()
        var planning = $('#planning').val()
        var tigap = $('#tigap').val()
        var tigak = $('#tigak').val()
        var norm = $('#norm').val()
        var kj = $('#kj').val()
        var kp = $('#kp').val()
        var counter = $('#counter').val()


        var tglmasuk = $('#tglmasuk').val()
        var diagnosa = $('#diagnosa').val()
        var diagnosa1 = $('#diagnosa1').val()
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
                        datalab: JSON.stringify(datalab),
                        datarad: JSON.stringify(datarad),
                        subject: $('#subject').val(),
                        objek: $('#objek').val(),
                        assesmen: $('#assesmen').val(),
                        planning: $('#planning').val(),
                        tigap: $('#tigap').val(),
                        tigak: $('#tigak').val(),
                        norm: $('#norm').val(),
                        counter: $('#counter').val(),

                        kj: $('#kj').val(),
                        diagnosa: $('#diagnosa').val(),
                        diagnosa1: $('#diagnosa1').val(),
                        alpul: $('#alpul').val(),
                        alpul1: $('#alpul1').val(),
                        kopul: $('#kopul').val(),
                        kopul1: $('#kopul1').val(),
                        ku: $('#ku').val(),
                        kp: $('#kp').val(),
                        primary: $('#primary').val(),
                        secondary: $('#secondary').val(),



                        tglmasuk: $('#tglmasuk').val(),
                    },
                    url: '<?= route('simpanassesmen') ?>',

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
</script>