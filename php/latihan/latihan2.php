<?php
$siswa = 'Budi Santoso';
$nilai = 75;
//ternary
$ket = ($nilai >= 60) ? 'Lulus' : 'Gagal';
//if multikondisi dengan syarat > 1
if($nilai >= 85 && $nilai <= 100) $grade = 'A';
else if($nilai >= 75 && $nilai < 85 ) $grade = 'B';
else if($nilai >= 60 && $nilai < 75 ) $grade = 'C';
else if($nilai >= 30 && $nilai < 60 ) $grade = 'D';
else if($nilai >= 0 && $nilai < 30 ) $grade = 'E';
else $grade = '';
//switch case
switch($grade){
	case 'A': $predikat = 'Memuaskan'; break;
	case 'B': $predikat = 'Bagus'; break;
	case 'C': $predikat = 'Cukup'; break;
	case 'D': $predikat = 'Kurang'; break;
	case 'E': $predikat = 'Buruk'; break;
	default: $predikat = ''; break;
}
?>
Nama Siswa: <?=  $siswa ?>
<br/>Nilai: <?= $nilai ?>
<br/>Keterangan: <?= $ket ?>
<br/>Grade: <?= $grade ?>
<br/>Predikat: <?= $predikat ?>