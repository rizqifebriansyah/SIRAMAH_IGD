@extends('antrian.header')

@section('container')
<div class="index">
    <div class="row" style="margin-top: 100px; margin-left:20px">
        <div class="col-md-4" style="margin-right: 10px;">
            <center>
                <a class="btn  bg-warning ambilantrian" id="ambilantrian" style="width: 1000px; height:100px">
                    <h1>I.G.D UMUM</h1>
                </a>
            </center>
        </div>

        <div class="col-md-4" style="margin-left: 20px;">
            <center>
                <a class="btn  bg-warning ambilantrianbidan" id="ambilantrianbidan" style="width: 1000px; height:100px">
                    <h1>I.G.D KEBIDANAN</h1>
                </a>
            </center>
        </div>
    </div>
</div>
<div class="row" style="margin-top: 10px; margin-left:20px">



    <div style="margin-left:20px;height:555px;width:1700px;border:1px solid   Serif;overflow:auto;">
        <h1 style="color:antiquewhite">
            <center>BED MONITORING</center>
        </h1>
        <div class="row antrian" style="margin-top:10px; margin-left:50px">

            @foreach ($bed as $b)
            <div class="col-lg-2 col-2 jumlahpasien" style="margin-left: 20px;">
                <!-- small box -->
                @if ($b->TERPAKAI == 0)
                <div class="small-box" style="background-color:coral">


                    @else
                    <div class="small-box" style="background:forestgreen;color:white;font-weight:bold">

                        @endif
                        @if ($b->KODE_UNIT == 3)
                        <h5 style="margin-top: 10px;">
                            <center>KELAS I / {{$b -> RUANG}}</center>
                        </h5>
                        @elseif ($b->KODE_UNIT == 4)
                        <h5 style="margin-top: 10px;">
                            <center>KELAS II / {{$b -> RUANG}}</center>
                        </h5>
                        @elseif ($b->KODE_UNIT == 5)
                        <h5 style="margin-top: 10px;">
                            <center>KELAS III / {{$b -> RUANG}}</center>
                        </h5>
                        @elseif ($b->KODE_UNIT == 2)
                        <h5 style="margin-top: 10px;">
                            <center>VIP / {{$b -> RUANG}}</center>
                        </h5>
                        @elseif ($b->KODE_UNIT == 1)
                        <h5 style="margin-top: 10px;">
                            <center>SUPER VIP / {{$b -> RUANG}}</center>
                        </h5>
                        @else
                        <h5 style="margin-top: 10px;">
                            <center>{{$b -> RUANG}}</center>
                        </h5>
                        @endif

                        <div class="row">
                            <div class="col-md-5" style="margin-left: 20px;">
                                <div class="inner bg-warning">
                                    <p>
                                        <center>KAPASITAS</center>
                                    </p>

                                    <h3>
                                        <center>{{$b -> JUMLAH}}</center>
                                    </h3>

                                </div>
                            </div>
                            <div class="col-md-5" style="margin-left: 20px;">
                                <div class="inner bg-primary">
                                    <p>
                                        <center>Tersedia</center>
                                    </p>

                                    <h3>
                                        <center>{{$b->TERPAKAI}}</center>
                                    </h3>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="footer" style="margin-top:20px">
            <marquee class="bg-dark" direction="left">Informasi Ruangan NON
                COVID RSUD WALED <i class="far fa-hospital mr-2"></i>Jl. Prabu Kiansantang No. 4 Waled, Cirebon | <i class="fas fa-phone-alt mr-2"></i>0231661275 | TARIF KAMAR / HARI : Kelas III Rp.30.000 | Kelas II
                Rp.40.000 | Kelas I Rp.60.000 | VIP Rp.300.000 | VVIP Rp.500.000 |
            </marquee>
            <img class="img-fluid imgbanner rounded" style="width: 100%" alt="Responsive image" src="http://192.168.2.212/bedmonitoring/assets/img/footer2.png">
        </div>
    </div>
</div>
<script>
    spinner = $('#loader2');
    spinner.hide();
    // $(document).ready(function() {
    //     window.setTimeout(function() {
    //         ambildata()

    //     }, 360000);

    // });

    function ambildata() {
        spinner = $('#loader2');
        spinner.hide();
        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",
            },
            type: "post",
            url: " {{ route('ambildata') }}",

            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.index').html(response);

            }
        });
    }
    $(function() {
        $("#datapendaftaran").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $(".ambilantrian").click(function() {
        spinner = $('#loader2');
        spinner.show();

        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
            },
            url: " {{ route('ambilantrianumum') }}",
            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(data) {
                spinner.hide();
                window.location.reload();
            }
        });
    });
    $(".ambilantrianbidan").click(function() {
        spinner = $('#loader2');
        spinner.show();

        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
            },
            url: " {{ route('ambilantrianbidan') }}",
            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(data) {
                spinner.hide();
                window.location.reload();
                0
            }
        });
    });
</script>
@endsection