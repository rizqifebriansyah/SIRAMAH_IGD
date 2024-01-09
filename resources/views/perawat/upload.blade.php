<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">Upload Dokumen IGD</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3"><a class=" btn btn-info btn-block " id="uploadekg">
                    <i class="bi bi-journal-text"></i>
                    Hasil EKG
                </a></div>
            <div class="col-md-3"><a class=" btn btn-info btn-block " id="uploadspp">
                    <i class="bi bi-journal-text"></i>
                    Surat Penolakan Perawatan
                </a></div>
            <div class="col-md-3"><a class=" btn btn-info btn-block " id="uploadtindakandokter">
                    <i class="bi bi-journal-text"></i>
                    Informasi Tindakan Dokter
                </a></div>
            <div class="col-md-3"><a class=" btn btn-info btn-block " id="uploadtransfer">
                    <i class="bi bi-journal-text"></i>
                    Catatan Transfer Pasien
                </a></div>
        </div>
        <!-- formekg -->
        <div id="formekg" class="modal">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">
                <span class="close float-right">&times;</span>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload Hasil EKG</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form class="formuploadekg">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Rekamedis</label>
                                <input type="email" class="form-control" id="norm" name="norm" value="{{$norm}}">
                                <input type="email" class="form-control" id="kj" name="kj" value="{{$kj}}">

                            </div>
                            

                            <div class="form-group">
                                <label for="exampleInputFile">Upload Hasil EKG</label>
                                <input class="form-control" type="file" name="ekg" id="ekg" value="">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" class="btn btn-warning mb-2 simpanhasilekg" id="simpanhasilekg">Simpan Berkas</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>

        <!-- formspp -->
        <div id="formspp" class="modall">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">
                <span class="closee float-right">&times;</span>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload Surat Penolakan Perawatan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="formuploadspp">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Rekamedis</label>
                                <input type="email" class="form-control" id="norm" name="norm" value="{{$norm}}">
                                <input type="email" class="form-control" id="kj" name="kj" value="{{$kj}}">

                            </div>
                            


                            <div class="form-group">
                                <label for="exampleInputFile">Upload Surat</label>
                                <input class="form-control" type="file" name="spp" id="spp" value="">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" class="btn btn-warning mb-2 simpanhasilspp" id="simpanhasilspp">Simpan Berkas</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>

        <!-- formtindakan -->
        <div id="formtindakan" class="modalll">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">
                <span class="closeee float-right">&times;</span>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload Tindakan Dokter</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="formuploadtindakan">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Rekamedis</label>
                                <input type="email" class="form-control" id="norm" name="norm" value="{{$norm}}">
                                <input type="email" class="form-control" id="kj" name="kj" value="{{$kj}}">

                            </div>
                            


                            <div class="form-group">
                                <label for="exampleInputFile">Upload Hasil Tindakan</label>
                                <input class="form-control" type="file" name="tdkn" id="tdkn" value="">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" class="btn btn-warning mb-2 simpanhasiltdkn" id="simpanhasiltdkn">Simpan Berkas</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>

        <!-- formtransfer -->
        <div id="formtransfer" class="modallll">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">
                <span class="closeeee float-right">&times;</span>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload Transfer Pasien</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="formuploadtransfer">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Rekamedis</label>
                                <input type="email" class="form-control" id="norm" name="norm" value="{{$norm}}">
                                <input type="email" class="form-control" id="kj" name="kj" value="{{$kj}}">
                            </div>
                            


                            <div class="form-group">
                                <label for="exampleInputFile">Upload Hasil Transfer</label>
                                <input class="form-control" type="file" name="tf" id="tf" value="">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" class="btn btn-warning mb-2 simpanhasiltf" id="simpanhasiltf">Simpan Berkas</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>
        @if ($hasil == null)

        <h5>Belum ada file di upload</h5>
        @else
        @foreach ($hasil as $key => $h)
        <div class="accordion" id="accordionExample3" style="margin-top: 30px;">
            <div class="card">
                <div class="card-header bg-secondary" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-light font-weight" type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                            <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Hasil Upload <h5 class="float-right">{{$h->tgl_kunjungan}}</h5>
                        </button>
                    </h2>
                </div>

                <div id="collapseOne3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample3">
                    <div style="margin-top: 20px;" class="card-body">
                        <div class="row">
                            <table class="table">
                                <tbody>
                                    <tr>

                                        <td> <label for="exampleInputFile"> Hasil EKG</label></td>
                                        <td>
                                            <img width="1000px" src="{{ url('../../files/' . $h->hasil_ekg) }}" alt="" class="mr-3">

                                        </td>

                                    </tr>
                                    <tr>

                                        <td> <label for="exampleInputFile"> Surat Penolakan Perawatan</label></td>
                                        <td>
                                            <img width="1000px" src="{{ url('../../files/' . $h->surat_penolakan) }}" alt="" class="mr-3">

                                        </td>
                                    </tr>
                                    <tr>

                                        <td> <label for="exampleInputFile"> Informasi Tindakan Dokter</label></td>
                                        <td>
                                            <img width="1000px" src="{{ url('../../files/' . $h->informasi_tindakan) }}" alt="" class="mr-3">

                                        </td>
                                    </tr>
                                    <tr>

                                        <td> <label for="exampleInputFile"> Transfer Pasien</label></td>
                                        <td>
                                            <img width="1000px" src="{{ url('../../files/' . $h->transfer_pasien) }}" alt="" class="mr-3">

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        @endif
      
    </div>
</div>



<script>
    $(".simpanhasilekg").click(function() {
        kj = $('#kj').val()
        norm = $('#norm').val()
        var data = $('.formuploadekg').serializeArray();

        // bukti = $('#bukti').val()
        // alert(bukti)
        var files = $('#ekg')[0].files;
        var fd = new FormData();

        fd.append('file', files[0]);
        fd.append('_token', "{{ csrf_token() }}");
        fd.append('data', JSON.stringify(data));

        $.ajax({
            async: true,
            type: 'post',
            dataType: 'json',
            contentType: false,
            processData: false,
            data: fd,
            url: '<?= route('simpanhasilekg') ?>',

            error: function(data) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Sepertinya ada masalah ...',
                    footer: ''
                })
            },
            success: function(response) {

                console.log(data)

                Swal.fire({
                    icon: 'success',
                    title: 'OK',
                    text: 'Data berhasil disimpan!',
                    footer: ''
                })


            }
        });
    });
    $(".simpanhasilspp").click(function() {
        kj = $('#kj').val()
        norm = $('#norm').val()
        var data = $('.formuploadspp').serializeArray();

        // bukti = $('#bukti').val()
        // alert(bukti)
        var files = $('#spp')[0].files;
        var fd = new FormData();

        fd.append('file', files[0]);
        fd.append('_token', "{{ csrf_token() }}");
        fd.append('data', JSON.stringify(data));

        $.ajax({
            async: true,
            type: 'post',
            dataType: 'json',
            contentType: false,
            processData: false,
            data: fd,
            url: '<?= route('simpanhasilspp') ?>',

            error: function(data) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Sepertinya ada masalah ...',
                    footer: ''
                })
            },
            success: function(response) {

                console.log(data)

                Swal.fire({
                    icon: 'success',
                    title: 'OK',
                    text: 'Data berhasil disimpan!',
                    footer: ''
                })


            }
        });
    });
    $(".simpanhasiltdkn").click(function() {
        kj = $('#kj').val()
        norm = $('#norm').val()
        var data = $('.formuploadtindakan').serializeArray();

        // bukti = $('#bukti').val()
        // alert(bukti)
        var files = $('#tdkn')[0].files;
        var fd = new FormData();

        fd.append('file', files[0]);
        fd.append('_token', "{{ csrf_token() }}");
        fd.append('data', JSON.stringify(data));

        $.ajax({
            async: true,
            type: 'post',
            dataType: 'json',
            contentType: false,
            processData: false,
            data: fd,
            url: '<?= route('simpanhasiltdkn') ?>',

            error: function(data) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Sepertinya ada masalah ...',
                    footer: ''
                })
            },
            success: function(response) {

                console.log(data)

                Swal.fire({
                    icon: 'success',
                    title: 'OK',
                    text: 'Data berhasil disimpan!',
                    footer: ''
                })


            }
        });
    });
    $(".simpanhasiltf").click(function() {
        kj = $('#kj').val()
        norm = $('#norm').val()
        var data = $('.formuploadtindakan').serializeArray();


        var files = $('#tf')[0].files;
        var fd = new FormData();

        fd.append('file', files[0]);
        fd.append('_token', "{{ csrf_token() }}");
        fd.append('data', JSON.stringify(data));

        $.ajax({
            async: true,
            type: 'post',
            dataType: 'json',
            contentType: false,
            processData: false,
            data: fd,
            url: '<?= route('simpanhasiltf') ?>',

            error: function(data) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Sepertinya ada masalah ...',
                    footer: ''
                })
            },
            success: function(response) {

                console.log(data)

                Swal.fire({
                    icon: 'success',
                    title: 'OK',
                    text: 'Data berhasil disimpan!',
                    footer: ''
                })


            }
        });
    });


    //form ekg
    // Get the modal
    var modal = document.getElementById("formekg");

    // Get the button that opens the modal
    var btn = document.getElementById("uploadekg");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    //form spp
    // Get the modal
    var modall = document.getElementById("formspp");

    // Get the button that opens the modal
    var btn = document.getElementById("uploadspp");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closee")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modall.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modall.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modall) {
            modall.style.display = "none";
        }
    }

    //form tindakan
    // Get the modal
    var modalll = document.getElementById("formtindakan");

    // Get the button that opens the modal
    var btn = document.getElementById("uploadtindakandokter");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closeee")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modalll.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modalll.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modalll) {
            modalll.style.display = "none";
        }
    }


    //form transfer
    // Get the modal
    var modallll = document.getElementById("formtransfer");

    // Get the button that opens the modal
    var btn = document.getElementById("uploadtransfer");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closeeee")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modallll.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modallll.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modallll) {
            modallll.style.display = "none";
        }
    }
</script>