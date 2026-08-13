<h5 class="text-bold">FORM ASESMEN KHUSUS RESIKO BUNUH DIRI</h5>

@if ($assesbnh != NULL)
<table class="table">
    <thead class="bg-warning">
        <th class="text-bold float-center">Faktor Kunci</th>
        <th class="text-bold float-center">Skala</th>
        <th class="text-bold float-center">Indikator</th>
        <th class="text-bold float-center">SKOR</th>
    </thead>
    <tbody>
        <tr>
            <td colspan="3" class="text-bold center">1. KOMITMEN UNTUK KESELAMATAN </td>
        </tr>
        <tr>
            <td> Resiko Tinggi</td>
            <td>2 </td>
            <td>Menolak membuat komitmen/tidak mampu membuat komitmen karena ketidakmampuan menilai (halusinasi, delsi, dimensia, delirium, disosiasi)</td>
            <td>
                <div class="form-group">
                    <input type="text" name="kj" id="kj" value="{{ $kj }}" hidden >
                    <input type="text" name="norm" id="norm" value="{{ $norm }}" hidden >
                    <input type="number" name="kuk_value_1" id="kuk_value_1" class="form-control" min="0" value="{{ $assesbnh[0]->kuk_value_1 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Resiko Sedang</td>
            <td>1 </td>
            <td>Mampu membuat komitmen tapi ragu-ragu dalam membuatnya</td>
            <td>
                <div class="form-group">
                    <input type="number" name="kuk_value_2" id="kuk_value_2" class="form-control" min="0" value="{{ $assesbnh[0]->kuk_value_2 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Tidak Ada Resiko</td>
            <td>0 </td>
            <td>Mampu membuat komitmen untuk keselamatan dengan jelas</td>
            <td>
                <div class="form-group">
                    <input type="number" name="kuk_value_3" id="kuk_value_3" class="form-control" min="0" value="{{ $assesbnh[0]->kuk_value_3 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td colspan="3" class="text-bold center">2. RENCANA BUNUH DIRI </td>
        </tr>
        <tr>
            <td> Resiko Tinggi</td>
            <td>2 </td>
            <td>Merencanakan secara aktual ide bunuh diri dan sudah mengungkapkan metode/cara bunuh diri</td>
            <td>
                <div class="form-group">
                    <input type="number" name="rbd_value_1" id="rbd_value_1" class="form-control" min="0" value="{{ $assesbnh[0]->rbd_value_1 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Resiko Sedang</td>
            <td>1 </td>
            <td>Merencakan secara aktual ide bunuh diri tapi belum ada cara bunuh diri</td>
            <td>
                <div class="form-group">
                    <input type="number" name="rbd_value_2" id="rbd_value_2" class="form-control" min="0" value="{{ $assesbnh[0]->rbd_value_2 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Tidak Ada Resiko</td>
            <td>0 </td>
            <td>Tidak ada rencana</td>
            <td>
                <div class="form-group">
                    <input type="number" name="rbd_value_3" id="rbd_value_3" class="form-control" min="0" value="{{ $assesbnh[0]->rbd_value_3 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td colspan="3" class="text-bold center">3. RENCANA YANG MEMATIKAN (TOTALITAS RENCANA) </td>
        </tr>
        <tr>
            <td> Resiko Tinggi</td>
            <td>2 </td>
            <td>Letalitas rencana yang tinggi (dengan senapan, gantung diri, melompat tebing, dan korban dioksida)</td>
            <td>
                <div class="form-group">
                    <input type="number" name="rym_value_1" id="rym_value_1" class="form-control" min="0" value="{{ $assesbnh[0]->rym_value_1 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Resiko Sedang</td>
            <td>1 </td>
            <td>Letalitas rencana yang sedand (dengan pil tidur, overdosis, aspirin, barbiturat)</td>
            <td>
                <div class="form-group">
                    <input type="number" name="rym_value_2" id="rym_value_2" class="form-control" min="0" value="{{ $assesbnh[0]->rym_value_2 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Tidak Ada Resiko</td>
            <td>0 </td>
            <td>Letalitas rencana yang rendah (menggarukan kuku ke kulit membenturkan kepala ke pintu, mengancam dengan benda tajam, memutup kepala dengan bantal)</td>
            <td>
                <div class="form-group">
                    <input type="number" name="rym_value_3" id="rym_value_3" class="form-control" min="0" value="{{ $assesbnh[0]->rym_value_3 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td colspan="3" class="text-bold center">4. RIWAYAT PERCOBAAN BUNUH DIRI (TIDAK DIBATASI WAKTU) </td>
        </tr>
        <tr>
            <td> Resiko Tinggi</td>
            <td>2 </td>
            <td>Riwayat percobaan dengan letalitas tinggi</td>
            <td>
                <div class="form-group">
                    <input type="number" name="rpbd_value_1" id="rpbd_value_1" class="form-control" min="0" value="{{ $assesbnh[0]->rpbd_value_1 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Resiko Sedang</td>
            <td>1 </td>
            <td>Riwayat percobaan dengan letalitas sedang</td>
            <td>
                <div class="form-group">
                    <input type="number" name="rpbd_value_2" id="rpbd_value_2" class="form-control" min="0" value="{{ $assesbnh[0]->rpbd_value_2 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Tidak Ada Resiko</td>
            <td>0 </td>
            <td>Tidak ada riwayat percobaan</td>
            <td>
                <div class="form-group">
                    <input type="number" name="rpbd_value_3" id="rpbd_value_3" class="form-control" min="0" value="{{ $assesbnh[0]->rpbd_value_3 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td colspan="3" class="text-bold center">5. IDE BUNUH DIRI </td>
        </tr>
        <tr>
            <td> Resiko Tinggi</td>
            <td>2 </td>
            <td>Pikiran bunuh diri terus-menerus</td>
            <td>
                <div class="form-group">
                    <input type="number" name="ibd_value_1" id="ibd_value_1" class="form-control" min="0" value="{{ $assesbnh[0]->ibd_value_1 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Resiko Sedang</td>
            <td>1 </td>
            <td>Pikiran bunuh diri sesekali atau singkat</td>
            <td>
                <div class="form-group">
                    <input type="number" name="ibd_value_2" id="ibd_value_2" class="form-control" min="0" value="{{ $assesbnh[0]->ibd_value_2 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Tidak Ada Resiko</td>
            <td>0 </td>
            <td>Tidak pikiran bunuh diri</td>
            <td>
                <div class="form-group">
                    <input type="number" name="ibd_value_3" id="ibd_value_3" class="form-control" min="0" value="{{ $assesbnh[0]->ibd_value_3 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td colspan="3" class="text-bold center">6. GEJALA (a. Putus Asa; b. Tidak Berdaya; c. Anhedonia; Rasa bersalah/Malu; e.Kemarahan; f. Implusivitas) </td>
        </tr>
        <tr>
            <td> Resiko Tinggi</td>
            <td>2 </td>
            <td>Terdapat 5-6 gejala</td>
            <td>
                <div class="form-group">
                    <input type="number" name="gjl_value_1" id="gjl_value_1" class="form-control" min="0" value="{{ $assesbnh[0]->gjl_value_1 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Resiko Sedang</td>
            <td>1 </td>
            <td>Terdapat 3-4 gejala</td>
            <td>
                <div class="form-group">
                    <input type="number" name="gjl_value_2" id="gjl_value_2" class="form-control" min="0" value="{{ $assesbnh[0]->gjl_value_2 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Tidak Ada Resiko</td>
            <td>0 </td>
            <td>Terapat 0-2 gejala</td>
            <td>
                <div class="form-group">
                    <input type="number" name="gjl_value_3" id="gjl_value_3" class="form-control" min="0" value="{{ $assesbnh[0]->gjl_value_3 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td colspan="3" class="text-bold center">7. PIKIRAN KEMATIAN SAAT INI (Berfantasi yang berlebihan, Selalu berbicara tentang kematian) </td>
        </tr>
        <tr>
            <td> Resiko Tinggi</td>
            <td>2 </td>
            <td>Terus - menerus</td>
            <td>
                <div class="form-group">
                    <input type="number" name="pksi_value_1" id="pksi_value_1" class="form-control" min="0" value="{{ $assesbnh[0]->pksi_value_1 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Resiko Sedang</td>
            <td>1 </td>
            <td>Sering</td>
            <td>
                <div class="form-group">
                    <input type="number" name="pksi_value_2" id="pksi_value_2" class="form-control" min="0" value="{{ $assesbnh[0]->pksi_value_2 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Tidak Ada Resiko</td>
            <td>0 </td>
            <td>jarang</td>
            <td>
                <div class="form-group">
                    <input type="number" name="pksi_value_3" id="pksi_value_3" class="form-control" min="0" value="{{ $assesbnh[0]->pksi_value_3 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td colspan="3" class="text-bold center">8. PENILAIAN PEMERIKSAAN TERHADAP VALIDASI JAWABAN PASIEN </td>
        </tr>
        <tr>
            <td> Resiko Tinggi</td>
            <td>2 </td>
            <td>Jawaban tidak dapat dipercaya tetapi beberapa syarat menunjukan perilaku risiko bunuh diri ditermukan</td>
            <td>
                <div class="form-group">
                    <input type="number" name="pptv_value_1" id="pptv_value_1" class="form-control" min="0" value="{{ $assesbnh[0]->pptv_value_1 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Resiko Sedang</td>
            <td>1 </td>
            <td>Jawaban atas pertanyaan pasien bisa dipercaya, terdapat sedikitnya isyaratnya risiko bunuh diri</td>
            <td>
                <div class="form-group">
                    <input type="number" name="pptv_value_2" id="pptv_value_2" class="form-control" min="0" value="{{ $assesbnh[0]->pptv_value_2 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Tidak Ada Resiko</td>
            <td>0 </td>
            <td>Jawaban pasien dapat dipercaya</td>
            <td>
                <div class="form-group">
                    <input type="number" name="pptv_value_3" id="pptv_value_3" class="form-control" min="0" value="{{ $assesbnh[0]->pptv_value_3 }}" required />
                </div>
            </td>

        </tr>
        <tr>
            <td></td>
            <td> </td>
            <td>Total score</td>
            <td>
                <div class="form-group">
                    <input readonly type="number" name="totalbunuhdiri" id="totalbunuhdiri" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
    </tbody>

</table>

<div type="button" class="btn float-right btn-success updateassesbunuhdiri mt-3 mb-3 mr-3">
    UPDATE
</div>
@else
<table class="table">
    <thead class="bg-warning">
        <th class="text-bold float-center">Faktor Kunci</th>
        <th class="text-bold float-center">Skala</th>
        <th class="text-bold float-center">Indikator</th>
        <th class="text-bold float-center">SKOR</th>
    </thead>
    <tbody>
        <tr>
            <td colspan="3" class="text-bold center">1. KOMITMEN UNTUK KESELAMATAN </td>
        </tr>
        <tr>
            <td> Resiko Tinggi</td>
            <td>2 </td>
            <td>Menolak membuat komitmen/tidak mampu membuat komitmen karena ketidakmampuan menilai (halusinasi, delsi, dimensia, delirium, disosiasi)</td>
            <td>
                <div class="form-group">
                    <input type="text" name="kj" id="kj" value="{{ $kj }}" hidden>
                    <input type="text" name="norm" id="norm" value="{{ $norm }}" hidden>
                    <input type="number" name="kuk_value_1" id="kuk_value_1" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Resiko Sedang</td>
            <td>1 </td>
            <td>Mampu membuat komitmen tapi ragu-ragu dalam membuatnya</td>
            <td>
                <div class="form-group">
                    <input type="number" name="kuk_value_2" id="kuk_value_2" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Tidak Ada Resiko</td>
            <td>0 </td>
            <td>Mampu membuat komitmen untuk keselamatan dengan jelas</td>
            <td>
                <div class="form-group">
                    <input type="number" name="kuk_value_3" id="kuk_value_3" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td colspan="3" class="text-bold center">2. RENCANA BUNUH DIRI </td>
        </tr>
        <tr>
            <td> Resiko Tinggi</td>
            <td>2 </td>
            <td>Merencanakan secara aktual ide bunuh diri dan sudah mengungkapkan metode/cara bunuh diri</td>
            <td>
                <div class="form-group">
                    <input type="number" name="rbd_value_1" id="rbd_value_1" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Resiko Sedang</td>
            <td>1 </td>
            <td>Merencakan secara aktual ide bunuh diri tapi belum ada cara bunuh diri</td>
            <td>
                <div class="form-group">
                    <input type="number" name="rbd_value_2" id="rbd_value_2" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Tidak Ada Resiko</td>
            <td>0 </td>
            <td>Tidak ada rencana</td>
            <td>
                <div class="form-group">
                    <input type="number" name="rbd_value_3" id="rbd_value_3" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td colspan="3" class="text-bold center">3. RENCANA YANG MEMATIKAN (TOTALITAS RENCANA) </td>
        </tr>
        <tr>
            <td> Resiko Tinggi</td>
            <td>2 </td>
            <td>Letalitas rencana yang tinggi (dengan senapan, gantung diri, melompat tebing, dan korban dioksida)</td>
            <td>
                <div class="form-group">
                    <input type="number" name="rym_value_1" id="rym_value_1" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Resiko Sedang</td>
            <td>1 </td>
            <td>Letalitas rencana yang sedand (dengan pil tidur, overdosis, aspirin, barbiturat)</td>
            <td>
                <div class="form-group">
                    <input type="number" name="rym_value_2" id="rym_value_2" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Tidak Ada Resiko</td>
            <td>0 </td>
            <td>Letalitas rencana yang rendah (menggarukan kuku ke kulit membenturkan kepala ke pintu, mengancam dengan benda tajam, memutup kepala dengan bantal)</td>
            <td>
                <div class="form-group">
                    <input type="number" name="rym_value_3" id="rym_value_3" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td colspan="3" class="text-bold center">4. RIWAYAT PERCOBAAN BUNUH DIRI (TIDAK DIBATASI WAKTU) </td>
        </tr>
        <tr>
            <td> Resiko Tinggi</td>
            <td>2 </td>
            <td>Riwayat percobaan dengan letalitas tinggi</td>
            <td>
                <div class="form-group">
                    <input type="number" name="rpbd_value_1" id="rpbd_value_1" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Resiko Sedang</td>
            <td>1 </td>
            <td>Riwayat percobaan dengan letalitas sedang</td>
            <td>
                <div class="form-group">
                    <input type="number" name="rpbd_value_2" id="rpbd_value_2" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Tidak Ada Resiko</td>
            <td>0 </td>
            <td>Tidak ada riwayat percobaan</td>
            <td>
                <div class="form-group">
                    <input type="number" name="rpbd_value_3" id="rpbd_value_3" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td colspan="3" class="text-bold center">5. IDE BUNUH DIRI </td>
        </tr>
        <tr>
            <td> Resiko Tinggi</td>
            <td>2 </td>
            <td>Pikiran bunuh diri terus-menerus</td>
            <td>
                <div class="form-group">
                    <input type="number" name="ibd_value_1" id="ibd_value_1" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Resiko Sedang</td>
            <td>1 </td>
            <td>Pikiran bunuh diri sesekali atau singkat</td>
            <td>
                <div class="form-group">
                    <input type="number" name="ibd_value_2" id="ibd_value_2" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Tidak Ada Resiko</td>
            <td>0 </td>
            <td>Tidak pikiran bunuh diri</td>
            <td>
                <div class="form-group">
                    <input type="number" name="ibd_value_3" id="ibd_value_3" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td colspan="3" class="text-bold center">6. GEJALA (a. Putus Asa; b. Tidak Berdaya; c. Anhedonia; Rasa bersalah/Malu; e.Kemarahan; f. Implusivitas) </td>
        </tr>
        <tr>
            <td> Resiko Tinggi</td>
            <td>2 </td>
            <td>Terdapat 5-6 gejala</td>
            <td>
                <div class="form-group">
                    <input type="number" name="gjl_value_1" id="gjl_value_1" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Resiko Sedang</td>
            <td>1 </td>
            <td>Terdapat 3-4 gejala</td>
            <td>
                <div class="form-group">
                    <input type="number" name="gjl_value_2" id="gjl_value_2" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Tidak Ada Resiko</td>
            <td>0 </td>
            <td>Terapat 0-2 gejala</td>
            <td>
                <div class="form-group">
                    <input type="number" name="gjl_value_3" id="gjl_value_3" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td colspan="3" class="text-bold center">7. PIKIRAN KEMATIAN SAAT INI (Berfantasi yang berlebihan, Selalu berbicara tentang kematian) </td>
        </tr>
        <tr>
            <td> Resiko Tinggi</td>
            <td>2 </td>
            <td>Terus - menerus</td>
            <td>
                <div class="form-group">
                    <input type="number" name="pksi_value_1" id="pksi_value_1" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Resiko Sedang</td>
            <td>1 </td>
            <td>Sering</td>
            <td>
                <div class="form-group">
                    <input type="number" name="pksi_value_2" id="pksi_value_2" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Tidak Ada Resiko</td>
            <td>0 </td>
            <td>jarang</td>
            <td>
                <div class="form-group">
                    <input type="number" name="pksi_value_3" id="pksi_value_3" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td colspan="3" class="text-bold center">8. PENILAIAN PEMERIKSAAN TERHADAP VALIDASI JAWABAN PASIEN </td>
        </tr>
        <tr>
            <td> Resiko Tinggi</td>
            <td>2 </td>
            <td>Jawaban tidak dapat dipercaya tetapi beberapa syarat menunjukan perilaku risiko bunuh diri ditermukan</td>
            <td>
                <div class="form-group">
                    <input type="number" name="pptv_value_1" id="pptv_value_1" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Resiko Sedang</td>
            <td>1 </td>
            <td>Jawaban atas pertanyaan pasien bisa dipercaya, terdapat sedikitnya isyaratnya risiko bunuh diri</td>
            <td>
                <div class="form-group">
                    <input type="number" name="pptv_value_2" id="pptv_value_2" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td>Tidak Ada Resiko</td>
            <td>0 </td>
            <td>Jawaban pasien dapat dipercaya</td>
            <td>
                <div class="form-group">
                    <input type="number" name="pptv_value_3" id="pptv_value_3" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
        <tr>
            <td></td>
            <td> </td>
            <td>Total score</td>
            <td>
                <div class="form-group">
                    <input readonly type="number" name="totalbunuhdiri" id="totalbunuhdiri" class="form-control" min="0" value="" required />
                </div>
            </td>

        </tr>
    </tbody>

</table>

<div type="button" class="btn float-right btn-success simpanassesbunuhdiri mt-3 mb-3 mr-3">
    SIMPAN
</div>

@endif


<script>
    $(function() {
        $('#kuk_value_1,#kuk_value_2,#kuk_value_3, #rbd_value_1,#rbd_value_2,#rbd_value_3,#rym_value_1,#rym_value_2,#rym_value_3,#rpbd_value_1,#rpbd_value_2,#rpbd_value_3,#ibd_value_1, #ibd_value_2,#ibd_value_3, #gjl_value_1,#gjl_value_2,#gjl_value_3,#pksi_value_1,#pksi_value_2,#pksi_value_3,#pptv_value_1,#pptv_value_2,#pptv_value_3 ').keyup(function() {
            var kuk_value_1 = parseFloat($('#kuk_value_1').val()) || 0;
            var kuk_value_2 = parseFloat($('#kuk_value_2').val()) || 0;
            var kuk_value_3 = parseFloat($('#kuk_value_3').val()) || 0;
            var rbd_value_1 = parseFloat($('#rbd_value_1').val()) || 0;
            var rbd_value_2 = parseFloat($('#rbd_value_2').val()) || 0;
            var rbd_value_3 = parseFloat($('#rbd_value_3').val()) || 0;
            var rym_value_1 = parseFloat($('#rym_value_1').val()) || 0;
            var rym_value_2 = parseFloat($('#rym_value_2').val()) || 0;
            var rym_value_3 = parseFloat($('#rym_value_3').val()) || 0;
            var rpbd_value_1 = parseFloat($('#rpbd_value_1').val()) || 0;
            var rpbd_value_2 = parseFloat($('#rpbd_value_2').val()) || 0;
            var rpbd_value_3 = parseFloat($('#rpbd_value_3').val()) || 0;
            var ibd_value_1 = parseFloat($('#ibd_value_1').val()) || 0;
            var ibd_value_2 = parseFloat($('#ibd_value_2').val()) || 0;
            var ibd_value_3 = parseFloat($('#ibd_value_3').val()) || 0;
            var gjl_value_1 = parseFloat($('#gjl_value_1').val()) || 0;
            var gjl_value_2 = parseFloat($('#gjl_value_2').val()) || 0;
            var gjl_value_3 = parseFloat($('#gjl_value_3').val()) || 0;
            var pksi_value_1 = parseFloat($('#pksi_value_1').val()) || 0;
            var pksi_value_2 = parseFloat($('#pksi_value_2').val()) || 0;
            var pksi_value_3 = parseFloat($('#pksi_value_3').val()) || 0;
            var pptv_value_1 = parseFloat($('#pptv_value_1').val()) || 0;
            var pptv_value_2 = parseFloat($('#pptv_value_2').val()) || 0;
            var pptv_value_3 = parseFloat($('#pptv_value_3').val()) || 0;

            $('#totalbunuhdiri').val(kuk_value_1 + kuk_value_2 + kuk_value_3 + rbd_value_1 + rbd_value_2 + rbd_value_3 + rym_value_1 + rym_value_2 + rym_value_3 + rpbd_value_1 + rpbd_value_2 + rpbd_value_3 + ibd_value_1 + ibd_value_2 + ibd_value_3 + gjl_value_1 + gjl_value_2 + gjl_value_3 + pksi_value_1 + pksi_value_2 + pksi_value_3 + pptv_value_1 + pptv_value_2 + pptv_value_3);
        });
    });

    $(".simpanassesbunuhdiri").click(function() {
        var norm = $('#norm').val()
        var kj = $('#kj').val()
        var kuk_value_1 = $('#kuk_value_1').val();
        var kuk_value_2 = $('#kuk_value_2').val();
        var kuk_value_3 = $('#kuk_value_3').val();
        var rbd_value_1 = $('#rbd_value_1').val();
        var rbd_value_2 = $('#rbd_value_2').val();
        var rbd_value_3 = $('#rbd_value_3').val();
        var rym_value_1 = $('#rym_value_1').val();
        var rym_value_2 = $('#rym_value_2').val();
        var rym_value_3 = $('#rym_value_3').val();
        var rpbd_value_1 = $('#rpbd_value_1').val();
        var rpbd_value_2 = $('#rpbd_value_2').val();
        var rpbd_value_3 = $('#rpbd_value_3').val();
        var ibd_value_1 = $('#ibd_value_1').val();
        var ibd_value_2 = $('#ibd_value_2').val();
        var ibd_value_3 = $('#ibd_value_3').val();
        var gjl_value_1 = $('#gjl_value_1').val();
        var gjl_value_2 = $('#gjl_value_2').val();
        var gjl_value_3 = $('#gjl_value_3').val();
        var pksi_value_1 = $('#pksi_value_1').val();
        var pksi_value_2 = $('#pksi_value_2').val();
        var pksi_value_3 = $('#pksi_value_3').val();
        var pptv_value_1 = $('#pptv_value_1').val();
        var pptv_value_2 = $('#pptv_value_2').val();
        var pptv_value_3 = $('#pptv_value_3').val();
        var totalbunuhdiri = $('#totalbunuhdiri').val();



        // var sumberdata = $("#sumberdata:checked").val();
        Swal.fire({
            title: "Yakin Simpan Assesmen Bunuh?",
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
                        norm: $('#norm').val(),
                        kj: $('#kj').val(),
                        kuk_value_1: $('#kuk_value_1').val(),
                        kuk_value_2: $('#kuk_value_2').val(),
                        kuk_value_3: $('#kuk_value_3').val(),
                        rbd_value_1: $('#rbd_value_1').val(),
                        rbd_value_2: $('#rbd_value_2').val(),
                        rbd_value_3: $('#rbd_value_3').val(),
                        rym_value_1: $('#rym_value_1').val(),
                        rym_value_2: $('#rym_value_2').val(),
                        rym_value_3: $('#rym_value_3').val(),
                        rpbd_value_1: $('#rpbd_value_1').val(),
                        rpbd_value_2: $('#rpbd_value_2').val(),
                        rpbd_value_3: $('#rpbd_value_3').val(),
                        ibd_value_1: $('#ibd_value_1').val(),
                        ibd_value_2: $('#ibd_value_2').val(),
                        ibd_value_3: $('#ibd_value_3').val(),
                        gjl_value_1: $('#gjl_value_1').val(),
                        gjl_value_2: $('#gjl_value_2').val(),
                        gjl_value_3: $('#gjl_value_3').val(),
                        pksi_value_1: $('#pksi_value_1').val(),
                        pksi_value_2: $('#pksi_value_2').val(),
                        pksi_value_3: $('#pksi_value_3').val(),
                        pptv_value_1: $('#pptv_value_1').val(),
                        pptv_value_2: $('#pptv_value_2').val(),
                        pptv_value_3: $('#pptv_value_3').val(),
                        totalbunuhdiri: $('#totalbunuhdiri').val()

                    },
                    url: '<?= route('simpanassesbunuhdiri') ?>',

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

                            formassesbunuhdiri();

                        }
                    }
                });
            }
        })
        return false;
    });

    
    $(".updateassesbunuhdiri").click(function() {
        var norm = $('#norm').val()
        var kj = $('#kj').val()
        var kuk_value_1 = $('#kuk_value_1').val();
        var kuk_value_2 = $('#kuk_value_2').val();
        var kuk_value_3 = $('#kuk_value_3').val();
        var rbd_value_1 = $('#rbd_value_1').val();
        var rbd_value_2 = $('#rbd_value_2').val();
        var rbd_value_3 = $('#rbd_value_3').val();
        var rym_value_1 = $('#rym_value_1').val();
        var rym_value_2 = $('#rym_value_2').val();
        var rym_value_3 = $('#rym_value_3').val();
        var rpbd_value_1 = $('#rpbd_value_1').val();
        var rpbd_value_2 = $('#rpbd_value_2').val();
        var rpbd_value_3 = $('#rpbd_value_3').val();
        var ibd_value_1 = $('#ibd_value_1').val();
        var ibd_value_2 = $('#ibd_value_2').val();
        var ibd_value_3 = $('#ibd_value_3').val();
        var gjl_value_1 = $('#gjl_value_1').val();
        var gjl_value_2 = $('#gjl_value_2').val();
        var gjl_value_3 = $('#gjl_value_3').val();
        var pksi_value_1 = $('#pksi_value_1').val();
        var pksi_value_2 = $('#pksi_value_2').val();
        var pksi_value_3 = $('#pksi_value_3').val();
        var pptv_value_1 = $('#pptv_value_1').val();
        var pptv_value_2 = $('#pptv_value_2').val();
        var pptv_value_3 = $('#pptv_value_3').val();
        var totalbunuhdiri = $('#totalbunuhdiri').val();



        // var sumberdata = $("#sumberdata:checked").val();
        Swal.fire({
            title: "Yakin Update Assesmen Bunuh?",
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
                        norm: $('#norm').val(),
                        kj: $('#kj').val(),
                        kuk_value_1: $('#kuk_value_1').val(),
                        kuk_value_2: $('#kuk_value_2').val(),
                        kuk_value_3: $('#kuk_value_3').val(),
                        rbd_value_1: $('#rbd_value_1').val(),
                        rbd_value_2: $('#rbd_value_2').val(),
                        rbd_value_3: $('#rbd_value_3').val(),
                        rym_value_1: $('#rym_value_1').val(),
                        rym_value_2: $('#rym_value_2').val(),
                        rym_value_3: $('#rym_value_3').val(),
                        rpbd_value_1: $('#rpbd_value_1').val(),
                        rpbd_value_2: $('#rpbd_value_2').val(),
                        rpbd_value_3: $('#rpbd_value_3').val(),
                        ibd_value_1: $('#ibd_value_1').val(),
                        ibd_value_2: $('#ibd_value_2').val(),
                        ibd_value_3: $('#ibd_value_3').val(),
                        gjl_value_1: $('#gjl_value_1').val(),
                        gjl_value_2: $('#gjl_value_2').val(),
                        gjl_value_3: $('#gjl_value_3').val(),
                        pksi_value_1: $('#pksi_value_1').val(),
                        pksi_value_2: $('#pksi_value_2').val(),
                        pksi_value_3: $('#pksi_value_3').val(),
                        pptv_value_1: $('#pptv_value_1').val(),
                        pptv_value_2: $('#pptv_value_2').val(),
                        pptv_value_3: $('#pptv_value_3').val(),
                        totalbunuhdiri: $('#totalbunuhdiri').val()

                    },
                    url: '<?= route('updateassesbunuhdiri') ?>',

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

                            formassesbunuhdiri();

                        }
                    }
                });
            }
        })
        return false;
    })
    function formassesbunuhdiri() {
        spinner = $('#loader2');
        spinner.show();
        kj = $('#kj').val()
        norm = $('#norm').val()
       
        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",
                norm,
                kj
            },
            type: "post",
            url: " {{ route('assemenbunuhdiri') }}",
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.formermdokter').html(response);


            }
        });
    }
</script>