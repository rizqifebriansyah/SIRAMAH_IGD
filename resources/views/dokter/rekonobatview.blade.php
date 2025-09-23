<form class="formtinjutobat">
    <table id="tableobatrekon" class="table">
        <thead class="bg-info">
            <th>Kode Detail Obat</th>
            <th>Nama Obat</th>
            <th>Aturan Pakai</th>
            <th>Lanjut</th>

        </thead>
        <tbody>
            @foreach ($riwayatobat as $ri => $r)
            <tr>
                <td>{{$r->kode_detail_obat}}</td>

                <td>{{$r->nama_obat}}</td>
                <td>{{$r->aturan_pakai}}</td>
                <td>
                    <input type="text" name="tinjut" id="tinjut" value="" placeholder="{{$r->lanjut}}" class="lanjut form-control">
                    <!-- <input type="text" name="kodetail" id="kodetail" value="{{$r->kode_detail_obat}}" class="lanjut form-control"> -->



                </td>

            </tr>
            @endforeach
        </tbody>

    </table>

</form>



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