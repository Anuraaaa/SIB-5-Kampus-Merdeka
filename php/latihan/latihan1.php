<?php
//belajar variabel dan tipe data
$namaMahasiswa = "Budi Santoso";
$umur = 20;
$berat_badan = 60.5;
$isMahasiswa = TRUE;
//mencetak data
echo 'Nama Mahasiswa: '.$namaMahasiswa;
echo '<br/>Umur: '.$umur.' tahun';
echo '<br/>Berat Badan: '.$berat_badan.' kg';
echo "<br/>Berat Badan: $berat_badan kg";
echo '<br/>Berat Badan: $berat_badan kg';
echo '<br/> Dia Mahasiswa? '.$isMahasiswa;
echo '<hr/>';
//variable konstanta
define('PHI',3.14); 
$jari2 = 15;
$luas = PHI * $jari2 * $jari2;
$keliling = 2 * PHI * $jari2;
?>
Nama Mahasiswa: <?= $namaMahasiswa ?>
<br/>Umur: <?= $umur ?> tahun
<br/>Berat Badan: <?= $berat_badan ?> kg
<br/>Dia Mahasiswa? <?= $isMahasiswa ?>
<br/>Nama file dan posisi folder: <?= $_SERVER['SCRIPT_FILENAME'] ?>
<br/>Document Root Folder ini: <?= $_SERVER['DOCUMENT_ROOT'] ?>
<hr/>
Luas lingkaran dengan jari2 <?= $jari2 ?> = <?= $luas ?>
<br/>Dan $keliling lingkarannya = <?= $keliling ?>