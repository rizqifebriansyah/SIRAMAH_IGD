<div class="card">
    <div class="card-header">
        <h3 class="card-title">Maximizable Card Example</h3>
        <div class="card-tools">
            <!-- Maximize Button -->
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        @foreach ($cek as $c)
        <!-- <iframe src="http://192.168.10.17/ZFP?mode=proxy&lights=on&titlebar=on#View&ris_exam_id={{ $c->acc_number }}&un=radiologi&pw=YnanEegSoQr0lxvKr59DTyTO44qTbzbn9koNCrajqCRwHCVhfQAddGf%2f4PNjqOaV" width="1100px" height="1000px"></iframe> -->
            <iframe src ="http://192.168.10.17/ZFP?mode=proxy&lights=on&titlebar=on#View&ris_pat_id={{ $c->no_rm }}&un=radiologi&pw=YnanEegSoQr0lxvKr59DTyTO44qTbzbn9koNCrajqCRwHCVhfQAddGf%2f4PNjqOaV" width="100%" height="600px"></iframe>

            <!-- <iframe src ="https://192.168.2.233/expertise/cetak0.php?IDs={{ $c->id_header}}&IDd={{ $c->id_detail }}&tgl_cetak={{ $c->tanggalnya }}" width="1000px" height="600px"></iframe>
    -->

        @endforeach
    </div>
    <!-- /.card-body -->
</div>
