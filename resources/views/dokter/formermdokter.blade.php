<!-- igd umum tanpa isi  -->
@if ($unit == '1002')
<div class="card-header">
    <h3 class="card-title">ASESMEN AWAL MEDIS INSTALASI GAWAT DARURAT (IGD)</h3>
    <div class="row">
        <div class="col-md-4"><a class=" btn btn-warning btn-block " id="cpptperawatt">
                <i class="bi bi-journal-text"></i>
                CPPT PERAWAT
            </a></div>
        <div class="col-md-5"><a class=" btn btn-danger btn-block " id="riwayattigd">
                <i class="bi bi-journal-text"></i>
                RIWAYAT ASSESMEN DOKTER
            </a></div>
    </div>


</div>

<div class="card-body">

    <div class="card">
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

        <!-- cppt perawat -->
        <div id="cpptperawat" class="modallp">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">

                <span class="closeep float-right">&times;</span>
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

                @endif

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
        <!-- riwayat -->
        <div id="riwayatigd" class="modalli">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">

                <span class="closeei float-right">&times;</span>
                <h4>Belum Ada Riwayat</h4>


            </div>

        </div>
        @if ($assesdok == null)

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
                            <label class="form-check-label" for="inlineRadio1">Pasien Sendiri / Autoanamase</label>
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

                <tr>
                    <td colspan="4">
                        <div type="button" class="btn btn-secondary penandaangambardokter ml-3 mb-3" style="margin-top: 20px;">
                            PENANDAAN GAMBAR
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="penandaangambar">


                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <div type="button" class="btn btn-secondary triasedewasaa ml-3 mb-3" style="margin-top: 20px;">
                FORM TRIASE DEWASA
            </div>
            <div type="button" class="btn btn-secondary triaseanakk ml-3 mb-3" style="margin-top: 20px;">
                FORM TRIASE ANAK
            </div>
        </div>
        <!-- resume triase  -->
        <div class="formtriase">
            <!-- triases form  -->
            @if ($triase == NULL)

            <h1> belum ada triase</h1>
            @else

            @endif
        </div>
        <!-- assesmen dokter -->
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
                                            <textarea class="form-control" id="subyek" name="subyek" placeholder="">{{$assesper[0]->keluhan_utama}}</textarea>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold font-italic">ANAMNESA</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="anamnesa" name="anamnesa" placeholder=""></textarea>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold font-italic">RIWAYAT PENYAKIT</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="riwayatpenyakit" name="riwayatpenyakit" placeholder=""></textarea>

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

                        <div class="accordion" id="accordionExample96">
                            <div class="card">
                                <div class="card-header bg-secondary" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne96" aria-expanded="true" aria-controls="collapseOne96">
                                            <i class="bi bi-ticket-detailed mr-1 ml-1"></i> PEMERIKSAAN FISIK
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne96" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample96">
                                    <div class="card-body bg-light">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div type="button" class="btn btn-secondary pemfistrau ml-3 mb-3" style="margin-top: 20px;">
                                                    TRAUMA
                                                </div>
                                                <div type="button" class="btn btn-secondary pemfisnontrau ml-3 mb-3" style="margin-top: 20px;">
                                                    NON TRAUMA
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pemeriksaanfisik">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                    <td class="text-bold font-italic">GCS </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="" name="gcs" id="gcs" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2"></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">SPO2</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="">
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
                                                    <td class="text-bold font-italic">GCS </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="" name="gcs" id="gcs" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$ttv[0]->GCS}}">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2"></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">SPO2</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{$ttv[0]->SPO2}}">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2"></span>
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
                                    <td class="text-bold font-italic">Diagnosa Kerja</td>
                                    <td>
                                        <div class="input-group">
                                            <input class="form-control form-control-sm @error('diagnosa') is-invalid @enderror" name="diagnosa" id="diagnosa" required />
                                            @error('unit')
                                            <small id="emailHelp" class="form-text text-danger">
                                                {{ $message }}</small>
                                            @enderror
                                        </div>
                                        <!-- <textarea class="form-control" id="diagnosakerja" name="diagnosakerja" placeholder=""></textarea> -->

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
                                    <!-- <td class="text-bold font-italic">TATA LAKSANA GP</td> -->
                                    <td colspan="2">
                                        <h5 class="text-bold"></h5> TATA LAKSANA GP
                                        <div class="input-group">
                                            <textarea class="form-control" id="talaksana" name="talaksana" placeholder=""></textarea>

                                        </div>
                                        <div class="row mt-2">

                                            <div class="col-md-6">
                                                <table id="tablegp" class="table table-sm mt-3 table-hover">
                                                    <thead>
                                                        <th>Nama tindakan</th>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($tindakanigd as $ti)
                                                        <tr class="pilihtindakangp" namatindakandok="{{ $ti->Tindakan }}" tariftin="{{ $ti->tarif }}" kodetin="{{ $ti->kode }}">
                                                            <td>{{ $ti->Tindakan }}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header bg-secondary">Tindakan / Layanan Pasien</div>
                                                    <div class="card-body">
                                                        <form action="" method="post" class="formtindakangp">
                                                            <div class="input_fields_wrap_gp">
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
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <form id="dynamic-form" class="formtindakandpjp">

                                            <div class="field_wrapperrrr">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-5"><label for="">PILIH DPJP</label>
                                                            <select class="form-control  select2" name="kode_dpjp" id="kode_dpjp" placeholder="Cari opsi...">
                                                                @foreach ($dpjp as $i => $p) <option value="{{ $p->kode_paramedis }}">{{ $p->nama_paramedis }} </option> @endforeach
                                                            </select>

                                                        </div>
                                                        <div class="col-md-5">
                                                            <label for="">Tata Laksana DPJP</label>
                                                            <!-- <input class="form-control" placeholder="Tata Laksana DPJP" type="text-area" row="3" name="talaksanadpjp[]" value="" /> -->
                                                            <textarea class="form-control" id="talaksanadpjp" name="talaksanadpjp" placeholder=""></textarea>
                                                            <!-- <select class="form-control select2" name="talaksanadpjp" id="talaksanadpjp">
                                                                <option value=""> -- Select One --</option>
                                                                <option value="TX42331">Konsultasi Dokter Fetomaternal Dari Dokter Spesialis
                                                                </option>
                                                                <option value="TX45131">Konsultasi Dokter Spesialis (On Call)
                                                                </option>
                                                                <option value="TX45121">Konsultasi Dokter Spesialis (On Site)
                                                                </option>



                                                            </select> -->


                                                        </div>

                                                        <div class="col-md-2">
                                                            <a class="btn btn-success" href="javascript:void(0);" id="add_button" title="Add field">TAMBAH</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td colspan="2">
                                        <form id="dynamic-form" class="formtindakanperawat">
                                            <div id="form-container">
                                                <div class="row mt-2">
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label>DIAGNOSA</label>
                                                            <input class="form-control form-control-sm @error('diagnosa') is-invalid @enderror" name="diagnosa" id="diagnosa" required />
                                                            @error('unit')
                                                            <small id="emailHelp" class="form-text text-danger">
                                                                {{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">DPJP</label>
                                                            <input type="time" name="waktu" id="waktu" value="" class="waktu form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="name">TATALAKSANA DPJP</label>
                                                            <input type="text" name="tindakankeperawatan" id="tindakankeperawatan" value="" class="tindakan_keperawatan form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <i class="bi bi-x-square remove form-group col-md-2 text-danger"></i>
                                                            <button type="button" class="btn btn-danger mb-2  " id="remove">x</button>
                                                            <button type="button" class="btn btn-success mb-2 " id="add">Tambah</button>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold font-italic">PILIH DPJP</td>
                                    <td colspan="">
                                        <div class="form-group detaildpjp">
                                            <input type="text " id="nama_paramedis" value="" class="form-control">
                                        </div>
                                        <button class="btn btn-primary caridpjp mb-2"> <i class="bi bi-search-heart"></i></button>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold font-italic">TATA LAKSANA DPJP</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="talaksanadpjp" name="talaksanadpjp" placeholder=""></textarea>

                                        </div>
                                    </td>
                                </tr> -->
                                <tr>
                                    <td class="text-bold font-italic">Evaluasi (30 menit pertama)</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="tigap" name="tigap" placeholder=""></textarea>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold font-italic">Evaluasi (30 menit kedua)</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="tigak" name="tigak" placeholder=""></textarea>

                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <input type="text" name="ku" id="ku" value="{{ $ku }}" hidden>
        <input type="text" name="kp" id="kp" value="{{ $kp }}" hidden>
        <input type="text" name="counter" id="counter" value="{{ $counter }}" hidden>



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

                            @foreach ($alasanpulang as $i => $p)
                            <option value="{{ $p->alasan_pulang }}">{{ $p->alasan_pulang }}
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
                        <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4">
                            <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Keadaan Pasien Saat Keluar
                        </button>
                    </h2>
                </div>

                <div id="collapseOne4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample4">
                    <div class="card-body bg-light">
                        <select class="form-control select2" name="kopul" id="kopul">
                            <option value=""> -- Select One --</option>
                            <option value="Sembuh">Sembuh
                            </option>
                            <option value="Perbaikan">Perbaikan
                            </option>
                            <option value="Tidak Sembuh">Tidak Sembuh
                            </option>
                            <option value="Meninggal">Meninggal
                            </option>


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

                        <iframe src="http://192.168.2.125/kpoelektronik/" width="1200px" height="750px"></iframe>

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
                <div type="button" class="btn float-right btn-success simpanasses mt-3 mb-3 mr-3">
                    SIMPAN
                </div>
            </div>
        </div>
        @elseif($assesdok[0]->status == 3)
        <h1>Data Sudah Tidak Bisa Diubah Karena sudah di Validasi</h1>
        <!-- igd umum dengan isi  -->
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
                            @if($assesdok[0]->sumber_data == 'Pasien Sendiri')
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
                            @if($assesdok[0]->sumber_data == 'Keluarga')
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
                    <td class="text-bold font-italic">Macam Kasus</td>
                    <td>
                        <div class="form-check form-check-inline">
                            @if($assesdok[0]->macam_kasus == 'Non Trauma')
                            <input class="form-check-input" type="radio" name="macamkasus" id="macamkasus" value="Non Trauma" checked>
                            <label class="form-check-label" for="inlineRadio1">Non Trauma</label>
                            @else
                            <input class="form-check-input" type="radio" name="macamkasus" id="macamkasus" value="Non Trauma">
                            <label class="form-check-label" for="inlineRadio1">Non Trauma</label>
                            @endif
                        </div>

                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            @if($assesdok[0]->macam_kasus == 'Trauma')
                            <input class="form-check-input" type="radio" name="macamkasus" id="macamkasus" value="Trauma" checked>
                            <label class="form-check-label" for="inlineRadio2">Trauma </label>
                            @else
                            <input class="form-check-input" type="radio" name="macamkasus" id="macamkasus" value="Trauma">
                            <label class="form-check-label" for="inlineRadio2">Trauma </label>
                            @endif

                        </div>
                    </td>
                    <td>
                        <select class="form-control select2" name="trauma" id="trauma">
                            <option value=""> {{$assesdok[0]->trauma}}</option>
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


                <tr>
                    <td colspan="4">
                        <div type="button" class="btn btn-secondary penandaangambardokter ml-3 mb-3" style="margin-top: 20px;">
                            PENANDAAN GAMBAR
                        </div>
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
                    </td>
                </tr>

            </tbody>
        </table>
        <!-- triase -->
        <div class="row">
            <div type="button" class="btn btn-secondary triasedewasaa ml-3 mb-3" style="margin-top: 20px;">
                FORM TRIASE DEWASA
            </div>
            <div type="button" class="btn btn-secondary triaseanakk ml-3 mb-3" style="margin-top: 20px;">
                FORM TRIASE ANAK
            </div>
        </div>
        <!-- resume triase  -->

        <div class="formtriase">
            <!-- triases view  -->
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
                        <input hidden type="text" class="form-control" id="jenistriase" name="jenistriase" value="dewasa">

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
                                        @if ($triase[0]->gejala_respirasi27 == 'Defisit neurologi hiper akut ( < 3 hari)') <input type="checkbox" class="form-check-input" id="gejala27" name="gejala27" value="Defisit neurologi hiper akut ( < 3 hari) " checked>
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

                        <table class=" table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="text-bold ">KATEGORI TRIASE </td>

                                    <td>
                                        @if ($triase[0]->kategori_triase == 'Medikal')
                                        <div class="form-group form-check">
                                            <input checked type="checkbox" class="form-check-input" id="kategoritriase" name="kategoritriase" value="Medikal">
                                            <input hidden type="text" class="form-control" placeholder="" aria-label="Recipient's username" id="jenistriase" name="jenistriase" aria-describedby="basic-addon2" value="anak">

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
            </div>
        </div>
        <!-- assesmen dokter -->
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
                                            <textarea class="form-control" id="riwayatpenyakit" name="riwayatpenyakit" placeholder="">{{$assesdok[0]->riwayat_penyakit}}</textarea>

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

                        <div class="accordion" id="accordionExample96">
                            <div class="card">
                                <div class="card-header bg-secondary" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne96" aria-expanded="true" aria-controls="collapseOne96">
                                            <i class="bi bi-ticket-detailed mr-1 ml-1"></i> PEMERIKSAAN FISIK
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne96" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample96">
                                    <div class="card-body bg-light">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div type="button" class="btn btn-secondary pemfistrau ml-3 mb-3" style="margin-top: 20px;">
                                                    TRAUMA
                                                </div>
                                                <div type="button" class="btn btn-secondary pemfisnontrau ml-3 mb-3" style="margin-top: 20px;">
                                                    NON TRAUMA
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pemeriksaanfisik">
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
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                    <td class="text-bold font-italic">GCS </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="" name="gcs" id="gcs" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2"></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">SPO2</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="">
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
                                                    <td class="text-bold font-italic">GCS </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="" name="gcs" id="gcs" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{$ttv[0]->GCS}}">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2"></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-bold font-italic">SPO2</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="SPO2" id="SPO2" aria-describedby="basic-addon2" value="{{$ttv[0]->SPO2}}">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon2"></span>
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
                                    <td class="text-bold font-italic">Diagnosa Kerja</td>
                                    <td>
                                        <div class="input-group">

                                            <input value="{{$assesdok[0]->diagnosa_kerja}}" class="form-control form-control-sm @error('diagnosa') is-invalid @enderror" name="diagnosa" id="diagnosa" required />
                                            @error('unit')
                                            <small id="emailHelp" class="form-text text-danger">
                                                {{ $message }}</small>
                                            @enderror
                                        </div>
                                        <!-- <div class="input-group">
                                            <textarea class="form-control" id="diagnosakerja" name="diagnosakerja" placeholder="">{{$assesdok[0]->diagnosa_kerja}}</textarea>

                                        </div> -->
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
                                    <td colspan="2">
                                        <h5 class="text-bold"></h5> TATA LAKSANA GP
                                        <div class="input-group">
                                            <textarea class="form-control" id="talaksana" name="talaksana" placeholder="">{{$assesdok[0]->tata_laksana}}</textarea>

                                        </div>
                                        <div class="row mt-2">

                                            <div class="col-md-6">
                                                <table id="tablegp" class="table table-sm mt-3 table-hover">
                                                    <thead>
                                                        <th>Nama tindakan</th>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($tindakanigd as $ti)
                                                        <tr class="pilihtindakangp" namatindakandok="{{ $ti->Tindakan }}" tariftin="{{ $ti->tarif }}" kodetin="{{ $ti->kode }}">
                                                            <td>{{ $ti->Tindakan }}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-6">
                                                <table id="tablergp" class="table tablergp table-bordered">
                                                    <thead>
                                                        <th hidden style="width: 10px">Kode Layanan Header</th>
                                                        <th hidden style="width: 10px">Kode Layanan detail</th>
                                                        <th hidden style="width: 10px">id Layanan detail</th>

                                                        <th>Nama Tindakan</th>
                                                        <th>Nama Dokter</th>
                                                        <th>Harga</th>
                                                        <th style="width: 40px">Action</th>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($riwayatordergp as $lab => $l)
                                                        <tr>
                                                            <td hidden class="dheader">{{ $l->kode_layanan_header }}</td>
                                                            <td hidden class="ddetail">{{ $l->id_layanan_detail }}</td>
                                                            <td hidden class="idddetail">{{ $l->iddetail }}</td>
                                                            <td>{{ $l->nama_tindakan }}</td>
                                                            <td>{{ $l->nama_dokter }}</td>
                                                            <td>
                                                                Rp.{{ $l->total_tarif }}
                                                            </td>
                                                            <td> <a class=" btn btn-danger btn-sm returordergp" href="#">
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

                                                        <form action="" method="post" class="formtindakangp">
                                                            <div class="input_fields_wrap_gp">
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
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">

                                        <div class="row">
                                            \ <table id="tabletdpjp" class="table tabletdpjp table-bordered">
                                                <thead>

                                                    <th hidden>id</th>
                                                    <th>Nama Dokter Penanggung Jawab</th>


                                                    <th>Tindakan</th>
                                                    <th style="width: 40px">Action</th>
                                                </thead>
                                                <tbody>
                                                    @foreach ($riwayattindakandpjp as $rtd => $td)

                                                    <tr>
                                                        <td hidden class="idtdp">{{$td->id}}</td>

                                                        <td>{{$td->nama_dpjp}}</td>
                                                        <td>{{$td->tindakan_kedokteran}}</td>

                                                        <td> <a class=" btn btn-danger btn-sm returordertdp" href="#">
                                                                <i class="fas fa-sync-alt fa-spin"></i>
                                                                RETUR
                                                            </a></td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>

                                        </div>
                                        <form id="dynamic-form" class="formtindakandpjp">
                                            <div class="field_wrapperrrr">
                                                <div class="row">
                                                    <!-- <div class="col-md-5"><label for="">PILIH DPJP</label>
                                                        <select class="form-control  select2" name="kode_dpjp" id="kode_dpjp" placeholder="Cari opsi...">
                                                            @foreach ($dpjp as $i => $p) <option value="{{ $p->kode_paramedis }}">{{ $p->nama_paramedis }} </option> @endforeach
                                                        </select>

                                                    </div>
                                                    <div class="col-md-5">
                                                        <label for="">Tata Laksana DPJP</label> -->
                                                    <!-- <input class="form-control" placeholder="Tata Laksana DPJP" type="text-area" row="3" name="talaksanadpjp[]" value="" /> -->
                                                    <!-- <textarea class="form-control" id="talaksanadpjp" name="talaksanadpjp" placeholder=""></textarea>

                                                    </div> -->

                                                    <div class="col-md-12">
                                                        <a class="btn btn-success float-right" href="javascript:void(0);" id="add_button" title="Add field">TAMBAH</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td class="text-bold font-italic">PILIH DPJP</td>
                                    <td colspan="">
                                        <div class="form-group detaildpjp">
                                            <input type="text " id="nama_paramedis" value="{{$assesdok[0]->nama_dpjp}}" class="form-control">
                                        </div>
                                        <button class="btn btn-primary caridpjp mb-2"> <i class="bi bi-search-heart"></i></button>

                                    </td>
                                </tr> -->
                                <!-- <tr>
                                    <td class="text-bold font-italic">TATA LAKSANA DPJP</td>
                                    <td>
                                        <div class="input-group">
                                            <textarea class="form-control" id="talaksanadpjp" name="talaksanadpjp" placeholder="">{{$assesdok[0]->tata_laksana_dpjp}}</textarea>

                                        </div>
                                    </td>
                                </tr> -->
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
                    </div>
                </div>
            </div>
        </div>
        <input type="text" name="ku" id="ku" value="{{ $ku }}" hidden>
        <input type="text" name="kp" id="kp" value="{{ $kp }}" hidden>
        <input type="text" name="counter" id="counter" value="{{ $counter }}" hidden>

        <!-- <table class="table">
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
                                <textarea class="form-control" id="primary" name="primary" rows="5">Airways : &#13;&#10;Breathing :  &#13;&#10;Circulation :  &#13;&#10;Disability :  &#13;&#10;Expose : </textarea>

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
                            <input class="form-control form-control-sm @error('diagnosa') is-invalid @enderror" name="diagnosa" id="diagnosa" required />
                            @error('unit')
                            <small id="emailHelp" class="form-text text-danger">
                                {{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                </div> -->
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
                            <option value="{{$assesdok[0]->cara_pulang}}"> {{$assesdok[0]->cara_pulang}}</option>
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
                            <option value="{{$assesdok[0]->keadaan_pulang}}"> {{$assesdok[0]->keadaan_pulang}}</option>
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
                                        <th style="width: 10px">Kode Layanan detail</th>
                                        <th hidden style="width: 10px">iddetail</th>


                                        <th>Nama Tindakan</th>
                                        <th>Harga</th>
                                        <th style="width: 40px">Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($riwayatorderlab as $lab => $l)
                                        <tr>
                                            <td class="header">{{ $l->kode_layanan_header }}</td>
                                            <td class="detail">{{ $l->id_layanan_detail }}</td>
                                            <td hidden class="iddetail">{{ $l->iddetail }}</td>


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
                                        <th hidden style="width: 10px">Kode Layanan detail</th>
                                        <th hidden style="width: 10px">iddetail</th>
                                        <th>Nama Tindakan</th>

                                        <th>Harga</th>
                                        <th style="width: 40px">Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($riwayatorderrad as $rad => $r)
                                        <tr>
                                            <td>{{ $r->kode_layanan_header }}</td>
                                            <td class="rheader">{{ $r->kode_layanan_header }}</td>
                                            <td hidden class="rdetail">{{ $r->id_layanan_detail }}</td>
                                            <td hidden class="idrdetail">{{ $r->iddetail }}</td>
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
            <div type="button" class="btn  btn-success updateasses" style="margin-top: 20px;">
                UPDATE
            </div>
            <div type="button" class="btn  btn-success ml-2 validasiasssesdok" style="margin-top: 20px;">
                Validasi
            </div>

        </div>

    </div>



    @endif



    <!-- igd kebidanan tanpa isi  -->

    @else
    <input type="text" name="ku" id="ku" value="{{ $ku }}" hidden>
    <input type="text" name="kp" id="kp" value="{{ $kp }}" hidden>
    <input type="text" name="counter" id="counter" value="{{ $counter }}" hidden>
    <input type="text" name="kelas" id="kelas" value="{{ $kelas }}" hidden>
    <input type="text" name="kj" id="kj" value="{{ $kj }}" hidden>
    <input type="text" name="norm" id="norm" value="{{ $norm }}" hidden>


    <div class="card-body">
        <div type="button" class="btn btn-secondary formdewasadok ml-3 mb-3" style="margin-top: 20px;">
            FORM IBU
        </div>
        <div type="button" class="btn btn-secondary formbayikdok ml-3 mb-3" style="margin-top: 20px;">
            FORM NEONATUS
        </div>
    </div>





    <div class="formigkdok">

    </div>

    @endif

</div>

</div>
</div>
</div>
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/select2.min.js"></script> -->
<script src="{{ asset('public/marker/markerjs2.js') }}"></script>

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

    $(".triaseanakk").click(function() {
        spinner = $('#loader2');
        spinner.show();
        var ku = $('#ku').val()
        var kp = $('#kp').val()
        var kelas = $('#kelas').val()
        var kj = $('#kj').val()
        var norm = $('#norm').val()



        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                ku: $('#ku').val(),
                kp: $('#kp').val(),
                kelas: $('#kelas').val(),
                kj: $('#kj').val(),
                norm: $('#norm').val(),



            },
            url: '<?= route('triaseanakk') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.formtriase').html(response);

            }
        });
    });

    $(".triasedewasaa").click(function() {
        spinner = $('#loader2');
        spinner.show();
        var ku = $('#ku').val()
        var kp = $('#kp').val()
        var kelas = $('#kelas').val()
        var kj = $('#kj').val()
        var norm = $('#norm').val()



        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                ku: $('#ku').val(),
                kp: $('#kp').val(),
                kelas: $('#kelas').val(),
                kj: $('#kj').val(),
                norm: $('#norm').val(),


            },
            url: '<?= route('triasedewasaa') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.formtriase').html(response);

            }
        });
    });
    $(".pemfistrau").click(function() {
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
            url: '<?= route('pemfistrau') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.pemeriksaanfisik').html(response);

            }
        });
    });
    $(".pemfisnontrau").click(function() {
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
            url: '<?= route('pemfisnontrau') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.pemeriksaanfisik').html(response);

            }
        });
    });
    $(".formdewasadok").click(function() {
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
            url: '<?= route('formdewasaigkdok') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.formigkdok').html(response);

            }
        });
    });
    $(".formbayikdok").click(function() {
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
            url: '<?= route('formbayikigkdok') ?>',

            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.formigkdok').html(response);

            }
        });
    });
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
    $(".caridpjp").click(function() {
        spinner = $('#loader2');
        spinner.show();
        namadokter = $('#nama_paramedis').val()


        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                namadokter,
            },
            url: '<?= route('caridokterrme') ?>',

            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.detaildpjp').html(response);

            }
        });
    });
</script>
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
        $("#tablegp").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $(function() {
        $("#tablergp").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 2,
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
    $(".penandaangambardokter").click(function() {
        spinner = $('#loader2');
        spinner.show();
        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
            },
            url: '<?= route('penandaangambardokter') ?>',
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
    $('#tablegp').on('click', '.pilihtindakangp', function() {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_fields_wrap_gp"); //Fields wrapper
        var x = 1; //initlal text box countnamatindakan
        kode = $(this).attr('kodetin')
        namatindakan = $(this).attr('namatindakandok')
        tarif = $(this).attr('tariftin')
        id = $(this).attr('id')



        // e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append(
                '<div class="form-row text-xs"><div class="form-group col-md-4"><label for="">Tindakan</label><input readonly type="" class="form-control form-control-sm" id="" name="namatindakan" value="' +
                namatindakan +
                '"><input hidden readonly type="" class="form-control form-control-sm" id="" name="kodelayanan" value="' +
                kode +
                '"></div><div class="form-group col-md-2"><label for="inputPassword4">Tarif</label><input readonly type="" class="form-control form-control-sm" id="" name="tarif" value="' +
                tarif +
                '"></div><div class="form-group col-md-1"><label for="inputPassword4">Jumlah</label><input type="" class="form-control form-control-sm" id="" name="qty" value="1"></div><div class="form-group col-md-4"> <label for="">Dokter</label> <select class="form-control  select2" name="kode_dpjp" id="kode_dpjp" placeholder="Cari opsi..."><option value="{{ $kgp }}">{{ $nama }} </option> @foreach ($dpjp as $i => $p) <option value="{{ $p->kode_paramedis }}">{{ $p->nama_paramedis }} </option> @endforeach</select></div><i class="bi bi-x-square remove_field form-group col-md-1 text-danger"></i></div>'
            );
            $(wrapper).on("click", ".remove_field", function(e) { //user click on remove
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })
        }
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
                '"></div><div class="form-group col-md-1"><label for="inputPassword4">Jumlah</label><input type="" class="form-control form-control-sm" id="" name="qty" value="1"></div><div class="form-group col-md-1"><label for="inputPassword4">Disc</label><input type="" class="form-control form-control-sm" id="" name="disc" value="0"></div><div class="form-group col-md-1"><label for="inputPassword4">Cyto</label><input type="" class="form-control form-control-sm" id="" name="cyto" value="0"></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i></div>'
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
                '"></div><div class="form-group col-md-1"><label for="inputPassword4">Jumlah</label><input type="" class="form-control form-control-sm" id="" name="qty" value="1"></div><div class="form-group col-md-1"><label for="inputPassword4">Disc</label><input type="" class="form-control form-control-sm" id="" name="disc" value="0"></div><div class="form-group col-md-1"><label for="inputPassword4">Cyto</label><input type="" class="form-control form-control-sm" id="" name="cyto" @if($time >= "15:00:00" OR $time <= "07:00:00") value = "1" @else value="0" @endif></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i></div>'
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
    // $(document).ready(function() {
    //     $('#nama_paramedis').select2({
    //         placeholder: "Pilih opsi...",
    //         allowClear: true
    //     });
    // });
    $(document).ready(function() {
        var maxField = 10; //Input fields increment limitation
        var addButton = $('#add_button'); //Add button selector
        var wrapper = $('.field_wrapperrrr'); //Input field wrapper
        var fieldHTML = '<div class="form-group add"><div class="row">';
        fieldHTML = fieldHTML + '<div class="col-md-5"><label for="">PILIH DPJP</label><select class="form-control  select2" name="kode_dpjp" id="kode_dpjp" placeholder="Cari opsi...">@foreach ($dpjp as $i => $p) <option value="{{ $p->kode_paramedis }}">{{ $p->nama_paramedis }} </option> @endforeach</select></div>';
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
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e) {
            e.preventDefault();
            $(this).parent('').parent('').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
    $(".returorderradiologi").click(function() {
        var data = $('.formerm').serializeArray();
        var $row = $(this).closest("tr");
        var rdetail = $row.find(".rdetail").text();
        var rheader = $row.find(".rheader").text();
        var idrdetail = $row.find(".idrdetail").text();
        var norm = $('#norm').val()
        var kj = $('#kj').val()



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
                        rdetail,
                        rheader,
                        idrdetail



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
                            cpptdokter();


                        }
                    }
                });
            }
        })
        return false;
    });

    $(".returordergp").click(function() {
        var data = $('.formerm').serializeArray();
        var $row = $(this).closest("tr");
        var ddetail = $row.find(".ddetail").text();
        var dheader = $row.find(".dheader").text();
        var idddetail = $row.find(".idddetail").text();




        var norm = $('#norm').val()

        var kj = $('#kj').val()



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
                        ddetail,
                        dheader,
                        idddetail



                    },
                    url: '<?= route('returordergp') ?>',

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
                            cpptdokter();


                        }
                    }
                });
            }
        })
        return false;
    });
    $(".returorderlaboratorium").click(function() {
        var data = $('.formerm').serializeArray();
        var $row = $(this).closest("tr");
        var detail = $row.find(".detail").text();
        var header = $row.find(".header").text();
        var iddetail = $row.find(".iddetail").text();




        var norm = $('#norm').val()

        var kj = $('#kj').val()



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
                        detail,
                        header,
                        iddetail



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
                            cpptdokter();


                        }
                    }
                });
            }
        })
        return false;
    });
    $(".returordertdp").click(function() {
        var $row = $(this).closest("tr");
        var idtdp = $row.find(".idtdp").text();




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
                        idtdp



                    },
                    url: '<?= route('returordertdp') ?>',

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
                            cpptdokter()



                        }
                    }
                });
            }
        })
        return false;
    });
    $(".validasiasssesdok").click(function() {
        var data = $('.formerm').serializeArray();

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
                        data: JSON.stringify(data),
                        norm: $('#norm').val(),
                        counter: $('#counter').val(),
                        kj: $('#kj').val(),

                    },
                    url: '<?= route('validasiasssesdok') ?>',

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
    $(".updateasses").click(function() {
        // var data = $('.formtindakandokter').serializeArray();
        var gambar = document.getElementById("myCanvas2");

        var ctx1 = gambar.getContext("2d");
        var img1 = document.getElementById("gambarnya2");
        ctx1.drawImage(img1, 10, 10);
        var dataUrl1 = gambar.toDataURL();
        $('#gambarcoret1').val(dataUrl1)
        gambar1 = $('#gambarcoret1').val()
        var datalab = $('.formlab').serializeArray()
        var datarad = $('.formradio').serializeArray()
        var rekobat = $('.formtinjutobat').serializeArray()
        var tindakandpjp = $('.formtindakandpjp').serializeArray()

        var tindakangp = $('.formtindakangp').serializeArray();
        //triase
        var kategoritriase = $("#kategoritriase:checked").val()
        var jenisats = $("#jenisats:checked").val()
        var jenistriase = $('#jenistriase').val()
        //kesadaran var kesadaran1=$("#kesadaran1:checked").val() 
        var kesadaran2 = $("#kesadaran2:checked").val()
        var kesadaran3 = $("#kesadaran3:checked").val()
        var kesadaran4 = $("#kesadaran4:checked").val()
        var kesadaran5 = $("#kesadaran5:checked").val()
        var kesadaran6 = $("#kesadaran6:checked").val()
        var kesadaran7 = $("#kesadaran7:checked").val()
        var kesadaran8 = $("#kesadaran8:checked").val()
        var kesadaran9 = $("#kesadaran9:checked").val()
        var kesadaran10 = $("#kesadaran10:checked").val()
        var kesadaran11 = $("#kesadaran11:checked").val()
        var kesadaran12 = $("#kesadaran12:checked").val()
        //jalannafas var jalannafas1=$("#jalannafas1:checked").val()
        var jalannafas2 = $("#jalannafas2:checked").val()
        var jalannafas3 = $("#jalannafas3:checked").val()
        var jalannafas4 = $("#jalannafas4:checked").val()
        var jalannafas5 = $("#jalannafas5:checked").val()
        //pernafasan var upaya1=$("#upaya1:checked").val() 
        var upaya2 = $("#upaya2:checked").val()
        var upaya3 = $("#upaya3:checked").val()
        var upaya4 = $("#upaya4:checked").val()
        var upaya5 = $("#upaya5:checked").val()
        var upaya6 = $("#upaya6:checked").val()
        var upaya7 = $("#upaya7:checked").val()
        var upaya8 = $("#upaya8:checked").val()
        //sirkulasi var sirkulasi1=$("#sirkulasi1:checked").val() 
        var sirkulasi2 = $("#sirkulasi2:checked").val()
        var sirkulasi3 = $("#sirkulasi3:checked").val()
        var sirkulasi4 = $("#sirkulasi4:checked").val()
        var sirkulasi5 = $("#sirkulasi5:checked").val()
        var sirkulasi6 = $("#sirkulasi6:checked").val()
        var sirkulasi7 = $("#sirkulasi7:checked").val()
        var sirkulasi8 = $("#sirkulasi8:checked").val()
        var sirkulasi9 = $("#sirkulasi9:checked").val()
        var sirkulasi10 = $("#sirkulasi10:checked").val()
        var sirkulasi11 = $("#sirkulasi11:checked").val()
        var sirkulasi12 = $("#sirkulasi12:checked").val()
        var sirkulasi13 = $("#sirkulasi13:checked").val()
        var sirkulasi14 = $("#sirkulasi14:checked").val()
        var sirkulasi15 = $("#sirkulasi15:checked").val()
        var sirkulasi16 = $("#sirkulasi16:checked").val()
        var sirkulasi17 = $("#sirkulasi17:checked").val()
        var sirkulasi18 = $("#sirkulasi18:checked").val()
        var sirkulasi19 = $("#sirkulasi19:checked").val()
        var sirkulasi20 = $("#sirkulasi20:checked").val()
        var sirkulasi21 = $("#sirkulasi21:checked").val()
        var sirkulasi22 = $("#sirkulasi22:checked").val()
        var sirkulasi23 = $("#sirkulasi23:checked").val()
        var sirkulasi24 = $("#sirkulasi24:checked").val()
        var sirkulasi25 = $("#sirkulasi25:checked").val()
        //gejalaspesifik var gejala1=$("#gejala1:checked").val() 
        var gejala2 = $("#gejala2:checked").val()
        var gejala3 = $("#gejala3:checked").val()
        var gejala4 = $("#gejala4:checked").val()
        var gejala5 = $("#gejala5:checked").val()
        var gejala6 = $("#gejala6:checked").val()
        var gejala7 = $("#gejala7:checked").val()
        var gejala8 = $("#gejala8:checked").val()
        var gejala9 = $("#gejala9:checked").val()
        var gejala10 = $("#gejala10:checked").val()
        var gejala11 = $("#gejala11:checked").val()
        var gejala12 = $("#gejala12:checked").val()
        var gejala13 = $("#gejala13:checked").val()
        var gejala14 = $("#gejala14:checked").val()
        var gejala15 = $("#gejala15:checked").val()
        var gejala15 = $("#gejala15:checked").val()
        var gejala17 = $("#gejala17:checked").val()
        var gejala18 = $("#gejala18:checked").val()
        var gejala19 = $("#gejala19:checked").val()
        var gejala20 = $("#gejala20:checked").val()
        var gejala21 = $("#gejala21:checked").val()
        var gejala22 = $("#gejala22:checked").val()
        var gejala23 = $("#gejala23:checked").val()
        var gejala24 = $("#gejala24:checked").val()
        var gejala25 = $("#gejala25:checked").val()
        var gejala26 = $("#gejala26:checked").val()
        var gejala27 = $("#gejala27:checked").val()
        var gejala28 = $("#gejala28:checked").val()
        var gejala29 = $("#gejala29:checked").val()
        var ats1lain = $('#ats1lain').val()
        var ats2lain = $('#ats2lain').val()
        var ats3lain = $('#ats3lain').val()
        var ats4lain = $('#ats4lain').val()
        var ats5lain = $('#ats5lain').val()
        //triase
        var ku = $('#ku').val()
        var sumberdata = $('#sumberdata:checked').val()
        var macamkasus = $('#macamkasus:checked').val()
        var trauma = $('#trauma').val()

        var subject = $('#subyek').val()
        var objek = $('#objek').val()
        var primary = $('#primary').val()
        var secondary = $('#secondary').val()
        var anamnesa = $('#anamnesa').val()
        var riwayatpenyakit = $('#riwayatpenyakit').val()

        var diagnosa = $('#diagnosa').val()
        var namadpjp = $('#namadpjp').val()
        var kodedpjp = $('#kodedpjp').val()

        var talaksana = $('#talaksana').val()
        var talaksanadpjp = $('#talaksanadpjp').val()

        var tigap = $('#tigap').val()
        var tigak = $('#tigak').val()
        var norm = $('#norm').val()
        var kj = $('#kj').val()
        var kp = $('#kp').val()
        var counter = $('#counter').val()
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
                        // data: JSON.stringify(data),
                        datalab: JSON.stringify(datalab),
                        datarad: JSON.stringify(datarad),
                        rekobat: JSON.stringify(rekobat),
                        tindakandpjp: JSON.stringify(tindakandpjp),
                        tindakangp: JSON.stringify(tindakangp),

                        //triase
                        kategoritriase: $("#kategoritriase:checked").val(),
                        // bedah : $("#bedah:checked").val(),
                        // obgyn : $("#obgyn:checked").val(),
                        // anak : $("#anak:checked").val(),
                        jenisats: $("#jenisats:checked").val(),
                        jenistriase: $('#jenistriase').val(),

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
                        kesadaran11: $("#kesadaran11:checked").val(),
                        kesadaran12: $("#kesadaran12:checked").val(),

                        //jalannafas
                        jalannafas1: $("#jalannafas1:checked").val(),
                        jalannafas2: $("#jalannafas2:checked").val(),
                        jalannafas3: $("#jalannafas3:checked").val(),
                        jalannafas4: $("#jalannafas4:checked").val(),
                        jalannafas5: $("#jalannafas5:checked").val(),

                        //pernafasan
                        upaya1: $("#upaya1:checked").val(),
                        upaya2: $("#upaya2:checked").val(),
                        upaya3: $("#upaya3:checked").val(),
                        upaya4: $("#upaya4:checked").val(),
                        upaya5: $("#upaya5:checked").val(),
                        upaya6: $("#upaya6:checked").val(),
                        upaya7: $("#upaya7:checked").val(),
                        upaya8: $("#upaya8:checked").val(),

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
                        sirkulasi12: $("#sirkulasi12:checked").val(),
                        sirkulasi13: $("#sirkulasi13:checked").val(),
                        sirkulasi14: $("#sirkulasi14:checked").val(),
                        sirkulasi15: $("#sirkulasi15:checked").val(),
                        sirkulasi16: $("#sirkulasi16:checked").val(),
                        sirkulasi17: $("#sirkulasi17:checked").val(),
                        sirkulasi18: $("#sirkulasi18:checked").val(),
                        sirkulasi19: $("#sirkulasi19:checked").val(),
                        sirkulasi20: $("#sirkulasi20:checked").val(),
                        sirkulasi21: $("#sirkulasi21:checked").val(),
                        sirkulasi22: $("#sirkulasi22:checked").val(),
                        sirkulasi23: $("#sirkulasi23:checked").val(),
                        sirkulasi24: $("#sirkulasi24:checked").val(),
                        sirkulasi25: $("#sirkulasi25:checked").val(),

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
                        gejala16: $("#gejala16:checked").val(),
                        gejala17: $("#gejala17:checked").val(),
                        gejala18: $("#gejala18:checked").val(),
                        gejala19: $("#gejala19:checked").val(),
                        gejala20: $("#gejala20:checked").val(),
                        gejala21: $("#gejala21:checked").val(),
                        gejala22: $("#gejala22:checked").val(),
                        gejala23: $("#gejala23:checked").val(),
                        gejala24: $("#gejala24:checked").val(),
                        gejala25: $("#gejala25:checked").val(),
                        gejala26: $("#gejala26:checked").val(),
                        gejala27: $("#gejala27:checked").val(),
                        gejala28: $("#gejala28:checked").val(),
                        gejala29: $("#gejala29:checked").val(),
                        ats1lain: $('#ats1lain').val(),
                        ats2lain: $('#ats2lain').val(),
                        ats3lain: $('#ats3lain').val(),
                        ats4lain: $('#ats4lain').val(),
                        ats5lain: $('#ats5lain').val(),
                       
                       
                        //triase
                        sumberdata: $('#sumberdata:checked').val(),
                        macamkasus: $('#macamkasus:checked').val(),
                        trauma: $('#trauma').val(),
                        subject: $('#subyek').val(),
                        objek: $('#objek').val(),
                        anamnesa: $('#anamnesa').val(),
                        diagnosa: $('#diagnosa').val(),
                        namadpjp: $('#namadpjp').val(),
                        kodedpjp: $('#kodedpjp').val(),
                        talaksana: $('#talaksana').val(),
                        talaksanadpjp: $('#talaksanadpjp').val(),
                        riwayatpenyakit: $('#riwayatpenyakit').val(),

                        tigap: $('#tigap').val(),
                        tigak: $('#tigak').val(),
                        norm: $('#norm').val(),
                        counter: $('#counter').val(),
                        kj: $('#kj').val(),
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
                                text: 'Update berhasil disimpan',
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
    $(".simpanasses").click(function() {
        var gambar = document.getElementById("myCanvas2");

        var ctx1 = gambar.getContext("2d");
        var img1 = document.getElementById("gambarnya2");
        ctx1.drawImage(img1, 10, 10);
        var dataUrl1 = gambar.toDataURL();
        $('#gambarcoret1').val(dataUrl1)
        gambar1 = $('#gambarcoret1').val()
        // var data = $('.formtindakandokter').serializeArray();
        var tindakandpjp = $('.formtindakandpjp').serializeArray();

        var tindakangp = $('.formtindakangp').serializeArray();
        var datalab = $('.formlab').serializeArray();

        var datarad = $('.formradio').serializeArray();
        var rekobat = $('.formtinjutobat').serializeArray();
        //triase
        var kategoritriase = $("#kategoritriase:checked").val();
        var jenisats = $("#jenisats:checked").val();
        var jenistriase = $('#jenistriase').val();

        var kesadaran_1 = $("#kesadaran_1:checked").val();
        var kesadaran_2 = $("#kesadaran_2:checked").val();
        var kesadaran_3 = $("#kesadaran_3").val();
        var spsi1 = $("#spsi1:checked").val();
        var spsi2 = $("#spsi2:checked").val();
        var spsi3 = $("#spsi3:checked").val();
        var spsi4 = $("#spsi4:checked").val();
        var spsi5 = $("#spsi5:checked").val();
        var spsi6 = $("#spsi6:checked").val();
        var spsi7 = $("#spsi7:checked").val();
        var spsi8 = $("#spsi8:checked").val();
        var spsi9 = $("#spsi9").val();
        var spsi = $("#spsi:checked").val();
        //kesadaran var kesadaran1=$("#kesadaran1:checked").val(); 
        var kesadaran2 = $("#kesadaran2:checked").val();
        var kesadaran3 = $("#kesadaran3:checked").val();
        var kesadaran4 = $("#kesadaran4:checked").val();
        var kesadaran5 = $("#kesadaran5:checked").val();
        var kesadaran6 = $("#kesadaran6:checked").val();
        var kesadaran7 = $("#kesadaran7:checked").val();
        var kesadaran8 = $("#kesadaran8:checked").val();
        var kesadaran9 = $("#kesadaran9:checked").val();
        var kesadaran10 = $("#kesadaran10:checked").val();
        var kesadaran11 = $("#kesadaran11:checked").val();
        var kesadaran12 = $("#kesadaran12:checked").val();
        //jalannafas var jalannafas1=$("#jalannafas1:checked").val();
        var jalannafas2 = $("#jalannafas2:checked").val();
        var jalannafas3 = $("#jalannafas3:checked").val();
        var jalannafas4 = $("#jalannafas4:checked").val();
        var jalannafas5 = $("#jalannafas5:checked").val();
        //pernafasan var upaya1=$("#upaya1:checked").val(); 
        var upaya2 = $("#upaya2:checked").val();
        var upaya3 = $("#upaya3:checked").val();
        var upaya4 = $("#upaya4:checked").val();
        var upaya5 = $("#upaya5:checked").val();
        var upaya6 = $("#upaya6:checked").val();
        var upaya7 = $("#upaya7:checked").val();
        var upaya8 = $("#upaya8:checked").val();
        //sirkulasi var sirkulasi1=$("#sirkulasi1:checked").val(); 
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
        var sirkulasi12 = $("#sirkulasi12:checked").val();
        var sirkulasi13 = $("#sirkulasi13:checked").val();
        var sirkulasi14 = $("#sirkulasi14:checked").val();
        var sirkulasi15 = $("#sirkulasi15:checked").val();
        var sirkulasi16 = $("#sirkulasi16:checked").val();
        var sirkulasi17 = $("#sirkulasi17:checked").val();
        var sirkulasi18 = $("#sirkulasi18:checked").val();
        var sirkulasi19 = $("#sirkulasi19:checked").val();
        var sirkulasi20 = $("#sirkulasi20:checked").val();
        var sirkulasi21 = $("#sirkulasi21:checked").val();
        var sirkulasi22 = $("#sirkulasi22:checked").val();
        var sirkulasi23 = $("#sirkulasi23:checked").val();
        var sirkulasi24 = $("#sirkulasi24:checked").val();
        var sirkulasi25 = $("#sirkulasi25:checked").val();
        //gejalaspesifik var gejala1=$("#gejala1:checked").val(); 
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
        var gejala15 = $("#gejala15:checked").val();
        var gejala17 = $("#gejala17:checked").val();
        var gejala18 = $("#gejala18:checked").val();
        var gejala19 = $("#gejala19:checked").val();
        var gejala20 = $("#gejala20:checked").val();
        var gejala21 = $("#gejala21:checked").val();
        var gejala22 = $("#gejala22:checked").val();
        var gejala23 = $("#gejala23:checked").val();
        var gejala24 = $("#gejala24:checked").val();
        var gejala25 = $("#gejala25:checked").val();
        var gejala26 = $("#gejala26:checked").val();
        var gejala27 = $("#gejala27:checked").val();
        var gejala28 = $("#gejala28:checked").val();
        var gejala29 = $("#gejala29:checked").val();
        var ats1lain = $('#ats1lain').val()
        var ats2lain = $('#ats2lain').val()
        var ats3lain = $('#ats3lain').val()
        var ats4lain = $('#ats4lain').val()
        var ats5lain = $('#ats5lain').val()

        //triase
        var ku = $('#ku').val()
        var sumberdata = $('#sumberdata:checked').val()
        var macamkasus = $('#macamkasus:checked').val()
        var trauma = $('#trauma').val()

        var subject = $('#subyek').val()
        var objek = $('#objek').val()
        var primary = $('#primary').val()
        var secondary = $('#secondary').val()
        var anamnesa = $('#anamnesa').val()
        var riwayatpenyakit = $('#riwayatpenyakit').val()

        var diagnosa = $('#diagnosa').val()
        var namadpjp = $('#namadpjp').val()
        var kodedpjp = $('#kodedpjp').val()

        var talaksana = $('#talaksana').val()
        var talaksanadpjp = $('#talaksanadpjp').val()

        var tigap = $('#tigap').val()
        var tigak = $('#tigak').val()
        var norm = $('#norm').val()
        var kj = $('#kj').val()
        var kp = $('#kp').val()
        var counter = $('#counter').val()
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
                        // data: JSON.stringify(data),
                        tindakandpjp: JSON.stringify(tindakandpjp),

                        tindakangp: JSON.stringify(tindakangp),
                        datalab: JSON.stringify(datalab),

                        datarad: JSON.stringify(datarad),
                        rekobat: JSON.stringify(rekobat),
                        //triase
                        kategoritriase: $("#kategoritriase:checked").val(),
                        // bedah : $("#bedah:checked").val(),
                        // obgyn : $("#obgyn:checked").val(),
                        // anak : $("#anak:checked").val(),
                        jenisats: $("#jenisats:checked").val(),
                        jenistriase: $('#jenistriase').val(),
                        gambar1: $('#gambarcoret1').val(),

                        kesadaran_1: $("#kesadaran_1:checked").val(),
                        kesadaran_2: $("#kesadaran_2:checked").val(),
                        kesadaran_3: $("#kesadaran_3").val(),
                        spsi1: $("#spsi1:checked").val(),
                        spsi2: $("#spsi2:checked").val(),
                        spsi3: $("#spsi3:checked").val(),
                        spsi4: $("#spsi4:checked").val(),
                        spsi5: $("#spsi5:checked").val(),
                        spsi6: $("#spsi6:checked").val(),
                        spsi7: $("#spsi7:checked").val(),
                        spsi8: $("#spsi8:checked").val(),
                        spsi9: $("#spsi9").val(),
                        spsi: $("#spsi:checked").val(),
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
                        kesadaran11: $("#kesadaran11:checked").val(),
                        kesadaran12: $("#kesadaran12:checked").val(),

                        //jalannafas
                        jalannafas1: $("#jalannafas1:checked").val(),
                        jalannafas2: $("#jalannafas2:checked").val(),
                        jalannafas3: $("#jalannafas3:checked").val(),
                        jalannafas4: $("#jalannafas4:checked").val(),
                        jalannafas5: $("#jalannafas5:checked").val(),

                        //pernafasan
                        upaya1: $("#upaya1:checked").val(),
                        upaya2: $("#upaya2:checked").val(),
                        upaya3: $("#upaya3:checked").val(),
                        upaya4: $("#upaya4:checked").val(),
                        upaya5: $("#upaya5:checked").val(),
                        upaya6: $("#upaya6:checked").val(),
                        upaya7: $("#upaya7:checked").val(),
                        upaya8: $("#upaya8:checked").val(),

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
                        sirkulasi12: $("#sirkulasi12:checked").val(),
                        sirkulasi13: $("#sirkulasi13:checked").val(),
                        sirkulasi14: $("#sirkulasi14:checked").val(),
                        sirkulasi15: $("#sirkulasi15:checked").val(),
                        sirkulasi16: $("#sirkulasi16:checked").val(),
                        sirkulasi17: $("#sirkulasi17:checked").val(),
                        sirkulasi18: $("#sirkulasi18:checked").val(),
                        sirkulasi19: $("#sirkulasi19:checked").val(),
                        sirkulasi20: $("#sirkulasi20:checked").val(),
                        sirkulasi21: $("#sirkulasi21:checked").val(),
                        sirkulasi22: $("#sirkulasi22:checked").val(),
                        sirkulasi23: $("#sirkulasi23:checked").val(),
                        sirkulasi24: $("#sirkulasi24:checked").val(),
                        sirkulasi25: $("#sirkulasi25:checked").val(),

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
                        gejala16: $("#gejala16:checked").val(),
                        gejala17: $("#gejala17:checked").val(),
                        gejala18: $("#gejala18:checked").val(),
                        gejala19: $("#gejala19:checked").val(),
                        gejala20: $("#gejala20:checked").val(),
                        gejala21: $("#gejala21:checked").val(),
                        gejala22: $("#gejala22:checked").val(),
                        gejala23: $("#gejala23:checked").val(),
                        gejala24: $("#gejala24:checked").val(),
                        gejala25: $("#gejala25:checked").val(),
                        gejala26: $("#gejala26:checked").val(),
                        gejala27: $("#gejala27:checked").val(),
                        gejala28: $("#gejala28:checked").val(),
                        gejala29: $("#gejala29:checked").val(),
                        ats1lain: $('#ats1lain').val(),
                        ats2lain: $('#ats2lain').val(),
                        ats3lain: $('#ats3lain').val(),
                        ats4lain: $('#ats4lain').val(),
                        ats5lain: $('#ats5lain').val(),
                        
                        
                        //triase
                        sumberdata: $('#sumberdata:checked').val(),
                        macamkasus: $('#macamkasus:checked').val(),
                        trauma: $('#trauma').val(),
                        subject: $('#subyek').val(),
                        objek: $('#objek').val(),
                        anamnesa: $('#anamnesa').val(),
                        diagnosa: $('#diagnosa').val(),
                        namadpjp: $('#namadpjp').val(),
                        kodedpjp: $('#kodedpjp').val(),
                        talaksana: $('#talaksana').val(),
                        talaksanadpjp: $('#talaksanadpjp').val(),
                        riwayatpenyakit: $('#riwayatpenyakit').val(),

                        tigap: $('#tigap').val(),
                        tigak: $('#tigak').val(),
                        norm: $('#norm').val(),
                        counter: $('#counter').val(),
                        kj: $('#kj').val(),
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

    //cppt perawat
    // Get the modal
    var modallp = document.getElementById("cpptperawat");

    // Get the button that opens the modal
    var btn = document.getElementById("cpptperawatt");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closeep")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modallp.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modallp.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modallp) {
            modallp.style.display = "none";
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

    function cpptdokter() {
        spinner = $('#loader2');
        spinner.show();
        kj = $('#kj').val()
        norm = $('#norm').val()
        kelas = $('#kelas').val()
        kp = $('#kp').val()
        ku = $('#ku').val()
        counter = $('#counter').val()
        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",
                norm,
                kj,
                kp,
                ku,
                counter,
                kelas
            },
            type: "post",
            url: " {{ route('formermdokter') }}",
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.formermdokter').html(response);


            }
        });
    }
    // $(document).ready(function() {

    //     // Menambahkan field baru
    //     $("#add").click(function() {
    //         var html = '<div class="row mt-2">';
    //         html += '<div class="col-3">';
    //         html += '<div class="form-group">';
    //         html += '<label for="name">DIAGNOSA</label>';
    //         html += '<input class="form-control form-control-sm @error('diagnosa') is-invalid @enderror" name="diagnosa" id="diagnosa" required /> @error('unit') <small id = "emailHelp" class = "form-text text-danger" > {{$message}} </small> @enderror ';
    //         html += '</div>';
    //         html += '</div>';
    //         html += '<div class="col-6">';
    //         html += '<div class="form-group">';
    //         html += '<label for="name">TINDAKAN DOKTER</label>';
    //         html += '<input type="text" name="tindakandok" id="tindakandok" value="" class="tindakandok form-control">';
    //         html += '</div>';
    //         html += '</div>';
    //         html += '<div class="col-3">';
    //         html += '<div class="form-group">';
    //         html += '<i class="bi bi-x-square remove form-group col-md-2 text-danger"></i>';
    //         html += '</div>';
    //         html += '</div>';
    //         html += '</div>';

    //         $("#form-container").append(html);
    //     });

    //     // Menghapus field
    //     $(document).on("click", ".remove", function(e) {
    //         e.preventDefault();
    //         $(this).parent().remove();
    //     });


    // });
</script>