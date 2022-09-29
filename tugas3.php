<?php
//array scalar (1 dimensi)
$m1 = ['nim'=>10101,'nama'=>'bagas','nilai'=> 73];
$m2 = ['nim'=>10102,'nama'=>'agus','nilai'=> 52];
$m3 = ['nim'=>10103,'nama'=>'meyden','nilai'=> 86];
$m4 = ['nim'=>10104,'nama'=>'kyy','nilai'=> 30];
$m5 = ['nim'=>10105,'nama'=>'eko','nilai'=> 23];
$m6 = ['nim'=>10106,'nama'=>'doyok','nilai'=> 65];
$m7 = ['nim'=>10107,'nama'=>'ler','nilai'=> 77];
$m8 = ['nim'=>10108,'nama'=>'xinn','nilai'=> 59];
$m9 = ['nim'=>10109,'nama'=>'wann','nilai'=> 88];
$m10 = ['nim'=>10110,'nama'=>'mei','nilai'=> 41];

$ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade','Predikat'];

//array assosiative (> 1 dimensi)
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

// //aggregate function in array
$jumlah_mahasiswa = count($mahasiswa);
$jml_nilai = array_column($mahasiswa,'nilai');
$total_nilai = array_sum($jml_nilai);
$max_nilai = max($jml_nilai);
 $min_nilai = min($jml_nilai);
$rata2 = $total_nilai / $jumlah_mahasiswa;
 //keterangan
$keterangan = [
     'Jumlah Mahasiswa'=>$jumlah_mahasiswa,
//     'Total Kg'=>$total_kg,
     'Nilai Tertinggi'=>$max_nilai,
     'Nilai Terendah'=>$min_nilai,
     'Rata2 nilai mahasiswa'=>$rata2
];
 ?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas 3 Aditia W - Array</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <h3 class="text-center">Daftar Nilai Mahasiwa</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php
                    foreach($ar_judul as $jdl){
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($mahasiswa as $mhs){
                //rumus2
                // $bruto = $buah['harga']* $buah['jml'];  
                $ket = ($mhs['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';

                
                if($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = "A";
                else if($mhs['nilai'] >= 75 && $mhs['nilai'] <85 ) $grade = "B";
                else if($mhs['nilai'] >= 60 && $mhs['nilai'] <75 ) $grade = "C";
                else if($mhs['nilai'] >= 30 && $mhs['nilai'] <60 ) $grade = "D";
                else if($mhs['nilai'] >= 0 && $mhs['nilai'] <30 ) $grade = "E";
                else $grade = '';

                switch ($grade){
                    case 'A' : $predikat = 'Memuaskan' ;break;
                    case 'B' : $predikat = 'Bagus' ;break;
                    case 'C' : $predikat = 'Cukup' ;break;
                    case 'D' : $predikat = 'Kurang' ;break;
                    case 'E' : $predikat = 'Buruk' ;break;
                    default: $predikat = '';
                }

                // $hrg_diskon = $diskon * $bruto;
                // $netto = $bruto - $hrg_diskon;
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nilai'] ?></td>
                    <td><?= $ket ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($keterangan as $ket => $hasil) {
                ?>
                <tr>
                    <th colspan="7"><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>