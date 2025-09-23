<div class="card">
    <div class="card-header  bg-warning">Penandaan Gambar</div>
    <div class="card-body">
        <input type="text" hidden id="gambarcoret" name="gambarcoret">
        <img id="gambarnya1" style="margin-top:50px" width="600px" height="400px" src="{{ asset('public/img/nyeri.png') }}" onclick="showMarkerArea(this);" />
        <canvas hidden id="myCanvas1" width="600px" height="400px" style="border:1px solid #d3d3d3;">
        </canvas>
        <button type="button" class="btn btn-danger mt-2" onclick="batalgambar1()">batal</button>

    </div>
</div>

<script src="{{ asset('public/marker/markerjs2.js') }}"></script>
<script>
    function showMarkerArea(target) {
        const markerArea = new markerjs2.MarkerArea(target);
        markerArea.addEventListener("render", (event) => (target.src = event.dataUrl));
        markerArea.show();
    }
</script>