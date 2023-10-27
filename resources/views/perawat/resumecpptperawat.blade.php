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
        @if ($resume == null)
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
                                    <td>: {{$resume[0]->subyektif}} </td>
                                </tr>
                                <tr>
                                    <td class="text-bold">OBJECT</td>
                                    <td>: {{$resume[0]->subyektif}}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold text-italic">ASSESMEN</td>
                                    <td>: {{$resume[0]->assesment}}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold text-italic">PLANNING</td>
                                    <td>: {{$resume[0]->planning}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        @endif
    </form>
</div>
