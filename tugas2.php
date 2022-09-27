<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Latihan Memproses Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
    <h2 align="center">Input Data Pegawai</h2>
        <form class="border border-light p-5" method="POST">

        <div class="mb-3">
            <label class="form-label" for="nama">Nama</label>
            <input class="form-control" name="nama" type="text" placeholder="Nama" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nama:required">Nama is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="agama">Agama</label>
            <select class="form-select" name="agama" aria-label="Agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindhu">Hindhu</option>
                <option value="Budha">Budha</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Jabatan</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="manager" type="radio" name="jabatan" value="Manager" data-sb-validations="required" />
                <label class="form-check-label" for="manager">Manager</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="asisten" type="radio" name="jabatan" value="Asisten" data-sb-validations="required" />
                <label class="form-check-label" for="asisten">Asisten</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="kepalaBagian" type="radio" name="jabatan" value="Kepala Bagian" data-sb-validations="required" />
                <label class="form-check-label" for="kepalaBagian">Kepala Bagian</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="staff" type="radio" name="jabatan" value="Staff" data-sb-validations="required" />
                <label class="form-check-label" for="staff">Staff</label>
            </div>
            <div class="invalid-feedback" data-sb-feedback="jabatan:required">One option is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Status</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="menikah" type="radio" name="status" value="Menikah" data-sb-validations="required" />
                <label class="form-check-label" for="menikah">Menikah</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="belumMenikah" type="radio" name="status" value="Belum Menikah" data-sb-validations="required" />
                <label class="form-check-label" for="belumMenikah">Belum menikah</label>
            </div>
            <div class="invalid-feedback" data-sb-feedback="status:required">One option is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="jumlahAnak">Jumlah anak</label>
            <input class="form-control" name="jumlahAnak" type="text" placeholder="Jumlah anak" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah anak is required.</div>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <div class="d-grid">
        <button class="btn btn-info btn-block my-4" name="proses" type="submit">Simpan</button>
        </div>
        </form>

    
        <tbody>

        </tbody>
        <?php 
        error_reporting(E_ALL ^ E_WARNING|| E_NOTICE);
        //tangkap request
        $nama = $_POST['nama'];
        $agama = $_POST['agama'];
        $jabatan = $_POST['jabatan'];
        $status = $_POST['status'];
        $jumAnak = $_POST['jumlahAnak'];
        $tombol = $_POST['proses'];

        // menentukan Gaji Pokok 
        switch($jabatan){
            case "Manager" : $gajiPokok = 20000000; break;
            case "Asisten" : $gajiPokok = 15000000; break;
            case "Kepala Bagian" : $gajiPokok = 10000000; break;
            case "Staff" : $gajiPokok = 4000000; break;
            default : $gajiPokok = 0;
          }
  
            // tunjangan
          $tunjanganJabatan = $gajiPokok * 0.2;
          
        
          // tunjangan keluarga 
          if($status == 'Menikah' && $jumAnak <= 2) $tunjanganKeluarga = $gajiPokok * 5/100;
          else if($status == 'Menikah' && $jumAnak <= 5) $tunjanganKeluarga = $gajiPokok * 10/100;
          else if($status == 'Menikah' && $jumAnak > 5) $tunjanganKeluarga = $gajiPokok * 15/100;
          else $tunjanganKeluarga = 0;
  
          $gajiKotor = $gajiPokok + $tunjanganJabatan + $tunjanganKeluarga;
          $zakat = $gajiKotor * 2.5 / 100;  
          if($agama == 'Islam' && $gajiKotor >= 6000000) $zakat;
            else $zakat = 0;
  
          $takeHomePay = $gajiKotor - $zakat;
        
        if(isset($tombol)) { ?>
        <h2 align="center">Data Pegawai</h2>
        <table align="center" cellpadding="" width="90%" border="1px" class="table table-bordered">
			<thead>
				<tr bgcolor="tomato">
					<th>NAMA PEGAWAI</th>
					<th>JABATAN</th>
                    <th>AGAMA</th>
                    <th>STATUS</th>
                    <th>JUMLAH ANAK</th>
                    <th>GAJI POKOK</th>
                    <th>TUNJANGAN JABATAN</th>
                    <th>TUNJANGAN KELUARGA</th>
                    <th>GAJI KOTOR</th>
                    <th>ZAKAT PROFESI</th>
                    <th>TAKE HOME PAY</th>
				</tr>
		</thead> 
        <tbody>
        
                    <tr bgcolor="aqua">
                    <td><?= $nama; ?> </td>
                    <td><?= $jabatan; ?></td>
                    <td><?= $agama; ?>
                    <td><?= $status; ?></td>
                    <td><?= $jumAnak; ?></td>
                    <td><?= 'Rp ',number_format($gajiPokok, 2, ',', '.'); ?></td>
                    <td><?= 'Rp ',number_format($tunjanganJabatan, 2, ',', '.'); ?></td>
                    <td><?= 'Rp ',number_format($tunjanganKeluarga, 2, ',', '.'); ?></td>
                    <td><?= 'Rp ',number_format($gajiKotor, 2, ',', '.'); ?></td>
                    <td><?= 'Rp ',number_format($zakat, 2, ',', '.'); ?></td>
                    <td><?= 'Rp ',number_format($takeHomePay, 2, ',', '.'); ?></td>
                </tr>  

        </tbody>

        </table>
        <?php } ?>
        
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>