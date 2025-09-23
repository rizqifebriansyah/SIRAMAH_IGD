<div class="row mt-3">
    <div class="col-md-12">
        <h5>TINDAKAN POLI</h5>
        <table class="table table-bordered" id="tabletindakan">
            <thead>
                <th>Dokter</th>
                <th>KARCIS UMUM</th>
                <th>KARCIS PG, KAI, RSUD WALED</th>
                <th>KARCIS SKTM</th>
                <th>KARCIS BPJS</th>
                <th>KARCIS JR</th>
                <th>JUMLAH KARCIS</th>
                <th>Total Karcis</th>
                <th>Konsul Umum</th>
                <th>Konsul PG, KAI, RSUD WALED</th>
                <th>Konsul SKTM</th>
                <th>Konsul BPJS</th>
                <th>Konsul JR</th>
                <th>Jumlah Konsul</th>
                <th>Total Konsul</th>
                <th>Tindakan Umum</th>
                <th>Tindakan PG, KAI, RSUD WALED</th>
                <th>Tindakan SKTM</th>
                <th>Tindakan BPJS</th>
                <th>Tindakan JR</th>
                <th>Total Tindakan</th>
            </thead>
            <tbody>
                @foreach($tindakanpoli as $p => $tp)
                <tr>
                    <td>{{$tp ->NAMA_PARAMEDIS}}</td>

                    <td>{{$tp -> karcis_umum}}</td>
                    <td>{{$tp -> karcis_kai}}</td>
                    <td>{{$tp ->karcis_sktm}}</td>
                    <td>{{$tp ->karcis_bpjs}}</td>
                    <td>{{$tp ->karcis_jr}}</td>
                    <td>{{$tp ->TOTAL_KARCIS_KUNJUNGAN}}</td>
                    <td>{{$tp ->TOTAL_KARCIS}}</td>
                    <td>{{$tp ->konsul_umum}}</td>
                    <td>{{$tp ->konsul_kai}}</td>
                    <td>{{$tp ->konsul_sktm}}</td>
                    <td>{{$tp ->konsul_bpjs}}</td>
                    <td>{{$tp ->konsul_jr}}</td>
                    <td>{{$tp ->TOTAL_KONSUL_KUNJUNGAN}}</td>
                    <td>{{$tp ->TOTAL_KONSUL}}</td>
                    <td>{{$tp ->tindakan_umum}}</td>
                    <td>{{$tp ->tindakan_kai}}</td>
                    <td>{{$tp ->tindakan_sktm}}</td>
                    <td>{{$tp ->tindakan_bpjs}}</td>

                    <td>{{$tp ->tindakan_jr}}</td>
                    <td>{{$tp ->GRANDTOTAL}}</td>


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-12">
        <h5>SENSUS KARCIS POLI</h5>
        <table class="table table-bordered" id="tablesensus">
            <thead>
                <th>NAMA Dokter</th>
                <th>Total</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th>13</th>
                <th>14</th>
                <th>15</th>
                <th>16</th>
                <th>17</th>
                <th>18</th>
                <th>19</th>
                <th>20</th>
                <th>21</th>
                <th>22</th>
                <th>23</th>
                <th>24</th>
                <th>25</th>
                <th>26</th>
                <th>27</th>
                <th>28</th>
                <th>29</th>
                <th>30</th>
                <th>31</th>
                <th>Tarif</th>


            </thead>
            <tbody>
                @foreach($sensus as $ss => $s)
                <tr>

                    <td>{{$s->DOKTER}}</td>
                    <td>{{$s->TOTAL}}</td>
                    <td>{{$s->TGL01}}</td>
                    <td>{{$s->TGL02}}</td>
                    <td>{{$s->TGL03}}</td>
                    <td>{{$s->TGL04}}</td>
                    <td>{{$s->TGL05}}</td>
                    <td>{{$s->TGL06}}</td>
                    <td>{{$s->TGL07}}</td>
                    <td>{{$s->TGL08}}</td>
                    <td>{{$s->TGL09}}</td>
                    <td>{{$s->TGL10}}</td>
                    <td>{{$s->TGL11}}</td>
                    <td>{{$s->TGL12}}</td>
                    <td>{{$s->TGL13}}</td>
                    <td>{{$s->TGL14}}</td>
                    <td>{{$s->TGL15}}</td>
                    <td>{{$s->TGL16}}</td>
                    <td>{{$s->TGL17}}</td>
                    <td>{{$s->TGL18}}</td>
                    <td>{{$s->TGL19}}</td>
                    <td>{{$s->TGL20}}</td>
                    <td>{{$s->TGL21}}</td>
                    <td>{{$s->TGL22}}</td>
                    <td>{{$s->TGL23}}</td>
                    <td>{{$s->TGL24}}</td>
                    <td>{{$s->TGL25}}</td>
                    <td>{{$s->TGL26}}</td>
                    <td>{{$s->TGL27}}</td>
                    <td>{{$s->TGL28}}</td>
                    <td>{{$s->TGL29}}</td>
                    <td>{{$s->TGL30}}</td>
                    <td>{{$s->TGL31}}</td>
                    <td>{{$s->TARIF}}</td>

                </tr>


                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-12">
        <h5>SENSUS ANTAR POLI</h5>
        <table class="table table-bordered" id="tablesensuspoli">
            <thead>
                <th>NAMA Dokter</th>
                <th>Total</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th>13</th>
                <th>14</th>
                <th>15</th>
                <th>16</th>
                <th>17</th>
                <th>18</th>
                <th>19</th>
                <th>20</th>
                <th>21</th>
                <th>22</th>
                <th>23</th>
                <th>24</th>
                <th>25</th>
                <th>26</th>
                <th>27</th>
                <th>28</th>
                <th>29</th>
                <th>30</th>
                <th>31</th>


            </thead>
            <tbody>
                @foreach($sensuspoli as $s => $sp)
                <tr>
                    <td>{{$sp->DOKTER}}</td>
                    <td>{{$sp->TOTAL}}</td>
                    <td>{{$sp->TGL01}}</td>
                    <td>{{$sp->TGL02}}</td>
                    <td>{{$sp->TGL03}}</td>
                    <td>{{$sp->TGL04}}</td>
                    <td>{{$sp->TGL05}}</td>
                    <td>{{$sp->TGL06}}</td>
                    <td>{{$sp->TGL07}}</td>
                    <td>{{$sp->TGL08}}</td>
                    <td>{{$sp->TGL09}}</td>
                    <td>{{$sp->TGL10}}</td>
                    <td>{{$sp->TGL11}}</td>
                    <td>{{$sp->TGL12}}</td>
                    <td>{{$sp->TGL13}}</td>
                    <td>{{$sp->TGL14}}</td>
                    <td>{{$sp->TGL15}}</td>
                    <td>{{$sp->TGL16}}</td>
                    <td>{{$sp->TGL17}}</td>
                    <td>{{$sp->TGL18}}</td>
                    <td>{{$sp->TGL19}}</td>
                    <td>{{$sp->TGL20}}</td>
                    <td>{{$sp->TGL21}}</td>
                    <td>{{$sp->TGL22}}</td>
                    <td>{{$sp->TGL23}}</td>
                    <td>{{$sp->TGL24}}</td>
                    <td>{{$sp->TGL25}}</td>
                    <td>{{$sp->TGL26}}</td>
                    <td>{{$sp->TGL27}}</td>
                    <td>{{$sp->TGL28}}</td>
                    <td>{{$sp->TGL29}}</td>
                    <td>{{$sp->TGL30}}</td>
                    <td>{{$sp->TGL31}}</td>

                </tr>


                @endforeach
            </tbody>
        </table>
    </div>
</div>


<script>
    $(function() {
        $("#tabletindakan").DataTable({
            "sortable": true,
            "responsive": true,
            "lengthChange": false,
            "pageLength": 15,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#tabletindakan_wrapper .col-md-6:eq(0)');
        $('#tablelist').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

    $(function() {
        $("#tablesensus").DataTable({
            "sortable": true,
            "responsive": true,
            "lengthChange": false,
            "pageLength": 15,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#tablesensus_wrapper .col-md-6:eq(0)');
        $('#tablelist').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    $(function() {
        $("#tablesensuspoli").DataTable({
            "sortable": true,
            "responsive": true,
            "lengthChange": false,
            "pageLength": 15,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#tablesensuspoli_wrapper .col-md-6:eq(0)');
        $('#tablelist').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });


    // $(function() {
    //     $("#tablesensus").DataTable({
    //         "responsive": true,
    //         "lengthChange": true,
    //         "pageLength": 10,
    //         "autoWidth": true,
    //         "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    //     });
    // });
</script>