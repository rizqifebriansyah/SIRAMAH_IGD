<table id="tableobatrekon" class="table">
    <thead>
        <th>Nama Obat</th>
        <th>Aturan Pakai</th>
        <th>Lanjut</th>
        <th>Action</th>

    </thead>
    <tbody>
        @foreach ($riwayatobat as $ri => $r)
        <tr>
            <td>{{$r->nama_obat}}</td>
            <td>{{$r->aturan_pakai}}</td>
            <td>{{$r->lanjut}}</td>
            <td>
                <button class="badge badge-danger "> Hapus </button>

            </td>
        </tr>
        @endforeach
    </tbody>

</table>


<script>
    $(function() {
        $("#tableobatrekon").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 10,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
</script>