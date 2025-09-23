@extends('poli.header')
@section('container')

<div class="card-body">
    <div class="row" style="align-content: 10px;">
        <h4 class="col-md-2">DASHBOARD</h4>

    </div>
    <div class="row center" style="align-content:center; margin-top: 10px">

        <div class="col-sm-2">
            <select class="form-control select2" name="kodeunit" id="kodeunit">
                <option value=""> -- Pilih POLI --</option>
                @foreach($poli as $po => $p)
                <option value="{{$p->kode_unit}}">{{$p->nama_unit}}
                </option>
                @endforeach


            </select>
        </div>
        <div class="col-sm-2">
            <input type="date" class="form-control" name="tanggal_visit" id="tanggal_visit" autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal">
        </div>

        <div class="col-sm-2">
            <input type="date" class="form-control" name="tanggal_visit1" id="tanggal_visit1" autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal">
        </div>

        <div>
            <button type="submit" class="btn btn-info" onclick="carilaporanpoli()"> <i class="bi bi-search-heart"></i> </button>
            <button type="submit" class="btn btn-danger cetakkarcistindakan"> <i class="fa fa-print"></i> Karcis  </button>
            <button type="submit" class="btn btn-warning cetaktindakan"> <i class="fa fa-print"></i> Tindakan  </button>
            <button type="submit" class="btn btn-success cetakpendapatan"> <i class="fa fa-print"></i> Pendapatan  </button>


        </div>
    </div>

    <div class="laporanpoliview">

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

    function carilaporanpoli() {
        spinner = $('#loader2');
        spinner.show();
        kodeunit = $('#kodeunit').val()
        tanggalvisit = $('#tanggal_visit').val()
        tanggalvisit1 = $('#tanggal_visit1').val()


        $.ajax({
            type: "post",
            data: {
                _token: " {{ csrf_token() }}",
                kodeunit,
                tanggalvisit,
                tanggalvisit1

            },
            url: " {{ route('carilaporanpoli') }}",
            error: function(data) {
                spinner.hide();

                alert('error!!!')
            },
            success: function(response) {
                spinner.hide();

                $('.laporanpoliview').html(response);
            }
        })

    }
    $(".cetakkarcistindakan").click(function() {
        kodeunit = $('#kodeunit').val()
        tanggalvisit = $('#tanggal_visit').val()
        tanggalvisit1 = $('#tanggal_visit1').val()



        Swal.fire({
            title: "Apakah ingin print Rekap Karcis Tindakan?",
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

                        kodeunit,
                        tanggalvisit,
                        tanggalvisit1

                    },
                    url: '<?= route('cetakkarcistindakan') ?>',
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
                        cetakkarcistindakann(data.kodeunit, data.tanggalvisit, data.tanggalvisit1)

                    }
                });
            }
        })
        return false;
    });


    function cetakkarcistindakann(kodeunit, tanggalvisit,tanggalvisit1) {
        window.open('cetakkarcistindakann/' + kodeunit + '/' + tanggalvisit + '/' + tanggalvisit1);

    }

    $(".cetaktindakan").click(function() {
        kodeunit = $('#kodeunit').val()
        tanggalvisit = $('#tanggal_visit').val()
        tanggalvisit1 = $('#tanggal_visit1').val()



        Swal.fire({
            title: "Apakah ingin print Rekap Tindakan?",
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

                        kodeunit,
                        tanggalvisit,
                        tanggalvisit1

                    },
                    url: '<?= route('cetaktindakan') ?>',
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
                        cetaktindakann(data.kodeunit, data.tanggalvisit, data.tanggalvisit1)

                    }
                });
            }
        })
        return false;
    });


    function cetaktindakann(kodeunit, tanggalvisit,tanggalvisit1) {
        window.open('cetaktindakann/' + kodeunit + '/' + tanggalvisit + '/' + tanggalvisit1);

    }
    $(".cetakpendapatan").click(function() {
        kodeunit = $('#kodeunit').val()
        tanggalvisit = $('#tanggal_visit').val()
        tanggalvisit1 = $('#tanggal_visit1').val()



        Swal.fire({
            title: "Apakah ingin print Pendapatan?",
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

                        kodeunit,
                        tanggalvisit,
                        tanggalvisit1

                    },
                    url: '<?= route('cetakpendapatan') ?>',
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
                        cetakpendapatann(data.kodeunit, data.tanggalvisit, data.tanggalvisit1)

                    }
                });
            }
        })
        return false;
    });


    function cetakpendapatann(kodeunit, tanggalvisit,tanggalvisit1) {
        window.open('cetakpendapatann/' + kodeunit + '/' + tanggalvisit + '/' + tanggalvisit1);

    }
</script>

@endsection