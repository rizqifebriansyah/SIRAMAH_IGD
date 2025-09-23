<div class=" col-md-11" style="margin-bottom:10px ;">

    <a style="margin-left: 32px;" rel="noopener" href="{{ route('laboratorium')}}" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Home
    </a>
</div>

@if ($pasienkunjunganorder == NULL)


<div class=" col-md-11" style="margin-left:32px ;">
    <div class="card">

        <div class="card-header bg-secondary">Data Pasien Penunjang</div>

        <div class="card-body">
            <div class="form-group">

                <div class="row">
                    <div class="col-2">
                        <label for="inputName">No RM </label>
                        <input readonly type="text" id="norm" value="{{ $pasienkunjungan[0]->no_rm }}" class="form-control">
                    </div>
                    <div class="col-3">
                        <label for="inputName">Nama </label>
                        <input readonly type="text" id="nama" value="{{ $pasienkunjungan[0]->nama_px }} " class="form-control">
                    </div>
                    <div class="col-3">
                        <label for="inputName">Unit asal </label>
                        <input readonly type="text" id="nama_unit" value="{{ $pasienkunjungan[0]->nama_unit }}" class="form-control">
                        <input hidden type="text" id="kodeunit" value="{{ $pasienkunjungan[0]->kode_unit }}" class="form-control">
                    </div>
                    <div class="col-2">
                        <label for="inputName">Kelas Unit </label>
                        <input readonly type="text" id="kelas_unit" value="{{ $pasienkunjungan[0]->KELAS_UNIT }} " class="form-control">
                    </div>
                    <div class="col-2">
                        <label for="inputName">Kelas</label>
                        <input readonly type="text" id="kelas" value="{{ $pasienkunjungan[0]->kelas }} " class="form-control">
                    </div>
                </div>
                <input hidden type="text" id="kodekunjungan" value="{{ $pasienkunjungan[0]->kode_kunjungan}}" class="form-control">
                <input hidden type="text" id="kodepenjamin" value="{{ $pasienkunjungan[0]->kode_penjamin }}" class="form-control">
                <input hidden type="text" id="kelas" value="{{ $pasienkunjungan[0]->kelas }}" class="form-control">
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-5">
                        <label for="inputName">Alamat Pasien</label>
                        <textarea disabled class="form-control" rows="2">{{ $pasienkunjungan[0]->alamat }}</textarea>
                        <input hidden type="text" id="alamat" rows="3" value="{{ $pasienkunjungan[0]->alamat }}" class="form-control">
                    </div>
                    <div class="col-3 detaildokter">
                        <label for="inputName">Dokter Pengirim</label>
                        @if ($pasienkunjungan[0]->nama_paramedis > 0 )
                        <input type="text " hidden id="dokter" value="{{$pasienkunjungan[0]->Dokter}}" class="form-control">
                        <input type="text " id="nama_paramedis" value="{{$pasienkunjungan[0]->nama_paramedis}}" class="form-control">
                        <button type="submit" class="btn btn-primary mb-2" onclick="caridokter()"> <i class="bi bi-search-heart"></i></button>

                        @else
                        <input type="text " id="nama_paramedis" value="" class="form-control">

                        <button type="submit" class="btn btn-primary mb-2" onclick="caridokter()"> <i class="bi bi-search-heart"></i></button>
                        @endif
                    </div>

                    <div class="col-4">
                        <label for="inputName">Diagnosa Pasien</label>
                        <textarea class="form-control" id="diagnosa" name="diagnosa" rows="2">{{ $diagx }}</textarea>
                    </div>

                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-2">
                        <label for="inputName">Umur</label>

                        <input readonly type="text" id="umur" value="{{ $pasienkunjungan[0]->Umur }}" class="form-control">
                    </div>
                    <div class="col-2">
                        <label for="inputName">Penjamin </label>
                        <input readonly type="text" id="nama_penjamin" value="{{ $pasienkunjungan[0]->nama_penjamin }} " class="form-control">
                    </div>
                    <div class="col-2">
                        <label for="inputName">Grand Total Layanan </label>
                        @if ($pasienkunjungan[0]->kode_penjamin == 'P01' )
                        <input readonly type="text" id="gt" value="TUNAI " class="form-control">
                        @else
                        <input readonly type="text" id="gt" value="KREDIT " class="form-control">
                        @endif
                    </div>
                    <div class="col-2">

                        <label for="inputName">LIS </label><br>
                        <label for="lis">BRIDGING LIS</label>
                        <input type="checkbox" name="lis" id="lis" value="lis" checked>

                    </div>
                    <div class="col-2">
                        <label for="inputName">RIWAYAT </label><br>

                        <button class="btn btn-success riwayatlab" id="riwayatlab"><i class="fas fa-eye">
                            </i> Lihat Riwayat</button>
                    </div>


                </div>
            </div>
            <div class="form-group riwayatpasien" id="riwayatpasien">

            </div>
        </div>
    </div>
</div>
<div class="col-md-6" style="margin-left: 30px;">
    <div class="card">
        <div class="card-header bg-secondary">Pilih Layanan</div>
        <div class="card-body">
            <div class="tab-content">

                <div class="form-group">
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
                <div class="form-group">

                    <table id="tabelpaket" class="table table-sm mt-3 table-hover">

                        <thead>
                            <th>Nama tindakan</th>
                        </thead>
                        <tbody>
                            @foreach ($paket as $p)
                            <tr class="pilihpaket" idpaket="{{$p->id_paket}}" jenis="paket" namatindakan="{{ $p->nama }}" tarif="0" kode="{{ $p->id_paket }}">
                                <td>{{ $p->nama }}</td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>

                <!-- /.tab-pane -->


                <!-- /.tab-pane -->

            </div>
        </div>

    </div>
    <!-- /.card -->
</div>

<div class="col-md-5">
    <div class="card">
        <div class="card-header bg-secondary">Tindakan / Layanan Pasien</div>
        <div class="card-body">
            <form action="" method="post" class="formtindakan">
                <div class="input_fields_wrap">
                    <div>
                        <div class="row">
                            <div class="col-md-5"><label for="">Nama Layanan</label></div>
                            <div class="col-md-2"><label for="">Tarif</label></div>
                            <div class="col-md-1"><label for="">qty</label></div>
                            <div class="col-md-1"><label for="">Disc</label></div>
                            <div class="col-md-1"><label for="">cyto</label></div>

                        </div>
                    </div>

                </div>
                <div class="totaltagihan">

                </div>
                <button type="button" class="btn btn-warning mb-2 simpanorderlab" id="simpanorderlab">Simpan Tindakan</button>
                <button type="button" class="btn btn-secondary mb-2 hitung" id="hitung">Hitung</button>

            </form>
        </div>
        <div class="card-footer">
            <p>pilih layanan untuk pasien</p>
        </div>
    </div>
</div>


</div>



@else
<div class=" col-md-11" style="margin-left:32px ;">
    <div class="card">

        <div class="card-header bg-secondary">Data Pasien POLI</div>

        <div class="card-body">
            <div class="form-group">

                <div class="row">
                    <div class="col-2">
                        <label for="inputName">No RM </label>
                        <input readonly type="text" id="norm" value="{{ $pasienkunjunganorder[0]->no_rm }}" class="form-control">
                    </div>
                    <div class="col-3">
                        <label for="inputName">Nama </label>
                        <input readonly type="text" id="nama" value="{{ $pasienkunjunganorder[0]->nama_px }} " class="form-control">
                    </div>
                    <div class="col-3">
                        <label for="inputName">Unit asal </label>
                        <input readonly type="text" id="nama_unit" value="{{ $pasienkunjunganorder[0]->nama_unit }}" class="form-control">
                        <input hidden type="text" id="kodeunit" value="{{ $pasienkunjunganorder[0]->unit_asal }}" class="form-control">

                    </div>
                    <div class="col-2">
                        <label for="inputName">Kelas Unit </label>
                        <input readonly type="text" id="kelas_unit" value="{{ $pasienkunjunganorder[0]->KELAS_UNIT }} " class="form-control">
                    </div>
                    <div class="col-2">
                        <label for="inputName">Kelas</label>
                        <input readonly type="text" id="kelas" value="{{ $pasienkunjunganorder[0]->kelas }} " class="form-control">
                    </div>
                </div>
                <input hidden type="text" id="kodekunjungan" value="{{ $pasienkunjunganorder[0]->kode_kunjungan}}" class="form-control">
                <input hidden type="text" id="kodepenjamin" value="{{ $pasienkunjunganorder[0]->kode_penjamin }}" class="form-control">
                <input hidden type="text" id="kelas" value="{{ $pasienkunjunganorder[0]->kelas }}" class="form-control">
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-5">
                        <label for="inputName">Alamat Pasien</label>
                        <textarea disabled class="form-control" rows="2">{{ $pasienkunjunganorder[0]->alamat }}</textarea>
                        <input hidden type="text" id="alamat" rows="3" value="{{ $pasienkunjunganorder[0]->alamat }}" class="form-control">
                    </div>
                    <div class="col-3">
                        <label for="inputName">Dokter Pengirim</label>
                        <input readonly type="text" id="nama_paramedis" value="{{ $pasienkunjunganorder[0]->nama_paramedis }}" class="form-control">
                        <input hidden type="text" id="dokter" value="{{ $pasienkunjunganorder[0]->Dokter }}" class="form-control">
                    </div>
                    <div class="col-4">
                        <label for="inputName">Diagnosa Pasien</label>
                        <textarea disabled class="form-control" id="diagnosa" name="diagosa" rows="2">{{ $pasienkunjunganorder[0]->DIAGX }}</textarea>
                    </div>

                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-2">
                        <label for="inputName">Umur</label>
                        <input readonly type="text" id="umur" value="{{ $pasienkunjunganorder[0]->Umur }}" class="form-control">

                    </div>
                    <div class="col-2">
                        <label for="inputName">Penjamin </label>
                        <input readonly type="text" id="nama_penjamin" value="{{ $pasienkunjunganorder[0]->nama_penjamin }} " class="form-control">
                    </div>
                    <div class="col-2">
                        <label for="inputName">Grand Total Layanan </label>
                        @if ($pasienkunjunganorder[0]->kode_penjamin == 'P01' )
                        <input readonly type="text" id="gt" value="TUNAI " class="form-control">
                        @else
                        <input readonly type="text" id="gt" value="KREDIT " class="form-control">
                        @endif
                    </div>
                    <div class="col-2">

                        <label for="inputName">LIS </label><br>
                        <label for="lis">BRIDGING LIS</label>
                        <input type="checkbox" name="lis" id="lis" value="lis" checked>

                    </div>
                    <div class="col-2">
                        <label for="inputName">RIWAYAT </label><br>

                        <button class="btn btn-success riwayatlab" id="riwayatlab"><i class="fas fa-eye">
                            </i> Lihat Riwayat</button>
                    </div>


                </div>
            </div>
            <div class="form-group riwayatpasien" id="riwayatpasien">

            </div>
        </div>
    </div>
</div>

<div class="col-md-5" style="margin-left: 30px;">
    <div class="card">
        <div class="card-header bg-secondary">Pilih layanan</div>
        <div class="card-body">
            <div class="tab-content">
                <div class="form-group">
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
                <div class="form-group">

                    <table id="tabelpaket" class="table table-sm mt-3 table-hover">

                        <thead>
                            <th>Nama tindakan</th>
                        </thead>
                        <tbody>
                            @foreach ($paket as $p)
                            <tr class="pilihpaket" idpaket="{{$p->id_paket}}" jenis="paket" namatindakan="{{ $p->nama }}" tarif="0" kode="{{ $p->id_paket }}">
                                <td>{{ $p->nama }}</td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>



                <!-- /.tab-pane -->


                <!-- /.tab-pane -->

            </div>
        </div>

    </div>
    <!-- /.card -->
</div>

<div class="col-md-6">
    <div class="card">
        <div class="card-header bg-secondary">Tindakan / Layanan Pasien</div>
        <div class="card-body">
            <form action="" method="post" class="formtindakan">
                <div class="input_fields_wrap">
                    <div>
                        <div class="row">

                            <div class="col-md-5"><label for="">Nama Layanan</label></div>
                            <div class="col-md-2"><label for="">Tarif</label></div>
                            <div class="col-md-1"><label for="">qty</label></div>
                            <div class="col-md-1"><label for="">Disc</label></div>
                            <div class="col-md-1"><label for="">cyto</label></div>

                        </div>
                        @foreach($pasienkunjunganorder as $p)
                        <div class="form-row text-xs">
                            <div class="form-group col-md-5"><input readonly type="" class="form-control form-control-sm" id="" name="namatindakan" value="{{$p->nama_layanan}}">
                                <input hidden readonly type="" class="form-control form-control-sm" id="" name="kodelayanan" value="{{$p->kode_tarif_detail}}">
                                <input hidden readonly type="" class="form-control form-control-sm" id="" name="jenis" value="">
                            </div>
                            <div class="form-group col-md-2"><input readonly type="" class="form-control form-control-sm" id="" name="tarif" value="{{$p->total_tarif}}"></div>
                            <div class="form-group col-md-1"><input type="" class="form-control form-control-sm" id="" name="qty" value="{{$p->jumlah_layanan}}"></div>
                            <div class="form-group col-md-1"><input type="" class="form-control form-control-sm" id="" name="disc" value="0"></div>
                            <div class="form-group col-md-1"><input type="" class="form-control form-control-sm" id="" name="cyto" value="0"></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="totaltagihan">

                </div>
                <button type="button" class="btn btn-warning mb-2 simpanorderlab" id="simpanorderlab">Simpan Tindakan</button>
                <button type="button" class="btn btn-danger mb-2 batallaboratorium" id="batallaboratorium">Batal Tindakan</button>
                <button type="button" class="btn btn-secondary mb-2 hitung" id="hitung">Hitung</button>


            </form>
        </div>
        <div class="card-footer">
            <p>pilih layanan untuk pasien</p>
        </div>
    </div>
</div>

@endif



<div style="margin-top:100px ;"></div>


<script>
    function berhasil() {
        var bel = new Audio('berhasil.mp3');
        bel.play();
    }

    function retur() {
        var bel = new Audio('retur.mp3');
        bel.play();
    }

    function batal() {
        var bel = new Audio('batal.mp3');
        bel.play();
    }
    $(function() {
        $("#tabelpasieno").DataTable({
            "resposive": false,
            "lengthChange": false,
            "autowidth": false,
        });
    });
    $(function() {
        $("#tabeldiagnosa").DataTable({
            "responsive": false,
            "lengthChange": false,
            "autowidth": false,
        });
    });
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
        $("#tabelpaket").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });

    function caridokter() {
        spinner = $('#loader2');
        spinner.show();
        namadokter = $('#nama_paramedis').val()


        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                namadokter,

            },
            url: " {{ route('caridokterlab') }}",
            error: function(data) {
                spinner.hide()
                alert('Errorrr!!!')
            },
            success: function(response) {
                spinner.hide();
                $('.detaildokter').html(response);
            }
        })
    }
    $('#tabelpaket').on('click', '.pilihpaket', function() {

        kode = $(this).attr('kode')
        namatindakan = $(this).attr('namatindakan')
        tarif = $(this).attr('tarif')
        idpaket = $(this).attr('idpaket')
        jenis = $(this).attr('jenis')
        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                kode,
                namatindakan,
                tarif,
                idpaket,
                jenis

            },
            url: " {{ route('detailpaketlab') }}",
            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(response) {
                spinner.hide();

                $('.formtindakan').html(response);
            }
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
            if(x>0){
                x++;

            $(wrapper).append(
                '<div class="form-row text-xs"><div class="form-group col-md-5"><input readonly type="" class="form-control form-control-sm" id="" name="namatindakan" value="' +
                x++ +
                '"><input hidden readonly type="" class="form-control form-control-sm" id="" name="kodelayanan" value="' +
                kode +
                '"><input hidden  readonly type="" class="form-control form-control-sm" id="" name="jenis" value="' +
                jenis +
                '"></div><div class="form-group col-md-2"><input readonly type="" class="form-control form-control-sm" id="" name="tarif" value="' +
                tarif +
                '"></div><div class="form-group col-md-1"><input type="" class="form-control form-control-sm" id="" name="qty" value="1"></div><div class="form-group col-md-1"><input type="" class="form-control form-control-sm" id="" name="disc" value="0"></div><div class="form-group col-md-1"><input type="" class="form-control form-control-sm" id="" name="cyto"  value="0"></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i></div>'
        );
    }

            $(wrapper).on("click", ".remove_field", function(e) { //user click on remove
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
        })
        }
    });


    function pilihpaket() {
        spinner = $('#loader2');
        spinner.show();
        kelas = $('#kelas').val()
        idpaket = $('#idpaket').val()

        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                kelas,
                idpaket
            },
            url: "{{ route('tampilpaketlab') }}",
            error: function(data) {
                spinner.hide()
                alert('Errorrr!!!')
            },
            success: function(response) {
                spinner.hide();
                $('.tabelpaket').html(response);
            }
        })
    }
    $(".hitung").click(function() {
        spinner = $('#loader2');
        spinner.show();
        var data = $('.formtindakan').serializeArray();

        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                data: JSON.stringify(data),

            },
            url: " {{ route('hitungtotal') }}",
            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(response) {
                spinner.hide();
                $('.totaltagihan').html(response);
            }
        });
    });
    $(".riwayatlab").click(function() {
        spinner = $('#loader2');
        spinner.show();
        norm = $('#norm').val()
        kodeunit = $('#kodeunit').val()
        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                norm,
                kodeunit

            },
            url: " {{ route('riwayatlab') }}",
            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(response) {
                spinner.hide();
                $('#norm').val(response.norm);
                $('#kodeunit').val(response.kodeunit);
                $('.riwayatpasien').html(response);
            }
        });
    });

    $(".simpanorderlab").click(function() {
        var diagnosa = $('#diagnosa').val()
        var dokter = $('#dokter').val()

        var data = $('.formtindakan').serializeArray();
        var kodekunjungan = $('#kodekunjungan').val()
        var kodepenjamin = $('#kodepenjamin').val()
        var kodepenunjang = $('#namapenunjang').val()
        var dokter = $('#dokter').val()
        var kodeunit = $('#kodeunit').val()
        var kelasunit = $('#kelas_unit').val()
        var kelas = $('#kelas').val()
        var norm = $('#norm').val()
        var namaunit = $('#nama_unit').val()
        var lis = $("#lis:checked").val();
        Swal.fire({
            title: "Yakin Simpan Layanan?",
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
                        kodekunjungan: $('#kodekunjungan').val(),
                        kodepenunjang: $('#namapenunjang').val(),
                        dokter: $('#dokter').val(),
                        kodepenjamin: $('#kodepenjamin').val(),
                        diagnosa: $('#diagnosa').val(),
                        kodeunit: $('#kodeunit').val(),
                        kelasunit: $('#kelasunit').val(),
                        norm: $('#norm').val(),
                        namaunit: $('#nama_unit').val(),
                        kelas: $('#kelas').val(),
                        lis: $('#lis').val()

                    },
                    url: '<?= route('simpanorderlab') ?>',
                    error: function(data) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.message,
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
                                text: data.message,
                                footer: ''
                            })
                            window.location.reload();

                            labnota(data.idhed, data.kode_header)

                        }
                    }
                });
            }
        })
        return false;
    });
    $(".batallaboratorium").click(function() {

        var data = $('.formtindakan').serializeArray();
        var kodekunjungan = $('#kodekunjungan').val()
        var norm = $('#norm').val()

        Swal.fire({
            title: "Yakin Batal Layanan?",
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
                        kodekunjungan: $('#kodekunjungan').val(),
                        norm: $('#norm').val(),
                    },
                    url: '<?= route('batallaboratorium') ?>',
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
                                text: 'data berhasil Batalkan',
                                footer: ''
                            })

                            window.location.reload();

                        }
                    }
                });
            }
        })
        return false;
    });

    function labnota(idhed, kode_header) {
        window.open('labnotaorder/' + kode_header + '/' + idhed);
    }
</script>