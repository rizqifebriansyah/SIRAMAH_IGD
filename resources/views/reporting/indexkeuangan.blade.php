@extends('reporting.header')
@section('container')

<div class="card-body">
    <div class="row" style="align-content: 10px;">
        <h4 class="col-md-2">DASHBOARD</h4>

    </div>
    <div class="row">
        <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Rp. 1.000.000.000.000</h3>
                    <p>Available Balance</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
                <div class="inner">
                    <h3>Rp. 7.900.000.000</h3>
                    <p>Income BPJS Bulan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>Rp. 7.900.000.000</h3>
                    <p>Income UMUM</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
        </div>
        <div class="col-lg-3 col-6">

            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>Rp. 2.000.000</h3>
                    <p>Loan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
        </div>
    </div>
    <div class="row">
        <h5 class="col-md-12">Money Source</h5>

        <div class="col-md-4">
            <div class="info-box mb-3 bg-warning">
                <span class="info-box-icon"><i class="fas fa-clipboard-list"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Piutang</span>
                    <span class="info-box-number">Rp. 250.000.000</span>
                </div>

            </div>
            <div class="info-box mb-3 bg-success">
                <span class="info-box-icon"><i class="fas fa-money-bill-wave"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">BPJS CLAIM</span>
                    <span class="info-box-number">Rp. 7.900.000.000</span>
                </div>

            </div>
            <div class="info-box mb-3 bg-danger">
                <span class="info-box-icon"><i class="fas fa-business-time"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">BPJS PENDING</span>
                    <span class="info-box-number">Rp. 2.100.000.000</span>
                </div>

            </div>
            <div class="info-box mb-3 bg-primary">
                <span class="info-box-icon"><i class="far fa-comment"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Direct Messages</span>
                    <span class="info-box-number">163,921</span>
                </div>

            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Sales</h3>
                        <a href="javascript:void(0);">View Report</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <p class="d-flex flex-column">
                            <span class="text-bold text-lg">$18,230.00</span>
                            <span>Sales Over Time</span>
                        </p>
                        <p class="ml-auto d-flex flex-column text-right">
                            <span class="text-success">
                                <i class="fas fa-arrow-up"></i> 33.1%
                            </span>
                            <span class="text-muted">Since last month</span>
                        </p>
                    </div>

                    <div class="position-relative mb-4">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas id="sales-chart" height="200" style="display: block; width: 495px; height: 200px;" width="495" class="chartjs-render-monitor"></canvas>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <span class="mr-2">
                            <i class="fas fa-square text-primary"></i> This year
                        </span>
                        <span>
                            <i class="fas fa-square text-gray"></i> Last year
                        </span>
                    </div>
                </div>
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