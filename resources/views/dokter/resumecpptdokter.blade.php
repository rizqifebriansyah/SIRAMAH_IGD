<style>
    .borderless table {
        border-top-style: none;
        border-left-style: none;
        border-right-style: none;
        border-bottom-style: none;
    }
</style>
<div class="card-header">
    <h3 class="card-title">Resume CPPT</h3>
</div>

<div class="card-body">
    <form>
        @if ($resumedok == null)
            <h1> belum ada CPPT</h1>
        @else
            <div class="mailbox-read-message">
                <p class="text-bold"></p>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table borderless">
                            <tbody>
                                <tr>
                                    <td class="text-bold text-italic">SUBJECT</td>
                                    <td>: {{$resumedok[0]->subyektif}} </td>
                                </tr>
                                <tr>
                                    <td class="text-bold">OBJECT</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-bold">Primary Survey</td>
                                    <td>: {{$resumedok[0]->primary_survey}}</td>
                                </tr>

                                <tr>
                                    <td class="text-bold">Secondary Survey</td>
                                    <td>: {{$resumedok[0]->secondary_survey}}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold text-italic">ASSESMEN</td>
                                    <td>: {{$resumedok[0]->assesment}}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold text-italic">PLANNING</td>
                                    <td>: {{$resumedok[0]->planning}}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold text-italic">30 Menit Pertama</td>
                                    <td>: {{$resumedok[0]->tiga_pertama}}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold text-italic">30 Menit Kedua</td>
                                    <td>: {{$resumedok[0]->tiga_kedua}}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold text-italic">Cara Pulang</td>
                                    <td>: {{$resumedok[0]->cara_pulang}}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold text-italic">Keadaan Pulang</td>
                                    <td>: {{$resumedok[0]->keadaan_pulang}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        @endif
    </form>
</div>
