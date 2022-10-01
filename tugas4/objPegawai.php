<?php
require 'Pegawai.php';
//ciptakan object
$p1 = new Pegawai('001','Bagyo','Manager','Islam','Menikah');
$p2 = new Pegawai('002','Bagus','Asisten','kristen','Lajang');
$p3 = new Pegawai('003','Dono','Kepala Bagian','Islam','Menikah');
$p4 = new Pegawai('004','Arul','Staff','Islam','Lajang');
$p5 = new Pegawai('005','Rere','Manager','Islam','Menikah');
//use member class

// $leo->menabung(5000000);

// $neur->menarik(3000000);
// $salah->menarik(5000000);

echo '<h3 align="center">'.Pegawai::Data.'</h3>';
$p1->mencetak();
$p2->mencetak();
$p3->mencetak();
$p4->mencetak();
$p5->mencetak();
echo 'Jumlah Pegawai: '.Pegawai::$jml;