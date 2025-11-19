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
<div class="card">

    <div class="col-sm-11" style="margin-left:30px">



        <h4 class="nprinsley-text-glitchan">MONITORING ORDER GIZI</h4>


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
            <div class="col-md-11">
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
                                    @elseif ($pg->status == 11)
                                    <p class="badge badge-primary">Proses Selesai</p>
                                    @endif
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-11">
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
                                    @endif
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-11 mb-2">
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





<script>
    spinner = $('#loader2');
    spinner.hide();
    document.getElementById('order_tanggal').valueAsDate = new Date()
    document.getElementById('order_tanggal1').valueAsDate = new Date()
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



    function cariordergizi() {
        spinner = $('#loader2');
        spinner.show();
        tgl_entry = $('#tanggal_order').val()
        tgl_entry1 = $('#tanggal_order1').val()

        $.ajax({
            type: "post",
            data: {
                _token: " {{ csrf_token() }}",
                tgl_entry,
                tgl_entry1

            },
            url: " {{ route('cariordergizi') }}",
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
</script>

@endsection