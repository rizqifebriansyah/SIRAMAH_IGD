<div class="card card-primary card-outline mb-4">
    <div class="card-header">
        <div class="card-title">Hasil Expertisi pasien {{$expertisi[0]->ACCESSIONNUMBER}}</div>
    </div>
    <form>
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Norm</label>
                <input type="text" value="{{$expertisi[0]->PID}}" class="form-control" name="Norm" id="Norm" />

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Pasien</label>
                <input type="text" value="{{$expertisi[0]->NAME}}" class="form-control" name="Norm" id="Norm" />

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pemeriksaan</label>
                <input type="text" value="{{$expertisi[0]->PROCEDURENAME}}" class="form-control" name="Norm" id="Norm" />

            </div>
            <div class="mb-3">

                <textarea class="form-control" id="secondary" name="secondary" rows="10">Dokter  : {{$expertisi[0]->APPROVER}}  &#13;&#10; &#13;&#10;Hasil :  &#13;&#10;{{$expertisi[0]->REPORT}} </textarea>
            </div>
        </div>
        <div class="card-footer">
        </div>
    </form>
</div>