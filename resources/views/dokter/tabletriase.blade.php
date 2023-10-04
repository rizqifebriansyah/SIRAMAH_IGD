<table id="tabletriase" class="table  table-sm text-sm table-bordered table-hover">
    <thead class="bg-light">
        <th>Tanggal Masuk</th>
        <th>Nomor Antrian</th>
        <th>NoRM</th>
        <th>Nama Pasien</th>

        <th>Assesment Perawat</th>
        <th>Assesment Dokter</th>
    </thead>
    <tbody>
        @foreach ($antrian as $key=>$a)
        <tr>
            <td class="tgl">{{$a->tgl}}</td>
            <td class="noantri">{{$a->no_antri}}</td>
            <td class="norm">{{$a->no_rm}}</td>

            <td class="namapx">{{$a->nama_px}}</td>

            <td class="status1">
                @if ($a->status == 1)
                <button class="badge badge-danger assesmentperawat"> belum daftar </button> |
                @else
                <button class="badge badge-success assesmentperawat"> Sudah daftar </button> |
                @endif
            </td>
            <td class="status2">
                @if ($a->status_triase == 0)
                <button class="badge badge-danger assesmentdokter"> belum diisi </button> |
                @else
                <button class="badge badge-success assesmentdokter"> Sudah diisi </button> |
                @endif
            </td>

        </tr>
        @endforeach


    </tbody>
</table>



<script>
    $(function() {
        $("#tabletriase").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 10,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $(".assesmentdokter").click(function() {
        spinner = $('#loader2');
        spinner.show();
        var $row = $(this).closest("tr");
        var tgl = $row.find(".tgl").text();
        var noantri = $row.find(".noantri").text();
        var status1 = $row.find(".status1").text();
        var status2 = $row.find(".status2").text();

        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                tgl,
                noantri,
                status1,
                status2
            },
            url: '<?= route('assesmentdokter') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.assesmentdokterview').html(response);

            }
        });
    });
</script>