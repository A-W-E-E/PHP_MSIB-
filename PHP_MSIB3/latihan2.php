Dokumen Root php saya ada di <?= $_SERVER['DOCUMENT_ROOT'] ?>
</br> File latihan2.php berada di <?= $_SERVER['SCRIPT_FILENAME'] ?>

<hr>
<?php
define('LEMBAGA','NF COMPUTER');
define('Phi', 3.14);
$jari2 = 15;
$luas = Phi * $jari2 * $jari2 ;
?>

Saya sedang belajar pemrogramman di <?= LEMBAGA ?>
<br> Luas Lingkaran dengan jari jari <?= $jari2 ?> cm = <?= $luas ?>