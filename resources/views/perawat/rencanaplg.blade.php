<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">Rencana Pemulangan Pasien</h3>
    </div>
    <div class="card-body">
        <form action="" class="formrencanapulang">
            @if ($rencanaplg == null) 

            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <tbody>

                            <tr>
                                <td class="text-bold font-italic">Usia lanjut (60 tahun atau lebih)</td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="usialanjut" id="usialanjut" value="Ya">
                                        <label class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="usialanjut" id="usialanjut" value="Tidak">
                                        <label class="form-check-label">Tidak</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-bold font-italic">Hambatan Mobilisasi</td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hambatan" id="hambatan" value="Ya">
                                        <label class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hambatan" id="hambatan" value="Tidak">
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
                                        <input class="form-check-input" type="radio" name="medis" id="medis" value="Ya">
                                        <label class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="medis" id="medis" value="Tidak">
                                        <label class="form-check-label">Tidak</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-bold font-italic">Tergantung dengan orang lain dalam aktifitas harian
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="harian" id="harian" value="Ya">
                                        <label class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="harian" id="harian" value="Tidak">
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
                                    <!-- <textarea class="form-control" id="transportasi" name="transportasi" placeholder="Ketik Kendaraan ..."></textarea> -->
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="transportasi" id="transportasi" value="Mobil">
                                                <label class="form-check-label">Mobil</label>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="transportasi" id="transportasi" value="Becak">
                                                <label class="form-check-label">Becak</label>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="transportasi" id="transportasi" value="Cator">
                                                <label class="form-check-label">Cator</label>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="transportasi" id="transportasi" value="Motor">
                                                <label class="form-check-label">Motor</label>
                                            </div>
                                        </div>
                                    </div>

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
                                        <input class="form-check-input" type="checkbox" name="peralatan1" id="peralatan1" value="Oksigen Portable">
                                        <label class="form-check-label">Oksigen Portable</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peralatan2" id="peralatan2" value="Tracheostomi">
                                        <label class="form-check-label">Tracheostomi</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peralatan3" id="peralatan3" value="Dower-Kateter">
                                        <label class="form-check-label">Dower-Kateter</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="peralatan4" id="peralatan4" value="NGT">
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
                                        <input class="form-check-input" type="checkbox" name="alatbantu1" id="alatbantu1" value="Kursi Roda">
                                        <label class="form-check-label">Kursi Roda</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="alatbantu2" id="alatbantu2" value="Tongkat">
                                        <label class="form-check-label">Tongkat</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-check-label">Lainya</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="text" name="alatbantu" id="alatbantu" value="">
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
                                        <input class="form-check-input" type="checkbox" name="pendidikan1" id="pendidikan1" value="Balutan jangan basah / kotor">
                                        <label class="form-check-label">Balutan jangan basah / kotor</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="pendidikan2" id="pendidikan2" value="Hindari mengangkat beban berat">
                                        <label class="form-check-label">Hindari mengangkat beban berat</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="pendidikan3" id="pendidikan3" value="Jangan mengendarai kendaraan sendiri / menyupir">
                                        <label class="form-check-label">Jangan mengendarai kendaraan sendiri /
                                            menyupir</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="pendidikan4" id="pendidikan4" value="Cek Laboratorium sebelum kontrol">
                                        <label class="form-check-label">Cek Laboratorium sebelum kontrol</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-check-label">Lainya</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="text" name="pendidikan" id="pendidikan" value="">
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
                                        <input class="form-check-input" type="checkbox" name="pendidikan5" id="pendidikan5" value="Jangan menaiki tangga lebih dari dua atau tiga kali sehari">
                                        <label class="form-check-label">Jangan menaiki tangga lebih dari dua atau tiga
                                            kali sehari</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="pendidikan6" id="pendidikan6" value="Batasi pekerjaan rumah tangga dan kegiatan sosial melakukan aktifitas secara bertahap sampai kesehatan pulih kembali">
                                        <label class="form-check-label">Batasi pekerjaan rumah tangga dan kegiatan
                                            sosial melakukan aktifitas secara bertahap sampai kesehatan pulih
                                            kembali</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="pendidikan7" id="pendidikan7" value="Jika muncul keluhan nyeri / rasa sakit tidak berkurang dengan obat anda atau menjadi lebih, segera datang ke RS">
                                        <label class="form-check-label">Jika muncul keluhan nyeri / rasa sakit tidak
                                            berkurang dengan obat anda atau menjadi lebih, segera datang ke RS</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="pendidikan8" id="pendidikan8" value="Perlu perawatan lanjutan ke puskesmas / Rumah Sakit terdekat">
                                        <label class="form-check-label">Perlu perawatan lanjutan ke puskesmas / Rumah
                                            Sakit terdekat</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-check-label">Lainya</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="text" name="pendidikan" id="pendidikan" value="">
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
                                        <input class="form-check-input" type="checkbox" name="diberikan1" id="diberikan1" value="obat-obatan">
                                        <label class="form-check-label">obat-obatan</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="diberikan2" id="diberikan2" value="Peralatan / barang pribadi">
                                        <label class="form-check-label">Peralatan / barang pribadi</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="diberikan3" id="diberikan3" value="hasil pemeriksaan penunjang">
                                        <label class="form-check-label">hasil pemeriksaan penunjang</label>
                                    </div>
                                    <br>
                                    <div class="form-check" style="margin-left: 15px">
                                        <input class="form-check-input" type="checkbox" name="diberikan4" id="diberikan4" value="Laboratorium">
                                        <label class="form-check-label">Laboratorium</label>
                                    </div>
                                    <br>
                                    <div class="form-check" style="margin-left: 15px">
                                        <input class="form-check-input" type="checkbox" name="diberikan5" id="diberikan5" value="Radiologi">
                                        <label class="form-check-label">Radiologi</label>
                                    </div>
                                    <br>
                                    <div class="form-check" style="margin-left: 15px">
                                        <input class="form-check-input" type="checkbox" name="diberikan6" id="diberikan6" value="EKG">
                                        <label class="form-check-label">EKG</label>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <label class="form-check-label">Lainya</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="text" name="diberikan" id="diberikan" value="">
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
                                        @foreach($poli as $po )
                                        <option value="{{$po->kode_unit}}"> {{$po->nama_unit}}</option>


                                        @endforeach

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="norm" id="norm" value="{{ $norm }}" hidden>
                                    <input type="text" name="kj" id="kj" value="{{ $kj }}" hidden>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Tanggal Pemeriksaan
                                            Poli</label>
                                        <input type="date" id="tglpoli" name="tglpoli" value="" class="form-control">
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
            <div type="button" class="btn float-right btn-success simpanrencanaplg" style="margin-top: 20px;">
                SIMPAN
            </div>
            @else
            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <tbody>

                            <tr>
                                <td class="text-bold font-italic">Usia lanjut (60 tahun atau lebih)</td>
                                <td>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->usia_lanjut == 'Ya')
                                        <input class="form-check-input" type="radio" name="usialanjut" id="usialanjut" value="Ya" checked>
                                        <label class="form-check-label">Ya</label>
                                        @else
                                        <input class="form-check-input" type="radio" name="usialanjut" id="usialanjut" value="Ya">
                                        <label class="form-check-label">Ya</label>
                                        @endif
                                    </div>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->usia_lanjut == 'Tidak')
                                        <input class="form-check-input" type="radio" name="usialanjut" id="usialanjut" value="Tidak" checked>
                                        <label class="form-check-label">Tidak</label>
                                        @else
                                        <input class="form-check-input" type="radio" name="usialanjut" id="usialanjut" value="Tidak">
                                        <label class="form-check-label">Tidak</label>
                                        @endif

                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-bold font-italic">Hambatan Mobilisasi</td>
                                <td>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->hambatan == 'Ya')
                                        <input class="form-check-input" type="radio" name="hambatan" id="hambatan" value="Ya" checked>
                                        <label class="form-check-label">Ya</label>
                                        @else
                                        <input class="form-check-input" type="radio" name="hambatan" id="hambatan" value="Ya">
                                        <label class="form-check-label">Ya</label>
                                        @endif
                                    </div>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->hambatan == 'Tidak')
                                        <input class="form-check-input" type="radio" name="hambatan" id="hambatan" value="Tidak" checked>
                                        <label class="form-check-label">Tidak</label>
                                        @else
                                        <input class="form-check-input" type="radio" name="hambatan" id="hambatan" value="Tidak">
                                        <label class="form-check-label">Tidak</label>
                                        @endif

                                    </div>

                                </td>
                            </tr>

                            <tr>
                                <td class="text-bold font-italic">Membutuhkan pelayanan medis dan perawatan
                                    berkelanjutan
                                </td>
                                <td>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->pelayanan_medis == 'Ya')
                                        <input class="form-check-input" type="radio" name="medis" id="medis" value="Ya" checked>
                                        <label class="form-check-label">Ya</label>
                                        @else
                                        <input class="form-check-input" type="radio" name="medis" id="medis" value="Ya">
                                        <label class="form-check-label">Ya</label>
                                        @endif
                                    </div>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->pelayanan_medis == 'Tidak')
                                        <input class="form-check-input" type="radio" name="medis" id="medis" value="Tidak" checked>
                                        <label class="form-check-label">Tidak</label>
                                        @else
                                        <input class="form-check-input" type="radio" name="medis" id="medis" value="Tidak">
                                        <label class="form-check-label">Tidak</label>
                                        @endif

                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-bold font-italic">Tergantung dengan orang lain dalam aktifitas harian
                                </td>
                                <td>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->tergantung == 'Ya')
                                        <input class="form-check-input" type="radio" name="harian" id="harian" value="Ya" checked>
                                        <label class="form-check-label">Ya</label>
                                        @else
                                        <input class="form-check-input" type="radio" name="harian" id="harian" value="Ya">
                                        <label class="form-check-label">Ya</label>
                                        @endif
                                    </div>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->tergantung == 'Tidak')
                                        <input class="form-check-input" type="radio" name="harian" id="harian" value="Tidak" checked>
                                        <label class="form-check-label">Tidak</label>
                                        @else
                                        <input class="form-check-input" type="radio" name="harian" id="harian" value="Tidak">
                                        <label class="form-check-label">Tidak</label>
                                        @endif

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
                            <tr>
                                <td class="text-bold font-italic">Transportasi Pulang</td>
                                <td>
                                    <!-- <textarea class="form-control" id="transportasi" name="transportasi" placeholder="Ketik Kendaraan ..."></textarea> -->
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-check">
                                                @if($rencanaplg[0]->transportasi == 'Mobil')

                                                <input class="form-check-input" type="checkbox" checked name="transportasi" id="transportasi" value="Mobil">
                                                <label class="form-check-label">Mobil</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="transportasi" id="transportasi" value="Mobil">
                                                <label class="form-check-label">Mobil</label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-check">
                                                @if($rencanaplg[0]->transportasi == 'Becak')

                                                <input class="form-check-input" type="checkbox" checked name="transportasi" id="transportasi" value="Becak">
                                                <label class="form-check-label">Becak</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="transportasi" id="transportasi" value="Becak">
                                                <label class="form-check-label">Becak</label>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-check">
                                                @if($rencanaplg[0]->transportasi == 'Cator')

                                                <input class="form-check-input" checked type="checkbox" name="transportasi" id="transportasi" value="Cator">
                                                <label class="form-check-label">Cator</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="transportasi" id="transportasi" value="Cator">
                                                <label class="form-check-label">Cator</label>
                                                @endif


                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-check">
                                                @if($rencanaplg[0]->transportasi == 'Motor')

                                                <input class="form-check-input" checked type="checkbox" name="transportasi" id="transportasi" value="Motor">
                                                <label class="form-check-label">Motor</label>
                                                @else
                                                <input class="form-check-input" type="checkbox" name="transportasi" id="transportasi" value="Motor">
                                                <label class="form-check-label">Motor</label>

                                                @endif

                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <!-- <td>
                                    <textarea class="form-control" id="transportasi" name="transportasi" placeholder="Ketik Kendaraan ...">{{$rencanaplg[0]->transportasi}}</textarea>

                                </td> -->
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
                                    <textarea class="form-control" id="pendamping" name="pendamping" placeholder="Ketik pendamping ...">{{$rencanaplg[0]->pendamping}}</textarea>

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
                                    <textarea class="form-control" id="diet" name="diet" placeholder="Ketik Diet ...">{{$rencanaplg[0]->diet_khusus}}</textarea>

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
                                        @if($rencanaplg[0]->peralatan_medis1 == 'Oksigen Portable')

                                        <input class="form-check-input" type="checkbox" name="peralatan1" id="peralatan1" value="Oksigen Portable" checked>
                                        <label class="form-check-label">Oksigen Portable</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="peralatan1" id="peralatan1" value="Oksigen Portable">
                                        <label class="form-check-label">Oksigen Portable</label>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->peralatan_medis2 == 'Tracheostomi')
                                        <input class="form-check-input" type="checkbox" name="peralatan2" id="peralatan2" value="Tracheostomi" checked>
                                        <label class="form-check-label">Tracheostomi</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="peralatan2" id="peralatan2" value="Tracheostomi">
                                        <label class="form-check-label">Tracheostomi</label>
                                        @endif

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->peralatan_medis3 == 'Dower-Kateter')
                                        <input class="form-check-input" type="checkbox" name="peralatan3" id="peralatan3" value="Dower-Kateter" checked>
                                        <label class="form-check-label">Dower-Kateter</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="peralatan3" id="peralatan3" value="Dower-Kateter">
                                        <label class="form-check-label">Dower-Kateter</label>
                                        @endif

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->peralatan_medis4 == 'NGT')
                                        <input class="form-check-input" type="checkbox" name="peralatan4" id="peralatan4" value="NGT" checked>
                                        <label class="form-check-label">NGT</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="peralatan4" id="peralatan4" value="NGT">
                                        <label class="form-check-label">NGT</label>
                                        @endif

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
                                        @if($rencanaplg[0]->alat_bantu1 == 'Kursi Roda')
                                        <input class="form-check-input" type="checkbox" name="alatbantu1" id="alatbantu1" value="Kursi Roda" checked>
                                        <label class="form-check-label">Kursi Roda</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="alatbantu1" id="alatbantu1" value="Kursi Roda">
                                        <label class="form-check-label">Kursi Roda</label>
                                        @endif

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->alat_bantu2 == 'Tongkat')
                                        <input class="form-check-input" type="checkbox" name="alatbantu2" id="alatbantu2" value="Tongkat" checked>
                                        <label class="form-check-label">Tongkat</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="alatbantu2" id="alatbantu2" value="Tongkat">
                                        <label class="form-check-label">Tongkat</label>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-check-label">Lainya</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="text" name="alatbantu" id="alatbantu" value="{{$rencanaplg[0]->alat_bantu}}">
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
                                        @if($rencanaplg[0]->pendidikan_kesehatan1 == 'Balutan jangan basah / kotor')
                                        <input class="form-check-input" type="checkbox" name="pendidikan1" id="pendidikan1" value="Balutan jangan basah / kotor" checked>
                                        <label class="form-check-label">Balutan jangan basah / kotor</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="pendidikan1" id="pendidikan1" value="Balutan jangan basah / kotor">
                                        <label class="form-check-label">Balutan jangan basah / kotor</label>
                                        @endif

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->pendidikan_kesehatan2 == 'Hindari mengangkat beban berat')
                                        <input class="form-check-input" type="checkbox" name="pendidikan2" id="pendidikan2" value="Hindari mengangkat beban berat" checked>
                                        <label class="form-check-label">Hindari mengangkat beban berat</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="pendidikan2" id="pendidikan2" value="Hindari mengangkat beban berat">
                                        <label class="form-check-label">Hindari mengangkat beban berat</label>
                                        @endif

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->pendidikan_kesehatan3 == 'Jangan mengendarai kendaraan sendiri / menyupir')
                                        <input class="form-check-input" type="checkbox" name="pendidikan3" id="pendidikan3" value="Jangan mengendarai kendaraan sendiri / menyupir" checked>
                                        <label class="form-check-label">Jangan mengendarai kendaraan sendiri /
                                            menyupir</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="pendidikan3" id="pendidikan3" value="Jangan mengendarai kendaraan sendiri / menyupir">
                                        <label class="form-check-label">Jangan mengendarai kendaraan sendiri /
                                            menyupir</label>
                                        @endif

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->pendidikan_kesehatan4 == 'Cek Laboratorium sebelum kontrol')
                                        <input class="form-check-input" type="checkbox" name="pendidikan4" id="pendidikan4" value="Cek Laboratorium sebelum kontrol" checked>
                                        <label class="form-check-label">Cek Laboratorium sebelum kontrol</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="pendidikan4" id="pendidikan4" value="Cek Laboratorium sebelum kontrol">
                                        <label class="form-check-label">Cek Laboratorium sebelum kontrol</label>
                                        @endif

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-check-label">Lainya</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="text" name="pendidikan" id="pendidikan" value="{{$rencanaplg[0]->pendidikan_kesehatan}}">
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
                                        @if($rencanaplg[0]->pendidikan_kesehatan5 == 'Jangan menaiki tangga lebih dari dua atau tiga kali sehari')
                                        <input class="form-check-input" type="checkbox" name="pendidikan5" id="pendidikan5" value="Jangan menaiki tangga lebih dari dua atau tiga kali sehari" checked>
                                        <label class="form-check-label">Jangan menaiki tangga lebih dari dua atau tiga
                                            kali sehari</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="pendidikan5" id="pendidikan5" value="Jangan menaiki tangga lebih dari dua atau tiga kali sehari">
                                        <label class="form-check-label">Jangan menaiki tangga lebih dari dua atau tiga
                                            kali sehari</label>
                                        @endif

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->pendidikan_kesehatan6 == 'Batasi pekerjaan rumah tangga dan kegiatan sosial melakukan aktifitas secara bertahap sampai kesehatan pulih kembali')
                                        <input class="form-check-input" type="checkbox" name="pendidikan6" id="pendidikan6" value="Batasi pekerjaan rumah tangga dan kegiatan sosial melakukan aktifitas secara bertahap sampai kesehatan pulih kembali" checked>
                                        <label class="form-check-label">Batasi pekerjaan rumah tangga dan kegiatan
                                            sosial melakukan aktifitas secara bertahap sampai kesehatan pulih
                                            kembali</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="pendidikan6" id="pendidikan6" value="Batasi pekerjaan rumah tangga dan kegiatan sosial melakukan aktifitas secara bertahap sampai kesehatan pulih kembali">
                                        <label class="form-check-label">Batasi pekerjaan rumah tangga dan kegiatan
                                            sosial melakukan aktifitas secara bertahap sampai kesehatan pulih
                                            kembali</label>
                                        @endif

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->pendidikan_kesehatan7 == 'Jika muncul keluhan nyeri / rasa sakit tidak berkurang dengan obat anda atau menjadi lebih, segera datang ke RS')
                                        <input class="form-check-input" type="checkbox" name="pendidikan7" id="pendidikan7" value="Jika muncul keluhan nyeri / rasa sakit tidak berkurang dengan obat anda atau menjadi lebih, segera datang ke RS" checked>
                                        <label class="form-check-label">Jika muncul keluhan nyeri / rasa sakit tidak berkurang dengan obat anda atau menjadi lebih, segera datang ke RS</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="pendidikan7" id="pendidikan7" value="Jika muncul keluhan nyeri / rasa sakit tidak berkurang dengan obat anda atau menjadi lebih, segera datang ke RS">
                                        <label class="form-check-label">Jika muncul keluhan nyeri / rasa sakit tidak berkurang dengan obat anda atau menjadi lebih, segera datang ke RS</label>
                                        @endif

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->pendidikan_kesehatan8 == 'Perlu perawatan lanjutan ke puskesmas / Rumah Sakit terdekat')
                                        <input class="form-check-input" type="checkbox" name="pendidikan8" id="pendidikan8" value="Perlu perawatan lanjutan ke puskesmas / Rumah Sakit terdekat" checked>
                                        <label class="form-check-label">Perlu perawatan lanjutan ke puskesmas / Rumah Sakit terdekat</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="pendidikan8" id="pendidikan8" value="Perlu perawatan lanjutan ke puskesmas / Rumah Sakit terdekat">
                                        <label class="form-check-label">Perlu perawatan lanjutan ke puskesmas / Rumah Sakit terdekat</label>
                                        @endif

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-check-label">Lainya</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="text" name="pendidikan" id="pendidikan" value="{{$rencanaplg[0]->pendidikan_kesehatan}}">
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
                                        @if($rencanaplg[0]->diberikan1 == 'obat-obatan')
                                        <input class="form-check-input" type="checkbox" name="diberikan1" id="diberikan1" value="obat-obatan" checked>
                                        <label class="form-check-label">obat-obatan</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="diberikan1" id="diberikan1" value="obat-obatan">
                                        <label class="form-check-label">obat-obatan</label>
                                        @endif

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->diberikan2 == 'Peralatan / barang pribadi')
                                        <input class="form-check-input" type="checkbox" name="diberikan2" id="diberikan2" value="Peralatan / barang pribadi" checked>
                                        <label class="form-check-label">Peralatan / barang pribadi</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="diberikan2" id="diberikan2" value="Peralatan / barang pribadi">
                                        <label class="form-check-label">Peralatan / barang pribadi</label>
                                        @endif

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        @if($rencanaplg[0]->diberikan3 == 'hasil pemeriksaan penunjang')
                                        <input class="form-check-input" type="checkbox" name="diberikan3" id="diberikan3" value="hasil pemeriksaan penunjang" checked>
                                        <label class="form-check-label">hasil pemeriksaan penunjang</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="diberikan3" id="diberikan3" value="hasil pemeriksaan penunjang">
                                        <label class="form-check-label">hasil pemeriksaan penunjang</label>
                                        @endif

                                    </div>
                                    <br>
                                    <div class="form-check" style="margin-left: 15px">
                                        @if($rencanaplg[0]->diberikan4 == 'Laboratorium')
                                        <input class="form-check-input" type="checkbox" name="diberikan4" id="diberikan4" value="Laboratorium" checked>
                                        <label class="form-check-label">Laboratorium</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="diberikan4" id="diberikan4" value="Laboratorium">
                                        <label class="form-check-label">Laboratorium</label>
                                        @endif

                                    </div>
                                    <br>
                                    <div class="form-check" style="margin-left: 15px">
                                        @if($rencanaplg[0]->diberikan5 == 'Radiologi')
                                        <input class="form-check-input" type="checkbox" name="diberikan5" id="diberikan5" value="Radiologi" checked>
                                        <label class="form-check-label">Radiologi</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="diberikan5" id="diberikan5" value="Radiologi">
                                        <label class="form-check-label">Radiologi</label>
                                        @endif

                                    </div>
                                    <br>
                                    <div class="form-check" style="margin-left: 15px">
                                        @if($rencanaplg[0]->diberikan6 == 'EKG')
                                        <input class="form-check-input" type="checkbox" name="diberikan6" id="diberikan6" value="EKG" checked>
                                        <label class="form-check-label">EKG</label>
                                        @else
                                        <input class="form-check-input" type="checkbox" name="diberikan6" id="diberikan6" value="EKG">
                                        <label class="form-check-label">EKG</label>
                                        @endif

                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <label class="form-check-label">Lainya</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="text" name="diberikan" id="diberikan" value="{{$rencanaplg[0]->diberikan}}">
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
                                        @foreach($poli as $po )
                                        <option value="{{$po->kode_unit}}"> {{$po->nama_unit}}</option>


                                        @endforeach

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="norm" id="norm" value="{{ $norm }}" hidden>
                                    <input type="text" name="kj" id="kj" value="{{ $kj }}" hidden>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Tanggal Pemeriksaan
                                            Poli</label>
                                        <input type="date" id="tglpoli" name="tglpoli" value="" class="form-control">
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            @endif
        </form>

    </div>

    <script>
        document.getElementById('tglpoli').valueAsDate = new Date()

        $(".simpanrencanaplg").click(function() {
            var data = $('.formrencanapulang').serializeArray();
            var usialanjut = $('#usialanjut:checked').val()
            var hambatan = $('#hambatan:checked').val()
            var medis = $('#medis:checked').val()
            var harian = $('#harian:checked').val()
            var kendaraan = $('#transportasi:checked').val()
            var pendamping = $('#pendamping').val()
            var diet = $('#diet').val()
            var peralatan1 = $('#peralatan1:checked').val()
            var peralatan2 = $('#peralatan2:checked').val()
            var peralatan3 = $('#peralatan3:checked').val()
            var peralatan4 = $('#peralatan4:checked').val()

            var alatbantu = $('#alatbantu').val()
            var alatbantu1 = $('#alatbantu1:checked').val()
            var alatbantu2 = $('#alatbantu2:checked').val()
            var pendidikan1 = $('#pendidikan1:checked').val()
            var pendidikan2 = $('#pendidikan2:checked').val()
            var pendidikan3 = $('#pendidikan3:checked').val()
            var pendidikan4 = $('#pendidikan4:checked').val()
            var pendidikan5 = $('#pendidikan5:checked').val()
            var pendidikan6 = $('#pendidikan6:checked').val()
            var pendidikan7 = $('#pendidikan7:checked').val()
            var pendidikan8 = $('#pendidikan8:checked').val()
            var pendidikan = $('#pendidikan').val()

            var diberikan = $('#diberikan').val()
            var diberikan1 = $('#diberikan1:checked').val()
            var diberikan2 = $('#diberikan2:checked').val()
            var diberikan3 = $('#diberikan3:checked').val()
            var diberikan4 = $('#diberikan4:checked').val()
            var diberikan5 = $('#diberikan5:checked').val()
            var diberikan6 = $('#diberikan6:checked').val()

            var poli = $('#poli').val()
            var tglpoli = $('#tglpoli').val()
            var kj = $('#kj').val()
            var norm = $('#norm').val()

            Swal.fire({
                title: "Yakin Simpan Rencana pulang?",
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
                            usialanjut: $('#usialanjut:checked').val(),
                            hambatan: $('#hambatan:checked').val(),
                            medis: $('#medis:checked').val(),
                            harian: $('#harian:checked').val(),
                            kendaraan: $('#transportasi:checked').val(),
                            pendamping: $('#pendamping').val(),
                            diet: $('#diet').val(),
                            peralatan1: $('#peralatan1:checked').val(),
                            peralatan2: $('#peralatan2:checked').val(),
                            peralatan3: $('#peralatan3:checked').val(),
                            peralatan4: $('#peralatan4:checked').val(),

                            alatbantu: $('#alatbantu').val(),
                            alatbantu1: $('#alatbantu1:checked').val(),
                            alatbantu2: $('#alatbantu2:checked').val(),
                            pendidikan1: $('#pendidikan1:checked').val(),
                            pendidikan2: $('#pendidikan2:checked').val(),
                            pendidikan3: $('#pendidikan3:checked').val(),
                            pendidikan4: $('#pendidikan4:checked').val(),
                            pendidikan5: $('#pendidikan5:checked').val(),
                            pendidikan6: $('#pendidikan6:checked').val(),
                            pendidikan7: $('#pendidikan7:checked').val(),
                            pendidikan8: $('#pendidikan8:checked').val(),
                            pendidikan: $('#pendidikan').val(),

                            diberikan: $('#diberikan').val(),
                            diberikan1: $('#diberikan1:checked').val(),
                            diberikan2: $('#diberikan2:checked').val(),
                            diberikan3: $('#diberikan3:checked').val(),
                            diberikan4: $('#diberikan4:checked').val(),
                            diberikan5: $('#diberikan5:checked').val(),
                            diberikan6: $('#diberikan6:checked').val(),

                            poli: $('#poli').val(),
                            tglpoli: $('#tglpoli').val(),
                            kj: $('#kj').val(),
                            norm: $('#norm').val()

                        },
                        url: '<?= route('simpanrencanaplg') ?>',

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
                                rncnplg()
                            }

                        }
                    });

                }
            })
            return false;
        });
        $(".updaterencanaplg").click(function() {
            var data = $('.formrencanapulang').serializeArray();
            var usialanjut = $('#usialanjut:checked').val()
            var hambatan = $('#hambatan:checked').val()
            var medis = $('#medis:checked').val()
            var harian = $('#harian:checked').val()
            var kendaraan = $('#transportasi').val()
            var pendamping = $('#pendamping').val()
            var diet = $('#diet').val()
            var peralatan1 = $('#peralatan1:checked').val()
            var peralatan2 = $('#peralatan2:checked').val()
            var peralatan3 = $('#peralatan3:checked').val()
            var peralatan4 = $('#peralatan4:checked').val()

            var alatbantu = $('#alatbantu').val()
            var alatbantu1 = $('#alatbantu1:checked').val()
            var alatbantu2 = $('#alatbantu2:checked').val()
            var pendidikan1 = $('#pendidikan1:checked').val()
            var pendidikan2 = $('#pendidikan2:checked').val()
            var pendidikan3 = $('#pendidikan3:checked').val()
            var pendidikan4 = $('#pendidikan4:checked').val()
            var pendidikan5 = $('#pendidikan5:checked').val()
            var pendidikan6 = $('#pendidikan6:checked').val()
            var pendidikan7 = $('#pendidikan7:checked').val()
            var pendidikan8 = $('#pendidikan8:checked').val()
            var pendidikan = $('#pendidikan').val()

            var diberikan = $('#diberikan').val()
            var diberikan1 = $('#diberikan1:checked').val()
            var diberikan2 = $('#diberikan2:checked').val()
            var diberikan3 = $('#diberikan3:checked').val()
            var diberikan4 = $('#diberikan4:checked').val()
            var diberikan5 = $('#diberikan5:checked').val()
            var diberikan6 = $('#diberikan6:checked').val()

            var poli = $('#poli').val()
            var tglpoli = $('#tglpoli').val()
            var kj = $('#kj').val()
            var norm = $('#norm').val()

            Swal.fire({
                title: "Yakin Update Rencana pulang?",
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
                            usialanjut: $('#usialanjut:checked').val(),
                            hambatan: $('#hambatan:checked').val(),
                            medis: $('#medis:checked').val(),
                            harian: $('#harian:checked').val(),
                            kendaraan: $('#transportasi').val(),
                            pendamping: $('#pendamping').val(),
                            diet: $('#diet').val(),
                            peralatan1: $('#peralatan1:checked').val(),
                            peralatan2: $('#peralatan2:checked').val(),
                            peralatan3: $('#peralatan3:checked').val(),
                            peralatan4: $('#peralatan4:checked').val(),

                            alatbantu: $('#alatbantu').val(),
                            alatbantu1: $('#alatbantu1:checked').val(),
                            alatbantu2: $('#alatbantu2:checked').val(),
                            pendidikan1: $('#pendidikan1:checked').val(),
                            pendidikan2: $('#pendidikan2:checked').val(),
                            pendidikan3: $('#pendidikan3:checked').val(),
                            pendidikan4: $('#pendidikan4:checked').val(),
                            pendidikan5: $('#pendidikan5:checked').val(),
                            pendidikan6: $('#pendidikan6:checked').val(),
                            pendidikan7: $('#pendidikan7:checked').val(),
                            pendidikan8: $('#pendidikan8:checked').val(),
                            pendidikan: $('#pendidikan').val(),

                            diberikan: $('#diberikan').val(),
                            diberikan1: $('#diberikan1:checked').val(),
                            diberikan2: $('#diberikan2:checked').val(),
                            diberikan3: $('#diberikan3:checked').val(),
                            diberikan4: $('#diberikan4:checked').val(),
                            diberikan5: $('#diberikan5:checked').val(),
                            diberikan6: $('#diberikan6:checked').val(),

                            poli: $('#poli').val(),
                            tglpoli: $('#tglpoli').val(),
                            kj: $('#kj').val(),
                            norm: $('#norm').val()

                        },
                        url: '<?= route('updaterencanaplg') ?>',

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
                                rncnplg()
                            }

                        }
                    });

                }
            })
            return false;
        });

        function rncnplg() {
            spinner = $('#loader2');
            spinner.show();

            counter = $('#counter').val()
            $.ajax({
                data: {
                    _token: "{{ csrf_token() }}",

                },
                type: "post",
                url: " {{ route('rencanaplg') }}",
                error: function(data) {
                    spinner.hide();
                    alert('oke!!')
                },
                success: function(response) {
                    spinner.hide();
                    $('.formrencanapulang').html(response);


                }
            });
        }
    </script>