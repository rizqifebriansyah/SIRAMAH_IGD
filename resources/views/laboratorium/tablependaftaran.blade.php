<table id="datapendaftaran" class="table tabl6644e-sm text-sm table-bordered table-hover">

    <thead class="bg-warning">
        <th>UNIT</th>
        <th>Nomor RM</th>
        <th>Nama</th>
        <th>JK</th>
        <th>Alamat</th>
        <th>Penjamin</th>
        <th>diagnosa awal</th>


    </thead>
    <tbody>

        @foreach ($pasienkunjunganrs as $i => $pk)

        <tr index="{{ $i }}" kelas="{{ $pk->kelas }}" kode_kunjungan="{{ $pk->kode_kunjungan }}" kelas_unit="{{ $pk->kelas_unit }}" nama_unit="{{ $pk->nama_unit }}" no_rm="{{ $pk->no_rm }}" nama_px="{{ $pk->nama_px }}" jenis_kelamin="{{ $pk->jenis_kelamin }}" nama_penjamin="{{ $pk->nama_penjamin }}" dokter="{{ $pk->nama_dokter }}" nama_penjamin="{{ $pk->nama_penjamin }}" kode_penjamin="{{ $pk->kode_penjamin }}" alamat="{{ $pk->alamat }}" diagx="{{ $pk->DIAGX }}" class="terpilihpasien toastsDefaultSuccess @if($pk->orderan == 1) bg-danger @else @endif">

            <td>{{ $pk->nama_unit }} </td>
            <td>{{ $pk->no_rm }}</td>
            <td>{{ $pk->nama_px }}</td>
            <td>{{ $pk->jenis_kelamin }}</td>
            <td>{{ $pk->alamat }}</td>
            <td>
                @if ($pk->kode_penjamin == 'P01')
                <p class="badge badge-primary">PRIBADI</p>
                @else
                <p class="badge badge-success">
                    {{ $pk->nama_penjamin }}
                </p>
                @endif
            </td>
            <td>
                {{ $pk->DIAGX }}

            </td>
            <!-- <td>{{ $pk->counter }}</td> -->


        </tr>
        @endforeach

    </tbody>
</table>

<script>
    // $(document).ready(function() {
    //     window.setTimeout(function() {
    //         datapasien()
    //     }, 600000);

    // });

    function bunyi() {
        var bel = new Audio('notif.mp3');
        bel.play();
    }

    function datapasien() {
        $.ajax({
            data: {
                _token: "{{ csrf_token() }}",
            },
            type: "post",
            url: " {{ route('datapasien') }}",
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.tablependaftaran').html(response);
            }
        });
    }
    $(function() {
        $("#datapendaftaran").DataTable({
            "responsive": false,
            "lenghtChange": false,
            "pageLength": 5,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });

    $('#datapendaftaran').on('click', '.terpilihpasien', function() {
        spinner = $('#loader2');
        spinner.show();
        tgl_kunjungan = $('#tanggal_kunjungan').val()
        diagx = $(this).attr('diagx')
        kelas_unit = $(this).attr('kelas_unit')
        kelas = $(this).attr('kelas')
        kode_kunjungan = $(this).attr('kode_kunjungan')
        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                tgl_kunjungan,
                kelas_unit,
                kelas,
                diagx,
                kode_kunjungan,
            },
            url: " {{ route('detailpasienlab') }}",
            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(response) {
                spinner.hide();
                $('#kelas_unit').val(response.kelas_unit);
                $('#kelas').val(response.kelas);
                $('#kode_kunjungan').val(response.kode_kunjungan);
                $('#tgl_kunjungan').val(response.tgl_kunjungan);

                $('.coba').html(response);

            }
        });
    });


    $('#datapendaftaran').on('click', '.pasienerm', function() {
        spinner = $('#loader2');
        spinner.show();
        kelas = $(this).attr('kelas')
        nama = $(this).attr('nama')
        alamat = $(this).attr('alamat')
        tglmasuk = $(this).attr('tglmasuk')
        norm = $(this).attr('norm')
        diagnosa = $(this).attr('diagnosa')
        kodekunjungan = $(this).attr('kodekunjungan')
        index = parseInt($(this).attr('index'))
        idheader = $(this).attr('idheader')
        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                norm,
                tglmasuk,
                nama,
                alamat,
                kodekunjungan,
                diagnosa,
                index,
                idheader
            },
            url: " {{ route('pasienerm') }}",
            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(response) {
                spinner.hide();
                $('#idheader').val(response.id);
                $('#norm').val(response.norm);
                $('#nama').val(response.nama);
                $('#alamat').val(response.alamat);
                $('#tglmasuk').val(response.tglmasuk);
                $('#kodekunjungan').val(response.kodekunjungan);
                $('.coba').html(response);

            }
        });
    });
</script>