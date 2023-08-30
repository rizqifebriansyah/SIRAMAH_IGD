@extends('antrian.header')

@section('container')
<div class="row antrian" style="margin-top:130px">
    <div class="col-lg-4 col-4 jumlahpasien" style="margin-left: 30px;">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>120</h3>

                <p>Pasien IGD Hari Ini</p>
            </div>
            <div class="icon">
                <i class="ion ion-book"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-4 jumlahorder">
        <!-- small box -->
        <div class="small-box bg-success ">
            <div class="inner">
                <h3>150</h3>

                <p>ANTRIAN IGD</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-4 jumlahorderpasien">
        <!-- small box -->
        <div class="small-box bg-warning ">
            <div class="inner">
                <h3>102</h3>

                <p>Jumlah Antrian Selesai </p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="row" style="margin-left: 30px;">
        <div class="col-md-6">
            <table id="datapendaftaran" class="table tabl6644e-sm text-sm  table-bordered table-hover">
                <thead class="bg-warning">
                    <th>Tgl</th>
                    <th>No Antrian</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    <tr>
                        <td>2023-02-08 </td>
                        <td>IGDU230201000001 </td>
                        <td><a class=" btn btn-success btn-sm printorderrad" href="#">
                                <i class="" aria-hidden="true">Selesai</i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2023-02-08 </td>
                        <td>IGDU230201000002 </td>
                        <td><a class=" btn btn-success btn-sm printorderrad" href="#">
                                <i class="" aria-hidden="true">Selesai</i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2023-02-08 </td>
                        <td>IGDU230201000011 </td>
                        <td><a class=" btn btn-warning btn-sm printorderrad" href="#">
                                <i class="" aria-hidden="true">Belum Selesai</i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2023-02-08 </td>
                        <td>IGDU230201000003 </td>
                        <td><a class=" btn btn-success btn-sm printorderrad" href="#">
                                <i class="" aria-hidden="true">Selesai</i>

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2023-02-08 </td>
                        <td>IGDU230201000021 </td>
                        <td><a class=" btn btn-warning btn-sm printorderrad" href="#">
                                <i class="" aria-hidden="true">Belum Selesai</i>

                            </a>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
    <div class="col-md-4">
        <a class="btn  bg-primary">
            <h1>Ambil Antrian</h1>
        </a>
    </div>
</div>

<script>
    spinner = $('#loader2');
    spinner.hide();
    $(function() {
        $("#datapendaftaran").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
</script>
@endsection