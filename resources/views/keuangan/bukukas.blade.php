@extends('keuangan.header')
@section('container')
<div class="row ">
    <div class="col-lg-4 col-6 mt-3 ml-2">

        <div class="small-box bg-info ">
            <div class="inner">
                <h3>Rp. 1.000.000.000.000</h3>
                <p>Available Balance</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
        </div>
    </div>

   

    <div class="col-lg-4 col-6 mt-3">

        <div class="small-box bg-success">
            <div class="inner">
                <h3>Rp. 7.900.000.000</h3>
                <p>Income</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
        </div>
    </div>
    <div class="col-lg-3 col-6 mt-3">

        <div class="small-box bg-danger">
            <div class="inner">
                <h3>Rp. 2.000.000</h3>
                <p>OUT</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
        </div>
    </div>
</div>
<div class="row ">
    <div class="col-md-6 mt-3">

        <div class="card card-primary ml-2 mt-2">
            <div class="card-header">
                <h3 class="card-title">INPUT KAS</h3>
            </div>


            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal</label>
                        <input type="date" name="tanggalkas" id="tanggalkas" class="form-control" placeholder="Keterangan" value="">
                    </div>
                    <div class="form-group">
                        <label>Jenis Transaksi</label>
                        <select class="form-control " value="" name="jenistransaksi" id="jenistransaksi">
                            <option>PENGELUARAN</option>
                            <option>PEMASUKAN</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis Pembayaran</label>
                        <select class="form-control " value="" name="jenispembayaran" id="jenispembayaran">
                            <option>Debit</option>
                            <option>Cash</option>
                            <option>Transfer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Keterangan</label>
                        <input type="text" class="form-control" value="" name="keterangan" id="keterangan" placeholder="Keterangan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nominal</label>
                        <input type="text" class="form-control" value="" name="nominal" id="nominal" placeholder="RP....">
                    </div>
                    <!-- <div class="form-group">
                        <label for="exampleInputFile">kwitansi / Nota</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div> -->

                </div>

                <div class="card-footer">
                    <div type="button" class="btn float-right btn-primary simpankas ">
                        SIMPAN
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-5 mt-4">
        <table class="table table-bordered ">
            <thead class="bg-info">
                <tr>
                    <th style="width: 10px">Kode</th>
                    <th>KETERANGAN</th>
                    <th>IN / OUT</th>
                    <th>Tanggal</th>
                    <th>Nominal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>OUT00912</td>
                    <td>PERBAIKAN PC</td>
                    <td>
                        <span class="badge bg-danger">PENGELUARAN</span>
                        <!-- <span class="badge bg-success">PEMASUKAN</span> -->
                    </td>
                    <td>16-10-2024</td>
                    <td>Rp 18.500.900</td>
                </tr>
                <tr>
                    <td>OUT00912</td>
                    <td>PERBAIKAN RUANGAN</td>
                    <td>
                        <span class="badge bg-danger">PENGELUARAN</span>
                        <!-- <span class="badge bg-success">PEMASUKAN</span> -->
                    </td>
                    <td>16-10-2024</td>
                    <td>Rp 10.500.900</td>
                </tr>
                <tr>
                    <td>IN00912</td>
                    <td>BPJS BULAN JUNI </td>
                    <td>
                        <!-- <span class="badge bg-danger">PENGELUARAN</span> -->
                        <span class="badge bg-success">PEMASUKAN</span>
                    </td>
                    <td>19-10-2024</td>
                    <td>Rp 10.500.900.000</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<script>
    spinner = $('#loader2');
    spinner.hide();
    document.getElementById('tanggalkas').valueAsDate = new Date()
</script>
@endsection