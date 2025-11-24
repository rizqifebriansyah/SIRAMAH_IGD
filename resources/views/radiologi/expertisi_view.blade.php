@extends('radiologi.headerr')
@section('container')

<div class="card-body ">
    <h4 class="nprinsley-text-glitchan">MONITORING BRIDGING </h4>


    <div class="row mt-3">
        <div class="col-sm-3 ">
            <input type="text" class="form-control" name="no_rm" id="no_rm" placeholder="nomor RM ..">
        </div>

        <div class="col-sm-3 ">
            <input type="date" class="form-control " autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal" name="tanggal_bridging" id="tanggal_bridging">
        </div>
        <div class="col-sm-3 ">
            <input type="date" class="form-control " autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal" name="tanggal_bridging1" id="tanggal_bridging1">
        </div>
        <div>
            <button type="submit" class="btn btn-primary" onclick="carigambarbridging()"> <i class="bi bi-search-heart"></i>
            </button>
            <!-- <a style="margin-left: 32px;" rel="noopener" href="{{ route('radiologi')}}" class="btn btn-primary"><i class="fas fa-sync-alt fa-spin"></i> Reload
            </a> -->
        </div>

    </div>
    <div class="row">

        <div class="col-md-11 mt-3 ">
            <div class="tablebridging">
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

                                    |
                                    <a class="btn btn-success btn-sm cetakexpertise" href="#">
                                        <i class="fa fa-print" aria-hidden="true"> </i> </a>
                                   
                                </div>

                            </td>



                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-5 mt-3">
            <div class="detailbridging">

            </div>
        </div>
    </div>

</div>



<script>
    spinner = $('#loader2');
    spinner.hide();
    document.getElementById('tanggal_bridging').valueAsDate = new Date()
    document.getElementById('tanggal_bridging1').valueAsDate = new Date()

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

    function carigambarbridging() {
        spinner = $('#loader2');
        spinner.show();
        tanggal_bridging = $('#tanggal_bridging').val()
        tanggal_bridging1 = $('#tanggal_bridging1').val()



        $.ajax({
            type: "post",
            data: {
                _token: " {{ csrf_token() }}",
                tanggal_bridging,
                tanggal_bridging1


            },
            url: " {{ route('carigambarbridging') }}",
            error: function(data) {
                spinner.hide();
                alert('error!!!')
            },
            success: function(response) {
                spinner.hide();
                $('.tablebridging').html(response);
            }
        })

    }

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

@endsection