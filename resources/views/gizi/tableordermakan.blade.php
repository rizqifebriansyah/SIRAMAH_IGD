<h5>RIWAYAT ORDER MAKAN </h5>
<div class="row">
    <div class="col-md-6">
        <table id="tablemakanpagi" class="table tablemakanpagi table-sm text-sm table-bordered table-hover">
            <thead class="bg-info">

                <th>Nomor RM</th>
                <th hidden>kode kunjungan</th>
                <th hidden>id</th>

                <th>Nama Pasien</th>
                <th>Waktu Makan</th>
                <th>Menu DIET</th>
                <th>Kamar & no Bed</th>
                <th hidden>Ruangan</th>
                <th>action</th>
            </thead>
            <tbody>
                @foreach ($orderhariini as $pgi => $pg)
                <tr>
                    <td class="norm">{{$pg->no_rm}}</td>
                    <td hidden class="kj">{{$pg->kode_kunjungan}}</td>
                    <td hidden class="id">{{$pg->id}}</td>


                    <td class="nama_px">{{$pg->nama_pasien}}</td>
                    <td class="waktumakan">{{$pg->waktu_makan}}</td>
                    <td class="diet">{{$pg->diit}}</td>
                    <td class="kamar">{{$pg->kamar}} / {{$pg->no_bed}}</td>
                    <td hidden class="kode_unit">{{$pg->kode_unit}}</td>
                    <td>
                        <a class="detailordergizi btn btn-info btn-sm" href="#">
                            <i class="fas fa-eye"></i>

                        </a>
                        @if ($pg->status == 1)
                        <a class=" btn btn-success prosesorder btn-sm" href="#">
                            <i class="fas fa-pen"></i>

                        </a>

                        @elseif ($pg->status == 2)
                        <a class=" btn btn-success antarorder btn-sm" href="#">
                            <i>antar</i>

                        </a>
                        @elseif ($pg->status == 3)
                        <a class=" btn btn-success selesaiorder btn-sm" href="#">
                            <i>antar</i>

                        </a>

                        @endif
                        <!-- <a class=" btn btn-danger btn-sm" href="#">
                            <label for="">x</label>

                        </a> -->
                        @if ($pg->status == 1)
                        <p class="badge badge-danger">belum di proses</p>
                        @elseif ($pg->status == 2)
                        <p class="badge badge-warning">Proses Pembuatan</p>
                        @elseif ($pg->status == 3)
                        <p class="badge badge-info">Proses Penyajian</p>
                        @elseif ($pg->status == 4)
                        <p class="badge badge-primary">Proses Selesai</p>
                        @endif


                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-5">
        <div class="detailpasienordergizi">

        </div>
    </div>
</div>


<script>
    $(".detailordergizi").click(function() {
        spinner = $('#loader2');
        spinner.show();
        var $row = $(this).closest("tr");
        var kj = $row.find(".kj").text();
        var norm = $row.find(".norm").text();
        var waktumakan = $row.find(".waktumakan").text();




        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                kj,
                norm,
                waktumakan,
                id


            },
            url: " {{ route('detailordergizi') }}",
            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(response) {
                spinner.hide();
                $('.detailpasienordergizi').html(response);
            }
        });
    });

    $(".prosesorder").click(function() {
        var $row = $(this).closest("tr");
        var kj = $row.find(".kj").text();
        var norm = $row.find(".norm").text();
        var waktumakan = $row.find(".waktumakan").text();
        var id = $row.find(".id").text();

        Swal.fire({
            title: "Yakin Simpan Order?",
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
                        kj,
                        norm,
                        id,
                        waktumakan


                    },
                    url: '<?= route('prosesorder') ?>',

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
    $(".antarorder").click(function() {
        var $row = $(this).closest("tr");
        var kj = $row.find(".kj").text();
        var norm = $row.find(".norm").text();
        var waktumakan = $row.find(".waktumakan").text();
        var id = $row.find(".id").text();

        Swal.fire({
            title: "Yakin Antar Order?",
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
                        kj,
                        norm,
                        id,
                        waktumakan


                    },
                    url: '<?= route('antarorder') ?>',

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
    $(".selesaiorder").click(function() {
        var $row = $(this).closest("tr");
        var kj = $row.find(".kj").text();
        var norm = $row.find(".norm").text();
        var waktumakan = $row.find(".waktumakan").text();
        var id = $row.find(".id").text();

        Swal.fire({
            title: "Yakin Selesai Order?",
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
                        kj,
                        norm,
                        id,
                        waktumakan


                    },
                    url: '<?= route('selesaiorder') ?>',

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