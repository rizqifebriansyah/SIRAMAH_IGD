<table id="pasienretur" class="table pasienretur mt-2  table-sm text-sm table-bordered table-hover ">
    <thead class="bg-warning">

        <th>Tanggal Retur</th>

        <th>KODE LAYANAN HEADER</th>
        <th>Nama Pasien</th>
        <th>TINDAKAN</th>
        <th>Total</th>

    </thead>
    <tbody>
        @foreach ($hasil as $key=>$h)
        <tr>
            <td class="alamat" style="font-size: large;"> {{ $h->tgl_retur}}</td>

            <td class="alamat" style="font-size: large;"> {{ $h->kode_layanan_header}}</td>
            <td class="dokkirim" style="font-size: large;"> {{ $h->nama_pasien}}</td>
            <td class="tgllahir" style="font-size: large;"> {{ $h->nama_tindakan}}</td>

            <td class="norm" style="font-size: large;"> {{ $h->total_retur}}</td>



        </tr>
        @endforeach
    </tbody>
</table>

<script>
    spinner = $('#loader2');
    spinner.hide();
    document.getElementById('tanggal_kunjungan').valueAsDate = new Date()
    document.getElementById('tanggal_kunjungann').valueAsDate = new Date()
    $(function() {
        $("#pasienretur").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
</script>