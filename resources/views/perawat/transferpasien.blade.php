<div class="card-header">
    <h3 class="card-title">PEMANTAUAN TANDA VITAL PASIEN GAWAT DARURAT</h3>
</div>
<div class="ml-2">
    <form id="dynamic-form" class="formtransferpasien">
        <div id="form-container">
            {{-- form isi transfer --}}
            <div class="row mt-2">

                <div class="col-md-12">
                    <table class="table">
                        <tbody>

                            <tr>
                                <td class="text-bold font-italic">Pindah Ke

                                </td>
                                <td>
                                    <select class="form-control select2" name="ranap" id="ranap">
                                        @foreach($ranap as $po )
                                        <option value="{{$po->kode_unit}}"> {{$po->nama_unit}}</option>


                                        @endforeach

                                    </select>
                                </td>
                                <td>
                                    <label for="exampleFormControlSelect1">Tanggal</label>

                                </td>
                                <td>
                                    <div class="form-group">

                                        <input type="datetime-local" id="tglranap" name="tglranap" value="" class="form-control">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-bold font-italic">Dokter Merawat

                                </td>
                                <td>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="" type="input" name="dokter" id="dokter" value="">
                                    </div>
                                </td>
                                <td class="text-bold font-italic">Alasan Dirawat

                                </td>
                                <td colspan="3">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="" type="input" name="adir" id="adir" value="">
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Alasan Pindah

                                </td>
                                <td colspan="3">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="" type="input" name="alpin" id="alpin" value="">
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">(SITUATION) Keluhan Pasien Terkini :

                                </td>
                                <td colspan="3">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="" type="input" name="alpin" id="alpin" value="">
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">(Backgorund) :

                                </td>
                                <td colspan="3">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="" type="input" name="bg" id="bg" value="">
                                    </div>
                                </td>

                            </tr>
                            <tr>
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
                                <td class="text-bold font-italic">Penggunaan Oksigen </td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" name="o2" id="o2" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">L/menit</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-bold font-italic">Cairan parental</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="parental" id="parental" aria-describedby="basic-addon2" value="">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">ml/24jam</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Transfusi</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" aria-label="Suhu tubuh pasien" name="transfusi" id="transfusi" aria-describedby="basic-addon2" value="">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">ml</span>
                                        </div>

                                    </div>
                                </td>
                                <td class="text-bold font-italic">Penggunaan Cateter </td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" name="cateter" id="cateter" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">Pemakaian</span>
                                        </div>
                                        <input type="datetime-local" id="tglranap" name="tglranap" value="" class="form-control">

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

                            @endif
                            </tr>

                            <tr>
                                <td class="text-bold font-italic">Hasil Pemeriksaan selama Dirawat (Pemeriksaan Fisik dan penunjang yang mendukung diagnosis)

                                </td>
                                <td colspan="3">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="" type="input" name="bg" id="bg" value="">
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Prosedur / Tindakan yang sudah dilakukan :

                                </td>
                                <td colspan="3">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="" type="input" name="bg" id="bg" value="">
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Diagnosa medis :

                                </td>
                                <td colspan="3">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="" type="input" name="diagd" id="diagd" value="">
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Diagnosa Keperawatan :

                                </td>
                                <td colspan="3">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="" type="input" name="diagp" id="diagp" value="">
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Prosedur / Tindakan yang belum dilakukan / saran untuk mengatasi masalah pasien :

                                </td>
                                <td colspan="3">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="" type="input" name="diagp" id="diagp" value="">
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Diet :

                                </td>
                                <td colspan="3">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="" type="input" name="diet" id="diet" value="">
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Mobilisasi :

                                </td>
                                <td colspan="3">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="" type="input" name="Mobilisasi" id="Mobilisasi" value="">
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Edukasi :

                                </td>
                                <td colspan="3">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="" type="input" name="Edukasi" id="Edukasi" value="">
                                    </div>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                    <h5>REKONSILIASI OBAT</h5>
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
                                    <input type="text" name="tinjut" id="tinjut" value="" placeholder="{{$r->lanjut}}" class="lanjut form-control">
                                    <!-- <input type="text" name="kodetail" id="kodetail" value="{{$r->kode_detail_obat}}" class="lanjut form-control"> -->



                                </td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Alergi :

                                </td>
                                <td colspan="3">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="" type="input" name="ria" id="ria" value="">
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Nyeri :

                                </td>
                                <td colspan="3">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="" type="input" name="rinye" id="rinye" value="">
                                    </div>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                    <table class="table" border="1">
                        <thead class="bg-secondary">
                            <th colspan="3"> Riwayat Hambatan</th>
                            <th colspan="3">Tingkat Kemampuan Fungsi</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Penglihatan</td>
                                <td>Pendengaran</td>
                                <td>Komunikasi</td>
                                <td></td>
                                <td>M</td>
                                <td>PP</td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peng" id="peng" value="Adekuat">
                                        <label class="form-check-label">Adekuat</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peng1" id="peng1" value="Kacamata">
                                        <label class="form-check-label">Kacamata</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peng2" id="peng2" value="Buta">
                                        <label class="form-check-label">Buta</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="pend" id="pend" value="Earing Aid S/D">
                                        <label class="form-check-label">Earing Aid S/D</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="pend1" id="pend1" value="Tuli Sebagian">
                                        <label class="form-check-label">Tuli Sebagian</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="pend2" id="pend2" value="Tuli Total">
                                        <label class="form-check-label">Tuli Total</label>
                                    </div>
                                </td>

                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kom" id="kom" value="Bicara Normal">
                                        <label class="form-check-label">Bicara Normal</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kom1" id="kom1" value="Non Verbal">
                                        <label class="form-check-label">Non Verbal</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kom2" id="kom2" value="Afasia">
                                        <label class="form-check-label">Afasia</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kom3" id="kom3" value="Tidak bisa baca Tulis">
                                        <label class="form-check-label">Tidak bisa baca Tulis</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kf" id="kf" value="Bed Activity">
                                        <label class="form-check-label">Bed Activity</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kf1" id="kf1" value="Personal Hygiene">
                                        <label class="form-check-label">Personal Hygiene</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kf2" id="kf2" value="Dressing">
                                        <label class="form-check-label">Dressing</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kf3" id="kf3" value="Eating Transfer">
                                        <label class="form-check-label">Eating Transfer</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input class="form-control" type="input" name="M" id="M" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="input" name="M1" id="M1" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="input" name="M2" id="M2" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="input" name="M3" id="M3" value="">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input class="form-control" type="input" name="PP" id="PP" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="input" name="PP1" id="PP1" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="input" name="PP2" id="PP2" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="input" name="PP3" id="PP3" value="">
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Barang - barang yang diserahkan :

                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="brg" id="brg" value="Rekam Medis Lengkap">
                                        <label class="form-check-label">Rekam Medis Lengkap</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="brg1" id="brg1" value="Thorax Foto">
                                        <label class="form-check-label">Thorax Foto</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="brg2" id="brg2" value="USG">
                                        <label class="form-check-label">USG</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="brg3" id="brg3" value="CT Scan">
                                        <label class="form-check-label">CT Scan</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="brg4" id="brg4" value="Echo">
                                        <label class="form-check-label">Echo</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="brg5" id="brg5" value="EKG">
                                        <label class="form-check-label">EKG</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="brg6" id="brg6" value="LAB">
                                        <label class="form-check-label">LAB</label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-input">
                                        <input class="form-input" type="input" name="brgl" id="brgl" value="">
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Catatan Khusus :

                                </td>
                                <td colspan="8">
                                    <div class="form-group">
                                        <input class="form-control" type="input" name="ck" id="ck" value="">
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Kriteria Transfer :

                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kri" id="kri" value="Derajat 0,">
                                        <label class="form-check-label">Derajat 0,</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kri1" id="kri1" value="Derajat 1">
                                        <label class="form-check-label">Derajat 1</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kri2" id="kri2" value="Derajat 2">
                                        <label class="form-check-label">Derajat 2</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="kri3" id="kri3" value="Derajat 3">
                                        <label class="form-check-label">Derajat 3</label>
                                    </div>

                                </td>

                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label">pendamping : Portir</label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">pendamping : Portir dan Perawat</label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">pendamping : Portir dan Perawat</label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">pendamping : Portir, Perawat, dan Dokter</label>
                                    </div>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>



                <div class="col-3">
                    <div type="button" class="btn float-left btn-success simpanpemantauan" style="margin-top: 20px;">
                        SIMPAN
                    </div>
                    <div type="button" class="btn float-left btn-success cekkpemantauan ml-2" style="margin-top: 20px;">
                        check
                    </div>
                    <div type="button" class="btn float-left btn-primary cetakpemantauan ml-2 fas fa-print" style="margin-top: 20px;">
                        Print
                    </div>
                </div>


            </div>

        </div>
    </form>
</div>

<div class="hasilinput ml-2 mt-2 mr-2"></div>


<script>
    spinner = $('#loader2');
    spinner.hide();

    $(function() {
        $("#tableobatrekon").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 10,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
</script>