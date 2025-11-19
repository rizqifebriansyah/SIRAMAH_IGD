@extends('gizi.header')
<link rel="stylesheet" type="text/css" href="https://cdn.prinsh.com/NathanPrinsley-textstyle/nprinsh-stext.css" />
<style>
    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>


@section('container')
<div class="card">

    <div class="col-sm-11" style="margin-left:30px">


        <h4 class="nprinsley-text-glitchan">RIWAYAT ORDER GIZI</h4>


        <div class="row ">


            <div class="col-sm-4">
                <label for="">NAMA RUANGAN</label>
                <select class="form-control select2" name="namaunit" id="namaunit">
                    <option value=""> -- Pilih Ruangan --</option>
                    @foreach ($unit as $un => $u)
                    <option value="{{$u->kode_unit}}">{{$u->nama_unit}}
                    </option>
                    @endforeach


                </select>
            </div>
            <div class="col-sm-4">
                <label for="">Waktu Makan</label>
                <select class="form-control  select2" name="waktumakanorder" id="waktumakanorder" placeholder="Cari opsi...">
                    <option>--- PILIH WAKTU MAKAN ---</option>
                    <option value="MAKAN PAGI">MAKAN PAGI</option>
                    <option value="MAKAN SIANG">MAKAN SIANG</option>
                    <option value="MAKAN MALAM">MAKAN MALAM</option>



                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary mt-4" onclick="cariordermakan()"> <i class="bi bi-search-heart"></i>
                </button>

            </div>

        </div>
        <div class="tableordermakan">

        </div>

    </div>
</div>





<script>
    spinner = $('#loader2');
    spinner.hide();
    document.getElementById('tanggal_order').valueAsDate = new Date()
    document.getElementById('tanggal_order1').valueAsDate = new Date()
    $(function() {
        $("#datapasienorder").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });


    function cariordermakan() {
        spinner = $('#loader2');
        spinner.show();
        namaunit = $('#namaunit').val()
        waktumakanorder = $('#waktumakanorder').val()


        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                namaunit,
                waktumakanorder

            },
            url: "{{ route('cariordermakan') }}",
            error: function(data) {
                spinner.hide()
                alert('Errorrr!!!')
            },
            success: function(response) {
                spinner.hide();
                $('.tableordermakan').html(response);
            }
        })
    }
</script>

@endsection