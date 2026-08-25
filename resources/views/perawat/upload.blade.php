<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">Upload Dokumen IGD</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-2"><a class=" btn btn-info btn-block " id="uploadekg">
                    <i class="bi bi-journal-text"></i>
                    Hasil EKG
                </a></div>
            <div class="col-md-2"><a class=" btn btn-info btn-block " id="uploadctg">
                    <i class="bi bi-journal-text"></i>
                    CTG
                </a></div>
            <div class="col-md-2"><a class=" btn btn-info btn-block " id="uploadusg">
                    <i class="bi bi-journal-text"></i>
                    USG
                </a></div>
            <div class="col-md-2"><a class=" btn btn-info btn-block " id="uploadpartograp">
                    <i class="bi bi-journal-text"></i>
                    Partograp
                </a></div>
            <div class="col-md-2"><a class=" btn btn-info btn-block " id="uploadkuret">
                    <i class="bi bi-journal-text"></i>
                    persetujuan kuret
                </a></div>
            <div class="col-md-2"><a class=" btn btn-info btn-block " id="uploadbiopsi">
                    <i class="bi bi-journal-text"></i>
                    Biopsi
                </a></div>
            <div class="col-md-2"><a class=" btn btn-info btn-block mt-2" id="uploadlaminaria">
                    <i class="bi bi-journal-text"></i>
                    Laminaria
                </a></div>
            <div class="col-md-2"><a class=" btn btn-info btn-block mt-2" id="uploadskl">
                    <i class="bi bi-journal-text"></i>
                    Surat Keterangan Lahir
                </a></div>
            <div class="col-md-2"><a class=" btn btn-info btn-block mt-2" id="uploadspp">
                    <i class="bi bi-journal-text"></i>
                    Surat Penolakan Perawatan
                </a></div>

            <div class="col-md-2"><a class=" btn btn-info btn-block mt-2" id="uploadtransfusi">
                    <i class="bi bi-journal-text"></i>
                    Surat Persetujuan Transfusi Darah
                </a></div>

            <div class="col-md-2"><a class=" btn btn-info btn-block mt-2" id="uploadpathway">
                    <i class="bi bi-journal-text"></i>
                    Clinical Pathway
                </a></div>
            <!-- <div class="col-md-2"><a class=" btn btn-info btn-block " id="uploadtindakandokter">
                    <i class="bi bi-journal-text"></i>
                    Informasi Tindakan Dokter
                </a></div>  -->
            <!-- <div class="col-md-2"><a class=" btn btn-info btn-block " id="uploadtransfer">
                    <i class="bi bi-journal-text"></i>
                    Catatan Transfer Pasien
                </a></div> -->
            <!-- <div class="col-md-2"><a class=" btn btn-info btn-block " id="uploadobservasi">
                    <i class="bi bi-journal-text"></i>
                    Observasi
                </a></div>
             <div class="col-md-2"><a class=" btn btn-info btn-block " id="uploadconcern">
                    <i class="bi bi-journal-text"></i>
                    Inform Concern
                </a></div> -->
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
        <!-- formctg -->
        <div id="formctg" class="modalctg">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">
                <span class="closectg float-right">&times;</span>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload Hasil CTG</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form class="formuploadctg">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Rekamedis</label>
                                <input type="email" class="form-control" id="norm" name="norm" value="{{$norm}}">
                                <input type="email" class="form-control" id="kj" name="kj" value="{{$kj}}">

                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">Upload Hasil CTG</label>
                                <input class="form-control" type="file" name="ctg" id="ctg" value="">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" class="btn btn-warning mb-2 simpanhasilctg" id="simpanhasilctg">Simpan Berkas</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>

        <!-- formusg -->
        <div id="formusg" class="modalusg">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">
                <span class="closeusg float-right">&times;</span>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload Hasil USG</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form class="formuploadusg">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Rekamedis</label>
                                <input type="email" class="form-control" id="norm" name="norm" value="{{$norm}}">
                                <input type="email" class="form-control" id="kj" name="kj" value="{{$kj}}">

                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">Upload Hasil USG</label>
                                <input class="form-control" type="file" name="usg" id="usg" value="">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" class="btn btn-warning mb-2 simpanhasilusg" id="simpanhasilusg">Simpan Berkas</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>


        <!-- formpartograp -->
        <div id="formpartograp" class="modalpartograp">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">
                <span class="closepartograp float-right">&times;</span>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload Hasil Partograp</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form class="formuploadpartograp">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Rekamedis</label>
                                <input type="email" class="form-control" id="norm" name="norm" value="{{$norm}}">
                                <input type="email" class="form-control" id="kj" name="kj" value="{{$kj}}">

                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">Upload Hasil Partograp</label>
                                <input class="form-control" type="file" name="partograp" id="partograp" value="">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" class="btn btn-warning mb-2 simpanhasilpartograp" id="simpanhasilpartograp">Simpan Berkas</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>


        <!-- formkuret -->
        <div id="formkuret" class="modalkuret">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">
                <span class="closekuret float-right">&times;</span>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload Hasil Kuret</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form class="formuploadkuret">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Rekamedis</label>
                                <input type="email" class="form-control" id="norm" name="norm" value="{{$norm}}">
                                <input type="email" class="form-control" id="kj" name="kj" value="{{$kj}}">

                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">Upload Hasil Kuret</label>
                                <input class="form-control" type="file" name="kuret" id="kuret" value="">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" class="btn btn-warning mb-2 simpanhasilkuret" id="simpanhasilkuret">Simpan Berkas</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>



        <!-- formbiopsi -->
        <div id="formbiopsi" class="modalbiopsi">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">
                <span class="closebiopsi float-right">&times;</span>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload Hasil Biopsi</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form class="formuploadbiopsi">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Rekamedis</label>
                                <input type="email" class="form-control" id="norm" name="norm" value="{{$norm}}">
                                <input type="email" class="form-control" id="kj" name="kj" value="{{$kj}}">

                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">Upload Hasil Biopsi</label>
                                <input class="form-control" type="file" name="biopsi" id="biopsi" value="">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" class="btn btn-warning mb-2 simpanhasilbiopsi" id="simpanhasilbiopsi">Simpan Berkas</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>




        <!-- formlaminaria -->
        <div id="formlaminaria" class="modallaminaria">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">
                <span class="closelaminaria float-right">&times;</span>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload Hasil Laminaria</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form class="formuploadlaminaria">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Rekamedis</label>
                                <input type="email" class="form-control" id="norm" name="norm" value="{{$norm}}">
                                <input type="email" class="form-control" id="kj" name="kj" value="{{$kj}}">

                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">Upload Hasil Laminaria</label>
                                <input class="form-control" type="file" name="laminaria" id="laminaria" value="">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" class="btn btn-warning mb-2 simpanhasillaminaria" id="simpanhasillaminaria">Simpan Berkas</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>


        <!-- formskl -->
        <div id="formskl" class="modalskl">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">
                <span class="closeskl float-right">&times;</span>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload Hasil Surat Keterangan Lahir</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form class="formuploadskl">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Rekamedis</label>
                                <input type="email" class="form-control" id="norm" name="norm" value="{{$norm}}">
                                <input type="email" class="form-control" id="kj" name="kj" value="{{$kj}}">

                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">Upload Hasil Surat Keterangan Lahir</label>
                                <input class="form-control" type="file" name="skl" id="skl" value="">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" class="btn btn-warning mb-2 simpanhasilskl" id="simpanhasilskl">Simpan Berkas</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- formtransfusi -->
        <div id="formtransfusi" class="modaltransfusi">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">
                <span class="closetransfusi float-right">&times;</span>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload Hasil Persetujan Transfusi Darah</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form class="formuploadtransfusi">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Rekamedis</label>
                                <input type="email" class="form-control" id="norm" name="norm" value="{{$norm}}">
                                <input type="email" class="form-control" id="kj" name="kj" value="{{$kj}}">

                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">Upload Hasil Persetujan Transfusi Darah</label>
                                <input class="form-control" type="file" name="transfusi" id="transfusi" value="">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" class="btn btn-warning mb-2 simpanhasiltransfusi" id="simpanhasiltransfusi">Simpan Berkas</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- formpathway -->
        <div id="formpathway" class="modalpathway">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">
                <span class="closepathway float-right">&times;</span>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Upload Hasil Persetujan Transfusi Darah</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <form class="formuploadpathway">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Rekamedis</label>
                                <input type="email" class="form-control" id="norm" name="norm" value="{{$norm}}">
                                <input type="email" class="form-control" id="kj" name="kj" value="{{$kj}}">

                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">Upload Hasil Persetujan Transfusi Darah</label>
                                <input class="form-control" type="file" name="pathway" id="pathway" value="">
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" class="btn btn-warning mb-2 simpanhasilpathway" id="simpanhasilpathway">Simpan Berkas</button>

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
    $(".simpanhasilctg").click(function() {
        kj = $('#kj').val()
        norm = $('#norm').val()
        var data = $('.formuploadctg').serializeArray();

        // bukti = $('#bukti').val()
        // alert(bukti)
        var files = $('#ctg')[0].files;
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
            url: '<?= route('simpanhasilctg') ?>',

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
    $(".simpanhasilusg").click(function() {
        kj = $('#kj').val()
        norm = $('#norm').val()
        var data = $('.formuploadusg').serializeArray();

        // bukti = $('#bukti').val()
        // alert(bukti)
        var files = $('#usg')[0].files;
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
            url: '<?= route('simpanhasilusg') ?>',

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
    $(".simpanhasilpartograp").click(function() {
        kj = $('#kj').val()
        norm = $('#norm').val()
        var data = $('.formuploadpartograp').serializeArray();

        // bukti = $('#bukti').val()
        // alert(bukti)
        var files = $('#partograp')[0].files;
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
            url: '<?= route('simpanhasilpartograp') ?>',

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
    $(".simpanhasilkuret").click(function() {
        kj = $('#kj').val()
        norm = $('#norm').val()
        var data = $('.formuploadkuret').serializeArray();

        // bukti = $('#bukti').val()
        // alert(bukti)
        var files = $('#kuret')[0].files;
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
            url: '<?= route('simpanhasilkuret') ?>',

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
    $(".simpanhasilbiopsi").click(function() {
        kj = $('#kj').val()
        norm = $('#norm').val()
        var data = $('.formuploadbiopsi').serializeArray();

        // bukti = $('#bukti').val()
        // alert(bukti)
        var files = $('#biopsi')[0].files;
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
            url: '<?= route('simpanhasilbiopsi') ?>',

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
    $(".simpanhasillaminaria").click(function() {
        kj = $('#kj').val()
        norm = $('#norm').val()
        var data = $('.formuploadlaminaria').serializeArray();

        // bukti = $('#bukti').val()
        // alert(bukti)
        var files = $('#laminaria')[0].files;
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
            url: '<?= route('simpanhasillaminaria') ?>',

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
    $(".simpanhasilskl").click(function() {
        kj = $('#kj').val()
        norm = $('#norm').val()
        var data = $('.formuploadskl').serializeArray();

        // bukti = $('#bukti').val()
        // alert(bukti)
        var files = $('#skl')[0].files;
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
            url: '<?= route('simpanhasilskl') ?>',

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

    $(".simpanhasiltransfusi").click(function() {
        kj = $('#kj').val()
        norm = $('#norm').val()
        var data = $('.formuploadtransfusi').serializeArray();

        // bukti = $('#bukti').val()
        // alert(bukti)
        var files = $('#transfusi')[0].files;
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
            url: '<?= route('simpanhasiltransfusi') ?>',

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
    $(".simpanhasilpathway").click(function() {
        kj = $('#kj').val()
        norm = $('#norm').val()
        var data = $('.formuploadpathway').serializeArray();

        // bukti = $('#bukti').val()
        // alert(bukti)
        var files = $('#pathway')[0].files;
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
            url: '<?= route('simpanhasilpathway') ?>',

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

    //form transfusi
    // Get the modal
    var modaltransfusi = document.getElementById("formtransfusi");

    // Get the button that opens the modal
    var btn = document.getElementById("uploadtransfusi");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closetransfusi")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modaltransfusi.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modaltransfusi.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modaltransfusi) {
            modaltransfusi.style.display = "none";
        }
    }
    //form pathway
    // Get the modal
    var modalpathway = document.getElementById("formpathway");

    // Get the button that opens the modal
    var btn = document.getElementById("uploadpathway");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closepathway")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modalpathway.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modalpathway.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modalpathway) {
            modalpathway.style.display = "none";
        }
    }



    //form ctg
    // Get the modal
    var modalctg = document.getElementById("formctg");

    // Get the button that opens the modal
    var btn = document.getElementById("uploadctg");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closectg")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modalctg.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modalctg.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modalctg) {
            modalctg.style.display = "none";
        }
    }

    //form usg
    // Get the modal
    var modalusg = document.getElementById("formusg");

    // Get the button that opens the modal
    var btn = document.getElementById("uploadusg");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closeusg")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modalusg.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modalusg.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modalusg) {
            modalusg.style.display = "none";
        }
    }


    //form partograp
    // Get the modal
    var modalpartograp = document.getElementById("formpartograp");

    // Get the button that opens the modal
    var btn = document.getElementById("uploadpartograp");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closepartograp")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modalpartograp.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modalpartograp.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modalpartograp) {
            modalpartograp.style.display = "none";
        }
    }

    //form partograp
    // Get the modal
    var modalpartograp = document.getElementById("formpartograp");

    // Get the button that opens the modal
    var btn = document.getElementById("uploadpartograp");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closepartograp")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modalpartograp.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modalpartograp.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modalpartograp) {
            modalpartograp.style.display = "none";
        }
    }

    //form kuret
    // Get the modal
    var modalkuret = document.getElementById("formkuret");

    // Get the button that opens the modal
    var btn = document.getElementById("uploadkuret");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closekuret")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modalkuret.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modalkuret.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modalkuret) {
            modalkuret.style.display = "none";
        }
    }



    //form biopsi
    // Get the modal
    var modalbiopsi = document.getElementById("formbiopsi");

    // Get the button that opens the modal
    var btn = document.getElementById("uploadbiopsi");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closebiopsi")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modalbiopsi.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modalbiopsi.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modalbiopsi) {
            modalbiopsi.style.display = "none";
        }
    }





    //form laminaria
    // Get the modal
    var modallaminaria = document.getElementById("formlaminaria");

    // Get the button that opens the modal
    var btn = document.getElementById("uploadlaminaria");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closelaminaria")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modallaminaria.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modallaminaria.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modallaminaria) {
            modallaminaria.style.display = "none";
        }
    }

    //form skl
    // Get the modal
    var modalskl = document.getElementById("formskl");

    // Get the button that opens the modal
    var btn = document.getElementById("uploadskl");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closeskl")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modalskl.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modalskl.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modalskl) {
            modalskl.style.display = "none";
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