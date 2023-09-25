<style>
    .borderless table {
        border-top-style: none;
        border-left-style: none;
        border-right-style: none;
        border-bottom-style: none;
    }
</style>
<div class="card-header">
    <h3 class="card-title">Resume Triase</h3>
</div>

<div class="card-body">
    <form>
        @if ($resume == NULL)

        <h1> belum ada triase</h1>
        @else
        <div class="mailbox-read-message">
            <p class="text-bold">{{$resume[0]->nama_pasien}}</p>
            <div class="row">
                <div class="col-md-3">
                    <table class="table borderless">
                        <tbody>
                            <tr>
                                <td class="text-bold text-italic">Primary Survey</td>
                                <td>: {{$resume[0]->primary_survey}}</td>
                            </tr>
                            <tr>
                                <td class="text-bold">Pemeriksaan Fisik</td>
                                <td>: {{$resume[0]->pemeriksaan_fisik}}</td>
                            </tr>
                            <tr>
                                <td class="text-bold text-italic">Riwayat Penyakit</td>
                                <td>: {{$resume[0]->riwayat_pasien}}</td>
                            </tr>
                            <tr>
                                <td class="text-bold text-italic">Kategori Triase</td>
                                <td>: {{$resume[0]->kategori_triase}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-8" style="margin-left: 20px;">
                    <table class="table borderless">
                        <tbody>
                            <tr>
                                <td class="text-bold text-italic">Pemeriksaan</td>
                                <td>: {{$resume[0]->pemeriksaan_triase}}</td>
                            </tr>
                       
                            <tr>
                                <td class="text-bold text-italic">Kesadaran</td>
                                <td>: {{$resume[0]->kesadaran}}</td>
                            </tr>
                            <tr>
                                <td class="text-bold text-italic">Jalan Nafas</td>
                                <td>: {{$resume[0]->jalan_nafas}}</td>
                            </tr>
                            <tr>
                                <td class="text-bold text-italic">Pernafan</td>
                                <td>: {{$resume[0]->pernafasan}}</td>
                            </tr>
                            <tr>
                                <td class="text-bold text-italic">Sirkulasi</td>
                                <td>: {{$resume[0]->sirkulasi}}</td>
                            </tr>
                            <tr>
                                <td class="text-bold text-italic">Gejala Spesifik</td>
                                <td>: {{$resume[0]->gejala_spesifik}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
    </form>
</div>