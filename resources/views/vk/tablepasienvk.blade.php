<table id="datapasienvk" class="table  table-sm text-sm table-bordered table-hover">
    <thead class="bg-light">
        <th style="text-align: center;">Tanggal Masuk</th>
        <th style="text-align: center;">NoRM</th>
        <th style="text-align: center;">Unit Asal</th>

        <th style="text-align: center;">Nama Pasien</th>

        <th style="text-align: center;">JK</th>
        <th style="text-align: center;">Diagnosa</th>
        <th style="text-align: center;">Assesment Kebidanan</th>
        <th hidden style="text-align: center;">kodekunjungan</th>





    </thead>
    <tbody>
        @foreach ($pasienkunjunganrs as $key => $a)
        <tr>
            <td style="text-align: center;" class="tglmasuk">{{ $a->tgl_masuk }}</td>

            <td style="text-align: center;" class="norm">{{ $a->no_rm }}</td>
            <td style="text-align: center;" class="namaunit">{{ $a->nama_unit }}</td>

            <td style="text-align: center;" class="namapx">{{ $a->nama_px }}</td>
            <td style="text-align: center;" class="jk">{{ $a->jenis_kelamin }}</td>
            <td hidden style="text-align: center;" class="kj">{{ $a->kode_kunjungan }}</td>


            <td class="diag2" style="text-align: center;">
                {{ $a->DIAGX }}
            </td>
            <td style="text-align: center;">
                <button class="badge badge-info ermvk"> CPPT </button>
            </td>





        </tr>
        @endforeach


    </tbody>
</table>

<script>
    $(function() {
        $("#datapasienvk").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 10,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $(".ermvk").click(function() {
        spinner = $('#loader2');
        spinner.show();
        var $row = $(this).closest("tr");
        var norm = $row.find(".norm").text();
        var namapx = $row.find(".namapx").text();
        var namaunit = $row.find(".namaunit").text();

        var jk = $row.find(".jk").text();
        var kj = $row.find(".kj").text();
        var tglmasuk = $row.find(".tglmasuk").text();
        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                norm,
                namapx,
                namaunit,

                jk,
                kj,

                tglmasuk

            },
            url: '<?= route('ermvk') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.ermperawatview').html(response);

            }
        });
    });
</script>