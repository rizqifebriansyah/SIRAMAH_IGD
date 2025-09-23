<table id="datarekapdetail" class="table  table-sm text-sm table-bordered table-hover">
    <thead>
        <th>No</th>
        <th>Keterangan</th>
        <th>No RM</th>
        <th>Nama Pasien</th>
        <th>Nama Unit</th>
        <th>Kelompok</th>
        <th>Tanggal</th>
        <th>Nama Tarif</th>
        <th>Jumlah Layanan</th>
        <th>Grand Total Layanan</th>
        <th>Penjamin</th>
        <th>Nama Dokter</th>

        <th>Nama Penjamin</th>
    </thead>
    <tbody>

        @php
        $i=1;
        $sum = 0; @endphp
        @foreach ($datarekap as $dr => $d)
        <tr>
            <td> {{$i++}}</td>
            <td>{{$d->ket}}</td>
            <td>{{$d->rm}}</td>
            <td>{{$d->NAMA_PX}}</td>
            <td>{{$d->NAMA_UNIT}}</td>
            <td>{{$d->KELOMPOK}}</td>
            <td>{{$d->TGL}}</td>
            <td>{{$d->NAMA_TARIF}}</td>
            <td>{{$d->jumlah_layanan}}</td>
            <td>Rp. {{number_format($d->grantotal_layanan)}}</td>
            <td>{{$d->CARA_BAYAR}}</td>
            <td>{{$d->DOKTER}}</td>

            <td>{{$d->NAMA_PENJAMIN}}</td>



        </tr>
        @php
        $sum = $d->grantotal_layanan + $sum;
        @endphp
        @endforeach
    </tbody>
  
</table>
<h1>Rp. {{number_format($sum)}}</h1>
<script>
    $(function() {
        $("#datarekapdetail").DataTable({
            "sortable": true,
            "responsive": true,
            "lengthChange": false,
            "pageLength": 15,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#datarekapdetail_wrapper .col-md-6:eq(0)');
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
    // $(function() {
    //     $("#datarekapdetail").DataTable({
    //         "responsive": true,
    //         "lengthChange": true,
    //         "pageLength": 10,
    //         "autoWidth": true,
    //         "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    //     });
    // });
</script>