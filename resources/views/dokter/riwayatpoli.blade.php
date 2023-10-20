@if ($cek == null)
    <h1 style="margin-left:10px" class="text-danger">Tidak Ada Hasil Cppt </h1>
@else
    <h3 style="margin-left: 10px;"> Catatan Perkembangan Pasien Terintegrasi Rawat Jalan</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <a class=" btn btn-info btn-sm hasillab ">
                    <i class="bi bi-journal-text"></i>
                    Hasil laboratorium
                </a>
                <a class=" btn btn-info btn-sm hasilradio">
                    <i class="bi bi-journal-text "></i>
                    Hasil Radiologi
                </a>
                <a class=" btn btn-info btn-sm hasilcppt " href="#">
                    <i class="bi bi-journal-text"></i>
                    Hasil Lab PA
                </a>
            </div>
        </div>

    </div>
    <div class="card-body hasil">


    </div>
    @foreach ($cek as $k)
        <div class="box box-solid collapsed-box">
            <div class="card-header"
                style="margin-top: 10px; margin-left:10px; margin-right:10px; background-color: rgba(110, 245, 137, 0.745)">
                <div>
                    <h3 class="card-title"> {{ $k->nama_unit }} </h3>
                    <h5> {{ $k->tgl_kunjungan }}</h5>
                </div>

                <div class="card-tools pull-right">
                    <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div style="display: none;" class="box-body">
                <div class="mailbox-read-message">
                    <p style="font-weight: bolder;">1. SUBJEK</p>
                    <table class="table text-sm">

                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Sumber Data</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="{{ $k->sumber_data }}">

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Keluhan Pasien</td>
                                <td rowspan="4">
                                    <textarea class="form-control" rows="3">{{ $k->keluhan_pasien }}</textarea>

                                </td>
                            </tr>

                        </tbody>

                    </table>

                    <table class="table text-sm">
                        <thead>
                            <tr>
                                <th colspan="4" class="text-center bg-secondary">Tanda - Tanda Vital</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Tekanan Darah</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="{{ $k->tekanan_darah }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">mmHg</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-bold font-italic">Frekuensi Nadi</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control"
                                            placeholder="Frekuensi nadi pasien ..." id="frekuensinadi"
                                            name="frekuensinadi" aria-label="Recipient's username"
                                            aria-describedby="basic-addon2" value="{{ $k->frekuensi_nadi }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">x/menit</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Frekuensi Nafas</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control"
                                            placeholder="Frekuensi Nafas Pasien ..." name="frekuensinafas"
                                            id="frekuensinafas" aria-label="Recipient's username"
                                            aria-describedby="basic-addon2" value="{{ $k->frekuensi_nafas }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">x/menit</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-bold font-italic">Suhu</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Suhu tubuh pasien ..."
                                            aria-label="Suhu tubuh pasien" name="suhutubuh" id="suhutubuh"
                                            aria-describedby="basic-addon2" value="{{ $k->suhu_tubuh }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">°C</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Berat Badan</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Berat badan Pasien ..."
                                            name="beratbadan" id="beratbadan" aria-label="Recipient's username"
                                            aria-describedby="basic-addon2" value="{{ $k->beratbadan }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">kg</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-bold font-italic">Umur</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Umur pasien ..."
                                            aria-label="Suhu tubuh pasien" name="usia" id="usia"
                                            aria-describedby="basic-addon2" value="{{ $k->umur }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">Thn</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <table class="table text-sm">
                        <thead>
                            <tr>
                                <th colspan="4" class="text-center bg-secondary">Riwayat Kesehatan</th>
                            </tr>
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Kelahiran (bagi pasien anak)</td>
                                <td>
                                    <div class="input-group">
                                        @if ($k->riwyat_kelahiran_pasien_anak == 'NULL')
                                            <input type="text" class="form-control"
                                                aria-label="Recipient's username" id="tekanandarah"
                                                name="tekanandarah" aria-describedby="basic-addon2"
                                                value="Tidak ada">
                                        @else
                                            <input type="text" class="form-control"
                                                aria-label="Recipient's username" id="tekanandarah"
                                                name="tekanandarah" aria-describedby="basic-addon2"
                                                value="{{ $k->riwyat_kelahiran_pasien_anak }}">
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Kehamilan (bagi pasien wanita)</td>
                                <td>
                                    @if ($k->riwayat_kehamilan_pasien_wanita == 'NULL')
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="tidak ada">
                                    @else
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="{{ $k->riwayat_kehamilan_pasien_wanita }}">
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Riwayat Penyakit Sekarang</td>
                                <td>
                                    @if ($k->riwyat_penyakit_sekarang == 'NULL')
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="tidak ada">
                                    @else
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="{{ $k->riwyat_penyakit_sekarang }}">
                                    @endif
                                </td>
                            </tr>
                        </tbody>

                    </table>
                    <table class="table text-sm">
                        <thead>
                            <tr>
                                <th colspan="4" class="text-center bg-secondary">Riwayat Penyakit Dahulu</th>
                            </tr>
                        <tbody>
                            <tr>
                                <td class="text-bold font-italic">Hipertensi </td>
                                <td>
                                    <div class="input-group">
                                        @if ($k->hipertensi == 'NULL')
                                            <input type="text" class="form-control"
                                                aria-label="Recipient's username" id="tekanandarah"
                                                name="tekanandarah" aria-describedby="basic-addon2"
                                                value="Tidak ada">
                                        @else
                                            <input type="text" class="form-control"
                                                aria-label="Recipient's username" id="tekanandarah"
                                                name="tekanandarah" aria-describedby="basic-addon2"
                                                value="{{ $k->hipertensi }}">
                                        @endif
                                    </div>
                                </td>
                                <td class="text-bold font-italic">Kencing Manis </td>
                                <td>
                                    <div class="input-group">
                                        @if ($k->kencingmanis == 'NULL')
                                            <input type="text" class="form-control"
                                                aria-label="Recipient's username" id="tekanandarah"
                                                name="tekanandarah" aria-describedby="basic-addon2"
                                                value="Tidak ada">
                                        @else
                                            <input type="text" class="form-control"
                                                aria-label="Recipient's username" id="tekanandarah"
                                                name="tekanandarah" aria-describedby="basic-addon2"
                                                value="{{ $k->kencingmanis }}">
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Jantung</td>
                                <td>
                                    @if ($k->jantung == 'NULL')
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="tidak ada">
                                    @else
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="{{ $k->jantung }}">
                                    @endif
                                </td>
                                <td class="text-bold font-italic">Stroke</td>
                                <td>
                                    @if ($k->stroke == 'NULL')
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="tidak ada">
                                    @else
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="{{ $k->stroke }}">
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Hepatitis</td>
                                <td>
                                    @if ($k->hepatitis == 'NULL')
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="tidak ada">
                                    @else
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="{{ $k->hepatitis }}">
                                    @endif
                                </td>
                                <td class="text-bold font-italic">Ashma</td>
                                <td>
                                    @if ($k->asthma == 'NULL')
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="tidak ada">
                                    @else
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="{{ $k->asthma }}">
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Ginjal</td>
                                <td>
                                    @if ($k->ginjal == 'NULL')
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="tidak ada">
                                    @else
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="{{ $k->ginjal }}">
                                    @endif
                                </td>
                                <td class="text-bold font-italic">Ashma</td>
                                <td>
                                    @if ($k->tbparu == 'NULL')
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="tidak ada">
                                    @else
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="{{ $k->tbparu }}">
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Lainya</td>
                                <td>
                                    @if ($k->riwayatlain == 'NULL')
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="tidak ada">
                                    @else
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="{{ $k->riwayatlain }}">
                                    @endif
                                </td>
                                <td class="text-bold font-italic">Lain</td>
                                <td>
                                    <input type="text" class="form-control" aria-label="Recipient's username"
                                        id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                        value="">

                                </td>
                            </tr>
                        </tbody>

                    </table>
                    <table class="table text-sm">
                        <thead>
                            <tr>
                                <th colspan="2" class="text-center bg-secondary">Pemeriksaan Fisik</th>
                            </tr>
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <p style="font-weight: bolder;">{{ $k->pemeriksaan_fisik }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Kesadaran</td>
                                <td>
                                    <div class="input-group">
                                        @if ($k->kesadaran == 'NULL')
                                            <input type="text" class="form-control"
                                                aria-label="Recipient's username" id="tekanandarah"
                                                name="tekanandarah" aria-describedby="basic-addon2"
                                                value="Tidak ada">
                                        @else
                                            <input type="text" class="form-control"
                                                aria-label="Recipient's username" id="tekanandarah"
                                                name="tekanandarah" aria-describedby="basic-addon2"
                                                value="{{ $k->kesadaran }}">
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Diagnosa Kerja</td>
                                <td>
                                    @if ($k->diagnosakerja == 'NULL')
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="tidak ada">
                                    @else
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="{{ $k->diagnosakerja }}">
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Diagnosa Banding</td>
                                <td>
                                    @if ($k->diagnosabanding == 'NULL')
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="tidak ada">
                                    @else
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="{{ $k->diagnosabanding }}">
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Rencana Kerja</td>
                                <td>
                                    @if ($k->rencanakerja == 'NULL')
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="tidak ada">
                                    @else
                                        <input type="text" class="form-control" aria-label="Recipient's username"
                                            id="tekanandarah" name="tekanandarah" aria-describedby="basic-addon2"
                                            value="{{ $k->rencanakerja }}">
                                    @endif
                                </td>
                            </tr>
                        </tbody>

                    </table>
                    <table class="table text-sm">
                        <thead>
                            <tr>
                                <th colspan="2" class="text-center bg-secondary">Hasil Pemeriksaan Khusus</th>
                            </tr>
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    @if ($k->pemeriksaan_khusus == 'NULL')
                                        <p style="font-weight: bolder;">TIDAK ADA PEMERIKSAAN KHUSUS</p>
                                    @else
                                        <p style="font-weight: bolder;">{{ $k->pemeriksaan_khusus }}
                                            {{ $k->pemeriksaan_khusus_2 }}</p>
                                    @endif
                                </td>
                            </tr>




                        </tbody>

                    </table>
                    <p>Thanks,<br>Jane</p>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    @endforeach
@endif

<script>
    $("[data-widget='collapse']").click(function() {
        //Find the box parent
        var box = $(this).parents(".box").first();
        //Find the body and the footer
        var bf = box.find(".box-body, .box-footer");
        if (!box.hasClass("collapsed-box")) {
            box.addClass("collapsed-box");
            bf.slideUp();
        } else {
            box.removeClass("collapsed-box");
            bf.slideDown();
        }
    });

    $(".hasillab").click(function() {
        spinner = $('#loader2');
        spinner.show();
        kj = $('#kj').val()



        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                kj: $('#kj').val(),
            },
            url: " {{ route('hasillabo') }}",

            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(response) {
                spinner.hide();
                $('.hasil').html(response);
            }
        });
    });
    $(".hasilradio").click(function() {
        spinner = $('#loader2');
        spinner.show();
        kj = $('#kj').val()



        $.ajax({
            type: "post",
            data: {
                _token: "{{ csrf_token() }}",
                kj: $('#kj').val(),
            },
            url: " {{ route('hasilradio') }}",

            error: function(data) {
                spinner.hide();
                alert('error!!')
            },
            success: function(response) {
                spinner.hide();
                $('.hasil').html(response);
            }
        });
    });
</script>
