<style>

</style>


<div class="card-header">
    <h3 class="card-title">TRIASE DEWASA</h3>
</div>

<div class="card-body">
    <div class="card">
        <div class="card-header text-bold bg-success">+ SKRINING PASIEN IGD +</div>
        <form action="" class="formpemeriksaantriase">
            <div class="card-body">
                <!-- skrining pasien -->
                <table class="table">
                    <tbody>
                        {{-- @if ($ttv == NULL)
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
                                    <input type="text" class="form-control" placeholder="Suhu tubuh pasien ..." aria-label="Suhu tubuh pasien" name="suhutubuh" id="suhutubuh" aria-describedby="basic-addon2" value="{{ $ttv[0]->suhu_tubuh }}">
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
                                    <input type="text" class="form-control" placeholder="Berat badan Pasien ..." name="beratbadan" id="beratbadan" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ $ttv[0]->beratbadan }}">
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
                        @endif --}}


                        <tr>
                            <td class="text-bold font-italic">Nama pasien</td>
                            <td colspan="3">

                                <textarea class="form-control" id="namapasien" name="namapasien" placeholder="Ketik nama pasien ..."></textarea>

                            </td>
                        </tr>
                        <tr hidden="">
                            <td class="text-bold font-italic">Tanggal Kunjungan</td>
                            <td><input readonly="" type="text" name="tanggalkunjungan" class="form-control" value="2023-09-07 07:43:55"></td>
                            <td class="text-bold font-italic">Tanggal Assesmen</td>
                            <td><input type="text" name="tanggalassesmen" class="form-control datepicker" data-date-format="yyyy-mm-dd"></td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Sumber Data</td>
                            <td colspan="3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Pasien Sendiri">
                                    <label class="form-check-label" for="inlineRadio1">Pasien Sendiri /
                                        Autoanamase</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Keluarga">
                                    <label class="form-check-label" for="inlineRadio2">Keluarga / Alloanamnesa</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Primary Survey</td>
                            <td colspan="3">
                                <h5> A (Airway) , B (Breathing), C (Circulation), D (Disability), E (Exposure)</h5>
                                <h5 class="text-bold">Keterangan</h5>
                                <textarea class="form-control" id="primarysurvey" name="primarysurvey" placeholder="Ketik primary survey ..."></textarea>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Pemeriksaan Fisik</td>
                            <td colspan="3">

                                <textarea class="form-control" id="pemeriksaanfisik" name="pemeriksaanfisik" placeholder="Ketik pemeriksaan fisik ..."></textarea>

                            </td>
                        </tr>

                        <tr>
                            <td class="text-bold font-italic">Riwayat Penyakit / Pengobatan Sebelumnya</td>
                            <td colspan="3">

                                <textarea class="form-control" id="riwayatpenyakit" name="riwayatpenyakit" placeholder="Ketik riwayat penyakit ..."></textarea>

                            </td>
                        </tr>
                    </tbody>
                </table>


                <button class="btn btn-secondary triasedewasa" style="margin-bottom: 10px;"><i class="fas fa-male mr-2"></i> Triase Dewasa</button>
                <button class="btn btn-secondary triaseanak" style="margin-bottom: 10px;"><i class="fas fa-child mr-2"></i> Triase Anak</button>

                <!-- triase ats  -->
                <div class="triaseview">

                </div>
                <!-- triase   -->
                <div class="accordion" id="accordionExample1" style="margin-top: 10px;">

                    <div class="card-header bg-secondary" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                <i class="bi bi-ticket-detailed mr-1 ml-1"></i> TRIASE
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample1">
                        <div class="card-body bg-light">

                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-bold font-italic">kesadaran : </td>

                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="kesadaran_lain" name="kesadaran_lain" value="Compos Mentis">
                                                <label class="form-check-label" for="exampleCheck1">Compos Mentis
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="kesadaran_lain" name="kesadaran_lain" value="Letargik">
                                                <label class="form-check-label" for="exampleCheck1">Letargik
                                                </label>
                                            </div>
                                        </td>


                                    </tr>

                                    <tr>
                                        <td colspan="4">

                                            <textarea class="form-control" id="kesadaran_lain" name="kesadaran_lain" placeholder=""></textarea>

                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="text-bold font-italic">Status Psikologi</td>

                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps" name="statusps" value="Marah">
                                                <label class="form-check-label" for="exampleCheck1">Marah
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps" name="statusps" value="Depresi">
                                                <label class="form-check-label" for="exampleCheck1">Depresi
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps" name="statusps" value="Takut">
                                                <label class="form-check-label" for="exampleCheck1">Takut
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps" name="statusps" value="Gelisah">
                                                <label class="form-check-label" for="exampleCheck1">Gelisah
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps" name="statusps" value="Psikotik">
                                                <label class="form-check-label" for="exampleCheck1">Psikotik
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps" name="statusps" value="Cemas">
                                                <label class="form-check-label" for="exampleCheck1">Cemas
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps" name="statusps" value="Kecenderungan bunuh diri">
                                                <label class="form-check-label" for="exampleCheck1">Kecenderungan bunuh diri
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps" name="statusps" value="Tidak Ada Masalah">
                                                <label class="form-check-label" for="exampleCheck1">Tidak Ada Masalah
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="statusps" name="statusps" value="lain-lain">
                                                <label class="form-check-label" for="exampleCheck1">lain-lain <input type="text">
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold font-italic">Keluhan Utama</td>
                                        <td colspan="4">

                                            <textarea class="form-control" id="kelut" name="kelut" placeholder=""></textarea>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold font-italic">Pemeriksaan Fisik (Temuan Signifikan) :</td>
                                        <td colspan="4">

                                            <textarea class="form-control" id="pemfis" name="pemfis" placeholder=""></textarea>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold font-italic">Diagnosa Triase :</td>
                                        <td colspan="4">

                                            <textarea class="form-control" id="ditri" name="ditri" placeholder=""></textarea>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold font-italic">Tata Laksana :</td>
                                        <td colspan="4">

                                            <textarea class="form-control" id="talak" name="talak" placeholder=""></textarea>

                                        </td>
                                    </tr>

                                </tbody>
                            </table>




                        </div>




                    </div>

                </div>

                <div class="accordion" id="accordionExample4" style="margin-top: 10px;">
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

                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kondisi" name="kondisi" value="Sembuh">
                                                    <label class="form-check-label" for="exampleCheck1">Sembuh
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kondisi" name="kondisi" value="Tidak Sembuh">
                                                    <label class="form-check-label" for="exampleCheck1">Tidak Sembuh
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kondisi" name="kondisi" value="Perbaikan">
                                                    <label class="form-check-label" for="exampleCheck1">Perbaikan
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kondisi" name="kondisi" value="Meninggal">
                                                    <label class="form-check-label" for="exampleCheck1">Meninggal
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="4">

                                                <textarea class="form-control" id="kondisi" name="kondisi" placeholder=""></textarea>

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div type="button" class="btn float-right btn-success simpantriase" style="margin-top: 20px;">SIMPAN</div>
            </div>
        </form>


    </div>
</div>
</div>

<script>
    $(".triasedewasa").click(function() {
        spinner = $('#loader2');
        spinner.show();



        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",

            },
            url: '<?= route('triasedewasa') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.triaseview').html(response);

            }
        });
    });
    $(".triaseanak").click(function() {
        spinner = $('#loader2');
        spinner.show();



        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",

            },
            url: '<?= route('triaseanak') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.triaseview').html(response);

            }
        });
    });
    $(".simpantriase").click(function() {
        var data = $('.formpemeriksaantriase').serializeArray();
        var antrian = $('#antrian').val()
        var namapasien = $('#namapasien').val()
        var sumberdata = $("#sumberdata:checked").val();
        var primarysurvey = $('#primarysurvey').val()
        var pemeriksaanfisik = $('#pemeriksaanfisik').val()
        var klasifikasipasien = $("#klasifikasipasien:checked").val();
        var riwayatpenyakit = $("#riwayatpenyakit").val();
        var kategoritriase = $("#kategoritriase:checked").val();
        // var bedah = $("#bedah:checked").val();
        // var obgyn = $("#obgyn:checked").val();
        // var anak = $("#anak:checked").val();
        // var jenisats = $("#jenisats:checked").val();

        // var ats1 = $("#ats1:checked").val();
        // var ats2 = $("#ats2:checked").val();
        // var ats3 = $("#ats3:checked").val();
        // var ats4 = $("#ats4:checked").val();
        // var ats5 = $("#ats5:checked").val();


        //kesadaran
        var gcs1 = $("#gcs1:checked").val();
        var gcs2 = $("#gcs2:checked").val();
        var gcs3 = $("#gcs3:checked").val();
        var gcs4 = $("#gcs4:checked").val();
        var gcs5 = $("#gcs5:checked").val();
        var kejang = $("#kejang:checked").val();
        var letargis = $("#letargis:checked").val();
        var traumakepala = $("#traumakepala:checked").val();
        var traumakepalakurang = $("#traumakepalakurang:checked").val();
        var tidakrespon = $("#tidakrespon:checked").val();
        var somnolen = $("#somnolen:checked").val();
        var paskakejang = $("#paskakejang:checked").val();

        //jalannafas
        var sumbatantotal = $("#sumbatantotal:checked").val();
        var sumbatanparsial = $("#sumbatanparsial:checked").val();
        var bebas1 = $("#bebas1:checked").val();
        var bebas2 = $("#bebas2:checked").val();
        var bebas3 = $("#bebas3:checked").val();

        //pernafasan
        var hentinafas = $("#hentinafas:checked").val();
        var distrespenafasan = $("#distrespenafasan:checked").val();
        var sesaknafas = $("#sesaknafas:checked").val();
        var freknafas = $("#freknafas:checked").val();
        var freknafas1 = $("#freknafas1:checked").val();
        var rr = $("#rr:checked").val();
        var SaO2 = $("#SaO2:checked").val();
        var sianosis = $("#sianosis:checked").val();

        //sirkulasi
        var hentijantung = $("#hentijantung:checked").val();
        var naditerabalemah = $("#naditerabalemah:checked").val();
        var muntahpasien = $("#muntahpasien:checked").val();
        var nadikuat = $("#nadikuat:checked").val();
        var nadikuat1 = $("#nadikuat1:checked").val();
        var naditidakteraba = $("#naditidakteraba:checked").val();
        var hr1 = $("#hr1:checked").val();
        var takikardia = $("#takikardia:checked").val();
        var freknadinormal = $("#freknadinormal:checked").val();
        var freknadinormal1 = $("#freknadinormal1:checked").val();
        var akraldingin = $("#akraldingin:checked").val();
        var hr2 = $("#hr2:checked").val();
        var tds = $("#tds:checked").val();
        var tds1 = $("#tds1:checked").val();
        var tds2 = $("#tds2:checked").val();
        var pucat = $("#pucat:checked").val();
        var tdd = $("#tdd:checked").val();
        var tdd1 = $("#tdd1:checked").val();
        var tdd2 = $("#tdd2:checked").val();
        var akraldingin1 = $("#akraldingin1:checked").val();
        var pendarahan = $("#pendarahan:checked").val();
        var muntah1 = $("#muntah1:checked").val();
        var crt = $("#crt:checked").val();
        var diastolik = $("#diastolik:checked").val();
        var pendarahan1 = $("#pendarahan1:checked").val();

        //gejalaspesifik
        var nyeri = $("#nyeri:checked").val();
        var demam = $("#demam:checked").val();
        var aspirasi = $("#aspirasi:checked").val();
        var nyeri1 = $("#nyeri1:checked").val();
        var sepsis = $("#sepsis:checked").val();
        var nyeri2 = $("#nyeri2:checked").val();
        var trauma1 = $("#trauma1:checked").val();
        var luka = $("#luka:checked").val();
        var nyeri3 = $("#nyeri3:checked").val();
        var kolik = $("#kolik:checked").val();
        var sulit = $("#sulit:checked").val();
        var kontrol = $("#kontrol:checked").val();
        var multiple = $("#multiple:checked").val();
        var terauma = $("#terauma:checked").val();
        var sedang1 = $("#sedang1:checked").val();
        var imunisasi = $("#imunisasi:checked").val();
        var lokal = $("#lokal:checked").val();
        var gangguan = $("#gangguan:checked").val();
        var terauma1 = $("#terauma1:checked").val();
        var psikiatri = $("#psikiatri:checked").val();
        var racun = $("#racun:checked").val();
        var psikosis = $("#psikosis:checked").val();
        var radang = $("#radang:checked").val();
        var ngamuk = $("#ngamuk:checked").val();
        var defisit = $("#defisit:checked").val();
        var reaksi = $("#reaksi:checked").val();
        var defisit1 = $("#defisit1:checked").val();
        var kejang1 = $("#kejang1:checked").val();
        var nyeri3 = $("#nyeri3:checked").val();

        //triase lain
        var kesadaranlain = $("#kesadaran_lain:checked").val();
        var statusps = $("#statusps:checked").val();
        var kelut = $("#kelut").val();
        var pemfis = $("#pemfis").val();
        var ditri = $("#ditri").val();
        var talak = $("#talak").val();
        var kondisi = $("#kondisi").val();

        Swal.fire({
            title: "Yakin Simpan TRIASE?",
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
                        antrian,
                        namapasien: $('#namapasien').val(),
                        sumberdata: $('#sumberdata:checked').val(),
                        primarysurvey: $('#primarysurvey').val(),
                        pemeriksaanfisik: $('#pemeriksaanfisik').val(),
                        klasifikasipasien: $('#klasifikasipasien:checked').val(),
                        riwayatpenyakit: $('#riwayatpenyakit').val(),
                        kategoritriase: $("#kategoritriase:checked").val(),
                        // bedah : $("#bedah:checked").val(),
                        // obgyn : $("#obgyn:checked").val(),
                        // anak : $("#anak:checked").val(),
                        jenisats: $("#jenisats:checked").val(),

                        // ats1 : $("#ats1:checked").val(),
                        // ats2 : $("#ats2:checked").val(),
                        // ats3 : $("#ats3:checked").val(),
                        // ats4 : $("#ats4:checked").val(),
                        // ats5 : $("#ats5:checked").val(),

                        gcs1: $('#gcs1:checked').val(),
                        gcs2: $('#gcs2:checked').val(),
                        gcs3: $('#gcs3:checked').val(),
                        gcs4: $('#gcs4:checked').val(),
                        gcs5: $('#gcs5:checked').val(),
                        kejang: $('#kejang:checked').val(),
                        letargis: $('#letargis:checked').val(),
                        traumakepala: $('#traumakepala:checked').val(),
                        traumakepalakurang: $('#traumakepalakurang:checked').val(),
                        tidakrespon: $('#tidakrespon:checked').val(),
                        somnolen: $('#somnolen:checked').val(),
                        paskakejang: $('#paskakejang:checked').val(),


                        sumbatantotal: $('#sumbatantotal:checked').val(),
                        sumbatanparsial: $('#sumbatanparsial:checked').val(),
                        bebas1: $('#bebas1:checked').val(),
                        bebas2: $('#bebas2:checked').val(),
                        bebas3: $('#bebas3:checked').val(),


                        hentinafas: $('#hentinafas:checked').val(),
                        distrespenafasan: $('#distrespenafasan:checked').val(),
                        sesaknafas: $('#sesaknafas:checked').val(),
                        freknafas: $('#freknafas:checked').val(),
                        freknafas1: $('#freknafas1:checked').val(),
                        rr: $('#rr:checked').val(),
                        SaO2: $('#SaO2:checked').val(),
                        sianosis: $('#sianosis:checked').val(),


                        hentijantung: $('#hentijantung:checked').val(),
                        naditerabalemah: $('#naditerabalemah:checked').val(),
                        muntahpasien: $('#muntahpasien:checked').val(),
                        nadikuat: $('#nadikuat:checked').val(),
                        nadikuat1: $('#nadikuat1:checked').val(),
                        naditidakteraba: $('#naditidakteraba:checked').val(),
                        hr1: $('#hr1:checked').val(),
                        takikardia: $('#takikardia:checked').val(),
                        freknadinormal: $('#freknadinormal:checked').val(),
                        freknadinormal1: $('#freknadinormal1:checked').val(),
                        akraldingin: $('#akraldingin:checked').val(),
                        hr2: $('#hr2:checked').val(),
                        tds: $('#tds:checked').val(),
                        tds1: $('#tds1:checked').val(),
                        tds2: $('#tds2:checked').val(),
                        pucat: $('#pucat:checked').val(),
                        tdd: $('#tdd:checked').val(),
                        tdd1: $('#tdd1:checked').val(),
                        tdd2: $('#tdd2:checked').val(),
                        akraldingin1: $('#akraldingin1:checked').val(),
                        pendarahan: $('#pendarahan:checked').val(),
                        muntah1: $('#muntah1:checked').val(),
                        crt: $('#crt:checked').val(),
                        diastolik: $('#diastolik:checked').val(),
                        pendarahan1: $('#pendarahan1:checked').val(),


                        nyeri: $('#nyeri:checked').val(),
                        demam: $('#demam:checked').val(),
                        aspirasi: $('#aspirasi:checked').val(),
                        nyeri1: $('#nyeri1:checked').val(),
                        sepsis: $('#sepsis:checked').val(),
                        nyeri2: $('#nyeri2:checked').val(),
                        trauma1: $('#trauma1:checked').val(),
                        luka: $('#luka:checked').val(),
                        nyeri3: $('#nyeri3:checked').val(),
                        kolik: $('#kolik:checked').val(),
                        sulit: $('#sulit:checked').val(),
                        kontrol: $('#kontrol:checked').val(),
                        multiple: $('#multiple:checked').val(),
                        terauma: $('#terauma:checked').val(),
                        sedang1: $('#sedang1:checked').val(),
                        imunisasi: $('#imunisasi:checked').val(),
                        lokal: $('#lokal:checked').val(),
                        gangguan: $('#gangguan:checked').val(),
                        terauma1: $('#terauma1:checked').val(),
                        psikiatri: $('#psikiatri:checked').val(),
                        racun: $('#racun:checked').val(),
                        psikosis: $('#psikosis:checked').val(),
                        radang: $('#radang:checked').val(),
                        ngamuk: $('#ngamuk:checked').val(),
                        defisit: $('#defisit:checked').val(),
                        reaksi: $('#reaksi:checked').val(),
                        defisit1: $('#defisit1:checked').val(),
                        kejang1: $('#kejang1:checked').val(),
                        nyeri3: $('#nyeri3:checked').val(),


                        kesadaranlain: $("#kesadaran_lain:checked").val(),
                        statusps: $("#statusps:checked").val(),
                        kelut: $("#kelut").val(),
                        pemfis: $("#pemfis").val(),
                        ditri: $("#ditri").val(),
                        talak: $("#talak").val(),
                        kondisi: $("#kondisi").val()



                    },
                    url: '<?= route('simpanpemeriksaantriase') ?>',

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
