<h5>RIWAYAT ORDER MAKAN </h5>
<div class="row">
    <div class="col-md-11">
        <form id="dynamic-form" class="formorderahligizi">

            <table id="tableahligizi" class="table tableahligizi table-sm text-sm table-bordered table-hover">
                <thead class="bg-info">

                    <th>Nomor RM</th>
                    <th hidden>kode kunjungan</th>
                    <th hidden>id</th>

                    <th>Nama Pasien</th>
                    <th>Waktu Makan</th>
                    <th>Bentuk Makanan</th>
                    <th>Menu DIET</th>
                    <th>Kamar & no Bed</th>
                    <th hidden>Ruangan</th>
                </thead>
                <tbody>
                    @foreach ($orderhariini as $pgi => $pg)
                    <tr>
                        <td class="norm">{{$pg->no_rm}}</td>
                        <td hidden class="kj">{{$pg->kode_kunjungan}}</td>
                        <td hidden class="id">{{$pg->id}}</td>


                        <td class="nama_px">{{$pg->nama_pasien}}</td>
                        <td class="waktumakan">{{$pg->waktu_makan}}</td>
                        <td class="bentuk">{{$pg->bentuk}}</td>
                        <td class="diet">

                            <select class="form-control  select2" name="diet" id="diet" placeholder="Cari opsi...">
                                <option>--- PILIH DIET MAKAN ---</option>

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

                            <input type="text" hidden name="kodetail" id="kodetail" value="{{$pg->id}}" class="lanjut form-control">
                            <input type="text" name="diet1" id="diet1" value="" class="lanjut form-control">

                        </td>
                        <td class="kamar">{{$pg->kamar}} / {{$pg->no_bed}}</td>
                        <td hidden class="kode_unit">{{$pg->kode_unit}}</td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </form>
        <div type="button" class="btn float-right btn-success simpanorderahligizi mt-3 mb-3 mr-3">
            SIMPAN
        </div>
    </div>


    <div class="col-md-5">
        <div class="detailpasienordergizi">

        </div>
    </div>
</div>


<script>
    $(function() {
        $("#tableahligizi").DataTable({
            "responsive": false
            , "lengthChange": false
            , "pageLength": 100
            , "autoWidth": false
            , "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $(".detailordergizi").click(function() {
        spinner = $('#loader2');
        spinner.show();
        var $row = $(this).closest("tr");
        var kj = $row.find(".kj").text();
        var norm = $row.find(".norm").text();
        var waktumakan = $row.find(".waktumakan").text();




        $.ajax({
            type: "post"
            , data: {
                _token: "{{ csrf_token() }}"
                , kj
                , norm
                , waktumakan
                , id


            }
            , url: " {{ route('detailordergizi') }}"
            , error: function(data) {
                spinner.hide();
                alert('error!!')
            }
            , success: function(response) {
                spinner.hide();
                $('.detailpasienordergizi').html(response);
            }
        });
    });

    $(".prosesorder").click(function() {
        var $row = $(this).closest("tr");
        var kj = $row.find(".kj").text();
        var norm = $row.find(".norm").text();
        var waktumakan = $row.find(".waktumakan").text();
        var id = $row.find(".id").text();

        Swal.fire({
            title: "Yakin Simpan Order?"
            , icon: 'warning'
            , showCancelButton: true
            , confirmButtonColor: '#3085d6'
            , confirmButtonText: 'Ya'
            , cancelButtonColor: '#d33'
            , cancelButtonText: "Batal"

        }).then(result => {
            //jika klik ya maka arahkan ke proses.php
            if (result.isConfirmed) {
                $.ajax({
                    async: true
                    , type: 'post'
                    , dataType: 'json'
                    , data: {
                        _token: "{{ csrf_token() }}"
                        , kj
                        , norm
                        , id
                        , waktumakan


                    }
                    , url: '<?= route('prosesorder') ?>',   

                    error: function(data) {
                        Swal.fire({
                            icon: 'error'
                            , title: 'Oops...'
                            , text: 'Sepertinya ada masalah ...'
                            , footer: ''
                        })
                    }
                    , success: function(data) {
                        console.log(data)
                        if (data.kode == 500) {
                            Swal.fire({
                                icon: 'error'
                                , title: 'Oops...'
                                , text: data.message
                                , footer: ''
                            })
                        } else {
                            Swal.fire({
                                icon: 'success'
                                , title: 'OK'
                                , text: 'data berhasil disimpan'
                                , footer: ''
                            })


                        }
                    }
                });
            }
        })
        return false;
    });
    $(".antarorder").click(function() {
        var $row = $(this).closest("tr");
        var kj = $row.find(".kj").text();
        var norm = $row.find(".norm").text();
        var waktumakan = $row.find(".waktumakan").text();
        var id = $row.find(".id").text();

        Swal.fire({
            title: "Yakin Antar Order?"
            , icon: 'warning'
            , showCancelButton: true
            , confirmButtonColor: '#3085d6'
            , confirmButtonText: 'Ya'
            , cancelButtonColor: '#d33'
            , cancelButtonText: "Batal"

        }).then(result => {
            //jika klik ya maka arahkan ke proses.php
            if (result.isConfirmed) {
                $.ajax({
                    async: true
                    , type: 'post'
                    , dataType: 'json'
                    , data: {
                        _token: "{{ csrf_token() }}"
                        , kj
                        , norm
                        , id
                        , waktumakan


                    }
                    , url: '<?= route('antarorder') ?>',

                    error: function(data) {
                        Swal.fire({
                            icon: 'error'
                            , title: 'Oops...'
                            , text: 'Sepertinya ada masalah ...'
                            , footer: ''
                        })
                    }
                    , success: function(data) {
                        console.log(data)
                        if (data.kode == 500) {
                            Swal.fire({
                                icon: 'error'
                                , title: 'Oops...'
                                , text: data.message
                                , footer: ''
                            })
                        } else {
                            Swal.fire({
                                icon: 'success'
                                , title: 'OK'
                                , text: 'data berhasil disimpan'
                                , footer: ''
                            })


                        }
                    }
                });
            }
        })
        return false;
    });
    $(".selesaiorder").click(function() {
        var $row = $(this).closest("tr");
        var kj = $row.find(".kj").text();
        var norm = $row.find(".norm").text();
        var waktumakan = $row.find(".waktumakan").text();
        var id = $row.find(".id").text();

        Swal.fire({
            title: "Yakin Selesai Order?"
            , icon: 'warning'
            , showCancelButton: true
            , confirmButtonColor: '#3085d6'
            , confirmButtonText: 'Ya'
            , cancelButtonColor: '#d33'
            , cancelButtonText: "Batal"

        }).then(result => {
            //jika klik ya maka arahkan ke proses.php
            if (result.isConfirmed) {
                $.ajax({
                    async: true
                    , type: 'post'
                    , dataType: 'json'
                    , data: {
                        _token: "{{ csrf_token() }}"
                        , kj
                        , norm
                        , id
                        , waktumakan


                    }
                    , url: '<?= route('selesaiorder') ?>',

                    error: function(data) {
                        Swal.fire({
                            icon: 'error'
                            , title: 'Oops...'
                            , text: 'Sepertinya ada masalah ...'
                            , footer: ''
                        })
                    }
                    , success: function(data) {
                        console.log(data)
                        if (data.kode == 500) {
                            Swal.fire({
                                icon: 'error'
                                , title: 'Oops...'
                                , text: data.message
                                , footer: ''
                            })
                        } else {
                            Swal.fire({
                                icon: 'success'
                                , title: 'OK'
                                , text: 'data berhasil disimpan'
                                , footer: ''
                            })


                        }
                    }
                });
            }
        })
        return false;
    });

    $(".simpanorderahligizi").click(function() {
        // var data = $('.formtindakandokter').serializeArray();
        var formorderahligizi = $('.formorderahligizi').serializeArray();

        Swal.fire({
            title: "Yakin Simpan Order?"
            , icon: 'warning'
            , showCancelButton: true
            , confirmButtonColor: '#3085d6'
            , confirmButtonText: 'Ya'
            , cancelButtonColor: '#d33'
            , cancelButtonText: "Batal"

        }).then(result => {
            //jika klik ya maka arahkan ke proses.php
            if (result.isConfirmed) {
                $.ajax({
                    async: true
                    , type: 'post'
                    , dataType: 'json'
                    , data: {
                        _token: "{{ csrf_token() }}",
                        // data: JSON.stringify(data),
                        formorderahligizi: JSON.stringify(formorderahligizi),


                    }
                    , url: '<?= route('simpanorderahligizi') ?>',

                    error: function(data) {
                        Swal.fire({
                            icon: 'error'
                            , title: 'Oops...'
                            , text: 'Sepertinya ada masalah ...'
                            , footer: ''
                        })
                    }
                    , success: function(data) {
                        console.log(data)
                        if (data.kode == 500) {
                            Swal.fire({
                                icon: 'error'
                                , title: 'Oops...'
                                , text: data.message
                                , footer: ''
                            })
                        } else {
                            Swal.fire({
                                icon: 'success'
                                , title: 'OK'
                                , text: 'data berhasil disimpan'
                                , footer: ''
                            })


                        }
                    }
                });
            }
        })
        return false;
    });

</script>
