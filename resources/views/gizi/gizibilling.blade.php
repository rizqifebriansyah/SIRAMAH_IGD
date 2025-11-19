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
                    <button type="submit" class="btn btn-primary" onclick="cariordergizi()"> <i class="bi bi-search-heart"></i>
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
                    @foreach ($pasienordergizi as $i=>$key)
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