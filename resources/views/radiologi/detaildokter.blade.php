<label for="inputName">Dokter Pengirim</label>
<input type="text " id="nama_paramedis" value="{{$dokter[0]->nama_paramedis}}" class="form-control">
<input hidden type="text " id="dokter" value="{{$dokter[0]->kode_paramedis}}" class="form-control">

<button type="submit" class="btn btn-primary mb-2" onclick="caridokterradiologi()"> <i class="bi bi-search-heart"></i></button>