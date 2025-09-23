@extends('reporting.header')
@section('container')

<div class="card-body">
    <div class="row" style="align-content: 10px;">
        <h4 class="col-md-2">DASHBOARD</h4>

    </div>
    <div class="row">
        <div class="col-lg-6 col-6">

            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>Kunjungan Pasien Rawat Jalan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-6 col-6">

            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53</h3>
                    <p>Kunjungan Pasien Rawat Inap</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        

    </div>

</div>
<script>
    spinner = $('#loader2');
    spinner.hide();
</script>
<script>
    document.getElementById('tanggal_kunjungan').valueAsDate = new Date()
    $(function() {
        $("#datapasien").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });

    $('#formtambahpasien').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('isi')
        var modal = $(this)

        modal.find('.modal-body input').val(recipient)
    });
</script>

@endsection