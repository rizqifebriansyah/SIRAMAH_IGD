@extends('dokter.header')
@section('container')
<style>
    .scroll {
        display: block;

        padding: 5px;
        margin-top: 5px;
        width: 1300px;
        height: 650px;
        overflow: scroll;
    }

    .auto {
        display: block;
        border: 1px solid red;
        padding: 5px;
        margin-top: 5px;
        width: 1300px;
        height: 650px;
        overflow: auto;
    }
</style>
<div class="card-body assesmentdokterview">
    <div class="row " style="align-content: 10px;">
        <h4 class="col-md-2">Data Pasien IGD</h4>
        <div class="modal  col-md-12" id="formtambahpasien" aria-labelledby="formtambahpasienLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formtambahpasienLabel">Daftarkan Pasien Baru </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="inputName" placeholder="NIK">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">NAMA</label>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Nama Pasien">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName2" class="col-sm-2 col-form-label">Usia</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="inputName2" placeholder="Usia Pasien">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputExperience" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="inputExperience" placeholder="Alamat"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputSkills" class="col-sm-2 col-form-label">No.Hp</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="inputSkills" placeholder="No.Hp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class=" col-sm-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class=" col-sm-12">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row center" style="align-content:center; margin-top: 10px">
        <div class="col-sm-3">
            <input type="text" class="form-control" placeholder="Nama pasien">
        </div>
        <div class="col-sm-3">
            <input type="text" class="form-control" placeholder="No RM">
        </div>
        <div class="col-sm-3">
            <input type="text" class="form-control" placeholder="Alamat">
        </div>
        <div class="col-sm-2">
            <input type="date" class="form-control" id="tanggal_kunjungan" autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal">
        </div>

        <div>
            <button type="submit" class="btn btn-primary" onclick="carinotriase()"> <i class="bi bi-search-heart"></i> </button>
        </div>
    </div>
    <div class="row " style="align-content: center; margin-top:20px">
        <div class="col-md-12 tabletriase">
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
                            @if ($a->kode_kunjungan == NULL)
                            <button class="badge badge-danger assesmentperawat"> belum daftar </button> |
                            @else
                            <button class="badge badge-success assesmentperawat"> Sudah Daftar </button> |

                            @endif
                        </td>
                        <td class="status2">
                            @if ($a->status_triase == 0)
                            <button class="badge badge-danger assesmentdokter"> belum diisi </button> |
                            @else
                            <button class="badge badge-success assesmentdokter"> Sudah diisi </button> | {{$user}}
                            @endif
                        </td>

                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    spinner = $('#loader2');
    spinner.hide();

    document.getElementById('tanggal_kunjungan').valueAsDate = new Date()
    $(function() {
        $("#tabletriase").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 10,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });


    function carinotriase() {
        spinner = $('#loader2');
        spinner.show();
        tgl_kunjungan = $('#tanggal_kunjungan').val()

        $.ajax({
            type: "post",
            data: {
                _token: " {{ csrf_token() }}",
                tgl_kunjungan

            },
            url: " {{ route('carinotriase') }}",
            error: function(data) {
                spinner.hide();

                alert('error!!!')
            },
            success: function(response) {
                spinner.hide();

                $('.tabletriase').html(response);
            }
        })

    }


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

@endsection
