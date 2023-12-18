<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">Upload Dokumen IGD</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3"><a class=" btn btn-info btn-block " id="uploadekg">
                    <i class="bi bi-journal-text"></i>
                    Hasil EKG
                </a></div>
            <div class="col-md-3"><a class=" btn btn-info btn-block " id="uploadspp">
                    <i class="bi bi-journal-text"></i>
                    Surat Penolakan Perawatan
                </a></div>
            <div class="col-md-3"><a class=" btn btn-info btn-block " id="uploadtindakandokter">
                    <i class="bi bi-journal-text"></i>
                    Pemberian Informasi Tindakan DOkter
                </a></div>
            <div class="col-md-3"><a class=" btn btn-info btn-block " id="hasilpa">
                    <i class="bi bi-journal-text"></i>
                    Catatan Transfer Pasien
                </a></div>
        </div>
        <!-- formekg -->
        <div id="formekg" class="modal">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">
                <span class="close float-right">&times;</span>
                <h1>masuk</h1>
            </div>

        </div>

        <!-- formekg -->
        <div id="formspp" class="modall">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">
                <span class="closee float-right">&times;</span>
                <h1>masukgan</h1>
            </div>

        </div>

        <!-- formtindakan -->
        <div id="formtindakan" class="modalll">

            <!-- Modal content -->
            <div class="modal-content" style="margin-bottom: 30px">
                <span class="closeee float-right">&times;</span>
                <h1>masukganaas</h1>
            </div>

        </div>
    </div>
</div>



<script>
    //form ekg
    // Get the modal
    var modal = document.getElementById("formekg");

    // Get the button that opens the modal
    var btn = document.getElementById("uploadekg");

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

    //form spp
    // Get the modal
    var modall = document.getElementById("formspp");

    // Get the button that opens the modal
    var btn = document.getElementById("uploadspp");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closee")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modall.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modall.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modall.style.display = "none";
        }
    }

     //form tindakan
    // Get the modal
    var modalll = document.getElementById("formtindakan");

    // Get the button that opens the modal
    var btn = document.getElementById("uploadtindakandokter");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closeee")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modalll.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modalll.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modalll.style.display = "none";
        }
    }
</script>