<head>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('public/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="{{ asset('public/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset('public/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('public/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('public/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="{{ asset('public/adminlte/dist/js/jquery-3.js') }}"></script>
    <script src="{{ asset('public/adminlte/dist/js/jquery-ui.min.js') }}"></script>
    {{-- <script src="{{ asset('public/adminlte/plugins/jquery/jquery.min.js') }}"></script> --}}
    <!-- Bootstrap -->
    <script src="{{ asset('public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('public/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('public/adminlte/dist/js/adminlte.js') }}"></script>

    <!-- PAGE PLUGINS -->
    <link rel="{{ asset('public/adminlte/plugins/select2/css/select2.min.css') }}">
    <link rel="{{ asset('public/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- jQuery Mapael -->
    <script src="{{ asset('public/adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('public/adminlte/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('public/adminlte/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('public/adminlte/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('public/adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('public/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('public/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/adminlte/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('public/adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('public/adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('public/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('public/adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('public/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('public/adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>


<input type="button" value="Print this page" onclick="printPage()" />

<table class="table">
    <tbody>
        <tr>
            <td class="text-bold font-italic">Tanggal Kunjungan</td>
            <td>
                <h5 class="text-bold"></h5>

            </td>
            <td class="text-bold font-italic">Tanggal Pengkajian</td>
            <td>
                <h5 class="text-bold"></h5>

            </td>
        </tr>
        <tr>
            <td class="text-bold font-italic">Sumber Data</td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Pasien Sendiri">
                    <label class="form-check-label" for="inlineRadio1">Pasien Sendiri / Autoanamase</label>
                </div>

            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sumberdata" id="sumberdata" value="Keluarga">
                    <label class="form-check-label" for="inlineRadio2">Keluarga / Alloanamnesa</label>
                </div>
            </td>
            <td>

            </td>
        </tr>

        <tr>
            <td class="text-bold font-italic">Macam Kasus</td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="macamkasus" id="macamkasus" value="Non Trauma">
                    <label class="form-check-label" for="inlineRadio1">Non Trauma</label>
                </div>

            </td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="macamkasus" id="macamkasus" value="Trauma">
                    <label class="form-check-label" for="inlineRadio2">Trauma </label>
                </div>
            </td>
            <td>
                <select class="form-control select2" name="trauma" id="trauma">
                    <option value=""> -- Pilih Trauma --</option>
                    <option value="Keecelakaan Lalu Lintas">Keecelakaan Lalu Lintas
                    </option>
                    <option value="Kekerasan Dalam Rumah Tangga">Kekerasan Dalam Rumah Tangga
                    </option>
                    <option value="Pasien Non Bedah">Pasien Non Bedah
                    </option>
                    <option value="Kecelakaan Kerja">Kecelakaan Kerja
                    </option>
                    <option value="Child Abuse (Kekerasan Anak)">Child Abuse (Kekerasan Anak)
                    </option>


                </select>
            </td>
        </tr>
    </tbody>
</table>


<script>
    function printPage() {
        window.print();
    }
</script>