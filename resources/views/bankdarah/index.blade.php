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

{{-- kamar jenaza --}}
<div class="row coba" style="margin-top:130px">

    <div id="pasienpilihan" class="pasienpilihan row" style="margin-top:50px ;">

    </div>
    <div id="pasiendetail" class="pasiendetail col-12" style="margin-top:50px ;">

    </div>


    <div class="col-md-11" style="margin-left: 30px;">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#datapasien" data-toggle="tab">Cari
                            Pasien</a></li>
                    <li class="nav-item"><a class="nav-link" href="#riwayat" data-toggle="tab">Riwayat Pasien
                            Bank Darah</a></li>
                    <li class="nav-item"><a class="nav-link" href="#instok" data-toggle="tab">Gudang Bank Darah</a></li>

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
                                        <button type="submit" class="btn btn-primary" onclick="caripasienbnd()"> <i class="bi bi-search-heart"></i> </button>
                                        <a style="margin-left: 32px;" rel="noopener" href="{{ route('bankdarah')}}" class="btn btn-primary"><i class="fas fa-sync-alt fa-spin"></i> Reload
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
                                        <tr index="{{ $i }}" kelas="{{ $pk->kelas }}" kode_kunjungan="{{ $pk->kode_kunjungan }}" kelas_unit="{{ $pk->kelas_unit }}" nama_unit="{{ $pk->nama_unit }}" no_rm="{{ $pk->no_rm }}" nama_px="{{ $pk->nama_px }}" jenis_kelamin="{{ $pk->jenis_kelamin }}" nama_penjamin="{{ $pk->nama_penjamin }}" dokter="{{ $pk->nama_dokter }}" nama_penjamin="{{ $pk->nama_penjamin }}" kode_penjamin="{{ $pk->kode_penjamin }}" alamat="{{ $pk->alamat }}" diagx="{{ $pk->DIAGX }}" class="terpilihpasien toastsDefaultSuccess">
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
                                   

                                    <div class="col-sm-4 ">
                                        <input type="date" class="form-control " autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal" name="tanggal_order" id="tanggal_order">
                                    </div>
                                    <div class="col-sm-4 ">
                                        <input type="date" class="form-control " autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal" name="tanggal_order1" id="tanggal_order1">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary" onclick="cariordertanggalbnd()"> <i class="bi bi-search-heart"></i>
                                        </button>
                                        <a style="margin-left: 32px;" rel="noopener" href="{{ route('bankdarah')}}" class="btn btn-primary"><i class="fas fa-sync-alt fa-spin"></i> Reload
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="container ordertable" style="margin-top:15px ;">
                                <table id="datapasienbnd" class="table datapasienbnd table-sm text-sm table-bordered table-hover">
                                    <thead class="bg-success">
                                        <th hidden></th>
                                        <th hidden></th>
                                        <th hidden></th>
                                        <th hidden></th>
                                        <th hidden></th>

                                        <th hidden></th>
                                        <th hidden></th>
                                        <th hidden></th>
                                        <th hidden></th>
                                        <th hidden></th>
                                        <th hidden></th>
                                        <th>Kode Layanan Order</th>

                                        <th>Tanggal Masuk</th>
                                        <th>Nomor RM</th>
                                        <th>Nama</th>
                                        <th>Nama Layanan</th>

                                        <th>Total</th>

                                        <th>action</th>
                                    </thead>
                                    <tbody>


                                        @foreach ($pasienorderbnd as $i=>$key)
                                        <tr class="pasienterpilih toastsDefaultSuccess">
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
                                            <td hidden class="idlayanandetail">{{ $key->id_layanan_detail}}</td>
                                            <td hidden>{{ $i}}</td>
                                            <td class="tgl_input">{{ $key-> tgl_INPUT }}</td>
                                            <td class="norm">{{ $key-> NO_RM }}</td>
                                            <td class="namapx"> {{ $key->NAMA_PX}} </td>
                                            <td class="namatarif"> {{ $key->NAMA_TARIF}} </td>
                                            <td class="gt"> {{ $key->grantotal_layanan}} </td>
                                            <td><a class="btn btn-warning btn-sm returorderbnd" href="#">
                                                    <i class="fas fa-sync-alt fa-spin"></i>
                                                    RETUR
                                                </a> | <a class="btn btn-primary btn-sm printorderbnd" href="#">
                                                    <i class="fa fa-print" aria-hidden="true"></i>

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
                    <div class="tab-pane" id="instok">
                        <div class="col-sm-11" style="margin-left:30px">

                            <h4 class="nprinsley-text-glitchan">STOK DARAH </h4>

                            <div class="row ">
                                <div class="col-sm-3 ">
                                    <input type="text" class="form-control" name="kode_darah" id="kode_darah" placeholder="kode darah ..">
                                </div>
                                <div class="col-sm-3 ">
                                    <input type="text" class="form-control" name="darah" id="darah" placeholder="Jenis darah ..">
                                </div>
                                <div class="col-sm-3 ">
                                    <input type="date" class="form-control " autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal" name="tanggal_obat" id="tanggal_obat">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary" onclick="cariordertanggalbnd()"> <i class="bi bi-search-heart"></i>
                                    </button>
                                    <a style="margin-left: 32px;" rel="noopener" href="{{ route('bankdarah')}}" class="btn btn-primary"><i class="fas fa-sync-alt fa-spin"></i> Reload
                                    </a>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-md-6 tablestokdarah">
                                    <table id="tabelstok" class="table tabelstok">
                                        <thead class="bg-warning">
                                            <th></th>
                                            <th >A</th>
                                            <th>B</th>
                                            <th>O</th>
                                            <th>AB</th>

                                            <!-- <th>Action</th> -->
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="bg-secondary">{{$stok[0]->jenis}}</td>
                                                <td>{{$stok[0]->stock_current}}</td>
                                                <td>{{$stok[1]->stock_current}}</td>
                                                <td>{{$stok[2]->stock_current}}</td>
                                                <td>{{$stok[3]->stock_current}}</td>
                                                <!-- <td><a class="btn btn-warning btn-sm edit" href="#">
                                                        <i class="fas fa-pen"></i>
                                                        EDIT
                                                    </a> | <a class="btn btn-primary btn-sm " href="#">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </a></td> -->
                                            </tr>
                                            <tr>
                                                <td class="bg-danger">Stock OUT</td>
                                                <td>{{$stok[0]->stock_out}}</td>
                                                <td>{{$stok[1]->stock_out}}</td>
                                                <td>{{$stok[2]->stock_out}}</td>
                                                <td>{{$stok[3]->stock_out}}</td>
                                                <!-- <td></td> -->
                                            </tr>
                                            <tr>
                                                <td class="bg-success">Stock IN</td>
                                                <td>{{$stok[0]->stock_in}}</td>
                                                <td>{{$stok[1]->stock_in}}</td>
                                                <td>{{$stok[2]->stock_in}}</td>
                                                <td>{{$stok[3]->stock_in}}</td>
                                                <!-- <td></td> -->
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-5 ml-3">
                                    <!-- general form elements -->
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">Tambah Stok Darah</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form action="" method="" class="inputstok">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Golongan Darah</label>
                                                    <select class="form-control" name="golongan_darah" id="golongan_darah">
                                                        <option value="A">A</option>
                                                        <!-- <option value="A/+">A/+</option> -->
                                                        <!-- <option value="A/-">A/-</option> -->
                                                        <option value="B">B</option>
                                                        <!-- <option value="B/+">B/+</option>
                                                        <option value="B/-">B/-</option> -->
                                                        <option value="O">O</option>
                                                        <!-- <option value="O/+">O/+</option>
                                                        <option value="O/-">O/-</option> -->
                                                        <option value="AB">AB</option>
                                                        <!-- <option value="AB/+">AB/+</option>
                                                        <option value="AB/-">AB/-</option> -->

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Jenis Darah</label>
                                                    <select class="form-control" name="jenis_darah" id="jenis_darah">
                                                    <option value="PRC">PRC</option>
                                                        <!-- <option value="WB">WB</option>
                                                        <option value="TC">TC</option>
                                                        <option value="FFP">FFP</option>
                                                        <option value="Rhesus Negatif">Rhesus Negatif</option>
                                                        <option value="PRC LEUCODEPLETED">PRC LEUCODEPLETED</option> -->
                                                    </select>
                                                    <!-- <label for="exampleInputPassword1">Barcode</label>
                                                    <input type="text" class="form-control" value="" name="keterangan_darah" id="keterangan_darah"> -->
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label for="exampleInputPassword1">Expired Date</label>
                                                    <input type="date" class="form-control" autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal" name="tanggal_exp" id="tanggal_exp">
                                                </div> -->
                                                <div class="form-group">
                                                    <label>qty</label>
                                                    <input type="text" class="form-control" value="" name="qty_darah" id="qty_darah">
                                                </div>

                                            </div>
                                            <!-- /.card-body -->

                                            <div class="card-footer">
                                                <button type="button" class="btn btn-warning mb-2 simpanstokdarah" id="simpanstokdarah">Simpan</button>

                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.card -->


                                </div>
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


<div id="output"> </div>


<script src="{{ asset('public/semeru/plugins/daterangepicker/daterangepicker.js') }}"></script>

<script>
    spinner = $('#loader2');
    spinner.hide();
    document.getElementById('tanggal_kunjungan').valueAsDate = new Date()
    document.getElementById('tanggal_kunjungann').valueAsDate = new Date()
    document.getElementById('tanggal_order').valueAsDate = new Date()
    document.getElementById('tanggal_order1').valueAsDate = new Date()
    document.getElementById('tanggal_obat').valueAsDate = new Date()
    document.getElementById('tanggal_exp').valueAsDate = new Date()
</script>
<script>
    // $(document).ready(function() {
    //     window.setTimeout(function() {
    //         ambildata()

    //     }, 30000);

    // });
    $(function() {
        $("#datapasienbnd").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $(function() {
        $("#tabelstok").DataTable({
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
    $('#datapendaftaran').on('click', '.terpilihpasien', function() {
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
            url: " {{ route('detailpasienbnd') }}",
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

    $(".returorderbnd").click(function() {
        var $row = $(this).closest("tr");
        var kodepenjamin = $row.find(".kodepenjamin").text();
        var kodekunjungan = $row.find(".kodekunjungan").text();
        var counter = $row.find(".counter").text();
        var statuspembayaran = $row.find(".statuspembayaran").text();
        var iddet = $row.find(".iddet").text();
        var kodeheader = $row.find(".kodeheader").text();
        var idhed = $row.find(".idhed").text();
        var tglinput = $row.find(".tgl_input").text();
        var norm = $row.find(".norm").text();
        var namatarif = $row.find(".namatarif").text();
        var totallayanan = $row.find(".totallayanan").text();
        var idlayanandetail = $row.find(".idlayanandetail").text();
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
                        statuspembayaran,
                        iddet,
                        kodeheader,
                        idhed,
                        tglinput,
                        norm,
                        namatarif,
                        totallayanan,
                        idlayanandetail,
                        gt
                    },
                    url: '<?= route('returorderbnd') ?>',
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

    $(".simpanstokdarah").click(function() {
        var data = $('.inputstok').serializeArray();



        Swal.fire({
            title: "Yakin Simpan Stok?",
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

                    },
                    url: '<?= route('simpanstokdarah') ?>',
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

                            ambilstok()


                        }
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
            url: " {{ route('datapasienbankdarah') }}",
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

    function ambilstok() {

        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",
            },
            type: "post",
            url: " {{ route('ambilstok') }}",
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.tablestokdarah').html(response);


            }
        });
    }

    function ambildata() {

        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",
            },
            type: "post",
            url: " {{ route('ambildatabankdarah') }}",
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


    function cariordertanggalbnd() {
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
            url: " {{ route('caritanggalbnd') }}",
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



    function caripasienbnd() {
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
            url: "{{ route('caripasienpendaftaranbnd') }}",
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


    $(".printorderbnd").click(function() {
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
                    url: '<?= route('printulangbnd') ?>',
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
                        bndnota(data.idhed, data.kode_header)
                    }
                });
            }
        })
        return false;
    });

    function bndnota(idhed, kode_header) {
        window.open('bndnotaorder/' + kode_header + '/' + idhed);
    }
</script>
@endsection