<table id="datapasienigd" class="table  table-sm text-sm table-bordered table-hover">
    <thead class="bg-light">
        <th style="text-align: center;">Tanggal Masuk</th>
        <th style="text-align: center;">NoRM</th>
        <th style="text-align: center;">JK</th>
        <th style="text-align: center;">Diagnosa</th>
        <th style="text-align: center;">Assesment Perawat</th>
        <th hidden style="text-align: center;">kodekunjungan</th>
        <th hidden style="text-align: center;">tgl_masuk</th>



        <th style="text-align: center;">Assesment Dokter</th>


    </thead>
    <tbody>
        @foreach ($pasienigd as $key => $a)
            <tr>
                <td style="text-align: center;" class="norm">{{ $a->no_rm }}</td>
                <td style="text-align: center;" class="namapx">{{ $a->nama_px }}</td>
                <td style="text-align: center;" class="jk">{{ $a->jenis_kelamin }}</td>
                <td hidden style="text-align: center;" class="kj">{{ $a->kode_kunjungan }}</td>
                <td hidden style="text-align: center;" class="tglmasuk">{{ $a->tgl_masuk }}</td>


                <td class="diag2" style="text-align: center;">
                    {{ $a->DIAGX }}
                </td>


                <td class="status1" style="text-align: center;">
                    @if ($a->DIAGX == null)
                        <button class="badge badge-danger ermperawat"> belum diisi </button>
                    @else
                        <button class="badge badge-success ermperawat"> Sudah Diisi </button>
                    @endif
                </td>
                <td class="status2" style="text-align: center;">
                    @if ($a->DIAGX == null)
                        <button class="badge badge-danger "> belum diisi </button>
                    @else
                        <button class="badge badge-success "> Sudah Diisi </button> | {{ $a->nama_dpjp }}
                    @endif
                </td>


            </tr>
        @endforeach


    </tbody>
</table>

<script>
    spinner = $('#loader2');
    spinner.hide();

    document.getElementById('tanggal_kunjungan').valueAsDate = new Date()
    $(function() {
        $("#datapasienigd").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 10,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });


    function caripasienigdperawat() {
        spinner = $('#loader2');
        spinner.show();
        tglkunjungan = $('#tanggal_kunjungan').val()

        $.ajax({
            type: "post",
            data: {
                _token: " {{ csrf_token() }}",
                tglkunjungan

            },
            url: " {{ route('caripasienigdperawat') }}",
            error: function(data) {
                spinner.hide();

                alert('error!!!')
            },
            success: function(response) {
                spinner.hide();

                $('.datapasienigd').html(response);
            }
        })

    }
    $(".ermperawat").click(function() {
        spinner = $('#loader2');
        spinner.show();
        var $row = $(this).closest("tr");
        var norm = $row.find(".norm").text();
        var namapx = $row.find(".namapx").text();
        var jk = $row.find(".jk").text();
        var status1 = $row.find(".status1").text();
        var kj = $row.find(".kj").text();
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
                tglmasuk

            },
            url: '<?= route('ermperawat') ?>',
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
