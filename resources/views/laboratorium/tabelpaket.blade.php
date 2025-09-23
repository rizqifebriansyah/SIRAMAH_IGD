<div class="card-header bg-success">Tindakan / Layanan Pasien</div>
<div class="card-body">
    <form action="" method="post" class="formpaket">

        <div class="input_fields_wrap">
        @foreach($paketdetail as $t)

            <div>
                <div class="form-row text-xs">
                    <div class="form-group col-md-5">
                        <label for="">Tindakan</label>
                        <input readonly type="" class="form-control form-control-sm" id="" name="namatindakan" value="{{ $t->nama_tarif }}">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputPassword4">Tarif</label>
                        <input readonly type="" class="form-control form-control-sm" id="" name="tarif" value="{{ $t->harga }}">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="inputPassword4">Jumlah</label>
                        <input type="" class="form-control form-control-sm" id="" name="qty" value="{{ $t->jml }}">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="inputPassword4">Disc</label>
                        <input type="" class="form-control form-control-sm" id="" name="disc" value="0">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="inputPassword4">Cyto</label>
                        <input type="" class="form-control form-control-sm" id="" name="cyto" value="0">
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </form>
</div>
<div class="card-footer">
    <p>pilih layanan untuk pasien</p>
</div>
</div>
<script>
     
</script>
