<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">Rencana Pemulangan Pasien</h3>
    </div>
    <div class="card-body">
        <form action="" class="formrencanapulang">

            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <tbody>

                            <tr>
                                <td class="text-bold font-italic">Usia lanjut (60 tahun atau lebih)</td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="60>" id="60>"
                                            value="Ya">
                                        <label class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="60>" id="60>"
                                            value="Tidak">
                                        <label class="form-check-label">Tidak</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-bold font-italic">Hambatan Mobilisasi</td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hambatan" id="hambatan"
                                            value="Ya">
                                        <label class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hambatan" id="hambatan"
                                            value="Tidak">
                                        <label class="form-check-label">Tidak</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-bold font-italic">Membutuhkan pelayanan medis dan perawatan
                                    berkelanjutan
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="medis" id="medis"
                                            value="Ya">
                                        <label class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="medis" id="medis"
                                            value="Tidak">
                                        <label class="form-check-label">Tidak</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-bold font-italic">Tergantung dengan orang lain dalam aktifitas harian
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="harian" id="harian"
                                            value="Ya">
                                        <label class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="harian" id="harian"
                                            value="Tidak">
                                        <label class="form-check-label">Tidak</label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <h4><br><br><br>jika satu ya saja terpenuhi, <br>
                        berarti pasien membutuhkan perencanaan <br> pulang khusus</h4>
                </div>
                {{-- transportasi --}}

                <div class="col-md-6">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Transportasi Pulang</td>
                                <td>
                                    <textarea class="form-control" id="kendaraan" name="kendaraan" placeholder="Ketik Kendaraan ..."></textarea>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- oreang yang mendampingi  --}}

                <div class="col-md-6">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Orang yang mendampingi dan merawat pasien di rumah
                                </td>
                                <td>
                                    <textarea class="form-control" id="pendamping" name="pendamping" placeholder="Ketik pendamping ..."></textarea>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- diet khusus  --}}

                <div class="col-md-12">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Diet Khusus : </td>

                            </tr>
                            <tr>
                                <td>
                                    <textarea class="form-control" id="diet" name="diet" placeholder="Ketik Diet ..."></textarea>

                                </td>
                            </tr>
                        </tbody>
                    </table>


                </div>
                {{-- perawatan medis di rumah  --}}

                <div class="col-md-6">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Perawatan / peralatan medis yang dilanjutkan di rumah
                                    : </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="perawatan" id="perawatan"
                                            value="Oksigen Portable">
                                        <label class="form-check-label">Oksigen Portable</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="perawatan"
                                            id="perawatan" value="Tracheostomi">
                                        <label class="form-check-label">Tracheostomi</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="perawatan"
                                            id="perawatan" value="Dower-Kateter">
                                        <label class="form-check-label">Dower-Kateter</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="perawatan"
                                            id="perawatan" value="NGT">
                                        <label class="form-check-label">NGT</label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- alat bantu --}}

                <div class="col-md-6">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Alat bantu yang dipakai di rumah : </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="alatbantu"
                                            id="alatbantu" value="Kursi Roda">
                                        <label class="form-check-label">Kursi Roda</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="alatbantu"
                                            id="alatbantu" value="Tongkat">
                                        <label class="form-check-label">Tongkat</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-check-label">Lainya</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="text" name="alatbantu"
                                            id="alatbantu" value="">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- pendidikan kesehatan  --}}

                <div class="col-md-12">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Pendidikan Kesehatan Untuk di rumah : </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <table class="table">
                        <tbody>

                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pendidikan"
                                            id="pendidikan" value="Balutan jangan basah / kotor">
                                        <label class="form-check-label">Balutan jangan basah / kotor</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pendidikan"
                                            id="pendidikan" value="Hindari mengangkat beban berat">
                                        <label class="form-check-label">Hindari mengangkat beban berat</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pendidikan"
                                            id="pendidikan" value="Jangan mengendarai kendaraan sendiri / menyupir">
                                        <label class="form-check-label">Jangan mengendarai kendaraan sendiri /
                                            menyupir</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pendidikan"
                                            id="pendidikan" value="Cek Laboratorium sebelum kontrol">
                                        <label class="form-check-label">Cek Laboratorium sebelum kontrol</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-check-label">Lainya</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="text" name="pendidikan"
                                            id="pendidikan" value="">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tbody>

                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pendidikan"
                                            id="pendidikan"
                                            value="Jangan menaiki tangga lebih dari dua atau tiga kali sehari">
                                        <label class="form-check-label">Jangan menaiki tangga lebih dari dua atau tiga
                                            kali sehari</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pendidikan"
                                            id="pendidikan"
                                            value="Batasi pekerjaan rumah tangga dan kegiatan sosial melakukan aktifitas secara bertahap sampai kesehatan pulih kembali">
                                        <label class="form-check-label">Batasi pekerjaan rumah tangga dan kegiatan
                                            sosial melakukan aktifitas secara bertahap sampai kesehatan pulih
                                            kembali</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pendidikan"
                                            id="pendidikan"
                                            value="Jika muncul keluhan nyeri / rasa sakit tidak berkurang dengan obat anda atau menjadi lebih, segera datang ke RS">
                                        <label class="form-check-label">Jika muncul keluhan nyeri / rasa sakit tidak
                                            berkurang dengan obat anda atau menjadi lebih, segera datang ke RS</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pendidikan"
                                            id="pendidikan"
                                            value="Perlu perawatan lanjutan ke puskesmas / Rumah Sakit terdekat">
                                        <label class="form-check-label">Perlu perawatan lanjutan ke puskesmas / Rumah
                                            Sakit terdekat</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-check-label">Lainya</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="text" name="pendidikan"
                                            id="pendidikan" value="">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- di berikan kepada pasien / keluarga --}}

                <div class="col-md-6" style="margin-top:15px;">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Diberikan obat kepada pasien / keluarga
                                    : </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="diberikan"
                                            id="diberikan" value="obat-obatan">
                                        <label class="form-check-label">obat-obatan</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="diberikan"
                                            id="diberikan" value="Peralatan / barang pribadi">
                                        <label class="form-check-label">Peralatan / barang pribadi</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="diberikan"
                                            id="diberikan" value="hasil pemeriksaan penunjang">
                                        <label class="form-check-label">hasil pemeriksaan penunjang</label>
                                    </div>
                                    <br>
                                    <div class="form-check" style="margin-left: 15px">
                                        <input class="form-check-input" type="radio" name="diberikan"
                                            id="diberikan" value="Laboratorium">
                                        <label class="form-check-label">Laboratorium</label>
                                    </div>
                                    <br>
                                    <div class="form-check" style="margin-left: 15px">
                                        <input class="form-check-input" type="radio" name="diberikan"
                                            id="diberikan" value="Radiologi">
                                        <label class="form-check-label">Radiologi</label>
                                    </div>
                                    <br>
                                    <div class="form-check" style="margin-left: 15px">
                                        <input class="form-check-input" type="radio" name="diberikan"
                                            id="diberikan" value="EKG">
                                        <label class="form-check-label">EKG</label>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <label class="form-check-label">Lainya</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="text" name="diberikan"
                                            id="diberikan" value="">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- alat bantu --}}

                <div class="col-md-6" style="margin-top:15px;">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Jadwal Kontrol berikutnya : </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Poliklinik :</label>
                                    <select class="form-control select2" name="poli" id="poli">
                                        <option value=""> Pilih Poli</option>
                                        @foreach ($poli as $i => $p)
                                            <option value="{{ $p->kode_unit }}">{{ $p->nama_unit }}
                                            </option>
                                        @endforeach

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Tanggal Pemeriksaan
                                            Poli</label>
                                        <input type="date" id="tglpoli" name="tglpoli" value=""
                                            class="form-control">
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </form>
        <div type="button" class="btn float-right btn-success " style="margin-top: 20px;">
            SIMPAN
        </div>
    </div>

    <script>
        document.getElementById('tglpoli').valueAsDate = new Date()
    </script>
