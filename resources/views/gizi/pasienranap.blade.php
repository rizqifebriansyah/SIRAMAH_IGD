   <div class="row">
       <div class="col-md-12 mt-2">

           <form id="dynamic-form" class="formordergizi">

               <div class="field_wrapperr">

                   <div class="form-group">
                       <div class="row">
                           <div class="col-md-3"><label for="">Nama Pasien</label>
                               <select class="form-control  select2" name="norm" id="norm" placeholder="Cari opsi...">
                                   @foreach ($pasienranap as $i => $p) <option value="{{ $p->no_rm }}">{{ $p->nama_px }} </option> @endforeach

                               </select>

                           </div>
                           <div class="col-md-3">
                               <label for="">Waktu Makan</label>
                               <select class="form-control  select2" name="waktumakan" id="waktumakan" placeholder="Cari opsi...">
                                   <option>--- PILIH WAKTU MAKAN ---</option>
                                   <option value="MAKAN PAGI">MAKAN PAGI</option>
                                   <option value="MAKAN SIANG">MAKAN SIANG</option>
                                   <option value="MAKAN MALAM">MAKAN MALAM</option>



                               </select>

                           </div>
                           <div class="col-md-3">
                               <label for="">MENU DIET</label>
                               <select class="form-control  select2" name="diet" id="diet" placeholder="Cari opsi...">
                                   <option>--- PILIH MENU DIET ---</option>
                                   <option value="Makanan Biasa">Makanan Biasa</option>
                                   <option value="Makanan Tim">Makanan Tim</option>
                                   <option value="Makanan Lunak">Makanan Lunak</option>
                                   <option value="Makanan Saring">Makanan Saring</option>
                                   <option value="Makanan Cair">Makanan Cair</option>
                                   <option value="Bubur Kecap">Bubur Kecap</option>
                                   <option value="Blenderize">Blenderize</option>
                                   <option value="PASI/ASI">PASI/ASI</option>
                                   <option value="F75">F75</option>
                                   <option value="F100">F100</option>
                                   <option value="Puasa">Puasa</option>
                                   <option value="DM">DM</option>
                                   <option value="DM RG">DM RG</option>
                                   <option value="DM RP">DM RP</option>
                                   <option value="DM RL">DM RL</option>
                                   <option value="DM RS">DM RS</option>
                                   <option value="DM TS">DM TS</option>
                                   <option value="DM TP">DM TP</option>
                                   <option value="DM DJ">DM DJ</option>
                                   <option value="DM Rpur">DM Rpur</option>
                                   <option value="DM RK">DM RK</option>
                                   <option value="DM TK">DM TK</option>
                                   <option value="DM DH">DM DH</option>
                                   <option value="RG">RG</option>
                                   <option value="RG RP">RG RP</option>
                                   <option value="RG RL">RG RL</option>
                                   <option value="RP RS">RP RS</option>
                                   <option value="RP TS">RP TS</option>
                                   <option value="RP RK">RP RK</option>
                                   <option value="RP Rpur">RP Rpur</option>
                                   <option value="DJ">DJ</option>
                                   <option value="DJ RP">DJ RP</option>
                                   <option value="DJ RS">DJ RS</option>
                                   <option value="DJ TS">DJ TS</option>
                                   <option value="DJ Rpur">DJ Rpur</option>
                                   <option value="DJ RK">DJ RK</option>
                                   <option value="DJ TK">DJ TK</option>
                                   <option value="DJ DH">DJ DH</option>
                                   <option value="DH">DH</option>
                                   <option value="DH RG">DH RG</option>
                                   <option value="DH TP">DH TP</option>
                                   <option value="DH RS">DH RS</option>
                                   <option value="DH TS">DH TS</option>
                                   <option value="DH RK">DH RK</option>
                                   <option value="DH TK">DH TK</option>
                                   <option value="DH Rpur">DH Rpur</option>
                                   <option value="RS">RS</option>
                                   <option value="TS">TS</option>
                                   <option value="TINGGI PROTEIN">TINGGI PROTEIN</option>
                                   <option value="TKTP">TKTP</option>
                                   <option value="TKTP RG">TKTP RG</option>
                                   <option value="TKTP RL">TKTP RL</option>
                                   <option value="TKTP RS">TKTP RS</option>
                                   <option value="TKTP TS">TKTP TS</option>
                                   <option value="TKTP DH">TKTP DH</option>
                                   <option value="TKTP Rpur">TKTP Rpur</option>
                                   <option value="TKTP RK">TKTP RK</option>
                                   <option value="TKTP TK">TKTP TK</option>
                               </select>
                               <label for="">LAIN</label>
                               <input type="text" hidden name="unit" id="unit" value="{{$unit}}" class="form-control">

                               <input type="text" name="diet1" id="diet1" class="form-control">

                           </div>

                           <div class="col-md-2">
                               <a class="btn btn-success" href="javascript:void(0);" id="add_button" title="Add field">TAMBAH</a>
                           </div>
                       </div>
                   </div>
               </div>
               <div type="button" class="btn float-right btn-success simpanordergizi mt-3 mb-3 mr-3">
                   SIMPAN
               </div>
           </form>
       </div>

   </div>



   <script>
       // $(document).ready(function() {
       //     window.setTimeout(function() {
       //         datapasien()
       //     }, 600000);

       // });
       $(document).ready(function() {
           var maxField = 10; //Input fields increment limitation
           var addButton = $('#add_button'); //Add button selector
           var wrapper = $('.field_wrapperr'); //Input field wrapper
           var fieldHTML = '<div class="form-group add"><div class="row">';
           fieldHTML = fieldHTML + '<div class="col-md-3"><label for="">Nama Pasien</label><select class="form-control  select2" name="norm" id="norm" placeholder="Cari opsi..."> @foreach ($pasienranap as $i => $p) <option value="{{ $p->no_rm }}">{{ $p->nama_px }} </option> @endforeach </select> </div>';
           fieldHTML = fieldHTML + '<div class="col-md-3"><label for="">Waktu Makan</label><select class="form-control  select2" name="waktumakan" id="waktumakan" placeholder="Cari opsi..."><option>--- PILIH WAKTU MAKAN ---</option><option value="MAKAN PAGI">MAKAN PAGI</option><option value="MAKAN SIANG">MAKAN SIANG</option><option value="MAKAN MALAM">MAKAN MALAM</option></select></div>';
           fieldHTML = fieldHTML + ' <div class="col-md-3"><label for="">MENU DIET</label> <select class="form-control  select2" name="diet" id="diet" placeholder="Cari opsi..."><option>--- PILIH MENU DIET ---</option> <option value="Makanan Biasa">Makanan Biasa</option> <option value="Makanan Tim">Makanan Tim</option> <option value="Makanan Lunak">Makanan Lunak</option> <option value="Makanan Saring">Makanan Saring</option> <option value="Makanan Cair">Makanan Cair</option> <option value="Bubur Kecap">Bubur Kecap</option> <option value="Blenderize">Blenderize</option> <option value="PASI/ASI">PASI/ASI</option> <option value="F75">F75</option> <option value="F100">F100</option> <option value="Puasa">Puasa</option> <option value="DM">DM</option> <option value="DM RG">DM RG</option> <option value="DM RP">DM RP</option> <option value="DM RL">DM RL</option> <option value="DM RS">DM RS</option> <option value="DM TS">DM TS</option> <option value="DM TP">DM TP</option> <option value="DM DJ">DM DJ</option> <option value="DM Rpur">DM Rpur</option> <option value="DM RK">DM RK</option> <option value="DM TK">DM TK</option> <option value="DM DH">DM DH</option> <option value="RG">RG</option> <option value="RG RP">RG RP</option> <option value="RG RL">RG RL</option> <option value="RP RS">RP RS</option> <option value="RP TS">RP TS</option> <option value="RP RK">RP RK</option> <option value="RP Rpur">RP Rpur</option> <option value="DJ">DJ</option> <option value="DJ RP">DJ RP</option> <option value="DJ RS">DJ RS</option> <option value="DJ TS">DJ TS</option> <option value="DJ Rpur">DJ Rpur</option> <option value="DJ RK">DJ RK</option> <option value="DJ TK">DJ TK</option> <option value="DJ DH">DJ DH</option> <option value="DH">DH</option> <option value="DH RG">DH RG</option> <option value="DH TP">DH TP</option> <option value="DH RS">DH RS</option> <option value="DH TS">DH TS</option> <option value="DH RK">DH RK</option> <option value="DH TK">DH TK</option> <option value="DH Rpur">DH Rpur</option> <option value="RS">RS</option> <option value="TS">TS</option> <option value="TINGGI PROTEIN">TINGGI PROTEIN</option> <option value="TKTP">TKTP</option> <option value="TKTP RG">TKTP RG</option> <option value="TKTP RL">TKTP RL</option> <option value="TKTP RS">TKTP RS</option> <option value="TKTP TS">TKTP TS</option> <option value="TKTP DH">TKTP DH</option> <option value="TKTP Rpur">TKTP Rpur</option> <option value="TKTP RK">TKTP RK</option> <option value="TKTP TK">TKTP TK</option></select><label for="">LAIN</label><input type="text" name="unit" id="unit" value="{{$unit}}" class="form-control"><input type="text" name="diet1" id="diet1" class="form-control"></div>';
           fieldHTML = fieldHTML + '<div class="col-md-2"><a href="javascript:void(0);" class="remove_button btn btn-danger">HAPUS</a></div>';
           fieldHTML = fieldHTML + '</div></div>';
           var x = 1; //Initial field counter is 1

           //Once add button is clicked
           $(addButton).click(function() {
               //Check maximum number of input fields
               if (x < maxField) {
                   x++; //Increment field counter
                   $(wrapper).append(fieldHTML); //Add field html
               }
           });

           //Once remove button is clicked
           $(wrapper).on('click', '.remove_button', function(e) {
               e.preventDefault();
               $(this).parent('').parent('').remove(); //Remove field html
               x--; //Decrement field counter
           });
       });

       $(".simpanordergizi").click(function() {
           // var data = $('.formtindakandokter').serializeArray();
           var formordergizi = $('.formordergizi').serializeArray();

           Swal.fire({
               title: "Yakin Simpan Order?",
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
                           // data: JSON.stringify(data),
                           formordergizi: JSON.stringify(formordergizi),


                       },
                       url: '<?= route('simpanordergizi') ?>',

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


                           }
                       }
                   });
               }
           })
           return false;
       });
   </script>