@extends('radiologi.header')
@section('container')

<div class="col-sm-11 " style="margin-left:30px">
    <h4 class="nprinsley-text-glitchan">DATA REUTR PASIEN</h4>

    <div class="container" style="margin-top:15px ;">
        <div class="row">
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tanggal_kunjungann" autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal">
            </div>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tanggal_kunjungan" autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal">
            </div>
            <div>
                <button type="submit" class="btn btn-primary" onclick="caririwayatretur()"> <i class="bi bi-search-heart"></i>
                </button>
                <a style="margin-left: 32px;" rel="noopener" href="{{ route('riwayatretur')}}" class="btn btn-primary"><i class="fas fa-sync-alt fa-spin"></i> Reload
                </a>
            </div>

        </div>
    </div>
    <div class="container tableretur" style="margin-top:15px ;">

        <table id="pasienretur" class="table pasienretur mt-2  table-sm text-sm table-bordered table-hover ">
            <thead class="bg-warning">

                <th>Tanggal Retur</th>

                <th>KODE LAYANAN HEADER</th>
                <th>Nama Pasien</th>
                <th>TINDAKAN</th>
                <th>Total</th>

            </thead>
            <tbody>
                @foreach ($hasil as $key=>$h)
                <tr>
                    <td class="alamat" style="font-size: large;"> {{ $h->tgl_retur}}</td>

                    <td class="alamat" style="font-size: large;"> {{ $h->kode_layanan_header}}</td>
                    <td class="dokkirim" style="font-size: large;"> {{ $h->nama_pasien}}</td>
                    <td class="tgllahir" style="font-size: large;"> {{ $h->nama_tindakan}}</td>

                    <td class="norm" style="font-size: large;"> {{ $h->total_retur}}</td>



                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        spinner = $('#loader2');
        spinner.hide();
        document.getElementById('tanggal_kunjungan').valueAsDate = new Date()
        document.getElementById('tanggal_kunjungann').valueAsDate = new Date()
        $(function() {
            $("#pasienretur").DataTable({
                "responsive": false,
                "lengthChange": false,
                "pageLength": 5,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            });
        });

        function caririwayatretur() {
            spinner = $('#loader2');
            spinner.show();
            tanggal_kunjungan = $('#tanggal_kunjungan').val()
            tanggal_kunjungann = $('#tanggal_kunjungann').val()



            $.ajax({
                type: "post",
                data: {
                    _token: " {{ csrf_token() }}",
                    tanggal_kunjungan,
                    tanggal_kunjungann


                },
                url: " {{ route('caririwayatretur') }}",
                error: function(data) {
                    spinner.hide();
                    alert('error!!!')
                },
                success: function(response) {
                    spinner.hide();
                    $('.tableretur').html(response);
                }
            })

        }
    </script>

    @endsection