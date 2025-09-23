@extends('perawat.header')
@section('container')

<div class="billingigdkview mt-2">
    <div class="row  ">
        <div class="col-sm-3 mt-3">
            <input type="text" class="form-control" placeholder="Nama pasien">
        </div>
        <div class="col-sm-3 mt-3">
            <input type="text" class="form-control" placeholder="No RM">
        </div>
        <div class="col-sm-3 mt-3">
            <input type="text" class="form-control" placeholder="Alamat">
        </div>
        <div class="col-sm-2 mt-3">
            <input type="date" class="form-control" id="tanggal_kunjungan" autocomplete="off" data-language="en" data-date-format="yyyy-mm-dd" placeholder="Tanggal">
        </div>

        <div>
            <button type="submit" class="btn btn-primary mt-3" onclick="caripasienigdperawat()"> <i class="bi bi-search-heart"></i>
            </button>
        </div>
    </div>
    <div class="row  " style="align-content: center; margin-top:20px">
        <div class="col-md-12  mt-2">
            <table id="datapasienigd" class="table  table-sm text-sm table-bordered table-hover">
                <thead class="bg-light">
                    <th style="text-align: center;">Tanggal Masuk</th>
                    <th style="text-align: center;">NoRM</th>
                    <th style="text-align: center;">Nama Pasien</th>
                    <th style="text-align: center;">JK</th>
                    <th style="text-align: center;">Diagnosa</th>
                    <th style="text-align: center;">Action</th>
                    <th hidden></th>

                </thead>
                <tbody>
                    @foreach ($pasienigd as $key => $a)
                    <tr>
                        <td style="text-align: center;" class="tglmasuk">{{ $a->tgl_masuk }}</td>

                        <td style="text-align: center;" class="norm">{{ $a->no_rm }}</td>
                        <td style="text-align: center;" class="namapx">{{ $a->nama_px }}</td>
                        <td style="text-align: center;" class="jk">{{ $a->jenis_kelamin }}</td>
                        <td hidden style="text-align: center;" class="kj">{{ $a->kode_kunjungan }}</td>


                        <td class="diag" style="text-align: center;">
                            @if ($a->DIAGX == null)
                            <button class="badge badge-danger ">belum diisi</button>
                            @else
                            {{$a->DIAGX}}
                            @endif
                        </td>


                        <td class="text-center py-0 align-middle">
                            <div class="btn-group btn-group-sm mt-2 mb-2">
                                <button class="badge badge-info mr-2 billinginput"> <i class="fas fa-pen"> | BILLING</i> </button>

                                <!-- <a href="#" class="btn btn-warning mr-2"><i class="fas fa-eye"></i></a> -->
                            </div>
                        </td>



                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<script>
    spinner = $('#loader2');
    spinner.hide();

    $(function() {
        $("#datapasienigd").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 10,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $(".billinginput").click(function() {
        spinner = $('#loader2');
        spinner.show();
        var $row = $(this).closest("tr");
        var norm = $row.find(".norm").text();
        var namapx = $row.find(".namapx").text();
        var diag = $row.find(".diag").text();

        var jk = $row.find(".jk").text();
        var status1 = $row.find(".status1").text();
        var kj = $row.find(".kj").text();
        var tglmasuk = $row.find(".tglmasuk").text();
        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                norm,
                namapx,
                jk,
                kj,
                diag,
                tglmasuk

            },
            url: '<?= route('billinginput') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.billingigdkview').html(response);

            }
        });
    });
</script>
@endsection