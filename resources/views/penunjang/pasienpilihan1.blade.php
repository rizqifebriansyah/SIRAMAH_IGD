<div class=" col-md-11" style="margin-bottom:10px ;">

    <a style="margin-left: 32px;" rel="noopener" href="{{ route('penunjang')}}" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Home
    </a>
</div>

@if ($pasienkunjunganorder == NULL)

@if ($unit == 5001)
<div class=" col-md-5" style="margin-left:32px ;">
    <div class="card">

        <div class="card-header bg-secondary">Data Pasien Loundry</div>

        <div class="card-body">
            <div class="form-group">
                <label for="inputName">No RM </label>
                <input readonly type="text" id="norm" value="{{ $pasienkunjungan[0]->no_rm }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputName">Nama </label>
                <input readonly type="text" id="nama" value="{{ $pasienkunjungan[0]->nama_px }} " class="form-control">
            </div>
            <div class="form-group">
                <label for="inputName">Unit asal </label>
                <input readonly type="text" id="nama_unit" value="{{ $pasienkunjungan[0]->nama_unit }}" class="form-control">
                <input hidden type="text" id="kodeunit" value="{{ $pasienkunjungan[0]->kode_unit }}" class="form-control">
            </div>
            <div class="form-group" hidden>
                <label for="inputName">Kelas Unit </label>
                <input readonly type="text" id="kelas_unit" value="{{ $pasienkunjungan[0]->KELAS_UNIT }} " class="form-control">
            </div>
            <div class="form-group" hidden>
                <label for="inputName">Kelas</label>
                <input readonly type="text" id="kelas" value="{{ $pasienkunjungan[0]->kelas }} " class="form-control">
                <input hidden type="text" id="kodekunjungan" value="{{ $pasienkunjungan[0]->kode_kunjungan}}" class="form-control">
                <input hidden type="text" id="kodepenjamin" value="{{ $pasienkunjungan[0]->kode_penjamin }}" class="form-control">
                <input hidden type="text" id="kelas" value="{{ $pasienkunjungan[0]->kelas }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="inputName">Alamat Pasien</label>
                <textarea disabled class="form-control" rows="2">{{ $pasienkunjungan[0]->alamat }}</textarea>
                <input hidden type="text" id="alamat" rows="3" value="{{ $pasienkunjungan[0]->alamat }}" class="form-control">
            </div>
            <div class="form-group" hidden>
                <label for="inputName">Umur</label>

                <input readonly type="text" id="umur" value="{{ $pasienkunjungan[0]->Umur }}" class="form-control">
            </div>
            <div class="form-group" hidden>
                <label for="inputName">Penjamin </label>
                <input readonly type="text" id="nama_penjamin" value="{{ $pasienkunjungan[0]->nama_penjamin }} " class="form-control">
            </div>
            <div class="form-group" hidden>
                <label for="inputName">Grand Total Layanan </label>
                @if ($pasienkunjungan[0]->kode_penjamin == 'P01' )
                <input readonly type="text" id="gt" value="TUNAI " class="form-control">
                @else
                <input readonly type="text" id="gt" value="KREDIT " class="form-control">
                @endif
            </div>

            <div class="form-group">
                <label for="inputName">RIWAYAT </label><br>

                <button class="btn btn-success riwayat" id="riwayat"><i class="fas fa-eye">
                    </i> Lihat Riwayat</button>
            </div>


        </div>
        <div class="form-group riwayatpasien" id="riwayatpasien">

        </div>
    </div>

</div>
@else
<div class=" col-md-11" style="margin-left:32px ;">
    <div class="card">

        <div class="card-header bg-secondary">Data Pasien Penunjang</div>

        <div class="card-body">
            <div class="form-group">

                <div class="row">
                    <div class="col-2">
                        <label for="inputName">No RM </label>
                        <input readonly type="text" id="norm" value="{{ $pasienkunjungan[0]->no_rm }}" class="form-control">
                    </div>
                    <div class="col-3">
                        <label for="inputName">Nama </label>
                        <input readonly type="text" id="nama" value="{{ $pasienkunjungan[0]->nama_px }} " class="form-control">
                    </div>
                    <div class="col-3">
                        <label for="inputName">Unit asal </label>
                        <input readonly type="text" id="nama_unit" value="{{ $pasienkunjungan[0]->nama_unit }}" class="form-control">
                        <input hidden type="text" id="kodeunit" value="{{ $pasienkunjungan[0]->kode_unit }}" class="form-control">
                    </div>
                    <div class="col-2">
                        <label for="inputName">Kelas Unit </label>
                        <input readonly type="text" id="kelas_unit" value="{{ $pasienkunjungan[0]->KELAS_UNIT }} " class="form-control">
                    </div>
                    <div class="col-2">
                        <label for="inputName">Kelas</label>
                        <input readonly type="text" id="kelas" value="{{ $pasienkunjungan[0]->kelas }} " class="form-control">
                    </div>
                </div>
                <input hidden type="text" id="kodekunjungan" value="{{ $pasienkunjungan[0]->kode_kunjungan}}" class="form-control">
                <input hidden type="text" id="kodepenjamin" value="{{ $pasienkunjungan[0]->kode_penjamin }}" class="form-control">
                <input hidden type="text" id="kelas" value="{{ $pasienkunjungan[0]->kelas }}" class="form-control">
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-5">
                        <label for="inputName">Alamat Pasien</label>
                        <textarea disabled class="form-control" rows="2">{{ $pasienkunjungan[0]->alamat }}</textarea>
                        <input hidden type="text" id="alamat" rows="3" value="{{ $pasienkunjungan[0]->alamat }}" class="form-control">
                    </div>
                    <div class="col-3 detaildokter">
                        <label for="inputName">Dokter Pengirim</label>
                        @if ($pasienkunjungan[0]->nama_paramedis > 0 )

                        <input type="text " id="nama_paramedis" value="{{$pasienkunjungan[0]->nama_paramedis}}" class="form-control">
                        <input type="text " hidden id="dokter" value="{{$pasienkunjungan[0]->Dokter}}" class="form-control"> @else
                        <input type="text " id="nama_paramedis" value="" class="form-control">

                        <button type="submit" class="btn btn-primary mb-2" onclick="caridokter()"> <i class="bi bi-search-heart"></i></button>
                        @endif
                    </div>

                    <div class="col-4">
                        <label for="inputName">Diagnosa Pasien</label>
                        <textarea class="form-control" rows="2">{{ $diagx }}</textarea>
                        <input hidden type="text" id="diagnosa" value="{{ $diagx }}" class="form-control">
                    </div>

                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-2">
                        <label for="inputName">Umur</label>

                        <input readonly type="text" id="umur" value="{{ $pasienkunjungan[0]->Umur }}" class="form-control">
                    </div>
                    <div class="col-2">
                        <label for="inputName">Penjamin </label>
                        <input readonly type="text" id="nama_penjamin" value="{{ $pasienkunjungan[0]->nama_penjamin }} " class="form-control">
                    </div>
                    <div class="col-2">
                        <label for="inputName">Grand Total Layanan </label>
                        @if ($pasienkunjungan[0]->kode_penjamin == 'P01' )
                        <input readonly type="text" id="gt" value="TUNAI " class="form-control">
                        @else
                        <input readonly type="text" id="gt" value="KREDIT " class="form-control">
                        @endif
                    </div>
                    <div class="col-2">

                        @if ($unit == 3002)
                        <label for="inputName">LIS </label><br>
                        <label for="lis">BRIDGING LIS</label>
                        <input type="checkbox" name="lis" id="lis" value="lis" checked>
                        @elseif ($unit == 3003)
                        <label for="inputName">PACS </label><br>
                        <input type="checkbox" name="pacs" id="pacs" value="pacs" checked>
                        <label for="ris">BRIDGING PACS</label>
                        @else
                        @endif
                    </div>
                    <div class="col-2">
                        <label for="inputName">RIWAYAT </label><br>

                        <button class="btn btn-success riwayat" id="riwayat"><i class="fas fa-eye">
                            </i> Lihat Riwayat</button>
                    </div>


                </div>
            </div>
            <div class="form-group riwayatpasien" id="riwayatpasien">

            </div>
        </div>
    </div>
</div>
@endif
<div class="col-md-6" style="margin-left: 30px;">
    <div class="card">
        <div class="card-header bg-secondary">Pilih Layanan</div>
        <div class="card-body">
            <div class="tab-content">
                <div class="form-group">

                    @if ($unit == 3002)
                    <table id="tabelpaket" class="table table-sm mt-3 table-hover">

                        <thead>
                            <th>Nama tindakan</th>
                        </thead>
                        <tbody>
                            @foreach ($paket as $p)
                            <tr class="pilihpaket" idpaket="{{$p->id_paket}}" jenis="paket" namatindakan="{{ $p->nama }}" tarif="0" kode="{{ $p->id_paket }}">
                                <td>{{ $p->nama }}</td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
                <div class="tab-pane active" id="activity">

                    <div class="form-group">
                        <table id="tabeltindakan" class="table table-sm mt-3 table-hover">
                            <thead>
                                <th>Nama tindakan</th>
                            </thead>
                            <tbody>
                                @foreach($layananlab as $t)
                                <tr class="pilihlayanan" jenis="nonpaket" namatindakan="{{ $t->Tindakan }}" tarif="{{ $t->tarif }}" kode="{{ $t->kode }}">
                                    <td>{{ $t->Tindakan }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @elseif ($unit == 5001)
                    <form id="add_name">
                        <div class="form-group">
                            <table class="table table-bordered" id="dynamic_field">
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <label for="inputName">Nama </label>
                                                <input type="text" name="nama" class="form-control name_list" placeholder="Input Nama">
                                            </div>
                                            <div class="col-3">
                                                <label for="inputName">Jumlah </label>
                                                <input type="text" name="jumlah" class="form-control name_list" placeholder="Input Jumlah">
                                            </div>
                                            <div class="col-3">
                                                <label for="inputName">Disc </label>
                                                <input type="text" name="disc" class="form-control name_list" placeholder="Input Disc">
                                            </div>
                                            <div class="col-2">
                                                <label for="inputName">Harga </label>
                                                <input type="text" name="harga" class="form-control name_list" placeholder="Input Harga">
                                            </div>

                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" id="add" class="btn btn-success">Add More
                                        </button>
                                    </td>
                                </tr>
                            </table>
                            <button class="btn btn-primary" id="submit">Submit</button>
                        </div>
                    </form>
                    @elseif ($unit == 3014)
                    <div class="form-group">
                        <table id="tabeltindakan" class="table table-sm mt-3 table-hover">
                            <thead>
                                <th>Nama tindakan</th>
                            </thead>
                            <tbody>
                                @foreach($layanankjn as $t)
                                <tr class="pilihlayanan" jenis="nonpaket" namatindakan="{{ $t->Tindakan }}" tarif="{{ $t->tarif }}" kode="{{ $t->kode }}">
                                    <td>{{ $t->Tindakan }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="form-group">
                        <form action="" class="form_barang">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>QTY</td>
                                        <td><input type="text" value="" class="form-control" name="qtybrg[]" /></td>

                                        <td>
                                            <select class="form-control select2" name="barang[]" id="barang">
                                                <option value=""> -- Pilih FILM atau AMPLOP --</option>
                                                <option value="AGFA KECIL">AGFA KECIL
                                                </option>
                                                <option value="AGFA BESAR">AGFA BESAR
                                                </option>
                                                <option value="CARIESTEAM KECIL">CARIESTEAM KECIL
                                                </option>
                                                <option value="CARIESTEAM BESAR">CARIESTEAM BESAR
                                                </option>
                                                <option value="RONTGEN KECIL">RONTGEN KECIL
                                                </option>
                                                <option value="RONTGEN BESAR">RONTGEN BESAR
                                                </option>
                                                <option value="CT SCAN">CT SCAN
                                                </option>
                                                <option value="USG BESAR">USG BESAR
                                                </option>
                                                <option value="USG KECIL">USG KECIL
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>

                                <button type="button" class="add">Add More</button>
                                <button type="button" class="del" onClick="delMore()">Delete</button>
                            </p>
                        </form>
                        <table id="tabeltindakan" class="table table-sm mt-3 table-hover">
                            <thead>
                                <th>Nama tindakan</th>
                            </thead>
                            <tbody>
                                @foreach($layanan as $t)
                                <tr class="pilihlayanan" jenis="nonpaket" namatindakan="{{ $t->Tindakan }}" tarif="{{ $t->tarif }}" kode="{{ $t->kode }}">
                                    <td>{{ $t->Tindakan }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
                <!-- /.tab-pane -->


                <!-- /.tab-pane -->

            </div>
        </div>

    </div>
    <!-- /.card -->
</div>

@if ($unit == 3002)
<div class="col-md-5">
    <div class="card">
        <div class="card-header bg-secondary">Tindakan / Layanan Pasien</div>
        <div class="card-body">
            <form action="" method="post" class="formtindakan">
                <div class="input_fields_wrap">
                    <div>
                    </div>
                    <button type="button" class="btn btn-warning mb-2 simpanlayanan" id="simpanlayanan">Simpan Tindakan</button>

                </div>
            </form>
        </div>
        <div class="card-footer">
            <p>pilih layanan untuk pasien</p>
        </div>
    </div>
</div>
@elseif ($unit == 5001)
@elseif ($unit == 3014)
<div class="col-md-5">
    <div class="card">
        <div class="card-header bg-secondary">Tindakan / Layanan Pasien</div>
        <div class="card-body">
            <form action="" method="post" class="formtindakan">

                <div class="input_fields_wrap">
                    <div>
                    </div>
                    <button type="button" class="btn btn-warning mb-2 simpanorderkjn" id="simpanorderkjn">Simpan Tindakan</button>

                </div>



            </form>
        </div>
        <div class="card-footer">
            <p>pilih layanan untuk pasien</p>
        </div>
    </div>
</div>
@else
<div class="col-md-5">
    <div class="card">
        <div class="card-header bg-secondary">Tindakan / Layanan Pasien</div>
        <div class="card-body">
            <form action="" method="post" class="formtindakan">

                <div class="input_fields_wrap">
                    <div>
                    </div>
                    <button type="button" class="btn btn-warning mb-2 simpanradiologi" id="simpanradiologi">Simpan Tindakan</button>

                </div>



            </form>
        </div>
        <div class="card-footer">
            <p>pilih layanan untuk pasien</p>
        </div>
    </div>
</div>
@endif

</div>



@else
<div class=" col-md-11" style="margin-left:32px ;">
    <div class="card">

        <div class="card-header bg-secondary">Data Pasien POLI</div>

        <div class="card-body">
            <div class="form-group">

                <div class="row">
                    <div class="col-2">
                        <label for="inputName">No RM </label>
                        <input readonly type="text" id="norm" value="{{ $pasienkunjunganorder[0]->no_rm }}" class="form-control">
                    </div>
                    <div class="col-3">
                        <label for="inputName">Nama </label>
                        <input readonly type="text" id="nama" value="{{ $pasienkunjunganorder[0]->nama_px }} " class="form-control">
                    </div>
                    <div class="col-3">
                        <label for="inputName">Unit asal </label>
                        <input readonly type="text" id="nama_unit" value="{{ $pasienkunjunganorder[0]->nama_unit }}" class="form-control">
                        <input hidden type="text" id="kodeunit" value="{{ $pasienkunjunganorder[0]->unit_asal }}" class="form-control">

                    </div>
                    <div class="col-2">
                        <label for="inputName">Kelas Unit </label>
                        <input readonly type="text" id="kelas_unit" value="{{ $pasienkunjunganorder[0]->KELAS_UNIT }} " class="form-control">
                    </div>
                    <div class="col-2">
                        <label for="inputName">Kelas</label>
                        <input readonly type="text" id="kelas" value="{{ $pasienkunjunganorder[0]->kelas }} " class="form-control">
                    </div>
                </div>
                <input hidden type="text" id="kodekunjungan" value="{{ $pasienkunjunganorder[0]->kode_kunjungan}}" class="form-control">
                <input hidden type="text" id="kodepenjamin" value="{{ $pasienkunjunganorder[0]->kode_penjamin }}" class="form-control">
                <input hidden type="text" id="kelas" value="{{ $pasienkunjunganorder[0]->kelas }}" class="form-control">
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-5">
                        <label for="inputName">Alamat Pasien</label>
                        <textarea disabled class="form-control" rows="2">{{ $pasienkunjunganorder[0]->alamat }}</textarea>
                        <input hidden type="text" id="alamat" rows="3" value="{{ $pasienkunjunganorder[0]->alamat }}" class="form-control">
                    </div>
                    <div class="col-3">
                        <label for="inputName">Dokter Pengirim</label>
                        <input readonly type="text" id="nama_paramedis" value="{{ $pasienkunjunganorder[0]->nama_paramedis }}" class="form-control">
                        <input hidden type="text" id="dokter" value="{{ $pasienkunjunganorder[0]->Dokter }}" class="form-control">
                    </div>
                    <div class="col-4">
                        <label for="inputName">Diagnosa Pasien</label>
                        <textarea disabled class="form-control" rows="2">{{ $pasienkunjunganorder[0]->DIAGX }}</textarea>
                        <input hidden type="text" id="diagnosa" value="{{ $pasienkunjunganorder[0]->DIAGX }}" class="form-control">
                    </div>

                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-2">
                        <label for="inputName">Umur</label>
                        <input readonly type="text" id="umur" value="{{ $pasienkunjunganorder[0]->Umur }}" class="form-control">

                    </div>
                    <div class="col-2">
                        <label for="inputName">Penjamin </label>
                        <input readonly type="text" id="nama_penjamin" value="{{ $pasienkunjunganorder[0]->nama_penjamin }} " class="form-control">
                    </div>
                    <div class="col-2">
                        <label for="inputName">Grand Total Layanan </label>
                        @if ($pasienkunjunganorder[0]->kode_penjamin == 'P01' )
                        <input readonly type="text" id="gt" value="TUNAI " class="form-control">
                        @else
                        <input readonly type="text" id="gt" value="KREDIT " class="form-control">
                        @endif
                    </div>
                    <div class="col-2">

                        @if ($unit == 3002)
                        <label for="inputName">LIS </label><br>
                        <label for="lis">BRIDGING LIS</label>
                        <input type="checkbox" name="lis" id="lis" value="lis" checked>
                        @else
                        <label for="inputName">PACS </label><br>
                        <input type="checkbox" name="pacs" id="pacs" value="pacs" checked>
                        <label for="ris">BRIDGING PACS</label>
                        @endif
                    </div>
                    <div class="col-2">
                        <label for="inputName">RIWAYAT </label><br>

                        <button class="btn btn-success riwayat" id="riwayat"><i class="fas fa-eye">
                            </i> Lihat Riwayat</button>
                    </div>


                </div>
            </div>
            <div class="form-group riwayatpasien" id="riwayatpasien">

            </div>
        </div>
    </div>
</div>

<div class="col-md-5" style="margin-left: 30px;">
    <div class="card">
        <div class="card-header bg-secondary">Pilih layanan</div>
        <div class="card-body">
            <div class="tab-content">
                <div class="form-group">

                    @if ($unit == 3002)
                    <table id="tabelpaket" class="table table-sm mt-3 table-hover">

                        <thead>
                            <th>Nama tindakan</th>
                        </thead>
                        <tbody>
                            @foreach ($paket as $p)
                            <tr class="pilihpaket" idpaket="{{$p->id_paket}}" jenis="paket" namatindakan="{{ $p->nama }}" tarif="0" kode="{{ $p->id_paket }}">
                                <td>{{ $p->nama }}</td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
                <div class="tab-pane active" id="activity">

                    <div class="form-group">
                        <table id="tabeltindakan" class="table table-sm mt-3 table-hover">
                            <thead>
                                <th>Nama tindakan</th>
                            </thead>
                            <tbody>
                                @foreach($layananlab as $t)
                                <tr class="pilihlayanan" jenis="nonpaket" namatindakan="{{ $t->Tindakan }}" tarif="{{ $t->tarif }}" kode="{{ $t->kode }}">
                                    <td>{{ $t->Tindakan }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="form-group">
                        <form action="" class="form_barang">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>QTY</td>
                                        <td><input type="text" value="" class="form-control" name="qtybrg[]" /></td>

                                        <td>
                                            <select class="form-control select2" name="barang[]" id="barang">
                                                <option value=""> -- Pilih FILM atau AMPLOP --</option>
                                                <option value="AGFA KECIL">AGFA KECIL
                                                </option>
                                                <option value="AGFA BESAR">AGFA BESAR
                                                </option>
                                                <option value="CARIESTEAM KECIL">CARIESTEAM KECIL
                                                </option>
                                                <option value="CARIESTEAM BESAR">CARIESTEAM BESAR
                                                </option>
                                                <option value="RONTGEN KECIL">RONTGEN KECIL
                                                </option>
                                                <option value="RONTGEN BESAR">RONTGEN BESAR
                                                </option>
                                                <option value="CT SCAN">CT SCAN
                                                </option>
                                                <option value="USG BESAR">USG BESAR
                                                </option>
                                                <option value="USG KECIL">USG KECIL
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>

                                <button type="button" class="add">Add More</button>
                                <button type="button" class="del" onClick="delMore()">Delete</button>
                            </p>
                        </form>
                        <table id="tabeltindakan" class="table table-sm mt-3 table-hover">
                            <thead>
                                <th>Nama tindakan</th>
                            </thead>
                            <tbody>
                                @foreach($layanan as $t)
                                <tr class="pilihlayanan" jenis="nonpaket" namatindakan="{{ $t->Tindakan }}" tarif="{{ $t->tarif }}" kode="{{ $t->kode }}">
                                    <td>{{ $t->Tindakan }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
                <!-- /.tab-pane -->


                <!-- /.tab-pane -->

            </div>
        </div>

    </div>
    <!-- /.card -->
</div>

@if ($unit == 3002)
<div class="col-md-6">
    <div class="card">
        <div class="card-header bg-secondary">Tindakan / Layanan Pasien</div>
        <div class="card-body">
            <form action="" method="post" class="formtindakan">
                <div class="input_fields_wrap">
                    <div>
                        @foreach($pasienkunjunganorder as $p)
                        <div class="form-row text-xs">
                            <div class="form-group col-md-5"><label for="">Tindakan</label><input readonly type="" class="form-control form-control-sm" id="" name="namatindakan" value="{{$p->nama_layanan}}">
                                <input hidden readonly type="" class="form-control form-control-sm" id="" name="kodelayanan" value="{{$p->kode_tarif_detail}}">
                                <input hidden readonly type="" class="form-control form-control-sm" id="" name="jenis" value="">
                            </div>
                            <div class="form-group col-md-2"><label for="inputPassword4">Tarif</label><input readonly type="" class="form-control form-control-sm" id="" name="tarif" value="{{$p->total_tarif}}"></div>
                            <div class="form-group col-md-1"><label for="inputPassword4">Jumlah</label><input type="" class="form-control form-control-sm" id="" name="qty" value="{{$p->jumlah_layanan}}"></div>
                            <div class="form-group col-md-1"><label for="inputPassword4">Disc</label><input type="" class="form-control form-control-sm" id="" name="disc" value="0"></div>
                            <div class="form-group col-md-1"><label for="inputPassword4">Cyto</label><input type="" class="form-control form-control-sm" id="" name="cyto" value="0"></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i>
                        </div>
                        @endforeach
                    </div>
                </div>
                <button type="button" class="btn btn-warning mb-2 simpanlayanan" id="simpanlayanan">Simpan Tindakan</button>


            </form>
        </div>
        <div class="card-footer">
            <p>pilih layanan untuk pasien</p>
        </div>
    </div>
</div>
@else
<div class="col-md-6">
    <div class="card">
        <div class="card-header bg-secondary">Tindakan / Layanan Pasien</div>
        <div class="card-body">
            <form action="" method="post" class="formtindakan">

                <div class="input_fields_wrap">
                    <div>
                        @foreach($pasienkunjunganorder as $p)
                        <div class="form-row text-xs">
                            <div class="form-group col-md-5"><label for="">Tindakan</label><input readonly type="" class="form-control form-control-sm" id="" name="namatindakan" value="{{$p->nama_layanan}}">
                                <input hidden readonly type="" class="form-control form-control-sm" id="" name="kodelayanan" value="{{$p->kode_tarif_detail}}">
                                <input hidden readonly type="" class="form-control form-control-sm" id="" name="jenis" value="">
                            </div>
                            <div class="form-group col-md-2"><label for="inputPassword4">Tarif</label><input readonly type="" class="form-control form-control-sm" id="" name="tarif" value="{{$p->total_tarif}}"></div>
                            <div class="form-group col-md-1"><label for="inputPassword4">Jumlah</label><input type="" class="form-control form-control-sm" id="" name="qty" value="{{$p->jumlah_layanan}}"></div>
                            <div class="form-group col-md-1"><label for="inputPassword4">Disc</label><input type="" class="form-control form-control-sm" id="" name="disc" value="0"></div>
                            <div class="form-group col-md-1"><label for="inputPassword4">Cyto</label><input type="" class="form-control form-control-sm" id="" name="cyto" value="0"></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i>
                        </div>
                        @endforeach
                    </div>
                </div>
                <button type="button" class="btn btn-warning mb-2 simpanradiologi" id="simpanradiologi">Simpan Tindakan</button>
                <button type="button" class="btn btn-danger mb-2 batalradiologi" id="batalradiologi">Batal Tindakan</button>

            </form>
        </div>
        <div class="card-footer">
            <p>pilih layanan untuk pasien</p>
        </div>
    </div>
</div>
@endif
@endif



<div style="margin-top:100px ;"></div>


<script>
    function berhasil() {
        var bel = new Audio('berhasil.mp3');
        bel.play();
    }

    function retur() {
        var bel = new Audio('retur.mp3');
        bel.play();
    }

    function batal() {
        var bel = new Audio('batal.mp3');
        bel.play();
    }
    $(function() {
        $("#tabelpasieno").DataTable({
            "resposive": false,
            "lengthChange": false,
            "autowidth": false,
        });
    });
    $(function() {
        $("#tabeldiagnosa").DataTable({
            "responsive": false,
            "lengthChange": false,
            "autowidth": false,
        });
    });
    $(function() {
        $("#tabeltindakan").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $(function() {
        $("#tabelpaket").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $("button.add").click(function() {
        $(this).siblings("button").show("fast");
        $(this).parent().prev("table").find("tbody").append('<tr><td>QTY</td><td><input value="" type ="text" class ="form-control" name="qtybrg[]"/></td><td><select class ="form-control select2" name="barang[]" id ="barang"><option value =""> --Pilih FILM atau AMPLOP-- </option> <option value = "AGFA KECIL" > AGFA KECIL</option> <option value = "AGFA BESAR" > AGFA BESAR</option><option value = "CARIESTEAM KECIL" > CARIESTEAM KECIL </option> <option value = "CARIESTEAM BESAR" > CARIESTEAM BESAR</option>  <option value="RONTGEN KECIL">RONTGEN KECIL</option><option value="RONTGEN BESAR">RONTGEN BESAR</option><option value="CT SCAN">CT SCAN</option><option value="USG BESAR">USG BESAR</option><option value="USG KECIL">USG KECIL</option></select> </td><tr>');
    });

    $("button.del").click(function() {
        var table = $(this).parent().prev("table");
        var rowCount = table.find("tr").length;
        table.find("tr:last").remove();
        if (rowCount <= 2) {
            $(this).hide("fast");
        }

    });

    function caridokter() {
        spinner = $('#loader2');
        spinner.show();
        namadokter = $('#nama_paramedis').val()


        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                namadokter,

            },
            url: " {{ route('caridokter') }}",
            error: function(data) {
                spinner.hide()
                alert('Errorrr!!!')
            },
            success: function(response) {
                spinner.hide();
                $('.detaildokter').html(response);
            }
        })
    }
    $('#tabelpaket').on('click', '.pilihpaket', function() {

        kode = $(this).attr('kode')
        namatindakan = $(this).attr('namatindakan')
        tarif = $(this).attr('tarif')
        idpaket = $(this).attr('idpaket')
        jenis = $(this).attr('jenis')
        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                kode,
                namatindakan,
                tarif,
                idpaket,
                jenis

            },
            url: " {{ route('detailpaket') }}",
            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(response) {
                spinner.hide();

                $('.formtindakan').html(response);
            }
        });
    });

    $('#tabeltindakan').on('click', '.pilihlayanan', function() {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
        var x = 1; //initlal text box count
        kode = $(this).attr('kode')
        namatindakan = $(this).attr('namatindakan')
        tarif = $(this).attr('tarif')
        id = $(this).attr('id')
        jenis = $(this).attr('jenis')


        // e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append(
                '<div class="form-row text-xs"><div class="form-group col-md-5"><label for="">Tindakan</label><input readonly type="" class="form-control form-control-sm" id="" name="namatindakan" value="' +
                namatindakan +
                '"><input hidden readonly type="" class="form-control form-control-sm" id="" name="kodelayanan" value="' +
                kode +
                '"><input hidden  readonly type="" class="form-control form-control-sm" id="" name="jenis" value="' +
                jenis +
                '"></div><div class="form-group col-md-2"><label for="inputPassword4">Tarif</label><input readonly type="" class="form-control form-control-sm" id="" name="tarif" value="' +
                tarif +
                '"></div><div class="form-group col-md-1"><label for="inputPassword4">Jumlah</label><input type="" class="form-control form-control-sm" id="" name="qty" value="1"></div><div class="form-group col-md-1"><label for="inputPassword4">Disc</label><input type="" class="form-control form-control-sm" id="" name="disc" value="0"></div><div class="form-group col-md-1"><label for="inputPassword4">Cyto</label><input type="" class="form-control form-control-sm" id="" name="cyto"  @if($idsimrs == 1141 && $pasienkunjungan[0]->kode_unit == 1002 && $now >= "15:00:00" OR $now <= "07:00:00" ) value="1" @else value="0" @endif></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i></div>'
            );
            $(wrapper).on("click", ".remove_field", function(e) { //user click on remove
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })
        }
    });


    function pilihpaket() {
        spinner = $('#loader2');
        spinner.show();
        kelas = $('#kelas').val()
        idpaket = $('#idpaket').val()

        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                kelas,
                idpaket
            },
            url: "{{ route('tampilpaket') }}",
            error: function(data) {
                spinner.hide()
                alert('Errorrr!!!')
            },
            success: function(response) {
                spinner.hide();
                $('.tabelpaket').html(response);
            }
        })
    }
    $(".riwayat").click(function() {
        spinner = $('#loader2');
        spinner.show();
        norm = $('#norm').val()
        kodeunit = $('#kodeunit').val()
        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                norm,
                kodeunit

            },
            url: " {{ route('riwayatpasien') }}",
            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(response) {
                spinner.hide();
                $('#norm').val(response.norm);
                $('#kodeunit').val(response.kodeunit);
                $('.riwayatpasien').html(response);
            }
        });
    });

    $(".simpanlayanan").click(function() {
        var diagnosa = $('#diagnosa').val()
        var dokter = $('#dokter').val()
        // if ($('#diagnosa').val() == "") {
        //     Swal.fire(
        //         'Nope!',
        //         'silahkan isi diagnosa',
        //         'warning'
        //     );
        // } else {
        //     $(this).submitDueOrder(1);
        // }
        // if ($('#dokter').val() == "") {
        //     Swal.fire(
        //         'Nope!',
        //         'silahkan isi dokter',
        //         'warning'
        //     );
        // } else {
        //     $(this).submitDueOrder(1);
        // }

        // if (diagnosa == diagnosa) {
        //     var diagnosa = $('#diagnosa').val()

        //     if (diagnosa == '') {
        //         Swal.fire({
        //             icon: 'error',
        //             title: 'Oops...',
        //             text: 'diagnosa belum di isi',
        //             footer: ''
        //         })
        //         return
        //     }
        // }
        // if (dokter == dokter) {
        //     var dokter = $('#dokter').val()

        //     if (dokter == '') {
        //         Swal.fire({
        //             icon: 'error',
        //             title: 'Oops...',
        //             text: 'dokter belum di isi',
        //             footer: ''
        //         })
        //         return
        //     }
        // }
        var data = $('.formtindakan').serializeArray();
        var kodekunjungan = $('#kodekunjungan').val()
        var kodepenjamin = $('#kodepenjamin').val()
        var kodepenunjang = $('#namapenunjang').val()
        var dokter = $('#dokter').val()
        var kodeunit = $('#kodeunit').val()
        var kelasunit = $('#kelas_unit').val()
        var kelas = $('#kelas').val()
        var gt = $('#gt').val()
        var norm = $('#norm').val()
        var namaunit = $('#nama_unit').val()
        var lis = $("#lis:checked").val();
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
                        data: JSON.stringify(data),
                        kodekunjungan: $('#kodekunjungan').val(),
                        kodepenunjang: $('#namapenunjang').val(),
                        dokter: $('#dokter').val(),
                        kodepenjamin: $('#kodepenjamin').val(),
                        diagnosa: $('#diagnosa').val(),
                        kodeunit: $('#kodeunit').val(),
                        gt: $('#gt').val(),
                        kelasunit: $('#kelasunit').val(),
                        norm: $('#norm').val(),
                        namaunit: $('#nama_unit').val(),
                        kelas: $('#kelas').val(),
                        lis: $('#lis').val()

                    },
                    url: '<?= route('simpanorderpasien') ?>',
                    error: function(data) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.message,
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
                                text: data.message,
                                footer: ''
                            })
                            labpdf(data.idhed, data.kode_header)
                            window.location.reload();

                        }
                    }
                });
            }
        })
        return false;
    });

    $(".batalradiologi").click(function() {

        var data = $('.formtindakan').serializeArray();
        var kodekunjungan = $('#kodekunjungan').val()
        var norm = $('#norm').val()

        Swal.fire({
            title: "Yakin Batal Layanan?",
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
                        kodekunjungan: $('#kodekunjungan').val(),
                        norm: $('#norm').val(),
                    },
                    url: '<?= route('batalradiologi') ?>',
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
                                text: 'data berhasil Batalkan',
                                footer: ''
                            })

                            window.location.reload();

                        }
                    }
                });
            }
        })
        return false;
    });
    $(".simpanradiologi").click(function() {
        var data = $('.formtindakan').serializeArray();
        var barang = $('.form_barang').serializeArray();
        var kodekunjungan = $('#kodekunjungan').val()
        var kodepenjamin = $('#kodepenjamin').val()
        var kodepenunjang = $('#namapenunjang').val()
        var dokter = $('#dokter').val()
        var diagnosa = $('#diagnosa').val()
        var kodeunit = $('#kodeunit').val()
        var kelasunit = $('#kelas_unit').val()
        var kelas = $('#kelas').val()

        var gt = $('#gt').val()
        var norm = $('#norm').val()
        var namaunit = $('#nama_unit').val()

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
                        data: JSON.stringify(data),
                        barang: JSON.stringify(barang),

                        kodekunjungan: $('#kodekunjungan').val(),
                        kodepenunjang: $('#namapenunjang').val(),
                        dokter: $('#dokter').val(),
                        kodepenjamin: $('#kodepenjamin').val(),
                        diagnosa: $('#diagnosa').val(),
                        kodeunit: $('#kodeunit').val(),
                        gt: $('#gt').val(),
                        kelasunit: $('#kelasunit').val(),
                        norm: $('#norm').val(),
                        namaunit: $('#nama_unit').val(),
                        kelas: $('#kelas').val()
                    },
                    url: '<?= route('simpanorderradiologi') ?>',
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
                            pdf(data.idhed, data.kode_header)
                            etiket(data.idhed, data.kode_header)
                            window.location.reload();

                        }
                    }
                });
            }
        })
        return false;
    });


    $(".simpanorderkjn").click(function() {
        var data = $('.formtindakan').serializeArray();
        var kodekunjungan = $('#kodekunjungan').val()
        var kodepenjamin = $('#kodepenjamin').val()
        var kodepenunjang = $('#namapenunjang').val()
        var dokter = $('#dokter').val()
        var diagnosa = $('#diagnosa').val()
        var kodeunit = $('#kodeunit').val()
        var kelasunit = $('#kelas_unit').val()
        var kelas = $('#kelas').val()

        var gt = $('#gt').val()
        var norm = $('#norm').val()
        var namaunit = $('#nama_unit').val()

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
                        data: JSON.stringify(data),
                        kodekunjungan: $('#kodekunjungan').val(),
                        kodepenunjang: $('#namapenunjang').val(),
                        dokter: $('#dokter').val(),
                        kodepenjamin: $('#kodepenjamin').val(),
                        diagnosa: $('#diagnosa').val(),
                        kodeunit: $('#kodeunit').val(),
                        gt: $('#gt').val(),
                        kelasunit: $('#kelasunit').val(),
                        norm: $('#norm').val(),
                        namaunit: $('#nama_unit').val(),
                        kelas: $('#kelas').val()
                    },
                    url: '<?= route('simpanorderkjn') ?>',
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

                            window.location.reload();

                        }
                    }
                });
            }
        })
        return false;
    });


    $(document).ready(function() {
        var i = 1;
        var app = {
            addRow: function() {
                i++;
                $("#dynamic_field").append(`
					<tr id="row${i}">
						<td>
                        <div class="row">
                                            <div class="col-2">
                                                <label for="inputName">Nama </label>
                                                <input type="text" name="nama" class="form-control name_list" placeholder="Input Nama">
                                            </div>
                                            <div class="col-3">
                                                <label for="inputName">Jumlah </label>
                                                <input type="text" name="jumlah" class="form-control name_list" placeholder="Input Jumlah">
                                            </div>
                                            <div class="col-3">
                                                <label for="inputName">Disc </label>
                                                <input type="text" name="disc" class="form-control name_list" placeholder="Input Disc">
                                            </div>
                                            <div class="col-2">
                                                <label for="inputName">Harga </label>
                                                <input type="text" name="harga" class="form-control name_list" placeholder="Input Harga">
                                            </div>

                                        </div>
						</td>
						<td>
							<button type="button" id="${i}" class="btn btn-danger btn-remove">X
							</button>
						</td>
					</tr>
					`)
            },
            remove: function() {
                var idBtn = $(this).attr("id");
                $("#row" + idBtn + "").remove()

            },
            insertData: function(e) {
                e.preventDefault()
                var data = $("#add_name").serializeArray();
                var kodekunjungan = $('#kodekunjungan').val()
                var kodepenjamin = $('#kodepenjamin').val()
                var kodepenunjang = $('#namapenunjang').val()
                var dokter = $('#dokter').val()
                var diagnosa = $('#diagnosa').val()
                var kodeunit = $('#kodeunit').val()
                var kelasunit = $('#kelas_unit').val()
                var kelas = $('#kelas').val()

                var gt = $('#gt').val()
                var norm = $('#norm').val()
                var namaunit = $('#nama_unit').val()


                $.ajax({
                    async: true,
                    type: "POST",
                    dataType: 'json',
                    data: {
                        _token: "{{ csrf_token() }}",
                        data: JSON.stringify(data),
                        kodekunjungan: $('#kodekunjungan').val(),
                        kodepenunjang: $('#namapenunjang').val(),
                        dokter: $('#dokter').val(),
                        kodepenjamin: $('#kodepenjamin').val(),
                        diagnosa: $('#diagnosa').val(),
                        kodeunit: $('#kodeunit').val(),
                        gt: $('#gt').val(),
                        kelasunit: $('#kelasunit').val(),
                        norm: $('#norm').val(),
                        namaunit: $('#nama_unit').val(),
                        kelas: $('#kelas').val()

                    },
                    url: '<?= route('simpanorderloundry') ?>',

                    error: function(data) {
                        spinner.hide();
                        alert('error!!')
                    },
                    success: function(data) {
                        Swal.fire({
                            icon: 'success',
                            title: 'OK',
                            text: data.message,
                            footer: ''
                        })

                    }
                })
            }

        }

        $("#add").on("click", app.addRow)
        $(document).on("click", ".btn-remove", app.remove)
        $("#submit").on("click", app.insertData)
    })

    function pdf(idhed, kode_header) {

        window.open('cetakorder/' + kode_header + '/' + idhed);
    }

    function etiket(idhed, kode_header) {

        window.open('etiket/' + kode_header + '/' + idhed);
    }

    function labpdf(idhed, kode_header) {
        window.open('labnota/' + kode_header + '/' + idhed);
    }
</script>