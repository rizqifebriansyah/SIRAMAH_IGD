                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-text-width"></i>
                            Detail Pasien Order Radiologi
                        </h3>
                    </div>
                    @if ($barang == null)
                    <h1>Belum ada Input Barang</h1>

                    <input type="text" hidden value="{{$layanan[0]->no_rm}}" class="form-control" name="norm" id="norm" />
                    <input type="text" hidden value="{{$layanan[0]->kode_kunjungan}}" class="form-control" name="kodekunjungan" id="kodekunjungan" />
                    <input type="text" hidden value="{{$layanan[0]->kode_layanan_header}}" class="form-control" name="kodeheader" id="kodeheader" />

                    <form action="" class="form_barang">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>QTY</td>
                                    <td><input type="text" value="" class="form-control" name="qtybrg[]" /></td>

                                    <td>
                                        <select class="form-control select2" name="barang[]" id="barang">
                                            <option value=""> -- Pilih FILM atau AMPLOP --</option>
                                            <option value="AGFA KECIL">AGFA KECIL
                                            </option>
                                            <option value="AGFA BESAR">AGFA BESAR
                                            </option>
                                            <option value="CARIESTEAM KECIL">CARIESTEAM KECIL
                                            </option>
                                            <option value="CARIESTEAM BESAR">CARIESTEAM BESAR
                                            </option>
                                            <option value="RONTGEN KECIL">RONTGEN KECIL
                                            </option>
                                            <option value="RONTGEN BESAR">RONTGEN BESAR
                                            </option>
                                            <option value="CT SCAN">CT SCAN
                                            </option>
                                            <option value="USG BESAR">USG BESAR
                                            </option>
                                            <option value="USG KECIL">USG KECIL
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="ml-3">
                            <button type="button" class="bg-success simpanorderabarang" id="simpanorderabarang">SIMPAN</button>

                            <button type="button" class="add">Add More</button>
                            <button type="button" class="del" onClick="delMore()">Delete</button>
                        </p>
                    </form>

                    @else
                    <input type="text" hidden value="{{$barang[0]->no_rm}}" class="form-control" name="norm" id="norm" />
                    <input type="text" hidden value="{{$barang[0]->kode_kunjungan}}" class="form-control" name="kodekunjungan" id="kodekunjungan" />
                    <input type="text" hidden value="{{$barang[0]->kode_layanan_header}}" class="form-control" name="kodeheader" id="kodeheader" />

                    <form action="" class="form_barang">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>QTY</td>
                                    <td><input type="text" value="" class="form-control" name="qtybrg[]" /></td>

                                    <td>
                                        <select class="form-control select2" name="barang[]" id="barang">
                                            <option value=""> -- Pilih FILM atau AMPLOP --</option>
                                            <option value="AGFA KECIL">AGFA KECIL
                                            </option>
                                            <option value="AGFA BESAR">AGFA BESAR
                                            </option>
                                            <option value="CARIESTEAM KECIL">CARIESTEAM KECIL
                                            </option>
                                            <option value="CARIESTEAM BESAR">CARIESTEAM BESAR
                                            </option>
                                            <option value="RONTGEN KECIL">RONTGEN KECIL
                                            </option>
                                            <option value="RONTGEN BESAR">RONTGEN BESAR
                                            </option>
                                            <option value="CT SCAN">CT SCAN
                                            </option>
                                            <option value="USG BESAR">USG BESAR
                                            </option>
                                            <option value="USG KECIL">USG KECIL
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="ml-3">
                            <button type="button" class="bg-success simpanorderabarang" id="simpanorderabarang">SIMPAN</button>

                            <button type="button" class="add">Add More</button>
                            <button type="button" class="del" onClick="delMore()">Delete</button>
                        </p>
                    </form>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-bold" colspan="2">Nama :</td>
                                    <td class="namapasien">{{$barang[0]->nama_pasien}}</td>
                                    <td></td>

                                </tr>
                                <tr>
                                    <td colspan="2" class="text-bold">Norm :</td>
                                    <td class="norm">{{$barang[0]->no_rm}}</td>
                                    <td hidden class="kodekunjungan">{{$barang[0]->kode_kunjungan}}</td>
                                </tr>
                                <tr>
                                    <td class="text-bold">Layanan</td>
                                    <td class="text-bold">QTY</td>
                                    <td class="text-bold">Retur</td>
                                    <td class="text-bold">action</td>
                                </tr>
                                <div class="tablebarang">
                                    @foreach($barang as $a => $b )
                                    <tr>
                                        <td>{{$b->Nama_barang}}</td>
                                        <td hidden class="kodeheader"> {{ $b->kode_layanan_header}}</td>
                                        <td hidden class="id"> {{ $b->id}}</td>
                                        <td class="qtyawal">{{$b->qty}}</td>
                                        <td class="qtyreturr">{{$b->qty_retur}}</td>

                                        <td><a class=" btn btn-secondary btn-sm returbarangrad" href="#">
                                                <i class="" aria-hidden="true">R</i>

                                            </a> </td>

                                    </tr>
                                    @endforeach

                                </div>

                            </tbody>
                        </table>
                        <label for="">Masukan QTY retur</label>
                        <input type="text" class="form-control" name="qtyretur" value="" id="qtyretur">
                        <input hidden type="text" class="form-control" name="kode_header" value="{{ $b->kode_layanan_header}}" id="kode_header">
                    </div>

                    @endif
                </div>

                <script>
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
                </script>