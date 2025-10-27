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
            <td>{{$i->ATTENDINGDOCTORNAME}}</td>
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
                <span class="badge badge-primary">SUDAH DIAMBIL SIMRS</span>
                @else
                <span class="badge badge-success">On Schedule</span>

                @endif

            </td>
            <td>
                <div class="col-md-2">
                    <a class=" btn btn-info btn-sm editbridging" href="#">
                        <i class="" aria-hidden="true">E</i>

                    </a> |
                    @if ($i->PUBLICURL != NULL)
                    <a href="{{$i->PUBLICURL}}" class=" btn btn-success btn-sm " target="_blank"> <i class="fas fa-eye" aria-hidden="true"></i></a>
                @else

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



    $(".editbridging").click(function() {
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
</script>