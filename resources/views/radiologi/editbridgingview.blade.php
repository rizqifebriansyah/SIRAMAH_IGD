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
                                        <input type="text" value="{{$pb[0]->PROCEDURENAME}}" class="form-control" name="namapx" id="namapx" />


                                    </td>


                                </tr>
                                <tr>
                                    <td>Dokter Radiologi</td>
                                    <td>
                                        <input type="text" value="{{$pb[0]->ATTENDINGDOCTORNAME}}" class="form-control" name="dorad" id="dorad" />
                                        <input type="text" value="{{$pb[0]->ATTENDINGDOCTORID}}" class="form-control" hidden name="koddorad" id="koddorad" />
                                        <!-- <select class="form-control select2" name="dorad" id="dorad">
                        <option value=""> -- PILIH DOKTER --</option>
                        <option value="dr. Nunik Royyani, Sp.Rad">dr. Nunik Royyani, Sp.Rad</option>
                        <option value="dr. Muhammad Amar Latief, Sp.Rad">dr. Muhammad Amar Latief, Sp.Rad</option>

                    </select> -->
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
                            </tbody>
                        </table>
                        <p class="ml-3 mb-3">
                            <button type="button" class="bg-success float-right updateradiologi" id="updateradiologi">UPDATE</button>
                        </p>
                    </form>
                </div>

                <script>
                    $(".updateradiologi").click(function() {

                        var acc = $('#acc').val()
                        var modality = $('#modality').val()

                        Swal.fire({
                            title: "Yakin Simpan Layanan?"
                            , icon: 'warning'
                            , showCancelButton: true
                            , confirmButtonColor: '#3085d6'
                            , confirmButtonText: 'Ya'
                            , cancelButtonColor: '#d33'
                            , cancelButtonText: "Batal"

                        }).then(result => {
                            //jika klik ya maka arahkan ke proses.php
                            if (result.isConfirmed) {
                                $.ajax({
                                    async: true
                                    , type: 'post'
                                    , dataType: 'json'
                                    , data: {
                                        _token: "{{ csrf_token() }}",
                                        acc: $('#acc').val(),
                                        modality: $('#modality').val()
                                    }
                                    , url: '<?= route('updateradiologi') ?>'
                                    , error: function(data) {
                                        Swal.fire({
                                            icon: 'error'
                                            , title: 'Oops...'
                                            , text: 'Sepertinya ada masalah ...'
                                            , footer: ''
                                        })
                                    }
                                    , success: function(data) {
                                        console.log(data)
                                        if (data.kode == 500) {
                                            Swal.fire({
                                                icon: 'error'
                                                , title: 'Oops...'
                                                , text: data.message
                                                , footer: ''
                                            })
                                        } else {
                                            Swal.fire({
                                                icon: 'success'
                                                , title: 'OK'
                                                , text: 'data berhasil disimpan'
                                                , footer: ''
                                            })

                                        }
                                    }
                                });
                            }
                        })
                        return false;
                    });

                </script>
