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

                                        <select class="form-control select2" name="dorad" id="dorad">
                                            <option value="DOK036">dr. Nunik Royyani, Sp.Rad</option>
                                            <option value="DOK369">dr. Muhammad Amar Latief, Sp.Rad</option>

                                        </select>
                                    </td>


                                </tr>
                                {{-- <tr>
                                    <td>BAGIAN TUBUH</td>
                                    <td>
                                        <select class="form-control select2" name="tubuh" id="tubuh">
                                            <option value=""> {{$pb[0]->BODYPART}}</option>
                                <option value="Thorax">Thorax</option>
                                <option value="Kontras">Kontras</option>
                                <option value="Spine">Spine</option>
                                <option value="Upper extremity">Upper extremity</option>
                                <option value="Head">Head</option>
                                <option value="Lower extremity">Lower extremity</option>
                                <option value="Abdomen">Abdomen</option>
                                <option value="Mammography">Mammography</option>
                                <option value="Panoramic">Panoramic</option>
                                </select>
                                </td>
                                </tr> --}}
                                <tr>
                                    <td>MODALITY</td>
                                    <td>
                                        <select class="form-control select2" name="modality" id="modality">
                                            <option value=""> {{$pb[0]->MODALITY}}</option>
                                            <option value="CR">CR</option>
                                            <option value="DX">DX</option>
                                            <option value="CT">CT</option>
                                            <option value="US">US</option>
                                            <option value="MR">MR</option>
                                            <option value="PX">PX</option>

                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>keterangan</td>
                                    <td>
                                        <select class="form-control select2" name="kritis" id="kritis">
                                            <option value="1">kritis</option>
                                            <option value="0">Tidak kritis</option>



                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hasil konsul</td>
                                    <td>
                                        <textarea class="form-control" name="hasil_konsul" id="hasil_konsul" rows="2"></textarea>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                         @if ($kritisrad == NULL)

                @else
                <table id="tablekrad" class="table tablekrad table-bordered">
                    <thead>
                        <th>tgl</th>

                        <th>Nama Tindakan</th>
                        <th>Nama Dokter</th>
                        <th>Hasil</th>
                        <th> Validasi</th>
                    </thead>
                    <tbody>
                        @foreach ($kritisrad as $krad => $krd)
                        <tr>

                            <td>{{ $krd->tgl_input }}</td>
                            <td>{{ $krd->pemeriksaan_rad }}</td>

                            <td>{{ $krd->nama_dpjp }}</td>
                            <td>
                                {{ $krd->kritis_radiologi }}
                            </td>
                            <td>
                                                        <div style="
                                display: inline-block;
                                border: 2px solid #dc3545;
                                color: #dc3545;
                                padding: 6px 12px;
                                font-weight: bold;
                                font-size: 12px;
                                text-align: center;
                                border-radius: 4px;
                                background-color: #fff5f5;
                                letter-spacing: 1px;
                                line-height: 1.4;
                            ">
                                    KRITIS RAD
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                @endif
                        <p class="ml-3 mb-3">
                            <button type="button" class="bg-success btn float-right updateradiologi" id="updateradiologi">UPDATE</button>
                        </p>
                        <p class="ml-3 mb-3">
                            <button type="button" class="bg-info btn   ml-2 simpankritisradiologi" id="simpankritisradiologi">Simpan Kritis</button>
                        </p>
                    </form>
                </div>

                <script>
                    $(".updateradiologi").click(function() {

                        var acc = $('#acc').val()
                        var modality = $('#modality').val()

                        Swal.fire({
                            title: "Yakin Simpan Layanan?",
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
                                        modality: $('#modality').val()
                                    },
                                    url: '<?= route('updateradiologi') ?>',
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
                    $(".simpankritisradiologi").click(function() {
                      var norm = $('#norm').val()
                        var kj = $('#kj').val()
                        var dorad = $('#dorad').val()
                        var kritis = $('#kritis').val()
                        var hasil_konsul = $('#hasil_konsul').val()
                        var pemeriksaan = $('#pemeriksaan').val()









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
                                        norm: $('#norm').val(),
                                        kj: $('#kj').val(),
                                        dorad: $('#dorad').val(),
                                        kritis: $('#kritis').val(),
                                        pemeriksaan: $('#pemeriksaan').val(),

                                        
                                        hasil_konsul: $('#hasil_konsul').val()
                                    },
                                    url: '<?= route('simpankritisradiologi') ?>',

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