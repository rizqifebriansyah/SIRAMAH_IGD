<div class="card direct-chat direct-chat-primary">

    <div class="card-header ui-sortable-handle" style="cursor: move;">
        <h3 class="card-title">BUAT SURAT KEMATIAN PASIEN</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>

        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <form>
            <input type="input" class="form-control" value="{{$norm}}" name="norm" id="norm">
            <input type="input" class="form-control" value="{{$kj}}" name="kj" id="kj">

            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Bulan / Tahun Kematian</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="input" class="form-control" placeholder="Bulan" name="bulanmati" id="bulanmati">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="input" class="form-control" placeholder="Tahun" name="tahunmati" id="tahunmati">
                            </div>
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status Kependudukan</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status Kependudukan</label>

                                <select class="form-control" name="statuskependudukan" id="statuskependudukan">
                                    <option value="Penduduk Tetap">Penduduk Tetap</option>
                                    <option value="Bukan Penduduk Tetap">Bukan Penduduk Tetap</option>

                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kode Pos</label>
                                <input type="input" class="form-control" name="kodepos" id="kodepos">


                            </div>
                        </td>
                        <td>
                        <div class="form-group">
                                <label for="exampleInputEmail1">No Urut Pasien</label>
                                <input type="input" class="form-control" name="urut" id="urut">


                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Waktu Meninggal</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Meninggal</label>

                                <input type="date" class="form-control" name="tglmati" id="tglmati">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jam Meninggal</label>

                                <input type="time" class="form-control" name="wktmati" id="wktmati">
                            </div>
                        </td>
                        <td>
                        <div class="form-group">
                                <label for="exampleInputEmail1">Sebab Keterangan Kematian</label>

                                <select class="form-control" name="sebabkematian" id="sebabkematian">
                                    <option value="SKI">Korban Kecelakaan Lalu Lintas</option>
                                    <option value="SKII">Korban Tindak Kekerasan/Pembunuhan</option>
                                    <option value="SKIII">Percobaan Bunuh Diri, Tindakan Menghilangkan Nyawa Sendiri</option>
                                    <option value="SKIV">Mati Tenggelam, Kecelakan Tenaga Kerja, Terkena Sengatan Listrik dan Lainya</option>
                                    <option value="SKV">Meninggal Akibat Sakit</option>
                                    <option value="SKVI">Meninggal Akibat Intoksikasi (Keracunan)</option>
                                    <option value="SKVII">Meninggal Akibat Lain - lain (Tidak Tergolongkan)</option>






                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Umur Saat Meninggal</label>
                            </div>
                        </td>
                        <td>

                            <div class="form-group">
                                <input type="input" class="form-control" placeholder="HARI ( < 29 hari ) " name="umurhari" id="umurhari">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="input" class="form-control" placeholder="Tahun ( ≥ 5 Tahun )" name="umurtahun" id="umurtahun">
                            </div>
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>

                            <div class="form-group">
                                <input type="input" class="form-control" placeholder="Bulan ( > 28 Hari s/d 59 Bulan ) " name="umurbulan" id="umurbulan">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                            <label for="exampleInputEmail1">lahir Mati</label>

                                <select class="form-control" name="lahirmati" id="lahirmati">
                                    <option value="YA">YA</option>
                                    <option value="TIDAK">TIDAK</option>

                                </select>
                            </div>
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Bila yang Meninggal Wanita Umur 10 - 59 tahun, Almarhumah dalam keadaan : </label>
                            </div>
                        </td>
                        <td>

                            <div class="form-group">
                                <select class="form-control" name="keadaanmati" id="keadaanmati">
                                    <option value="Hamil">Hamil</option>
                                    <option value="Bersalin">Bersalin</option>
                                    <option value="Nifas (Masa sampai 2 bulan setelah bersalin/abortus)">Nifas (Masa sampai 2 bulan setelah bersalin/abortus)</option>
                                    <option value="lainya">lainya</option>

                                </select>
                            </div>
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="exampleInputEmail1">Lama dirawat di Rumah Sakit : </label>

                        </td>
                        <td>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Jam (jika kecil dari 48 jam) : </label>

                                <input type="time" class="form-control" name="jamrawat" id="jamrawat">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hari </label>

                                <input type="input" class="form-control" name="harirawat" id="harirawat">
                            </div>
                        </td>
                        <td>
                            <label for="exampleInputEmail1">DOA </label>

                            <div class="form-group">
                                <select class="form-control" name="doa" id="doa">
                                    <option value="YA">YA</option>
                                    <option value="TIDAK">TIDAK</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Dasar Diagnosis</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <select class="form-control" name="dasardiagnosis" id="dasardiagnosis">
                                    <option value="Rekam Medis">Rekam Medis</option>
                                    <option value="Autopsi Verbal">Autopsi Verbal</option>
                                    <option value="Autopsi Forensik">Autopsi Forensik</option>


                                </select>
                            </div>
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="exampleInputEmail1">Rencana Pemulasaran</label>

                        </td>
                        <td>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Dikubur : </label>

                                <input type="date" class="form-control" name="dikubur" id="dikubur">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Transportasi Keluar Kota </label>

                                <input type="date" class="form-control" name="tkk" id="tkk">
                            </div>
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Dikremasi : </label>

                                <input type="date" class="form-control" name="dikremasi" id="dikremasi">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Transportasi Keluar Negeri </label>

                                <input type="date" class="form-control" name="tkn" id="tkn">
                            </div>
                        </td>
                        <td>

                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- <div class="row mt-2 ml-2">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bulan / Tahun Kematian</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="input" class="form-control"  placeholder="Bulan" name="bulanmati" id="bulanmati">

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="input" class="form-control"  placeholder="Tahun" name="tahunmati" id="tahunmati">

                    </div>
                </div>
            </div> -->


    </div>

    <div class="card-footer">
    <button type="submit" class="btn btn-success cetaksuratkematian"> <i class="fa fa-print"></i> Cetak Surat Kematian  </button>

        <button type="submit" id="simpansuratkematian" class="simpansuratkematian btn btn-success float-right">SIMPAN SURAT KEMATIAN</button>
    </div>
    </form>
</div>

</div>

</div>
<!-- /.card-body -->
<div class="card-footer">

</div>
<!-- /.card-footer-->
</div>


<script>
    $(".simpansuratkematian").click(function() {
        var kj = $('#kj').val()
        var norm = $('#norm').val()
        var bulanmati = $('#bulanmati').val()
        var tahunmati = $('#tahunmati').val()
        var statuskependudukan = $('#statuskependudukan').val()
        var sebabkematian = $('#statuskependudukan').val()
        var kodepos = $('#kodepos').val()
        var urut = $('#urut').val()
        var tglmati = $('#tglmati').val()
        var wktmati = $('#wktmati').val()
        var umurhari = $('#umurhari').val()
        var umurtahun = $('#umurtahun').val()
        var umurbulan = $('#umurbulan').val()
        var lahirmati = $('#lahirmati').val()
        var keadaanmati = $('#keadaanmati').val()
        var jamrawat = $('#jamrawat').val()
        var harirawat = $('#harirawat').val()
        var doa = $('#doa').val()
        var dasardiagnosis = $('#dasardiagnosis').val()
        var dikubur = $('#dikubur').val()
        var tkk = $('#tkk').val()
        var dikremasi = $('#dikremasi').val()
        var tkn = $('#tkn').val()

        Swal.fire({
            title: "Yakin Buat Surat Kematian?",
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
                        kj: $('#kj').val(),
                        norm: $('#norm').val(),
                        bulanmati: $('#bulanmati').val(),
                        tahunmati: $('#tahunmati').val(),
                        statuskependudukan: $('#statuskependudukan').val(),
                        sebabkematian: $('#sebabkematian').val(),
                        kodepos: $('#kodepos').val(),
                        urut: $('#urut').val(),
                        tglmati: $('#tglmati').val(),
                        wktmati: $('#wktmati').val(),
                        umurhari: $('#umurhari').val(),
                        umurtahun: $('#umurtahun').val(),
                        umurbulan: $('#umurbulan').val(),
                        lahirmati: $('#lahirmati').val(),
                        keadaanmati: $('#keadaanmati').val(),
                        jamrawat: $('#jamrawat').val(),
                        harirawat: $('#harirawat').val(),
                        doa: $('#doa').val(),
                        dasardiagnosis: $('#dasardiagnosis').val(),
                        dikubur: $('#dikubur').val(),
                        tkk: $('#tkk').val(),
                        dikremasi: $('#dikremasi').val(),
                        tkn: $('#tkn').val()
                    },
                    url: '<?= route('simpansuratkematian') ?>',
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
                            cetaksuratmati(data.norm)
                            suratkematian()


                        }
                    }
                });
            }
        })
        return false;
    });
    $(".suratkematian").click(function() {
        spinner = $('#loader2');
        spinner.show();
        norm = $('#norm').val()
        kodekunjungan = $('#kodekunjungan').val()

        kodeunit = $('#kodeunit').val()
        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                norm,
                kodeunit,
                kodekunjungan

            },
            url: " {{ route('suratkematian') }}",
            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(response) {
                spinner.hide();

                $('.riwayatpasien').html(response);
            }
        });
    });
    $(".cetaksuratkematian").click(function() {
        norm = $('#norm').val()



        Swal.fire({
            title: "Apakah ingin print Surat Kematian?",
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

                      norm

                    },
                    url: '<?= route('cetaksuratmati') ?>',
                    error: function(data) {
                        spinner.hide()
                        Swal.fire({
                            icon: 'error',
                            title: 'Ooops....',
                            text: 'Sepertinya ada masalah......',
                            footer: ''
                        })
                    },
                    success: function(data) {
                        spinner.hide()
                        Swal.fire({
                            icon: 'success',
                            title: 'OK',
                            text: data.message,
                            footer: ''
                        })
                        cetaksuratmatii(data.norm)

                    }
                });
            }
        })
        return false;
    });
    function cetaksuratmatii(norm) {
        window.open('cetaksuratmatii/' + norm);

    }
</script>