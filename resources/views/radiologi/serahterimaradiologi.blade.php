                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-text-width"></i>
                            Detail Pasien Order Radiologi {{$pb[0]->ACCESSIONNUMBER}}
                        </h3>
                    </div>

                    <form action="" class="form_barang">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>NORM</td>
                                    <td>
                                        <input type="text" value="{{$pb[0]->PID}}" class="form-control" name="norm" id="norm" />
                                        <input hidden type="text" value="{{$pb[0]->ACCESSIONNUMBER}}" class="form-control" name="acc" id="acc" />
                                        <input type="text" value="{{$pb[0]->KODE_KUNJUNGAN}}" class="form-control" name="kj" id="kj" />


                                    </td>


                                </tr>
                                <tr>
                                    <td>Nama Pasien</td>
                                    <td>
                                        <input type="text" value="{{$pb[0]->NAME}}" class="form-control" name="namapx" id="namapx" />


                                    </td>


                                </tr>
                                <tr>
                                    <td>Layanan Radiologi</td>
                                    <td>
                                        <input type="text" value="{{$pb[0]->PROCEDURENAME}}" class="form-control" name="pemeriksaan" id="pemeriksaan" />


                                    </td>


                                </tr>
                                <tr>
                                    <td>Dokter Radiologi</td>
                                    <td>

                                        @if ($pb[0]->APPROVER != NULL)
                                        <input type="text" value="{{$pb[0]->APPROVER}}" class="form-control" name="dorad" id="dorad" />

                                        @else

                                        <select class="form-control select2" name="dorad" id="dorad">
                                            <option value=""></option>

                                            <option value="dr. Nunik Royyani, Sp.Rad">dr. Nunik Royyani, Sp.Rad</option>
                                            <option value="dr. Muhammad Amar Latief, Sp.Rad">dr. Muhammad Amar Latief, Sp.Rad</option>

                                        </select>
                                        @endif
                                    </td>


                                </tr>

                                <tr>
                                    <td>Hubungan Keluarga</td>
                                    <td>
                                        <select class="form-control select2" name="hubungan" id="hubungan">
                                            <option value="Pasien Sendiri">Pasien Sendiri</option>
                                            <option value="Keluarga">Keluarga</option>
                                            <option value="Ruangan">Ruangan</option>


                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Keluarga</td>
                                    <td>
                                        <input type="text" value="" class="form-control" name="nama_keluarga" id="nama_keluarga" />

                                    </td>
                                </tr>
                                <tr>
                                    <td>Nomor WA</td>
                                    <td>
                                        <input type="text" value="" class="form-control" name="nomor_wa" id="nomor_wa" />

                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <input type="text" value="" class="form-control" name="email" id="email" />

                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Petugas</td>
                                    <td>
                                        <input type="text" value="" class="form-control" name="nama_petugas" id="nama_petugas" />

                                    </td>
                                </tr>


                            </tbody>
                        </table>
                        @if ($serah == NULL)

                        @else
                        <table id="tablekrad" class="table tablekrad table-bordered">
                            <thead>
                                <th>tgl</th>

                                <th>Nama Tindakan</th>
                                <th>Nama Pasien</th>
                                <th>Petugas</th>
                            </thead>
                            <tbody>
                                @foreach ($serah as $krad => $krd)
                                <tr>

                                    <td>{{ $krd->tgl_input }}</td>
                                    <td>{{ $krd->pemeriksaan_rad }}</td>

                                    <td>{{ $krd->nama_keluarga }}</td>
                                    <td>{{ $krd->petugas }}</td>



                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        @endif

                        <!-- <p class="ml-3 mb-3">
                            <button type="button" class="bg-success btn float-right " id="">UPDATE</button>
                        </p> -->
                        <p class="ml-3 mb-3">
                            <button type="button" class="bg-info btn   ml-2 simpanserahterima" id="simpanserahterima">Simpan</button>
                        </p>
                    </form>
                </div>

                <script>
                    $(".simpanserahterima").click(function() {


                        var acc = $('#acc').val()
                        var norm = $('#norm').val()
                        var kj = $('#kj').val()
                        var namapx = $('#namapx').val()
                        var pemeriksaan = $('#pemeriksaan').val()
                        var dorad = $('#dorad').val()
                        var hubungan = $('#hubungan').val()
                        var nama_keluarga = $('#nama_keluarga').val()
                        var nomor_wa = $('#nomor_wa').val()
                        var nama_petugas = $('#nama_petugas').val()
                        var email = $('#email').val()









                        Swal.fire({
                            title: "Yakin Serah terima?",
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
                                        acc: $('#acc').val(),
                                        norm: $('#norm').val(),
                                        kj: $('#kj').val(),
                                        namapx: $('#namapx').val(),
                                        pemeriksaan: $('#pemeriksaan').val(),
                                        dorad: $('#dorad').val(),
                                        hubungan: $('#hubungan').val(),
                                        nama_keluarga: $('#nama_keluarga').val(),
                                        nomor_wa: $('#nomor_wa').val(),
                                        email: $('#email').val(),

                                        nama_petugas: $('#nama_petugas').val()


                                    },
                                    url: '<?= route('simpanserahterima') ?>',
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