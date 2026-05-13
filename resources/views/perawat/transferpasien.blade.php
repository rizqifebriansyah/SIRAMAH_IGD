

<div class="formcatatantf">

    <div class="card-header ">
        <h3 class="card-title">CATATAN TRANSFER PASIEN GAWAT DARURAT</h3>
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
                                    <td class="text-bold font-italic">Tanggal Pengkajian Transfer</td>
                                    <td>
                                        <input class="form-control" type="datetime-local" value="" name="tgl_input_transfer" id="tgl_input_transfer">
                                        <input hidden type="text" class="form-control" placeholder="Tekanan darah pasien ..." aria-label="Recipient's username" id="norm" name="norm" aria-describedby="basic-addon2" value="{{$norm}}">
                                        <input hidden type="text" class="form-control" placeholder="Tekanan darah pasien ..." aria-label="Recipient's username" id="kj" name="kj" aria-describedby="basic-addon2" value="{{$kj}}">


                                    </td>
                                    <td class="text-bold font-italic">Tanggal Selesai Transfer</td>
                                    <td>
                                        <input class="form-control" type="datetime-local" value="" name="tgl_selesai_transfer" id="tgl_selesai_transfer">


                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold font-italic">Keputusan Ke Ruang</td>

                                    <td>
                                        <div class="row">

                                            <select class="form-control select2" name="tinjutt" id="tinjutt">

                                                @foreach ($poli as $i => $p)
                                                <option value="{{ $p->nama_unit }}">{{ $p->nama_unit }}
                                                </option>
                                                @endforeach



                                            </select>


                                        </div>
                                    </td>
                                    <td class="text-bold font-italic">Tanggal dan Jam Transfer</td>
                                    <td>
                                        <input class="form-control" type="datetime-local" value="" name="tgl_pindah" id="tgl_pindah">


                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold font-italic">Dokter yang merawat</td>

                                    <td>
                                        <input class="form-control" type="text" value="" name="doktergp" id="doktergp">

                                    </td>
                                    <td>
                                        <label for="">Alasan di Rawat</label>
                                        <input class="form-control" type="text" value="" name="alasan_rawat" id="alasan_rawat">

                                    </td>
                                    <td>
                                        <label for="">Alasan Pindah</label>

                                        <input class="form-control" type="text" value="" name="alasan_pindah" id="alasan_pindah">


                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold font-italic">S (Situation)</td>

                                    <td>
                                        <input class="form-control" type="text" value="" name="situation" id="situation">

                                    </td>
                                    <td class="text-bold font-italic">B (Backgorund)</td>

                                    <td>

                                        <input class="form-control" type="text" value="" name="background" id="background">


                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <label for="">Kondisi Pasien saat Pindah : Kesadaran :</label>
                                    </td>
                                </tr>

                                <tr>


                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="kesadaran" id="kesadaran" value="Compos Mentis">
                                            <label class="form-check-label" for="inlineRadio1">Compos Mentis</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="kesadaran" id="kesadaran" value="Apatis">
                                            <label class="form-check-label" for="inlineRadio1">Apatis</label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="kesadaran" id="kesadaran" value="Delirium">
                                            <label class="form-check-label" for="inlineRadio1">Delirium</label>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="kesadaran" id="kesadaran" value="Sopor">
                                            <label class="form-check-label" for="inlineRadio1">Sopor</label>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <label for="">GCS</label>
                                        <input class="form-control" type="text" value="" name="gcs" id="gcs">

                                    </td>
                                    <td>
                                        <label for="">E</label>
                                        <input class="form-control" type="text" value="" name="E" id="E">

                                    </td>
                                    <td>
                                        <label for="">M</label>
                                        <input class="form-control" type="text" value="" name="M" id="M">

                                    </td>
                                    <td>
                                        <label for="">V</label>
                                        <input class="form-control" type="text" value="" name="V" id="V">

                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
                                    <td class="text-bold font-italic">Penggunaan Oksigen</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Penggunaan oksigen ..." name="oksigen" id="oksigen" aria-label="Recipient's username" aria-describedby="basic-addon2" value="">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">L/menit</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-bold font-italic">Cairan Parental</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Cairan Parental ..." aria-label="Cairan Parental" name="parental" id="parental" aria-describedby="basic-addon2" value="">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">ml/24 jam</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold font-italic">Transfusi </td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="transfusi pasien ..." aria-label="Transfusi" name="transfusi" id="transfusi" aria-describedby="basic-addon2" value="">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">ml</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <label for="">
                                            Penggunaan Cateter
                                        </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="cateter" id="cateter" value="Ada">
                                            <label class="form-check-label">Ada</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="cateter" id="cateter" value="Tidak">
                                            <label class="form-check-label">Tidak</label>
                                        </div>
                                    </td>
                                    <td>
                                        <label for="">
                                            Tanggal dan Jam Pemakaian
                                        </label>
                                        <input class="form-control" type="datetime-local" value="" name="tgl_cateter" id="tgl_cateter">

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <table class="table">
                            <tbody>

                                <tr>
                                    <td class="text-bold font-italic">Hasil Pemeriksaan selama Dirawat (Pemeriksaan Fisik dan penunjang yang mendukung diagnosis)

                                    </td>
                                    <td colspan="3">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="" type="input" name="hasil_pemeriksaan" id="hasil_pemeriksaan" value="">
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="text-bold font-italic">Prosedur / Tindakan yang sudah dilakukan :

                                    </td>
                                    <td colspan="3">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="" type="input" name="prosedur" id="prosedur" value="">
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
                                            <input class="form-control" placeholder="" type="input" name="prosedur_tindakan" id="prosedur_tindakan" value="">
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
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-bold font-italic">Pengobatan yang di lanjutkan di rumah : </td>

                                </tr>
                                <tr>
                                    <td>
                                        <form id="dynamic-form" class="formobatplg">
                                            <h5>Klik Tombol Tambah untuk menambahkan obat pulang</h5>

                                            <div class="field_wrapperrr">
                                                <div class="row mt-2">


                                                    <div class="col-md-2">
                                                        <a class="btn btn-success" href="javascript:void(0);" id="add_button" title="Add field">TAMBAH</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </td>
                                </tr>
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
                                <th colspan="4">Tingkat Kemampuan Fungsi</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Penglihatan</td>
                                    <td>Pendengaran</td>
                                    <td>Komunikasi</td>
                                    <td></td>
                                    <td>M</td>
                                    <td>PP</td>
                                    <td>TM</td>


                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="peng" id="peng" value="Adekuat">
                                            <label class="form-check-label">Adekuat</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="peng" id="peng" value="Kacamata">
                                            <label class="form-check-label">Kacamata</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="peng" id="peng" value="Buta">
                                            <label class="form-check-label">Buta</label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="pend" id="pend" value="Earing Aid S/D">
                                            <label class="form-check-label">Earing Aid S/D</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="pend" id="pend" value="Tuli Sebagian">
                                            <label class="form-check-label">Tuli Sebagian</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="pend" id="pend" value="Tuli Total">
                                            <label class="form-check-label">Tuli Total</label>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kom" id="kom" value="Bicara Normal">
                                            <label class="form-check-label">Bicara Normal</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kom" id="kom" value="Non Verbal">
                                            <label class="form-check-label">Non Verbal</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kom" id="kom" value="Afasia">
                                            <label class="form-check-label">Afasia</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kom" id="kom" value="Tidak bisa baca Tulis">
                                            <label class="form-check-label">Tidak bisa baca Tulis</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kf" id="kf" value="Bed Activity">
                                            <label class="form-check-label">Bed Activity</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kf" id="kf" value="Personal Hygiene">
                                            <label class="form-check-label">Personal Hygiene</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kf" id="kf" value="Dressing">
                                            <label class="form-check-label">Dressing</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kf" id="kf" value="Eating">
                                            <label class="form-check-label">Eating</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kf" id="kf" value="Transfer">
                                            <label class="form-check-label">Transfer</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="M_B" id="M_B" value="1">
                                        </div><br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="M_P" id="M_P" value="1">
                                        </div><br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="M_D" id="M_D" value="1">
                                        </div><br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="M_E" id="M_E" value="1">
                                        </div><br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="M_T" id="M_T" value="1">
                                        </div><br>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="PPB" id="PPB" value="1">
                                        </div><br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="PPP" id="PPP" value="1">
                                        </div><br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="PPD" id="PPD" value="1">
                                        </div><br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="PPE" id="PPE" value="1">
                                        </div><br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="PPT" id="PPT" value="1">
                                        </div><br>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="TMB" id="TMB" value="1">
                                        </div><br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="TMP" id="TMP" value="1">
                                        </div><br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="TMD" id="TMD" value="1">
                                        </div><br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="TME" id="TME" value="1">
                                        </div><br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="TMT" id="TMT" value="1">
                                        </div><br>
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
                        <div type="button" class="btn btn-secondary catatantficu ml-3 mb-3" style="margin-top: 20px;">
                            Kriteria Masuk ICU
                        </div>
                        <div class="tficu">

                        </div>
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
                                            <input class="form-check-input" type="checkbox" name="kri" id="kri" value="Derajat 1">
                                            <label class="form-check-label">Derajat 1</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kri" id="kri" value="Derajat 2">
                                            <label class="form-check-label">Derajat 2</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="kri" id="kri" value="Derajat 3">
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
                        <div type="button" class="btn float-left btn-success simpanctttransfer" style="margin-top: 20px;">
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

</div>
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

    $(".catatantficu").click(function() {
        spinner = $('#loader2');
        spinner.show();




        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",


            },
            url: '<?= route('catatantficu') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.tficu').html(response);

            }
        });
    });

    $(".simpanctttransfer").click(function() {
        var obatplg = $('.formobatplg').serializeArray();
        var tgl_input_transfer = $('#tgl_input_transfer').val()
        var tgl_selesai_transfer = $('#tgl_selesai_transfer').val()
        var tinjutt = $('#tinjutt').val()
        var tgl_pindah = $('#tgl_pindah').val()
        var doktergp = $('#doktergp').val()
        var alasan_rawat = $('#alasan_rawat').val()
        var alasan_pindah = $('#alasan_pindah').val()
        var situation = $('#situation').val()
        var background = $('#background').val()
        var kesadaran = $('#kesadaran:checked').val()
        var gcs = $('#gcs').val()
        var E = $('#E').val()
        var M = $('#M').val()
        var V = $('#V').val()
        var tekanandarah = $('#tekanandarah').val()
        var frekuensinadi = $('#frekuensinadi').val()
        var frekuensinafas = $('#frekuensinafas').val()
        var suhutubuh = $('#suhutubuh').val()
        var oksigen = $('#oksigen').val()
        var parental = $('#parental').val()
        var transfusi = $('#transfusi').val()
        var cateter = $('#cateter:checked').val()
        var tgl_cateter = $('#tgl_cateter').val()
        var hasil_pemeriksaan = $('#hasil_pemeriksaan').val()
        var prosedur = $('#prosedur').val()
        var diagd = $('#diagd').val()
        var diagp = $('#diagp').val()
        var prosedur_tindakan = $('#prosedur_tindakan').val()
        var diet = $('#diet').val()
        var Mobilisasi = $('#Mobilisasi').val()
        var Edukasi = $('#Edukasi').val()
        var ria = $('#ria').val()
        var rinye = $('#rinye').val()
        var peng = $('#peng:checked').val()
        var pend = $('#cateter:checked').val()
        var kom = $('#kom:checked').val()
        var kf = $('#kf:checked').val()
        var M_B = $('#M_B:checked').val()
        var M_P = $('#M_P:checked').val()
        var M_D = $('#M_D:checked').val()
        var M_E = $('#M_E:checked').val()
        var M_T = $('#M_T:checked').val()

        var PPB = $('#PPB:checked').val()
        var PPP = $('#PPP:checked').val()
        var PPD = $('#PPD:checked').val()
        var PPE = $('#PPE:checked').val()
        var PPT = $('#PPT:checked').val()

        var TMB = $('#TMB:checked').val()
        var TMP = $('#TMP:checked').val()
        var TMD = $('#TMD:checked').val()
        var TME = $('#TME:checked').val()

        var TMT = $('#TMT:checked').val()
        var brg1 = $('#brg1:checked').val()
        var brg2 = $('#brg2:checked').val()
        var brg3 = $('#brg3:checked').val()
        var brg4 = $('#brg4:checked').val()
        var brg5 = $('#brg5:checked').val()
        var brg6 = $('#brg6:checked').val()
        var brgl = $('#brgl:checked').val()
        var ck = $('#ck').val()
        var kri = $('#kri:checked').val()





        var kj = $('#kj').val()
        var norm = $('#norm').val()

        Swal.fire({
            title: "Yakin Simpan Catatan Transfer?",
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
                        tgl_input_transfer: $('#tgl_input_transfer').val(),
                        tgl_pindah: $('#tgl_pindah').val(),
                        tinjutt: $('#tinjutt').val(),
                        tgl_selesai_transfer: $('#tgl_selesai_transfer').val(),
                        doktergp: $('#doktergp').val(),
                        alasan_rawat: $('#alasan_rawat').val(),
                        alasan_pindah: $('#alasan_pindah').val(),
                        situation: $('#situation').val(),
                        background: $('#background').val(),
                        kesadaran: $('#kesadaran:checked').val(),
                        gcs: $('#gcs').val(),
                        E: $('#E').val(),
                        M: $('#M').val(),
                        V: $('#V').val(),
                        tekanandarah: $('#tekanandarah').val(),
                        frekuensinadi: $('#frekuensinadi').val(),
                        frekuensinafas: $('#frekuensinafas').val(),
                        suhutubuh: $('#suhutubuh').val(),
                        oksigen: $('#oksigen').val(),
                        parental: $('#parental').val(),
                        transfusi: $('#transfusi').val(),
                        cateter: $('#cateter:checked').val(),
                        tgl_cateter: $('#tgl_cateter').val(),
                        hasil_pemeriksaan: $('#hasil_pemeriksaan').val(),
                        prosedur: $('#prosedur').val(),
                        diagd: $('#diagd').val(),
                        diagp: $('#diagp').val(),
                        prosedur_tindakan: $('#prosedur_tindakan').val(),
                        diet: $('#diet').val(),
                        Mobilisasi: $('#Mobilisasi').val(),
                        Edukasi: $('#Edukasi').val(),
                        ria: $('#ria').val(),
                        rinye: $('#rinye').val(),
                        peng: $('#peng:checked').val(),
                        pend: $('#cateter:checked').val(),
                        kom: $('#kom:checked').val(),
                        kf: $('#kf:checked').val(),
                        M_B: $('#M_B:checked').val(),
                        M_P: $('#M_P:checked').val(),
                        M_D: $('#M_D:checked').val(),
                        M_E: $('#M_E:checked').val(),
                        M_T: $('#M_T:checked').val(),

                        PPB: $('#PPB:checked').val(),
                        PPP: $('#PPP:checked').val(),
                        PPD: $('#PPD:checked').val(),
                        PPE: $('#PPE:checked').val(),
                        PPT: $('#PPT:checked').val(),

                        TMB: $('#TMB:checked').val(),
                        TMP: $('#TMP:checked').val(),
                        TMD: $('#TMD:checked').val(),
                        TME: $('#TME:checked').val(),
                        TMT: $('#TMT:checked').val(),

                        brg1: $('#brg1:checked').val(),
                        brg2: $('#brg2:checked').val(),
                        brg3: $('#brg3:checked').val(),
                        brg4: $('#brg4:checked').val(),
                        brg5: $('#brg5:checked').val(),
                        brg6: $('#brg6:checked').val(),
                        brgl: $('#brgl:checked').val(),
                        ck: $('#ck').val(),
                        kri: $('#kri:checked').val(),
                        kj: $('#kj').val(),
                        norm: $('#norm').val()

                    },
                    url: '<?= route('simpanctttransfer') ?>',

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
                            // cttntf()
                        }

                    }
                });

            }
        })
        return false;
    });


    function cttntf() {
        spinner = $('#loader2');
        spinner.show();

        counter = $('#counter').val()
        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",

            },
            type: "post",
            url: " {{ route('transferpasien') }}",
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.formcatatantf').html(response);


            }
        });
    }
</script>