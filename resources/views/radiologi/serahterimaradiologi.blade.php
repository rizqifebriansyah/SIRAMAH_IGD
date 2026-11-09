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

                                <tr>
                                    <td>Hubungan Keluarga</td>
                                    <td>
                                        <select class="form-control select2" name="hubungan" id="hubungan">
                                            <option value="Pasien Sendiri">Pasien Sendiri</option>
                                            <option value="Keluarga">Keluarga</option>

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
                        <div class="row">
                            <div class="col-md-5">

                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label>Tanda Tangan</label>

                                    <div style="border: 1px solid #ccc; width: 50%;">
                                        <canvas id="signature-pad"
                                            width="600"
                                            height="200"
                                            style="width:100%; height:200px; touch-action:none;">
                                        </canvas>
                                    </div>

                                    <input type="hidden" name="ttd" id="ttd">

                                    <button type="button" id="clear"
                                        class="btn btn-warning mt-2">
                                        Hapus TTD
                                    </button>
                                </div>
                            </div>
                        </div>


                        <p class="ml-3 mb-3">
                            <button type="button" class="bg-success btn float-right " id="">UPDATE</button>
                        </p>
                        <p class="ml-3 mb-3">
                            <button type="button" class="bg-info btn   ml-2 simpanserahterima" id="simpanserahterima">Simpan</button>
                        </p>
                    </form>
                </div>

                <script>
                    const canvas = document.getElementById('signature-pad');
                    const ctx = canvas.getContext('2d');

                    let drawing = false;

                    ctx.lineWidth = 2;
                    ctx.lineCap = 'round';
                    ctx.strokeStyle = '#000';

                    function getPosition(e) {
                        const rect = canvas.getBoundingClientRect();

                        return {
                            x: (e.clientX - rect.left) *
                                (canvas.width / rect.width),
                            y: (e.clientY - rect.top) *
                                (canvas.height / rect.height)
                        };
                    }

                    canvas.addEventListener('pointerdown', e => {
                        drawing = true;
                        canvas.setPointerCapture(e.pointerId);

                        const pos = getPosition(e);
                        ctx.beginPath();
                        ctx.moveTo(pos.x, pos.y);
                    });

                    canvas.addEventListener('pointermove', e => {
                        if (!drawing) return;

                        const pos = getPosition(e);
                        ctx.lineTo(pos.x, pos.y);
                        ctx.stroke();
                    });

                    canvas.addEventListener('pointerup', () => {
                        drawing = false;
                    });

                    canvas.addEventListener('pointercancel', () => {
                        drawing = false;
                    });

                    document.getElementById('clear').onclick = () => {
                        ctx.clearRect(0, 0, canvas.width, canvas.height);
                    };

                    document.querySelector('form').addEventListener('submit', function(e) {
                        const image = canvas.toDataURL('image/png');

                        if (ctx.getImageData(0, 0, canvas.width, canvas.height)
                            .data.some((v, i) => i % 4 === 3 && v > 0)) {
                            document.getElementById('ttd').value = image;
                        } else {
                            e.preventDefault();
                            alert('Silakan isi tanda tangan terlebih dahulu!');
                        }
                    });
                </script>