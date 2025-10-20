@extends('radiologi.header')
@section('container')
<style>
    .scroll {
        display: block;

        padding: 5px;
        margin-top: 5px;
        height: 900px;
        overflow: scroll;
    }

    .auto {
        display: block;
        border: 1px solid red;
        padding: 5px;
        margin-top: 5px;
        height: 900px;
        overflow: auto;
    }
</style>
<div class="card-body ">
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
                <a style="margin-left: 32px;" rel="noopener" href="{{ route('radiologi')}}" class="btn btn-primary"><i class="fas fa-sync-alt fa-spin"></i> Reload
                </a>
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

                            <div class="row">
                                <div class="col-md-2">
                                    @if ($key->DOKTER_HASIL >0)


                                    @else
                                    <a class=" btn btn-secondary btn-sm returorderrad" href="#">
                                        <i class="" aria-hidden="true">R</i>

                                    </a> <br>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    <a class=" btn btn-danger btn-sm printlabelrad" href="#">
                                        <i class="" aria-hidden="true">L</i>

                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a class=" btn btn-warning btn-sm printnotarad" href="#">
                                        <i class="" aria-hidden="true">N</i>

                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a class=" btn btn-success btn-sm printorderrad" href="#">
                                        <i class="" aria-hidden="true">A</i>
                                    </a>
                                </div>
                                <div class="col-md-2">
                                    <a class="detailbarang btn btn-info btn-sm" href="#">
                                        <i class="fas fa-eye"></i>

                                    </a>
                                </div>

                            </div>
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
    
</script>
@endsection