<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">

                        <h1 class=" text-center">{{$noantri}}</h1>
                        <p class="text-muted text-center">PASIEN NO ANTRIAN</p>
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
                                <a href="#" class="nav-link" onclick="formpemeriksaandokter()">
                                    <i class="fas fa-male mr-2"></i>TRIASE DEWASA
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="resume()">
                                    <i class="fas fa-child mr-2"></i> TRIASE ANAK
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" onclick="resume()">
                                    <i class="fas fa-baby mr-2"></i> TRIASE ANAK
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>


            </div>

            <div class="col-md-10">
                <div class="card">

                    <div class="card-body">


                    </div>
                </div>

            </div>

        </div>

    </div>
</section>