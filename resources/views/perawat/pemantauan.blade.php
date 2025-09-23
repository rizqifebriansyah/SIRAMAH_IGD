<div class="card-header">
    <h3 class="card-title">PEMANTAUAN TANDA VITAL PASIEN GAWAT DARURAT</h3>
</div>
<div class="ml-2">
    <form id="dynamic-form" class="formpemantauan">
        <div id="form-container">
            <div class="row mt-2">
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
                        <label for="name">gcs</label>
                        <input type="text" name="gcs" id="gcs" value="" class=" form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="name">Pupil</label>
                        <input type="text" name="pupil" id="pupil" value="" class=" form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="name">PU</label>
                        <input type="text" name="pu" id="pu" value="" class=" form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="name">Nyeri</label>
                        <input type="text" name="nyeri" id="nyeri" value="" class=" form-control">
                    </div>
                </div>

                <div class="col-3">
                    <div type="button" class="btn float-left btn-success simpanpemantauan" style="margin-top: 20px;">
                        SIMPAN
                    </div>
                    <div type="button" class="btn float-left btn-success cekkpemantauan ml-2" style="margin-top: 20px;">
                        check
                    </div>
                </div>


            </div>

        </div>
    </form>
</div>

<div class="hasilinput ml-2 mt-2"></div>


<script>
    $(".simpanpemantauan").click(function() {


        var ttd = $("#ttd").val();
        var kj = $("#kj").val();
        var norm = $("#norm").val();
        var rr = $("#rr").val();
        var nadi = $("#nadi").val();
        var suhu = $("#suhu").val();
        var gcs = $("#gcs").val();
        var pupil = $("#pupil").val();
        var pu = $("#pu").val();
        var nyeri = $("#nyeri").val();





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
                        pu: $("#pu").val(),
                        nyeri: $("#nyeri").val()


                    },
                    url: '<?= route('simpanpemantauan') ?>',

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