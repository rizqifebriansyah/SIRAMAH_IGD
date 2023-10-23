<div class="card-header">
    <h3 class="card-title">ASSESMENT MEDIS INSTALASI GAWAT DARURAT (IGD)</h3>
</div>

<div class="card-body">
    <div class="card">
        <div class="card-header text-bold bg-warning" style="text-align: center;">S.O.A.P</div>
        <form action="" class="formerm">
            <div class="card-body">
                <!-- assesmen dokter -->
                <table class="table">
                    <tbody>
                        <div class="row">
                            <div class="col-sm-3">

                                <div class="form-group">
                                    <center>
                                        <h3>Subject</h3>
                                    </center>
                                    <textarea class="form-control" id="subject" name="subject" rows="4" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="col-sm-3">

                                <div class="form-group">
                                    <center>
                                        <h3>Object</h3>
                                    </center>
                                    <textarea class="form-control" id="objek" name="objek" rows="4" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="col-sm-3">

                                <div class="form-group">
                                    <center>
                                        <h3>Assesmen</h3>
                                    </center>
                                    <textarea class="form-control" id="assesmen" name="assesmen" rows="4" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="col-sm-3">

                                <div class="form-group">
                                    <center>
                                        <h3>Planning</h3>
                                    </center>
                                    <textarea class="form-control" id="planning" name="planning" rows="4" placeholder=""></textarea>
                                </div>
                            </div>
                        </div>
                      
                    </tbody>
                </table>

               

             


               

                <!-- Cara Keluar -->

                <div class="accordion" id="accordionExample3">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true"
                                    aria-controls="collapseOne3">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Cara Keluar Dari Instalasi Gawat
                                    Darurat
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne3" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample3">
                            <div class="card-body bg-light">


                                            @foreach ($alasanpulang as $i => $p)
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="pulang" id="pulang"
                                                                value="{{ $p->alasan_pulang }}">
                                                            <label
                                                                class="form-check-label">{{ $p->alasan_pulang }}</label>
                                                        </div>

                                                    </div>
                                            @endforeach


                            </div>
                        </div>
                    </div>
                </div>

                <!-- Keadaan Pasien  -->

                <div class="accordion" id="accordionExample4">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-light font-weight" type="button"
                                    data-toggle="collapse" data-target="#collapseOne4" aria-expanded="true"
                                    aria-controls="collapseOne4">
                                    <i class="bi bi-ticket-detailed mr-1 ml-1"></i> Keadaan Pasien Saat Keluar
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne4" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample4">
                            <div class="card-body bg-light">

                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="sembuh"
                                                        name="sembuh" value="Sembuh">
                                                    <label class="form-check-label" for="exampleCheck1">Sembuh
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="tidaksembuh"
                                                        name="tidaksembuh" value="Tidak Sembuh">
                                                    <label class="form-check-label" for="exampleCheck1">Tidak Sembuh
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="perbaikan"
                                                        name="perbaikan" value="Perbaikan">
                                                    <label class="form-check-label" for="exampleCheck1">Perbaikan
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="Meninggal"
                                                        name="Meninggal" value="Meninggal">
                                                    <label class="form-check-label" for="exampleCheck1">Meninggal
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="4">

                                                <textarea class="form-control" id="keteranganpulang" name="keteranganpulang" placeholder=""></textarea>

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div type="button" class="btn float-right btn-success simpanassesperawat" style="margin-top: 20px;">SIMPAN
                </div>

            </div>

        </form>
    </div>
</div>
</div>

<script>
  
    $(".simpanassesperawat").click(function() {
        var data = $('.formerm').serializeArray();
        var subject = $('#subject').val()
        var objek = $('#objek').val()
        var assesmen = $('#assesmen').val()
        var planning = $('#planning').val()
        var norm = $('#norm').val()
        var kj = $('#kj').val()
        var tglmasuk = $('#tglmasuk').val()

        // var sumberdata = $("#sumberdata:checked").val();
        Swal.fire({
            title: "Yakin Simpan Assesmen?",
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
                        data: JSON.stringify(data),
                        subject: $('#subject').val(),
                        objek: $('#objek').val(),
                        assesmen: $('#assesmen').val(),
                        planning: $('#planning').val(),
                        norm: $('#norm').val(),
                        kj: $('#kj').val(),
                        tglmasuk: $('#tglmasuk').val(),

                    },
                    url: '<?= route('simpanassemenperawat') ?>',

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


                        }
                    }
                });
            }
        })
        return false;
    });
</script>
