<div class="card-header">
    <h3 class="card-title">ASSESMENT MEDIS INSTALASI GAWAT DARURAT (IGD)</h3>
</div>

<div class="card-body">
    <div class="card">
        <div class="card-header text-bold bg-warning" style="text-align: center;">+ ASSESMENT DOKTER +</div>
        <form action="" class="form_pemeriksaan_1">
            <div class="card-body">

                <table class="table">
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
                </div>


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
                                            <label for="exampleFormControlSelect1">Diagnosa Pemeriksaan Penunjang</label>
                                            <input type="text" id="diagnosapemeriksaanpenunjang" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Tanggal Pemeriksaan Penunjang</label>
                                            <input type="date" id="tanggalperiksapenunjang" name="tanggalperiksapenunjang" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <table id="tabeltindakan" class="table table-sm mt-3 table-hover">
                                            <thead>
                                                <th>Nama tindakan</th>
                                            </thead>
                                            <tbody>
                                                @foreach($layananlab as $t)
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
                                                <form action="" method="post" class="formtindakan">
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
                                            <label for="exampleFormControlSelect1">Diagnosa Pemeriksaan Penunjang</label>
                                            <input type="text" id="diagnosapemeriksaanpenunjang" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Tanggal Pemeriksaan Penunjang</label>
                                            <input type="date" id="tanggalperiksapenunjang1" name="tanggalperiksapenunjang1" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <table id="tabeltindakan1" class="table table-sm mt-3 table-hover">
                                            <thead>
                                                <th>Nama tindakan</th>
                                            </thead>
                                            <tbody>
                                                @foreach($layanan as $t)
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
                                                <form action="" method="post" class="formtindakan1">
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

                <div class="accordion" id="accordionExample3">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Cara Keluar Dari Instalasi Gawat Darurat
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample3">
                            <div class="card-body bg-light">

                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="rawatinap" name="rawatinap" value="Rawat Inap">
                                                    <label class="form-check-label" for="exampleCheck1">Rawat Inap
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kamaroperasi" name="kamaroperasi" value="Kamar Operasi">
                                                    <label class="form-check-label" for="exampleCheck1">Kamar Operasi
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="pulangsendiri" name="pulangsendiri" value="Pulang atas permintaan sendiri">
                                                    <label class="form-check-label" for="exampleCheck1">Pulang atas permintaan sendiri
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="kamarjenazah1" name="kamarjenazah1" value="Kamar Jenazah">
                                                    <label class="form-check-label" for="exampleCheck1">Kamar Jenazah
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="pulangdokter" name="pulangdokter" value="Pulang Atas Persetujuan Dokter">
                                                    <label class="form-check-label" for="exampleCheck1">Pulang Atas Persetujuan Dokter
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="alihrawat" name="alihrawat" value="Alih Rawat ke RS Lain">
                                                    <label class="form-check-label" for="exampleCheck1">Alih Rawat ke RS Lain
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="melarikandiri" name="melarikandiri" value="Melarikan Didri">
                                                    <label class="form-check-label" for="exampleCheck1">Melarikan Didri
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

            </div>

        </form>
    </div>
</div>
</div>

<script>
    document.getElementById('tanggalperiksapenunjang').valueAsDate = new Date()
    document.getElementById('tanggalperiksapenunjang1').valueAsDate = new Date()


    $(function() {
        $("#tabeltindakan").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $(function() {
        $("#tabeltindakan1").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $('#tabeltindakan').on('click', '.pilihlayanan', function() {
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
                '<div class="form-row text-xs"><div class="form-group col-md-5"><label for="">Tindakan</label><input readonly type="" class="form-control form-control-sm" id="" name="namatindakan" value="' +
                namatindakan +
                '"><input hidden readonly type="" class="form-control form-control-sm" id="" name="kodelayanan" value="' +
                kode +
                '"><input hidden  readonly type="" class="form-control form-control-sm" id="" name="jenis" value="' +
                jenis +
                '"></div><div class="form-group col-md-1"><label for="inputPassword4">Jumlah</label><input type="" class="form-control form-control-sm" id="" name="qty" value="1"></div><div class="form-group col-md-1"><label for="inputPassword4">Disc</label><input type="" class="form-control form-control-sm" id="" name="disc" value="0"></div><div class="form-group col-md-1"><label for="inputPassword4">Cyto</label><input type="" class="form-control form-control-sm" id="" name="cyto" value="0"></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i></div>'
            );
            $(wrapper).on("click", ".remove_field", function(e) { //user click on remove 
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })
        }
    });

    $('#tabeltindakan1').on('click', '.pilihlayanan1', function() {
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
                '"></div><div class="form-group col-md-1"><label for="inputPassword4">Jumlah</label><input type="" class="form-control form-control-sm" id="" name="qty" value="1"></div><div class="form-group col-md-1"><label for="inputPassword4">Disc</label><input type="" class="form-control form-control-sm" id="" name="disc" value="0"></div><div class="form-group col-md-1"><label for="inputPassword4">Cyto</label><input type="" class="form-control form-control-sm" id="" name="cyto" value="0"></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i></div>'
            );
            $(wrapper).on("click", ".remove_field", function(e) { //user click on remove 
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })
        }
    });
</script>