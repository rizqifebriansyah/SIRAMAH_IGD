<table id="datapasienfarm" class="table  table-sm text-sm table-bordered table-hover">
    <thead class="bg-light">
        <th style="text-align: center;">Tanggal Masuk</th>
        <th style="text-align: center;">Nama pasien</th>

        <th style="text-align: center;">NoRM</th>
        <th style="text-align: center;">JK</th>
        <th style="text-align: center;">Diagnosa</th>
        <th style="text-align: center;">Action</th>
        <th hidden style="text-align: center;">kodekunjungan</th>
        <th hidden style="text-align: center;">kelas</th>
        <th hidden style="text-align: center;">counter</th>

        <th hidden style="text-align: center;">kodepenjamin</th>
        <th hidden style="text-align: center;">kelas unit</th>

        <th style="text-align: center;">Dokter</th>


    </thead>
    <tbody>
        @foreach ($pasienigd as $key => $a)
        <tr>
            <td style="text-align: center;" class="tglmasuk">{{ $a->tgl_masuk }}</td>
            <td style="text-align: center;" class="namapx">{{ $a->nama_px }}</td>

            <td style="text-align: center;" class="norm">{{ $a->no_rm }}</td>
            <td style="text-align: center;" class="jk">{{ $a->jenis_kelamin }}</td>
            <td hidden style="text-align: center;" class="kj">{{ $a->kode_kunjungan }}</td>
            <td hidden style="text-align: center;" class="kelas">{{ $a->kelas }}</td>
            <td hidden style="text-align: center;" class="counter">{{ $a->counter }}</td>

            <td hidden style="text-align: center;" class="kp">{{ $a->kode_penjamin }}</td>
            <td hidden style="text-align: center;" class="ku">{{ $a->KELAS_UNIT }}</td>

            <td class="diag2" style="text-align: center;">
            </td>


            <td class="status1" style="text-align: center;">
                @if ($a->status == 1)
                <button class="badge badge-success isiobat"> Sudah Diisi </button>

                @else
                <button class="badge badge-danger isiobat"> belum diisi </button>
                @endif

            </td>
            <td class="status2" style="text-align: center;">
                {{ $a->nama_dpjp }}
            </td>


        </tr>
        @endforeach


    </tbody>
</table>


<script>
    $(function() {
        $("#datapasienfarm").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 10,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });

    $(".isiobat").click(function() {
        spinner = $('#loader2');
        spinner.show();
        var $row = $(this).closest("tr");
        var norm = $row.find(".norm").text();
        var namapx = $row.find(".namapx").text();
        var jk = $row.find(".jk").text();
        var status1 = $row.find(".status1").text();
        var kj = $row.find(".kj").text();
        var kelas = $row.find(".kelas").text();
        var ku = $row.find(".ku").text();
        var counter = $row.find(".counter").text();


        var kp = $row.find(".kp").text();
        var tglmasuk = $row.find(".tglmasuk").text();
        var status2 = $row.find(".status2").text();
        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                norm,
                namapx,
                jk,
                kj,
                status1,
                status2,
                tglmasuk,
                kelas,
                ku,
                kp,
                counter

            },
            url: '<?= route('isiobat') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.farmasiview').html(response);

            }
        });
    });
</script>