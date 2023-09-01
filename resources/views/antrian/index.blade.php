@extends('antrian.header')

@section('container')
<div class="row" style="margin-top: 100px; margin-left:20px">
    <div class="col-md-12">
        <center>
            <a class="btn  bg-warning ambilantrian" id="ambilantrian" style="width: 1000px; height:100px">
                <h1>AMBIL ANTRIAN I.G.D</h1>
            </a>
        </center>
    </div>
</div>
<h1 style="color:antiquewhite">
    <center>BED MONITORING</center>
</h1>

<div style="margin-left:20px;height:500px;width:1850px;border:1px solid   Serif;overflow:auto;">
    <div class="row antrian" style="margin-top:30px; margin-left:10px">
        @foreach ($bed as $b)
        <div class="col-lg-2 col-2 jumlahpasien" style="margin-left: 20px;">
            <!-- small box -->
            @if ($b->TERPAKAI == 0)
            <div class="small-box" style="background-color:coral">


                @else
                <div class="small-box" style="background:forestgreen;color:white;font-weight:bold">

                    @endif
                    <h5 style="margin-top: 10px;">
                        <center>{{$b -> RUANG}}</center>
                    </h5>

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
    <script>
        spinner = $('#loader2');
        spinner.hide();
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
            url: " {{ route('ambilantrian') }}",
            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(data) {
                spinner.hide();

            }
        });
    });
    </script>
    @endsection