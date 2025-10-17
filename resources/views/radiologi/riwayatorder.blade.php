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
  <h1>Masuk</h1>
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