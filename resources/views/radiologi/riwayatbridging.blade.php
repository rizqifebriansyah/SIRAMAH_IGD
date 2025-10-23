@extends('radiologi.header')
@section('container')

<div class="card-body ">
    <h4 class="nprinsley-text-glitchan">RIWAYAT ORDER </h4>


    <div class="row mt-3">
        <div class="col-sm-3 ">
            <input type="text" class="form-control" name="no_rm" id="no_rm" placeholder="nomor RM ..">
        </div>

        <div class="col-sm-3 ">
            <input type="date" class="form-control " autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal" name="tanggal_order" id="tanggal_order">
        </div>
        <div class="col-sm-3 ">
            <input type="date" class="form-control " autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal" name="tanggal_order1" id="tanggal_order1">
        </div>
        <div>
            <button type="submit" class="btn btn-primary" onclick="cariordertanggalrad()"> <i class="bi bi-search-heart"></i>
            </button>
            <a style="margin-left: 32px;" rel="noopener" href="{{ route('radiologi')}}" class="btn btn-primary"><i class="fas fa-sync-alt fa-spin"></i> Reload
            </a>
        </div>

    </div>
    <div class="row">

        <div class="col-md-8 mt-3">
            <table id="datapasienorder" class="table  table-sm text-sm table-bordered table-hover">
                <thead class="bg-success">
                    <th>ACC Number</th>
                    <th>NORM</th>
                    <th>Nama</th>
                    <th>Pemeriksaan</th>
                    <th>Ruang</th>
                    <th>Dokter Baca</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </thead>
                <tbody>
                    @foreach ($pasienbridging as $i)
                    <tr>
                        <td>{{$i->ACCESSIONNUMBER}}</td>
                        <td>{{$i->PID}}</td>
                        <td>{{$i->NAMEALIAS}}</td>
                        <td>{{$i->PROCEDURENAME}}</td>
                        <td>{{$i->ASSIGNEDPATIENTLOCATION}}</td>
                        <td>{{$i->ATTENDINGDOCTORNAME}}</td>
                        <td>
                            @if ($i->STATUS == 'NW-E')
                            <span class="badge badge-info">PROSES BRIDGING</span>
                            @elseif ($i->STATUS == 'date')
                            <span class="badge badge-danger">ON SCHEDULE</span>
                            @elseif ($i->STATUS == 'CM')
                            <span class="badge badge-primary">PICTURE MATCH</span>
                            @elseif ($i->STATUS == 'AP')
                            <span class="badge badge-primary">READ</span>
                            @endif

                        </td>
                        <td>
                            <div class="col-md-2">
                                <a class=" btn btn-info btn-sm " href="#">
                                    <i class="" aria-hidden="true">EDIT</i>

                                </a>
                            </div>

                        </td>



                    </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
        <div class="col-md-3 mt-3">
            <div class="detailpasienorder">

            </div>
        </div>
    </div>

</div>



<script>
    spinner = $('#loader2');
    spinner.hide();
    document.getElementById('tanggal_order').valueAsDate = new Date()
    document.getElementById('tanggal_order1').valueAsDate = new Date()

    $(function() {
        $("#datapasienorder").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });

    function cariordertanggalrad() {
        spinner = $('#loader2');
        spinner.show();
        no_rm = $('#no_rm').val()
        tgl_entry = $('#tanggal_order').val()
        tgl_entry1 = $('#tanggal_order1').val()

        $.ajax({
            type: "post",
            data: {
                _token: " {{ csrf_token() }}",
                no_rm,
                tgl_entry,
                tgl_entry1

            },
            url: " {{ route('caritanggalorderrad') }}",
            error: function(data) {
                spinner.hide();
                alert('error!!!')
            },
            success: function(response) {
                spinner.hide();
                $('.ordertable').html(response);
            }
        })

    }
    $(".returorderrad").click(function() {
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
        var totallayanan = $row.find(".totallayanan").text();




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
                        totallayanan,
                        gt
                    },
                    url: '<?= route('returorderrad') ?>',
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
                        ambildata()
                    }
                });
            }
        })
        return false;
    });

    function ambildata() {

        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",
            },
            type: "post",
            url: " {{ route('ambildata')}}",
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.ordertable').html(response);
            }
        });
    }
    $(".printorderrad").click(function() {
        var $row = $(this).closest("tr");

        var kodeheader = $row.find(".kodeheader").text();
        var idhed = $row.find(".idhed").text();

        Swal.fire({
            title: "Apakah ingin print ulang data?",
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

                        kodeheader,
                        idhed,

                    },
                    url: '<?= route('printlabelrad') ?>',
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
                        pdf(data.idhed, data.kode_header)
                        etiket(data.idhed, data.kode_header)

                    }
                });
            }
        })
        return false;
    });
    $(".printlabelrad").click(function() {
        var $row = $(this).closest("tr");

        var kodeheader = $row.find(".kodeheader").text();
        var idhed = $row.find(".idhed").text();

        Swal.fire({
            title: "Apakah ingin print ulang data?",
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

                        kodeheader,
                        idhed,

                    },
                    url: '<?= route('printlabelrad') ?>',
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
                        etiket(data.idhed, data.kode_header)

                    }
                });
            }
        })
        return false;
    });

    function etiket(idhed, kode_header) {

        window.open('etiket/' + kode_header + '/' + idhed);
    }
    $(".printnotarad").click(function() {
        var $row = $(this).closest("tr");

        var kodeheader = $row.find(".kodeheader").text();
        var idhed = $row.find(".idhed").text();

        Swal.fire({
            title: "Apakah ingin print ulang data?",
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

                        kodeheader,
                        idhed,

                    },
                    url: '<?= route('printlabelrad') ?>',
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
                        pdf(data.idhed, data.kode_header)

                    }
                });
            }
        })
        return false;
    });

    function pdf(idhed, kode_header) {

        myWindow = window.open('cetakorder/' + kode_header + '/' + idhed);

        function closeWin() {
            myWindow.close();
        }
    }

    $(".detailbarang").click(function() {
        spinner = $('#loader2');
        spinner.show();
        var $row = $(this).closest("tr");
        var kodeheader = $row.find(".kodeheader").text();
        var kodekunjungan = $row.find(".kodekunjungan").text();


        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                kodeheader,
                kodekunjungan


            },
            url: " {{ route('detailbarang') }}",
            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(response) {
                spinner.hide();
                $('.detailpasienorder').html(response);
            }
        });
    });
</script>
@endsection