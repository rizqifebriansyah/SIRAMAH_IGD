<h5 class="bg-warning">{{$namatindakan}}</h5>
@foreach($paketdetail as $t)

<div class="input_fields_wrap">
    <div>
        <div class="form-row text-xs">
            <div class="form-group col-md-5">
                <label for="">Tindakan</label>
                <input readonly type="" class="form-control form-control-sm" id="" name="namatindakan" value="{{ $t->nama_tarif }}">
                <input hidden readonly type="" class="form-control form-control-sm" id="" name="kodelayanan" value="{{$t->kode_tarif_detail}}">
                <input hidden readonly type="" class="form-control form-control-sm" id="" name="jenis" value="">

            </div>
            <div class="form-group col-md-2">
                <label for="inputPassword4">Tarif</label>
                <input readonly type="" class="form-control form-control-sm" id="" name="tarif" value="{{ $t->harga }}">
            </div>
            <div class="form-group col-md-1">
                <label for="inputPassword4">Jumlah</label>
                <input type="" class="form-control form-control-sm" id="" name="qty" value="{{ $t->jml }}">
            </div>
            <div class="form-group col-md-1">
                <label for="inputPassword4">Disc</label>
                <input type="" class="form-control form-control-sm" id="" name="disc" value="0">
            </div>
            <div class="form-group col-md-1">
                <label for="inputPassword4">Cyto</label>
                <input type="" class="form-control form-control-sm" id="" name="cyto" value="0">
            </div>
            <i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i>
        </div>
        @endforeach
    </div>
    <button type="button" class="btn btn-warning mb-2 simpanorderlab" id="simpanorderlab">Simpan Tindakan</button>
</div>


<script>
    $('#tabeltindakan').on('click', '.pilihlayanan', function() {
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
        var x = 1; //initlal text box count
        kode = $(this).attr('kode')
        namatindakan = $(this).attr('namatindakan')
        tarif = $(this).attr('tarif')
        id = $(this).attr('id')
        jenis = $(this).attr('jenis')


        // e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append(
                '<div class="form-row text-xs"><div class="form-group col-md-5"><label for="">Tindakan</label><input readonly type="" class="form-control form-control-sm" id="" name="namatindakan" value="' +
                namatindakan +
                '"><input hidden readonly type="" class="form-control form-control-sm" id="" name="kodelayanan" value="' +
                kode +
                '"><input hidden  readonly type="" class="form-control form-control-sm" id="" name="jenis" value="' +
                jenis +
                '"></div><div class="form-group col-md-2"><label for="inputPassword4">Tarif</label><input readonly type="" class="form-control form-control-sm" id="" name="tarif" value="' +
                tarif +
                '"></div><div class="form-group col-md-1"><label for="inputPassword4">Jumlah</label><input type="" class="form-control form-control-sm" id="" name="qty" value="1"></div><div class="form-group col-md-1"><label for="inputPassword4">Disc</label><input type="" class="form-control form-control-sm" id="" name="disc" value="0"></div><div class="form-group col-md-1"><label for="inputPassword4">Cyto</label><input type="" class="form-control form-control-sm" id="" name="cyto" value="0"></div><i class="bi bi-x-square remove_field form-group col-md-2 text-danger"></i></div>'
            );
            $(wrapper).on("click", ".remove_field", function(e) { //user click on remove 
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })
        }
    });
    $(".simpanorderlab").click(function() {
        var data = $('.formtindakan').serializeArray();
        var kodekunjungan = $('#kodekunjungan').val()
        var kodepenjamin = $('#kodepenjamin').val()
        var kodepenunjang = $('#namapenunjang').val()
        var dokter = $('#dokter').val()
        var diagnosa = $('#diagnosa').val()
        var kodeunit = $('#kodeunit').val()
        var kelasunit = $('#kelas_unit').val()
        var kelas = $('#kelas').val()
        var gt = $('#gt').val()
        var norm = $('#norm').val()
        var namaunit = $('#nama_unit').val()
        var lis = $('#lis').val()
        Swal.fire({
            title: "Yakin Simpan Layanan?",
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
                        data: JSON.stringify(data),
                        kodekunjungan: $('#kodekunjungan').val(),
                        kodepenunjang: $('#namapenunjang').val(),
                        dokter: $('#dokter').val(),
                        kodepenjamin: $('#kodepenjamin').val(),
                        diagnosa: $('#diagnosa').val(),
                        kodeunit: $('#kodeunit').val(),
                        gt: $('#gt').val(),
                        kelasunit: $('#kelasunit').val(),
                        norm: $('#norm').val(),
                        namaunit: $('#nama_unit').val(),
                        kelas: $('#kelas').val(),
                        lis: $('#lis').val()

                    },
                    url: '<?= route('simpanorderlab') ?>',
                    error: function(data) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.message,
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
                                text: data.message,
                                footer: ''
                            })
                            pdf(data.idhed, data.kode_header)
                            etiket(data.idhed, data.kode_header)
                            window.location.reload();

                        }
                    }
                });
            }
        })
        return false;
    });
</script>