@extends('erm.header')
<link rel="stylesheet" type="text/css" href="https://cdn.prinsh.com/NathanPrinsley-textstyle/nprinsh-stext.css" />
<style>
    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
@section('container')
{{-- buayik --}}
@if ($user == 'ayikrad')
<div class="row coba" style="margin-top:130px">
    <div class="col-lg-4 col-4 jumlahpasien" style="margin-left: 30px;">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $jumlahinput[0]->total }}</h3>

                <p>Riwayat Pasien Hari Ini</p>
            </div>
            <div class="icon">
                <i class="ion ion-book"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-4 jumlahorder">
        <!-- small box -->
        <div class="small-box bg-success ">
            <div class="inner">
                <h3>{{ $jumlahorder }}</h3>

                <p>Order ERM</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-4 jumlahorderpasien">
        <!-- small box -->
        <div class="small-box bg-warning ">
            <div class="inner">
                <h3>{{ $jumlahorderpasien }}</h3>

                <p>Order </p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div id="pasienpilihan" class="pasienpilihan row" style="margin-top:50px ;">

    </div>
    <div id="pasiendetail" class="pasiendetail col-12" style="margin-top:50px ;">

    </div>


    <div class="col-md-11" style="margin-left: 30px;">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">

                    <li class="nav-item"><a class="nav-link" href="#ekspertise" data-toggle="tab">Ekspertise</a>
                    </li>

                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">

                    <div class="tab-pane active" id="ekspertise">
                        <div class="col-sm-11 " style="margin-left:30px">
                            <h4 class="nprinsley-text-glitchan">DATA EKSPERTISE</h4>

                            <div class="container" style="margin-top:5px ;">
                                <div class="row">

                                    <div class="col-sm-3">
                                        <input type="date" class="form-control" id="tanggal_kunjungan1" autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control" id="tanggal_kunjungan2" autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal">
                                    </div>
                                    <div class="col-sm-3 ">
                                        <input type="text" class="form-control" name="dokter" id="dokter" placeholder="Nama Dokter ..">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary" onclick="lihatpasienex()"> <i class="bi bi-search-heart"></i> </button>
                                    </div>
                                </div>
                            </div>
                            <div class="container tablexpertise" style="margin-top:15px ;">

                            </div>
                        </div>
                    </div>
                    <!-- /.tab-pane -->


                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
{{-- radiologi --}}
@else($unit == 3003)
<div class="row coba" style="margin-top:130px">
    <div class="col-lg-4 col-4 jumlahpasien" style="margin-left: 30px;">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $jumlahinput[0]->total }}</h3>

                <p>Riwayat Pasien Hari Ini</p>
            </div>
            <div class="icon">
                <i class="ion ion-book"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-4 jumlahorder">
        <!-- small box -->
        <div class="small-box bg-success ">
            <div class="inner">
                <h3>{{ $jumlahorder }}</h3>

                <p>Order ERM</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-4 jumlahorderpasien">
        <!-- small box -->
        <div class="small-box bg-warning ">
            <div class="inner">
                <h3>{{ $jumlahorderpasien }}</h3>

                <p>Order </p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div id="pasienpilihan" class="pasienpilihan row" style="margin-top:50px ;">

    </div>
    <div id="pasiendetail" class="pasiendetail col-12" style="margin-top:50px ;">

    </div>


    <div class="col-md-11" style="margin-left: 30px;">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#datapasien" data-toggle="tab">Data
                            Pasien</a></li>
                    <li class="nav-item"><a class="nav-link" href="#riwayat" data-toggle="tab">Riwayat
                            Pasien</a></li>
                    <li class="nav-item"><a class="nav-link" href="#ekspertise" data-toggle="tab">Ekspertise</a>
                    </li>

                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="datapasien">
                        <div class="col-sm-11 " style="margin-left:30px">
                            <h4 class="nprinsley-text-glitchan">DATA PASIEN</h4>

                            <div class="container" style="margin-top:15px ;">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control" id="tanggal_kunjungann" autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control" id="tanggal_kunjungan" autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary" onclick="caripasien()"> <i class="bi bi-search-heart"></i> </button>
                                        <a style="margin-left: 32px;" rel="noopener" href="{{ route('radiologi')}}" class="btn btn-primary"><i class="fas fa-sync-alt fa-spin"></i> Reload
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="container tablependaftaran" style="margin-top:15px ;">
                                <table id="datapendaftaran" class="table tabl6644e-sm text-sm table-bordered table-hover">

                                    <thead class="bg-warning">
                                        <th>UNIT</th>
                                        <th>Nomor RM</th>
                                        <th>Nama</th>
                                        <th>JK</th>
                                        <th>Alamat</th>
                                        <th>Penjamin</th>
                                        <th>diagnosa awal</th>


                                    </thead>
                                    <tbody>

                                        @foreach ($pasienkunjunganrs as $i => $pk)
                                        <tr index="{{ $i }}" kelas="{{ $pk->kelas }}" kode_kunjungan="{{ $pk->kode_kunjungan }}" kelas_unit="{{ $pk->kelas_unit }}" nama_unit="{{ $pk->nama_unit }}" no_rm="{{ $pk->no_rm }}" nama_px="{{ $pk->nama_px }}" jenis_kelamin="{{ $pk->jenis_kelamin }}" nama_penjamin="{{ $pk->nama_penjamin }}" dokter="{{ $pk->nama_dokter }}" nama_penjamin="{{ $pk->nama_penjamin }}" kode_penjamin="{{ $pk->kode_penjamin }}" alamat="{{ $pk->alamat }}" diagx="{{ $pk->DIAGX }}" class="terpilihpasienradiologi toastsDefaultSuccess @if($pk->orderan == 1) bg-danger @else @endif">
                                            <td>{{ $pk->nama_unit }} </td>
                                            <td>{{ $pk->no_rm }}</td>
                                            <td>{{ $pk->nama_px }}</td>
                                            <td>{{ $pk->jenis_kelamin }}</td>
                                            <td>{{ $pk->alamat }}</td>
                                            <td>
                                                @if ($pk->kode_penjamin == 'P01')
                                                <p class="badge badge-primary">PRIBADI</p>
                                                @else
                                                <p class="badge badge-success">
                                                    {{ $pk->nama_penjamin }}
                                                </p>
                                                @endif
                                            </td>
                                            <td>
                                                {{ $pk->DIAGX }}

                                            </td>


                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="riwayat">
                        <div class="col-sm-11" style="margin-left:30px">

                            <h4 class="nprinsley-text-glitchan">RIWAYAT ORDER </h4>

                            <div class="container" style="margin-top:15px ;">

                                <div class="row ">
                                    <div class="col-sm-3 ">
                                        <input type="text" class="form-control" name="no_rm" id="no_rm" placeholder="nomor RM ..">
                                    </div>

                                    <div class="col-sm-4 ">
                                        <input type="date" class="form-control " autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal" name="tanggal_order" id="tanggal_order">
                                    </div>
                                    <div class="col-sm-4 ">
                                        <input type="date" class="form-control " autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal" name="tanggal_order1" id="tanggal_order1">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary" onclick="cariordertanggal()"> <i class="bi bi-search-heart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="container ordertable" style="margin-top:15px ;">
                                <table id="datapasienorder" class="table  table-sm text-sm table-bordered table-hover">
                                    <thead class="bg-success">
                                        <th hidden>no</th>
                                        <th>Kode Layanan Order</th>
                                        <th hidden>Id</th>
                                        <th hidden>Id</th>
                                        <th hidden>Id</th>
                                        <th hidden>Id</th>
                                        <th hidden>Id</th>
                                        <th hidden>Id</th>
                                        <th hidden>Id</th>
                                        <th hidden>Id</th>
                                        <th hidden>Id</th>
                                        <th hidden>Id</th>
                                        <th hidden>Id</th>

                                        <th>Tanggal Masuk</th>
                                        <th>Nomor RM</th>
                                        <th>Nama</th>
                                        <th>Nama Layanan</th>

                                        <th>Total</th>
                                        <th>Acc Number</th>
                                        <th>Dokter Hasil</th>
                                        <th>action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($pasienorder as $i=>$key)
                                        <tr index="{{$i}}" idhed=" {{$key->IDHED}}" kode_header="{{$key->KODE_LAYANAN_HEADER}}" class="pasienterpilih toastsDefaultSuccess" no_rm="{{ $key->NO_RM }}" nama="{{ $key->NAMA_PX }}" kodepenjamin="{{ $key -> KODE_PENJAMIN }}" tgl_order="{{ $key-> tgl_INPUT }}" kodekunjungan="{{ $key->KJ}}" counter="{{$key->COUNTER}}" namatarif="{{$key->NAMA_TARIF}}" qty="{{$key->QTY}}" gt="{{$key->grantotal_layanan}}" statuspembayaran="{{$key->status_pembayaran}}" alamat="{{$key->ALAMAT}}" iddet="{{$key->IDDET}}" accnumber="{{$key->ACC_NUMBER}}" idlayanandetail="{{$key->id_layanan_detail}}">
                                            <td class="kodeheader"> {{ $key->KODE_LAYANAN_HEADER}}</td>
                                            <td hidden class="idhed">{{$key->IDHED}}</td>
                                            <td hidden class="kodepenjamin">{{ $key->KODE_PENJAMIN }}</td>
                                            <td hidden class="kodekunjungan">{{ $key->KJ}}</td>
                                            <td hidden class="counter">{{ $key->COUNTER}}</td>
                                            <td hidden class="qty">{{ $key->QTY}}</td>
                                            <td hidden class="statuspembayaran">{{ $key->status_pembayaran}}</td>
                                            <td hidden class="alamat">{{ $key->ALAMAT}}</td>
                                            <td hidden class="iddet">{{ $key->IDDET}}</td>
                                            <td hidden class="accnumber">{{ $key->ACC_NUMBER}}</td>
                                            <td hidden class="totallayanan">{{ $key->total_layanan}}</td>

                                            <td hidden class="idlayanandetail">{{ $key->id_layanan_detail}}</td>
                                            <td hidden>{{ $i}}</td>
                                            <td class="tgl_input">{{ $key-> tgl_INPUT }}</td>
                                            <td class="norm">{{ $key-> NO_RM }}</td>
                                            <td class="namapx"> {{ $key->NAMA_PX}} </td>
                                            <td class="namatarif"> {{ $key->NAMA_TARIF}} </td>
                                            <td class="gt"> {{ $key->grantotal_layanan}} </td>
                                            <td class="acc"> {{ $key->ACC_NUMBER}} </td>
                                            <td class="dokhasil"> {{ $key->DOKTER_HASIL}} </td>
                                            <td class="center">


                                                @if ($key->DOKTER_HASIL >0)


                                                @else
                                                <a class=" btn btn-secondary btn-sm returorderradiologi" href="#">
                                                    <i class="fas fa-sync-alt fa-spin"></i>
                                                    RETUR
                                                </a> <br>
                                                @endif


                                                <a class=" btn btn-danger btn-sm printlabelrad" href="#">
                                                    <i class="" aria-hidden="true">L</i>

                                                </a>
                                                |
                                                <a class=" btn btn-warning btn-sm printnotarad" href="#">
                                                    <i class="" aria-hidden="true">N</i>

                                                </a>
                                                |
                                                <a class=" btn btn-success btn-sm printorderrad" href="#">
                                                    <i class="" aria-hidden="true">All</i>

                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="ekspertise">
                        <div class="col-sm-11 " style="margin-left:30px">
                            <h4 class="nprinsley-text-glitchan">DATA EKSPERTISE</h4>

                            <div class="container" style="margin-top:5px ;">
                                <div class="row">

                                    <div class="col-sm-3">
                                        <input type="date" class="form-control" id="tanggal_kunjungan1" autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control" id="tanggal_kunjungan2" autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal">
                                    </div>
                                    <div class="col-sm-3 ">
                                        <input type="text" class="form-control" name="dokter" id="dokter" placeholder="Nama Dokter ..">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary" onclick="lihatpasienex()">
                                            <i class="bi bi-search-heart"></i> </button>
                                    </div>
                                </div>
                            </div>
                            <div class="container tablexpertise" style="margin-top:15px ;">

                            </div>
                        </div>
                    </div>
                    <!-- /.tab-pane -->


                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

@endif
<script>
    spinner = $('#loader2');
    spinner.hide();
    document.getElementById('tanggal_kunjungan').valueAsDate = new Date()
    document.getElementById('tanggal_kunjungann').valueAsDate = new Date()

    document.getElementById('tanggal_kunjungan1').valueAsDate = new Date()
    document.getElementById('tanggal_kunjungan2').valueAsDate = new Date()
    document.getElementById('tanggal_order').valueAsDate = new Date()
    document.getElementById('tanggal_order1').valueAsDate = new Date()
</script>
<script>
    // $(document).ready(function() {
    //     window.setTimeout(function() {
    //         ambildataradiologi()

    //     }, 30000);

    // });
    $(function() {
        $("#datapasienorder").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $(function() {
        $("#datapasienkjn").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
        $("#datapendaftaran").DataTable({
            "responsive": false,
            "lenghtChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $('#datapendaftaran').on('click', '.terpilihpasienradiologi', function() {
        spinner = $('#loader2');
        spinner.show();
        tgl_kunjungan = $('#tanggal_kunjungan').val()
        diagx = $(this).attr('diagx')
        kelas_unit = $(this).attr('kelas_unit')
        kelas = $(this).attr('kelas')
        kode_kunjungan = $(this).attr('kode_kunjungan')
        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                tgl_kunjungan,
                kelas_unit,
                kelas,
                diagx,
                kode_kunjungan,
            },
            url: " {{ route('detailpasienradiologi') }}",
            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(response) {
                spinner.hide();
                $('#kelas_unit').val(response.kelas_unit);
                $('#kelas').val(response.kelas);
                $('#kode_kunjungan').val(response.kode_kunjungan);
                $('#tgl_kunjungan').val(response.tgl_kunjungan);

                $('.coba').html(response);

            }
        });
    });
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
                    url: '<?= route('printulangradiologi') ?>',
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
                    url: '<?= route('printulang') ?>',
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
                    url: '<?= route('printulang') ?>',
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
   
    
    $(".returorderradiologi").click(function() {
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
                    url: '<?= route('returorderradiologi') ?>',
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
                        ambildataradiologi()
                    }
                });
            }
        })
        return false;
    });
    
    
    function bunyi() {
        var bel = new Audio('notif.mp3');
        bel.play();
    }

    function datapasien() {
        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",
            },
            type: "post",
            url: " {{ route('datapasienradiologi') }}",
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.tablependaftaran').html(response);

            }
        });
    }

    function ambildataradiologi() {

        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",
            },
            type: "post",
            url: " {{ route('radiologi') }}",
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();

            }
        });
    }

    function totalkunjungan() {

        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",
            },
            type: "post",
            url: " {{ route('hitungkunjungan') }}",
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.jumlahpasien').html(response);

            }
        });
    }

    function totalorder() {

        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",
            },
            type: "post",
            url: " {{ route('hitungorder') }}",
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.jumlahorderpasien').html(response);

            }
        });
    }

    function totalorderpoli() {

        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",
            },
            type: "post",
            url: " {{ route('hitungorderpoli') }}",
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.jumlahorder').html(response);

            }
        });
    }
    $('#tabeltindakan').on('click', '.pilihlayanan', function() {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
        var x = 1; //initlal text box count
        kode = $(this).attr('kode')
        namatindakan = $(this).attr('namatindakan')
        tarif = $(this).attr('tarif')
        // e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append(
                '<div class="form-row text-xs"><div class="form-group col-md-5"><label for="">Tindakan</label><input readonly type="" class="form-control form-control-sm" id="" name="namatindakan" value="' +
                namatindakan +
                '"><input hidden readonly type="" class="form-control form-control-sm" id="" name="kodelayanan" value="' +
                kode +
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
    $('#datapendaftaran').on('click', '.pasienerm', function() {
        spinner = $('#loader2');
        spinner.show();
        kelas = $(this).attr('kelas')
        nama = $(this).attr('nama')
        alamat = $(this).attr('alamat')
        tglmasuk = $(this).attr('tglmasuk')
        norm = $(this).attr('norm')
        diagnosa = $(this).attr('diagnosa')
        kodekunjungan = $(this).attr('kodekunjungan')
        index = parseInt($(this).attr('index'))
        idheader = $(this).attr('idheader')
        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                norm,
                tglmasuk,
                nama,
                alamat,
                kodekunjungan,
                diagnosa,
                index,
                idheader
            },
            url: " {{ route('pasienerm') }}",
            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(response) {
                spinner.hide();
                $('#idheader').val(response.id);
                $('#norm').val(response.norm);
                $('#nama').val(response.nama);
                $('#alamat').val(response.alamat);
                $('#tglmasuk').val(response.tglmasuk);
                $('#kodekunjungan').val(response.kodekunjungan);
                $('.coba').html(response);

            }
        });
    });

    function cariordertanggal() {
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
            url: " {{ route('caritanggalradiologi') }}",
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

    function lihatpasienex() {
        spinner = $('#loader2');
        spinner.show();

        tgl_kunjungan1 = $('#tanggal_kunjungan1').val()
        tgl_kunjungan2 = $('#tanggal_kunjungan2').val()

        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",

                tgl_kunjungan1,
                tgl_kunjungan2

            },
            url: "{{ route('lihatpasienex') }}",
            error: function(data) {
                spinner.hide()
                alert('Errorrr!!!')
            },
            success: function(response) {
                spinner.hide();
                $('.tablexpertise').html(response);
            }
        })
    }

    function caripasien() {
        spinner = $('#loader2');
        spinner.show();
        norm = $('#norm').val()
        nama = $('#nama').val()
        alamat = $('#alamat').val()
        tgl_kunjungan = $('#tanggal_kunjungan').val()
        tgl_kunjungann = $('#tanggal_kunjungann').val()

        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                norm,
                nama,
                alamat,
                tgl_kunjungan,
                tgl_kunjungann

            },
            url: "{{ route('caripasienpendaftaranradiologi') }}",
            error: function(data) {
                spinner.hide()
                alert('Errorrr!!!')
            },
            success: function(response) {
                spinner.hide();
                $('.tablependaftaran').html(response);
            }
        })
    }

    function pdf(idhed, kode_header) {

        myWindow = window.open('cetakorder/' + kode_header + '/' + idhed);

        function closeWin() {
            myWindow.close();
        }
    }

    function etiket(idhed, kode_header) {

        window.open('etiket/' + kode_header + '/' + idhed);
    }

    function labpdf(idhed, kode_header) {
        window.open('labnota/' + kode_header + '/' + idhed);

    }
</script>
@endsection