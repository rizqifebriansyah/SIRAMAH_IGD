<div class="card-header">
    <h3 class="card-title">ASSESMENT MEDIS INSTALASI GAWAT DARURAT (IGD)</h3>
</div>

<div class="card-body">
    <div class="card">
        <div class="card-header text-bold bg-warning" style="text-align: center;">S.O.A.P</div>
        <form action="" class="formerm">
            <div class="card-body">
                <!-- assesmen dokter -->
                <table class="table">
                    <tbody>
                        <div class="row">
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
                                <div class="form-group" data-select2-id="29">
                                    <center>
                                        <h3>Diagnosa</h3>
                                    </center>
                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        @foreach ($diagnosa as $i => $t)

                                        <option selected="selected" data-select2-id="{{ $t->nama_diag }}">{{ $t->nama_diag }}</option>
                                        @endforeach
                                    </select>

                                </div>

                            </div>
                        </div>
                    </tbody>
                </table>

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

                {{-- <table class="table">
                    <tbody>
                        <tr>
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
                <!--Riwayat Obat-->

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

                        <tr>
                            <td class="text-bold font-italic">Evaluasi ( 30 Menit Pertama )</td>
                            <td colspan="3">

                                <textarea class="form-control" id="30menitpertama" name="30menitpertama" placeholder="Ketik 30 Menit pertama ..."></textarea>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-bold font-italic">Evaluasi ( 30 Menit Kedua )</td>
                            <td colspan="3">

                                <textarea class="form-control" id="30menitkedua" name="30menitkedua" placeholder="Ketik 30 Menit kedua ..."></textarea>

                            </td>
                        </tr>


                    </tbody>
                </table>
                <!-- tindak lanjut -->


                <div class="accordion" id="accordionExample2">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Tindak Lanjut
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample2">
                            <div class="card-body bg-light">

                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="keputusanruang" name="keputusanruang" value="">
                                                    <label class="form-check-label" for="exampleCheck1">Keputusan ke ruang <input type="text" id="ruang" name="ruang" value=""> Jam <input type="time" id="waktu" name="waktu" value=""> WIB, Dikirim ke ruang Perawatan jam <input type="time" id="waktu" name="waktu" value=""> WIB
                                                    </label>
                                                </div>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="stabil" name="stabil" value="">
                                                    <label class="form-check-label" for="exampleCheck1">Stabil <input type="text" id="stabil1" name="stabil1" value=""> Tidak Stabil <input type="text" id="tidakstabil" name="tidakstabil" value="">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="operasi" name="operasi" value="">
                                                    <label class="form-check-label" for="exampleCheck1">Keputusan Operasi dikirim ruang perawatan jam <input type="time" id="ruang1" name="ruang1" value="">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="jenazah" name="jenazah" value="">
                                                    <label class="form-check-label" for="exampleCheck1">Keputusan ke kamar jenazah dikirim ruang perawatan jam <input type="time" id="ruang2" name="ruang2" value="">
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="pulang" name="pulang" value="">
                                                    <label class="form-check-label" for="exampleCheck1">Keputusan Pulang
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}

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
                                                    <div class="input_fields_wrap">
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
                                                @foreach ($layanan as $t)
                                                <tr class="pilihlayanan1" jenis="nonpaket" namatindakan="{{ $t->Tindakan }}" tarif="{{ $t->tarif }}" kode="{{ $t->kode }}">
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

                <!-- Cara Keluar -->

                <div class="accordion" id="accordionExample3">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Cara Keluar Dari Instalasi Gawat
                                    Darurat
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample3">
                            <div class="card-body bg-light">


                                <div class="form-group" data-select2-id="29">
                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        @foreach ($alasanpulang as $i => $p)
                                        <option selected="selected" data-select2-id="{{ $p->alasan_pulang }}">{{ $p->alasan_pulang }}</option>
                                        @endforeach
                                    </select>

                                </div>


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

                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="sembuh" name="sembuh" value="Sembuh">
                                                    <label class="form-check-label" for="exampleCheck1">Sembuh
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="tidaksembuh" name="tidaksembuh" value="Tidak Sembuh">
                                                    <label class="form-check-label" for="exampleCheck1">Tidak Sembuh
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="perbaikan" name="perbaikan" value="Perbaikan">
                                                    <label class="form-check-label" for="exampleCheck1">Perbaikan
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="Meninggal" name="Meninggal" value="Meninggal">
                                                    <label class="form-check-label" for="exampleCheck1">Meninggal
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="4">

                                                <textarea class="form-control" id="keteranganpulang" name="keteranganpulang" placeholder=""></textarea>

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div type="button" class="btn float-right btn-success simpanasses" style="margin-top: 20px;">SIMPAN
                </div>

            </div>

        </form>
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
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
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
                '<div class="form-row text-xs"><div class="form-group col-md-8"><label for="">Tindakan</label><input readonly type="" class="form-control form-control-sm" id="" name="namatindakan" value="' +
                namatindakan +
                '"><input hidden readonly type="" class="form-control form-control-sm" id="" name="kodelayanan" value="' +
                kode +
                '"><input hidden  readonly type="" class="form-control form-control-sm" id="" name="jenis" value="' +
                jenis +
                '"></div><div class="form-group col-md-1"><label for="inputPassword4">Jumlah</label><input type="" class="form-control form-control-sm" id="" name="qty" value="1"></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i></div>'
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
                '<div class="form-row text-xs"><div class="form-group col-md-8"><label for="">Tindakan</label><input readonly type="" class="form-control form-control-sm" id="" name="namatindakan" value="' +
                namatindakan +
                '"><input hidden readonly type="" class="form-control form-control-sm" id="" name="kodelayanan" value="' +
                kode +
                '"><input hidden  readonly type="" class="form-control form-control-sm" id="" name="jenis" value="' +
                jenis +
                '"></div><div class="form-group col-md-1"><label for="inputPassword4">Jumlah</label><input type="" class="form-control form-control-sm" id="" name="qty" value="1"></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i></div>'
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

    $(".simpanasses").click(function() {
        var data = $('.formerm').serializeArray();
        var subject = $('#subject').val()
        var objek = $('#objek').val()
        var assesmen = $('#assesmen').val()
        var planning = $('#planning').val()
        var tigap = $('#tigap').val()
        var tigak = $('#tigak').val()
        var norm = $('#norm').val()
        var kj = $('#kj').val()
        var tglmasuk = $('#tglmasuk').val()




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
                        subject: $('#subject').val(),
                        objek: $('#objek').val(),
                        assesmen: $('#assesmen').val(),
                        planning: $('#planning').val(),
                        tigap: $('#tigap').val(),
                        tigak: $('#tigak').val(),
                        norm: $('#norm').val(),
                        kj: $('#kj').val(),
                        tglmasuk: $('#tglmasuk').val(),




                    },
                    url: '<?= route('simpanassemen') ?>',

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