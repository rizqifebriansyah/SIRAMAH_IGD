@extends('perawat.header')
@section('container')
<style>
    .scroll {
        display: block;

        padding: 5px;
        margin-top: 5px;
        width: 1400px;
        height: 700px;
        overflow: scroll;
    }

    .auto {
        display: block;
        border: 1px solid red;
        padding: 5px;
        margin-top: 5px;
        width: 1400px;
        height: 700px;
        overflow: auto;
    }
</style>
<div class="card-body ermperawatview">
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
            <button type="submit" class="btn btn-primary" onclick="lihatpasienex()"> <i class="bi bi-search-heart"></i> </button>
        </div>
    </div>
    <div class="row " style="align-content: center; margin-top:20px">
        <div class="col-md-12">
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
                    @foreach ($pasienigd as $key=>$a)
                    <tr>
                        <td style="text-align: center;" class="norm">{{$a->no_rm}}</td>
                        <td style="text-align: center;" class="namapx">{{$a->nama_px}}</td>
                        <td style="text-align: center;" class="jk">{{$a->jenis_kelamin}}</td>
                        <td hidden style="text-align: center;" class="kj">{{$a->kode_kunjungan}}</td>
                        <td hidden style="text-align: center;" class="tglmasuk">{{$a->tgl_masuk}}</td>


                        <td class="diag2" style="text-align: center;">
                            {{$a->DIAGX}}
                        </td>


                        <td class="status1" style="text-align: center;">
                            @if ($a->DIAGX == NULL)
                            <button class="badge badge-danger ermperawat"> belum diisi </button>
                            @else
                            <button class="badge badge-success ermperawat"> Sudah Diisi </button>
                            @endif
                        </td>
                        <td class="status2" style="text-align: center;">
                            @if ($a->DIAGX == NULL)
                            <button class="badge badge-danger "> belum diisi </button>
                            @else
                            <button class="badge badge-success "> Sudah Diisi </button> | {{$a->nama_dpjp}}
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
        $("#datapasienigd").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 10,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });

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


@endsection