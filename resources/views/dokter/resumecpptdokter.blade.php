<style>
    .borderless table {
        border-top-style: none;
        border-left-style: none;
        border-right-style: none;
        border-bottom-style: none;
    }
</style>
<div class="card-header">
    <h3 class="card-title">Resume CPPT</h3>
</div>

<div class="card-body">
<form>
        @if ($triase == NULL)

        <h1> belum ada triase</h1>
        @else
        <div class="mailbox-read-message">
            <p class="text-bold">{{$triase[0]->nama_pasien}}</p>
            <div class="row">
                <div class="col-md-3">
                    <table class="table borderless">
                        <tbody>
                            <tr>
                                <td class="text-bold text-italic">Primary Survey</td>
                                <td>: {{$triase[0]->primary_survey}}</td>
                            </tr>
                            <tr>
                                <td class="text-bold">Pemeriksaan Fisik</td>
                                <td>: {{$triase[0]->pemeriksaan_fisik}}</td>
                            </tr>
                            <tr>
                                <td class="text-bold text-italic">Riwayat Penyakit</td>
                                <td>: {{$triase[0]->riwayat_pasien}}</td>
                            </tr>
                            <tr>
                                <td class="text-bold text-italic">Kategori Triase</td>
                                <td>: {{$triase[0]->kategori_triase}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-8" style="margin-left: 20px;">
                    <table class="table borderless">
                        <tbody>
                            <tr>
                                <td class="text-bold text-italic">Pemeriksaan</td>
                                <td>: {{$triase[0]->pemeriksaan_triase}}</td>
                            </tr>
                       
                            <tr>
                                <td class="text-bold text-italic">Kesadaran</td>
                                <td>: {{$triase[0]->kesadaran}}</td>
                            </tr>
                            <tr>
                                <td class="text-bold text-italic">Jalan Nafas</td>
                                <td>: {{$triase[0]->jalan_nafas}}</td>
                            </tr>
                            <tr>
                                <td class="text-bold text-italic">Pernafasan</td>
                                <td>: {{$triase[0]->pernafasan}}</td>
                            </tr>
                            <tr>
                                <td class="text-bold text-italic">Sirkulasi</td>
                                <td>: {{$triase[0]->sirkulasi}}</td>
                            </tr>
                            <tr>
                                <td class="text-bold text-italic">Gejala Spesifik</td>
                                <td>: {{$triase[0]->gejala_spesifik}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
    </form>
    <div class="row">
        <div class="col-md-6">

            <div class="mailbox-read-message">
                <p class="text-bold">Resume Perawat</p>
                @if ($resume == null)
                <h1> belum ada CPPT</h1>
                @else
                <div class="row">
                    <div class="col-md-12">
                        <table class="table borderless">
                            <tbody>
                                <tr>
                                    <td class="text-bold text-italic">SUBJECT</td>
                                    <td>: {{$resume[0]->subyektif}} </td>
                                </tr>
                                <tr>
                                    <td class="text-bold">OBJECT</td>
                                    <td>: {{$resume[0]->diagnosa_perawat}}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold text-italic">ASSESMEN</td>
                                    <td>: {{$resume[0]->assesment}}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold text-italic">PLANNING</td>
                                    <td>: {{$resume[0]->planning}}</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <form>
                @if ($resumedok == null)
                <h1> belum ada CPPT</h1>
                @else
                <div class="mailbox-read-message">
                    <p class="text-bold"> RESUME DOKTER</p>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table borderless">
                                <tbody>
                                    <tr>
                                        <td class="text-bold text-italic">SUBJECT</td>
                                        <td>: {{ $resumedok[0]->subyektif }} </td>
                                    </tr>

                                    <tr>
                                        <td class="text-bold">Primary Survey</td>
                                        <td>
                                            <textarea class="form-control" rows="5" readonly> {{ $resumedok[0]->primary_survey }}</textarea>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-bold">Secondary Survey</td>
                                        <td>
                                            <textarea class="form-control" rows="10" readonly> {{ $resumedok[0]->secondary_survey }}</textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold text-italic">ASSESMEN</td>
                                        <td>: {{ $resumedok[0]->assesment }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold text-italic">PLANNING</td>
                                        <td>: {{ $resumedok[0]->planning }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold text-italic">30 Menit Pertama</td>
                                        <td>: {{ $resumedok[0]->tiga_pertama }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold text-italic">30 Menit Kedua</td>
                                        <td>: {{ $resumedok[0]->tiga_kedua }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold text-italic">Cara Pulang</td>
                                        <td>: {{ $resumedok[0]->cara_pulang }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold text-italic">Keadaan Pulang</td>
                                        <td>: {{ $resumedok[0]->keadaan_pulang }}</td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>



                </div>
                @endif
            </form>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12" style="margin-left: 10px">
            <div class="table tabelobat">
                <table>
                    <thead>
                        <th>Kode</th>
                        <th>Nama Obat</th>
                        <th>qty</th>
                        <th>Aturan Pakai</th>
                    </thead>
                    <tbody>
                        @foreach($riwayatobat as $ob => $o)
                        <tr>
                        <td>{{$o->kode_layanan_header}}</td>
                            <td>{{$o->nama_barang}}</td>
                            <td>{{$o->jumlah_layanan}}</td>
                            <td>{{$o->aturan_pakai}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row" style="margin-left: 10px">
        <div class="col-md-6">
            <h4>Order Laboratorium</h4>
            <table class="table table-bordered">
                <thead>
                    <th style="width: 10px">Kode Layanan Header</th>
                    <th>Nama Tindakan</th>
                    <th>Harga</th>
                    <th style="width: 40px">Action</th>
                </thead>
                <tbody>
                    @foreach ($riwayatorderlab as $lab=>$l )

                    <tr>
                        <td>{{$l->kode_layanan_header}}</td>
                        <td>{{$l->nama_tindakan}}</td>
                        <td>
                            Rp.{{$l->total_tarif}}
                        </td>
                        <td> <a class=" btn btn-danger btn-sm returorderrad" href="#">
                                <i class="fas fa-sync-alt fa-spin"></i>
                                RETUR
                            </a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="col-md-5" style="margin-left: 20px">
            <h4>Order Radiologi</h4>
            <table class="table table-bordered">
                <thead>
                    <th style="width: 10px">Kode Layanan Header</th>
                    <th>Nama Tindakan</th>
                    <th>Harga</th>
                    <th style="width: 40px">Action</th>
                </thead>
                <tbody>
                    @foreach ($riwayatorderrad as $rad=>$r )

                    <tr>
                        <td>{{$r->kode_layanan_header}}</td>
                        <td>{{$r->nama_tindakan}}</td>
                        <td>
                            Rp.{{$r->total_tarif}}
                        </td>
                        <td> <a class=" btn btn-danger btn-sm returorderrad" href="#">
                                <i class="fas fa-sync-alt fa-spin"></i>
                                RETUR
                            </a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row" style="margin-left: 10px">

        @if ($hasil == null)

        @else
        @foreach ($hasil as $key => $h)
        <div class="col-md-12">
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
        </div>
        @endforeach

        @endif
    </div>
</div>