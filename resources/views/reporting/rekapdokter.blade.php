@extends('reporting.header')
@section('container')

<div class="card-body">
    <div class="row" style="align-content: 10px;">
        <h4 class="col-md-3">REKAP PENDAPATAN DOKTER</h4>

    </div>
    <div class="row center" style="align-content:center; margin-top: 10px">

        <div class="col-sm-4">
            <input class="form-control form-control-sm @error('namadokter') is-invalid @enderror" name="namadokter" id="namadokter" required />
            @error('unit')
            <small id="emailHelp" class="form-text text-danger">
                {{ $message }}</small>
            @enderror
        </div>
        <div class="col-sm-3">
            <input type="date" class="form-control" name="tanggal_visit" id="tanggal_visit" autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal">
        </div>

        <div class="col-sm-3">
            <input type="date" class="form-control" name="tanggal_visit1" id="tanggal_visit1" autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal">
        </div>

        <div>
            <button type="submit" class="btn btn-info" onclick="carirekapdokter()"> <i class="bi bi-search-heart"></i> </button>
        </div>
    </div>
    <div class="row datarekap" style="align-content: center; margin-top:20px">
      
    </div>
</div>
<script>
    spinner = $('#loader2');
    spinner.hide();
</script>
<script>
    document.getElementById('tanggal_visit').valueAsDate = new Date()
    document.getElementById('tanggal_visit1').valueAsDate = new Date()

    $(function() {
        $("#datapasien").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    function carirekapdokter() {
        spinner = $('#loader2');
        spinner.show();
        namadokter = $('#namadokter').val()
        tanggalvisit = $('#tanggal_visit').val()
        tanggalvisit1 = $('#tanggal_visit1').val()


        $.ajax({
            type: "post",
            data: {
                _token: " {{ csrf_token() }}",
                namadokter,
                tanggalvisit,
                tanggalvisit1

            },
            url: " {{ route('carirekapdokter') }}",
            error: function(data) {
                spinner.hide();

                alert('error!!!')
            },
            success: function(response) {
                spinner.hide();

                $('.datarekap').html(response);
            }
        })

    }
    $('#formtambahpasien').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('isi')
        var modal = $(this)

        modal.find('.modal-body input').val(recipient)
    });

    $(".preloader2").fadeOut();
    $(document).ready(function() {
        $('#namadokter').autocomplete({
            source: "<?= route('caridokterrekap') ?>",
            select: function(event, ui) {
                $('[id="namadokter"]').val(ui.item.label);
            }
        });
    });
</script>

@endsection