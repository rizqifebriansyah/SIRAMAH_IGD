<div class="card-header">
    <h3 class="card-title">ORDER LABORATORIUM</h3>
</div>

@if ($riwayatorderlab != NULL)
<div class="col-md-12">
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
                <td> <a class=" btn btn-danger btn-sm returorderlaboratoriumbidan" href="#">
                        <i class="fas fa-sync-alt fa-spin"></i>
                        RETUR
                    </a></td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@else
@endif
<div class="row">
    <div class="col-md-5">
        <div class="form-group">
            <input type="text" name="kj" id="kj" value="{{$kj}}" hidden class=" form-control">
            <input type="text" name="norm" id="norm" value="{{$norm}}" hidden class=" form-control">

            <!-- <input type="text" name="dj" id="dj" placeholder="Nama Dokter" value="" class=" form-control"> -->
            <label>PILIH DOKTER</label><select class="form-control selectjp" id="dokkirim" name="dokkirim">
                @foreach ($dpjp as $i => $p)
                <option value="{{ $p->kode_paramedis }}">{{ $p->nama_paramedis }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Indikasi Klinis Pemeriksaan</label>
            <select class="form-control select2" name="indikasiklinislab" id="indikasiklinislab">
                <option value="Skrining / Uji Saring (Preventif)">Skrining / Uji Saring (Preventif)
                </option>
                <option value="Penegakan Diagnosis (Diagnostik)">Penegakan Diagnosis (Diagnostik)
                </option>
                <option value="Pemantauan Penyakit(Monitoring)">Pemantauan Penyakit(Monitoring)
                </option>
                <option value="Evaluasi Pengobatan (Follow-up)">Evaluasi Pengobatan (Follow-up)
                </option>



            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">DIAGNOSA</label>
            <textarea class="form-control" id="diagnosa" name="diagnosa" placeholder=""></textarea>

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
    <div class="col-md-12">
        <div type="button" class="btn float-right btn-success orderlabigk mt-3 mb-3 mr-3">
            SIMPAN ORDER
        </div>
    </div>
</div>


<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">



<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {

        $('.selectjp').select2({
            width: '100%'
        });

    });
    $(function() {
        $("#tablelab").DataTable({
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
                '"></div><div class="form-group col-md-1"><label for="inputPassword4">Jumlah</label><input type="" class="form-control form-control-sm" id="" name="qty" value="1"></div><div class="form-group col-md-1"><label for="inputPassword4">Disc</label><input type="" class="form-control form-control-sm" id="" name="disc" value="0"></div><div class="form-group col-md-1"><label for="inputPassword4">Cyto</label><input type="" class="form-control form-control-sm" id="" name="cyto" value="0"></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i></div>'
            );
            $(wrapper).on("click", ".remove_field", function(e) { //user click on remove
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })
        }
    });

    $(".orderlabigk").click(function() {
        var datalab = $('.formlab').serializeArray();

        var norm = $('#norm').val()
        var kj = $('#kj').val()

        var diagnosa = $('#diagnosa').val()

        var indikasiklinislab = $('#indikasiklinislab').val()
        var dokkirim = $('#dokkirim').val()


        // var sumberdata = $("#sumberdata:checked").val();
        Swal.fire({
            title: "Yakin Simpan ORDER?",
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


                        datalab: JSON.stringify(datalab),

                        norm: $('#norm').val(),
                        diagnosa: $('#diagnosa').val(),

                        kj: $('#kj').val(),


                        indikasiklinislab: $('#indikasiklinislab').val(),
                        dokkirim: $('#dokkirim').val()

                    },
                    url: '<?= route('orderlabigk') ?>',

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

     $(".returorderlaboratoriumbidan").click(function() {
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
                    url: '<?= route('returorderlaboratoriumbidan') ?>',

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
                            // cpptdokter();


                        }
                    }
                });
            }
        })
        return false;
    });
</script>