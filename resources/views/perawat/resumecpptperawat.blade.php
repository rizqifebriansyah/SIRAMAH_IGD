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
        @if ($resume == null)
        <h1> belum ada CPPT</h1>
        @else
        <div class="mailbox-read-message">
            <p class="text-bold"></p>
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

            <div class="row" style="margin-left: 10px">
                @if ($riwayatorderlab == null)

                @else
                <div class="col-md-6">
                    <h4>Order Laboratorium</h4>
                    <table class="table table-bordered">
                        <thead>
                            <th style="width: 10px">Kode Layanan Header</th>
                            <th>Nama Tindakan</th>
                            <th>Harga</th>
                        </thead>
                        <tbody>
                            @foreach ($riwayatorderlab as $lab=>$l )

                            <tr>
                                <td>{{$l->kode_layanan_header}}</td>
                                <td>{{$l->nama_tindakan}}</td>
                                <td>
                                    Rp.{{$l->total_tarif}}
                                </td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                @endif
                @if ($riwayatorderrad == null)

                @else
                <div class="col-md-5" style="margin-left: 20px">
                    <h4>Order Radiologi</h4>
                    <table class="table table-bordered">
                        <thead>
                            <th style="width: 10px">Kode Layanan Header</th>
                            <th>Nama Tindakan</th>
                            <th>Harga</th>
                        </thead>
                        <tbody>
                            @foreach ($riwayatorderrad as $rad=>$r )

                            <tr>
                                <td>{{$r->kode_layanan_header}}</td>
                                <td>{{$r->nama_tindakan}}</td>
                                <td>
                                    Rp.{{$r->total_tarif}}
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
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
        @endif
    </form>
</div>