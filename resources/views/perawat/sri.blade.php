<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">Surat Rujukan Intern</h3>
    </div>
    <div class="card-body">

        @if ($spri == null)
        <h1>Belum ada Assesment</h1>
        @else
        <form action="" class="formsri">

            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <tbody>

                            <tr>
                                <td class="text-bold font-italic">Nomor Rekam Medis</td>
                                <td colspan="3">

                                    <textarea class="form-control" id="norm" name="norm">{{ $spri[0]->no_rm }}</textarea>
                                    <input type="text" id="kj" name="kj" hidden value="{{ $spri[0]->kode_kunjungan }}">

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Nama pasien</td>
                                <td colspan="3">

                                    <textarea class="form-control" id="namapasien" name="namapasien">{{ $spri[0]->nama_px }}</textarea>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Umur pasien</td>
                                <td colspan="3">

                                    <textarea class="form-control" id="umur" name="umur">{{ $spri[0]->umur }}</textarea>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Alamat pasien</td>
                                <td colspan="3">

                                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Ketik alamat  pasien ...">{{ $spri[0]->alamat }}</textarea>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Diagnosa Sementara pasien</td>
                                <td colspan="3">

                                    <textarea class="form-control" id="diagnosa" name="diagnosa" placeholder="Ketik diagnosa   pasien ...">{{ $spri[0]->diag_00 }}</textarea>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Penyebab Kecelakaan </td>
                                <td colspan="3">

                                    <textarea class="form-control" id="kecelakaan " name="kecelakaan " placeholder="Ketik kecelakaan   pasien ..."></textarea>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Dirawat di ruang</td>
                                <td colspan="3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select class="form-control select2" name="kodeunit" id="kodeunit">
                                                <option value=""> Pilih Ruangan</option>
                                                @foreach ($poli as $i => $p)
                                                <option value="{{ $p->kode_unit }}">{{ $p->nama_unit }}
                                                </option>
                                                @endforeach
                                                <button type="button" class="btn btn-primary mb-2" onclick="cariruangan()"> <i class="bi bi-search-heart"></i></button>

                                            </select>
                                        </div>
                                        <div class="col-md 3">
                                            <select class="form-control select2" name="kelas" id="kelas">
                                                <option value="">kelas</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>

                                            </select>

                                        </div>
                                        <div class="col-md-3">
                                            <button type="button" class="btn btn-primary mb-2" onclick="cariruangan()"> <i class="bi bi-search-heart"></i></button>

                                        </div>
                                    </div>
                                    <div class="row detailruangan">



                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">DPJP</td>
                                <td colspan="3">

                                    <textarea class="form-control" id="dpjp" name="dpjp" placeholder="Ketik dpjp   pasien ...">{{ $data[0]->nama_dokter }}</textarea>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </form>
        <div type="button" class="btn float-right btn-success simpansri" style="margin-top: 20px;">
            SIMPAN
        </div>
        @endif

    </div>

    <script>
        function cariruangan() {
            spinner = $('#loader2');
            spinner.show();
            kelas = $('#kelas').val()
            kodeunit = $('#kodeunit').val()

            $.ajax({
                type: "post",
                data: {
                    _token: "{{ csrf_token() }}",
                    kelas,
                    kodeunit

                },
                url: " {{ route('cariruangan') }}",
                error: function(data) {
                    spinner.hide()
                    alert('Errorrr!!!')
                },
                success: function(response) {
                    spinner.hide();
                    $('.detailruangan').html(response);
                }
            })
        }



        $(".simpansri").click(function() {
            var data = $('.formsri').serializeArray();
            var norm = $('#norm').val()
            var kj = $('#kj').val()
            var namapasien = $('#namapasien').val()
            var umur = $('#umur').val()
            var alamat = $('#alamat').val()
            var diagnosa = $('#diagnosa').val()
            var kecelakaan = $('#kecelakaan').val()
            var prefix = $('#prefix').val()
            var nobed = $('#nobed').val()
            var kamar = $('#kamar').val()
            var dpjp = $('#dpjp').val()
            var kelas = $('#kelas').val()


            // var sumberdata = $("#sumberdata:checked").val();
            Swal.fire({
                title: "Yakin Simpan Rujukan Intern?",
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
                            assesmen: $('#assesmen').val(),
                            norm: $('#norm').val(),
                            kj: $('#kj').val(),
                            namapasien: $('#namapasien').val(),
                            umur: $('#umur').val(),
                            alamat: $('#alamat').val(),
                            diagnosa: $('#diagnosa').val(),
                            kecelakaan: $('#kecelakaan').val(),
                            prefix: $('#prefix').val(),
                            nobed: $('#nobed').val(),
                            kamar: $('#kamar').val(),
                            kelas: $('#kelas').val(),
                            dpjp: $('#dpjp').val()


                        },
                        url: '<?= route('simpansri') ?>',

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