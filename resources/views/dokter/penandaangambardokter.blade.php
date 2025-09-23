<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header  bg-warning">Penandaan Gambar</div>
            <div class="card-body">
                <input type="text" hidden id="gambarcoret1" name="gambarcoret1">
                <img id="gambarnya2" style="margin-top:50px" width="400px" height="400px" src="{{ asset('public/img/nyeri.png') }}" onclick="showMarkerArea(this);" />
                <canvas hidden id="myCanvas2" width="600px" height="400px" style="border:1px solid #d3d3d3;">
                </canvas>
                <button type="button" class="btn btn-danger mt-2" onclick="batalgambar1()">batal</button>

            </div>
        </div>
    </div>
    <div class="col-md-5">
        <table>
            <tbody>
                <tr>
                    <td class="text-bold font-italic">Kesadaran</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="kesadaran_1" id="kesadaran_1" value="Compos Mentis">
                            <label class="form-check-label" for="inlineRadio1">Compos Mentis</label>
                        </div>

                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="kesadaran_2" id="kesadaran_2" value="Letargik">
                            <label class="form-check-label" for="inlineRadio2">Letargik</label>
                        </div>
                    </td>
                    <td>
                        <label class="form-check-label" for="inlineRadio2">Lainya</label>

                        <input class="form-" type="input" name="kesadaran_3" id="kesadaran_3" value="">

                    </td>
                </tr>
                <tr>
                    <td class="text-bold font-italic">Status Psikologi</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="spsi" id="spsi" value="Marah">
                            <label class="form-check-label" for="inlineRadio1">Marah</label>
                        </div>

                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="spsi1" id="spsi1" value="Depresi">
                            <label class="form-check-label" for="inlineRadio2">Depresi</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="spsi2" id="spsi2" value="Takut">
                            <label class="form-check-label" for="inlineRadio2">Takut</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-bold font-italic"></td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="spsi3" id="spsi3" value="Gelisah">
                            <label class="form-check-label" for="inlineRadio1">Gelisah</label>
                        </div>

                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="spsi4" id="spsi4" value="Psikotik">
                            <label class="form-check-label" for="inlineRadio2">Psikotik</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="spsi5" id="spsi5" value="Cemas">
                            <label class="form-check-label" for="inlineRadio2">Cemas</label>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td class="text-bold font-italic"></td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="spsi6" id="spsi6" value="Gelisah">
                            <label class="form-check-label" for="inlineRadio1">Gelisah</label>
                        </div>

                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="spsi7" id="spsi7" value="Kecendrungan Bunuh Diri">
                            <label class="form-check-label" for="inlineRadio2">Kecendrungan Bunuh Diri</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="spsi8" id="spsi8" value="Tidak Ada Masalah">
                            <label class="form-check-label" for="inlineRadio2">Tidak Ada Masalah</label>
                        </div>

                    </td>
                </tr>
                 <tr>
                    <td class="text-bold font-italic"></td>
                   
                    <td>
                        <label class="form-check-label" for="inlineRadio2">Lainya</label>

                        <input class="form-" type="input" name="spsi9" id="spsi9" value="">

                    </td>
                </tr>
            </tbody>
        </table>

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