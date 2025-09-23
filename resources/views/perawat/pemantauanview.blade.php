<table id="datapemantauan" class="table ml-2 datapemantauan table-sm text-sm table-bordered table-hover">
    <thead class="bg-success">


        <th>tgl/waktu</th>

        <th>TD</th>
        <th>Nadi</th>

        <th>RR</th>
        <th>SUHU</th>

        <th>GCS</th>
        <th>PUPIL</th>

        <th>PU</th>
        <th>NYERI</th>



        <th>ACTION</th>
    </thead>
    <tbody>
        @foreach($hasilp as $lap => $l)
        <tr>
            <td>{{$l->tgl_input}}</td>
            <td>{{$l->td}}</td>
            <td>{{$l->nadi}}</td>
            <td>{{$l->rr}}</td>
            <td>{{$l->suhu}}</td>
            <td>{{$l->gcs}}</td>
            <td>{{$l->pupil}}</td>
            <td>{{$l->pu}}</td>
            <td>{{$l->nyeri}}</td>
            <td><a class="btn btn-warning btn-sm " href="#">
                    <i class="fas fa-sync-alt fa-spin"></i>
                    RETUR
                </a></td>
        </tr>
        @endforeach

    </tbody>
</table>


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