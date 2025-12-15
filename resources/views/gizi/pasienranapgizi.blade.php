   <div class="row">
       <div class="col-md-12 mt-2 ">

           <table id="tableassesgizi" class="table table-sm text-sm table-bordered table-hover">
               <thead class="bg-warning">
                   <th>NORM</th>
                   <th>NAMA PASIEN</th>
                   <th>JK</th>
                   <th>Kamar / No_Bed</th>
                   <th>DPJP</th>
                   <th>ACTION</th>
                   <th hidden>Kode Kunjungan</th>
                   <th hidden>Kode UNIT</th>


               </thead>
               <tbody>
                   @foreach ($pasienranap as $p )
                   <tr>
                       <td class="norm">{{$p->no_rm}}</td>
                       <td class="namapx">{{$p->nama_px}}</td>
                       <td class="jk">{{$p->jenis_kelamin}}</td>
                       <td>{{$p->kamar}} / {{$p->no_bed}}</td>
                       <td class="dpjp">{{$p->dpjp}}</td>
                       <td class="" style="text-align: center;">
                           <button class="badge badge-success assesgizi"> Sudah Diisi </button>
                       </td>

                    <td class="kj" hidden>{{$p->kode_kunjungan}}</td>
                    <td class="unit" hidden>{{$p->kode_unit}}</td>




                   </tr>

                   @endforeach

               </tbody>
           </table>
       </div>

   </div>



   <script>
       // $(document).ready(function() {
       //     window.setTimeout(function() {
       //         datapasien()
       //     }, 600000);

       // });
       $(function() {
           $("#tableassesgizi").DataTable({
               "responsive": false
               , "lengthChange": false
               , "pageLength": 5
               , "autoWidth": false
               , "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
           });
       });

       $(".assesgizi").click(function() {
           spinner = $('#loader2');
           spinner.show();
           var $row = $(this).closest("tr");
           var norm = $row.find(".norm").text();
           var namapx = $row.find(".namapx").text();
           var jk = $row.find(".jk").text();
           var kj = $row.find(".kj").text();
           var unit = $row.find(".unit").text();

           $.ajax({
               type: "post"
               , data: {
                   _token: "{{ csrf_token() }}"
                   , norm
                   , namapx
                   , jk
                   , kj
                   , unit
               }
               , url: '<?= route('assesgizi') ?>'
               , error: function(data) {
                   spinner.hide();
                   alert('oke!!')
               }
               , success: function(response) {
                   spinner.hide();
                   $('.assesgiziview').html(response);

               }
           });
       });

   </script>
