<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">

                        <h1 class=" text-center">{{ $noantri }}</h1>
                        <input type="text" name="antrian" id="antrian" hidden value="{{ $noantri }}">
                        <p class="text-muted text-center">PASIEN NO ANTRIAN</p>
                        {{-- <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>TD</b> <a class="float-right">120/100 mmhg</a>
                            </li>
                            <li class="list-group-item">
                                <b>Nadi</b> <a class="float-right">60 x/menit</a>
                            </li>
                            <li class="list-group-item">
                                <b>Frekuensi Pernafasan</b> <a class="float-right">30 x/menit</a>
                            </li>
                            <li class="list-group-item">
                                <b>Suhu</b> <a class="float-right">36 °C</a>
                            </li>
                            <li class="list-group-item">
                                <b>Berat badan</b> <a class="float-right">50 Kg</a>
                            </li>
                            <li class="list-group-item">
                                <b>Usia</b> <a class="float-right">35 Th</a>
                            </li>
                        </ul> --}}
                        {{-- <a href="#" class="btn btn-primary btn-block"><b>Catatan Medis</b></a> --}}



                    </div>

                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pemeriksaan Pasien</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item" id="pemeriksaan">
                                <a href="#" class="nav-link triasedewasa">
                                    <i class="fas fa-male mr-2"></i>TRIASE Dewasa
                                </a>
                            </li>
                            <li class="nav-item" id="pemeriksaan">
                                <a href="#" class="nav-link triaseanak">
                                    <i class="fas fa-male mr-2"></i>TRIASE Anak
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link resumetriase">
                                    <i class="fas fa-child mr-2"></i> Resume Triase
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>


            </div>

            <div class="col-md-10">
                <div class="scroll">
                    <div class="card">


                        <div class="card card-info form">
                            <h1>Selamat Datang </h1>

                        </div>


                    </div>

                </div>
            </div>


        </div>

    </div>
</section>


<script>
    $(".triasedewasa").click(function() {
        spinner = $('#loader2');
        spinner.show();

        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",

            },
            url: '<?= route('triasedewasa') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.form').html(response);

            }
        });
    });
    $(".triaseanak").click(function() {
        spinner = $('#loader2');
        spinner.show();

        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",

            },
            url: '<?= route('triaseanak') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.form').html(response);

            }
        });
    });
    $(".formtriasedewasa").click(function() {
        spinner = $('#loader2');
        spinner.show();


        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",

            },
            url: '<?= route('formdewasa') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.form').html(response);

            }
        });
    });
    $(".resumetriase").click(function() {
        spinner = $('#loader2');
        spinner.show();
        antrian = $('#antrian').val()


        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                antrian

            },
            url: '<?= route('resumetriase') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.form').html(response);

            }
        });
    });
</script>
