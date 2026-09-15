<div class="card-header">
    <h3 class="card-title">PEMANTAUAN TANDA VITAL PASIEN VK</h3>
</div>
<div class="ml-2">
    <form id="dynamic-form" class="formpemantauan">
        <div id="form-container">
            <div class="row mt-2">
              
                <div class="col-2">
                    <div class="form-group">
                        <label for="name">Diagnosa Kerja</label>
                        <input type="text" name="dk" id="dk" value="" class=" form-control">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label for="name">TD</label>
                        <input type="text" name="kj" id="kj" value="{{$kj}}" hidden class=" form-control">
                        <input type="text" name="norm" id="norm" value="{{$norm}}" hidden class=" form-control">

                        <input type="text" name="ttd" id="ttd" value="" class=" form-control">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label for="name">Nadi</label>
                        <input type="text" name="nadi" id="nadi" value="" class=" form-control">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label for="name">RR</label>
                        <input type="text" name="rr" id="rr" value="" class=" form-control">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label for="name">SUHU</label>
                        <input type="text" name="suhu" id="suhu" value="" class=" form-control">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label for="name">10'</label>
                        <input type="text" name="his" id="his" value="" class=" form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="name">lama</label>
                        <input type="text" name="lama" id="lama" value="" class=" form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="name">djj</label>
                        <input type="text" name="djj" id="djj" value="" class=" form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="name">obat/cairan</label>
                        <!-- <input type="text" name="obatcairan" id="obatcairan" value="" class=" form-control"> -->
                        <textarea class="form-control" id="obatcairan" rows="3" name="obatcairan" placeholder=""></textarea>

                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="name">tetesan</label>
                        <input type="text" name="tetesan" id="tetesan" value="" class=" form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="name">Keterangan</label>
                        <textarea class="form-control" id="keterangan" rows="3" name="keterangan" placeholder=""></textarea>

                        <!-- <input type="text" name="keterangan" id="keterangan" value="" class=" form-control"> -->
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="name">Waktu</label>
                        <input type="datetime-local" name="waktu_pantau" id="waktu_pantau" value="" class=" form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div type="button" class="btn float-left btn-success simpanpemantauan" style="margin-top: 20px;">
                        SIMPAN
                    </div>
                    <div type="button" class="btn float-left btn-success cekkpemantauan ml-2" style="margin-top: 20px;">
                        check
                    </div>
                    <div type="button" class="btn float-left btn-primary cetakpemantauan ml-2 fas fa-print" style="margin-top: 20px;">
                        Print
                    </div>
                </div>


            </div>

        </div>
    </form>
</div>

<div class="hasilinput ml-2 mt-2 mr-2"></div>


<script>
    $(".simpanpemantauanvk").click(function() {

       

        var ttd = $("#ttd").val();
        var kj = $("#kj").val();
        var norm = $("#norm").val();
        var rr = $("#rr").val();
        var nadi = $("#nadi").val();
        var suhu = $("#suhu").val();
        var gcs = $("#gcs").val();
        var pupil = $("#pupil").val();
        var urine = $("#urine").val();
        var spo2 = $("#spo2").val();

        var nyeri = $("#nyeri").val();
        var his = $("#his").val();
        var djj = $("#djj").val();
        var obatcairan = $("#obatcairan").val();
        var tetesan = $("#tetesan").val();
        var lama = $("#lama").val();


        var keterangan = $("#keterangan").val();
        var waktu_pantau = $("#waktu_pantau").val();







        Swal.fire({
            title: "Yakin Simpan Pemantauan?",
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
                      
                        ttd: $("#ttd").val(),
                        kj: $("#kj").val(),
                        norm: $("#norm").val(),
                        rr: $("#rr").val(),
                        nadi: $("#nadi").val(),
                        suhu: $("#suhu").val(),
                        gcs: $("#gcs").val(),
                        pupil: $("#pupil").val(),
                        urine: $("#urine").val(),
                        spo2: $("#spo2").val(),

                        nyeri: $("#nyeri").val(),
                        his: $("#his").val(),
                        djj: $("#djj").val(),
                        obatcairan: $("#obatcairan").val(),
                        tetesan: $("#tetesan").val(),
                        lama: $("#lama").val(),
                        keterangan: $("#keterangan").val(),
                        waktu_pantau: $("#waktu_pantau").val(),



                    },
                    url: '<?= route('simpanpemantauanvk') ?>',

                    error: function(data) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Sepertinya ada masalah ...',
                            footer: ''
                        })
                    },
                    success: function(data) {
                        console.log(data)
                        if (data.kode == 500) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: data.message,
                                footer: ''
                            })
                        } else {
                            Swal.fire({
                                icon: 'success',
                                title: 'OK',
                                text: 'data berhasil disimpan',
                                footer: ''
                            })
                            pemantauanview()


                        }

                    }
                });

            }
        })
        return false;
    });
    $(".cekkpemantauan").click(function() {
        spinner = $('#loader2');
        spinner.show();
        var kj = $("#kj").val();
        var norm = $("#norm").val();
        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                kj: $("#kj").val(),
                norm: $("#norm").val(),

            },
            url: " {{ route('pemantauanview') }}",
            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(response) {
                spinner.hide();

                $('.hasilinput').html(response);

            }
        });
    });
    $(".cetakpemantauan").click(function() {
        var kj = $("#kj").val();
        var norm = $("#norm").val();





        Swal.fire({
            title: "Apakah ingin print Resume Assesmen?",
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

                        kj: $("#kj").val(),
                        norm: $("#norm").val(),

                    },
                    url: '<?= route('cetakpemantauan') ?>',
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
                        cetakpemantauanigd(data.kj, data.norm)

                    }
                });
            }
        })
        return false;
    });

    function cetakpemantauanigd(kj, norm) {
        window.open('cetakpemantauanigd/' + kj + '/' + norm);

    }

    // $(".cekkpemantauan").click(function() {


    //     var kj = $("#kj").val();
    //     var norm = $("#norm").val();

    //     Swal.fire({
    //         title: "Yakin CEK Pemantauan?",
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
    //                     kj: $("#kj").val(),
    //                     norm: $("#norm").val(),



    //                 },
    //                 url: '<?= route('pemantauanview') ?>',

    //                 error: function(data) {
    //                     Swal.fire({
    //                         icon: 'error',
    //                         title: 'Oops...',
    //                         text: 'Sepertinya ada masalah ...',
    //                         footer: ''
    //                     })
    //                 },
    //                 success: function(data) {
    //                     console.log(data)
    //                     if (data.kode == 500) {
    //                         Swal.fire({
    //                             icon: 'error',
    //                             title: 'Oops...',
    //                             text: data.message,
    //                             footer: ''
    //                         })
    //                     } else {
    //                         Swal.fire({
    //                             icon: 'success',
    //                             title: 'OK',
    //                             text: 'data berhasil dicek',
    //                             footer: ''
    //                         })
    //                         pemantauanview()


    //                     }

    //                 }
    //             });

    //         }
    //     })
    //     return false;
    // });

    function pemantauanview() {
        var kj = $("#kj").val();
        var norm = $("#norm").val();
        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",
                kj: $("#kj").val(),
                norm: $("#norm").val(),
            },
            type: "post",
            url: " {{ route('pemantauanview') }}",
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.hasilinput').html(response);


            }
        });
    }
</script>