<table id="pasienekspertise" class="table pasienekspertise  table-sm text-sm table-bordered table-hover ">
    <thead class="bg-warning">
        <th hidden></th>
        <th hidden></th>
        <th hidden></th>
        <th hidden></th>

        <th>RM</th>
        <th>PASIEN</th>
        <th>UMUR <br> JK</th>
        <th>TGL.ENTRY</th>
        <th>TINDAKAN</th>
        <th>DOKTER</th>
        <th>CETAK</th>

    </thead>
    <tbody>
        @foreach ($hasil as $key=>$h)
        <tr>
            <td hidden class="alamat" style="font-size: large;"> {{ $h->alamat1}}</td>
            <td hidden class="penjamin" style="font-size: large;"> {{ $h->nama_penjamin}}</td>
            <td hidden class="dokkirim" style="font-size: large;"> {{ $h->dok_kirim}}</td>
            <td hidden class="tgllahir" style="font-size: large;"> {{ $h->tgl_lahir}}</td>

            <td class="norm" style="font-size: large;"> {{ $h->no_rm}}</td>
            <td class="namapasien" style="font-size: large;"> {{ $h->nama_pasien}}</td>
            <td class="umur" style="font-size: large;"> {{ $h->umur}}</td>
            <td class="tglentry" style="font-size: large;"> {{ $h->tgl_entry}}</td>
            <td class="tindakan" style="font-size: large;"> {{ $h->tindakan}}</td>

            <td class="dokterbaca" style='text-align:center; vertical-align:middle; font-size: large' > <br>
                @if ($h->dokter_baca > 0)
                {{ $h->dokter_baca}}
                @else
                <a class=" btn btn-danger btn-sm " href="#">
                    <i class="" aria-hidden="true">BELUM DI BACA</i>

                </a>
                @endif
            </td>
            <td style="font-size: large;">

                <a class="btn btn-primary btn-sm cetakexpertise" href="#">
                    <i class="fa fa-print" aria-hidden="true"> LIHAT EXPERTISE</i>
            </td>





        </tr>
        @endforeach
    </tbody>
</table>

<script>
    $(function() {
        $("#pasienekspertise").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });

    $(".cetakexpertise").click(function() {
        var $row = $(this).closest("tr");

        var norm = $row.find(".norm").text();
        var tglentry = $row.find(".tglentry").text();

        

        Swal.fire({
            title: "Apakah ingin print ekpertisi?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ya',
            cancelButtonColor: '#d33',
            cancelButtonText: "Batal"

        }).then(result => {
            //jika klik ya maka arahkan ke proses.php
            if (result.isConfirmed) {
                $.ajax({
                    async: true,
                    type: 'post',
                    dataType: 'json',
                    data: {
                        _token: "{{ csrf_token() }}",

                        norm,
                        tglentry

                    },
                    url: '<?= route('cetakexpertise') ?>',
                    error: function(data) {
                        spinner.hide()
                        Swal.fire({
                            icon: 'error',
                            title: 'Ooops....',
                            text: 'Sepertinya ada masalah......',
                            footer: ''
                        })
                    },
                    success: function(data) {
                        spinner.hide()
                        Swal.fire({
                            icon: 'success',
                            title: 'OK',
                            text: data.message,
                            footer: ''
                        })
                        cetakex(data.norm, data.tglentry)

                    }
                });
            }
        })
        return false;
    });
 

    function cetakex(norm, tglentry) {
        window.open('cetakexp/' + norm + '/' + tglentry);

    }
</script>