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
        @if ($resumedok == null)
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

                </div>
            </div>
        @endif
    </form>
</div>
