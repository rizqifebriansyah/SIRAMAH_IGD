<table id="databridging" class="table  table-sm text-sm table-bordered table-hover">
    <thead class="bg-success">
        <th>ACC Number</th>
        <th>NORM</th>
        <th>Nama</th>
        <th>Pemeriksaan</th>
        <th>Ruang</th>
        <th>Dokter Baca</th>
        <th>STATUS</th>
        <th>ACTION</th>
    </thead>
    <tbody>
        @foreach ($pasienbridging as $i)
        <tr>
            <td class="acc">{{$i->ACCESSIONNUMBER}}</td>
            <td>{{$i->PID}}</td>
            <td>{{$i->NAMEALIAS}}</td>
            <td>{{$i->PROCEDURENAME}}</td>
            <td>{{$i->ASSIGNEDPATIENTLOCATION}}</td>
            <td>{{$i->APPROVER}}</td>
            <td>
                @if ($i->STATUS == 'NW-E')
                <span class="badge badge-danger">data tidak sesuai</span>
                @elseif ($i->STATUS == 'NF')
                <span class="badge badge-danger">Bridging Gagal</span>
                @elseif ($i->STATUS == 'CM')
                <span class="badge badge-primary">PICTURE MATCH</span>
                @elseif ($i->STATUS == 'AP')
                <span class="badge badge-primary">READ</span>
                @elseif ($i->STATUS == 'FN')
                <span class="badge badge-primary">SUDAH DICETAK</span>
                @else
                <span class="badge badge-success">On Schedule</span>

                @endif

            </td>
            <td>
                <div class="col-md-2">
                    @if ($i->PUBLICURL != NULL)
                    <a href="{{$i->URL}}" class=" btn btn-success btn-sm " target="_blank"> <i class="fas fa-eye" aria-hidden="true"></i></a>
                    @else

                    @endif

                    @if ($i->STATUS == 'AP')

                    |
                    <a class="btn btn-info btn-sm expertisiviewbaru" href="#">
                        <i class="" aria-hidden="true">E </i> </a>
                    @elseif ($i->STATUS == 'FN') | <a class="btn btn-info btn-sm expertisiviewbaru" href="#">
                        <i class="" aria-hidden="true">E </i> </a>
                    <!--  <a class="btn btn-primary btn-sm cetakexpertise" href="#">
                        <i class="fa fa-print" aria-hidden="true"> </i> </a> -->
                    @endif

                </div>

            </td>



        </tr>

        @endforeach

    </tbody>
</table>



<script>
    spinner = $('#loader2');
    spinner.hide();


    $(function() {
        $("#databridging").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });



    $(".editriwayatbridging").click(function() {
        spinner = $('#loader2');
        spinner.show();
        var $row = $(this).closest("tr");
        var acc = $row.find(".acc").text();


        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                acc


            },
            url: " {{ route('editriwayatbridging') }}",

            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(response) {
                spinner.hide();
                $('.detailbridging').html(response);
            }
        });
    });
    $(".expertisiviewbaru").click(function() {
        spinner = $('#loader2');
        spinner.show();
        var $row = $(this).closest("tr");
        var acc = $row.find(".acc").text();


        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                acc


            },
            url: " {{ route('expertisiviewbaru') }}",

            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(response) {
                spinner.hide();
                $('.expertisiviewbaruu').html(response);
            }
        });
    });
    $(".cetakexpertise").click(function() {
        var $row = $(this).closest("tr");

        var acc = $row.find(".acc").text();




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
                        acc


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
                        cetakex(data.acc)

                    }
                });
            }
        })
        return false;
    });


    function cetakex(acc) {
        window.open('cetakexp/' + acc);

    }
</script>