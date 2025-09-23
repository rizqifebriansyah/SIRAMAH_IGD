<div class="row ">
    <div class="col-md-6 ml-2 mt-2">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">DATA PASIEN IGD KEBIDANAN</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="inputName">Nama Pasien</label>
                            <input type="text" id="namapx" name="namapx" value="{{$p[0]->nama_px}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="inputName">NORM Pasien</label>
                            <input type="text" id="norm" name="norm" value="{{$p[0]->no_rm}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="inputName">DPJP</label>
                            <input type="text" id="" name="" value="{{$p[0]->nama_paramedis}}" class="form-control">
                            <input hidden type="text" id="dokter" name="dokter" value="{{$p[0]->Dokter}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="inputName">Diagnosa Pasien</label>
                            <input type="text" id="diagnosa" name="diagnosa" value="{{$p[0]->DIAGX}}" class="form-control">
                            <input hidden type="text" id="kodekunjungan" name="kodekunjungan" value="{{$p[0]->kode_kunjungan}}" class="form-control">
                            <input hidden type="text" id="kodepenjamin" name="kodepenjamin" value="{{$p[0]->kode_penjamin}}" class="form-control">
                            <input hidden type="text" id="namaunit" name="namaunit" value="{{$p[0]->nama_unit}}" class="form-control">
                            <input hidden type="text" id="kodeunit" name="kodeunit" value="{{$p[0]->kode_unit}}" class="form-control">
                            <input hidden type="text" id="kelas" name="kelas" value="{{$p[0]->kelas}}" class="form-control">
                            <input hidden type="text" id="kelasunit" name="kelasunit" value="{{$p[0]->KELAS_UNIT}}" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="col-md-5 mt-2">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Riwayat Tindakan</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table id="tableriwayat" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tindakan</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp

                        @foreach($riwayattindakan as $r)

                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$r->nama_tindakan}}</td>
                            <td>{{$r->total_tarif}}</td>
                            <td class="text-center py-0 align-middle">
                                <div class="btn-group btn-group-sm">
                                    <a class="btn btn-warning btn-sm returtindakan" href="#">
                                        <i class="fas fa-sync-alt fa-spin"></i>
                                        RETUR
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>
<div class="row">
    <div class="col-md-6 ml-2">
        <div class="tabletindakan">
            <table id="tablebilling" class="table table-sm mt-3  table-hover">
                <thead>
                    <th>Nama tindakan</th>
                </thead>
                <tbody>
                    @foreach($layanan as $t)
                    <tr class="pilihtindakan" jenis="" namatindakan="{{ $t->Tindakan }}" tarif="{{ $t->tarif }}" kode="{{ $t->kode }}">
                        <td>{{ $t->Tindakan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card">
            <div class="card-header bg-secondary">Tindakan / Layanan Pasien</div>
            <div class="card-body">
                <form action="" method="post" class="formtindakan">
                    <div class="input_fields_wrap">
                        <div>
                            <div class="row">
                                <div class="col-md-4"><label for="">Nama Layanan</label></div>
                                <div class="col-md-2"><label for="">Tarif</label></div>
                                <div class="col-md-1"><label for="">qty</label></div>
                                <div class="col-md-1"><label for="">Disc</label></div>
                                <div class="col-md-1"><label for="">cyto</label></div>

                            </div>
                        </div>

                    </div>
                    <button type="button" class="btn btn-warning mb-2 simpantindakankebidanan" id="simpantindakankebidanan">Simpan Tindakan</button>

                </form>
            </div>
            <div class="card-footer">
                <p>pilih layanan untuk pasien</p>
            </div>
        </div>
    </div>
</div>
<script>
    spinner = $('#loader2');
    spinner.hide();
    $(function() {
        $("#tableriwayat").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 2,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $(function() {
        $("#tablebilling").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });

    $('#tablebilling').on('click', '.pilihtindakan', function() {
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
                '<div class="form-row text-xs"><div class="form-group col-md-4"><input readonly type="" class="form-control form-control-sm" id="" name="namatindakan" value="' +
                namatindakan +
                '"><input hidden readonly type="" class="form-control form-control-sm" id="" name="kodelayanan" value="' +
                kode +
                '"><input hidden  readonly type="" class="form-control form-control-sm" id="" name="jenis" value="' +
                jenis +
                '"></div><div class="form-group col-md-2"><input readonly type="" class="form-control form-control-sm" id="" name="tarif" value="' +
                tarif +
                '"></div><div class="form-group col-md-1"><input type="" class="form-control form-control-sm" id="" name="qty" value="1"></div><div class="form-group col-md-1"><input type="" class="form-control form-control-sm" id="" name="disc" readonly value="0"></div><div class="form-group col-md-1"><input type="" class="form-control form-control-sm" id="" name="cyto" readonly value="0" ></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i></div>'
            );
            $(wrapper).on("click", ".remove_field", function(e) { //user click on remove
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })
        }
    });
    $(".simpantindakankebidanan").click(function() {
        var data = $('.formtindakan').serializeArray();
        var kodekunjungan = $('#kodekunjungan').val()
        var kodepenjamin = $('#kodepenjamin').val()
        var dokter = $('#dokter').val()
        var diagnosa = $('#diagnosa').val()
        var namaunit = $('#namaunit').val()
        var kelas = $('#kelas').val()
        var kelasunit = $('#kelasunit').val()
        var kodeunit = $('#kodeunit').val()

        var norm = $('#norm').val()

        Swal.fire({
            title: "Yakin Simpan TIndakan?",
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
                        dokter: $('#dokter').val(),
                        kodepenjamin: $('#kodepenjamin').val(),
                        diagnosa: $('#diagnosa').val(),
                        norm: $('#norm').val(),
                        namaunit: $('#namaunit').val(),
                        kelas: $('#kelas').val(),
                        kelasunit: $('#kelasunit').val(),


                    },
                    url: '<?= route('simpantindakankebidanan') ?>',
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
    $(".returorderlabo").click(function() {
        var $row = $(this).closest("tr");
        var kodepenjamin = $row.find(".kodepenjamin").text();
        var kodekunjungan = $row.find(".kodekunjungan").text();
        var counter = $row.find(".counter").text();
        var qty = $row.find(".qty").text();
        var statuspembayaran = $row.find(".statuspembayaran").text();
        var alamat = $row.find(".alamat").text();
        var iddet = $row.find(".iddet").text();
        var accnumber = $row.find(".accnumber").text();
        var idlayanandetail = $row.find(".idlayanandetail").text();
        var kodeheader = $row.find(".kodeheader").text();
        var idhed = $row.find(".idhed").text();
        var tglinput = $row.find(".tgl_input").text();
        var norm = $row.find(".norm").text();
        var namatarif = $row.find(".namatarif").text();

        var gt = $row.find(".gt").text();
        Swal.fire({
            title: "Yakin RETUR data?",
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
                        kodepenjamin,
                        kodekunjungan,
                        counter,
                        qty,
                        statuspembayaran,
                        alamat,
                        iddet,
                        accnumber,
                        idlayanandetail,
                        kodeheader,
                        idhed,
                        tglinput,
                        norm,
                        namatarif,
                        gt
                    },
                    url: '<?= route('returorderlabo') ?>',
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
                        ambildatalab()
                    }
                });
            }
        })
        return false;
    });
</script>