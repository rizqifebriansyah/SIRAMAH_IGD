                <div class="card">
                    <div class="card-header bg-success">
                        <h3 class="card-title">
                            <i class="fas fa-text-width"></i>
                            Detail Pasien Order GIZI
                        </h3>
                    </div>

                </div>
                <input type="text" hidden value="{{$detail[0]->no_rm}}" class="form-control" name="norm" id="norm" />
                <input type="text" hidden value="{{$detail[0]->kode_kunjungan}}" class="form-control" name="kodekunjungan" id="kodekunjungan" />
                <input type="text" hidden value="{{$detail[0]->nama_pasien}}" class="form-control" name="namapasien" id="namapasien" />

                <form action="" class="form_barang">

                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    Nama Pasien
                                </td>
                                <td>
                                    NOMOR RM
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    {{$detail[0]->nama_pasien}}
                                </td>
                                <td>
                                    {{$detail[0]->no_rm}}
                                </td>

                            </tr>
                            @foreach ($detail as $de => $d)
                            <tr>
                                <td>{{$d->waktu_makan}}</td>

                                <td>
                                    <select class="form-control select2" name="barang[]" id="barang">
                                        <option value="{{$d->diit}}">{{$d->diit}}</option>
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
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <p class="ml-3">
                        <button type="button" class="bg-success float-right simpanorderabarang" id="simpanorderabarang">SIMPAN</button>
                        <button type="button" class="bg-danger simpanorderabarang" id="simpanorderabarang">Batal Order</button>

                    </p>
                </form>
                <!-- <script>
                        $("button.add").click(function() {
                            $(this).siblings("button").show("fast");
                            $(this).parent().prev("table").find("tbody").append('<tr><td>QTY</td><td><input value="" type ="text" class ="form-control" name="qtybrg[]"/></td><td><select class ="form-control select2" name="barang[]" id ="barang"><option value =""> --Pilih FILM atau AMPLOP-- </option> <option value = "AGFA KECIL" > AGFA KECIL</option> <option value = "AGFA BESAR" > AGFA BESAR</option><option value = "CARIESTEAM KECIL" > CARIESTEAM KECIL </option> <option value = "CARIESTEAM BESAR" > CARIESTEAM BESAR</option>  <option value="RONTGEN KECIL">RONTGEN KECIL</option><option value="RONTGEN BESAR">RONTGEN BESAR</option><option value="CT SCAN">CT SCAN</option><option value="USG BESAR">USG BESAR</option><option value="USG KECIL">USG KECIL</option></select> </td><tr>');
                        });

                        $("button.del").click(function() {
                            var table = $(this).parent().prev("table");
                            var rowCount = table.find("tr").length;
                            table.find("tr:last").remove();
                            if (rowCount <= 2) {
                                $(this).hide("fast");
                            }

                        });
                        $(".simpanorderabarang").click(function() {
                            var barang = $('.form_barang').serializeArray();
                            norm = $('#norm').val()
                            kodekunjungan = $('#kodekunjungan').val()
                            kodeheader = $('#kodeheader').val()

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
                                            barang: JSON.stringify(barang),
                                            norm,
                                            kodekunjungan,
                                            kodeheader
                                            
                                        },
                                        url: '<?= route('simpanorderbarang') ?>',
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
                        $(".returbarangrad").click(function() {
                            var $row = $(this).closest("tr");
                            var kodeheader = $row.find(".kodeheader").text();
                            var qtyawal = $row.find(".qtyawal").text();
                            var qtyreturr = $row.find(".qtyreturr").text();
                            var id = $row.find(".id").text();
                            qtyretur = $('#qtyretur').val()

                            Swal.fire({
                                title: "Yakin RETUR Barang?",
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

                                            kodeheader,
                                            id,
                                            qtyreturr,
                                            qtyawal,
                                            qtyretur,



                                        },
                                        url: '<?= route('returbarangrad') ?>',
                                        error: function(data) {
                                            spinner.hide()
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Ooops....',
                                                text: 'Sepertinya ada masalah......',
                                                footer: ''
                                            })
                                        },
                                        success: function(data) {
                                            spinner.hide()
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'OK',
                                                text: data.message,
                                                footer: ''
                                            })
                                            ambildatabarang()
                                        }
                                    });
                                }
                            })
                            return false;
                        });

                        function ambildatabarang() {
                            spinner = $('#loader2');
                            spinner.show();

                            kodeheader = $('#kode_header').val()

                            $.ajax({
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    kodeheader,

                                },
                                type: "post",
                                url: " {{ route('ambildatabarang')}}",
                                error: function(data) {
                                    spinner.hide();
                                    alert('oke!!')
                                },
                                success: function(response) {
                                    spinner.hide();
                                    $('.tablebarang').html(response);
                                }
                            });
                        }
                    </script> -->