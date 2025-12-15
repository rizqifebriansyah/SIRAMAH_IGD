 <div class="card mb-5">

     <table class="table">
         <thead class="bg-info">
             <th colspan="4">ASSESMEN AWAL GIZI</th>
         </thead>
         <tbody>
             <tr>
                 <td class="text-bold font-italic">Tanggal Masuk</td>
                 <td>
                     <h5 class="text-bold">{{$pasien[0]->tgl_masuk}}</h5>

                 </td>
                 <td class="text-bold font-italic">Tanggal Pengkajian</td>
                 <td>
                     <h5 class="text-bold"></h5>

                 </td>
             </tr>
             <tr>
                 <td class="text-bold font-italic">NORM Pasien</td>
                 <td>
                     <div class="form-check form-check-inline">

                         <label class="form-check-label" for="inlineRadio1">{{$pasien[0]->no_rm}}</label>
                     </div>

                 </td>
                 <td class="text-bold font-italic">Nama Pasien</td>
                 <td>
                     <div class="form-check form-check-inline">

                         <label class="form-check-label" for="inlineRadio1">{{$pasien[0]->nama_px}}</label>
                     </div>

                 </td>
             </tr>
             <tr>
                 <td class="text-bold font-italic">Tanggal Lahir Pasien</td>
                 <td>
                     <div class="form-check form-check-inline">

                         <label class="form-check-label" for="inlineRadio1">{{$pasien[0]->tgl_lahir}} / {{$pasien[0]->Umur}} Thn</label>
                     </div>

                 </td>
                 <td class="text-bold font-italic">Jenis Kelamin</td>
                 <td>
                     <div class="form-check form-check-inline">
                         @if($pasien[0]->jenis_kelamin == 'P')

                         <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                         @else
                         <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>

                         @endif
                     </div>

                 </td>
             </tr>




         </tbody>
     </table>
     <div class="card-header text-bold bg-warning" style="text-align: center;">
         <div class="row">
             <div class="col-md-4"><a class=" btn btn-info btn-block " id="hasillabo">
                     <i class="bi bi-journal-text"></i>
                     Hasil laboratorium
                 </a></div>
             <div class="col-md-4"><a class=" btn btn-info btn-block " id="hasilradio">
                     <i class="bi bi-journal-text"></i>
                     Hasil Radiologi
                 </a></div>
             <div class="col-md-4"><a class=" btn btn-info btn-block " id="hasilpa">
                     <i class="bi bi-journal-text"></i>
                     Hasil Patologi Anatomi
                 </a></div>
         </div>
     </div>

     <table class="table mb-5">
         <tr>
             <td class="text-bold font-italic" colspan="4">Diagnosa Medis :</td>

         </tr>
         <tr>
             <td class="text-bold font-italic" colspan="4">1. Risiko malnutrisi berdasarkan hasil skrining gizi oleh perawat, kondisi pasien termasuk kategori :
             </td>

         </tr>

         <tr>
             <td class="text-bold font-italic">Pasien dewasa :</td>
             <td>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" name="pade1" id="pade1" value="Tidak berisiko (Nilai MST <2)">
                     <label class="form-check-label">Tidak berisiko (Nilai MST <2) </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" name="pade2" id="pade2" value="Berisiko malnutrisi">
                     <label class="form-check-label">Berisiko malnutrisi</label>
                 </div>
                 <div class="form-check">
                     {{-- <input class="form-check-input" type="checkbox" name="pade2" id="pade2" value="Berisiko malnutrisi"> --}}
                     <label class="form-check-label">(Nilai MST≥2 dan atau dengan diagnosis khusus)</label>
                 </div>
             </td>
             <td class="text-bold font-italic">Pasien Anak :</td>
             <td>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" name="pean1" id="pean1" value="Risiko rendah (Nilai STRONG-Kids 0)">
                     <label class="form-check-label">Risiko rendah (Nilai STRONG-Kids 0)</label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" name="pean2" id="pean2" value="Risiko sedang (Nilai STRONG-Kids 1-3)">
                     <label class="form-check-label">Risiko sedang (Nilai STRONG-Kids 1-3)</label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" name="pean3" id="pean3" value="Risiko berat (Nilai STRONG-Kids 4-5)">
                     <label class="form-check-label">Risiko berat (Nilai STRONG-Kids 4-5)</label>
                 </div>
             </td>

         </tr>
         <tr>
             <td class="text-bold font-italic">2. Pasien mempunyai kondisi / diagnosis khusus :
             </td>
             <td colspan="3">
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" name="dk1" id="dk1" value="Tidak">
                     <label class="form-check-label">Tidak</label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" name="dk2" id="dk2" value="Ya">
                     <label class="form-check-label">Ya</label>
                 </div>

             </td>


         </tr>
         <tr>
             <td class="text-bold font-italic" colspan="4">3. Alergi Makanan :
             </td>

         </tr>

         <tr>
             <td>
                 <label class="form-check-label">* Telur</label>

             </td>
             <td>
                 <select class="form-control select2" name="telur" id="telur">
                     <option value="Ya">Ya
                     </option>
                     <option value="Tidak">Tidak
                     </option>
                 </select>


             </td>
             <td><label class="form-check-label">* ikan</label></td>
             <td>
                 <select class="form-control select2" name="udang" id="udang">
                     <option value="Ya">Ya
                     </option>
                     <option value="Tidak">Tidak
                     </option>
                 </select>
             </td>

         </tr>
         <tr>
             <td>
                 <label class="form-check-label">* Susu sapi & produk olahannya</label>

             </td>
             <td>
                 <select class="form-control select2" name="susu" id="susu">
                     <option value="Ya">Ya
                     </option>
                     <option value="Tidak">Tidak
                     </option>
                 </select>


             </td>
             <td><label class="form-check-label">* Ikan </label></td>
             <td>
                 <select class="form-control select2" name="ikan" id="ikan">
                     <option value="Ya">Ya
                     </option>
                     <option value="Tidak">Tidak
                     </option>
                 </select>
             </td>

         </tr>
         <tr>
             <td>
                 <label class="form-check-label">* Kacang kedelai/Tanah</label>

             </td>
             <td>
                 <select class="form-control select2" name="kacang" id="kacang">
                     <option value="Ya">Ya
                     </option>
                     <option value="Tidak">Tidak
                     </option>
                 </select>


             </td>
             <td><label class="form-check-label">* Hazelnut/almond </label></td>
             <td>
                 <select class="form-control select2" name="almond" id="almond">
                     <option value="Ya">Ya
                     </option>
                     <option value="Tidak">Tidak
                     </option>
                 </select>
             </td>

         </tr>
         <tr>
             <td>
                 <label class="form-check-label">* Gluten/gandum</label>

             </td>
             <td>
                 <select class="form-control select2" name="gandum" id="gandum">
                     <option value="Ya">Ya
                     </option>
                     <option value="Tidak">Tidak
                     </option>
                 </select>


             </td>
             <td colspan="2"></td>


         </tr>
         <tr>
             <td class="text-bold font-italic">4. Preskripsi diet :
             </td>
             <td>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" name="predi1" id="predi1" value="Makanan non diet">
                     <label class="form-check-label">Makanan non diet</label>
                 </div>


             </td>
             <td>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" name="predi2" id="predi2" value="Diet khusus">
                     <label class="form-check-label">Diet khusus</label>
                 </div>
             </td>
             <td>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" name="predi3" id="predi3" value="Diet cai">
                     <label class="form-check-label">Diet cai</label>
                 </div>
             </td>

         </tr>
         <tr>
             <td class="text-bold font-italic">5. Tindak lanjut :
             </td>
             <td colspan="3">
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" name="tl1" id="tl1" value="Belum Perlu Asuhan Gizi">
                     <label class="form-check-label">Belum Perlu Asuhan Gizi</label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="checkbox" name="tl2" id="tl2" value="Perlu Asuhan Gizi">
                     <label class="form-check-label">Perlu Asuhan Gizi</label>
                 </div>

             </td>


         </tr>
     </table>
 </div>
