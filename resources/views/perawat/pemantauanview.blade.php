@if ($unit == '1002')

<table id="datapemantauan" class="table ml-2 datapemantauan table-sm text-sm table-bordered table-hover">
    <thead class="bg-success">


        <th>tgl/waktu</th>
        <th>Dokter </th>
        <th>Waktu Jaga</th>
        <th>Perawat </th>
        <th>Waktu Jaga</th>
        <th>Kategori </th>
        <th>Diagnosa Kerja</th>

        <th>TD</th>
        <th>Nadi</th>

        <th>RR</th>
        <th>SUHU</th>

        <th>GCS</th>
        <th>PUPIL</th>

        <!-- <th>PU</th> -->
        <th>NYERI</th>



        <th>ACTION</th>
    </thead>
    <tbody>
        @foreach($hasilp as $lap => $l)
        <tr>
            <td>{{$l->tgl_input}}</td>
            <td>{{$l->dokter_jaga}}</td>
            <td>{{$l->waktu_jaga_dokter_pagi}}{{$l->waktu_jaga_dokter_siang}}{{$l->waktu_jaga_dokter_malam}}</td>
            <td>{{$l->perawat_jaga}}</td>
            <td>{{$l->waktu_jaga_perawat_pagi}}{{$l->waktu_jaga_perawat_siang}}{{$l->waktu_jaga_perawat_malam}}</td>
            <td>{{$l->kategori_pasien}}</td>
            <td>{{$l->diagnosa_kerja}}</td>

            <td>{{$l->td}}</td>
            <td>{{$l->nadi}}</td>
            <td>{{$l->rr}}</td>
            <td>{{$l->suhu}}</td>
            <td>{{$l->gcs}}</td>
            <td>{{$l->pupil}}</td>
            <td>{{$l->nyeri}}</td>
            <td><a class="btn btn-warning btn-sm " href="#">
                    <i class="fas fa-sync-alt fa-spin"></i>
                    RETUR
                </a></td>
        </tr>
        @endforeach

    </tbody>
</table>
@else
<table id="datapemantauan" class="table ml-2 datapemantauan table-sm text-sm table-bordered table-hover">
    <thead class="bg-success">


        <th>tgl/waktu</th>

        <th>Diagnosa Kerja</th>

        <th>TD</th>
        <th>Nadi</th>

        <th>RR</th>
        <th>SUHU</th>

        <th>10</th>
        <th>lama</th>

        <!-- <th>PU</th> -->
        <th>djj</th>
        <th>obat/cairan</th>
        <th>tetesan</th>
        <th>ket</th>



        <th>ACTION</th>
    </thead>
    <tbody>
        @foreach($hasilp as $lap => $l)
        <tr>
            <td>{{$l->tgl_input}}</td>
            <td>{{$l->diagnosa_kerja}}</td>

            <td>{{$l->td}}</td>
            <td>{{$l->nadi}}</td>
            <td>{{$l->rr}}</td>
            <td>{{$l->suhu}}</td>
            <td>{{$l->his}}</td>
            <td>{{$l->lama}}</td>
            <td>{{$l->djj}}</td>
            <td>{{$l->obatcairan}}</td>
            <td>{{$l->tetesan}}</td>

            <td><a class="btn btn-warning btn-sm " href="#">
                    <i class="fas fa-sync-alt fa-spin"></i>
                    RETUR
                </a></td>
        </tr>
        @endforeach

    </tbody>
</table>
@endif


<script>
    // $(document).ready(function() {
    //     window.setTimeout(function() {
    //         ambildata()
    //     }, 600000);

    // });

    function bunyi() {
        var bel = new Audio('notif.mp3');
        bel.play();
    }
    $(function() {
        $("#datapemantauan").DataTable({
            "sortable": true,
            "responsive": true,
            "lengthChange": false,
            "pageLength": 15,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#datapemantauan_wrapper .col-md-6:eq(0)');
        $('#tablelist').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>