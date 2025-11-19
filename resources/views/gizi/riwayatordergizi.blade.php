
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
                    @foreach ($pasienordergizi as $i=>$key)
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
                        <td><a class="btn btn-warning btn-sm returorderlabo" href="#">
                                <i class="fas fa-sync-alt fa-spin"></i>
                                RETUR
                            </a> ||
                            <a class="btn btn-primary btn-sm printorderlabo" href="#">
                                <i class="fa fa-print" aria-hidden="true"></i>

                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
      



<script>
    spinner = $('#loader2');
    spinner.hide();
   
    $(function() {
        $("#datapasienorder").DataTable({
            "responsive": false,
            "lengthChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });

   
</script>
