<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            @if ($jk == 'L')
                            <img class="profile-user-img img-fluid img-circle" src="{{ asset('public/adminlte/dist/img/avatar.png')}}" alt="User profile picture">
                            @else
                            <img class="profile-user-img img-fluid img-circle" src="{{ asset('public/adminlte/dist/img/avatar3.png')}}" alt="User profile picture">
                            @endif
                        </div>
                        <h4 class=" text-center">{{$namapx}}</h4>
                        <p class="text-muted text-center">PASIEN INSTALASI GAWAT DARURAT</p>
                        <ul class="list-group list-group-unbordered mb-3">
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
                        </ul>
                        <a href="#" class="btn btn-primary btn-block"><b>Catatan Medis</b></a>



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
                                <a href="#" class="nav-link cpptdokter">
                                    <i class="fas fa-male mr-2"></i>Catatan Perkembangan Pasien Terintegrasi (CPPT)
                                </a>
                            </li>
                            <li class="nav-item" id="pemeriksaan">
                                <a href="#" class="nav-link resumecppt">
                                    <i class="fas fa-filter mr-2"></i>Resume
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


                        <div class="card card-info formermdokter">
                            <h1>Selamat Datang </h1>

                        </div>



                    </div>
                </div>
            </div>


        </div>

    </div>
</section>


<script>
    $(".cpptdokter").click(function() {
        spinner = $('#loader2');
        spinner.show();


        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",

            },
            url: '<?= route('formermdokter') ?>',
            error: function(data) {
                spinner.hide();
                alert('oke!!')
            },
            success: function(response) {
                spinner.hide();
                $('.formermdokter').html(response);

            }
        });
    });
</script>