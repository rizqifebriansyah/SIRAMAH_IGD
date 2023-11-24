<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">Surat Rujukan Intern</h3>
    </div>
    <div class="card-body">
        <form action="" class="formsri">

            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <tbody>

                            <tr>
                                <td class="text-bold font-italic">Nomor Rekam Medis</td>
                                <td colspan="3">

                                    <textarea class="form-control" id="norm" name="norm" placeholder="Ketik Norm pasien ..."></textarea>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Nama pasien</td>
                                <td colspan="3">

                                    <textarea class="form-control" id="namapasien" name="namapasien" placeholder="Ketik nama pasien ..."></textarea>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Umur pasien</td>
                                <td colspan="3">

                                    <textarea class="form-control" id="umur" name="umur" placeholder="Ketik umur  pasien ..."></textarea>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Alamat pasien</td>
                                <td colspan="3">

                                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Ketik alamat  pasien ..."></textarea>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Diagnosa Sementara pasien</td>
                                <td colspan="3">

                                    <textarea class="form-control" id="diagnosa " name="diagnosa " placeholder="Ketik diagnosa   pasien ..."></textarea>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Penyebab Kecelakaan pasien</td>
                                <td colspan="3">

                                    <textarea class="form-control" id="kecelakaan " name="kecelakaan " placeholder="Ketik kecelakaan   pasien ..."></textarea>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">Dirawat di ruang</td>
                                <td colspan="3">

                                    <textarea class="form-control" id="dirawat " name="dirawat " placeholder="Ketik dirawat   pasien ..."></textarea>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold font-italic">DPJP</td>
                                <td colspan="3">

                                    <textarea class="form-control" id="dpjp " name="dpjp " placeholder="Ketik dpjp   pasien ..."></textarea>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </form>
        <div type="button" class="btn float-right btn-success " style="margin-top: 20px;">
            SIMPAN
        </div>
    </div>

    <script>
        document.getElementById('tglpoli').valueAsDate = new Date()
    </script>
