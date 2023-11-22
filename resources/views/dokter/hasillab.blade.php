   <!-- hasillab -->
   <div id="hasillab" class="modal">

       <!-- Modal content -->
       <div class="modal-content" style="margin-bottom: 30px">
           <span class="close float-right">&times;</span>
           @if ($cek == null)
               <h4>Tidak ada Hasil Laboratorium</h4>
           @else
               @foreach ($cek as $c)
                   <div class="card">
                       <div class="card-header"></div>
                       <div class="card-body">
                           <iframe src="//192.168.2.74/smartlab_waled/his/his_report?hisno={{ $c->kode_layanan_header }}"
                               width="1350px" height="650px"></iframe>
                       </div>
                   </div>
               @endforeach
           @endif
       </div>

   </div>

   <script>
       //hasil lab
       // Get the modal
       var modal = document.getElementById("hasillab");

       // Get the button that opens the modal
       var btn = document.getElementById("hasillabo");

       // Get the <span> element that closes the modal
       var span = document.getElementsByClassName("close")[0];

       // When the user clicks the button, open the modal
       btn.onclick = function() {
           modal.style.display = "block";
       }

       // When the user clicks on <span> (x), close the modal
       span.onclick = function() {
           modal.style.display = "none";
       }

       // When the user clicks anywhere outside of the modal, close it
       window.onclick = function(event) {
           if (event.target == modal) {
               modal.style.display = "none";
           }
       }
   </script>
