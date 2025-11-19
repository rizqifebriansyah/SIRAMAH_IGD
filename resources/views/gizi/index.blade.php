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
    <h4 class="nprinsley-text-glitchan">ORDER MAKAN</h4>
    <div class="row ml-3" style="margin-top:60px">
        <div class="col-md-11">
            <label for="">NAMA RUANGAN</label>
            <select class="form-control select2" name="unit" id="unit">
                <option value=""> -- Pilih Ruangan --</option>
                @foreach ($unit as $un => $u)
                <option value="{{$u->kode_unit}}">{{$u->nama_unit}}
                </option>
                @endforeach


            </select>
        </div>
        <div class="mt-4">

            <button type="submit" class="btn btn-primary" onclick="caripasienranap()"> <i class="bi bi-search-heart"></i> </button>

        </div>

        <div class="col-md-11 pasienranapview">

        </div>
    </div>
</div>





<script>
    spinner = $('#loader2');
    spinner.hide();

    function caripasienranap() {
        spinner = $('#loader2');
        spinner.show();
        unit = $('#unit').val()

        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                unit

            },
            url: "{{ route('caripasienranap') }}",
            error: function(data) {
                spinner.hide()
                alert('Errorrr!!!')
            },
            success: function(response) {
                spinner.hide();
                $('.pasienranapview').html(response);
            }
        })
    }
</script>

@endsection