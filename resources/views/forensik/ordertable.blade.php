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


        @foreach ($pasienorderkjn as $i=>$key)
        <tr class="pasienterpilih toastsDefaultSuccess">
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
            <td><a class="btn btn-warning btn-sm returorderforensik" href="#">
                    <i class="fas fa-sync-alt fa-spin"></i>
                    RETUR
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


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
    $(function() {
        $("#datapasienkjn").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
    $(".returorderforensik").click(function() {
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
                    url: '<?= route('returorderforensik') ?>',
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
            url: " {{ route('ambildataforensik')}}",
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
    
  
</script>