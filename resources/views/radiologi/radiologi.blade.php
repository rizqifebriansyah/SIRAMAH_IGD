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
    <div class="col-sm-11 " style="margin-left:30px">
        <h4 class="nprinsley-text-glitchan">DATA KUNJUNGAN PASIEN</h4>

        <div class="container" style="margin-top:15px ;">
            <div class="row">
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="tanggal_kunjungann" autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal">
                </div>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="tanggal_kunjungan" autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal">
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
                    <tr index="{{ $i }}" kelas="{{ $pk->kelas }}" kode_kunjungan="{{ $pk->kode_kunjungan }}" kelas_unit="{{ $pk->kelas_unit }}" nama_unit="{{ $pk->nama_unit }}" no_rm="{{ $pk->no_rm }}" nama_px="{{ $pk->nama_px }}" jenis_kelamin="{{ $pk->jenis_kelamin }}" nama_penjamin="{{ $pk->nama_penjamin }}" dokter="{{ $pk->nama_dokter }}" nama_penjamin="{{ $pk->nama_penjamin }}" kode_penjamin="{{ $pk->kode_penjamin }}" alamat="{{ $pk->alamat }}" diagx="{{ $pk->DIAGX }}" class="terpilihpasien toastsDefaultSuccess @if($pk->orderan == 1) bg-danger @else @endif">
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
    <div class="billingview">

    </div>
</div>



<script>
    spinner = $('#loader2');
    spinner.hide();
    document.getElementById('tanggal_kunjungan').valueAsDate = new Date()
    document.getElementById('tanggal_kunjungann').valueAsDate = new Date()
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

                $('.billingview').html(response);

            }
        });
    });
</script>
@endsection