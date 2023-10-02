<?php
require_once 'Dosen.php';
require_once 'Mahasiswa.php';
//ciptakan object
$d1 = new Dosen('Budi','L','111','S.Kom., M.Kom.');
$d2 = new Dosen('Ani','P','112','S.T., M.T.');
$m1 = new Mahasiswa('Dedi','L',1,'TI');
$m2 = new Mahasiswa('Dini','P',3,'SI');

$data = [$d1,$d2,$m1,$m2];
foreach($data as $d){
    echo $d->cetak();
}