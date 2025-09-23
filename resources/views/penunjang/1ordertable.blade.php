@if ($unit == 3003)

<table id="datapasienorder" class="table  table-sm text-sm table-bordered table-hover">
    <thead class="bg-success">
        <th hidden>no</th>
        <th>Kode Layanan Order</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>

        <th>Tanggal Masuk</th>
        <th>Nomor RM</th>
        <th>Nama</th>
        <th>Nama Layanan</th>

        <th>Total</th>
        <th>Acc Number</th>
        <th>Dokter Hasil</th>
        <th>action</th>
    </thead>
    <tbody>
        @foreach ($pasienorder as $i=>$key)
        <tr index="{{$i}}" idhed=" {{$key->IDHED}}" kode_header="{{$key->KODE_LAYANAN_HEADER}}" class="pasienterpilih toastsDefaultSuccess" no_rm="{{ $key->NO_RM }}" nama="{{ $key->NAMA_PX }}" kodepenjamin="{{ $key -> KODE_PENJAMIN }}" tgl_order="{{ $key-> tgl_INPUT }}" kodekunjungan="{{ $key->KJ}}" counter="{{$key->COUNTER}}" namatarif="{{$key->NAMA_TARIF}}" qty="{{$key->QTY}}" gt="{{$key->grantotal_layanan}}" statuspembayaran="{{$key->status_pembayaran}}" alamat="{{$key->ALAMAT}}" iddet="{{$key->IDDET}}" accnumber="{{$key->ACC_NUMBER}}" idlayanandetail="{{$key->id_layanan_detail}}">
            <td class="kodeheader"> {{ $key->KODE_LAYANAN_HEADER}}</td>
            <td hidden class="idhed">{{$key->IDHED}}</td>
            <td hidden class="kodepenjamin">{{ $key->KODE_PENJAMIN }}</td>
            <td hidden class="kodekunjungan">{{ $key->KJ}}</td>
            <td hidden class="counter">{{ $key->COUNTER}}</td>
            <td hidden class="qty">{{ $key->QTY}}</td>
            <td hidden class="statuspembayaran">{{ $key->status_pembayaran}}</td>
            <td hidden class="alamat">{{ $key->ALAMAT}}</td>
            <td hidden class="iddet">{{ $key->IDDET}}</td>
            <td hidden class="accnumber">{{ $key->ACC_NUMBER}}</td>
            <td hidden class="totallayanan">{{ $key->total_layanan}}</td>

            <td hidden class="idlayanandetail">{{ $key->id_layanan_detail}}</td>
            <td hidden>{{ $i}}</td>
            <td class="tgl_input">{{ $key-> tgl_INPUT }}</td>
            <td class="norm">{{ $key-> NO_RM }}</td>
            <td class="namapx"> {{ $key->NAMA_PX}} </td>
            <td class="namatarif"> {{ $key->NAMA_TARIF}} </td>
            <td class="gt"> {{ $key->grantotal_layanan}} </td>
            <td class="acc"> {{ $key->ACC_NUMBER}} </td>
            <td class="dokhasil"> {{ $key->DOKTER_HASIL}} </td>
            <td class="center">


                @if ($key->DOKTER_HASIL >0)


                @else
                <a class=" btn btn-secondary btn-sm returorderrad" href="#">
                    <i class="fas fa-sync-alt fa-spin"></i>
                    RETUR
                </a> <br>
                @endif


                <a class=" btn btn-danger btn-sm printlabelrad" href="#">
                    <i class="" aria-hidden="true">L</i>

                </a>
                |
                <a class=" btn btn-warning btn-sm printnotarad" href="#">
                    <i class="" aria-hidden="true">N</i>

                </a>
                |
                <a class=" btn btn-success btn-sm printorderrad" href="#">
                    <i class="" aria-hidden="true">All</i>

                </a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@elseif ($unit == 5001)
<table id="datapasienorder" class="table datapasienorder table-sm text-sm table-bordered table-hover">
    <thead class="bg-success">
        <th hidden>no</th>
        <th>Kode Layanan Order</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th>Tanggal Masuk</th>
        <th>Nomor RM</th>
        <th>Nama</th>
        <th>Nama Layanan</th>

        <th>Total</th>

        <th>action</th>
    </thead>
    <tbody>
        @foreach ($pasienorderlab as $i=>$key)
        <tr index="{{$i}}" idhed=" {{$key->IDHED}}" kode_header="{{$key->KODE_LAYANAN_HEADER}}" class="pasienterpilih toastsDefaultSuccess" no_rm="{{ $key->NO_RM }}" nama="{{ $key->NAMA_PX }}" kodepenjamin="{{ $key -> KODE_PENJAMIN }}" tgl_order="{{ $key-> tgl_INPUT }}" kodekunjungan="{{ $key->KJ}}" counter="{{$key->COUNTER}}" namatarif="{{$key->NAMA_TARIF}}" qty="{{$key->QTY}}" gt="{{$key->grantotal_layanan}}" statuspembayaran="{{$key->status_pembayaran}}" alamat="{{$key->ALAMAT}}" iddet="{{$key->IDDET}}" accnumber="{{$key->ACC_NUMBER}}" idlayanandetail="{{$key->id_layanan_detail}}">
            <td class="kodeheader"> {{ $key->KODE_LAYANAN_HEADER}}</td>
            <td hidden class="idhed">{{$key->IDHED}}</td>
            <td hidden class="kodepenjamin">{{ $key->KODE_PENJAMIN }}</td>
            <td hidden class="kodekunjungan">{{ $key->KJ}}</td>
            <td hidden class="counter">{{ $key->COUNTER}}</td>
            <td hidden class="qty">{{ $key->QTY}}</td>
            <td hidden class="statuspembayaran">{{ $key->status_pembayaran}}</td>
            <td hidden class="alamat">{{ $key->ALAMAT}}</td>
            <td hidden class="iddet">{{ $key->IDDET}}</td>
            <td hidden class="accnumber">{{ $key->ACC_NUMBER}}</td>
            <td hidden class="idlayanandetail">{{ $key->id_layanan_detail}}</td>
            <td hidden>{{ $i}}</td>
            <td class="tgl_input">{{ $key-> tgl_INPUT }}</td>
            <td class="norm">{{ $key-> NO_RM }}</td>
            <td class="namapx"> {{ $key->NAMA_PX}} </td>
            <td class="namatarif"> {{ $key->NAMA_TARIF}} </td>


            <td class="gt"> {{ $key->grantotal_layanan}} </td>
            <td><a class="btn btn-warning btn-sm returorderloundry" href="#">
                    <i class="fas fa-sync-alt fa-spin"></i>
                    RETUR
                </a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@elseif ($unit == 3014)
<table id="datapasienkjn" class="table datapasienkjn table-sm text-sm table-bordered table-hover">
    <thead class="bg-success">
        <th hidden></th>
        <th hidden></th>

        <th hidden></th>
        <th hidden></th>
        <th hidden></th>
        <th hidden></th>
        <th hidden></th>
        <th hidden></th>
        <th>Kode Layanan Order</th>

        <th>Tanggal Masuk</th>
        <th>Nomor RM</th>
        <th>Nama</th>
        <th>Nama Layanan</th>

        <th>Total</th>

        <th>action</th>
    </thead>
    <tbody>
        @foreach ($pasienkjn as $i=>$key)


        <tr class="pasienterpilih toastsDefaultSuccess">
            <td hidden class="idhed">{{$key->idhed}}</td>
            <td hidden class="kodepenjamin">{{ $key->kode_kunjungan }}</td>
            <td hidden class="kodekunjungan">{{ $key->kode_kunjungan}}</td>
            <td hidden class="counter">{{ $key->counter}}</td>
            <td hidden class="statuspembayaran">{{ $key->status_pembayaran}}</td>
            <td hidden class="iddet">{{ $key->iddet}}</td>
            <td hidden class="idlayanandetail">{{ $key->id_layanan_detail}}</td>


            <td hidden>{{ $i}}</td>

            <td class="kodeheader"> {{ $key->kode_layanan_header}}</td>

            <td class="tgl_input"> {{ $key->tgl_masuk}}</td>
            <td class="norm"> {{ $key->no_rm}}</td>

            <td class="namapx"> {{ $key->nama_px}}</td>
            <td class="namatarif"> {{ $key->nama_tarif}}</td>

            <td class="gt"> {{ $key->total_tarif}}</td>
            




            <td><a class="btn btn-warning btn-sm returorderkjn" href="#">
                    <i class="fas fa-sync-alt fa-spin"></i>
                    RETUR
                </a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@else
<table id="datapasienorder" class="table datapasienorder table-sm text-sm table-bordered table-hover">
    <thead class="bg-success">
        <th hidden>no</th>
        <th>Kode Layanan Order</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th hidden>Id</th>
        <th>Tanggal Masuk</th>
        <th>Nomor RM</th>
        <th>Nama</th>
        <th>Nama Layanan</th>

        <th>Total</th>

        <th>action</th>
    </thead>
    <tbody>
        @foreach ($pasienorderlab as $i=>$key)
        <tr index="{{$i}}" idhed=" {{$key->IDHED}}" kode_header="{{$key->KODE_LAYANAN_HEADER}}" class="pasienterpilih toastsDefaultSuccess" no_rm="{{ $key->NO_RM }}" nama="{{ $key->NAMA_PX }}" kodepenjamin="{{ $key -> KODE_PENJAMIN }}" tgl_order="{{ $key-> tgl_INPUT }}" kodekunjungan="{{ $key->KJ}}" counter="{{$key->COUNTER}}" namatarif="{{$key->NAMA_TARIF}}" qty="{{$key->QTY}}" gt="{{$key->grantotal_layanan}}" statuspembayaran="{{$key->status_pembayaran}}" alamat="{{$key->ALAMAT}}" iddet="{{$key->IDDET}}" accnumber="{{$key->ACC_NUMBER}}" idlayanandetail="{{$key->id_layanan_detail}}">
            <td class="kodeheader"> {{ $key->KODE_LAYANAN_HEADER}}</td>
            <td hidden class="idhed">{{$key->IDHED}}</td>
            <td hidden class="kodepenjamin">{{ $key->KODE_PENJAMIN }}</td>
            <td hidden class="kodekunjungan">{{ $key->KJ}}</td>
            <td hidden class="counter">{{ $key->COUNTER}}</td>
            <td hidden class="qty">{{ $key->QTY}}</td>
            <td hidden class="statuspembayaran">{{ $key->status_pembayaran}}</td>
            <td hidden class="alamat">{{ $key->ALAMAT}}</td>
            <td hidden class="iddet">{{ $key->IDDET}}</td>
            <td hidden class="accnumber">{{ $key->ACC_NUMBER}}</td>
            <td hidden class="idlayanandetail">{{ $key->id_layanan_detail}}</td>
            <td hidden>{{ $i}}</td>
            <td class="tgl_input">{{ $key-> tgl_INPUT }}</td>
            <td class="norm">{{ $key-> NO_RM }}</td>
            <td class="namapx"> {{ $key->NAMA_PX}} </td>
            <td class="namatarif"> {{ $key->NAMA_TARIF}} </td>


            <td class="gt"> {{ $key->grantotal_layanan}} </td>
            <td><a class="btn btn-warning btn-sm returorderlab" href="#">
                    <i class="fas fa-sync-alt fa-spin"></i>
                    RETUR
                </a> ||
                <a class="btn btn-primary btn-sm printorderlab" href="#">
                    <i class="fa fa-print" aria-hidden="true"></i>

                </a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endif

<script>
    // $(document).ready(function() {
    //     window.setTimeout(function() {
    //         ambildata()
    //     }, 600000);

    // });

    function bunyi() {
        var bel = new Audio('notif.mp3');
        bel.play();
    }
    $(".printorderrad").click(function() {
        var $row = $(this).closest("tr");

        var kodeheader = $row.find(".kodeheader").text();
        var idhed = $row.find(".idhed").text();

        Swal.fire({
            title: "Apakah ingin print ulang data?",
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
                        idhed,

                    },
                    url: '<?= route('printulang') ?>',
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
                        pdf(data.idhed, data.kode_header)
                        etiket(data.idhed, data.kode_header)

                    }
                });
            }
        })
        return false;
    });
    $(".printnotarad").click(function() {
        var $row = $(this).closest("tr");

        var kodeheader = $row.find(".kodeheader").text();
        var idhed = $row.find(".idhed").text();

        Swal.fire({
            title: "Apakah ingin print ulang data?",
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
                        idhed,

                    },
                    url: '<?= route('printulang') ?>',
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
                        pdf(data.idhed, data.kode_header)

                    }
                });
            }
        })
        return false;
    });
    $(".printlabelrad").click(function() {
        var $row = $(this).closest("tr");

        var kodeheader = $row.find(".kodeheader").text();
        var idhed = $row.find(".idhed").text();

        Swal.fire({
            title: "Apakah ingin print ulang data?",
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
                        idhed,

                    },
                    url: '<?= route('printulang') ?>',
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
                        etiket(data.idhed, data.kode_header)

                    }
                });
            }
        })
        return false;
    });
    $(".printorderlab").click(function() {
        var $row = $(this).closest("tr");

        var kodeheader = $row.find(".kodeheader").text();
        var idhed = $row.find(".idhed").text();

        Swal.fire({
            title: "Apakah ingin print ulang data?",
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
                        idhed,

                    },
                    url: '<?= route('printulanglab') ?>',
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
                        labpdf(data.idhed, data.kode_header)
                    }
                });
            }
        })
        return false;
    });
    $(".returorderkjn").click(function() {
        var $row = $(this).closest("tr");
        var kodepenjamin = $row.find(".kodepenjamin").text();
        var kodekunjungan = $row.find(".kodekunjungan").text();
        var counter = $row.find(".counter").text();
        var statuspembayaran = $row.find(".statuspembayaran").text();
        var iddet = $row.find(".iddet").text();
        var kodeheader = $row.find(".kodeheader").text();
        var idhed = $row.find(".idhed").text();
        var tglinput = $row.find(".tgl_input").text();
        var norm = $row.find(".norm").text();
        var namatarif = $row.find(".namatarif").text();
        var totallayanan = $row.find(".totallayanan").text();
        var idlayanandetail = $row.find(".idlayanandetail").text();





        var gt = $row.find(".gt").text();
        Swal.fire({
            title: "Yakin RETUR data?",
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
                        kodepenjamin,
                        kodekunjungan,
                        counter,
                        statuspembayaran,
                        iddet,
                        kodeheader,
                        idhed,
                        tglinput,
                        norm,
                        namatarif,
                        totallayanan,
                        idlayanandetail,
                        gt
                    },
                    url: '<?= route('returorderkjn') ?>',
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
                        ambildata()
                    }
                });
            }
        })
        return false;
    });
    $(".returorderrad").click(function() {
        var $row = $(this).closest("tr");
        var kodepenjamin = $row.find(".kodepenjamin").text();
        var kodekunjungan = $row.find(".kodekunjungan").text();
        var counter = $row.find(".counter").text();
        var qty = $row.find(".qty").text();
        var statuspembayaran = $row.find(".statuspembayaran").text();
        var alamat = $row.find(".alamat").text();
        var iddet = $row.find(".iddet").text();
        var accnumber = $row.find(".accnumber").text();
        var idlayanandetail = $row.find(".idlayanandetail").text();
        var kodeheader = $row.find(".kodeheader").text();
        var idhed = $row.find(".idhed").text();
        var tglinput = $row.find(".tgl_input").text();
        var norm = $row.find(".norm").text();
        var namatarif = $row.find(".namatarif").text();
        var totallayanan = $row.find(".totallayanan").text();




        var gt = $row.find(".gt").text();
        Swal.fire({
            title: "Yakin RETUR data?",
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
                        kodepenjamin,
                        kodekunjungan,
                        counter,
                        qty,
                        statuspembayaran,
                        alamat,
                        iddet,
                        accnumber,
                        idlayanandetail,
                        kodeheader,
                        idhed,
                        tglinput,
                        norm,
                        namatarif,
                        totallayanan,
                        gt
                    },
                    url: '<?= route('returorderrad') ?>',
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
                        ambildata()
                    }
                });
            }
        })
        return false;
    });
    $(".returorderloundry").click(function() {
        var $row = $(this).closest("tr");
        var kodepenjamin = $row.find(".kodepenjamin").text();
        var kodekunjungan = $row.find(".kodekunjungan").text();
        var counter = $row.find(".counter").text();
        var qty = $row.find(".qty").text();
        var statuspembayaran = $row.find(".statuspembayaran").text();
        var alamat = $row.find(".alamat").text();
        var iddet = $row.find(".iddet").text();
        var accnumber = $row.find(".accnumber").text();
        var idlayanandetail = $row.find(".idlayanandetail").text();
        var kodeheader = $row.find(".kodeheader").text();
        var idhed = $row.find(".idhed").text();
        var tglinput = $row.find(".tgl_input").text();
        var norm = $row.find(".norm").text();
        var namatarif = $row.find(".namatarif").text();
        var totallayanan = $row.find(".totallayanan").text();




        var gt = $row.find(".gt").text();
        Swal.fire({
            title: "Yakin RETUR data?",
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
                        kodepenjamin,
                        kodekunjungan,
                        counter,
                        qty,
                        statuspembayaran,
                        alamat,
                        iddet,
                        accnumber,
                        idlayanandetail,
                        kodeheader,
                        idhed,
                        tglinput,
                        norm,
                        namatarif,
                        totallayanan,
                        gt
                    },
                    url: '<?= route('returorderloundry') ?>',
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
                        ambildata()
                    }
                });
            }
        })
        return false;
    });
    $(".returorderlab").click(function() {
        var $row = $(this).closest("tr");
        var kodepenjamin = $row.find(".kodepenjamin").text();
        var kodekunjungan = $row.find(".kodekunjungan").text();
        var counter = $row.find(".counter").text();
        var qty = $row.find(".qty").text();
        var statuspembayaran = $row.find(".statuspembayaran").text();
        var alamat = $row.find(".alamat").text();
        var iddet = $row.find(".iddet").text();
        var accnumber = $row.find(".accnumber").text();
        var idlayanandetail = $row.find(".idlayanandetail").text();
        var kodeheader = $row.find(".kodeheader").text();
        var idhed = $row.find(".idhed").text();
        var tglinput = $row.find(".tgl_input").text();
        var norm = $row.find(".norm").text();
        var namatarif = $row.find(".namatarif").text();

        var gt = $row.find(".gt").text();
        Swal.fire({
            title: "Yakin RETUR data?",
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
                        kodepenjamin,
                        kodekunjungan,
                        counter,
                        qty,
                        statuspembayaran,
                        alamat,
                        iddet,
                        accnumber,
                        idlayanandetail,
                        kodeheader,
                        idhed,
                        tglinput,
                        norm,
                        namatarif,
                        gt
                    },
                    url: '<?= route('returorderlab') ?>',
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
                        ambildata()
                    }
                });
            }
        })
        return false;
    });

    function ambildata() {

        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",
            },
            type: "post",
            url: " {{ route('ambildata')}}",
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.ordertable').html(response);
            }
        });
    }
    $(function() {
        $("#datapasienorder").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $(function() {
        $("#datapasienkjn").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    // $('#datapasienorder').on('click', '.pasienterpilih', function() {
    //     spinner = $('#loader2');
    //     spinner.show();
    //     id = $(this).attr('id')
    //     tgl_order = $(this).attr('tgl_order')
    //     no_rm = $(this).attr('no_rm')
    //     index = parseInt($(this).attr('index'))
    //     $.ajax({
    //         type: "post",
    //         data: {
    //             _token: "{{ csrf_token() }}",
    //             tgl_order,
    //             no_rm,
    //             id,
    //             index

    //         },

    //         url: " {{ route('pasiendetail') }}",
    //         error: function(data) {
    //             spinner.hide();
    //             alert('error!!')
    //         },
    //         success: function(response) {
    //             spinner.hide();
    //             $('#tgl_order').val(response.tgl_order);
    //             $('#no_rm').val(response.no_rm);
    //             $('#id').val(response.id);
    //             $('.coba').html(response);
    //         }
    //     });
    // });

    function pdf(idhed, kode_header) {

        myWindow = window.open('cetakorder/' + kode_header + '/' + idhed);

        function closeWin() {
            myWindow.close();
        }
    }

    function etiket(idhed, kode_header) {

        window.open('etiket/' + kode_header + '/' + idhed);
    }

    function labpdf(idhed, kode_header) {
        window.open('labnota/' + kode_header + '/' + idhed);

    }
</script>