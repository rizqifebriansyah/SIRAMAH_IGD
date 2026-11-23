@if ($unit == '1002')

<table id="datapemantauan" class="table ml-2 datapemantauan table-sm text-sm table-bordered table-hover">
    <thead class="bg-success">

        <th>id</th>
        <th>tgl/waktu</th>
        <th>Dokter </th>
        <th>Waktu Jaga</th>
        <th>Perawat </th>
        <th>Waktu Jaga</th>
        <th>Kategori </th>
        <th>Diagnosa Kerja</th>

        <th>TD</th>
        <th>Nadi</th>

        <th>RR</th>
        <th>SUHU</th>

        <th>GCS</th>
        <th>SPO2</th>

        <th>PUPIL</th>

        <th>NYERI</th>
        <th>KET</th>
        <th>TTE</th>





        <th>ACTION</th>
    </thead>
    <tbody>
        @foreach($hasilp as $lap => $l)
        <tr>
            <td class="idttv">{{ $l->id }}</td>

            <td>
                <select class="form-control selectjp dj">
                    <option value="{{ $l->dokter_jaga }}" selected>
                        {{ $l->dokter_jaga }}
                    </option>
                    @foreach ($dpjp as $p)
                    <option value="{{ $p->nama_paramedis }}">
                        {{ $p->nama_paramedis }}
                    </option>
                    @endforeach
                </select>
            </td>

            <td>
                <select class="form-control select2 wdj">
                    <option value="Pagi" {{ $l->waktu_jaga_dokter_pagi ? 'selected' : '' }}>Pagi</option>
                    <option value="Siang" {{ $l->waktu_jaga_dokter_siang ? 'selected' : '' }}>Siang</option>
                    <option value="Malam" {{ $l->waktu_jaga_dokter_malam ? 'selected' : '' }}>Malam</option>
                </select>
            </td>

            <td>
                <select class="form-control selectjp pj">
                    <option value="{{ $l->perawat_jaga }}" selected>
                        {{ $l->perawat_jaga }}
                    </option>
                    @foreach ($perawat as $p)
                    <option value="{{ $p->nama }}">
                        {{ $p->nama }}
                    </option>
                    @endforeach
                </select>
            </td>

            <td>
                <select class="form-control select2 wpj">
                    <option value="Pagi" {{ $l->waktu_jaga_perawat_pagi ? 'selected' : '' }}>Pagi</option>
                    <option value="Siang" {{ $l->waktu_jaga_perawat_siang ? 'selected' : '' }}>Siang</option>
                    <option value="Malam" {{ $l->waktu_jaga_perawat_malam ? 'selected' : '' }}>Malam</option>
                </select>
            </td>
            <td>
                <select class="form-control select2" name="kapa" id="kapa">
                    <option value="{{$l->kategori_pasien}}"> {{$l->kategori_pasien}}</option>
                    <option value="Emergent">Emergent
                    </option>
                    <option value="Urgent">Urgent
                    </option>
                </select>

            </td>
            <td>
                <input type="text" class="form-control dk" value="{{ $l->diagnosa_kerja }}">
            </td>

            <td>
                <input type="text" class="form-control ttd" value="{{ $l->td }}">
            </td>
            <td>
                <input type="text" class="form-control nadi" value="{{ $l->nadi }}">

            </td>
            <td>
                <input type="text" class="form-control rr" value="{{ $l->rr }}">
            </td>

            <td>
                <input type="text" class="form-control suhu" value="{{ $l->suhu }}">
            </td>
            <td>
                <input type="text" class="form-control gcs" value="{{ $l->gcs }}">

            </td>
            <td>
                <input type="text" class="form-control spo2" value="{{ $l->spo2 }}">
            </td>

            <td>
                <input type="text" name="pupil" id="pupil" value="{{$l->pupil}}" class=" form-control">

            </td>
            <td>
                <input type="text" name="nyeri" id="nyeri" value="{{$l->nyeri}}" class=" form-control">

            </td>
            <td>
                <textarea class="form-control" rows="3" id="keterangan" name="keterangan" placeholder="">{{$l->keterangan}}</textarea>

            </td>
            <td>@if ($l->link_tte != NULL)
                <a class=" btn btn-info btn-sm " href="#">
                    TTE
                </a>
                @else
                <a class=" btn btn-danger btn-sm " href="#">
                    Belum
                </a>
                @endif
            </td>


            <td>
                <a class=" btn btn-danger btn-sm returttv" href="#">
                    batal
                </a>
                <a class=" btn btn-warning btn-sm editpemantauan" href="#">
                    Edit
                </a>
                <a class=" btn btn-info btn-sm ttettv" href="#">
                    TTE
                </a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@else
<table id="datapemantauan" class="table ml-2 datapemantauan table-sm text-sm table-bordered table-hover">
    <thead class="bg-success">

        <th>id</th>
        <th>tgl/waktu</th>

        <th>Diagnosa Kerja</th>

        <th>TD</th>
        <th>Nadi</th>

        <th>RR</th>
        <th>SUHU</th>

        <th>10</th>
        <th>lama</th>

        <!-- <th>PU</th> -->
        <th>djj</th>
        <th>obat/cairan</th>
        <th>tetesan</th>
        <th>ket</th>



        <th>ACTION</th>
    </thead>
    <tbody>
        @foreach($hasilp as $lap => $l)
        <tr>
            <td class="idttv">{{$l->id}}</td>
            <td>{{$l->tgl_input}}</td>
            <td>{{$l->diagnosa_kerja}}</td>

            <td>{{$l->td}}</td>
            <td>{{$l->nadi}}</td>
            <td>{{$l->rr}}</td>
            <td>{{$l->suhu}}</td>
            <td>{{$l->his}}</td>
            <td>{{$l->lama}}</td>
            <td>{{$l->djj}}</td>
            <td>{{$l->obatcairan}}</td>
            <td>{{$l->tetesan}}</td>

            <td><a class="btn btn-danger btn-sm returttv" href="#">
                    batal
                </a></td>
        </tr>
        @endforeach

    </tbody>
</table>
@endif

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">



<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {

        $('.selectjp').select2({
            width: '100%'
        });

    });
    // $(document).ready(function() {
    //     window.setTimeout(function() {
    //         ambildata()
    //     }, 600000);

    // });

    function bunyi() {
        var bel = new Audio('notif.mp3');
        bel.play();
    }
    // $(function() {
    //     $("#datapemantauan").DataTable({
    //         "sortable": true,
    //         "responsive": true,
    //         "lengthChange": false,
    //         "pageLength": 15,
    //         "autoWidth": false,
    //         "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    //     }).buttons().container().appendTo('#datapemantauan_wrapper .col-md-6:eq(0)');
    //     $('#tablelist').DataTable({
    //         "paging": true,
    //         "lengthChange": false,
    //         "searching": false,
    //         "ordering": true,
    //         "info": true,
    //         "autoWidth": false,
    //         "responsive": true,
    //     });
    // });

    $(".ttettv").click(function() {
        var $row = $(this).closest("tr");
        var idttv = $row.find(".idttv").text();


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
                        idttv



                    },
                    url: '<?= route('ttettv') ?>',

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
                            // cpptperawat()
                            pemantauanview()

                        }
                    }
                });
            }
        })
        return false;
    });
    $(".returttv").click(function() {
        var $row = $(this).closest("tr");
        var idttv = $row.find(".idttv").text();




        Swal.fire({
            title: "Yakin Retur TTV?",
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
                        idttv



                    },
                    url: '<?= route('returttv') ?>',

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
                            pemantauanview()




                        }
                    }
                });
            }
        })
        return false;
    });
    $(".editpemantauan").click(function() {
        var $row = $(this).closest("tr");
        var idttv = $row.find(".idttv").text();
        var wdj = $("#wdj").val();
        var dj = $("#dj").val();
        var wpj = $("#wpj").val();
        var pj = $("#pj").val();
        var kapa = $("#kapa").val();
        var dk = $("#dk").val();


        var ttd = $("#ttd").val();
        var kj = $("#kj").val();
        var norm = $("#norm").val();
        var rr = $("#rr").val();
        var nadi = $("#nadi").val();
        var suhu = $("#suhu").val();
        var gcs = $("#gcs").val();
        var pupil = $("#pupil").val();
        var urine = $("#urine").val();
        var spo2 = $("#spo2").val();

        var nyeri = $("#nyeri").val();


        var keterangan = $("#keterangan").val();







        Swal.fire({
            title: "Yakin Edit Pemantauan?",
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
                        idttv,
                        wdj: $("#wdj").val(),
                        dj: $("#dj").val(),
                        wpj: $("#wpj").val(),
                        pj: $("#pj").val(),
                        kapa: $("#kapa").val(),
                        dk: $("#dk").val(),
                        ttd: $("#ttd").val(),
                        kj: $("#kj").val(),
                        norm: $("#norm").val(),
                        rr: $("#rr").val(),
                        nadi: $("#nadi").val(),
                        suhu: $("#suhu").val(),
                        gcs: $("#gcs").val(),
                        pupil: $("#pupil").val(),
                        urine: $("#urine").val(),
                        spo2: $("#spo2").val(),

                        nyeri: $("#nyeri").val(),
                        keterangan: $("#keterangan").val(),



                    },
                    url: '<?= route('editpemantauan') ?>',

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
                            pemantauanview()


                        }

                    }
                });

            }
        })
        return false;
    });

    function pemantauanview() {
        var kj = $("#kj").val();
        var norm = $("#norm").val();
        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",
                kj: $("#kj").val(),
                norm: $("#norm").val(),
            },
            type: "post",
            url: " {{ route('pemantauanview') }}",
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.hasilinput').html(response);


            }
        });
    }
</script>