@extends('antrian.header')

<style>
    button img {
        height: 24px;
        width: 24px;
    }
</style>
@section('container')
<div class="row" style="margin-top: 100px; margin-left:20px">
    <div class="col-md-12">
        <center>
            <a class="btn  bg-warning" style="width: 1000px; height:100px">
                <h1>AMBIL ANTRIAN I.G.D</h1>
            </a>
        </center>
    </div>
</div>
<h3 style="margin-top: 15px;">
    <center>BED MONITORING</center>
</h3>

<div style="margin-left:20px;height:500px;width:1900px;border:1px solid   Serif;overflow:auto;">
    <div class="row antrian" style="margin-top:30px; margin-left:10px">
        @foreach ($bed as $b)
        <div class="col-lg-2 col-2 jumlahpasien" style="margin-left: 20px;">
            <!-- small box -->
            <div class="small-box" style="background:forestgreen;color:white;font-weight:bold">
                <h5>
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
    // $(".returorderlab").click(function() {
    //     var $row = $(this).closest("tr");
    //     var kodepenjamin = $row.find(".kodepenjamin").text();
    //     var kodekunjungan = $row.find(".kodekunjungan").text();
    //     var counter = $row.find(".counter").text();
    //     var qty = $row.find(".qty").text();
    //     var statuspembayaran = $row.find(".statuspembayaran").text();
    //     var alamat = $row.find(".alamat").text();
    //     var iddet = $row.find(".iddet").text();
    //     var accnumber = $row.find(".accnumber").text();
    //     var idlayanandetail = $row.find(".idlayanandetail").text();
    //     var kodeheader = $row.find(".kodeheader").text();
    //     var idhed = $row.find(".idhed").text();
    //     var tglinput = $row.find(".tgl_input").text();
    //     var norm = $row.find(".norm").text();
    //     var namatarif = $row.find(".namatarif").text();

    //     var gt = $row.find(".gt").text();
    //     Swal.fire({
    //         title: "Yakin RETUR data?",
    //         icon: 'warning',
    //         showCancelButton: true,
    //         confirmButtonColor: '#3085d6',
    //         confirmButtonText: 'Ya',
    //         cancelButtonColor: '#d33',
    //         cancelButtonText: "Batal"

    //     }).then(result => {
    //         //jika klik ya maka arahkan ke proses.php
    //         if (result.isConfirmed) {
    //             $.ajax({
    //                 async: true,
    //                 type: 'post',
    //                 dataType: 'json',
    //                 data: {
    //                     _token: "{{ csrf_token() }}",
    //                     kodepenjamin,
    //                     kodekunjungan,
    //                     counter,
    //                     qty,
    //                     statuspembayaran,
    //                     alamat,
    //                     iddet,
    //                     accnumber,
    //                     idlayanandetail,
    //                     kodeheader,
    //                     idhed,
    //                     tglinput,
    //                     norm,
    //                     namatarif,
    //                     gt
    //                 },
    //                 error: function(data) {
    //                     spinner.hide()
    //                     Swal.fire({
    //                         icon: 'error',
    //                         title: 'Ooops....',
    //                         text: 'Sepertinya ada masalah......',
    //                         footer: ''
    //                     })
    //                 },
    //                 success: function(data) {
    //                     spinner.hide()
    //                     Swal.fire({
    //                         icon: 'success',
    //                         title: 'OK',
    //                         text: data.message,
    //                         footer: ''
    //                     })
    //                     ambildata()
    //                 }
    //             });
    //         }
    //     })
    //     return false;
    // });
</script>
@endsection