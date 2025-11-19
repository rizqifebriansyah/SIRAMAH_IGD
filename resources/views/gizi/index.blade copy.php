@extends('gizi.header')
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


<div class="row coba" style="margin-top:130px">
   
    <div id="pasienpilihan" class="pasienpilihan row" style="margin-top:50px ;">

    </div>
    <div id="pasiendetail" class="pasiendetail col-12" style="margin-top:50px ;">

    </div>


    <div class="col-md-11">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#datapasien" data-toggle="tab">ORDER MAKAN GIZI</a></li>
                    <li class="nav-item"><a class="nav-link" href="#order" data-toggle="tab">ORDER MAKAN RUANGAN</a></li>

                    <li class="nav-item"><a class="nav-link" href="#riwayat" data-toggle="tab">Riwayat Billing Gizi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#riwayatorder" data-toggle="tab">Riwayat ORDER MAKAN Gizi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#orderhariini" data-toggle="tab">ORDERAN HARI INI</a></li>




                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="datapasien">
                        <h4 class="nprinsley-text-glitchan">DATA PASIEN RAWAT INAP</h4>

                        <div class="container" style="margin-top:15px ;">
                            <div class="row">
                                <div class="col-md-11">
                                    <label for="">NAMA RUANGAN</label>
                                    <select class="form-control select2" name="unit" id="unit">
                                        <option value=""> -- Pilih Ruangan --</option>
                                        @foreach ($unit as $un => $u)
                                        <option value="{{$u->kode_unit}}">{{$u->nama_unit}}
                                        </option>
                                        @endforeach


                                    </select>
                                </div>
                                <div class="mt-4">

                                    <button type="submit" class="btn btn-primary" onclick="caripasienranap()"> <i class="bi bi-search-heart"></i> </button>

                                </div>
                            </div>
                        </div>

                        <div class="tablependaftaran">

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

                                    <div class="col-sm-3 ">
                                        <input type="date" class="form-control " autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal" name="tanggal_order" id="tanggal_order">
                                    </div>
                                    <div class="col-sm-3 ">
                                        <input type="date" class="form-control " autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal" name="tanggal_order1" id="tanggal_order1">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary" onclick="cariordertanggallab()"> <i class="bi bi-search-heart"></i>
                                        </button>
                                        <a style="margin-left: 32px;" rel="noopener" href="{{ route('gizi')}}" class="btn btn-primary"><i class="fas fa-sync-alt fa-spin"></i> Reload
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="container ordertable" style="margin-top:15px ;">
                                <table id="datapasienorder" class="table datapasienorder table-sm text-sm table-bordered table-hover">
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
                                        <th>Tanggal Masuk</th>
                                        <th>Nomor RM</th>
                                        <th>Nama</th>
                                        <th>Nama Layanan</th>
                                        <th>Total</th>
                                        <th>action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($pasienorderlab as $i=>$key)
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
                                            <td hidden class="idlayanandetail">{{ $key->id_layanan_detail}}</td>
                                            <td hidden>{{ $i}}</td>
                                            <td class="tgl_input">{{ $key-> tgl_INPUT }}</td>
                                            <td class="norm">{{ $key-> NO_RM }}</td>
                                            <td class="namapx"> {{ $key->NAMA_PX}} </td>
                                            <td class="namatarif"> {{ $key->NAMA_TARIF}} </td>
                                            <td class="gt"> {{ $key->grantotal_layanan}} </td>
                                            <td><a class="btn btn-warning btn-sm returorderlabo" href="#">
                                                    <i class="fas fa-sync-alt fa-spin"></i>
                                                    RETUR
                                                </a> ||
                                                <a class="btn btn-primary btn-sm printorderlabo" href="#">
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
                    <div class="tab-pane" id="order">
                        <form id="dynamic-form" class="formordergiziruangan">

                            <div class="field_wrapperrr">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3"><label for="">Nama Pasien</label>
                                            <select class="form-control  select2" name="norm" id="norm" placeholder="Cari opsi...">
                                                @foreach ($pasienranap as $i => $p) <option value="{{ $p->no_rm }}">{{ $p->nama_px }} </option> @endforeach

                                            </select>

                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Waktu Makan</label>
                                            <select class="form-control  select2" name="waktumakan" id="waktumakan" placeholder="Cari opsi...">
                                                <option>--- PILIH WAKTU MAKAN ---</option>
                                                <option value="MAKAN PAGI">MAKAN PAGI</option>
                                                <option value="MAKAN SIANG">MAKAN SIANG</option>
                                                <option value="MAKAN MALAM">MAKAN MALAM</option>



                                            </select>

                                        </div>
                                        <div class="col-md-3">
                                            <label for="">MENU DIET</label>
                                            <select class="form-control  select2" name="diet" id="diet" placeholder="Cari opsi...">
                                                <option>--- PILIH MENU DIET ---</option>
                                                <option value="Makanan Biasa">Makanan Biasa</option>
                                                <option value="Makanan Tim">Makanan Tim</option>
                                                <option value="Makanan Lunak">Makanan Lunak</option>
                                                <option value="Makanan Saring">Makanan Saring</option>
                                                <option value="Makanan Cair">Makanan Cair</option>
                                                <option value="Bubur Kecap">Bubur Kecap</option>
                                                <option value="Blenderize">Blenderize</option>
                                                <option value="PASI/ASI">PASI/ASI</option>
                                                <option value="F75">F75</option>
                                                <option value="F100">F100</option>
                                                <option value="Puasa">Puasa</option>
                                                <option value="DM">DM</option>
                                                <option value="DM RG">DM RG</option>
                                                <option value="DM RP">DM RP</option>
                                                <option value="DM RL">DM RL</option>
                                                <option value="DM RS">DM RS</option>
                                                <option value="DM TS">DM TS</option>
                                                <option value="DM TP">DM TP</option>
                                                <option value="DM DJ">DM DJ</option>
                                                <option value="DM Rpur">DM Rpur</option>
                                                <option value="DM RK">DM RK</option>
                                                <option value="DM TK">DM TK</option>
                                                <option value="DM DH">DM DH</option>
                                                <option value="RG">RG</option>
                                                <option value="RG RP">RG RP</option>
                                                <option value="RG RL">RG RL</option>
                                                <option value="RP RS">RP RS</option>
                                                <option value="RP TS">RP TS</option>
                                                <option value="RP RK">RP RK</option>
                                                <option value="RP Rpur">RP Rpur</option>
                                                <option value="DJ">DJ</option>
                                                <option value="DJ RP">DJ RP</option>
                                                <option value="DJ RS">DJ RS</option>
                                                <option value="DJ TS">DJ TS</option>
                                                <option value="DJ Rpur">DJ Rpur</option>
                                                <option value="DJ RK">DJ RK</option>
                                                <option value="DJ TK">DJ TK</option>
                                                <option value="DJ DH">DJ DH</option>
                                                <option value="DH">DH</option>
                                                <option value="DH RG">DH RG</option>
                                                <option value="DH TP">DH TP</option>
                                                <option value="DH RS">DH RS</option>
                                                <option value="DH TS">DH TS</option>
                                                <option value="DH RK">DH RK</option>
                                                <option value="DH TK">DH TK</option>
                                                <option value="DH Rpur">DH Rpur</option>
                                                <option value="RS">RS</option>
                                                <option value="TS">TS</option>
                                                <option value="TINGGI PROTEIN">TINGGI PROTEIN</option>
                                                <option value="TKTP">TKTP</option>
                                                <option value="TKTP RG">TKTP RG</option>
                                                <option value="TKTP RL">TKTP RL</option>
                                                <option value="TKTP RS">TKTP RS</option>
                                                <option value="TKTP TS">TKTP TS</option>
                                                <option value="TKTP DH">TKTP DH</option>
                                                <option value="TKTP Rpur">TKTP Rpur</option>
                                                <option value="TKTP RK">TKTP RK</option>
                                                <option value="TKTP TK">TKTP TK</option>
                                            </select>
                                            <label for="">LAIN</label>

                                            <input type="text" name="diet1" id="diet1" class="form-control">
                                        </div>

                                        <div class="col-md-2">
                                            <a class="btn btn-success" href="javascript:void(0);" id="add_button" title="Add field">TAMBAH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div type="button" class="btn float-right btn-success simpanordergiziruangan mt-3 mb-3 mr-3">
                                SIMPAN
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane " id="riwayatorder">


                        <h4 class="nprinsley-text-glitchan">RIWAYAT ORDER GIZI</h4>


                        <div class="row ">


                            <div class="col-sm-4">
                                <label for="">NAMA RUANGAN</label>
                                <select class="form-control select2" name="namaunit" id="namaunit">
                                    <option value=""> -- Pilih Ruangan --</option>
                                    @foreach ($unit as $un => $u)
                                    <option value="{{$u->kode_unit}}">{{$u->nama_unit}}
                                    </option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Waktu Makan</label>
                                <select class="form-control  select2" name="waktumakanorder" id="waktumakanorder" placeholder="Cari opsi...">
                                    <option>--- PILIH WAKTU MAKAN ---</option>
                                    <option value="MAKAN PAGI">MAKAN PAGI</option>
                                    <option value="MAKAN SIANG">MAKAN SIANG</option>
                                    <option value="MAKAN MALAM">MAKAN MALAM</option>



                                </select>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary mt-4" onclick="cariordermakan()"> <i class="bi bi-search-heart"></i>
                                </button>

                            </div>

                        </div>
                        <div class="tableordermakan">

                        </div>



                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane " id="orderhariini">


                        <h4 class="nprinsley-text-glitchan">RIWAYAT ORDER GIZI</h4>


                        <div class="row ">


                            <div class="col-sm-4 ">
                                <input type="date" class="form-control " autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal" name="order_tanggal" id="order_tanggal">
                            </div>
                            <div class="col-sm-4 ">
                                <input type="date" class="form-control " autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal" name="order_tanggal1" id="order_tanggal1">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary" onclick="cariordertanggallab()"> <i class="bi bi-search-heart"></i>
                                </button>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class=" ordertable" style="margin-top:15px ;">
                                    <h5>RIWAYAT ORDER MAKAN PAGI</h5>
                                    <table id="tablemakanpagi" class="table tablemakanpagi table-sm text-sm table-bordered table-hover">
                                        <thead class="bg-info">

                                            <th>Nomor RM</th>

                                            <th>Nama Pasien</th>
                                            <th>Waktu Makan</th>
                                            <th>Menu DIET</th>
                                            <th>Kamar & no Bed</th>
                                            <th>Ruangan</th>
                                            <th>status</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($pagi as $pgi => $pg)
                                            <tr>
                                                <td>{{$pg->no_rm}}</td>
                                                <td>{{$pg->nama_pasien}}</td>
                                                <td>{{$pg->waktu_makan}}</td>
                                                <td>{{$pg->diit}}</td>
                                                <td>{{$pg->kamar}} / {{$pg->no_bed}}</td>
                                                <td>{{$pg->kode_unit}}</td>
                                                <td> @if ($pg->status == 1)
                                                    <p class="badge badge-danger">belum di proses</p>
                                                    @elseif ($pg->status == 2)
                                                    <p class="badge badge-warning">Proses Pembuatan</p>
                                                    @elseif ($pg->status == 3)
                                                    <p class="badge badge-info">Proses Penyajian</p>
                                                    @elseif ($pg->status == 4)
                                                    <p class="badge badge-primary">Proses Selesai</p>
                                                    @endif</td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class=" ordertable" style="margin-top:15px ;">
                                    <h5>RIWAYAT ORDER MAKAN SIANG</h5>

                                    <table id="tablemakansiang" class="table tablemakansiang table-sm text-sm table-bordered table-hover">
                                        <thead class="bg-warning">

                                            <th>Nomor RM</th>

                                            <th>Nama Pasien</th>
                                            <th>Waktu Makan</th>
                                            <th>Menu DIET</th>
                                            <th>Kamar & no Bed</th>
                                            <th>Ruangan</th>
                                            <th>Status</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($siang as $sia => $si)
                                            <tr>
                                                <td>{{$si->no_rm}}</td>
                                                <td>{{$si->nama_pasien}}</td>
                                                <td>{{$si->waktu_makan}}</td>
                                                <td>{{$si->diit}}</td>
                                                <td>{{$si->kamar}} / {{$si->no_bed}}</td>
                                                <td>{{$si->kode_unit}}</td>
                                                <td> @if ($si->status == 1)
                                                    <p class="badge badge-danger">belum di proses</p>
                                                    @elseif ($si->status == 2)
                                                    <p class="badge badge-warning">Proses Pembuatan</p>
                                                    @elseif ($si->status == 3)
                                                    <p class="badge badge-info">Proses Penyajian</p>
                                                    @elseif ($si->status == 4)
                                                    <p class="badge badge-primary">Proses Selesai</p>
                                                    @endif</td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class=" ordertable" style="margin-top:15px ;">
                                    <h5>RIWAYAT ORDER MAKAN SORE</h5>

                                    <table id="tablemakanmalam" class="table tablemakanmalam table-sm text-sm table-bordered table-hover">
                                        <thead class="bg-success">

                                            <th>Nomor RM</th>

                                            <th>Nama Pasien</th>
                                            <th>Waktu Makan</th>
                                            <th>Menu DIET</th>
                                            <th>Kamar & no Bed</th>
                                            <th>Ruangan</th>
                                            <th>status</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($malam as $mlm => $ml)
                                            <tr>
                                                <td>{{$ml->no_rm}}</td>
                                                <td>{{$ml->nama_pasien}}</td>
                                                <td>{{$ml->waktu_makan}}</td>
                                                <td>{{$ml->diit}}</td>
                                                <td>{{$ml->kamar}} / {{$ml->no_bed}}</td>
                                                <td>{{$ml->kode_unit}}</td>
                                                <td> @if ($ml->status == 1)
                                                    <p class="badge badge-danger">belum di proses</p>
                                                    @elseif ($ml->status == 2)
                                                    <p class="badge badge-warning">Proses Pembuatan</p>
                                                    @elseif ($ml->status == 3)
                                                    <p class="badge badge-info">Proses Penyajian</p>
                                                    @elseif ($ml->status == 4)
                                                    <p class="badge badge-primary">Proses Selesai</p>
                                                    @endif
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- /.tab-content -->

            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<div id="output"> </div>



<script>
    spinner = $('#loader2');
    spinner.hide();
    document.getElementById('order_tanggal').valueAsDate = new Date()
    document.getElementById('order_tanggal1').valueAsDate = new Date()
    document.getElementById('tanggal_order').valueAsDate = new Date()
    document.getElementById('tanggal_order1').valueAsDate = new Date()
</script>
<script>
    // $(document).ready(function() {
    //     window.setTimeout(function() {
    //         ambildata()

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
        $("#datapendaftaran").DataTable({
            "responsive": false,
            "lenghtChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $(function() {
        $("#tablemakanpagi").DataTable({
            "responsive": false,
            "lenghtChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $(function() {
        $("#tablemakansiang").DataTable({
            "responsive": false,
            "lenghtChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $(function() {
        $("#tablemakanmalam").DataTable({
            "responsive": false,
            "lenghtChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });

    function cariordermakan() {
        spinner = $('#loader2');
        spinner.show();
        namaunit = $('#namaunit').val()
        waktumakanorder = $('#waktumakanorder').val()


        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                namaunit,
                waktumakanorder

            },
            url: "{{ route('cariordermakan') }}",
            error: function(data) {
                spinner.hide()
                alert('Errorrr!!!')
            },
            success: function(response) {
                spinner.hide();
                $('.tableordermakan').html(response);
            }
        })
    }

    function caripasienranap() {
        spinner = $('#loader2');
        spinner.show();
        unit = $('#unit').val()

        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                unit

            },
            url: "{{ route('caripasienranap') }}",
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
    $(document).ready(function() {
        var maxField = 10; //Input fields increment limitation
        var addButton = $('#add_button'); //Add button selector
        var wrapper = $('.field_wrapperrr'); //Input field wrapper
        var fieldHTML = '<div class="form-group add"><div class="row">';
        fieldHTML = fieldHTML + '<div class="col-md-3"><label for="">Nama Pasien</label><select class="form-control  select2" name="norm" id="norm" placeholder="Cari opsi..."> @foreach ($pasienranap as $i => $p) <option value="{{ $p->no_rm }}">{{ $p->nama_px }} </option> @endforeach </select> </div>';
        fieldHTML = fieldHTML + '<div class="col-md-3"><label for="">Waktu Makan</label><select class="form-control  select2" name="waktumakan" id="waktumakan" placeholder="Cari opsi..."><option>--- PILIH WAKTU MAKAN ---</option><option value="MAKAN PAGI">MAKAN PAGI</option><option value="MAKAN SIANG">MAKAN SIANG</option><option value="MAKAN MALAM">MAKAN MALAM</option></select></div>';
        fieldHTML = fieldHTML + ' <div class="col-md-3"><label for="">MENU DIET</label> <select class="form-control  select2" name="diet" id="diet" placeholder="Cari opsi..."><option>--- PILIH MENU DIET ---</option> <option value="Makanan Biasa">Makanan Biasa</option> <option value="Makanan Tim">Makanan Tim</option> <option value="Makanan Lunak">Makanan Lunak</option> <option value="Makanan Saring">Makanan Saring</option> <option value="Makanan Cair">Makanan Cair</option> <option value="Bubur Kecap">Bubur Kecap</option> <option value="Blenderize">Blenderize</option> <option value="PASI/ASI">PASI/ASI</option> <option value="F75">F75</option> <option value="F100">F100</option> <option value="Puasa">Puasa</option> <option value="DM">DM</option> <option value="DM RG">DM RG</option> <option value="DM RP">DM RP</option> <option value="DM RL">DM RL</option> <option value="DM RS">DM RS</option> <option value="DM TS">DM TS</option> <option value="DM TP">DM TP</option> <option value="DM DJ">DM DJ</option> <option value="DM Rpur">DM Rpur</option> <option value="DM RK">DM RK</option> <option value="DM TK">DM TK</option> <option value="DM DH">DM DH</option> <option value="RG">RG</option> <option value="RG RP">RG RP</option> <option value="RG RL">RG RL</option> <option value="RP RS">RP RS</option> <option value="RP TS">RP TS</option> <option value="RP RK">RP RK</option> <option value="RP Rpur">RP Rpur</option> <option value="DJ">DJ</option> <option value="DJ RP">DJ RP</option> <option value="DJ RS">DJ RS</option> <option value="DJ TS">DJ TS</option> <option value="DJ Rpur">DJ Rpur</option> <option value="DJ RK">DJ RK</option> <option value="DJ TK">DJ TK</option> <option value="DJ DH">DJ DH</option> <option value="DH">DH</option> <option value="DH RG">DH RG</option> <option value="DH TP">DH TP</option> <option value="DH RS">DH RS</option> <option value="DH TS">DH TS</option> <option value="DH RK">DH RK</option> <option value="DH TK">DH TK</option> <option value="DH Rpur">DH Rpur</option> <option value="RS">RS</option> <option value="TS">TS</option> <option value="TINGGI PROTEIN">TINGGI PROTEIN</option> <option value="TKTP">TKTP</option> <option value="TKTP RG">TKTP RG</option> <option value="TKTP RL">TKTP RL</option> <option value="TKTP RS">TKTP RS</option> <option value="TKTP TS">TKTP TS</option> <option value="TKTP DH">TKTP DH</option> <option value="TKTP Rpur">TKTP Rpur</option> <option value="TKTP RK">TKTP RK</option> <option value="TKTP TK">TKTP TK</option></select><label for="">LAIN</label><input type="text" name="diet1" id="diet1" class="form-control"></div>';
        fieldHTML = fieldHTML + '<div class="col-md-2"><a href="javascript:void(0);" class="remove_button btn btn-danger">HAPUS</a></div>';
        fieldHTML = fieldHTML + '</div></div>';
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function() {
            //Check maximum number of input fields
            if (x < maxField) {
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e) {
            e.preventDefault();
            $(this).parent('').parent('').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
    $(".simpanordergiziruangan").click(function() {
        // var data = $('.formtindakandokter').serializeArray();
        var formordergiziruangan = $('.formordergiziruangan').serializeArray();

        Swal.fire({
            title: "Yakin Simpan Assesmen?",
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
                        // data: JSON.stringify(data),
                        formordergiziruangan: JSON.stringify(formordergiziruangan),


                    },
                    url: '<?= route('simpanorderruangan') ?>',

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
@endsection