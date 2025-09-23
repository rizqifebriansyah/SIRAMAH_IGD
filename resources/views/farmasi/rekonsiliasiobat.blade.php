<div class="card card-danger mt-5">
    <div class="card-header">
        <h3 class="card-title">Rekonsiliasi Obat</h3>
    </div>
    <div class="card-body">
        <div class="tablerekon">
            @if ($riwayatobat == null)
            <h1>Belum Ada Inputan Obat</h1>
            @else
            <table id="tableobatrekon" class="table">
                <thead>
                    <th>Nama Obat</th>
                    <th>Aturan Pakai</th>
                    <th>Lanjut</th>
                    <th>Action</th>

                </thead>
                <tbody>
                    @foreach ($riwayatobat as $ri => $r)
                    <tr>
                        <td class="nama_obat">{{$r->nama_obat}}</td>
                        <td class="aturan_pakai">{{$r->aturan_pakai}}</td>
                        <td>{{$r->lanjut}}</td>
                        <td>
                            <button class="badge badge-danger hapusrekonobat" id="hapusrekonobat"> Hapus </button>

                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            @endif
        </div>
        <div class="row">

            <div class="col-6">
                <label for="">Norm</label>
                <input type="text" class="form-control" id="norm" name="norm" value="{{$norm}}" placeholder=".col-3">
                <input hidden type="text" class="form-control" id="kj" name="kj" value="{{$kj}}" placeholder=".col-3">

            </div>
            <div class="col-6">
                <label for="">Nama Pasien</label>

                <input type="text" class="form-control" value="{{$namapx}}" placeholder=".col-4">
            </div>

        </div>
        <form id="dynamic-form" class="formrekon">
            <div class="field_wrapperrr">
                <div class="row mt-2">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="name">Obat:</label>
                            <input type="text" name="obatan" id="obatan" value="" class="obat form-control">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="name">Aturan Pakai :</label>
                            <input type="text" name="aturan" id="aturan" value="" class="pakai form-control">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="name">Lanjut :</label>
                            <input type="text" name="lanjutan" id="lanjutan" value="" class="lanjut form-control">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <a class="btn btn-success" href="javascript:void(0);" id="add_button" title="Add field">TAMBAH</a>
                    </div>
                </div>
                <!-- <div id="form-container">
                <div class="row mt-2">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="name">Obat:</label>
                            <input type="text" name="obatan" id="obatan" value="" class="obat form-control">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="name">Aturan Pakai :</label>
                            <input type="text" name="aturan" id="aturan" value="" class="pakai form-control">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="name">Lanjut :</label>
                            <input type="text" name="lanjutan" id="lanjutan" value="" class="lanjut form-control">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <i class="bi bi-x-square remove form-group col-md-2 text-danger"></i>
                        </div>
                    </div>
                </div>

            </div> -->
            </div>
        </form>

    </div>
    <button type="button" class="btn btn-warning mb-2 simpanrekonsiliasi" id="simpanrekonsiliasi">Simpan Obat</button>

</div>


<script>
    $(function() {
        $("#tableobatrekon").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 10,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    // $(document).ready(function() {
    //     // Menambahkan field baru
    //     $("#add").click(function() {
    //         var html = '<div class="row mt-2">';
    //         html += '<div class="col-3">';
    //         html += '<div class="form-group">';
    //         html += '<label for="name">Obat:</label>';
    //         html += '<input type="text" name="obatan" id="obatan" value="" class="obat form-control">';
    //         html += '</div>';
    //         html += '</div>';
    //         html += '<div class="col-3">';
    //         html += '<div class="form-group">';
    //         html += '<label for="name">Aturan Pakai :</label>';
    //         html += '<input type="text" name="aturan" id="aturan" value="" class="pakai form-control">';
    //         html += '</div>';
    //         html += '</div>';
    //         html += '<div class="col-3">';
    //         html += '<div class="form-group">';
    //         html += '<label for="name">Lanjut :</label>';
    //         html += '<input type="text" name="lanjutan" id="lanjutan" value="" class="form-control">';
    //         html += '</div>';
    //         html += '</div>';
    //         html += '<div class="col-3">';
    //         html += '<div class="form-group">';
    //         html += '<i class="bi bi-x-square remove form-group col-md-2 text-danger"></i>';
    //         html += '</div>';
    //         html += '</div>';
    //         html += '</div>';

    //         $("#form-container").append(html);
    //     });

    //     // Menghapus field
    //     $(document).on("click", ".remove", function(e) {
    //         e.preventDefault();
    //         $(this).parent().remove();
    //     });


    // });
    $(document).ready(function() {
        var maxField = 10; //Input fields increment limitation
        var addButton = $('#add_button'); //Add button selector
        var wrapper = $('.field_wrapperrr'); //Input field wrapper
        var fieldHTML = '<div class="row mt-2">';
        fieldHTML = fieldHTML + ' <div class="col-3"><div class="form-group"> <label for="name">Obat:</label><input type="text" name="obatan" id="obatan" value="" class="obat form-control"></div> </div>';
        fieldHTML = fieldHTML + '<div class="col-3"><div class="form-group"><label for="name">Aturan Pakai :</label><input type="text" name="aturan" id="aturan" value="" class="pakai form-control"></div> </div>';
        fieldHTML = fieldHTML + '  <div class="col-3"><div class="form-group"><label for="name">Lanjut :</label><input type="text" name="lanjutan" id="lanjutan" value="" class="lanjut form-control"> </div> </div>';
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
    $(".simpanrekonsiliasi").click(function() {
        var data = $('.formrekon').serializeArray();
        var kj = $('#kj').val();
        var norm = $('#norm').val()



        Swal.fire({
            title: "Yakin Simpan Rekonsiliasi?",
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
                        data: JSON.stringify(data),
                        kj: $('#kj').val(),
                        norm: $('#norm').val(),
                    },
                    url: '<?= route('simpanrekon') ?>',
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
                            riwayatobatrekon()


                        }
                    }
                });
            }
        })
        return false;
    });

    function riwayatobatrekon() {
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
            url: " {{ route('riwayatrekon') }}",
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.tablerekon').html(response);


            }
        });
    }
</script>