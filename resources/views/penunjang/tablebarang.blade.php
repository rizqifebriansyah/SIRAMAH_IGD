@foreach($barang as $a => $b )
<tr>
    <td>{{$b->Nama_barang}}</td>
    <td hidden class="kodeheader"> {{ $b->kode_layanan_header}}</td>
    <td hidden class="id"> {{ $b->id}}</td>


    <td class="qtyawal">{{$b->qty}}</td>

    <td><input type="text" class="form-control" name="qtyretur" value="" id="qtyretur"></td>
    <td><a class=" btn btn-secondary btn-sm returbarangrad" href="#">
            <i class="" aria-hidden="true">R</i>

        </a> </td>

</tr>
@endforeach