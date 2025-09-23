<div class="col-md-6">
    <select class="form-control select2" name="kamar" id="kamar">
        <option value="">Kamar</option>
        @foreach ($ruangan as $i => $p)
        <option value="{{ $p->nama_kamar }}">{{ $p->nama_kamar }}
        </option>
        @endforeach

    </select>
</div>
<div class="col-md-3">
    <select class="form-control select2" name="nobed" id="nobed">
        <option value="">bed</option>
        @foreach ($ruangan as $i => $p)
        <option value="{{ $p->no_bed }}">{{ $p->no_bed }}
        </option>
        @endforeach

    </select>
    <input type="text" name="prefix" id="prefix" value="{{$namaunit[0]->prefix_unit}}">
</div>