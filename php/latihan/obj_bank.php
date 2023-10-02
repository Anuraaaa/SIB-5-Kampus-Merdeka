<?php
//sertakan file classnya
require_once 'Bank.php';

//ciptakan object
$n1 = new Bank('001','Budi',500000);
$n2 = new Bank('002','Siti',700000);
$n3 = new Bank('003','Dedi',900000);
$n4 = new Bank('004','Dudi',800000);
//panggil fungsi
$n1->menabung(300000); $n3->menabung(100000);
$n2->menarik(400000); $n3->menarik(300000);

echo '<h3 align="center">'.Bank::BANK.'</h3>';
$n1->mencetak(); $n2->mencetak(); $n3->mencetak(); $n4->mencetak();
echo '<h3>Jumlah Nasabah: '.Bank::$jml.' Orang</h3>';

